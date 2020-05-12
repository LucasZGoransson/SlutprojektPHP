-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Värd: 127.0.0.1
-- Tid vid skapande: 12 maj 2020 kl 10:47
-- Serverversion: 10.4.11-MariaDB
-- PHP-version: 7.4.3

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
  `inlaggID` int(255) UNSIGNED NOT NULL,
  `datum` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci;

--
-- Dumpning av Data i tabell `inlagg`
--

INSERT INTO `inlagg` (`anvnamn`, `rubrik`, `brodtext`, `inlaggID`, `datum`) VALUES
('kalle123', 'test', 'testest', 1, '2020-05-11 09:52:42'),
('kalle123', 'Test', 'Testest', 2, '2020-05-12 09:52:42'),
('pelle123', 'Hej', '123', 3, '2020-05-12 09:53:00');

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
('Kalle123', 'kalle.karlsson@hotmail.com', 'qwe123', 1),
('pelle123', 'pelle.pettersson@hotmail.com', 'qwe123', 1);

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

--
-- AUTO_INCREMENT för dumpade tabeller
--

--
-- AUTO_INCREMENT för tabell `inlagg`
--
ALTER TABLE `inlagg`
  MODIFY `inlaggID` int(255) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
