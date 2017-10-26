-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 26, 2017 at 06:28 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `drilling`
--

-- --------------------------------------------------------

--
-- Table structure for table `activity`
--

CREATE TABLE `activity` (
  `id` int(11) NOT NULL,
  `activity` varchar(25) DEFAULT NULL,
  `status` varchar(5) DEFAULT NULL,
  `usrid` varchar(25) DEFAULT NULL,
  `recdate` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `activity`
--

INSERT INTO `activity` (`id`, `activity`, `status`, `usrid`, `recdate`) VALUES
(1, 'Engine Hours', NULL, NULL, '2017-10-01 17:00:00'),
(2, 'Breakdown Hours', NULL, NULL, NULL),
(3, 'Standby Hours', NULL, NULL, NULL),
(4, 'Delay Hours', NULL, NULL, NULL),
(5, 'Drilling Hours', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `consumable`
--

CREATE TABLE `consumable` (
  `id` int(10) NOT NULL,
  `date` date DEFAULT NULL,
  `site` varchar(10) DEFAULT NULL,
  `location` varchar(10) DEFAULT NULL,
  `rig` varchar(10) DEFAULT NULL,
  `consumable` varchar(15) DEFAULT NULL,
  `comment` varchar(75) DEFAULT NULL,
  `quantity` int(10) DEFAULT NULL,
  `status` varchar(5) NOT NULL,
  `usrid` varchar(25) DEFAULT NULL,
  `recdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `consumable`
--

INSERT INTO `consumable` (`id`, `date`, `site`, `location`, `rig`, `consumable`, `comment`, `quantity`, `status`, `usrid`, `recdate`) VALUES
(11, '2017-10-01', '4', '3', '9', 'crp', 'asdasdad', 1, 'DD', 'admin', '2017-10-17 03:18:00'),
(12, '2017-10-01', '4', '3', '9', 'crp', 'asdasdad', 1, 'DD', 'admin', '2017-10-17 03:18:03'),
(13, '2017-10-01', '4', '3', '9', 'crp', 'asdasdad', 1, 'DD', 'admin', '2017-10-17 03:18:05'),
(14, '2017-10-01', '4', '3', '9', 'crp', 'sdsdsdsd', 0, 'DD', 'admin', '2017-10-17 03:18:08');

-- --------------------------------------------------------

--
-- Table structure for table `detailactivity`
--

CREATE TABLE `detailactivity` (
  `id` int(10) NOT NULL,
  `date` date DEFAULT NULL,
  `site` varchar(15) DEFAULT NULL,
  `location` varchar(15) DEFAULT NULL,
  `rig` varchar(15) DEFAULT NULL,
  `activity` varchar(15) DEFAULT NULL,
  `subactivity` varchar(15) DEFAULT NULL,
  `subsubactivity` varchar(15) DEFAULT NULL,
  `comment` varchar(75) DEFAULT NULL,
  `hours` varchar(10) DEFAULT NULL,
  `status` varchar(5) NOT NULL,
  `usrid` varchar(25) DEFAULT NULL,
  `recdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `detailactivity`
--

INSERT INTO `detailactivity` (`id`, `date`, `site`, `location`, `rig`, `activity`, `subactivity`, `subsubactivity`, `comment`, `hours`, `status`, `usrid`, `recdate`) VALUES
(1, NULL, NULL, NULL, NULL, '3', '2', '3', 'lalalalala', '12:12:12', '', 'admin', '2017-10-04 06:50:43'),
(2, '0000-00-00', '', '', '', '3', '2', '3', 'lalalalala', '12:12:12', '', 'admin', '2017-10-04 06:50:43'),
(3, '2017-10-04', '4', '2', '9', '3', '2', '2', 'lalalalla', '', '', 'admin', '2017-10-04 06:50:43'),
(4, '2017-10-04', '4', '2', '9', '3', '2', '2', 'lalalalla', '', '', 'admin', '2017-10-04 06:50:43'),
(5, '2017-10-04', '4', '2', '9', '3', '2', '2', 'lalalalla', '', '', 'admin', '2017-10-04 06:50:43'),
(6, '2017-10-04', '4', '2', '9', '3', '2', '2', 'lalalalla', '', '', 'admin', '2017-10-04 06:50:43'),
(7, '2017-10-04', '4', '2', '9', '3', '2', '2', 'lalalalla', '12:12:12', '', 'admin', '2017-10-04 06:50:43'),
(8, '2017-10-05', '4', '2', '8', '1', '1', '1', 'Waiting', '12:12:12', '', 'admin', '2017-10-04 23:31:45');

-- --------------------------------------------------------

--
-- Table structure for table `detailsdrilling`
--

CREATE TABLE `detailsdrilling` (
  `id` int(10) NOT NULL,
  `date` date NOT NULL,
  `shift` varchar(15) NOT NULL,
  `site` varchar(15) NOT NULL,
  `location` varchar(25) DEFAULT NULL,
  `rig` varchar(15) DEFAULT NULL,
  `hole` varchar(25) DEFAULT NULL,
  `from` varchar(25) DEFAULT NULL,
  `to` varchar(25) DEFAULT NULL,
  `total` int(10) DEFAULT NULL,
  `recovery` varchar(25) DEFAULT NULL,
  `hours` varchar(15) DEFAULT NULL,
  `hoursto` varchar(15) DEFAULT NULL,
  `bit` varchar(15) DEFAULT NULL,
  `series` varchar(15) DEFAULT NULL,
  `size` varchar(15) DEFAULT NULL,
  `angle` varchar(15) DEFAULT NULL,
  `comment` varchar(75) DEFAULT NULL,
  `usrid` varchar(25) DEFAULT NULL,
  `recdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `detailsdrilling`
--

INSERT INTO `detailsdrilling` (`id`, `date`, `shift`, `site`, `location`, `rig`, `hole`, `from`, `to`, `total`, `recovery`, `hours`, `hoursto`, `bit`, `series`, `size`, `angle`, `comment`, `usrid`, `recdate`) VALUES
(6, '2017-10-05', 'siang', '4', '2', '9', 'qwe123', '12', '14', 2, 'qw', '12:12:12', '13:13:13', 'qwra', 'eda2', '21', '31.97', 'good', 'admin', '2017-10-06 02:01:29');

-- --------------------------------------------------------

--
-- Table structure for table `detailsrc`
--

CREATE TABLE `detailsrc` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL,
  `shift` varchar(15) DEFAULT NULL,
  `site` varchar(10) DEFAULT NULL,
  `location` varchar(25) DEFAULT NULL,
  `rig` varchar(25) DEFAULT NULL,
  `hole` varchar(25) DEFAULT NULL,
  `from` varchar(25) DEFAULT NULL,
  `to` varchar(25) DEFAULT NULL,
  `total` int(10) DEFAULT NULL,
  `hoursfrom` varchar(25) DEFAULT NULL,
  `hoursto` varchar(25) DEFAULT NULL,
  `comment` varchar(75) DEFAULT NULL,
  `usrid` varchar(25) DEFAULT NULL,
  `recdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `detailsrc`
--

INSERT INTO `detailsrc` (`id`, `date`, `shift`, `site`, `location`, `rig`, `hole`, `from`, `to`, `total`, `hoursfrom`, `hoursto`, `comment`, `usrid`, `recdate`) VALUES
(1, '2017-10-07', 'overshift', '3', '2', '9', 'Alfa 1', '12', '12', 1, '12:31:23', '31:21:31', 'qadadadasd', 'admin', '2017-10-07 01:36:28');

-- --------------------------------------------------------

--
-- Table structure for table `downhole`
--

CREATE TABLE `downhole` (
  `id` int(10) NOT NULL,
  `date` date DEFAULT NULL,
  `site` varchar(15) DEFAULT NULL,
  `location` varchar(15) DEFAULT NULL,
  `rig` varchar(15) DEFAULT NULL,
  `description` varchar(25) DEFAULT NULL,
  `type` varchar(10) DEFAULT NULL,
  `series` varchar(25) DEFAULT NULL,
  `quantity` int(10) DEFAULT NULL,
  `comment` varchar(75) DEFAULT NULL,
  `status` varchar(5) NOT NULL,
  `usrid` varchar(25) DEFAULT NULL,
  `recdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `downhole`
--

INSERT INTO `downhole` (`id`, `date`, `site`, `location`, `rig`, `description`, `type`, `series`, `quantity`, `comment`, `status`, `usrid`, `recdate`) VALUES
(2, '2017-10-03', '3', '2', '9', NULL, 'nq', 'asas', 0, 'wwqwasdasdad', '', 'admin', '2017-10-02 02:10:25'),
(3, '2017-10-03', '3', '2', '9', 'Spearhead base', 'pw', 'as', 0, 'as', '', 'admin', '2017-10-02 02:12:42'),
(4, '2017-10-03', '3', '2', '9', 'Spearhead base', 'pw', 'as', 0, 'as', '', 'admin', '2017-10-02 02:15:30'),
(5, '2017-10-03', '3', '2', '9', 'Spearhead base', 'pw', 'as', 0, 'as', '', 'admin', '2017-10-02 02:16:38'),
(6, '2017-10-03', '3', '2', '9', 'Spearhead base', 'pw', 'as', 0, 'as', '', 'admin', '2017-10-02 02:48:47'),
(7, '2017-10-05', '4', '2', '8', 'Spiral pin', 'pq', 'Ax-32', 1, 'New', '', 'admin', '2017-10-04 23:32:04');

-- --------------------------------------------------------

--
-- Table structure for table `finding`
--

CREATE TABLE `finding` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL,
  `site` varchar(10) NOT NULL,
  `findingfrom` varchar(25) NOT NULL,
  `observer` varchar(75) DEFAULT NULL,
  `findingdetails` varchar(250) DEFAULT NULL,
  `procedurespreferences` varchar(250) DEFAULT NULL,
  `personinvolved` varchar(100) DEFAULT NULL,
  `accountability` varchar(75) DEFAULT NULL,
  `bywho` varchar(75) DEFAULT NULL,
  `bywhen` date DEFAULT NULL,
  `recommendationaction` varchar(250) DEFAULT NULL,
  `completedate` date DEFAULT NULL,
  `status` varchar(10) DEFAULT NULL,
  `location` varchar(35) DEFAULT NULL,
  `type` varchar(50) DEFAULT NULL,
  `class` varchar(25) DEFAULT NULL,
  `riskrank` varchar(25) DEFAULT NULL,
  `usrid` varchar(25) DEFAULT NULL,
  `recdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `finding`
--

INSERT INTO `finding` (`id`, `date`, `site`, `findingfrom`, `observer`, `findingdetails`, `procedurespreferences`, `personinvolved`, `accountability`, `bywho`, `bywhen`, `recommendationaction`, `completedate`, `status`, `location`, `type`, `class`, `riskrank`, `usrid`, `recdate`) VALUES
(1, '2017-10-15', '4', 'OSI', '', NULL, NULL, '', 'joko', 'widodo', '2017-10-15', '', '2017-10-01', 'Open', 'Road Access', 'Design & Layout', 'Substandard Condition', 'High', 'admin', '2017-10-19 06:50:03'),
(2, '2017-10-15', '3', 'OSI', 'joko agus', NULL, NULL, 'lalalalalalalalalalauuuuuuu', 'joko', 'widodo', '2017-10-15', 'widodo', '2017-10-01', 'Close', 'Road Access', 'Fire', 'Substandard Condition', 'Low', 'admin', '2017-10-24 00:09:24'),
(3, '2017-10-18', '3', 'Hazard Report', '', NULL, NULL, '', '', '', '2017-10-18', '', '2017-10-18', 'Open', 'Rig-002', 'Design & Layout', 'Substandard Behavior', 'High', 'admin', '2017-10-18 07:08:18'),
(4, '2017-10-19', '4', 'Hazard Report', '', NULL, NULL, '', '', '', '2017-10-19', '', '2017-10-19', 'Open', 'Rig-004', 'Traffic', 'Substandard Condition', 'Moderate', 'admin', '2017-10-19 06:47:32');

-- --------------------------------------------------------

--
-- Table structure for table `location`
--

CREATE TABLE `location` (
  `id` int(10) NOT NULL,
  `site` varchar(25) DEFAULT NULL,
  `name` varchar(25) DEFAULT NULL,
  `usrid` varchar(25) DEFAULT NULL,
  `recdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `location`
--

INSERT INTO `location` (`id`, `site`, `name`, `usrid`, `recdate`) VALUES
(2, '3', 'North Kuning', 'admin', '2017-09-30 02:27:21'),
(3, '4', 'Bakam', 'admin', '2017-09-30 02:27:21');

-- --------------------------------------------------------

--
-- Table structure for table `maintenance`
--

CREATE TABLE `maintenance` (
  `id` int(11) NOT NULL,
  `site` varchar(15) NOT NULL,
  `plantitem` varchar(15) NOT NULL,
  `location` varchar(25) NOT NULL,
  `compcodes` varchar(25) DEFAULT NULL,
  `workorder` varchar(25) DEFAULT NULL,
  `action` varchar(75) DEFAULT NULL,
  `hmsustart` varchar(10) DEFAULT NULL,
  `hmsuend` varchar(10) DEFAULT NULL,
  `description` varchar(75) DEFAULT NULL,
  `datebreakdown` date DEFAULT NULL,
  `downtimestart` varchar(10) DEFAULT NULL,
  `downtimeend` varchar(10) DEFAULT NULL,
  `totaldowntime` varchar(10) DEFAULT NULL,
  `workcodes` varchar(25) DEFAULT NULL,
  `delaycodes` varchar(25) DEFAULT NULL,
  `delayhours` varchar(10) DEFAULT NULL,
  `remarks` varchar(75) DEFAULT NULL,
  `finishbreakdown` date DEFAULT NULL,
  `onprogress` varchar(10) DEFAULT NULL,
  `waitingparts` varchar(10) DEFAULT NULL,
  `manpower` varchar(10) DEFAULT NULL,
  `outsiterepair` varchar(10) DEFAULT NULL,
  `waitingtools` varchar(10) DEFAULT NULL,
  `waitingdecision` varchar(10) DEFAULT NULL,
  `usrid` varchar(25) NOT NULL,
  `recdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `maintenance`
--

INSERT INTO `maintenance` (`id`, `site`, `plantitem`, `location`, `compcodes`, `workorder`, `action`, `hmsustart`, `hmsuend`, `description`, `datebreakdown`, `downtimestart`, `downtimeend`, `totaldowntime`, `workcodes`, `delaycodes`, `delayhours`, `remarks`, `finishbreakdown`, `onprogress`, `waitingparts`, `manpower`, `outsiterepair`, `waitingtools`, `waitingdecision`, `usrid`, `recdate`) VALUES
(1, '9', '', '3', '', '', 'aaaaa', '', '', 'dddd', NULL, '13:13', '0000-00-00', '2:21', 'pl', '', NULL, 'continue', NULL, '12:23', '', '', '', '', '', 'admin', '2017-10-11 01:20:51'),
(2, '9', '', '3', '', '', 'aaaaa', '', '', 'dddd', NULL, '13:13', '0000-00-00', '2:21', 'pl', '', NULL, 'continue', NULL, '12:23', '', '', '', '', '', 'admin', '2017-10-11 01:21:21'),
(3, '3', '9', '3', '', '', 'asdqwdasdsa', '12:12', '12:32', 'asd', NULL, '14:14', '0000-00-00', '5:55', 'pl', '', NULL, 'continue', NULL, '12:12', '12:12', '12:12', '12:12', '23:11', '12:31', 'admin', '2017-10-12 01:42:16'),
(4, '3', '9', '3', '', '', 'asdqwdasdsa', '12:12', '12:32', 'asd', NULL, '14:14', '0000-00-00', '5:55', 'pl', '', NULL, 'continue', NULL, '12:12', '12:12', '12:12', '12:12', '23:11', '12:31', 'admin', '2017-10-12 01:42:49'),
(7, '3', '9', '3', '', '', '', '', '', '', '2017-10-14', '', '', '', '', '', '', '', '2017-10-16', '', '', '', '', '', '', 'admin', '2017-10-14 02:07:18');

-- --------------------------------------------------------

--
-- Table structure for table `manpower`
--

CREATE TABLE `manpower` (
  `id` int(11) NOT NULL,
  `date` date DEFAULT NULL,
  `site` varchar(25) DEFAULT NULL,
  `shift` varchar(25) DEFAULT NULL,
  `location` varchar(25) DEFAULT NULL,
  `rig` varchar(25) DEFAULT NULL,
  `position` varchar(25) DEFAULT NULL,
  `name` varchar(25) DEFAULT NULL,
  `hoursfrom` varchar(10) DEFAULT NULL,
  `hoursto` varchar(10) DEFAULT NULL,
  `comment` varchar(75) DEFAULT NULL,
  `status` varchar(5) NOT NULL,
  `usrid` varchar(25) DEFAULT NULL,
  `recdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `manpower`
--

INSERT INTO `manpower` (`id`, `date`, `site`, `shift`, `location`, `rig`, `position`, `name`, `hoursfrom`, `hoursto`, `comment`, `status`, `usrid`, `recdate`) VALUES
(1, '2017-09-29', '', NULL, NULL, '', 'driller', 'Joko', '12:12:12', '13:13:13', '4 meter', '', 'admin', '2017-09-29 07:21:04'),
(2, '0000-00-00', '', NULL, NULL, '', 'assdriller', 'Agus', '12:12:12', '13:13:13', '4 Meter', '', 'admin', '2017-09-29 07:21:56'),
(3, '0000-00-00', '', NULL, NULL, '', 'offsider', 'Bambang', '12:12:12', '13:13:13', '4 Meter', '', 'admin', '2017-09-29 07:24:10'),
(4, '2017-09-30', '3', NULL, NULL, '', 'driller', 'Novandy', '12:12:12', '13:13:13', '3 Meter', '', 'admin', '2017-09-29 07:56:32'),
(5, '2017-09-30', '3', '', NULL, '', 'assdriller', 'Purna', '12:12:12', '12:12:12', '3 Meter', '', 'admin', '2017-09-29 08:05:00'),
(6, '2017-09-30', '3', 'siang', NULL, '9', 'driller', 'Agus', '12:12:12', '13:13:13', '4 Meter', '', 'admin', '2017-09-30 06:20:27'),
(7, '2017-09-30', '3', 'malam', '2', '9', 'driller', 'Bambang', '12:12:12', '13:13:13', '5 Meter', '', 'admin', '2017-09-30 06:24:05'),
(8, '2017-09-30', '4', 'malam', '2', '9', 'driller', 'Novandy', '12:12:12', '13:13:13', '', '', 'admin', '2017-09-30 06:38:49'),
(9, '2017-09-30', '4', 'malam', '2', '9', 'driller', 'Purna', '12:12:12', '13:13:13', '', '', 'admin', '2017-09-30 06:40:48'),
(10, '2017-09-30', '4', 'overshift', '3', '9', 'assdriller', 'Ryan', '12:12:12', '13:13:13', '5 Meter', '', 'admin', '2017-09-30 06:47:58'),
(11, '2017-09-28', '4', 'overshift', '3', '9', 'driller', 'Dewanto', '12:12:12', '13:13:13', '', '', 'admin', '2017-09-30 06:50:39'),
(12, '2017-09-30', '4', 'malam', '3', '9', 'driller', 'Dwiayana', '12:12:12', '13:13:13', '10 Meter', '', 'admin', '2017-09-30 06:59:05'),
(13, '2017-09-30', '4', 'malam', '3', '9', 'driller', 'Dwiayana', '12:12:12', '13:13:13', '10 Meter', '', 'admin', '2017-09-30 06:59:33'),
(14, '2017-09-30', '4', 'malam', '3', '9', 'driller', 'Dwiayana', '12:12:12', '13:13:13', '10 Meter', '', 'admin', '2017-09-30 06:59:42'),
(15, '2017-09-30', '4', 'malam', '3', '9', 'driller', 'Dwiayana', '12:12:12', '13:13:13', '10 Meter', '', 'admin', '2017-09-30 07:01:23'),
(16, '2017-09-30', '4', 'overshift', '3', '9', 'assdriller', 'Agus', '121212', '121212', 'asdadad', '', 'admin', '2017-09-30 07:02:23'),
(17, '2017-09-29', '4', 'malam', '3', '9', 'assdriller', 'asda', '12:12:12', '13:13:13', 'qadasdasda', '', 'admin', '2017-09-30 07:08:18'),
(18, '2017-09-29', '4', 'malam', '3', '9', 'assdriller', 'asda', '12:12:12', '13:13:13', 'qadasdasda', '', 'admin', '2017-09-30 07:09:14'),
(19, '2017-09-29', '4', 'malam', '3', '9', 'assdriller', 'asda', '12:12:12', '13:13:13', 'qadasdasda', '', 'admin', '2017-09-30 07:09:26'),
(20, '2017-09-29', '4', 'malam', '3', '9', 'assdriller', 'asda', '12:12:12', '13:13:13', 'qadasdasda', '', 'admin', '2017-09-30 07:09:58'),
(21, '2017-09-29', '4', 'malam', '3', '9', 'assdriller', 'asda', '12:12:12', '13:13:13', 'qadasdasda', '', 'admin', '2017-09-30 07:10:21'),
(22, '2017-09-29', '4', 'malam', '3', '9', 'assdriller', 'asda', '12:12:12', '13:13:13', 'qadasdasda', '', 'admin', '2017-09-30 07:11:12'),
(23, '2017-09-29', '4', 'overshift', '3', '9', 'driller', 'Novandy Purna', '12:12:12', '22:22:22', 'Sukses', '', 'admin', '2017-09-30 07:17:55'),
(24, '2017-09-29', '4', 'overshift', '3', '9', 'driller', 'Novandy Purna DRD', '12:12:12', '22:22:22', 'Sukses Fix', '', 'admin', '2017-09-30 07:18:51'),
(25, '2017-10-01', '3', 'siang', '2', '9', 'driller', 'Joko', '12:12:12', '13:13:13', 'nanana', '', 'admin', '2017-10-01 03:38:55'),
(26, '2017-10-01', '3', 'siang', '2', '9', 'driller', 'Joko', '12:12:12', '13:13:13', 'nanana', '', 'admin', '2017-10-01 03:42:29'),
(27, '2017-10-01', '3', 'malam', '3', '9', 'assdriller', 'Agus', '12:12:12', '13:13:13', '3 Meter', '', 'admin', '2017-10-01 03:47:45'),
(28, '2017-10-01', '3', 'malam', '3', '9', 'assdriller', 'Agus', '12:12:12', '13:13:13', '3 Meter', '', 'admin', '2017-10-01 03:48:18'),
(29, '2017-10-01', '3', 'malam', '3', '9', 'assdriller', 'Agus', '12:12:12', '13:13:13', '3 Meter', '', 'admin', '2017-10-01 03:49:54'),
(30, '2017-10-01', '3', 'malam', '3', '9', 'assdriller', 'Agus', '12:12:12', '13:13:13', '3 Meter', '', 'admin', '2017-10-01 03:51:05'),
(31, '2017-10-01', '3', 'malam', '3', '9', 'assdriller', 'Agus', '12:12:12', '13:13:13', '3 Meter', '', 'admin', '2017-10-01 03:51:31'),
(32, '2017-10-01', '3', 'overshift', '3', '9', 'driller', 'Gede', '12:12:12', '13:13:13', '3 Meter', '', 'admin', '2017-10-01 03:55:59'),
(33, '2017-10-01', '3', 'overshift', '3', '9', 'driller', 'Gede', '12:12:12', '13:13:13', '3 Meter', '', 'admin', '2017-10-01 04:10:22'),
(34, '2017-10-01', '3', 'overshift', '3', '9', 'driller', 'Gede', '12:12:12', '13:13:13', '3 Meter', '', 'admin', '2017-10-01 04:10:27'),
(35, '2017-10-01', '3', 'overshift', '3', '9', 'driller', 'Gede', '12:12:12', '13:13:13', '3 Meter', '', 'admin', '2017-10-01 04:10:38'),
(36, '2017-10-01', '3', 'overshift', '3', '9', 'driller', 'Gede', '12:12:12', '13:13:13', '3 Meter', '', 'admin', '2017-10-01 04:10:42'),
(37, '2017-10-01', '3', 'overshift', '3', '9', 'driller', 'Gede', '12:12:12', '13:13:13', '3 Meter', '', 'admin', '2017-10-01 04:10:58'),
(38, '2017-10-01', '3', 'overshift', '3', '9', 'driller', 'Gede', '12:12:12', '13:13:13', '3 Meter', '', 'admin', '2017-10-01 04:11:08'),
(39, '2017-10-01', '3', 'overshift', '3', '9', 'driller', 'Gede', '12:12:12', '13:13:13', '3 Meter', '', 'admin', '2017-10-01 04:11:37'),
(40, '2017-10-01', '3', 'overshift', '3', '9', 'driller', 'Gede', '12:12:12', '13:13:13', '3 Meter', '', 'admin', '2017-10-01 04:11:45'),
(41, '2017-10-01', '3', 'overshift', '3', '9', 'driller', 'Gede', '12:12:12', '13:13:13', '3 Meter', '', 'admin', '2017-10-01 04:19:25'),
(42, '2017-10-01', '3', 'overshift', '3', '9', 'driller', 'Gede', '12:12:12', '13:13:13', '3 Meter', '', 'admin', '2017-10-01 04:28:00'),
(43, '2017-10-01', '3', 'overshift', '3', '9', 'driller', 'Gede', '12:12:12', '13:13:13', '3 Meter', '', 'admin', '2017-10-01 04:28:02'),
(44, '2017-10-01', '3', 'overshift', '3', '9', 'driller', 'Gede', '12:12:12', '13:13:13', '3 Meter', '', 'admin', '2017-10-01 04:28:54'),
(45, '2017-10-01', '3', 'overshift', '3', '9', 'driller', 'Gede', '12:12:12', '13:13:13', '3 Meter', '', 'admin', '2017-10-01 04:28:57'),
(46, '2017-10-01', '3', 'overshift', '3', '9', 'driller', 'Gede', '12:12:12', '13:13:13', '3 Meter', '', 'admin', '2017-10-01 04:28:59'),
(47, '2017-10-01', '3', 'overshift', '3', '9', 'driller', 'Gede', '12:12:12', '13:13:13', '3 Meter', '', 'admin', '2017-10-01 04:29:21'),
(48, '2017-10-01', '3', 'overshift', '3', '9', 'driller', 'Gede', '12:12:12', '13:13:13', '3 Meter', '', 'admin', '2017-10-01 04:29:27'),
(49, '2017-10-01', '3', 'overshift', '3', '9', 'driller', 'Gede', '12:12:12', '13:13:13', '3 Meter', '', 'admin', '2017-10-01 04:40:13'),
(50, '2017-10-01', '3', 'overshift', '3', '9', 'driller', 'Gede', '12:12:12', '13:13:13', '3 Meter', '', 'admin', '2017-10-01 04:40:36'),
(51, '2017-10-01', '3', 'overshift', '3', '9', 'driller', 'Gede', '12:12:12', '13:13:13', '3 Meter', '', 'admin', '2017-10-01 04:40:38'),
(52, '2017-10-01', '3', 'overshift', '3', '9', 'driller', 'Gede', '12:12:12', '13:13:13', '3 Meter', '', 'admin', '2017-10-01 04:40:40'),
(53, '2017-10-01', '3', 'overshift', '3', '9', 'driller', 'Gede', '12:12:12', '13:13:13', '3 Meter', '', 'admin', '2017-10-01 04:40:43'),
(54, '2017-10-01', '3', 'overshift', '3', '9', 'driller', 'Gede', '12:12:12', '13:13:13', '3 Meter', '', 'admin', '2017-10-01 04:41:14'),
(55, '2017-10-01', '3', 'overshift', '3', '9', 'driller', 'Gede', '12:12:12', '13:13:13', '3 Meter', '', 'admin', '2017-10-01 04:54:19'),
(56, '2017-10-01', '3', 'overshift', '3', '9', 'driller', 'Gede', '12:12:12', '13:13:13', '3 Meter', '', 'admin', '2017-10-01 04:54:23'),
(57, '2017-10-02', '4', 'malam', '3', '9', 'assdriller', 'ww', '12:12:12', '31:31:21', '', '', 'admin', '2017-10-01 04:58:42'),
(58, '2017-10-02', '4', 'malam', '3', '9', 'assdriller', 'ww', '12:12:12', '31:31:21', '', '', 'admin', '2017-10-01 04:58:53'),
(59, '2017-10-02', '4', 'malam', '3', '9', 'assdriller', 'ww', '12:12:12', '31:31:21', '', '', 'admin', '2017-10-01 05:00:14'),
(60, '2017-10-02', '4', 'malam', '3', '9', 'assdriller', 'ww', '12:12:12', '31:31:21', '', '', 'admin', '2017-10-01 05:00:26'),
(61, '2017-10-02', '4', 'malam', '3', '9', 'assdriller', 'ww', '12:12:12', '31:31:21', '', '', 'admin', '2017-10-01 05:02:37'),
(62, '2017-10-02', '4', 'malam', '3', '9', 'assdriller', 'ww', '12:12:12', '31:31:21', '', '', 'admin', '2017-10-01 05:03:19'),
(63, '2017-10-02', '', 'overshift', '', '', 'assdriller', 'adasdasd', '21:12:11', '21:31:23', 'Malam', '', 'admin', '2017-10-01 05:03:37'),
(64, '2017-10-02', '', 'overshift', '', '', 'assdriller', 'adasdasd', '21:12:11', '21:31:23', 'Malam', '', 'admin', '2017-10-01 06:17:14'),
(65, '2017-10-01', '4', 'overshift', '3', '9', 'driller', 'jok', '12:12:12', '13:13:31', '5 Meter', '', 'admin', '2017-10-01 06:19:07'),
(66, '2017-10-01', '3', 'overshift', '3', '9', 'driller', 'Jok2', '12:12:12', '13:13:13', '9 Meter', '', 'admin', '2017-10-01 06:19:26'),
(67, '2017-10-01', '4', 'overshift', '3', '9', 'driller', 'Joko', '12:12:12', '12:12:12', 'asadadadasd', '', 'admin', '2017-10-01 06:30:46'),
(68, '2017-10-01', '4', 'overshift', '3', '9', 'assdriller', 'asdasdada', '12:12:12', '12:31:31', 'asdadadasdadad', '', 'admin', '2017-10-01 06:30:57'),
(76, '2017-10-05', '3', 'siang', '2', '8', 'assdriller', 'Agus', '13:13:13', '15:15:15', 'Good', '', 'admin', '2017-10-05 03:26:03'),
(77, '2017-10-05', '3', 'siang', '2', '8', 'driller', 'Joko', '12:12:12', '13:13:13', 'Excellent', '', 'admin', '2017-10-05 03:37:58'),
(78, '2017-10-06', '3', 'siang', '2', '8', 'driller', 'Agus', '12:12:12', '13:13:13', 'Good Person', '', 'admin', '2017-10-05 23:56:39'),
(79, '2017-10-06', '', 'siang', '', '', 'driller', 'Joko', '12:12:12', '21:31:23', 'asdadadad', '', 'admin', '2017-10-06 02:23:57'),
(80, '2017-10-06', '', 'siang', '', '', 'driller', 'Joko', '12:12:12', '21:31:23', 'asdadadad', '', 'admin', '2017-10-06 02:24:47'),
(81, '2017-10-06', '3', 'siang', '2', '9', 'driller', 'joko', '12:12:12', '12:31:23', 'asdasdasd', '', 'admin', '2017-10-06 02:25:03'),
(82, '2017-10-06', '3', 'siang', '2', '9', 'driller', 'joko', '12:12:12', '12:31:23', 'asdasdasd', '', 'admin', '2017-10-06 02:31:36'),
(83, '2017-10-06', '4', 'siang', '2', '9', 'driller', 'joko', '12:12:12', '12:31:23', 'asdasdasd', 'DD', 'admin', '2017-10-17 03:00:51'),
(85, '2017-10-07', '3', 'siang', '2', '9', 'driller', 'Wahidin', '22:22:22', '23:23:22', 'Good yaa', 'DD', 'admin', '2017-10-07 00:34:21'),
(88, '0000-00-00', '', '', '', '', 'driller', 'Joko Wi', '21:21:21', '23:12:14', 'lalala', 'RC', 'admin', '2017-10-07 00:53:29'),
(89, '2017-10-16', '3', 'siang', '2', '9', 'driller', 'ssfsd', '12:31:23', '', 'fsasds', 'DD', 'admin', '2017-10-16 06:27:35'),
(90, '2017-10-19', '4', 'siang', '3', '10', 'driller', 'Agus', '54:84', '54:85', 'Bagus', 'DD', 'admin', '2017-10-19 03:14:22'),
(91, '2017-10-19', '4', 'siang', '3', '10', 'driller', 'Agus', '54:84', '54:85', 'Bagus', 'DD', 'admin', '2017-10-19 03:16:34');

-- --------------------------------------------------------

--
-- Table structure for table `rig`
--

CREATE TABLE `rig` (
  `id` int(10) NOT NULL,
  `site` varchar(25) DEFAULT NULL,
  `location` varchar(25) DEFAULT NULL,
  `name` varchar(25) DEFAULT NULL,
  `usrid` varchar(25) NOT NULL,
  `recdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rig`
--

INSERT INTO `rig` (`id`, `site`, `location`, `name`, `usrid`, `recdate`) VALUES
(9, '3', '2', 'Rig-002', 'admin', '2017-10-06 01:31:00'),
(10, '3', '3', 'Rig-003', 'admin', '2017-10-19 02:44:18'),
(11, '3', '2', 'Rig-004exy', 'admin', '2017-10-20 02:37:04');

-- --------------------------------------------------------

--
-- Table structure for table `she`
--

CREATE TABLE `she` (
  `id` int(11) NOT NULL,
  `date` date DEFAULT NULL,
  `site` varchar(15) DEFAULT NULL,
  `area` varchar(25) DEFAULT NULL,
  `type` varchar(45) DEFAULT NULL,
  `person` varchar(75) DEFAULT NULL,
  `description` varchar(114) DEFAULT NULL,
  `usrid` varchar(25) DEFAULT NULL,
  `recdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `she`
--

INSERT INTO `she` (`id`, `date`, `site`, `area`, `type`, `person`, `description`, `usrid`, `recdate`) VALUES
(4, '2017-10-07', '3', 'Mess & Camp', 'Fatality', 'Novandy', 'ganteng', 'admin', '2017-10-08 07:24:56'),
(5, '2017-10-24', '3', 'Road Access', 'Near Miss', '  Aku', 'Akulalalalalalala', 'admin', '2017-10-24 03:43:08'),
(6, '2017-10-09', '3', 'Mess & Camp', 'Fatality', 'nananan', 'nananana', 'admin', '2017-10-24 02:54:59');

-- --------------------------------------------------------

--
-- Table structure for table `site`
--

CREATE TABLE `site` (
  `id` int(10) NOT NULL,
  `name` varchar(20) NOT NULL,
  `recdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `usrid` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `site`
--

INSERT INTO `site` (`id`, `name`, `recdate`, `usrid`) VALUES
(3, 'IMK', '2017-09-26 06:12:49', 'admin'),
(4, 'KBK', '2017-09-30 01:40:12', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `subactivity`
--

CREATE TABLE `subactivity` (
  `id` int(11) NOT NULL,
  `activity` varchar(10) DEFAULT NULL,
  `subactivity` varchar(50) DEFAULT NULL,
  `usrid` varchar(25) DEFAULT NULL,
  `recdate` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subactivity`
--

INSERT INTO `subactivity` (`id`, `activity`, `subactivity`, `usrid`, `recdate`) VALUES
(1, '3', 'Active Standby Hours/Active Time', NULL, NULL),
(2, '3', 'Standby Hours', NULL, NULL),
(3, '4', 'Freeing ROD', NULL, NULL),
(4, '4', 'Freeing Innertube', NULL, NULL),
(5, '4', 'Pulling ROD', NULL, NULL),
(6, '4', 'Pulling Casing', NULL, NULL),
(7, '4', 'Reduce', NULL, NULL),
(8, '4', 'Changing BIT', NULL, NULL),
(9, '4', 'Reaming', NULL, NULL),
(10, '4', 'Pulling Broken ROD', NULL, NULL),
(11, '4', 'Orientation', NULL, NULL),
(12, '4', 'Survey Camera', NULL, NULL),
(13, '4', 'Condition Hole', NULL, NULL),
(14, '4', 'Mixing Mud', NULL, NULL),
(15, '4', 'Tramming/Moving', NULL, NULL),
(16, '4', 'Handling Water Loss', NULL, NULL),
(17, '4', 'Rig Up', NULL, NULL),
(18, '4', 'Others', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `subsubactivity`
--

CREATE TABLE `subsubactivity` (
  `id` int(10) NOT NULL,
  `activity` varchar(10) DEFAULT NULL,
  `subactivity` varchar(10) DEFAULT NULL,
  `subsubactivity` varchar(30) DEFAULT NULL,
  `usrid` varchar(25) DEFAULT NULL,
  `recdate` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subsubactivity`
--

INSERT INTO `subsubactivity` (`id`, `activity`, `subactivity`, `subsubactivity`, `usrid`, `recdate`) VALUES
(1, '3', '1', 'Safety Meeting', NULL, NULL),
(2, '3', '1', 'Prestart Check', NULL, NULL),
(3, '3', '1', 'Moving Prepare', NULL, NULL),
(4, '3', '1', 'Blasting Evacuation', NULL, NULL),
(5, '3', '1', 'Mobilization', NULL, NULL),
(6, '3', '1', 'Waiting Water', '', NULL),
(7, '3', '1', 'Washing Rig', NULL, NULL),
(8, '3', '1', 'Change Shift', NULL, NULL),
(9, '3', '1', 'Break', NULL, NULL),
(10, '3', '2', 'Accident', NULL, NULL),
(11, '3', '2', 'Training', NULL, NULL),
(12, '3', '2', 'Bad Weather', NULL, NULL),
(13, '3', '2', 'No Crew', NULL, NULL),
(14, '3', '2', 'Waiting Equipment', NULL, NULL),
(15, '3', '2', 'Waiting Location', NULL, NULL),
(16, '3', '2', 'Waiting Instruction', NULL, NULL),
(17, '3', '2', 'Eos In NS', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `survey`
--

CREATE TABLE `survey` (
  `id` int(10) NOT NULL,
  `date` date DEFAULT NULL,
  `site` varchar(15) DEFAULT NULL,
  `location` varchar(15) DEFAULT NULL,
  `rig` varchar(15) DEFAULT NULL,
  `hole` varchar(15) DEFAULT NULL,
  `depth` int(10) DEFAULT NULL,
  `dip` varchar(15) DEFAULT NULL,
  `azimuth` varchar(15) DEFAULT NULL,
  `status` int(5) NOT NULL,
  `usrid` varchar(25) DEFAULT NULL,
  `recdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `survey`
--

INSERT INTO `survey` (`id`, `date`, `site`, `location`, `rig`, `hole`, `depth`, `dip`, `azimuth`, `status`, `usrid`, `recdate`) VALUES
(4, '2017-10-05', '4', '2', '8', 'qwe123', 12, '13', '13', 0, 'admin', '2017-10-04 23:32:19');

-- --------------------------------------------------------

--
-- Table structure for table `training`
--

CREATE TABLE `training` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL,
  `trainingtitle` varchar(50) DEFAULT NULL,
  `instructor` varchar(50) DEFAULT NULL,
  `venue` varchar(25) DEFAULT NULL,
  `trainee` varchar(50) DEFAULT NULL,
  `comment` varchar(75) DEFAULT NULL,
  `usrid` varchar(25) NOT NULL,
  `recdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `training`
--

INSERT INTO `training` (`id`, `date`, `trainingtitle`, `instructor`, `venue`, `trainee`, `comment`, `usrid`, `recdate`) VALUES
(11, '2017-10-09', 'mnmnmnmnmnmn', 'asdasd', 'asd', 'asd', 'asd', 'admin', '2017-10-24 01:18:20'),
(12, '2017-10-24', 'xy', 'xy', 'xy', 'xy', 'xy', 'admin', '2017-10-24 01:19:21'),
(13, '2017-10-09', 'asadas', 'asdasd', 'asd', 'asd', 'asd', 'admin', '2017-10-09 02:46:34'),
(14, '2017-10-09', 'asadas', 'asdasd', 'asd', 'asd', 'asd', 'admin', '2017-10-09 02:46:56'),
(15, '2017-10-09', 'asadas', 'asdasd', 'asd', 'asd', 'asd', 'admin', '2017-10-09 02:48:54'),
(16, '2017-10-09', 'asadas', 'asdasd', 'asd', 'asd', 'asd', 'admin', '2017-10-09 03:26:55'),
(17, '2017-10-09', 'asadas', 'asdasd', 'asd', 'asd', 'asd', 'admin', '2017-10-09 04:17:05'),
(18, '2017-10-09', 'asadas', 'asdasd', 'asd', 'asd', 'asd', 'admin', '2017-10-09 04:17:37'),
(19, '2017-10-09', 'asadas', 'asdasd', 'asd', 'asd', 'asd', 'admin', '2017-10-09 04:19:04'),
(20, '2017-10-09', 'asadas', 'asdasd', 'asd', 'asd', 'asd', 'admin', '2017-10-09 04:19:38'),
(21, '2017-10-10', 'tes aja', 'ted', 'asdadad', 'tes', 'sdshshsh', 'admin', '2017-10-09 08:50:30'),
(22, '2017-10-10', 'tes aja', 'ted', 'asdadad', 'tes', 'sdshshsh', 'admin', '2017-10-09 08:51:43'),
(23, '2017-10-10', 'tes aja', 'ted', 'asdadad', 'tes', 'sdshshsh', 'admin', '2017-10-09 08:52:29'),
(24, '2017-10-10', 'tes aja', 'ted', 'asdadad', 'tes', 'sdshshsh', 'admin', '2017-10-09 08:53:01'),
(25, '2017-10-10', 'coy', 'cpt', 'asas', 'vpy', 'coy', 'admin', '2017-10-09 08:56:22'),
(26, '2017-10-11', 'as', 'as', 'as', 'as', 'as', 'admin', '2017-10-09 08:56:37'),
(27, '2017-10-11', 'as', 'as', 'as', 'as', 'as', 'admin', '2017-10-09 08:59:50'),
(28, '2017-10-14', 'asa', 'as', 'as', 'as', 'as', 'admin', '2017-10-09 09:02:44'),
(29, '2017-10-14', 'asa', 'as', 'as', 'as', 'as', 'admin', '2017-10-09 09:03:23');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activity`
--
ALTER TABLE `activity`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `consumable`
--
ALTER TABLE `consumable`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `detailactivity`
--
ALTER TABLE `detailactivity`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `detailsdrilling`
--
ALTER TABLE `detailsdrilling`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `detailsrc`
--
ALTER TABLE `detailsrc`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `downhole`
--
ALTER TABLE `downhole`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `finding`
--
ALTER TABLE `finding`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `location`
--
ALTER TABLE `location`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `maintenance`
--
ALTER TABLE `maintenance`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `manpower`
--
ALTER TABLE `manpower`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rig`
--
ALTER TABLE `rig`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `she`
--
ALTER TABLE `she`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `site`
--
ALTER TABLE `site`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subactivity`
--
ALTER TABLE `subactivity`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subsubactivity`
--
ALTER TABLE `subsubactivity`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `survey`
--
ALTER TABLE `survey`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `training`
--
ALTER TABLE `training`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activity`
--
ALTER TABLE `activity`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `consumable`
--
ALTER TABLE `consumable`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `detailactivity`
--
ALTER TABLE `detailactivity`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `detailsdrilling`
--
ALTER TABLE `detailsdrilling`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `detailsrc`
--
ALTER TABLE `detailsrc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `downhole`
--
ALTER TABLE `downhole`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `finding`
--
ALTER TABLE `finding`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `location`
--
ALTER TABLE `location`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `maintenance`
--
ALTER TABLE `maintenance`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `manpower`
--
ALTER TABLE `manpower`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=92;
--
-- AUTO_INCREMENT for table `rig`
--
ALTER TABLE `rig`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `she`
--
ALTER TABLE `she`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `site`
--
ALTER TABLE `site`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `subactivity`
--
ALTER TABLE `subactivity`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `subsubactivity`
--
ALTER TABLE `subsubactivity`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `survey`
--
ALTER TABLE `survey`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `training`
--
ALTER TABLE `training`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
