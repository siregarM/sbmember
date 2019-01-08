-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 08, 2019 at 12:13 PM
-- Server version: 5.7.24-0ubuntu0.16.04.1
-- PHP Version: 7.1.24-1+ubuntu16.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_sbmember`
--

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `no_anggota` varchar(50) NOT NULL,
  `nama_lengkap` varchar(30) NOT NULL,
  `jenis_kelamin` enum('Laki-laki','Perempuan') NOT NULL,
  `tempat_lahir` text NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `provinsi` varchar(30) NOT NULL,
  `kota` varchar(30) NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` text NOT NULL,
  `instagram` varchar(40) NOT NULL,
  `status_pendidikan` varchar(30) NOT NULL,
  `kelas` varchar(30) NOT NULL,
  `pengurus_pusat` enum('Ya','Tidak') NOT NULL,
  `tahun_menjabat` varchar(4) NOT NULL,
  `jabatan` varchar(30) NOT NULL,
  `pengurus_chapter` enum('Ya','Tidak') NOT NULL,
  `nama_chapter` varchar(30) NOT NULL,
  `chapter_tahun_menjabat` text NOT NULL,
  `chapter_jabatan` varchar(30) NOT NULL,
  `cv` text NOT NULL,
  `foto_profil` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`no_anggota`, `nama_lengkap`, `jenis_kelamin`, `tempat_lahir`, `tanggal_lahir`, `provinsi`, `kota`, `no_hp`, `email`, `password`, `instagram`, `status_pendidikan`, `kelas`, `pengurus_pusat`, `tahun_menjabat`, `jabatan`, `pengurus_chapter`, `nama_chapter`, `chapter_tahun_menjabat`, `chapter_jabatan`, `cv`, `foto_profil`) VALUES
('SB000001', 'Mahmud Isnan', 'Perempuan', 'Rondaman', '2019-12-31', 'Sumatera Utara', 'Medan', '082160985691', 'mahmudisnan18@gmail.com', '123456789', 'mahmudisnan18', 'S1', '2014', 'Ya', '', '', 'Ya', '', '', '', '', 'Surat Permohonan Username dan Pasword_001 copy.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`no_anggota`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
