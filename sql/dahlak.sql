-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 27, 2022 at 12:31 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dahlak`
--

-- --------------------------------------------------------

--
-- Table structure for table `9`
--

CREATE TABLE `9` (
  `ID` int(2) NOT NULL,
  `Subject` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='9';

--
-- Dumping data for table `9`
--

INSERT INTO `9` (`ID`, `Subject`) VALUES
(1, 'amharic'),
(2, 'english'),
(3, 'maths'),
(4, 'physics'),
(5, 'biology'),
(6, 'chemistry'),
(7, 'civic'),
(8, 'history'),
(9, 'geography'),
(10, 'hpe'),
(11, 'it');

-- --------------------------------------------------------

--
-- Table structure for table `10`
--

CREATE TABLE `10` (
  `ID` int(2) NOT NULL,
  `Subject` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `10`
--

INSERT INTO `10` (`ID`, `Subject`) VALUES
(1, 'amharic'),
(2, 'english'),
(3, 'maths'),
(4, 'physics'),
(5, 'biology'),
(6, 'chemistry'),
(7, 'civic'),
(8, 'td'),
(9, 'hpe'),
(10, 'it');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `Fname` varchar(255) DEFAULT NULL,
  `Lname` varchar(255) DEFAULT NULL,
  `Sname` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(15) DEFAULT NULL,
  `img` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `Fname`, `Lname`, `Sname`, `phone`, `email`, `password`, `img`) VALUES
(1, 'yeabtsega', 'gashaw', 'tilahun', '0902765166', 'yeabtsegagashaw@gmail.com', 'qweasdcxz', 'yab.JPG'),
(2, 'Tsega', 'Tigneh', 'Yifru', '0936270708', 'tsegatigneh@gmail.com', '11111111', 'teacher.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `amharic`
--

CREATE TABLE `amharic` (
  `STUDID` int(11) NOT NULL,
  `Assignment` int(11) NOT NULL,
  `MidExam` int(11) NOT NULL,
  `FinalExam` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `amharic`
--

INSERT INTO `amharic` (`STUDID`, `Assignment`, `MidExam`, `FinalExam`) VALUES
(0, 1, 2, 1),
(100, 19, 28, 46),
(116, 15, 11, 22),
(117, 123, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `biology`
--

CREATE TABLE `biology` (
  `STUDID` int(11) NOT NULL,
  `Assignment` int(11) NOT NULL,
  `MidExam` int(11) NOT NULL,
  `FinalExam` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `biology`
--

INSERT INTO `biology` (`STUDID`, `Assignment`, `MidExam`, `FinalExam`) VALUES
(118, 20, 29, 45);

-- --------------------------------------------------------

--
-- Table structure for table `chemistry`
--

CREATE TABLE `chemistry` (
  `STUDID` int(11) NOT NULL,
  `Assignment` int(11) NOT NULL,
  `MidExam` int(11) NOT NULL,
  `FinalExam` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `civic`
--

CREATE TABLE `civic` (
  `STUDID` int(11) NOT NULL,
  `Assignment` int(11) NOT NULL,
  `MidExam` int(11) NOT NULL,
  `FinalExam` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `english`
--

CREATE TABLE `english` (
  `STUDID` int(11) NOT NULL,
  `Assignment` int(11) NOT NULL,
  `MidExam` int(11) NOT NULL,
  `FinalExam` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `geography`
--

CREATE TABLE `geography` (
  `STUDID` int(11) NOT NULL,
  `Assignment` int(11) NOT NULL,
  `MidExam` int(11) NOT NULL,
  `FinalExam` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `grade9score`
--

CREATE TABLE `grade9score` (
  `studid` int(11) NOT NULL,
  `Amharic` int(3) NOT NULL,
  `English` int(3) NOT NULL,
  `Physics` int(3) NOT NULL,
  `Biology` int(3) NOT NULL,
  `Chemistry` int(3) NOT NULL,
  `Maths` int(3) NOT NULL,
  `Civics` int(3) NOT NULL,
  `Geography` int(3) NOT NULL,
  `History` int(3) NOT NULL,
  `HPE` int(3) NOT NULL,
  `IT` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

CREATE TABLE `history` (
  `STUDID` int(11) NOT NULL,
  `Assignment` int(11) NOT NULL,
  `MidExam` int(11) NOT NULL,
  `FinalExam` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `hpe`
--

CREATE TABLE `hpe` (
  `STUDID` int(11) NOT NULL,
  `Assignment` int(11) NOT NULL,
  `MidExam` int(11) NOT NULL,
  `FinalExam` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `it`
--

CREATE TABLE `it` (
  `STUDID` int(11) NOT NULL,
  `Assignment` int(11) NOT NULL,
  `MidExam` int(11) NOT NULL,
  `FinalExam` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `maths`
--

CREATE TABLE `maths` (
  `STUDID` int(11) NOT NULL,
  `Assignment` int(11) NOT NULL,
  `MidExam` int(11) NOT NULL,
  `FinalExam` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `id` int(50) NOT NULL,
  `fromwhich` varchar(50) NOT NULL,
  `towhich` varchar(10) NOT NULL,
  `fromname` varchar(30) NOT NULL,
  `toname` varchar(30) NOT NULL,
  `message` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`id`, `fromwhich`, `towhich`, `fromname`, `toname`, `message`) VALUES
(35, 'student', 'admin', 'Tsega', 'yeabtsega', 'you ypou'),
(36, 'admin', 'student', 'yeabtsega', 'Tsega', 'weye weu'),
(37, 'student', 'parent', 'Tsega', 'Tsega', 'wewewewe'),
(38, 'admin', 'parent', 'yeabtsega', 'Tsega11', 'eeee'),
(39, 'admin', 'parent', 'yeabtsega', 'Tsega11', 'eeee'),
(40, 'student', 'parent', 'Tsega', 'Tsega11', 'qqwwqqww'),
(41, 'student', 'parent', 'Tsega', 'Tsega11', 'qqwwqqww'),
(42, 'student', 'parent', 'Tsega', 'Tsega11', 'qwqwqwqw'),
(43, 'parent', 'student', 'Tsega11', 'Tsega', 'wewewewe'),
(44, 'student', 'parent', 'Tsega', 'Tsega11', 'qwqwqwqw'),
(45, 'student', 'parent', 'Tsega', 'Tsega11', 'qwqwqwqw'),
(46, 'student', 'parent', 'Tsega', 'Tsega11', 'qwqwqwqw'),
(47, 'student', 'parent', 'Tsega', 'Tsega11', 'wewewewe'),
(48, 'student', 'parent', 'Tsega', 'Tsega11', 'dddddd'),
(49, 'student', 'parent', 'Tsega', 'Tsega11', 'dddddd'),
(50, 'parent', 'student', 'Tsega11', 'Tsega', 'wewewewe'),
(51, 'parent', 'student', 'Tsega11', 'Tsega', 'eeee'),
(52, 'parent', 'student', 'Tsega11', 'Tsega', 'eeee'),
(53, 'parent', 'student', 'Tsega11', 'Tsega', 'eeee'),
(54, 'admin', '', 'yeabtsega', '', ''),
(55, 'student', '', 'Tsega', '', ''),
(56, 'student', '', 'Tsega', '', ''),
(57, 'student', '', 'Tsega', '', ''),
(58, 'student', '', 'Tsega', '', ''),
(59, 'student', '', 'Tsega', '', ''),
(60, 'student', '', 'Tsega', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `parent`
--

CREATE TABLE `parent` (
  `id` int(11) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `mname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `studid` int(10) NOT NULL,
  `sex` varchar(2) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` int(13) NOT NULL,
  `password` varchar(16) NOT NULL,
  `img` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `parent`
--

INSERT INTO `parent` (`id`, `fname`, `mname`, `lname`, `studid`, `sex`, `email`, `phone`, `password`, `img`) VALUES
(37, 'Tsega11', 'dhfghf', 'fghfgh', 116, 'F', 'yeabtsegagashw@gmail.com', 1234567890, '12121212', 'admin1.jpeg'),
(38, 'Abebe', 'Kebede', 'alemu', 118, 'M', 'parent2@gmail.com', 9685968, '22222222', '');

-- --------------------------------------------------------

--
-- Table structure for table `physics`
--

CREATE TABLE `physics` (
  `STUDID` int(11) NOT NULL,
  `Assignment` int(11) NOT NULL,
  `MidExam` int(11) NOT NULL,
  `FinalExam` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `ID` int(11) NOT NULL,
  `fname` varchar(255) DEFAULT NULL,
  `lname` varchar(50) DEFAULT NULL,
  `sname` varchar(255) DEFAULT NULL,
  `sex` varchar(255) DEFAULT NULL,
  `grade` varchar(255) DEFAULT NULL,
  `nation` varchar(255) DEFAULT NULL,
  `age` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `mname` varchar(255) DEFAULT NULL,
  `mfname` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `pname` varchar(255) DEFAULT NULL,
  `pfname` varchar(255) DEFAULT NULL,
  `pphone` varchar(255) DEFAULT NULL,
  `img` varchar(255) DEFAULT NULL,
  `document` varchar(50) NOT NULL,
  `logintype` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`ID`, `fname`, `lname`, `sname`, `sex`, `grade`, `nation`, `age`, `email`, `phone`, `mname`, `mfname`, `password`, `pname`, `pfname`, `pphone`, `img`, `document`, `logintype`) VALUES
(100, 'Elias', 'kebede', 'alemu', 'M', '9', 'Ethiopian', '23', 'stud1@gmail.com', '0987654321', 'Mother', 'Ela', '11111111', 'kebede', 'alemi', '098765432', '', 'ALG_Guide_Book[1].pdf', '1'),
(101, 'Natnail', 'kebede', 'alemu', 'M', '9', 'Ethiopian', '23', 'stud2@gmail.com', '0987654321', 'Mother', 'Ela', '22222222', 'kebede', 'alemi', '098765432', '', '', '1'),
(102, 'Abebe', 'kebede', 'alemu', 'M', '9', 'Ethiopian', '23', 'stud3@gmail.com', '0987654321', 'Mother', 'Ela', '33333333', 'kebede', 'alemi', '098765432', '', '', '1'),
(104, 'Derese', 'kebede', 'alemu', 'M', '9', 'Ethiopian', '23', 'stud4@gmail.com', '0987654321', 'Mother', 'Ela', '44444444', 'kebede', 'alemi', '098765432', '', '', '1'),
(105, 'Nahom', 'kebede', 'alemu', 'M', '9', 'Ethiopian', '23', 'stud5@gmail.com', '0987654321', 'Mother', 'Ela', '55555555', 'kebede', 'alemi', '098765432', '', '', '1'),
(106, 'Maeregu', 'Mustar', 'alemu', 'M', '10', 'Ethiopian', '23', 'stud6@gmail.com', '0987654321', 'Mother', 'Ela', '66666666', 'kebede', 'alemi', '098765432', '', '', '1'),
(107, 'Nueman', 'Beshir', 'alemu', 'M', '10', 'Ethiopian', '23', 'stud7@gmail.com', '0987654321', 'Mother', 'Ela', '11111111', 'kebede', 'alemi', '098765432', '', '', '1'),
(108, 'Temesgen', 'Yohans', 'alemu', 'M', '10', 'Ethiopian', '23', 'stud8@gmail.com', '0987654321', 'Mother', 'Ela', '88888888', 'kebede', 'alemi', '098765432', '', '', '1'),
(109, 'Nurahmed', 'Ali', 'alemu', 'M', '10', 'Ethiopian', '23', 'stud9@gmail.com', '0987654321', 'Mother', 'Ela', '99999999', 'kebede', 'alemi', '098765432', '', '', '1'),
(110, 'Bruk', 'kebede', 'elias', 'M', '10', 'Ethiopian', '23', 'stud10@gmail.com', '0987654321', 'Mother', 'Ela', 'aaaaaaaa', 'kebede', 'alemi', '098765432', '', '', '1'),
(111, 'yalew', 'Yohans', 'alemu', 'M', '11', 'Ethiopian', '23', 'stud11@gmail.com', '0987654321', 'Mother', 'Ela', 'bbbbbbbb', 'kebede', 'alemi', '098765432', '', '', '1'),
(112, 'ylelew', 'Yohans', 'alemu', 'M', '11', 'Ethiopian', '23', 'stud12@gmail.com', '0987654321', 'Mother', 'Ela', 'cccccccc', 'kebede', 'alemi', '098765432', '', '', '1'),
(113, 'ybelew', 'kebede', 'alemu', 'M', '11', 'Ethiopian', '23', 'stud13@gmail.com', '0987654321', 'Mother', 'Ela', 'dddddddd', 'kebede', 'alemi', '098765432', '', '', '1'),
(114, 'Olyad', 'Yohans', 'alemu', 'M', '11', 'Ethiopian', '23', 'stud14@gmail.com', '0987654321', 'Mother', 'Ela', 'eeeeeeee', 'kebede', 'alemi', '098765432', '', '', '1'),
(115, 'Eleni', 'Alebachew', 'alemu', 'M', '10', 'Ethiopian', '23', 'stud15@gmail.com', '0987654321', 'Mother', 'Ela', '88888888', 'kebede', 'alemi', '098765432', '', '', '1'),
(116, 'Hiwet', 'Yared', 'alemu', 'M', '12', 'Ethiopian', '23', 'stud16@gmail.com', '0987654321', 'Mother', 'Ela', '88888888', 'kebede', 'alemi', '098765432', '', '', '1'),
(117, 'Derer', 'Yohans', 'alemu', 'M', '12', 'Ethiopian', '23', 'stud17@gmail.com', '0987654321', 'Mother', 'Ela', '88888888', 'kebede', 'alemi', '098765432', '', '', '1'),
(118, 'salhe', 'seid', 'alemu', 'M', '12', 'Ethiopian', '23', 'stud18@gmail.com', '0987654321', 'Mother', 'Ela', '88888888', 'kebede', 'alemi', '098765432', '', '', '1'),
(119, 'betelhem', 'getachew', 'alemu', 'M', '12', 'Ethiopian', '23', 'stud19@gmail.com', '0987654321', 'Mother', 'Ela', '88888888', 'kebede', 'alemi', '098765432', '', '', '1'),
(120, 'wesun', 'efefef', 'alemu', 'M', '12', 'Ethiopian', '23', 'stud20@gmail.com', '0987654321', 'Mother', 'Ela', '88888888', 'kebede', 'alemi', '098765432', '', '', '1');

-- --------------------------------------------------------

--
-- Table structure for table `td`
--

CREATE TABLE `td` (
  `STUDID` int(11) NOT NULL,
  `Assignment` int(11) NOT NULL,
  `MidExam` int(11) NOT NULL,
  `FinalExam` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `id` int(10) NOT NULL,
  `fname` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `sname` varchar(30) NOT NULL,
  `sex` varchar(1) NOT NULL,
  `grade` int(2) NOT NULL,
  `subject` varchar(20) NOT NULL,
  `nation` varchar(50) NOT NULL,
  `phone` int(12) NOT NULL,
  `age` int(2) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(16) NOT NULL,
  `img` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`id`, `fname`, `lname`, `sname`, `sex`, `grade`, `subject`, `nation`, `phone`, `age`, `email`, `password`, `img`) VALUES
(23, 'elias', 'euel', 'Yonas', 'M', 9, 'amharic', 'indian', 987654321, 28, 'amharic@gmail.com', 'teacher1', ''),
(24, 'elias', 'euel', 'Yonas', 'M', 9, 'English', 'indian', 987654321, 28, 'english@gmail.com', 'teacher1', ''),
(25, 'elias', 'euel', 'Yonas', 'M', 9, 'maths', 'indian', 987654321, 28, 'maths@gmail.com', 'teacher1', ''),
(26, 'elias', 'euel', 'Yonas', 'M', 9, 'biology', 'indian', 987654321, 28, 'biology@gmail.com', 'teacher1', ''),
(27, 'elias', 'euel', 'Yonas', 'M', 9, 'chemistry', 'indian', 987654321, 28, 'chemistry@gmail.com', 'teacher1', ''),
(28, 'elias', 'euel', 'Yonas', 'M', 9, 'civic', 'indian', 987654321, 28, 'civic@gmail.com', 'teacher1', ''),
(29, 'elias', 'euel', 'Yonas', 'M', 9, 'geography', 'indian', 987654321, 28, 'geography@gmail.com', 'teacher1', ''),
(30, 'elias', 'euel', 'Yonas', 'M', 9, 'history', 'indian', 987654321, 28, 'history@gmail.com', 'teacher1', ''),
(31, 'elias', 'euel', 'Yonas', 'M', 9, 'it', 'indian', 987654321, 28, 'it@gmail.com', 'teacher1', ''),
(32, 'elias', 'euel', 'Yonas', 'M', 9, 'hpe', 'indian', 987654321, 28, 'hpe@gmail.com', 'teacher1', ''),
(33, 'elias', 'euel', 'Yonas', 'M', 9, 'physics', 'indian', 987654321, 28, 'physics@gmail.com', 'teacher1', ''),
(34, 'elias', 'euel', 'Yonas', 'M', 10, 'amharic', 'indian', 987654321, 28, 'amharic1@gmail.com', 'teacher1', ''),
(35, 'elias', 'euel', 'Yonas', 'M', 10, 'English', 'indian', 987654321, 28, 'english1@gmail.com', 'teacher1', ''),
(36, 'elias', 'euel', 'Yonas', 'M', 10, 'maths', 'indian', 987654321, 28, 'maths1@gmail.com', 'teacher1', ''),
(37, 'elias', 'euel', 'Yonas', 'M', 10, 'biology', 'indian', 987654321, 28, 'biology1@gmail.com', 'teacher1', ''),
(38, 'elias', 'euel', 'Yonas', 'M', 10, 'chemistry', 'indian', 987654321, 28, 'chemistry1@gmail.com', 'teacher1', ''),
(39, 'elias', 'euel', 'Yonas', 'M', 10, 'civic', 'indian', 987654321, 28, 'civic1@gmail.com', 'teacher1', ''),
(40, 'elias', 'euel', 'Yonas', 'M', 10, 'geography', 'indian', 987654321, 28, 'geography1@gmail.com', 'teacher1', ''),
(41, 'elias', 'euel', 'Yonas', 'M', 10, 'history', 'indian', 987654321, 28, 'history1@gmail.com', 'teacher1', ''),
(42, 'elias', 'euel', 'Yonas', 'M', 10, 'it', 'indian', 987654321, 28, 'it1@gmail.com', 'teacher1', ''),
(43, 'elias', 'euel', 'Yonas', 'M', 10, 'hpe', 'indian', 987654321, 28, 'hpe1@gmail.com', 'teacher1', ''),
(44, 'elias', 'euel', 'Yonas', 'M', 10, 'physics', 'indian', 987654321, 28, 'physics1@gmail.com', 'teacher1', ''),
(45, 'elias', 'euel', 'Yonas', 'M', 11, 'amharic', 'indian', 987654321, 28, 'amharic12@gmail.com', 'teacher1', ''),
(46, 'elias', 'euel', 'Yonas', 'M', 11, 'English', 'indian', 987654321, 28, 'english12@gmail.com', 'teacher1', ''),
(47, 'elias', 'euel', 'Yonas', 'M', 11, 'maths', 'indian', 987654321, 28, 'maths12@gmail.com', 'teacher1', ''),
(48, 'elias', 'euel', 'Yonas', 'M', 11, 'biology', 'indian', 987654321, 28, 'biology12@gmail.com', 'teacher1', ''),
(49, 'elias', 'euel', 'Yonas', 'M', 11, 'chemistry', 'indian', 987654321, 28, 'chemistry12@gmail.com', 'teacher1', ''),
(50, 'elias', 'euel', 'Yonas', 'M', 11, 'civic', 'indian', 987654321, 28, 'civic12@gmail.com', 'teacher1', ''),
(51, 'elias', 'euel', 'Yonas', 'M', 11, 'history', 'indian', 987654321, 28, 'td12@gmail.com', 'teacher1', ''),
(52, 'elias', 'euel', 'Yonas', 'M', 11, 'it', 'indian', 987654321, 28, 'it12@gmail.com', 'teacher1', ''),
(53, 'elias', 'euel', 'Yonas', 'M', 11, 'hpe', 'indian', 987654321, 28, 'hpe12@gmail.com', 'teacher1', ''),
(54, 'elias', 'euel', 'Yonas', 'M', 11, 'physics', 'indian', 987654321, 28, 'physics12@gmail.com', 'teacher1', ''),
(55, 'elias', 'euel', 'Yonas', 'M', 12, 'amharic', 'indian', 987654321, 28, 'amharic11@gmail.com', 'teacher1', ''),
(56, 'elias', 'euel', 'Yonas', 'M', 12, 'English', 'indian', 987654321, 28, 'english11@gmail.com', 'teacher1', ''),
(57, 'elias', 'euel', 'Yonas', 'M', 12, 'maths', 'indian', 987654321, 28, 'maths11@gmail.com', 'teacher1', ''),
(58, 'elias', 'euel', 'Yonas', 'M', 12, 'biology', 'indian', 987654321, 28, 'biology11@gmail.com', 'teacher1', ''),
(59, 'elias', 'euel', 'Yonas', 'M', 12, 'chemistry', 'indian', 987654321, 28, 'chemistry11@gmail.com', 'teacher1', ''),
(60, 'elias', 'euel', 'Yonas', 'M', 12, 'civic', 'indian', 987654321, 28, 'civic11@gmail.com', 'teacher1', ''),
(61, 'elias', 'euel', 'Yonas', 'M', 12, 'history', 'indian', 987654321, 28, 'td11@gmail.com', 'teacher1', ''),
(62, 'elias', 'euel', 'Yonas', 'M', 12, 'it', 'indian', 987654321, 28, 'it11@gmail.com', 'teacher1', ''),
(63, 'elias', 'euel', 'Yonas', 'M', 12, 'hpe', 'indian', 987654321, 28, 'hpe11@gmail.com', 'teacher1', ''),
(64, 'elias', 'euel', 'Yonas', 'M', 12, 'physics', 'indian', 987654321, 28, 'physics11@gmail.com', 'teacher1', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `9`
--
ALTER TABLE `9`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `10`
--
ALTER TABLE `10`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `amharic`
--
ALTER TABLE `amharic`
  ADD PRIMARY KEY (`STUDID`);

--
-- Indexes for table `biology`
--
ALTER TABLE `biology`
  ADD PRIMARY KEY (`STUDID`);

--
-- Indexes for table `chemistry`
--
ALTER TABLE `chemistry`
  ADD PRIMARY KEY (`STUDID`);

--
-- Indexes for table `civic`
--
ALTER TABLE `civic`
  ADD PRIMARY KEY (`STUDID`);

--
-- Indexes for table `english`
--
ALTER TABLE `english`
  ADD PRIMARY KEY (`STUDID`);

--
-- Indexes for table `geography`
--
ALTER TABLE `geography`
  ADD PRIMARY KEY (`STUDID`);

--
-- Indexes for table `grade9score`
--
ALTER TABLE `grade9score`
  ADD PRIMARY KEY (`studid`);

--
-- Indexes for table `history`
--
ALTER TABLE `history`
  ADD PRIMARY KEY (`STUDID`);

--
-- Indexes for table `hpe`
--
ALTER TABLE `hpe`
  ADD PRIMARY KEY (`STUDID`);

--
-- Indexes for table `it`
--
ALTER TABLE `it`
  ADD PRIMARY KEY (`STUDID`);

--
-- Indexes for table `maths`
--
ALTER TABLE `maths`
  ADD PRIMARY KEY (`STUDID`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `parent`
--
ALTER TABLE `parent`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `physics`
--
ALTER TABLE `physics`
  ADD PRIMARY KEY (`STUDID`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `td`
--
ALTER TABLE `td`
  ADD PRIMARY KEY (`STUDID`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `9`
--
ALTER TABLE `9`
  MODIFY `ID` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `10`
--
ALTER TABLE `10`
  MODIFY `ID` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `parent`
--
ALTER TABLE `parent`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=121;

--
-- AUTO_INCREMENT for table `teacher`
--
ALTER TABLE `teacher`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
