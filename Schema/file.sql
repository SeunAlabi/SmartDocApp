-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 27, 2015 at 09:35 AM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `file`
--

-- --------------------------------------------------------

--
-- Table structure for table `files`
--

CREATE TABLE IF NOT EXISTS `files` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `randomId` varchar(13) NOT NULL,
  `targetFile` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=36 ;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `role` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=63 ;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`, `role`) VALUES
(1, 'admin', '12345', 1),
(2, 'USER62775', '22222', 0),
(3, 'USER99760', '369914', 0),
(4, 'USER55326', '360494', 0),
(5, 'USER44244', '760788', 0),
(6, 'USER63874', '863892', 0),
(7, 'USER32893', '332571', 0),
(8, 'USER98290', '964283', 0),
(9, 'USER13623', '655918', 0),
(10, 'USER81262', '107801', 0),
(11, 'USER87162', '526297', 0),
(12, 'USER60004', '895963', 0),
(13, 'USER71864', '995826', 0),
(14, 'USER44679', '356979', 0),
(15, 'USER9227', '519661', 0),
(16, 'USER3227', '984566', 0),
(17, 'USER29289', '130186', 0),
(18, 'USER30738', '115661', 0),
(19, 'USER30620', '675229', 0),
(20, 'USER62356', '817228', 0),
(21, 'USER87994', '427821', 0),
(22, 'USER28015', '378535', 0),
(23, 'USER39812', '637399', 0),
(24, 'USER10693', '237098', 0),
(25, 'USER56586', '951105', 0),
(26, 'USER65496', '721246', 0),
(27, 'USER92145', '306685', 0),
(28, 'USER74478', '411536', 0),
(29, 'USER63686', '580942', 0),
(30, 'USER93860', '559390', 0),
(31, 'USER61520', '479013', 0),
(32, 'USER99623', '518516', 0),
(33, 'USER31640', '278475', 0),
(34, 'USER79007', '354255', 0),
(35, 'USER15581', '526421', 0),
(36, 'USER82350', '461945', 0),
(37, 'USER', '', 0),
(38, 'USERjTaNXn', 'tNQgzf', 0),
(39, 'yq1ZeE', '', 0),
(40, 'PNFu8C', 'wSnvid', 0),
(41, 'USERJfvk7z', 'TRmWat', 0),
(42, 'USERmESrpZ', 'yTQxE8', 0),
(43, 'USERnzVcE3Up', 'TC4qIWGT', 0),
(44, 'USERaLfoNaMV', 'Dk0IPvFA', 0),
(45, 'USERUsYcZzui', 'oLstKTJL', 0),
(46, 'USERPskF6Y08', 'SvrehETK', 0),
(47, 'USERMQ2aVQ', '1LjpQxcK', 0),
(48, 'USERNgsB7p', 'pBtH5AJt', 0),
(49, 'USER17irWL', '5RwTYg3z', 0),
(50, 'USERiLlbpt', 'qRTsPpnF', 0),
(51, 'USERGtP3Yw', 'u76znIwl', 0),
(52, 'USERXLnpip', '451W91as', 0),
(53, 'USERxCvoQh', '5BMpy3ib', 0),
(54, 'USERy9Anu0', 'fmrMhv6k', 0),
(55, 'USERrC3j76', 'ZTHj2JL6', 0),
(56, 'USERUEXlGy', 'LYtte70C', 0),
(57, 'USER0Rvxlf', 'kU3hxhHV', 0),
(58, 'USERF3GE3H', 'PNbdNbYh', 0),
(59, 'USEROPmPdM', 'TqxPBqUX', 0),
(60, 'USERCz6efi', 'Bg7vG9ow', 0),
(61, 'USERB3d3t3', 'qlzVggUG', 0),
(62, 'USERXTntKw', 'UTNfVEBb', 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
