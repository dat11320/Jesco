<?php
session_start();
ob_start();
include_once './model/user.php';
include_once './model/conect.php';
include_once './model/global.php';
include_once './model/product.php';
include_once './model/shop.php';
include_once './view/header.php';

if(!isset($_SESSION['giohang'])){
    $_SESSION['giohang']=[];
}

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
    }
        $kyw = "";
        
    $start = 0;
    if (isset($_GET['pg'])) {
        $start = ($_GET['pg'] - 1) * 6;
    }
    $dssp_all = get_dssp_phantrang($kyw, $iddm, $start , 6);

    $tongsp_nolimit  = get_dssp_all($kyw,$iddm, 0);
    $hienthisotrang= hienthisotrang(count($tongsp_nolimit),$iddm);

    include_once 'view/sanpham.php';
    break; 
    case 'dmsanphammoi':
        // $spmoi=get_all_product(0, 8,"");    
        include_once 'view/sanpham.php';
        break;
            
    case 'chitietsp':
        include_once 'view/chitietsp.php';
    break;
    

    case 'viewcart':
        $tieudetrang = "Giỏ hàng";
        if(isset($_GET['iddel'])&&($_GET['iddel']>=0)){
            array_splice($_SESSION['giohang'],$_GET['iddel'],1);
            header('location: index.php?page=viewcart');

        }
        if(isset($_GET['delall'])&&($_GET['delall']==1)){
            $_SESSION['giohang']=[];
            header('location: index.php?page=viewcart');

        }
        include_once 'view/viewcart.php';
        break;
    case 'cart':
        $tieudetrang = "Giỏ hàng";
        if (isset($_POST['btncart'])){
            $id = $_POST['id'];
            $tensp = $_POST['tensp'];
            $hinh = $_POST['hinh'];
            $gia = $_POST['gia'];
            $soluong = $_POST['soluong'];
            $thanhtien= $gia*$soluong;

        $sp =[
            'id'=>$id,
            'tensp'=>$tensp,
            'hinh'=>$hinh,
            'gia'=>$gia,
            'soluong'=>$soluong,
            'thanhtien'=>$thanhtien
        ];
        array_push($_SESSION['giohang'],$sp);
        header('location: index.php?page=viewcart');

        }
        include_once 'view/cart.php';
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
    case 'dangnhap':
        if(isset($_POST['btn-dangky'])){
           $username=$_POST['username'];
           $email=$_POST['email'];
           $password=$_POST['password'];
           $hoten=$_POST['hoten'];
    //insert den db
    $iduser=insert_user($username,$password,$email,$hoten);
    //dang nhap
    //ghi nhan user vao session
    $_SESSION['ten']=$hoten;
    //chuyen den trang gi do khi thanh cong
    header('location: index.php');
        }
        include_once 'view/dangnhap.php';
        break;
        case 'logout':
            if(isset($_SESSION['ten'])){
                unset($_SESSION['ten']);
                header('location: index.php');
            }
            break;
    }
}
include_once './view/footer.php';
// skjfsdakkjshkjfsj
?>