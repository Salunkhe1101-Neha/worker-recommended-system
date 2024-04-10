-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 22, 2022 at 05:40 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `field_service_assistance`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `mobile` varchar(15) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(100) NOT NULL,
  `created_date` datetime NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `name`, `mobile`, `email`, `password`, `created_date`, `status`) VALUES
(1, 'Ajay', '7385284210', 'ajay@gmail.com', '1234', '2022-12-19 14:06:26', 1);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `category_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `created_date` datetime NOT NULL DEFAULT current_timestamp(),
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`category_id`, `title`, `created_date`, `status`) VALUES
(4, 'Welder', '2022-12-18 10:40:59', 1),
(9, 'Electrician', '2022-12-18 10:44:33', 1),
(10, 'Fitter', '2022-12-21 15:35:31', 1),
(11, 'Carpainter', '2022-12-22 14:20:44', 1),
(12, 'Plumber', '2022-12-22 14:20:52', 1);

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `feedback_id` int(11) NOT NULL,
  `description` varchar(2000) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `locations`
--

CREATE TABLE `locations` (
  `location_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_date` datetime NOT NULL DEFAULT current_timestamp(),
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `locations`
--

INSERT INTO `locations` (`location_id`, `name`, `created_date`, `status`) VALUES
(4, 'Pune', '2022-12-19 18:25:36', 1),
(6, 'Kolhapur', '2022-12-22 11:41:32', 1),
(7, 'Pandharpur', '2022-12-22 14:21:06', 1),
(8, 'Solapur', '2022-12-22 14:21:12', 1);

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `post_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(2000) NOT NULL,
  `user_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `location_id` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `technicians`
--

CREATE TABLE `technicians` (
  `technician_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `mobile` varchar(15) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `adhar_no` varchar(255) NOT NULL,
  `experience` varchar(255) NOT NULL,
  `photo` varchar(1000) NOT NULL,
  `password` varchar(100) NOT NULL,
  `category_id` int(11) NOT NULL,
  `location_id` int(11) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `technicians`
--

INSERT INTO `technicians` (`technician_id`, `name`, `mobile`, `email`, `address`, `adhar_no`, `experience`, `photo`, `password`, `category_id`, `location_id`, `created_at`, `status`) VALUES
(1, 'Amar Pawar', '7845125263', 'amar@gmail.com', 'Atpadi', '7865789099', '9 Year', 'tech_pics/team5.jpg', '1234', 9, 4, '2022-12-22 08:14:53', 1),
(2, 'Shaym P. Kadam', '9922113344', 'shyam@gmail.com', 'Near ABC chowk', '7854656512121', '5 Year', 'tech_pics/team3.jpg', '123', 12, 7, '2022-12-22 14:26:34', 1),
(3, 'Akash Patil', '42676454353', 'akash@gmail.com', 'Near KPC College', '34268926546', '2 Year', 'tech_pics/team4.jpg', '123', 12, 7, '2022-12-22 14:39:42', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `mobile` varchar(15) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `photo` varchar(1000) NOT NULL,
  `password` varchar(100) NOT NULL,
  `location_id` int(11) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `name`, `mobile`, `email`, `address`, `photo`, `password`, `location_id`, `created_at`, `status`) VALUES
(1, 'Sarthak Sagar', '8585856552', 'sarthak@gmail.com', 'Near St Stand', 'user_pics/team4.jpg', '1234', 7, '2022-12-22 17:52:03', 1),
(2, 'Rahul Kumar', '7845123652', 'rahul@gmail.com', 'Near ABC', 'user_pics/team6.jpg', '123', 6, '2022-12-22 18:49:53', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`feedback_id`);

--
-- Indexes for table `locations`
--
ALTER TABLE `locations`
  ADD PRIMARY KEY (`location_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`post_id`);

--
-- Indexes for table `technicians`
--
ALTER TABLE `technicians`
  ADD PRIMARY KEY (`technician_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `feedback_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `locations`
--
ALTER TABLE `locations`
  MODIFY `location_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `technicians`
--
ALTER TABLE `technicians`
  MODIFY `technician_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
