-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 30, 2018 at 04:57 AM
-- Server version: 10.1.33-MariaDB
-- PHP Version: 7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `s_result_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_users`
--

CREATE TABLE `admin_users` (
  `admin_id` int(11) NOT NULL,
  `admin_name` varchar(244) NOT NULL,
  `password` varchar(244) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_users`
--

INSERT INTO `admin_users` (`admin_id`, `admin_name`, `password`) VALUES
(1, 'feroz', '1234'),
(2, 'admin', 'abcd'),
(3, 'Afra', '1234'),
(4, 'Lisa', '1234'),
(5, 'Ponni', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` int(11) NOT NULL,
  `course_code` varchar(255) NOT NULL,
  `course_details` varchar(255) NOT NULL,
  `section` int(255) NOT NULL,
  `faculty_id` varchar(255) NOT NULL,
  `initials` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `course_code`, `course_details`, `section`, `faculty_id`, `initials`) VALUES
(2, 'cse480', 'Web Database', 1, '100-1', 'NAS'),
(4, 'cse480', 'Web Database', 2, '100-2', 'SSS'),
(6, 'cse480', 'Web Database', 3, '100-2', 'SSS'),
(7, 'cse105', 'C programming', 1, '100-2', 'SSS'),
(8, 'cse105', 'C programming', 2, '100-1', 'NAS'),
(10, 'cse360', 'CA', 1, '100-3', 'LB'),
(14, 'cse411', 'Software Engineering', 1, '100-3', 'LB'),
(18, 'cse360', 'CA', 2, '100-1', 'NAS'),
(20, 'cse411', 'Software Engineering', 2, '100-3', 'LB');

-- --------------------------------------------------------

--
-- Table structure for table `faculty_course_result`
--

