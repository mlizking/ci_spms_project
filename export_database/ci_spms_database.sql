-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 06, 2019 at 08:58 PM
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
(2, 'gggg@gggg.com', '1234qwer', 'gggg gggg', 3, '2019-06-04 14:21:30', '2019-06-04 14:22:26'),
(3, 'qqqq@qqqq.com', '1234qwer', 'qqqq qqqq', 2, '2019-06-04 14:21:30', '0000-00-00 00:00:00'),
(4, 'king@king.com', '12341234', 'king king', 3, '2019-06-05 09:20:40', '0000-00-00 00:00:00'),
(5, 'ddd@ddd.ddd', '12341234', 'dddd dddd', 3, '2019-06-05 16:17:36', '0000-00-00 00:00:00'),
(6, 'rrr@rrr.rrr', '12341234', 'rrrr rrrr', 3, '2019-06-05 16:17:51', '0000-00-00 00:00:00'),
(7, 'Levi@Levi.gg', '12341234', 'Levi Banks', 3, '2019-06-06 18:19:48', '0000-00-00 00:00:00');

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
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `u_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
