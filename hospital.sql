-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 14, 2017 at 04:49 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hospital`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `admin_id` int(11) NOT NULL,
  `admin_name` varchar(30) NOT NULL,
  `admin_email` varchar(100) NOT NULL,
  `admin_password` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`admin_id`, `admin_name`, `admin_email`, `admin_password`) VALUES
(1, 'admin', 'admin@admin.com', '8c6976e5b5410415bde908bd4dee15dfb167a9c873fc4bb8a81f6f2ab448a918');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `contact_id` int(11) NOT NULL,
  `contact_name` varchar(30) NOT NULL,
  `contact_email` varchar(30) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`contact_id`, `contact_name`, `contact_email`, `message`) VALUES
(1, 'Puppet', 'x@x.com', 'Mama told me, don''t talk to the stranger'),
(2, 'Mark', 'p@as.com', 'hi fi'),
(3, 'Creed', 'zx@zx.com', 'Appolo-13');

-- --------------------------------------------------------

--
-- Table structure for table `doctors`
--

CREATE TABLE `doctors` (
  `doctor_id` int(11) NOT NULL,
  `ward_id` int(11) NOT NULL,
  `doctor_name` varchar(30) NOT NULL,
  `doctor_email` varchar(30) NOT NULL,
  `doctor_password` varchar(64) NOT NULL,
  `speciality` char(30) NOT NULL,
  `shift` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `doctors`
--

INSERT INTO `doctors` (`doctor_id`, `ward_id`, `doctor_name`, `doctor_email`, `doctor_password`, `speciality`, `shift`) VALUES
(1, 9, 'AAA', 'a@a.com', '72f4be89d6ebab1496e21e38bcd7c8ca0a68928af3081ad7dff87e772eb350c2', 'Throught', '09-14'),
(2, 3, 'BBB', 'b@b.com', '72f4be89d6ebab1496e21e38bcd7c8ca0a68928af3081ad7dff87e772eb350c2', 'Brain', '09-14'),
(3, 2, 'CCC', 'c@c.com', '72f4be89d6ebab1496e21e38bcd7c8ca0a68928af3081ad7dff87e772eb350c2', 'Stomach', '09-14'),
(4, 7, 'DDD', 'd@d.com', '72f4be89d6ebab1496e21e38bcd7c8ca0a68928af3081ad7dff87e772eb350c2', 'Kidney', '09-14'),
(5, 5, 'EEE', 'e@e.com', '72f4be89d6ebab1496e21e38bcd7c8ca0a68928af3081ad7dff87e772eb350c2', 'Heart', '09-14'),
(6, 9, 'FFF', 'f@f.com', '72f4be89d6ebab1496e21e38bcd7c8ca0a68928af3081ad7dff87e772eb350c2', 'Throught', '12-16'),
(7, 5, 'GGG', 'g@g.com', '72f4be89d6ebab1496e21e38bcd7c8ca0a68928af3081ad7dff87e772eb350c2', 'Heart', '12-16'),
(8, 2, 'HHH', 'h@h.com', '72f4be89d6ebab1496e21e38bcd7c8ca0a68928af3081ad7dff87e772eb350c2', 'Stomach', '12-16'),
(9, 3, 'III', 'i@i.com', '72f4be89d6ebab1496e21e38bcd7c8ca0a68928af3081ad7dff87e772eb350c2', 'Brain', '12-16'),
(10, 7, 'JJJ', 'j@j.com', '72f4be89d6ebab1496e21e38bcd7c8ca0a68928af3081ad7dff87e772eb350c2', 'Kidney', '12-16'),
(11, 1, 'KKK', 'k@k.com', '72f4be89d6ebab1496e21e38bcd7c8ca0a68928af3081ad7dff87e772eb350c2', 'Eye', '12-16'),
(12, 6, 'LLL', 'l@l.com', '72f4be89d6ebab1496e21e38bcd7c8ca0a68928af3081ad7dff87e772eb350c2', 'Skin', '14-20'),
(14, 12, 'NNN', 'n@n.com', '72f4be89d6ebab1496e21e38bcd7c8ca0a68928af3081ad7dff87e772eb350c2', 'Chest', '14-20'),
(15, 10, 'OOO', 'o@o.com', '72f4be89d6ebab1496e21e38bcd7c8ca0a68928af3081ad7dff87e772eb350c2', 'Dentist', '14-20'),
(16, 8, 'PPP', 'p@p.com', '72f4be89d6ebab1496e21e38bcd7c8ca0a68928af3081ad7dff87e772eb350c2', 'Blood', '14-18'),
(17, 2, 'QQQ', 'q@q.com', '72f4be89d6ebab1496e21e38bcd7c8ca0a68928af3081ad7dff87e772eb350c2', 'Stomach', '09-15'),
(18, 6, 'ZZZAS', 'zx@zx.com', 'f9f16d97c90d8c6f2cab37bb6d1f1992', 'Skin', '9-2');

-- --------------------------------------------------------

--
-- Table structure for table `patients`
--

CREATE TABLE `patients` (
  `patient_id` int(11) NOT NULL,
  `ward_id` int(11) NOT NULL,
  `treatment_id` int(10) NOT NULL,
  `patient_name` varchar(30) NOT NULL,
  `age` int(3) NOT NULL,
  `sex` char(1) NOT NULL,
  `patient_email` varchar(30) NOT NULL,
  `progress` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `patients`
--

INSERT INTO `patients` (`patient_id`, `ward_id`, `treatment_id`, `patient_name`, `age`, `sex`, `patient_email`, `progress`) VALUES
(1, 4, 1404221148, 'RAR', 68, 'M', 'asdasd@asad.com', 1),
(2, 7, 1404221119, 'TAT', 34, 'M', 'asda@asd.com', 0),
(3, 2, 1404221107, 'IAI', 23, 'F', 'oas@oas.com', 0),
(4, 6, 1404270225, 'Prokas', 18, 'M', 'z@zx.com', 1),
(5, 6, 1404270205, 'Issac', 16, 'M', 'pdp@pdp.com', 0),
(6, 3, 1506101142, 'Jason Statham', 48, '', 'jason@jason.com', 0),
(7, 5, 1506110646, 'ZZZZ', 8, 'M', 'z@z.com', 0),
(8, 2, 1703140452, 'Triple H', 127, 'M', 'x@x.com', 0),
(9, 5, 1703140427, 'Test', 15, 'M', 'test@test.com', 0);

-- --------------------------------------------------------

--
-- Table structure for table `treatments`
--

CREATE TABLE `treatments` (
  `treatment_id` int(10) NOT NULL,
  `doctor_id` int(11) NOT NULL,
  `detail` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `treatments`
--

INSERT INTO `treatments` (`treatment_id`, `doctor_id`, `detail`) VALUES
(1404221119, 1, 'Rhodes'),
(1404221148, 1, 'Dhaka'),
(1404270225, 1, 'Predator');

-- --------------------------------------------------------

--
-- Table structure for table `wards`
--

CREATE TABLE `wards` (
  `ward_id` int(11) NOT NULL,
  `ward_name` varchar(30) NOT NULL,
  `accommodation` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `wards`
--

INSERT INTO `wards` (`ward_id`, `ward_name`, `accommodation`, `status`) VALUES
(1, 'Ophthalmology', 30, 1),
(2, 'Gastroenterology', 30, 1),
(3, 'Neurology', 30, 1),
(4, 'Orthopaedics', 30, 1),
(5, 'Cardiology', 30, 1),
(6, 'Dermatology', 30, 1),
(7, 'Urology', 30, 1),
(8, 'Heamotology', 30, 1),
(9, 'ENT', 30, 1),
(10, 'Dental', 30, 1),
(11, 'Haematology', 30, 1),
(12, 'Pulmonology', 30, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`contact_id`);

--
-- Indexes for table `doctors`
--
ALTER TABLE `doctors`
  ADD PRIMARY KEY (`doctor_id`);

--
-- Indexes for table `patients`
--
ALTER TABLE `patients`
  ADD PRIMARY KEY (`patient_id`);

--
-- Indexes for table `treatments`
--
ALTER TABLE `treatments`
  ADD PRIMARY KEY (`treatment_id`);

--
-- Indexes for table `wards`
--
ALTER TABLE `wards`
  ADD PRIMARY KEY (`ward_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `contact_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `doctors`
--
ALTER TABLE `doctors`
  MODIFY `doctor_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `patients`
--
ALTER TABLE `patients`
  MODIFY `patient_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `treatments`
--
ALTER TABLE `treatments`
  MODIFY `treatment_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1404270226;
--
-- AUTO_INCREMENT for table `wards`
--
ALTER TABLE `wards`
  MODIFY `ward_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
