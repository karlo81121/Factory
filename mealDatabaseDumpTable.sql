-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 24, 2021 at 12:24 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jela`
--

-- --------------------------------------------------------

--
-- Table structure for table `jelo`
--

CREATE TABLE `jelo` (
  `ID` int(11) NOT NULL,
  `Naziv` varchar(100) NOT NULL,
  `Kategorija` varchar(50) NOT NULL,
  `Broj_sastojaka` int(11) NOT NULL,
  `Sastojci` varchar(500) NOT NULL,
  `Opis` varchar(500) NOT NULL,
  `Tagovi` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `jelo`
--

INSERT INTO `jelo` (`ID`, `Naziv`, `Kategorija`, `Broj_sastojaka`, `Sastojci`, `Opis`, `Tagovi`) VALUES
(12, 'Piletina u umaku od gljiva', 'Glavno jelo', 6, 'Piletina, Gljive, Sol, Biber, Crvena paprika, Vrhnje za kuhanje', 'Ovo je opis za piletinu u umaku od gljiva. Najbolje je koristiti svježe gljive. Prije pripreme jela, piletinu je potrebno začiniti.', 'piletina, gljive, paprika, vrhnje, sol, biber'),
(13, 'Grah', 'Glavno jelo', 4, 'Grah, Luk, Slanina, Sol, Biber, Bosiljak, Mrkva', 'Ovo je opis za grah. Prije upotrebe potrebno da je držati u vodi najmanje 24 sata.', 'grah, mrkva, luk, bosiljak'),
(14, 'Sladoled od banane i nutelle', 'Desert', 5, 'Mlijeko, Banana, Nutella, Jaja, Šećer', 'Ovo je opis za pripremu sladoleda. Potrebno je koristiti svježe banane te original nutellu.', 'sladoled, banana, nutella'),
(15, 'Krumpir salata', 'Prilog', 4, 'Krumpir, Luk, Ulje, Alkoholni ocat', 'Ovo je opis za pripremu krumpir salate.', 'krumpir'),
(16, 'Palačinke', 'Desert', 5, 'Voda, Jaje, Ulje, Mlijeko, Brašno', 'Ovo je opis za pripremu palačinki. Nije potrebno napraviti previše gustu smjesu. ', 'palacinke, slatko, fino'),
(17, 'Makaroni sa sirom', 'Glavno jelo', 5, 'Makaroni, Sir, Voda, Ulje, Sol', 'Ovo je opis kako pripremiti makarone sa sirom. ', 'makaroni, sir, fino, slano'),
(18, 'Makaroni s pršutom', 'Glavno jelo', 4, 'Makaroni, Pršut, Voda, Ulje', 'Ovo je opis za pripremu makarona s pršutom.', 'makaroni, pršut'),
(19, 'Makaroni sa šparogama', 'Glavno jelo', 4, 'Voda, Makaroni, Šparoge, Ulje', 'Ovo je opis za pripremu makarona sa šparogama.', 'makaroni, šparoge'),
(20, 'Makaroni s tikvicama', 'Glavno jelo', 4, 'Makaroni, Tikvice, Ulje, Voda', 'Ovo je opis za pripremu makarona s tikvicama.', 'makaroni, tikvice'),
(21, 'Makaroni s piletinom', 'Glavno jelo', 4, 'Makaroni, Piletina, Voda, Ulje', 'Ovo je opis za pripremu makarona s piletinom.\r\n', 'makaroni, piletina'),
(22, 'Makaroni sa svinjetinom', 'Nema', 4, 'Makaroni, Svinjetina, Voda, Ulje', 'Ovo je opis za pripremu makarona sa svinjetinom.', 'makaroni, svinjetina'),
(27, 'Punjena paprika', 'Glavno jelo', 5, 'Svinjetina, Paprika, Crvena paprika, Ulje, Biber', 'Ovo je opis za pripremu punjene paprike.', 'svinjetina, paprika, punjena');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jelo`
--
ALTER TABLE `jelo`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jelo`
--
ALTER TABLE `jelo`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
