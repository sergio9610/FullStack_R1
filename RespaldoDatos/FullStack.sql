-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 26, 2021 at 07:46 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `FullStack`
--

-- --------------------------------------------------------

--
-- Table structure for table `ID_Loging`
--

CREATE TABLE `ID_Loging` (
  `id` int(4) NOT NULL,
  `usuario` varchar(20) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `correo` varchar(20) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `password` varchar(20) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `Fecha` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ID_Loging`
--

INSERT INTO `ID_Loging` (`id`, `usuario`, `correo`, `password`, `Fecha`) VALUES
(29, 'user0', 'user_0@gmail.com', 'clave1', '2021-03-20 03:15:23'),
(30, 'user1', 'user_1@gmail.com', 'password1', '2021-03-20 03:21:13'),
(31, 'user2', 'user_2@gmail.com', 'password2', '2021-03-20 03:40:03'),
(32, 'user3', 'user_3@gmail.com', 'password3', '2021-03-20 03:42:24'),
(33, 'user4', 'user_4@gmail.com', 'password4', '2021-03-20 03:48:25'),
(40, 'user5', 'user_5@gmail.com', 'password5', '2021-03-20 04:43:01'),
(41, 'user6', 'user_6@gmail.com', '12345678', '2021-03-20 05:03:09'),
(42, 'user7', 'user_7@gmail.com', 'password7', '2021-03-20 05:18:00'),
(43, 'user8', 'user_8@gmail.com', '12345678', '2021-03-20 05:32:14'),
(45, 'user9', 'user_9@gmail.com', 'password9', '2021-03-20 06:05:51'),
(47, 'user10', 'us@gmail.com', 'password10', '2021-03-20 06:08:45'),
(49, 'sergio9610', 'sergio96@hotmail.com', '12345678', '2021-03-20 06:15:34');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ID_Loging`
--
ALTER TABLE `ID_Loging`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ID_Loging`
--
ALTER TABLE `ID_Loging`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
