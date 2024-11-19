-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 19, 2024 at 05:40 AM
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
-- Database: `ticketingsystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `addinfopromo`
--

CREATE TABLE `addinfopromo` (
  `ID_Promo` int(11) NOT NULL,
  `Gambar_Promo` varchar(255) DEFAULT NULL,
  `Admin_Uploaded_By` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `choosetiket`
--

CREATE TABLE `choosetiket` (
  `ID_Tiket` int(11) NOT NULL,
  `Nama_Event` varchar(255) NOT NULL,
  `Tujuan_Keberangkatan` varchar(255) NOT NULL,
  `Jenis_Bus` varchar(255) NOT NULL,
  `Tempat_Duduk` int(11) NOT NULL,
  `Keberangkatan` datetime NOT NULL,
  `Harga_Per_Kursi` decimal(10,2) DEFAULT NULL,
  `Harga_1_Unit_Bus` decimal(10,2) DEFAULT NULL,
  `Admin_Managed_By` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pesantiket`
--

CREATE TABLE `pesantiket` (
  `ID_Pesan` int(11) NOT NULL,
  `ID_User` int(11) NOT NULL,
  `Nama_Lengkap` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Nomor_Telepon` varchar(20) NOT NULL,
  `Booking_Type` enum('Full Bus','Seat Event') NOT NULL,
  `Kota_Asal` varchar(255) DEFAULT NULL,
  `Kota_Tujuan` varchar(255) DEFAULT NULL,
  `Tanggal_Keberangkatan` date DEFAULT NULL,
  `Jumlah_Penumpang` int(11) DEFAULT NULL,
  `Rekomendasi_Type_Bus` varchar(255) DEFAULT NULL,
  `Event_Keberangkatan_ID` int(11) DEFAULT NULL,
  `Seat_Nomor` varchar(255) DEFAULT NULL,
  `Metode_Pembayaran` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `riwayattiket`
--

CREATE TABLE `riwayattiket` (
  `ID_Riwayat` int(11) NOT NULL,
  `ID_Pesan` int(11) NOT NULL,
  `ID_User` int(11) NOT NULL,
  `Tanggal_Pesan` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `temjadwal`
--

CREATE TABLE `temjadwal` (
  `ID_Jadwal` int(11) NOT NULL,
  `Kota_Asal` varchar(255) NOT NULL,
  `Kota_Tujuan` varchar(255) NOT NULL,
  `Jam_Take_Off` time NOT NULL,
  `Jam_Pulang` time NOT NULL,
  `Estimasi` varchar(255) NOT NULL,
  `Operation` varchar(255) DEFAULT NULL,
  `Nama_Supir` varchar(255) NOT NULL,
  `Kontak_Supir` varchar(255) DEFAULT NULL,
  `Status_Supir` enum('Siap','Tidak Siap') DEFAULT NULL,
  `Jenis_Bus` varchar(255) DEFAULT NULL,
  `Type_Bus` varchar(255) DEFAULT NULL,
  `Info_Bus` varchar(255) DEFAULT NULL,
  `Admin_Managed_By` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `ID_User` int(11) NOT NULL,
  `Nama_User` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Identify_As` enum('Admin','Cust') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addinfopromo`
--
ALTER TABLE `addinfopromo`
  ADD PRIMARY KEY (`ID_Promo`),
  ADD KEY `Admin_Uploaded_By` (`Admin_Uploaded_By`);

--
-- Indexes for table `choosetiket`
--
ALTER TABLE `choosetiket`
  ADD PRIMARY KEY (`ID_Tiket`),
  ADD KEY `Admin_Managed_By` (`Admin_Managed_By`);

--
-- Indexes for table `pesantiket`
--
ALTER TABLE `pesantiket`
  ADD PRIMARY KEY (`ID_Pesan`),
  ADD KEY `ID_User` (`ID_User`),
  ADD KEY `Event_Keberangkatan_ID` (`Event_Keberangkatan_ID`);

--
-- Indexes for table `riwayattiket`
--
ALTER TABLE `riwayattiket`
  ADD PRIMARY KEY (`ID_Riwayat`),
  ADD KEY `ID_Pesan` (`ID_Pesan`),
  ADD KEY `ID_User` (`ID_User`);

--
-- Indexes for table `temjadwal`
--
ALTER TABLE `temjadwal`
  ADD PRIMARY KEY (`ID_Jadwal`),
  ADD KEY `Admin_Managed_By` (`Admin_Managed_By`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`ID_User`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addinfopromo`
--
ALTER TABLE `addinfopromo`
  MODIFY `ID_Promo` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `choosetiket`
--
ALTER TABLE `choosetiket`
  MODIFY `ID_Tiket` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pesantiket`
--
ALTER TABLE `pesantiket`
  MODIFY `ID_Pesan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `riwayattiket`
--
ALTER TABLE `riwayattiket`
  MODIFY `ID_Riwayat` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `temjadwal`
--
ALTER TABLE `temjadwal`
  MODIFY `ID_Jadwal` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `ID_User` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `addinfopromo`
--
ALTER TABLE `addinfopromo`
  ADD CONSTRAINT `addinfopromo_ibfk_1` FOREIGN KEY (`Admin_Uploaded_By`) REFERENCES `user` (`ID_User`);

--
-- Constraints for table `choosetiket`
--
ALTER TABLE `choosetiket`
  ADD CONSTRAINT `choosetiket_ibfk_1` FOREIGN KEY (`Admin_Managed_By`) REFERENCES `user` (`ID_User`);

--
-- Constraints for table `pesantiket`
--
ALTER TABLE `pesantiket`
  ADD CONSTRAINT `pesantiket_ibfk_1` FOREIGN KEY (`ID_User`) REFERENCES `user` (`ID_User`),
  ADD CONSTRAINT `pesantiket_ibfk_2` FOREIGN KEY (`Event_Keberangkatan_ID`) REFERENCES `choosetiket` (`ID_Tiket`);

--
-- Constraints for table `riwayattiket`
--
ALTER TABLE `riwayattiket`
  ADD CONSTRAINT `riwayattiket_ibfk_1` FOREIGN KEY (`ID_Pesan`) REFERENCES `pesantiket` (`ID_Pesan`),
  ADD CONSTRAINT `riwayattiket_ibfk_2` FOREIGN KEY (`ID_User`) REFERENCES `user` (`ID_User`);

--
-- Constraints for table `temjadwal`
--
ALTER TABLE `temjadwal`
  ADD CONSTRAINT `temjadwal_ibfk_1` FOREIGN KEY (`Admin_Managed_By`) REFERENCES `user` (`ID_User`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
