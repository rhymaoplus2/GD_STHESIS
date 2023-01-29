-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 29, 2023 at 01:11 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `my_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `grade`
--

CREATE TABLE `grade` (
  `id` int(11) NOT NULL,
  `subjectname` varchar(255) NOT NULL,
  `grade` int(255) NOT NULL,
  `studentname` varchar(255) NOT NULL,
  `teacher` varchar(255) NOT NULL,
  `section` varchar(255) NOT NULL,
  `adviser` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `grade`
--

INSERT INTO `grade` (`id`, `subjectname`, `grade`, `studentname`, `teacher`, `section`, `adviser`) VALUES
(425, 'ENGLISH', 66, 'Reyris Reyris Reyris', 'haziel', 'Lilac', 'teacher'),
(428, 'ENGLISH', 50, 'roi Perolino Milmao', 'haziel', 'Lilac', 'teacher');

-- --------------------------------------------------------

--
-- Table structure for table `number`
--

CREATE TABLE `number` (
  `grade` int(21) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `section`
--

CREATE TABLE `section` (
  `id` int(11) NOT NULL,
  `section` varchar(255) NOT NULL,
  `subjectteacher` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `section`
--

INSERT INTO `section` (`id`, `section`, `subjectteacher`) VALUES
(1, 'Lilac', 'admin'),
(2, 'none', 'none');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(255) NOT NULL,
  `idnumber` int(255) NOT NULL,
  `lrnnumber` int(11) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `middlename` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `suffix` varchar(3) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `birthplace` varchar(250) NOT NULL,
  `birthday` varchar(100) NOT NULL,
  `age` int(11) NOT NULL,
  `address` varchar(250) NOT NULL,
  `parent` varchar(250) NOT NULL,
  `adviser_id` varchar(255) NOT NULL,
  `schoolyear` varchar(255) NOT NULL,
  `grade` int(11) NOT NULL,
  `section` varchar(255) NOT NULL,
  `subjectteacher1` varchar(255) NOT NULL,
  `subt2` varchar(255) NOT NULL,
  `subject1` varchar(255) NOT NULL,
  `subject2` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `idnumber`, `lrnnumber`, `firstname`, `middlename`, `lastname`, `fullname`, `suffix`, `gender`, `birthplace`, `birthday`, `age`, `address`, `parent`, `adviser_id`, `schoolyear`, `grade`, `section`, `subjectteacher1`, `subt2`, `subject1`, `subject2`) VALUES
(8, 666, 666, 'YAWAe', 'Perolino', 'Milmao', 'YAWAe', 'Jr.', 'Male', 'test', '2023-01-06', 226, 'mbjk', 'Sto. Nino Kolambugan', 'haziel', 'ada', 7, 'Lilac', '', '', '', ''),
(2147483647, 0, 172772, 'BEBEa', 'Oh Yeah', 'Test', 'roi Perolino Milmao', '', 'Male', 'jsdvd', '2023-01-26', 7, 'gjg', 'Test', 'teacher', '2022-2023', 7, 'Lilac', 'haziel', '', 'ENGLISH', '');

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE `subjects` (
  `subjectid` int(11) NOT NULL,
  `id` int(255) NOT NULL,
  `subjectname` varchar(255) NOT NULL,
  `teacherid` varchar(255) NOT NULL,
  `subjectgrouphead` varchar(255) NOT NULL,
  `section` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`subjectid`, `id`, `subjectname`, `teacherid`, `subjectgrouphead`, `section`) VALUES
(11, 0, 'ENGLISH', 'teacher', 'teacher', 'Lilac'),
(12, 0, 'ENGLISH', 'haziel', 'teacher', 'Lilac'),
(13, 0, 'MATH', 'haziel', 'admin', 'Lilac');

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `id` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `advisory` int(11) NOT NULL,
  `st1` varchar(255) NOT NULL,
  `st2` varchar(255) NOT NULL,
  `st3` varchar(255) NOT NULL,
  `st4` varchar(255) NOT NULL,
  `st5` varchar(255) NOT NULL,
  `st6` varchar(255) NOT NULL,
  `st7` varchar(255) NOT NULL,
  `st8` varchar(255) NOT NULL,
  `st9` varchar(255) NOT NULL,
  `st10` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`id`, `username`, `password`, `name`, `advisory`, `st1`, `st2`, `st3`, `st4`, `st5`, `st6`, `st7`, `st8`, `st9`, `st10`) VALUES
('admin', 'admin', '21232f297a57a5a743894a0e4a801fc3\r\n', 'Reyris Milmao', 1, 'ENGLISH', '', '', '', '', '', '', '', '', ''),
('yawa', 'yawa', '21232f297a57a5a743894a0e4a801fc3', 'yawa', 0, '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `advisory` varchar(255) NOT NULL,
  `subjectid` int(255) NOT NULL,
  `role` enum('admin','subjectteacher','adviser') NOT NULL,
  `sub1` varchar(255) NOT NULL,
  `sub2` varchar(255) NOT NULL,
  `st1` varchar(255) NOT NULL,
  `sgh1` varchar(255) NOT NULL,
  `sgh2` varchar(255) NOT NULL,
  `sec1` varchar(255) NOT NULL,
  `sec2` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `name`, `advisory`, `subjectid`, `role`, `sub1`, `sub2`, `st1`, `sgh1`, `sgh2`, `sec1`, `sec2`) VALUES
('', 'none', '', '', '', 0, '', '', '', '', '', '', 'none', ''),
('1', 'dsd', 'admin', 'udhqud', '', 0, 'admin', '', '', 'admin', '', '', 'none', ''),
('2', 'admin', 'admin', '', '', 0, 'admin', '', '', 'admin', '', '', 'none', ''),
('admin', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'Reyris Milmao', '0', 0, 'admin', '', '', '', '', '', 'none', ''),
('adviser', 'adviser', '7e58d63b60197ceb55a1c487989a3720', 'user2', '0', 0, 'adviser', '', '', 'teacher', '', '', 'none', ''),
('haziel', 'haziel', '624b49bc7e4df07fd83d5be1b032a315', 'Haziel', 'Lilac', 0, 'admin', 'ENGLISH', '', 'admin', 'teacher', 'teacher', 'Lilac', ''),
('teacher', 'teacher', '21232f297a57a5a743894a0e4a801fc3', 'teacher', 'Lilac', 5, 'subjectteacher', 'PROGRAMMING', 'ENGLISH', '', 'teacher', '', 'none', ''),
('teacher2', 'teacher2', '92877af70a45fd6a2ed7fe81e1236b78', '', '0', 0, 'subjectteacher', '', '', '', '', '', 'none', '');

-- --------------------------------------------------------

--
-- Table structure for table `year`
--

CREATE TABLE `year` (
  `year` varchar(255) NOT NULL,
  `syear` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `year`
--

INSERT INTO `year` (`year`, `syear`) VALUES
('2022-2023', '2022-2023');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `grade`
--
ALTER TABLE `grade`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `section`
--
ALTER TABLE `section`
  ADD PRIMARY KEY (`id`,`section`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`,`firstname`,`fullname`,`lastname`) USING BTREE,
  ADD KEY `bm` (`schoolyear`),
  ADD KEY `jjds` (`adviser_id`);

--
-- Indexes for table `subjects`
--
ALTER TABLE `subjects`
  ADD PRIMARY KEY (`subjectid`,`id`,`subjectname`),
  ADD KEY `bn` (`subjectgrouphead`),
  ADD KEY `s` (`teacherid`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`id`,`username`),
  ADD KEY `test` (`name`),
  ADD KEY `one` (`advisory`),
  ADD KEY `teacher` (`username`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`,`username`),
  ADD KEY `advisory` (`advisory`);

--
-- Indexes for table `year`
--
ALTER TABLE `year`
  ADD PRIMARY KEY (`syear`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `grade`
--
ALTER TABLE `grade`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=429;

--
-- AUTO_INCREMENT for table `section`
--
ALTER TABLE `section`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2147483648;

--
-- AUTO_INCREMENT for table `subjects`
--
ALTER TABLE `subjects`
  MODIFY `subjectid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
