-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 14, 2023 at 08:28 AM
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
  `grade` int(11) NOT NULL,
  `studentid` int(255) NOT NULL,
  `teacher` varchar(255) NOT NULL,
  `studentname` varchar(255) NOT NULL,
  `section` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `grade`
--

INSERT INTO `grade` (`id`, `subjectname`, `grade`, `studentid`, `teacher`, `studentname`, `section`) VALUES
(113, 'ENGLISH', 88, 0, '', 'Avril Ramorna Lavigne', '');

-- --------------------------------------------------------

--
-- Table structure for table `section`
--

CREATE TABLE `section` (
  `id` int(11) NOT NULL,
  `section` varchar(255) NOT NULL,
  `teacherid` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(255) NOT NULL,
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
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `lrnnumber`, `firstname`, `middlename`, `lastname`, `fullname`, `suffix`, `gender`, `birthplace`, `birthday`, `age`, `address`, `parent`, `adviser_id`, `schoolyear`, `grade`, `section`, `st1`, `st2`, `st3`, `st4`, `st5`, `st6`, `st7`, `st8`, `st9`, `st10`) VALUES
(8, 631233931, 'Avril', 'Ramorna', 'Lavigne', 'Avril Ramorna Lavigne', 'Jr.', 'Female', 'Canada', '2023-01-13', 38, 'Reynato Milmao', 'Sto. Nino Kolambugan', 'admin', '2022-2023', 7, 'Lilac', 'yawa', 'yawa', 'admin', '0', '0', '0', '0', '0', 'admin', '0'),
(127, 17, 'Reyris Gwapo', 'Perolino', 'Milmao', 'Milmao Reyris Perolino', '', 'Male', 'Sto. Nino', '2023-01-13', 22, 'Reynato Milmao', 'Sto. Nino Kolambugan', 'admin', '2023-2024', 7, 'Rose', 'yawa', '', '', '0', '0', '0', '0', '0', '0', '0');

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE `subjects` (
  `subjectid` int(11) NOT NULL,
  `id` int(255) NOT NULL,
  `subjectname` varchar(255) NOT NULL,
  `teacherid` varchar(255) NOT NULL,
  `subjectgrouphead` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`subjectid`, `id`, `subjectname`, `teacherid`, `subjectgrouphead`) VALUES
(1, 1, 'ENGLISH', 'admin', 'admin'),
(2, 0, 'FILIPINO', 'admin', 'admin'),
(2, 0, 'MAth', 'yawa', 'admin');

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
('admin', 'admin', '21232f297a57a5a743894a0e4a801fc3\r\n', 'admin', 1, '', '', '', '', '', '', '', '', '', ''),
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
  `advisory` int(11) NOT NULL,
  `subjectid` int(255) NOT NULL,
  `role` enum('admin','subjectteacher','adviser') NOT NULL,
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
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `name`, `advisory`, `subjectid`, `role`, `st1`, `st2`, `st3`, `st4`, `st5`, `st6`, `st7`, `st8`, `st9`, `st10`) VALUES
('admin', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin', 1, 5, 'admin', 'admin', '', '', '', '', '', '', '', '', ''),
('yawa', 'yawa', '21232f297a57a5a743894a0e4a801fc3\r\n', 'yawa', 0, 5, 'adviser', '', '', '', '', '', '', '', '', '', '');

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
  ADD PRIMARY KEY (`id`,`grade`),
  ADD KEY `student` (`studentid`),
  ADD KEY `subject` (`subjectname`),
  ADD KEY `test` (`teacher`);

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
  ADD PRIMARY KEY (`id`),
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=114;

--
-- AUTO_INCREMENT for table `section`
--
ALTER TABLE `section`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `students`
--
ALTER TABLE `students`
  ADD CONSTRAINT `jjds` FOREIGN KEY (`adviser_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `subjects`
--
ALTER TABLE `subjects`
  ADD CONSTRAINT `bn` FOREIGN KEY (`subjectgrouphead`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `s` FOREIGN KEY (`teacherid`) REFERENCES `teacher` (`username`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `advisory` FOREIGN KEY (`advisory`) REFERENCES `teacher` (`advisory`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
