-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 11, 2020 at 02:40 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `masjid_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `masjid`
--

CREATE TABLE `masjid` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `lokasi` varchar(50) NOT NULL,
  `koordinat` varchar(100) NOT NULL,
  `tanggal` date DEFAULT NULL,
  `love` enum('true','false') DEFAULT 'false',
  `picture` varchar(100) NOT NULL DEFAULT 'http://192.168.1.103/demo_pets/pets_picture/pet_logo.png'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `masjid`
--

INSERT INTO `masjid` (`id`, `name`, `lokasi`, `koordinat`, `tanggal`, `love`, `picture`) VALUES
(1, 'Masjid Raya Al-Furqon', 'Telukbetung, Bandar Lampung', '-5.429334, 105.25997', '2020-07-03', 'true', '/masjid_server/masjid_picture/1.jpeg'),
(2, 'Masjid Raya Taqwa', 'Palembang', '-2.988412, 104.74325', '2020-07-03', 'true', '/masjid_server/masjid_picture/2.jpeg'),
(6, 'Masjid Raya Al-Baari', 'Lubuklinggau', '-3.295764, 102.86550', '2020-07-05', 'true', '/masjid_server/masjid_picture/6.jpeg'),
(8, 'Masjid Jami Pakan Sinayan', 'Bukittinggi', '-0.3436945, 100.3648', '2020-07-17', 'true', '/masjid_server/masjid_picture/8.jpeg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `masjid`
--
ALTER TABLE `masjid`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `masjid`
--
ALTER TABLE `masjid`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
