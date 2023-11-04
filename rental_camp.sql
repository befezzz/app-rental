-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 01, 2020 at 05:39 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.1.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rental_camp`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `nama_admin` varchar(128) NOT NULL,
  `username` varchar(128) NOT NULL,
  `password` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `camp`
--

CREATE TABLE `camp` (
  `id_barang` int(11) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `kode_type` varchar(128) NOT NULL,
  `merk` varchar(128) NOT NULL,
  `warna` varchar(20) NOT NULL,
  `keterangan` varchar(128) NOT NULL,
  `status` varchar(50) NOT NULL,
  `harga` varchar(128) NOT NULL,
  `denda` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `camp`
--

INSERT INTO `camp` (`id_barang`, `gambar`, `kode_type`, `merk`, `warna`, `keterangan`, `status`, `harga`, `denda`) VALUES
(7, 'consina_alpine.jpg', 'TC', 'Consina alphine 55L', 'merah', 'Kapasitas 55L', '1', '17000', '17000'),
(8, 'Great_Outdoor_Camp_4.jpg', 'TND', 'Great Outdoor Camp', 'biru hijau', 'Kapasitas 3 orang', '1', '30000', '30000'),
(9, 'flysheet.jpg', 'FLS', 'eiger', 'dark blue', 'gatau', '1', '27000', '8000'),
(11, 'consina_alpinist.jpg', 'TC', 'Consina alpinist', 'merah abu-abu', 'gatau', '0', '17000', '17000'),
(12, 'consina_bearing.jpeg', 'TC', 'Consina bearing', 'merah', 'gatau', '1', '17000', '17000'),
(14, 'consina_expedition.jpg', 'TC', 'Consina expedition', 'biru', 'gatau', '1', '17000', '17000'),
(16, 'consina_tarebi.jpg', 'TC', 'Consina tarebi', 'hijau army', 'gatau', '1', '17000', '17000'),
(17, 'Great_Outdoor_Monodome_2.jpg', 'TND', 'Great Outdoor Monodome', 'sky blue', 'Kapasitas 3 orang', '1', '27000', '17000'),
(18, 'rei_eliot.jpg', 'TND', 'rei eliot', 'merah kuning', 'Kapasitas 3 orang', '1', '27000', '8000'),
(19, 'tenda_bestway_montana.jpg', 'TND', 'bestway montana', 'hijau putih', 'Kapasitas 3 orang', '1', '27000', '8000'),
(21, 'matras_hitam2.jpg', 'MT', 'eiger', 'hitam', 'Kapasitas 3 orang', '1', '17000', '8000'),
(22, 'kompor_kembang.jpg', 'KP', 'eiger', 'merah', 'gatau', '1', '27000', '8000'),
(24, 'sb1.jpg', 'SB', 'the north face', 'orange', 'Kapasitas 55L', '1', '27000', '17000');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id_customer` int(11) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `username` varchar(128) NOT NULL,
  `alamat` varchar(128) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `no_telepon` varchar(20) NOT NULL,
  `no_ktp` varchar(50) NOT NULL,
  `password` varchar(128) NOT NULL,
  `role_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id_customer`, `nama`, `username`, `alamat`, `gender`, `no_telepon`, `no_ktp`, `password`, `role_id`) VALUES
(22, 'zahroh', 'zahroh@gmail.com', 'Kesesi', 'Perempuan', '081234567896', '123345678i', '78c595f082ac974abeb797a381552d0a', 2),
(23, 'nabila', 'nabila@gmail.com', 'ulujami', 'Perempuan', '082345763485', '2408', '6341fd65fc1d7b26ddbcb4bee3a14ffa', 2),
(24, 'maula', 'maula@gmail.com', 'pekalongan', 'Perempuan', '085640475705', '123', 'a906449d5769fa7361d7ecc6aa3f6d28', 2),
(26, 'admin', 'admin@gmail.com', 'pekalongan', 'perempuan', '26227383', '123456', '21232f297a57a5a743894a0e4a801fc3', 1);

