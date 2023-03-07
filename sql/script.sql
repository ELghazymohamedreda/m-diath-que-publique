-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 01, 2023 at 05:38 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `biblio`
--

-- --------------------------------------------------------

--
-- Table structure for table `adherent`
--

CREATE TABLE `Adherent` (
  `ID_adherent` int(6) NOT NULL,
  `nom` varchar(20) NOT NULL,
  `prénom` varchar(20) NOT NULL,
  `telephone` varchar(20) NOT NULL,
  `adresse_email` varchar(200) NOT NULL,
  `CNI` varchar(250) NOT NULL,
  `username` int(9) NOT NULL,
  `mtp` varchar(8) NOT NULL,
  `pénalité` date NOT NULL,
  `date_inscription` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `gerente`
--

CREATE TABLE `Gerant` (
  `ID_gerant` int(11) NOT NULL,
  `nom` varchar(250) NOT NULL,
  `prénom` varchar(250) NOT NULL,
  `username` varchar(250) NOT NULL,
  `mtp` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `gerente`
--

INSERT INTO `Gerant` (`ID_gerant`, `nom`, `prénom`, `username`, `mtp`) VALUES
(1, 'Soli','Code','SOLICODE1', 'AAAA'),
(2, 'Soli','Code','SOLICODE2', 'ZZZZ'),
(3, 'Soli','Code','SOLICODE3', 'EEEE');

-- --------------------------------------------------------

--
-- Table structure for table `ouvrages`
--

CREATE TABLE `Ouvrage` (
    `ID_ouvrage` int(11) NOT NULL,
    `ID_gerant` int(11) NOT NULL,
    `titre` varchar(250) NOT NULL,
    `nom_auteur` varchar(50) NOT NULL,
    `type` varchar(250) NOT NULL,
    `date_achat` date NOT NULL,
    `etat` varchar(30) NOT NULL,
    `nombre_pages` int(6) NOT NULL,
    `date_édition` date NOT NULL,
    `url_image` varchar(250) NOT NULL,
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `reservation`
--

CREATE TABLE `Reservation` (
    `ID_reservation` int(11) NOT NULL,
    `date_reservation` date NOT NULL,
    `ID_adherent` int(11) NOT NULL,
    `ID_ouvrage` int(11) NOT NULL,
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adherent`
--
ALTER TABLE `Adherent`
  ADD PRIMARY KEY (`ID_adherent`),
  ADD KEY `ID_adherent` (`ID_adherent`),
  ADD KEY `ID_adherent_2` (`ID_adherent`);

--
-- Indexes for table `gerente`
--
ALTER TABLE `Gerant`
  ADD PRIMARY KEY (`ID_gerant`),
  ADD KEY `ID_gerant` (`ID_gerant`);

--
-- Indexes for table `ouvrages`
--
ALTER TABLE `Ouvrage`
  ADD PRIMARY KEY (`ID_ouvrage`),
  ADD KEY `ID_gerant` (`ID_gerant`);

--
-- Indexes for table `reservation`
--
ALTER TABLE `Reservation`
  ADD PRIMARY KEY (`ID_reservation`),
  ADD KEY `ID_adherent` (`ID_adherent`),
  ADD KEY `ID_ouvrage` (`ID_ouvrage`),
  ADD KEY `ID_reservation` (`ID_reservation`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `reservation`
--
ALTER TABLE `Reservation`
  MODIFY `ID_reservation` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `ouvrages`
--
ALTER TABLE `Ouvrage`
  ADD CONSTRAINT `ouvrages_ibfk_1` FOREIGN KEY (`ID_gerant`) REFERENCES `gerant` (`ID_gerant`);

--
-- Constraints for table `reservation`
--
ALTER TABLE `Reservation`
  ADD CONSTRAINT `reservation_ibfk_1` FOREIGN KEY (`ID_adherent`) REFERENCES `Adherent` (`ID_adherent`),
  ADD CONSTRAINT `reservation_ibfk_2` FOREIGN KEY (`ID_ouvrage`) REFERENCES `Ouvrage` (`ID_ouvrage`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
