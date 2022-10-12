-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 12, 2022 at 04:27 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `prakweb_b_203040113`
--

-- --------------------------------------------------------

--
-- Table structure for table `buku`
--

CREATE TABLE `buku` (
  `id` int(11) NOT NULL,
  `gambar` varchar(256) NOT NULL,
  `judul_buku` varchar(256) NOT NULL,
  `pengarang` varchar(256) NOT NULL,
  `tahun_terbit` year(4) NOT NULL,
  `genre` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `buku`
--

INSERT INTO `buku` (`id`, `gambar`, `judul_buku`, `pengarang`, `tahun_terbit`, `genre`) VALUES
(1, 'Agenda.jpg', 'Agenda Dunia Yang Disembunyikan', 'Alvabet', 2015, 'Fantasi'),
(2, 'anatomi.jpg', 'Anatomi Sistem & Perkembangan', 'Dr. M. Setia Budi Zain', 2013, 'Pengetahuan'),
(3, 'Eleected.jpg', 'Eleected', 'Son Jeho', 2018, 'Fantasi'),
(4, 'Hikayat.jpeg', 'Hikayat Pohon Ganja', 'Dhira Narayana', 2011, 'Pengetahuan'),
(5, 'Kisah.jpg', 'Kisah Nabi Muhammad', 'Endah w.', 2017, 'Pengetahuan'),
(6, 'laskar.jpg', 'Laskar Pelangi', ' Andrea Hirata', 2005, 'Pengetahuan'),
(7, 'Naruto.jpg', 'Naruto Shippuden', 'Masashi Kishimoto', 2000, 'Fantasi'),
(8, 'One piace.jpg', 'One Piace', 'Eiichiro Oda', 1997, 'Fantasi'),
(9, 'sejarah.jpg', 'Sejarah perang di nusantara', 'sri wintala', 2017, 'Pengetahuan'),
(10, 'Teknologi.jpg', 'Teknologi untuk Masa Depan', 'Lentera Hati', 2007, 'Pengetahuan');

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id` int(12) NOT NULL,
  `nama` varchar(256) NOT NULL,
  `nrp` varchar(256) NOT NULL,
  `email` varchar(256) NOT NULL,
  `jurusan` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`id`, `nama`, `nrp`, `email`, `jurusan`) VALUES
(1, 'Raihan anhar', '203040113', '2030401132@mail.unpas.ac.id', 'Informatika'),
(2, 'Bondan Tri Wibowo', '203040114', '203040114@mail.unsada.ac.id', 'Informatika'),
(3, 'intan zema', '203040115', '203040115@mail.ugm.ac.id', 'Kedokteran'),
(4, 'Farhat Muntaha', '203040116', '203040116@mail.uam.ac.id', 'Sistem informasi');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(12) NOT NULL,
  `username` varchar(256) NOT NULL,
  `password` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(1, 'admin', '1234'),
(2, 'raihan', '$2y$10$Iyh5yNOiNdR752q43/Bpquxg88YhIboTt/3gIP9wnrjJi9L9KHzua');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `buku`
--
ALTER TABLE `buku`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
