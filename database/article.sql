-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 25, 2015 at 11:23 AM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `article`
--

-- --------------------------------------------------------

--
-- Table structure for table `categorys`
--

CREATE TABLE IF NOT EXISTS `categorys` (
  `categoryid` int(10) NOT NULL,
  `catename` varchar(256) NOT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `parent_name` varchar(256) DEFAULT NULL,
  `langid` int(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `categorys`
--

INSERT INTO `categorys` (`categoryid`, `catename`, `parent_id`, `parent_name`, `langid`) VALUES
(1, 'news', 0, 'home', 1),
(2, 'ពត៏មាន', 0, 'home', 2),
(3, 'أخبار', 0, 'home', 3),
(4, 'business', 1, 'news', 1),
(5, 'ពាណិជ្ជកម្ន', 2, 'ពត៏មាន', 2),
(6, 'اعمال', 3, 'أخبار', 3),
(7, 'project', 0, 'home', 1),
(8, 'គំរោង', 0, 'home', 2),
(9, 'مشروع', 0, 'home', 3),
(10, 'completed_project', 7, 'project', 1),
(11, 'គំរោងដែលបញ្ចប់', 8, 'គំរោង', 2),
(12, 'الانتهاء من المشروع', 9, 'مشروع', 3),
(13, 'technology', 1, 'news', 1),
(14, 'education', 0, 'home', 1),
(15, 'testing', 0, 'home', 1);

-- --------------------------------------------------------

--
-- Table structure for table `language`
--

CREATE TABLE IF NOT EXISTS `language` (
  `langid` int(10) NOT NULL,
  `langtype` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `language`
--

INSERT INTO `language` (`langid`, `langtype`) VALUES
(1, 'en'),
(2, 'kh'),
(3, 'ar');

-- --------------------------------------------------------

--
-- Table structure for table `note`
--

CREATE TABLE IF NOT EXISTS `note` (
  `noteid` int(11) unsigned NOT NULL,
  `userid` int(11) unsigned NOT NULL,
  `categoryid` int(11) unsigned NOT NULL,
  `title` varchar(250) NOT NULL,
  `image` varchar(250) NOT NULL,
  `content` text NOT NULL,
  `date_added` date NOT NULL,
  `video` varchar(250) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=112 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `note`
--

INSERT INTO `note` (`noteid`, `userid`, `categoryid`, `title`, `image`, `content`, `date_added`, `video`) VALUES
(92, 1, 1, 'english news', '', '<p>this is arabic updated content testing updated<img alt="" src="/article/publics/upload/1513173_683278528471404_8229601724393719405_n(1).jpg" style="height:300px; width:200px" /></p>\r\n', '2015-12-07', '<iframe width='),
(93, 1, 2, 'khmer news', '1.jpg', '<p>នេះសំរាប់តេស updated</p>\r\n', '2015-12-07', '<iframe width="560" height="315" src="https://www.youtube.com/embed/xAK-vwSIKZ4" frameborder="0" allowfullscreen></iframe>'),
(94, 1, 3, 'Arabic news', '1.jpg', 'سنيبلسكيطنبلسنبلسبنلكسنل', '2015-12-07', '<iframe width="560" height="315" src="https://www.youtube.com/embed/xAK-vwSIKZ4" frameborder="0" allowfullscreen></iframe>'),
(95, 1, 4, 'english business', '1.jpg', 'សថដងសង', '2015-12-07', '<iframe width="560" height="315" src="https://www.youtube.com/embed/xAK-vwSIKZ4" frameborder="0" allowfullscreen></iframe>'),
(97, 1, 5, 'khmer business', '1.PNG', '<p>khmer business</p>\r\n', '2015-12-07', '<iframe width="560" height="315" src="https://www.youtube.com/embed/xAK-vwSIKZ4" frameborder="0" allowfullscreen></iframe>'),
(98, 1, 6, 'Arabic business', '1.jpg', '<p>Arabic business updated to khmer</p>\r\n', '2015-12-07', '<iframe width="560" height="315" src="https://www.youtube.com/embed/xAK-vwSIKZ4" frameborder="0" allowfullscreen></iframe>'),
(99, 2, 7, 'english project', '1513173_683278528471404_8229601724393719405_n.jpg', '<p>Arabic project</p>\r\n', '2015-12-07', '<iframe width="560" height="315" src="https://www.youtube.com/embed/xAK-vwSIKZ4" frameborder="0" allowfullscreen></iframe>'),
(100, 1, 8, 'khmer project', '1.PNG', '<p>testing 100</p>\r\n', '2015-12-08', '<iframe width="560" height="315" src="https://www.youtube.com/embed/xAK-vwSIKZ4" frameborder="0" allowfullscreen></iframe>'),
(101, 2, 9, 'arab project', '12141543_1640345679568568_3052266994075846182_n.jpg', '<p>this is news for arabic languenges</p>\r\n', '2015-12-08', '<iframe width="560" height="315" src="https://www.youtube.com/embed/xAK-vwSIKZ4" frameborder="0" allowfullscreen></iframe>'),
(102, 2, 10, 'english complet pro', '1513173_683278528471404_8229601724393719405_n.jpg', '<p>this is a project testing</p>\r\n', '2015-12-08', '<iframe width="560" height="315" src="https://www.youtube.com/embed/xAK-vwSIKZ4" frameborder="0" allowfullscreen></iframe>'),
(103, 2, 11, 'khmer complet pr', 'chai.png', '<p>this is arabic business</p>\r\n', '2015-12-08', '<iframe width="560" height="315" src="https://www.youtube.com/embed/xAK-vwSIKZ4" frameborder="0" allowfullscreen></iframe>'),
(104, 1, 12, 'arab complet pro', '12140076_1046299045414582_6481022240220331391_o.jpg', '<p>Arabic testing</p>\r\n', '2015-12-08', '<iframe width="560" height="315" src="https://www.youtube.com/embed/xAK-vwSIKZ4" frameborder="0" allowfullscreen></iframe>'),
(109, 2, 10, 'english complet pro 2', '12140076_1046299045414582_6481022240220331391_o.jpg', '<p>Arabic testing</p>\r\n', '2015-12-11', '<iframe width="560" height="315" src="https://www.youtube.com/embed/xAK-vwSIKZ4" frameborder="0" allowfullscreen></iframe>'),
(110, 2, 13, 'english technology', '12140076_1046299045414582_6481022240220331391_o.jpg', 'test', '2015-12-11', '<iframe width="560" height="315" src="https://www.youtube.com/embed/xAK-vwSIKZ4" frameborder="0" allowfullscreen></iframe>'),
(111, 2, 14, 'english education', '12140076_1046299045414582_6481022240220331391_o.jpg', 'education testing', '2015-12-10', '<iframe width="560" height="315" src="https://www.youtube.com/embed/xAK-vwSIKZ4" frameborder="0" allowfullscreen></iframe>');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_member`
--

CREATE TABLE IF NOT EXISTS `tbl_member` (
  `m_id` int(10) NOT NULL,
  `m_en_name` varchar(50) NOT NULL,
  `m_kh_name` varchar(50) DEFAULT NULL,
  `m_ar_name` varchar(50) DEFAULT NULL,
  `m_gender` varchar(10) NOT NULL,
  `m_university` varchar(255) DEFAULT NULL,
  `m_skill` varchar(100) DEFAULT NULL,
  `m_year` varchar(100) DEFAULT NULL,
  `m_phone` varchar(50) DEFAULT NULL,
  `m_facebook` varchar(100) DEFAULT NULL,
  `m_mail` varchar(100) DEFAULT NULL,
  `m_birthdate` date NOT NULL,
  `m_place_of_birth` varchar(100) NOT NULL,
  `m_address` varchar(250) NOT NULL,
  `m_photo` varchar(100) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_member`
--

INSERT INTO `tbl_member` (`m_id`, `m_en_name`, `m_kh_name`, `m_ar_name`, `m_gender`, `m_university`, `m_skill`, `m_year`, `m_phone`, `m_facebook`, `m_mail`, `m_birthdate`, `m_place_of_birth`, `m_address`, `m_photo`) VALUES
(1, 'sles ulvy', 'ស្លេះ អុលវី', 'علوي صالح', 'male', 'RUPP', 'IT', 'Graduate', '090000090', 'ulvysles', 'slehulvy@gmail.com', '1989-06-12', 'Kambong Cham', 'Phnom Penh', 'me.jpg'),
(3, 'MAN NASEAT', 'ម៉ាន ណាសៀត', 'ناصر سليمان', 'male', 'RUPP', 'IT', 'Graduate', '090000090', 'ulvysles', 'slehulvy@gmail.com', '1989-06-12', 'Kambong Cham', 'Phnom Penh', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `userid` int(11) NOT NULL,
  `login` varchar(25) NOT NULL,
  `password` varchar(64) NOT NULL,
  `role` enum('default','admin','owner') NOT NULL DEFAULT 'default',
  `username` varchar(55) DEFAULT NULL,
  `photo` varchar(250) DEFAULT NULL
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userid`, `login`, `password`, `role`, `username`, `photo`) VALUES
(1, 'admin', '36b664527d14f8b142dbcf29b5ac7ac7705ad9fa57956e3b08f03c834fd0396f', 'owner', 'admin', '1263.jpg'),
(2, 'ulvy', 'f9f4c20d1f075b17181ab92a216dad77e2e9e06335f38107d942a21042f77245', 'default', 'ulvy', 'm.jpg'),
(4, 'me', '9b78e77ca14f1c3adc4bbbcb8340785561ba3ac44f51c55dc30f29ba32956f8c', 'default', 'me', 'm.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categorys`
--
ALTER TABLE `categorys`
  ADD PRIMARY KEY (`categoryid`);

--
-- Indexes for table `language`
--
ALTER TABLE `language`
  ADD PRIMARY KEY (`langid`);

--
-- Indexes for table `note`
--
ALTER TABLE `note`
  ADD PRIMARY KEY (`noteid`), ADD KEY `userid` (`userid`) USING BTREE, ADD KEY `categoryid` (`categoryid`) USING BTREE;

--
-- Indexes for table `tbl_member`
--
ALTER TABLE `tbl_member`
  ADD PRIMARY KEY (`m_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categorys`
--
ALTER TABLE `categorys`
  MODIFY `categoryid` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `note`
--
ALTER TABLE `note`
  MODIFY `noteid` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=112;
--
-- AUTO_INCREMENT for table `tbl_member`
--
ALTER TABLE `tbl_member`
  MODIFY `m_id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
