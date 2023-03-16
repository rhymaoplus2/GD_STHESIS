-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 16, 2023 at 02:18 PM
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
(527, 'ENGLISH', 99, 'PASS', 'Finn H. Doria', 'Finn', 'Heriih', 'Doria', 'Female', 'Glitz Wyn Sobisol', 'Lilac', 'teacher', 'Second', 'First'),
(528, 'ENGLISH', 75, 'PASS', 'Shawn Perolino Mendes', 'Shawn', 'Perolino', 'Mendes', 'MALE', 'Glitz Wyn Sobisol', 'LILAC', 'teacher', 'Second', 'First'),
(529, 'ENGLISH', 84, 'PASS', 'Test Test Test', 'Test', 'Test', 'Test', 'Male', 'Glitz Wyn Sobisol', 'Lilac', 'teacher', 'First', 'Second'),
(530, 'ENGLISH', 97, 'PASS', 'Finn H. Doria', 'Finn', 'Heriih', 'Doria', 'Female', 'Glitz Wyn Sobisol', 'Lilac', 'teacher', 'First', 'Second'),
(531, 'ENGLISH', 91, 'PASS', 'Shawn Perolino Mendes', 'Shawn', 'Perolino', 'Mendes', 'MALE', 'Glitz Wyn Sobisol', 'LILAC', 'teacher', 'First', 'Second');

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
  `adviser` varchar(255) NOT NULL,
  `t1` varchar(255) NOT NULL,
  `t2` varchar(255) NOT NULL,
  `t3` varchar(255) NOT NULL,
  `t4` varchar(255) NOT NULL,
  `t5` varchar(255) NOT NULL,
  `t6` varchar(255) NOT NULL,
  `t7` varchar(255) NOT NULL,
  `t8` varchar(255) NOT NULL,
  `t9` varchar(255) NOT NULL,
  `t10` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `section`
--

INSERT INTO `section` (`id`, `name`, `adviser`, `t1`, `t2`, `t3`, `t4`, `t5`, `t6`, `t7`, `t8`, `t9`, `t10`) VALUES
(2, 'Lilac', 'admin', 'Veldin Talorete', 'Reyris Milmao', 'Glitz Wyn Sobisol', 'teacher', 'Lida Albaran', '', '', '', '', ''),
(3, 'Rose', '', '', '', '', '', '', '', '', '', '', ''),
(4, 'Tearose', '', 'Veldin Talorete', 'Lida Albaran', 'yawa', '', '', '', '', '', '', ''),
(5, 'a', '', '', '', '', '', '', '', '', '', '', ''),
(6, 'as', '', '', '', '', '', '', '', '', '', '', ''),
(7, 'test', '', '', '', '', '', '', '', '', '', '', ''),
(8, 'test', '', '', '', '', '', '', '', '', '', '', '');

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
  `syear` varchar(255) NOT NULL,
  `grade` int(11) NOT NULL,
  `section` varchar(255) NOT NULL,
  `trackstrand` varchar(255) NOT NULL,
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

INSERT INTO `students` (`id`, `idnumber`, `lrnnumber`, `firstname`, `middlename`, `lastname`, `fullname`, `suffix`, `gender`, `birthplace`, `birthday`, `age`, `address`, `parent`, `adviser_id`, `syear`, `grade`, `section`, `trackstrand`, `subjectteacher1`, `subjectteacher2`, `subjectteacher3`, `subjectteacher4`, `subjectteacher5`, `subjectteacher6`, `subjectteacher7`, `subjectteacher8`, `subjectteacher9`, `subjectteacher10`, `subt2`, `subject1`, `subject2`, `subject3`, `subject4`, `subject5`, `subject6`, `subject7`, `subject8`, `subject9`, `subject10`) VALUES
(2, '02', '12', 'Test', 'Test', 'Test', 'Test Test Test', 'Jr.', 'Male', 'Sto. Nino', '2023-02-11', 7, 'Reynato Milmao', 'Test', 'teacher', '2023-2024', 7, 'Lilac', '', '', '', 'Glitz Wyn Sobisol', '', 'Lida Albaran', '', '', '', '', '', '', 'ENGLISH', 'ENGLISH', 'ENGLISH', 'ENGLISH', 'ENGLISH', 'ENGLISH', 'ENGLISH', 'ENGLISH', 'ENGLISH', 'ENGLISH'),
(523, '523', '127099060082', 'Finn', 'Heriih', 'Doria', 'Finn H. Doria', 'Jr.', 'Female', 'Samburon, Linamon Lanao del Norte', '2001-04-01', 37, 'Simboron', 'Mama', 'teacher', '2020-2021', 11, 'Lilac', '', 'Patrick Albaran', '', 'Glitz Wyn Sobisol', '', 'Lida Albaran', '', '', '', '', '', '', 'ENGLISH', 'MATH', 'MATH', 'MATH', 'FILIPINO', 'FILIPINO', '', '', '', ''),
(33333, '32', '0', 'Shawn', 'Perolino', 'Mendes', 'Shawn Perolino Mendes', '', 'MALE', '', '', 0, '', '', 'teacher', '', 0, 'LILAC', 'TVL-ICT', '', '', 'Glitz Wyn Sobisol', '', 'Lida Albaran', '', '', '', '', '', '', 'ENGLISH', 'MATH', 'MATH', 'MATH', 'FILIPINO', 'FILIPINO', '', '', '', '');

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
  `section5` varchar(255) NOT NULL,
  `section6` varchar(10) NOT NULL,
  `section7` varchar(10) NOT NULL,
  `section8` varchar(10) NOT NULL,
  `section9` varchar(10) NOT NULL,
  `section10` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`subjectid`, `id`, `subjectname`, `teacher1`, `teacher2`, `teacher3`, `teacher4`, `teacher5`, `teacher6`, `teacher7`, `teacher8`, `teacher9`, `teacher10`, `subjectgrouphead`, `subjectgrouphead2`, `subjectgrouphead3`, `subjectgrouphead4`, `subjectgrouphead5`, `section`, `section2`, `section3`, `section4`, `section5`, `section6`, `section7`, `section8`, `section9`, `section10`) VALUES
