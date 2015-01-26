-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 26 Jan 2015 pada 08.25
-- Versi Server: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `formlogin`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `ID_Num` int(11) NOT NULL AUTO_INCREMENT,
  `Username` varchar(30) NOT NULL,
  `Password` varchar(30) NOT NULL,
  `Type` enum('dokter','office','apoteker') NOT NULL,
  PRIMARY KEY (`Username`),
  UNIQUE KEY `ID_Num` (`ID_Num`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data untuk tabel `login`
--

INSERT INTO `login` (`ID_Num`, `Username`, `Password`, `Type`) VALUES
(2, 'dokter', 'dokter', 'dokter'),
(1, 'office', 'office', 'office');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pasien`
--

CREATE TABLE IF NOT EXISTS `pasien` (
  `Id_Num` int(11) NOT NULL,
  `Nama` varchar(50) NOT NULL,
  `gender` varchar(30) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `gol_darah` varchar(30) NOT NULL,
  `keluhan` varchar(100) NOT NULL,
  UNIQUE KEY `Id_Num` (`Id_Num`,`Nama`,`gender`(25),`alamat`,`gol_darah`(25),`keluhan`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
