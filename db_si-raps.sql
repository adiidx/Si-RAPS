-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 08, 2020 at 04:55 PM
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
-- Table structure for table `auth`
--

CREATE TABLE `auth` (
  `id_auth` int(11) NOT NULL,
  `kriteria` int(11) DEFAULT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(32) NOT NULL,
  `id_hak_akses` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `auth`
--

INSERT INTO `auth` (`id_auth`, `kriteria`, `username`, `password`, `id_hak_akses`) VALUES
(1, NULL, 'admin', 'admin', 1),
(2, NULL, 'admin2', 'admin', 1),
(3, 0, 'kaprodi', 'kaprodi', 3),
(4, 1, 'tim', 'tim', 2),
(5, 2, 'tim2', 'tim', 2),
(6, 3, 'tim3', 'tim', 2),
(7, 4, 'tim4', 'tim', 2),
(8, 5, 'tim5', 'tim', 2),
(9, 6, 'tim6', 'tim', 2),
(10, 7, 'tim7', 'tim', 2),
(11, 8, 'tim8', 'tim', 2),
(12, 9, 'tim9', 'tim', 2);

-- --------------------------------------------------------

--
-- Table structure for table `dokumen`
--

CREATE TABLE `dokumen` (
  `id_dokumen` int(11) NOT NULL,
  `kriteria` int(11) NOT NULL,
  `judul_dokumen` varchar(255) DEFAULT NULL,
  `nama_dokumen` varchar(255) NOT NULL,
  `path` varchar(255) NOT NULL,
  `penyusun` int(11) NOT NULL,
  `status_dokumen` varchar(16) NOT NULL,
  `tanggal_upload` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `tanggal_validasi` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dokumen`
--

INSERT INTO `dokumen` (`id_dokumen`, `kriteria`, `judul_dokumen`, `nama_dokumen`, `path`, `penyusun`, `status_dokumen`, `tanggal_upload`, `tanggal_validasi`) VALUES
(1, 1, 'Visi, Misi, Tujuan dan Sasaran Serta Strategi Pencapaian', '1_1-Visi_Misi_Tujuan_dan_Sasaran_Serta_Strategi_Pencapaian.pdf', './uploads/dokumen/1_1-Visi_Misi_Tujuan_dan_Sasaran_Serta_Strategi_Pencapaian.pdf', 4, 'Telah Disetujui', '2020-05-02 23:05:52', '2020-05-02 18:20:50'),
(2, 1, 'Sosialisasi', '1_2-Sosialisasi.pdf', './uploads/dokumen/1_2-Sosialisasi.pdf', 4, 'Belum Divalidasi', '2020-05-08 21:40:38', NULL),
(3, 2, 'Sistem Tata Pamong', '2_1-Sistem_Tata_Pamong.pdf', './uploads/dokumen/2_1-Sistem_Tata_Pamong.pdf', 5, 'Telah Disetujui', '2020-05-02 23:21:33', '2020-05-02 18:41:32'),
(4, 2, 'Kepemimpinan', '2_2-Kepemimpinan.pdf', '', 5, 'Telah Disetujui', '2020-05-08 07:41:18', NULL),
(5, 2, 'Sistem Pengelolaan', '2_3-Sistem_Pengelolaan.pdf', './uploads/dokumen/2_3-Sistem_Pengelolaan.pdf', 5, 'Perlu Revisi', '2020-05-02 23:24:36', '2020-05-02 18:41:42'),
(6, 2, 'Penjaminan Mutu', '2_4-Penjaminan_Mutu.pdf', './uploads/dokumen/2_4-Penjaminan_Mutu.pdf', 5, 'Perlu Revisi', '2020-05-02 23:24:55', '2020-05-02 18:41:50'),
(7, 2, 'Umpan Balik', '2_5-Umpan_Balik.pdf', './uploads/dokumen/2_5-Umpan_Balik.pdf', 5, 'Belum Divalidasi', '2020-05-02 23:25:13', NULL),
(8, 2, 'Keberlanjutan', '2_6-Keberlanjutan.pdf', './uploads/dokumen/2_6-Keberlanjutan.pdf', 5, 'Belum Divalidasi', '2020-05-02 23:25:24', NULL),
(9, 3, 'Profil Mahasiswa dan Lulusan', '3_1-Profil_Mahasiswa_dan_Lulusan.pdf', './uploads/dokumen/3_1-Profil_Mahasiswa_dan_Lulusan.pdf', 6, 'Telah Disetujui', '2020-05-02 23:25:53', '2020-05-02 18:43:07'),
(10, 3, 'Layanan Kepada Mahasiswa', '3_2-Layanan_Kepada_Mahasiswa.pdf', './uploads/dokumen/3_2-Layanan_Kepada_Mahasiswa.pdf', 6, 'Belum Divalidasi', '2020-05-02 23:28:01', NULL),
(11, 4, 'Sistem Seleksi dan Pengembangan', '4_1-Sistem_Seleksi_dan_Pengembangan.pdf', './uploads/dokumen/4_1-Sistem_Seleksi_dan_Pengembangan.pdf', 7, 'Telah Disetujui', '2020-05-02 23:28:27', '2020-05-02 18:43:18'),
(12, 4, 'Monitoring dan Evaluasi', '4_2-Monitoring_dan_Evaluasi.pdf', './uploads/dokumen/4_2-Monitoring_dan_Evaluasi.pdf', 7, 'Telah Disetujui', '2020-05-02 23:28:39', '2020-05-02 18:43:19'),
(13, 4, 'Dosen Tetap', '4_3-Dosen_Tetap.pdf', './uploads/dokumen/4_3-Dosen_Tetap.pdf', 7, 'Perlu Revisi', '2020-05-02 23:28:50', '2020-05-02 18:43:21'),
(14, 4, 'Dosen Tidak Tetap', '4_4-Dosen_Tidak_Tetap.pdf', './uploads/dokumen/4_4-Dosen_Tidak_Tetap.pdf', 7, 'Perlu Revisi', '2020-05-02 23:28:59', '2020-05-02 18:43:22'),
(15, 4, 'Upaya Peningkatan Sumber Daya Manusia (SDM) dalam tiga tahun terakhir', '4_5-Upaya_Peningkatan_Sumber_Daya_Manusia_dalam_3th_terakhir.pdf', './uploads/dokumen/4_5-Upaya_Peningkatan_Sumber_Daya_Manusia_dalam_3th_terakhir.pdf', 7, 'Belum Divalidasi', '2020-05-02 23:29:13', NULL),
(16, 4, 'Tenaga Kependidikan', '4_6-Tenaga_Kependidikan.pdf', './uploads/dokumen/4_6-Tenaga_Kependidikan.pdf', 7, 'Belum Divalidasi', '2020-05-02 23:30:09', NULL),
(17, 5, 'Kurikulum', '5_1-Kurikulum.pdf', './uploads/dokumen/5_1-Kurikulum.pdf', 8, 'Telah Disetujui', '2020-05-02 23:31:57', '2020-05-02 18:43:34'),
(18, 5, 'Peninjauan Kurikulum dalam 5 Tahun Terakhir', '5_2-Peninjauan_Kurikulum_dalam_5_Tahun_Terakhir.pdf', './uploads/dokumen/5_2-Peninjauan_Kurikulum_dalam_5_Tahun_Terakhir.pdf', 8, 'Telah Disetujui', '2020-05-02 23:32:08', '2020-05-02 18:43:35'),
(19, 5, 'Pelaksanaan Proses Pembelajaran', '5_3-Pelaksanaan_Proses_Pembelajaran.pdf', './uploads/dokumen/5_3-Pelaksanaan_Proses_Pembelajaran.pdf', 8, 'Perlu Revisi', '2020-05-06 09:02:00', '2020-05-02 18:43:37'),
(20, 5, 'Sistem Pembimbingan Akademik', '5_4-Sistem_Pembimbingan_Akademik.pdf', './uploads/dokumen/5_4-Sistem_Pembimbingan_Akademik.pdf', 8, 'Perlu Revisi', '2020-05-02 23:33:12', '2020-05-02 18:43:38'),
(21, 5, 'Pembimbingan Tugas Akhir atau Skripsi', '5_5-Pembimbingan_Tugas_Akhir_atau_Skripsi.pdf', './uploads/dokumen/5_5-Pembimbingan_Tugas_Akhir_atau_Skripsi.pdf', 8, 'Belum Divalidasi', '2020-05-02 23:33:24', NULL),
(22, 5, 'Upaya Perbaikan Pembelajaran', '5_6-Upaya_Perbaikan_Pembelajaran.pdf', './uploads/dokumen/5_6-Upaya_Perbaikan_Pembelajaran.pdf', 8, 'Belum Divalidasi', '2020-05-02 23:33:35', NULL),
(23, 5, 'Upaya Peningkatan Suasana Akademik', '5_7-Upaya_Peningkatan_Suasana_Akademik.pdf', './uploads/dokumen/5_7-Upaya_Peningkatan_Suasana_Akademik.pdf', 8, 'Belum Divalidasi', '2020-05-02 23:33:46', NULL),
(24, 6, 'Pengelolaan Dana', '6_1-Pengelolaan_Dana.pdf', './uploads/dokumen/6_1-Pengelolaan_Dana.pdf', 9, 'Telah Disetujui', '2020-05-02 23:34:11', '2020-05-02 18:43:44'),
(25, 6, 'Perolehan dan Alokasi Dana', '6_2-Perolehan_dan_Alokasi_Dana.pdf', './uploads/dokumen/6_2-Perolehan_dan_Alokasi_Dana.pdf', 9, 'Perlu Revisi', '2020-05-02 23:34:23', '2020-05-02 18:43:47'),
(26, 6, 'Prasarana', '6_3-Prasarana.pdf', './uploads/dokumen/6_3-Prasarana.pdf', 9, 'Belum Divalidasi', '2020-05-02 23:34:33', NULL),
(27, 6, 'Sarana Pelaksanaan Kegiatan Akademik', '6_4-Sarana_Pelaksanaan_Kegiatan_Akademik.pdf', './uploads/dokumen/6_4-Sarana_Pelaksanaan_Kegiatan_Akademik.pdf', 9, 'Belum Divalidasi', '2020-05-02 23:34:45', NULL),
(28, 6, 'Sistem Informasi', '6_5-Sistem_Informasi.pdf', './uploads/dokumen/6_5-Sistem_Informasi.pdf', 9, 'Belum Divalidasi', '2020-05-02 23:35:00', NULL),
(29, 7, 'Penelitian Dosen Tetap ygBidang Keahliannya Sesuai dg PS', '7_1-Penelitian_Dosen_Tetap_ygBidang_Keahliannya_Sesuai_dg_PS.pdf', './uploads/dokumen/7_1-Penelitian_Dosen_Tetap_ygBidang_Keahliannya_Sesuai_dg_PS.pdf', 10, 'Telah Disetujui', '2020-05-02 23:35:41', '2020-05-02 18:43:56'),
(30, 7, 'Kegiatan Pelayanan atau Pengabdian kepada Masyarakat', '7_2-Kegiatan_Pelayanan_atau_Pengabdian_kepada_Masyarakat.pdf', './uploads/dokumen/7_2-Kegiatan_Pelayanan_atau_Pengabdian_kepada_Masyarakat.pdf', 10, 'Perlu Revisi', '2020-05-02 23:35:51', '2020-05-02 18:43:57'),
(31, 7, 'Kegiatan Kerjasama dengan Instansi Lain', '7_3-Kegiatan_Kerjasama_dengan_Instansi_Lain.pdf', './uploads/dokumen/7_3-Kegiatan_Kerjasama_dengan_Instansi_Lain.pdf', 10, 'Belum Divalidasi', '2020-05-02 23:36:00', NULL),
(32, 8, 'test page1', 'Test_Page.pdf', './uploads/dokumen/Test_Page.pdf', 11, 'Telah Disetujui', '2020-05-02 23:40:08', '2020-05-02 18:44:12'),
(33, 8, 'test page2', 'Test_Page1.pdf', './uploads/dokumen/Test_Page1.pdf', 11, 'Perlu Revisi', '2020-05-02 23:40:17', '2020-05-02 18:44:13'),
(34, 8, 'test page3', 'Test_Page2.pdf', './uploads/dokumen/Test_Page2.pdf', 11, 'Belum Divalidasi', '2020-05-02 23:40:25', NULL),
(35, 9, 'test page1', 'Test_Page3.pdf', './uploads/dokumen/Test_Page3.pdf', 12, 'Telah Disetujui', '2020-05-02 23:40:53', '2020-05-02 18:44:17'),
(36, 9, 'test page2', 'Test_Page4.pdf', './uploads/dokumen/Test_Page4.pdf', 12, 'Perlu Revisi', '2020-05-02 23:41:02', '2020-05-02 18:44:18'),
(37, 9, 'test page3', 'Test_Page5.pdf', './uploads/dokumen/Test_Page5.pdf', 12, 'Belum Divalidasi', '2020-05-06 17:14:02', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `dokumen_pelengkap`
--

CREATE TABLE `dokumen_pelengkap` (
  `id_dokumen_pl` int(11) NOT NULL,
  `judul_dokumen` varchar(255) NOT NULL,
  `nama_dokumen` varchar(255) NOT NULL,
  `path` varchar(255) NOT NULL,
  `penyusun` int(11) NOT NULL,
  `tanggal_upload` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dokumen_pelengkap`
--

INSERT INTO `dokumen_pelengkap` (`id_dokumen_pl`, `judul_dokumen`, `nama_dokumen`, `path`, `penyusun`, `tanggal_upload`) VALUES
(1, 'Cover', 'Cover.pdf', './uploads/dokumen/Cover.pdf', 4, '2020-05-08 15:02:20'),
(2, 'Daftar Isi', 'Daftar_Isi.pdf', './uploads/dokumen/Daftar_Isi.pdf', 5, '2020-05-08 15:02:35'),
(3, 'Identitas Program Studi', 'Identitas_Program_Studi.pdf', './uploads/dokumen/Identitas_Program_Studi.pdf', 6, '2020-05-08 15:02:43'),
(4, 'Daftar Dosen Tetap Homebase', 'Daftar_Dosen_Tetap_Homebase.pdf', './uploads/dokumen/Daftar_Dosen_Tetap_Homebase.pdf', 7, '2020-05-08 15:02:52'),
(5, 'Identitas Pengisi Borang Program Studi', 'Identitas_Pengisi_Borang_Program_Studi.pdf', './uploads/dokumen/Identitas_Pengisi_Borang_Program_Studi.pdf', 8, '2020-05-08 15:03:02'),
(6, 'Daftar Lampiran', 'Daftar_Lampiran.pdf', './uploads/dokumen/Daftar_Lampiran.pdf', 9, '2020-05-08 15:03:10');

-- --------------------------------------------------------

--
-- Table structure for table `hak_akses`
--

CREATE TABLE `hak_akses` (
  `id_hak_akses` int(11) NOT NULL,
  `hak_akses` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hak_akses`
--

INSERT INTO `hak_akses` (`id_hak_akses`, `hak_akses`) VALUES
(1, 'Administrator'),
(2, 'Tim Akreditasi'),
(3, 'Ketua Program Studi');

-- --------------------------------------------------------

--
-- Table structure for table `kriteria`
--

CREATE TABLE `kriteria` (
  `id_kriteria` int(11) NOT NULL,
  `kriteria` varchar(15) NOT NULL,
  `nama_kriteria` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kriteria`
--

INSERT INTO `kriteria` (`id_kriteria`, `kriteria`, `nama_kriteria`) VALUES
(0, '', 'Tidak Ada'),
(1, 'Kriteria 1', 'Visi, Misi, Tujuan, dan Strategi'),
(2, 'Kriteria 2', 'Tata Pamong, Tata Kelola, dan Kerjasama'),
(3, 'Kriteria 3', 'Mahasiswa'),
(4, 'Kriteria 4', 'Sumber Daya Manusia'),
(5, 'Kriteria 5', 'Keuangan, Sarana, dan Prasarana'),
(6, 'Kriteria 6', 'Pendidikan'),
(7, 'Kriteria 7', 'Penelitian'),
(8, 'Kriteria 8', 'Pengabdian Kepada Masyarakat'),
(9, 'Kriteria 9', 'Luaran dan Capaian Tridharma');

-- --------------------------------------------------------

--
-- Table structure for table `pengguna`
--

CREATE TABLE `pengguna` (
  `id_pengguna` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `nidn` varchar(11) NOT NULL,
  `jabatan` varchar(20) NOT NULL,
  `homebase` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengguna`
--

INSERT INTO `pengguna` (`id_pengguna`, `nama`, `nidn`, `jabatan`, `homebase`) VALUES
(1, 'Hery Kristianto', '-', 'Kepala Tata Usaha', 'Fakultas Teknologi Informasi'),
(2, 'M. Fatkhur Rizal', '-', 'Staf Tata Usaha', 'Fakultas Teknologi Informasi'),
(3, 'Aries Dwi Indriyanti', '0012048006', 'Ketua Program Studi', 'S1 Teknik Informatika'),
(4, 'Dzulkiflih', '0019047004', 'Tenaga Pengajar', 'S1 Teknik Informatika'),
(5, 'Dyah Listianing Tyas', '0716119003', 'Tenaga Pengajar', 'S1 Teknik Informatika'),
(6, 'Radityo Wiratsongko', '0719028005', 'Tenaga Pengajar', 'S1 Teknik Informatika'),
(7, 'Pujo Hari Saputro', '0720079001', 'Tenaga Pengajar', 'S1 Teknik Informatika'),
(8, 'Mahrus Ali', '0716068601', 'Tenaga Pengajar', 'S1 Teknik Informatika'),
(9, 'Indana Lazulfa', '0729079101', 'Tenaga Pengajar', 'S1 Teknik Informatika'),
(10, 'Iftitaahul Mufarrihah', '0720059002', 'Tenaga Pengajar', 'S1 Teknik Informatika'),
(11, 'Tim8', '0000000000', 'Tenaga Pengajar', 'S1 Teknik Informatika'),
(12, 'Tim9', '0000000000', 'Tenaga Pengajar', 'S1 Teknik Informatika');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `auth`
--
ALTER TABLE `auth`
  ADD PRIMARY KEY (`id_auth`),
  ADD KEY `idx_id_kriteria` (`kriteria`),
  ADD KEY `idx_id_hak_akses` (`id_hak_akses`),
  ADD KEY `idx_id_pengguna` (`id_auth`) USING BTREE;

--
-- Indexes for table `dokumen`
--
ALTER TABLE `dokumen`
  ADD PRIMARY KEY (`id_dokumen`),
  ADD KEY `idx_id_kriteria` (`kriteria`),
  ADD KEY `idx_id_pengguna` (`penyusun`);

--
-- Indexes for table `dokumen_pelengkap`
--
ALTER TABLE `dokumen_pelengkap`
  ADD PRIMARY KEY (`id_dokumen_pl`),
  ADD KEY `idx_id_pengguna` (`penyusun`) USING BTREE;

--
-- Indexes for table `hak_akses`
--
ALTER TABLE `hak_akses`
  ADD PRIMARY KEY (`id_hak_akses`);

--
-- Indexes for table `kriteria`
--
ALTER TABLE `kriteria`
  ADD PRIMARY KEY (`id_kriteria`);

--
-- Indexes for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`id_pengguna`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `auth`
--
ALTER TABLE `auth`
  MODIFY `id_auth` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `dokumen`
--
ALTER TABLE `dokumen`
  MODIFY `id_dokumen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
--
-- AUTO_INCREMENT for table `dokumen_pelengkap`
--
ALTER TABLE `dokumen_pelengkap`
  MODIFY `id_dokumen_pl` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `hak_akses`
--
ALTER TABLE `hak_akses`
  MODIFY `id_hak_akses` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `kriteria`
--
ALTER TABLE `kriteria`
  MODIFY `id_kriteria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `id_pengguna` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `auth`
--
ALTER TABLE `auth`
  ADD CONSTRAINT `fk_id_hak_akses_auth` FOREIGN KEY (`id_hak_akses`) REFERENCES `hak_akses` (`id_hak_akses`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_id_kriteria_auth` FOREIGN KEY (`kriteria`) REFERENCES `kriteria` (`id_kriteria`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_id_pengguna_auth` FOREIGN KEY (`id_auth`) REFERENCES `pengguna` (`id_pengguna`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `dokumen`
--
ALTER TABLE `dokumen`
  ADD CONSTRAINT `fk_id_kriteria_dok` FOREIGN KEY (`kriteria`) REFERENCES `kriteria` (`id_kriteria`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_id_pengguna_dok` FOREIGN KEY (`penyusun`) REFERENCES `pengguna` (`id_pengguna`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `dokumen_pelengkap`
--
ALTER TABLE `dokumen_pelengkap`
  ADD CONSTRAINT `fk_id_pengguna_dokpl` FOREIGN KEY (`penyusun`) REFERENCES `pengguna` (`id_pengguna`) ON DELETE NO ACTION ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
