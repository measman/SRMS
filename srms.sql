-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 11, 2022 at 10:36 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `srms`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `UserName` varchar(100) DEFAULT NULL,
  `Password` varchar(100) DEFAULT NULL,
  `updationDate` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `UserName`, `Password`, `updationDate`) VALUES
(1, 'admin', '$2y$10$SSZd5DHgul2C/doAS9SEW.h9VSVHfoZPMAhA58BKwj9bfJI4v2Uz2', '2022-01-01 10:30:57');

-- --------------------------------------------------------

--
-- Table structure for table `tblclasses`
--

CREATE TABLE `tblclasses` (
  `id` int(11) NOT NULL,
  `ClassName` varchar(80) DEFAULT NULL,
  `ClassNameNumeric` int(4) DEFAULT NULL,
  `Section` varchar(5) DEFAULT NULL,
  `CreationDate` timestamp NULL DEFAULT current_timestamp(),
  `UpdationDate` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblclasses`
--

INSERT INTO `tblclasses` (`id`, `ClassName`, `ClassNameNumeric`, `Section`, `CreationDate`, `UpdationDate`) VALUES
(1, 'First', 1, 'A', '2022-01-01 10:30:57', '2022-01-01 10:30:57'),
(2, 'Second', 2, 'A', '2022-01-01 10:30:57', '2022-01-01 10:30:57'),
(4, 'Fourth', 4, 'A', '2022-01-01 10:30:57', '2022-01-01 10:30:57'),
(5, 'Sixth', 6, 'A', '2022-01-01 10:30:57', '2022-01-01 10:30:57'),
(6, 'Sixth', 6, 'B', '2022-01-01 10:30:57', '2022-01-01 10:30:57'),
(7, 'Seventh', 7, 'B', '2022-01-01 10:30:57', '2022-01-01 10:30:57'),
(8, 'Eight', 8, 'A', '2022-01-01 10:30:57', '2022-01-01 10:30:57'),
(9, 'Tenth', 10, 'A', '2022-01-01 15:17:32', NULL),
(10, 'Ninth', NULL, 'A', '2022-02-02 17:14:02', NULL),
(11, 'Ninth', NULL, 'A', '2022-02-02 17:14:56', NULL),
(12, 'Ninth', 9, 'B', '2022-02-02 17:15:39', NULL),
(13, 'Eleventh', 11, 'A', '2022-02-03 15:03:15', NULL),
(14, 'Eleventh', 11, 'A', '2022-02-03 15:07:12', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tblnotice`
--

CREATE TABLE `tblnotice` (
  `id` int(11) NOT NULL,
  `noticeTitle` varchar(255) DEFAULT NULL,
  `noticeDetails` mediumtext DEFAULT NULL,
  `postingDate` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblnotice`
--

INSERT INTO `tblnotice` (`id`, `noticeTitle`, `noticeDetails`, `postingDate`) VALUES
(2, 'Notice regarding result Delearation', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Adipiscing elit ut aliquam purus. Vel risus commodo viverra maecenas. Et netus et malesuada fames ac turpis egestas sed. Cursus eget nunc scelerisque viverra mauris in aliquam sem fringilla. Ornare arcu odio ut sem nulla pharetra diam. Vel pharetra vel turpis nunc eget lorem dolor sed. Velit ut tortor pretium viverra suspendisse. In ornare quam viverra orci sagittis eu. Viverra tellus in hac habitasse. Donec massa sapien faucibus et molestie. Libero justo laoreet sit amet cursus sit amet dictum. Dignissim diam quis enim lobortis scelerisque fermentum dui.\r\n\r\nEget nulla facilisi etiam dignissim. Quisque non tellus orci ac. Amet cursus sit amet dictum sit amet justo donec. Interdum velit euismod in pellentesque massa. Condimentum lacinia quis vel eros donec ac odio. Magna eget est lorem ipsum dolor. Bibendum at varius vel pharetra vel turpis nunc eget lorem. Pellentesque adipiscing commodo elit at imperdiet dui accumsan sit amet. Maecenas accumsan lacus vel facilisis volutpat est velit egestas dui. Massa tincidunt dui ut ornare lectus sit amet est placerat. Nisi quis eleifend quam adipiscing vitae.', '2022-01-01 14:34:58'),
(3, 'Test Notice', 'This is for testing purposes only.  This is for testing purposes only.  This is for testing purposes only.  This is for testing purposes only.  This is for testing purposes only.  This is for testing purposes only.  This is for testing purposes only.  This is for testing purposes only.  This is for testing purposes only.  This is for testing purposes only.  This is for testing purposes only.  This is for testing purposes only.  This is for testing purposes only.  This is for testing purposes only.  This is for testing purposes only.  This is for testing purposes only.  This is for testing purposes only.  ', '2022-01-01 14:48:32');

-- --------------------------------------------------------

--
-- Table structure for table `tblresult`
--

CREATE TABLE `tblresult` (
  `id` int(11) NOT NULL,
  `StudentId` int(11) DEFAULT NULL,
  `ClassId` int(11) DEFAULT NULL,
  `SubjectId` int(11) DEFAULT NULL,
  `marks` int(11) DEFAULT NULL,
  `PostingDate` timestamp NULL DEFAULT current_timestamp(),
  `UpdationDate` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblresult`
--

INSERT INTO `tblresult` (`id`, `StudentId`, `ClassId`, `SubjectId`, `marks`, `PostingDate`, `UpdationDate`) VALUES
(2, 1, 1, 2, 100, '2022-01-01 10:30:57', NULL),
(3, 1, 1, 1, 80, '2022-01-01 10:30:57', NULL),
(4, 1, 1, 5, 78, '2022-01-01 10:30:57', NULL),
(5, 1, 1, 4, 60, '2022-01-01 10:30:57', NULL),
(6, 2, 4, 2, 90, '2022-01-01 10:30:57', NULL),
(7, 2, 4, 1, 75, '2022-01-01 10:30:57', NULL),
(8, 2, 4, 5, 56, '2022-01-01 10:30:57', NULL),
(9, 2, 4, 4, 80, '2022-01-01 10:30:57', NULL),
(10, 4, 7, 2, 54, '2022-01-01 10:30:57', NULL),
(11, 4, 7, 1, 85, '2022-01-01 10:30:57', NULL),
(12, 4, 7, 5, 55, '2022-01-01 10:30:57', NULL),
(13, 4, 7, 7, 65, '2022-01-01 10:30:57', NULL),
(14, 5, 8, 2, 75, '2022-01-01 10:30:57', NULL),
(15, 5, 8, 1, 56, '2022-01-01 10:30:57', NULL),
(16, 5, 8, 5, 52, '2022-01-01 10:30:57', NULL),
(17, 5, 8, 4, 80, '2022-01-01 10:30:57', NULL),
(18, 6, 9, 8, 80, '2022-01-01 15:20:18', NULL),
(19, 6, 9, 8, 70, '2022-01-01 15:20:18', NULL),
(20, 6, 9, 2, 90, '2022-01-01 15:20:18', NULL),
(21, 6, 9, 1, 60, '2022-01-01 15:20:18', NULL),
(22, 7, 5, 2, 45, '2022-01-11 16:43:28', NULL),
(23, 7, 5, 1, 53, '2022-01-11 16:43:28', NULL),
(24, 7, 5, 6, 64, '2022-01-11 16:43:28', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tblstudents`
--

CREATE TABLE `tblstudents` (
  `StudentId` int(11) NOT NULL,
  `StudentName` varchar(100) DEFAULT NULL,
  `RollId` varchar(100) DEFAULT NULL,
  `StudentEmail` varchar(100) DEFAULT NULL,
  `Gender` varchar(10) DEFAULT NULL,
  `DOB` varchar(100) DEFAULT NULL,
  `ClassId` int(11) DEFAULT NULL,
  `RegDate` timestamp NULL DEFAULT current_timestamp(),
  `UpdationDate` timestamp NULL DEFAULT NULL,
  `Status` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblstudents`
--

INSERT INTO `tblstudents` (`StudentId`, `StudentName`, `RollId`, `StudentEmail`, `Gender`, `DOB`, `ClassId`, `RegDate`, `UpdationDate`, `Status`) VALUES
(1, 'Sarita', '46456', 'info@phpgurukul.com', 'Female', '1995-03-03', 1, '2022-01-01 10:30:57', NULL, 1),
(2, 'Anuj kumar', '10861', 'anuj@gmail.co', 'Male', '1995-02-02', 4, '2022-01-01 10:30:57', NULL, 1),
(3, 'amit kumar', '2626', 'amit@gmail.com', 'Male', '2014-08-06', 6, '2022-01-01 10:30:57', NULL, 0),
(4, 'rahul kumar', '990', 'rahul01@gmail.com', 'Male', '2001-02-03', 7, '2022-01-01 10:30:57', NULL, 1),
(5, 'sanjeev singh', '122', 'sanjeev01@gmail.com', 'Male', '2002-02-03', 8, '2022-01-01 10:30:57', NULL, 1),
(6, 'Shiv Gupta', '12345', 'shiv34534@gmail.com', 'Male', '2007-01-12', 9, '2022-01-01 15:19:40', NULL, 1),
(7, 'Anita Maharjan', '12345', 'test@test.com', 'Female', '2015-02-11', 5, '2022-01-11 16:41:32', NULL, 1),
(8, 'Sabina Maharjan', '6542', 'test@test.commmmmm', 'Female', '2022-02-06', 2, '2022-02-03 17:08:00', NULL, 1),
(9, 'Sabina Maharjan', '3872', 'test@test', 'Female', '2022-02-09', 1, '2022-02-03 17:09:21', NULL, 1),
(10, 'Lale Nath', '6465', 'test@adsf.com', 'Male', '2021-09-15', 7, '2022-02-03 17:14:57', NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tblsubjectcombination`
--

CREATE TABLE `tblsubjectcombination` (
  `id` int(11) NOT NULL,
  `ClassId` int(11) DEFAULT NULL,
  `SubjectId` int(11) DEFAULT NULL,
  `status` int(1) DEFAULT NULL,
  `CreationDate` timestamp NULL DEFAULT current_timestamp(),
  `Updationdate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblsubjectcombination`
--

INSERT INTO `tblsubjectcombination` (`id`, `ClassId`, `SubjectId`, `status`, `CreationDate`, `Updationdate`) VALUES
(3, 2, 2, 1, '2022-01-01 10:30:57', '2022-02-04 16:57:55'),
(4, 1, 2, 1, '2022-01-01 10:30:57', NULL),
(5, 1, 4, 1, '2022-01-01 10:30:57', NULL),
(6, 1, 5, 1, '2022-01-01 10:30:57', NULL),
(8, 4, 4, 1, '2022-01-01 10:30:57', NULL),
(10, 4, 1, 1, '2022-01-01 10:30:57', NULL),
(12, 4, 2, 1, '2022-01-01 10:30:57', NULL),
(13, 4, 5, 1, '2022-01-01 10:30:57', NULL),
(14, 6, 1, 1, '2022-01-01 10:30:57', NULL),
(15, 6, 2, 1, '2022-01-01 10:30:57', NULL),
(16, 6, 4, 1, '2022-01-01 10:30:57', NULL),
(17, 6, 6, 1, '2022-01-01 10:30:57', NULL),
(18, 7, 1, 1, '2022-01-01 10:30:57', NULL),
(19, 7, 7, 1, '2022-01-01 10:30:57', NULL),
(20, 7, 2, 1, '2022-01-01 10:30:57', NULL),
(21, 7, 6, 1, '2022-01-01 10:30:57', NULL),
(22, 7, 5, 1, '2022-01-01 10:30:57', '2022-01-11 18:07:24'),
(23, 8, 1, 1, '2022-01-01 10:30:57', NULL),
(24, 8, 2, 1, '2022-01-01 10:30:57', NULL),
(25, 8, 4, 1, '2022-01-01 10:30:57', NULL),
(26, 8, 6, 1, '2022-01-01 10:30:57', NULL),
(27, 8, 5, 0, '2022-01-01 10:30:57', NULL),
(28, 9, 1, 1, '2022-01-01 15:18:40', NULL),
(29, 9, 2, 0, '2022-01-01 15:18:43', '2022-01-11 18:07:35'),
(30, 9, 8, 1, '2022-01-01 15:18:48', NULL),
(31, 9, 8, 1, '2022-01-01 15:18:54', NULL),
(32, 5, 1, 1, '2022-01-11 16:42:50', NULL),
(33, 5, 2, 1, '2022-01-11 16:42:59', NULL),
(34, 5, 6, 1, '2022-01-11 16:43:07', NULL),
(35, 13, 1, NULL, '2022-02-04 16:49:58', NULL),
(36, 4, 2, NULL, '2022-02-04 16:57:03', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tblsubjects`
--

CREATE TABLE `tblsubjects` (
  `id` int(11) NOT NULL,
  `SubjectName` varchar(100) NOT NULL,
  `SubjectCode` varchar(100) DEFAULT NULL,
  `fm_th` int(11) NOT NULL,
  `total_cr_hr` int(11) NOT NULL,
  `Creationdate` timestamp NULL DEFAULT current_timestamp(),
  `UpdationDate` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblsubjects`
--

INSERT INTO `tblsubjects` (`id`, `SubjectName`, `SubjectCode`, `fm_th`, `total_cr_hr`, `Creationdate`, `UpdationDate`) VALUES
(1, 'Com.Nepali', '0011', 75, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'Com.English', '0031', 75, 4, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 'Com.Social Studies & Life Skill', '0051', 75, 5, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 'Com.Mathematics', '0071', 75, 5, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, 'Sanskrit Rachana', '0111', 75, 4, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(6, 'Sanskrit Bhasha & Byakaran', '0171', 75, 5, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(7, 'Baudh Education', '0211', 75, 4, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(8, 'Urdu Byakaran & Sahitya', '0311', 75, 4, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(9, 'Physics', '1011', 75, 5, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(10, 'Accounting', '1031', 75, 5, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(11, 'Rural Development', '1051', 75, 5, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(12, 'Jurispudence and Legal Theories', '1071', 75, 5, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(13, 'Painting', '1111', 50, 5, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(14, 'Child Development and Learning', '1151', 75, 5, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(15, 'Psychology', '1191', 75, 5, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(16, 'History', '1211', 75, 5, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(17, 'Gender Studies', '1231', 75, 5, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(18, 'Hospitality Management', '1251', 50, 5, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(19, 'Agronomy', '1271', 50, 5, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(20, 'Naturopathy', '1291', 50, 5, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(21, 'Human Value Education', '1311', 75, 5, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(22, 'Biology', '2011', 75, 5, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(23, 'Education and Development', '2031', 75, 5, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(24, 'Geography', '2051', 75, 5, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(25, 'Procedural Law', '2071', 75, 5, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(26, 'Sociology', '2111', 75, 5, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(27, 'Ayurbed', '2131', 50, 5, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(28, 'Business Studies', '2151', 75, 5, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(29, 'Linguistics', '2171', 75, 5, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(30, 'Political Science', '2191', 75, 5, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(31, 'Philosophy', '2211', 75, 5, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(32, 'Population Studies', '2231', 75, 5, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(33, '\"Horticulture (Fruit', '2251', 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(34, 'Food and Nutrition', '2271', 75, 5, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(35, 'Dance', '2291', 50, 5, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(36, 'History of Arts', '2311', 75, 5, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(37, 'Chemistry', '3011', 75, 5, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(38, 'Economics', '3031', 75, 5, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(39, 'Tourism and Mountaineering Studies', '3051', 50, 5, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(40, 'Marketing', '3071', 75, 5, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(41, 'Gerontology and Care Taking Education', '3091', 75, 5, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(42, 'Yog', '3111', 50, 5, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(43, 'Vocal/Instrumetal', '3131', 50, 5, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(44, 'Sewing and Knitting', '3151', 75, 5, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(45, 'Constitutional Law', '3171', 75, 5, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(46, 'Culinary Arts', '3211', 50, 5, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(47, 'Culture', '3231', 75, 5, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(48, 'Fashion Designing', '3251', 50, 5, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(49, 'Film and Dacumentry', '3271', 75, 5, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(50, '\"Live Stock', '3291', 0, 50, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(51, 'Nepali', '3311', 75, 5, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(52, 'English', '3331', 75, 5, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(53, 'Maithali', '3351', 75, 5, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(54, 'Newari', '3371', 75, 5, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(55, 'Hindi', '3391', 75, 5, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(56, 'Chinease', '3411', 75, 5, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(57, 'Jerman', '3431', 75, 5, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(58, 'Japanease', '3451', 75, 5, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(59, 'Korean', '3471', 75, 5, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(60, 'Urdu', '3491', 75, 5, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(61, 'Bhojpuri', '3511', 75, 5, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(62, 'French', '3531', 75, 5, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(63, 'Hibru', '3551', 75, 5, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(64, 'Arabic', '3571', 75, 5, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(65, 'Sanskrit', '3591', 75, 5, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(66, 'Applied Arts', '3611', 50, 5, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(67, 'Mathematics', '4011', 75, 5, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(68, 'Applied mathematics', '4031', 75, 5, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(69, 'Business Mathematics', '4051', 75, 5, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(70, 'Human rights', '4071', 75, 5, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(71, 'Library and Information Science', '4091', 75, 5, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(72, 'Home Science', '4111', 75, 5, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(73, 'Environment Science', '4131', 75, 5, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(74, 'General Law', '4151', 75, 5, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(75, 'Finance', '4171', 75, 5, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(76, 'Co-operative management', '4191', 75, 5, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(77, 'Buddhist Studies', '4211', 75, 5, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(78, 'Sculpture', '4231', 75, 5, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(79, 'Singing', '4251', 50, 5, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(80, 'Computer Science', '4271', 50, 5, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(81, 'Sericulture and Bee Keeping', '4291', 50, 5, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(82, 'Beautician and Hair Dressing', '4311', 50, 5, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(83, 'Medicinal Herbals', '4331', 50, 5, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(84, 'Plumbing and Wiring', '4351', 50, 5, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(85, 'Internal Decoration', '4371', 75, 5, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(86, 'Hotel Management', '4391', 50, 5, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(87, 'Mass Communication', '4411', 75, 5, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(88, 'Health and Physical Education', '4431', 75, 5, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(89, 'Sports Science', '4451', 50, 5, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(90, 'Social Studies & Life Skill', '4471', 75, 5, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(91, 'Shuklayajurbed', '5011', 75, 5, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(92, 'Sambed', '5031', 75, 5, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(93, 'Rigbed', '5051', 75, 5, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(94, 'Atharbed', '5071', 75, 5, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(95, 'Grammar', '5091', 75, 5, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(96, 'Sidhant Jyotish', '5111', 75, 5, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(97, 'Nayay', '5131', 75, 5, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(98, 'Phyloshophy', '5151', 75, 5, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(99, 'Sanskrit Sahitya', '5171', 75, 5, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(100, 'Itihas Puran', '5191', 75, 5, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(101, 'Nitishastra', '5211', 75, 5, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(102, 'Baudh Karma Kanda', '5271', 75, 5, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(103, 'Karmakand', '5311', 75, 5, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(104, 'Falit Jyotish', '5331', 75, 5, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(105, 'Bastushastra', '5371', 75, 5, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(106, 'Baudh Darshan', '6011', 75, 5, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(107, 'Kuran', '6111', 75, 5, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(108, 'Jyotish', '6211', 75, 5, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(109, 'Bhaisjya', '6231', 75, 5, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(110, 'Shilpa Vidhya', '6251', 75, 5, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(111, 'Pali Language', '6311', 75, 5, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(112, 'Bhot Language', '6331', 75, 5, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(113, 'Hadis & Asule Hadis', '6511', 75, 5, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(114, 'Miras Science', '6611', 75, 5, '0000-00-00 00:00:00', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblclasses`
--
ALTER TABLE `tblclasses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblnotice`
--
ALTER TABLE `tblnotice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblresult`
--
ALTER TABLE `tblresult`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblstudents`
--
ALTER TABLE `tblstudents`
  ADD PRIMARY KEY (`StudentId`);

--
-- Indexes for table `tblsubjectcombination`
--
ALTER TABLE `tblsubjectcombination`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblsubjects`
--
ALTER TABLE `tblsubjects`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tblclasses`
--
ALTER TABLE `tblclasses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tblnotice`
--
ALTER TABLE `tblnotice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tblresult`
--
ALTER TABLE `tblresult`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `tblstudents`
--
ALTER TABLE `tblstudents`
  MODIFY `StudentId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tblsubjectcombination`
--
ALTER TABLE `tblsubjectcombination`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `tblsubjects`
--
ALTER TABLE `tblsubjects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=115;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
