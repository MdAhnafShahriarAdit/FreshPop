-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 28, 2020 at 04:13 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `freshpop`
--

-- --------------------------------------------------------

--
-- Table structure for table `addcomic`
--

CREATE TABLE `addcomic` (
  `c_id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `genres` varchar(100) NOT NULL,
  `year` varchar(100) NOT NULL,
  `cover` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `addcomic`
--

INSERT INTO `addcomic` (`c_id`, `name`, `genres`, `year`, `cover`) VALUES
(21, 'avenger', 'action', '2022', '1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `addmovie`
--

CREATE TABLE `addmovie` (
  `m_id` int(100) NOT NULL,
  `name` varchar(1000) NOT NULL,
  `genres` varchar(1000) NOT NULL,
  `year` varchar(1000) NOT NULL,
  `cover` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `addmovie`
--

INSERT INTO `addmovie` (`m_id`, `name`, `genres`, `year`, `cover`) VALUES
(1, 'Avengers End Game', 'Action,fiction', '2019', '1.jpg'),
(2, 'Ant man', 'Action,fiction', '2015', '2.jpg'),
(3, 'Captain Marvel', 'Action,fiction', '2019', '3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(100) NOT NULL,
  `pwd` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `pwd`) VALUES
('animesh', '123'),
('animesh', '123'),
('a', '123');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `u_id` int(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `pwd` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`u_id`, `username`, `email`, `pwd`) VALUES
(6, 'aa', 'aa@gmail.com', '123'),
(8, 'dd', 'df@gmail.com', '123'),
(9, 'tt', 't@t.com', '123'),
(10, 'tyuu', 'er@t.com', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addcomic`
--
ALTER TABLE `addcomic`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `addmovie`
--
ALTER TABLE `addmovie`
  ADD PRIMARY KEY (`m_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`u_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addcomic`
--
ALTER TABLE `addcomic`
  MODIFY `c_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `addmovie`
--
ALTER TABLE `addmovie`
  MODIFY `m_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `u_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
