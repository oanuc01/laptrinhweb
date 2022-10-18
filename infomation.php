<!doctype html>
<html class="no-js" lang="en">

<head>
    <!-- Basic page needs
        ============================================ -->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Chính sách bảo mật</title>
    <link rel="icon" href="images/Letter-F-icon-1.png">
    <meta name="description" content="">
    <!-- Mobile specific metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="images/Letter-F-icon-1.png">
    <!-- font awesome -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <!-- carousel CSS -->
    <link rel="stylesheet" href="css/owl.carousel.css">
    <!-- carousel Theme CSS -->
    <link rel="stylesheet" href="css/owl.my_theme.css">
    <!-- carousel transitions CSS -->
    <link rel="stylesheet" href="css/owl.transitions.css">
    <!-- nivo slider slider css -->
    <link rel="stylesheet" href="css/nivo-slider.css">
    <!-- animate css -->
    <link rel="stylesheet" href="css/animate.css">
    <!-- Price jquery-ui  -->
    <link rel="stylesheet" href="css/jquery-ui.css">
    <!-- fancy-box theme -->
    <link rel="stylesheet" href="fancy-box/jquery.fancybox.css">
    <!-- normalizer -->
    <link rel="stylesheet" href="css/normalize.css">
    <!-- bootstrap -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Mobile menu css -->
    <link rel="stylesheet" href="css/meanmenu.min.css">
    <!-- main -->
    <link rel="stylesheet" href="css/main.css">
    <!-- style -->
    <link rel="stylesheet" href="style.css">
    <!-- Responsive css -->
    <link rel="stylesheet" href="css/custom.css">
    <!-- Responsive css -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- modernizr JS -->
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
    <div class="chat hidden">
        <button class="open-button"> <i class="fas fa-times"></i>  <i class="fab fa-facebook-messenger"></i> </button>
        <div class="chat-popup" id="myForm">
            <div class="arrow-down"></div>
            <form action="" class="form-container">

                <a href="https://www.facebook.com/messages">
                    <h3> <i class="fab fa-facebook-messenger"></i> Messenger</h3>
                </a>
                <a href="https://zalo.me/pc">
                    <h3><img src="./images/zalo.png" width="13%" alt="">Zalo </h3>
                </a>
                <h3 onclick="openForm1()"><i class="fas fa-phone"></i>&nbsp;Yêu cầu gọi lại</h3>

            </form>
        </div>
        <div class="chat-popup1" id="myForm1">
            <div class="arrow-down"></div>
            <form action="" class="form-container">
                <span> <i class="fas fa-times"></i> </span>
                <h5>Vui lòng nhập số điện thoại của bạn và chúng tôi sẽ sớm gọi lại cho bạn</h5>
                <input type="number" min="0" placeholder="+XXX-XX-XXX-XX-XX">
                <button type="button" class="btn ">Đang chờ cuộc gọi</button>
            </form>
        </div>
    </div>

    <a id="scrollUp" href="#top" style="position: fixed; z-index: 2147483647;">
        <div id="backtop" class="onTop hidden">
            <i class="fa fa-angle-double-up" aria-hidden="true"></i>
        </div>
    </a>

    <div class="header">
        <div class="container">
            <div class="row text-center">
                <div class="col-lg-4 text"> <i class="fas fa-exclamation-triangle"></i> MAKING THE WORLD ALWAYS FRESH</div>
                <div class="col-lg-4 text"> <i class="fas fa-phone-alt"></i> HOTLINE: 0909.090.090</div>
                <div class="col-lg-4 text"> <i class="fas fa-headset"></i> HỖ TRỢ 24/7</div>
            </div>
        </div>
    </div>
    <!--Start Header Top area -->
    <div class="header_area_top">
        <div class="container-fluid">
            <div class="row d-flex align-items-center">
                <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12 text-center">
                    <div class="logo ">
                        <a href="index.php">
                            <img src="./images/logo1.png" alt="" width="60%">
                        </a>
                    </div>
                    <!--End Logo area -->
                </div>
                <div class="col-lg-5 col-md-4 col-sm-4 col-xs-12 text-center">
                    <form action="#" name="myForm">
                        <div class="search_box ">
                            <input id="itp" class="input_text" type="text" placeholder="Tìm kiếm" />
                            <button type="submit" class="btn-search">
									<span><i class="fa fa-search"></i></span>
							</button>
                        </div>
                    </form>
                    <!--End Search area -->
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 mb-3">
                    <!--Start Header Right Cart area -->
                    <div class="account_card_area">
                        <ul id="account_nav">
                            <li><a href="my-account.php">Tài khoản <i class="fas fa-long-arrow-alt-right"></i></a>
                            </li>
                            <li>
                                <a href="cart.php">
                                    <img src="images/cart.webp" width="25%" alt="">
                                    <span class="cart_zero">2</span>
                                </a>
                                <div class="cart_down_area">
                                    <div class="cart_single">
                                        <a href="#"><img src="images/img-products/quat-phun-suong-1.jpg" alt="" width="30%" /></a>
                                        <h2><a href="#">Pelonic FS40</a></h2>
                                        <p>$299.00</p>
                                    </div>
                                    <div class="cart_single">
                                        <a href="#"><img src="./images/product (3).jpg" alt="" width="30%" /></a>
                                        <h2><a href="#">Royal Aura Fan S650</a></h2>
                                        <p>$1259</p>
                                    </div>
                                    <div class="cart_shoptings">
                                        <a href="checkout.php" class="cart_shoptings-link">Mua ngay</a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <!--End Header Right Cart area -->
                </div>
            </div>
        </div>
    </div>
    <!--End Header Top area -->
    <!--Start Main Menu area -->
    <div class="header_botttom_area bg">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <!--Start desktop menu area -->
                    <div class="main_menu">
                        <ul id="nav_menu" class="active_cl">
                            <li>
                                <a href="index.php"> <i class="fas fa-home"></i> <span class="Home">Trang chủ</span></a>
                            </li>
                            <li>
                                <a href="shop.php"> <span class="Clothings">Sản phẩm</span> <i class="fas fa-caret-down"></i></a>
                                <div class="mega_menu_list">
                                    <div class="single_megamenu">
                                        <div class="items_list">
                                            <a href="product.php"><i class="fa fa-angle-right"></i> Ceiling Fans</a>
                                            <a href="product1.php"><i class="fa fa-angle-right"></i> TowerFans</a>
                                            <a href="product2.php"><i class="fa fa-angle-right"></i> Misting Fans</a>
                                            <a href="product3.php"><i class="fa fa-angle-right"></i> Steam Fans</a>
                                            <a href="product4.php"><i class="fa fa-angle-right"></i> Stand Fans</a>
                                            <a href="product5.php"><i class="fa fa-angle-right"></i> Wall Fans</a>
                                            <a href="product6.php"><i class="fa fa-angle-right"></i> Box Fans</a>
                                            <a href="product7.php"><i class="fa fa-angle-right"></i> Exhaust Fan</a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <a href="guarantee.php"><span class="Lookbook">Bảo hành</span></a>
                            </li>
                            <li>
                                <a href="endow.php"><span class="Footwear">Tin tức</span></a>
                            </li>
                            <li>
                                <a href="about-us.php"><span class="Footwear">Giới thiệu</span></a>
                            </li>
                            <li>
                                <a href="contact.php"><span class="Footwear">Liên hệ</span></a>
                            </li>
                        </ul>
                    </div>
                    <!--End desktop menu area -->
                </div>
            </div>
        </div>
    </div>
    <!--End Main Menu area -->

    <div class="text_care">
        <div class="container">
            <div class="row">
                <h5> 1. Truy cập từ xa </h5>
                <p> Nếu bạn cho nhân viên của mình cơ hội làm việc tại nhà hoặc trên đường - hoặc nếu bạn cho họ tùy chọn kiểm tra email công việc trong thời gian rảnh - bạn sẽ cần chính sách truy cập từ xa. Chính sách này giải quyết các vi phạm bảo mật xảy ra khi nhân
                    Thành viên không được bảo vệ bởi các điều khoản an ninh mạng của tổ chức. Ví dụ, một nhân viên làm việc trên một chuyến tàu bận rộn có thể tiết lộ thông tin nhạy cảm cho ai đó đang nhìn qua vai của họ. Tương tự như vậy, một tội nhân
                    Kẻ gian có thể lấy cắp thiết bị của nhân viên nếu nó không được giám sát. Cũng có nguy cơ tin tặc tội phạm có thể truy cập thông tin bằng cách xâm nhập vào Wi-Fi công cộng và thực hiện một cuộc tấn công trung gian. Do đó, chính
                    Cuốn sách sẽ cần nêu quan điểm của tổ chức về truy cập mạng từ xa. Ví dụ: có thể nói rằng truy cập từ xa bị cấm, rằng nó chỉ có thể được thực hiện qua VPN hoặc chỉ một số phần nhất định của mạng có thể được truy cập từ
                    xa. </p>
            </div>
        </div>
    </div>
    <div class="text_care">
        <div class="container">
            <div class="row">
                <h5>
                    2. Quản lý mật khẩu </h5>
                <p> Trên thực tế, mọi tổ chức đều cấp cho nhân viên tài khoản người dùng để họ truy cập thông tin nhạy cảm, nhưng trừ khi nhân viên bảo mật những tài khoản này bằng mật khẩu yếu, tin tặc tội phạm sẽ có thể bẻ khóa chúng trong vài giây. Các tổ chức phải giảm thiểu rủi ro này bằng cách tạo ra các quy tắc nghiêm ngặt về những gì cấu thành một mật khẩu có thể chấp nhận được. Nhưng sẽ không tốt nếu mọi người trong tổ chức tạo mật khẩu mạnh nếu họ sử dụng chúng cho tài khoản hoặc để mật khẩu ở nơi ai đó có thể nhìn thấy chúng. Chính sách mật khẩu của bạn phải nhận ra những rủi ro liên quan đến thói quen giao tiếp kém và thiết lập các cơ sở để giảm thiểu nguy cơ vi phạm mật khẩu. </p>
            </div>
        </div>
    </div>
    <div class="text_care">
        <div class="container">
            <div class="row">
                <h5>
                    3. Chấp nhận sử dụng </h5>
                <p> Các nhà quản lý thường lo lắng về việc nhân viên thực hiện các hoạt động không phải công việc trong giờ hành chính, nhưng họ nên quan tâm đến những gì nhân viên đang làm hơn là khi nào - và trong bao lâu - họ làm việc đó. Các tổ chức thường chấp nhận rằng nhân viên sẽ thỉnh thoảng kiểm tra email cá nhân hoặc nguồn cấp dữ liệu Facebook của họ. Nhưng họ nên vạch ra ranh giới của các hoạt động có thể ảnh hưởng đến bảo mật của tổ chức, chẳng hạn như truy cập các trang web gian lận, cài đặt các ứng dụng có khả năng không an toàn hoặc chia sẻ thông tin kinh doanh với những người không làm việc tại tổ chức. Bạn có thể ngăn chặn nhiều rủi ro bằng cách chặn một số trang web nhất định, nhưng đây không phải là một hệ thống lừa đảo, vì vậy bạn cũng nên đưa ra chính sách cấm nhân viên truy cập vào bất kỳ trang web nào mà bạn cho là không an toàn.</p>
            </div>
        </div>
    </div>

    <div class="footer_area home1_margin_top">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="feature_text feature_newsletter">
                        <h4>Thông tin</h4>
                        <p>Đăng ký để nhận thông tin và ưu đãi mới nhất</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="sign_up">
                        <form action="#">
                            <input class="sign_text" type="text" placeholder="Nhập email của bạn..." />
                            <button type="submit" class="sign">
                                    <svg>
                                        <rect x="0" y="0" fill="none" width="100%" height="100%"/>
                                    </svg>
									<span>Đăng ký</span>

                            </button>

                        </form>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="footer_menu_area">
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                        <div class="help_support">
                            <h2>Văn phòng điều hành</h2>
                            <p>Nhà hữu cơ: <span>Số 38, ngõ 475 Nguyễn Trãi, Thanh Xuân, Hà Nội</span></p>
                            <p>Hotline: <span>0909.090.090<br>&emsp;&emsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;0901.010.010</span></p>
                            <p>Email: <span>eatclean@gmail.com</span></p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                        <div class="help_support help_border">
                            <h2>branch</h2>
                            <ul class="footer_menu">
                                <li><a href="https://goo.gl/maps/tkK3Uus9TFCd5jCH6">Số 38, ngõ 475 Nguyễn Trãi, Thanh Xuân, Hà Nội</a></li>
                                <li><a href="https://goo.gl/maps/8pGc9QHxCoJJxz7C8">Số 11, ngõ 104, Định Công, Hoàng Mai, Hà Nội</a></li>
                                <li><a href="https://goo.gl/maps/VfWGFaUo5x4Cz65g6">Số 12, Chùa Bộc, Quang Trung, Đống Đa, Hà Nội</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                        <div class="help_support help_border">
                            <h2>Chăm sóc khách hàng</h2>
                            <ul class="footer_menu">
                                <li><a href="infomation.php">Chính sách bảo mật</a></li>
                                <li><a href="commit.php">Cam kết hài lòng</a></li>
                                <li><a href="complaint.php">Yêu cầu khiếu nại</a></li>
                                <li><a href="payment.php">Hướng dẫn thanh toán</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                        <div class="help_support help_border">
                            <h2>liên kết mạng xã hội</h2>
                            <ul class="footer_menu">
                                <a href="https://www.facebook.com/" class="fab fa-facebook-f"></a>
                                <a href="https://twitter.com/" class="fab fa-twitter"></a>
                                <a href="http://gmail.com/" class="fab fa-google"></a>
                                <a href="http://instagram.com/" class="fab fa-linkedin"></a>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid copy__right">
            <div class="row">
                <div class="col-sm-4 text-right">
                </div>
                <div class="col-sm-4 text-center" style="margin-top: 10px;">
                    <P> © All rights reserved</P>
                </div>
                <div class="col-sm-4  text-right" style="padding-right: 0; margin-top: 10px;">
                    <img src="./images/visa1.png" alt="" width="60%">
                </div>
            </div>
        </div>
    </div>
    <!--End Footer area -->
    <!-- jquery JS -->
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
    <!-- carousel JS -->
    <script src="js/owl.carousel.min.js"></script>
    <!-- plugins JS -->
    <script src="js/plugins.js"></script>
    <script src="js/hearts.js"></script>
    <!-- main JS  -->
    <script src="js/display.js"></script>
    <script src="js/main.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>

</body>

</html>