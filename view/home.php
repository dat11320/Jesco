
<div class="section ">
        <div class="hero-slider swiper-container slider-nav-style-1 slider-dot-style-1">
            <div class="swiper-wrapper">
                <!-- Single slider item -->
                <div class="hero-slide-item-2 slider-height swiper-slide d-flex bg-color1">
                    <div class="container align-self-center">
                        <div class="row">
                            <div class="col-xl-6 col-lg-5 col-md-5 col-sm-5 align-self-center sm-center-view">
                                <div class="hero-slide-content hero-slide-content-2 slider-animated-1">
                                    <span class="category">Sale 45% Off</span>
                                    <h2 class="title-1">Exclusive New<br> Offer 2021</h2>
                                    <a href="shop-left-sidebar.html" class="btn btn-lg btn-primary btn-hover-dark"> Shop
                                        Now <i class="fa fa-shopping-basket ml-15px" aria-hidden="true"></i></a>
                                </div>
                            </div>
                            <div
                                class="col-xl-6 col-lg-7 col-md-7 col-sm-7 d-flex justify-content-center position-relative">
                                <div class="show-case">
                                    <div class="hero-slide-image">
                                        <img src="assets/images/slider-image/slider-2-1.png" alt="" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Single slider item -->
                <div class="hero-slide-item-2 slider-height swiper-slide d-flex bg-color2">
                    <div class="container align-self-center">
                        <div class="row">
                            <div class="col-xl-6 col-lg-5 col-md-5 col-sm-5 align-self-center sm-center-view">
                                <div class="hero-slide-content hero-slide-content-2 slider-animated-1">
                                    <span class="category">Sale 45% Off</span>
                                    <h2 class="title-1">Exclusive New<br> Offer 2021</h2>
                                    <a href="shop-left-sidebar.html" class="btn btn-lg btn-primary btn-hover-dark"> Shop
                                        Now <i class="fa fa-shopping-basket ml-15px" aria-hidden="true"></i></a>
                                </div>
                            </div>
                            <div
                                class="col-xl-6 col-lg-7 col-md-7 col-sm-7 d-flex justify-content-center position-relative">
                                <div class="show-case">
                                    <div class="hero-slide-image">
                                        <img src="assets/images/slider-image/slider-2-2.png" alt="" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Add Pagination -->
            <div class="swiper-pagination swiper-pagination-white"></div>
            <!-- Add Arrows -->
            <div class="swiper-buttons">
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
        </div>
    </div>

    <!-- Hero/Intro Slider End -->

    <!-- Feature Area Srart -->
    <div class="feature-area  mt-n-65px">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <!-- single item -->
                    <div class="single-feature">
                        <div class="feature-icon">
                            <img src="assets/images/icons/1.png" alt="">
                        </div>
                        <div class="feature-content">
                            <h4 class="title">Free Shipping</h4>
                            <span class="sub-title">Capped at $39 per order</span>
                        </div>
                    </div>
                </div>
                <!-- single item -->
                <div class="col-lg-4 col-md-6 mb-md-30px mb-lm-30px mt-lm-30px">
                    <div class="single-feature">
                        <div class="feature-icon">
                            <img src="assets/images/icons/2.png" alt="">
                        </div>
                        <div class="feature-content">
                            <h4 class="title">Card Payments</h4>
                            <span class="sub-title">12 Months Installments</span>
                        </div>
                    </div>
                </div>
                <!-- single item -->
                <div class="col-lg-4 col-md-6">
                    <div class="single-feature">
                        <div class="feature-icon">
                            <img src="assets/images/icons/3.png" alt="">
                        </div>
                        <div class="feature-content">
                            <h4 class="title">Easy Returns</h4>
                            <span class="sub-title">Shop With Confidence</span>
                        </div>
                    </div>
                    <!-- single item -->
                </div>
            </div>
        </div>
    </div>
    <!-- Feature Area End -->
