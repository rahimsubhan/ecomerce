-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 21, 2023 at 07:49 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecommerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `ID` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `userpassword` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`ID`, `username`, `userpassword`) VALUES
(1, 'admin', 'admin123');

-- --------------------------------------------------------

--
-- Table structure for table `tblproduct`
--

CREATE TABLE `tblproduct` (
  `Id` int(11) NOT NULL,
  `PName` varchar(100) NOT NULL,
  `PPrice` varchar(100) NOT NULL,
  `PImage` varchar(250) NOT NULL,
  `PCategory` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblproduct`
--

INSERT INTO `tblproduct` (`Id`, `PName`, `PPrice`, `PImage`, `PCategory`) VALUES
(15, 'DELL LAPTOPS', '250000', 'uploadimage/tech4.jpg', 'Laptop'),
(17, 'LAPTOP BAG FOR MEN ', '3500', 'uploadimage/bag3.jpg', 'Bag'),
(20, 'Huawei Nova 8', '60000', 'uploadimage/Huawei-P60-300x300.jpg', 'Mobile'),
(21, 'Samsang S23', '70000', 'uploadimage/samsangs23.jfif', 'Mobile'),
(22, 'Iphone  12', '250000', 'uploadimage/APPLE 12.jfif', 'Mobile'),
(23, 'New Style Laptop Bag ', '62000', 'uploadimage/bag1.jpg', 'Bag'),
(24, 'Laptop Bag For Women ', '5300', 'uploadimage/bag3.jpg', 'Home'),
(25, 'Huawei Nova 8', '75000', 'uploadimage/Huawei-P60-300x300.jpg', 'Home'),
(30, 'Black Bag ', '4500', 'uploadimage/bag1.jpg', 'Home'),
(31, 'MEN WHITE JACKET ', '7300', 'uploadimage/MEN JACKET.jpg', 'Home'),
(33, 'MEN BLACK WINTER JACKET ', '6300', 'uploadimage/MEN WINTER JACKET.jpg', 'Home'),
(34, 'Coat Men Jacket ', '6250', 'uploadimage/COAT MEN JACKET.jpg', 'Home'),
(36, 'GRAY LAPTOP BAG ', '6420', 'uploadimage/bag2.jpg', 'Bag'),
(37, 'APPLE LAPTOP', '320000', 'uploadimage/LAPTOP4.jpg', 'Laptop'),
(40, 'HP LAPTOP', '150000', 'uploadimage/hp up laptop.jfif', 'Laptop');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `Id` int(11) NOT NULL,
  `username` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `number` varchar(200) NOT NULL,
  `password` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`Id`, `username`, `email`, `number`, `password`) VALUES
(1, 'SANAIQBAL99', 'sanaiq@gmail.com', '09965453211', '1234'),
(2, 'Yumnakhalid90', 'yumnakhalid90@gmail.com', '4621738198', '123'),
(5, 'Rida', 'rida@gmail.com', '1268909121', '890'),
(6, 'Alinakhan8', 'alina@gmail.com', '62376199091', '1234'),
(7, 'Kinzakhan99', 'kinzakhan@gmail.com', '926790656711', '123'),
(8, 'Areebasaif02', 'areebasaif34@gmail.com', '92637890912', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tblproduct`
--
ALTER TABLE `tblproduct`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`Id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tblproduct`
--
ALTER TABLE `tblproduct`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
