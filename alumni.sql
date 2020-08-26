-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 23, 2020 at 04:42 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `alumni`
--

-- --------------------------------------------------------

--
-- Table structure for table `db1`
--

CREATE TABLE IF NOT EXISTS `db1` (
  `SNO` int(12) NOT NULL AUTO_INCREMENT,
  `REGNO` varchar(10) DEFAULT NULL,
  `NAME` varchar(42) DEFAULT NULL,
  `EMAIL` varchar(84) DEFAULT NULL,
  `PASSWORD` varchar(12) DEFAULT NULL,
  `MOBILE` varchar(78) DEFAULT NULL,
  `DEGREE` varchar(39) DEFAULT NULL,
  `BRANCH` varchar(41) DEFAULT NULL,
  `YOJ` varchar(4) DEFAULT NULL,
  `LOCATION` varchar(13) DEFAULT NULL,
  `DESIGNATION` varchar(382) DEFAULT NULL,
  `DOMAIN` varchar(10) DEFAULT NULL,
  `HIGHER_EDU` varchar(10) DEFAULT NULL,
  KEY `SNO` (`SNO`),
  KEY `SNO_2` (`SNO`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `db1`
--

INSERT INTO `db1` (`SNO`, `REGNO`, `NAME`, `EMAIL`, `PASSWORD`, `MOBILE`, `DEGREE`, `BRANCH`, `YOJ`, `LOCATION`, `DESIGNATION`, `DOMAIN`, `HIGHER_EDU`) VALUES
(1, NULL, 'Admin', 'tcealumni1957@gmail.com', 'alumnitce@', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1, '18IT003', 'ABHIJITH', 'vsa3441@gmail.com', 'abhi', '99999999', 'B.Tech', 'IT', '', '', '', '', 'No');

-- --------------------------------------------------------

--
-- Table structure for table `temporary`
--

CREATE TABLE IF NOT EXISTS `temporary` (
  `SNO` int(12) NOT NULL AUTO_INCREMENT,
  `REGNO` varchar(20) NOT NULL,
  `NAME` varchar(255) NOT NULL,
  `EMAIL` varchar(255) NOT NULL,
  `PASSWORD` varchar(15) NOT NULL,
  `MOBILE` int(12) NOT NULL,
  `DEGREE` varchar(100) NOT NULL,
  `BRANCH` varchar(100) NOT NULL,
  `YOJ` varchar(100) NOT NULL,
  `LOCATION` varchar(100) NOT NULL,
  `DESIGNATION` varchar(255) NOT NULL,
  `DOMAIN` varchar(255) NOT NULL,
  `HIGHER_EDU` varchar(100) NOT NULL,
  PRIMARY KEY (`SNO`),
  UNIQUE KEY `EMAIL` (`EMAIL`),
  UNIQUE KEY `EMAIL_2` (`EMAIL`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `temporary`
--

INSERT INTO `temporary` (`SNO`, `REGNO`, `NAME`, `EMAIL`, `PASSWORD`, `MOBILE`, `DEGREE`, `BRANCH`, `YOJ`, `LOCATION`, `DESIGNATION`, `DOMAIN`, `HIGHER_EDU`) VALUES
(1, '18IT003', 'VSA', 'vsa3441@gmail.com', 'test', 0, '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `verification`
--


-- --------------------------------------------------------

--
-- Table structure for table `visit`
--

CREATE TABLE IF NOT EXISTS `visit` (
  `Name` varchar(21) DEFAULT NULL,
  `Email` varchar(23) DEFAULT NULL,
  `Batch` int(4) DEFAULT NULL,
  `Department` varchar(22) DEFAULT NULL,
  `Mobile` bigint(12) DEFAULT NULL,
  `Date of visit` varchar(10) DEFAULT NULL,
  `Purpose of visit` varchar(7) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `visit`
--

INSERT INTO `visit` (`Name`, `Email`, `Batch`, `Department`, `Mobile`, `Date of visit`, `Purpose of visit`) VALUES
('vaigai', 'vaigairam1998@gmail.com', 2015, 'ECE', 999999999999, '2018-01-25', 'hello'),
('vaigai', 'vaigairam1998@gmail.com', 2015, 'ECE', 999999999999, '2018-01-25', 'hello'),
('vaigai', 'vaigairam1998@gmail.com', 2012, 'EEE', 999999999999, '2018-01-09', 'hhhh'),
('vaigai', 'vaigairam1998@gmail.com', 2025, 'EEE', 9751929662, '2018-01-19', 'MNB'),
('Nalanthan Ramamoorthy', 'vaigairam1998@gmail.com', 2000, 'CSE', 4553532, '2018-01-18', 'bjhb'),
('Nalanthan Ramamoorthy', 'vaigairam1998@gmail.com', 2000, 'CSE', 4553532, '2018-01-18', 'bjhb'),
('vaigai', 'vaigai@gmail.com', 1998, 'EEE', 4553532, '2018-01-16', 'mmm'),
('j', 'vaigairam1998@gmail.com', 5, 'Select Your Department', 9047871939, '2018-05-01', '85'),
('bn', 'vaigairam98@gmail.com', 1111, 'CSE', 9652, '2018-04-26', 'nmkl;'),
('vbnhjkjn', 'vaigairam1998@gmail.com', 1952, 'Mechanical', 545554, '2018-03-27', 'kmkmk'),
('bbb', 'nalanthan@gmail.com', 1958, 'Mechanical', 904747474747, '2018-04-10', 'bvghjkl'),
('gvhbjnkml', 'vaigai@gmail.com', 1525, 'Mechanical', 904747474747, '2018-03-28', 'jhvkjn '),
('uihjk', 'duraiyazh1998@gmail.com', 54, 'Mechanical', 563456, '2018-04-04', 'jkhk'),
('dfs', 'vaigairam1998@gmail.com', 2514, 'ECE', 9047871939, '2018-07-31', 'er'),
('fsf', 'vaigairam1998@gmail.com', 1954, 'Mechanical', 52452424, '2018-08-21', 'dgyh'),
('ghd', 'vaigairam1998@gmail.com', 1957, 'Mechanical', 52452424, '2018-08-02', 'sadbh'),
('fsf', 'vaigairam1998@gmail.com', 1655, 'Civil', 4545, '2018-08-07', 'sabdb'),
('fsf', 'vaigairam11@gmail.com', 1655, 'Civil', 4545, '2018-08-07', 'sabdb'),
('jsfdfz', 'tgtf@hggh.com', 1958, 'Mechanical', 524245454, '2018-07-31', 'nh'),
('gfggh', 'vaigairam11@gmail.com', 1958, 'Mechanical', 36153, '2018-09-04', 'gfc'),
('gfggh', 'vaigairam11@gmail.com', 1958, 'Mechanical', 36153, '2018-09-04', 'gfc'),
('te', 'vaigairam1998@gmail.com', 1958, 'ECE', 4546, '2018-08-01', 'sad'),
('jsfdfz', 'vaigairam1998@gmail.com', 1956, 'EEE', 5465, '2018-08-08', 'fdg'),
('hfh', 'vaigairam1998@gmail.com', 1956, 'Select Your Department', 35465, '2018-07-31', 'hgj'),
('uujgfkk', 'vaigairam1998@gmail.com', 1956, 'IT', 354, '2018-08-16', 'yu'),
('dsfsd', 'vaigairam1998@gmail.com', 1958, 'EEE', 242443, '2018-08-14', 'asd'),
('dfs', 'vaigairam1998@gmail.com', 1965, 'ECE', 35143, '2018-08-08', 'df'),
('fgd', 'vaigairam1998@gmail.com', 1955, 'IT', 6546851, '2018-08-30', 'dsf'),
('fsg', 'vaigairam1998@gmail.com', 1965, 'ECE', 653, '2018-08-06', 'df'),
('fdg', 'vaigairam1998@gmail.com', 1956, 'Select Your Department', 435, '2019-06-12', 'sda'),
('fdg', 'vaigairam1998@gmail.com', 1956, 'Select Your Department', 435, '2019-06-12', 'sda'),
('fdgrfg', 'vaigairam1998@gmail.com', 1956, 'ECE', 9047871939, '2018-08-22', 'df'),
('asd', 'vaigairam1998@gmail.com', 1956, 'EEE', 354, '2018-08-06', 'xch'),
('xzcv', 'vaigairam1998@gmail.com', 1956, 'CSE', 3653, '2018-08-14', 'sabdb'),
('nvdv', 'vaigairam1998@gmail.com', 1956, 'EEE', 255, '2018-09-04', 'ksak'),
('nb nh', 'vaigairam1998@gmail.com', 1956, 'ECE', 85, '2018-08-28', 'shdj');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;


CREATE TABLE IF NOT EXISTS `events1` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `image` longblob NOT NULL,
  `uploaded` datetime NOT NULL,
  `name` varchar(50) NOT NULL,
  `description` varchar(150) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--

