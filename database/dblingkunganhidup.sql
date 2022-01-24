-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 29, 2021 at 10:06 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dblingkunganhidup`
--

-- --------------------------------------------------------

--
-- Stand-in structure for view `relasihasil`
-- (See below for the actual view)
--
CREATE TABLE `relasihasil` (
`kd_setor` varchar(50)
,`nm_pemberi` varchar(50)
,`lokasi_tugas` varchar(200)
,`target_setoran` int(10)
,`setoran` int(10)
,`tgl_setor` date
,`keterangan` varchar(100)
,`nm_penerima` varchar(200)
,`kd_anggaran` varchar(50)
,`nama_pengirim` varchar(50)
,`tgl_kirim` varchar(25)
,`jumlah` int(10)
,`ket` varchar(100)
);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_anggaran`
--

CREATE TABLE `tbl_anggaran` (
  `id` int(11) NOT NULL,
  `kd_setor` varchar(50) NOT NULL,
  `kd_anggaran` varchar(50) NOT NULL,
  `nama_pengirim` varchar(50) NOT NULL,
  `tgl_kirim` varchar(25) NOT NULL,
  `jumlah` int(10) NOT NULL,
  `ket` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_anggaran`
--

INSERT INTO `tbl_anggaran` (`id`, `kd_setor`, `kd_anggaran`, `nama_pengirim`, `tgl_kirim`, `jumlah`, `ket`) VALUES
(10, '01/STR/DLH/001', 'AGR/001', 'Khairunnisa', '2021-09-30', 1500000, 'Anggaran bulan September dengan Jumlah Rp1.500.000'),
(11, '02/STR/DLH/002', 'AGR/002', 'Khairunnisa', '30-10-2021', 1500000, 'Anggaran bulan Oktober dengan Jumlah Rp1.500.000');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_setoran`
--

CREATE TABLE `tbl_setoran` (
  `id` int(5) NOT NULL,
  `kd_setor` varchar(50) NOT NULL,
  `nm_pemberi` varchar(50) NOT NULL,
  `lokasi_tugas` varchar(200) NOT NULL,
  `target_setoran` int(10) NOT NULL,
  `setoran` int(10) NOT NULL,
  `tgl_setor` date NOT NULL,
  `keterangan` varchar(100) NOT NULL,
  `nm_penerima` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_setoran`
--

INSERT INTO `tbl_setoran` (`id`, `kd_setor`, `nm_pemberi`, `lokasi_tugas`, `target_setoran`, `setoran`, `tgl_setor`, `keterangan`, `nm_penerima`) VALUES
(25, '01/STR/DLH/001', 'Irfan Hakim Nasution', 'Lapangan Pasir', 3000000, 1500000, '2021-09-30', 'Setoran Bulan 9', 'Khairunnisa'),
(27, '02/STR/DLH/002', 'Alfayet Zaki', 'Pajak Bengawan', 1500000, 1500000, '2021-10-30', 'Setoran Bulan 10', 'Khairunnisa');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `username` varchar(25) NOT NULL,
  `paswd` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `level` int(1) NOT NULL,
  `ket` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `paswd`, `email`, `nama`, `level`, `ket`) VALUES
('admin', '21232f297a57a5a743894a0e4a801fc3', 'ivannasution18@gmail.com', 'Irfan', 1, 'Administrator Dinas Lingkungan Hidup'),
('ivan', '4b889e73b05fdf686e84486902f46981', 'ivannsution18@gmail.com', 'Ivan Nasution', 1, 'Operator Dinas Lingkungan Hidup');

-- --------------------------------------------------------

--
-- Structure for view `relasihasil`
--
DROP TABLE IF EXISTS `relasihasil`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `relasihasil`  AS  select `tbl_anggaran`.`kd_setor` AS `kd_setor`,`tbl_setoran`.`nm_pemberi` AS `nm_pemberi`,`tbl_setoran`.`lokasi_tugas` AS `lokasi_tugas`,`tbl_setoran`.`target_setoran` AS `target_setoran`,`tbl_setoran`.`setoran` AS `setoran`,`tbl_setoran`.`tgl_setor` AS `tgl_setor`,`tbl_setoran`.`keterangan` AS `keterangan`,`tbl_setoran`.`nm_penerima` AS `nm_penerima`,`tbl_anggaran`.`kd_anggaran` AS `kd_anggaran`,`tbl_anggaran`.`nama_pengirim` AS `nama_pengirim`,`tbl_anggaran`.`tgl_kirim` AS `tgl_kirim`,`tbl_anggaran`.`jumlah` AS `jumlah`,`tbl_anggaran`.`ket` AS `ket` from (`tbl_setoran` join `tbl_anggaran`) where `tbl_anggaran`.`kd_setor` = `tbl_setoran`.`kd_setor` ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_anggaran`
--
ALTER TABLE `tbl_anggaran`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `kd_setor_2` (`kd_setor`),
  ADD KEY `kd_setor` (`kd_anggaran`);

--
-- Indexes for table `tbl_setoran`
--
ALTER TABLE `tbl_setoran`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `kd_setor` (`kd_setor`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_anggaran`
--
ALTER TABLE `tbl_anggaran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tbl_setoran`
--
ALTER TABLE `tbl_setoran`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
