-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 27, 2022 at 09:20 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rsvp`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `id` int(10) UNSIGNED NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`id`, `full_name`, `username`, `password`) VALUES
(12, 'Administrator', 'admin', 'E10ADC3949BA59ABBE56E057F20F883E'),
(13, 'taanes', 'taanes', 'd2f72ca6f76332fa4f24d0b3e41b91b3');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_category`
--

CREATE TABLE `tbl_category` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(100) NOT NULL,
  `image_name` varchar(255) NOT NULL,
  `featured` varchar(10) NOT NULL,
  `active` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_category`
--

INSERT INTO `tbl_category` (`id`, `title`, `image_name`, `featured`, `active`) VALUES
(4, 'Birthday Party', 'birthdayParty.png', 'Yes', 'Yes'),
(5, 'Wedding ', 'wedding.jpeg', 'Yes', 'Yes'),
(9, 'Festival', 'festival.jpg', 'Yes', 'Yes'),
(10, 'Party', 'party.jpeg', 'Yes', 'Yes');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_event`
--

CREATE TABLE `tbl_event` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `image_name` varchar(255) NOT NULL,
  `category_id` int(10) UNSIGNED NOT NULL,
  `featured` varchar(10) NOT NULL,
  `active` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_event`
--

INSERT INTO `tbl_event` (`id`, `title`, `description`, `price`, `image_name`, `category_id`, `featured`, `active`) VALUES
(36, 'Deepavali', 'Deepavali, or also known as Diwali, is a festival of lights celebrated by those of Hindu faith. It is one of the most important festivals of the year for the Hindus who celebrate by performing traditional customs at homes. Just like most major celebrations by other communities, Deepavali is a time for family reunions.', '50.00', 'Event-Name-46.jpg', 9, 'Yes', 'Yes'),
(37, 'Hari Raya', 'Hari Raya Aidilfitri is the day that marks the end of Ramadan, the Islamic holy month of dawn-to-sunset fasting.\r\n\r\nHari Raya is one of the biggest holidays in Malaysia, and many Muslims return to their family home driving or flying home for a couple of days before the day to be with their families and loved ones.', '50.00', 'Event-Name-417.jpg', 9, 'Yes', 'Yes'),
(38, '1st year Birthday', '1st birthdays are always special and a celebration to a wonderful beginning so host a memorable first birthday party at one of these cute and adorable venues and make this a celebration to remember!', '50.00', 'Event-Name-5545.jpg', 4, 'Yes', 'Yes'),
(39, '21st Birthday', 'Looking for some great birthday ideas for a 21st birthday party? See our collection of party decorations, favors, food and drinks that everyone will love.', '50.00', 'Event-Name-1514.jpg', 4, 'Yes', 'Yes'),
(40, 'indian wedding ', '', '50.00', 'Event-Name-1988.jpg', 5, 'Yes', 'Yes'),
(41, 'Beach Wedding ', '', '50.00', 'Event-Name-4671.jpg', 5, 'Yes', 'Yes');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order`
--

CREATE TABLE `tbl_order` (
  `id` int(10) UNSIGNED NOT NULL,
  `event` varchar(150) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `qty` int(11) NOT NULL,
  `total` decimal(10,2) NOT NULL,
  `order_date` datetime NOT NULL,
  `status` varchar(50) NOT NULL,
  `customer_name` varchar(150) NOT NULL,
  `customer_contact` varchar(20) NOT NULL,
  `customer_email` varchar(150) NOT NULL,
  `customer_address` varchar(255) NOT NULL,
  `time_end` time NOT NULL,
  `time_start` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_order`
--

INSERT INTO `tbl_order` (`id`, `event`, `price`, `qty`, `total`, `order_date`, `status`, `customer_name`, `customer_contact`, `customer_email`, `customer_address`, `time_end`, `time_start`) VALUES
(42, 'Deepavali', '500.00', 100, '50000.00', '2022-11-22 00:00:00', 'Booked', 'jvbue', '0187704305', 'taanes@gmail.com', 'rfrtrreftgrf', '00:45:00', '22:43:00'),
(43, 'Deepavali', '50.00', 1, '50.00', '2022-11-26 00:00:00', 'Booked', 'jvbue', '0187704305', 'kudbfcoufv@gmail.com', 'glvfno;ufbhbhvuuvr', '18:11:00', '04:09:00');

-- --------------------------------------------------------

--
-- Table structure for table `user_form`
--

CREATE TABLE `user_form` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_form`
--

INSERT INTO `user_form` (`id`, `name`, `email`, `password`, `image`) VALUES
(1, 'Taanes', 'taanes.C@gmail.com', '9dea2ad6a9bc0f4fd2ecc0445e0f5277', 'DSC00350.JPG'),
(2, 'Thinesh', 'thinesh7511@gmail.com', '4cf4b59aa4ce4f6b00bb6f55091e1a36', ''),
(0, 'taanes ', 'tmselvadurai@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', ''),
(0, 'tin', 'tin@gmail.com', '', ''),
(0, '', '', '', ''),
(0, '', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_category`
--
ALTER TABLE `tbl_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_event`
--
ALTER TABLE `tbl_event`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_order`
--
ALTER TABLE `tbl_order`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tbl_category`
--
ALTER TABLE `tbl_category`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tbl_event`
--
ALTER TABLE `tbl_event`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `tbl_order`
--
ALTER TABLE `tbl_order`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
