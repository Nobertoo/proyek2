-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 02, 2022 at 10:01 PM
-- Server version: 10.4.16-MariaDB
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `p2noberto`
--

-- --------------------------------------------------------

--
-- Table structure for table `gejala`
--

CREATE TABLE `gejala` (
  `id` int(11) NOT NULL,
  `kode_gejala` varchar(225) DEFAULT NULL,
  `nama_gejala` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gejala`
--

INSERT INTO `gejala` (`id`, `kode_gejala`, `nama_gejala`, `created_at`, `updated_at`) VALUES
(6, 'G001', 'Hilangnya Nafsu Makan', '2021-12-26 07:09:50', '2021-12-26 07:09:50'),
(7, 'G002', 'Hidung Berlendir', '2021-12-26 07:11:40', '2021-12-26 07:11:40'),
(8, 'G003', 'Demam', '2021-12-26 07:12:01', '2021-12-26 07:12:01'),
(9, 'G004', 'Lesu', '2021-12-26 07:12:20', '2021-12-26 07:12:20'),
(10, 'G005', 'Diare', '2021-12-26 07:13:55', '2021-12-26 07:13:55'),
(11, 'G006', 'Radang Mata', '2021-12-26 07:16:34', '2021-12-26 07:16:34'),
(12, 'G007', 'Sulit Bernafas', '2021-12-26 07:17:33', '2021-12-26 07:17:33'),
(13, 'G008', 'Muntah', '2021-12-26 07:18:05', '2021-12-26 07:18:05'),
(14, 'G009', 'Dehidrasi', '2021-12-26 07:18:35', '2021-12-26 07:18:35'),
(15, 'G010', 'Bersin', '2021-12-26 07:19:39', '2021-12-26 07:19:39'),
(16, 'G011', 'Luka Bibir', '2021-12-26 07:20:10', '2021-12-26 07:20:10'),
(17, 'G012', 'Luka Lidah', '2021-12-26 07:20:45', '2021-12-26 07:20:45'),
(18, 'G013', 'Infeksi Kulit', '2021-12-26 07:21:12', '2021-12-26 07:21:12'),
(19, 'G014', 'Sakit Sendi', '2021-12-26 07:22:33', '2021-12-26 07:22:33'),
(20, 'G015', 'Kejang', '2021-12-26 07:23:05', '2021-12-26 07:23:05'),
(21, 'G016', 'Infeksi Mulut', '2021-12-26 13:34:49', '2021-12-26 13:34:49'),
(22, 'G017', 'Kelelahan', '2021-12-26 13:37:10', '2021-12-26 13:37:10'),
(23, 'G018', 'Bulu Rontok', '2021-12-26 13:37:33', '2021-12-26 13:37:33');

-- --------------------------------------------------------

--
-- Table structure for table `lokasi`
--

CREATE TABLE `lokasi` (
  `id` int(11) NOT NULL,
  `nama_dokter` varchar(255) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `foto_dokter` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `penyakit`
--

CREATE TABLE `penyakit` (
  `id` int(11) NOT NULL,
  `kode_penyakit` varchar(150) DEFAULT NULL,
  `nama_penyakit` varchar(255) DEFAULT NULL,
  `keterangan` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `penyakit`
--

INSERT INTO `penyakit` (`id`, `kode_penyakit`, `nama_penyakit`, `keterangan`, `created_at`, `updated_at`) VALUES
(1, 'P001', 'Feline Immunodeficiency Virus', 'Feline Immunodeficiency Virus atau FIV adalah virus yang merusak dan melemahkan sistem kekebalan kucing, yang pada gilirannya menempatkan kucing pada risiko tertular infeksi lain yang berpotensi fatal.', '2021-11-29 06:42:02', '2021-11-29 16:50:08'),
(6, 'P002', 'Feline Leukemia', 'Leukemia kucing atau feline leukaemia (FeLV) adalah retrovirus, yang tergabung dalam kelompok virus yang sama dengan HIV. Jumlah kucing yang mengidap penyakit ini telah jauh berkurang, dengan kurang dari 1% kucing sehat yang terinfeksi.', '2021-12-13 20:40:35', '2021-12-13 20:40:35'),
(8, 'P003', 'Feline Calici', 'Feline Calici adalah suatu penyakit yang disebabkan oleh virus dari famili caliciviridae. Virus calici ini merupakan salah satu jenis cat flu yang paling sering menyerang kucing selain herpes virus (FHV).', '2021-12-26 07:30:14', '2021-12-26 07:30:14'),
(9, 'P004', 'Feline Immunodeficiency Virus', 'Feline Immunodeficiency Virus atau FIV adalah virus yang merusak dan melemahkan sistem kekebalan kucing, yang pada gilirannya menempatkan kucing pada risiko tertular infeksi lain yang berpotensi fatal.', '2021-12-26 13:39:46', '2021-12-26 13:39:46'),
(10, 'P005', 'Feline Viral Rhinopneumonitis', 'Feline herpes atau feline viral rhinopneumonitis (FVR) adalah virus yang paling sering terjadi pada kucing selama hidup mereka. Ini juga merupakan salah satu penyebab utama infeksi saluran pernapasan atas pada kucing.', '2021-12-26 13:40:49', '2021-12-26 13:40:49');

-- --------------------------------------------------------

--
-- Table structure for table `solusi`
--

CREATE TABLE `solusi` (
  `id` int(11) NOT NULL,
  `id_penyakit` int(11) DEFAULT NULL,
  `kode_solusi` varchar(255) DEFAULT NULL,
  `keterangan` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `update_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `solusi`
--

INSERT INTO `solusi` (`id`, `id_penyakit`, `kode_solusi`, `keterangan`, `created_at`, `update_at`) VALUES
(1, 1, 'S01', 'Untuk penanganan Panleukopenia sendiri dapat dilakukan dengan terapi suportif atau disebut juga dengan imun support, yaitu dengan memberi makan dan minum secara perlahan , memberikan asupan vitamin, dan obat-obatan seperti antiemik sukralfat, antidiare ka', '2022-01-02 18:58:15', '2022-01-02 19:48:01'),
(2, 6, 'S02', 'Pada beberapa kasus biasanya dokter akan membrikan vaksin untuk penyakit Feline Leukemia ini, tetapi pemulik kucing juga dapar memberikan antibiotik untuk menambah kekebalan daya tahan tubuh pada kucing.', '2022-01-02 19:01:25', '2022-01-02 19:48:17'),
(3, 8, 'S03', 'Untuk penanganan pada Feline Calici pemilik apat menjaga kucing agar tidak dehidrasi, menyediakan tempat air agar kucing dapat minum kapan saja untuk mencegah kucing mengalami dehidrasi, serta pemilik dapat melakukan vaksinasi ke klinik dokter hewan terdekat .', '2022-01-02 19:01:25', '2022-01-02 19:48:29');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `level` varchar(255) DEFAULT NULL,
  `email` varchar(225) DEFAULT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `alamat` varchar(225) DEFAULT NULL,
  `foto` varchar(150) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `remember_token` varchar(225) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `level`, `email`, `nama`, `alamat`, `foto`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(4, '2', 'noberto.1411@gmail.com', 'Noberto', 'Jl.Dr.Sutomo', 'WhatsApp Image 2021-11-30 at 12.34.09 (1).jpeg', '$2y$10$RilX5GPJAt5OhokAD02WIeUgKJOTmRJ1/YkoUS1YOcD7j63bhaAUK', NULL, '2021-12-20 23:28:17', '2021-12-20 23:28:17');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `gejala`
--
ALTER TABLE `gejala`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lokasi`
--
ALTER TABLE `lokasi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `penyakit`
--
ALTER TABLE `penyakit`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `solusi`
--
ALTER TABLE `solusi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `gejala`
--
ALTER TABLE `gejala`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `lokasi`
--
ALTER TABLE `lokasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `penyakit`
--
ALTER TABLE `penyakit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `solusi`
--
ALTER TABLE `solusi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
