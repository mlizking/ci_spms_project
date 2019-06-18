-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 18, 2019 at 09:25 PM
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
-- Table structure for table `pictures`
--

CREATE TABLE `pictures` (
  `p_id` int(11) NOT NULL,
  `p_name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `p_filename` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `p_tag` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `u_id` int(11) NOT NULL,
  `p_createtime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `p_updatetime` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pictures`
--

INSERT INTO `pictures` (`p_id`, `p_name`, `p_filename`, `p_tag`, `u_id`, `p_createtime`, `p_updatetime`) VALUES
(1, 'PIM', 'SKEE87181.jpg', '', 16, '2019-06-12 16:31:15', '2019-06-12 16:38:03'),
(2, 'Keerati', 'SKEE8587.jpg', '', 16, '2019-06-12 16:32:41', '0000-00-00 00:00:00'),
(3, 'Building', 'SKEE8721.jpg', '', 16, '2019-06-12 16:32:11', '0000-00-00 00:00:00'),
(4, 'Pimchanok', 'SKEE5557.jpg', '', 16, '2019-06-11 17:35:47', '0000-00-00 00:00:00'),
(5, 'Kraiwit', 'SKEE4640.jpg', '', 16, '2019-06-11 17:45:12', '0000-00-00 00:00:00'),
(6, 'Pimpim', 'SKEE7527.jpg', '', 16, '2019-06-11 17:46:08', '0000-00-00 00:00:00'),
(7, 'Lovelove', 'SKEE8304.jpg', '', 16, '2019-06-11 17:48:29', '0000-00-00 00:00:00'),
(8, 'Thailand Sakura', '_MG_9561.jpg', '', 3, '2019-06-11 06:36:11', '2019-06-12 16:29:48'),
(9, 'Travel', 'SKEE3730.JPG', '', 16, '2019-06-11 10:11:26', '2019-06-12 16:30:02'),
(10, 'Love', 'SKEE6957.jpg', '', 16, '2019-06-11 16:39:57', '2019-06-12 16:30:12'),
(11, 'gg1.jpg', 'gg1.jpg', '', 16, '2019-06-13 09:47:19', '0000-00-00 00:00:00'),
(12, 'gg2.jpg', 'gg2.jpg', '', 16, '2019-06-13 09:48:44', '0000-00-00 00:00:00'),
(13, 'gg3.jpg', 'gg3.jpg', '', 16, '2019-06-13 09:48:44', '0000-00-00 00:00:00'),
(14, 'gg4.jpg', 'gg4.jpg', '', 16, '2019-06-13 09:49:20', '0000-00-00 00:00:00'),
(15, 'gg5.jpg', 'gg5.jpg', '', 16, '2019-06-13 09:49:30', '0000-00-00 00:00:00'),
(16, 'gg6.jpg', 'gg6.jpg', '', 16, '2019-06-13 09:49:46', '0000-00-00 00:00:00'),
(17, 'gg7.jpg', 'gg7.jpg', '', 16, '2019-06-13 09:49:54', '0000-00-00 00:00:00'),
(18, 'gg8.jpg', 'gg8.jpg', '', 16, '2019-06-13 09:50:02', '0000-00-00 00:00:00'),
(19, 'gg9.jpg', 'gg9.jpg', '', 16, '2019-06-13 09:50:09', '0000-00-00 00:00:00'),
(20, 'gg10.jpg', 'gg10.jpg', '', 16, '2019-06-13 09:50:18', '0000-00-00 00:00:00'),
(21, 'gg11.jpg', 'gg11.jpg', '', 16, '2019-06-13 09:51:15', '0000-00-00 00:00:00'),
(22, 'gg12.jpg', 'gg12.jpg', '', 16, '2019-06-13 09:51:22', '0000-00-00 00:00:00'),
(23, 'gg13.jpg', 'gg13.jpg', '', 16, '2019-06-13 09:51:29', '0000-00-00 00:00:00'),
(24, 'gg14.jpg', 'gg14.jpg', '', 16, '2019-06-13 09:51:36', '0000-00-00 00:00:00'),
(25, 'gg15.jpg', 'gg15.jpg', '', 16, '2019-06-13 09:51:46', '0000-00-00 00:00:00'),
(26, 'gg16.jpg', 'gg16.jpg', '', 16, '2019-06-13 09:52:41', '0000-00-00 00:00:00'),
(27, 'gg17.jpg', 'gg17.jpg', '', 16, '2019-06-13 09:52:41', '0000-00-00 00:00:00'),
(28, 'gg18.jpg', 'gg18.jpg', '', 16, '2019-06-13 09:56:33', '0000-00-00 00:00:00'),
(29, 'gg19.jpg', 'gg19.jpg', '', 16, '2019-06-13 09:56:33', '0000-00-00 00:00:00'),
(30, 'gg20.jpg', 'gg20.jpg', '', 16, '2019-06-13 09:56:33', '0000-00-00 00:00:00'),
(31, 'gg21.jpg', 'gg21.jpg', '', 16, '2019-06-13 09:56:33', '0000-00-00 00:00:00'),
(32, 'gg22.jpg', 'gg22.jpg', '', 16, '2019-06-13 09:56:33', '0000-00-00 00:00:00'),
(33, 'gg23.jpg', 'gg23.jpg', '', 16, '2019-06-13 09:56:33', '0000-00-00 00:00:00'),
(34, 'gg24.jpg', 'gg24.jpg', '', 16, '2019-06-13 09:56:33', '0000-00-00 00:00:00'),
(35, 'gg25.jpg', 'gg25.jpg', '', 16, '2019-06-13 09:56:33', '0000-00-00 00:00:00'),
(36, 'gg26.jpg', 'gg26.jpg', '', 16, '2019-06-13 09:56:33', '0000-00-00 00:00:00'),
(37, 'gg27.jpg', 'gg27.jpg', '', 16, '2019-06-13 09:56:33', '0000-00-00 00:00:00'),
(38, 'gg28.jpg', 'gg28.jpg', '', 16, '2019-06-13 09:56:33', '0000-00-00 00:00:00'),
(39, 'gg29.jpg', 'gg29.jpg', '', 16, '2019-06-13 09:56:33', '0000-00-00 00:00:00'),
(40, 'gg30.jpg', 'gg30.jpg', '', 16, '2019-06-13 09:56:33', '0000-00-00 00:00:00'),
(41, 'gg31', 'gg31.jpg', '', 16, '2019-06-13 10:06:06', '0000-00-00 00:00:00'),
(42, 'gg32', 'gg32.jpg', '', 16, '2019-06-13 15:02:32', '0000-00-00 00:00:00'),
(43, 'King&Pim', 'gg33.jpg', '', 16, '2019-06-13 15:43:39', '0000-00-00 00:00:00'),
(44, 'My love', '47687671_2058522287504503_3080265354014883840_o.jpg', '', 16, '2019-06-13 15:49:30', '0000-00-00 00:00:00'),
(45, 'Katsudon', '50295319_2103667592989972_1638748031668977664_o.jpg', '', 16, '2019-06-15 12:27:39', '0000-00-00 00:00:00'),
(46, 'Mom', '51929213_2152187691471295_2566518223814000640_o.jpg', 'Portrait', 16, '2019-06-15 12:34:31', '2019-06-18 17:44:29'),
(47, 'Green', 'SKEE7693.jpg', '', 16, '2019-06-15 12:39:27', '0000-00-00 00:00:00'),
(48, 'Sea', 'SKEE7871.jpg', '', 16, '2019-06-15 12:39:44', '0000-00-00 00:00:00'),
(49, 'Vanila Sky', 'SKEE7728.jpg', '', 16, '2019-06-15 12:39:59', '0000-00-00 00:00:00'),
(50, 'Yaak!!', '16PhotographerAdmin20190616_0045AM.jpg', '', 16, '2019-06-15 17:45:05', '0000-00-00 00:00:00'),
(51, 'Friend', '16PhotographerAdmin20190616_0048AM41.jpg', '', 16, '2019-06-15 17:48:41', '0000-00-00 00:00:00'),
(52, '!!!!', '16PhotographerAdmin20190616_004935AM.jpg', '', 16, '2019-06-15 17:49:35', '0000-00-00 00:00:00'),
(53, 'Windmill', '16PhotographerAdmin20190618_001050AM.jpg', '', 16, '2019-06-17 17:10:50', '0000-00-00 00:00:00'),
(54, 'Blur blur', '16PhotographerAdmin20190619_001848AM.jpg', 'Blur,Temple,Portrait,People', 16, '2019-06-18 17:18:49', '0000-00-00 00:00:00'),
(55, 'pimchanok kongdee', '16PhotographerAdmin20190619_022004AM.jpg', 'Portrait,Girl', 16, '2019-06-18 19:20:05', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `u_id` int(11) NOT NULL,
  `u_email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `u_password` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `u_name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `us_id` int(11) NOT NULL,
  `u_createtime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `u_updatetime` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`u_id`, `u_email`, `u_password`, `u_name`, `us_id`, `u_createtime`, `u_updatetime`) VALUES
