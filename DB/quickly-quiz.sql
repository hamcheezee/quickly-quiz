-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 28, 2022 at 12:47 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `quickly-quiz`
--

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `qid` int(11) NOT NULL,
  `qtype` varchar(225) NOT NULL,
  `qamount` int(11) NOT NULL,
  `question` text CHARACTER SET latin1 NOT NULL,
  `qno` int(11) NOT NULL,
  `ans1` text CHARACTER SET latin1 NOT NULL,
  `ans2` text CHARACTER SET latin1 NOT NULL,
  `ans3` text CHARACTER SET latin1 NOT NULL,
  `ans4` text CHARACTER SET latin1 NOT NULL,
  `correct_answer` varchar(1) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`qid`, `qtype`, `qamount`, `question`, `qno`, `ans1`, `ans2`, `ans3`, `ans4`, `correct_answer`) VALUES
(1, 'choices', 5, 'What does PHP stand for?', 4, 'Personal Hypertext Processor', 'Private Home Page', 'Personal Home Page', 'Hypertext Preprocessor', 'd'),
(2, 'choices', 5, 'How do you write &quot;Hello World&quot; in PHP?', 4, 'echo &quot;Hello World&quot;;', 'Document.Write(&quot;Hello World&quot;);', '&quot;Hello World&quot;;', 'none of these', 'a');

-- --------------------------------------------------------

--
-- Table structure for table `quizzes`
--

CREATE TABLE `quizzes` (
  `qno` int(100) NOT NULL,
  `qname` varchar(225) NOT NULL,
  `type` varchar(225) NOT NULL,
  `amount` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(11) NOT NULL,
  `email` varchar(225) NOT NULL,
  `played_on` varchar(225) NOT NULL,
  `score` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `email`, `played_on`, `score`) VALUES
(68, 'admin@gmail.com', '2022-08-31 05:01:43', 0),
(70, 'anirban@gmail.com', '2022-08-31 05:58:32', 3),
(72, 'local@gmail.com', '2022-08-31 06:01:27', 3),
(74, 'vishal@gmail.com', '2022-08-31 06:35:35', 6),
(75, 'dfgh@fgg.nn', '2022-08-31 06:43:01', 0),
(76, 'john@gmail.com', '2022-08-31 06:51:41', 1),
(77, 'root@gmail.com', '2022-08-31 06:52:09', 1),
(78, 'hemart@vv.com', '2022-08-31 06:52:45', 0),
(79, 'rupesh@dffd.cvvc', '2022-08-31 06:53:37', 5),
(80, 'hello@gmail.com', '2022-10-03 18:21:10', 5);

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE `subjects` (
  `snum` int(11) NOT NULL,
  `sname` varchar(100) NOT NULL,
  `sdescription` varchar(225) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`snum`, `sname`, `sdescription`) VALUES
(1, 'CS266', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`qid`);

--
-- Indexes for table `quizzes`
--
ALTER TABLE `quizzes`
  ADD PRIMARY KEY (`qno`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subjects`
--
ALTER TABLE `subjects`
  ADD PRIMARY KEY (`snum`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `qid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `quizzes`
--
ALTER TABLE `quizzes`
  MODIFY `qno` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;

--
-- AUTO_INCREMENT for table `subjects`
--
ALTER TABLE `subjects`
  MODIFY `snum` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
