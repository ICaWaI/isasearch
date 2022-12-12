-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Erstellungszeit: 12. Dez 2022 um 18:10
-- Server-Version: 8.0.31
-- PHP-Version: 8.1.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `isasearch`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `bauelemente`
--

DROP TABLE IF EXISTS `bauelemente`;
CREATE TABLE IF NOT EXISTS `bauelemente` (
  `id` int NOT NULL AUTO_INCREMENT,
  `typ` varchar(5) COLLATE utf8mb4_general_ci NOT NULL,
  `bezeichnung` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `artikelnr` int NOT NULL,
  `zusatz` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `zeichnung` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE KEY `artikelnr` (`artikelnr`),
  KEY `typ` (`typ`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Daten für Tabelle `bauelemente`
--

INSERT INTO `bauelemente` (`id`, `typ`, `bezeichnung`, `artikelnr`, `zusatz`, `zeichnung`) VALUES
(1, 'KAE', 'KAE-M-R0001', 131818, 'ohne Bolzen', ''),
(2, 'KAE', 'KAE-M-R0001', 131804, 'Bolzen einpressen', ''),
(3, 'KAE', 'KAE-M-R0001-5.0', 131817, 'Endartikel mit Bolzen', ''),
(4, 'KBQ', 'KBQ-Z-R000072', 157177, 'ohne Bolzen', ''),
(5, 'KBQ', 'KBQ-Z-R000072', 157176, 'Bolzen eingepresst', ''),
(6, 'KBQ', 'KBQ-Z-L072-HM', 161566, 'in Tray einlegen ohne Bolzen', ''),
(7, 'KBQ', 'KBQ-Z-L072-10.0-WOB', 161569, 'Endartikel ohne Bolzen', ''),
(8, 'KBQ', 'KBQ-Z-R000072-10.0', 157175, 'Endartikel mit Bolzen', ''),
(9, 'KBL', 'KBL-Z-R000072', 152976, 'ohne Bolzen', ''),
(10, 'KBL', 'KBL-Z-R000072', 152988, 'Bolzen eingepresst', ''),
(11, 'KBL', 'KBL-Z-L072-HM', 161547, 'in Tray einlegen ohne Bolzen', ''),
(12, 'KBL', 'KBL-Z-L072-10.0-WOB', 161562, 'Endartikel ohne Bolzen', ''),
(13, 'KBL', 'KBL-Z-R000072-10.0', 152989, 'Endartikel mit Bolzen', ''),
(14, 'KBM', 'KBM-Z-R000072', 157159, 'ohne Bolzen', ''),
(15, 'KBM', 'KBM-Z-R000072', 157155, 'Bolzen eingepresst', '');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
