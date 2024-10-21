-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 21, 2024 at 03:37 PM
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
-- Database: `webdev_as1`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `created_at`) VALUES
(1, 'admin', '$2y$10$ozy4k3hux1ghMFitzAyJI.kcXR/EFwYqbHDzZ5XMthjlPay9G9sby', '2024-10-01 12:18:43');

-- --------------------------------------------------------

--
-- Table structure for table `appointments`
--

CREATE TABLE `appointments` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `appointment_date` date DEFAULT NULL,
  `appointment_time` time DEFAULT NULL,
  `status` varchar(50) DEFAULT 'Pending',
  `details` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `appointments`
--

INSERT INTO `appointments` (`id`, `user_id`, `appointment_date`, `appointment_time`, `status`, `details`) VALUES
(6, 2, '2024-10-15', '17:00:00', 'Completed', 'alter seluar'),
(7, 2, '2024-10-17', '12:30:00', 'Confirmed', 'Please come for appointment on the set date'),
(8, 2, '2024-10-18', '17:21:00', 'Pending', 'Alter baju MIB'),
(9, 2, '2024-10-21', '16:00:00', 'Pending', 'Alter baju cara melayu');

-- --------------------------------------------------------

--
-- Table structure for table `portfolio`
--

CREATE TABLE `portfolio` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image_url` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `portfolio`
--

INSERT INTO `portfolio` (`id`, `title`, `description`, `image_url`, `created_at`, `updated_at`) VALUES
(1, 'Soft Opening Iqlas Kreation', 'Managing director and Canada Ambassador at the soft opening of Iqlas Kreation', '67161733d58b3-direcotrNcad.JPG', '2024-10-01 12:00:15', '2024-10-21 08:56:19'),
(2, ' Graduates Class of 2024', 'Congratulations and thank you for making your MIB shirt with Iqlas Kreation! We are truly honored to be a part of your special day 🤩', '671617a9c7ab0-MIBiqlaskreation.png', '2024-10-17 11:12:59', '2024-10-21 08:58:17'),
(3, 'Door2Door Services!', 'Good news for everyone! We are excited to offer our exclusive door-to-door measurement service, bringing the luxury of custom tailoring directly to your doorstep.', '671617f330bb6-DoorToDoorIK.png', '2024-10-17 11:14:11', '2024-10-21 08:59:31'),
(4, 'Baju MIB Custom made', 'Biggest thanks to Megalift for trusting us to make your company uniform for the MBR with His Majesty', '67161934bf120-ramahmesra.png', '2024-10-17 11:14:38', '2024-10-21 09:06:24'),
(7, 'Anomaly detected ', 'Lorem Ipsum hohuhuhuhu', '67161a2ce85df-Zyl Padoru open  v2.png', '2024-10-21 09:09:00', '2024-10-21 09:09:00'),
(8, 'Testing from phone', 'Adding prtfolio from phone', '67165597c7130-IMG_2093.jpeg', '2024-10-21 13:22:31', '2024-10-21 13:22:31');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `created_at`) VALUES
(1, 'Zylioth', 'Amirsabrin02@yahoo.com', '$2y$10$ozy4k3hux1ghMFitzAyJI.kcXR/EFwYqbHDzZ5XMthjlPay9G9sby', '2024-09-14 05:32:54'),
(2, 'Amir Sabrin', 'Amirsabrin@yahoo.com', '$2y$10$bgJnHpSvgwF174eTmjogX.z9depzhE6H70vNhT8FBi5qHPl6Saz8q', '2024-09-14 06:12:13'),
(5, 'Hannah', 'Hannah@gmail.com', '$2y$10$/fxgH.fR6vwMIFgfitdal.ghgo.WIPbDGoeXMA39pCeiyVaXfDomW', '2024-10-21 08:51:54'),
(6, 'Hadif', 'Hadif@gmail.com', '$2y$10$0Spi7P1a9fRSY9E.kjIg1urZqT2RyNnlijxR2Bn7PYgJOk6LPheS.', '2024-10-21 08:52:19'),
(7, 'AnomalyBinAjaib', 'AnomalyBinAjaib@email.com', '$2y$10$RkN.DhQJizdzDFTyO2hjAuvYc2fHPVZVhgfs2pxd/NchoWvJabj3C', '2024-10-21 09:13:04');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `appointments`
--
ALTER TABLE `appointments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `portfolio`
--
ALTER TABLE `portfolio`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `appointments`
--
ALTER TABLE `appointments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `portfolio`
--
ALTER TABLE `portfolio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `appointments`
--
ALTER TABLE `appointments`
  ADD CONSTRAINT `appointments_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