<?php
$txt_html_spmoi="";
foreach ($spmoi as $item){
   extract($item);
   $img= DIR_UPLOAD_IMG.$hinh;
   $txt_html_spmoi.='
               
           <div class="col-lg-4 col-xl-3 col-md-6 col-sm-6 col-xs-6 mb-30px" data-aos="fade-up"
                                    data-aos-delay="600">
                                    <!-- Single Prodect -->
                                    <div class="product">
                                        <div class="thumb">
                                            <a href="single-product.html" class="image">
                                                <img src="'.$img.'" alt="Product" />
                                                
                                            </a>
                                            <span class="badges">
                                                <span class="sale">-7%</span>
                                            </span>
                                            <div class="actions">
                                                <a href="wishlist.html" class="action wishlist" title="Wishlist"><i
                                                        class="pe-7s-like"></i></a>
                                                <a href="#" class="action quickview" data-link-action="quickview"
                                                    title="Quick view" data-bs-toggle="modal"
                                                    data-bs-target="#exampleModal"><i class="pe-7s-search"></i></a>
                                                <a href="compare.html" class="action compare" title="Compare"><i
                                                        class="pe-7s-refresh-2"></i></a>
                                            </div>
                                            <button title="Add To Cart" class=" add-to-cart">Add
                                                To Cart</button>
                                        </div>
                                        <div class="content">
                                            <span class="ratings">
                                                <span class="rating-wrap">
                                                    <span class="star" style="width: 90%"></span>
                                                </span>
                                                <span class="rating-num">( 4.5 Review )</span>
                                            </span>
                                            <h5 class="title"><a href="single-product.html">'.$ten_sp.'
                                                    </a></h5>
                                            <span class="price">
                                                <span class="new">'.$gia.'</span>
                                                <span class="old">'.$giam_gia.'</span>
                                            </span>
                                        </div>
                                    </div>
                                </div> 
        ';
}
$txt_html_sp_bestseller="";
foreach ( $sp_bestseller as $item){
   extract($item);
   $img= DIR_UPLOAD_IMG.$hinh;
   $txt_html_sp_bestseller.='
               
           <div class="col-lg-4 col-xl-3 col-md-6 col-sm-6 col-xs-6 mb-30px" data-aos="fade-up"
                                    data-aos-delay="600">
                                    <!-- Single Prodect -->
                                    <div class="product">
                                        <div class="thumb">
                                            <a href="single-product.html" class="image">
                                                <img src="'.$img.'" alt="Product" />
                                                
                                            </a>
                                            <span class="badges">
                                                <span class="sale">-7%</span>
                                            </span>
                                            <div class="actions">
                                                <a href="wishlist.html" class="action wishlist" title="Wishlist"><i
                                                        class="pe-7s-like"></i></a>
                                                <a href="#" class="action quickview" data-link-action="quickview"
                                                    title="Quick view" data-bs-toggle="modal"
                                                    data-bs-target="#exampleModal"><i class="pe-7s-search"></i></a>
                                                <a href="compare.html" class="action compare" title="Compare"><i
                                                        class="pe-7s-refresh-2"></i></a>
                                            </div>
                                            <button title="Add To Cart" class=" add-to-cart">Add
                                                To Cart</button>
                                        </div>
                                        <div class="content">
                                            <span class="ratings">
                                                <span class="rating-wrap">
                                                    <span class="star" style="width: 90%"></span>
                                                </span>
                                                <span class="rating-num">( 4.5 Review )</span>
                                            </span>
                                            <h5 class="title"><a href="single-product.html">'.$ten_sp.'
                                                    </a></h5>
                                            <span class="price">
                                                <span class="new">'.$gia.'</span>
                                                <span class="old">'.$giam_gia.'</span>
                                            </span>
                                        </div>
                                    </div>
                                </div> 
        ';
}

