-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 21, 2019 at 08:20 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ci_spms_database`
--

-- --------------------------------------------------------

--
-- Table structure for table `follow`
--

CREATE TABLE `follow` (
  `f_id` int(11) NOT NULL,
  `u_id` int(11) NOT NULL,
  `fu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `follow`
--

INSERT INTO `follow` (`f_id`, `u_id`, `fu_id`) VALUES
(1, 20, 16),
(3, 20, 3),
(4, 3, 20),
(5, 3, 16),
(6, 1, 16),
(7, 17, 16),
(9, 20, 18),
(10, 20, 1),
(11, 16, 3),
(13, 1, 20),
(14, 1, 3);

-- --------------------------------------------------------

--
-- Table structure for table `permissioncomment`
--

CREATE TABLE `permissioncomment` (
  `pc_id` int(11) NOT NULL,
  `pc_detail` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `p_id` int(11) NOT NULL,
  `u_id` int(11) NOT NULL,
  `pc_createtime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `pc_updatetime` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissioncomment`
--

INSERT INTO `permissioncomment` (`pc_id`, `pc_detail`, `p_id`, `u_id`, `pc_createtime`, `pc_updatetime`) VALUES
(1, 'ขอนำไปใช้เพื่อการนำเสนองานนะคะ', 67, 17, '2019-07-02 07:11:38', '0000-00-00 00:00:00'),
(2, 'สวยมากเลยค่ะ ขอนำไปใช้ประกอบเล่มรายงานนะคะ', 49, 17, '2019-07-02 07:11:38', '0000-00-00 00:00:00'),
(3, 'สวยมากเลย ขอนำไปใช้เป็นภาพประกอบในหนังสือนะคะ', 3, 17, '2019-07-02 07:11:38', '0000-00-00 00:00:00'),
(4, 'นำไปใช้ในสื่อการเรียนการสอนครับ', 67, 4, '2019-07-02 07:11:38', '0000-00-00 00:00:00'),
(5, 'ขอนำไปใช้เป็นภาพประกอบสไลด์นำเสนอนะครับ', 67, 18, '2019-07-02 07:15:17', '0000-00-00 00:00:00'),
(6, 'ขอนำไปใช้ประกอบการวาดภาพนะครับ', 49, 18, '2019-07-02 07:28:03', '0000-00-00 00:00:00'),
(7, 'งดงาม', 67, 20, '2019-07-11 17:01:47', '0000-00-00 00:00:00'),
(8, 'สวยนะ', 73, 20, '2019-07-11 17:03:45', '0000-00-00 00:00:00'),
(9, 'gg', 71, 1, '2019-07-17 23:31:53', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `piclike`
--

CREATE TABLE `piclike` (
  `l_id` int(11) NOT NULL,
  `u_id` int(11) NOT NULL,
  `p_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `piclike`
--

INSERT INTO `piclike` (`l_id`, `u_id`, `p_id`) VALUES
(1, 20, 81),
(2, 16, 81),
(3, 3, 81),
(4, 20, 58),
(5, 1, 57),
(7, 1, 41),
(8, 1, 80),
(10, 1, 28),
(11, 1, 56),
(12, 1, 81),
(13, 20, 56),
(14, 20, 28),
(15, 20, 75),
(16, 20, 74),
(17, 20, 82),
(18, 16, 82),
(19, 16, 79),
(20, 20, 71),
(21, 20, 59),
(22, 3, 8),
(25, 3, 58),
(26, 3, 66),
(27, 3, 71),
(28, 3, 23),
(29, 3, 65),
(30, 3, 43),
(31, 3, 29),
(32, 3, 82),
(33, 3, 42),
(34, 3, 28),
(35, 20, 42),
(36, 20, 20),
(37, 20, 80),
(38, 16, 1),
(39, 16, 21),
(40, 16, 42),
(42, 16, 48),
(45, 1, 72),
(46, 1, 75),
(47, 1, 71),
(48, 1, 67),
(49, 1, 17),
(50, 1, 84),
(51, 1, 60),
(52, 1, 43),
(53, 1, 20),
(54, 1, 59),
(55, 1, 83),
(56, 1, 58),
(57, 16, 3);

-- --------------------------------------------------------

--
-- Table structure for table `pictures`
--

CREATE TABLE `pictures` (
  `p_id` int(11) NOT NULL,
  `p_name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `p_filename` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `p_detail` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `p_tag` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `u_id` int(11) NOT NULL,
  `p_view` int(11) NOT NULL,
  `p_download` int(11) NOT NULL,
  `p_createtime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `p_updatetime` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pictures`
--

INSERT INTO `pictures` (`p_id`, `p_name`, `p_filename`, `p_detail`, `p_tag`, `u_id`, `p_view`, `p_download`, `p_createtime`, `p_updatetime`) VALUES
(1, 'PIM', 'SKEE87181.jpg', 'ย้อนแสง', 'bw,black and white,silhouette', 16, 24, 3, '2019-06-12 16:31:15', '2019-07-21 11:02:41'),
(2, 'Keerati', 'SKEE8587.jpg', 'สวัสดีครับ', 'SPMS', 16, 1, 1, '2019-06-12 16:32:41', '2019-07-16 19:42:21'),
(3, 'Building', 'SKEE8721.jpg', 'ช่องหน้าต่างที่หอศิลป์', 'bw,black and white', 16, 5, 1, '2019-06-12 16:32:11', '2019-07-21 11:03:39'),
(4, 'Pimchanok', 'SKEE5557.jpg', 'สวัสดีครับ', 'SPMS', 16, 1, 1, '2019-06-11 17:35:47', '2019-07-16 19:42:21'),
(5, 'Kraiwit', 'SKEE4640.jpg', 'สวัสดีครับ', 'SPMS', 16, 2, 1, '2019-06-11 17:45:12', '2019-07-17 23:30:38'),
(6, 'Pimpim', 'SKEE7527.jpg', 'สวัสดีครับ', 'SPMS', 16, 3, 1, '2019-06-11 17:46:08', '2019-07-21 18:17:26'),
(7, 'Lovelove', 'SKEE8304.jpg', 'สวัสดีครับ', 'SPMS', 16, 1, 1, '2019-06-11 17:48:29', '2019-07-16 19:42:21'),
(8, 'Thailand Sakura', '_MG_9561.jpg', 'ดอกพญาเสือโคร่ง ที่ดอยอ่างขาง', 'SPMS', 3, 2, 1, '2019-06-11 06:36:11', '2019-07-17 20:34:21'),
(9, 'Travel', 'SKEE3730.JPG', 'สวัสดีครับ', 'SPMS', 16, 1, 1, '2019-06-11 10:11:26', '2019-07-16 19:42:21'),
(10, 'Love', 'SKEE6957.jpg', 'Pimchanok & Keerati', 'SPMS,Black & White,BW,Love,People,Portrait', 16, 14, 1, '2019-06-11 16:39:57', '2019-07-17 20:44:49'),
(11, 'หน้าใหญ่', 'gg1.jpg', 'หน้าใหญ่ อ้วนๆ', 'girl,people', 16, 6, 1, '2019-06-13 09:47:19', '2019-07-17 22:26:44'),
(12, 'gg2.jpg', 'gg2.jpg', 'สวัสดีครับ', 'SPMS', 16, 1, 1, '2019-06-13 09:48:44', '2019-07-16 19:42:21'),
(13, 'gg3.jpg', 'gg3.jpg', 'สวัสดีครับ', 'SPMS', 16, 1, 1, '2019-06-13 09:48:44', '2019-07-16 19:42:21'),
(14, 'gg4.jpg', 'gg4.jpg', 'สวัสดีครับ', 'SPMS', 16, 1, 1, '2019-06-13 09:49:20', '2019-07-16 19:42:21'),
(15, 'gg5.jpg', 'gg5.jpg', 'สวัสดีครับ', 'SPMS', 16, 1, 1, '2019-06-13 09:49:30', '2019-07-16 19:42:21'),
(16, 'gg6.jpg', 'gg6.jpg', 'สวัสดีครับ', 'SPMS', 16, 1, 1, '2019-06-13 09:49:46', '2019-07-16 19:42:21'),
(17, 'gg7.jpg', 'gg7.jpg', 'สวัสดีครับ', 'SPMS', 16, 3, 1, '2019-06-13 09:49:54', '2019-07-21 03:57:01'),
(20, 'gg10.jpg', 'gg10.jpg', 'สวัสดีครับ', 'SPMS', 16, 3, 1, '2019-06-13 09:50:18', '2019-07-21 07:12:30'),
(21, 'Smile', 'gg11.jpg', 'ยิ้ม', 'portrait,people,smile', 16, 10, 1, '2019-06-13 09:51:15', '2019-07-17 22:32:31'),
(22, 'gg12.jpg', 'gg12.jpg', 'สวัสดีครับ', 'SPMS', 16, 1, 1, '2019-06-13 09:51:22', '2019-07-16 19:42:21'),
(23, 'gg13.jpg', 'gg13.jpg', 'สวัสดีครับ', 'SPMS', 16, 5, 1, '2019-06-13 09:51:29', '2019-07-17 20:50:01'),
(24, 'gg14.jpg', 'gg14.jpg', 'สวัสดีครับ', 'SPMS', 16, 1, 1, '2019-06-13 09:51:36', '2019-07-16 19:42:21'),
(25, 'gg15.jpg', 'gg15.jpg', 'สวัสดีครับ', 'SPMS', 16, 1, 1, '2019-06-13 09:51:46', '2019-07-16 19:42:21'),
(26, 'gg16.jpg', 'gg16.jpg', 'สวัสดีครับ', 'SPMS', 16, 1, 1, '2019-06-13 09:52:41', '2019-07-16 19:42:21'),
(27, 'gg17.jpg', 'gg17.jpg', 'สวัสดีครับ', 'SPMS', 16, 1, 1, '2019-06-13 09:52:41', '2019-07-16 19:42:21'),
(28, 'gg18.jpg', 'gg18.jpg', 'สวัสดีครับ', 'SPMS', 16, 5, 1, '2019-06-13 09:56:33', '2019-07-17 23:04:10'),
(29, 'gg19.jpg', 'gg19.jpg', 'สวัสดีครับ', 'SPMS', 16, 2, 1, '2019-06-13 09:56:33', '2019-07-17 20:55:40'),
(30, 'gg20.jpg', 'gg20.jpg', 'สวัสดีครับ', 'SPMS', 16, 1, 1, '2019-06-13 09:56:33', '2019-07-16 19:42:21'),
(32, 'gg22.jpg', 'gg22.jpg', 'สวัสดีครับ', 'SPMS', 16, 1, 1, '2019-06-13 09:56:33', '2019-07-16 19:42:21'),
(36, 'gg26.jpg', 'gg26.jpg', 'สวัสดีครับ', 'SPMS', 16, 1, 1, '2019-06-13 09:56:33', '2019-07-16 19:42:21'),
(37, 'gg27.jpg', 'gg27.jpg', 'สวัสดีครับ', 'SPMS', 16, 1, 1, '2019-06-13 09:56:33', '2019-07-16 19:42:21'),
(38, 'gg28.jpg', 'gg28.jpg', 'สวัสดีครับ', 'SPMS', 16, 1, 1, '2019-06-13 09:56:33', '2019-07-16 19:42:21'),
(39, 'gg29.jpg', 'gg29.jpg', 'สวัสดีครับ', 'SPMS', 16, 1, 1, '2019-06-13 09:56:33', '2019-07-16 19:42:21'),
(40, 'gg30.jpg', 'gg30.jpg', 'สวัสดีครับ', 'SPMS', 16, 1, 1, '2019-06-13 09:56:33', '2019-07-16 19:42:21'),
(41, 'gg31', 'gg31.jpg', 'สวัสดีครับ', 'SPMS', 16, 2, 1, '2019-06-13 10:06:06', '2019-07-16 19:42:21'),
(42, 'White teeth', 'gg32.jpg', 'สวัสดีครับ', 'SPMS', 16, 13, 1, '2019-06-13 15:02:32', '2019-07-21 18:10:40'),
(43, 'King&Pim', 'gg33.jpg', 'สวัสดีครับ', 'SPMS', 16, 3, 1, '2019-06-13 15:43:39', '2019-07-21 07:12:26'),
(44, 'My love', '47687671_2058522287504503_3080265354014883840_o.jpg', 'สวัสดีครับ', 'SPMS', 16, 1, 1, '2019-06-13 15:49:30', '2019-07-16 19:42:21'),
(46, 'Mom', '51929213_2152187691471295_2566518223814000640_o.jpg', 'คุณแม่สุดที่รัก', 'Portrait,Mom,People,Love', 16, 1, 1, '2019-06-15 12:34:31', '2019-07-16 19:42:21'),
(47, 'Green', 'SKEE7693.jpg', 'สวัสดีครับ', 'SPMS', 16, 2, 1, '2019-06-15 12:39:27', '2019-07-16 19:42:21'),
(48, 'Sea', 'SKEE7871.jpg', 'สวัสดีครับ', 'SPMS', 16, 2, 1, '2019-06-15 12:39:44', '2019-07-17 23:16:48'),
(49, 'Vanila Sky', 'SKEE7728.jpg', 'สีของเมฆ และท้องฟ้า ในตอนที่พระอาทิตย์ใกล้จะลับขอบฟ้า', 'SPMS,sky,cloud,vanila sky', 16, 2, 1, '2019-06-15 12:39:59', '2019-07-17 07:46:44'),
(51, 'Friend', '16PhotographerAdmin20190616_0048AM41.jpg', 'สวัสดีครับ', 'SPMS', 16, 5, 1, '2019-06-15 17:48:41', '2019-07-21 18:17:15'),
(52, 'DUODUO', '16PhotographerAdmin20190616_004935AM.jpg', 'สวัสดีครับ', 'SPMS', 16, 1, 1, '2019-06-15 17:49:35', '2019-07-16 19:42:21'),
(54, 'Blur blur', '16PhotographerAdmin20190619_001848AM.jpg', 'สวัสดีครับ', 'Blur,Temple,Portrait,People', 16, 3, 2, '2019-06-18 17:18:49', '2019-07-17 22:27:02'),
(55, 'pimchanok kongdee', '16PhotographerAdmin20190619_022004AM.jpg', 'สวัสดีครับ', 'Portrait,Girl', 16, 1, 1, '2019-06-18 19:20:05', '2019-07-16 19:42:21'),
(56, 'Keerati cool cool', '3qqqqqqqq20190619_170136PM.jpg', 'สวัสดีครับ', 'silhouette,people,black and white,bw,light', 3, 8, 1, '2019-06-19 10:01:36', '2019-07-21 04:22:31'),
(57, 'เพื่อน', '3qqqqqqqq20190619_170349PM.jpg', 'สวัสดีครับ', 'friends,people,portrait,reunion', 3, 5, 1, '2019-06-19 10:03:49', '2019-07-21 04:00:37'),
(58, 'KKU kku', '3qqqqqqqq20190620_021147AM.jpg', 'หนุ่มเคเคยู', 'Graduate,celebration,Congratulation,KKU,University', 3, 15, 1, '2019-06-19 19:11:47', '2019-07-21 10:46:27'),
(59, 'Dek Dek', '3qqqqqqqq20190620_021525AM.jpg', 'สวัสดีครับ', 'Children,people', 3, 6, 1, '2019-06-19 19:15:25', '2019-07-21 07:12:38'),
(60, 'Thai Mountain', '16KeeratiPhotographerGGgggggg20190624_094141AM.jpg', 'ภูเขาฝั่งประเทศเพื่อนบ้าน', 'Landscape,Thailand,Mountain,Black and White,BW', 16, 4, 1, '2019-06-24 02:41:41', '2019-07-21 17:41:27'),
(63, 'กุ้งก้ามกราม', '3qqqqqqqq20190625_003928AM.jpg', 'กุ้งก้ามกรามในถังน้ำ', 'shrimp,food,animal', 3, 1, 1, '2019-06-24 17:39:28', '2019-07-16 19:42:21'),
(64, 'Min Min', '3qqqqqqqq20190627_161246PM.jpg', 'ถ่ายกับมิน', 'sister,university,friend', 3, 1, 1, '2019-06-27 09:12:46', '2019-07-16 19:42:21'),
(65, 'ต่ายจ๋อมก้อย', '3qqqqqqqq20190627_161504PM.jpg', 'ถ่ายกับ ก้อย จ๋อม ต่าย', 'friend,university,portrait,forever', 3, 2, 1, '2019-06-27 09:15:04', '2019-07-17 20:54:32'),
(66, 'เพื่อนๆของฉัน', '3qqqqqqqq20190627_161613PM.jpg', 'เพื่อนๆ รหัส 56', 'friend,university,people,forever', 3, 4, 1, '2019-06-27 09:16:13', '2019-07-17 20:45:46'),
(67, 'Whisky', '3PimchanokKongdee20190627_211848PM.jpg', 'Whisky in glass', 'drink,whisky,glass,spms', 3, 15, 2, '2019-06-27 14:18:48', '2019-07-21 04:15:50'),
(68, 'No rain No glow', '18กีรติรักษ์มณี20190703_153345PM.jpg', 'Espresso with orange juice', 'coffee,drink,espresso,orange juice', 18, 2, 1, '2019-07-03 08:33:45', '2019-07-17 12:57:10'),
(69, 'จุ้ง', '18กีรติรักษ์มณี20190703_162624PM.jpg', 'จุ้ง เยอะแยะเลย', 'shrimp,food,water,บ่อกุ้ง,กระทะร้อน', 18, 1, 1, '2019-07-03 09:26:24', '2019-07-16 19:42:21'),
(70, 'laptop', '3PimchanokKongdee20190708_162531PM.jpg', 'laptop ของ กีรติ keerati', 'laptop,pc,คอมพิวเตอร์,university', 3, 2, 1, '2019-07-08 09:25:31', '2019-07-17 22:00:17'),
(71, 'sunrise', '20SeventySeven20190711_223217PM.jpg', 'พระอาทิตย์ขึ้นที่เขาค้อ', 'sun,sunrise,mountain,cloud,fog,hill,landscape', 20, 9, 1, '2019-07-11 15:32:17', '2019-07-21 04:22:20'),
(72, 'ภูเขาและสายหมอก', '20SeventySeven20190711_223434PM.jpg', 'ถ่ายที่เขาค้อ', 'bw,black and white,landscape,mountain,fog,hill', 20, 2, 1, '2019-07-11 15:34:34', '2019-07-17 23:30:22'),
(73, 'กังหันสีดำ', '20SeventySeven20190711_235200PM.jpg', 'กังหันลม ที่ทุ่งกังหันลม', 'windmill,sky,bw,black and white,sillhouette', 20, 1, 1, '2019-07-11 16:52:00', '2019-07-16 19:42:21'),
(74, 'Dino', '20SeventySeven20190712_005354AM.jpg', 'dino', 'dino', 20, 3, 2, '2019-07-11 17:53:54', '2019-07-17 19:36:57'),
(75, 'bw', '20SeventySeven20190712_005949AM.jpg', 'bw', 'bw', 20, 5, 1, '2019-07-11 17:59:49', '2019-07-17 23:30:57'),
(78, 'KBLACK', '20SeventySeven20190712_023103AM.jpg', 'keerati', 'bw,black and white', 20, 5, 3, '2019-07-11 19:31:03', '2019-07-17 20:30:45'),
(79, 'music', '20SeventySeven20190712_112536AM.JPG', 'มิวมิว48', 'candid,people,idol,bnk48,48groups,thai', 20, 9, 1, '2019-07-12 04:25:36', '2019-07-17 20:29:53'),
(80, 'เด็กน้อย', '20SeventySeven7720190717_140306PM.jpg', 'เด็กน้อยบ้านผักตบ', 'people,children', 20, 3, 1, '2019-07-17 07:03:06', '2019-07-17 21:23:14'),
(81, 'table', '1AliAbabwa20190717_201455PM.jpg', 'โต๊ะร้านเซ้ง', 'table,lights,bw,black and white', 1, 22, 1, '2019-07-17 13:14:55', '2019-07-21 18:07:32'),
(82, 'Maple', '16KeeratiPhotographer20190718_024548AM.jpg', 'japanese maple by thanawat', 'maple,tree,leaf,japan', 16, 9, 0, '2019-07-17 19:45:49', '2019-07-17 20:55:54'),
(83, 'Stay High', '1AliAbabwa20190720_204948PM.jpg', 'ดริ้งๆ', 'drink,glass,alcohol', 1, 10, 0, '2019-07-20 13:49:48', '2019-07-21 18:06:53'),
(84, 'แสงแห่งความหวัง', '18กีรติรักษ์มณี20190721_112153AM.jpg', 'จะมีบ้างไหมแค่ใครคนนึง\r\nกับแววตาที่พร้อมเข้าใจ .', 'sun,light,sunset', 18, 7, 0, '2019-07-21 04:21:54', '2019-07-21 18:07:06');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `u_id` int(11) NOT NULL,
  `u_email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `u_password` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `u_name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `u_address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `u_tel` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `u_profilepic` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `u_coverpic` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `us_id` int(11) NOT NULL,
  `u_createtime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `u_updatetime` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`u_id`, `u_email`, `u_password`, `u_name`, `u_address`, `u_tel`, `u_profilepic`, `u_coverpic`, `us_id`, `u_createtime`, `u_updatetime`) VALUES
(1, 'kkkk@kkkk.com', '1234qwer', 'Ali Ababwa', 'Ababwa 777/777', '0123456789', '1AliAbabwaprofilepic20190720_190200PM.jpg', '1AliAbabwacoverpic20190711_123740PM.jpg', 1, '2019-06-03 18:18:05', '2019-07-20 12:02:00'),
(3, 'qqqq@qqqq.com', '1234qwer', 'Pimchanok Kongdee pimpim', '123/456 Thailand', '0900000000', 'pim.jpg', '3PimchanokKongdeecoverpic20190712_164551PM.jpg', 2, '2019-06-04 14:21:30', '2019-07-12 09:45:51'),
(4, 'king@king.com', '12341234', 'king king', 'ไม่มีข้อมูล', 'ไม่มีข้อมูล', '', '', 3, '2019-06-05 09:20:40', '2019-07-16 14:57:46'),
(7, 'Levi@Levi.gg', '12341234', 'Levi Banks', 'ไม่มีข้อมูล', 'ไม่มีข้อมูล', '', '', 3, '2019-06-06 18:19:48', '2019-07-16 14:57:46'),
(8, 'Ty@Wilkes.gg', '12341234', 'Ty Wilkes', 'ไม่มีข้อมูล', 'ไม่มีข้อมูล', '', '', 3, '2019-06-07 10:39:02', '2019-07-16 14:57:46'),
(9, 'Rikki@Sheridan.gg', '12341234', 'Rikki Sheridan', 'ไม่มีข้อมูล', 'ไม่มีข้อมูล', '', '', 3, '2019-06-07 10:40:29', '2019-07-16 14:57:46'),
(10, 'Shelby@Meyer.gg', '12341234', 'Shelby Meyer', 'ไม่มีข้อมูล', 'ไม่มีข้อมูล', '', '', 3, '2019-06-07 10:40:56', '2019-07-16 14:57:46'),
(11, 'Ihsan@Pate.gg', '12341234', 'Ihsan Pate', 'ไม่มีข้อมูล', 'ไม่มีข้อมูล', '', '', 3, '2019-06-07 10:41:16', '2019-07-16 14:57:46'),
(12, 'Robbie@Rutledge.gg', '12341234', 'Robbie Rutledge', 'ไม่มีข้อมูล', 'ไม่มีข้อมูล', '', '', 3, '2019-06-07 10:41:37', '2019-07-16 14:57:46'),
(14, 'Harvie@Collins.gg', '12341234', 'Harvie Collins', 'ไม่มีข้อมูล', 'ไม่มีข้อมูล', '', '', 3, '2019-06-07 10:42:24', '2019-07-16 14:57:46'),
(15, 'Sahib@Salt.gg', '12341234', 'Sahib Salt', 'ไม่มีข้อมูล', 'ไม่มีข้อมูล', '', '', 3, '2019-06-07 10:42:49', '2019-07-16 14:57:46'),
(16, 'photo@photo.photo', '1234qwer', 'Keerati Photographer', '527/495 ต.หมากแข้ง อ.เมือง จ.อุดรธานี 41000', '000000000000000', 'photophoto.jpg', 'cover2.jpg', 2, '2019-06-11 09:54:02', '2019-07-21 11:02:17'),
(17, 'manee@manee.com', '1234qwer', 'Manee Meejai', 'ไม่มีข้อมูล', 'ไม่มีข้อมูล', '', '17ManeeMeejaicoverpic20190709_173314PM.jpg', 3, '2019-07-02 04:00:17', '2019-07-16 14:57:46'),
(18, 'keeratikinggg@gmail.com', '1234qwer', 'กีรติ รักษ์มณี', 'Udonthani Thailand', '099-956-9599', 'keerati.jpg', '18กีรติรักษ์มณีcoverpic20190721_111722AM.jpg', 3, '2019-07-02 07:13:43', '2019-07-21 04:18:02'),
(19, 'mm@mm.mm', '1234qwer', 'mmmm mmmm', 'ไม่มีข้อมูล', 'ไม่มีข้อมูล', '', '', 3, '2019-07-08 06:34:27', '2019-07-16 14:57:46'),
(20, '77@77.com', '1234qwer', 'Seventy Seven 77', '111/111', '0999999999', '20SeventySevenprofilepic20190711_160757PM.jpg', '20SeventySevencoverpic20190711_161250PM.jpg', 3, '2019-07-11 07:37:14', '2019-07-12 06:59:09');

-- --------------------------------------------------------

--
-- Table structure for table `userstatus`
--

CREATE TABLE `userstatus` (
  `us_id` int(11) NOT NULL,
  `us_name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `userstatus`
--

INSERT INTO `userstatus` (`us_id`, `us_name`) VALUES
(1, 'Admin'),
(2, 'Photographer'),
(3, 'User');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `follow`
--
ALTER TABLE `follow`
  ADD PRIMARY KEY (`f_id`);

--
-- Indexes for table `permissioncomment`
--
ALTER TABLE `permissioncomment`
  ADD PRIMARY KEY (`pc_id`);

--
-- Indexes for table `piclike`
--
ALTER TABLE `piclike`
  ADD PRIMARY KEY (`l_id`);

--
-- Indexes for table `pictures`
--
ALTER TABLE `pictures`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`u_id`);

--
-- Indexes for table `userstatus`
--
ALTER TABLE `userstatus`
  ADD PRIMARY KEY (`us_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `follow`
--
ALTER TABLE `follow`
  MODIFY `f_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `permissioncomment`
--
ALTER TABLE `permissioncomment`
  MODIFY `pc_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `piclike`
--
ALTER TABLE `piclike`
  MODIFY `l_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `pictures`
--
ALTER TABLE `pictures`
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `u_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
