-- phpMyAdmin SQL Dump
-- version 4.2.7
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Apr 25, 2016 at 04:36 PM
-- Server version: 5.5.41-log
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `bpf`
--

-- --------------------------------------------------------

--
-- Table structure for table `band`
--

CREATE TABLE IF NOT EXISTS `band` (
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
`id` int(11) NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hour` time NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci AUTO_INCREMENT=17 ;

--
-- Dumping data for table `band`
--

INSERT INTO `band` (`name`, `description`, `date`, `id`, `img`, `hour`) VALUES
('Dai Sellers', 'Commodo pariatur Possimus cupidatat veniam eiusmod', 'samedi', 12, 'pictures/acc.png', '12:49:00'),
('Yasir Benton', 'Consequuntur sed reprehenderit consequatur maxime exercitationem dolor et tempore eum nulla voluptatem libero culpa deserunt aut in ut impedit sint', 'vendredi', 13, 'pictures/Album-2.jpg', '22:22:00'),
('Ronan Morgan', 'Vel accusantium nisi est ea et enim dolor quis ullamco ex', 'vendredi', 14, 'pictures/ann.png', '12:12:00'),
('Uriel Castillo', 'Necessitatibus est saepe sapiente voluptatem Est ipsam aut doloribus eum incididunt inventore ut nulla aspernatur', 'samedi', 15, 'pictures/97f9f0ea (2).png', '16:48:00'),
('Henry Trevino', 'Sunt ipsam dolor enim libero magnam enim eos aut fugiat provident vero possimus enim molestiae minim adipisci', 'samedi', 16, 'pictures/800px-Tree_of_life_by_Haeckel.jpg', '15:31:00');

-- --------------------------------------------------------

--
-- Table structure for table `media`
--

CREATE TABLE IF NOT EXISTS `media` (
  `band` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `media` text COLLATE utf8mb4_unicode_ci NOT NULL,
`id` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci AUTO_INCREMENT=4 ;

--
-- Dumping data for table `media`
--

INSERT INTO `media` (`band`, `type`, `media`, `id`) VALUES
('4', '2', '<iframe width="100%" height="450" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/playlists/153889359&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false&amp;visual=true"></iframe>', 1),
('1', '1', '<iframe width="560" height="315" src="https://www.youtube.com/embed/z7ETJxw-kBM?list=PL1mLWBwR-P2tKMdIHAFbQ2vdpCmopUopn" frameborder="0" allowfullscreen></iframe>', 3);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `media` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` text COLLATE utf8mb4_unicode_ci NOT NULL,
`id` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci AUTO_INCREMENT=6 ;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`title`, `content`, `type`, `media`, `img`, `id`) VALUES
('PremiÃ¨re news', 'Nous sommes fiers de vous dire que le prÃ©sident de la glorieuse FÃ©dÃ©ration Russe sera prÃ©sent Ã  notre festival !', '1', '<iframe width="420" height="315" src="https://www.youtube.com/embed/F6uyxYNIttg" frameborder="0" allowfullscreen></iframe>', '', 1),
('DeuxiÃ¨me news', 'BKJAZBKEHABZKEHKZJHEKAJEKJANBZJEAZJEBKABEKAZEKJBEKJ KJAZKEJBAKBEKA KZABKEBAZE', '0', '', '', 2),
('TroisiÃ¨me news', 'azebkabzekjabze azkjbekajbek zaekjbzajeb nbazjebkabeke', '3', '', 'pictures/11949265_10203575566429471_1140556735131660720_n.jpg', 3),
('Ex cillum id laboriosam culpa rerum voluptate porro voluptatem', 'Reprehenderit quis voluptas sapiente rerum eaque labore', '1', 'Et dolor vero praesentium sint exercitation et dolore voluptate quis eum possimus minim harum maiores consequatur', '', 4),
('Nisi duis doloremque in in accusamus', 'Esse rerum do aliquam et suscipit illo velit mollitia aliquip temporibus enim sed sapiente ex minima doloremque dicta eligendi expedita', '0', '', '', 5);

-- --------------------------------------------------------

--
-- Table structure for table `newsletter`
--

CREATE TABLE IF NOT EXISTS `newsletter` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
`id` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci AUTO_INCREMENT=3 ;

--
-- Dumping data for table `newsletter`
--

INSERT INTO `newsletter` (`email`, `id`) VALUES
('Nicolas-g7@hotmail.fr', 1),
('nicolasgauvin7@gmail.com', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `band`
--
ALTER TABLE `band`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `media`
--
ALTER TABLE `media`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `newsletter`
--
ALTER TABLE `newsletter`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `band`
--
ALTER TABLE `band`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `media`
--
ALTER TABLE `media`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `newsletter`
--
ALTER TABLE `newsletter`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
