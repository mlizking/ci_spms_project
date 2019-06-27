-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 27, 2019 at 11:27 AM
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
  `u_id` int(11) NOT NULL,
  `fu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
  `p_createtime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `p_updatetime` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pictures`
--

INSERT INTO `pictures` (`p_id`, `p_name`, `p_filename`, `p_detail`, `p_tag`, `u_id`, `p_createtime`, `p_updatetime`) VALUES
(1, 'PIM', 'SKEE87181.jpg', 'สวัสดีครับ', 'SPMS', 16, '2019-06-12 16:31:15', '2019-06-24 08:03:02'),
(2, 'Keerati', 'SKEE8587.jpg', 'สวัสดีครับ', 'SPMS', 16, '2019-06-12 16:32:41', '2019-06-24 08:03:02'),
(3, 'Building', 'SKEE8721.jpg', 'สวัสดีครับ', 'SPMS', 16, '2019-06-12 16:32:11', '2019-06-24 08:03:02'),
(4, 'Pimchanok', 'SKEE5557.jpg', 'สวัสดีครับ', 'SPMS', 16, '2019-06-11 17:35:47', '2019-06-24 08:03:02'),
(5, 'Kraiwit', 'SKEE4640.jpg', 'สวัสดีครับ', 'SPMS', 16, '2019-06-11 17:45:12', '2019-06-24 08:03:02'),
(6, 'Pimpim', 'SKEE7527.jpg', 'สวัสดีครับ', 'SPMS', 16, '2019-06-11 17:46:08', '2019-06-24 08:03:02'),
(7, 'Lovelove', 'SKEE8304.jpg', 'สวัสดีครับ', 'SPMS', 16, '2019-06-11 17:48:29', '2019-06-24 08:03:02'),
(8, 'Thailand Sakura', '_MG_9561.jpg', 'ดอกพญาเสือโคร่ง ที่ดอยอ่างขาง', 'SPMS', 3, '2019-06-11 06:36:11', '2019-06-24 08:23:02'),
(9, 'Travel', 'SKEE3730.JPG', 'สวัสดีครับ', 'SPMS', 16, '2019-06-11 10:11:26', '2019-06-24 08:03:02'),
(10, 'Love', 'SKEE6957.jpg', 'สวัสดีครับ', 'SPMS', 16, '2019-06-11 16:39:57', '2019-06-24 08:03:02'),
(11, 'gg1.jpg', 'gg1.jpg', 'สวัสดีครับ', 'SPMS', 16, '2019-06-13 09:47:19', '2019-06-24 08:03:02'),
(12, 'gg2.jpg', 'gg2.jpg', 'สวัสดีครับ', 'SPMS', 16, '2019-06-13 09:48:44', '2019-06-24 08:03:02'),
(13, 'gg3.jpg', 'gg3.jpg', 'สวัสดีครับ', 'SPMS', 16, '2019-06-13 09:48:44', '2019-06-24 08:03:02'),
(14, 'gg4.jpg', 'gg4.jpg', 'สวัสดีครับ', 'SPMS', 16, '2019-06-13 09:49:20', '2019-06-24 08:03:02'),
(15, 'gg5.jpg', 'gg5.jpg', 'สวัสดีครับ', 'SPMS', 16, '2019-06-13 09:49:30', '2019-06-24 08:03:02'),
(16, 'gg6.jpg', 'gg6.jpg', 'สวัสดีครับ', 'SPMS', 16, '2019-06-13 09:49:46', '2019-06-24 08:03:02'),
(17, 'gg7.jpg', 'gg7.jpg', 'สวัสดีครับ', 'SPMS', 16, '2019-06-13 09:49:54', '2019-06-24 08:03:02'),
(18, 'gg8.jpg', 'gg8.jpg', 'สวัสดีครับ', 'SPMS', 16, '2019-06-13 09:50:02', '2019-06-24 08:03:02'),
(20, 'gg10.jpg', 'gg10.jpg', 'สวัสดีครับ', 'SPMS', 16, '2019-06-13 09:50:18', '2019-06-24 08:03:02'),
(21, 'Smile', 'gg11.jpg', 'สวัสดีครับ', 'SPMS', 16, '2019-06-13 09:51:15', '2019-06-24 08:03:02'),
(22, 'gg12.jpg', 'gg12.jpg', 'สวัสดีครับ', 'SPMS', 16, '2019-06-13 09:51:22', '2019-06-24 08:03:02'),
(23, 'gg13.jpg', 'gg13.jpg', 'สวัสดีครับ', 'SPMS', 16, '2019-06-13 09:51:29', '2019-06-24 08:03:02'),
(24, 'gg14.jpg', 'gg14.jpg', 'สวัสดีครับ', 'SPMS', 16, '2019-06-13 09:51:36', '2019-06-24 08:03:02'),
(25, 'gg15.jpg', 'gg15.jpg', 'สวัสดีครับ', 'SPMS', 16, '2019-06-13 09:51:46', '2019-06-24 08:03:02'),
(26, 'gg16.jpg', 'gg16.jpg', 'สวัสดีครับ', 'SPMS', 16, '2019-06-13 09:52:41', '2019-06-24 08:03:02'),
(27, 'gg17.jpg', 'gg17.jpg', 'สวัสดีครับ', 'SPMS', 16, '2019-06-13 09:52:41', '2019-06-24 08:03:02'),
(28, 'gg18.jpg', 'gg18.jpg', 'สวัสดีครับ', 'SPMS', 16, '2019-06-13 09:56:33', '2019-06-24 08:03:02'),
(29, 'gg19.jpg', 'gg19.jpg', 'สวัสดีครับ', 'SPMS', 16, '2019-06-13 09:56:33', '2019-06-24 08:03:02'),
(30, 'gg20.jpg', 'gg20.jpg', 'สวัสดีครับ', 'SPMS', 16, '2019-06-13 09:56:33', '2019-06-24 08:03:02'),
(32, 'gg22.jpg', 'gg22.jpg', 'สวัสดีครับ', 'SPMS', 16, '2019-06-13 09:56:33', '2019-06-24 08:03:02'),
(33, 'gg23.jpg', 'gg23.jpg', 'สวัสดีครับ', 'SPMS', 16, '2019-06-13 09:56:33', '2019-06-24 08:03:02'),
(34, 'gg24.jpg', 'gg24.jpg', 'สวัสดีครับ', 'SPMS', 16, '2019-06-13 09:56:33', '2019-06-24 08:03:02'),
(36, 'gg26.jpg', 'gg26.jpg', 'สวัสดีครับ', 'SPMS', 16, '2019-06-13 09:56:33', '2019-06-24 08:03:02'),
(37, 'gg27.jpg', 'gg27.jpg', 'สวัสดีครับ', 'SPMS', 16, '2019-06-13 09:56:33', '2019-06-24 08:03:02'),
(38, 'gg28.jpg', 'gg28.jpg', 'สวัสดีครับ', 'SPMS', 16, '2019-06-13 09:56:33', '2019-06-24 08:03:02'),
(39, 'gg29.jpg', 'gg29.jpg', 'สวัสดีครับ', 'SPMS', 16, '2019-06-13 09:56:33', '2019-06-24 08:03:02'),
(40, 'gg30.jpg', 'gg30.jpg', 'สวัสดีครับ', 'SPMS', 16, '2019-06-13 09:56:33', '2019-06-24 08:03:02'),
(41, 'gg31', 'gg31.jpg', 'สวัสดีครับ', 'SPMS', 16, '2019-06-13 10:06:06', '2019-06-24 08:03:02'),
(42, 'White teeth', 'gg32.jpg', 'สวัสดีครับ', 'SPMS', 16, '2019-06-13 15:02:32', '2019-06-24 08:03:02'),
(43, 'King&Pim', 'gg33.jpg', 'สวัสดีครับ', 'SPMS', 16, '2019-06-13 15:43:39', '2019-06-24 08:03:02'),
(44, 'My love', '47687671_2058522287504503_3080265354014883840_o.jpg', 'สวัสดีครับ', 'SPMS', 16, '2019-06-13 15:49:30', '2019-06-24 08:03:02'),
(45, 'Katsudon', '50295319_2103667592989972_1638748031668977664_o.jpg', 'สวัสดีครับ', 'SPMS', 16, '2019-06-15 12:27:39', '2019-06-24 08:03:02'),
(46, 'Mom', '51929213_2152187691471295_2566518223814000640_o.jpg', 'สวัสดีครับ', 'Portrait', 16, '2019-06-15 12:34:31', '2019-06-24 03:35:24'),
(47, 'Green', 'SKEE7693.jpg', 'สวัสดีครับ', 'SPMS', 16, '2019-06-15 12:39:27', '2019-06-24 08:03:02'),
(48, 'Sea', 'SKEE7871.jpg', 'สวัสดีครับ', 'SPMS', 16, '2019-06-15 12:39:44', '2019-06-24 08:03:02'),
(49, 'Vanila Sky', 'SKEE7728.jpg', 'สวัสดีครับ', 'SPMS', 16, '2019-06-15 12:39:59', '2019-06-24 08:03:02'),
(50, 'Yaak!!', '16PhotographerAdmin20190616_0045AM.jpg', 'สวัสดีครับ', 'SPMS', 16, '2019-06-15 17:45:05', '2019-06-24 08:03:02'),
(51, 'Friend', '16PhotographerAdmin20190616_0048AM41.jpg', 'สวัสดีครับ', 'SPMS', 16, '2019-06-15 17:48:41', '2019-06-24 08:03:02'),
(52, 'DUODUO', '16PhotographerAdmin20190616_004935AM.jpg', 'สวัสดีครับ', 'SPMS', 16, '2019-06-15 17:49:35', '2019-06-24 08:03:02'),
(54, 'Blur blur', '16PhotographerAdmin20190619_001848AM.jpg', 'สวัสดีครับ', 'Blur,Temple,Portrait,People', 16, '2019-06-18 17:18:49', '2019-06-24 03:35:24'),
(55, 'pimchanok kongdee', '16PhotographerAdmin20190619_022004AM.jpg', 'สวัสดีครับ', 'Portrait,Girl', 16, '2019-06-18 19:20:05', '2019-06-24 03:35:24'),
(56, 'Keerati cool cool', '3qqqqqqqq20190619_170136PM.jpg', 'สวัสดีครับ', 'silhouette,people,black and white,bw,light', 3, '2019-06-19 10:01:36', '2019-06-24 03:35:24'),
(57, 'เพื่อน', '3qqqqqqqq20190619_170349PM.jpg', 'สวัสดีครับ', 'friends,people,portrait,reunion', 3, '2019-06-19 10:03:49', '2019-06-24 03:35:24'),
(58, 'KKU', '3qqqqqqqq20190620_021147AM.jpg', 'สวัสดีครับ', 'Graduate,celebration,Congratulation,KKU,University', 3, '2019-06-19 19:11:47', '2019-06-24 03:35:24'),
(59, 'Dek Dek', '3qqqqqqqq20190620_021525AM.jpg', 'สวัสดีครับ', 'Children,people', 3, '2019-06-19 19:15:25', '2019-06-24 03:35:24'),
(60, 'Thai Mountain', '16KeeratiPhotographerGGgggggg20190624_094141AM.jpg', 'ภูเขาฝั่งประเทศเพื่อนบ้าน', 'Landscape,Thailand,Mountain,Black and White,BW', 16, '2019-06-24 02:41:41', '2019-06-24 08:28:34'),
(63, 'กุ้งก้ามกราม', '3qqqqqqqq20190625_003928AM.jpg', 'กุ้งก้ามกรามในถังน้ำ', 'shrimp,food,animal', 3, '2019-06-24 17:39:28', '0000-00-00 00:00:00'),
(64, 'Min Min', '3qqqqqqqq20190627_161246PM.jpg', 'ถ่ายกับมิน', 'sister,university,friend', 3, '2019-06-27 09:12:46', '0000-00-00 00:00:00'),
(65, 'ต่ายจ๋อมก้อย', '3qqqqqqqq20190627_161504PM.jpg', 'ถ่ายกับ ก้อย จ๋อม ต่าย', 'friend,university,portrait,forever', 3, '2019-06-27 09:15:04', '0000-00-00 00:00:00'),
(66, 'เพื่อนๆของฉัน', '3qqqqqqqq20190627_161613PM.jpg', 'เพื่อนๆ รหัส 56', 'friend,university,people,forever', 3, '2019-06-27 09:16:13', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `u_id` int(11) NOT NULL,
  `u_email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `u_password` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `u_name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `u_profilepic` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `us_id` int(11) NOT NULL,
  `u_createtime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `u_updatetime` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`u_id`, `u_email`, `u_password`, `u_name`, `u_profilepic`, `us_id`, `u_createtime`, `u_updatetime`) VALUES
