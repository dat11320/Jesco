<div class="breadcrumb-area">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-12 text-center">
                    <h2 class="breadcrumb-title">Đăng Nhập</h2>
                    <!-- breadcrumb-list start -->
                    <ul class="breadcrumb-list">
                        <li class="breadcrumb-item"><a href="index.html">Trang Chủ</a></li>
                        <li class="breadcrumb-item active">Đăng Nhập</li>
                    </ul>
                    <!-- breadcrumb-list end -->
                </div>
            </div>
        </div>
    </div>

    <!-- breadcrumb-area end -->

    <!-- login area start -->
    <div class="login-register-area pt-100px pb-100px">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-md-12 ml-auto mr-auto">
                    <div class="login-register-wrapper">
                        <div class="login-register-tab-list nav">
                            <a class="active" data-bs-toggle="tab" href="#lg1">
                                <h4>Đăng nhập</h4>
                            </a>
                            <a data-bs-toggle="tab" href="#lg2">
                                <h4>Đăng ký</h4>
                            </a>
                        </div>
                        <div class="tab-content">
                            <div id="lg1" class="tab-pane active">
                                <div class="login-form-container">
                                    <div class="login-register-form">
                                        <form action="" method="post">
                                            <input type="text" name="user-name" placeholder="Tên đăng nhập" />
                                            <input type="password" name="user-password" placeholder="Mật khẩu" />
                                            <div class="button-box">
                                                <div class="login-toggle-btn">
                                                    <input type="checkbox" />
                                                    <a class="flote-none" href="javascript:void(0)"> Ghi nhớ</a>
                                                    <a href="#">Quên mật khẩu?</a>
                                                </div>
                                                <button type="submit"><span>Đăng nhập</span></button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div id="lg2" class="tab-pane">
                                <div class="login-form-container">
                                    <div class="login-register-form">
                                        <form action="index.php?page=dangnhap" method="post">
                                            <input type="text" name="username" placeholder="Tên đăng nhập" id="username" require/>
                                            <input name="email" placeholder="Email" type="email" id="email" require />
                                            <input type="text" name="hoten" placeholder="Họ tên" type="hoten" id="hoten" require />
                                            <input type="password" name="password" placeholder="Mật khẩu" id="password" require/>
                                            <input name="password-rp"  placeholder="Nhập lại mật khẩu" type="password" id="passpord-rp" require/>
                                            
                                            <div class="button-box">
                                                <button name="btn-dangky" type="submit"><span>Đăng ký</span></button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>