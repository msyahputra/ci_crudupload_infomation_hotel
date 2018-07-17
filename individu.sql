-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 16, 2018 at 05:18 PM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 5.6.36

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `individu`
--

-- --------------------------------------------------------

--
-- Table structure for table `hotel`
--

CREATE TABLE `hotel` (
  `id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `title2` varchar(50) NOT NULL,
  `description` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `harga` int(11) NOT NULL,
  `rincian1` varchar(255) DEFAULT NULL,
  `rincian2` varchar(50) DEFAULT NULL,
  `rincian3` varchar(50) DEFAULT NULL,
  `rincian4` varchar(50) DEFAULT NULL,
  `rincian5` varchar(50) DEFAULT NULL,
  `rincian6` varchar(50) DEFAULT NULL,
  `rincian7` varchar(50) DEFAULT NULL,
  `rincian8` varchar(50) DEFAULT NULL,
  `nomor` int(13) NOT NULL,
  `email` varchar(100) NOT NULL,
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hotel`
--

INSERT INTO `hotel` (`id`, `title`, `title2`, `description`, `alamat`, `harga`, `rincian1`, `rincian2`, `rincian3`, `rincian4`, `rincian5`, `rincian6`, `rincian7`, `rincian8`, `nomor`, `email`, `foto`) VALUES
(2, 'Whiz Hotel Pemuda Semarang', 'Whiz Hotel ', 'Low cost hotel for backpacker. The location is strategic.', 'Jl. Piere Tendean No. 9 Semarang, Semarang Tengah, Semarang, Jawa Tengah, Indonesia, 50132', 500000, 'Shower and Bathtub', '', '', '', '', '', '', '', 2147483647, 'admin12@gmail.com', 'abc.jpg'),
(3, 'Aston Inn Pandanaran ', 'Semarang', 'Strategic location, clean, good for family or business trip.', 'Pandanaran 40 , Semarang Tengah, Semarang, Jawa Tengah, Indonesia, 50134', 550000, 'Perlengkapan Mandi', '', '', '', '', '', '', '', 2147483647, 'msyahputra27@gmail.com', '123.jpg'),
(4, 'Oaktree Emerald Resort ', 'Semarang', 'The hotel was nice and quiet. Great for honeymoon with nice view. The location is great too, located very close to Semarang central area. ', 'Palm Hill Estate, Jl Palm VI Papandayan, Gajahmungkur Semarang, City Centre, Gajahmungkur, Semarang, Jawa Tengah, Indonesia, 50232', 700000, 'Shower and Bathtub', '', '', '', '', '', '', '', 2147483647, 'emerald@gmail.com', 'slide.jpg'),
(5, 'Aston Inn Pandanaran ', 'Pandanaran', 'Low cost hotel for backpacker. The location is strategic.', 'Pandanaran 40 , Semarang Tengah, Semarang, Jawa Tengah, Indonesia, 50134', 1995000, '1 Kasur Queen', 'WIFI', 'AC', 'Film Sesuai Permintaan', 'Tv satelit/kabel', NULL, NULL, NULL, 2147483647, 'muhammadsyahputra27@yahoo.com', '1073873874.jpg'),
(6, 'Whiz Hotel Pemuda Semarang', 'Pandanaran', 'Credibly embrace visionary internal or \"organic\" sources and business benefits. Collaboratively integrate efficient portals rather than customized customer service. assetsively deliver frictionless services via leveraged interfaces. Conveniently evisculat', 'Jalan Petempen No. 294 Gajah Mada, Semarang Tengah, Semarang, Jawa Tengah, Indonesia, 50133  8.6 / 10', 2147483647, '1 Kasur Queen', 'WIFI', 'AC', 'Film Sesuai Permintaan', 'Tv satelit/kabel', 'Shower and Bathtub', 'Jubah Mandi', 'Perlengkapan Mandi', 2147483647, 'emerald@gmail.com', '12.jpg'),
(7, 'Oaktree Emerald Resort ', 'Freelance Web Designer', 'Credibly embrace visionary internal or \"organic\" sources and business benefits. Collaboratively integrate efficient portals rather than customized customer service. assetsively deliver frictionless services via leveraged interfaces. Conveniently evisculat', 'Jalan Petempen No. 294 Gajah Mada, Semarang Tengah, Semarang, Jawa Tengah, Indonesia, 50133  8.6 / 10', 1000000, '1 Kasur Queen', 'WIFI', 'AC', 'Film Sesuai Permintaan', 'Tv satelit/kabel', 'Shower and Bathtub', 'Jubah Mandi', 'Perlengkapan Mandi', 2147483647, 'yusup@gmail.com', '332.jpg'),
(8, 'Whiz Hotel Pemuda Semarang', 'Freelance Web Designer', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has su', 'Jl. Kapt Piere Tendean No. 21, Semarang Tengah, Semarang, Jawa Tengah, Indonesia, 50132', 1995000, '1 Kasur Queen', 'WIFI', 'AC', 'Film Sesuai Permintaan', 'Tv satelit/kabel', 'Shower and Bathtub', 'Jubah Mandi', 'Perlengkapan Mandi', 2147483647, 'emerald@gmail.com', 'abc1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `users_id` int(11) NOT NULL,
  `first_name` varchar(45) NOT NULL,
  `last_name` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `password` varchar(64) NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `last_login` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`users_id`, `first_name`, `last_name`, `email`, `password`, `is_active`, `created_at`, `last_login`) VALUES
(1, 'Muhammad', 'Syahputra', 'syahputram03@gmail.com', 'ee86f62145ed9fc1eff79fe3be3525e5f8c490fe', 1, '2018-07-16 07:39:19', '2018-07-16 14:56:11');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `hotel`
--
ALTER TABLE `hotel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`users_id`),
  ADD UNIQUE KEY `email_UNIQUE` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `hotel`
--
ALTER TABLE `hotel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `users_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
