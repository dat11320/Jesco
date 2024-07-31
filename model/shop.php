
<?php
    include_once './model/conect.php';  
    function get_dssp_all($kyw,$iddm,$limit){
        $sql = "SELECT * FROM sanpham WHERE 1";
        if($iddm>0){
            $sql .= " AND id_catalog=".$iddm;
        }
        if($kyw!=""){
            $sql .= " AND ten_sp like '%".$kyw."%'";
        }
        if($limit>0){
            $sql .= " ORDER BY id DESC LIMIT 0,".$limit;
        }else{
            $sql .= " ORDER BY id DESC";

        }
        return pdo_query_all($sql);  
    }

    function get_dssp_phantrang($keyword, $categoryId, $start , $limit){
        $sql = "SELECT  *,sp.id, dm.ten_loai FROM sanpham sp INNER JOIN danhmuc dm ON sp.id_catalog = dm.id WHERE 1";
    
        if($categoryId > 0){     
                $sql .=" AND sp.id_catalog=".$categoryId;
        }
        
        if($keyword != ""){
            $sql .=" AND sp.ten_sp like '%".$keyword."%'";
        }
    
        if ($limit > 0) {
            $sql .= " ORDER BY sp.id DESC LIMIT ".$start.", ".$limit;
        }
    
        // $sql .= " ORDER BY sp.id DESC LIMIT ".$limit;
        // 1-1 * 11 -> 0
        // 2-1 * 11 -> 11
        // 3-1 * 11 -> 22
        return pdo_query_all($sql);
    }

    
    function hienthisotrang($tongsp_nolimit,$categoryId){
        $sotrang=ceil($tongsp_nolimit/SO_SP_TRANG);
        $dssotrang="";
        if($categoryId == 0){
            for($i=1;$i<=$sotrang;$i++){
                $dssotrang.="<li class='page-item'><a class='page-link' href='index.php?page=sanpham&pg=".$i."'>".$i."</a></li>";
                
            }
        }else{
            for($i=1;$i<=$sotrang;$i++){
                $dssotrang.="<li class='page-item'><a class='page-link' href='index.php?page=sanpham&iddm=".$categoryId."&pg=".$i."'>".$i."</a></li>";
                
            }    
        }
        
        return $dssotrang;
    }  
        
         
  


    // Load tất cả danh mục
    function get_danhmuc_all(){
       
        $sql = "SELECT * FROM danhmuc  WHERE 1 ORDER BY id DESC";
        return pdo_query_all($sql);

    }
    
?>