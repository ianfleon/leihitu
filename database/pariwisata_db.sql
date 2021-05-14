-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 08, 2021 at 11:08 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pariwisata_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `akun_tb`
--

CREATE TABLE `akun_tb` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `akun_tb`
--

INSERT INTO `akun_tb` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `galeri_tb`
--

CREATE TABLE `galeri_tb` (
  `id_galeri` int(11) NOT NULL,
  `gambar_galeri` varchar(50) NOT NULL,
  `deskripsi_gambar` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `galeri_tb`
--

INSERT INTO `galeri_tb` (`id_galeri`, `gambar_galeri`, `deskripsi_gambar`) VALUES
(1, '5f3cebbc8b996.jpg', 'Benteng Amsterdam, Hila'),
(2, '5f3cebd6d8245.jpg', 'Lubang Buaya, Morela'),
(3, '5f3cebe6bb7bf.jpg', 'Wai Ela, Negeri 5'),
(4, '5f3ceca9b3e9d.jpeg', 'Mesjid Tua Wapauwe, Hitu'),
(5, '5f3e504ee39af.webp', 'Pukul Manyapu'),
(7, '5f3e50922d4a6.jpg', 'Tari Mahina'),
(9, '5f3e51bccc7a8.jpg', 'Tari Huul'),
(10, '20160315_151920.jpg', 'Wai Ela Negeri 5');

-- --------------------------------------------------------

--
-- Table structure for table `tempat_tb`
--

CREATE TABLE `tempat_tb` (
  `id_tempat` int(11) NOT NULL,
  `nama_tempat` varchar(50) NOT NULL,
  `gambar_tempat` varchar(50) NOT NULL,
  `deskripsi_tempat` text NOT NULL,
  `link_map` varchar(500) NOT NULL,
  `kategori` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tempat_tb`
--

INSERT INTO `tempat_tb` (`id_tempat`, `nama_tempat`, `gambar_tempat`, `deskripsi_tempat`, `link_map`, `kategori`) VALUES
(1, 'Benteng Hila Amsterdam', '5f3ce0bdd4b36.jpg', 'Benteng hila amsterdam', 'contoh', 'sejarah'),
(4, 'Mesjid Tua Wapauwe', '5f3ced518551d.jpeg', '<p>Masjid Tua Wapauwe adalah masjid yang sangat bersejarah dan merupakan masjid tertua di Maluku. Umurnya mencapai tujuh abad. Masjid ini dibangun pada tahun 1414 Masehi. Masjid yang saat ini masih berdiri dengan kokohnya, menjadi bukti sejarah Islam di Maluku pada masa lampau.</p>\r\n', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3982.0098354219367!2d128.08197811475858!3d-3.585215897390999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2d6cfb47947d963f%3A0xd01c4e4c20246d30!2sMasjid%20Tua%20Wapauwe%20-%20Negeri%20Kaitetu!5e0!3m2!1sid!2sid!4v1597828423927!5m2!1sid!2sid\" width=\"600\" height=\"450\" frameborder=\"0\" style=\"border:0;\" allowfullscreen=\"\" aria-hidden=\"false\" tabindex=\"0\"></iframe>', 'sejarah'),
(10, 'Wai Ela (Bendungan N5)', '20160315_151920.jpg', '<p>Bendungan Negeri 5 atau Wai Ela terkenal dengan history-nya dimasa lalu.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Banyak kenangan yang terukir bagi masyarakat sekitar.</p>\r\n', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7963.47052004958!2d127.98349099999999!3d-3.647727!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x76697b31f50ae514!2sWai%20Ela!5e0!3m2!1sid!2sid!4v1600673497428!5m2!1sid!2sid\" width=\"600\" height=\"450\" frameborder=\"0\" style=\"border:0;\" allowfullscreen=\"\" aria-hidden=\"false\" tabindex=\"0\"></iframe>', 'sejarah');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `akun_tb`
--
ALTER TABLE `akun_tb`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `galeri_tb`
--
ALTER TABLE `galeri_tb`
  ADD PRIMARY KEY (`id_galeri`);

--
-- Indexes for table `tempat_tb`
--
ALTER TABLE `tempat_tb`
  ADD PRIMARY KEY (`id_tempat`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `akun_tb`
--
ALTER TABLE `akun_tb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `galeri_tb`
--
ALTER TABLE `galeri_tb`
  MODIFY `id_galeri` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tempat_tb`
--
ALTER TABLE `tempat_tb`
  MODIFY `id_tempat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
