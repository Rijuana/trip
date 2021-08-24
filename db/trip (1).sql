-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 24, 2021 at 02:43 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `trip`
--

-- --------------------------------------------------------

--
-- Table structure for table `trip`
--

CREATE TABLE `trip` (
  `sno` int(3) NOT NULL,
  `name` text NOT NULL,
  `age` int(3) NOT NULL,
  `gender` varchar(8) NOT NULL,
  `email` varchar(22) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `other` text NOT NULL,
  `dt` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `trip`
--

INSERT INTO `trip` (`sno`, `name`, `age`, `gender`, `email`, `phone`, `other`, `dt`) VALUES
(1, 'binoy', 30, 'male', 'bino@gmail.com', '2456131', 'i m binoy.', '2021-08-18'),
(2, 'nauman', 2, 'male', 'nauman@gmail.com', '1234567890', 'i m nauman', '2021-08-18'),
(3, 'avay', 16, 'male', 'wvy@gmail.com', '7418', 'i m avay', '2021-08-18'),
(4, 'syed', 29, 'male', 'abc@gmail.com', '5554556', 'i m syed', '2021-08-18'),
(5, 'wazir', 29, 'male', 'wazir@gmail.com', '7418', 'i m wazir', '2021-08-18'),
(6, 'rijuana', 26, 'female', 'rijuana@gmail.com', '1234567890', 'i m riju', '2021-08-18'),
(7, 'sana', 55, 'female', 'wvy@gmail.com', '446', 'i m sana', '2021-08-18'),
(8, 'juhi', 0, 'female', 'kih@gmail.com', '1458566', 'i m juhi', '2021-08-18'),
(9, 'katrina', 29, 'female', 'wvy@gmail.com', '7418', 'i m katrina', '2021-08-18'),
(10, 'syed', 55, 'male', 'abc@gmail.com', '446', 'i m sahid', '2021-08-18'),
(11, 'nauman', 29, 'male', 'kih@gmail.com', '5458455', 'i m nimu', '2021-08-18'),
(12, 'ranbir', 32, 'male', 'gahbh@gmail.com', '124578', 'i m ranbir', '2021-08-18'),
(13, 'ranveer', 40, 'male', 'juht@gmail.com', '5554556', 'i m ranveer', '2021-08-18'),
(14, 'imraan', 28, 'male', 'kih@gmail.com', '1234567890', 'i m imraan', '2021-08-18'),
(15, 'avay', 29, 'male', 'rijuana@gmail.com', '5458455', 'bad', '2021-08-18'),
(16, 'avay', 45, 'male', 'abc@gmail.com', '446', 'good', '2021-08-18'),
(17, 'syed', 25, 'female', 'wvy@gmail.com', '7418', 'hello', '2021-08-18'),
(18, 'wazir', 26, 'male', 'rijuana@gmail.com', '446', 'good', '2021-08-18'),
(19, 'deepika', 36, 'female', 'abc@gmail.com', '2456131', 'good', '2021-08-18'),
(20, 'shreya', 55, 'female', 'rijuana@gmail.com', '5554556', 'good', '2021-08-18'),
(21, 'avay', 25, 'male', 'kih@gmail.com', '5458455', 'bad', '2021-08-18'),
(22, 'bachan', 85, 'male', 'abc@gmail.com', '446', 'bad', '2021-08-18'),
(23, 'binoy', 26, 'male', 'wvy@gmail.com', '2456131', 'binoy here', '2021-08-18'),
(24, 'rizwan', 32, 'male', 'kih@gmail.com', '446', 'hello', '2021-08-18'),
(25, 'arif', 55, 'male', 'wazir@gmail.com', '5554556', 'hello worls', '2021-08-18'),
(26, 'sudip', 85, 'female', 'nauman@gmail.com', '446', 'good', '2021-08-18'),
(27, 'sudipta', 85, 'female', 'wvy@gmail.com', '581556', 'bye', '2021-08-18'),
(28, 'nagma', 26, 'female', 'abc@gmail.com', '5554556', 'see you', '2021-08-18'),
(29, 'binoy', 29, 'male', 'abc@gmail.com', '5554556', 'i m binoy', '2021-08-18'),
(30, 'pallabi', 26, 'female', 'wvy@gmail.com', '5458455', 'hello india', '2021-08-18'),
(31, 'nauman', 29, 'male', 'wvy@gmail.com', '1234567890', 'i m a good boy.', '2021-08-18'),
(32, 'uday', 55, 'male', '', '7418', 'no email', '2021-08-18'),
(33, 'chopra', 53, 'male', '', '2456131', 'no email', '2021-08-18'),
(34, 'alia', 27, 'female', 'abc@gmail.com', '', 'no mobile', '2021-08-18'),
(35, 'ashif', 8, 'male', 'kih@gmail.com', '45125', 'hello', '2021-08-18'),
(36, 'binoy', 7, 'male', 'abc@gmail.com', '1234567890', 'i m here.', '2021-08-18'),
(37, 'binoy', 6, 'male', 'abc@gmail.com', '5554556', 'i m here.', '2021-08-18'),
(38, 'bikash', 12, 'male', 'kih@gmail.com', '7418', 'done.', '2021-08-18'),
(39, 'naaz  ', 26, 'female', 'wvy@gmail.com', '5458455', 'i m naaz', '2021-08-23'),
(40, 'imraan', 45, 'male', 'wvy@gmail.com', '446', 'i m imraan', '2021-08-23'),
(41, 'saba', 18, 'female', 'kih@gmail.com', '5554556', 'i m saba', '2021-08-23'),
(42, 'abdul kalam', 80, 'male', 'abc@gmail.com', '7418', 'i m kalam', '2021-08-24'),
(43, 'rijuana', 29, 'female', 'wvy@gmail.com', '446', 'I M RIJU', '2021-08-24');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `trip`
--
ALTER TABLE `trip`
  ADD PRIMARY KEY (`sno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `trip`
--
ALTER TABLE `trip`
  MODIFY `sno` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
