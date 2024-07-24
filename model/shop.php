
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
    function hienthisotrang($tongsp_nolimit){
        $sotrang=ceil($tongsp_nolimit/SO_SP_TRANG);
        $dssotrang="";
        for($i=1;$i<=$sotrang;$i++){
            $dssotrang.="<li class='page-item'><a class='page-link' href='#'>".$i."</a></li>";
            
        }
        return $dssotrang;
    }  
        
         
  


    // Load tất cả danh mục
    function get_danhmuc_all(){
       
        $sql = "SELECT * FROM danhmuc  WHERE 1 ORDER BY id DESC";
        return pdo_query_all($sql);

    }
    
?>