-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 23, 2023 at 11:16 AM
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
-- Table structure for table `cr`
--

CREATE TABLE `cr` (
  `id` int(11) NOT NULL,
  `crname` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cr`
--

INSERT INTO `cr` (`id`, `crname`) VALUES
(1, 'CLARISSA Y. HONCADA');

-- --------------------------------------------------------

--
-- Table structure for table `grade`
--

CREATE TABLE `grade` (
  `id` int(11) NOT NULL,
  `subjectname` varchar(255) NOT NULL,
  `grade` int(255) NOT NULL,
  `remarks` varchar(255) NOT NULL,
  `studentname` varchar(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `middlename` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `teacher` varchar(255) NOT NULL,
  `section` varchar(255) NOT NULL,
  `adviser` varchar(255) NOT NULL,
  `quarter` varchar(255) NOT NULL,
  `semester` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `grade`
--

INSERT INTO `grade` (`id`, `subjectname`, `grade`, `remarks`, `studentname`, `firstname`, `middlename`, `lastname`, `gender`, `teacher`, `section`, `adviser`, `quarter`, `semester`) VALUES
(501, 'ENGLISH', 65, 'FAILED', 'Finn H. Doria', 'Finn', 'Heriih', 'Doria', 'Female', 'Glitz Wyn Sobisol', 'Lilac', 'teacher', '', ''),
(502, 'ENGLISH', 55, 'FAILED', 'Shawn Perolino Mendes', 'Shawn', 'Perolino', 'Mendes', 'MALE', 'Glitz Wyn Sobisol', 'LILAC', 'teacher', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `number`
--

CREATE TABLE `number` (
  `grade` int(21) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `principal`
--

CREATE TABLE `principal` (
  `id` int(11) NOT NULL,
  `pname` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `principal`
--

INSERT INTO `principal` (`id`, `pname`) VALUES
(1, 'KAREN GAY P. DY, PhD.');

-- --------------------------------------------------------

--
-- Table structure for table `section`
--

CREATE TABLE `section` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `adviser` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `section`
--

INSERT INTO `section` (`id`, `name`, `adviser`) VALUES
(2, 'Lilac', 'admin'),
(3, 'Rose', '');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(255) NOT NULL,
  `idnumber` varchar(255) NOT NULL,
  `lrnnumber` varchar(255) CHARACTER SET utf16 COLLATE utf16_general_ci NOT NULL,
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
  `subjectteacher2` varchar(255) NOT NULL,
  `subjectteacher3` varchar(255) NOT NULL,
  `subjectteacher4` varchar(255) NOT NULL,
  `subjectteacher5` varchar(255) NOT NULL,
  `subjectteacher6` varchar(255) NOT NULL,
  `subjectteacher7` varchar(255) NOT NULL,
  `subjectteacher8` varchar(255) NOT NULL,
  `subjectteacher9` varchar(255) NOT NULL,
  `subjectteacher10` varchar(255) NOT NULL,
  `subt2` varchar(255) NOT NULL,
  `subject1` varchar(255) NOT NULL,
  `subject2` varchar(255) NOT NULL,
  `subject3` varchar(255) NOT NULL,
  `subject4` varchar(255) NOT NULL,
  `subject5` varchar(255) NOT NULL,
  `subject6` varchar(255) NOT NULL,
  `subject7` varchar(255) NOT NULL,
  `subject8` varchar(255) NOT NULL,
  `subject9` varchar(255) NOT NULL,
  `subject10` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `idnumber`, `lrnnumber`, `firstname`, `middlename`, `lastname`, `fullname`, `suffix`, `gender`, `birthplace`, `birthday`, `age`, `address`, `parent`, `adviser_id`, `schoolyear`, `grade`, `section`, `subjectteacher1`, `subjectteacher2`, `subjectteacher3`, `subjectteacher4`, `subjectteacher5`, `subjectteacher6`, `subjectteacher7`, `subjectteacher8`, `subjectteacher9`, `subjectteacher10`, `subt2`, `subject1`, `subject2`, `subject3`, `subject4`, `subject5`, `subject6`, `subject7`, `subject8`, `subject9`, `subject10`) VALUES
(523, '523', '127099060082', 'Finn', 'Heriih', 'Doria', 'Finn H. Doria', 'Jr.', 'Female', 'Samburon, Linamon Lanao del Norte', '2001-04-01', 37, 'Simboron', 'Mama', 'teacher', '2020-2021', 11, 'Lilac', 'Patrick Albaran', '', '', '', '', '', '', '', '', 'Glitz Wyn Sobisol', '', 'ENGLISH', '', '', '', '', '', '', '', '', ''),
(33333, '32', '0', 'Shawn', 'Perolino', 'Mendes', 'Shawn Perolino Mendes', '', 'MALE', '', '', 0, '', '', 'teacher', '', 0, 'LILAC', '', '', 'Glitz Wyn Sobisol', '', '', '', '', '', '', '', '', 'ENGLISH', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE `subjects` (
  `subjectid` int(11) NOT NULL,
  `id` int(255) NOT NULL,
  `subjectname` varchar(255) NOT NULL,
  `teacher1` varchar(255) NOT NULL,
  `teacher2` varchar(255) NOT NULL,
  `teacher3` varchar(255) NOT NULL,
  `teacher4` varchar(255) NOT NULL,
  `teacher5` varchar(255) NOT NULL,
  `teacher6` varchar(255) NOT NULL,
  `teacher7` varchar(255) NOT NULL,
  `teacher8` varchar(255) NOT NULL,
  `teacher9` varchar(255) NOT NULL,
  `teacher10` varchar(255) NOT NULL,
  `subjectgrouphead` varchar(255) NOT NULL,
  `subjectgrouphead2` varchar(255) NOT NULL,
  `subjectgrouphead3` varchar(255) NOT NULL,
  `subjectgrouphead4` varchar(255) NOT NULL,
  `subjectgrouphead5` varchar(255) NOT NULL,
  `section` varchar(255) NOT NULL,
  `section2` varchar(255) NOT NULL,
  `section3` varchar(255) NOT NULL,
  `section4` varchar(255) NOT NULL,
  `section5` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`subjectid`, `id`, `subjectname`, `teacher1`, `teacher2`, `teacher3`, `teacher4`, `teacher5`, `teacher6`, `teacher7`, `teacher8`, `teacher9`, `teacher10`, `subjectgrouphead`, `subjectgrouphead2`, `subjectgrouphead3`, `subjectgrouphead4`, `subjectgrouphead5`, `section`, `section2`, `section3`, `section4`, `section5`) VALUES
(11, 0, 'ENGLISH', 'Glitz Wyn Sobisol', '', 'Lida Albaran', '', '', '', '', '', 'teacher', '', 'teacher', '', '', '', '', 'Lilac', '', '', 'Lilac', 'Lilac'),
(12, 2, 'FILIPINO', 'Glitz Wyn Sobisol', '', '', '', '', 'Glitz Wyn Sobisol', '', '', '', '', 'teacher', '', '', '', '', 'Lilac', 'Rose', '', '', ''),
(13, 3, 'MATH', '', '', '', '', '', '', '', '', '', '', 'admin', '', '', '', '', 'Lilac', '', '', '', '');

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
  `sub3` varchar(255) NOT NULL,
  `sub4` varchar(255) NOT NULL,
  `sub5` varchar(255) NOT NULL,
  `st1` varchar(255) NOT NULL,
  `sgh1` varchar(255) NOT NULL,
  `sgh2` varchar(255) NOT NULL,
  `sgh3` varchar(255) NOT NULL,
  `sgh4` varchar(255) NOT NULL,
  `sgh5` varchar(255) NOT NULL,
  `sec1` varchar(255) NOT NULL,
  `sec2` varchar(255) NOT NULL,
  `sec3` varchar(255) NOT NULL,
  `sec4` varchar(255) NOT NULL,
  `sec5` varchar(255) NOT NULL,
  `sec6` varchar(255) NOT NULL,
  `sec7` varchar(255) NOT NULL,
  `sec8` varchar(255) NOT NULL,
  `sec9` varchar(255) NOT NULL,
  `sec10` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `name`, `advisory`, `subjectid`, `role`, `sub1`, `sub2`, `sub3`, `sub4`, `sub5`, `st1`, `sgh1`, `sgh2`, `sgh3`, `sgh4`, `sgh5`, `sec1`, `sec2`, `sec3`, `sec4`, `sec5`, `sec6`, `sec7`, `sec8`, `sec9`, `sec10`) VALUES
('', 'none', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', 'Lilac', '', '', '', '', 'none', 'none', 'none', 'none', 'none'),
('1', 'dsd', 'admin', 'Veldin Talorete', '', 0, 'admin', '', '', '', '', '', 'admin', '', '', '', '', '', 'none', 'none', 'Lilac', 'none', 'none', 'none', 'none', 'none', 'none', 'none'),
('2', 'admin', 'admin', 'Lida Albaran', '', 0, 'admin', '', '', '', '', '', 'admin', '', '', '', '', '', 'none', '', '', '', '', '', '', '', '', ''),
('admin', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'Reyris Milmao', '0', 0, 'admin', '', '', '', '', '', '', '', '', '', '', '', 'none', '', '', '', '', '', '', '', '', ''),
('glitz', 'glitz', '624b49bc7e4df07fd83d5be1b032a315', 'Glitz Wyn Sobisol', 'Lilac', 0, 'admin', 'ENGLISH', 'FILIPINO', '', '', '', 'admin', 'teacher', 'teacher', '', '', '', 'Lilac', 'Lilac', '', '', '', '', '', '', '', ''),
('teacher', 'teacher', '21232f297a57a5a743894a0e4a801fc3', 'teacher', 'Lilac', 5, 'subjectteacher', 'PROGRAMMING', 'ENGLISH', '', '', '', '', 'teacher', '', '', '', '', 'none', '', '', '', '', '', '', '', '', ''),
('teacher2', 'teacher2', '92877af70a45fd6a2ed7fe81e1236b78', '', '0', 0, 'subjectteacher', '', '', '', '', '', '', '', '', '', '', '', 'none', '', '', '', '', '', '', '', '', '');

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
  ADD PRIMARY KEY (`id`,`name`);

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
  ADD KEY `s` (`teacher1`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=503;

--
-- AUTO_INCREMENT for table `section`
--
ALTER TABLE `section`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9223372036854775807;

--
-- AUTO_INCREMENT for table `subjects`
--
ALTER TABLE `subjects`
  MODIFY `subjectid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
