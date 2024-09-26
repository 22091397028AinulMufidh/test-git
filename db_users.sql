-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 21, 2023 at 05:32 AM
-- Server version: 10.4.21-MariaDB-log
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_users`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `login_id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `tgl_dafttar` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`login_id`, `username`, `password`, `tgl_dafttar`) VALUES
(1, 'admin', '81dc9bdb52d04dc20036dbd8313ed055', '2023-12-11 10:55:15');

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `id_barang` int(11) NOT NULL,
  `nama_barang` varchar(50) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `harga` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `tgl_daftar` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`, `tgl_daftar`) VALUES
(1, 'admin', 'admin', '2023-12-11 20:41:32');

-- --------------------------------------------------------

--
-- Table structure for table `tabel_users`
--

CREATE TABLE `tabel_users` (
  `fullname` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tabel_users`
--

INSERT INTO `tabel_users` (`fullname`, `username`, `email`, `password`) VALUES
('', 'admin', 'admin@gmail.com', 'admin123'),
('Caroline ', 'carl', 'caroline56@gmail.com', 'carolinecarl12'),
('David Beckham', 'David538', 'davidbeck23@gmai.com', 'davidbeck9736'),
('john doe', 'johndoe', 'johndoe@gmail.com', 'johndoe123'),
('Lionel Messi', 'messi618', 'lionelmessi12@gmail.com', 'lionelmessi63'),
('Mark clark', 'markclark', 'markclark25@gmail.com', 'markclark827496'),
('Skylark', 'skylark_', 'skylark576@gmail.com', '6898skylark'),
('Taylor Swift', 'taylorswift', 'taylorswift@gmail.com', 'Taylor5678');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_user` int(10) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `tgl_daftar` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_user`, `username`, `email`, `password`, `tgl_daftar`) VALUES
(1, 'admin', 'admin@gmail.com', 'admin123', '2023-11-30 09:00:35'),
(2, 'user', 'user@gmail.com', 'user123', '2023-11-30 09:01:27'),
(3, 'ainul', 'ainul@gmail.com', 'ainul123', '2023-12-11 22:26:20'),
(4, 'john', 'john@gmail.com', '$2y$10$CCiJQMRW05o3DtnOKZ0I2OKgCIyjjsNdy9ZxfdqamGT', '2023-12-11 22:36:55'),
(5, 'taylor', 'taylor@gmail.com', '$2y$10$9x5EDoO9KkLVBmbgdve72O8uZJLc87NnqR8Od0RpiEb', '2023-12-11 22:47:10'),
(6, 'lesley', 'lesley@gmail.com', '$2y$10$7JMMngkdBeSki0irHS1wwejXtZhWZXKsICbJ5nt0ukI', '2023-12-11 23:07:47'),
(7, 'lance', 'lance@gmail.com', '$2y$10$YzTQaH8E8OCcYMXANr/wSugLPnh0ZSh7PvnEejGVku3', '2023-12-12 07:04:19'),
(8, 'mark', 'mark@gmail.com', 'mark', '2023-12-12 11:46:20'),
(9, 'clark', 'clark@gmail.com', '$2y$10$paB.GYpT5IqJDyMl9h17l.dEYRcEL9XEUUPUQYafdLE', '2023-12-12 12:13:40'),
(10, 'joy', 'joy@gmail.com', 'joy123', '2023-12-14 09:09:29'),
(11, 'ainul', 'ainul@gmail.com', '$2y$10$Yi/4ehvK9w7CMF/QbF/RleScPdVX6RHxngtqVGcHZzt', '2023-12-20 22:12:02');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`login_id`);

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id_barang`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tabel_users`
--
ALTER TABLE `tabel_users`
  ADD PRIMARY KEY (`fullname`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `login_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
  MODIFY `id_barang` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
