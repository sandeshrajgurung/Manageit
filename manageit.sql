-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 03, 2022 at 03:20 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `manageit`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_event`
--

CREATE TABLE `add_event` (
  `id` int(11) NOT NULL,
  `event_name` varchar(255) DEFAULT NULL,
  `event_from` varchar(255) DEFAULT NULL,
  `event_to` varchar(255) DEFAULT NULL,
  `location` varchar(255) DEFAULT NULL,
  `event_description` varchar(255) DEFAULT NULL,
  `posted_on` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `add_event`
--

INSERT INTO `add_event` (`id`, `event_name`, `event_from`, `event_to`, `location`, `event_description`, `posted_on`) VALUES
(5, 'Camping', '2022/04/05', '2022/04/07', 'Nagarkot', 'Camping for office team', '2022-04-03 21:31:20'),
(6, 'Team Picnic', '2022/04/18', '2022/04/13', 'kathmandu', 'picnic', '2022-04-03 21:32:42'),
(7, 'Tour', '2022/04/01', '2022/04/21', 'Pokhara', 'Ltsss gooo', '2022-04-10 00:46:00');

-- --------------------------------------------------------

--
-- Table structure for table `add_notice`
--

CREATE TABLE `add_notice` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `posted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `application_leave`
--

CREATE TABLE `application_leave` (
  `id` int(11) NOT NULL,
  `type` varchar(255) DEFAULT NULL,
  `leave_for` varchar(255) DEFAULT NULL,
  `leave_from` varchar(255) DEFAULT NULL,
  `leave_to` varchar(255) DEFAULT NULL,
  `days` int(11) DEFAULT NULL,
  `reason` varchar(255) DEFAULT NULL,
  `applied_at` datetime DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `application_leave`
--

INSERT INTO `application_leave` (`id`, `type`, `leave_for`, `leave_from`, `leave_to`, `days`, `reason`, `applied_at`, `user_id`) VALUES
(8, 'sick', 'Full-day', '2022/04/04', '2022/04/05', 2, 'SIck', '2022-04-03 21:30:12', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `asset`
--

CREATE TABLE `asset` (
  `id` int(11) NOT NULL,
  `asset_type` varchar(255) DEFAULT NULL,
  `given_date` varchar(255) DEFAULT NULL,
  `return_date` varchar(255) DEFAULT NULL,
  `detail` varchar(255) DEFAULT NULL,
  `applied_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `asset`
--

INSERT INTO `asset` (`id`, `asset_type`, `given_date`, `return_date`, `detail`, `applied_at`) VALUES
(2, 'Headphone', '2022/04/01', '2022/04/14', 'Logitech headphone', '2022-04-07 01:36:40');

-- --------------------------------------------------------

--
-- Table structure for table `auth_users`
--

CREATE TABLE `auth_users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `roles_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `auth_users`
--

INSERT INTO `auth_users` (`id`, `name`, `email`, `password`, `roles_id`) VALUES
(6, 'sandesh', 'sandeshrg16@gmail.com', '$2y$10$elHKGPkL0cDtgMMhcufVSecsLYZqhsazR1P4qTwlx1oR7N9SHvzM2', 1),
(7, 'Sandeep', 'sandeep12@gmail.com', '$2y$10$6Bx6O0ZZ0OCrc1yH6o7ZaOV9jRnXQ6jxsIRvzDTb1keFlr1GeiB2G', 3);

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`) VALUES
(1, 'superadmin'),
(2, 'admin'),
(3, 'user');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `gender` enum('male','female') NOT NULL,
  `contact_number` bigint(20) NOT NULL,
  `current_address` varchar(255) DEFAULT NULL,
  `permanent_address` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `date_of_birth` date NOT NULL,
  `status` enum('1','0') DEFAULT NULL,
  `member_since` datetime DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `password` varchar(255) NOT NULL,
  `roles_id` int(255) DEFAULT NULL,
  `bank_account` int(255) DEFAULT NULL,
  `citizenship` int(255) DEFAULT NULL,
  `pan_card` int(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `first_name`, `last_name`, `gender`, `contact_number`, `current_address`, `permanent_address`, `email`, `date_of_birth`, `status`, `member_since`, `created_at`, `updated_at`, `password`, `roles_id`, `bank_account`, `citizenship`, `pan_card`) VALUES
(12, 'sandesh', 'gurung', 'male', 9846, 'ty', 'po', 'sandeshrg16@gmail.com', '2020-06-05', '', '0000-00-00 00:00:00', '2022-03-27 20:50:44', '2022-03-27 20:50:44', '', NULL, NULL, NULL, NULL),
(14, 'steve', 'Jobs', 'male', 9812576548, 'kathmandu', 'pokhara', 'steve12@gmail.com', '1995-02-03', '', '0000-00-00 00:00:00', '2022-04-03 21:28:56', '2022-04-03 21:28:56', '', NULL, NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_event`
--
ALTER TABLE `add_event`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `add_notice`
--
ALTER TABLE `add_notice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `application_leave`
--
ALTER TABLE `application_leave`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `asset`
--
ALTER TABLE `asset`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auth_users`
--
ALTER TABLE `auth_users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `roles_id` (`roles_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `roles_id` (`roles_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `add_event`
--
ALTER TABLE `add_event`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `add_notice`
--
ALTER TABLE `add_notice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `application_leave`
--
ALTER TABLE `application_leave`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `asset`
--
ALTER TABLE `asset`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `auth_users`
--
ALTER TABLE `auth_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `application_leave`
--
ALTER TABLE `application_leave`
  ADD CONSTRAINT `application_leave_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);

--
-- Constraints for table `auth_users`
--
ALTER TABLE `auth_users`
  ADD CONSTRAINT `auth_users_ibfk_1` FOREIGN KEY (`roles_id`) REFERENCES `roles` (`id`);

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`roles_id`) REFERENCES `auth_users` (`roles_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
