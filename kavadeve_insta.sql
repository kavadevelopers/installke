-- phpMyAdmin SQL Dump
-- version 4.9.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 02, 2021 at 10:12 AM
-- Server version: 5.7.23-23
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kavadeve_insta`
--

-- --------------------------------------------------------

--
-- Table structure for table `deposit`
--

CREATE TABLE `deposit` (
  `id` int(11) NOT NULL,
  `user` text NOT NULL,
  `amount` decimal(40,2) NOT NULL,
  `status` text NOT NULL,
  `name` text NOT NULL,
  `mobile` text NOT NULL,
  `email` text NOT NULL,
  `address` text NOT NULL,
  `date` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` bigint(20) NOT NULL,
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
  `created_at` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `mobile`, `pass`, `wallet`, `mission_rewards`, `member_comission`, `mission_comission`, `plan`, `expireon`, `invitation`, `usercode`, `df`, `blocked`, `created_at`) VALUES
(1, '9898375981', 'admin', 713.40, '0', 0.00, 13.40, '1', '2021-01-03', '', '7912221', '', '', '2021-01-02 10:27:43'),
(2, '7582940243', 'mks1432', 46896.00, '0', 0.00, 28.00, '3', '2021-02-01', '7912221', '5850002', '', '', '2021-01-02 12:57:20'),
(3, '7974584176', 'mks1432', 0.00, '0', 0.00, 0.00, '1', '2021-01-03', '5850002', '3024553', '', '', '2021-01-02 14:26:09');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `link` text NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `title`, `link`, `created_at`) VALUES
(1, 'Test', 'Https: facebook.com', '2021-01-02 16:20:26');

-- --------------------------------------------------------

--
-- Table structure for table `mission_record`
--

