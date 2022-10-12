-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th6 17, 2021 lúc 06:59 AM
-- Phiên bản máy phục vụ: 10.4.18-MariaDB
-- Phiên bản PHP: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `fan_shop`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cart`
--

CREATE TABLE `cart` (
  `id_cart` int(11) NOT NULL,
  `Id_user` int(11) NOT NULL,
  `id_product` int(11) NOT NULL,
  `name_product` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `price` double NOT NULL,
  `number` int(11) NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `cart`
--

INSERT INTO `cart` (`id_cart`, `Id_user`, `id_product`, `name_product`, `price`, `number`, `image`) VALUES
(22, 6, 9, 'Ceiling fan chandelier CQ8217', 9922222, 1, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT2vjKVDiDK01Q0_pR17OMckxI19c8kfLuvYc2DUattbVzQXNLd6SntSsPoPJb_t8CTr1E&usqp=CAU');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `category`
--

CREATE TABLE `category` (
  `id_category` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `category`
--

INSERT INTO `category` (`id_category`, `name`) VALUES
(1, 'Ceiling Fans'),
(2, 'Tower Fans'),
(3, 'Misting Fans'),
(4, 'Steam Fans'),
(5, 'Stand Fans'),
(6, 'Wall Fans'),
(7, 'Box Fans'),
(8, 'Exhaust Fans');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `color`
--

CREATE TABLE `color` (
  `id_color` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `color`
--

INSERT INTO `color` (`id_color`, `name`) VALUES
(1, 'BLACK'),
(2, 'BLUE'),
(3, 'YELLOW'),
(4, 'GREEN'),
(5, 'RED'),
(6, 'WHITE');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `comment`
--

CREATE TABLE `comment` (
  `id_comment` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `content_comment` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Quality` int(11) NOT NULL,
  `Price` int(11) NOT NULL,
  `Service` int(11) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `orders`
--

