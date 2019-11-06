-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 06 Nov 2019 pada 10.27
-- Versi Server: 10.1.28-MariaDB
-- PHP Version: 5.6.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uts_pwfl`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `log`
--

CREATE TABLE `log` (
  `id` int(11) NOT NULL,
  `nim` varchar(15) NOT NULL,
  `no_hp_lama` varchar(15) NOT NULL,
  `no_hp_baru` varchar(15) NOT NULL,
  `tgl_diubah` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `log`
--

INSERT INTO `log` (`id`, `nim`, `no_hp_lama`, `no_hp_baru`, `tgl_diubah`) VALUES
(1, '161240000567', '085290156557', '0852901565578', '2019-11-05 00:05:18');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mhs`
--

CREATE TABLE `mhs` (
  `id` int(11) NOT NULL,
  `nim` varchar(15) NOT NULL,
  `nama_mhs` varchar(50) NOT NULL,
  `jenis_kelamin` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `no_hp` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `mhs`
--

INSERT INTO `mhs` (`id`, `nim`, `nama_mhs`, `jenis_kelamin`, `alamat`, `no_hp`) VALUES
(1, '161240000567', 'Ahmad Hasan Umam Fikri', 'Laki-laki', 'Kepuk Bangsri Jepara', '0852901565578'),
(2, '161240000555', 'Cahya Setyowati', 'Perempuan', 'Pati', '08533456789'),
(3, '161240000459', 'Muhammad Shihab Kafibaih', 'Laki-laki', 'Bulungan Pakis Aji Jepara', '08532453677'),
(4, '161240000589', 'Desi Amelina Suryani', 'Perempuan', 'Kedung Leper Bangsri Jepara', '087655488766'),
(5, '161240000469', 'Nur Shahlan Asrowi', 'Laki-laki', 'Demak', '085345632760');

--
-- Trigger `mhs`
--
DELIMITER $$
CREATE TRIGGER `riwayat_no_hp` AFTER UPDATE ON `mhs` FOR EACH ROW BEGIN
IF (NEW.no_hp != OLD.no_hp) THEN
INSERT INTO log (nim, no_hp_lama, no_hp_baru, tgl_diubah)
VALUES (old.nim, old.no_hp, new.no_hp, NOW());
END IF;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Stand-in structure for view `tampil`
-- (Lihat di bawah untuk tampilan aktual)
--
CREATE TABLE `tampil` (
`id` int(11)
,`nim` varchar(15)
,`nama_mhs` varchar(50)
,`jenis_kelamin` varchar(50)
,`alamat` text
,`no_hp` varchar(15)
);

-- --------------------------------------------------------

--
-- Struktur untuk view `tampil`
--
DROP TABLE IF EXISTS `tampil`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `tampil`  AS  (select `mhs`.`id` AS `id`,`mhs`.`nim` AS `nim`,`mhs`.`nama_mhs` AS `nama_mhs`,`mhs`.`jenis_kelamin` AS `jenis_kelamin`,`mhs`.`alamat` AS `alamat`,`mhs`.`no_hp` AS `no_hp` from `mhs`) ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `log`
--
ALTER TABLE `log`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mhs`
--
ALTER TABLE `mhs`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `log`
--
ALTER TABLE `log`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `mhs`
--
ALTER TABLE `mhs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
