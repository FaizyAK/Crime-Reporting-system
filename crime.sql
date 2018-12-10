-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 27, 2018 at 05:52 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crime`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `INSERTDATA` (IN `name` VARCHAR(20), IN `phone` INT(10), IN `aadhar` INT(12), IN `level_id` INT(1), IN `zone_id` INT(1), IN `descr` VARCHAR(100))  BEGIN
INSERT INTO record(name, phone, aadhar, level_id, zone_id, descr) VALUES (name, phone , aadhar , level_id, zone_id, descr);
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `level`
--

CREATE TABLE `level` (
  `level_id` int(11) NOT NULL,
  `level_name` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `level`
--

INSERT INTO `level` (`level_id`, `level_name`) VALUES
(1, 'LOW'),
(2, 'MODERATE'),
(3, 'SEVERE');

-- --------------------------------------------------------

--
-- Table structure for table `police_login`
--

CREATE TABLE `police_login` (
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `police_login`
--

INSERT INTO `police_login` (`username`, `password`) VALUES
('user1', 'user1');

-- --------------------------------------------------------

--
-- Table structure for table `record`
--

CREATE TABLE `record` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `phone` int(11) NOT NULL,
  `aadhar` int(16) NOT NULL,
  `level_id` int(11) NOT NULL,
  `zone_id` int(11) NOT NULL,
  `descr` varchar(100) NOT NULL,
  `status_id` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `record`
--

INSERT INTO `record` (`id`, `name`, `phone`, `aadhar`, `level_id`, `zone_id`, `descr`, `status_id`) VALUES
(53, 'Shahal PK', 9995, 12345, 2, 1, 'My mobile has been stolen from a person whom i can identify.', 3),
(54, 'Shakir', 8129, 9000, 1, 2, 'Watch has been stolen.', 2),
(55, 'Faizan', 1234, 34567, 1, 3, 'I saw a murder.', 3),
(56, 'Faizan', 1234567, 12, 2, 4, 'I killed a person.', 2),
(57, 'faizan', 8128, 123456, 1, 2, 'INAD', 2),
(58, 'harshith', 2147483647, 9845, 2, 1, 'dfsdgsthffhds', 1),
(59, 'k a faizan', 12455, 8, 2, 4, 'i am not feelin well.please put me in jail.', 2),
(60, 'shahal pk', 1234, 700, 2, 3, 'thus snnaSN', 2),
(61, '', 0, 0, 1, 1, '', 1),
(62, '', 0, 0, 1, 1, '', 1),
(63, '', 0, 0, 1, 1, '', 1);

--
-- Triggers `record`
--
DELIMITER $$
CREATE TRIGGER `P_trig` BEFORE INSERT ON `record` FOR EACH ROW INSERT INTO trigger_time VALUES(NOW())
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE `status` (
  `status_id` int(11) NOT NULL,
  `status_name` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`status_id`, `status_name`) VALUES
(0, 'SUBMITTED'),
(1, 'PENDING'),
(2, 'ONGOING'),
(3, 'CLOSED');

-- --------------------------------------------------------

--
-- Table structure for table `trigger_time`
--

CREATE TABLE `trigger_time` (
  `exec_time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `trigger_time`
--

INSERT INTO `trigger_time` (`exec_time`) VALUES
('2017-11-26 20:11:38'),
('2017-11-27 12:02:45'),
('2017-11-27 12:56:49'),
('2017-11-28 16:35:40'),
('2017-12-03 16:40:30'),
('2017-12-03 16:41:07'),
('2017-12-03 16:41:52'),
('2017-12-03 16:50:14'),
('2017-12-04 10:07:06'),
('2017-12-04 10:09:48'),
('2017-12-04 10:11:00'),
('2017-12-04 10:13:32'),
('2017-12-04 10:14:50'),
('2017-12-04 10:16:57'),
('2017-12-04 10:17:30'),
('2017-12-04 13:07:55'),
('2018-07-11 07:53:39'),
('2018-07-28 17:22:17'),
('2018-07-28 17:30:44'),
('2018-08-27 17:57:23'),
('2018-08-27 17:59:30'),
('2018-08-27 18:49:16');

-- --------------------------------------------------------

--
-- Table structure for table `zone`
--

CREATE TABLE `zone` (
  `zone_id` int(11) NOT NULL,
  `zone_name` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `zone`
--

INSERT INTO `zone` (`zone_id`, `zone_name`) VALUES
(1, 'DERLAKATTE'),
(2, 'KANKANADY'),
(3, 'ADYAR'),
(4, 'TALAPPADY'),
(5, 'VAMANJOOR');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `level`
--
ALTER TABLE `level`
  ADD PRIMARY KEY (`level_id`);

--
-- Indexes for table `police_login`
--
ALTER TABLE `police_login`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `record`
--
ALTER TABLE `record`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`status_id`);

--
-- Indexes for table `trigger_time`
--
ALTER TABLE `trigger_time`
  ADD PRIMARY KEY (`exec_time`);

--
-- Indexes for table `zone`
--
ALTER TABLE `zone`
  ADD PRIMARY KEY (`zone_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `record`
--
ALTER TABLE `record`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
