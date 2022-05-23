-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 23, 2022 at 06:04 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mvc`
--

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(128) NOT NULL,
  `phone` varchar(64) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `location` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `phone`, `email`, `location`) VALUES
(1, 'Leanne Graham', '1-770-736-8031 x56442', 'Sincere@april.biz', 'Gwenborough'),
(2, 'Ervin Howell', '010-692-6593 x09125', 'Shanna@melissa.tv', 'Wisokyburgh'),
(3, 'Clementine Bauch', '1-463-123-4447', 'Nathan@yesenia.net', 'McKenziehaven'),
(4, 'Patricia Lebsack', '493-170-9623 x156', 'Julianne.OConner@kory.org', 'South Elvis'),
(5, 'Chelsey Dietrich', '(254)954-1289', 'Lucio_Hettinger@annie.ca', 'Roscoeview'),
(16, 'Thijs Rietveld', '0640679085', 'thijs0302@gmail.com', 'beurreperenlaan 22'),
(21, 'Thijs Rietveld', '0640679085', 'thijs0302@gmail.com', 'beurreperenlaan 22'),
(22, 'Thijs Rietveld', '0640679085', 'thijs0302@gmail.com', 'beurreperenlaan 22'),
(23, 'Thijs Rietveld', '0640679085', 'thijs0302@gmail.com', 'beurreperenlaan 22'),
(24, 'Thijs Rietveld', '0640679085', 'thijs0302@gmail.com', 'beurreperenlaan 22'),
(25, 'Thijs Rietveld', '0640679085', 'thijs0302@gmail.com', 'beurreperenlaan 22'),
(26, 'Thijs Rietveld', '0640679085', 'thijs0302@gmail.com', 'beurreperenlaan 22');

-- --------------------------------------------------------

--
-- Table structure for table `content`
--

CREATE TABLE `content` (
  `id` int(11) NOT NULL,
  `auteur` varchar(64) DEFAULT NULL,
  `titel` varchar(64) DEFAULT NULL,
  `images` varchar(64) DEFAULT NULL,
  `content` mediumtext DEFAULT NULL,
  `social` varchar(255) DEFAULT NULL,
  `datum` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `content`
--

INSERT INTO `content` (`id`, `auteur`, `titel`, `images`, `content`, `social`, `datum`) VALUES
(1, 'George RR Martin', 'Game of thrones', '', 'Bran attends the execution of Gared, who ran away after Will and Waymar died but was caught and condemned as a deserter. Ned Stark, the Lord of Winterfell, performs the execution himself, using the greatsword Ice to behead Gared. Robb Stark argues that Gared died bravely, while Jon Snow, Ned’s bastard son, believes that Gared was terrified. Ned explains to Bran that a man can only truly be brave when he is in fact afraid. Ned also explains his belief that the man who passes a death sentence ought to perform the execution himself. On the ride back to Winterfell, home of the Stark family, the party discovers a dead direwolf with five live pups. Ned’s men are about to kill the animals when Jon points out that the pups are the same in number and gender, three male and two female, as Ned’s trueborn children. He says it’s a sign that the Starks were meant to have them. As the party rides away, Jon discovers a sixth male pup with white fur and red eyes and takes it for himself.', 'https://twitter.com/GRRMspeaking?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor', '0000-00-00 00:00:00'),
(2, 'George rr martin', 'A game of thrones', NULL, 'Bran attends the execution of Gared, who ran away after Will and Waymar died but was caught and condemned as a deserter. Ned Stark, the Lord of Winterfell, performs the execution himself, using the greatsword Ice to behead Gared. Robb Stark argues that Gared died bravely, while Jon Snow, Ned’s bastard son, believes that Gared was terrified. Ned explains to Bran that a man can only truly be brave when he is in fact afraid. Ned also explains his belief that the man who passes a death sentence ought to perform the execution himself. On the ride back to Winterfell, home of the Stark family, the party discovers a dead direwolf with five live pups. Ned’s men are about to kill the animals when Jon points out that the pups are the same in number and gender, three male and two female, as Ned’s trueborn children. He says it’s a sign that the Starks were meant to have them. As the party rides away, Jon discovers a sixth male pup with white fur and red eyes and takes it for himself.', 'https://twitter.com/GRRMspeaking?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor', '2022-05-23 16:20:32');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `content`
--
ALTER TABLE `content`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `content`
--
ALTER TABLE `content`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
