-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 26, 2021 at 05:22 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `emoji_ratings`
--

-- --------------------------------------------------------

--
-- Table structure for table `emoji_product`
--

CREATE TABLE `emoji_product` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `price` int(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `emoji_product`
--

INSERT INTO `emoji_product` (`id`, `name`, `description`, `price`, `image`) VALUES
(1, 'spaghetti', '<ul style=\"margin:0px;padding:15px;\">\r\n					<li>Lorem ipsum</li>\r\n					<li>Lorem ipsum</li>\r\n				<li>Lorem ipsum</li>\r\n			</ul>	', 85, 'spag.jpg'),
(2, 'fried chicken', '<ul style=\"margin:0px;padding:15px;\">\r\n					<li>Lorem ipsum</li>\r\n					<li>Lorem ipsum</li>\r\n				<li>Lorem ipsum</li>\r\n			</ul>	', 110, 'fried.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `emoji_rating`
--

CREATE TABLE `emoji_rating` (
  `id` int(11) NOT NULL,
  `product_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `emoji` varchar(255) DEFAULT NULL,
  `comment` varchar(255) DEFAULT NULL,
  `name_commentor` varchar(255) DEFAULT NULL,
  `product` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `emoji_rating`
--

INSERT INTO `emoji_rating` (`id`, `product_id`, `user_id`, `emoji`, `comment`, `name_commentor`, `product`) VALUES
(1, NULL, NULL, 'good', NULL, 'zane', 'spaghetti'),
(2, NULL, NULL, 'neutral', NULL, 'zane', 'Fried Chicken'),
(3, NULL, NULL, 'bad', NULL, 'zane', 'spaghetti'),
(4, NULL, NULL, 'bad', NULL, 'zane', 'spaghetti');

-- --------------------------------------------------------

--
-- Table structure for table `emoji_users`
--

CREATE TABLE `emoji_users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `access` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `emoji_users`
--

INSERT INTO `emoji_users` (`id`, `username`, `password`, `access`) VALUES
(5, 'admin@yahoo.com', 'admin1', 'administrator'),
(7, 'ashantie_02@yahoo.com', '1234567890', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `image_url` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `image_url`) VALUES
(8, 'IMG-5f8954bd209a92.78214246.jpg'),
(9, 'IMG-5f8954caa02539.76436861.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `service_ratings`
--

CREATE TABLE `service_ratings` (
  `id` int(11) NOT NULL,
  `name_service` varchar(255) NOT NULL,
  `comment_service` varchar(255) NOT NULL,
  `ratings` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `service_ratings`
--

INSERT INTO `service_ratings` (`id`, `name_service`, `comment_service`, `ratings`) VALUES
(1, 'zane', 'pessimistic impartial pragmatic productive', 'positive'),
(2, 'zane', 'cynical cynical cynical cynical open-minded open-minded open-minded open-minded open-minded', 'neutral'),
(3, '', 'pessimistic pessimistic pessimistic pessimistic pessimistic pessimistic pessimistic practical practical practical', 'negative');

-- --------------------------------------------------------

--
-- Table structure for table `synonyms_table`
--

CREATE TABLE `synonyms_table` (
  `id` int(11) NOT NULL,
  `synonyms` varchar(255) NOT NULL,
  `ratings` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `synonyms_table`
--

INSERT INTO `synonyms_table` (`id`, `synonyms`, `ratings`) VALUES
(1, 'constructive                                                                ', 'positive'),
(2, 'practical', 'positive'),
(3, 'useful', 'positive'),
(4, 'pragmatic', 'positive'),
(5, 'productive', 'positive'),
(6, 'helpful', 'positive'),
(7, 'worthwhile', 'positive'),
(8, 'beneficial', 'positive'),
(9, 'effective', 'positive'),
(10, 'efficacious', 'positive'),
(11, 'optimistic', 'positive'),
(12, 'hopeful', 'positive'),
(13, 'confident', 'positive'),
(14, 'forward-looking', 'positive'),
(15, 'cheerful', 'positive'),
(16, 'sanguine', 'positive'),
(17, 'buoyant', 'positive'),
(18, 'assured', 'positive'),
(19, 'upbeat', 'positive'),
(20, 'favorable', 'positive'),
(21, 'good', 'positive'),
(22, 'pleasing', 'positive'),
(23, 'welcome', 'positive'),
(24, 'promising', 'positive'),
(25, 'encouraging', 'positive'),
(26, 'heartening', 'positive'),
(27, 'propitious', 'positive'),
(28, 'auspicious', 'positive'),
(29, 'definite', 'positive'),
(30, 'conclusive', 'positive'),
(31, 'certain', 'positive'),
(32, 'categorical', 'positive'),
(33, 'unequivocal', 'positive'),
(34, 'incontrovertible', 'positive'),
(35, 'indisputable', 'positive'),
(36, 'undeniable', 'positive'),
(37, 'incontestable', 'positive'),
(38, 'unmistakable', 'positive'),
(39, 'unambiguous', 'positive'),
(40, 'indubitable', 'positive'),
(41, 'unquestionable', 'positive'),
(42, 'irrefutable', 'positive'),
(43, 'beyond question', 'positive'),
(44, 'beyond a doubt', 'positive'),
(45, 'absolute', 'positive'),
(46, 'reliable', 'positive'),
(47, 'persuasive', 'positive'),
(48, 'convincing', 'positive'),
(49, 'concrete', 'positive'),
(50, 'tangible', 'positive'),
(51, 'clear', 'positive'),
(52, 'clear-cut', 'positive'),
(53, 'precise', 'positive'),
(54, 'direct', 'positive'),
(55, 'explicit', 'positive'),
(56, 'express', 'positive'),
(57, 'firm', 'positive'),
(58, 'decisive', 'positive'),
(59, 'real', 'positive'),
(60, 'pessimistic', 'negative'),
(61, 'defeatist', 'negative'),
(62, 'gloomy', 'negative'),
(63, 'gloom-ridden', 'negative'),
(64, 'cynical', 'negative'),
(65, 'bleak', 'negative'),
(66, 'fatalistic', 'negative'),
(67, 'dismissive', 'negative'),
(68, 'anti', 'negative'),
(69, 'antipathetic', 'negative'),
(70, 'uncooperative', 'negative'),
(71, 'obstructive', 'negative'),
(72, 'unenthusiastic', 'negative'),
(73, 'no', 'negative'),
(74, 'refusal', 'negative'),
(75, 'rejection', 'negative'),
(76, 'veto', 'negative'),
(77, 'dissension', 'negative'),
(78, 'contradiction', 'negative'),
(79, 'denial', 'negative'),
(80, 'reject', 'negative'),
(81, 'turn down', 'negative'),
(82, 'say ?no? to', 'negative'),
(83, 'refuse', 'negative'),
(84, 'veto', 'negative'),
(85, 'squash', 'negative'),
(86, 'give the thumbs down to', 'negative'),
(87, 'give the red light to', 'negative'),
(88, 'nullify', 'negative'),
(89, 'negate', 'negative'),
(90, 'render ineffective', 'negative'),
(91, 'offset', 'negative'),
(92, 'cancel out', 'negative'),
(93, 'impartial', 'neutral'),
(94, 'unbiased', 'neutral'),
(95, 'unprejudiced', 'neutral'),
(96, 'objective', 'neutral'),
(97, 'without favoritism', 'neutral'),
(98, 'open-minded', 'neutral'),
(99, 'nonpartisan', 'neutral'),
(100, 'nondiscriminatory', 'neutral'),
(101, 'disinterested', 'neutral'),
(102, 'even-handed', 'neutral'),
(103, 'equitable', 'neutral'),
(104, 'fair', 'neutral'),
(105, 'fair-minded', 'neutral'),
(106, 'dispassionate', 'neutral'),
(107, 'detached', 'neutral'),
(108, 'impersonal', 'neutral'),
(109, 'unemotional', 'neutral'),
(110, 'clinical', 'neutral'),
(111, 'indifferent', 'neutral'),
(112, 'removed', 'neutral'),
(113, 'uninvolved', 'neutral'),
(114, 'uncommitted', 'neutral'),
(115, 'unaligned', 'neutral'),
(116, 'nonaligned', 'neutral'),
(117, 'unaffiliated', 'neutral'),
(118, 'unallied', 'neutral'),
(119, 'nonallied', 'neutral'),
(120, 'nonparticipating', 'neutral'),
(121, 'noninterventionist', 'neutral'),
(122, 'noncombatant', 'neutral'),
(123, 'nonbelligerent', 'neutral'),
(124, 'noncombative', 'neutral'),
(125, 'nonfighting', 'neutral'),
(126, 'inoffensive', 'neutral'),
(127, 'bland', 'neutral'),
(128, 'unobjectionable', 'neutral'),
(129, 'unexceptionable', 'neutral'),
(130, 'anodyne', 'neutral'),
(131, 'unremarkable', 'neutral'),
(132, 'ordinary', 'neutral'),
(133, 'commonplace', 'neutral'),
(134, 'run-of-the-mill', 'neutral'),
(135, 'everyday', 'neutral'),
(136, 'safe', 'neutral'),
(137, 'harmless', 'neutral'),
(138, 'innocuous', 'neutral');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `emoji_product`
--
ALTER TABLE `emoji_product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `emoji_rating`
--
ALTER TABLE `emoji_rating`
  ADD PRIMARY KEY (`id`),
  ADD KEY `emoji_rating_ibfk_1` (`product_id`),
  ADD KEY `emoji_rating_ibfk_2` (`user_id`);

--
-- Indexes for table `emoji_users`
--
ALTER TABLE `emoji_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service_ratings`
--
ALTER TABLE `service_ratings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `synonyms_table`
--
ALTER TABLE `synonyms_table`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `emoji_product`
--
ALTER TABLE `emoji_product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `emoji_rating`
--
ALTER TABLE `emoji_rating`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `emoji_users`
--
ALTER TABLE `emoji_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `service_ratings`
--
ALTER TABLE `service_ratings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `synonyms_table`
--
ALTER TABLE `synonyms_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=139;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `emoji_rating`
--
ALTER TABLE `emoji_rating`
  ADD CONSTRAINT `emoji_rating_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `emoji_product` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `emoji_rating_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `emoji_users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
