-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 13 Apr 2020 pada 06.48
-- Versi Server: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `trainit_cici`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `username_admin` varchar(50) NOT NULL,
  `password_admin` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id_admin`, `username_admin`, `password_admin`) VALUES
(1, 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997');

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail_pemesanan`
--

CREATE TABLE `detail_pemesanan` (
  `id_detail_pemesanan` int(11) NOT NULL,
  `id_pemesanan` int(11) NOT NULL,
  `id_detail_studio` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `detail_pemesanan`
--

INSERT INTO `detail_pemesanan` (`id_detail_pemesanan`, `id_pemesanan`, `id_detail_studio`) VALUES
(1, 1, 9),
(2, 1, 12),
(3, 3, 8),
(4, 3, 10),
(5, 4, 7),
(6, 4, 11),
(7, 5, 7),
(8, 5, 11),
(9, 6, 8),
(10, 6, 12),
(11, 9, 1),
(12, 9, 12),
(13, 10, 7),
(14, 10, 11),
(15, 13, 7),
(16, 13, 11),
(17, 15, 7),
(18, 15, 12),
(19, 16, 8),
(20, 16, 10),
(21, 21, 7),
(22, 21, 12),
(23, 23, 1),
(24, 23, 9),
(25, 24, 1),
(26, 24, 9),
(27, 25, 7),
(28, 26, 7),
(29, 27, 1),
(30, 27, 9),
(31, 28, 1),
(32, 29, 9),
(33, 30, 9),
(34, 31, 9),
(35, 32, 9),
(36, 33, 9),
(37, 34, 9),
(38, 35, 9),
(39, 36, 9),
(40, 37, 9),
(41, 38, 7),
(42, 38, 12),
(43, 39, 7),
(44, 39, 12),
(45, 40, 8),
(46, 40, 11),
(47, 41, 8),
(48, 41, 11),
(49, 42, 8),
(50, 42, 11),
(51, 43, 8),
(52, 43, 11),
(53, 44, 8),
(54, 44, 11),
(55, 45, 8),
(56, 45, 11),
(57, 46, 8),
(58, 46, 11),
(59, 47, 7),
(60, 47, 10),
(61, 48, 7),
(62, 48, 10),
(63, 49, 7),
(64, 49, 10),
(65, 50, 7),
(66, 50, 10),
(67, 51, 7),
(68, 51, 10),
(69, 52, 7),
(70, 52, 10),
(71, 53, 7),
(72, 53, 10),
(73, 54, 7),
(74, 54, 10),
(75, 55, 7),
(76, 55, 10),
(77, 56, 7),
(78, 56, 10),
(79, 57, 7),
(80, 57, 10),
(81, 58, 7),
(82, 58, 10),
(83, 59, 7),
(84, 59, 10),
(85, 60, 7),
(86, 60, 10),
(87, 61, 9),
(88, 62, 9),
(89, 63, 1),
(90, 63, 12),
(91, 64, 1),
(92, 64, 12),
(93, 65, 1),
(94, 65, 12),
(95, 66, 1),
(96, 66, 12),
(97, 67, 1),
(98, 67, 12),
(99, 68, 1),
(100, 68, 12),
(101, 69, 1),
(102, 69, 12),
(103, 70, 1),
(104, 70, 12),
(105, 71, 1),
(106, 71, 12),
(107, 72, 1),
(108, 72, 8),
(109, 72, 10),
(110, 72, 11),
(111, 73, 1),
(112, 73, 10),
(113, 74, 1),
(114, 74, 9),
(115, 74, 10),
(116, 74, 12),
(117, 75, 9);

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail_studio`
--

CREATE TABLE `detail_studio` (
  `id_detail_studio` int(11) NOT NULL,
  `id_studio` int(11) NOT NULL,
  `nama_background` int(1) NOT NULL,
  `foto_background` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `detail_studio`
--

INSERT INTO `detail_studio` (`id_detail_studio`, `id_studio`, `nama_background`, `foto_background`) VALUES
(1, 1, 1, 'ST1_011.PNG'),
(6, 2, 4, 'ST2_011.PNG'),
(7, 1, 2, 'ST1_021.PNG'),
(8, 1, 3, 'ST1_031.PNG'),
(9, 2, 5, 'ST2_021.PNG'),
(10, 3, 6, 'ST3_011.PNG'),
(11, 3, 7, 'ST3_021.PNG'),
(12, 3, 8, 'ST3_031.PNG');

-- --------------------------------------------------------

--
-- Struktur dari tabel `member`
--

CREATE TABLE `member` (
  `id_member` int(11) NOT NULL,
  `nama_member` varchar(50) NOT NULL,
  `username_member` varchar(50) NOT NULL,
  `password_member` varchar(100) NOT NULL,
  `email_member` varchar(50) NOT NULL,
  `no_telepon_member` char(13) NOT NULL,
  `alamat_member` text NOT NULL,
  `status_member` enum('Sudah Verifikasi','Belum Verifikasi') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `member`
--

INSERT INTO `member` (`id_member`, `nama_member`, `username_member`, `password_member`, `email_member`, `no_telepon_member`, `alamat_member`, `status_member`) VALUES
(5, 'Cici Sri Haryati ', 'cicisha', '8cb2237d0679ca88db6464eac60da96345513964', 'harya.sriharyati07@gmail.com', '085747554797', 'Jalan Kaliurang Km 14.5 Yogyakarta', 'Belum Verifikasi'),
(6, 'Mutiara A\'yun', 'mnuya', '348162101fc6f7e624681b7400b085eeac6df7bd', 'mutiara.ayun19@gmail.com', '082136401337', 'Jalan Besi Km 13.5 Yogyakarta', 'Belum Verifikasi'),
(7, 'Findy Naisha', 'findy', 'f2231d2871e690a2995704f7a297bd7bc64be720', 'findynaisha@gmail.com', '085747554790', 'Jalan Kaliurang Km 7', 'Belum Verifikasi'),
(8, 'Ali Fathur', 'alif', '707fb7d2aac6a040c4e13ca3caff4a2ba9c0308d', 'alifathur212@gmail.com', '0876456789', 'Yogyakarta', 'Belum Verifikasi'),
(9, 'Ali Fatur Rohmah', 'alifa', '23a3b2261c7f1d83b53723fd241ec9b8f614ddea', 'alifatur212@gmail.com', '087736563388', 'Jogja', 'Belum Verifikasi'),
(12, 'Ardhia Amalia', 'ardhia', '9f21e5de066b89fbd1268760748b49e3869357a1', 'ardhiaamalia9@gmail.com', '087736563388', 'Jogja', 'Sudah Verifikasi'),
(13, 'Dhea Amalia', 'dhea', '4ee183722ef69c50dd55dc0b1b8621e4c9c1ba2a', 'ardhiaamalia29@gmail.com', '087736563388', 'Yogyakarta', 'Sudah Verifikasi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `paket`
--

CREATE TABLE `paket` (
  `id_paket` int(11) NOT NULL,
  `nama_paket` varchar(50) NOT NULL,
  `foto_paket` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `paket`
--

INSERT INTO `paket` (`id_paket`, `nama_paket`, `foto_paket`) VALUES
(1, 'Graduation & Family', 'GRADUATION-21.jpg'),
(3, 'Maternity & Baby', 'MATERNITY-11112.jpg'),
(4, 'Couple', 'COUPLE-11.jpg'),
(5, 'Personal', 'PERSONAL-11.jpg'),
(13, 'Group', 'GROUP41.jpg'),
(14, 'Pass Foto', 'Pass_foto-11.jpeg'),
(15, 'Prewedding Indoor', 'PREWED-21.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `paket_studio`
--

CREATE TABLE `paket_studio` (
  `id_paket_studio` int(11) NOT NULL,
  `id_tipe_paket` int(11) NOT NULL,
  `id_studio` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `paket_studio`
--

INSERT INTO `paket_studio` (`id_paket_studio`, `id_tipe_paket`, `id_studio`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 2, 1),
(4, 2, 2),
(5, 3, 1),
(6, 3, 2),
(7, 3, 3),
(8, 5, 1),
(9, 5, 2),
(11, 7, 1),
(12, 7, 2),
(13, 18, 1),
(14, 18, 2),
(15, 9, 1),
(16, 9, 2),
(17, 16, 1),
(18, 16, 2),
(19, 16, 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pembayaran`
--

CREATE TABLE `pembayaran` (
  `id_pembayaran` int(11) NOT NULL,
  `id_pemesanan` int(11) NOT NULL,
  `tanggal_bayar` date NOT NULL,
  `tanggal_konfirmasi` date NOT NULL,
  `nama_rekening` varchar(100) NOT NULL,
  `no_rekening` varchar(50) NOT NULL,
  `jumlah_bayar` int(11) NOT NULL,
  `nama_bank` varchar(100) NOT NULL,
  `status_pembayaran` enum('DP','Lunas') NOT NULL,
  `jenis_pembayaran` enum('Tunai','Transfer','','') NOT NULL,
  `foto_bukti_bayar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pembayaran`
--

INSERT INTO `pembayaran` (`id_pembayaran`, `id_pemesanan`, `tanggal_bayar`, `tanggal_konfirmasi`, `nama_rekening`, `no_rekening`, `jumlah_bayar`, `nama_bank`, `status_pembayaran`, `jenis_pembayaran`, `foto_bukti_bayar`) VALUES
(1, 1, '2020-02-20', '2020-02-20', 'Sri Haryati', '900', 125000, 'Mandiri', 'Lunas', 'Transfer', 'ST2_2.PNG'),
(2, 1, '2020-02-20', '2020-02-20', 'Sri Haryati', '900-008-007', 670000, 'Mandiri', 'Lunas', 'Transfer', 'ST1_11.PNG'),
(3, 2, '2020-02-20', '2020-02-20', 'Mutiara A\'yun', '900-008-007', 100000, 'BCA', 'Lunas', 'Transfer', 'ST_3.jpeg'),
(4, 2, '2020-02-20', '2020-02-20', 'Mutiara A\'yun', '900-008-007', 388000, 'BCA', 'Lunas', 'Transfer', 'ST_1.jpeg'),
(5, 3, '2020-02-20', '2020-02-20', 'Mutiara A\'yun', '900-008-007', 125000, 'BCA', 'Lunas', 'Transfer', 'ST1_3.PNG'),
(6, 3, '2020-02-20', '2020-02-20', 'Mutiara A\'yun', '900-008-007', 670000, 'Mandiri', 'Lunas', 'Transfer', 'ST3_2.PNG'),
(7, 8, '2020-02-21', '2020-02-21', 'Mutiara A\'yun', '900-008-007', 100000, 'Mandiri', 'Lunas', 'Transfer', 'ST1_12.PNG'),
(8, 8, '2020-02-21', '2020-02-21', 'Mutiara A\'yun', '900-008-007', 388000, 'BCA', 'Lunas', 'Transfer', 'ST2_1.PNG'),
(9, 9, '2020-02-26', '2020-02-26', 'Mutiara A\'yun', '900-008-007', 150000, 'BCA', 'Lunas', 'Transfer', 'tf.jpeg'),
(10, 10, '2020-02-26', '2020-03-12', 'Ghina Alfisyah', '900-008-007', 125000, 'Mandiri', 'DP', 'Transfer', 'tf1.jpeg'),
(11, 10, '2020-02-26', '2020-03-12', 'Ghina Alfisyah', '900-008-007', 670000, 'Mandiri', 'Lunas', 'Transfer', 'tf2.jpeg'),
(12, 15, '2020-03-02', '0000-00-00', 'Findy Naisha', '900-008-007', 150000, 'Mandiri', 'DP', 'Transfer', 'tf.jpeg'),
(13, 14, '2020-03-02', '0000-00-00', 'Sri Haryati', '900-008-007', 75000, 'Mandiri', 'DP', 'Transfer', 'tf1.jpeg'),
(14, 16, '2020-03-02', '2020-03-02', 'Sri Haryati', '900-008-007', 125000, 'Mandiri', 'Lunas', 'Transfer', 'tf2.jpeg'),
(15, 16, '2020-03-02', '2020-03-02', 'Mutiara A\'yun', '900-008-007', 700000, 'BCA', 'Lunas', 'Transfer', 'tf3.jpeg'),
(16, 16, '2020-03-02', '2020-03-02', '', '', 45000, '', 'Lunas', 'Tunai', ''),
(17, 21, '2020-03-04', '2020-03-04', 'Findy Naisha', '900-008-007', 125000, 'Mandiri', 'DP', 'Transfer', 'tf.jpeg'),
(18, 21, '2020-03-04', '2020-03-04', 'Findy Naisha', '900-008-007', 670000, 'Mandiri', 'Lunas', 'Transfer', 'tf1.jpeg'),
(19, 23, '2020-03-06', '2020-03-06', 'Mutiara A\'yun', '900-008-007', 150000, 'Mandiri', 'Lunas', 'Transfer', 'Logo_RF_Black.png'),
(20, 26, '2020-03-12', '2020-03-12', 'Sri Haryati', '9000032539455', 75000, 'Mandiri', 'DP', 'Transfer', 'tf2.jpeg'),
(21, 26, '2020-03-12', '2020-03-12', 'Sri Haryati', '9000032539455', 250000, 'Mandiri', 'Lunas', 'Transfer', 'tf3.jpeg'),
(22, 27, '2020-03-12', '0000-00-00', 'Nadhifa Ghania Putri', '009-008-006', 125000, 'BNI', 'Lunas', 'Transfer', 'img24.png'),
(23, 74, '2020-03-24', '0000-00-00', 'Ardhia Amalia', '009-008-006', 200000, 'BCA', 'DP', 'Transfer', 'img25.png'),
(24, 75, '2020-03-24', '0000-00-00', 'Ardhia Amalia', '009-008-006', 75000, 'BRI', 'DP', 'Tunai', 'img26.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pemesanan`
--

CREATE TABLE `pemesanan` (
  `id_pemesanan` int(11) NOT NULL,
  `id_member` int(11) NOT NULL,
  `id_tipe_paket` int(11) NOT NULL,
  `kode_pemesanan` varchar(10) NOT NULL,
  `tanggal_pemesanan` date NOT NULL,
  `tanggal_booking` date NOT NULL,
  `status_pemesanan` enum('Pending','Cancel','DP','Lunas','Menunggu Konfirmasi','Selesai','Proses') NOT NULL,
  `jumlah_orang` int(2) NOT NULL,
  `total_bayar` varchar(8) NOT NULL,
  `max_pose_pemesanan` int(11) NOT NULL,
  `max_file_pemesanan` int(11) NOT NULL,
  `total_tambahan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pemesanan`
--

INSERT INTO `pemesanan` (`id_pemesanan`, `id_member`, `id_tipe_paket`, `kode_pemesanan`, `tanggal_pemesanan`, `tanggal_booking`, `status_pemesanan`, `jumlah_orang`, `total_bayar`, `max_pose_pemesanan`, `max_file_pemesanan`, `total_tambahan`) VALUES
(1, 5, 3, 'RF-57136', '2020-02-20', '2020-02-27', 'Lunas', 0, '795000', 0, 0, 0),
(2, 5, 2, 'RF-21438', '2020-02-20', '2020-02-21', 'Lunas', 0, '488000', 0, 0, 0),
(3, 5, 3, 'RF-75915', '2020-02-20', '2020-02-20', 'Lunas', 0, '795000', 0, 0, 0),
(4, 5, 3, 'RF-83874', '2020-02-20', '2020-03-01', 'Cancel', 0, '795000', 0, 0, 0),
(5, 5, 3, 'RF-63026', '2020-02-20', '2020-03-01', 'Cancel', 0, '795000', 0, 0, 0),
(6, 5, 4, 'RF-55482', '2020-02-20', '2020-02-21', 'Cancel', 0, '995000', 0, 0, 0),
(7, 5, 1, 'RF-17635', '2020-02-21', '2020-02-23', 'Cancel', 12, '430000', 0, 0, 0),
(8, 5, 2, 'RF-89821', '2020-02-21', '2020-02-28', 'Selesai', 0, '488000', 0, 0, 0),
(9, 5, 4, 'RF-91382', '2020-02-26', '2020-02-27', 'Selesai', 0, '995000', 0, 0, 0),
(10, 5, 3, 'RF-87052', '2020-02-26', '2020-02-28', 'Proses', 0, '795000', 0, 0, 0),
(11, 5, 1, 'RF-37021', '2020-02-26', '2020-02-29', 'Cancel', 0, '325000', 0, 0, 0),
(12, 5, 2, 'RF-34997', '2020-02-26', '2020-02-29', 'Cancel', 0, '488000', 0, 0, 0),
(13, 5, 4, 'RF-24243', '2020-02-26', '2020-02-29', 'Cancel', 0, '995000', 0, 0, 0),
(14, 5, 1, 'RF-20575', '2020-03-02', '2020-03-05', 'Menunggu Konfirmasi', 12, '355000', 0, 0, 0),
(15, 5, 4, 'RF-69489', '2020-03-02', '2020-03-05', 'Menunggu Konfirmasi', 12, '1025000', 0, 0, 0),
(16, 5, 3, 'RF-84482', '2020-03-02', '2020-03-04', 'Selesai', 12, '825000', 1, 2, 45000),
(17, 5, 1, 'RF-35289', '2020-03-04', '2020-03-10', 'Cancel', 10, '325000', 0, 0, 0),
(18, 5, 1, 'RF-77175', '2020-03-04', '2020-03-07', 'Cancel', 10, '325000', 0, 0, 0),
(19, 5, 3, 'RF-42993', '2020-03-04', '2020-03-07', 'Cancel', 10, '795000', 0, 0, 0),
(20, 5, 3, 'RF-01026', '2020-03-04', '0000-00-00', 'Cancel', 10, '795000', 0, 0, 0),
(21, 5, 3, 'RF-19519', '2020-03-04', '0000-00-00', 'Selesai', 10, '795000', 0, 0, 0),
(22, 5, 3, 'RF-65965', '2020-03-05', '2020-03-11', 'Cancel', 10, '795000', 0, 0, 0),
(23, 5, 4, 'RF-96459', '2020-03-06', '2020-03-24', 'Selesai', 12, '1025000', 0, 0, 0),
(24, 5, 4, 'RF-49392', '2020-03-07', '2020-03-10', 'Cancel', 12, '1025000', 0, 0, 0),
(25, 5, 5, 'RF-14883', '2020-03-11', '2020-03-12', 'Cancel', 2, '350000', 0, 0, 0),
(26, 5, 1, 'RF-05466', '2020-03-12', '2020-03-13', 'Selesai', 10, '325000', 0, 0, 0),
(27, 5, 3, 'RF-43239', '2020-03-12', '2020-03-14', 'Menunggu Konfirmasi', 12, '825000', 0, 0, 0),
(28, 12, 1, 'RF-24762', '2020-03-20', '2020-03-20', 'Cancel', 12, '355000', 0, 0, 0),
(29, 12, 1, 'RF-33592', '2020-03-20', '2020-03-20', 'Cancel', 12, '355000', 0, 0, 0),
(30, 12, 1, 'RF-58497', '2020-03-20', '2020-03-20', 'Cancel', 12, '355000', 0, 0, 0),
(31, 12, 1, 'RF-33932', '2020-03-20', '2020-03-20', 'Cancel', 12, '355000', 0, 0, 0),
(32, 12, 1, 'RF-83283', '2020-03-20', '2020-03-20', 'Cancel', 12, '355000', 0, 0, 0),
(33, 12, 1, 'RF-62552', '2020-03-20', '2020-03-20', 'Cancel', 12, '355000', 0, 0, 0),
(34, 12, 1, 'RF-36354', '2020-03-20', '2020-03-20', 'Cancel', 12, '355000', 0, 0, 0),
(35, 12, 1, 'RF-35147', '2020-03-20', '2020-03-20', 'Cancel', 12, '355000', 0, 0, 0),
(36, 12, 1, 'RF-48683', '2020-03-20', '2020-03-20', 'Cancel', 12, '355000', 0, 0, 0),
(37, 12, 1, 'RF-70590', '2020-03-20', '2020-03-20', 'Cancel', 12, '355000', 0, 0, 0),
(38, 12, 3, 'RF-37173', '2020-03-20', '2020-03-20', 'Cancel', 12, '825000', 0, 0, 0),
(39, 12, 3, 'RF-22756', '2020-03-20', '2020-03-20', 'Cancel', 12, '825000', 0, 0, 0),
(40, 12, 3, 'RF-26887', '2020-03-20', '2020-03-21', 'Cancel', 12, '825000', 0, 0, 0),
(41, 12, 3, 'RF-62183', '2020-03-20', '2020-03-21', 'Cancel', 12, '825000', 0, 0, 0),
(42, 12, 3, 'RF-07710', '2020-03-20', '2020-03-21', 'Cancel', 12, '825000', 0, 0, 0),
(43, 12, 3, 'RF-27922', '2020-03-20', '2020-03-21', 'Cancel', 12, '825000', 0, 0, 0),
(44, 12, 3, 'RF-60748', '2020-03-20', '2020-03-21', 'Cancel', 12, '825000', 0, 0, 0),
(45, 12, 3, 'RF-53657', '2020-03-20', '2020-03-21', 'Cancel', 12, '825000', 0, 0, 0),
(46, 12, 3, 'RF-71474', '2020-03-20', '2020-03-21', 'Cancel', 12, '825000', 0, 0, 0),
(47, 12, 3, 'RF-66470', '2020-03-21', '2020-03-23', 'Cancel', 12, '825000', 0, 0, 0),
(48, 12, 3, 'RF-51629', '2020-03-21', '2020-03-23', 'Cancel', 12, '825000', 0, 0, 0),
(49, 12, 3, 'RF-72907', '2020-03-21', '2020-03-23', 'Cancel', 12, '825000', 0, 0, 0),
(50, 12, 3, 'RF-08137', '2020-03-21', '2020-03-23', 'Cancel', 12, '825000', 0, 0, 0),
(51, 12, 3, 'RF-55880', '2020-03-21', '2020-03-23', 'Cancel', 12, '825000', 0, 0, 0),
(52, 12, 3, 'RF-53772', '2020-03-21', '2020-03-23', 'Cancel', 12, '825000', 0, 0, 0),
(53, 12, 3, 'RF-77566', '2020-03-21', '2020-03-23', 'Cancel', 12, '825000', 0, 0, 0),
(54, 12, 3, 'RF-37528', '2020-03-21', '2020-03-23', 'Cancel', 12, '825000', 0, 0, 0),
(55, 12, 3, 'RF-63962', '2020-03-21', '2020-03-23', 'Cancel', 12, '825000', 0, 0, 0),
(56, 12, 3, 'RF-29899', '2020-03-21', '2020-03-23', 'Cancel', 12, '825000', 0, 0, 0),
(57, 12, 3, 'RF-21810', '2020-03-21', '2020-03-23', 'Cancel', 12, '825000', 0, 0, 0),
(58, 12, 3, 'RF-92701', '2020-03-21', '2020-03-23', 'Cancel', 12, '825000', 0, 0, 0),
(59, 12, 3, 'RF-22884', '2020-03-21', '2020-03-23', 'Cancel', 12, '825000', 0, 0, 0),
(60, 12, 3, 'RF-54534', '2020-03-21', '2020-03-23', 'Cancel', 12, '825000', 0, 0, 0),
(61, 12, 1, 'RF-27180', '2020-03-21', '2020-03-21', 'Cancel', 12, '355000', 0, 0, 0),
(62, 12, 1, 'RF-35405', '2020-03-21', '2020-03-21', 'Cancel', 12, '355000', 0, 0, 0),
(63, 12, 3, 'RF-29155', '2020-03-23', '2020-03-23', 'Cancel', 12, '825000', 0, 0, 0),
(64, 12, 3, 'RF-20455', '2020-03-23', '2020-03-23', 'Cancel', 12, '825000', 0, 0, 0),
(65, 12, 3, 'RF-14337', '2020-03-23', '2020-03-23', 'Cancel', 12, '825000', 0, 0, 0),
(66, 12, 3, 'RF-58681', '2020-03-23', '2020-03-23', 'Cancel', 12, '825000', 0, 0, 0),
(67, 12, 3, 'RF-81787', '2020-03-23', '2020-03-23', 'Cancel', 12, '825000', 0, 0, 0),
(68, 12, 3, 'RF-34155', '2020-03-23', '2020-03-23', 'Cancel', 12, '825000', 0, 0, 0),
(69, 12, 3, 'RF-05001', '2020-03-23', '2020-03-23', 'Cancel', 12, '825000', 0, 0, 0),
(70, 12, 3, 'RF-20604', '2020-03-23', '2020-03-26', 'Cancel', 12, '825000', 0, 0, 0),
(71, 12, 3, 'RF-64516', '2020-03-23', '2020-03-26', 'Cancel', 12, '825000', 0, 0, 0),
(72, 12, 16, 'RF-99575', '2020-03-23', '2020-03-27', 'Cancel', 2, '1200000', 0, 0, 0),
(73, 12, 16, 'RF-58205', '2020-03-23', '2020-03-26', 'Cancel', 2, '1200000', 0, 0, 0),
(74, 12, 16, 'RF-61317', '2020-03-24', '2020-03-27', 'Menunggu Konfirmasi', 2, '1200000', 0, 0, 0),
(75, 12, 7, 'RF-27521', '2020-03-24', '2020-03-27', 'Menunggu Konfirmasi', 2, '275000', 0, 0, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengaturan`
--

CREATE TABLE `pengaturan` (
  `id_pengaturan` int(11) NOT NULL,
  `nama_pengaturan` varchar(100) NOT NULL,
  `isi_pengaturan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pengaturan`
--

INSERT INTO `pengaturan` (`id_pengaturan`, `nama_pengaturan`, `isi_pengaturan`) VALUES
(1, 'Tarif Tambah Orang', '15000'),
(2, 'Pose', '15000'),
(3, 'File', '20000'),
(4, 'template email pendaftaran', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n	<title></title>\r\n\r\n</head>\r\n<body style=\'background: #f2f2f2;\'>\r\n	<div class=\'box\' style=\'margin-bottom: 20px;background-color: #ffffff;padding: 20px;-webkit-border-radius: 2px;-webkit-background-clip: padding-box;-moz-border-radius: 2px;-moz-background-clip: padding;border-radius: 2px;background-clip: padding-box;-webkit-box-shadow: 0 1px 2px rgba(71, 73, 72, 0.25);-moz-box-shadow: 0 1px 2px rgba(71, 73, 72, 0.25);box-shadow: 0 1px 2px rgba(71, 73, 72, 0.25);\'>\r\n		<div class=\'box-header\' style=\'margin: 0 -20px;padding: 0 20px;border-bottom: 1px solid #f0f0f0;padding-bottom: 20px;background-color: #ffffff;\'>\r\n			<div style=\'width: 99%;float: left;\'>\r\n				<h3 class=\'judul\' style=\'font-size: 16px;line-height: 24px;color: #474948;font-weight: 700;margin: 0;\'>Pendaftaran Member Baru <b><i>Reflection Photography</i></b></h3>\r\n				<h5 style=\'font-size: 14px;line-height: 21px;color: #939694;font-weight: 400;margin: 0;\'></h5>\r\n			</div>\r\n\r\n			<div style=\'clear: both;\'></div>\r\n		</div>\r\n		<div class=\'box-body\' style=\'margin-top: 20px;\'>\r\n			<div>\r\n				<p>\r\n					Terimakasih {nama_member}, Sudah Mendaftar Di <b><i>Reflection Photography</i></b> <br>\r\n					Silahkan Klik link di bawah untuk melakukan verifikasi akun anda\r\n				</p>\r\n				<a href=\"http://localhost/trainit/cici/studioReflection/registrasi/verifikasi/{id_member}\">Verifikasi Akun</a>\r\n			</div>\r\n			<div style=\'clear: both;\'></div><div style=\'clear: both;\'></div>'),
(5, 'template email pemesanan', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n	<title>Email Pemesanan</title>\r\n	<link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\">\r\n</head>\r\n<body>\r\n	<div class=\"container\">\r\n		<div class=\"col-md-offset-5 col-xs-offset-5\">\r\n			<img src=\"http://localhost/trainit/cici/studioReflection/assets/image/logo reflection.png\" width=\"150px\">\r\n		</div><br> <br>\r\n		<p class=\"text-center\">\r\n			Halo {nama_member}, <br>\r\n			Pesanan kamu sudah tercatat, silahkan melakukan pembayaran sebelum 1x24 jam\r\n			<br> <br>\r\n			PASTIKAN NOMINAL YANG KAMU BAYARKAN SESUAI DENGAN JUMLAH YANG TERTERA PADA <br> INVOICE DI BAWAH INI <br><br>\r\n			No.ORDER : {kode_pemesanan}\r\n		</p>\r\n		<div style=\"border: 1px solid gray; background: rgba(247, 247, 247, 1); padding: 20px;\">\r\n			<h4 class=\"text-center\">ORDER DETAILS</h4>\r\n			<table class=\"table \">\r\n				<thead>\r\n					<tr>\r\n						<th>Paket</th>\r\n						<th>Tipe</th>\r\n						<th>Tambah Orang</th>\r\n						<th>Total</th>\r\n					</tr>\r\n				</thead>\r\n				<tbody>\r\n					<tr>\r\n						<td>{nama_paket}</td>\r\n						<td>{nama_tipe_paket}</td>\r\n						<td>{jumlah_orang}</td>\r\n						<td>{total_bayar}</td>\r\n					</tr>\r\n				</tbody>\r\n			</table>\r\n			<hr style=\"border: 1px solid gray\"> <br><br>\r\n			<div class=\"row\">\r\n				<div class=\"col-md-6 text-center\">\r\n					Pembayaran dapat dilakukan dengan DP min {min_dp_tipe_paket} <br>\r\n					atau lunas sesuai dengan yang tertera <br> pada kolom total\r\n				</div>\r\n				<div class=\"col-md-6 text-center\">\r\n					Pastikan angka yang dibayarkan sesuai dengan yang <br> tertera pada kolom total.\r\n\r\n					<br> <span class=\"text-danger\">Lakukan pembayaran sebelum 1x24 jam </span>\r\n					<hr>\r\n					SEGERA LAKUKAN KONFIRMASI PEMBAYARAN VIA <br>\r\n					WEBSITE, SEBELUM BATAS WAKTU YANG DI TENTUKAN <hr style=\"border: 1px solid gray\">\r\n					<b>BCA <br> </b>\r\n					<i>A/n Reflection</i> <br>\r\n					<b>Rekening : 7382- 2827- 28288</b>\r\n				</div>\r\n			</div>\r\n		</div>\r\n	</div>\r\n</body>\r\n</html>'),
(6, 'Template Email Pembayaran', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n	<title>Email Pemesanan</title>\r\n</head>\r\n<body>\r\n\r\n	<div style=\"-moz-background-clip:padding; -moz-border-radius:2px; -moz-box-shadow:0 1px 2px rgba(71, 73, 72, 0.25); -webkit-background-clip:padding-box; -webkit-border-radius:2px; -webkit-box-shadow:0 1px 2px rgba(71, 73, 72, 0.25); background-clip:padding-box; background-color:#ffffff; border-radius:2px; box-shadow:0 1px 2px rgba(71, 73, 72, 0.25); margin-bottom:20px; padding:20px; text-align: center; width: 50%;\">\r\n		<div class=\"box-header\" style=\"background-color:#ffffff; border-bottom:1px solid #f0f0f0; margin-bottom:-20px; margin-left:-20px; margin-right:-20px; margin-top:-20px; padding-bottom:20px; padding:0 20px\">\r\n			<h3>Konfirmasi Pembayaran <i>Reflection Photography</i></h3>\r\n		</div>\r\n		<div class=\"box-body\" style=\"margin-top:20px; background: rgba(247,247,247,1); width: 100%\">\r\n			<div style=\"clear:both\">\r\n				<hr><br>\r\n				Kode Pemesanan : <strong>#{kode_pemesanan}</strong><br> <br>\r\n				Tanggal Pembayaran : {tanggal_pembayaran}<br><br>\r\n				Jumlah Bayar : Rp. {jumlah_bayar}<br><br>\r\n				Status Pembayaran : {status_pembayaran}<br><br>\r\n				Jenis Pembayaran : {jenis_pembayaran}<br><br>\r\n				Sisa Tagihan : Rp. {sisa_tagihan}\r\n			</div>\r\n			<div style=\"clear:both\"> </div>\r\n		</div>\r\n	</div>\r\n\r\n\r\n\r\n</body>\r\n</html>');

-- --------------------------------------------------------

--
-- Struktur dari tabel `portofolio`
--

CREATE TABLE `portofolio` (
  `id_portofolio` int(5) NOT NULL,
  `id_paket` int(11) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `portofolio`
--

INSERT INTO `portofolio` (`id_portofolio`, `id_paket`, `foto`, `keterangan`) VALUES
(1, 1, 'Graduation-4.jpg', 'Graduation'),
(2, 1, 'GRADUATION-2.jpg', 'Graduation'),
(3, 2, 'Personal11.jpg', 'Personal'),
(4, 1, 'Graduation61.jpg', 'Graduation'),
(5, 5, 'Personal32.jpg', 'Personal'),
(6, 13, 'Group11.jpg', 'Group'),
(7, 1, 'Family11.jpg', 'Family'),
(8, 1, 'Graduation41.jpg', 'Graduation'),
(9, 1, 'Graduation91.jpg', 'Graduation'),
(10, 5, 'PERSONAL-11.jpg', 'Personal'),
(11, 5, 'Personal12.jpg', 'Personal'),
(12, 5, 'PERSONAL4.jpg', 'Personal'),
(13, 3, 'Maternity11.jpg', 'Maternity'),
(14, 3, 'MATERNITY-11.jpg', 'Maternity'),
(15, 3, 'Maternity41.jpg', 'Maternity'),
(16, 3, 'Baby21.jpg', 'Baby'),
(17, 3, 'Baby41.jpg', 'Baby'),
(18, 4, 'Couple11.jpg', 'Couple'),
(19, 4, 'COUPLE-11.jpg', 'Couple'),
(20, 13, 'Group51.jpg', 'Group'),
(21, 15, 'PREWED-21.jpg', 'Prewedding'),
(22, 15, 'PREWED-1.jpg', 'Prewedding');

-- --------------------------------------------------------

--
-- Struktur dari tabel `studio`
--

CREATE TABLE `studio` (
  `id_studio` int(11) NOT NULL,
  `nama_studio` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `studio`
--

INSERT INTO `studio` (`id_studio`, `nama_studio`) VALUES
(1, 1),
(2, 2),
(3, 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `testimoni`
--

CREATE TABLE `testimoni` (
  `id_testimoni` int(11) NOT NULL,
  `id_pemesanan` int(11) NOT NULL,
  `tanggal_testimoni` date NOT NULL,
  `isi_testimoni` text NOT NULL,
  `status_testimoni` enum('Menunggu','Diterima','Ditolak','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `testimoni`
--

INSERT INTO `testimoni` (`id_testimoni`, `id_pemesanan`, `tanggal_testimoni`, `isi_testimoni`, `status_testimoni`) VALUES
(4, 21, '2020-03-04', 'lokasi terjangkau', 'Diterima'),
(5, 26, '2020-03-12', 'Hasil fotonya bagus, harga terjangkau', 'Diterima');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tipe_paket`
--

CREATE TABLE `tipe_paket` (
  `id_tipe_paket` int(11) NOT NULL,
  `id_paket` int(11) NOT NULL,
  `nama_tipe_paket` varchar(50) NOT NULL,
  `harga_tipe_paket` varchar(8) NOT NULL,
  `deskripsi_tipe_paket` text NOT NULL,
  `min_dp_tipe_paket` varchar(6) NOT NULL,
  `max_jumlah_orang` int(2) NOT NULL,
  `max_pose` varchar(3) NOT NULL,
  `max_file` varchar(3) NOT NULL,
  `foto_tipe_paket` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tipe_paket`
--

INSERT INTO `tipe_paket` (`id_tipe_paket`, `id_paket`, `nama_tipe_paket`, `harga_tipe_paket`, `deskripsi_tipe_paket`, `min_dp_tipe_paket`, `max_jumlah_orang`, `max_pose`, `max_file`, `foto_tipe_paket`) VALUES
(1, 1, 'Bronze', '325000', '3 Cetak foto 8RW | 1 DVD foto teredit | 5 Pose | 1 Background\r\n', '75000', 10, '5', '', 'Graduation-4.jpg'),
(2, 1, 'Silver', '488000', '4 Cetak foto 8RW | 1 Cetak foto 12R + \"Minimalis Frame\" | 1 DVD foto teredit | 6 Pose | 1 Background\r\n\r\n', '100000', 10, '6', '', 'GRADUATION-22.jpg'),
(3, 1, 'Gold', '795000', '4 Cetak foto 8RW | 1 Cetak foto 16R + \"Exclusive Frame\" |  1 DVD foto teredit | 7 Pose | 2 Background \r\n', '125000', 10, '7', '', 'Graduation-5.jpg'),
(4, 1, 'Platinum', '995000', '5 Cetak foto 8RW | 1 Cetak foto 20RW + \"Exclusive Frame\" | 1 DVD foto teredit | 10 Pose | 2 Background', '150000', 10, '10', '', 'GRADUATION-01.jpg'),
(5, 3, 'Reguler', '350000', '1 Kostum | 6 Pose | 6 Cetak foto 4R | 1 Background |\r\n1 DVD foto teredit | Tidak bisa request konsep', '100000', 2, '6', '', 'MATERNITY-111.jpg'),
(6, 3, 'Exclusive', '700000', '2 Kostum | 8 Pose | 5 Cetak foto 4R | 3 Cetak foto 8RW | 2 Background | 1 DVD foto teredit | Free request konsep \r\n\r\n', '150000', 2, '8', '', 'MATERNITY-2.jpg'),
(7, 4, 'Couple Elegant', '275000', '4 Pose | 4 Cetak foto 4R | 1 Kostum | 1 Background | 1 DVD foto teredit \r\n', '75000', 2, '4', '', 'COUPLE-12.jpg'),
(8, 4, 'Couple Luxury', '325000', '6 Pose | 4 Cetak foto 4R | 2 Cetak foto 8RW | \r\n2 Kostum | 1 Background | 1 DVD foto teredit', '100000', 2, '6', '', 'COUPLE-21.jpg'),
(9, 5, 'Elegant', '222000', '1 Orang | 5 Pose | 4 Cetak foto 4R | 1 Kostum | 1 Background | 1 DVD foto teredit', '75000', 1, '5', '', 'PERSONAL-2.jpg'),
(10, 5, 'Luxury', '350000', '1 Orang | 10 Pose | 10 Cetak foto 4R | 1 Kostum | 1 Background | 1 DVD foto teredit', '100000', 1, '10', '', 'PERSONAL-11.jpg'),
(11, 14, 'Reguler 1', '25000', '1 CD | 1 File foto teredit | Cetak 1 ukuran', '25000', 1, '1', '', 'Pass_foto1.jpeg'),
(12, 14, 'Reguler 2', '40000', '1 CD | 1 File foto teredit | Cetak semua ukuran (2x3, 3x4, 4x6)', '40000', 1, '1', '', 'Pass_foto2.jpeg'),
(13, 14, 'Plus Make Up', '80000', '1 CD | 1 File foto teredit | Make Up | Cetak semua ukuran (2x3, 3x4, 4x6)', '80000', 1, '1', '', 'Pass_foto3.jpeg'),
(14, 14, 'Full Body', '120000', '1 CD | 1 File foto teredit | 2 Cetak foto 3R ', '120000', 1, '1', '', 'Pass_foto4.jpeg'),
(15, 14, 'Full Body + Make Up', '150000', '1 CD | 1 File foto teredit | Make Up | 2 Cetak foto 3R', '100000', 1, '1', '', 'Pass_foto5.jpeg'),
(16, 15, 'Loveable', '1200000', '1 Studio | MUA + Optional wardrobe | 1 Cetak foto 16R | 1 DVD foto teredit | 7 File foto teredit', '200000', 2, '', '', 'PREWED-1.jpg'),
(17, 15, 'Sweetness', '2500000', '2 Studio | MUA + Bridal | 2 Cetak foto 16R + \"Exclusive Frame\" | 1 Cetak foto 20R + \"Exclusive Frame\" | 1 DVD foto teredit | 15 Foto teredit', '250000', 2, '', '', 'PREWED-2.jpg'),
(18, 13, 'Euphoria 1', '15000', '1 Kostum | 1 Background | 5 Pose | 1 Cetak foto 4R/Orang | 1 DVD file foto teredit', '10000', 1, '5', '', 'Group-1.jpg'),
(19, 13, 'Euphoria 2', '25000', '1 Kostum | 1 Background | 5 Pose | 1 Cetak foto 8RW/Orang | 1 DVD file foto teredit', '10000', 1, '5', '', '399179.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `detail_pemesanan`
--
ALTER TABLE `detail_pemesanan`
  ADD PRIMARY KEY (`id_detail_pemesanan`);

--
-- Indexes for table `detail_studio`
--
ALTER TABLE `detail_studio`
  ADD PRIMARY KEY (`id_detail_studio`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`id_member`);

--
-- Indexes for table `paket`
--
ALTER TABLE `paket`
  ADD PRIMARY KEY (`id_paket`);

--
-- Indexes for table `paket_studio`
--
ALTER TABLE `paket_studio`
  ADD PRIMARY KEY (`id_paket_studio`),
  ADD KEY `id_tipe_paket` (`id_tipe_paket`);

--
-- Indexes for table `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`id_pembayaran`);

--
-- Indexes for table `pemesanan`
--
ALTER TABLE `pemesanan`
  ADD PRIMARY KEY (`id_pemesanan`);

--
-- Indexes for table `pengaturan`
--
ALTER TABLE `pengaturan`
  ADD PRIMARY KEY (`id_pengaturan`);

--
-- Indexes for table `portofolio`
--
ALTER TABLE `portofolio`
  ADD PRIMARY KEY (`id_portofolio`);

--
-- Indexes for table `studio`
--
ALTER TABLE `studio`
  ADD PRIMARY KEY (`id_studio`);

--
-- Indexes for table `testimoni`
--
ALTER TABLE `testimoni`
  ADD PRIMARY KEY (`id_testimoni`);

--
-- Indexes for table `tipe_paket`
--
ALTER TABLE `tipe_paket`
  ADD PRIMARY KEY (`id_tipe_paket`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `detail_pemesanan`
--
ALTER TABLE `detail_pemesanan`
  MODIFY `id_detail_pemesanan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=118;
--
-- AUTO_INCREMENT for table `detail_studio`
--
ALTER TABLE `detail_studio`
  MODIFY `id_detail_studio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `id_member` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `paket`
--
ALTER TABLE `paket`
  MODIFY `id_paket` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `paket_studio`
--
ALTER TABLE `paket_studio`
  MODIFY `id_paket_studio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `pembayaran`
--
ALTER TABLE `pembayaran`
  MODIFY `id_pembayaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `pemesanan`
--
ALTER TABLE `pemesanan`
  MODIFY `id_pemesanan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;
--
-- AUTO_INCREMENT for table `pengaturan`
--
ALTER TABLE `pengaturan`
  MODIFY `id_pengaturan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `portofolio`
--
ALTER TABLE `portofolio`
  MODIFY `id_portofolio` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `studio`
--
ALTER TABLE `studio`
  MODIFY `id_studio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `testimoni`
--
ALTER TABLE `testimoni`
  MODIFY `id_testimoni` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tipe_paket`
--
ALTER TABLE `tipe_paket`
  MODIFY `id_tipe_paket` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `paket_studio`
--
ALTER TABLE `paket_studio`
  ADD CONSTRAINT `paket_studio_ibfk_1` FOREIGN KEY (`id_tipe_paket`) REFERENCES `tipe_paket` (`id_tipe_paket`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
