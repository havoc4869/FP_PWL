-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 26, 2017 at 07:10 PM
-- Server version: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `udang`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `email` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL,
  `no hp` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `bank`
--

CREATE TABLE IF NOT EXISTS `bank` (
  `no_rek` varchar(100) NOT NULL,
  `nama_bank` varchar(100) NOT NULL,
  `nama_pemilik` varchar(100) NOT NULL,
  `no_hp` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bank`
--

INSERT INTO `bank` (`no_rek`, `nama_bank`, `nama_pemilik`, `no_hp`) VALUES
('34367785662134', 'BNI', 'Mozaik Ramadhan', '089423434234'),
('12345609887', 'BRI', 'Ahmad Jalaluddin', '085756636463'),
('2345609882', 'MANDIRI', 'Amar Sheriffudin', '081234567890');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE IF NOT EXISTS `customer` (
  `id_customer` int(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(30) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `no_hp` varchar(12) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id_customer`, `email`, `password`, `nama`, `alamat`, `no_hp`, `status`) VALUES
(4, 'laorensiusangelikus97@gmail.com', 'loren', 'laorensius angelikus', 'jalan tawes', '082242568092', 'personal'),
(5, 'amar@gmail.com', 'amar', 'amar', 'jalan sukasuka', '09888', 'perusahaan');

-- --------------------------------------------------------

--
-- Table structure for table `komentar`
--

CREATE TABLE IF NOT EXISTS `komentar` (
  `No` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `komentar` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `komentar`
--

INSERT INTO `komentar` (`No`, `nama`, `email`, `komentar`) VALUES
(4, 'Ahmad Jalaluddin', 'ahmad.9072@students.amikom.ac.id', 'Ordernya belum jadi mas . . .tolong diselesaikan'),
(5, 'Amar Sherifuddin', 'amar.9059@students.amikom.ac.id', 'Jangan lupa dropdownnya diselesaikan biar selesai . . . Masih banyak yang harus dirubah'),
(6, 'Abiyyu', 'Abiyyu@Abiyyu.com', 'Nice gan'),
(7, 'laorensius angelikus', 'laorensiusangelikus97@gmail.com', 'Berapa Harga Web Ini mas ? bsia ditawar tidak ?'),
(8, 'laorensius angelikus', 'wasd', 'dae');

-- --------------------------------------------------------

--
-- Table structure for table `orderpesanan`
--

CREATE TABLE IF NOT EXISTS `orderpesanan` (
  `kode_produk` int(5) NOT NULL,
  `id_customer` int(255) NOT NULL,
  `jumlah` varchar(50) NOT NULL,
  `harga_bayar` double NOT NULL,
  `tgl_bayar` datetime NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orderpesanan`
--

INSERT INTO `orderpesanan` (`kode_produk`, `id_customer`, `jumlah`, `harga_bayar`, `tgl_bayar`, `status`) VALUES
(1, 5, '3', 150000, '2017-12-26 20:18:45', 'belum'),
(3, 5, '8', 36000, '2017-12-27 01:01:14', 'belum');

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE IF NOT EXISTS `produk` (
  `kode_produk` int(5) NOT NULL,
  `nama_produk` varchar(10) NOT NULL,
  `harga_produk` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`kode_produk`, `nama_produk`, `harga_produk`) VALUES
(1, 'udang', 150000),
(2, 'nila', 4500),
(3, 'kakap', 36000),
(4, 'bandeng', 27000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `bank`
--
ALTER TABLE `bank`
  ADD PRIMARY KEY (`nama_bank`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id_customer`);

--
-- Indexes for table `komentar`
--
ALTER TABLE `komentar`
  ADD PRIMARY KEY (`No`);

--
-- Indexes for table `orderpesanan`
--
ALTER TABLE `orderpesanan`
  ADD KEY `kode_produk` (`kode_produk`),
  ADD KEY `id_customer` (`id_customer`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`kode_produk`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id_customer` int(255) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `komentar`
--
ALTER TABLE `komentar`
  MODIFY `No` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `orderpesanan`
--
ALTER TABLE `orderpesanan`
  ADD CONSTRAINT `fk_id_cust` FOREIGN KEY (`id_customer`) REFERENCES `customer` (`id_customer`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_kode` FOREIGN KEY (`kode_produk`) REFERENCES `produk` (`kode_produk`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
