-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 25, 2021 at 03:51 AM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `quwwa`
--

-- --------------------------------------------------------

--
-- Table structure for table `permohonan_syarikat`
--

CREATE TABLE IF NOT EXISTS `permohonan_syarikat` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `nama_pemohon` varchar(100) NOT NULL,
  `nama_syarikat` varchar(200) NOT NULL,
  `alamat` varchar(300) NOT NULL,
  `bandar` varchar(20) NOT NULL,
  `poskod` varchar(20) NOT NULL,
  `negeri` varchar(20) NOT NULL,
  `negara` varchar(20) NOT NULL,
  `no_pendaftaran` varchar(100) NOT NULL,
  `no_telefon` varchar(30) NOT NULL,
  `email` varchar(20) NOT NULL,
  `web` varchar(200) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `sektor` varchar(200) NOT NULL,
  `sub_sektor` varchar(200) NOT NULL,
  `bilangan_pelatih` varchar(200) NOT NULL,
  `spesifikasi_bangsa` varchar(200) NOT NULL,
  `spesifikasi_agama` varchar(200) NOT NULL,
  `spesifikasi_umur` varchar(200) NOT NULL,
  `spesifikasi_jantina` varchar(200) NOT NULL,
  `spesifikasi_kemahiran` varchar(200) NOT NULL,
  `status` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `permohonan_syarikat`
--

INSERT INTO `permohonan_syarikat` (`id`, `nama_pemohon`, `nama_syarikat`, `alamat`, `bandar`, `poskod`, `negeri`, `negara`, `no_pendaftaran`, `no_telefon`, `email`, `web`, `username`, `password`, `sektor`, `sub_sektor`, `bilangan_pelatih`, `spesifikasi_bangsa`, `spesifikasi_agama`, `spesifikasi_umur`, `spesifikasi_jantina`, `spesifikasi_kemahiran`, `status`) VALUES
(7, 'Azuan Ahmad', 'asdasd', 'PT5358, Jln BBN 9/1H', 'Nilai', 'asdasd', 'asdasd', 'MY', 'Azuan Ahmad', '0176056484', 'example010@gmail.com', 'sdfsdf', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'asdasd', 'asdad', 'asdasd', 'asdad', 'dasdas', 'asdasd', 'sdas', 'dasda', 'pending');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
