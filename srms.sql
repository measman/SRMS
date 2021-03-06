-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 25, 2022 at 09:18 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.5

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
  `in_marks` int(11) NOT NULL,
  `PostingDate` timestamp NULL DEFAULT current_timestamp(),
  `UpdationDate` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblresult`
--

INSERT INTO `tblresult` (`id`, `StudentId`, `ClassId`, `SubjectId`, `marks`, `in_marks`, `PostingDate`, `UpdationDate`) VALUES
(2, 1, 1, 2, 100, 0, '2022-01-01 10:30:57', NULL),
(3, 1, 1, 1, 80, 0, '2022-01-01 10:30:57', NULL),
(4, 1, 1, 5, 78, 0, '2022-01-01 10:30:57', NULL),
(5, 1, 1, 4, 60, 0, '2022-01-01 10:30:57', NULL),
(6, 2, 4, 2, 90, 0, '2022-01-01 10:30:57', NULL),
(7, 2, 4, 1, 75, 0, '2022-01-01 10:30:57', NULL),
(8, 2, 4, 5, 56, 0, '2022-01-01 10:30:57', NULL),
(9, 2, 4, 4, 80, 0, '2022-01-01 10:30:57', NULL),
(10, 4, 7, 2, 54, 0, '2022-01-01 10:30:57', NULL),
(11, 4, 7, 1, 85, 0, '2022-01-01 10:30:57', NULL),
(12, 4, 7, 5, 55, 0, '2022-01-01 10:30:57', NULL),
(13, 4, 7, 7, 65, 0, '2022-01-01 10:30:57', NULL),
(14, 5, 8, 2, 75, 0, '2022-01-01 10:30:57', NULL),
(15, 5, 8, 1, 56, 0, '2022-01-01 10:30:57', NULL),
(16, 5, 8, 5, 52, 0, '2022-01-01 10:30:57', NULL),
(17, 5, 8, 4, 80, 0, '2022-01-01 10:30:57', NULL),
(18, 6, 9, 1, 80, 20, '2022-01-01 15:20:18', NULL),
(19, 6, 9, 2, 70, 0, '2022-01-01 15:20:18', NULL),
(20, 6, 9, 8, 90, 0, '2022-01-01 15:20:18', NULL),
(21, 6, 9, 8, 60, 0, '2022-01-01 15:20:18', NULL),
(22, 7, 5, 1, 45, 20, '2022-01-11 16:43:28', NULL),
(23, 7, 5, 2, 53, 20, '2022-01-11 16:43:28', NULL),
(24, 7, 5, 6, 64, 20, '2022-01-11 16:43:28', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tblstudents`
--

