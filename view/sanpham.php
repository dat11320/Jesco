<?php
$html_showdssp = '';
foreach ($dssp_all as $item) {
    extract($item);
    $img= DIR_UPLOAD_IMG.$hinh;
    $html_showdssp .= '<div class="col-lg-4 col-md-6 col-sm-6 col-xs-6 mb-30px" data-aos="fade-up" data-aos-delay="200">
                                            <!-- Single Prodect -->
                                            <div class="product">
                                                <div class="thumb">
                                                    <a href="single-product.html" class="image">
                                                        <img src="'.$img.'" alt="Product" />
                                                        <img class="hover-image" src="'.$img.'" alt="Product" />
                                                    </a>
                                                    <span class="badges">
                                                        <span class="sale">sale</span>
                                                        <span class="new">new</span>
                                                    </span>
                                                    <div class="actions">
                                                        <a href="wishlist.html" class="action wishlist" title="Wishlist"><i class="pe-7s-like"></i></a>
                                                        <a href="#" class="action quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="pe-7s-search"></i></a>
                                                        <a href="compare.html" class="action compare" title="Compare"><i class="pe-7s-refresh-2"></i></a>
                                                    </div>
                                                    <form method="post" action="index.php?page=cart" > 
                                                        <input type="hidden" name="id" value="'.$id.'">
                                                        <input type="hidden" name="hinh" value="'.$hinh.'">
                                                        <input type="hidden" name="tensp" value="'.$ten_sp.'">
                                                        <input type="hidden" name="gia" value="'.$gia.'">
                                                        <input type="hidden" name="soluong" value="1">

                                                        <button name="btncart" title="Add To Cart" class=" add-to-cart">Add
                                                            To Cart</button>
                                                    </form>
                                                </div>
                                                <div class="content">
                                                    <span class="ratings">
                                                        <span class="rating-wrap">
                                                            <span class="star" style="width: 100%"></span>
                                                        </span>
                                                        <span class="rating-num">( '.$so_luot_xem.' )</span>
                                                    </span>
                                                    <h5 class="title"><a href="single-product.html">'.$ten_sp.'
                                                        </a>
                                                    </h5>
                                                    <span class="price">
                                                        <span class="new">'.$gia.'đ</span>
                                                        <del>'.$giam_gia.'</del>
                                                        
                                                    </span>
                                                </div>
                                          </div>
                                        </div>';
}
$html_dsdm_all="";
foreach($dsdm_all as $item){
    extract($item);
    $html_dsdm_all.='
    <li><a href="index.php?page=sanpham&iddm='.$id.'" class="">'.$ten_loai.'<span></span> </a></li>
    
    ';
}

?>

<div class="breadcrumb-area">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-12 text-center">
                <h2 class="breadcrumb-title"><?=$tieudetrang?></h2>
                <!-- breadcrumb-list start -->
                <ul class="breadcrumb-list">
                    <li class="breadcrumb-item"><a href="index.php">Trang Chủ</a></li>
                    <li class="breadcrumb-item active"><?=$tieudetrang?></li>
                </ul>
                <!-- breadcrumb-list end -->
            </div>
        </div>
    </div>
</div>
<!-- Shop Page Start  -->
<div class="shop-category-area pt-100px pb-100px">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 order-lg-last col-md-12 order-md-first">
                <!-- Shop Top Area Start -->
                <div class="shop-top-bar d-flex">
                    <!-- Left Side start -->
                    <p><span>6</span> sản phẩm của <span>30</span></p>
                    <!-- Left Side End -->
                    <div class="shop-tab nav">
                        <a class="active" href="#shop-grid" data-bs-toggle="tab">
                            <i class="fa fa-th" aria-hidden="true"></i>
                        </a>
                        <!-- <a href="#shop-list" data-bs-toggle="tab">
                            <i class="fa fa-list" aria-hidden="true"></i>
                        </a> -->
                    </div>
                    <!-- Right Side Start -->
                    <div class="select-shoing-wrap d-flex align-items-center">
                        <div class="shot-product">
                            <p>Tìm kiếm -</p>
                        </div>
                        <div class="shop-select">
                            <select class="shop-sort">
                                <option data-display="">Hiển thị kết quả theo</option>
                                <option value="1"> Giá từ thấp đến cao</option>
                                <option value="2"> Giá từ cao đến thấp</option>
                            </select>

                        </div>
                    </div>
                    <!-- Right Side End -->
                </div>
                <!-- Shop Top Area End -->

                <!-- Shop Bottom Area Start -->
                <div class="shop-bottom-area">

                    <!-- Tab Content Area Start -->
                    <div class="row">
                        <div class="col">
                            <div class="tab-content">
                                <div class="tab-pane fade show active" id="shop-grid">
                                    <div class="row mb-n-30px">
                                    <?= $html_showdssp ?>
                                    
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div><br>
                    


                    <!-- Tab Content Area End -->

                    <!--  Pagination Area Start -->

                   <!-- Hiển thị số trang -->
                    <div class="row">
                        
                        <nav aria-label="Page navigation example">
                            <ul class="pagination justify-content-center">
                                <li class="page-item"><a class="page-link" href="#"><<</a></li>
                                    <?=$hienthisotrang?>
                                <li class="page-item"><a class="page-link" href="#">>></a></li>
                            </ul>
                        </nav>
        
                    </div>
                </div>
                
                <!-- Shop Bottom Area End -->
            </div>
            <!-- Sidebar Area Start -->
            <div class="col-lg-3 order-lg-first col-md-12 order-md-last mb-md-60px mb-lm-60px">
                <div class="shop-sidebar-wrap">
                    <!-- Sidebar single item -->
                    <div class="sidebar-widget-search">
                        <form id="widgets-searchbox" method="POST">
                            <input class="input-field" name="kyw" type="text" placeholder="Tìm kiếm tại đây...">
                            <button class="widgets-searchbox-btn" type="submit" name="timkiem">
                                <i class="fa fa-search"></i>
                            </button>
                        </form>
                    </div>
                    <!-- Sidebar single item -->

                    <!-- Sidebar single item -->
                    <div class="sidebar-widget">
                        <h4 class="sidebar-title">DANH MỤC</h4>
                        <div class="sidebar-widget-category">
                            
                            <ul>
                                <li><a href="index.php?page=sanpham" class="selected m-0">TẤT CẢ DANH MỤC <span></span> </a></li>
                                 <?=$html_dsdm_all?>
                                
                            </ul>
                        </div>
                    </div>
                    <!-- Sidebar single item -->


                </div>
            </div>
        </div>
    </div>
</div>