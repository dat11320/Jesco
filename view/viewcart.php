<?php
    if($_SESSION['giohang']!=""){
        $html_view_cart="";
        $i=0;
        foreach ($_SESSION['giohang'] as $item){
            extract($item);
            $html_view_cart.='      <tr>
                                        <td class="product-thumbnail">
                                            <a href="#"><img class="img-responsive ml-15px" src="./assets/upload/'.$hinh.'" alt="" /></a>
                                        </td>
                                        <td class="product-name"><a href="#">'.$tensp.'</a></td>
                                        <td class="product-price-cart"><span class="amount">'.$gia.'</span></td>
                                        <td class="product-quantity">'.$soluong.' </td>
                                        <td class="product-subtotal">'.$thanhtien.'</td>
                                        <td class="product-wishlist-cart">
                                            <a href="index.php?page=viewcart&iddel='.$i.'">Xóa</a>
                                        </td>
                                    </tr>
            
            ';
            $i++;
        }
        }else{
            $html_view_cart="Giỏ hàng của bạn trống";
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
                        <li class="breadcrumb-item active">Giỏ Hàng</li>
                    </ul>
                    <!-- breadcrumb-list end -->
                </div>
            </div>
        </div>
    </div>

    <!-- breadcrumb-area end -->

 
    <!-- Wishlist Area Start -->
    <div class="cart-main-area pt-100px pb-100px">
        <div class="container">
            <h3 class="cart-page-title">Giỏ hàng của bạn!</h3>
            
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                    <form action="#">
                        <div class="table-content table-responsive cart-table-content">
                            
                            <table>
                                <thead>
                                    <tr>
                                        <th>Image</th>
                                        <th>Product Name</th>
                                        <th>Until Price</th>
                                        <th>Qty</th>
                                        <th>Subtotal</th>
                                        <th>Add To Cart</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                
                    
                                    
                                    <!-- <tr>
                                        <td class="product-thumbnail">
                                            <a href="#"><img class="img-responsive ml-15px" src="assets/images/product-image/1.jpg" alt="" /></a>
                                        </td>
                                        <td class="product-name"><a href="#">Product Name</a></td>
                                        <td class="product-price-cart"><span class="amount">$60.00</span></td>
                                        <td class="product-quantity">
                                            <div class="cart-plus-minus">
                                                <input class="cart-plus-minus-box" type="text" name="qtybutton" value="1" />
                                            </div>
                                        </td>
                                        <td class="product-subtotal">$70.00</td>
                                        <td class="product-wishlist-cart">
                                            <a href="#">add to cart</a>
                                        </td>
                                    </tr> -->
                                    <?=$html_view_cart?>
                                   
                                </tbody>
                            </table>
                            
                        </div>
                    </form>
                    <a href="index.php?page=viewcart&delall=1" class="btn btn-lg btn-primary btn-hover-dark m-auto mb-3"> Xóa tất cả </a>
                </div>
            </div>
        </div>
    </div>