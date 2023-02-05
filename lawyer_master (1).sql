-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 05, 2023 at 08:45 PM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lawyer_master`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_users`
--

CREATE TABLE `admin_users` (
  `id` int NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `admin_users`
--

INSERT INTO `admin_users` (`id`, `username`, `password`) VALUES
(1, 'nour', 'an1705');

-- --------------------------------------------------------

--
-- Table structure for table `cases`
--

CREATE TABLE `cases` (
  `id` int NOT NULL,
  `Case_type` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `cases`
--

INSERT INTO `cases` (`id`, `Case_type`) VALUES
(1, 'Family Case'),
(2, 'Consumer Case'),
(3, 'Criminal Case'),
(4, 'Business Case');

-- --------------------------------------------------------

--
-- Table structure for table `lawyer_info`
--

CREATE TABLE `lawyer_info` (
  `id` int NOT NULL,
  `lawyer_name` varchar(100) NOT NULL,
  `lawyer_email` varchar(100) NOT NULL,
  `phone` varchar(30) NOT NULL,
  `lawyer_pass` varchar(100) NOT NULL,
  `lawyer_case` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `lawyer_info`
--

INSERT INTO `lawyer_info` (`id`, `lawyer_name`, `lawyer_email`, `phone`, `lawyer_pass`, `lawyer_case`) VALUES
(1, 'noor', 'noormoh@gmail.com', '00962-78-125-4342', '123456789', 4);

-- --------------------------------------------------------

--
-- Table structure for table `users_appointments`
--

CREATE TABLE `users_appointments` (
  `id` int NOT NULL,
  `users_info_id` int NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone_num` varchar(20) NOT NULL,
  `appointment_date` varchar(100) NOT NULL,
  `messages` varchar(100) NOT NULL,
  `user_case` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `users_appointments`
--

INSERT INTO `users_appointments` (`id`, `users_info_id`, `name`, `email`, `phone_num`, `appointment_date`, `messages`, `user_case`) VALUES
(17, 33, 'khalid ahmed', 'ii682709@gmail.com', '079989898', '12/12/2022', 'kkkkkk', 2),
(18, 33, 'alaa alzoubi', 'alaaalzoubi65@gmail.com', '0744558858', '12/26/2022', 'dddddddddd', 3),
(20, 33, 'nour', 'ii6@gmail.com', '07888855522', '12/12/2022', 'thx', 4),
(22, 34, 'noor', 'noormohshatnawi@gmail.com', '765544', '12/20/2022', 'kkkkkkkkk', 1),
(23, 34, 'rawan', 'noormohshatnawi@gmail.com', '0778083602', '12/20/2022', 'rtutu', 2),
(24, 36, '25-nour shatnawi', 'noormohshatnawi@gmail.com', '1255456', '02/09/2023', 'hhhhhhhhhhhhhhhhhhhhhhhhhhhhh', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users_info`
--

CREATE TABLE `users_info` (
  `id` int NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `user_email` varchar(100) NOT NULL,
  `user_pass` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `users_info`
--

INSERT INTO `users_info` (`id`, `user_name`, `user_email`, `user_pass`) VALUES
(34, 'nour', 'noor@gmail.com', '12345678'),
(35, 'nour22', 'noor@gmail.com', '12345678'),
(36, 'root', 'noor@gmail.com', '12345678'),
(37, 'test', 'test@gmail.com', '12345678');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_users`
--
ALTER TABLE `admin_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cases`
--
ALTER TABLE `cases`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lawyer_info`
--
ALTER TABLE `lawyer_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users_appointments`
--
ALTER TABLE `users_appointments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users_info`
--
ALTER TABLE `users_info`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_users`
--
ALTER TABLE `admin_users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cases`
--
ALTER TABLE `cases`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `lawyer_info`
--
ALTER TABLE `lawyer_info`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users_appointments`
--
ALTER TABLE `users_appointments`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `users_info`
--
ALTER TABLE `users_info`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
