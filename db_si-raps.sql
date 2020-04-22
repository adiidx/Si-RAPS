-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 20, 2020 at 08:46 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_si-raps`
--

-- --------------------------------------------------------

--
-- Table structure for table `dokumen`
--

CREATE TABLE `dokumen` (
  `id_dokumen` int(11) NOT NULL,
  `standar` varchar(2) NOT NULL,
  `path` varchar(256) NOT NULL,
  `judul_dokumen` varchar(50) NOT NULL,
  `id_user` int(11) NOT NULL,
  `status_dokumen` varchar(16) NOT NULL,
  `tanggal_upload` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `tanggal_validasi` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `nidn` varchar(11) NOT NULL,
  `jabatan` varchar(20) NOT NULL,
  `penanggungjawab_standar` varchar(2) NOT NULL,
  `homebase` varchar(30) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(32) NOT NULL,
  `level` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama`, `nidn`, `jabatan`, `penanggungjawab_standar`, `homebase`, `username`, `password`, `level`) VALUES
(1, 'Hery Kristianto', '-', 'Kepala Tata Usaha', '-', 'Fakultas Teknologi Informasi', 'admin', 'admin', 'Admin'),
(2, 'M. Fatkhur Rizal', '-', 'Staf Tata Usaha', '-', 'Fakultas Teknologi Informasi', 'admin2', 'admin', 'Admin'),
(3, 'Aries Dwi Indriyanti', '0021028109', 'Ketua Program Studi', '-', 'S1 Teknik Informatika', 'kaprodi', 'kaprodi', 'Kaprodi'),
(4, 'Radityo Wiratsongko', '0719028005', 'Tenaga Pengajar', '1', 'S1 Teknik Informatika', 'tim', 'tim', 'Tim Akreditasi'),
(5, 'Mahrus Ali', '0716068601', 'Tenaga Pengajar', '2', 'S1 Teknik Informatika', 'tim2', 'tim', 'Tim Akreditasi'),
(6, 'Indana Lazulfa', '0729079101', 'Tenaga Pengajar', '3', 'S1 Teknik Informatika', 'tim3', 'tim', 'Tim Akreditasi'),
(7, 'Iftitaahul Mufarrihah', '0720059002', 'Tenaga Pengajar', '4', 'S1 Teknik Informatika', 'tim4', 'tim', 'Tim Akreditasi'),
(8, 'Hadi Sucipto', '0705036801', 'Tenaga Pengajar', '5', 'D3 Sistem Informasi', 'tim5', 'tim', 'Tim Akreditasi');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dokumen`
--
ALTER TABLE `dokumen`
  ADD PRIMARY KEY (`id_dokumen`),
  ADD KEY `idx_id_user` (`id_user`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dokumen`
--
ALTER TABLE `dokumen`
  MODIFY `id_dokumen` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `dokumen`
--
ALTER TABLE `dokumen`
  ADD CONSTRAINT `fk_id_user` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE NO ACTION ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
