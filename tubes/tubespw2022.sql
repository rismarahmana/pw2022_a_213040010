-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 11, 2022 at 01:02 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tubespw2022`
--

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id_produk` varchar(5) NOT NULL,
  `id_supplier` varchar(5) NOT NULL,
  `nama_produk` varchar(30) NOT NULL,
  `merk_produk` varchar(30) NOT NULL,
  `jenis_produk` varchar(35) NOT NULL,
  `harga_produk` int(11) NOT NULL,
  `deskripsi` varchar(255) DEFAULT NULL,
  `gambar_produk` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id_produk`, `id_supplier`, `nama_produk`, `merk_produk`, `jenis_produk`, `harga_produk`, `deskripsi`, `gambar_produk`) VALUES
('ZL001', 'SP001', 'Samsung Galaxy S22 Ultra 256GB', 'Samsung', 'Handphone', 15660000, '-', 'samsungs22.jpg'),
('ZL002', 'SP002', 'Iphone 13 Pro Max', 'Apple', 'Handphone', 17480000, '-', 'ip13promax.jpg'),
('ZL003', 'SP001', 'Xiaomi Mi Pad 5 Pro 128GB puti', 'Xiaomi', 'Tablet', 8250000, '-', 'mipadpth5pro.jpg'),
('ZL004', 'SP004', 'Oppo A96 5G', 'Oppo', 'Handphone', 4300000, '-', 'oppoa96.jpg'),
('ZL005', 'SP005', 'Vivo T1 Pro 5G', 'Vivo', 'Handphone', 4500000, '-', 'vivot1.jpg'),
('ZL006', 'SP006', 'ASUS ZenBook 13 UX325E 16G', 'Asus', 'Laptop', 17999000, '-', 'auaszenbook.png'),
('ZL007', 'SP002', 'Iphone 12 64G', 'Apple', 'Handphone', 12499000, '-', 'ip12.png'),
('ZL008', 'SP001', 'Charger Galaxy Z Fold3 5G', 'Samsung', 'Accessories', 440000, '-', 'chargersamsung.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

CREATE TABLE `supplier` (
  `id_supplier` varchar(5) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `kontak` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `supplier`
--

INSERT INTO `supplier` (`id_supplier`, `nama`, `alamat`, `kontak`) VALUES
('SP001', 'Samsung Electronics', 'Indonesia', 'samsungsupport@gmail'),
('SP002', 'Apple', 'Indonesia', 'appleid@gmail.com'),
('SP003', 'Xiaomi', 'Indonesia', 'mico@gmail.com'),
('SP004', 'OPPO Electronics Corp', 'Indonesia', 'oppocorp@gmail.com'),
('SP005', 'Vivo Technology', 'Indonesia', 'vivotech@gmail.com'),
('SP006', 'Asus Computer', 'Indonesia', 'asustek@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `level` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_user`, `username`, `password`, `level`) VALUES
(1, 'shawn', 'shawn', 'Admin'),
(2, 'risma', '123', 'Admin'),
(3, 'rujsa', '1234', 'Admin'),
(4, 'rismarahmana', '3333', 'Admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`),
  ADD KEY `id_supplier` (`id_supplier`);

--
-- Indexes for table `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`id_supplier`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `produk`
--
ALTER TABLE `produk`
  ADD CONSTRAINT `produk_ibfk_1` FOREIGN KEY (`id_supplier`) REFERENCES `supplier` (`id_supplier`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
