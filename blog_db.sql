-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 24, 2019 at 10:59 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blog_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_article`
--

CREATE TABLE `tbl_article` (
  `article_id` int(11) NOT NULL,
  `article_title` varchar(200) DEFAULT NULL,
  `article_content` text DEFAULT NULL,
  `article_created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_article`
--

INSERT INTO `tbl_article` (`article_id`, `article_title`, `article_content`, `article_created_at`) VALUES
(6, 'Bagaimana menghadapi tantangan abad ke-21', '<p><img alt=\"\" src=\"/blog/assets/kcfinder/upload/files/blockchain-1.jpg\" xss=removed width=\"600\"></p>\r\n\r\n<p>Abad ke-21 merupakan abad teknologi. Hampir semua aspek kehidupan masyarakat tergantung dengan teknologi. Mulai dari perusahaan, instansi, maupun personal. Bahkan teknologi merupakan teman terbaik bagi sebagian besar orang, itulah kenapa hampir setiap orang di dunia melihat smartphone-nya setiap pagi ketika bagun dari tempat tidurnya.</p>\r\n\r\n<p>Berkat perkembangan teknologi jugalah, transparasi informasi dan kemudahan memperoleh informasi menjadi tidak terbendung. Orang-orang bisa mendapatkan informasi dari akun SOSMED (Sosial Media) mereka dari artikel yang di share oleh akun SOSMED lainnya. Selain itu, orang-orang juga mudah membagikan informasi (sharing) ke akun SOSMED yang mereka miliki. itulah perubahan nyata yang terlihat di abad ke-21 ini.</p>\r\n\r\n<p>Orang-orang yang hidup di era ini disebuat generasi Z (<em>Z Generation</em>). Generasi Z merupakan generasi dimana orang-orang yang lahir pada tahun 1995-Sekarang. Generasi ini merupakan generasi paling cerdas yang pernah dimiliki umat manusia. Dimana kecerdasan mereka diatas rata-rata. Hal ini disebabkan oleh kemudahan memperoleh informasi, sehingga orang yang lahir pada generasi ini tidak memiliki batasan untuk belajar apapun yang mereka inginkan. Ini adalah kesempatan yang tidak pernah dimiliki oleh umat manusia sebelumnya.</p>\r\n', '2019-11-23 07:00:40');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_article`
--
ALTER TABLE `tbl_article`
  ADD PRIMARY KEY (`article_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_article`
--
ALTER TABLE `tbl_article`
  MODIFY `article_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