(11, 0, 'ENGLISH', 'Glitz Wyn Sobisol', '', 'Lida Albaran', '', '', '', '', '', 'teacher', '', 'teacher', '', '', '', '', 'Lilac', '', '', 'Lilac', 'Lilac', '', '', '', '', ''),
(12, 2, 'FILIPINO', 'Glitz Wyn Sobisol', '', '', '', '', 'Glitz Wyn Sobisol', '', '', '', '', 'teacher', '', '', '', '', 'Lilac', 'Rose', '', '', '', '', '', '', '', ''),
(13, 3, 'MATH', '', '', '', '', '', '', '', '', '', '', 'admin', '', '', '', '', 'Lilac', '', '', '', '', '', '', '', '', ''),
(14, 0, 'DISS', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(15, 0, 'Earth &amp; Life Science', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(16, 0, 'E-Tech', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(17, 0, 'General Mathematics', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(18, 0, 'IWRBS', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(19, 0, 'KPWKP', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(20, 0, 'Oral Communication', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(21, 0, 'Physical Education 1', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(22, 0, 'TCLPW', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(23, 0, 'Values &amp; Self', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(24, 0, 'Creative Writing', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(25, 0, 'DIASS', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(26, 0, 'IPHP', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(27, 0, 'Physical Education 2', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(28, 0, 'Physical Science', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(29, 0, 'PPITTP', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(30, 0, 'Practical Research 1', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(31, 0, 'Reading and Writing', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(32, 0, 'Stat and Prob', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(33, 0, 'Creative Nonfiction', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(34, 0, 'EAP', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(35, 0, 'Personal Development', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(36, 0, 'Physical Education 3', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(37, 0, 'PPG', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(38, 0, 'Practical Research 2', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(39, 0, 'TNCT21stC', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(40, 0, 'UCSP', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(41, 0, 'Values and Society', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(42, 0, 'CESC', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(43, 0, 'CPAR', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(44, 0, 'Entrepreneurship', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(45, 0, 'FPL', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(46, 0, 'III', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(47, 0, 'MIL', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(48, 0, 'Physical Education 4', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(49, 0, 'WI/R/CA/CA', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(50, 0, 'Values and Work', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(51, 0, 'Science', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(52, 0, 'Araling Panlipunan', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(53, 0, 'TLE', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(54, 0, 'Mapeh', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(55, 0, 'Music', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(56, 0, 'Arts', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(57, 0, 'PE', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(58, 0, 'Health', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(59, 0, 'Comp Prog 11a', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(60, 0, 'Values and Self', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(61, 0, 'Values and Family', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(62, 0, 'Comp Prog 12a', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(63, 0, 'FAP', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(64, 0, 'Work Immersion', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(65, 0, 'Business Math', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(66, 0, 'OAM', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(67, 0, 'FABM1', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(68, 0, 'POM', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(69, 0, 'Applied Economics', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(70, 0, 'Business Finance', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(71, 0, 'FABM2', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(72, 0, 'BES/WI', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(73, 0, 'BESR', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(74, 0, 'Earth Science', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(75, 0, 'General Chemistry 1', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(76, 0, 'Pre-Calculus', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(77, 0, 'Basic Calculus', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(78, 0, 'DRRR', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(79, 0, 'General Chemistry 2', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(80, 0, 'General Biology 1', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(81, 0, 'General Physics 1', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(82, 0, 'General Biology 2', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(83, 0, 'General Physics 2', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(84, 0, 'R/CP/WI', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(85, 0, 'Housekeeping', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(86, 0, 'BPP', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(87, 0, 'Cookery', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');

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
-- Table structure for table `trackstrand`
--

CREATE TABLE `trackstrand` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `trackstrand`
--

INSERT INTO `trackstrand` (`id`, `name`) VALUES
(1, 'TVL-ICT');

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
  `role` varchar(255) NOT NULL,
  `role2` varchar(255) NOT NULL,
  `sub1` varchar(255) NOT NULL,
  `sub2` varchar(255) NOT NULL,
  `sub3` varchar(255) NOT NULL,
  `sub4` varchar(255) NOT NULL,
  `sub5` varchar(255) NOT NULL,
  `sub6` varchar(255) NOT NULL,
  `sub7` varchar(255) NOT NULL,
  `sub8` varchar(255) NOT NULL,
  `sub9` varchar(255) NOT NULL,
  `sub10` varchar(255) NOT NULL,
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

INSERT INTO `users` (`id`, `username`, `password`, `name`, `advisory`, `subjectid`, `role`, `role2`, `sub1`, `sub2`, `sub3`, `sub4`, `sub5`, `sub6`, `sub7`, `sub8`, `sub9`, `sub10`, `st1`, `sgh1`, `sgh2`, `sgh3`, `sgh4`, `sgh5`, `sec1`, `sec2`, `sec3`, `sec4`, `sec5`, `sec6`, `sec7`, `sec8`, `sec9`, `sec10`) VALUES
('', 'none', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Lilac', '', '', '', '', 'none', 'none', 'none', 'none', 'none'),
('', 'x', 'x', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('1', 'dsd', 'admin', 'Veldin Talorete', '', 0, 'admin', '', '', '', '', '', '', '', '', '', '', '', 'admin', '', '', '', '', '', '', 'none', 'Lilac', 'none', 'none', 'none', 'none', 'none', 'none', 'none'),
('2', 'admin', 'admin', 'Lida Albaran', '', 0, 'admin', '', '', '', '', '', '', '', '', '', '', '', 'admin', '', '', '', '', '', 'none', 'Tearose', '', '', 'Lilac', '', '', '', '', ''),
('admin', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'Reyris Milmao', '0', 0, 'admin', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'none', '', '', '', '', '', '', '', '', ''),
('glitz', 'glitz', '624b49bc7e4df07fd83d5be1b032a315', 'Glitz Wyn Sobisol', 'Lilac', 0, 'admin', 'subject teacher', 'ENGLISH', 'MATH', 'MATH', 'MATH', 'FILIPINO', '', '', '', '', '', 'admin', 'teacher', 'teacher', '', '', '', 'Lilac', 'Lilac', '', '', '', '', '', '', '', ''),
('teacher', 'teacher', '21232f297a57a5a743894a0e4a801fc3', 'teacher', 'Lilac', 5, 'adviser', 'adviser', 'PROGRAMMING', 'ENGLISH', '', '', '', '', '', '', '', '', '', 'teacher', '', '', '', '', 'none', '', '', 'Lilac', '', '', '', '', '', ''),
('teacher2', 'teacher2', '92877af70a45fd6a2ed7fe81e1236b78', 'yawa', '0', 0, 'subject teacher', '', 'FILIPINO', 'FILIPINO', 'FILIPINO', '', '', '', '', '', '', '', '', '', '', '', '', '', 'none', '', 'Tearose', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `year`
--

CREATE TABLE `year` (
  `id` int(11) NOT NULL,
  `syear` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `year`
--

INSERT INTO `year` (`id`, `syear`) VALUES
(1, '2022-2023'),
(2, '2020-2021');

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
  ADD KEY `bm` (`syear`),
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
-- Indexes for table `trackstrand`
--
ALTER TABLE `trackstrand`
  ADD PRIMARY KEY (`id`);

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
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `grade`
--
ALTER TABLE `grade`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=535;

--
-- AUTO_INCREMENT for table `section`
--
ALTER TABLE `section`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9223372036854775807;

--
-- AUTO_INCREMENT for table `subjects`
--
ALTER TABLE `subjects`
  MODIFY `subjectid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=88;

--
-- AUTO_INCREMENT for table `trackstrand`
--
ALTER TABLE `trackstrand`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `year`
--
ALTER TABLE `year`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
