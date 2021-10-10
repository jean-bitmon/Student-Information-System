-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 24, 2021 at 03:40 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `studentinfosystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `academic`
--

CREATE TABLE `academic` (
  `id` int(55) NOT NULL,
  `studentno` varchar(255) NOT NULL,
  `studentname` varchar(255) NOT NULL,
  `subject1` varchar(255) NOT NULL,
  `subject2` varchar(255) NOT NULL,
  `subject3` varchar(255) NOT NULL,
  `subject4` varchar(255) NOT NULL,
  `subject5` varchar(255) NOT NULL,
  `subject6` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `academic`
--

INSERT INTO `academic` (`id`, `studentno`, `studentname`, `subject1`, `subject2`, `subject3`, `subject4`, `subject5`, `subject6`) VALUES
(1, '2021-01', 'System Testing', '1.50', '1.25', '1.50', '1.50', '1.50', '1.75');

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE `attendance` (
  `attendance_id` int(55) NOT NULL,
  `a_studentno` varchar(55) NOT NULL,
  `student_name` varchar(255) NOT NULL,
  `attendance_date` date NOT NULL,
  `attendance_status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `attendance`
--

INSERT INTO `attendance` (`attendance_id`, `a_studentno`, `student_name`, `attendance_date`, `attendance_status`) VALUES
(1, '2021-01', 'System Testing', '2021-04-24', 'Present'),
(2, '2021-01', 'System Testing', '2021-04-25', 'Present'),
(3, '2021-01', 'System Testing', '2021-04-26', 'Present'),
(4, '2021-01', 'System Testing', '2021-04-27', 'Present');

-- --------------------------------------------------------

--
-- Table structure for table `co_curricular_activities`
--

CREATE TABLE `co_curricular_activities` (
  `ccactivities_id` int(55) NOT NULL,
  `activity_name` varchar(555) NOT NULL,
  `activity_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `co_curricular_activities`
--

INSERT INTO `co_curricular_activities` (`ccactivities_id`, `activity_name`, `activity_date`) VALUES
(1, 'Chess Tournament', '2021-04-21'),
(2, 'Esport Tournament(ML, Dota, LoL)', '2021-04-22'),
(3, 'Battle of the brains', '2021-04-23'),
(4, 'Programming Competition', '2021-04-24'),
(5, 'Assembly Disassembly', '2021-04-26'),
(6, 'Basketball', '2021-04-26'),
(7, 'Volleyball', '2021-04-26'),
(8, 'Badminton\r\n', '2021-04-26'),
(9, 'Star Model(Pageant)', '0000-00-00'),
(10, 'Theater', '2021-04-27'),
(11, 'Photography exhibition', '2021-04-27'),
(12, 'Spoken poetry', '2021-04-27'),
(13, 'Table Tennis', '2021-04-27');

-- --------------------------------------------------------

--
-- Table structure for table `parent`
--

CREATE TABLE `parent` (
  `id` int(10) NOT NULL,
  `username` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `studentno` int(10) NOT NULL,
  `firstname` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `lastname` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `course` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `yrlevel` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `date_joined` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `parent`
--

INSERT INTO `parent` (`id`, `username`, `password`, `studentno`, `firstname`, `lastname`, `course`, `yrlevel`, `date_joined`) VALUES
(17, 'admin', 'admin123', 0, 'Agustin', 'Agustin', 'BSIT', '4th year', '2021-04-20'),
(18, 'admin123', 'admin', 1234, 'Dev Team', 'Test', 'BSBA', '1st year', '2021-04-23'),
(19, 'parent123', 'parent', 2021, 'Parent', 'One', 'BSBA', '2nd year', '2021-04-24'),
(20, 'parent12345', 'parent', 120212, 'Parent', 'Test', 'BSIT', '4th year', '2021-04-24');

-- --------------------------------------------------------

--
-- Table structure for table `student_list`
--

CREATE TABLE `student_list` (
  `stundent_id` varchar(55) NOT NULL,
  `stud_name` varchar(255) NOT NULL,
  `stud_year` varchar(255) NOT NULL,
  `stud_course` varchar(255) NOT NULL,
  `sy` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student_list`
--

INSERT INTO `student_list` (`stundent_id`, `stud_name`, `stud_year`, `stud_course`, `sy`) VALUES
('1201-01', 'System Testing	', 'Third Year', 'BSIT', '2020-2021');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `academic`
--
ALTER TABLE `academic`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `attendance`
--
ALTER TABLE `attendance`
  ADD PRIMARY KEY (`attendance_id`);

--
-- Indexes for table `co_curricular_activities`
--
ALTER TABLE `co_curricular_activities`
  ADD PRIMARY KEY (`ccactivities_id`);

--
-- Indexes for table `parent`
--
ALTER TABLE `parent`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_list`
--
ALTER TABLE `student_list`
  ADD PRIMARY KEY (`stundent_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `academic`
--
ALTER TABLE `academic`
  MODIFY `id` int(55) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `attendance`
--
ALTER TABLE `attendance`
  MODIFY `attendance_id` int(55) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `co_curricular_activities`
--
ALTER TABLE `co_curricular_activities`
  MODIFY `ccactivities_id` int(55) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `parent`
--
ALTER TABLE `parent`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
