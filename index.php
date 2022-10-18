<!doctype html>
<?php 
session_start();
include 'handling/utils/connect.php'; ?>
<!-- //lấy tất cả văn bản / mã / đánh dấu tồn tại trong tệp được chỉ định và sao chép nó vào tệp sử dụng câu lệnh include. -->
<html class="no-js" lang="en">

<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <!-- Basic page needs
        ============================================ -->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Trang chủ</title>
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
                    <form action="" name="myForm" method="">
                        <div class="search_box ">
                            <input id="itp" class="input_text" name = "input_search" type="text" placeholder="Tìm kiếm" />
                            <button type="submit" name="btn_search" value="btn_search" class="btn-search">
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
               <!-----------------  -- --------------ĐỔ DỮ LIỆU PRODUCT MENU-------------------------------->
                                            <?php  
                                                $sql = 'SELECT * FROM `category`';
                                                $data = mysqli_query($conn,$sql);
                                                while ($row = mysqli_fetch_assoc($data)) {
                                                ?>
                                           
                                                <a href="shop.php?id_category=<?php echo $row['id_category']; ?>"><i class="fa fa-angle-right"></i><?php echo $row['name'] ?></a>
                                            <?php } ?>
                <!-- -------------------------------END MENU------------------------------------------ -->
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
    <!-- slider-area start -->
    <section class="slider-area">
        <!-- slider start -->
        <div class="slider">
            <div id="mainSlider" class="nivoSlider nevo-slider">
                <img src="./images/banner1.png" alt="main slider" title="#htmlcaption1" width="100%" />
                <img src="./images/fresh.png" alt="main slider" title="#htmlcaption2" width="100%" />
            </div>
            <div id="htmlcaption1" class="nivo-html-caption slider-caption">
                <div class="slider-progress"></div>
                <div class="slider-text">
                    <div class="middle-text">
                        <div class="width-cap" style="text-align: center;">
                            <h3 class="slider-tiile-top top-ani-1" style="font-size: 60px; background-color: rgba(0, 0, 0, .3); padding: 30px;"><span>Đam mê ẩm thực – tích cực giảm cân</span></h3>
                            <div class="slider-shopping" style="text-align: center;">
                                <a href="shop.php">Mua ngay</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="htmlcaption2" class="nivo-html-caption slider-caption">
                <div class="slider-progress"></div>
                <div class="slider-text">
                    <div class="middle-text">
                        <div class="width-cap" style="text-align: center;">
                            <h3 class="slider-tiile-top top-ani-1" style="font-size: 60px; background-color: rgba(0, 0, 0, .3); padding: 30px;"><span>Đăng nhập ngay để nhận những ưu đãi mới nhất của chúng tôi</span></h3>
                            <div class="slider2-shop" style="text-align: center;">
                                <a href="my-account.php">Đăng nhập ngay</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- slider end -->
    </section>
    <!-- slider-area end -->
    <!--Start Lateast Collection Top area -->
    <div class="body_top_area">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="single_image">
                        <a href="#"><img class="banner_home1" src="./images/product (6).jpg" alt="" width="100%" height="377px" /></a>
                        <div class="shop_collection">
                            <a href="shop.php">Xem bộ sưu tập<span><i class="fa fa-arrow-right" aria-hidden="true"></i></span></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="single_image">
                        <a href="#"><img class="banner_home1" src="./images/product (2).jpg" alt="" width="100%" height="377px" /></a>
                        <div class="shop_collection">
                            <a href="shop.php">Xem bộ sưu tập<span><i class="fa fa-arrow-right" aria-hidden="true"></i></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--End Lateast Collection Top area -->
    <!--Start Lateast Collection bottom area -->
    <div class="banner_area">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="single_image">
                        <a href="#"><img class="banner_home1" src="./images/fanfan10.png" alt="" width="100%" height="277px" /></a>
                        <div class="banner_text">
                            <h3><a href="#">>> Sản phẩm nổi bật</a></h3>
                        </div>
                        <div class="shop_collection">
                            <a href="shop.php">Xem chi tiết<span><i class="fa fa-arrow-right" aria-hidden="true"></i></span></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="single_image">
                        <a href="#"><img class="banner_home1" src="images/img-products/quattran (3).jpg" alt="" width="100%" height="277px" /></a>
                        <div class="banner_text">
                            <h3><a href="#">>> Sản phẩm mới</a></h3>
                        </div>
                        <div class="shop_collection">
                            <a href="shop.php">Xem chi tiết<span><i class="fa fa-arrow-right" aria-hidden="true"></i></span></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="single_image">
                        <a href="#"><img class="banner_home1" src="./images/fanfan6.jpg" alt="" width="100%" height="277px" /></a>
                        <div class="banner_text">
                            <h3><a href="#">>> Sản phẩm khuyến mãi</a></h3>
                        </div>
                        <div class="shop_collection">
                            <a href="shop.php">Xem chi tiết<span><i class="fa fa-arrow-right" aria-hidden="true"></i></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--End Lateast Collection bottom area -->
    <!--Start Feature area -->
    <div class="feature_area ">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="feature_text">
                    <h4>Sản phẩm nổi bật</h4>
                </div>
            </div>
        </div>
        <div class="container">
            <script>
        /*
            lang nghe su kien onclick seemore de load them san pahm
        */
          
        $(document).ready(function(){
             var loadMoreCount = 8;
             $("#button-tesst").click(function(){
                loadMoreCount = loadMoreCount + 4;
                $("#seermore").load("load_more_product_home.php",{
                    loadMoreNewCount: loadMoreCount  
                 });
             });

        });
        
    </script>
            <div class="row" id="seermore">
        <!-- ---------------------------ĐỖ DỮ LIỆU HOT PRODUC-------------- -->

          <?php 
            include 'load_more_product_home.php'; 
          ?>
                </div>
            <!-- ---------------------------END HOT PRODUC-------------- -->
            </div>
            
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="more_feature_area">
                    <h2 ><?php echo isset(($_GET['btn_search']))? '<a href="javascript:history.go(-1)">GO BACK</a>' : '<a id="button-tesst">Xem thêm</a>'; ?></h2>
                </div>
            </div>
        </div>
    </div>
    <!--End Feature area -->
    <!--Start Testimonila area -->
    <div class="carousel_testimonial_area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="testimonial_list">
                        <div class="testimonial_single">
                            <img src="images/testimonial1.png" class="banner" width="100%" alt="">
                        </div>
                        <div class="testimonial_single">
                            <img src="images/testimonial2.png" class="banner" width="100%" alt="">
                            <h1>Với<b>1,000,000 +</b> sản phẩm bán ra mỗi năm, chúng tôi tự tin là một trong những công ty hàng đầu trong lĩnh vực bán đồ eatclean.</h1>
                            <p>Eatclean company</p>
                            <div class="author">
                                <img src="img/author/avatar.png" alt="" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--End Testimonila area -->

    <!--Start Contact info area -->
    <div class="blog_post_area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="feature_text">
                        <h4>Đối tác</h4>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="carousel_blog_list">
                    <div class="col-lg-3">
                        <div class="single_blog">
                            <a href="#"><img src="images/thuonghieu/thuonghieu1.jpg" alt="" /></a>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="single_blog">
                            <a href="#"><img src="images/thuonghieu/thuonghieu2.jpg" alt="" /></a>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="single_blog">
                            <a href="#"><img src="images/thuonghieu/thuonghieu3.jpg" alt="" /></a>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="single_blog">
                            <a href="#"><img src="images/thuonghieu/thuonghieu4.jpg" alt="" /></a>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="single_blog">
                            <a href="#"><img src="images/thuonghieu/thuonghieu5.jpg" alt="" /></a>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="single_blog">
                            <a href="#"><img src="images/thuonghieu/thuonghieu6.jpg" alt="" /></a>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="single_blog">
                            <a href="#"><img src="images/thuonghieu/thuonghieu7.jpg" alt="" /></a>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="single_blog">
                            <a href="#"><img src="images/thuonghieu/thuonghieu8.jpg" alt="" /></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--End blog area -->
    <div class="freeship">
        <div class="container">
            <div class="col-lg-12 items">
                <div class="row">

                    <div class="item col-lg-4">
                        <div class="col-md-3">
                            <i class="fas fa-shipping-fast"></i>
                        </div>
                        <div class="text col-md-9 text-left">
                            <div>
                                <h5>giao hàng miễn phí</h5>
                            </div>
                            <div>
                                <p>Giao hàng miễn phí toàn quốc</p>
                            </div>
                        </div>
                    </div>
                    <div class="item col-lg-4">
                        <div class="col-md-3">
                            <i class="fa fa-credit-card" aria-hidden="true"></i>
                        </div>
                        <div class="text col-md-9 text-left">
                            <div>
                                <h5>Thanh toán dễ dàng</h5>
                            </div>
                            <div>
                                <p>Chấp nhận tất cả thẻ tín dụng</p>
                            </div>
                        </div>
                    </div>

                    <div class="item col-lg-4">
                        <div class="col-md-3">
                            <i class="fas fa-headset"></i>
                        </div>
                        <div class="text col-md-9 text-left">
                            <div>
                                <h5>Hỗ trợ tư vấn trực tuyến</h5>
                            </div>
                            <div>
                                <p>Tư vấn trực tuyến 24/7</p>
                            </div>
                        </div>
                    </div>

                    <div class="item col-lg-4">
                        <div class="col-md-3">
                            <i class="fa fa-sun-o" aria-hidden="true"></i>
                        </div>
                        <div class="text col-md-9 text-left">
                            <div>
                                <h5>Thanh toán an toàn</h5>
                            </div>
                            <div>
                                <p>Bảo mật tuyệt đối thông tin</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    </div>
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
                            <input class="sign_text" type="text" placeholder="Nhập email của bạn ..." />
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
                            <h2>chi nhánh</h2>
                            <ul class="footer_menu">
                                <li><a href="https://goo.gl/maps/tkK3Uus9TFCd5jCH6">Số 38, ngõ 475 Nguyễn Trãi, Thanh Xuân, Hà Nội</a></li>
                                <li><a href="https://goo.gl/maps/8pGc9QHxCoJJxz7C8">Số 11, ngõ 104, Định Công, Hoàng Mai, Hà Nội</a></li>
                                <li><a href="https://goo.gl/maps/VfWGFaUo5x4Cz65g6">Số 12, Chùa Bộc, Quang Trung, Đống Đa, Hà Nội</a></li>
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