-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 09, 2024 at 05:18 AM
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
-- Database: `crud`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fullName` varchar(400) DEFAULT NULL,
  `nameWithInitials` varchar(200) DEFAULT NULL,
  `nic` varchar(12) NOT NULL,
  `course` varchar(100) NOT NULL,
  `indexNo` varchar(200) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `contactno` varchar(11) DEFAULT NULL,
  `posting_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fullName`, `nameWithInitials`, `nic`, `course`, `indexNo`, `email`, `contactno`, `posting_date`) VALUES
(4, 'iii', 'SDFDFS DASA', '198255203774', 'IT', '', 'nalindadsn@gmail.com', '0704238939', '2024-04-08 03:04:31'),
(5, NULL, NULL, '', '', '', 'suprabha@gmail.com', '0704238939', '2024-04-08 03:11:16'),
(6, '1Suprabha jhjkhjj jhsd jkfhsjkdh kjhd jksf hskdjf h djshfkjdsfh ', '1S p', '', '', '1666', 'nalindadsn123@gmail.com', '0704238939', '2024-04-09 02:03:02'),
(7, 'Suprabha jhjkhjj jhsd jkfhsjkdh kjhd jksf hskdjf h djshfkjdsfh ', 'S p', '', '', '123', 'testass@gmail.com', '0704238939', '2024-04-09 05:53:13');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
