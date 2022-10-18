<!doctype html>
<?php session_start();
include 'handling/utils/connect.php';
//lấy tất cả văn bản / mã / đánh dấu tồn tại trong tệp được chỉ định và sao chép nó vào tệp sử dụng câu lệnh include. -->?>
<html class="no-js" lang="en">

<head>
    <!-- Basic page needs
        ============================================ -->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Endow</title>
    <link rel="icon" href="images/Letter-F-icon-1.png">
    <meta name="description" content="">
    <!-- Mobile specific metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
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
                <h3 onclick="openForm1()"><i class="fas fa-phone"></i> Yêu cầu gọi lại </h3>

            </form>
        </div>
        <div class="chat-popup1" id="myForm1">
            <div class="arrow-down"></div>
            <form action="" class="form-container">
                <span> <i class="fas fa-times"></i> </span>
                <h5>Vui lòng nhập số điện thoại của bạn và chúng tôi sẽ sớm gọi lại cho bạn</h5>
                <input type="number" min="0" placeholder="+XXX-XX-XXX-XX-XX">
                <button type="button" class="btn ">Waiting for call</button>
            </form>
        </div>
    </div>
    <a id="scrollUp" href="#top" style="position: fixed; z-index: 2147483647;">
        <div id="backtop" class="onTop hidden">
            <i class="fa fa-angle-double-up" aria-hidden="true"></i>
        </div>
    </a>
    <!--Start Header Top area -->

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
                   
                        <div class="search_box ">
                            <input id="abc" class="input_text" type="text" placeholder="Tìm kiếm" />
                            <button onclick="search()" type="submit" class="btn-search">
                                    <span><i class="fa fa-search"></i></span>
                            </button>
                        </div>
                    <script type="text/javascript">
                            function search() {
                                //lấy giá trị ô input ra
                            var s = document.getElementById("abc").value;
                                //lấy input_search + chuyển trang index
                             window.location='index.php?input_search='+s+'&btn_search=btn_search';
                           }
                        </script>
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
                        <!-- ------------------------------------------CART----------------------------- -->
                            <?php 
                            //kiểm tra xem người dùng đã đăng nhập trước đó chưa
                                    if ($_SESSION["iduser"] != null) {
                                        $iduser = $_SESSION["iduser"];
                                        $sql = "SELECT * FROM `cart` WHERE Id_user = $iduser";
                                        $query = mysqli_query($conn,$sql);
                                       
                                           
                             ?>
                                    <span class="cart_zero"><?php echo mysqli_num_rows($query); ?></span>
                                </a>
                                <div class="cart_down_area">
              <?php  while ($row = mysqli_fetch_assoc($query)) { ?>
                                    <div class="cart_single">
                                        <a href="product.php?id_product=<?php echo $row['id_product']; ?>"><img src="<?php echo $row['image']; ?>" alt="" width="30%" /></a>
                                        <h2 class="ellipsis"><a href="product.php?id_product=<?php echo $row['id_product']; ?>"><?php echo $row['name_product']; ?></a></h2>
                                           <style type="text/css">
                                                .ellipsis {
                                                white-space: nowrap;
                                                text-overflow: ellipsis;
                                                overflow: hidden;
                                                }
                                            </style>
                                        <p><?php echo ceil($row['price']*0.00004); ?> $</p>
                                    </div>
                            <?php  }
                                    }else {
                                        //show alert + điều hướng đến trang login
                                        echo "<script language='javascript'>";
                                        echo "alert('Please login...');";
                                        echo "window.location='my-account.php';";
                                        echo "</script>";
                             } ?>
        <!-- ------------------------END ----------------------- -->   
                                
                                    <div class="cart_shoptings">
                                        <a href="cart.php" class="cart_shoptings-link">Mua ngay</a>
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
                                            <a href="shop.php"><i class="fa fa-angle-right"></i> Ceiling Fans</a>
                                            <a href="shop.php"><i class="fa fa-angle-right"></i> Tower Fans</a>
                                            <a href="shop.php"><i class="fa fa-angle-right"></i> Misting Fans</a>
                                            <a href="shop.php"><i class="fa fa-angle-right"></i> Steam Fans</a>
                                            <a href="shop.php"><i class="fa fa-angle-right"></i> Stand Fans</a>
                                            <a href="shop.php"><i class="fa fa-angle-right"></i> Wall Fans</a>
                                            <a href="shop.php"><i class="fa fa-angle-right"></i> Box Fans</a>
                                            <a href="shop.php"><i class="fa fa-angle-right"></i> Exhaust Fan</a>
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
    <div class="breadcrumbs-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="breadcrumb-single blog_top_area">
                        <ul id="breadcrumbs">
                            <li><a href="index.php"><i class="fa fa-home"></i> Trang chủ</a></li>
                            <li><span>Ι</span></li>
                            <li>Cam kết</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Start recruiment area -->
    <div class="endow_banner">
        <img src="./images/uu-dai.png" alt="" width="100%">
        <a href="#!"> 1 đổi 1 trong 15 ngày</a>
    </div>
    <div class="endow_icon">
        <div class="container">
            <div class="row items">
                <div class="col-lg-3 item">
                    <img src="images/endow-1.png" alt="">
                    <span> Bảo hành lên đến 10 năm </span>
                </div>
                <div class="col-lg-3 item">
                    <img src="images/endow-2.png" alt="">
                    <span> Cài đặt miễn phí</span>
                </div>
                <div class="col-lg-3 item">
                    <img src="images/endow-3.png" alt="">
                    <span> Chấp nhận tất cả các thẻ</span>
                </div>
                <div class="col-lg-3 item">
                    <img src="images/endow-4.png" alt="">
                    <span> Cam kết 100% hài lòng</span>
                </div>
            </div>
        </div>

    </div>
    <div class="blog_post_area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12 endow_slider">
                    <div class="carousel_testimonial_area">
                        <div class="testimonial_list">
                            <div class="testimonial_single testimonial_single1">
                                <img src="images/van-chuyen3.jpg" alt="" class="banner" width="100%" />
                            </div>
                            <div class="testimonial_single testimonial_single1">
                                <img src="images/van-chuyen4.jpg" alt="" class="banner" width="100%" />
                            </div>
                        </div>
                        <div class="text">
                            <span> Giao hàng miễn phí cho các đơn đặt hàng từ 100.000đ </span>
                        </div>
                        <hr class="ax">
                        <style>
                            .ax {
                                width: 100%;
                                height: 1px;
                                background-color: #999;
                                margin-top: 170px;
                            }
                        </style>
                    </div>

                    <div class="carousel_testimonial_area" style="margin-top: 200px;">
                        <div class="testimonial_list">
                            <div class="testimonial_single">
                                <img src="images/endow-7.png" class="banner" width="100%" alt="">
                            </div>
                            <div class="testimonial_single">
                                <img src="images/endow-9.png" class="banner" width="100%" alt="">
                                <a href="#1"> See more</a>
                            </div>
                        </div>
                        <div class="text text1">
                            <span> Đăng ký ngay với chúng tôi để không bỏ lỡ những ưu đãi tốt nhất </span>
                        </div>
                    </div>
                </div>


                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                    <div class="blog_right_sidebar">
                        <div class="add_r_sidebar add_r_sidebar1 ">
                            <h4> TIN MỚI NHẤT </h4>
                            <hr>
                            <div class="items">
                                <img src="images/ceiling3.png" alt="" height="60px">
                                <span>Những mẫu quạt trần đẹp nhất cho chung cư.</span>
                            </div>
                            <div class="items">
                                <img src="images/news2.png" alt="" height="60px">
                                <span>Làm thế nào để vệ sinh và bảo dưỡng quạt trần đúng cách?</span>
                            </div>
                            <div class="items">
                                <img src="images/ceiling5.png" alt="" height="60px">
                                <span>Những lưu ý cần biết trước khi định mua quạt.</span>
                            </div>
                            <div class="items">
                                <img src="images/news1.png" alt="" height="60px">
                                <span>Những cách sử dụng quạt tiết kiệm điện bạn cần biết.</span>
                            </div>
                        </div>
                        <div class="add_r_sidebar" style="margin-top: 55px;">
                            <p class="banner_block">
                                <a href="#"><img alt="" src="images/endow-5.png" width="100%" height="245px"></a>
                            </p>
                        </div>

                        <div class="add_r_sidebar">
                            <p class="banner_block">
                                <a href="#"><img alt="" src="images/endow-6.png" width="100%" height="500px"></a>
                            </p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="blog_post_area1">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="feature_text">
                        <h4>Đối tác phân phối của chúng tôi</h4>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="owl-carousel owl-theme endow_branch" style="text-align: center;">
                    <div class="item"> <img src="images/endow1.png" width="100%" alt=""></div>
                    <div class="item"> <img src="images/endow2.png" width="100%" alt=""></div>
                    <div class="item"> <img src="images/endow3.png" width="100%" alt=""></div>
                    <div class="item"> <img src="images/endow4.png" width="100%" alt=""></div>
                    <div class="item"> <img src="images/endow5.png" width="100%" alt=""></div>
                    <div class="item"> <img src="images/endow6.png" width="100%" alt=""></div>
                    <div class="item"> <img src="images/endow8.png" width="100%" alt=""></div>
                </div>
            </div>
        </div>
    </div>
    <!--End  area -->

    <!--Start Footer area -->
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
                            <input class="sign_text" type="text" placeholder="Enter your gmail ..." />
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
                            <h2>Trụ sở chính </h2>
                            <p>Fanfan Company: <span>590 CMT8, Ward 11, District 3, Ho Chi Minh City</span></p>
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
                            <h2>Chăm sóc khách hàng</h2>
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
    <script src="js/display.js"></script>

</body>

</html>