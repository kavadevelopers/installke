-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 04, 2021 at 01:56 PM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `instalike`
--

-- --------------------------------------------------------

--
-- Table structure for table `deposit`
--

DROP TABLE IF EXISTS `deposit`;
CREATE TABLE IF NOT EXISTS `deposit` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user` text NOT NULL,
  `amount` decimal(40,2) NOT NULL,
  `status` text NOT NULL,
  `name` text NOT NULL,
  `mobile` text NOT NULL,
  `email` text NOT NULL,
  `address` text NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

DROP TABLE IF EXISTS `login`;
CREATE TABLE IF NOT EXISTS `login` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `mobile` text NOT NULL,
  `pass` text NOT NULL,
  `wallet` decimal(40,2) NOT NULL,
  `mission_rewards` varchar(250) NOT NULL DEFAULT '0',
  `member_comission` decimal(40,2) NOT NULL,
  `mission_comission` decimal(40,2) NOT NULL,
  `plan` varchar(50) NOT NULL,
  `expireon` date DEFAULT NULL,
  `invitation` text NOT NULL,
  `usercode` text NOT NULL,
  `df` varchar(10) NOT NULL,
  `blocked` varchar(10) NOT NULL,
  `created_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

DROP TABLE IF EXISTS `messages`;
CREATE TABLE IF NOT EXISTS `messages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` text NOT NULL,
  `link` text NOT NULL,
  `created_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `mission_record`
--

DROP TABLE IF EXISTS `mission_record`;
CREATE TABLE IF NOT EXISTS `mission_record` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user` text NOT NULL,
  `task` text NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  `dtime` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

DROP TABLE IF EXISTS `pages`;
CREATE TABLE IF NOT EXISTS `pages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` text NOT NULL,
  `page` text NOT NULL,
  `created_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `plans`
--

DROP TABLE IF EXISTS `plans`;
CREATE TABLE IF NOT EXISTS `plans` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `task` text NOT NULL,
  `amount` decimal(40,2) NOT NULL,
  `single_commission` text NOT NULL,
  `daily_income` varchar(50) NOT NULL,
  `monthly_income` varchar(50) NOT NULL,
  `anual_income` varchar(50) NOT NULL,
  `background` text NOT NULL,
  `image` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `plans`
--

INSERT INTO `plans` (`id`, `name`, `task`, `amount`, `single_commission`, `daily_income`, `monthly_income`, `anual_income`, `background`, `image`) VALUES
(1, 'PLAN 1', '2', '100.00', '12', '24', '24', '24', '#79797a', '1.png'),
(2, 'PLAN 2', '4', '44.00', '15', '60', '1800', '21600', '#844d95', '2.png'),
(3, 'PLAN 3', '10', '100.00', '16', '160', '4800', '57600', '', '3.png'),
(4, 'PLAN 4', '20', '200.00', '17', '340', '10200', '122400', '', '4.png'),
(5, 'PLAN 5', '40', '400.00', '18', '720', '21600', '259200', '', '5.png'),
(6, 'PLAN 6', '55', '834.00', '28', '1540', '46200', '554400', '', '6.png');

-- --------------------------------------------------------

--
-- Table structure for table `plan_sub`
--

DROP TABLE IF EXISTS `plan_sub`;
CREATE TABLE IF NOT EXISTS `plan_sub` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user` text NOT NULL,
  `plan` text NOT NULL,
  `days` text NOT NULL,
  `amount` text NOT NULL,
  `expire_on` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `popup`
--

