-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 23, 2019 at 02:45 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `timviecdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `id_account` int(11) NOT NULL,
  `username` varchar(32) NOT NULL,
  `password` varchar(64) DEFAULT NULL,
  `name_displayed` varchar(64) NOT NULL,
  `email_restore` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`id_account`, `username`, `password`, `name_displayed`, `email_restore`) VALUES
(1, 'viet', 'e10adc3949ba59abbe56e057f20f883e', 'cc', 'cc@gmail.com'),
(2, 'nam', '00c66aaf5f2c3f49946f15c1ad2ea0d3', 'Lê Văn Việt', 'leevanviet1928@gmail.com'),
(11, 'admin', '123456', 'Le văn việt', 'admin'),
(12, 'chien', '733d7be2196ff70efaf6913fc8bdcabf', 'LE VAN CHIEN', 'levanchien123654@gmail.com'),
(13, 'than', '733d7be2196ff70efaf6913fc8bdcabf', 'LE VAN VIET', 'lsafa@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `username` char(32) NOT NULL,
  `password` char(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`) VALUES
(1, 'admin', '123456'),
(2, 'danchoi', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id_custom` int(11) NOT NULL,
  `id_acount` int(11) NOT NULL,
  `avatar` varchar(128) NOT NULL,
  `name` varchar(64) NOT NULL,
  `address` varchar(128) NOT NULL,
  `email_contact` varchar(64) NOT NULL,
  `phone` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id_custom`, `id_acount`, `avatar`, `name`, `address`, `email_contact`, `phone`) VALUES
(1, 1, 'le van viet', 'CTTNHH 123', 'số 10 Tây Tựu,Từ Liêm,Hà Nội', 'leevanviet1928@gmail.com', 123456789);

-- --------------------------------------------------------

--
-- Table structure for table `job`
--

CREATE TABLE `job` (
  `id_job` int(11) NOT NULL,
  `id_customer` int(11) NOT NULL,
  `Name` varchar(64) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Request` varchar(256) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `salary` varchar(12) NOT NULL,
  `describe` varchar(256) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `number` int(12) NOT NULL,
  `contact` varchar(128) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `id_work` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `job`
--

INSERT INTO `job` (`id_job`, `id_customer`, `Name`, `Request`, `salary`, `describe`, `number`, `contact`, `id_work`) VALUES
(3, 1, 'Tuyển lập trình viên java', 'Tốt nghiệp đại học', '10tr', 'đi làm 7 ngày ', 3, 'Mrs. Linh\r\n0123456789', 1);

-- --------------------------------------------------------

--
-- Table structure for table `listwork`
--

CREATE TABLE `listwork` (
  `id_list` int(11) NOT NULL,
  `name_work` varchar(64) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `listwork`
--

INSERT INTO `listwork` (`id_list`, `name_work`) VALUES
(1, 'Java'),
(2, 'PHP'),
(3, 'Python'),
(4, 'C#'),
(5, 'C'),
(6, 'C++');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`id_account`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id_custom`),
  ADD UNIQUE KEY `id_account` (`id_acount`);

--
-- Indexes for table `job`
--
ALTER TABLE `job`
  ADD PRIMARY KEY (`id_job`),
  ADD KEY `id_work` (`id_work`),
  ADD KEY `id_customer` (`id_customer`);

--
-- Indexes for table `listwork`
--
ALTER TABLE `listwork`
  ADD PRIMARY KEY (`id_list`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account`
--
ALTER TABLE `account`
  MODIFY `id_account` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id_custom` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `job`
--
ALTER TABLE `job`
  MODIFY `id_job` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `listwork`
--
ALTER TABLE `listwork`
  MODIFY `id_list` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `customer`
--
ALTER TABLE `customer`
  ADD CONSTRAINT `customer_ibfk_1` FOREIGN KEY (`id_custom`) REFERENCES `job` (`id_customer`),
  ADD CONSTRAINT `customer_ibfk_2` FOREIGN KEY (`id_acount`) REFERENCES `account` (`id_account`);

--
-- Constraints for table `job`
--
ALTER TABLE `job`
  ADD CONSTRAINT `job_ibfk_1` FOREIGN KEY (`id_work`) REFERENCES `listwork` (`id_list`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