(1, 'kkkk@kkkk.com', '1234qwer', 'Ali Ababwa', 1, '2019-06-03 18:18:05', '2019-06-04 07:25:56'),
(3, 'qqqq@qqqq.com', '1234qwer', 'qqqq qqqq', 2, '2019-06-04 14:21:30', '0000-00-00 00:00:00'),
(4, 'king@king.com', '12341234', 'king king', 3, '2019-06-05 09:20:40', '0000-00-00 00:00:00'),
(7, 'Levi@Levi.gg', '12341234', 'Levi Banks', 3, '2019-06-06 18:19:48', '0000-00-00 00:00:00'),
(8, 'Ty@Wilkes.gg', '12341234', 'Ty Wilkes', 3, '2019-06-07 10:39:02', '0000-00-00 00:00:00'),
(9, 'Rikki@Sheridan.gg', '12341234', 'Rikki Sheridan', 3, '2019-06-07 10:40:29', '0000-00-00 00:00:00'),
(10, 'Shelby@Meyer.gg', '12341234', 'Shelby Meyer', 3, '2019-06-07 10:40:56', '0000-00-00 00:00:00'),
(11, 'Ihsan@Pate.gg', '12341234', 'Ihsan Pate', 3, '2019-06-07 10:41:16', '0000-00-00 00:00:00'),
(12, 'Robbie@Rutledge.gg', '12341234', 'Robbie Rutledge', 3, '2019-06-07 10:41:37', '0000-00-00 00:00:00'),
(13, 'Amman@Fritz.gg', '12341234', 'Amman Fritz', 3, '2019-06-07 10:41:55', '0000-00-00 00:00:00'),
(14, 'Harvie@Collins.gg', '12341234', 'Harvie Collins', 3, '2019-06-07 10:42:24', '0000-00-00 00:00:00'),
(15, 'Sahib@Salt.gg', '12341234', 'Sahib Salt', 3, '2019-06-07 10:42:49', '0000-00-00 00:00:00'),
(16, 'photo@photo.photo', '1234qwer', 'Photographer Admin', 2, '2019-06-11 09:54:02', '2019-06-11 09:54:28');

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
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `u_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
