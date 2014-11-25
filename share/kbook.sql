-- phpMyAdmin SQL Dump
-- version 3.4.11.1deb1
-- http://www.phpmyadmin.net
--
-- Hostiteľ: localhost
-- Vygenerované: So 13.Okt 2012, 15:18
-- Verzia serveru: 5.5.27
-- Verzia PHP: 5.4.6-1ubuntu1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Databáza: `kbook`
--

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `citatel`
--

CREATE TABLE IF NOT EXISTS `citatel` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `meno` varchar(30) COLLATE utf8_slovak_ci DEFAULT NULL,
  `priezvisko` varchar(30) COLLATE utf8_slovak_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_slovak_ci AUTO_INCREMENT=6 ;

--
-- Sťahujem dáta pre tabuľku `citatel`
--

INSERT INTO `citatel` (`id`, `meno`, `priezvisko`) VALUES
(1, 'Judita', 'Hornopotocna'),
(2, 'Vladimir', 'Chrt'),
(3, 'Jan', 'Jakbov'),
(4, 'Marek', 'Hala'),
(5, 'Lubomir', 'Tkac');

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `knihy`
--

CREATE TABLE IF NOT EXISTS `knihy` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nazov` varchar(30) COLLATE utf8_slovak_ci DEFAULT NULL,
  `zaner` varchar(30) COLLATE utf8_slovak_ci DEFAULT NULL,
  `rokVydania` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_slovak_ci AUTO_INCREMENT=8 ;

--
-- Sťahujem dáta pre tabuľku `knihy`
--

INSERT INTO `knihy` (`id`, `nazov`, `zaner`, `rokVydania`) VALUES
(1, 'Aplikacni a modelacny softver', 'Odborna literatura', 1997),
(2, 'Ako zhodit windows', 'Odborna literatura', 1999),
(3, 'Smrt na rieke nil', 'Dobrodruzna literatura', 2005),
(4, 'Lietajuce kacky', 'Odborna literatura', 1990),
(5, 'Linux - dokumentacni porjekt', 'Odborna literatura', 2007),
(6, 'Modelovanie a simulacie', 'Odborna literatura', 2001),
(7, 'Pocitacova grafika', 'Odborna literatura', 2005);

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `pozicane`
--

CREATE TABLE IF NOT EXISTS `pozicane` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `citatel` int(11) DEFAULT NULL,
  `kniha` int(11) DEFAULT NULL,
  `datumPozicania` date DEFAULT NULL,
  `datumVratenia` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_slovak_ci AUTO_INCREMENT=5 ;

--
-- Sťahujem dáta pre tabuľku `pozicane`
--

INSERT INTO `pozicane` (`id`, `citatel`, `kniha`, `datumPozicania`, `datumVratenia`) VALUES
(1, 3, 5, '2015-04-20', '2025-04-20'),
(2, 5, 1, '2015-01-20', '2007-02-20'),
(3, 4, 3, '2022-02-20', '2030-07-20'),
(4, 1, 2, '2007-05-20', '0000-00-00');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
