<?php 
include 'handling/user/register.php'; 
include 'handling/user/login.php';
//lấy tất cả văn bản / mã / đánh dấu tồn tại trong tệp được chỉ định và sao chép nó vào tệp sử dụng câu lệnh include.
?>
<!doctype html>
<html class="no-js" lang="en">

<head>
    <!-- Basic page needs
        ============================================ -->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Account</title>
    <link rel="icon" href="images/Letter-F-icon-1.png">
    <meta name="description" content="">
    <!-- Mobile specific metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
    <!-- font awesome -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <!-- carousel CSS  -->
    <link rel="stylesheet" href="css/owl.carousel.css">
    <!-- carousel Theme CSS  -->
    <link rel="stylesheet" href="css/owl.my_theme.css">
    <!-- carousel transitions CSS  -->
    <link rel="stylesheet" href="css/owl.transitions.css">
    <!-- nivo slider slider css -->
    <link rel="stylesheet" href="css/nivo-slider.css">
    <!-- animate css -->
    <link rel="stylesheet" href="css/animate.css">
    <!-- Price jquery-ui  -->
    <link rel="stylesheet" href="css/jquery-ui.css">
    <!-- fancy-box theme -->
    <link rel="stylesheet" href="fancy-box/jquery.fancybox.css">
    <!-- normalizer  -->
    <link rel="stylesheet" href="css/normalize.css">
    <!-- bootstrap  -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Mobile menu css -->
    <link rel="stylesheet" href="css/meanmenu.min.css">
    <!-- main  -->
    <link rel="stylesheet" href="css/main.css">
    <!-- style  -->
    <link rel="stylesheet" href="style.css">
    <!-- Responsive css -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- modernizr JS ============================================ -->
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body class="modal-open">
    <a id="scrollUp" href="#top" style="position: fixed; z-index: 2147483647;">
        <div id="backtop">
            <i class="fa fa-angle-double-up" aria-hidden="true"></i>
        </div>
    </a>
        <!-- breadcrumbs area -->
        <div class="breadcrumbs_area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="breadcrumb-single breadcrumb_top">
                            <ul id="breadcrumbs">
                                <li><a href="index.php"><i class="fa fa-home"></i> Trang chủ</a></li>
                                <li><span>I</span></li>
                                <li>Tài khoản</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End breadcrumbs area -->
    <!--Start Header Top area -->


    <div class="container-fluid">
        <div class="row">
            <!-- Modal -->
            <div class=" modal fade" id="myModal2" role="dialog">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <div class="modal-body">
                            <div>
                                <div class="forgot">
                                    <h2>Quên mật khẩu ?</h2>
                                    <p>Thay đổi mật khẩu của bạn trong ba bước đơn giản. Điều này sẽ giúp bạn bảo mật mật khẩu của mình !</p>
                                    <ol class="list-unstyled">
                                        <li><span class="a">1</span>Nhập địa chỉ email của bạn vào bên dưới.</li>
                                        <li><span class="a">2</span>Hệ thống của chúng tôi sẽ gửi cho bạn một liên kết tạm thời.</li>
                                        <li><span class="a">3</span>Sử dụng liên kết để đặt lại mật khẩu của bạn.</li>
                                    </ol>
                                </div>
                                <form class="card mt-4 ">
                                    <div class="card-body">
                                        <div class="form-group" class="was-validated">
                                            <label for="uname">Email:</label>
                                            <input type="gmail" class="form-control" width="52%" id="uname" placeholder="Nhập email" name="uname" required>
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <button class="btn btn-success" onclick="myFunction()" type="submit">Lấy mật khẩu mới</button>
                                        <a href="my-account.php" class="btn btn-danger" type="submit">Trở lại đăng nhập</a>
                                    </div>
                                    <script>
                                        function myFunction() {
                                            alert('Chúng tôi đã gửi mã xác nhận đến Gmail của bạn, vui lòng kiểm tra và xác nhận')
                                        }
                                    </script>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- quen mat khau -->



    <!--Start Register & login area -->
    <div class="my_account_page_area">
        <div class="container">

            <div class="row">
                <div class="acc-forgot-pass">
                    <div class="form"></div>
                </div>
                <div class="form-wrap" id="form-wrap">
                    <div class="form-container-sign sign-up-container">
                        <form class="form-acc" action="" method="post">
                            <h1>Đăng ký</h1>
                            <input class="input-acc" type="text" name = "name" placeholder="Tên đăng nhập"/>
                            <input class="input-acc" type="email" name = "email" placeholder="Email" />
                            <input class="input-acc" type="password" name = "password" placeholder="Mật khẩu" />
                            <input class="input-acc" type="password" name = "confirm_password" placeholder="Nhập lại mật khẩu" />
                            <div class="term-service">
                                <div>
                                    <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                                    <label for="vehicle1">Đồng ý điều khoản</label>
                                </div>
                                <br><button class="create_button1">Điều khoản dịch vụ</button></br>
                            </div >
                            <button class="acc-form-btn" type="submit" name="register" >Đăng ký</button>
                        </form>
                    </div>
                    <div class="form-container-sign sign-in-container">
                        <form class="form-acc" action="" method="post">
                            <h1>Đăng nhập</h1>
                            <input class="input-acc" name = "email" type="email" placeholder="Email" />
                            <input class="input-acc" name = "password" type="password" placeholder="Mật khẩu" />
                            <button data-toggle="modal" data-target="#myModal2" class="forgot-pass create_button1">Quên mật khẩu</button>
                            <button class="acc-form-btn" type="submit" name="login">Đăng nhập</button>
                        </form>
                    </div>
                    <div class="overlay-container">
                        <div class="overlay">
                            <div class="overlay-panel overlay-left">
                                <h1>Đăng nhập</h1>
                                <p>Đăng nhập nếu bạn đã có tài khoản</p>
                                <button class="ghost acc-form-btn" type="submit" id="signIn">Đăng nhập</button>
                            </div>
                            <div class="overlay-panel overlay-right">
                                <h1>Đăng ký</h1>
                                <p>Đăng ký nếu bạn chưa có tài khoản</p>
                                <button class="ghost acc-form-btn" id="signUp" >Đăng ký</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <center>© All rights reserved</center>

    <!--End Register & login area -->

    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <!-- jquery JS  -->
    <script src="js/vendor/jquery-1.11.3.min.js"></script>
    <!-- bootstrap JS -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Mobile menu JS -->
    <script src="js/jquery.meanmenu.js"></script>
    <!-- jquery.easing js -->
    <script src="js/jquery.easing.1.3.min.js"></script>
    <!-- knob circle js -->
    <script src="js/jquery.knob.js"></script>
    <!-- fancybox JS -->
    <script src="fancy-box/jquery.fancybox.pack.js"></script>
    <!-- price slider JS  -->
    <script src="js/price-slider.js"></script>
    <!-- nivo slider JS -->
    <script src="js/jquery.nivo.slider.pack.js"></script>
    <!-- wow JS -->
    <script src="js/wow.js"></script>
    <!-- nivo-plugin JS -->
    <script src="js/nivo-plugin.js"></script>
    <!-- scrollUp JS -->
    <script src="js/jquery.scrollUp.js"></script>
    <!-- carousel JS  -->
    <script src="js/owl.carousel.min.js"></script>
    <!-- plugins JS  -->
    <script src="js/plugins.js"></script>
    <!-- main JS  -->
    <script src="js/main.js"></script>
    <script src="js/form.js"></script>
</body>

</html>