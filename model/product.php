
<?php
function get_all_product_bestseller($limit) {
    $sql = "SELECT * FROM sanpham";
    $sql .= " ORDER BY gia DESC";
    if ($limit>0) {
        $sql .= " limit 0,".$limit;
    }
    return pdo_query_all($sql);
}
function get_all_product_hot($limit) {
    $sql = "SELECT * FROM sanpham WHERE dac_biet=1";
    $sql .= " ORDER BY id DESC";
    if ($limit>0) {
        $sql .= " limit 0,".$limit;
    }
    return pdo_query_all($sql);
}
function get_all_product($cate, $limit, $status) {
    $sql = "SELECT * FROM sanpham WHERE 1";
    if ($cate>0) {
        $sql .= " AND MaDanhMuc= ".$cate;
    }
    if ($status=="hot") {
        $sql .= " AND hot= 1";
    }


    $best=""; $sales="";
    if($status=="bestseller"){
        $best=" sold ASC,";
    }
    if($status=="sales"){
        $sales= " GiaKhuyenMai ASC," ;
    }

    $sql .= " ORDER BY ".$best.$sales." id DESC";
    if ($limit>0) {
        $sql .= " limit 0,".$limit;
    }
    return pdo_query_all($sql);
}

function get_one_product($id) {
    $sql = 'SELECT * FROM sanpham WHERE id='.$id;

    return pdo_query_one($sql);
}

function get_all_product_giagiamdan($limit){
 $sql = 'SELECT * FROM sanpham ORDER BY gia DESC';
 if ($limit>0) {
    $sql .= " limit 0,".$limit;
}return get_all_product_giagiamdan($limit);
}