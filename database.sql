-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Vært: localhost:3306
-- Genereringstid: 03. 01 2018 kl. 02:56:09
-- Serverversion: 5.6.34-log
-- PHP-version: 7.1.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tgb`
--

-- --------------------------------------------------------

--
-- Struktur-dump for tabellen `medlemmer`
--

CREATE TABLE `medlemmer` (
  `id` int(9) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `brugernavn` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Data dump for tabellen `medlemmer`
--

INSERT INTO `medlemmer` (`id`, `name`, `email`, `brugernavn`, `password`) VALUES
(1, 'hans', 'hehe@hotmail.com', 'nocker', 'fd2cc6c54239c40495a0d3a93b6380eb'),
(3, 'lasse', 'hehe@hotmail.com', 'nocker', '81dc9bdb52d04dc20036dbd8313ed055'),
(4, 'mikkel', 'ha@gmail.com', 'miks', '81dc9bdb52d04dc20036dbd8313ed055'),
(5, 'chris', 'chris@gmail.com', 'chris', '81dc9bdb52d04dc20036dbd8313ed055'),
(6, 'test med mikkel', 'tes@gmail.com', 'asdasd', '81dc9bdb52d04dc20036dbd8313ed055');

-- --------------------------------------------------------

--
-- Struktur-dump for tabellen `opslag`
--

CREATE TABLE `opslag` (
  `id` int(11) NOT NULL,
  `overskift` varchar(100) NOT NULL,
  `tekst` varchar(255) NOT NULL,
  `dato` varchar(15) NOT NULL,
  `medlemmer_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Data dump for tabellen `opslag`
--

INSERT INTO `opslag` (`id`, `overskift`, `tekst`, `dato`, `medlemmer_id`) VALUES
(7, 'Cykelbud', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc in ornare mi, vel tristique sapien. Nullam egestas urna nulla, eget posuere ligula sodales quis. Integer elementum molestie odio. In ipsum purus, ', '2017-12-21', 4),
(29, 'EDB Priser', 'http://www.edbpriser.dk/\r\n\r\nHvis nogle mangler.', '03-01-2018', 4);

-- --------------------------------------------------------

--
-- Struktur-dump for tabellen `tilmelde`
--

CREATE TABLE `tilmelde` (
  `id` int(11) NOT NULL,
  `tilmeldt` varchar(255) NOT NULL,
  `guest` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Data dump for tabellen `tilmelde`
--

INSERT INTO `tilmelde` (`id`, `tilmeldt`, `guest`) VALUES
(1, 'nocker', ''),
(2, 'nocker', ''),
(3, 'nocker', ''),
(4, 'lasse', 'gÃ¦st'),
(5, 'hans', 'ja'),
(6, 'han', ''),
(7, 'jens', 'nej'),
(8, 'kartsen', '');

--
-- Begrænsninger for dumpede tabeller
--

--
-- Indeks for tabel `medlemmer`
--
ALTER TABLE `medlemmer`
  ADD PRIMARY KEY (`id`);

--
-- Indeks for tabel `opslag`
--
ALTER TABLE `opslag`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_opslag_1` (`medlemmer_id`);

--
-- Indeks for tabel `tilmelde`
--
ALTER TABLE `tilmelde`
  ADD PRIMARY KEY (`id`);

--
-- Brug ikke AUTO_INCREMENT for slettede tabeller
--

--
-- Tilføj AUTO_INCREMENT i tabel `medlemmer`
--
ALTER TABLE `medlemmer`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- Tilføj AUTO_INCREMENT i tabel `opslag`
--
ALTER TABLE `opslag`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
--
-- Tilføj AUTO_INCREMENT i tabel `tilmelde`
--
ALTER TABLE `tilmelde`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- Begrænsninger for dumpede tabeller
--

--
-- Begrænsninger for tabel `opslag`
--
ALTER TABLE `opslag`
  ADD CONSTRAINT `FK_opslag_1` FOREIGN KEY (`medlemmer_id`) REFERENCES `medlemmer` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
