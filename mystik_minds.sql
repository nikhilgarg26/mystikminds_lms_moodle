-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 22, 2024 at 09:56 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mystik_minds`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `category_name`) VALUES
(1, 'engineering'),
(2, 'agriculture'),
(3, 'commerce'),
(4, 'businessmanagement'),
(5, 'law'),
(6, 'basicscience'),
(7, 'healthcare'),
(8, 'liberalarts');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `course_id` int(11) NOT NULL,
  `category` int(11) NOT NULL,
  `course_title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`course_id`, `category`, `course_title`, `description`, `price`) VALUES
(1, 1, 'No Code AI Mechanical Engineering', 'Learn AI implementation in Mechanical Engineering using No-Code AI Platform without writing even a single line of code.', 499),
(2, 2, 'No-Code AI for Agriculture Professionals', 'Learn AI implementation in Agriculture using No-Code AI Platform without writing even a single line of code.', 999),
(3, 1, 'No-Code AI for Civil Engineers', 'Learn AI implementation in Civil Engineering domain using No-Code AI Platform without writing even a single line of code', 499),
(4, 1, 'No-Code AI for Electrical Engineers', 'Learn AI implementation in Electrical Engineering domain using No-Code AI Platform without writing even a single line of code', 499),
(5, 3, 'No-Code AI for Commerce Professionals', 'Learn AI implementation in Commerce domain using No-Code AI Platform without writing even a single line of code.', 499),
(6, 7, 'No-Code AI for Pharmaceutical Professionals', 'Learn AI implementation in Pharmaceutical domain using No-Code AI Platform without writing even a single line of code.', 499);

-- --------------------------------------------------------

--
-- Table structure for table `mycourses`
--

CREATE TABLE `mycourses` (
  `course_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `order_id` varchar(255) NOT NULL,
  `course_id` varchar(255) NOT NULL,
  `payment_id` varchar(255) NOT NULL,
  `signature` varchar(255) NOT NULL,
  `amount` int(11) NOT NULL,
  `currency` varchar(255) NOT NULL DEFAULT 'INR',
  `date` datetime NOT NULL DEFAULT current_timestamp(),
  `user_id` varchar(255) NOT NULL,
  `status` text NOT NULL DEFAULT 'PENDING',
  `phno` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL DEFAULT 'student',
  `created_at` date NOT NULL DEFAULT current_timestamp(),
  `my_courses` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`course_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
