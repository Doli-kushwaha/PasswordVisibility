-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 03, 2023 at 12:57 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `school`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `id` int(11) NOT NULL,
  `username` varchar(155) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` text NOT NULL,
  `confirm_password` text NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`id`, `username`, `email`, `password`, `confirm_password`, `timestamp`) VALUES
(2, 'shweta kushwaha', 'shwetakushwaha@gmail.com', '$2y$10$u72FPAgF82ehuovzkAaSVO573LQX8kOMF9lDzHRddK3Oj9hWlnPiu', '$2y$10$v.JKcPsvoAttT592KvL6aOmmpOJxnALIlS05gn018AzFiVxgiaaQ2', '2023-03-21 15:39:20');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `sid` int(11) NOT NULL,
  `name` varchar(150) DEFAULT NULL,
  `semail` varchar(150) DEFAULT NULL,
  `age` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`sid`, `name`, `semail`, `age`) VALUES
(1, '[value-2]', '[value-3]', 18),
(2, '[sonali]', '[sonali@gmail.com]', NULL),
(3, 'SUNIL', 'SUNIL@GMAIL.COM', 20),
(4, 'AMIR', 'AMIR@GMAIL.COM', 25);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `uid` int(11) NOT NULL,
  `uname` varchar(150) NOT NULL,
  `email` varchar(150) NOT NULL,
  `mob_no` text NOT NULL,
  `photo` varchar(150) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`uid`, `uname`, `email`, `mob_no`, `photo`, `status`, `timestamp`) VALUES
(10, 'abhi', 'abhi@gmail.com', '8596478569', 'image-search-1600-x-840-px-62c6dc4ff1eee-sej.png', 1, '2023-04-25 11:01:33'),
(12, 'brijesh', 'brijesh@gmail.com', '8796587465', 'depositphotos_76357499-stock-photo-top-view-office-desk-mockup.jpg', 1, '2023-04-25 11:23:58'),
(13, 'sagar', 'sagar@gmail.com', '87549658745', 'images.jpg', 1, '2023-04-25 11:50:22'),
(14, 'shweta kushwaha', 'shweta@gmail.com', '8888888888', 'image-search-1600-x-840-px-62c6dc4ff1eee-sej.png', 1, '2023-04-25 11:50:44'),
(15, 'shweta kushwaha', 'shweta@gmail.com', '98745632585', 'users.png', 1, '2023-05-02 11:00:20'),
(16, 'umesh', 'umesh@gmail.com', '9754', '', 1, '2023-05-02 11:02:19'),
(17, 'sonali', 'sonali@gmail.com', '98745697568', '', 1, '2023-05-02 11:02:19'),
(18, 'rahul', 'rahul@gmail.com', '9874563587', '', 1, '2023-05-02 11:03:17'),
(19, 'aniket', 'aniket@gmail.com', '9874563257', '', 1, '2023-05-02 11:03:17'),
(20, 'asd', 'aa@gmail.com', '78965874596', '', 1, '2023-05-02 11:39:26'),
(21, 'anil', 'anil@gmail.com', '9874563258', '', 1, '2023-05-02 11:39:26'),
(22, 'sunil', 'sunilm@gmail.com', '789654126', '', 1, '2023-05-02 11:42:01'),
(23, 'anu', 'anu@gmail.com', '98745632587', '', 1, '2023-05-02 11:42:01');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_login`
--
ALTER TABLE `admin_login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`sid`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_login`
--
ALTER TABLE `admin_login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
