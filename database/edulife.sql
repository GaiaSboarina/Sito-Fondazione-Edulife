-- phpMyAdmin SQL Dump
-- version 4.1.7
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 29, 2019 alle 17:32
-- Versione del server: 5.6.33-log
-- PHP Version: 5.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `my_fondazioneedulife`
--

-- --------------------------------------------------------

--
-- Struttura della tabella `evento`
--

CREATE Database if not exists `edulife`;

use `edulife`;

CREATE TABLE IF NOT EXISTS `evento` (
  `id` int(11) NOT NULL,
  `titolo` varchar(250) NOT NULL,
  `contenuto` mediumtext NOT NULL,
  `data_evento` date NOT NULL,
  `data` date NOT NULL,
  `id_img` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_img` (`id_img`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struttura della tabella `gxg`
--

CREATE TABLE IF NOT EXISTS `gxg` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `link` varchar(250) NOT NULL,
  `titolo` varchar(250) NOT NULL,
  `contenuto` mediumtext NOT NULL,
  `img_name` varchar(250) NOT NULL,
  `data` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struttura della tabella `img`
--

CREATE TABLE IF NOT EXISTS `img` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struttura della tabella `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `id` int(11) NOT NULL,
  `titolo` varchar(250) NOT NULL,
  `contenuto` mediumtext NOT NULL,
  `data` date NOT NULL,
  `id_img` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_img` (`id_img`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struttura della tabella `progetto`
--

CREATE TABLE IF NOT EXISTS `progetto` (
  `id` int(11) NOT NULL,
  `titolo` varchar(250) NOT NULL,
  `contenuto` mediumtext NOT NULL,
  `id_img` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_img` (`id_img`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struttura della tabella `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `username` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dump dei dati per la tabella `user`
--

INSERT INTO `user` (`username`, `password`) VALUES
('admin', '35fd1b68a7fa7ba07c9fde405fcc802c');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
