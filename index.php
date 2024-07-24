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
    $tieudetrang = "Sản phẩm";
    $dsdm_all = get_danhmuc_all();
    
    if(isset($_GET['iddm'])&&(is_numeric($_GET['iddm']))&&($_GET['iddm']>0)){
        $iddm= $_GET['iddm'];
    }else{
        $iddm =0;
    }

    // search
    if(isset($_POST['timkiem'])&&($_POST['timkiem'])){
        $kyw = $_POST['kyw'];
    }else{
        $kyw = "";
    }
        

    $dssp_all = get_dssp_all($kyw,$iddm, 6);

    $tongsp_nolimit  = get_dssp_all($kyw,$iddm, 0);
    $hienthisotrang= hienthisotrang(count($tongsp_nolimit) );

    include_once 'view/sanpham.php';
    break; 
    case 'dmsanphammoi':
        // $spmoi=get_all_product(0, 8,"");    
        include_once 'view/sanpham.php';
        break;
            
    case 'chitietsp':
        include_once 'view/chitietsp.php';
    break;
    
    case 'cart':
        $tieudetrang = "Giỏ hàng";
    
        include_once 'view/cart.php';
          break;
    case 'dangnhap':
        include_once 'view/dangnhap.php';
        break;
    case 'lienhe':
            include_once 'view/lienhe.php';
        break;
    case 'about':
        include_once 'view/about.php';
        break;
        default: 
        include_once 'view/home.php';
    break;
    }
}
include_once './view/footer.php';
?>