$txt_html_sp_hot="";
foreach ( $sp_hot as $item){
   extract($item);
   $img= DIR_UPLOAD_IMG.$hinh;
   $txt_html_sp_hot.='
               
           <div class="col-lg-4 col-xl-3 col-md-6 col-sm-6 col-xs-6 mb-30px" data-aos="fade-up"
                                    data-aos-delay="600">
                                    <!-- Single Prodect -->
                                    <div class="product">
                                        <div class="thumb">
                                            <a href="single-product.html" class="image">
                                                <img src="'.$img.'" alt="Product" />
                                                
                                            </a>
                                            <span class="badges">
                                                <span class="sale">-7%</span>
                                            </span>
                                            <div class="actions">
                                                <a href="wishlist.html" class="action wishlist" title="Wishlist"><i
                                                        class="pe-7s-like"></i></a>
                                                <a href="#" class="action quickview" data-link-action="quickview"
                                                    title="Quick view" data-bs-toggle="modal"
                                                    data-bs-target="#exampleModal"><i class="pe-7s-search"></i></a>
                                                <a href="compare.html" class="action compare" title="Compare"><i
                                                        class="pe-7s-refresh-2"></i></a>
                                            </div>
                                            <button title="Add To Cart" class=" add-to-cart">Add
                                                To Cart</button>
                                        </div>
                                        <div class="content">
                                            <span class="ratings">
                                                <span class="rating-wrap">
                                                    <span class="star" style="width: 90%"></span>
                                                </span>
                                                <span class="rating-num">( 4.5 Review )</span>
                                            </span>
                                            <h5 class="title"><a href="single-product.html">'.$ten_sp.'
                                                    </a></h5>
                                            <span class="price">
                                                <span class="new">'.$gia.'</span>
                                                <span class="old">'.$giam_gia.'</span>
                                            </span>
                                        </div>
                                    </div>
                                </div> 
        ';
}
?>
    <!-- Product Area Start -->
    <div class="product-area pt-100px pb-100px">
        <div class="container">
            <!-- Section Title & Tab Start -->
            <div class="row">
                <!-- Section Title Start -->
                <div class="col-12">
                    <div class="section-title text-center mb-0">
                        <h2 class="title">#Sản phẩm mới</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="tab-content mb-30px0px">
                        <!-- 1st tab start -->
                        <div class="tab-pane fade show active" id="tab-product--all">
                            <div class="row">  
                            <?=$txt_html_spmoi;?>
                            </div>
                            
                        </div>
                        
                    </div>
                    <a href="index.php?page=sanpham" class="btn btn-lg btn-primary btn-hover-dark m-auto mb-3"> Xem thêm <i
                            class="fa fa-arrow-right ml-15px" aria-hidden="true"></i></a>
                </div>
            </div>
            <div class="row">
                <!-- Section Title Start -->
                <div class="col-12">
                    <div class="section-title text-center mb-0">
                        <h2 class="title">#Sản phẩm bestseller</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="tab-content mb-30px0px">
                        <!-- 1st tab start -->
                        <div class="tab-pane fade show active" id="tab-product--all">
                            <div class="row">  
                           1
                            </div>
                            
                        </div>
                        
                    </div>
                    <a href="index.php?page=sanpham" class="btn btn-lg btn-primary btn-hover-dark m-auto mb-3"> Xem thêm <i
                            class="fa fa-arrow-right ml-15px" aria-hidden="true"></i></a>
                </div>
            </div>
            <div class="row">
                <!-- Section Title Start -->
                <div class="col-12">
                    <div class="section-title text-center mb-0">
                        <h2 class="title">#Sản phẩm hot</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="tab-content mb-30px0px">
                        <!-- 1st tab start -->
                        <div class="tab-pane fade show active" id="tab-product--all">
                            <div class="row">  
                            <?=$txt_html_sp_hot;?>
                            </div>
                            
                        </div>
                        
                    </div>
                    <a href="index.php?page=sanpham" class="btn btn-lg btn-primary btn-hover-dark m-auto"> Xem thêm <i
                            class="fa fa-arrow-right ml-15px" aria-hidden="true"></i></a>
                </div>
            </div>
        </div>
    </div>

