-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 22, 2018 at 07:33 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `insertion`
--

-- --------------------------------------------------------

--
-- Table structure for table `addtable`
--

CREATE TABLE IF NOT EXISTS `我的最愛` (
`id` int(11) NOT NULL,
  `機構名稱` varchar(250) NOT NULL,
  `地址` varchar(250) NOT NULL,
     `電話` varchar(250) NOT NULL,
   `核定收托人數` int NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=54 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `addtable`
--

INSERT INTO `我的最愛` (`id`, `機構名稱`, `地址`, `電話`, `核定收托人數`) VALUES
(1, '勁寶兒海頓托嬰中心', '彰化縣彰化市瑞陽街30號','04-7111738',30),
(2, '彰化基督教醫療財團法人附設彰化縣私立彰基托嬰中心', '彰化市大埔路485巷106號1樓','04-7112095',26);


-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
`id` int(11) NOT NULL,
  `username` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `托嬰中心`
--

CREATE TABLE IF NOT EXISTS `托嬰中心` (
    `babycenter_id` int(11) NOT NULL,
  `機構名稱` varchar(259) NOT NULL,
  `地址` varchar(250) NOT NULL,
   `電話` varchar(250) NOT NULL,
   `核定收托人數` int NOT NULL

) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `托嬰中心`
--

INSERT INTO `托嬰中心` (`babycenter_id`, `機構名稱`, `地址`, `電話`, `核定收托人數`) VALUES
(1, '勁寶兒海頓托嬰中心', '彰化縣彰化市瑞陽街30號','04-7111738',30),
(2, '彰化基督教醫療財團法人附設彰化縣私立彰基托嬰中心', '彰化市大埔路485巷106號1樓','04-7112095',26),
(3, '太陽貝兒托嬰中心', '彰化市金馬路一段477號','04-7232789',10);


-- --------------------------------------------------------

--
-- Table structure for table `data`
--

CREATE TABLE IF NOT EXISTS `data` (
    `id` int(11) NOT NULL,
  `機構名稱` varchar(250) NOT NULL,
  `地址` varchar(250) NOT NULL,
   `電話` varchar(250) NOT NULL,
   `核定收托人數` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `評價`
--

CREATE TABLE IF NOT EXISTS `評價` (
    `comment_id` int(11) NOT NULL,
`機構名稱` varchar(250) NOT NULL,
`評價` varchar(250) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `評價`
--

INSERT INTO  `評價` (`comment_id`, `機構名稱`, `評價`) VALUES
(1, '勁寶兒海頓托嬰中心', '價格便宜'),
(2, '彰化基督教醫療財團法人附設彰化縣私立彰基托嬰中心', '讓人安心'),
(3, '太陽貝兒托嬰中心', '價格便宜');

-- --------------------------------------------------------
--

--
-- Indexes for table `addtable`
--
ALTER TABLE `我的最愛`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `course`
--
ALTER TABLE `托嬰中心`
 ADD PRIMARY KEY (`babycenter_id`);

--
-- Indexes for table `data`
--
ALTER TABLE `data`
 ADD PRIMARY KEY (`id`);

 ALTER TABLE `評價`
 ADD PRIMARY KEY (`comment_id`);

--

--
ALTER TABLE `我的最愛`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=54;
--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `托嬰中心`
MODIFY `babycenter_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `data`
--
ALTER TABLE `data`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `faculty`
--
ALTER TABLE `評價`
MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=22;

