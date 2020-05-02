-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 02, 2020 at 06:54 PM
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
  `nama_dokumen` varchar(255) NOT NULL,
  `path` varchar(255) NOT NULL,
  `judul_dokumen` varchar(255) NOT NULL,
  `id_user` int(11) NOT NULL,
  `status_dokumen` varchar(16) NOT NULL,
  `tanggal_upload` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `tanggal_validasi` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dokumen`
--

INSERT INTO `dokumen` (`id_dokumen`, `standar`, `nama_dokumen`, `path`, `judul_dokumen`, `id_user`, `status_dokumen`, `tanggal_upload`, `tanggal_validasi`) VALUES
(53, '1', '1_1-Visi,_Misi,_Tujuan_dan_Sasaran_Serta_Strategi_Pencapaian.pdf', './uploads/dokumen/1_1-Visi,_Misi,_Tujuan_dan_Sasaran_Serta_Strategi_Pencapaian.pdf', 'Visi, Misi, Tujuan dan Sasaran Serta Strategi Pencapaian', 4, 'Telah Disetujui', '2020-05-02 23:05:52', '2020-05-02 18:20:50'),
(54, '1', '1_2-Sosialisasi.pdf', './uploads/dokumen/1_2-Sosialisasi.pdf', 'Sosialisasi', 4, 'Belum Divalidasi', '2020-05-02 23:20:37', NULL),
(55, '2', '2_1-Sistem_Tata_Pamong.pdf', './uploads/dokumen/2_1-Sistem_Tata_Pamong.pdf', 'Sistem Tata Pamong', 5, 'Telah Disetujui', '2020-05-02 23:21:33', '2020-05-02 18:41:32'),
(56, '2', '2_2-Kepemimpinan.pdf', './uploads/dokumen/2_2-Kepemimpinan.pdf', 'Kepemimpinan', 5, 'Telah Disetujui', '2020-05-02 23:21:59', '2020-05-02 18:41:41'),
(57, '2', '2_3-Sistem_Pengelolaan.pdf', './uploads/dokumen/2_3-Sistem_Pengelolaan.pdf', 'Sistem Pengelolaan', 5, 'Perlu Revisi', '2020-05-02 23:24:36', '2020-05-02 18:41:42'),
(58, '2', '2_4-Penjaminan_Mutu.pdf', './uploads/dokumen/2_4-Penjaminan_Mutu.pdf', 'Penjaminan Mutu', 5, 'Perlu Revisi', '2020-05-02 23:24:55', '2020-05-02 18:41:50'),
(59, '2', '2_5-Umpan_Balik.pdf', './uploads/dokumen/2_5-Umpan_Balik.pdf', 'Umpan Balik', 5, 'Belum Divalidasi', '2020-05-02 23:25:13', NULL),
(60, '2', '2_6-Keberlanjutan.pdf', './uploads/dokumen/2_6-Keberlanjutan.pdf', 'Keberlanjutan', 5, 'Belum Divalidasi', '2020-05-02 23:25:24', NULL),
(61, '3', '3_1-Profil_Mahasiswa_dan_Lulusan.pdf', './uploads/dokumen/3_1-Profil_Mahasiswa_dan_Lulusan.pdf', 'Profil Mahasiswa dan Lulusan', 6, 'Telah Disetujui', '2020-05-02 23:25:53', '2020-05-02 18:43:07'),
(62, '3', '3_2-Layanan_Kepada_Mahasiswa.pdf', './uploads/dokumen/3_2-Layanan_Kepada_Mahasiswa.pdf', 'Layanan Kepada Mahasiswa', 6, 'Belum Divalidasi', '2020-05-02 23:28:01', NULL),
(63, '4', '4_1-Sistem_Seleksi_dan_Pengembangan.pdf', './uploads/dokumen/4_1-Sistem_Seleksi_dan_Pengembangan.pdf', 'Sistem Seleksi dan Pengembangan', 7, 'Telah Disetujui', '2020-05-02 23:28:27', '2020-05-02 18:43:18'),
(64, '4', '4_2-Monitoring_dan_Evaluasi.pdf', './uploads/dokumen/4_2-Monitoring_dan_Evaluasi.pdf', 'Monitoring dan Evaluasi', 7, 'Telah Disetujui', '2020-05-02 23:28:39', '2020-05-02 18:43:19'),
(65, '4', '4_3-Dosen_Tetap.pdf', './uploads/dokumen/4_3-Dosen_Tetap.pdf', 'Dosen Tetap', 7, 'Perlu Revisi', '2020-05-02 23:28:50', '2020-05-02 18:43:21'),
(66, '4', '4_4-Dosen_Tidak_Tetap.pdf', './uploads/dokumen/4_4-Dosen_Tidak_Tetap.pdf', 'Dosen Tidak Tetap', 7, 'Perlu Revisi', '2020-05-02 23:28:59', '2020-05-02 18:43:22'),
(67, '4', '4_5-Upaya_Peningkatan_Sumber_Daya_Manusia_dalam_3th_terakhir.pdf', './uploads/dokumen/4_5-Upaya_Peningkatan_Sumber_Daya_Manusia_dalam_3th_terakhir.pdf', 'Upaya Peningkatan Sumber Daya Manusia (SDM) dalam tiga tahun terakhir', 7, 'Belum Divalidasi', '2020-05-02 23:29:13', NULL),
(68, '4', '4_6-Tenaga_Kependidikan.pdf', './uploads/dokumen/4_6-Tenaga_Kependidikan.pdf', 'Tenaga Kependidikan', 7, 'Belum Divalidasi', '2020-05-02 23:30:09', NULL),
(69, '5', '5_1-Kurikulum.pdf', './uploads/dokumen/5_1-Kurikulum.pdf', 'Kurikulum', 8, 'Telah Disetujui', '2020-05-02 23:31:57', '2020-05-02 18:43:34'),
(70, '5', '5_2-Peninjauan_Kurikulum_dalam_5_Tahun_Terakhir.pdf', './uploads/dokumen/5_2-Peninjauan_Kurikulum_dalam_5_Tahun_Terakhir.pdf', 'Peninjauan Kurikulum dalam 5 Tahun Terakhir', 8, 'Telah Disetujui', '2020-05-02 23:32:08', '2020-05-02 18:43:35'),
(71, '5', '5_3-Pelaksanaan_Proses_Pembelajaran.pdf', './uploads/dokumen/5_3-Pelaksanaan_Proses_Pembelajaran.pdf', 'Pelaksanaan Proses Pembelajarann', 8, 'Perlu Revisi', '2020-05-02 18:49:44', '2020-05-02 18:43:37'),
(72, '5', '5_4-Sistem_Pembimbingan_Akademik.pdf', './uploads/dokumen/5_4-Sistem_Pembimbingan_Akademik.pdf', 'Sistem Pembimbingan Akademik', 8, 'Perlu Revisi', '2020-05-02 23:33:12', '2020-05-02 18:43:38'),
(73, '5', '5_5-Pembimbingan_Tugas_Akhir_atau_Skripsi.pdf', './uploads/dokumen/5_5-Pembimbingan_Tugas_Akhir_atau_Skripsi.pdf', 'Pembimbingan Tugas Akhir atau Skripsi', 8, 'Belum Divalidasi', '2020-05-02 23:33:24', NULL),
(74, '5', '5_6-Upaya_Perbaikan_Pembelajaran.pdf', './uploads/dokumen/5_6-Upaya_Perbaikan_Pembelajaran.pdf', 'Upaya Perbaikan Pembelajaran', 8, 'Belum Divalidasi', '2020-05-02 23:33:35', NULL),
(75, '5', '5_7-Upaya_Peningkatan_Suasana_Akademik.pdf', './uploads/dokumen/5_7-Upaya_Peningkatan_Suasana_Akademik.pdf', 'Upaya Peningkatan Suasana Akademik', 8, 'Belum Divalidasi', '2020-05-02 23:33:46', NULL),
(76, '6', '6_1-Pengelolaan_Dana.pdf', './uploads/dokumen/6_1-Pengelolaan_Dana.pdf', 'Pengelolaan Dana', 9, 'Telah Disetujui', '2020-05-02 23:34:11', '2020-05-02 18:43:44'),
(77, '6', '6_2-Perolehan_dan_Alokasi_Dana.pdf', './uploads/dokumen/6_2-Perolehan_dan_Alokasi_Dana.pdf', 'Perolehan dan Alokasi Dana', 9, 'Perlu Revisi', '2020-05-02 23:34:23', '2020-05-02 18:43:47'),
(78, '6', '6_3-Prasarana.pdf', './uploads/dokumen/6_3-Prasarana.pdf', 'Prasarana', 9, 'Belum Divalidasi', '2020-05-02 23:34:33', NULL),
(79, '6', '6_4-Sarana_Pelaksanaan_Kegiatan_Akademik.pdf', './uploads/dokumen/6_4-Sarana_Pelaksanaan_Kegiatan_Akademik.pdf', 'Sarana Pelaksanaan Kegiatan Akademik', 9, 'Belum Divalidasi', '2020-05-02 23:34:45', NULL),
(80, '6', '6_5-Sistem_Informasi.pdf', './uploads/dokumen/6_5-Sistem_Informasi.pdf', 'Sistem Informasi', 9, 'Belum Divalidasi', '2020-05-02 23:35:00', NULL),
(81, '7', '7_1-Penelitian_Dosen_Tetap_ygBidang_Keahliannya_Sesuai_dg_PS.pdf', './uploads/dokumen/7_1-Penelitian_Dosen_Tetap_ygBidang_Keahliannya_Sesuai_dg_PS.pdf', 'Penelitian Dosen Tetap ygBidang Keahliannya Sesuai dg PS', 10, 'Telah Disetujui', '2020-05-02 23:35:41', '2020-05-02 18:43:56'),
(82, '7', '7_2-Kegiatan_Pelayanan_atau_Pengabdian_kepada_Masyarakat.pdf', './uploads/dokumen/7_2-Kegiatan_Pelayanan_atau_Pengabdian_kepada_Masyarakat.pdf', 'Kegiatan Pelayanan atau Pengabdian kepada Masyarakat', 10, 'Perlu Revisi', '2020-05-02 23:35:51', '2020-05-02 18:43:57'),
(83, '7', '7_3-Kegiatan_Kerjasama_dengan_Instansi_Lain.pdf', './uploads/dokumen/7_3-Kegiatan_Kerjasama_dengan_Instansi_Lain.pdf', 'Kegiatan Kerjasama dengan Instansi Lain', 10, 'Belum Divalidasi', '2020-05-02 23:36:00', NULL),
(84, '8', 'Test_Page.pdf', './uploads/dokumen/Test_Page.pdf', 'test page1', 11, 'Telah Disetujui', '2020-05-02 23:40:08', '2020-05-02 18:44:12'),
(85, '8', 'Test_Page1.pdf', './uploads/dokumen/Test_Page1.pdf', 'test page2', 11, 'Perlu Revisi', '2020-05-02 23:40:17', '2020-05-02 18:44:13'),
(86, '8', 'Test_Page2.pdf', './uploads/dokumen/Test_Page2.pdf', 'test page3', 11, 'Belum Divalidasi', '2020-05-02 23:40:25', NULL),
(87, '9', 'Test_Page3.pdf', './uploads/dokumen/Test_Page3.pdf', 'test page1', 12, 'Telah Disetujui', '2020-05-02 23:40:53', '2020-05-02 18:44:17'),
(88, '9', 'Test_Page4.pdf', './uploads/dokumen/Test_Page4.pdf', 'test page2', 12, 'Perlu Revisi', '2020-05-02 23:41:02', '2020-05-02 18:44:18'),
(89, '9', 'Test_Page5.pdf', './uploads/dokumen/Test_Page5.pdf', 'test page3', 12, 'Belum Divalidasi', '2020-05-02 23:41:11', NULL);

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
(4, 'Dzulkiflih', '0019047004', 'Tenaga Pengajar', '1', 'S1 Teknik Informatika', 'tim', 'tim', 'Tim Akreditasi'),
(5, 'Dyah Listianing Tyas', '0716119003', 'Tenaga Pengajar', '2', 'S1 Teknik Informatika', 'tim2', 'tim', 'Tim Akreditasi'),
(6, 'Radityo Wiratsongko', '0719028005', 'Tenaga Pengajar', '3', 'S1 Teknik Informatika', 'tim3', 'tim', 'Tim Akreditasi'),
(7, 'Pujo Hari Saputro', '0720079001', 'Tenaga Pengajar', '4', 'S1 Teknik Informatika', 'tim4', 'tim', 'Tim Akreditasi'),
(8, 'Mahrus Ali', '0716068601', 'Tenaga Pengajar', '5', 'S1 Teknik Informatika', 'tim5', 'tim', 'Tim Akreditasi'),
(9, 'Indana Lazulfa', '0729079101', 'Tenaga Pengajar', '6', 'S1 Teknik Informatika', 'tim6', 'tim', 'Tim Akreditasi'),
(10, 'Iftitaahul Mufarrihah', '0720059002', 'Tenaga Pengajar', '7', 'S1 Teknik Informatika', 'tim7', 'tim', 'Tim Akreditasi'),
(11, 'Tim8', '0000000000', 'Tenaga Pengajar', '8', 'S1 Teknik Informatika', 'tim8', 'tim', 'Tim Akreditasi'),
(12, 'Tim9', '0000000000', 'Tenaga Pengajar', '9', 'S1 Teknik Informatika', 'tim9', 'tim', 'Tim Akreditasi');

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
  MODIFY `id_dokumen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=90;
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
