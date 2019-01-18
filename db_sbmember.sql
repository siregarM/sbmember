-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 18, 2019 at 04:30 PM
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
-- Table structure for table `tabel_chapter`
--

CREATE TABLE `tabel_chapter` (
  `id` int(11) NOT NULL,
  `nama_chapter` varchar(100) NOT NULL,
  `tanggal_post` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tabel_chapter`
--

INSERT INTO `tabel_chapter` (`id`, `nama_chapter`, `tanggal_post`) VALUES
(1, 'Madura', '2019-01-01'),
(2, 'Surabaya', '2019-01-01');

-- --------------------------------------------------------

--
-- Table structure for table `tabel_member`
--

CREATE TABLE `tabel_member` (
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
  `foto_profil` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tabel_member`
--

INSERT INTO `tabel_member` (`no_anggota`, `nama_lengkap`, `jenis_kelamin`, `tempat_lahir`, `tanggal_lahir`, `provinsi`, `kota`, `no_hp`, `email`, `password`, `instagram`, `status_pendidikan`, `kelas`, `pengurus_pusat`, `tahun_menjabat`, `jabatan`, `pengurus_chapter`, `nama_chapter`, `chapter_tahun_menjabat`, `chapter_jabatan`, `cv`, `foto_profil`) VALUES
('SB000001', 'Mahmud Ganteng', 'Perempuan', 'Rondaman', '2019-01-11', 'Sumatera Utara', 'Medan', '0821609567567', 'mahmudisnan18@gmail.com', '123456789', 'mahmudisnan18', 'Mahasiswa S1', '3', 'Ya', '', '', 'Ya', '', '', '', '', 'download.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tabel_oprec`
--

CREATE TABLE `tabel_oprec` (
  `id` int(11) NOT NULL,
  `nama_oprec` varchar(30) NOT NULL,
  `tanggal_mulai` date NOT NULL,
  `tanggal_berakhir` date NOT NULL,
  `tahun_pengurusan` varchar(30) NOT NULL,
  `tanggal_post` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tabel_oprec`
--

INSERT INTO `tabel_oprec` (`id`, `nama_oprec`, `tanggal_mulai`, `tanggal_berakhir`, `tahun_pengurusan`, `tanggal_post`) VALUES
(3, 'Madura', '2019-01-03', '2019-01-19', '2019', '2019-01-12'),
(4, 'Surabaya', '2019-01-04', '2019-01-10', '2019', '2019-01-12');

-- --------------------------------------------------------

--
-- Table structure for table `tabel_oprec_posisi`
--

CREATE TABLE `tabel_oprec_posisi` (
  `id` int(11) NOT NULL,
  `id_oprec` int(11) NOT NULL,
  `nama_posisi` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tabel_oprec_posisi`
--

INSERT INTO `tabel_oprec_posisi` (`id`, `id_oprec`, `nama_posisi`) VALUES
(1, 1, 'Desain Grafis'),
(2, 1, 'Bendahara');

-- --------------------------------------------------------

--
-- Table structure for table `tabel_pengurus`
--

CREATE TABLE `tabel_pengurus` (
  `id` int(11) NOT NULL,
  `no_anggota` varchar(50) NOT NULL,
  `id_oprec` int(11) NOT NULL,
  `id_oprec_posisi` int(11) NOT NULL,
  `alasan_daftar_pengurus` text NOT NULL,
  `alasan_memlih_posisi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tabel_pengurus`
--

INSERT INTO `tabel_pengurus` (`id`, `no_anggota`, `id_oprec`, `id_oprec_posisi`, `alasan_daftar_pengurus`, `alasan_memlih_posisi`) VALUES
(1, 'SB000001', 2, 2, 'Pertanyaan 1\nApa alasan anda mendaftar menjadi pengurus SB chapter (nama kota)? Mengapa\nkami harus memilih anda?\nPilihan Divisi yang anda pilih :\n(pilihan disesuaikan dengan kebutuhan SB Chapter)\nPertanyaan 2\nMengapa anda memilih divisi tersebut? Apa skill yang anda miliki sehingga anda\nberhak ditempatkan di divisi tersebut?', 'Pertanyaan 1\nApa alasan anda mendaftar menjadi pengurus SB chapter (nama kota)? Mengapa\nkami harus memilih anda?\nPilihan Divisi yang anda pilih :\n(pilihan disesuaikan dengan kebutuhan SB Chapter)\nPertanyaan 2\nMengapa anda memilih divisi tersebut? Apa skill yang anda miliki sehingga anda\nberhak ditempatkan di divisi tersebut?');

-- --------------------------------------------------------

--
-- Table structure for table `tabel_schotalk`
--

CREATE TABLE `tabel_schotalk` (
  `id` int(11) NOT NULL,
  `judul_schotalk` text NOT NULL,
  `foto_schotalk` varchar(100) NOT NULL,
  `deskripsi_schotalk` text NOT NULL,
  `tanggal_schotalk` date NOT NULL,
  `tanggal_post` date NOT NULL,
  `id_chapter` int(11) NOT NULL,
  `link_wa` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tabel_schotalk`
--

INSERT INTO `tabel_schotalk` (`id`, `judul_schotalk`, `foto_schotalk`, `deskripsi_schotalk`, `tanggal_schotalk`, `tanggal_post`, `id_chapter`, `link_wa`) VALUES
(1, 'schotalk-1-sbc-serang', '', 'Pertanyaan 1\r\nApa alasan anda mendaftar menjadi pengurus SB chapter (nama kota)? Mengapa\r\nkami harus memilih anda?\r\nPilihan Divisi yang anda pilih :\r\n(pilihan disesuaikan dengan kebutuhan SB Chapter)\r\nPertanyaan 2\r\nMengapa anda memilih divisi tersebut? Apa skill yang anda miliki sehingga anda\r\nberhak ditempatkan di divisi tersebut?', '2019-01-17', '2019-01-01', 2, 'https://schoters.com/schotalk-1-sbc-serang/#');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tabel_chapter`
--
ALTER TABLE `tabel_chapter`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tabel_member`
--
ALTER TABLE `tabel_member`
  ADD PRIMARY KEY (`no_anggota`);

--
-- Indexes for table `tabel_oprec`
--
ALTER TABLE `tabel_oprec`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tabel_oprec_posisi`
--
ALTER TABLE `tabel_oprec_posisi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tabel_pengurus`
--
ALTER TABLE `tabel_pengurus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tabel_schotalk`
--
ALTER TABLE `tabel_schotalk`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tabel_chapter`
--
ALTER TABLE `tabel_chapter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tabel_oprec`
--
ALTER TABLE `tabel_oprec`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tabel_oprec_posisi`
--
ALTER TABLE `tabel_oprec_posisi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tabel_pengurus`
--
ALTER TABLE `tabel_pengurus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tabel_schotalk`
--
ALTER TABLE `tabel_schotalk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
