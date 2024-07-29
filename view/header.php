<head>
    <meta charset="UTF-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <meta name="robots" content="index, follow" />
    <title>Jesco - Fashoin eCommerce HTML Template</title>
     <!-- <title><?=$tieudetrang?></title> -->
    <meta name="description" content="Jesco - Fashoin eCommerce HTML Template" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Add site Favicon -->
    <link rel="shortcut icon" href="assets/images/favicon/favicon.ico" type="image/png">

    <!-- vendor css (Icon Font) -->
    <link rel="stylesheet" href="assets/css/vendor/bootstrap.bundle.min.css" />
    <link rel="stylesheet" href="assets/css/vendor/pe-icon-7-stroke.css" />
    <link rel="stylesheet" href="assets/css/vendor/font.awesome.css" />

    <!-- plugins css (All Plugins Files) -->
    <link rel="stylesheet" href="assets/css/plugins/animate.css" />
    <link rel="stylesheet" href="assets/css/plugins/swiper-bundle.min.css" />
    <link rel="stylesheet" href="assets/css/plugins/jquery-ui.min.css" />
    <link rel="stylesheet" href="assets/css/plugins/nice-select.css" />
    <link rel="stylesheet" href="assets/css/plugins/venobox.css" />
    <link rel="stylesheet" href="assets/css/style.css" />

</head>
<header>
        <div class="header-main sticky-nav ">
            <div class="container position-relative">
                <div class="row">
                    <div class="col-auto align-self-center">
                        <div class="header-logo">
                            <a href="index.php"><img src="assets/images/logo/logo.png" alt="Site Logo" /></a>
                        </div>
                    </div>
                    <div class="col align-self-center d-none d-lg-block">
                        <div class="main-menu">
                            <ul>
                                <li class="dropdown"><a href="index.php">Trang Chủ </a>
                                    
                                </li>
                                <li class="dropdown position-static"><a href="index.php?page=sanpham">Sản Phẩm</a>
                                    
                                </li>
                                <li class="dropdown "><a href="#">Blogs </a>
                                    <ul class="sub-menu">
                                        
                                       
                                       
                                    </ul>
                                </li>
                                <li><a href="index.php?page=about">Về Chúng Tôi</a></li>
                                <li><a href="index.php?page=lienhe">Liên hệ</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- Header Action Start -->
                    <div class="col col-lg-auto align-self-center pl-0">
                        <div class="header-actions">
                            <a href="index.php?page=dangnhap.php" class=" login-btn" 
                                ></a>
                                <div class="header-actions">
                            <?php 
                            if(isset($_SESSION['iduser'])){
                                echo '<a href="index.php?page=dangnhap" class=" login-btn" 
                                >'.$_SESSION['iduser'].'</a>
                            ';
                            echo '<a href="index.php?page=logout" class=" login-btn" 
                                >thoat</a>
                            ';
                            }else{
                                echo'<a href="index.php?page=dangnhap" class=" login-btn" 
                                >Đăng Ký / Đăng Nhập</a>
                            <!-- Single Wedge Start -->
                            ';
                            }
                            ?>
                            <a href="#" class="header-action-btn" data-bs-toggle="modal" data-bs-target="#searchActive">
                                <i class="pe-7s-search"></i>
                            </a>
                            
                            <!-- Single Wedge End -->
                            <!-- Single Wedge Start -->
                            
                            <!-- Single Wedge End -->
                            <a href="index.php?page=cart"
                            <a href="wishlist.html"
                                class="header-action-btn header-action-btn-cart  pr-0">
                                <i class="pe-7s-shopbag"></i>
                                <span class="header-action-num">01</span>
                                
                            </a>
                            <a href="cart.html"
                                class="header-action-btn header-action-btn-menu offcanvas-toggle d-lg-none">
                                <i class="pe-7s-menu"></i>
                            </a>
                        </div>
                        <!-- Header Action End -->
                    </div>
                            <!-- Single Wedge Start -->
                            
                            <!-- Single Wedge End -->
                            <!-- Single Wedge Start -->
                            
                            <!-- Single Wedge End -->
                            
                            <a href="cart.html"
                                class="header-action-btn header-action-btn-menu offcanvas-toggle d-lg-none">
                                <i class="pe-7s-menu"></i>
                            </a>
                        </div>
                        <!-- Header Action End -->
                    </div>
                </div>
            </div>
    </header>



   