CREATE TABLE `faculty_course_result` (
  `id` int(11) NOT NULL,
  `course_code` varchar(255) NOT NULL,
  `section` int(10) NOT NULL,
  `faculty_id` varchar(255) NOT NULL,
  `student_id` varchar(255) NOT NULL,
  `student_name` varchar(255) NOT NULL,
  `mid1` float DEFAULT NULL,
  `mid2` float DEFAULT NULL,
  `final` float DEFAULT NULL,
  `quiz` float DEFAULT NULL,
  `attendance` int(255) DEFAULT NULL,
  `project` float DEFAULT NULL,
  `total` float DEFAULT NULL,
  `grade` varchar(5) DEFAULT NULL,
  `gpa` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faculty_course_result`
--

INSERT INTO `faculty_course_result` (`id`, `course_code`, `section`, `faculty_id`, `student_id`, `student_name`, `mid1`, `mid2`, `final`, `quiz`, `attendance`, `project`, `total`, `grade`, `gpa`) VALUES
(1, 'cse480', 1, '100-1', '2015-1-60-058', 'Muntasir Feroz', 25, 20, 16, 10, 5, 15, 91, 'A', 4),
(2, 'cse480', 1, '100-1', '2015-1-60-078', 'Tahmin Yasmin Lisa', 25, 20, 16, 10, 5, 15, NULL, NULL, NULL),
(3, 'cse480', 1, '100-1', '2015-1-60-061', 'Ummul Khair Fatima', 25, 20, 16, 10, 5, 10, NULL, NULL, NULL),
(4, 'cse480', 1, '100-1', '2015-1-60-075', 'Afra Nawar Amin', 25, 12, 12, 5, 2, 10, 66, 'D+', 1.3),
(6, 'cse105', 1, '100-2', '2015-1-60-058', 'Muntasir Feroz', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(7, 'cse105', 1, '100-2', '2015-1-60-075', 'Afra Nawar Amin', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(8, 'cse360', 1, '100-3', '2015-1-60-058', 'Muntasir Feroz', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(9, 'cse360', 1, '100-3', '2015-1-60-078', 'Tahmina Yasmin Lisa', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(10, 'cse411', 1, '100-3', '2015-1-60-058', 'Muntasir Feroz', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(11, 'cse411', 1, '100-3', '2015-1-60-078', 'Tahmin Yasmin Lisa', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `faculty_info`
--

CREATE TABLE `faculty_info` (
  `faculty_id` varchar(25) NOT NULL,
  `first_name` varchar(244) NOT NULL,
  `last_name` varchar(244) NOT NULL,
  `initials` varchar(20) NOT NULL,
  `contact` varchar(25) NOT NULL,
  `email` varchar(244) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faculty_info`
--

INSERT INTO `faculty_info` (`faculty_id`, `first_name`, `last_name`, `initials`, `contact`, `email`) VALUES
('100-1', 'LUL', 'LUL', 'LUL', '15555', 'lul100-1@gmail.com'),
('100-3', 'ABBAS', 'Rabby', 'AR', '12345', 'email@.com');

-- --------------------------------------------------------

--
-- Table structure for table `faculty_users`
--

CREATE TABLE `faculty_users` (
  `faculty_id` varchar(25) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `initials` varchar(25) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(244) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faculty_users`
--

INSERT INTO `faculty_users` (`faculty_id`, `first_name`, `last_name`, `initials`, `contact`, `email`, `password`) VALUES
('100-1', 'Nusrat', 'Sharmin', 'NAS', '155555', '100-1@gmail.com', '1234'),
('100-2', 'Someone', 'Someone', 'SSS', '1111111', '100-2@gmail.com', '1234'),
('100-3', 'Luke', 'Back', 'LB', '20000001', 'email@.com', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `student_course`
--

CREATE TABLE `student_course` (
  `s.no` int(255) NOT NULL,
  `student_id` varchar(255) NOT NULL,
  `course_code` varchar(10) NOT NULL,
  `section` int(20) NOT NULL,
  `faculty_id` varchar(255) NOT NULL,
  `semester` varchar(255) NOT NULL,
  `semester_num` int(30) NOT NULL,
  `gpa` float NOT NULL,
  `grade` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `student_info`
--

CREATE TABLE `student_info` (
  `student_id` varchar(25) NOT NULL,
  `first_name` varchar(244) NOT NULL,
  `last_name` varchar(244) NOT NULL,
  `semester` varchar(20) NOT NULL,
  `semester_num` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_info`
--

INSERT INTO `student_info` (`student_id`, `first_name`, `last_name`, `semester`, `semester_num`) VALUES
('2015-1-60-057', 'Asaduzzaman', 'Rabby', 'spring2018', 3),
('2015-1-60-058', 'Muntasir', 'Feroz', 'spring2018', 1),
('2015-1-60-061', 'Ummul Khair', 'Fatema', 'spring2018', 1),
('2015-1-60-073', 'Farhana Haque', 'Tisha', 'Spring 15', 11),
('2015-1-60-075', 'Afra Nawar', 'Amin', 'Spring 15', 11),
('2015-1-60-077', 'Md. Redwan-ul', 'Alam', 'Spring 15', 11),
('2015-1-60-078', 'Tahmina Yasmin', 'Lisa', 'Spring 15', 11),
('2015-1-60-080', 'Nazmul', 'Hasan', 'Spring 15', 11);

-- --------------------------------------------------------

--
-- Table structure for table `student_users`
--

CREATE TABLE `student_users` (
  `student_id` varchar(25) NOT NULL,
  `first_name` varchar(244) NOT NULL,
  `last_name` varchar(244) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(244) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_users`
--

INSERT INTO `student_users` (`student_id`, `first_name`, `last_name`, `email`, `password`) VALUES
('2015-1-60-058', 'Muntasir', 'Feroz', '2015-1-60-058@gmail.com', '1234'),
('2015-1-60-061', 'Ummul Khair', 'Fatima', '2015-1-60-061@gmail', '1234'),
('2015-1-60-075', 'Afra Nawar', 'Amin', '2015-1-60-075@gmail', '1234'),
('2015-1-60-077', 'Md. Redwan-ul', ' Alam', 'redwan@gmail.com', '1234'),
('2015-1-60-078', 'Tahmina', 'Yasmin Lisa ', '2015-1-60-078@gmail.com', '1234');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_users`
--
ALTER TABLE `admin_users`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faculty_course_result`
--
ALTER TABLE `faculty_course_result`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faculty_info`
--
ALTER TABLE `faculty_info`
  ADD PRIMARY KEY (`faculty_id`);

--
-- Indexes for table `faculty_users`
--
ALTER TABLE `faculty_users`
  ADD PRIMARY KEY (`faculty_id`);

--
-- Indexes for table `student_course`
--
ALTER TABLE `student_course`
  ADD PRIMARY KEY (`s.no`);

--
-- Indexes for table `student_info`
--
ALTER TABLE `student_info`
  ADD PRIMARY KEY (`student_id`);

--
-- Indexes for table `student_users`
--
ALTER TABLE `student_users`
  ADD PRIMARY KEY (`student_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_users`
--
ALTER TABLE `admin_users`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `faculty_course_result`
--
ALTER TABLE `faculty_course_result`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
