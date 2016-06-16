-- phpMyAdmin SQL Dump
-- version 4.4.14.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 02, 2016 at 04:06 PM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `possystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) unsigned NOT NULL,
  `name` varchar(50) CHARACTER SET utf8 NOT NULL,
  `email` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `username` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(32) CHARACTER SET utf8 NOT NULL,
  `account_type` tinyint(4) unsigned NOT NULL DEFAULT '1',
  `created_by` int(11) unsigned NOT NULL,
  `created_time` datetime NOT NULL,
  `modified_by` int(11) unsigned NOT NULL,
  `modified_time` datetime NOT NULL,
  `permission` varchar(22) COLLATE utf8_unicode_ci NOT NULL,
  `status` tinyint(4) unsigned NOT NULL DEFAULT '1'
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `username`, `password`, `account_type`, `created_by`, `created_time`, `modified_by`, `modified_time`, `permission`, `status`) VALUES
(24, 'Md.Tarikul Islam', 'rony@gmail.com', 'ronyKader', 'e10adc3949ba59abbe56e057f20f883e', 1, 12, '2016-05-17 14:21:32', 29, '0000-00-00 00:00:00', '2', 2),
(25, 'Sudip Palas', 'sudip@gmail.com', 'sudipdaa', 'd41d8cd98f00b204e9800998ecf8427e', 3, 12, '2016-05-17 14:22:31', 29, '0000-00-00 00:00:00', '2, 3', 2),
(28, 'Testing Mail', 'test@gmail.com', 'Test', 'f8ef735551c05068a40167080f0b3474', 1, 24, '2016-05-19 12:00:48', 24, '0000-00-00 00:00:00', '1', 2),
(29, 'hello', 'hello@gmail.com', 'hello', 'd41d8cd98f00b204e9800998ecf8427e', 3, 0, '0000-00-00 00:00:00', 29, '0000-00-00 00:00:00', '2, 3', 2);

-- --------------------------------------------------------

--
-- Table structure for table `admin_menu`
--

CREATE TABLE IF NOT EXISTS `admin_menu` (
  `id` int(11) unsigned NOT NULL,
  `menu_parent` int(11) NOT NULL,
  `menu_name` varchar(100) CHARACTER SET utf8 NOT NULL,
  `menu_link` varchar(100) CHARACTER SET utf8 NOT NULL,
  `menu_modules_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `menu_modules_prefix` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `menu_sorting` tinyint(3) unsigned NOT NULL,
  `created_by` int(11) unsigned NOT NULL,
  `created_time` datetime NOT NULL,
  `modified_by` int(11) unsigned NOT NULL,
  `modified_time` datetime NOT NULL,
  `status` tinyint(4) unsigned NOT NULL DEFAULT '1'
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `admin_menu`
--

INSERT INTO `admin_menu` (`id`, `menu_parent`, `menu_name`, `menu_link`, `menu_modules_name`, `menu_modules_prefix`, `menu_sorting`, `created_by`, `created_time`, `modified_by`, `modified_time`, `status`) VALUES
(2, 1, 'Create Menu', 'menu', '', '2', 0, 1, '2016-05-31 03:13:31', 0, '0000-00-00 00:00:00', 2),
(3, 2, 'Menu List', 'menu', '', '', 1, 0, '2016-06-02 11:22:16', 0, '0000-00-00 00:00:00', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `admin_menu`
--
ALTER TABLE `admin_menu`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=30;
--
-- AUTO_INCREMENT for table `admin_menu`
--
ALTER TABLE `admin_menu`
  MODIFY `id` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
