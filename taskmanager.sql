-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 31, 2015 at 04:00 AM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `taskmanager`
--

-- --------------------------------------------------------

--
-- Table structure for table `tasktbl`
--

CREATE TABLE IF NOT EXISTS `tasktbl` (
  `task_id` int(3) NOT NULL AUTO_INCREMENT,
  `user` varchar(20) NOT NULL,
  `task` text NOT NULL,
  `task_date` varchar(20) NOT NULL,
  `status` varchar(20) NOT NULL DEFAULT 'Pending',
  `date_reg` datetime NOT NULL,
  PRIMARY KEY (`task_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `tasktbl`
--

INSERT INTO `tasktbl` (`task_id`, `user`, `task`, `task_date`, `status`, `date_reg`) VALUES
(1, 'osfolaranmi', 'Visit a friend at Banana Island', '30 Aug 2016', 'Pending', '2015-08-30 23:24:25'),
(3, 'osfolaranmi', 'A new day', '29 Aug 2015', 'Completed', '2015-08-31 01:04:13');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `date_reg` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `username`, `password`, `date_reg`) VALUES
(1, 'Folaranmi Oluwatosin', 'osfolaranmi', '827ccb0eea8a706c4c34a16891f84e7b', '2015-08-30 08:00:07');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
