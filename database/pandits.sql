-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 26, 2024 at 10:11 AM
-- Server version: 8.2.0
-- PHP Version: 8.2.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mm_new`
--

-- --------------------------------------------------------

--
-- Table structure for table `pandits`
--

DROP TABLE IF EXISTS `pandits`;
CREATE TABLE IF NOT EXISTS `pandits` (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kyc` int DEFAULT '0',
  `aadhaar_card` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `aadhaar_verified` int DEFAULT '0',
  `pan_card` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pan_card_verified` int DEFAULT '0',
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pandits`
--

INSERT INTO `pandits` (`id`, `name`, `email`, `phone`, `password`, `kyc`, `aadhaar_card`, `aadhaar_verified`, `pan_card`, `pan_card_verified`, `created_at`, `updated_at`) VALUES
(1, 'pandit1', 'pandit2@gmail.com', '7878787878', 'Trouble@2', 0, 'AADHAAR_CARD_67459b1712913.jpg', 0, 'PAN_CARD_67459b1713601.jpg', 0, '2024-01-08 18:01:20', '2024-11-26 09:55:35'),
(2, 'SURESH BAROT', 'sureshbarot96873@gmail.com', '9687361810', '12345678', 0, NULL, 0, NULL, 0, '2024-01-16 13:17:33', '2024-01-16 13:17:33'),
(3, 'Hunter', 'wtjvIz.wbtqmwm@sandcress.xyz', '1', 'Wu2FtVVU5#', 0, NULL, 0, NULL, 0, '2024-01-22 06:12:07', '2024-01-22 06:12:07'),
(4, 'Patel Jay Kantilal', 'pateljay271996@gmail.com', '9925511779', '9925511779', 0, NULL, 0, NULL, 0, '2024-03-23 02:25:44', '2024-03-23 02:25:44'),
(5, 'SURESH BAROT', 'sbarot0106@gmail.com', '9737243157', '12345678', 0, NULL, 0, NULL, 0, '2024-04-16 09:32:00', '2024-04-16 09:32:00'),
(7, 'Column Legend1', 'admin@gmail.com', '7300615744', '123456', 0, NULL, 0, NULL, 0, '2024-11-23 08:58:26', '2024-11-23 08:58:26');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
