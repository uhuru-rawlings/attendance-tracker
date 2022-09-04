-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 04, 2022 at 02:42 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `attendance`
--

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE `attendance` (
  `id` int(11) NOT NULL,
  `admno` varchar(100) NOT NULL,
  `teacher` varchar(200) NOT NULL,
  `coursename` varchar(200) NOT NULL,
  `unitname` varchar(200) NOT NULL,
  `semester` text NOT NULL,
  `starttime` time NOT NULL,
  `endtime` time NOT NULL,
  `day` text NOT NULL,
  `timesigned` time NOT NULL,
  `datesigned` date NOT NULL,
  `dateadded` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `attendance`
--

INSERT INTO `attendance` (`id`, `admno`, `teacher`, `coursename`, `unitname`, `semester`, `starttime`, `endtime`, `day`, `timesigned`, `datesigned`, `dateadded`) VALUES
(1, 'DICT/S15/015', 'Solomon Roth', 'computer science', 'operating system', 'SEM 1 YEAR 1', '08:00:00', '10:00:00', 'Sunday', '09:09:31', '2022-09-04', '2022-09-04 09:20:31');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` int(11) NOT NULL,
  `coursename` varchar(200) NOT NULL,
  `abreviation` varchar(100) NOT NULL,
  `date_added` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `coursename`, `abreviation`, `date_added`) VALUES
(1, 'computer science', 'CS', '2022-09-03 15:04:25');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `useremail` varchar(100) NOT NULL,
  `passwords` varchar(366) NOT NULL,
  `dateadded` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `username`, `useremail`, `passwords`, `dateadded`) VALUES
(1, 'Admin user', 'admin@gmail.com', '$2y$10$52RvoRIFTPmNayI6FtlhdesvJ/xqfzeYLsQaxC/Jm.muWGQDagIP6', '2022-06-02 12:00:54'),
(2, 'pf1234', 'uhururawlings40@gmail.com', '$2y$10$9JrH.L5h4moQi.WcPmfKEeaFIplJinxvVY9rnQ4dS6wES6JuD9L/6', '2022-09-03 08:52:53'),
(3, 'pf3456', 'admin@gmail.com', '$2y$10$2T7RBCyUESHGQLhPdP73nO3Q/9qiojO6GiXF8zzYWwH6s9hHJ85Hq', '2022-09-04 14:40:37');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(11) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `sname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `dob` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `adress` varchar(100) NOT NULL,
  `tribe` varchar(100) NOT NULL,
  `semester` varchar(100) NOT NULL,
  `admno` varchar(100) NOT NULL,
  `coursename` varchar(300) NOT NULL,
  `passwords` varchar(366) NOT NULL,
  `password_reset` varchar(100) DEFAULT NULL,
  `dateadded` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `fname`, `sname`, `lname`, `dob`, `gender`, `phone`, `email`, `adress`, `tribe`, `semester`, `admno`, `coursename`, `passwords`, `password_reset`, `dateadded`) VALUES
(2, 'Philip', 'Kennedy', 'Hester', '1974-07-06', 'Male', '+1 (202) 496-8652', 'kehevugu@mailinator.com', 'Quo sit blanditiis ', 'Vitae voluptatem nec', 'SEM 1 YEAR 1', 'DICT/S15/015', 'computer science', '$2y$10$N8703hzbz/PQeZWfT5UM7uhYJK8HevW64gQitimvJNKmjULiMBOGu', 'Updated', '2022-09-03 11:20:33');

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE `teachers` (
  `id` int(11) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `sname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `gender` text NOT NULL,
  `phone` varchar(20) NOT NULL,
  `email` varchar(200) NOT NULL,
  `adress` varchar(100) NOT NULL,
  `tribe` varchar(200) NOT NULL,
  `previous_school` varchar(200) NOT NULL,
  `staffid` varchar(100) NOT NULL,
  `dateadded` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`id`, `fname`, `sname`, `lname`, `gender`, `phone`, `email`, `adress`, `tribe`, `previous_school`, `staffid`, `dateadded`) VALUES
(2, 'Solomon', 'Forbes', 'Roth', 'Male', '+1 (567) 525-4849', 'teacher@mailinator.com', '17, Rabuor', 'Luo', 'Aut aut doloribus al', 'pf1231', '2022-09-03 09:45:46');

-- --------------------------------------------------------

--
-- Table structure for table `timetable`
--

CREATE TABLE `timetable` (
  `id` int(11) NOT NULL,
  `teacher` varchar(100) NOT NULL,
  `coursename` varchar(100) NOT NULL,
  `unitname` varchar(100) NOT NULL,
  `semster` varchar(100) NOT NULL,
  `starttime` time NOT NULL,
  `endtime` time NOT NULL,
  `day` varchar(100) NOT NULL,
  `dateadded` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `timetable`
--

INSERT INTO `timetable` (`id`, `teacher`, `coursename`, `unitname`, `semster`, `starttime`, `endtime`, `day`, `dateadded`) VALUES
(2, 'Solomon Roth', 'computer science', 'operating system', 'SEM 1 YEAR 1', '08:00:00', '10:00:00', 'Sunday', '2022-09-03 13:53:24');

-- --------------------------------------------------------

--
-- Table structure for table `units`
--

CREATE TABLE `units` (
  `id` int(11) NOT NULL,
  `coursename` varchar(200) NOT NULL,
  `unitname` varchar(200) NOT NULL,
  `abreviation` varchar(100) NOT NULL,
  `date_added` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `units`
--

INSERT INTO `units` (`id`, `coursename`, `unitname`, `abreviation`, `date_added`) VALUES
(1, 'computer science', 'operating system', 'OS', '2022-09-03 15:36:49'),
(2, 'computer science', 'introduction to computer i', 'IC1', '2022-09-03 15:39:43');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attendance`
--
ALTER TABLE `attendance`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `timetable`
--
ALTER TABLE `timetable`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `units`
--
ALTER TABLE `units`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `attendance`
--
ALTER TABLE `attendance`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `teachers`
--
ALTER TABLE `teachers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `timetable`
--
ALTER TABLE `timetable`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `units`
--
ALTER TABLE `units`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