CREATE TABLE `mission_record` (
  `id` int(11) NOT NULL,
  `user` text NOT NULL,
  `task` text NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  `dtime` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mission_record`
--

INSERT INTO `mission_record` (`id`, `user`, `task`, `date`, `time`, `status`, `dtime`) VALUES
(1, '1', '1', '2021-01-02', '12:47:49', 2, '2021-01-02 12:47:49'),
(2, '2', '1', '2021-01-02', '12:58:43', 2, '2021-01-02 12:58:43'),
(3, '2', '3', '2021-01-02', '16:16:19', 2, '2021-01-02 16:16:19'),
(4, '2', '10', '2021-01-02', '14:11:55', 0, NULL),
(5, '2', '11', '2021-01-02', '14:11:59', 0, NULL),
(6, '1', '7', '2021-01-02', '17:00:46', 0, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `page` text NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `plans`
--

CREATE TABLE `plans` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `task` text NOT NULL,
  `amount` decimal(40,2) NOT NULL,
  `single_commission` text NOT NULL,
  `daily_income` varchar(50) NOT NULL,
  `monthly_income` varchar(50) NOT NULL,
  `anual_income` varchar(50) NOT NULL,
  `background` text NOT NULL,
  `image` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `plans`
--

INSERT INTO `plans` (`id`, `name`, `task`, `amount`, `single_commission`, `daily_income`, `monthly_income`, `anual_income`, `background`, `image`) VALUES
(1, 'PLAN 1', '2', 100.00, '12', '24', '24', '24', '#79797a', '1.png'),
(2, 'PLAN 2', '4', 44.00, '15', '60', '1800', '21600', '#844d95', '2.png'),
(3, 'PLAN 3', '10', 100.00, '16', '160', '4800', '57600', '', '3.png'),
(4, 'PLAN 4', '20', 200.00, '17', '340', '10200', '122400', '', '4.png'),
(5, 'PLAN 5', '40', 400.00, '18', '720', '21600', '259200', '', '5.png'),
(6, 'PLAN 6', '55', 834.00, '28', '1540', '46200', '554400', '', '6.png');

-- --------------------------------------------------------

--
-- Table structure for table `plan_sub`
--

CREATE TABLE `plan_sub` (
  `id` int(11) NOT NULL,
  `user` text NOT NULL,
  `plan` text NOT NULL,
  `days` text NOT NULL,
  `amount` text NOT NULL,
  `expire_on` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `plan_sub`
--

INSERT INTO `plan_sub` (`id`, `user`, `plan`, `days`, `amount`, `expire_on`) VALUES
(1, '2', '2', '3', '132', '2021-01-05'),
(2, '2', '3', '30', '3000', '2021-02-01');

-- --------------------------------------------------------

--
-- Table structure for table `popup`
--

CREATE TABLE `popup` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `msg` text NOT NULL,
  `link` text NOT NULL,
  `enable` int(11) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `popup`
--

INSERT INTO `popup` (`id`, `title`, `msg`, `link`, `enable`) VALUES
(1, 'Sample', 'Modal is Important. Here is how,\r\n\r\nIts good too see you.. something else...', 'link', 0);

-- --------------------------------------------------------

--
-- Table structure for table `setting`
--

CREATE TABLE `setting` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `recatcha_key` text NOT NULL,
  `talktolink` text NOT NULL,
  `invitetext` text NOT NULL,
  `pay_merchant` text NOT NULL,
  `pay_salt` text NOT NULL,
  `pay_url` text NOT NULL,
  `admin_folder` text NOT NULL,
  `cunstruction` int(11) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `setting`
--

INSERT INTO `setting` (`id`, `name`, `recatcha_key`, `talktolink`, `invitetext`, `pay_merchant`, `pay_salt`, `pay_url`, `admin_folder`, `cunstruction`) VALUES
(1, 'Social Promote', 'a', 'https://tawk.to/chat/5fe59df6a8a254155ab63c90/1eqcf23d3', 'Text', 'lCIrY4m3', 'VFRbC2S341', 'https://secure.payu.in', 'cp-admin', 0);

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` int(11) NOT NULL,
  `image` text NOT NULL,
  `link` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

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

CREATE TABLE `task` (
  `id` bigint(20) NOT NULL,
  `link` text NOT NULL,
  `plan` text NOT NULL,
  `ttype` text NOT NULL,
  `task_type` text NOT NULL,
  `unit` text NOT NULL,
  `unit_done` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `task`
--

INSERT INTO `task` (`id`, `link`, `plan`, `ttype`, `task_type`, `unit`, `unit_done`) VALUES
(1, 'Https: facebook.com', '1', 'facebook', 'Like', '100', '2'),
(2, 'https://www.facebook.com/unicef/photos/pcb.10158980231929002/10158980231799002/', '2', 'facebook', 'facebook', '100', '0'),
(3, 'https://www.facebook.com/unicef/photos/pcb.10158980231929002/10158980231799002/', '3', 'facebook', 'facebook', '100', '1'),
(4, 'https://www.facebook.com/unicef/photos/pcb.10158980231929002/10158980231799002/', '4', 'facebook', 'facebook', '100', '0'),
(5, 'https://www.facebook.com/unicef/photos/pcb.10158980231929002/10158980231799002/', '6', 'facebook', 'facebook', '100', '0'),
(6, 'https://www.facebook.com/unicef/photos/pcb.10158980231929002/10158980231799002/', '5', 'facebook', 'facebook', '100', '0'),
(7, 'https://www.facebook.com/unicef/photos/pcb.10158980231929002/10158980231799002/', '1', 'facebook', 'facebook', '100', '1'),
(8, 'https://www.facebook.com/photo?fbid=179491293908944&set=a.178873940637346', '1', 'facebook', 'facebook', '100', '0'),
(9, 'https://www.facebook.com/photo?fbid=179491293908944&set=a.178873940637346', '2', 'facebook', 'facebook', '100', '0'),
(10, 'https://www.facebook.com/photo?fbid=179491293908944&set=a.178873940637346', '3', 'facebook', 'facebook', '100', '1'),
(11, 'https://www.facebook.com/photo?fbid=179491293908944&set=a.178873940637346', '3', 'facebook', 'facebook', '100', '1'),
(12, 'https://www.facebook.com/photo?fbid=179491293908944&set=a.178873940637346', '4', 'facebook', 'facebook', '100', '0'),
(13, 'https://www.facebook.com/photo?fbid=179491293908944&set=a.178873940637346', '5', 'facebook', 'facebook', '100', '0'),
(14, 'https://www.facebook.com/photo?fbid=179491293908944&set=a.178873940637346', '6', 'facebook', 'facebook', '100', '0');

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `id` bigint(20) NOT NULL,
  `user` text NOT NULL,
  `type` text NOT NULL,
  `credit` decimal(40,2) NOT NULL,
  `debit` decimal(40,2) NOT NULL,
  `main` text NOT NULL,
  `date` date NOT NULL,
  `tra` text
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`id`, `user`, `type`, `credit`, `debit`, `main`, `date`, `tra`) VALUES
(2, '2', 'subscription', 0.00, 132.00, '1', '2021-01-02', NULL),
(3, '2', 'subscription', 0.00, 3000.00, '2', '2021-01-02', NULL),
(4, '1', 'mission', 12.00, 0.00, '', '2021-01-02', '1609584056'),
(5, '2', 'mission', 12.00, 0.00, '', '2021-01-02', '1609584056'),
(6, '1', 'member_comission', 0.60, 0.00, '', '2021-01-02', '1609584056'),
(7, '2', 'mission', 16.00, 0.00, '', '2021-01-02', '1609584929'),
(8, '1', 'member_comission', 0.80, 0.00, '', '2021-01-02', '1609584929'),
(9, '1', 'withdraw', 0.00, 300.00, '2', '2021-01-02', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tutorials`
--

CREATE TABLE `tutorials` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `msg` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` bigint(20) NOT NULL,
  `user_type` text NOT NULL COMMENT '0 = super admin',
  `branch` text NOT NULL,
  `name` text NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL,
  `email` text NOT NULL,
  `mobile` text NOT NULL,
  `gender` text NOT NULL,
  `type` text NOT NULL,
  `df` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `user_type`, `branch`, `name`, `username`, `password`, `email`, `mobile`, `gender`, `type`, `df`) VALUES
(1, '0', '', 'Super User', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'kavadevelopers@gmail.com', '9898375981', 'Male', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `user_info`
--

CREATE TABLE `user_info` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `acc_no` text NOT NULL,
  `bank` text NOT NULL,
  `ifsc` text NOT NULL,
  `paytm` text NOT NULL,
  `user` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_info`
--

INSERT INTO `user_info` (`id`, `name`, `acc_no`, `bank`, `ifsc`, `paytm`, `user`) VALUES
(1, 'Social pro', '123484949', 'Jeue', 'Iwi99292', '74773939392', '1'),
(2, 'T', 'Test', 'Test', 'Test', '000000', '2'),
(3, '', '', '', '', '', '3');

-- --------------------------------------------------------

--
-- Table structure for table `withdraw`
--

CREATE TABLE `withdraw` (
  `id` int(11) NOT NULL,
  `user` text NOT NULL,
  `amount` decimal(40,2) NOT NULL,
  `status` text NOT NULL,
  `date` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `withdraw`
--

INSERT INTO `withdraw` (`id`, `user`, `amount`, `status`, `date`) VALUES
(1, '1', 300.00, 'reject', '2021-01-02'),
(2, '1', 300.00, 'pending', '2021-01-02');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `deposit`
--
ALTER TABLE `deposit`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mission_record`
--
ALTER TABLE `mission_record`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `plans`
--
ALTER TABLE `plans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `plan_sub`
--
ALTER TABLE `plan_sub`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `popup`
--
ALTER TABLE `popup`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `setting`
--
ALTER TABLE `setting`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `task`
--
ALTER TABLE `task`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tutorials`
--
ALTER TABLE `tutorials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_info`
--
ALTER TABLE `user_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `withdraw`
--
ALTER TABLE `withdraw`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `deposit`
--
ALTER TABLE `deposit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `mission_record`
--
ALTER TABLE `mission_record`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `plans`
--
ALTER TABLE `plans`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `plan_sub`
--
ALTER TABLE `plan_sub`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `popup`
--
ALTER TABLE `popup`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `setting`
--
ALTER TABLE `setting`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `task`
--
ALTER TABLE `task`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tutorials`
--
ALTER TABLE `tutorials`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `user_info`
--
ALTER TABLE `user_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `withdraw`
--
ALTER TABLE `withdraw`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