CREATE TABLE `orders` (
  `id_orders` int(11) NOT NULL,
  `id_product` int(11) NOT NULL,
  `price` double NOT NULL,
  `number` int(11) NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `name` text COLLATE utf8_unicode_ci NOT NULL,
  `id_purchase_schedule` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `orders`
--

INSERT INTO `orders` (`id_orders`, `id_product`, `price`, `number`, `image`, `name`, `id_purchase_schedule`) VALUES
(5, 8, 13683600, 3, 'https://thegioianhsang.vn/application/upload/products/den-chum-quat-tran-q6099.jpg', 'Đèn chùm quạt trần Ø1100mm AN20-QĐ6099', 7),
(6, 5, 39966, 1, 'https://gigasun.com.vn/Data/upload/images/quat-tran-thong-minh/gigasun-eg02-1.jpg', 'Quạt trần trang trí cao cấp giá tốt nhất năm 2020', 8),
(7, 5, 39966, 1, 'https://gigasun.com.vn/Data/upload/images/quat-tran-thong-minh/gigasun-eg02-1.jpg', 'Quạt trần trang trí cao cấp giá tốt nhất năm 2020', 9),
(8, 6, 496600, 1, 'https://salt.tikicdn.com/ts/product/ee/c3/4b/21bded05dc3553beeec9f149743b810b.jpg', 'Quạt Trần Cánh Xoè Đẹp Lõi Đồng', 9),
(9, 7, 5622000, 1, 'https://quatroyal.com/wp-content/uploads/2018/12/672d7a36a41eb32edd2658a98c7efeb5.jpeg', 'Quạt cây cổ đẹp FT-141-BS', 9),
(10, 5, 239796, 6, 'https://gigasun.com.vn/Data/upload/images/quat-tran-thong-minh/gigasun-eg02-1.jpg', 'Quạt trần trang trí cao cấp giá tốt nhất năm 2020', 10),
(11, 1, 10000, 1, 'https://lightfan.net/images/2018/05/11/den-quat-tran-led-jc8512.jpg', 'Đèn quạt trần cao cấp phong cách Trung Hoa JC8512', 10),
(12, 9, 9922222, 1, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT2vjKVDiDK01Q0_pR17OMckxI19c8kfLuvYc2DUattbVzQXNLd6SntSsPoPJb_t8CTr1E&usqp=CAU', 'Ceiling fan chandelier CQ8217', 11);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product`
--

CREATE TABLE `product` (
  `id_product` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `price` double NOT NULL,
  `description` varchar(4000) COLLATE utf8_unicode_ci NOT NULL,
  `array_image_description` varchar(4000) COLLATE utf8_unicode_ci NOT NULL,
  `total_number` int(255) NOT NULL,
  `create_time` date NOT NULL,
  `sale_time` date NOT NULL,
  `id_category` int(11) NOT NULL,
  `id_color` int(11) NOT NULL,
  `id_the_firm` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `product`
--

INSERT INTO `product` (`id_product`, `name`, `image`, `price`, `description`, `array_image_description`, `total_number`, `create_time`, `sale_time`, `id_category`, `id_color`, `id_the_firm`) VALUES
(1, 'High-end Chinese style ceiling fan light JC8512', 'https://lightfan.net/images/2018/05/11/den-quat-tran-led-jc8512.jpg', 10000, ' <li>Mountain Air 52YFT-1091 is a decorative ceiling fan with integrated LEDs to help use the space more sparkling and luxurious.</li>\r\n                                                <li>Modern fan design, wings are made of laminated wood with a beautiful gray paint suitable for all installation spaces such as homes, restaurants, and apartments.</li>\r\n                                                <li>The ceiling fan has 4 wings, the blade diameter is 132cm, will be suitable for installation for a large room space of 12 m&sup2; - 15 m&sup2;. The engine is protected by stainless steel plate (Brush Nickel)\r\n                                                    that is scratch resistant and always shiny.</li>\r\n                                                <li>Mountain Air 52YFT -1091 ceiling fan has a 70W fan capacity, 30W LED bulb capacity saves energy. The motor is manufactured using high technology to keep the fan running smoothly and without vibrations.</li>\r\n                                                <li>The product comes with a remote control to help you adjust the lights or the wind speed more conveniently.</li>', 'https://lightfan.net/images/2018/05/11/den-quat-tran-led-jc8512.jpg@https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQWDphJWCR8ORWSKJgtT3OVmEB3E2CLTZTL1g&usqp=CAU@https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRPWiNbL9efJnyPGMk3LYp6VN3ykCw80oxGTw&usqp=CAU@https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQhFn8LqXUY7nWxY0ntVp0TgB_QnrEPknnCoA&usqp=CAU', 100, '2021-05-31', '0000-00-00', 1, 1, 1),
(2, 'High-class Ceiling Fan Lamp 5 Blades 018 Black', 'https://vn-test-11.slatic.net/p/544cc1689cb9f77b2f7d600f5ea46464.jpg_800x800Q100.jpg', 10000000, ' <li>Mountain Air 52YFT-1091 is a decorative ceiling fan with integrated LEDs to help use the space more sparkling and luxurious.</li>\r\n                                                <li>Modern fan design, wings are made of laminated wood with a beautiful gray paint suitable for all installation spaces such as homes, restaurants, and apartments.</li>\r\n                                                <li>The ceiling fan has 4 wings, the blade diameter is 132cm, will be suitable for installation for a large room space of 12 m&sup2; - 15 m&sup2;. The engine is protected by stainless steel plate (Brush Nickel)\r\n                                                    that is scratch resistant and always shiny.</li>\r\n                                                <li>Mountain Air 52YFT -1091 ceiling fan has a 70W fan capacity, 30W LED bulb capacity saves energy. The motor is manufactured using high technology to keep the fan running smoothly and without vibrations.</li>\r\n                                                <li>The product comes with a remote control to help you adjust the lights or the wind speed more conveniently.</li>', 'https://lightfan.net/images/2018/05/11/den-quat-tran-led-jc8512.jpg@https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQWDphJWCR8ORWSKJgtT3OVmEB3E2CLTZTL1g&usqp=CAU@https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRPWiNbL9efJnyPGMk3LYp6VN3ykCw80oxGTw&usqp=CAU@https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQhFn8LqXUY7nWxY0ntVp0TgB_QnrEPknnCoA&usqp=CAU', 100, '2021-05-31', '0000-00-00', 1, 2, 2),
(3, 'High-end ceiling fan', 'https://lh3.googleusercontent.com/proxy/RBbTb0yZFg46PZRI0cPteahxJVLnBeWixWzl85NIwGyI7qR3WcETbOg1bMpYGUUTLIWJ0JIIrDSdjQw5XSaFNtYrtOjmR-koyB7YGlKbRpKa9_WpTnxjm7Rtauc0', 1000000, ' <li>Mountain Air 52YFT-1091 is a decorative ceiling fan with integrated LEDs to help use the space more sparkling and luxurious.</li>\r\n                                                <li>Modern fan design, wings are made of laminated wood with a beautiful gray paint suitable for all installation spaces such as homes, restaurants, and apartments.</li>\r\n                                                <li>The ceiling fan has 4 wings, the blade diameter is 132cm, will be suitable for installation for a large room space of 12 m&sup2; - 15 m&sup2;. The engine is protected by stainless steel plate (Brush Nickel)\r\n                                                    that is scratch resistant and always shiny.</li>\r\n                                                <li>Mountain Air 52YFT -1091 ceiling fan has a 70W fan capacity, 30W LED bulb capacity saves energy. The motor is manufactured using high technology to keep the fan running smoothly and without vibrations.</li>\r\n                                                <li>The product comes with a remote control to help you adjust the lights or the wind speed more conveniently.</li>', 'https://lightfan.net/images/2018/05/11/den-quat-tran-led-jc8512.jpg@https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQWDphJWCR8ORWSKJgtT3OVmEB3E2CLTZTL1g&usqp=CAU@https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRPWiNbL9efJnyPGMk3LYp6VN3ykCw80oxGTw&usqp=CAU@https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQhFn8LqXUY7nWxY0ntVp0TgB_QnrEPknnCoA&usqp=CAU', 100, '2021-05-31', '0000-00-00', 2, 3, 3),
(4, 'SmartHome High-end decorative ceiling fan with the best price in 2020', 'https://gigasun.com.vn/Data/upload/images/quat-tran-thong-minh/gigasun-eg03-3.jpg', 39999222, ' <li>Mountain Air 52YFT-1091 is a decorative ceiling fan with integrated LEDs to help use the space more sparkling and luxurious.</li>\r\n                                                <li>Modern fan design, wings are made of laminated wood with a beautiful gray paint suitable for all installation spaces such as homes, restaurants, and apartments.</li>\r\n                                                <li>The ceiling fan has 4 wings, the blade diameter is 132cm, will be suitable for installation for a large room space of 12 m&sup2; - 15 m&sup2;. The engine is protected by stainless steel plate (Brush Nickel)\r\n                                                    that is scratch resistant and always shiny.</li>\r\n                                                <li>Mountain Air 52YFT -1091 ceiling fan has a 70W fan capacity, 30W LED bulb capacity saves energy. The motor is manufactured using high technology to keep the fan running smoothly and without vibrations.</li>\r\n                                                <li>The product comes with a remote control to help you adjust the lights or the wind speed more conveniently.</li>', 'https://lightfan.net/images/2018/05/11/den-quat-tran-led-jc8512.jpg@https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQWDphJWCR8ORWSKJgtT3OVmEB3E2CLTZTL1g&usqp=CAU@https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRPWiNbL9efJnyPGMk3LYp6VN3ykCw80oxGTw&usqp=CAU@https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQhFn8LqXUY7nWxY0ntVp0TgB_QnrEPknnCoA&usqp=CAU', 100, '2021-05-31', '0000-00-00', 3, 4, 4),
(5, 'High-end decorative ceiling fan with the best price in 2020', 'https://gigasun.com.vn/Data/upload/images/quat-tran-thong-minh/gigasun-eg02-1.jpg', 39966, ' <li>Mountain Air 52YFT-1091 is a decorative ceiling fan with integrated LEDs to help use the space more sparkling and luxurious.</li>\r\n                                                <li>Modern fan design, wings are made of laminated wood with a beautiful gray paint suitable for all installation spaces such as homes, restaurants, and apartments.</li>\r\n                                                <li>The ceiling fan has 4 wings, the blade diameter is 132cm, will be suitable for installation for a large room space of 12 m&sup2; - 15 m&sup2;. The engine is protected by stainless steel plate (Brush Nickel)\r\n                                                    that is scratch resistant and always shiny.</li>\r\n                                                <li>Mountain Air 52YFT -1091 ceiling fan has a 70W fan capacity, 30W LED bulb capacity saves energy. The motor is manufactured using high technology to keep the fan running smoothly and without vibrations.</li>\r\n                                                <li>The product comes with a remote control to help you adjust the lights or the wind speed more conveniently.</li>', 'https://lightfan.net/images/2018/05/11/den-quat-tran-led-jc8512.jpg@https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQWDphJWCR8ORWSKJgtT3OVmEB3E2CLTZTL1g&usqp=CAU@https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRPWiNbL9efJnyPGMk3LYp6VN3ykCw80oxGTw&usqp=CAU@https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQhFn8LqXUY7nWxY0ntVp0TgB_QnrEPknnCoA&usqp=CAU', 100, '2021-05-31', '0000-00-00', 4, 5, 5),
(6, 'Copper Core Beautiful Flange Ceiling Fan', 'https://salt.tikicdn.com/ts/product/ee/c3/4b/21bded05dc3553beeec9f149743b810b.jpg', 496600, ' <li>Mountain Air 52YFT-1091 is a decorative ceiling fan with integrated LEDs to help use the space more sparkling and luxurious.</li>\r\n                                                <li>Modern fan design, wings are made of laminated wood with a beautiful gray paint suitable for all installation spaces such as homes, restaurants, and apartments.</li>\r\n                                                <li>The ceiling fan has 4 wings, the blade diameter is 132cm, will be suitable for installation for a large room space of 12 m&sup2; - 15 m&sup2;. The engine is protected by stainless steel plate (Brush Nickel)\r\n                                                    that is scratch resistant and always shiny.</li>\r\n                                                <li>Mountain Air 52YFT -1091 ceiling fan has a 70W fan capacity, 30W LED bulb capacity saves energy. The motor is manufactured using high technology to keep the fan running smoothly and without vibrations.</li>\r\n                                                <li>The product comes with a remote control to help you adjust the lights or the wind speed more conveniently.</li>', 'https://lightfan.net/images/2018/05/11/den-quat-tran-led-jc8512.jpg@https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQWDphJWCR8ORWSKJgtT3OVmEB3E2CLTZTL1g&usqp=CAU@https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRPWiNbL9efJnyPGMk3LYp6VN3ykCw80oxGTw&usqp=CAU@https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQhFn8LqXUY7nWxY0ntVp0TgB_QnrEPknnCoA&usqp=CAU', 100, '2021-05-31', '0000-00-00', 5, 6, 1),
(7, 'Beautiful antique tree fan FT-141-BS', 'https://quatroyal.com/wp-content/uploads/2018/12/672d7a36a41eb32edd2658a98c7efeb5.jpeg', 5622000, ' <li>Mountain Air 52YFT-1091 is a decorative ceiling fan with integrated LEDs to help use the space more sparkling and luxurious.</li>\r\n                                                <li>Modern fan design, wings are made of laminated wood with a beautiful gray paint suitable for all installation spaces such as homes, restaurants, and apartments.</li>\r\n                                                <li>The ceiling fan has 4 wings, the blade diameter is 132cm, will be suitable for installation for a large room space of 12 m&sup2; - 15 m&sup2;. The engine is protected by stainless steel plate (Brush Nickel)\r\n                                                    that is scratch resistant and always shiny.</li>\r\n                                                <li>Mountain Air 52YFT -1091 ceiling fan has a 70W fan capacity, 30W LED bulb capacity saves energy. The motor is manufactured using high technology to keep the fan running smoothly and without vibrations.</li>\r\n                                                <li>The product comes with a remote control to help you adjust the lights or the wind speed more conveniently.</li>', 'https://lightfan.net/images/2018/05/11/den-quat-tran-led-jc8512.jpg@https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQWDphJWCR8ORWSKJgtT3OVmEB3E2CLTZTL1g&usqp=CAU@https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRPWiNbL9efJnyPGMk3LYp6VN3ykCw80oxGTw&usqp=CAU@https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQhFn8LqXUY7nWxY0ntVp0TgB_QnrEPknnCoA&usqp=CAU', 100, '2021-05-31', '0000-00-00', 6, 1, 2),
(8, 'Ceiling fan chandelier 1100mm AN20-QD6099', 'https://thegioianhsang.vn/application/upload/products/den-chum-quat-tran-q6099.jpg', 4561200, ' <li>Mountain Air 52YFT-1091 is a decorative ceiling fan with integrated LEDs to help use the space more sparkling and luxurious.</li>\r\n                                                <li>Modern fan design, wings are made of laminated wood with a beautiful gray paint suitable for all installation spaces such as homes, restaurants, and apartments.</li>\r\n                                                <li>The ceiling fan has 4 wings, the blade diameter is 132cm, will be suitable for installation for a large room space of 12 m&sup2; - 15 m&sup2;. The engine is protected by stainless steel plate (Brush Nickel)\r\n                                                    that is scratch resistant and always shiny.</li>\r\n                                                <li>Mountain Air 52YFT -1091 ceiling fan has a 70W fan capacity, 30W LED bulb capacity saves energy. The motor is manufactured using high technology to keep the fan running smoothly and without vibrations.</li>\r\n                                                <li>The product comes with a remote control to help you adjust the lights or the wind speed more conveniently.</li>', 'https://lightfan.net/images/2018/05/11/den-quat-tran-led-jc8512.jpg@https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQWDphJWCR8ORWSKJgtT3OVmEB3E2CLTZTL1g&usqp=CAU@https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRPWiNbL9efJnyPGMk3LYp6VN3ykCw80oxGTw&usqp=CAU@https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQhFn8LqXUY7nWxY0ntVp0TgB_QnrEPknnCoA&usqp=CAU', 100, '2021-05-31', '0000-00-00', 6, 2, 3),
(9, 'Ceiling fan chandelier CQ8217', 'https://localhost/WebBanQuat/uploads/2021-06-01 (2).png', 9922222, ' <li>Mountain Air 52YFT-1091 is a decorative ceiling fan with integrated LEDs to help use the space more sparkling and luxurious.</li>\r\n                                                <li>Modern fan design, wings are made of laminated wood with a beautiful gray paint suitable for all installation spaces such as homes, restaurants, and apartments.</li>\r\n                                                <li>The ceiling fan has 4 wings, the blade diameter is 132cm, will be suitable for installation for a large room space of 12 m² - 15 m². The engine is protected by stainless steel plate (Brush Nickel)\r\n                                                    that is scratch resistant and always shiny.</li>\r\n                                                <li>Mountain Air 52YFT -1091 ceiling fan has a 70W fan capacity, 30W LED bulb capacity saves energy. The motor is manufactured using high technology to keep the fan running smoothly and without vibrations.</li>\r\n                                                <li>The product comes with a remote control to help you adjust the lights or the wind speed more conveniently.</li>', 'https://lightfan.net/images/2018/05/11/den-quat-tran-led-jc8512.jpg@https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQWDphJWCR8ORWSKJgtT3OVmEB3E2CLTZTL1g&usqp=CAU@https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRPWiNbL9efJnyPGMk3LYp6VN3ykCw80oxGTw&usqp=CAU@https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQhFn8LqXUY7nWxY0ntVp0TgB_QnrEPknnCoA&usqp=CAU', 100, '2021-05-31', '0000-00-00', 8, 3, 4);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `purchase_schedule`
--

CREATE TABLE `purchase_schedule` (
  `id_purchase_schedule` int(11) NOT NULL,
  `booking_date` date NOT NULL,
  `status` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `purchase_schedule`
--

INSERT INTO `purchase_schedule` (`id_purchase_schedule`, `booking_date`, `status`, `id_user`) VALUES
(7, '2021-06-06', '0', 6),
(8, '2021-06-06', '0', 6),
(9, '2021-06-06', '1', 6),
(10, '2021-06-06', '0', 6),
(11, '2021-06-06', '0', 6);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `specifications`
--

CREATE TABLE `specifications` (
  `id_specifications` int(11) NOT NULL,
  `area_used` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `voltage` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `wattage` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `wind_speed` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `number_of_propellers` int(255) DEFAULT NULL,
  `propeller_material` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `control` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `fan_diameter` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `lamp_wattage` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `brand` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `made_in` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `guarantee` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `id_product` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `specifications`
--

INSERT INTO `specifications` (`id_specifications`, `area_used`, `voltage`, `wattage`, `wind_speed`, `number_of_propellers`, `propeller_material`, `control`, `fan_diameter`, `lamp_wattage`, `brand`, `made_in`, `guarantee`, `id_product`) VALUES
(1, '12m ² - 15m ²', '220V', '70W', '3m/s', NULL, '4', 'Yes', '132 cm', '18W', 'Japan', 'Japan', '5 years', 1),
(2, '12m ² - 15m ²', '220V', '70W', '3m/s', NULL, '4', 'Yes', '132 cm', '18W', 'Japan', 'Japan', '5 years', 2),
(3, '12m ² - 15m ²', '220V', '70W', '3m/s', NULL, '4', 'Yes', '132 cm', '18W', 'Japan', 'Japan', '5 years', 3),
(4, '12m ² - 15m ²', '220V', '70W', '3m/s', NULL, '4', 'Yes', '132 cm', '18W', 'Japan', 'Japan', '5 years', 4),
(5, '12m ² - 15m ²', '220V', '70W', '3m/s', NULL, '4', 'Yes', '132 cm', '18W', 'Japan', 'Japan', '5 years', 5),
(6, '12m ² - 15m ²', '220V', '70W', '3m/s', NULL, '4', 'Yes', '132 cm', '18W', 'Japan', 'Japan', '5 years', 6),
(7, '12m ² - 15m ²', '220V', '70W', '3m/s', NULL, '4', 'Yes', '132 cm', '18W', 'Japan', 'Japan', '5 years', 7),
(8, '12m ² - 15m ²', '220V', '70W', '3m/s', NULL, '4', 'Yes', '132 cm', '18W', 'Japan', 'Japan', '5 years', 8),
(9, '12m ² - 15m ²', '220V', '70W', '3m/s', NULL, '4', 'Yes', '132 cm', '18W', 'Japan', 'Japan', '5 years', 9);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `admin_id` int(11) NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `admin_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_admin`
--

INSERT INTO `tbl_admin` (`admin_id`, `email`, `password`, `admin_name`) VALUES
(1, 'admin@gmail.com', '21232f297a57a5a743894a0e4a801fc3', 'admin');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `the_firm`
--

CREATE TABLE `the_firm` (
  `id_the_firm` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `the_firm`
--

INSERT INTO `the_firm` (`id_the_firm`, `name`) VALUES
(1, 'PANASONIC'),
(2, 'TOSHIBA'),
(3, 'MITSUBISI'),
(4, 'SENKO'),
(5, 'YANFAN');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `password`, `phone`, `address`) VALUES
(6, 'sangthaiba', 'thaibasang8@gmail.com', 'a2505162af430dcdf773ed6a10861833', NULL, NULL);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id_cart`),
  ADD KEY `fk_id_user1` (`Id_user`),
  ADD KEY `fk_id_product1` (`id_product`);

--
-- Chỉ mục cho bảng `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id_category`);

--
-- Chỉ mục cho bảng `color`
--
ALTER TABLE `color`
  ADD PRIMARY KEY (`id_color`);

--
-- Chỉ mục cho bảng `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id_comment`),
  ADD KEY `fk_id_user` (`id_user`);

--
-- Chỉ mục cho bảng `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id_orders`),
  ADD KEY `fk_id_product2` (`id_product`),
  ADD KEY `fk_id_purchase_schedule` (`id_purchase_schedule`);

--
-- Chỉ mục cho bảng `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id_product`),
  ADD KEY `fi_id_category` (`id_category`),
  ADD KEY `fk_id_the_firm` (`id_the_firm`);

--
-- Chỉ mục cho bảng `purchase_schedule`
--
ALTER TABLE `purchase_schedule`
  ADD PRIMARY KEY (`id_purchase_schedule`);

--
-- Chỉ mục cho bảng `specifications`
--
ALTER TABLE `specifications`
  ADD PRIMARY KEY (`id_specifications`),
  ADD KEY `fk_id_product` (`id_product`);

--
-- Chỉ mục cho bảng `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Chỉ mục cho bảng `the_firm`
--
ALTER TABLE `the_firm`
  ADD PRIMARY KEY (`id_the_firm`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `cart`
--
ALTER TABLE `cart`
  MODIFY `id_cart` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT cho bảng `category`
--
ALTER TABLE `category`
  MODIFY `id_category` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `color`
--
ALTER TABLE `color`
  MODIFY `id_color` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `comment`
--
ALTER TABLE `comment`
  MODIFY `id_comment` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `orders`
--
ALTER TABLE `orders`
  MODIFY `id_orders` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT cho bảng `product`
--
ALTER TABLE `product`
  MODIFY `id_product` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT cho bảng `purchase_schedule`
--
ALTER TABLE `purchase_schedule`
  MODIFY `id_purchase_schedule` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT cho bảng `specifications`
--
ALTER TABLE `specifications`
  MODIFY `id_specifications` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `the_firm`
--
ALTER TABLE `the_firm`
  MODIFY `id_the_firm` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `fk_id_product1` FOREIGN KEY (`id_product`) REFERENCES `product` (`id_product`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_id_user1` FOREIGN KEY (`Id_user`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `fk_id_user` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `fk_id_product2` FOREIGN KEY (`id_product`) REFERENCES `product` (`id_product`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_id_purchase_schedule` FOREIGN KEY (`id_purchase_schedule`) REFERENCES `purchase_schedule` (`id_purchase_schedule`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `fi_id_category` FOREIGN KEY (`id_category`) REFERENCES `category` (`id_category`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_id_the_firm` FOREIGN KEY (`id_the_firm`) REFERENCES `the_firm` (`id_the_firm`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `specifications`
--
ALTER TABLE `specifications`
  ADD CONSTRAINT `fk_id_product` FOREIGN KEY (`id_product`) REFERENCES `product` (`id_product`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
