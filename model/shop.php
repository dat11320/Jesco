
<?php
    include_once './model/conect.php';  
    function get_dssp_all($cate, $limit, $status){
        $sql = "SELECT * FROM sanpham  WHERE 1 ORDER BY id DESC";
        if ($cate>0) {
            $sql .= " AND MaDanhMuc= ".$cate;
        }
        if ($status=="aopolo") {
            $sql .= " AND id = 101";
        }
        if ($limit>0) {
            $sql .= " limit 0,".$limit;
        }
        return pdo_query_all($sql);
        return pdo_query_all($sql);
    }


    // Load tất cả danh mục
    function get_danhmuc_all(){
       
        $sql = "SELECT * FROM danhmuc  WHERE 1 ORDER BY id DESC";
        return pdo_query_all($sql);


    }
    
?>