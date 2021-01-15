-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 15, 2021 at 04:23 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eauction`
--

-- --------------------------------------------------------

--
-- Table structure for table `jaket`
--

CREATE TABLE `jaket` (
  `id` int(11) UNSIGNED NOT NULL,
  `nama` text NOT NULL,
  `harga` int(11) NOT NULL,
  `stok` int(11) NOT NULL,
  `gambar` text NOT NULL,
  `created_by` int(11) NOT NULL,
  `created_date` datetime NOT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `updated_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `jaket`
--

INSERT INTO `jaket` (`id`, `nama`, `harga`, `stok`, `gambar`, `created_by`, `created_date`, `updated_by`, `updated_date`) VALUES
(1, 'Givenchy Studded Biker Jacket in Leather', 13425000, 27600000, '1610715170_26754c93a3850006b807.jpg', 1, '2021-01-15 06:52:50', NULL, NULL),
(2, 'Givenchy Bomber in Wool and Leather ', 18500000, 21350000, '1610715224_7965813519ec3402862d.jpg', 1, '2021-01-15 06:53:44', NULL, NULL),
(3, 'adidas PT3 Karkaj Windbreaker', 565000, 785000, '1610715613_355dc82e2d4b155922c6.jpg', 1, '2021-01-15 07:00:13', NULL, NULL),
(4, 'Disney x Gucci Donald Duck GG Nylon Jacket ', 11250000, 17550000, '1610715830_2bcafc9603ce1957ff6c.jpg', 1, '2021-01-15 07:03:50', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `kopi`
--

CREATE TABLE `kopi` (
  `id` int(11) UNSIGNED NOT NULL,
  `nama` text NOT NULL,
  `harga` int(11) NOT NULL,
  `stok` int(11) NOT NULL,
  `gambar` text NOT NULL,
  `created_by` int(11) NOT NULL,
  `created_date` datetime NOT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `updated_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `kopi`
--

INSERT INTO `kopi` (`id`, `nama`, `harga`, `stok`, `gambar`, `created_by`, `created_date`, `updated_by`, `updated_date`) VALUES
(1, 'Gucci V-Neck Knitwear Sweater', 1800000, 1950000, '1610714400_946edb9b7eddcb36000a.jpg', 1, '2021-01-15 06:40:00', NULL, NULL),
(2, 'Christian Dior Wol Sweater', 7500000, 7850000, '1610714446_40555f419f344809e9b7.png', 1, '2021-01-15 06:40:46', NULL, NULL),
(3, 'Slytherin Adult Sweatshirt', 350000, 425000, '1610714659_54998225f4eae97d75cd.jpg', 1, '2021-01-15 06:44:19', NULL, NULL),
(4, 'Kenzo Sport Jacquard Monogram Jumper ', 2350000, 2875000, '1610714891_e0d68b9cdb7cee4cf3c0.jpg', 1, '2021-01-15 06:48:11', NULL, NULL),
(5, 'Ken Scott Print Cropped Silk Shirt ', 6150000, 8725000, '1610715924_1d0658d9f088f7c58be3.jpg', 1, '2021-01-15 07:05:24', NULL, NULL),
(6, 'Waffled Shirt Kenzo ', 3550000, 4150000, '1610716395_f4994429b09517bd9d1c.jpg', 1, '2021-01-15 07:13:15', NULL, NULL),
(7, 'Long Shirt with Júlio Pomar illustration', 7500000, 10000000, '1610717954_13b983bec12ca5b3a320.jpg', 1, '2021-01-15 07:39:14', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `version` varchar(255) NOT NULL,
  `class` text NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `batch` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
(1, '2020-12-06-132743', 'App\\Database\\Migrations\\User', 'default', 'App', 1610713362, 1),
(2, '2020-12-06-132801', 'App\\Database\\Migrations\\Kopi', 'default', 'App', 1610713362, 1),
(3, '2020-12-06-132801', 'App\\Database\\Migrations\\Produk', 'default', 'App', 1610713362, 1),
(4, '2020-12-06-132811', 'App\\Database\\Migrations\\Transaksi', 'default', 'App', 1610713362, 1),
(5, '2021-01-15-042006', 'App\\Database\\Migrations\\Jaket', 'default', 'App', 1610713362, 1),
(6, '2021-01-15-042148', 'App\\Database\\Migrations\\Pants', 'default', 'App', 1610713362, 1),
(7, '2021-01-15-084647', 'App\\Database\\Migrations\\Bayar', 'default', 'App', 1610713362, 1);

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id` int(11) UNSIGNED NOT NULL,
  `id_kopi` int(11) UNSIGNED NOT NULL,
  `id_pembeli` int(11) UNSIGNED NOT NULL,
  `jumlah` int(11) NOT NULL,
  `total_harga` int(11) NOT NULL,
  `created_by` int(11) NOT NULL,
  `created_date` datetime NOT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `updated_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id`, `id_kopi`, `id_pembeli`, `jumlah`, `total_harga`, `created_by`, `created_date`, `updated_by`, `updated_date`) VALUES
(1, 7, 2, 10000000, 10000000, 2, '2021-01-15 08:04:25', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) UNSIGNED NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` text NOT NULL,
  `salt` text NOT NULL,
  `avatar` text DEFAULT NULL,
  `role` int(1) NOT NULL DEFAULT 1,
  `created_by` int(11) NOT NULL,
  `created_date` datetime NOT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `updated_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `salt`, `avatar`, `role`, `created_by`, `created_date`, `updated_by`, `updated_date`) VALUES
(1, 'Admin', '2c22668b4fbbec809a3771297af105ea', '60018c79d21e83.07246215', NULL, 0, 0, '2021-01-15 06:37:13', NULL, NULL),
(2, 'Yulivia', 'e4f35ca2c5ee059dd9bfabd1cfc1d5c4', '60018c981ece88.21101801', NULL, 1, 0, '2021-01-15 06:37:44', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jaket`
--
ALTER TABLE `jaket`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kopi`
--
ALTER TABLE `kopi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `transaksi_id_pembeli_foreign` (`id_pembeli`),
  ADD KEY `transaksi_id_kopi_foreign` (`id_kopi`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jaket`
--
ALTER TABLE `jaket`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `kopi`
--
ALTER TABLE `kopi`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `transaksi_id_kopi_foreign` FOREIGN KEY (`id_kopi`) REFERENCES `kopi` (`id`),
  ADD CONSTRAINT `transaksi_id_pembeli_foreign` FOREIGN KEY (`id_pembeli`) REFERENCES `user` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
