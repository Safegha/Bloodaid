-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 27, 2025 at 05:05 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bloodaid`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `appointment_id` int(11) NOT NULL,
  `Location` varchar(15) DEFAULT NULL,
  `phone_number` int(11) DEFAULT NULL,
  `Preferred_Date` date DEFAULT NULL,
  `Preferred_Time` time DEFAULT NULL,
  `Donor_id` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`appointment_id`, `Location`, `phone_number`, `Preferred_Date`, `Preferred_Time`, `Donor_id`) VALUES
(1, 'Douala', 6745456, '2025-08-01', '08:07:00', 'daniel +125');

-- --------------------------------------------------------

--
-- Table structure for table `bloodrequest`
--

CREATE TABLE `bloodrequest` (
  `Bloodrequest_id` int(11) NOT NULL,
  `Recipient_id` varchar(15) DEFAULT NULL,
  `Bloodrequest_bloodtype` varchar(15) DEFAULT NULL,
  `Request_date` date DEFAULT NULL,
  `quantity` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bloodrequest`
--

INSERT INTO `bloodrequest` (`Bloodrequest_id`, `Recipient_id`, `Bloodrequest_bloodtype`, `Request_date`, `quantity`) VALUES
(36, 'pur+123', 'AB', '2025-09-06', '15KG'),
(46, 'lisa+123', 'O', '2025-08-28', '15KG'),
(49, 'rose+123', 'AB', '2025-08-27', '20kg'),
(54, 'junoir+123', 'A', '2025-08-09', '100');

-- --------------------------------------------------------

--
-- Table structure for table `donor`
--

CREATE TABLE `donor` (
  `Donor_id` varchar(15) NOT NULL,
  `Donor_fullname` varchar(15) NOT NULL,
  `Donor_gender` varchar(15) DEFAULT NULL,
  `Donor_pwd` varchar(50) DEFAULT NULL,
  `Donor_bloodtype` varchar(15) DEFAULT NULL,
  `Donor_email` varchar(50) DEFAULT NULL,
  `Donor_contact` varchar(15) DEFAULT NULL,
  `Date_of_birth` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `donor`
--

INSERT INTO `donor` (`Donor_id`, `Donor_fullname`, `Donor_gender`, `Donor_pwd`, `Donor_bloodtype`, `Donor_email`, `Donor_contact`, `Date_of_birth`) VALUES
('0', 'angeglory', 'Female', 'limyu798', 'O+', 'angeglory009@gmail.com', '677676778', '2025-08-30'),
('daniel +125', 'daniel ', 'Male', '675661928', 'A+', 'daniel0909@gmail.com', '675661923', '2002-02-03');

-- --------------------------------------------------------

--
-- Table structure for table `recipient`
--

CREATE TABLE `recipient` (
  `Recipient_id` varchar(15) NOT NULL,
  `Recipient_fullname` varchar(15) NOT NULL,
  `Recipient_gender` varchar(15) DEFAULT NULL,
  `Recipient_pwd` varchar(50) DEFAULT NULL,
  `Recipient_bloodtype` varchar(15) DEFAULT NULL,
  `Recipient_email` varchar(50) DEFAULT NULL,
  `Recipient_contact` varchar(15) DEFAULT NULL,
  `Date_of_birth` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `recipient`
--

INSERT INTO `recipient` (`Recipient_id`, `Recipient_fullname`, `Recipient_gender`, `Recipient_pwd`, `Recipient_bloodtype`, `Recipient_email`, `Recipient_contact`, `Date_of_birth`) VALUES
('john+123', 'john', 'Male', 'john', 'A+', 'john009@gmail.com', '673134468', '2025-08-08'),
('junoir+123', 'junoir', 'Male', 'junoir09', 'AB-', 'junoir09@gmail.com', '677134567', '0000-00-00'),
('lili+123', 'lili', 'Female', 'lili', 'B+', 'lili009@gmail.com', '97865', '2025-08-29'),
('lisa+123', 'lisa', 'Female', 'lisa', 'B+', 'lisa009@gmail.com', '673134427', '2025-08-29'),
('pablo+123', 'pablo', 'Male', '1234', 'O+', 'borelson53@gmail.com', '679707880', '2006-01-10'),
('pur+123', 'pur', 'Male', 'pur', 'A+', 'pru009@gmail.com', '673134427', '2025-08-28'),
('rose+123', 'rose', 'Female', 'rose', 'O+', 'rose009@gmail.com', '673134489', '2025-08-29');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`appointment_id`),
  ADD KEY `Donor_id` (`Donor_id`);

--
-- Indexes for table `bloodrequest`
--
ALTER TABLE `bloodrequest`
  ADD PRIMARY KEY (`Bloodrequest_id`),
  ADD KEY `Recipient_id` (`Recipient_id`);

--
-- Indexes for table `donor`
--
ALTER TABLE `donor`
  ADD KEY `idx_donor` (`Donor_id`);

--
-- Indexes for table `recipient`
--
ALTER TABLE `recipient`
  ADD PRIMARY KEY (`Recipient_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
  MODIFY `appointment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `bloodrequest`
--
ALTER TABLE `bloodrequest`
  MODIFY `Bloodrequest_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `appointment`
--
ALTER TABLE `appointment`
  ADD CONSTRAINT `appointment_ibfk_1` FOREIGN KEY (`Donor_id`) REFERENCES `donor` (`Donor_id`);

--
-- Constraints for table `bloodrequest`
--
ALTER TABLE `bloodrequest`
  ADD CONSTRAINT `bloodrequest_ibfk_1` FOREIGN KEY (`Recipient_id`) REFERENCES `recipient` (`Recipient_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
