-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 16, 2023 at 11:09 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wicos`
--

-- --------------------------------------------------------

--
-- Table structure for table `produit`
--

CREATE TABLE `produit` (
  `IdPrd` int(11) NOT NULL,
  `libelle` varchar(50) NOT NULL,
  `description` varchar(50) NOT NULL,
  `picProcuct` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `produit`
--

INSERT INTO `produit` (`IdPrd`, `libelle`, `description`, `picProcuct`) VALUES
(38, 'Bose Noise Cancelling Headphones 700 – Casque Blue', 'Casques et écouteurs: 20,3 cm (H) x 16,5 cm (L) x ', '1.png'),
(39, 'Sony MDR-ZX110B Casque Pliable - Noir', 'Diaphragmes de 30 mm en forme de dôme pour un son ', '3.png'),
(40, 'Samsung Galaxy S20 FE «Fan Edition», Téléphone mob', 'Le Galaxy S20 FE 5G est un smartphone haut de gamm', '71NbGttIUQL._AC_SX522_.jpg'),
(41, 'CyberpowerPC Gamer Xtreme VR Gaming PC, Intel Core', 'System: Intel Core i5-9400F 2.9 GHz 6-Core: Intel ', '71fVpfx5oiL._AC_SX679_.jpg'),
(42, 'Skytech Shiva Gaming PC Desktop - AMD Ryzen 5 2600', '✔ AMD Ryzen 5 2600 6-Core 3.4 GHz (3.9 GHz Turbo) ', '810epc7PeYL._AC_SX679_.jpg'),
(43, 'VIBOX - VIII-56 PC Gamer SG-Series', 'Vibox VIII-56 PC Gamer SG-Series - 27\" 144Hz Écran', 'viii-56-pc-gamer-sg-series-10964948-726962_2_600x600.jpg'),
(44, 'HyperX Alloy Core RGB – Clavier Gaming Membrane (A', 'Barre lumineuse exclusive et effets lumineux RGB d', '61+IicQWwaL._AC_SX679_.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `login` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`login`, `Password`, `email`, `id`) VALUES
('admin', 'admin', 'admin@admin.com', 1),
('marwaneaitelhaj001', 'WACwac123', 'marwaneaitelhaj001@gmail.com', 22),
('aminemajidi@majidi.com', 'aminemajidi@majidi.com', 'aminemajidi@majidi.com', 23);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `produit`
--
ALTER TABLE `produit`
  ADD PRIMARY KEY (`IdPrd`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `produit`
--
ALTER TABLE `produit`
  MODIFY `IdPrd` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
