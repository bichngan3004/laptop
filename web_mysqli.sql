-- phpMyAdmin SQL Dump
-- version 2.11.6
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 25, 2021 at 07:26 PM
-- Server version: 5.0.51
-- PHP Version: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `web_mysqli`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `id_admin` int(10) unsigned NOT NULL auto_increment,
  `username` varchar(100) character set utf8 collate utf8_unicode_ci NOT NULL,
  `password` varchar(100) character set utf8 collate utf8_unicode_ci NOT NULL,
  `admin_status` int(11) NOT NULL,
  PRIMARY KEY  (`id_admin`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`id_admin`, `username`, `password`, `admin_status`) VALUES
(2, 'LeXuanTien', 'e10adc3949ba59abbe56e057f20f883e', 0),
(3, 'admin', '900150983cd24fb0d6963f7d28e17f72', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_cart`
--

CREATE TABLE `tbl_cart` (
  `id_cart` int(10) unsigned NOT NULL auto_increment,
  `id_khachhang` int(11) NOT NULL,
  `code_cart` varchar(10) character set utf8 collate utf8_unicode_ci NOT NULL,
  `cart_status` int(11) NOT NULL,
  PRIMARY KEY  (`id_cart`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `tbl_cart`
--

INSERT INTO `tbl_cart` (`id_cart`, `id_khachhang`, `code_cart`, `cart_status`) VALUES
(1, 20, '5725', 0),
(2, 20, '2805', 0),
(3, 24, '3955', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_cart_details`
--

CREATE TABLE `tbl_cart_details` (
  `id_cart_details` int(10) unsigned NOT NULL auto_increment,
  `code_cart` varchar(10) character set utf8 collate utf8_unicode_ci NOT NULL,
  `id_sanpham` int(11) NOT NULL,
  `soluongmua` int(11) NOT NULL,
  PRIMARY KEY  (`id_cart_details`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `tbl_cart_details`
--

INSERT INTO `tbl_cart_details` (`id_cart_details`, `code_cart`, `id_sanpham`, `soluongmua`) VALUES
(1, '5725', 20, 1),
(2, '2805', 20, 1),
(3, '3955', 8, 2),
(4, '3955', 16, 3),
(5, '3955', 13, 1),
(6, '3955', 17, 1),
(7, '3955', 20, 1),
(8, '3955', 21, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_dangky`
--

CREATE TABLE `tbl_dangky` (
  `id_dangky` int(10) unsigned NOT NULL auto_increment,
  `tenkhachhang` varchar(100) character set utf8 collate utf8_unicode_ci NOT NULL,
  `email` varchar(100) NOT NULL,
  `diachi` varchar(100) character set utf8 collate utf8_unicode_ci NOT NULL,
  `matkhau` varchar(100) NOT NULL,
  `dienthoai` int(11) NOT NULL,
  PRIMARY KEY  (`id_dangky`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=25 ;

--
-- Dumping data for table `tbl_dangky`
--

INSERT INTO `tbl_dangky` (`id_dangky`, `tenkhachhang`, `email`, `diachi`, `matkhau`, `dienthoai`) VALUES
(3, 'Lê Xuân Tiến', 'Xuantienle0407@gmail.com', '0792230125', 'e10adc3949ba59abbe56e057f20f883e', 486),
(11, 'Lê Xuân Tiến', 'Xuantienle0407@gmail.com', '0792230125', 'e10adc3949ba59abbe56e057f20f883e', 486),
(12, 'Lê Xuân Tiến', 'Xuantienle04@gmail.com', '0792230125', 'e10adc3949ba59abbe56e057f20f883e', 486),
(13, 'Lê Xuân Tiến', 'Xuantienle0407@gmail.com', '0792230125', 'e10adc3949ba59abbe56e057f20f883e', 486),
(14, 'Lê Xuân Tiến', 'Xuantienle0407@gmail.com', '0792230125', 'e10adc3949ba59abbe56e057f20f883e', 486),
(15, 'Lê Xuân Tiến', 'Xuantienle0407@gmail.com', '0792230125', '202cb962ac59075b964b07152d234b70', 486),
(20, 'Phạm Thị Bích Ngân', 'bichngan12a11@gmail.com', '0833560458', 'e10adc3949ba59abbe56e057f20f883e', 0),
(24, 'Nguyễn Hoàng Cẩm Thi', 'camthi0308@gmail.com', 'VN', 'e10adc3949ba59abbe56e057f20f883e', 799535215);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_danhmuc`
--

CREATE TABLE `tbl_danhmuc` (
  `id_danhmuc` int(10) unsigned NOT NULL auto_increment,
  `tendanhmuc` varchar(100) character set utf8 collate utf8_unicode_ci NOT NULL,
  `thutu` int(11) NOT NULL,
  PRIMARY KEY  (`id_danhmuc`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `tbl_danhmuc`
--

INSERT INTO `tbl_danhmuc` (`id_danhmuc`, `tendanhmuc`, `thutu`) VALUES
(6, 'Laptop', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_hotro`
--

CREATE TABLE `tbl_hotro` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `thongtinlienhe` text character set utf8 collate utf8_unicode_ci NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tbl_hotro`
--

INSERT INTO `tbl_hotro` (`id`, `thongtinlienhe`) VALUES
(1, '<ol>\r\n	<li>Số điện thoại:</li>\r\n	<li>Zalo:</li>\r\n	<li>Facebook:</li>\r\n	<li>Instagram:</li>\r\n</ol>\r\n\r\n<p><img alt="" src="https://vtv1.mediacdn.vn/2021/8/21/photo-1-1629535431715979476870.png" style="height:224px; width:400px" /><img alt="" src="https://cdn.mos.cms.futurecdn.net/VdvpuXPAzBGSYKwznGb4N9-1200-80.jpg" style="height:225px; width:400px" /></p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_sanpham`
--

CREATE TABLE `tbl_sanpham` (
  `id_sanpham` int(10) unsigned NOT NULL auto_increment,
  `tensanpham` varchar(250) character set utf8 collate utf8_unicode_ci NOT NULL,
  `masp` varchar(100) character set utf8 collate utf8_unicode_ci NOT NULL,
  `giasp` varchar(50) character set utf8 collate utf8_unicode_ci NOT NULL,
  `soluong` int(11) NOT NULL,
  `hinhanh` varchar(50) character set utf8 collate utf8_unicode_ci NOT NULL,
  `tomtat` tinytext character set utf8 collate utf8_unicode_ci NOT NULL,
  `noidung` text character set utf8 collate utf8_unicode_ci NOT NULL,
  `tinhtrang` int(11) NOT NULL,
  `id_danhmuc` int(10) NOT NULL,
  PRIMARY KEY  (`id_sanpham`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=22 ;

--
-- Dumping data for table `tbl_sanpham`
--

INSERT INTO `tbl_sanpham` (`id_sanpham`, `tensanpham`, `masp`, `giasp`, `soluong`, `hinhanh`, `tomtat`, `noidung`, `tinhtrang`, `id_danhmuc`) VALUES
(8, 'samsung', '2365', '8000000', 2, '1637394053_s8.jpg', 'moi', '99', 1, 6),
(12, 'iphone13', '002', '25000000', 5, '1637471989_', 'ss', '   â', 1, 6),
(13, 'iphone 8plus', '002', '10000000', 2, '1637419486_iphone8.jpg', 'dd', 'ss', 1, 6),
(14, 'Cáp chuyển USB', '1111', '150000', 10, '1637472454_', 'fwefblKQEFGIULfwaga', ' ưddrgubiaerlghwlewbgesbgvaserga', 1, 6),
(16, 'Iphone', '5316', '25000000', 5, '1637475622_1637396976_iphone8.jpg', '', '', 1, 6),
(17, 'Cáp chuyển USB', '5464', '150000', 1, '1637475694_m-products-cap-chuyen-usb-type-c-ra-aud', '', '', 1, 6),
(18, 'Iphone 13', 'IP13', '400000000', 10, '1637499415_iphone-12-pro-gold-600x600.jpg', 'Mới 100%', 'Điện thoại apple', 1, 6),
(19, 'Máy tính', '1', '12', 123, '1637516483_hinh-anh-dong-chuc-sinh-nhat-5.webp', '', '', 1, 6),
(20, 'iphone 8plus', '005', '12000000', 5, '1637585066_iphone8.jpg', 'fff', 'ww', 1, 6),
(21, 'Iphone8', '4694', '8000000', 15, '1637419486_iphone8.jpg', 'fgsergjblefvszfzsbdc zsfkaweufbzskdvzksfbawFbag', 'fjhbLFDhb SEKFCMwkuwfbasdfaf,gƯBKFBDJVDFLGAW', 1, 6);