CREATE TABLE `tblstudents` (
  `StudentId` int(11) NOT NULL,
  `StudentName` varchar(100) DEFAULT NULL,
  `RollId` varchar(100) DEFAULT NULL,
  `RegNo` bigint(20) NOT NULL,
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

INSERT INTO `tblstudents` (`StudentId`, `StudentName`, `RollId`, `RegNo`, `StudentEmail`, `Gender`, `DOB`, `ClassId`, `RegDate`, `UpdationDate`, `Status`) VALUES
(1, 'Sarita', '46456', 123456789123, 'info@phpgurukul.com', 'Female', '1995-03-03', 1, '2022-01-01 10:30:57', NULL, 1),
(2, 'Anuj kumar', '10861', 123456789123, 'anuj@gmail.co', 'Male', '1995-02-02', 4, '2022-01-01 10:30:57', NULL, 1),
(3, 'amit kumar', '2626', 123456789123, 'amit@gmail.com', 'Male', '2014-08-06', 6, '2022-01-01 10:30:57', NULL, 0),
(4, 'rahul kumar', '990', 123456789123, 'rahul01@gmail.com', 'Male', '2001-02-03', 7, '2022-01-01 10:30:57', NULL, 1),
(5, 'sanjeev singh', '122', 123456789123, 'sanjeev01@gmail.com', 'Male', '2002-02-03', 8, '2022-01-01 10:30:57', NULL, 1),
(6, 'Shiv Gupta', '12345', 123456789123, 'shiv34534@gmail.com', 'Male', '2007-01-12', 9, '2022-01-01 15:19:40', NULL, 1),
(7, 'Anita Maharjan', '12345', 123456789123, 'test@test.com', 'Female', '2015-02-11', 5, '2022-01-11 16:41:32', NULL, 1),
(8, 'Sabina Maharjan', '6542', 123456789123, 'test@test.commmmmm', 'Female', '2022-02-06', 2, '2022-02-03 17:08:00', NULL, 1),
(9, 'Sabina Maharjan', '3872', 123456789123, 'test@test', 'Female', '2022-02-09', 1, '2022-02-03 17:09:21', NULL, 1),
(10, 'Lale Nath', '6465', 123456789123, 'test@adsf.com', 'Male', '2021-09-15', 7, '2022-02-03 17:14:57', NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tblstudentsubject`
--

CREATE TABLE `tblstudentsubject` (
  `StudentId` int(11) NOT NULL,
  `RollId` varchar(100) NOT NULL,
  `ClassId` int(11) NOT NULL,
  `SubjectId` int(11) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblstudentsubject`
--

INSERT INTO `tblstudentsubject` (`StudentId`, `RollId`, `ClassId`, `SubjectId`, `id`) VALUES
(1, '', 1, 2, 1),
(1, '', 1, 1, 2),
(1, '', 1, 5, 3),
(1, '', 1, 4, 4),
(2, '', 4, 2, 5),
(2, '', 4, 1, 6),
(2, '', 4, 5, 7),
(2, '', 4, 4, 8),
(4, '', 7, 2, 9),
(4, '', 7, 1, 10),
(4, '', 7, 5, 11),
(4, '', 7, 7, 12),
(5, '', 8, 2, 13),
(5, '', 8, 1, 14),
(5, '', 8, 5, 15),
(5, '', 8, 4, 16),
(6, '', 9, 1, 17),
(6, '', 9, 2, 18),
(6, '', 9, 8, 19),
(6, '', 9, 8, 20),
(7, '', 5, 1, 21),
(7, '', 5, 2, 22),
(7, '', 5, 6, 23);

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
(1, 'Com.Nepali', '0011', 75, 3, '2022-02-11 17:07:25', '2022-02-11 17:07:25'),
(2, 'Com.English', '0031', 75, 4, '2022-02-11 17:07:25', '2022-02-11 17:07:25'),
(3, 'Com.Social Studies & Life Skill', '0051', 75, 5, '2022-02-11 17:07:25', '2022-02-11 17:07:25'),
(4, 'Com.Mathematics', '0071', 75, 5, '2022-02-11 17:07:25', '2022-02-11 17:07:25'),
(5, 'Sanskrit Rachana', '0111', 75, 4, '2022-02-11 17:07:25', '2022-02-11 17:07:25'),
(6, 'Sanskrit Bhasha & Byakaran', '0171', 75, 5, '2022-02-11 17:07:25', '2022-02-11 17:07:25'),
(7, 'Baudh Education', '0211', 75, 4, '2022-02-11 17:07:25', '2022-02-11 17:07:25'),
(8, 'Urdu Byakaran & Sahitya', '0311', 75, 4, '2022-02-11 17:07:25', '2022-02-11 17:07:25'),
(9, 'Physics', '1011', 75, 5, '2022-02-11 17:07:25', '2022-02-11 17:07:25'),
(10, 'Accounting', '1031', 75, 5, '2022-02-11 17:07:25', '2022-02-11 17:07:25'),
(11, 'Rural Development', '1051', 75, 5, '2022-02-11 17:07:25', '2022-02-11 17:07:25'),
(12, 'Jurispudence and Legal Theories', '1071', 75, 5, '2022-02-11 17:07:25', '2022-02-11 17:07:25'),
(13, 'Painting', '1111', 50, 5, '2022-02-11 17:07:25', '2022-02-11 17:07:25'),
(14, 'Child Development and Learning', '1151', 75, 5, '2022-02-11 17:07:25', '2022-02-11 17:07:25'),
(15, 'Psychology', '1191', 75, 5, '2022-02-11 17:07:25', '2022-02-11 17:07:25'),
(16, 'History', '1211', 75, 5, '2022-02-11 17:07:25', '2022-02-11 17:07:25'),
(17, 'Gender Studies', '1231', 75, 5, '2022-02-11 17:07:25', '2022-02-11 17:07:25'),
(18, 'Hospitality Management', '1251', 50, 5, '2022-02-11 17:07:25', '2022-02-11 17:07:25'),
(19, 'Agronomy', '1271', 50, 5, '2022-02-11 17:07:25', '2022-02-11 17:07:25'),
(20, 'Naturopathy', '1291', 50, 5, '2022-02-11 17:07:25', '2022-02-11 17:07:25'),
(21, 'Human Value Education', '1311', 75, 5, '2022-02-11 17:07:25', '2022-02-11 17:07:25'),
(22, 'Biology', '2011', 75, 5, '2022-02-11 17:07:25', '2022-02-11 17:07:25'),
(23, 'Education and Development', '2031', 75, 5, '2022-02-11 17:07:25', '2022-02-11 17:07:25'),
(24, 'Geography', '2051', 75, 5, '2022-02-11 17:07:25', '2022-02-11 17:07:25'),
(25, 'Procedural Law', '2071', 75, 5, '2022-02-11 17:07:25', '2022-02-11 17:07:25'),
(26, 'Sociology', '2111', 75, 5, '2022-02-11 17:07:25', '2022-02-11 17:07:25'),
(27, 'Ayurbed', '2131', 50, 5, '2022-02-11 17:07:25', '2022-02-11 17:07:25'),
(28, 'Business Studies', '2151', 75, 5, '2022-02-11 17:07:25', '2022-02-11 17:07:25'),
(29, 'Linguistics', '2171', 75, 5, '2022-02-11 17:07:25', '2022-02-11 17:07:25'),
(30, 'Political Science', '2191', 75, 5, '2022-02-11 17:07:25', '2022-02-11 17:07:25'),
(31, 'Philosophy', '2211', 75, 5, '2022-02-11 17:07:25', '2022-02-11 17:07:25'),
(32, 'Population Studies', '2231', 75, 5, '2022-02-11 17:07:25', '2022-02-11 17:07:25'),
(33, '\"Horticulture (Fruit', '2251', 0, 0, '2022-02-11 17:07:25', '2022-02-11 17:07:25'),
(34, 'Food and Nutrition', '2271', 75, 5, '2022-02-11 17:07:25', '2022-02-11 17:07:25'),
(35, 'Dance', '2291', 50, 5, '2022-02-11 17:07:25', '2022-02-11 17:07:25'),
(36, 'History of Arts', '2311', 75, 5, '2022-02-11 17:07:25', '2022-02-11 17:07:25'),
(37, 'Chemistry', '3011', 75, 5, '2022-02-11 17:07:25', '2022-02-11 17:07:25'),
(38, 'Economics', '3031', 75, 5, '2022-02-11 17:07:25', '2022-02-11 17:07:25'),
(39, 'Tourism and Mountaineering Studies', '3051', 50, 5, '2022-02-11 17:07:25', '2022-02-11 17:07:25'),
(40, 'Marketing', '3071', 75, 5, '2022-02-11 17:07:25', '2022-02-11 17:07:25'),
(41, 'Gerontology and Care Taking Education', '3091', 75, 5, '2022-02-11 17:07:25', '2022-02-11 17:07:25'),
(42, 'Yog', '3111', 50, 5, '2022-02-11 17:07:25', '2022-02-11 17:07:25'),
(43, 'Vocal/Instrumetal', '3131', 50, 5, '2022-02-11 17:07:25', '2022-02-11 17:07:25'),
(44, 'Sewing and Knitting', '3151', 75, 5, '2022-02-11 17:07:25', '2022-02-11 17:07:25'),
(45, 'Constitutional Law', '3171', 75, 5, '2022-02-11 17:07:25', '2022-02-11 17:07:25'),
(46, 'Culinary Arts', '3211', 50, 5, '2022-02-11 17:07:25', '2022-02-11 17:07:25'),
(47, 'Culture', '3231', 75, 5, '2022-02-11 17:07:25', '2022-02-11 17:07:25'),
(48, 'Fashion Designing', '3251', 50, 5, '2022-02-11 17:07:25', '2022-02-11 17:07:25'),
(49, 'Film and Dacumentry', '3271', 75, 5, '2022-02-11 17:07:25', '2022-02-11 17:07:25'),
(50, '\"Live Stock', '3291', 0, 50, '2022-02-11 17:07:25', '2022-02-11 17:07:25'),
(51, 'Nepali', '3311', 75, 5, '2022-02-11 17:07:25', '2022-02-11 17:07:25'),
(52, 'English', '3331', 75, 5, '2022-02-11 17:07:25', '2022-02-11 17:07:25'),
(53, 'Maithali', '3351', 75, 5, '2022-02-11 17:07:25', '2022-02-11 17:07:25'),
(54, 'Newari', '3371', 75, 5, '2022-02-11 17:07:25', '2022-02-11 17:07:25'),
(55, 'Hindi', '3391', 75, 5, '2022-02-11 17:07:25', '2022-02-11 17:07:25'),
(56, 'Chinease', '3411', 75, 5, '2022-02-11 17:07:25', '2022-02-11 17:07:25'),
(57, 'Jerman', '3431', 75, 5, '2022-02-11 17:07:25', '2022-02-11 17:07:25'),
(58, 'Japanease', '3451', 75, 5, '2022-02-11 17:07:25', '2022-02-11 17:07:25'),
(59, 'Korean', '3471', 75, 5, '2022-02-11 17:07:25', '2022-02-11 17:07:25'),
(60, 'Urdu', '3491', 75, 5, '2022-02-11 17:07:25', '2022-02-11 17:07:25'),
(61, 'Bhojpuri', '3511', 75, 5, '2022-02-11 17:07:25', '2022-02-11 17:07:25'),
(62, 'French', '3531', 75, 5, '2022-02-11 17:07:25', '2022-02-11 17:07:25'),
(63, 'Hibru', '3551', 75, 5, '2022-02-11 17:07:25', '2022-02-11 17:07:25'),
(64, 'Arabic', '3571', 75, 5, '2022-02-11 17:07:25', '2022-02-11 17:07:25'),
(65, 'Sanskrit', '3591', 75, 5, '2022-02-11 17:07:25', '2022-02-11 17:07:25'),
(66, 'Applied Arts', '3611', 50, 5, '2022-02-11 17:07:25', '2022-02-11 17:07:25'),
(67, 'Mathematics', '4011', 75, 5, '2022-02-11 17:07:25', '2022-02-11 17:07:25'),
(68, 'Applied mathematics', '4031', 75, 5, '2022-02-11 17:07:25', '2022-02-11 17:07:25'),
(69, 'Business Mathematics', '4051', 75, 5, '2022-02-11 17:07:25', '2022-02-11 17:07:25'),
(70, 'Human rights', '4071', 75, 5, '2022-02-11 17:07:25', '2022-02-11 17:07:25'),
(71, 'Library and Information Science', '4091', 75, 5, '2022-02-11 17:07:25', '2022-02-11 17:07:25'),
(72, 'Home Science', '4111', 75, 5, '2022-02-11 17:07:25', '2022-02-11 17:07:25'),
(73, 'Environment Science', '4131', 75, 5, '2022-02-11 17:07:25', '2022-02-11 17:07:25'),
(74, 'General Law', '4151', 75, 5, '2022-02-11 17:07:25', '2022-02-11 17:07:25'),
(75, 'Finance', '4171', 75, 5, '2022-02-11 17:07:25', '2022-02-11 17:07:25'),
(76, 'Co-operative management', '4191', 75, 5, '2022-02-11 17:07:25', '2022-02-11 17:07:25'),
(77, 'Buddhist Studies', '4211', 75, 5, '2022-02-11 17:07:25', '2022-02-11 17:07:25'),
(78, 'Sculpture', '4231', 75, 5, '2022-02-11 17:07:25', '2022-02-11 17:07:25'),
(79, 'Singing', '4251', 50, 5, '2022-02-11 17:07:25', '2022-02-11 17:07:25'),
(80, 'Computer Science', '4271', 50, 5, '2022-02-11 17:07:25', '2022-02-11 17:07:25'),
(81, 'Sericulture and Bee Keeping', '4291', 50, 5, '2022-02-11 17:07:25', '2022-02-11 17:07:25'),
(82, 'Beautician and Hair Dressing', '4311', 50, 5, '2022-02-11 17:07:25', '2022-02-11 17:07:25'),
(83, 'Medicinal Herbals', '4331', 50, 5, '2022-02-11 17:07:25', '2022-02-11 17:07:25'),
(84, 'Plumbing and Wiring', '4351', 50, 5, '2022-02-11 17:07:25', '2022-02-11 17:07:25'),
(85, 'Internal Decoration', '4371', 75, 5, '2022-02-11 17:07:25', '2022-02-11 17:07:25'),
(86, 'Hotel Management', '4391', 50, 5, '2022-02-11 17:07:25', '2022-02-11 17:07:25'),
(87, 'Mass Communication', '4411', 75, 5, '2022-02-11 17:07:25', '2022-02-11 17:07:25'),
(88, 'Health and Physical Education', '4431', 75, 5, '2022-02-11 17:07:25', '2022-02-11 17:07:25'),
(89, 'Sports Science', '4451', 50, 5, '2022-02-11 17:07:25', '2022-02-11 17:07:25'),
(90, 'Social Studies & Life Skill', '4471', 75, 5, '2022-02-11 17:07:25', '2022-02-11 17:07:25'),
(91, 'Shuklayajurbed', '5011', 75, 5, '2022-02-11 17:07:25', '2022-02-11 17:07:25'),
(92, 'Sambed', '5031', 75, 5, '2022-02-11 17:07:25', '2022-02-11 17:07:25'),
(93, 'Rigbed', '5051', 75, 5, '2022-02-11 17:07:25', '2022-02-11 17:07:25'),
(94, 'Atharbed', '5071', 75, 5, '2022-02-11 17:07:25', '2022-02-11 17:07:25'),
(95, 'Grammar', '5091', 75, 5, '2022-02-11 17:07:25', '2022-02-11 17:07:25'),
(96, 'Sidhant Jyotish', '5111', 75, 5, '2022-02-11 17:07:25', '2022-02-11 17:07:25'),
(97, 'Nayay', '5131', 75, 5, '2022-02-11 17:07:25', '2022-02-11 17:07:25'),
(98, 'Phyloshophy', '5151', 75, 5, '2022-02-11 17:07:25', '2022-02-11 17:07:25'),
(99, 'Sanskrit Sahitya', '5171', 75, 5, '2022-02-11 17:07:25', '2022-02-11 17:07:25'),
(100, 'Itihas Puran', '5191', 75, 5, '2022-02-11 17:07:25', '2022-02-11 17:07:25'),
(101, 'Nitishastra', '5211', 75, 5, '2022-02-11 17:07:25', '2022-02-11 17:07:25'),
(102, 'Baudh Karma Kanda', '5271', 75, 5, '2022-02-11 17:07:25', '2022-02-11 17:07:25'),
(103, 'Karmakand', '5311', 75, 5, '2022-02-11 17:07:25', '2022-02-11 17:07:25'),
(104, 'Falit Jyotish', '5331', 75, 5, '2022-02-11 17:07:25', '2022-02-11 17:07:25'),
(105, 'Bastushastra', '5371', 75, 5, '2022-02-11 17:07:25', '2022-02-11 17:07:25'),
(106, 'Baudh Darshan', '6011', 75, 5, '2022-02-11 17:07:25', '2022-02-11 17:07:25'),
(107, 'Kuran', '6111', 75, 5, '2022-02-11 17:07:25', '2022-02-11 17:07:25'),
(108, 'Jyotish', '6211', 75, 5, '2022-02-11 17:07:25', '2022-02-11 17:07:25'),
(109, 'Bhaisjya', '6231', 75, 5, '2022-02-11 17:07:25', '2022-02-11 17:07:25'),
(110, 'Shilpa Vidhya', '6251', 75, 5, '2022-02-11 17:07:25', '2022-02-11 17:07:25'),
(111, 'Pali Language', '6311', 75, 5, '2022-02-11 17:07:25', '2022-02-11 17:07:25'),
(112, 'Bhot Language', '6331', 75, 5, '2022-02-11 17:07:25', '2022-02-11 17:07:25'),
(113, 'Hadis & Asule Hadis', '6511', 75, 5, '2022-02-11 17:07:25', '2022-02-11 17:07:25'),
(114, 'Miras Science', '6611', 75, 5, '2022-02-11 17:07:25', '2022-02-11 17:07:25'),
(115, 'Horticulture (Fruit, Vegetable, Flower & Mushroom)', '2251', 0, 0, '2022-02-11 17:09:13', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `UserName` varchar(100) DEFAULT NULL,
  `Password` varchar(100) DEFAULT NULL,
  `Name` varchar(255) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `updationDate` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `UserName`, `Password`, `Name`, `Address`, `updationDate`) VALUES
(1, 'admin', '$2y$10$SSZd5DHgul2C/doAS9SEW.h9VSVHfoZPMAhA58BKwj9bfJI4v2Uz2', '', '', '2022-01-01 10:30:57');

--
-- Indexes for dumped tables
--

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
-- Indexes for table `tblstudentsubject`
--
ALTER TABLE `tblstudentsubject`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

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
-- AUTO_INCREMENT for table `tblstudentsubject`
--
ALTER TABLE `tblstudentsubject`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `tblsubjectcombination`
--
ALTER TABLE `tblsubjectcombination`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `tblsubjects`
--
ALTER TABLE `tblsubjects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=116;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
