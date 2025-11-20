-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Gegenereerd op: 19 nov 2025 om 16:32
-- Serverversie: 8.2.0
-- PHP-versie: 8.2.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `computerwinkel`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `tblgames`
--

DROP TABLE IF EXISTS `tblgames`;
CREATE TABLE IF NOT EXISTS `tblgames` (
  `gameid` int NOT NULL AUTO_INCREMENT,
  `gametitel` varchar(100) NOT NULL,
  `gamegenre` varchar(100) NOT NULL,
  PRIMARY KEY (`gameid`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Gegevens worden geëxporteerd voor tabel `tblgames`
--

INSERT INTO `tblgames` (`gameid`, `gametitel`, `gamegenre`) VALUES
(1, 'Minecraft', 'Sandbox'),
(2, 'Fortnite', 'Shooter'),
(3, 'Fifa24', 'Sport'),
(4, 'League of legends', 'MOBA'),
(5, 'Valorant', 'Tactical Shooter'),
(6, 'Super Mario Odyssey', 'Platformer'),
(7, 'Roblox', 'Sandbox/creatieplatform\r\n'),
(8, 'The Sims4', 'Life Simulation'),
(9, 'Baldur\'s Gate3', 'RPG');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
