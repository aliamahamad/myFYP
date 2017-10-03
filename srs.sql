-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 03, 2017 at 07:47 PM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `srs`
--

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `id` int(50) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(8) NOT NULL,
  `role` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`id`, `fname`, `lname`, `email`, `password`, `role`) VALUES
(1, 'admin', 'admin', 'admin@admin.com', 'admin201', 'admin'),
(2007, 'Ahmad', 'Muhammad', 'ahmad@gmail.com', '123', 'pengguna');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(10) NOT NULL,
  `sesisekolah` varchar(500) NOT NULL,
  `std_name` varchar(100) NOT NULL,
  `std_dob` date NOT NULL,
  `std_nolahir` varchar(255) NOT NULL,
  `std_warga` varchar(255) NOT NULL,
  `std_jantina` varchar(255) NOT NULL,
  `std_penyakit` varchar(255) NOT NULL,
  `std_sk` varchar(255) NOT NULL,
  `fname` varchar(225) NOT NULL,
  `fic` int(50) NOT NULL,
  `fdob` date NOT NULL,
  `fwarga` varchar(225) NOT NULL,
  `fkerja` varchar(225) NOT NULL,
  `fgaji` int(11) NOT NULL,
  `fjawatan` varchar(225) NOT NULL,
  `fofcaddr` varchar(225) NOT NULL,
  `fofcposkod` int(11) NOT NULL,
  `fofcbandar` varchar(225) NOT NULL,
  `fofcnegeri` varchar(225) NOT NULL,
  `fnopejabat` int(11) NOT NULL,
  `fnofon` int(11) NOT NULL,
  `mom_name` varchar(225) NOT NULL,
  `mom_ic` int(11) NOT NULL,
  `mom_dob` date NOT NULL,
  `mom_warga` varchar(225) NOT NULL,
  `mom_kerja` varchar(225) NOT NULL,
  `mom_gaji` int(11) NOT NULL,
  `mom_jawatan` varchar(225) NOT NULL,
  `mom_ofcaddr` varchar(225) NOT NULL,
  `mom_poskod` int(11) NOT NULL,
  `mom_bandar` varchar(225) NOT NULL,
  `mom_negeri` varchar(225) NOT NULL,
  `mom_nopejabat` int(11) NOT NULL,
  `mom_nofon` int(11) NOT NULL,
  `mom_homeaddr` varchar(225) NOT NULL,
  `mom_homeposkod` int(11) NOT NULL,
  `mom_homebandar` varchar(225) NOT NULL,
  `mom_homenegeri` varchar(225) NOT NULL,
  `mom_norumah` int(11) NOT NULL,
  `Tindakan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `sesisekolah`, `std_name`, `std_dob`, `std_nolahir`, `std_warga`, `std_jantina`, `std_penyakit`, `std_sk`, `fname`, `fic`, `fdob`, `fwarga`, `fkerja`, `fgaji`, `fjawatan`, `fofcaddr`, `fofcposkod`, `fofcbandar`, `fofcnegeri`, `fnopejabat`, `fnofon`, `mom_name`, `mom_ic`, `mom_dob`, `mom_warga`, `mom_kerja`, `mom_gaji`, `mom_jawatan`, `mom_ofcaddr`, `mom_poskod`, `mom_bandar`, `mom_negeri`, `mom_nopejabat`, `mom_nofon`, `mom_homeaddr`, `mom_homeposkod`, `mom_homebandar`, `mom_homenegeri`, `mom_norumah`, `Tindakan`) VALUES
(1, 'pagi', 'NUR FATIHAH BINTI KAMARUDDIN', '2011-01-12', 'AF45882', 'MALAYSIA', 'perempuan', 'TIADA', 'SK BANDAR SERI PUTRA', 'KAMARUDDIN BIN LATIF', 2147483647, '1977-04-21', 'INDONESIA', 'PEMBACA BERITA', 7500, 'tetap', 'NSTP, JALAN RIONG, BANGSAR', 59000, 'KUALA LUMPUR', 'KL', 324896521, 1111227889, 'SHARINI BINTI SHAFIE', 2147483647, '1981-05-22', 'MALAYSIA', 'KERANI', 2150, 'tetap', 'JAWI KUALA LUMPUR, JALAN PERDANA', 50404, 'KUALA LUMPUR', 'KL', 322875420, 143889924, 'PUTRA RIA', 68299, 'KUALA LUMPUR', 'Kl', 0, ''),
(8, 'pagi', 'AISYAH HUMAIRA BINTI AHMAD TARMIZI', '2009-06-22', 'DH38762', 'MALAYSIA', 'Lelaki', 'TIADA', 'SEKOLAH KEBANGSAAN SERI SURIA', 'AHMAD TARMIZI BIN ABDULLAH', 2147483647, '1990-05-31', 'MALAYSIA', 'GURU', 4000, 'tetap', 'SK SERI SURIA, TAMAN TAN YEW LAI', 58200, 'KUALA LUMPUR', 'Kuala Lumpur', 2147483647, 53252567, 'SUHAIBATUL ASLAMIYAH BINTI HARIS', 2147483647, '1990-05-04', 'MALAYSIA', 'GURU', 4000, 'tetap', 'SK TAMAN DESA', 37888, 'KUALA LUMPUR', 'Negeri Sembilan', 49807238, 83720974, 'CHERAS', 89478, 'KUALA LUMPUR', 'Negeri Sembilan', 9842703, ''),
(7, 'petang', 'ALI BIN ABU', '2011-09-23', 'KK63874', 'MALAYSIA', 'lelaki', 'TIADA', 'SEKOLAH KEBANGSAAN BANGSAR', 'ABU BIN AHMAD', 2147483647, '1984-05-26', 'MALAYSIA', 'TUKANG KEBUN', 1000, 'sambilan', 'KEBUN UPM', 89028, 'SERDANG', 'Perlis', 0, 2147483647, 'SITI KHADIJAH', 2147483647, '1986-08-17', 'RUSIA', 'MEREMPAT', 1500, 'tetap', 'JALAN TAR', 32414, 'KUALA LUMPUR', 'Putrajaya', 0, 0, 'AJLKDHFLAHA', 49082, 'HAISHDI', 'Kl', 0, ''),
(9, 'pagi', 'FATIMAH ZAHRA BINTI AHMAD TARMIZI', '2010-09-15', 'SD984879', 'MALAYSIA', 'Perempuan', 'TIADA', 'SEKOLAH RENDAH ISLAM AL AMIN', 'AHMAD TARMIZI BIN ABDULLAH', 3072487, '1998-05-04', 'MALAYSIA', 'GURU', 4000, 'tetap', 'SK SERI SURIA, TAMAN TAN YEW LAI', 58200, 'KUALA LUMPUR', 'Johor', 2147483647, 436656, 'SUHAIBATUL ASLAMIYAH BINTI HARIS', 2147483647, '1998-05-04', 'MALAYSIA', 'GURU', 4000, 'sambilan', 'SK TAMAN DESA', 37888, 'KUALA LUMPUR', 'Pulau Pinang', 279647, 237889, 'CHERAS', 38726, 'KUALA LUMPUR', 'Negeri Sembilan', 9842703, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`email`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`std_nolahir`),
  ADD KEY `id` (`id`) USING BTREE;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2008;
--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
