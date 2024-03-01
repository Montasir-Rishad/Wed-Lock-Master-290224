-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 11, 2018 at 08:28 PM
-- Server version: 5.7.21
-- PHP Version: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `biye24`
--

-- --------------------------------------------------------

--
-- Table structure for table `biodata`
--

DROP TABLE IF EXISTS `biodata`;
CREATE TABLE IF NOT EXISTS `biodata` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user` varchar(50) NOT NULL,
  `name` varchar(500) NOT NULL,
  `father_name` varchar(100) NOT NULL,
  `father_work` varchar(100) NOT NULL,
  `mother_name` varchar(100) NOT NULL,
  `mother_work` varchar(100) NOT NULL,
  `family_member` varchar(50) NOT NULL,
  `bday` date NOT NULL,
  `age` int(11) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `weight` varchar(20) NOT NULL,
  `height` varchar(100) NOT NULL,
  `body_color` varchar(100) NOT NULL,
  `blood_group` varchar(10) NOT NULL,
  `religion` varchar(50) NOT NULL,
  `occupasion` varchar(50) NOT NULL,
  `mobile` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `m_stat` varchar(50) NOT NULL,
  `smoking` varchar(50) NOT NULL,
  `physical_disability` varchar(50) NOT NULL,
  `abroad_or_not` varchar(50) NOT NULL,
  `cur_address` varchar(500) NOT NULL,
  `per_address` varchar(200) NOT NULL,
  `jsc` varchar(20) NOT NULL,
  `jsc_board` varchar(20) NOT NULL,
  `jsc_year` varchar(20) NOT NULL,
  `ssc` varchar(20) NOT NULL,
  `ssc_board` varchar(20) NOT NULL,
  `ssc_year` varchar(20) NOT NULL,
  `hsc` varchar(20) NOT NULL,
  `hsc_board` varchar(20) NOT NULL,
  `hsc_year` varchar(20) NOT NULL,
  `bsc` varchar(20) NOT NULL,
  `bsc_year` varchar(20) NOT NULL,
  `msc` varchar(20) NOT NULL,
  `msc_year` varchar(20) NOT NULL,
  `last_ins` varchar(100) NOT NULL,
  `nid` varchar(25) NOT NULL,
  `about_me` varchar(1000) NOT NULL,
  `about_her` varchar(110) NOT NULL,
  `biodata_soft` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=26 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

DROP TABLE IF EXISTS `comment`;
CREATE TABLE IF NOT EXISTS `comment` (
  `com_id` int(11) NOT NULL AUTO_INCREMENT,
  `post_id` int(11) NOT NULL,
  `commenter` varchar(50) NOT NULL,
  `poster` varchar(50) NOT NULL,
  `comment` varchar(500) NOT NULL,
  `seen` int(11) NOT NULL,
  `time` timestamp NOT NULL,
  PRIMARY KEY (`com_id`)
) ENGINE=MyISAM AUTO_INCREMENT=63 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `dp`
--

DROP TABLE IF EXISTS `dp`;
CREATE TABLE IF NOT EXISTS `dp` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user` varchar(50) NOT NULL,
  `dp` varchar(60) NOT NULL,
  `num` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `flag`
--

DROP TABLE IF EXISTS `flag`;
CREATE TABLE IF NOT EXISTS `flag` (
  `id` int(11) NOT NULL,
  `fl` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `flag`
--

INSERT INTO `flag` (`id`, `fl`) VALUES
(0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `following`
--

DROP TABLE IF EXISTS `following`;
CREATE TABLE IF NOT EXISTS `following` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `post_id` int(11) NOT NULL,
  `comment_id` int(11) NOT NULL,
  `user` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `following`
--

INSERT INTO `following` (`id`, `post_id`, `comment_id`, `user`) VALUES
(5, 48, 62, 'hussain0296@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `gintama`
--

DROP TABLE IF EXISTS `gintama`;
CREATE TABLE IF NOT EXISTS `gintama` (
  `eyed` int(11) NOT NULL AUTO_INCREMENT,
  `yahoo` varchar(255) NOT NULL,
  `chabi` varchar(20) NOT NULL,
  PRIMARY KEY (`eyed`)
) ENGINE=MyISAM AUTO_INCREMENT=36 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gintama`
--

INSERT INTO `gintama` (`eyed`, `yahoo`, `chabi`) VALUES
(20, 'admin@admin.com', 'nimda654321');

-- --------------------------------------------------------

--
-- Table structure for table `goppo`
--

DROP TABLE IF EXISTS `goppo`;
CREATE TABLE IF NOT EXISTS `goppo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `content` varchar(1000) NOT NULL,
  `image` varchar(100) NOT NULL,
  `user` varchar(100) NOT NULL,
  `time` timestamp NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=51 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pm`
--

DROP TABLE IF EXISTS `pm`;
CREATE TABLE IF NOT EXISTS `pm` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sender` varchar(50) NOT NULL,
  `receiver` varchar(50) NOT NULL,
  `message` varchar(1000) NOT NULL,
  `seen` int(11) NOT NULL,
  `timestamp` timestamp NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=98 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pm_notification`
--

DROP TABLE IF EXISTS `pm_notification`;
CREATE TABLE IF NOT EXISTS `pm_notification` (
  `message_id` int(11) NOT NULL,
  `receiver` varchar(50) NOT NULL,
  `seen` int(11) NOT NULL,
  PRIMARY KEY (`message_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

DROP TABLE IF EXISTS `posts`;
CREATE TABLE IF NOT EXISTS `posts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `image` varchar(50) NOT NULL,
  `content` varchar(500) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `time` timestamp NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=26 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tipshoi`
--

DROP TABLE IF EXISTS `tipshoi`;
CREATE TABLE IF NOT EXISTS `tipshoi` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `mail` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=36 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tipshoi`
--

INSERT INTO `tipshoi` (`id`, `name`, `gender`, `mail`) VALUES
(20, 'Admin', 'Male', 'admin@admin.com');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
