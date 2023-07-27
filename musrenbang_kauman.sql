-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 27 Jul 2023 pada 10.45
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `musrenbang_kauman`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `musrenbang`
--

CREATE TABLE `musrenbang` (
  `id` int(11) NOT NULL,
  `tahun` int(11) NOT NULL,
  `usulan` varchar(1000) NOT NULL,
  `jenis` varchar(100) NOT NULL,
  `sasaran` varchar(400) NOT NULL,
  `rw` int(11) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `musrenbang`
--

INSERT INTO `musrenbang` (`id`, `tahun`, `usulan`, `jenis`, `sasaran`, `rw`, `status`) VALUES
(2, 2023, 'TESTING', 'SARPAS', 'Dinas Sosial, Pemberdayaan Perempuan, Perlindungan Anak, Pengendalian Penduduk dan Keluarga Berencana', 5, 'Terakomodir'),
(3, 2022, 'TES', 'PM', 'Sekretariat Daerah', 4, '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pokir`
--

CREATE TABLE `pokir` (
  `id_pokir` int(11) NOT NULL,
  `prioritas` varchar(512) DEFAULT NULL,
  `alamat` varchar(512) DEFAULT NULL,
  `kecamatan` varchar(512) DEFAULT NULL,
  `kelurahan` varchar(512) DEFAULT NULL,
  `koefisien` varchar(512) DEFAULT NULL,
  `nilai_usulan` varchar(512) DEFAULT NULL,
  `nilai_akomodir` varchar(512) DEFAULT NULL,
  `opd_tujuan` varchar(512) DEFAULT NULL,
  `keterangan` varchar(512) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `pokir`
--

INSERT INTO `pokir` (`id_pokir`, `prioritas`, `alamat`, `kecamatan`, `kelurahan`, `koefisien`, `nilai_usulan`, `nilai_akomodir`, `opd_tujuan`, `keterangan`) VALUES
(1, 'P-05', 'Jl. Semeru I/1063 A. rt. 03 rw. 01 Kel. Kauman, Kec. Klojen, Kota Malang', 'Klojen', 'Kauman', '1 Paket', ' 4.500.000 ', ' 4.500.000 ', 'Kecamatan Klojen', ''),
(2, 'P-21', 'RT 03/RW 02 Kel. Kauman, Kota Malang', 'Klojen', 'Kauman', '1 Paket', ' 4.500.000 ', ' 4.500.000 ', 'Kecamatan Klojen', ''),
(3, 'P-30', 'jl semeru gang 1 RT 3 RW 1, Kauman, Kota Malang', 'Seluruh Kecamatan', 'Kauman', '40 m2', ' 14.600.000 ', ' 14.600.000 ', 'Kecamatan Klojen', ''),
(4, 'P-37 ', 'Jl. Bareng Kartini 3E, RT.06, RW. 08, Kota Malang', 'Klojen', 'Kauman', '1 paket', ' 7.500.000 ', ' 7.500.000 ', 'Kecamatan Klojen', ''),
(5, 'P-88 ', 'Jl. Kawi Gg.1, RT. 01, RW. 05,, Kota Malang', 'Klojen', 'Kauman', '10 m2', ' 12.500.000 ', ' 12.500.000 ', 'Kecamatan Klojen', ''),
(6, 'P-89 ', 'Jl. Kawi Gg.1, RT. 01, RW. 05,, Kota Malang', 'Klojen', 'Kauman', '35 unit', ' 6.250.000 ', ' 8.750.000 ', 'Kecamatan Klojen', 'Revisi koefisien dari 25 unit menjadi 35 unit'),
(7, 'P-107', 'Jl. Basuki Rahmat, RW. 09, Kel. Kauman, Kota Malang', 'Klojen', 'Kauman', '1 unit', ' 45.000.000 ', ' 45.000.000 ', 'Kecamatan Klojen', ''),
(8, 'P-109', 'Jl. Bareng Kartini 3E, RT. 03, RW. 08 Kel. Kauman, Kota Malang', 'Klojen', 'Kauman', '100 m2', ' 30.000.000 ', ' 30.000.000 ', 'Kecamatan Klojen', ''),
(9, 'P-62 ', 'JL. BRIGJEND KATAMSO GG II RT 07 RW 05, Kota Malang', 'Klojen', 'Kauman', '114 m2', ' 37.722.600 ', ' 37.722.600 ', 'Kecamatan Klojen', 'undefined');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(150) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `role` int(11) NOT NULL,
  `kecamatan` int(11) NOT NULL,
  `kelurahan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `nama`, `role`, `kecamatan`, `kelurahan`) VALUES
(1, 'adminku', 'fd5b5ef24e2bb09b014e475080ae5c2e', 'Admin Super', 101, 0, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `usulan`
--

CREATE TABLE `usulan` (
  `id_usulan` int(11) NOT NULL,
  `no` int(11) DEFAULT NULL,
  `profil` varchar(512) DEFAULT NULL,
  `urusan` varchar(512) DEFAULT NULL,
  `usulan` varchar(512) DEFAULT NULL,
  `permasalahan` varchar(512) DEFAULT NULL,
  `alamat` varchar(512) DEFAULT NULL,
  `skpd_tujuan` varchar(512) DEFAULT NULL,
  `koefisien` varchar(512) DEFAULT NULL,
  `anggaran` int(11) DEFAULT NULL,
  `jenis` varchar(512) DEFAULT NULL,
  `keterangan` varchar(512) DEFAULT NULL,
  `tahun` varchar(100) NOT NULL,
  `rw` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `usulan`
--

INSERT INTO `usulan` (`id_usulan`, `no`, `profil`, `urusan`, `usulan`, `permasalahan`, `alamat`, `skpd_tujuan`, `koefisien`, `anggaran`, `jenis`, `keterangan`, `tahun`, `rw`) VALUES
(1, 208, 'Lurah Kauman', 'Kecamatan', 'Penyelenggaraan Pembinaan Lembaga Kemasyarakatan (Kecamatan Klojen)', 'Meningkatkan Kemampuan (Public Speaking dan Personal Branding) (Forum Anak P1)', 'Kelurahan Kauman, Kota Malang', 'Kecamatan Klojen', '35 Orang', 10500000, 'LK', 'Diakomodir', '', ''),
(2, 209, 'Lurah Kauman', 'Kecamatan', 'Penyelenggaraan Pembinaan Lembaga Kemasyarakatan (Kecamatan Klojen)', 'Meningkatkan Kekuatan Mental Anak Muda (Forum Anak P2)', 'Kelurahan Kauman, Kota Malang', 'Kecamatan Klojen', '35 Orang', 10500000, 'LK', 'Diakomodir', '', ''),
(3, 210, 'Lurah Kauman', 'Kecamatan', 'Penyelenggaraan Pembinaan Lembaga Kemasyarakatan (Kecamatan Klojen)', 'Meningkatkan Kesadaran Anak Muda Akan Bahaya Narkoba dan HIV AIDS (Forum Anak P3)', 'Kelurahan Kauman, Kota Malang', 'Kecamatan Klojen', '35 Orang', 10500000, 'LK', 'Tidak Diakomodir', '', ''),
(4, 211, 'Lurah Kauman', 'Kecamatan', 'Penyelenggaraan Pembinaan Lembaga Kemasyarakatan (Kecamatan Klojen)', 'Meningkatkan Kemampuan Parenting (Forum Anak P4)', 'Kelurahan Kauman, Kota Malang', 'Kecamatan Klojen', '35 Orang', 10500000, 'LK', 'Tidak Diakomodir', '', ''),
(5, 214, 'Lurah Kauman', 'Kecamatan', 'Penyelenggaraan Pembinaan Lembaga Kemasyarakatan (Kecamatan Klojen)', 'Meningkatkan Pengetahuan Anak Muda Tentang Pentingnya Pancasila dan Menjadikan Anak Muda Menjadi Pemuda Pancasila (Forum Anak P5)', 'Kelurahan Kauman, Kota Malang', 'Kecamatan Klojen', '35 Orang', 10500000, 'LK', 'Tidak Diakomodir', '', ''),
(6, 215, 'Lurah Kauman', 'Kecamatan', 'Penyelenggaraan Pembinaan Lembaga Kemasyarakatan (Kecamatan Klojen)', 'Meningkatkan Kesadaran Akan Pentingnya Kebersihan dan Kerapihan Kampung Dengan Bimtek Kampung Bersinar (Kader Lingkungan P1)', 'Kelurahan Kauman, Kota Malang', 'Kecamatan Klojen', '50 Orang', 15000000, 'LK', 'Diakomodir', '', ''),
(7, 216, 'Lurah Kauman', 'Kecamatan', 'Penyelenggaraan Pembinaan Lembaga Kemasyarakatan (Kecamatan Klojen)', 'Menambah Pengetahuan Tentang Pembuatan Pupuk Organik dan Non Organik (Kader Lingkungan P2)', 'Kelurahan Kauman, Kota Malang', 'Kecamatan Klojen', '50 Orang', 15000000, 'LK', 'Diakomodir', '', ''),
(8, 218, 'Lurah Kauman', 'Kecamatan', 'Penyelenggaraan Pembinaan Lembaga Kemasyarakatan (Kecamatan Klojen)', 'Menambah Pengetahuan Tentang Kawasan Cipta Pesona Urban Farming (Kader Lingkungan P3)', 'Kelurahan Kauman, Kota Malang', 'Kecamatan Klojen', '50 Orang', 15000000, 'LK', 'Tidak Diakomodir', '', ''),
(9, 219, 'Lurah Kauman', 'Kecamatan', 'Penyelenggaraan Pembinaan Lembaga Kemasyarakatan (Kecamatan Klojen)', 'Meningkatkan Kemampuan Membuat Handicraft Dari Bahan Daur Ulang (Kader Lingkungan P4)', 'Kelurahan Kauman, Kota Malang', 'Kecamatan Klojen', '50 Orang', 15000000, 'LK', 'Tidak Diakomodir', '', ''),
(10, 225, 'Lurah Kauman', 'Kecamatan', 'Penyelenggaraan Pembinaan Lembaga Kemasyarakatan (Kecamatan Klojen)', 'Penguatan Kelembagaan Kelompok Informasi Masyarakat (KIM)', 'Kelurahan Kauman, Kota Malang', 'Kecamatan Klojen', '30 Orang', 9000000, 'LK', 'Diakomodir', '', ''),
(11, 227, 'Lurah Kauman', 'Kecamatan', 'Penyelenggaraan Pembinaan Lembaga Kemasyarakatan (Kecamatan Klojen)', 'Meningkatkan Kemampuan Dalam Membuat Kerajinan Tangan (Karang Werda P1)', 'Kelurahan Kauman, Kota Malang', 'Kecamatan Klojen', '30 orang', 9000000, 'LK', 'Diakomodir', '', ''),
(12, 228, 'Lurah Kauman', 'Kecamatan', 'Penyelenggaraan Pembinaan Lembaga Kemasyarakatan (Kecamatan Klojen)', 'Penguatan Kelembagaan Karang Werda (Karang Werda P2)', 'Kelurahan Kauman, Kota Malang', 'Kecamatan Klojen', '30 orang', 9000000, 'LK', 'Diakomodir', '', ''),
(13, 230, 'Lurah Kauman', 'Kecamatan', 'Penyelenggaraan Pembinaan Lembaga Kemasyarakatan (Kecamatan Klojen)', 'Meningkatkan Kesehatan Lansia (Karang Werda P3)', 'Kelurahan Kauman, Kota Malang', 'Kecamatan Klojen', '30 orang', 9000000, 'LK', 'Tidak Diakomodir', '', ''),
(14, 237, 'Lurah Kauman', 'Kecamatan', 'Penyelenggaraan Pembinaan Lembaga Kemasyarakatan (Kecamatan Klojen)', 'Meningkatkan Kemampuan Untuk Mengisi SIM PKK dan Admin Dasawisma (PKK Bidum P1)', 'Kelurahan Kauman, Kota Malang', 'Kecamatan Klojen', '50 orang', 15000000, 'LK', 'Diakomodir', '', ''),
(15, 239, 'Lurah Kauman', 'Kecamatan', 'Penyelenggaraan Pembinaan Lembaga Kemasyarakatan (Kecamatan Klojen)', 'Meningkatkan Kemampuan Kelembagaan (PKK Bidum P2)', 'Kelurahan Kauman, Kota Malang', 'Kecamatan Klojen', '50 orang', 15000000, 'LK', 'Diakomodir', '', ''),
(16, 241, 'Lurah Kauman', 'Kecamatan', 'Penyelenggaraan Pembinaan Lembaga Kemasyarakatan (Kecamatan Klojen)', 'Meningkatkan Kemampuan Bidang Kesekretariatan (PKK Bidum P3)', 'Kelurahan Kauman, Kota Malang', 'Kecamatan Klojen', '50 orang', 15000000, 'LK', 'Tidak Diakomodir', '', ''),
(17, 245, 'Lurah Kauman', 'Kecamatan', 'Penyelenggaraan Pembinaan Lembaga Kemasyarakatan (Kecamatan Klojen)', 'Meningkatkan Partisipasi Dalam Lomba Dasawisma (PKK Bidum P4)', 'Kelurahan Kauman, Kota Malang', 'Kecamatan Klojen', '50 orang', 15000000, 'LK', 'Tidak Diakomodir', '', ''),
(18, 246, 'Lurah Kauman', 'Kecamatan', 'Penyelenggaraan Pembinaan Lembaga Kemasyarakatan (Kecamatan Klojen)', 'Meningkatkan Kemampuan Dalam Bidang IT Bagi Kader PKK (PKK Bidum P5)', 'Kelurahan Kauman, Kota Malang', 'Kecamatan Klojen', '50 orang', 15000000, 'LK', 'Tidak Diakomodir', '', ''),
(19, 247, 'Lurah Kauman', 'Kecamatan', 'Penyelenggaraan Pembinaan Lembaga Kemasyarakatan (Kecamatan Klojen)', 'Meningkatkan Pengetahuan Tentang Tata Cara Menerapkan Beretika Dalam Berorganisasi (PKK Bidum P6)', 'Kelurahan Kauman, Kota Malang', 'Kecamatan Klojen', '50 orang', 15000000, 'LK', 'Tidak Diakomodir', '', ''),
(20, 248, 'Lurah Kauman', 'Kecamatan', 'Penyelenggaraan Pembinaan Lembaga Kemasyarakatan (Kecamatan Klojen)', 'Meningkatkan Pengetahuan Tentang Kesehatan Bagi Lansia Yang Rentan Penyakit (PKK Pokja 1 P1)', 'Kelurahan Kauman, Kota Malang', 'Kecamatan Klojen', '50 orang', 15000000, 'LK', 'Diakomodir', '', ''),
(21, 249, 'Lurah Kauman', 'Kecamatan', 'Penyelenggaraan Pembinaan Lembaga Kemasyarakatan (Kecamatan Klojen)', 'Meningkatkan Kapasitas Dalam Musik Al Banjari (PKK Pokja 1 P2)', 'Kelurahan Kauman, Kota Malang', 'Kecamatan Klojen', '50 orang', 15000000, 'LK', 'Diakomodir', '', ''),
(22, 251, 'Lurah Kauman', 'Kecamatan', 'Penyelenggaraan Pembinaan Lembaga Kemasyarakatan (Kecamatan Klojen)', 'Meningkatkan Kesegaran Jasmani Bagi Lansia (PKK Pokja 1 P3)', 'Kelurahan Kauman, Kota Malang', 'Kecamatan Klojen', '50 orang', 15000000, 'LK', 'Tidak Diakomodir', '', ''),
(23, 253, 'Lurah Kauman', 'Kecamatan', 'Penyelenggaraan Pembinaan Lembaga Kemasyarakatan (Kecamatan Klojen)', 'Meningkatkan Pengetahuan Dalam Pelayanan Gardu Lansia (PKK Pokja 1 P4)', 'Kelurahan Kauman, Kota Malang', 'Kecamatan Klojen', '50 orang', 15000000, 'LK', 'Tidak Diakomodir', '', ''),
(24, 255, 'Lurah Kauman', 'Kecamatan', 'Penyelenggaraan Pembinaan Lembaga Kemasyarakatan (Kecamatan Klojen)', 'Meningkatkan Pengetahuan Kader PAUD, BKB, dan BKK Dalam Kegiatan Sosialisasi Kader PAUD Berintegrasi Dengan BKB dan BKK (PKK Pokja 2 P1)', 'Kelurahan Kauman, Kota Malang', 'Kecamatan Klojen', '50 orang', 15000000, 'LK', 'Diakomodir', '', ''),
(25, 256, 'Lurah Kauman', 'Kecamatan', 'Penyelenggaraan Pembinaan Lembaga Kemasyarakatan (Kecamatan Klojen)', 'Meningkatkan Kemampuan Dalam Menggunakan Make Up (PKK Pokja 2 P2)', 'Kelurahan Kauman, Kota Malang', 'Kecamatan Klojen', '50 orang', 15000000, 'LK', 'Diakomodir', '', ''),
(26, 257, 'Lurah Kauman', 'Kecamatan', 'Penyelenggaraan Pembinaan Lembaga Kemasyarakatan (Kecamatan Klojen)', 'Meningkatkan Kemampuan Dalam Membuat Souvenir (PKK Pokja 2 P3)', 'Kelurahan Kauman, Kota Malang', 'Kecamatan Klojen', '50 orang', 15000000, 'LK', 'Tidak Diakomodir', '', ''),
(27, 259, 'Lurah Kauman', 'Kecamatan', 'Penyelenggaraan Pembinaan Lembaga Kemasyarakatan (Kecamatan Klojen)', 'Meningkatkan Kemampuan Penyuluhan Kader BKB (PKK Pokja 2 P4)', 'Kelurahan Kauman, Kota Malang', 'Kecamatan Klojen', '50 orang', 15000000, 'LK', 'Tidak Diakomodir', '', ''),
(28, 260, 'Lurah Kauman', 'Kecamatan', 'Penyelenggaraan Pembinaan Lembaga Kemasyarakatan (Kecamatan Klojen)', 'Meningkatkan Kemampuan Dalam Membuat Tas Decopage (PKK Pokja 2 P5)', 'Kelurahan Kauman, Kota Malang', 'Kecamatan Klojen', '50 orang', 15000000, 'LK', 'Tidak Diakomodir', '', ''),
(29, 262, 'Lurah Kauman', 'Kecamatan', 'Penyelenggaraan Pembinaan Lembaga Kemasyarakatan (Kecamatan Klojen)', 'Meningkatkan Kemampuan Dalam Membuat Bunga Dari Tas Kresek (PKK Pokja 2 P6)', 'Kelurahan Kauman, Kota Malang', 'Kecamatan Klojen', '50 orang', 15000000, 'LK', 'Tidak Diakomodir', '', ''),
(30, 263, 'Lurah Kauman', 'Kecamatan', 'Penyelenggaraan Pembinaan Lembaga Kemasyarakatan (Kecamatan Klojen)', 'Meningkatkan Pengetahuan Tentang Kelurahan Ramah Anak (PKK Pokja 2 P7)', 'Kelurahan Kauman, Kota Malang', 'Kecamatan Klojen', '50 orang', 15000000, 'LK', 'Tidak Diakomodir', '', ''),
(31, 271, 'Lurah Kauman', 'Kecamatan', 'Penyelenggaraan Pembinaan Lembaga Kemasyarakatan (Kecamatan Klojen)', 'Meningkatkan Kreatifitas Dengan Lomba Cipta Menu Berbahan Bungan Telang (PKK Pokja 3 P1)', 'Kelurahan Kauman, Kota Malang', 'Kecamatan Klojen', '50 orang', 15000000, 'LK', 'Diakomodir', '', ''),
(32, 272, 'Lurah Kauman', 'Kecamatan', 'Penyelenggaraan Pembinaan Lembaga Kemasyarakatan (Kecamatan Klojen)', 'Meningkatkan Kemampuan Budidaya Ikan Dalam Ember (PKK Pokja 3 P2)', 'Kelurahan Kauman, Kota Malang', 'Kecamatan Klojen', '50 orang', 15000000, 'LK', 'Diakomodir', '', ''),
(33, 273, 'Lurah Kauman', 'Kecamatan', 'Penyelenggaraan Pembinaan Lembaga Kemasyarakatan (Kecamatan Klojen)', 'Meningkatkan Pengetahuan Tentang Hidroponik dan Asmantoga (PKK Pokja 3 P3)', 'Kelurahan Kauman, Kota Malang', 'Kecamatan Klojen', '50 orang', 15000000, 'LK', 'Tidak Diakomodir', '', ''),
(34, 274, 'Lurah Kauman', 'Kecamatan', 'Penyelenggaraan Pembinaan Lembaga Kemasyarakatan (Kecamatan Klojen)', 'Meningkatkan Kemampuan Dalam Membuat Sabun Aroma Terapi (PKK Pokja 3 P4)', 'Kelurahan Kauman, Kota Malang', 'Kecamatan Klojen', '50 orang', 15000000, 'LK', 'Tidak Diakomodir', '', ''),
(35, 275, 'Lurah Kauman', 'Kecamatan', 'Penyelenggaraan Pembinaan Lembaga Kemasyarakatan (Kecamatan Klojen)', 'Meningkatkan Kesadaran Akan Pentingnya Perilaku Hidup Bersih dan Sehat Dengan Penyuluhan PHBS (PKK Pokja 3 P5)', 'Kelurahan Kauman, Kota Malang', 'Kecamatan Klojen', '50 orang', 15000000, 'LK', 'Tidak Diakomodir', '', ''),
(36, 277, 'Lurah Kauman', 'Kecamatan', 'Penyelenggaraan Pembinaan Lembaga Kemasyarakatan (Kecamatan Klojen)', 'Mengetahui Kesehatan Dengan Skrining Kesehatan Warga Usia Produktif (15-59 Tahun) (PKK Pokja 4 P1)', 'Kelurahan Kauman, Kota Malang', 'Kecamatan Klojen', '50 orang', 15000000, 'LK', 'Diakomodir', '', ''),
(37, 278, 'Lurah Kauman', 'Kecamatan', 'Penyelenggaraan Pembinaan Lembaga Kemasyarakatan (Kecamatan Klojen)', 'Meningkatkan Kapasitas Kader Posyandu Tentang Pelaksanaan 5 Meja di Posyandu Secara Optimal (PKK Pokja 4 P2)', 'Kelurahan Kauman, Kota Malang', 'Kecamatan Klojen', '50 orang', 15000000, 'LK', 'Diakomodir', '', ''),
(38, 279, 'Lurah Kauman', 'Kecamatan', 'Penyelenggaraan Pembinaan Lembaga Kemasyarakatan (Kecamatan Klojen)', 'Meningkatkan Pelayanan Terhadap Penderita Tuberkulosis Sesuai Standart (PKK Pokja 4 P3)', 'Kelurahan Kauman, Kota Malang', 'Kecamatan Klojen', '30 orang', 9000000, 'LK', 'Tidak Diakomodir', '', ''),
(39, 280, 'Lurah Kauman', 'Kecamatan', 'Penyelenggaraan Pembinaan Lembaga Kemasyarakatan (Kecamatan Klojen)', 'Meningkatkan Kemampuan Dalam Pelayanan PHBS (PKK Pokja 4 P4)', 'Kelurahan Kauman, Kota Malang', 'Kecamatan Klojen', '50 orang', 15000000, 'LK', 'Tidak Diakomodir', '', ''),
(40, 281, 'Lurah Kauman', 'Kecamatan', 'Penyelenggaraan Pembinaan Lembaga Kemasyarakatan (Kecamatan Klojen)', 'Meningkatkan Pelayanan KB (PKK Pokja 4 P5)', 'Kelurahan Kauman, Kota Malang', 'Kecamatan Klojen', '50 orang', 15000000, 'LK', 'Tidak Diakomodir', '', ''),
(41, 283, 'Lurah Kauman', 'Kecamatan', 'Penyelenggaraan Pembinaan Lembaga Kemasyarakatan (Kecamatan Klojen)', 'Meningkatkan Pelayanan Antenatal Terhadap Ibu Hamil (PKK Pokja 4 P7)', 'Kelurahan Kauman, Kota Malang', 'Kecamatan Klojen', '50 orang', 15000000, 'LK', 'Tidak Diakomodir', '', ''),
(42, 285, 'Lurah Kauman', 'Kecamatan', 'Penyelenggaraan Pembinaan Lembaga Kemasyarakatan (Kecamatan Klojen)', 'Meningkatkan Pelayanan Imunisasi Dasar Lengkap (PKK Pokja 4 P8)', 'Kelurahan Kauman, Kota Malang', 'Kecamatan Klojen', '30 orang', 9000000, 'LK', 'Tidak Diakomodir', '', ''),
(43, 297, 'Lurah Kauman', 'Kecamatan', 'Pemeliharaan/penataan kawasan kampung tematik (Kecamatan Klojen)', 'Meningkatkan Keindahan Di Kawasan Kampung Tematik (Pokdarwis P1)', 'Kampung Heritage Kayu Tangan, Kota Malang', 'Kecamatan Klojen', '4 paket', 30000000, 'PM', 'Tidak Diakomodir', '', ''),
(44, 299, 'Lurah Kauman', 'Kecamatan', 'Pelatihan usaha mikro (Kecamatan Klojen)', 'Meningkatkan Ekonomi Masyarakat (Pokdarwis P2)', 'Kampung Heritage Kayu Tangan, Kota Malang', 'Kecamatan Klojen', '25 orang', 10000000, 'PM', 'Diakomodir', '', ''),
(45, 302, 'Lurah Kauman', 'Kecamatan', 'Pengadaan Alat Musik Tradisional Angklung (Kecamatan Klojen)', 'Kurangnya Sarana Kesenian (Pokdarwis P3)', 'Kampung Heritage Kayu Tangan, Kota Malang', 'Kecamatan Klojen', '1 Unit', 10000000, 'PM', 'Tidak Diakomodir', '', ''),
(46, 304, 'Lurah Kauman', 'Kecamatan', 'Taman bacaan masyarakat (Kecamatan Klojen)', 'Meningkatkan Minat Baca Masyarakat (Pokdarwis P4)', 'Kampung Heritage Kayu Tangan, Kota Malang', 'Kecamatan Klojen', '1 Paket', 15000000, 'PM', 'Tidak Diakomodir', '', ''),
(47, 332, 'Lurah Kauman', 'Kecamatan', 'Pelatihan usaha mikro (Kecamatan Klojen)', 'Meningkatkan Ekonomi (Karang Taruna P1)', 'Kelurahan Kauman, Kota Malang', 'Kecamatan Klojen', '35 orang', 14000000, 'LK', 'Diakomodir', '', ''),
(48, 335, 'Lurah Kauman', 'Kecamatan', 'Penyelenggaraan Pembinaan Lembaga Kemasyarakatan (Kecamatan Klojen)', 'Penguatan Kelembagaan Karang Taruna di Kelurahan Kauman (Karang Taruna P2)', 'Kelurahan Kauman, Kota Malang', 'Kecamatan Klojen', '35 orang', 10500000, 'LK', 'Diakomodir', '', ''),
(49, 342, 'Lurah Kauman', 'Kecamatan', 'Penyelenggaraan Pembinaan Lembaga Kemasyarakatan (Kecamatan Klojen)', 'Meningkatkan Pengetahuan Kader Posyandu Yang Terintegrasi Dengan PAUD dan BKB Melalui Emo Demo (PKK Pokja 4 P6)', 'Kelurahan Kauman, Kota Malang', 'Kecamatan Klojen', '50 orang', 15000000, 'LK', 'Tidak Diakomodir', '', ''),
(50, 752, 'Lurah Kauman', 'Kecamatan', 'Gorong-gorong Diameter 30 cm (Kecamatan Klojen)', 'Jalan Tergenang (RW 01 P3)', 'RT 03 RW 01, Kota Malang', 'Kecamatan Klojen', '60 m', 21120000, 'SARPRAS', 'Tidak Diakomodir', '', ''),
(51, 753, 'Lurah Kauman', 'Kecamatan', 'Pasang batu ampyang(Kecamatan Klojen)', 'Jalanan Rusak,, (RW 01 P1)', 'RT 02, 03, 09, 10, 11, 12 RW 01, Kota Malang', 'Kecamatan Klojen', '250 m', 75000000, 'SARPRAS', 'Diakomodir', '', ''),
(52, 786, 'Lurah Kauman', 'Kecamatan', 'Rabat beton(Kecamatan Klojen)', 'Jalanan Rusak (RW 01 P2)', 'RT 05 RW 01, Kota Malang', 'Kecamatan Klojen', '300 m', 64020000, 'SARPRAS', 'Tidak Diakomodir', '', ''),
(53, 787, 'Lurah Kauman', 'Kecamatan', 'Pembangunan/pemeliharaan MCK (Kecamatan Klojen)', 'MCK Rusak (RW 01 P4)', 'RT 07 RW 01, Kota Malang', 'Kecamatan Klojen', '10 m', 25000000, 'SARPRAS', 'Tidak Diakomodir', '', ''),
(54, 788, 'Lurah Kauman', 'Kecamatan', 'Pengadaan gerobak sampah (Kecamatan Klojen)', 'Kebersihan Lingkungan (RW 01 P5)', 'RW 01, Kota Malang', 'Kecamatan Klojen', '1 Paket', 8500000, 'SARPRAS', 'Tidak Diakomodir', '', ''),
(55, 789, 'Lurah Kauman', 'Kecamatan', 'Pengadaan tong sampah (Kecamatan Klojen)', 'Kebersihan Lingkungan (RW 01 P6)', 'RT 03, 05, 08 RW 01, Kota Malang', 'Kecamatan Klojen', '35 Buah', 8750000, 'SARPRAS', 'Tidak Diakomodir', '', ''),
(56, 791, 'Lurah Kauman', 'Kecamatan', 'Pengadaan Pot Tanaman (Kecamatan Klojen)', 'Keindahan Lingkungan (RW 01 P7)', 'RT 08 RW 01, Kota Malang', 'Kecamatan Klojen', '30 Buah', 6000000, 'SARPRAS', 'Tidak Diakomodir', '', ''),
(57, 793, 'Lurah Kauman', 'Kecamatan', 'Pembuatan pergola (Kecamatan Klojen)', 'Keindahan Lingkungan (RW 01 P8)', 'RT 01, 08 RW 01, Kota Malang', 'Kecamatan Klojen', '2 Buah', 25000000, 'SARPRAS', 'Tidak Diakomodir', '', ''),
(58, 796, 'Lurah Kauman', 'Kecamatan', 'Pengadaan tanaman toga (Kecamatan Klojen)', 'Keindahan Lingkungan (RW 01 P9)', 'RT 08, 10 RW 01, Kota Malang', 'Kecamatan Klojen', '4 paket', 2000000, 'SARPRAS', 'Tidak Diakomodir', '', ''),
(59, 799, 'Lurah Kauman', 'Kecamatan', 'Pemeliharaan/penataan taman lingkungan (Kecamatan Klojen)', 'Keindahan Lingkungan (RW 01 P10)', 'RT 02, 08, 10 RW 01, Kota Malang', 'Kecamatan Klojen', '3 paket', 22500000, 'SARPRAS', 'Tidak Diakomodir', '', ''),
(60, 801, 'Lurah Kauman', 'Kecamatan', 'Pengadaan timbangan bayi digital (Kecamatan Klojen)', 'Kesehatan Anak (RW 01 P11)', 'RW 01, Kota Malang', 'Kecamatan Klojen', '1 unit', 750000, 'SARPRAS', 'Tidak Diakomodir', '', ''),
(61, 803, 'Lurah Kauman', 'Kecamatan', 'Pengadaan Alat Musik Hadrah (Kecamatan Klojen)', 'Keagamaan (RW 01 P12)', 'RW 01, Kota Malang', 'Kecamatan Klojen', '2 paket', 9000000, 'SARPRAS', 'Tidak Diakomodir', '', ''),
(62, 805, 'Lurah Kauman', 'Kecamatan', 'Penyelenggaraan Pembinaan Lembaga Kemasyarakatan (Kecamatan Klojen)', 'Peningkatan Ekonomi (RW 01 P13)', 'RW 01, Kota Malang', 'Kecamatan Klojen', '10 orang', 3000000, 'SARPRAS', 'Tidak Diakomodir', '', ''),
(63, 808, 'Lurah Kauman', 'Kecamatan', 'Pengadaan Alat Musik Tradisional Angklung (Kecamatan Klojen)', 'Keterampilan Budaya (RW 01 P14)', 'RW 01, Kota Malang', 'Kecamatan Klojen', '1 unit', 10000000, 'SARPRAS', 'Tidak Diakomodir', '', ''),
(64, 809, 'Lurah Kauman', 'Kecamatan', 'Pelatihan usaha mikro (Kecamatan Klojen)', 'Pendapatan Meningkat (RW 01 P15)', 'RW 01, Kota Malang', 'Kecamatan Klojen', '10 orang', 4000000, 'SARPRAS', 'Tidak Diakomodir', '', ''),
(65, 810, 'Lurah Kauman', 'Kecamatan', 'Pasang batu ampyang(Kecamatan Klojen)', 'Jalan Rusak (RW 02 P2)', 'Jl. Basuki Rahmad 2 RT 01, 03, 04 RW 02, Kota Malang', 'Kecamatan Klojen', '200 m', 60000000, 'SARPRAS', 'Diakomodir', '', ''),
(66, 811, 'Lurah Kauman', 'Kecamatan', 'Pengadaan motor sampah (Kecamatan Klojen)', 'Kebersihan Kampung (RW 02 P1)', 'Balai RW 02, Kota Malang', 'Kecamatan Klojen', '1 unit', 45000000, 'SARPRAS', 'Tidak Diakomodir', '', ''),
(67, 813, 'Lurah Kauman', 'Kecamatan', 'Rabat beton(Kecamatan Klojen)', 'Jalan Rusak (RW 02 P3)', 'Jl. Basuki Rahmad 2 RT 01, 05 RW 02, Kota Malang', 'Kecamatan Klojen', '100 m', 21300000, 'SARPRAS', 'Tidak Diakomodir', '', ''),
(68, 819, 'Lurah Kauman', 'Kecamatan', 'Pengadaan timbangan bayi digital (Kecamatan Klojen)', 'Kesehatan Anak (RW 02 P5)', 'Posyandu RW 02, Kota Malang', 'Kecamatan Klojen', '1 unit', 750000, 'SARPRAS', 'Tidak Diakomodir', '', ''),
(69, 822, 'Lurah Kauman', 'Kecamatan', 'Pengadaan tanaman toga (Kecamatan Klojen)', 'Kebersihan Lingkungan (RW 02 P6)', 'RT 03, 05 RW 02, Kota Malang', 'Kecamatan Klojen', '3 paket', 1500000, 'SARPRAS', 'Tidak Diakomodir', '', ''),
(70, 825, 'Lurah Kauman', 'Kecamatan', 'Pengadaan bibit tanaman hias (Kecamatan Klojen)', 'Kebersihan Lingkungan (RW 02 P7)', 'RT 01, 03, 05 RW 02, Kota Malang', 'Kecamatan Klojen', '10 paket', 2000000, 'SARPRAS', 'Tidak Diakomodir', '', ''),
(71, 826, 'Lurah Kauman', 'Kecamatan', 'Pengadaan Pot Tanaman (Kecamatan Klojen)', 'Kebersihan Lingkungan (RW 02 P8)', 'RT 01-07 RW 02, Kota Malang', 'Kecamatan Klojen', '30 paket', 6000000, 'SARPRAS', 'Tidak Diakomodir', '', ''),
(72, 827, 'Lurah Kauman', 'Kecamatan', 'Pengadaan bibit buah-buahan (Kecamatan Klojen)', 'Keindahan Lingkungan (RW 02 P9)', 'RT 01-07 RW 02, Kota Malang', 'Kecamatan Klojen', '10 paket', 5000000, 'SARPRAS', 'Tidak Diakomodir', '', ''),
(73, 828, 'Lurah Kauman', 'Kecamatan', 'Pasang batu ampyang(Kecamatan Klojen)', 'Jalan Rusak (RW 03 P1)', 'RT 01, 03, 05 RW 03 (Depan Pak Budi, Depan Pondok, Depan Bu Emi), Kota Malang', 'Kecamatan Klojen', '100 m', 30000000, 'SARPRAS', 'Diakomodir', '', ''),
(74, 829, 'Lurah Kauman', 'Kecamatan', 'Pengadaan Pot Tanaman (Kecamatan Klojen)', 'Keindahan (RW 03 P3)', 'RT 01, 02, 03, 04, 06 RW 03, Kota Malang', 'Kecamatan Klojen', '50 paket', 10000000, 'SARPRAS', 'Tidak Diakomodir', '', ''),
(75, 830, 'Lurah Kauman', 'Kecamatan', 'Pengadaan Alat Musik Hadrah (Kecamatan Klojen)', 'Keagamaan (RW 03 P4)', 'RW 03, Kota Malang', 'Kecamatan Klojen', '1 paket', 4500000, 'SARPRAS', 'Tidak Diakomodir', '', ''),
(76, 831, 'Lurah Kauman', 'Kecamatan', 'Pengadaan timbangan bayi digital (Kecamatan Klojen)', 'Kesehatan Anak (RW 03 P5)', 'Balai RW 03, Kota Malang', 'Kecamatan Klojen', '1 unit', 750000, 'SARPRAS', 'Tidak Diakomodir', '', ''),
(77, 832, 'Lurah Kauman', 'Kecamatan', 'Pengadaan tong sampah (Kecamatan Klojen)', 'Kebersihan (RW 03 P6)', 'RT 01, 02, 03, 05, 06 RW 03, Kota Malang', 'Kecamatan Klojen', '40 unit', 10000000, 'SARPRAS', 'Tidak Diakomodir', '', ''),
(78, 833, 'Lurah Kauman', 'Kecamatan', 'Pengadaan bibit tanaman hias (Kecamatan Klojen)', 'Keindahan (RW 03 P7)', 'RT 01, 02, 03, 04, 05, 06 RW 03, Kota Malang', 'Kecamatan Klojen', '6 paket', 3000000, 'SARPRAS', 'Tidak Diakomodir', '', ''),
(79, 834, 'Lurah Kauman', 'Kecamatan', 'Pelatihan usaha mikro (Kecamatan Klojen)', 'Pendapatan Meningkat (RW 03 P8)', 'RT 01, 02, 03, 04, 05, 06 RW 03, Kota Malang', 'Kecamatan Klojen', '10 orang', 4000000, 'SARPRAS', 'Tidak Diakomodir', '', ''),
(80, 835, 'Lurah Kauman', 'Kecamatan', 'Pembuatan pergola (Kecamatan Klojen)', 'Keindahan (RW 03 P9)', 'RT 01 RW 03, Kota Malang', 'Kecamatan Klojen', '1 m', 1250000, 'SARPRAS', 'Tidak Diakomodir', '', ''),
(81, 836, 'Lurah Kauman', 'Kecamatan', 'Pengadaan Alat Musik Tradisional Angklung (Kecamatan Klojen)', 'Keagamaan (RW 03 P10)', 'RW 03, Kota Malang', 'Kecamatan Klojen', '1 unit', 10000000, 'SARPRAS', 'Tidak Diakomodir', '', ''),
(82, 837, 'Lurah Kauman', 'Kecamatan', 'Pengadaan gerobak sampah (Kecamatan Klojen)', 'Kebersihan Lingkungan (RW 04 P1)', 'JL. A.I. Suryani Gg 2 RW IV, Kota Malang', 'Kecamatan Klojen', '1 unit', 8500000, 'SARPRAS', 'Diakomodir', '', ''),
(83, 838, 'Lurah Kauman', 'Kecamatan', 'Pengadaan keranda jenazah (Kecamatan Klojen)', 'Keranda Rusak (RW 04 P2)', 'JL. A.I. Suryani Gg 2 RW IV, Kota Malang', 'Kecamatan Klojen', '1 unit', 15000000, 'SARPRAS', 'Tidak Diakomodir', '', ''),
(84, 839, 'Lurah Kauman', 'Kecamatan', 'Pengadaan timbangan bayi digital (Kecamatan Klojen)', 'Kesehatan Anak (RW 04 P3)', 'JL. A.I. Suryani Gg 2 RW IV, Kota Malang', 'Kecamatan Klojen', '1 unit', 750000, 'SARPRAS', 'Tidak Diakomodir', '', ''),
(85, 840, 'Lurah Kauman', 'Kecamatan', 'Pengadaan Pot Tanaman (Kecamatan Klojen)', 'Keindahan Lingkungan (RW 04 P4)', 'JL. A.I. Suryani Gg 2 RW IV, Kota Malang', 'Kecamatan Klojen', '150 paket', 30000000, 'SARPRAS', 'Tidak Diakomodir', '', ''),
(86, 841, 'Lurah Kauman', 'Kecamatan', 'Pengadaan tanaman toga (Kecamatan Klojen)', 'Keindahan Lingkungan (RW 04 P5)', 'JL. A.I. Suryani Gg 2 RW IV, Kota Malang', 'Kecamatan Klojen', '75 paket', 37500000, 'SARPRAS', 'Tidak Diakomodir', '', ''),
(87, 842, 'Lurah Kauman', 'Kecamatan', 'Pengadaan wahana permainan anak di PAUD (Kecamatan Klojen)', 'Keterampilan Anak (RW 04 P6)', 'JL. A.I. Suryani Gg 2 RW IV, Kota Malang', 'Kecamatan Klojen', '1 paket', 10000000, 'SARPRAS', 'Tidak Diakomodir', '', ''),
(88, 844, 'Lurah Kauman', 'Kecamatan', 'Pengadaan tong sampah (Kecamatan Klojen)', 'Kebersihan Lingkungan (RW 04 P7)', 'JL. A.I. Suryani Gg 2 RW IV, Kota Malang', 'Kecamatan Klojen', '2 unit', 1500000, 'SARPRAS', 'Tidak Diakomodir', '', ''),
(89, 845, 'Lurah Kauman', 'Kecamatan', 'Pengadaan bibit tanaman hias (Kecamatan Klojen)', 'Keindahan Lingkungan (RW 04 P8)', 'JL. A.I. Suryani Gg 2 RW IV, Kota Malang', 'Kecamatan Klojen', '75 paket', 37500000, 'SARPRAS', 'Tidak Diakomodir', '', ''),
(90, 847, 'Lurah Kauman', 'Kecamatan', 'Rabat beton(Kecamatan Klojen)', 'Jalan Rusak/Licin (RW 05 P1)', 'RT 02, 04, 06 RW 05, Kota Malang', 'Kecamatan Klojen', '205 m', 43665000, 'SARPRAS', 'Diakomodir', '', ''),
(91, 848, 'Lurah Kauman', 'Kecamatan', 'Pasang batu ampyang(Kecamatan Klojen)', 'Jalan Rusak (RW 05 P2)', 'RT 01-10 RW 05 lanjutan, Kota Malang', 'Kecamatan Klojen', '569.5 m', 170850000, 'SARPRAS', 'Tidak Diakomodir', '', ''),
(92, 849, 'Lurah Kauman', 'Kecamatan', 'Pembuatan pergola (Kecamatan Klojen)', 'Keindahan Lingkungan (RW 05 P4)', 'RT 02, 04, 06 RW 05, Kota Malang', 'Kecamatan Klojen', '8 m', 10000000, 'SARPRAS', 'Tidak Diakomodir', '', ''),
(93, 850, 'Lurah Kauman', 'Kecamatan', 'Pengadaan gerobak sampah (Kecamatan Klojen)', 'Kebersihan Lingkungan (RW 05 P5)', 'RT 03, 04, 07, 09 RW 05, Kota Malang', 'Kecamatan Klojen', '4 unit', 34000000, 'SARPRAS', 'Tidak Diakomodir', '', ''),
(94, 851, 'Lurah Kauman', 'Kecamatan', 'Pengadaan tong sampah (Kecamatan Klojen)', 'Kebersihan Lingkungan (RW 05 P6)', 'RT 04 RW 05, Kota Malang', 'Kecamatan Klojen', '5 unit', 1250000, 'SARPRAS', 'Tidak Diakomodir', '', ''),
(95, 852, 'Lurah Kauman', 'Kecamatan', 'Pemeliharaan/penataan taman lingkungan (Kecamatan Klojen)', 'Keindahan Lingkungan (RW 05 P7)', 'RT 07 RW 05, Kota Malang', 'Kecamatan Klojen', '1 paket', 7500000, 'SARPRAS', 'Tidak Diakomodir', '', ''),
(96, 853, 'Lurah Kauman', 'Kecamatan', 'Pengadaan Pot Tanaman (Kecamatan Klojen)', 'Keindahan Lingkungan (RW 05 P8)', 'RT 03, 04, 08 RW 05, Kota Malang', 'Kecamatan Klojen', '12 paket', 2400000, 'SARPRAS', 'Tidak Diakomodir', '', ''),
(97, 854, 'Lurah Kauman', 'Kecamatan', 'Pengadaan bibit buah-buahan (Kecamatan Klojen)', 'Keindahan Lingkungan (RW 05 P9)', 'RT 05, 08 RW 05, Kota Malang', 'Kecamatan Klojen', '4 paket', 2000000, 'SARPRAS', 'Tidak Diakomodir', '', ''),
(98, 855, 'Lurah Kauman', 'Kecamatan', 'Pengadaan Alat Musik Hadrah (Kecamatan Klojen)', 'Keagamaan (RW 05 P10)', 'RT 09 RW 05, Kota Malang', 'Kecamatan Klojen', '1 paket', 4500000, 'SARPRAS', 'Tidak Diakomodir', '', ''),
(99, 888, 'Lurah Kauman', 'Kecamatan', 'Pasang batu ampyang(Kecamatan Klojen)', 'Jalan Rusak (RW 06 P1)', 'RT 01 RW 06, Kota Malang', 'Kecamatan Klojen', '78 m', 23400000, 'SARPRAS', 'Diakomodir', '', ''),
(100, 890, 'Lurah Kauman', 'Kecamatan', 'Pengadaan Pot Tanaman (Kecamatan Klojen)', 'Keindahan Lingkungan (RW 06 P2)', 'RT 01, 02 RW 06, Kota Malang', 'Kecamatan Klojen', '50 paket', 10000000, 'SARPRAS', 'Tidak Diakomodir', '', ''),
(101, 892, 'Lurah Kauman', 'Kecamatan', 'Pembuatan pergola (Kecamatan Klojen)', 'Keindahan Lingkungan (RW 06 P3)', 'RT 01 RW 06, Kota Malang', 'Kecamatan Klojen', '1 m2', 1250000, 'SARPRAS', 'Tidak Diakomodir', '', ''),
(102, 895, 'Lurah Kauman', 'Kecamatan', 'Pengadaan timbangan bayi digital (Kecamatan Klojen)', 'Kesehatan Anak (RW 06 P5)', 'Posyandu RW 06, Kota Malang', 'Kecamatan Klojen', '1 unit', 750000, 'SARPRAS', 'Tidak Diakomodir', '', ''),
(103, 897, 'Lurah Kauman', 'Kecamatan', 'Pengadaan tong sampah (Kecamatan Klojen)', 'Keindahan Lingkungan (RW 06 P6)', 'RT 01, 02, 03 RW 06, Kota Malang', 'Kecamatan Klojen', '10 unit', 2500000, 'SARPRAS', 'Tidak Diakomodir', '', ''),
(104, 898, 'Lurah Kauman', 'Kecamatan', 'Pelatihan usaha mikro (Kecamatan Klojen)', 'Peningkatan Pendapatan (RW 06 P7)', 'RT 01, 02, 03 RW 06, Kota Malang', 'Kecamatan Klojen', '10 orang', 4000000, 'SARPRAS', 'Tidak Diakomodir', '', ''),
(105, 899, 'Lurah Kauman', 'Kecamatan', 'Gorong-gorong Diameter 40 cm (Kecamatan Klojen)', 'Gorong-Gorong Rusak Tergenang Air (RW 08 P1)', 'Dekat Bu Sumiati RT 01, 03 RW 08, Kota Malang', 'Kecamatan Klojen', '45 m', 16425000, 'SARPRAS', 'Diakomodir', '', ''),
(106, 900, 'Lurah Kauman', 'Kecamatan', 'Pasang batu ampyang(Kecamatan Klojen)', 'Jalan Licin Berlubang (RW 08 P2)', 'RT 01, 03 RW 08, Kota Malang', 'Kecamatan Klojen', '300 m2', 90000000, 'SARPRAS', 'Tidak Diakomodir', '', ''),
(107, 901, 'Lurah Kauman', 'Kecamatan', 'Pavingisasi tanpa kerb (Kecamatan Klojen)', 'Jalan Berlubang (RW 08 P3)', 'RT 04, 06 RW 08, Kota Malang', 'Kecamatan Klojen', '200 m2', 40000000, 'SARPRAS', 'Tidak Diakomodir', '', ''),
(108, 902, 'Lurah Kauman', 'Kecamatan', 'Pembuatan pergola (Kecamatan Klojen)', 'Keindahan Lingkungan (RW 08 P4)', 'RT 01, 06 RW 08, Kota Malang', 'Kecamatan Klojen', '4 m2', 5000000, 'SARPRAS', 'Tidak Diakomodir', '', ''),
(109, 903, 'Lurah Kauman', 'Kecamatan', 'Pengadaan alat pemotong rumput (Kecamatan Klojen)', 'Kebersihan Lingkungan (RW 08 P5)', 'RT 01 RW 08, Kota Malang', 'Kecamatan Klojen', '1 unit', 3000000, 'SARPRAS', 'Tidak Diakomodir', '', ''),
(110, 905, 'Lurah Kauman', 'Kecamatan', 'Pengadaan tong sampah (Kecamatan Klojen)', 'Kebersihan Lingkungan (RW 08 P6)', 'RT 01, 03, 06 RW 08, Kota Malang', 'Kecamatan Klojen', '25 unit', 6250000, 'SARPRAS', 'Tidak Diakomodir', '', ''),
(111, 906, 'Lurah Kauman', 'Kecamatan', 'Pemeliharaan/penataan taman lingkungan (Kecamatan Klojen)', 'Keindahan Lingkungan (RW 08 P7)', 'RT 06 RW 08, Kota Malang', 'Kecamatan Klojen', '1 paket', 7500000, 'SARPRAS', 'Tidak Diakomodir', '', ''),
(112, 909, 'Lurah Kauman', 'Kecamatan', 'Pengadaan Pot Tanaman (Kecamatan Klojen)', 'Kebersihan Lingkungan (RW 08 P8)', 'RT 06 RW 08, Kota Malang', 'Kecamatan Klojen', '10 paket', 2000000, 'SARPRAS', 'Tidak Diakomodir', '', ''),
(113, 910, 'Lurah Kauman', 'Kecamatan', 'Pengadaan bibit buah-buahan (Kecamatan Klojen)', 'Keindahan Lingkungan (RW 08 P9)', 'RT 06 RW 08, Kota Malang', 'Kecamatan Klojen', '10 paket', 5000000, 'SARPRAS', 'Tidak Diakomodir', '', ''),
(114, 911, 'Lurah Kauman', 'Kecamatan', 'Pengadaan bibit tanaman hias (Kecamatan Klojen)', 'Keindahan Lingkungan (RW 08 P10)', 'RT 06 RW 08, Kota Malang', 'Kecamatan Klojen', '10 paket', 5000000, 'SARPRAS', 'Tidak Diakomodir', '', ''),
(115, 912, 'Lurah Kauman', 'Kecamatan', 'Pengadaan tanaman toga (Kecamatan Klojen)', 'Keindahan Lingkungan (RW 08 P11)', 'RT 06 RW 08, Kota Malang', 'Kecamatan Klojen', '10 paket', 5000000, 'SARPRAS', 'Tidak Diakomodir', '', ''),
(116, 913, 'Lurah Kauman', 'Kecamatan', 'Pasang batu ampyang(Kecamatan Klojen)', 'Jalan Rusak (RW 09 P1)', 'Mbah Honggo RT 01 RW 09, Kota Malang', 'Kecamatan Klojen', '100 m2', 30000000, 'SARPRAS', 'Diakomodir', '', ''),
(117, 914, 'Lurah Kauman', 'Kecamatan', 'Pavingisasi tanpa kerb (Kecamatan Klojen)', 'Jalan Rusak (RW 09 P2)', 'RT 03, 04 RW 09, Kota Malang', 'Kecamatan Klojen', '200 m2', 56000000, 'SARPRAS', 'Tidak Diakomodir', '', ''),
(118, 915, 'Lurah Kauman', 'Kecamatan', 'Pembuatan pergola (Kecamatan Klojen)', 'Keindahan Lingkungan (RW 09 P3)', 'Jembatan Gazebo RT 01-05 RW 09, Kota Malang', 'Kecamatan Klojen', '9 m2', 11250000, 'SARPRAS', 'Tidak Diakomodir', '', ''),
(119, 916, 'Lurah Kauman', 'Kecamatan', 'Pemeliharaan/penataan taman lingkungan (Kecamatan Klojen)', 'Keindahan Lingkungan (RW 09 P4)', 'Gang 6, Mbah Honggo RT 01 RW 09, Kota Malang', 'Kecamatan Klojen', '2 paket', 15000000, 'SARPRAS', 'Tidak Diakomodir', '', ''),
(120, 917, 'Lurah Kauman', 'Kecamatan', 'Pengadaan motor sampah (Kecamatan Klojen)', 'Kebersihan Lingkungan (RW 09 P5)', 'Balai RW 09, Kota Malang', 'Kecamatan Klojen', '1 unit', 45000000, 'SARPRAS', 'Tidak Diakomodir', '', ''),
(121, 918, 'Lurah Kauman', 'Kecamatan', 'Pengadaan Pot Tanaman (Kecamatan Klojen)', 'Keindahan Lingkungan (RW 09 P6)', 'RT 01-08 RW 09, Kota Malang', 'Kecamatan Klojen', '10 paket', 2000000, 'SARPRAS', 'Tidak Diakomodir', '', ''),
(122, 919, 'Lurah Kauman', 'Kecamatan', 'Pengadaan timbangan bayi digital (Kecamatan Klojen)', 'Kesehatan Anak (RW 09 P7)', 'Posyandu RW 09, Kota Malang', 'Kecamatan Klojen', '1 unit', 750000, 'SARPRAS', 'Tidak Diakomodir', '', ''),
(123, 920, 'Lurah Kauman', 'Kecamatan', 'Pavingisasi tanpa kerb (Kecamatan Klojen)', 'Jalan Rusak (RW 10 P1)', 'Jl. A.R. Hakim Gang 2 RW 10, Kota Malang', 'Kecamatan Klojen', '150 m2', 42000000, 'SARPRAS', 'Diakomodir', '', ''),
(124, 921, 'Lurah Kauman', 'Kecamatan', 'Pembuatan pergola (Kecamatan Klojen)', 'Keindahan Lingkungan (RW 10 P2)', 'RT 06 RW 10, Kota Malang', 'Kecamatan Klojen', '1 m2', 1250000, 'SARPRAS', 'Tidak Diakomodir', '', ''),
(125, 922, 'Lurah Kauman', 'Kecamatan', 'Pemeliharaan/penataan taman lingkungan (Kecamatan Klojen)', 'Keindahan lingkungan (RW 10 P3)', 'RT 06 RW 10, Kota Malang', 'Kecamatan Klojen', '1 paket', 7500000, 'SARPRAS', 'Tidak Diakomodir', '', ''),
(126, 923, 'Lurah Kauman', 'Kecamatan', 'Pengadaan Pot Tanaman (Kecamatan Klojen)', 'Keindahan Lingkungan (RW 10 P4)', 'RT 03, 05, 06 RW 10, Kota Malang', 'Kecamatan Klojen', '75 paket', 15000000, 'SARPRAS', 'Tidak Diakomodir', '', ''),
(127, 924, 'Lurah Kauman', 'Kecamatan', 'Pengadaan tong sampah (Kecamatan Klojen)', 'Kebersihan Lingkungan (RW 10 P5)', 'RT 03, 06 RW 10, Kota Malang', 'Kecamatan Klojen', '20 unit', 5000000, 'SARPRAS', 'Tidak Diakomodir', '', ''),
(128, 1050, 'Lurah Kauman', 'Kecamatan', 'Pengadaan tanaman toga (Kecamatan Klojen)', 'Kebersihan Lingkungan (RW 10 P6)', 'RT 05, 06 RW 10, Kota Malang', 'Kecamatan Klojen', '10 paket', 5000000, 'SARPRAS', 'Tidak Diakomodir', '', ''),
(129, 1052, 'Lurah Kauman', 'Kecamatan', 'Pengadaan bibit buah-buahan (Kecamatan Klojen)', 'Keindahan Lingkungan (RW 10 P7)', 'RT 03 RW 10, Kota Malang', 'Kecamatan Klojen', '15 paket', 7500000, 'SARPRAS', 'Tidak Diakomodir', '', ''),
(130, 1054, 'Lurah Kauman', 'Kecamatan', 'Pengadaan bibit tanaman hias (Kecamatan Klojen)', 'Keindahan Lingkungan (RW 10 P8)', 'RT 01, 03 RW 10, Kota Malang', 'Kecamatan Klojen', '15 paket', 7500000, 'SARPRAS', 'Tidak Diakomodir', '', ''),
(131, 1059, 'Lurah Kauman', 'Kecamatan', 'Pengadaan tanaman toga (Kecamatan Klojen)', 'Keindahan Lingkungan (RW 10 P9)', 'RT 01, 03 RW 10, Kota Malang', 'Kecamatan Klojen', '15 paket', 7500000, 'SARPRAS', 'Tidak Diakomodir', '', ''),
(132, 1061, 'Lurah Kauman', 'Kecamatan', 'Pengadaan alat pemotong rumput (Kecamatan Klojen)', 'Kebersihan Lingkungan (RW 10 P10)', 'RT 03 RW 10, Kota Malang', 'Kecamatan Klojen', '1 unit', 3000000, 'SARPRAS', 'Tidak Diakomodir', '', ''),
(133, 1065, 'Lurah Kauman', 'Kecamatan', 'Pengadaan gerobak sampah (Kecamatan Klojen)', 'Kebersihan Lingkungan (RW 10 P11)', 'RT 03 RW 10, Kota Malang', 'Kecamatan Klojen', '1 unit', 8500000, 'SARPRAS', 'Tidak Diakomodir', '', ''),
(134, 1067, 'Lurah Kauman', 'Kecamatan', 'Pengadaan bibit buah-buahan (Kecamatan Klojen)', 'Keindahan Lingkungan (RW 10 P12)', 'PKK RW 10, Kota Malang', 'Kecamatan Klojen', '10 paket', 5000000, 'SARPRAS', 'Tidak Diakomodir', '', ''),
(135, 1106, 'Lurah Kauman', 'Kecamatan', 'Pengadaan bibit tanaman hias (Kecamatan Klojen)', 'Keindahan Lingkungan (RW 06 P4)', 'RT 01 RW 06, Kota Malang', 'Kecamatan Klojen', '10 paket', 2000000, 'SARPRAS', 'Tidak Diakomodir', '', ''),
(136, 1107, 'Lurah Kauman', 'Kecamatan', 'Gorong-gorong Diameter 40 cm (Kecamatan Klojen)', 'Gorong-Gorong Rusak (RW 02 P4)', 'Sepanjang Jl. A.R. Hakim gg 4 RT 02 RW 02, Kota Malang', 'Kecamatan Klojen', '100 m', 40150000, 'SARPRAS', 'Tidak Diakomodir', '', ''),
(137, 1108, 'Lurah Kauman', 'Kecamatan', 'Gorong-gorong Diameter 30 cm (Kecamatan Klojen)', 'Gorong-Gorong Ambles (RW 03 P2)', 'RT 01, 03, 05, 06 RW 03 (Depan P. Reza, Depan Pondok, Depan Bu Emi, Depan P. Ludik), Kota Malang', 'Kecamatan Klojen', '200 m', 73000000, 'SARPRAS', 'Tidak Diakomodir', '', ''),
(138, 1109, 'Lurah Kauman', 'Kecamatan', 'Gorong-gorong Diameter 30 cm (Kecamatan Klojen)', 'Gorong-Gorong Ambles/Rusak (RW 05 P3)', 'RT 04, 06 RW 05, Kota Malang', 'Kecamatan Klojen', '62 m', 22630000, 'SARPRAS', 'Tidak Diakomodir', '', ''),
(139, NULL, NULL, 'A', 'B', 'C', 'D', 'Kecamatan Klojen', '1', 2, 'SARPAS', 'Diakomodir', '2023', '8');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `musrenbang`
--
ALTER TABLE `musrenbang`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pokir`
--
ALTER TABLE `pokir`
  ADD PRIMARY KEY (`id_pokir`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indeks untuk tabel `usulan`
--
ALTER TABLE `usulan`
  ADD PRIMARY KEY (`id_usulan`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `musrenbang`
--
ALTER TABLE `musrenbang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `pokir`
--
ALTER TABLE `pokir`
  MODIFY `id_pokir` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=284;

--
-- AUTO_INCREMENT untuk tabel `usulan`
--
ALTER TABLE `usulan`
  MODIFY `id_usulan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=140;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