(1, 'kkkk@kkkk.com', '1234qwer', 'Ali Ababwa', 'admin.jpg', 1, '2019-06-03 18:18:05', '2019-06-24 02:44:52'),
(3, 'qqqq@qqqq.com', '1234qwer', 'Pimchanok Kongdee', 'pim.jpg', 2, '2019-06-04 14:21:30', '2019-06-27 08:39:18'),
(4, 'king@king.com', '12341234', 'king king', '', 3, '2019-06-05 09:20:40', '0000-00-00 00:00:00'),
(7, 'Levi@Levi.gg', '12341234', 'Levi Banks', '', 3, '2019-06-06 18:19:48', '0000-00-00 00:00:00'),
(8, 'Ty@Wilkes.gg', '12341234', 'Ty Wilkes', '', 3, '2019-06-07 10:39:02', '0000-00-00 00:00:00'),
(9, 'Rikki@Sheridan.gg', '12341234', 'Rikki Sheridan', '', 3, '2019-06-07 10:40:29', '0000-00-00 00:00:00'),
(10, 'Shelby@Meyer.gg', '12341234', 'Shelby Meyer', '', 3, '2019-06-07 10:40:56', '0000-00-00 00:00:00'),
(11, 'Ihsan@Pate.gg', '12341234', 'Ihsan Pate', '', 3, '2019-06-07 10:41:16', '0000-00-00 00:00:00'),
(12, 'Robbie@Rutledge.gg', '12341234', 'Robbie Rutledge', '', 3, '2019-06-07 10:41:37', '0000-00-00 00:00:00'),
(13, 'Amman@Fritz.gg', '12341234', 'Amman Fritz', '', 3, '2019-06-07 10:41:55', '0000-00-00 00:00:00'),
(14, 'Harvie@Collins.gg', '12341234', 'Harvie Collins', '', 3, '2019-06-07 10:42:24', '0000-00-00 00:00:00'),
(15, 'Sahib@Salt.gg', '12341234', 'Sahib Salt', '', 3, '2019-06-07 10:42:49', '0000-00-00 00:00:00'),
(16, 'photo@photo.photo', '1234qwer', 'Keerati Photographer', 'photophoto.jpg', 2, '2019-06-11 09:54:02', '2019-06-26 10:03:12');

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
-- AUTO_INCREMENT for table `pictures`
--
ALTER TABLE `pictures`
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `u_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
