-- phpMyAdmin SQL Dump
-- version 5.3.0-dev+20220423.6d54ac471a
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 06, 2022 at 08:54 PM
-- Server version: 5.7.36
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `menddatabase`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_info`
--

DROP TABLE IF EXISTS `admin_info`;
CREATE TABLE IF NOT EXISTS `admin_info` (
  `admin_id` int(10) NOT NULL AUTO_INCREMENT,
  `admin_username` varchar(30) NOT NULL,
  `first_name` varchar(30) NOT NULL,
  `last_name` varchar(30) NOT NULL,
  `admin_email` varchar(30) NOT NULL,
  `admin_pass` varchar(60) NOT NULL,
  `phone_num` varchar(20) NOT NULL,
  `image` varchar(100) CHARACTER SET utf8 COLLATE utf8_swedish_ci DEFAULT NULL,
  PRIMARY KEY (`admin_id`),
  UNIQUE KEY `admin_username` (`admin_username`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_info`
--

INSERT INTO `admin_info` (`admin_id`, `admin_username`, `first_name`, `last_name`, `admin_email`, `admin_pass`, `phone_num`, `image`) VALUES
(1, 'tensu', 'tensae', 'berhanu', 'tensae30@gmail.com', '456', '0987453421', 'Electrician1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `announce`
--

DROP TABLE IF EXISTS `announce`;
CREATE TABLE IF NOT EXISTS `announce` (
  `announce_id` int(10) NOT NULL AUTO_INCREMENT,
  `announce_dateTime` datetime NOT NULL,
  `announce_type` varchar(20) NOT NULL,
  `announce_descip` varchar(60) NOT NULL,
  `admin_id` int(10) NOT NULL,
  PRIMARY KEY (`announce_id`),
  KEY `admin_id` (`admin_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `announce`
--

INSERT INTO `announce` (`announce_id`, `announce_dateTime`, `announce_type`, `announce_descip`, `admin_id`) VALUES
(1, '2009-03-08 08:09:12', 'new worker', 'Electrician', 1),
(2, '2022-06-06 20:33:06', 'Event', 'There will be a new worker category coming soon.', 1);

-- --------------------------------------------------------

--
-- Table structure for table `customer_info`
--

DROP TABLE IF EXISTS `customer_info`;
CREATE TABLE IF NOT EXISTS `customer_info` (
  `customer_id` int(10) NOT NULL AUTO_INCREMENT,
  `custom_username` varchar(30) NOT NULL,
  `first_name` varchar(20) NOT NULL,
  `last_name` varchar(20) NOT NULL,
  `custom_email` varchar(30) NOT NULL,
  `custom_pass` varchar(60) NOT NULL,
  `subcity` varchar(30) NOT NULL,
  `woreda` varchar(30) NOT NULL,
  `kebele` varchar(30) NOT NULL,
  `sex` varchar(10) NOT NULL,
  `age` int(10) NOT NULL,
  `phone_num` varchar(20) NOT NULL,
  `image` varchar(100) CHARACTER SET utf8mb4 DEFAULT NULL,
  `email_verification_link` varchar(255) DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`customer_id`),
  UNIQUE KEY `custom_username` (`custom_username`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer_info`
--

INSERT INTO `customer_info` (`customer_id`, `custom_username`, `first_name`, `last_name`, `custom_email`, `custom_pass`, `subcity`, `woreda`, `kebele`, `sex`, `age`, `phone_num`, `image`, `email_verification_link`, `email_verified_at`) VALUES
(9, 'tensae37', 'Tensae', 'Berhanu', 'tensae@gmail.com', '$2y$10$LLAklGDCKWOAjgTturdaleFJSV/9atwmg6G3pWKsFVw0080.oq6.6', 'Megenagna', 'Germen', '09', '', 21, '0951234595', NULL, '7042081521d3c507d8f31906e1c3353f9162', NULL),
(10, 'tarik20', 'Tarik', 'Misganaw', 'tarik@gmail.com', '$2y$10$yqYs6gN4L/68iJSFwRI.lucd41znuEWXjXlqcXhz7ibvtFAPNslzW', 'Kirqos', 'shenkor', '03', '', 21, '0951154595', 'dishtechnician2.jpg', '66e86947ca5438f13607fa7dfaa433c73622', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `favourite`
--

DROP TABLE IF EXISTS `favourite`;
CREATE TABLE IF NOT EXISTS `favourite` (
  `worker_id` int(10) NOT NULL,
  `customer_id` int(10) NOT NULL,
  KEY `worker_id` (`worker_id`),
  KEY `customer_id` (`customer_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `favourite`
--

INSERT INTO `favourite` (`worker_id`, `customer_id`) VALUES
(21, 10),
(20, 10),
(21, 10),
(20, 10);

-- --------------------------------------------------------

--
-- Table structure for table `occupation`
--

DROP TABLE IF EXISTS `occupation`;
CREATE TABLE IF NOT EXISTS `occupation` (
  `occupation_id` int(10) NOT NULL,
  `occupation_type` varchar(30) NOT NULL,
  PRIMARY KEY (`occupation_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `occupation`
--

INSERT INTO `occupation` (`occupation_id`, `occupation_type`) VALUES
(1, 'Electrician'),
(2, 'Plumber'),
(3, 'dish technician');

-- --------------------------------------------------------

--
-- Table structure for table `report`
--

DROP TABLE IF EXISTS `report`;
CREATE TABLE IF NOT EXISTS `report` (
  `report_id` int(10) NOT NULL AUTO_INCREMENT,
  `report_descrip` varchar(100) NOT NULL,
  `report_dateTime` datetime NOT NULL,
  `customer_id` int(10) NOT NULL,
  `worker_id` int(10) NOT NULL,
  `report_response` varchar(20) NOT NULL,
  PRIMARY KEY (`report_id`),
  KEY `custom_id` (`customer_id`),
  KEY `worker_id` (`worker_id`),
  KEY `customer_id` (`customer_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `request`
--

DROP TABLE IF EXISTS `request`;
CREATE TABLE IF NOT EXISTS `request` (
  `request_id` int(11) NOT NULL AUTO_INCREMENT,
  `request_descrip` varchar(50) DEFAULT NULL,
  `request_dateTime` datetime NOT NULL,
  `request_status` varchar(10) NOT NULL,
  `customer_id` int(10) NOT NULL,
  `worker_id` int(10) NOT NULL,
  PRIMARY KEY (`request_id`),
  KEY `customer_id` (`customer_id`),
  KEY `worker_id` (`worker_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `request`
--

INSERT INTO `request` (`request_id`, `request_descrip`, `request_dateTime`, `request_status`, `customer_id`, `worker_id`) VALUES
(4, NULL, '2022-06-06 19:34:02', 'pending', 10, 21),
(5, NULL, '2022-06-06 19:35:45', 'pending', 10, 21);

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

DROP TABLE IF EXISTS `review`;
CREATE TABLE IF NOT EXISTS `review` (
  `review_id` int(10) NOT NULL AUTO_INCREMENT,
  `comment_descrip` varchar(50) DEFAULT NULL,
  `rating` int(10) DEFAULT NULL,
  `customer_id` int(10) NOT NULL,
  `worker_id` int(10) NOT NULL,
  PRIMARY KEY (`review_id`),
  KEY `customer_id` (`customer_id`),
  KEY `worker_id` (`worker_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `worker_info`
--

DROP TABLE IF EXISTS `worker_info`;
CREATE TABLE IF NOT EXISTS `worker_info` (
  `worker_id` int(10) NOT NULL AUTO_INCREMENT,
  `worker_username` varchar(30) NOT NULL,
  `first_name` varchar(20) DEFAULT NULL,
  `last_name` varchar(20) DEFAULT NULL,
  `worker_email` varchar(30) NOT NULL,
  `worker_pass` varchar(60) NOT NULL,
  `subcity` varchar(10) DEFAULT NULL,
  `woreda` varchar(10) DEFAULT NULL,
  `kebele` varchar(10) DEFAULT NULL,
  `sex` varchar(10) DEFAULT NULL,
  `age` int(10) DEFAULT NULL,
  `phone_num` varchar(20) DEFAULT NULL,
  `image` varchar(100) CHARACTER SET utf8mb4 DEFAULT NULL,
  `email_verification_link` varchar(255) DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `statusw` tinyint(4) NOT NULL DEFAULT '0',
  PRIMARY KEY (`worker_id`),
  UNIQUE KEY `worker_username` (`worker_username`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `worker_info`
--

INSERT INTO `worker_info` (`worker_id`, `worker_username`, `first_name`, `last_name`, `worker_email`, `worker_pass`, `subcity`, `woreda`, `kebele`, `sex`, `age`, `phone_num`, `image`, `email_verification_link`, `email_verified_at`, `statusw`) VALUES
(20, 'tesnim30', 'Tesnim', 'Abdi', 'tesnim@gmail.com', '$2y$10$wdY/2./b372l05zzgbx/oO5nJvUZiaoxLpX/SitFd1/agsyzc5j8O', 'bole', 'betel', '09', '', 25, '0951158734', NULL, '0513ab407fbd3dd8637aaa69736887344006', NULL, 0),
(21, 'tinady35', 'Tina', 'Dessu', 'tina@gmail.com', '$2y$10$ropcRDV4R0nhJIHQhTKheuaqsiNnsjdFSlTxMeYJILB9ORtJlNxFO', 'Mexico', 'mekanisa', '09', '', 25, '0976894395', NULL, '1bfc640b42dab1d16a71b764dba6971b4287', NULL, 0),
(23, 'tsyion47', 'tsyion', 'Abebe', 'tsyion@gmail.com', '$2y$10$pcDS3iaSRFeijMlaIVJC6u2AIh7dRotNRvOL4MLZHplHfEUYiIT1e', 'bole', 'german', '08', '', 30, '0951158795', NULL, 'a2f63af6b16ba4c90b7c64c54432f9a5619', NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `worker_occup`
--

DROP TABLE IF EXISTS `worker_occup`;
CREATE TABLE IF NOT EXISTS `worker_occup` (
  `worker_id` int(10) NOT NULL,
  `exper_year` int(10) NOT NULL,
  `occupation_id` int(10) NOT NULL,
  KEY `occupation_id` (`occupation_id`),
  KEY `worker_id` (`worker_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `worker_occup`
--

INSERT INTO `worker_occup` (`worker_id`, `exper_year`, `occupation_id`) VALUES
(20, 3, 3),
(21, 4, 2),
(23, 5, 2);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `announce`
--
ALTER TABLE `announce`
  ADD CONSTRAINT `announce_ibfk_1` FOREIGN KEY (`admin_id`) REFERENCES `admin_info` (`admin_id`);

--
-- Constraints for table `favourite`
--
ALTER TABLE `favourite`
  ADD CONSTRAINT `favourite_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `customer_info` (`customer_id`),
  ADD CONSTRAINT `favourite_ibfk_2` FOREIGN KEY (`worker_id`) REFERENCES `worker_info` (`worker_id`);

--
-- Constraints for table `report`
--
ALTER TABLE `report`
  ADD CONSTRAINT `report_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `customer_info` (`customer_id`),
  ADD CONSTRAINT `report_ibfk_2` FOREIGN KEY (`worker_id`) REFERENCES `worker_info` (`worker_id`);

--
-- Constraints for table `request`
--
ALTER TABLE `request`
  ADD CONSTRAINT `request_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `customer_info` (`customer_id`),
  ADD CONSTRAINT `request_ibfk_2` FOREIGN KEY (`worker_id`) REFERENCES `worker_info` (`worker_id`);

--
-- Constraints for table `review`
--
ALTER TABLE `review`
  ADD CONSTRAINT `review_ibfk_1` FOREIGN KEY (`worker_id`) REFERENCES `worker_info` (`worker_id`),
  ADD CONSTRAINT `review_ibfk_2` FOREIGN KEY (`customer_id`) REFERENCES `customer_info` (`customer_id`);

--
-- Constraints for table `worker_occup`
--
ALTER TABLE `worker_occup`
  ADD CONSTRAINT `worker_occup_ibfk_2` FOREIGN KEY (`occupation_id`) REFERENCES `occupation` (`occupation_id`),
  ADD CONSTRAINT `worker_occup_ibfk_3` FOREIGN KEY (`worker_id`) REFERENCES `worker_info` (`worker_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;



