-- phpMyAdmin SQL Dump
-- version 4.0.4.2
-- http://www.phpmyadmin.net
--
-- Machine: localhost
-- Genereertijd: 03 jun 2024 om 18:45
-- Serverversie: 5.6.13
-- PHP-versie: 5.4.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Databank: `muhajeer`
--
CREATE DATABASE IF NOT EXISTS `muhajeer` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `muhajeer`;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `tblschoenen`
--

CREATE TABLE IF NOT EXISTS `tblschoenen` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `naam` varchar(50) NOT NULL,
  `merk` varchar(50) NOT NULL,
  `omschrijving` longtext NOT NULL,
  `prijs` float NOT NULL,
  `kleur` varchar(20) NOT NULL,
  `afbeelding` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Gegevens worden uitgevoerd voor tabel `tblschoenen`
--

INSERT INTO `tblschoenen` (`id`, `naam`, `merk`, `omschrijving`, `prijs`, `kleur`, `afbeelding`) VALUES
(1, 'Nike', 'nike', 'Schoen', 99.99, 'zwart', 'schoenA.jpg'),
(2, 'Under armour', 'Under armour', 'Schoen', 169.99, 'zwart', 'schoenB.jpg'),
(3, 'Kaytan', 'Kaytan', 'Schoen', 79.99, 'wit', 'schoenC2.jpg'),
(4, 'Nike', 'Nike', 'schoen', 119.99, 'zwart/grijs', 'schoenD.jpg'),
(5, 'Reebok', 'Reebok', 'schoen', 49.99, 'zwart', 'schoenE.jpg'),
(6, 'Nike', 'Nike', 'schoen', 49.99, 'zwart/wit', 'schoenF.jpg'),
(7, 'Skechers', 'Skechers', 'schoen', 129.99, 'zwart', 'schoenG.jpg'),
(8, 'Under armour', 'Under armour', 'schoen', 129.99, 'zwart/ licht blauw', 'schoenH.jpg'),
(9, 'Adidas', 'Adidas', 'schoen', 149.99, 'zwart/ wit', 'schoenI.jpg');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `tblwinkelmand`
--

CREATE TABLE IF NOT EXISTS `tblwinkelmand` (
  `ID` int(11) NOT NULL,
  `klantID` int(11) NOT NULL,
  `productID` int(11) NOT NULL,
  `aantal` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden uitgevoerd voor tabel `tblwinkelmand`
--

INSERT INTO `tblwinkelmand` (`ID`, `klantID`, `productID`, `aantal`) VALUES
(0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `gebruikersnaam` varchar(20) NOT NULL,
  `paswoord` varchar(30) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Gegevens worden uitgevoerd voor tabel `user`
--

INSERT INTO `user` (`ID`, `gebruikersnaam`, `paswoord`) VALUES
(1, 'admin', 'admin'),
(5, '', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
