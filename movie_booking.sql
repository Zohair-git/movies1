-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 02, 2023 at 08:44 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `movie_booking`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_accounts`
--

CREATE TABLE `tbl_accounts` (
  `id` int(11) NOT NULL,
  `uname` varchar(200) NOT NULL,
  `lastname` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `pfp` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_accounts`
--

INSERT INTO `tbl_accounts` (`id`, `uname`, `lastname`, `email`, `password`, `pfp`) VALUES
(3, 'ARK', 'SMOKE', 'smoke@gmail.com', '1234', './images/images.png');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_addmovies`
--

CREATE TABLE `tbl_addmovies` (
  `id` int(11) NOT NULL,
  `banner` varchar(100) NOT NULL,
  `title` varchar(100) NOT NULL,
  `trailerlink` varchar(10000) NOT NULL,
  `Gold_seats` int(11) NOT NULL,
  `Platinum_seats` int(11) NOT NULL,
  `Movie Date` varchar(200) NOT NULL,
  `Movie Time` varchar(200) NOT NULL,
  `Movie type` varchar(200) NOT NULL,
  `Movie_watchtime` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_addmovies`
--

INSERT INTO `tbl_addmovies` (`id`, `banner`, `title`, `trailerlink`, `Gold_seats`, `Platinum_seats`, `Movie Date`, `Movie Time`, `Movie type`, `Movie_watchtime`) VALUES
(2, './images/ARK FAVICON.png', 'Weekend', 'https://www.youtube.com/embed/watch?v=JfVOs4VSpmA', 150, 200, '2023-03-24', '16:12', '', '00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_ticket`
--

CREATE TABLE `tbl_ticket` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `childrens` int(11) DEFAULT NULL,
  `Adults` int(11) DEFAULT NULL,
  `seat_categories` varchar(100) NOT NULL,
  `user_id` int(11) NOT NULL,
  `m_id` int(11) NOT NULL,
  `movie_name` varchar(200) NOT NULL,
  `movie_date` varchar(200) NOT NULL,
  `movie_time` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_ticket`
--

INSERT INTO `tbl_ticket` (`id`, `name`, `childrens`, `Adults`, `seat_categories`, `user_id`, `m_id`, `movie_name`, `movie_date`, `movie_time`) VALUES
(1, 'zohair', 5, 5, 'Plat Class', 1, 1, ' lol', ' 2023-05-27', ' 17:04'),
(3, 'Daniyal Adeel', 3, 3, 'Golden Class', 1, 1, ' lol', ' 2023-05-28', ' 17:04'),
(4, 'zohair', 5, 5, 'Plat Class', 1, 1, ' lol', ' 2023-03-24', ' 17:04'),
(5, 'zohairadeel987@gmail.com', 5, 5, 'Golden Class', 1, 1, ' lol', ' 2023-06-26', ' 17:04'),
(6, 'zohair', 5, 5, 'Golden Class', 1, 1, ' lol', ' 2023-03-24', ' 17:04'),
(7, '', 0, 0, 'Golden Class', 1, 1, ' lol', ' 2023-03-24', ' 17:04');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user_reviews`
--

CREATE TABLE `tbl_user_reviews` (
  `id` int(11) NOT NULL,
  `review` varchar(200) NOT NULL,
  `rating` int(11) NOT NULL,
  `user_email` varchar(200) NOT NULL,
  `movie_name` int(11) NOT NULL,
  `Name` varchar(200) NOT NULL,
  `pfp` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_user_reviews`
--

INSERT INTO `tbl_user_reviews` (`id`, `review`, `rating`, `user_email`, `movie_name`, `Name`, `pfp`) VALUES
(1, 'GOODD', 4, 'smoke@gmail.com', 0, 'ARK SMOKE', './images/images.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_accounts`
--
ALTER TABLE `tbl_accounts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `tbl_addmovies`
--
ALTER TABLE `tbl_addmovies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_ticket`
--
ALTER TABLE `tbl_ticket`
  ADD PRIMARY KEY (`id`),
  ADD KEY `Foreign key` (`seat_categories`);

--
-- Indexes for table `tbl_user_reviews`
--
ALTER TABLE `tbl_user_reviews`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_accounts`
--
ALTER TABLE `tbl_accounts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_addmovies`
--
ALTER TABLE `tbl_addmovies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_ticket`
--
ALTER TABLE `tbl_ticket`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_user_reviews`
--
ALTER TABLE `tbl_user_reviews`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
