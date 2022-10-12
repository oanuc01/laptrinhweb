<!doctype html>
<html class="no-js" lang="en">

<head>
    <!-- Basic page needs
        ============================================ -->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Yêu cầu khiếu nại</title>
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
                <div class="col-lg-4 text"> <i class="fas fa-exclamation-triangle"></i> LÀM THẾ GIỚI LUÔN TƯƠI TRẺ</div>
                <div class="col-lg-4 text"> <i class="fas fa-phone-alt"></i> HOTLINE: 0909.090.090</div>
                <div class="col-lg-4 text"> <i class="fas fa-headset"></i> HỖ TRỢ TRỰC TUYẾN 24/7</div>
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
                            <li><a href="my-account.php">Tài khoản<i class="fas fa-long-arrow-alt-right"></i></a>
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
                                            <a href="product1.php"><i class="fa fa-angle-right"></i> Tower Fans</a>
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
                                <a href="guarantee.php"><span class="Lookbook">Cam kết</span></a>
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
                <h5> 1. Định nghĩa</h5>
                <p>Xử lý khiếu nại là quá trình tiếp nhận và xử lý các vấn đề mà nhà cung cấp dịch vụ không tuân thủ một bộ quy tắc. (vận chuyển, cung cấp hàng hóa).</p>
            </div>
        </div>
    </div>

    <div class="text_care">
        <div class="container">
            <div class="row">
                <h5>2. Chính sách xử lý khiếu nại dịch vụ</h5>
                <p>– Thời gian Khách hàng khiếu nại: Trong thời gian sử dụng dịch vụ nhưng không quá 48h kể từ khi Hàng hóa được giao là 24h. </p>
                <p>– Thời gian tiếp nhận và xử lý khiếu nại: Nguồn Hàng 24h cam kết sẽ tiếp nhận và xử lý tất cả các khiếu nại được xác định là hợp lệ (ghi rõ bên dưới).</p>
                <p>– Thời gian giao hàng trong 24 giờ đối với trường hợp nhận / yêu cầu bổ sung thông tin: Từ 1-2 ngày.</p>
                <p>– Đối với các khiếu nại cần xác nhận thông tin hoặc làm việc với bên thứ ba bao gồm (nhà cung cấp, nhà vận chuyển…): Chúng tôi sẽ phải làm việc với các đơn vị này để lấy thông tin và xử lý khiếu nại.</p>
                <p>– Đối với các khiếu nại phát sinh do sự cố của chúng tôi, chúng tôi sẽ xử lý trong vòng 03 ngày trong trường hợp không làm gián đoạn việc liên lạc và trao đổi với khách hàng về giải pháp.</p>
                <p>– Đối với các khiếu nại phát sinh từ đơn hàng không sử dụng dịch vụ Check-in, chúng tôi sẽ hỗ trợ xử lý Khiếu nại của Người bán, trong vòng 30 ngày nếu hỗ trợ Giải quyết khiếu nại của Người bán không thành công hoặc không thành công, chúng tôi sẽ đóng cửa và từ chối các khiếu nại.</p>

            </div>
        </div>
    </div>

    <div class="text_care">
        <div class="container">
            <div class="row">
                <h5> 3. Quy định</h5>
                <p>– Thời gian khiếu nại: Kể từ sau khi mua hàng, Khách hàng có thể khiếu nại dịch vụ.</p>
                <p>– Cách thức khiếu nại: Thông qua chức năng gửi khiếu nại trên website.</p>
                <p>– Thông tin khiếu nại: Thông tin khiếu nại cần có đầy đủ nội dung, đối với các khiếu nại về sản phẩm bị thiếu thì cần ghi rõ id sản phẩm còn thiếu.
                    Đối với các khiếu nại khác, chúng tôi có thể yêu cầu cung cấp thêm thông tin để có thể làm việc với nhà cung cấp hoặc đơn vị vận chuyển (nếu cần).
                </p>
                <p>– Hình thức liên hệ: Chúng tôi sẽ trao đổi qua điện thoại và trực tiếp trên trang chi tiết khiếu nại.</p>
                <p>– Hỗ trợ khiếu nại không thuộc phạm vi cam kết dịch vụ của chúng tôi: Đối với các Khiếu nại liên quan đến nhà cung cấp khi nhà cung cấp vi phạm điều khoản giao dịch hàng hóa (điều khoản giao dịch trên các website bán hàng); hoặc khiếu nại các khiếu nại không sử dụng dịch vụ kiểm tra hàng hóa; chúng tôi sẽ trực tiếp xử lý hoặc hỗ trợ khách hàng xử lý. Chúng tôi sẽ yêu cầu Khách hàng hợp tác xử lý các Khiếu nại của Nhà cung cấp.
                </p>
                <p>– Chúng tôi sẽ giải quyết các khiếu nại liên quan đến việc bẻ khóa sản phẩm; không tiếp nhận và xử lý các khiếu nại liên quan đến hiệu suất, chi tiết bộ phận, bảo hành và chất lượng sản phẩm.
                </p>
                <p>– Trong một số trường hợp, chúng tôi sẽ yêu cầu Khách hàng chủ động khiếu nại với nhà cung cấp (ví dụ: Khách hàng đã thỏa thuận trước với nhà cung cấp về sản phẩm, chúng tôi chỉ thực hiện thanh toán theo yêu cầu; Khách hàng không đăng ký với sử dụng dịch vụ Kiểm tra, ...).</p>

            </div>
        </div>
    </div>

    <div class="text_care">
        <div class="container">
            <div class="row">
                <h5> 4. Chính sách bồi thường</h5>
                <p>– Trường hợp không thực hiện đúng cam kết mua dịch vụ: đền bù 100% giá trị hàng hóa & phí mua hàng thiếu sản phẩm; Thỏa thuận đền bù với sản phẩm mua nhầm.</p>
                <p>– Trường hợp hàng hóa bị hư hỏng trong quá trình vận chuyển: Hoàn trả 100% giá trị thiệt hại và phí đóng gói nếu phát sinh lỗi do chúng tôi không thực hiện đúng yêu cầu đóng gói hợp lý của Khách hàng; hoàn trả 100% giá trị thiệt hại và hoàn trả 100% giá trị thiệt hại và thương lượng đền bù / chia sẻ trong những trường hợp hỏng hóc không đáng có, không kiểm soát được trong quá trình vận chuyển.</p>

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
                            <input class="sign_text" type="text" placeholder="Nhập gmail của bạn ..." />
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
                            <h2>Trụ sở chính</h2>
                            <p>Công ty Quạt: <span>590 CMT8, Ward 11, District 3, Ho Chi Minh City</span></p>
                            <p>Hotline: <span>0909.090.090<br>&emsp;&emsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;0901.010.010</span></p>
                            <p>Email: <span>fanfan@gmail.com</span></p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                        <div class="help_support help_border">
                            <h2>Chi nhánh</h2>
                            <ul class="footer_menu">
                                <li><a href="https://goo.gl/maps/tkK3Uus9TFCd5jCH6">590 Cach Mang Thang 8, Ward 11, District 3, Ho Chi Minh City</a></li>
                                <li><a href="https://goo.gl/maps/8pGc9QHxCoJJxz7C8">Alley 2 Ham Nghi, Ben Nghe Ward, District 1, Ho Chi Minh City</a></li>
                                <li><a href="https://goo.gl/maps/VfWGFaUo5x4Cz65g6">1 Le Dai Hanh, Ward 11, <br>District 11, Ho Chi Minh City</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                        <div class="help_support help_border">
                            <h2>customer care</h2>
                            <ul class="footer_menu">
                                <li><a href="infomation.php">Chính sách bảo mật thông tin</a></li>
                                <li><a href="commit.php">Cam kết hài lòng</a></li>
                                <li><a href="complaint.php">Yêu cầu khiếu nại</a></li>
                                <li><a href="payment.php">Hướng dẫn thanh toán</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                        <div class="help_support help_border">
                            <h2>Liên kết mạng xã hội</h2>
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