-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 06, 2021 at 07:07 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sugarcake`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cart_id` int(10) NOT NULL,
  `pd_id` int(10) NOT NULL,
  `user_username` varchar(500) NOT NULL,
  `qty` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`cart_id`, `pd_id`, `user_username`, `qty`) VALUES
(5, 37, 'marklin', 8),
(6, 39, 'marklin', 6),
(7, 46, 'marklin', 4),
(8, 49, 'marklin', 13),
(9, 52, 'marklin', 5);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `cat_id` int(2) NOT NULL,
  `cat_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cat_id`, `cat_name`) VALUES
(1, 'เค้ก'),
(2, 'โรล'),
(9, 'เครื่องดื่ม');

-- --------------------------------------------------------

--
-- Table structure for table `orderdetail`
--

CREATE TABLE `orderdetail` (
  `detail_id` int(11) NOT NULL,
  `pd_id` int(5) NOT NULL,
  `qty` int(100) NOT NULL,
  `price` int(10) NOT NULL,
  `order_type` int(5) NOT NULL,
  `purchase_id` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `orderdetail`
--

INSERT INTO `orderdetail` (`detail_id`, `pd_id`, `qty`, `price`, `order_type`, `purchase_id`) VALUES
(1, 1, 2, 500, 0, 1),
(2, 37, 1, 80, 0, 2),
(3, 38, 1, 80, 0, 2),
(4, 46, 1, 55, 0, 2),
(5, 37, 1, 80, 0, 3),
(6, 38, 1, 80, 0, 3),
(7, 40, 1, 65, 0, 3),
(8, 46, 1, 55, 0, 4),
(9, 47, 1, 35, 0, 4),
(10, 48, 2, 75, 0, 4),
(11, 38, 1, 80, 0, 5),
(12, 39, 1, 65, 0, 5);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `pd_id` int(5) NOT NULL,
  `pd_name` varchar(50) NOT NULL,
  `pd_price` int(5) NOT NULL,
  `pd_img` varchar(500) NOT NULL,
  `pd_des` varchar(500) NOT NULL,
  `qty_wholesale` int(50) NOT NULL,
  `price_wholesale` int(50) NOT NULL,
  `cat_id` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`pd_id`, `pd_name`, `pd_price`, `pd_img`, `pd_des`, `qty_wholesale`, `price_wholesale`, `cat_id`) VALUES
