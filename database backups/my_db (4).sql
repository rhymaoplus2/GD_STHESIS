-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 13, 2023 at 09:08 AM
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
  `teacher` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `grade`
--

INSERT INTO `grade` (`id`, `subjectname`, `grade`, `studentid`, `teacher`) VALUES
(98, 'ENGLISH', 75, 0, 'admin'),
(99, 'ENGLISH', 75, 56, 'admin');

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
  `subject` int(255) NOT NULL,
  `g` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `lrnnumber`, `firstname`, `middlename`, `lastname`, `suffix`, `gender`, `birthplace`, `birthday`, `age`, `address`, `parent`, `adviser_id`, `schoolyear`, `grade`, `section`, `subject`, `g`) VALUES
(0, 21312, 'Test', 'Test', 'Test', 'Sr.', 'Male', 'Sto. Nino', '2023-01-20', 21, 'mbjk', 'Test', 'admin', '2022-2023', 7, 'Lilac', 0, 0),
(56, 133, 'Reyris', 'Perolino', 'Milmao', '', 'Male', 'Sto. Nino', '2023-08-17', 21, 'Reynato Milmao', 'Sto. Nino Kolambugan', 'admin', '2023-2024', 10, 'Lilac', 0, 0);

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
(1, 1, 'ENGLISH', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `advisory` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`id`, `username`, `name`, `advisory`) VALUES
(1, 'admin', 'admin', 1),
(2, 'yawa', 'yawa', 0);

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
  `role` enum('admin','subjectteacher','adviser') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `name`, `advisory`, `subjectid`, `role`) VALUES
('admin', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin', 1, 5, 'admin'),
('yawa', 'yawa', '21232f297a57a5a743894a0e4a801fc3\r\n', 'yawa', 0, 5, 'adviser');

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
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jjds` (`adviser_id`),
  ADD KEY `bm` (`schoolyear`);

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
  ADD PRIMARY KEY (`id`),
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100;

--
-- AUTO_INCREMENT for table `teacher`
--
ALTER TABLE `teacher`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `grade`
--
ALTER TABLE `grade`
  ADD CONSTRAINT `test` FOREIGN KEY (`teacher`) REFERENCES `users` (`id`);

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
-- Constraints for table `teacher`
--
ALTER TABLE `teacher`
  ADD CONSTRAINT `teacher` FOREIGN KEY (`username`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `advisory` FOREIGN KEY (`advisory`) REFERENCES `teacher` (`advisory`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
