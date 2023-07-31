-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 27, 2023 at 08:38 AM
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
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(100) NOT NULL,
  `username` varchar(256) NOT NULL,
  `name` varchar(256) NOT NULL,
  `email` varchar(256) NOT NULL,
  `roll_no` int(15) NOT NULL,
  `department` varchar(256) NOT NULL,
  `address` text DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `password` varchar(256) NOT NULL,
  `profile_picture` text DEFAULT NULL,
  `bio` longtext DEFAULT NULL,
  `field_of_research` longtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `username`, `name`, `email`, `roll_no`, `department`, `address`, `phone`, `password`, `profile_picture`, `bio`, `field_of_research`) VALUES
(6, 'anirban19', 'Anirban sarwar', 'itachi.d1924@gmail.com', 1903019, 'cse', NULL, NULL, '$2y$10$1vIFQ4mhZQEL0OrQF3saLek9XqiKiMoUCXW6ZQEwUjNffjKos4ZgG', 'css/background.jpg', 'hi.....', 'nothing');

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE `teachers` (
  `id` int(100) NOT NULL,
  `username` varchar(256) NOT NULL,
  `name` varchar(256) NOT NULL,
  `email` varchar(256) NOT NULL,
  `password` varchar(256) NOT NULL,
  `profile_picture` text DEFAULT NULL,
  `bio` longtext DEFAULT NULL,
  `field_of_research` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`id`, `username`, `name`, `email`, `password`, `profile_picture`, `bio`, `field_of_research`) VALUES
(1, 'ani', 'tanvir', 'meherab69@hotmail.com', '$2y$10$qtE23u77h.XlAfmagWSEteesv2taebvhn/QhkfScrHKK2x1uAl3Nm', 'css/IMG_20211223_011232.jpg', 'what bio you want to see?', NULL);

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
(10, 'anirban19', 'Anirban sarwar', 'itachi.d1924@gmail.com', '$2y$10$1vIFQ4mhZQEL0OrQF3saLek9XqiKiMoUCXW6ZQEwUjNffjKos4ZgG', 'student'),
(11, 'ani', 'tanvir', 'meherab69@hotmail.com', '$2y$10$qtE23u77h.XlAfmagWSEteesv2taebvhn/QhkfScrHKK2x1uAl3Nm', 'teacher');

--
-- Indexes for dumped tables
--

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
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `teachers`
--
ALTER TABLE `teachers`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
