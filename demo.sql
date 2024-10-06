-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 27, 2023 at 05:42 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `demo`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_master`
--

CREATE TABLE `admin_master` (
  `id` int(6) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_master`
--

INSERT INTO `admin_master` (`id`, `username`, `password`) VALUES
(22, 'deep213@gmail.co', '213'),
(23, 'devarsh213@gmail.com', '213'),
(24, 'Hardik312@gmail.com', '321'),
(27, 'mananbhatt265@gmail.com', '2651');

-- --------------------------------------------------------

--
-- Table structure for table `area_master`
--

CREATE TABLE `area_master` (
  `area_id` int(3) NOT NULL,
  `area_name` varchar(40) NOT NULL,
  `city_id` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `area_master`
--

INSERT INTO `area_master` (`area_id`, `area_name`, `city_id`) VALUES
(3, 'Kudasan', 3),
(5, 'Adajan', 4),
(6, 'Memnagar', 1),
(7, 'Sarkhej', 1),
(8, 'Thaltej', 1),
(9, 'Maninagar', 1);

-- --------------------------------------------------------

--
-- Table structure for table `bookmark_master`
--

CREATE TABLE `bookmark_master` (
  `bookmark_id` int(10) NOT NULL,
  `from_id` varchar(30) NOT NULL,
  `com_id` varchar(30) NOT NULL,
  `wor_id` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bookmark_master`
--

INSERT INTO `bookmark_master` (`bookmark_id`, `from_id`, `com_id`, `wor_id`) VALUES
(62, 'mananbhatt265@gmail.com', 'deep123@gmail.com', ''),
(69, 'mananbhatt26511@gmail.com', 'shreeji@gmail.com', ''),
(70, 'mananbhatt26511@gmail.com', '', 'deepthakkar@gmail.com'),
(75, 'mananbhatt265@gmail.com', '', 'deepthakkar@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `book_master`
--

CREATE TABLE `book_master` (
  `book_id` int(10) NOT NULL,
  `com_email` varchar(30) NOT NULL,
  `cost_email` varchar(30) NOT NULL,
  `wor_email` varchar(30) NOT NULL,
  `com_name` varchar(40) NOT NULL,
  `wor_name` varchar(20) NOT NULL,
  `cost_name` varchar(20) NOT NULL,
  `description` varchar(200) NOT NULL,
  `contact` bigint(10) NOT NULL,
  `area` varchar(10) NOT NULL,
  `city` varchar(10) NOT NULL,
  `address` varchar(250) NOT NULL,
  `new_date` date NOT NULL,
  `status` tinyint(1) NOT NULL,
  `skill_list` varchar(20) NOT NULL,
  `otp` int(7) NOT NULL,
  `self` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `book_master`
--

INSERT INTO `book_master` (`book_id`, `com_email`, `cost_email`, `wor_email`, `com_name`, `wor_name`, `cost_name`, `description`, `contact`, `area`, `city`, `address`, `new_date`, `status`, `skill_list`, `otp`, `self`) VALUES
(13, 'mananbhatt265@gmail.com', 'deep123@gmail.com', 'hardik@gmail.com ', 'manan', '', '', 'Pipe broken', 2147483647, 'Thaltej', 'Ahmedabad', 'nothing', '2022-03-05', 2, 'Plumbing', 951357, 0),
(22, '', 'mananbhatt265@gmail.com', 'mananbhatt@gmail.com', '', 'Manan', 'Manan', 'Water Tank repair', 2651, 'Memnagar', 'Ahmedabad', 'nothing', '2022-03-10', 2, 'Electrician', 250905, 1),
(23, '', 'deep123@gmail.com', 'mananbhatt@gmail.com', '', 'Manan', 'Deep', 'Abc', 2147483647, 'Memnagar', 'Ahmedabad', 'nothing', '2022-03-12', 2, 'Electrician', 0, 1),
(24, 'mananbhatt265@gmail.com', 'mananbhatt265@gmail.com', 'mananbhatt265@gmail.com ', 'manan', '', 'Manan', 'Pipe Broken', 2651, 'Sarkhej', 'Ahmedabad', 'nothing', '2022-03-22', 2, 'Plumbing', 405678, 0),
(25, '', 'mananbhatt265@gmail.com', 'kaif@gmail.com', '', 'Kaif', 'Manan', 'Pipe Broken', 2147483647, 'Sarkhej', 'Ahmedabad', 'naajim', '2022-04-01', 0, 'Carpenter', 976313, 1),
(26, '', 'mananbhatt265@gmail.com', 'mananbhatt@gmail.com', '', 'Manan', 'Manan', 'Pipe Broken', 2147483647, 'Memnagar', 'Ahmedabad', 'C-10 Neeldeep flats, Opp. Vishram Nagar Gurukul Road, Memnagar, Ahmedabad-380052', '2022-04-04', 0, 'Electrician', 0, 1),
(28, '', 'mananbhatt26511@gmail.com', 'deepthakkar@gmail.com', '', 'Deep', 'Manan Bhatt', 'Pipe Broken', 9898450728, 'Memnagar', 'Ahmedabad', 'C-10 Neeldeep flats, Opp. Vishram Nagar Gurukul Road, Memnagar, Ahmedabad-380052', '2022-04-05', 0, 'Plumbing', 0, 1),
(34, 'shreeji@gmail.com', 'mananbhatt265@gmail.com', 'mananbhatt265@gmail.com ', 'ShreeJi Electrician', '', 'Manan', 'Switch', 9898450728, 'Memnagar', 'Ahmedabad', 'C-10 Neeldeep flats, Opp. Vishram Nagar Gurukul Road, Memnagar, Ahmedabad-380052', '2022-04-13', 2, 'Electrician', 183760, 0),
(35, '', 'mananbhatt265@gmail.com', 'deepthakkar@gmail.com', '', 'Deep', 'Manan', 'pipe broken', 9898450728, 'Memnagar', 'Ahmedabad', 'C-10 Neeldeep flats, Opp. Vishram Nagar Gurukul Road, Memnagar, Ahmedabad-380052', '2022-05-13', 1, 'Plumbing', 663992, 1);

-- --------------------------------------------------------

--
-- Table structure for table `chat_master`
--

CREATE TABLE `chat_master` (
  `chat_id` int(10) NOT NULL,
  `message` varchar(255) NOT NULL,
  `user_to_id` int(10) NOT NULL,
  `user_from_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `city_master`
--

CREATE TABLE `city_master` (
  `city_id` int(3) NOT NULL,
  `city_name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `city_master`
--

INSERT INTO `city_master` (`city_id`, `city_name`) VALUES
(1, 'Ahmedabad'),
(3, 'Gandhinagar'),
(4, 'Surat'),
(5, 'Rajkot'),
(6, 'Kutch'),
(7, 'Anand');

-- --------------------------------------------------------

--
-- Table structure for table `company_master_table1`
--

CREATE TABLE `company_master_table1` (
  `company_id` int(6) NOT NULL,
  `com_name` varchar(50) NOT NULL,
  `email` varchar(60) NOT NULL,
  `contact` bigint(10) NOT NULL,
  `password` varchar(20) NOT NULL,
  `address` varchar(150) NOT NULL,
  `city` int(3) NOT NULL,
  `area` varchar(10) NOT NULL,
  `visit_charges` int(4) NOT NULL,
  `skill_list` varchar(50) NOT NULL,
  `profile_pic` varchar(400) NOT NULL,
  `discription` varchar(255) NOT NULL,
  `joined_date` datetime(6) NOT NULL DEFAULT current_timestamp(6),
  `com_verified` tinyint(1) NOT NULL,
  `identity_doc` varchar(100) NOT NULL,
  `com_aadhar` bigint(14) NOT NULL,
  `com_block` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `company_master_table1`
--

INSERT INTO `company_master_table1` (`company_id`, `com_name`, `email`, `contact`, `password`, `address`, `city`, `area`, `visit_charges`, `skill_list`, `profile_pic`, `discription`, `joined_date`, `com_verified`, `identity_doc`, `com_aadhar`, `com_block`) VALUES
(1, 'manan', 'mananbhatt265@gmail.com', 123564, '2651', 'nothing', 1, 'Sarkhej', 100, 'Plumbing', 'uploads/img1.jpg', 'nothing', '2022-01-05 19:19:44.467599', 1, 'uploads/img1.jpg', 0, 0),
(2, 'Deep', 'deep123@gmail.com', 989898988, '2651', 'nothing', 1, 'Memnagar', 200, 'Carpenter', 'uploads/img2.jpg', 'nothing', '2022-01-21 18:48:08.819504', 1, 'uploads/img1.jpg', 0, 0),
(4, 'Devarsh', 'devarsh@gmail.com', 2147483647, '2651', 'nothing', 1, 'Thaltej', 100, 'Plumbing', 'uploads/img1.jpg', 'nothing\r\n', '2022-01-27 16:05:01.032842', 1, 'uploads/img1.jpg', 0, 0),
(5, 'Shakti Plumbers', 'hardik@gmail.com', 2147483647, '2651', 'C-10 Neeldeep flats, Opp. Vishram Nagar Gurukul Road, Memnagar, Ahmedabad-380052', 1, 'Memnagar', 100, 'Plumbing', 'uploads/img2.jpg', 'Nothing', '2022-04-03 22:40:38.301366', 1, 'identity_doc/img1.jpg', 12345678910, 1),
(6, 'ShreeJi Electrician', 'shreeji@gmail.com', 9898450728, '2651', 'C-10 Neeldeep flats, Opp. Vishram Nagar Gurukul Road, Memnagar, Ahmedabad-380052', 1, 'Memnagar', 100, 'Electrician', 'uploads/logo.png', 'Nothing', '2022-04-04 17:56:46.701462', 0, 'identity_doc/profile.png', 12345678910, 0);

-- --------------------------------------------------------

--
-- Table structure for table `customer_master`
--

CREATE TABLE `customer_master` (
  `customer_id` int(4) NOT NULL,
  `name` varchar(40) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL,
  `contact` bigint(15) NOT NULL,
  `address` text NOT NULL,
  `city` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer_master`
--

INSERT INTO `customer_master` (`customer_id`, `name`, `email`, `password`, `contact`, `address`, `city`) VALUES
(1, 'Manan', 'mananbhatt265@gmail.com', '2651', 9898450728, 'C-10 Neeldeep flats, Opp. Vishram Nagar Gurukul Road, Memnagar, Ahmedabad-380052', 'Ahmedabad'),
(4, 'Deep', 'deep123@gmail.com', '2651', 9898450728, 'nothing', 'Ahmedabad'),
(5, 'Manan Bhatt', 'mananbhatt2651@gmail.com', '2651', 9898450728, 'nothing', 'Ahmedabad'),
(6, 'Manan Bhatt', 'mananbhatt26@gmail.com', '2651', 9898450728, 'nothing', 'Ahmedabad'),
(7, 'Manan Bhatt', 'hardik@gmail.com', '2651', 9898450728, 'nothing', 'Ahmedabad'),
(8, 'Manan Bhatt', 'mananbhatt26511@gmail.com', '2651', 9898450728, 'C-10 Neeldeep flats, Opp. Vishram Nagar Gurukul Road, Memnagar, Ahmedabad-380052', 'Ahmedabad'),
(10, 'Manan Bhatt', 'manan@gmail.com', '2651', 9898450728, 'nothing', ''),
(13, 'Manan Bhatt', 'mb@gmail.com', '2651', 9898450728, 'nothing', 'Ahmedabad');

-- --------------------------------------------------------

--
-- Table structure for table `rate`
--

CREATE TABLE `rate` (
  `rate_id` int(4) NOT NULL,
  `email` varchar(50) NOT NULL,
  `wor_email` varchar(30) NOT NULL,
  `from_id` varchar(50) NOT NULL,
  `rate` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rate`
--

INSERT INTO `rate` (`rate_id`, `email`, `wor_email`, `from_id`, `rate`) VALUES
(13, '', 'kaif@gmail.com', 'mananbhatt265@gmail.com', 4),
(14, '', 'deepthakkar@gmail.com', 'deepthakkar@gmail.com', 5),
(15, '', 'deepthakkar@gmail.com', 'mananbhatt26511@gmail.com', 4),
(17, 'shreeji@gmail.com', '', 'deepthakkar@gmail.com', 4),
(18, 'shreeji@gmail.com', '', 'mb@gmail.com', 4),
(19, '', 'deepthakkar@gmail.com', 'mananbhatt265@gmail.com', 1);

-- --------------------------------------------------------

--
-- Table structure for table `skill_list`
--

CREATE TABLE `skill_list` (
  `skill_list_id` int(6) NOT NULL,
  `name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `skill_list`
--

INSERT INTO `skill_list` (`skill_list_id`, `name`) VALUES
(1, 'Plumbing'),
(2, 'Electrician'),
(3, 'Carpenter'),
(4, 'Wall Painting'),
(5, 'Labour'),
(6, 'Cleaning');

-- --------------------------------------------------------

--
-- Table structure for table `worker_master`
--

CREATE TABLE `worker_master` (
  `worker_id` int(6) NOT NULL,
  `wor_name` varchar(30) NOT NULL,
  `wor_gender` varchar(6) NOT NULL,
  `wor_email` varchar(50) NOT NULL,
  `wor_password` varchar(15) NOT NULL,
  `wor_contact` bigint(10) NOT NULL,
  `wor_address` varchar(250) NOT NULL,
  `wor_city` int(3) NOT NULL,
  `wor_area` varchar(20) NOT NULL,
  `wor_skills` varchar(15) NOT NULL,
  `wor_exp` int(3) NOT NULL,
  `wor_profile` varchar(100) NOT NULL,
  `wor_aadhar` bigint(14) NOT NULL,
  `identity_doc` varchar(100) NOT NULL,
  `description` varchar(200) NOT NULL,
  `com_name` varchar(60) NOT NULL,
  `wor_self_emp` tinyint(1) NOT NULL,
  `wor_verified` tinyint(1) NOT NULL,
  `wor_block` tinyint(1) NOT NULL,
  `visit_charges` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `worker_master`
--

INSERT INTO `worker_master` (`worker_id`, `wor_name`, `wor_gender`, `wor_email`, `wor_password`, `wor_contact`, `wor_address`, `wor_city`, `wor_area`, `wor_skills`, `wor_exp`, `wor_profile`, `wor_aadhar`, `identity_doc`, `description`, `com_name`, `wor_self_emp`, `wor_verified`, `wor_block`, `visit_charges`) VALUES
(5, 'Manan', 'Male', 'mananbhatt265@gmail.com', '2651', 2651, 'nothing', 1, 'Thaltej', 'Plumbing', 0, 'uploads/img2.jpg', 0, 'identity_doc/img1.jpg', 'Nothing', '6', 0, 1, 0, 0),
(6, 'Hardik', 'Male', 'hardik@gmail.com', '2651', 2147483647, 'nothing', 1, 'Thaltej', 'Plumbing', 5, 'uploads/img12.jpg', 0, 'identity_doc/img7.jpg', 'nothing', '6', 0, 1, 0, 0),
(7, 'Manan', 'Male', 'mananbhatt2651@gmail.com', '2651', 2651, 'nothing', 1, 'Sarkhej', 'Plumbing', 1, 'uploads/img12.jpg', 0, 'identity_doc/Android_Assignment-1 (1).pdf', '', '1', 0, 1, 0, 0),
(8, 'Manan', 'Male', 'mananbhatt@gmail.com', '2651', 2147483647, 'c-10 Neeldip Flats', 1, 'Memnagar', 'Electrician', 2, 'uploads/img9.jpg', 123456789101, 'identity_doc/img11.jpg', 'Nothing', '', 1, 1, 0, 100),
(9, 'Deep', 'Male', 'deep@gmail.com', '2651', 2147483647, 'D-303, Xyz Flats', 3, 'Kudasan', 'Plumbing', 4, '../company/uploads/img1.jpg', 123123141078, '../company/identity_doc/profile.png', 'Nothing', '1', 0, 0, 0, 0),
(10, 'Kaif', 'Male', 'kaif@gmail.com', '00', 2147483647, 'nothing', 1, 'Sarkhej', 'Carpenter', 5, 'uploads/img11.jpg', 121212121121212121, 'identity_doc/img2.jpg', 'ij9j9j9juuhuhuh8ugy7t6f5rd5eds5es', '', 1, 1, 0, 150),
(11, 'Devarsh', 'Male', 'devarsh@gmail.com', '2651', 98989898, 'C-10 Neeldeep flats, Opp. Vishram Nagar Gurukul Road, Memnagar, Ahmedabad-380052', 1, 'Sarkhej', 'Plumbing', 5, 'uploads/img2.jpg', 12345678910, 'identity_doc/img11.jpg', 'nothingg', '', 1, 1, 0, 100),
(13, 'Manan', 'Male', 'mananbhatt9372@gmail.com', '2651', 9898, 'C-10 Neeldeep flats, Opp. Vishram Nagar Gurukul Road, Memnagar, Ahmedabad-380052', 1, 'Memnagar', '1', 5, 'uploads/img2.jpg', 0, 'identity_doc/img1.jpg', 'Nothing', '1', 0, 1, 0, 0),
(14, 'Deep', 'Male', 'deepthakkar@gmail.com', '2651', 2147483647, '', 1, 'Memnagar', 'Plumbing', 1, 'uploads/img.jpg', 12345678910, 'identity_doc/profile.png', 'Nothing', '', 1, 1, 0, 150);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_master`
--
ALTER TABLE `admin_master`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `area_master`
--
ALTER TABLE `area_master`
  ADD PRIMARY KEY (`area_id`),
  ADD KEY `city_id` (`city_id`);

--
-- Indexes for table `bookmark_master`
--
ALTER TABLE `bookmark_master`
  ADD PRIMARY KEY (`bookmark_id`);

--
-- Indexes for table `book_master`
--
ALTER TABLE `book_master`
  ADD PRIMARY KEY (`book_id`);

--
-- Indexes for table `chat_master`
--
ALTER TABLE `chat_master`
  ADD PRIMARY KEY (`chat_id`);

--
-- Indexes for table `city_master`
--
ALTER TABLE `city_master`
  ADD PRIMARY KEY (`city_id`);

--
-- Indexes for table `company_master_table1`
--
ALTER TABLE `company_master_table1`
  ADD PRIMARY KEY (`company_id`);

--
-- Indexes for table `customer_master`
--
ALTER TABLE `customer_master`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `rate`
--
ALTER TABLE `rate`
  ADD PRIMARY KEY (`rate_id`);

--
-- Indexes for table `skill_list`
--
ALTER TABLE `skill_list`
  ADD PRIMARY KEY (`skill_list_id`);

--
-- Indexes for table `worker_master`
--
ALTER TABLE `worker_master`
  ADD PRIMARY KEY (`worker_id`),
  ADD KEY `wor_city` (`wor_city`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_master`
--
ALTER TABLE `admin_master`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `area_master`
--
ALTER TABLE `area_master`
  MODIFY `area_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `bookmark_master`
--
ALTER TABLE `bookmark_master`
  MODIFY `bookmark_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;

--
-- AUTO_INCREMENT for table `book_master`
--
ALTER TABLE `book_master`
  MODIFY `book_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `chat_master`
--
ALTER TABLE `chat_master`
  MODIFY `chat_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `city_master`
--
ALTER TABLE `city_master`
  MODIFY `city_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `company_master_table1`
--
ALTER TABLE `company_master_table1`
  MODIFY `company_id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `customer_master`
--
ALTER TABLE `customer_master`
  MODIFY `customer_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `rate`
--
ALTER TABLE `rate`
  MODIFY `rate_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `skill_list`
--
ALTER TABLE `skill_list`
  MODIFY `skill_list_id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `worker_master`
--
ALTER TABLE `worker_master`
  MODIFY `worker_id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `area_master`
--
ALTER TABLE `area_master`
  ADD CONSTRAINT `city_id` FOREIGN KEY (`city_id`) REFERENCES `city_master` (`city_id`);

--
-- Constraints for table `worker_master`
--
ALTER TABLE `worker_master`
  ADD CONSTRAINT `worker_master_ibfk_1` FOREIGN KEY (`wor_city`) REFERENCES `city_master` (`city_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