DROP TABLE IF EXISTS `popup`;
CREATE TABLE IF NOT EXISTS `popup` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` text NOT NULL,
  `msg` text NOT NULL,
  `link` text NOT NULL,
  `enable` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `popup`
--

INSERT INTO `popup` (`id`, `title`, `msg`, `link`, `enable`) VALUES
(1, 'Sample', 'Modal is Important. Here is how,\r\n\r\nIts good too see you.. something else...', 'link', 0);

-- --------------------------------------------------------

--
-- Table structure for table `setting`
--

DROP TABLE IF EXISTS `setting`;
CREATE TABLE IF NOT EXISTS `setting` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `recatcha_key` text NOT NULL,
  `talktolink` text NOT NULL,
  `invitetext` text NOT NULL,
  `pay_merchant` text NOT NULL,
  `pay_salt` text NOT NULL,
  `pay_url` text NOT NULL,
  `admin_folder` text NOT NULL,
  `cunstruction` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `setting`
--

INSERT INTO `setting` (`id`, `name`, `recatcha_key`, `talktolink`, `invitetext`, `pay_merchant`, `pay_salt`, `pay_url`, `admin_folder`, `cunstruction`) VALUES
(1, 'Social Promote', 'a', 'https://tawk.to/chat/5fe59df6a8a254155ab63c90/1eqcf23d3', 'Text', 'lCIrY4m3', 'VFRbC2S341', 'https://sandboxsecure.payu.in', 'cp-admin', 0);

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

DROP TABLE IF EXISTS `sliders`;
CREATE TABLE IF NOT EXISTS `sliders` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `image` text NOT NULL,
  `link` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `image`, `link`) VALUES
(7, '1609220577.8402.png', '#'),
(6, '1609220574.3116.png', '#'),
(5, '1609220569.6766.png', '#'),
(8, '1609220581.1636.png', '#');

-- --------------------------------------------------------

--
-- Table structure for table `task`
--

DROP TABLE IF EXISTS `task`;
CREATE TABLE IF NOT EXISTS `task` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `link` text NOT NULL,
  `plan` text NOT NULL,
  `ttype` text NOT NULL,
  `task_type` text NOT NULL,
  `unit` text NOT NULL,
  `unit_done` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `task`
--

INSERT INTO `task` (`id`, `link`, `plan`, `ttype`, `task_type`, `unit`, `unit_done`) VALUES
(1, 'Https: facebook.com', '1', 'facebook', 'Like', '100', '0'),
(2, 'https://www.facebook.com/unicef/photos/pcb.10158980231929002/10158980231799002/', '2', 'facebook', 'facebook', '100', '0'),
(3, 'https://www.facebook.com/unicef/photos/pcb.10158980231929002/10158980231799002/', '3', 'facebook', 'facebook', '100', '0'),
(4, 'https://www.facebook.com/unicef/photos/pcb.10158980231929002/10158980231799002/', '4', 'facebook', 'facebook', '100', '0'),
(5, 'https://www.facebook.com/unicef/photos/pcb.10158980231929002/10158980231799002/', '6', 'facebook', 'facebook', '100', '0'),
(6, 'https://www.facebook.com/unicef/photos/pcb.10158980231929002/10158980231799002/', '5', 'facebook', 'facebook', '100', '0'),
(7, 'https://www.facebook.com/unicef/photos/pcb.10158980231929002/10158980231799002/', '1', 'facebook', 'facebook', '100', '0'),
(8, 'https://www.facebook.com/photo?fbid=179491293908944&set=a.178873940637346', '1', 'facebook', 'facebook', '100', '0'),
(9, 'https://www.facebook.com/photo?fbid=179491293908944&set=a.178873940637346', '2', 'facebook', 'facebook', '100', '0'),
(10, 'https://www.facebook.com/photo?fbid=179491293908944&set=a.178873940637346', '3', 'facebook', 'facebook', '100', '0'),
(11, 'https://www.facebook.com/photo?fbid=179491293908944&set=a.178873940637346', '3', 'facebook', 'facebook', '100', '0'),
(12, 'https://www.facebook.com/photo?fbid=179491293908944&set=a.178873940637346', '4', 'facebook', 'facebook', '100', '0'),
(13, 'https://www.facebook.com/photo?fbid=179491293908944&set=a.178873940637346', '5', 'facebook', 'facebook', '100', '0'),
(14, 'https://www.facebook.com/photo?fbid=179491293908944&set=a.178873940637346', '6', 'facebook', 'facebook', '100', '0');

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

DROP TABLE IF EXISTS `transactions`;
CREATE TABLE IF NOT EXISTS `transactions` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `user` text NOT NULL,
  `type` text NOT NULL,
  `credit` decimal(40,2) NOT NULL,
  `debit` decimal(40,2) NOT NULL,
  `main` text NOT NULL,
  `date` date NOT NULL,
  `tra` text,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tutorials`
--

DROP TABLE IF EXISTS `tutorials`;
CREATE TABLE IF NOT EXISTS `tutorials` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` text NOT NULL,
  `msg` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `user_type` text NOT NULL COMMENT '0 = super admin',
  `branch` text NOT NULL,
  `name` text NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL,
  `email` text NOT NULL,
  `mobile` text NOT NULL,
  `gender` text NOT NULL,
  `type` text NOT NULL,
  `df` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `user_type`, `branch`, `name`, `username`, `password`, `email`, `mobile`, `gender`, `type`, `df`) VALUES
(1, '0', '', 'Super User', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'kavadevelopers@gmail.com', '9898375981', 'Male', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `user_info`
--

DROP TABLE IF EXISTS `user_info`;
CREATE TABLE IF NOT EXISTS `user_info` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `acc_no` text NOT NULL,
  `bank` text NOT NULL,
  `ifsc` text NOT NULL,
  `paytm` text NOT NULL,
  `user` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `withdraw`
--

DROP TABLE IF EXISTS `withdraw`;
CREATE TABLE IF NOT EXISTS `withdraw` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user` text NOT NULL,
  `amount` decimal(40,2) NOT NULL,
  `status` text NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
