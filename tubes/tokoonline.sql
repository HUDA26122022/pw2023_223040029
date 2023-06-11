-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 11, 2023 at 03:12 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tokoonline`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin@gmail.com', '$2y$10$s094uqbRmqQyeq4qHzLaxeUA.xI.SL9Hey28rTV7it3RnWJRISNh2');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id` int NOT NULL,
  `nama` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id`, `nama`) VALUES
(34, 'Serabi'),
(45, 'Combro'),
(46, 'Minuman');

-- --------------------------------------------------------

--
-- Table structure for table `pesanan`
--

CREATE TABLE `pesanan` (
  `id` int NOT NULL,
  `nama_produk` varchar(255) NOT NULL,
  `jumlah` int NOT NULL,
  `tanggal_pemesanan` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `produck`
--

CREATE TABLE `produck` (
  `id` int NOT NULL,
  `kategori_id` int NOT NULL,
  `nama` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `harga` double NOT NULL,
  `foto` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `detail` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
  `ketersediaan_stok` enum('habis','tersedia') CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT 'tersedia'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `produck`
--

INSERT INTO `produck` (`id`, `kategori_id`, `nama`, `harga`, `foto`, `detail`, `ketersediaan_stok`) VALUES
(13, 34, 'Serabi Kalibeluk', 5000, 'HmzixWkgigf4xC8zfc8y.png', '                                                                                                                Gurih,Manis\r\n                                                                                                                        ', 'tersedia'),
(14, 34, 'Serabi Notosuman', 5000, 'O5rr4UJNUJrgZcGvqjaQ.png', 'Keju, Meises           ', 'tersedia'),
(15, 34, 'Serabi Oncom', 5000, 'GpGp08jNcDqtNeXU4fqb.png', 'Oncom                ', 'tersedia'),
(16, 46, 'Bajigur', 5000, '4NlA0m87yHWiS1abfRTC.png', '                        1 Pcs                                                                   ', 'tersedia'),
(17, 46, 'Es Goyobod', 5000, 'nSFLEZ8wWguQJcEKgGE1.png', '1 Pcs                                               ', 'tersedia'),
(18, 46, 'Kopi Hitam', 5000, 'Q2ZXEoZmOUASKCQ57dau.png', '1 Pcs                                               ', 'tersedia'),
(19, 46, 'Bandrek', 5000, 'xDY1fKI8TJFVr5qNXhKb.png', '1 Pcs                                               ', 'tersedia'),
(20, 46, 'Susu jahe', 5000, 'Z0MMxrasrHnWk8Q0vWqK.png', '1 Pcs                                               ', 'tersedia');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `email` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `password` varchar(255) NOT NULL,
  `konfirmasi_password` varchar(255) NOT NULL,
  `role` varchar(20) DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `konfirmasi_password`, `role`) VALUES
(27, 'ahmadmuliahuda19042004@gmail.com', '$2y$10$Pq8LdT6nMKEvRBc3O0khuuWtC40dUN3m22M.xlJ5I6ELFDjWm01D6', '$2y$10$uYZFaSNwxupVN838r/HDVOW/qDhidCWQRxMiUvxtWUQYELFj3QVZK', 'user'),
(35, 'admin@gmail.com', '$2y$10$8hoCWGn.LdyXrvJlgvgZO.B3HgVhAvlDGTAmvyLUm2UtGTdIeX8g.', '$2y$10$2vGMvtoAGTUQ.uXGbAKGUeCHPnFU3Jn4XRdYS86mlfvltDtGwoqta', 'admin'),
(36, 'ozanbandar@gmail.com', '$2y$10$AmXZiP0rNL8g41ZUrFA1bOv4OghOPxKKp63R4ClPSbhAuHl8Sxcki', '$2y$10$iYgLeekdKDCLfUk0yPgvhufD6mgInNZxN/YK1tk86pz/2jJtwEOXS', 'user'),
(37, 'ozanbandar1@gmail.com', '$2y$10$5KpTDVAlD24z7vi0fkg6.uE2oFNk5AvKEzbjqN2NKVBlrvLTJgxfe', '$2y$10$JLndZfEzcXx1uCP.mzIqqOTLVHYyYzlVY5CI8VMLjkeww7EjCHkPW', 'user'),
(38, 'user2023@gmail.com', '$2y$10$pa1AnEKEdludH/4UdWqyJuM0S7qQjkk4WyIm/x8gv0OEckbyaj6Du', '$2y$10$aEmbEOAPTzB.qLOVd4pWgumsJMqMaJfvdU9k0EckbyMUlHGS2kcUq', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pesanan`
--
ALTER TABLE `pesanan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `produck`
--
ALTER TABLE `produck`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nama` (`nama`),
  ADD KEY `kategori_produck` (`kategori_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `pesanan`
--
ALTER TABLE `pesanan`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `produck`
--
ALTER TABLE `produck`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `produck`
--
ALTER TABLE `produck`
  ADD CONSTRAINT `kategori_produck` FOREIGN KEY (`kategori_id`) REFERENCES `kategori` (`id`) ON DELETE RESTRICT ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
