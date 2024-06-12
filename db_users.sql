-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 10, 2023 at 10:08 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

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
-- Table structure for table `cpu`
--

CREATE TABLE `cpu` (
  `cpu_id` varchar(10) NOT NULL,
  `cpu_brand` varchar(10) NOT NULL,
  `cpu_model` varchar(50) NOT NULL,
  `cpu_cost` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cpu`
--

INSERT INTO `cpu` (`cpu_id`, `cpu_brand`, `cpu_model`, `cpu_cost`) VALUES
('14274', 'Intel', 'i5-13600K', 200),
('14785', 'Intel', 'i5-12600K', 150),
('17524', 'Intel', 'i7-13700K', 300),
('17962', 'Intel', 'i7-13705H', 400);

-- --------------------------------------------------------

--
-- Table structure for table `games`
--

CREATE TABLE `games` (
  `game_id` varchar(10) NOT NULL,
  `game_name` varchar(20) NOT NULL,
  `game_release` int(11) NOT NULL,
  `game_price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `games`
--

INSERT INTO `games` (`game_id`, `game_name`, `game_release`, `game_price`) VALUES
('1427', 'Call of Duty: MW', 2019, 70),
('14754', 'Call of Duty : MW II', 2022, 80),
('15478', 'Need For Speed: HEAT', 2019, 25),
('17751', 'Battlefield 2042', 2021, 100),
('36974', 'Forza Horizon 5', 2020, 150);

-- --------------------------------------------------------

--
-- Table structure for table `gpu`
--

CREATE TABLE `gpu` (
  `gpu_id` varchar(10) NOT NULL,
  `gpu_brand` varchar(10) NOT NULL,
  `gpu_model` varchar(50) NOT NULL,
  `gpu_cost` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `gpu`
--

INSERT INTO `gpu` (`gpu_id`, `gpu_brand`, `gpu_model`, `gpu_cost`) VALUES
('14584', 'NVIDIA', 'MSI RTX 3060 VENTUS 2X 12G Oc', 500),
('41521', 'AMD', 'AMD Radeon RX 7900 XTX ', 700),
('621185', 'NVIDIA', 'MSI GeForce RTX 3070 GAMING Z TRIO 8G', 600),
('85145', 'AMD', 'AMD Radeon RX 6800', 800);

-- --------------------------------------------------------

--
-- Table structure for table `motherboard`
--

CREATE TABLE `motherboard` (
  `board_id` varchar(10) NOT NULL,
  `board_brand` varchar(10) NOT NULL,
  `board_model` varchar(50) NOT NULL,
  `board_cost` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `motherboard`
--

INSERT INTO `motherboard` (`board_id`, `board_brand`, `board_model`, `board_cost`) VALUES
('4125', 'MSI', 'MSI H81H-E33', 1254),
('41265', 'ASUS', 'ASUS Z790', 741),
('45346', 'Gigabyte', 'gigabyte b450m ds3h', 800);

-- --------------------------------------------------------

--
-- Table structure for table `psu`
--

CREATE TABLE `psu` (
  `psu_id` varchar(10) NOT NULL,
  `psu_brand` varchar(10) NOT NULL,
  `psu_model` varchar(50) NOT NULL,
  `psu_cost` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `psu`
--

INSERT INTO `psu` (`psu_id`, `psu_brand`, `psu_model`, `psu_cost`) VALUES
('1452', 'MSI', 'MPG A850GF', 150),
('15877', 'ASUS', 'TUF Gaming 850W Gold', 300),
('1752', 'Gigabyte', 'Gigabyte GP-P550B', 440);

-- --------------------------------------------------------

--
-- Table structure for table `puchased_games`
--

CREATE TABLE `puchased_games` (
  `game_id` varchar(10) NOT NULL,
  `user_id` int(11) NOT NULL,
  `pruchased_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `puchased_games`
--

INSERT INTO `puchased_games` (`game_id`, `user_id`, `pruchased_date`) VALUES
('1427', 11, '2023-05-01'),
('17751', 11, '2023-05-11');

-- --------------------------------------------------------

--
-- Table structure for table `rig`
--

CREATE TABLE `rig` (
  `user_id` int(11) NOT NULL,
  `cpu_id` varchar(10) NOT NULL,
  `gpu_id` varchar(10) NOT NULL,
  `board_id` varchar(10) NOT NULL,
  `psu_id` varchar(10) NOT NULL,
  `screen_id` varchar(10) NOT NULL,
  `rig_cost` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `rig`
--

INSERT INTO `rig` (`user_id`, `cpu_id`, `gpu_id`, `board_id`, `psu_id`, `screen_id`, `rig_cost`) VALUES
(11, '14274', '41521', '41265', '1452', '14752', 1600),
(11, '14274', '41521', '45346', '1752', '14527', 1500);

-- --------------------------------------------------------

--
-- Table structure for table `screen`
--

CREATE TABLE `screen` (
  `screen_id` varchar(10) NOT NULL,
  `screen_brand` varchar(10) NOT NULL,
  `screen_model` varchar(50) NOT NULL,
  `screen_cost` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `screen`
--

INSERT INTO `screen` (`screen_id`, `screen_brand`, `screen_model`, `screen_cost`) VALUES
('14527', 'Gigabyte', 'Gigabyte M32UC', 500),
('14752', 'Alienware', 'Alienware 34 QD-OLED', 300),
('47158', 'LG', 'LG Ultragear 27GN950-B', 400);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `user_phone` varchar(50) NOT NULL,
  `user_email` varchar(50) NOT NULL,
  `user_password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `user_phone`, `user_email`, `user_password`) VALUES
(8, '123', '12345678', '123@123.123', '123'),
(9, '14789', '125478', '147@147.147', '123'),
(10, 'Me', '6143', 'azezr@azrezt.azrezt', '   '),
(11, 'Mouadh', '99669612', 'mouadh@gmail.com', '123'),
(12, 'Mouadhh', '99', 'aa@aa.aa', '12345'),
(13, 'Yesser', '5353686', 'qdfesdf@´∂ƒqdf.com', '147'),
(14, 'ITS', '1254', 'ITS@ITS.ITS', '   '),
(15, 'HELLO', '963', 'HELLO@HELLO.HELLO', '   '),
(16, 'azerty', '147852', 'azedsqx@qdsxw.aeqds', '   '),
(17, '264618763', '8721', 'aa@.qq', 'azerty'),
(18, 'Zed', '28177584', 'zed@gmail.com', 'zed'),
(19, 'Yessir', '995646', 'yesser@gmail.com', '   ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cpu`
--
ALTER TABLE `cpu`
  ADD PRIMARY KEY (`cpu_id`);

--
-- Indexes for table `games`
--
ALTER TABLE `games`
  ADD PRIMARY KEY (`game_id`);

--
-- Indexes for table `gpu`
--
ALTER TABLE `gpu`
  ADD PRIMARY KEY (`gpu_id`);

--
-- Indexes for table `motherboard`
--
ALTER TABLE `motherboard`
  ADD PRIMARY KEY (`board_id`);

--
-- Indexes for table `psu`
--
ALTER TABLE `psu`
  ADD PRIMARY KEY (`psu_id`);

--
-- Indexes for table `puchased_games`
--
ALTER TABLE `puchased_games`
  ADD PRIMARY KEY (`game_id`,`user_id`),
  ADD KEY `user_cons` (`user_id`);

--
-- Indexes for table `rig`
--
ALTER TABLE `rig`
  ADD PRIMARY KEY (`user_id`,`cpu_id`,`gpu_id`,`board_id`,`psu_id`,`screen_id`),
  ADD KEY `cpu_cons` (`cpu_id`),
  ADD KEY `gpu_cons` (`gpu_id`),
  ADD KEY `board_con` (`board_id`),
  ADD KEY `screen_con` (`psu_id`),
  ADD KEY `screens` (`screen_id`);

--
-- Indexes for table `screen`
--
ALTER TABLE `screen`
  ADD PRIMARY KEY (`screen_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `puchased_games`
--
ALTER TABLE `puchased_games`
  ADD CONSTRAINT `game_cons` FOREIGN KEY (`game_id`) REFERENCES `games` (`game_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `user_cons` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `rig`
--
ALTER TABLE `rig`
  ADD CONSTRAINT `board_con` FOREIGN KEY (`board_id`) REFERENCES `motherboard` (`board_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `cpu_cons` FOREIGN KEY (`cpu_id`) REFERENCES `cpu` (`cpu_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `gpu_cons` FOREIGN KEY (`gpu_id`) REFERENCES `gpu` (`gpu_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `psu_con` FOREIGN KEY (`psu_id`) REFERENCES `psu` (`psu_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `screens` FOREIGN KEY (`screen_id`) REFERENCES `screen` (`screen_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `user_con` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
