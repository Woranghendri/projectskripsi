-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 27 Mei 2024 pada 03.35
-- Versi Server: 10.1.25-MariaDB
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `keuangan2`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `hutang`
--

CREATE TABLE `hutang` (
  `hutang_id` int(11) NOT NULL,
  `hutang_tanggal` date NOT NULL,
  `hutang_nominal` int(11) NOT NULL,
  `hutang_keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `jemaat`
--

CREATE TABLE `jemaat` (
  `id_jemaat` int(11) NOT NULL,
  `nik` varchar(20) NOT NULL,
  `nama_keluarga` varchar(30) NOT NULL,
  `relasi` enum('SUAMI','ISTRI','ANAK') NOT NULL,
  `kolom` int(255) NOT NULL,
  `jumlah_anggota` varchar(15) NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL,
  `tempat_lh` varchar(20) NOT NULL,
  `tgl_lh` date NOT NULL,
  `jekel` enum('PRIA','WANITA') NOT NULL,
  `status_nikah` varchar(15) NOT NULL,
  `tgl_nikah` date NOT NULL,
  `pekerjaan` varchar(25) NOT NULL,
  `pendidikan` varchar(15) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `email` varchar(30) NOT NULL,
  `telepon` varchar(15) NOT NULL,
  `gol_darah` varchar(10) NOT NULL,
  `baptis` enum('Sudah','Belum') NOT NULL,
  `sidi` enum('Sudah','Belum') NOT NULL,
  `edit_jemaat` enum('0','proses','selesai') NOT NULL,
  `alasan_edit` varchar(300) NOT NULL,
  `user_id` int(20) NOT NULL,
  `user_nama` varchar(255) NOT NULL,
  `validasi` enum('proses','selesai') NOT NULL,
  `foto_izin` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `jemaat`
--

INSERT INTO `jemaat` (`id_jemaat`, `nik`, `nama_keluarga`, `relasi`, `kolom`, `jumlah_anggota`, `nama_lengkap`, `tempat_lh`, `tgl_lh`, `jekel`, `status_nikah`, `tgl_nikah`, `pekerjaan`, `pendidikan`, `alamat`, `email`, `telepon`, `gol_darah`, `baptis`, `sidi`, `edit_jemaat`, `alasan_edit`, `user_id`, `user_nama`, `validasi`, `foto_izin`) VALUES
(2, '1234567890', 'ksks', 'SUAMI', 10, '12', 'uchiha itachi', 'manado', '2024-01-16', 'PRIA', 'BELUM MENIKAH', '0000-00-00', 'NINJA', 'S2', 'lorong SMA', 'imortallity54@gmail.com', '0822123444', 'AB', 'Sudah', 'Sudah', 'proses', 'qwq', 3, 'hendri', 'selesai', '29667_1317711.jpeg'),
(3, '1234567890', 'QWQ', 'ANAK', 2, '2', 'fenly pesakkkk', 'manado', '2024-02-28', 'PRIA', 'BELUM MENIKAH', '0000-00-00', 'presiden', 's1', 'lorong SMA', 'santo@gmail.com', '12121212', 'AB', 'Sudah', 'Sudah', '0', '', 3, 'hendri', 'selesai', '18600_1317711.jpeg'),
(4, '5464645645564', 'russel', 'ANAK', 11, '6', 'ian rantung', 'nado', '2024-02-28', 'PRIA', 'BELUM MENIKAH', '0000-00-00', 'NINJA', 'W', 'tosbarlah', 'santo@gmail.com', '0090909', 'ab', 'Sudah', 'Sudah', '0', '', 1, 'Administrator', 'selesai', ''),
(5, '34534534534534', 'wagania', 'ANAK', 12, '4', 'hendriworrrrr', 'MANADO', '2024-03-08', 'PRIA', 'BELUM MENIKAH', '0000-00-00', 'presiden', 'chunin', 'tosbar lingkungan6', 'imortallity54@gmail.com', '989899', 'AB', 'Sudah', 'Belum', '0', '', 1, 'Administrator', 'selesai', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE `kategori` (
  `kategori_id` int(11) NOT NULL,
  `kategori` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`kategori_id`, `kategori`) VALUES
(1, 'SUMBANGAN'),
(2, 'PERSEMBAHAN');

-- --------------------------------------------------------

--
-- Struktur dari tabel `piutang`
--

CREATE TABLE `piutang` (
  `piutang_id` int(11) NOT NULL,
  `piutang_tanggal` date NOT NULL,
  `piutang_nominal` int(11) NOT NULL,
  `piutang_keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi`
--

CREATE TABLE `transaksi` (
  `transaksi_id` int(11) NOT NULL,
  `transaksi_tanggal` date NOT NULL,
  `transaksi_jenis` enum('Pengeluaran','Pemasukan') NOT NULL,
  `transaksi_kategori` int(11) NOT NULL,
  `transaksi_nominal` int(11) NOT NULL,
  `transaksi_keterangan` text NOT NULL,
  `transaksi_foto` varchar(255) NOT NULL,
  `user_id` int(20) NOT NULL,
  `user_nama` varchar(255) NOT NULL,
  `log` enum('Ditambahkan','Diedit') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `transaksi`
--

INSERT INTO `transaksi` (`transaksi_id`, `transaksi_tanggal`, `transaksi_jenis`, `transaksi_kategori`, `transaksi_nominal`, `transaksi_keterangan`, `transaksi_foto`, `user_id`, `user_nama`, `log`) VALUES
(13, '2024-02-20', 'Pemasukan', 2, 300000, 'coba6', '12985_1317711.jpeg', 5, 'bendahara', 'Diedit'),
(14, '2024-02-06', 'Pemasukan', 2, 200000, 'coba5', '8284_1317711.jpeg', 5, 'bendahara', 'Diedit'),
(15, '2024-02-27', 'Pemasukan', 2, 400000, 'tess..', '18637_1317711.jpeg', 1, 'Administrator', 'Diedit'),
(16, '2024-02-13', 'Pemasukan', 2, 200000, 'ayo', '24442_1317711.jpeg', 1, 'Administrator', 'Diedit'),
(17, '2024-02-26', 'Pemasukan', 2, 70000, 'ksksss..', '25585_76565b2b527d666dbcda1e81d1572050.jpg', 1, 'Administrator', 'Diedit'),
(18, '2024-02-27', 'Pemasukan', 2, 80000, 'cobs', '9991_1317711.jpeg', 5, 'bendahara', 'Ditambahkan'),
(19, '2024-05-02', 'Pengeluaran', 1, 90000, 'testing 123', '23624_97f000ea61d62e853cea627e86152d72.jpg', 1, 'Administrator', 'Ditambahkan');

--
-- Trigger `transaksi`
--
DELIMITER $$
CREATE TRIGGER `before_transaksi_delete` BEFORE DELETE ON `transaksi` FOR EACH ROW BEGIN
    DECLARE current_user_id INT;
    DECLARE current_user_nama VARCHAR(255);

    -- ambe user    SELECT user_id, user_nama INTO current_user_id, current_user_nama
    FROM user
    WHERE user_id = OLD.user_id;

    -- Insert    INSERT INTO log_data(transaksi_id, transaksi_tanggal, transaksi_jenis, transaksi_kategori, transaksi_nominal, transaksi_keterangan, user_id, user_nama, keterangan)
    VALUES(OLD.transaksi_id, OLD.transaksi_tanggal, OLD.transaksi_jenis, OLD.transaksi_kategori, OLD.transaksi_nominal, OLD.transaksi_keterangan, current_user_id, current_user_nama, 'Dihapus');
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `user_nama` varchar(100) NOT NULL,
  `user_username` varchar(100) NOT NULL,
  `user_password` varchar(100) NOT NULL,
  `user_foto` varchar(100) DEFAULT NULL,
  `user_level` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`user_id`, `user_nama`, `user_username`, `user_password`, `user_foto`, `user_level`) VALUES
(1, 'Administrator', 'admin', '21232f297a57a5a743894a0e4a801fc3', '23115_76565b2b527d666dbcda1e81d1572050.jpg', 'administrator'),
(3, 'hendri', 'hendri', '202cb962ac59075b964b07152d234b70', '14816_97f000ea61d62e853cea627e86152d72 - Copy.jpg', 'user'),
(5, 'bendahara', 'bendahara', 'c9ccd7f3c1145515a9d3f7415d5bcbea', '', 'bendahara');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `hutang`
--
ALTER TABLE `hutang`
  ADD PRIMARY KEY (`hutang_id`);

--
-- Indexes for table `jemaat`
--
ALTER TABLE `jemaat`
  ADD PRIMARY KEY (`id_jemaat`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`kategori_id`);

--
-- Indexes for table `piutang`
--
ALTER TABLE `piutang`
  ADD PRIMARY KEY (`piutang_id`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`transaksi_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `hutang`
--
ALTER TABLE `hutang`
  MODIFY `hutang_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `jemaat`
--
ALTER TABLE `jemaat`
  MODIFY `id_jemaat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `kategori_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `piutang`
--
ALTER TABLE `piutang`
  MODIFY `piutang_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `transaksi_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