-- --------------------------------------------------------

--
-- Table structure for table `rental`
--

CREATE TABLE `rental` (
  `id_rental` int(11) NOT NULL,
  `id_customer` int(11) NOT NULL,
  `tanggal_rental` date NOT NULL,
  `tanggal_kembali` date NOT NULL,
  `tanggal_pengembalian` date NOT NULL,
  `status_rental` varchar(50) NOT NULL,
  `status_pengembalian` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id_rental` int(11) NOT NULL,
  `id_customer` int(11) NOT NULL,
  `id_barang` int(11) NOT NULL,
  `tanggal_rental` date NOT NULL,
  `tanggal_kembali` date NOT NULL,
  `harga` varchar(128) NOT NULL,
  `denda` varchar(128) NOT NULL,
  `total_denda` varchar(128) NOT NULL,
  `tanggal_pengembalian` date NOT NULL,
  `status_pengembalian` varchar(50) NOT NULL,
  `status_rental` varchar(50) NOT NULL,
  `bukti_pembayaran` varchar(128) NOT NULL,
  `status_pembayaran` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id_rental`, `id_customer`, `id_barang`, `tanggal_rental`, `tanggal_kembali`, `harga`, `denda`, `total_denda`, `tanggal_pengembalian`, `status_pengembalian`, `status_rental`, `bukti_pembayaran`, `status_pembayaran`) VALUES
(1, 2, 3, '2020-08-04', '2020-08-05', '70000', '10000', '20000', '2020-08-07', 'Kembali', 'Selesai', 'Ayam12.pdf', 1),
(2, 2, 2, '2020-08-05', '2020-08-06', '40000', '10000', '10000', '2020-08-07', 'Kembali', 'Selesai', 'Ayam11.pdf', 1),
(3, 2, 4, '2020-08-05', '2020-08-06', '60000', '10000', '10000', '2020-08-07', 'Kembali', 'Selesai', 'DSCN9048 (2).JPG', 1),
(8, 5, 5, '2020-08-10', '2020-08-12', '27000', '8000', '0', '0000-00-00', 'belum kembali', 'belum selesai', '', 0),
(14, 11, 7, '2020-08-24', '2020-08-25', '17000', '17000', '0', '0000-00-00', 'belum kembali', 'belum selesai', '', 0),
(15, 11, 11, '2020-08-24', '2020-08-25', '17000', '17000', '0', '0000-00-00', 'belum kembali', 'belum selesai', 'Ayam14.pdf', 0),
(17, 22, 11, '2020-08-25', '2020-08-26', '17000', '17000', '0', '0000-00-00', 'belum kembali', 'belum selesai', 'Ayam15.pdf', 0);

-- --------------------------------------------------------

--
-- Table structure for table `type`
--

CREATE TABLE `type` (
  `id_type` int(11) NOT NULL,
  `kode_type` varchar(128) NOT NULL,
  `nama_type` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `type`
--

INSERT INTO `type` (`id_type`, `kode_type`, `nama_type`) VALUES
(1, 'TC', 'Tas Carier'),
(3, 'TND', 'Tenda'),
(5, 'FLS', 'Flysheet'),
(6, 'MT', 'Matras'),
(7, 'KP', 'Kompor'),
(8, 'SB', 'Sleeping Bag');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `camp`
--
ALTER TABLE `camp`
  ADD PRIMARY KEY (`id_barang`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id_customer`);

--
-- Indexes for table `rental`
--
ALTER TABLE `rental`
  ADD PRIMARY KEY (`id_rental`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_rental`);

--
-- Indexes for table `type`
--
ALTER TABLE `type`
  ADD PRIMARY KEY (`id_type`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `camp`
--
ALTER TABLE `camp`
  MODIFY `id_barang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id_customer` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `rental`
--
ALTER TABLE `rental`
  MODIFY `id_rental` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_rental` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `type`
--
ALTER TABLE `type`
  MODIFY `id_type` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
