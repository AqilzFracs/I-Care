-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 13 Jun 2024 pada 21.32
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `i-care`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `dokter`
--

CREATE TABLE `dokter` (
  `ID_Dokter` int(11) NOT NULL,
  `nama_Dokter` varchar(100) NOT NULL,
  `spesialisasi` varchar(50) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `telepon` varchar(25) NOT NULL,
  `image_path` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `dokter`
--

INSERT INTO `dokter` (`ID_Dokter`, `nama_Dokter`, `spesialisasi`, `alamat`, `telepon`, `image_path`) VALUES
(1, 'Dr. Yudhi, S.Ked', 'THT', 'Jl.Kaliurang', '081321321321', 'img/man2.jpg'),
(3, 'Dr. Opeh, S.Ked', 'Umum', 'Jl.Kaliurang', '081321321321', 'img/man1.jpg'),
(4, 'Prof. Dr. Dian, S.ked, M.Kes', 'Kandungan dan Ginekologi', 'Jl.Soekarno Hatta', '0813213213', 'img/wmn3.jpg'),
(5, 'Dr. Ashel, S.Ked, M.Kes', 'Anak', 'Jl.Sriwijaya', '081321321387', 'img/wmn1.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `dokter_jadwal`
--

CREATE TABLE `dokter_jadwal` (
  `id` int(11) NOT NULL,
  `dokter_id` int(11) NOT NULL,
  `jadwal_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `dokter_jadwal`
--

INSERT INTO `dokter_jadwal` (`id`, `dokter_id`, `jadwal_id`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 1, 3),
(4, 3, 4),
(5, 3, 5),
(6, 3, 6),
(7, 4, 1),
(8, 4, 2),
(9, 4, 3),
(10, 5, 4),
(11, 5, 5),
(12, 5, 6);

-- --------------------------------------------------------

--
-- Struktur dari tabel `jadwal`
--

CREATE TABLE `jadwal` (
  `id` int(11) NOT NULL,
  `hari` varchar(10) NOT NULL,
  `jam_mulai` time NOT NULL,
  `jam_selesai` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `jadwal`
--

INSERT INTO `jadwal` (`id`, `hari`, `jam_mulai`, `jam_selesai`) VALUES
(1, 'Senin', '08:00:00', '12:00:00'),
(2, 'Rabu', '10:00:00', '14:00:00'),
(3, 'Jumat', '09:00:00', '13:00:00'),
(4, 'Selasa', '08:00:00', '12:00:00'),
(5, 'Kamis', '10:00:00', '14:00:00'),
(6, 'Sabtu', '09:00:00', '13:00:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pasien`
--

CREATE TABLE `pasien` (
  `ID_Pasien` int(11) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `jenis_kelamin` varchar(1) NOT NULL,
  `Tanggal_Lahir` date NOT NULL,
  `Alamat` text NOT NULL,
  `Poli` varchar(64) NOT NULL,
  `Status` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `pasien`
--

INSERT INTO `pasien` (`ID_Pasien`, `nama`, `jenis_kelamin`, `Tanggal_Lahir`, `Alamat`, `Poli`, `Status`) VALUES
(1, 'Aqil Ali', 'L', '2004-07-05', 'Jl.Sriwijaya', 'Gigi', 'Lunas'),
(2, 'Faried', 'L', '2003-08-12', 'Jl.Semeru', 'Mata', 'Belum Lunas'),
(3, 'Riki Yudi', 'L', '2004-04-05', 'Kos Nias', 'Gigi', 'Lunas'),
(12, 'Angga', 'L', '2004-04-04', 'Kos Nias', 'Umum', 'Lunas'),
(13, 'Fauza', 'L', '2003-08-15', 'Jl.Nias', 'Psikiater', 'Lunas'),
(15, 'Rizal', 'L', '2003-08-15', 'Jl. TegalGede', 'THT', 'Lunas');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `ID_User` int(11) NOT NULL,
  `username` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `role` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`ID_User`, `username`, `password`, `role`) VALUES
(1, 'admin', '123', 1),
(2, 'aqil', '123', 0),
(3, 'farid', '123', 0);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `dokter`
--
ALTER TABLE `dokter`
  ADD PRIMARY KEY (`ID_Dokter`);

--
-- Indeks untuk tabel `dokter_jadwal`
--
ALTER TABLE `dokter_jadwal`
  ADD PRIMARY KEY (`id`),
  ADD KEY `dokter_id` (`dokter_id`),
  ADD KEY `jadwal_id` (`jadwal_id`);

--
-- Indeks untuk tabel `jadwal`
--
ALTER TABLE `jadwal`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pasien`
--
ALTER TABLE `pasien`
  ADD PRIMARY KEY (`ID_Pasien`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`ID_User`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `dokter`
--
ALTER TABLE `dokter`
  MODIFY `ID_Dokter` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `dokter_jadwal`
--
ALTER TABLE `dokter_jadwal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `jadwal`
--
ALTER TABLE `jadwal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `pasien`
--
ALTER TABLE `pasien`
  MODIFY `ID_Pasien` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `ID_User` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `dokter_jadwal`
--
ALTER TABLE `dokter_jadwal`
  ADD CONSTRAINT `dokter_jadwal_ibfk_1` FOREIGN KEY (`dokter_id`) REFERENCES `dokter` (`ID_Dokter`),
  ADD CONSTRAINT `dokter_jadwal_ibfk_2` FOREIGN KEY (`jadwal_id`) REFERENCES `jadwal` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
