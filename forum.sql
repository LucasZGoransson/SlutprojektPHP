-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Värd: 127.0.0.1
-- Tid vid skapande: 17 mars 2020 kl 10:00
-- Serverversion: 10.4.6-MariaDB
-- PHP-version: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Databas: `forum`
--

-- --------------------------------------------------------

--
-- Tabellstruktur `inlagg`
--

CREATE TABLE `inlagg` (
  `anvnamn` varchar(50) COLLATE utf8_swedish_ci NOT NULL,
  `rubrik` varchar(50) COLLATE utf8_swedish_ci NOT NULL,
  `brodtext` varchar(1000) COLLATE utf8_swedish_ci NOT NULL,
  `inlaggID` int(255) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci;

-- --------------------------------------------------------

--
-- Tabellstruktur `users`
--

CREATE TABLE `users` (
  `anvnamn` varchar(50) COLLATE utf8_swedish_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_swedish_ci NOT NULL,
  `password` varchar(50) COLLATE utf8_swedish_ci NOT NULL,
  `status` tinyint(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci;

--
-- Dumpning av Data i tabell `users`
--

INSERT INTO `users` (`anvnamn`, `email`, `password`, `status`) VALUES
('Kalle123', 'kalle.karlsson@hotmail.com', 'qwe123', 1);

--
-- Index för dumpade tabeller
--

--
-- Index för tabell `inlagg`
--
ALTER TABLE `inlagg`
  ADD PRIMARY KEY (`inlaggID`),
  ADD KEY `anvnamn` (`anvnamn`);

--
-- Index för tabell `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`anvnamn`),
  ADD UNIQUE KEY `email` (`email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
