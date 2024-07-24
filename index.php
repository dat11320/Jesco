<?php
include_once './model/conect.php';
include_once './model/global.php';
include_once './model/product.php';
include_once './model/shop.php';
include_once './view/header.php';

if(!isset($_GET['page'])){
    $spmoi=get_all_product(0, 8,"");
    $sp_bestseller=get_all_product_bestseller(8);
    $sp_hot=get_all_product_hot(8);
    
    include_once 'view/home.php';
}
else{
    $page=$_GET['page'];
switch($page){

    case 'sanpham':
        $status="";
                if(isset($_GET['id'])&&($_GET['id']==101)){
                    $status="aopolo";
                }
        $tieudetrang = "Sản phẩm";
        $dssp_all = get_dssp_all(0 , 8 , $status);
        $dsdm_all = get_danhmuc_all();
        include_once 'view/sanpham.php';
        break; 
        default:
        
            include_once 'view/home.php';
            break;
case 'chitietsp':
    include_once 'view/chitietsp.php';
break;
case 'cart':
    include_once 'view/cart.php';
      break;
case 'dangnhap':
    include_once 'view/dangnhap.php';
    break;
}
}
include_once './view/footer.php';

?>

