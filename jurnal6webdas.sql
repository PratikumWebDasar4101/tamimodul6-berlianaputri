-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 11 Okt 2018 pada 16.00
-- Versi server: 10.1.32-MariaDB
-- Versi PHP: 5.6.36

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jurnal6webdas`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `cerita`
--

CREATE TABLE `cerita` (
  `id` int(11) NOT NULL,
  `publisher` int(11) NOT NULL,
  `judul` text NOT NULL,
  `cerita` text NOT NULL,
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `cerita`
--

INSERT INTO `cerita` (`id`, `publisher`, `judul`, `cerita`, `foto`) VALUES
(8, 1, 'Anonim', 'Lorem ipsum dolor sit amet .........................................hhcdjsalkhjbbhsck', '283px-Telkom_University_Logo.svg.png'),
(9, 1, 'Depresi', 'bggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggg', 'Angry Oni.png'),
(10, 7, 'Meloooooonn', 'Test Cerita Lorem ipsum dolor sit amet aaaaaaaaaaaabc', 'Melon.png'),
(11, 1, 'Web Dasar', 'Web Dasar Web Dasar Web Dasar Web Dasar Web Dasar Web Dasar Web Dasar Web Dasar Web Dasar Web Dasar Web Dasar Web Dasar Web Dasar Web Dasar Web Dasar Web Dasar', 'rampok.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `registrasi`
--

CREATE TABLE `registrasi` (
  `id` int(11) NOT NULL,
  `nim` varchar(10) NOT NULL,
  `nama` text NOT NULL,
  `kelas` text NOT NULL,
  `jenis_kelamin` text NOT NULL,
  `hobi` text NOT NULL,
  `fakultas` text NOT NULL,
  `alamat` text NOT NULL,
  `password` text NOT NULL,
  `cerita` text NOT NULL,
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `registrasi`
--

INSERT INTO `registrasi` (`id`, `nim`, `nama`, `kelas`, `jenis_kelamin`, `hobi`, `fakultas`, `alamat`, `password`, `cerita`, `foto`) VALUES
(1, '1234567891', 'Berliana', 'D3MI-41-01', 'Perempuan', 'Menyanyi', 'Fakultas Ilmu Terapan', 'Jl umaya 2', 'ber123', '', ''),
(7, '6702174050', 'John Doel', 'D3TK-41-01', 'Laki-Laki', 'Membaca', 'Fakultas Ilmu Terapan', 'Jl Mrdk 108', 'VbsMac81', '', ''),
(8, '1234567890', 'Ber', 'D3MI-41-01', 'Perempuan', 'Menulis', 'Fakultas Ilmu Terapan', 'Umayah 1', '123456', '', ''),
(9, '6701174026', 'Putri', 'D3MI-41-01', 'Perempuan', 'Menulis', 'Fakultas Ilmu Terapan', 'sukbir', '123456', '', '');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `cerita`
--
ALTER TABLE `cerita`
  ADD PRIMARY KEY (`id`),
  ADD KEY `publisher` (`publisher`),
  ADD KEY `publisher_2` (`publisher`);

--
-- Indeks untuk tabel `registrasi`
--
ALTER TABLE `registrasi`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `cerita`
--
ALTER TABLE `cerita`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `registrasi`
--
ALTER TABLE `registrasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `cerita`
--
ALTER TABLE `cerita`
  ADD CONSTRAINT `cerita_ibfk_1` FOREIGN KEY (`publisher`) REFERENCES `registrasi` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
