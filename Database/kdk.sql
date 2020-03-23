-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: 23. Mar, 2020 09:45 AM
-- Tjener-versjon: 8.0.18
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kdk`
--

-- --------------------------------------------------------

--
-- Tabellstruktur for tabell `company`
--

DROP TABLE IF EXISTS `company`;
CREATE TABLE IF NOT EXISTS `company` (
  `CompanyID` int(4) NOT NULL AUTO_INCREMENT,
  `Firmanavn` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `Fornavn` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `Etternavn` varchar(191) NOT NULL,
  `Email` varchar(191) NOT NULL,
  `Pakketype` varchar(191) NOT NULL,
  `Telefonnummer` varchar(8) NOT NULL,
  `Timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`CompanyID`),
  UNIQUE KEY `CompanyID` (`CompanyID`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dataark for tabell `company`
--

INSERT INTO `company` (`CompanyID`, `Firmanavn`, `Fornavn`, `Etternavn`, `Email`, `Pakketype`, `Telefonnummer`, `Timestamp`) VALUES
(2, 'Sopra Steria', 'Hilde', 'Gunnhild', 'hilde@gmail.com', 'gold', '47863743', '2020-02-25 20:37:39'),
(4, 'Kjell Company', 'Kjell', 'Olsen', 'olsen@hotmail.com', 'stand', '32131314', '2020-02-25 21:01:34'),
(5, 'Kongsberg Gruppen', 'Tore', 'Halvorsen', 'halvor@hotmail.com', 'silver', '47853743', '2020-02-26 14:02:36');

-- --------------------------------------------------------

--
-- Tabellstruktur for tabell `stilling`
--

DROP TABLE IF EXISTS `stilling`;
CREATE TABLE IF NOT EXISTS `stilling` (
  `StillingID` int(4) NOT NULL AUTO_INCREMENT,
  `Bedriftsnavn` varchar(191) NOT NULL,
  `FulltNavn` varchar(191) NOT NULL,
  `Email` varchar(191) NOT NULL,
  `Stillingstittel` varchar(191) NOT NULL,
  `Stillingstype` varchar(191) NOT NULL,
  `Stillingstekst` text NOT NULL,
  `Søknadsfrist` date NOT NULL,
  `Approved` tinyint(1) NOT NULL,
  `URL` varchar(191) NOT NULL,
  PRIMARY KEY (`StillingID`),
  UNIQUE KEY `StillingID` (`StillingID`)
) ENGINE=MyISAM AUTO_INCREMENT=26 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dataark for tabell `stilling`
--

INSERT INTO `stilling` (`StillingID`, `Bedriftsnavn`, `FulltNavn`, `Email`, `Stillingstittel`, `Stillingstype`, `Stillingstekst`, `Søknadsfrist`, `Approved`, `URL`) VALUES
(21, 'Kongsberg Gruppen', 'Amundsen Olsen', 'amun@gmail.com', 'Teknikker', '		Fulltidsjobb   ', 'Two centuries of achievement, innovation and transformation—fuelling a journey that has seen us start as a small munitions business in Norway and emerge as a pioneering global technology provider.', '2202-02-20', 1, 'https://www.google.com/'),
(25, 'Kjell Co', 'Shalil Sheilon', 'shakattack@hotmail.com', 'IT', '					Sommerjobb     ', 'Two centuries of achievement, innovation and transformation—fuelling a journey that has seen us start as a small munitions business in Norway and emerge as a pioneering global technology provider.', '2021-03-23', 0, 'https://www.w3schools.com/tags/tryit.asp?filename=tryhtml_hr_size'),
(22, 'Sopra Steria', 'Heidi Gundersen', 'hgun@hotmail.com', 'Front-end Utvikler', '			Deltidsjobb      ', 'Two centuries of achievement, innovation and transformation—fuelling a journey that has seen us start as a small munitions business in Norway and emerge as a pioneering global technology provider.', '2018-07-22', 0, '');

-- --------------------------------------------------------

--
-- Tabellstruktur for tabell `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `UserID` int(11) NOT NULL AUTO_INCREMENT,
  `FirstName` varchar(191) NOT NULL,
  `LastName` varchar(191) NOT NULL,
  `Email` varchar(191) NOT NULL,
  `studyLine` varchar(191) NOT NULL,
  `Adress` varchar(191) NOT NULL,
  `Password` varchar(191) NOT NULL,
  PRIMARY KEY (`UserID`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dataark for tabell `user`
--

INSERT INTO `user` (`UserID`, `FirstName`, `LastName`, `Email`, `studyLine`, `Adress`, `Password`) VALUES
(1, 'Salar', 'Adel', 'salarx2@hotmail.com', 'Dataingeniør', 'Erik Brofoss Vei 32', 'ddd');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
