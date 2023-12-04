-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 04 Des 2023 pada 01.41
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project_uas_kel8`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin1`
--

CREATE TABLE `admin1` (
  `id_admin` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `admin1`
--

INSERT INTO `admin1` (`id_admin`, `email`, `username`, `password`) VALUES
('83cb8802-875c-11ee-a3da-9c7bef3c052d', 'jihann22si@mahasiswa.pcr.ac.id', 'nnn', '666');

-- --------------------------------------------------------

--
-- Struktur dari tabel `nilaisiswa`
--

CREATE TABLE `nilaisiswa` (
  `id_nilai_siswa` varchar(255) NOT NULL,
  `id_data_siswa` varchar(255) NOT NULL,
  `id_pelajaran` varchar(255) NOT NULL,
  `deskripsi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin1`
--
ALTER TABLE `admin1`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indeks untuk tabel `nilaisiswa`
--
ALTER TABLE `nilaisiswa`
  ADD PRIMARY KEY (`id_nilai_siswa`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
