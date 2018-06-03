-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 03, 2018 at 04:51 AM
-- Server version: 5.7.19
-- PHP Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_pegawai`
--

-- --------------------------------------------------------

--
-- Table structure for table `pegawai`
--

CREATE TABLE `pegawai` (
  `nip` varchar(21) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `alamat` text NOT NULL,
  `email` varchar(50) NOT NULL,
  `website` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pegawai`
--

INSERT INTO `pegawai` (`nip`, `nama`, `alamat`, `email`, `website`) VALUES
('199303212018061004', 'RUDI SETIAWAN', 'Jalan Ciledug Raya No 99,\r\nPetukangan Utara, Jakarta Selatan\r\n12260, DKI Jakarta', 'rudi.setiawan@mail.com', 'www.rudisetiawan.com'),
('199303212018061005', 'ARIE. S', 'Komplek Japos RT 002/015\r\nKelurahan Peninggilan, Kec.\r\nCiledug, Tangerang', 'aries@mail.com', 'www.aries.com'),
('199303212018061006', 'MUHAMMAD\r\nLINTANG', 'Jl. Raya Caplin, Kec. Ciledug,\r\nTangerang, Banten', 'm.lintang@mail.com', 'www.mlintang.com'),
('199303212018061007', 'LIDRA MARDIUS', 'Jl. Sultan Hasanuddin No.321 Kecamatan Payakumbuh Barat, Kota Payakumbuh, Sumatera Barat', 'lidramardius@mail.com', 'www.lidramardius.com'),
('199303212018061012', 'AYID AYI', 'Jalan Raya Negara KM. 12 Sarilamak, Kecamatan Harau, Kabupaten Lima Puluh Kota', 'ayid.ayi@mail.com', 'www.lidramardius.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`nip`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
