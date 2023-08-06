-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 06, 2023 at 07:26 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dynamic`
--

-- --------------------------------------------------------

--
-- Table structure for table `class`
--

CREATE TABLE `class` (
  `class_id` int(11) NOT NULL,
  `students` int(50) NOT NULL,
  `teacher` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `notice`
--

CREATE TABLE `notice` (
  `notice_id` int(255) NOT NULL,
  `notice_title` text NOT NULL,
  `notice_content` text NOT NULL,
  `notice_file` text DEFAULT NULL,
  `notice_time` time NOT NULL,
  `notice_date` date DEFAULT NULL,
  `notice_ext` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `notice`
--

INSERT INTO `notice` (`notice_id`, `notice_title`, `notice_content`, `notice_file`, `notice_time`, `notice_date`, `notice_ext`) VALUES
(11, 'test notice 1', 'qweqwdah', 'data/notices/IMG_20211102_105311_064.jpg', '14:29:00', '2023-07-22', 'jpg'),
(12, 'test notice 2', 'pdf test', 'data/notices/cover page.pdf', '14:30:00', '2023-07-22', 'pdf'),
(13, 'test notice 6', 'test notice 06 aug', 'data/notices/Screenshot 2023-05-05 212353.png', '13:30:00', '2023-08-06', 'png'),
(14, 'test notice 6', 'test successful', 'data/notices/Screenshot 2023-08-05 124032.png', '13:30:00', '2023-08-06', 'png');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(100) NOT NULL,
  `username` varchar(256) NOT NULL,
  `name` varchar(256) NOT NULL,
  `email` varchar(256) NOT NULL,
  `department` varchar(256) NOT NULL,
  `address` text DEFAULT NULL,
  `mobile` varchar(20) DEFAULT NULL,
  `profile_picture` text DEFAULT NULL,
  `bio` longtext DEFAULT NULL,
  `field_of_research` longtext DEFAULT NULL,
  `roll_no` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `username`, `name`, `email`, `department`, `address`, `mobile`, `profile_picture`, `bio`, `field_of_research`, `roll_no`) VALUES
(6, 'anirban19', 'Anirban sarwar', 'itachi.d1924@gmail.com', 'cse', 'talaimari,rajshahi', '01989211175', 'img/profile_pics/64a56aaf837be9.61400557.jpg', 'hi.....', 'nothing', 1903019),
(13, 'aaa', 'souvik', '', 'cse', NULL, NULL, NULL, NULL, NULL, 1903023);

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE `teachers` (
  `id` int(100) NOT NULL,
  `username` varchar(256) NOT NULL,
  `name` varchar(256) NOT NULL,
  `email` varchar(256) NOT NULL,
  `department` varchar(256) DEFAULT NULL,
  `address` text DEFAULT NULL,
  `mobile` varchar(30) DEFAULT NULL,
  `profile_picture` text DEFAULT NULL,
  `bio` longtext DEFAULT NULL,
  `field_of_research` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`id`, `username`, `name`, `email`, `department`, `address`, `mobile`, `profile_picture`, `bio`, `field_of_research`) VALUES
(1, 'ani', 'tanvir', 'meherab69@hotmail.com', 'cse', 'talaimari,rajshahi', '01900000000', 'css/IMG_20211223_011232.jpg', 'what bio you want to see?', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(100) NOT NULL,
  `username` varchar(256) NOT NULL,
  `name` varchar(256) NOT NULL,
  `email` varchar(256) NOT NULL,
  `password` varchar(256) NOT NULL,
  `role` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `name`, `email`, `password`, `role`) VALUES
(10, 'anirban19', 'Anirban sarwar', 'itachi.d1924@gmail.com', '$2y$10$EtGtEa4t0ymg9UqQ2eSF7eWTBEfmWmd30bSwY4YFYG6N.fnmIFzVe', 'student'),
(11, 'ani', 'tanvir', 'meherab69@hotmail.com', '$2y$10$qtE23u77h.XlAfmagWSEteesv2taebvhn/QhkfScrHKK2x1uAl3Nm', 'teacher'),
(29, 'aaa', 'souvik', 'meherab69@hotmail.com', '$2y$10$m9gp/1scs8aBx9cRjynCvu11jNOVwx/MoxE.wNlvxLJHxJAQ.iQEy', 'student'),
(30, 'ruet_cse', 'admin', 'admin.cse@ruet.com', '$2y$10$/Bj9S/li0OHIr1sDaJOmO.XPtZ.Pf78UkDvFjgnuHdSAFAdYHtCMy', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `class`
--
ALTER TABLE `class`
  ADD PRIMARY KEY (`class_id`);

--
-- Indexes for table `notice`
--
ALTER TABLE `notice`
  ADD PRIMARY KEY (`notice_id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`,`username`),
  ADD UNIQUE KEY `roll_no` (`roll_no`);

--
-- Indexes for table `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`id`,`username`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`,`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `class`
--
ALTER TABLE `class`
  MODIFY `class_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `notice`
--
ALTER TABLE `notice`
  MODIFY `notice_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `teachers`
--
ALTER TABLE `teachers`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
