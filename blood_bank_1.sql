-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 03, 2022 at 01:32 PM
-- Server version: 10.4.16-MariaDB
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blood_bank_1`
--

-- --------------------------------------------------------

--
-- Table structure for table `form_1`
--

CREATE TABLE `form_1` (
  `name` text NOT NULL,
  `email` varchar(30) NOT NULL,
  `message` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `form_1`
--

INSERT INTO `form_1` (`name`, `email`, `message`) VALUES
('Isha Borgaonkar', 'ishamborgaonkar@gmail.com', 'Want to donate Blood.'),
('Avadhut Pawar', 'avadhutp49@gmail.com', 'How can I get A+ Blood?'),
('Sanjana Pawar', 'psanjana@gmail.com', 'I want to Organize Camp.'),
('Deepak Tare', 'deepak@yahoo.com', 'Fantastic Organization!!'),
('Manisha Borgaonkar', 'manisha@gmail.com', 'I want to donate blood'),
('Kaivallya Chandratre', 'itzkv@gmail.com', 'I want to help Thalesemia Patients.'),
('Mahesh Borgaonkar', 'maheshbor1234@gmail.com', 'I want to donate blood'),
('Ojas Nerurkar', 'ojasnkr@gmail.com', 'how can I do money Donation.'),
('Isha Borgaonkar', 'isha@gmail.com', 'I want to donate blood'),
('Isha Borgaonkar', 'isha@gmail.com', 'I want to donate blood'),
('Isha Borgaonkar', 'isha@gmail.com', 'I want to organize camp..'),
('Isha Borgaonkar', 'isha@gmail.com', 'I want to donate blood..'),
('Isha Borgaonkar', 'isha@gmail.com', 'hello'),
('Isha Borgaonkar', 'isha@gmail.com', 'hii'),
('iss', 'burr', 'hello'),
('iss', 'burr', 'hello'),
('Isha Borgaonkar', 'isha@gmail.com', 'hi'),
('Isha Borgaonkar', 'isha@gmail.com', 'hii'),
('Isha Borgaonkar', 'isha@gmail.com', 'hii'),
('bbj', 'hkh', 'jkj'),
('mau', 'ishamborgaonkar@gmail.com', 'hello java');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_visitor`
--

CREATE TABLE `tbl_visitor` (
  `count` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user_c`
--

CREATE TABLE `user_c` (
  `counts` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_c`
--

INSERT INTO `user_c` (`counts`) VALUES
(114);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