(37, 'เครปเค้กชาเขียว', 80, 'img/img6085b01f895e8.jpg', '5', 0, 0, 1),
(38, 'แพนเค้ก', 80, 'img/img6085b08a6a559.png', '3', 0, 0, 1),
(39, 'ชีสเค้ก', 65, 'img/img6085b11dc58fd.png', '5', 0, 0, 1),
(40, 'บลูเบอร์รี่ชีสพาย', 65, 'img/img6085b2f02edbb.jpg', '4', 0, 0, 1),
(46, 'บลูเบอร์รี่ชีสเค้ก', 55, 'img/img6085b81d6740d.jpg', '5', 0, 0, 1),
(47, 'โรลสตอเบอร์รี่', 35, 'img/img6085b84ed7a78.jpg', '5', 0, 0, 2),
(48, 'เครปเค้กเรนโบว์', 75, 'img/img6085b87c1078f.jpg', '5', 0, 0, 1),
(49, 'เค้กวุ้นอัญชัน', 20, 'img/img6085b9a1e8639.jpg', '3', 0, 0, 1),
(50, 'โรลส้ม', 40, 'img/img6085bb2841ab4.jpg', '3', 0, 0, 2),
(51, 'เค้กข้าวเหนียวมะม่วง', 85, 'img/img6085bb66ef635.jpg', '1', 0, 0, 1),
(52, 'บราวนี่', 50, 'img/img6085bd8a97597.jpg', '7', 0, 0, 1),
(53, 'คัพเค้กเบอร์รี่', 50, 'img/img6085bfd4a6c4e.jpg', '3', 0, 0, 1),
(54, 'เค้กเสาวรส', 60, 'img/img6085bfedacb88.jpg', '2', 0, 0, 1),
(55, 'คัพเค้กบลูเบอร์รี่', 50, 'img/img6085c00f0ab66.jpg', '3', 0, 0, 1),
(56, 'น้ำเปล่ากลิ่นมะนาว', 15, 'img/img6085c06a24a3c.png', '-', 0, 0, 9),
(57, 'น้ำแตงโม', 30, 'img/img6085c2d62358b.jpg', '1', 0, 0, 9),
(58, 'น้ำส้ม', 30, 'img/img6085c2eeecd4b.jpg', '1', 0, 0, 9),
(59, 'นมสด', 30, 'img/img6085c31a6d15b.jpg', '3', 0, 0, 9),
(60, 'น้ำชาเขียว', 30, 'img/img6085c33e13e42.jpg', '1', 0, 0, 9),
(61, 'น้ำสตอเบอร์รี่', 30, 'img/img6085c358397af.jpg', '1', 0, 0, 9),
(62, 'น้ำบีทรูท', 30, 'img/img6085c38f477e4.jpg', '1', 0, 0, 9),
(63, 'น้ำอัญชันมะนาว', 30, 'img/img6085c3afe9a56.jpg', '1', 0, 0, 9),
(64, 'ตะโก้', 35, 'img/img60862fc073ace.jpg', '2', 0, 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `purchaseorder`
--

CREATE TABLE `purchaseorder` (
  `purchase_id` int(50) NOT NULL,
  `purchase_price` int(10) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `deleted_at` date NOT NULL,
  `user_username` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `purchaseorder`
--

INSERT INTO `purchaseorder` (`purchase_id`, `purchase_price`, `created_at`, `deleted_at`, `user_username`) VALUES
(1, 500, '2021-04-08 13:22:16', '2021-04-14', '4'),
(2, 215, '2021-04-26 06:33:00', '0000-00-00', ''),
(3, 225, '2021-04-26 06:47:31', '0000-00-00', 'marklin'),
(4, 240, '2021-08-03 04:14:23', '0000-00-00', 'oh_aew'),
(5, 145, '2021-08-03 06:15:22', '0000-00-00', 'oh_aew');

-- --------------------------------------------------------

--
-- Table structure for table `setbox`
--

CREATE TABLE `setbox` (
  `set_id` int(2) NOT NULL,
  `set_name` varchar(100) NOT NULL,
  `set_price` int(10) NOT NULL,
  `set_img` text NOT NULL,
  `set_qty` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `setbox`
--

INSERT INTO `setbox` (`set_id`, `set_name`, `set_price`, `set_img`, `set_qty`) VALUES
(1, 'SetA', 105, 'img/img60787edd1659d.png', 3),
(2, 'SetB', 100, 'img/img60787ec9b9c51.png', 3),
(3, 'SetA', 89, 'img/img60787ebc1b51b.png', 3);

-- --------------------------------------------------------

--
-- Table structure for table `setcus`
--

CREATE TABLE `setcus` (
  `setcus_id` int(10) NOT NULL,
  `setcus_price` int(10) NOT NULL,
  `user_username` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `setcus`
--

INSERT INTO `setcus` (`setcus_id`, `setcus_price`, `user_username`) VALUES
(1, 248, 'marklin'),
(2, 261, 'marklin'),
(3, 189, 'oh_aew');

-- --------------------------------------------------------

--
-- Table structure for table `setcusdetail`
--

CREATE TABLE `setcusdetail` (
  `setcusde_id` int(10) NOT NULL,
  `pd_id` int(10) NOT NULL,
  `qty` int(10) NOT NULL,
  `setcus_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `setcusdetail`
--

INSERT INTO `setcusdetail` (`setcusde_id`, `pd_id`, `qty`, `setcus_id`) VALUES
(1, 37, 1, 1),
(2, 38, 1, 1),
(3, 39, 1, 1),
(4, 49, 1, 1),
(5, 59, 1, 1),
(6, 37, 1, 2),
(7, 38, 1, 2),
(8, 39, 2, 2),
(9, 38, 1, 3),
(10, 39, 2, 3);

-- --------------------------------------------------------

--
-- Table structure for table `set_detail`
--

CREATE TABLE `set_detail` (
  `setdetail_id` int(2) NOT NULL,
  `set_id` int(2) NOT NULL,
  `pd_id` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `set_detail`
--

INSERT INTO `set_detail` (`setdetail_id`, `set_id`, `pd_id`) VALUES
(1, 1, 47),
(2, 1, 55),
(3, 1, 59),
(5, 2, 50),
(6, 2, 53),
(7, 2, 58),
(8, 3, 47),
(9, 3, 57),
(10, 3, 53);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(4) NOT NULL,
  `user_img` varchar(400) NOT NULL,
  `user_fname` varchar(50) NOT NULL,
  `user_lname` varchar(50) NOT NULL,
  `user_username` varchar(50) NOT NULL,
  `user_pass` varchar(10) NOT NULL,
  `user_email` varchar(50) NOT NULL,
  `user_tel` varchar(10) NOT NULL,
  `user_birth` date NOT NULL,
  `user_gender` int(2) NOT NULL,
  `user_address` varchar(500) NOT NULL,
  `user_status` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_img`, `user_fname`, `user_lname`, `user_username`, `user_pass`, `user_email`, `user_tel`, `user_birth`, `user_gender`, `user_address`, `user_status`) VALUES
(1, '', 'พันวา', 'สุรมณฑา', 'oh_aew', '1234', 'ohaew@gmail.com', '0981702726', '1999-01-17', 0, 'Danaiwittaya Puket', 3),
(2, '', 'นิลาวัณย์', 'จันทนะ', 'taenlvn', '1234', 'taenlvn@gmail.com', '0934652383', '1999-07-13', 0, '777/2 ม. 15 ต. พันดอน อ. กุมภวาปี จ. อุดรธานี\r\n', 1),
(20, '', 'ตะนอย', 'ลีส์', 'staff', '1234', 'tanoy@gmail.com', '0801630597', '1999-04-11', 2, 'โคราชบ้านเอ็ง', 2),
(33, 'img/pp.png', 'ชาคริต', 'กล้าดี', 'marklin', '1234', 'mark@gmail.com', '0623393533', '2021-03-31', 1, 'หนองเรือ', 1),
(34, 'img/img60858d9e684a4.png', 'ภานุวัฒน์', 'ยี่สุ่นซ้อน', 'panuwat', '1234', 'kk@hotmail.com', '0971147514', '2021-04-15', 1, 'ชลบุรี', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cart_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `orderdetail`
--
ALTER TABLE `orderdetail`
  ADD PRIMARY KEY (`detail_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`pd_id`);

--
-- Indexes for table `purchaseorder`
--
ALTER TABLE `purchaseorder`
  ADD PRIMARY KEY (`purchase_id`);

--
-- Indexes for table `setbox`
--
ALTER TABLE `setbox`
  ADD PRIMARY KEY (`set_id`);

--
-- Indexes for table `setcus`
--
ALTER TABLE `setcus`
  ADD PRIMARY KEY (`setcus_id`);

--
-- Indexes for table `setcusdetail`
--
ALTER TABLE `setcusdetail`
  ADD PRIMARY KEY (`setcusde_id`);

--
-- Indexes for table `set_detail`
--
ALTER TABLE `set_detail`
  ADD PRIMARY KEY (`setdetail_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cart_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `cat_id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `orderdetail`
--
ALTER TABLE `orderdetail`
  MODIFY `detail_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `pd_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT for table `purchaseorder`
--
ALTER TABLE `purchaseorder`
  MODIFY `purchase_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `setbox`
--
ALTER TABLE `setbox`
  MODIFY `set_id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `setcus`
--
ALTER TABLE `setcus`
  MODIFY `setcus_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `setcusdetail`
--
ALTER TABLE `setcusdetail`
  MODIFY `setcusde_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `set_detail`
--
ALTER TABLE `set_detail`
  MODIFY `setdetail_id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
