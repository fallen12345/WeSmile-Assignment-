-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: fdb20.awardspace.net
-- Generation Time: Jul 23, 2020 at 03:23 PM
-- Server version: 5.7.20-log
-- PHP Version: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `3052600_calvin`
--

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `nick` varchar(255) NOT NULL,
  `feedback` varchar(255) NOT NULL,
  `date` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`nick`, `feedback`, `date`) VALUES
('Calvin', '5 Star', '2020-07-21'),
('Fallen', 'I love how simple this website are :D', '2020-07-21'),
('Ivan', 'A bit confusing', '2020-07-23'),
('Alvin', 'Try to implement more function', '2020-07-21'),
('Iron', '3.5 Star', '2020-07-21'),
('Steven Chong', 'Implement rating system', '2020-07-21'),
('Eva', 'I think the design is simple and can be enhanced', '2020-07-22'),
('Ragnar', 'I gave a 4.5 star for this website which help me on expressing my feelings ', '2020-07-22'),
('Simon', 'Poor function , Simple Design', '2020-07-30'),
('Chuchu', 'I love how u design the website, simple and straightforward', '2020-07-28'),
('Michael', '4 star', '2020-07-31'),
('Calvin123', '5 Star', '2020-07-23'),
('Calvin12', '5 Star', '2020-07-23');

-- --------------------------------------------------------

--
-- Table structure for table `graph`
--

CREATE TABLE `graph` (
  `id` int(11) NOT NULL,
  `month` varchar(255) NOT NULL,
  `population` int(11) NOT NULL,
  `year` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `graph`
--

INSERT INTO `graph` (`id`, `month`, `population`, `year`) VALUES
(1, 'Jan', 10000, 2019),
(2, 'Feb', 12000, 2019),
(3, 'March', 12250, 2019),
(4, 'April', 13070, 2019),
(5, 'May', 15500, 2019),
(6, 'June', 14200, 2019),
(7, 'July', 15110, 2019),
(8, 'August', 15710, 2019),
(9, 'Sep', 20500, 2019),
(10, 'Nov', 21150, 2019),
(12, 'Dec', 22650, 2019),
(13, 'Jan', 23000, 2020),
(14, 'Feb', 25000, 2020),
(15, 'March', 25500, 2020),
(16, 'April', 30000, 2020),
(17, 'May', 32220, 2020),
(18, 'June', 33000, 2020);

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(55) NOT NULL,
  `password` text NOT NULL,
  `signuptime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `username`, `email`, `password`, `signuptime`) VALUES
(1, 'calvin', 'calvin@hotmail.com', '202cb962ac59075b964b07152d234b70', '2020-07-11 16:02:34'),
(2, 'calvinlau12', 'calvinjun12@hotmail.com', '202cb962ac59075b964b07152d234b70', '2020-07-13 16:36:01'),
(3, 'calvinlau123', 'rekeroxd92@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '2020-07-13 16:50:30'),
(4, 'ivan12', 'lsblindmonk12@yahoo.com', '202cb962ac59075b964b07152d234b70', '2020-07-15 14:34:01'),
(5, 'stevenchong', 'madthresh12@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '2020-07-15 14:37:32'),
(6, 'calvin123', 'calvinjun123@hotmail.com', '202cb962ac59075b964b07152d234b70', '2020-07-20 09:46:00'),
(7, 'calvinjun12', 'calvinpro99@hotmail.com', '202cb962ac59075b964b07152d234b70', '2020-07-22 10:20:26'),
(12, 'calvin12345', 'calvin33@hotmail.com', '202cb962ac59075b964b07152d234b70', '2020-07-23 14:35:18'),
(13, 'calvin12', 'calvin23@hotmail.com', '202cb962ac59075b964b07152d234b70', '2020-07-23 14:37:43');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_story`
--

CREATE TABLE `tbl_story` (
  `story_id` int(11) NOT NULL,
  `parent_story_id` int(11) NOT NULL,
  `story` varchar(255) NOT NULL,
  `story_sender_name` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_story`
--

INSERT INTO `tbl_story` (`story_id`, `parent_story_id`, `story`, `story_sender_name`, `date`) VALUES
(1, 0, 'Hello, This is WeSmile\'s Creator', 'Calvin', '2020-07-21 01:30:00'),
(2, 1, 'Hello there ...', 'Steven', '2020-07-21 01:30:10'),
(3, 1, 'Simple Website ', 'Alvin', '2020-07-21 01:30:31'),
(4, 2, 'Hi', 'Calvin', '2020-07-21 01:30:46'),
(5, 0, 'I have big news today , based on my research, we have figured out a cure for corona.', 'Alpha', '2020-07-21 01:31:57'),
(6, 5, 'Really ? !!!', 'Ava', '2020-07-21 01:32:12'),
(8, 6, 'Yes, Ava', 'Alpha', '2020-07-21 01:33:00'),
(14, 0, 'Hello', 'Calvin', '2020-07-23 14:38:31'),
(15, 14, 'Hello Calvin', 'Ben', '2020-07-23 14:38:52'),
(16, 15, 'Hello Ben', 'Susan', '2020-07-23 14:39:08');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `graph`
--
ALTER TABLE `graph`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_story`
--
ALTER TABLE `tbl_story`
  ADD PRIMARY KEY (`story_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `graph`
--
ALTER TABLE `graph`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `tbl_story`
--
ALTER TABLE `tbl_story`
  MODIFY `story_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
