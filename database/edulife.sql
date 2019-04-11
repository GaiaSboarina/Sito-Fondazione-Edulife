-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Creato il: Apr 11, 2019 alle 11:34
-- Versione del server: 10.1.34-MariaDB
-- Versione PHP: 7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `edulife`
--

-- --------------------------------------------------------

--
-- Struttura della tabella `evento`
--

CREATE TABLE `evento` (
  `id` int(11) NOT NULL,
  `titolo` varchar(250) NOT NULL,
  `contenuto` mediumtext NOT NULL,
  `data_evento` date NOT NULL,
  `data` date NOT NULL,
  `id_img` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struttura della tabella `file`
--

CREATE TABLE `file` (
  `id` int(11) NOT NULL,
  `nome` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dump dei dati per la tabella `file`
--

INSERT INTO `file` (`id`, `nome`) VALUES
(8, 'BILANCIO SOCIALE FONDAZIOEN EDULIFE 2017.pdf');

-- --------------------------------------------------------

--
-- Struttura della tabella `gxg`
--

CREATE TABLE `gxg` (
  `id` int(11) NOT NULL,
  `link` varchar(250) NOT NULL,
  `titolo` varchar(250) NOT NULL,
  `contenuto` mediumtext NOT NULL,
  `data` date NOT NULL,
  `id_img` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dump dei dati per la tabella `gxg`
--

INSERT INTO `gxg` (`id`, `link`, `titolo`, `contenuto`, `data`, `id_img`) VALUES
(1, 'fbS2TLMErlM', 'Zeni', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec iaculis est ligula, eget sollicitudin massa tempus eu. Nulla faucibus tortor non magna molestie, quis imperdiet ante laoreet. Praesent sagittis pulvinar ex consequat venenatis. Mauris varius finibus purus. Fusce et mollis ipsum. Duis tincidunt aliquam odio eu interdum. Vestibulum ut efficitur metus. Phasellus vel urna cursus, mollis augue ac, viverra mi. Ut eu diam felis. In et felis quis velit posuere fringilla. Mauris scelerisque ullamcorper egestas. Aenean ut rutrum lectus, a blandit odio.\r\n\r\nMaecenas iaculis ornare diam, vitae pellentesque sem condimentum vel. Donec mollis velit magna, sit amet accumsan nisl finibus sed. Sed eu pellentesque magna. Nullam venenatis vitae justo eu auctor. Proin vel mi turpis. Mauris cursus neque vel ex congue faucibus. Pellentesque hendrerit finibus ligula, vel auctor purus faucibus sit amet. Aenean tristique orci vitae elit egestas ultrices. Proin eu sapien neque.', '2019-04-01', 1),
(3, '5--lgXlHI98', 'Mirandola', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec iaculis est ligula, eget sollicitudin massa tempus eu. Nulla faucibus tortor non magna molestie, quis imperdiet ante laoreet. Praesent sagittis pulvinar ex consequat venenatis. Mauris varius finibus purus. Fusce et mollis ipsum. Duis tincidunt aliquam odio eu interdum. Vestibulum ut efficitur metus. Phasellus vel urna cursus, mollis augue ac, viverra mi. Ut eu diam felis. In et felis quis velit posuere fringilla. Mauris scelerisque ullamcorper egestas. Aenean ut rutrum lectus, a blandit odio.\r\n\r\nMaecenas iaculis ornare diam, vitae pellentesque sem condimentum vel. Donec mollis velit magna, sit amet accumsan nisl finibus sed. Sed eu pellentesque magna. Nullam venenatis vitae justo eu auctor. Proin vel mi turpis. Mauris cursus neque vel ex congue faucibus. Pellentesque hendrerit finibus ligula, vel auctor purus faucibus sit amet. Aenean tristique orci vitae elit egestas ultrices. Proin eu sapien neque.', '2019-04-01', 3),
(4, 'TFj31mp1A9E', 'Samu', 'lisfg drog hdòo hdòog hdsò òbfobx', '2019-04-08', 8);

-- --------------------------------------------------------

--
-- Struttura della tabella `img`
--

CREATE TABLE `img` (
  `id` int(11) NOT NULL,
  `nome` varchar(250) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dump dei dati per la tabella `img`
--

INSERT INTO `img` (`id`, `nome`) VALUES
(1, 'imggxg.jpg'),
(3, 'imggxg.jpg'),
(4, 'architecture-blank-space-blue-sky-921294.jpg'),
(5, 'architecture-blank-space-blue-sky-921294.jpg'),
(6, 'architecture-blank-space-blue-sky-921294.jpg'),
(7, 'architecture-blank-space-blue-sky-921294.jpg'),
(8, 'mirandola.jpg');

-- --------------------------------------------------------

--
-- Struttura della tabella `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `titolo` varchar(250) NOT NULL,
  `contenuto` mediumtext NOT NULL,
  `data` date NOT NULL,
  `id_img` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dump dei dati per la tabella `news`
--

INSERT INTO `news` (`id`, `titolo`, `contenuto`, `data`, `id_img`) VALUES
(1, 'Progetto Yachay - La Città della Conoscenza\r\n', 'La Fondazione Edulife collabora con il governo ecuadoriano nella progettazione di Yachay, la Citta della Conoscenza, che sarà una delle Università più moderne dell\'America Latina e del mondo.\r\n\r\nUn ecosistema di innovazione tecnologica; una vera e propria città, che avrà come obiettivo quello di generare felicità e soddisfazione tra tutti gli abitanti, e di costruire un collegamento tra le tradizioni del paese, le nuove metodologie didattiche e le tecnologie più avanzate.\r\n\r\nUn progetto molto ambizioso e strettamente legato al territorio, che funzionerà da ponte tra Università e mondo del lavoro.', '2019-03-30', 8),
(2, 'Presentazione della ricerca sul progetto IUS: \"Un processo di costruzione partecipata del profilo docente in una rete di Istituzioni di Educazione Superiore in America Latina\"\r\n', 'A Roma dal 10 al 14 luglio p.v. Si terrà l\'Assemblea Generale delle IUS - Istituzioni Salesiane di Educazione Superiore -, un evento istituzionale che si celebra ogni due/tre anni, e che conta con la presenza dei rettori delle Università Salesiane presenti in America Latina, Asia (India) ed Europa.\r\n\r\nDurante l\'incontro porterà un suo contributo istituzionale anche il Rettor Maggiore p. Pasqual Chavez, la massima autorità della Congregazione Salesiana.\r\n\r\nDurante l’Assemblea sarà presentata dal Comitato Scientifico della Fondazione Edulife la ricerca sul progetto IUS, “Gestione Integrata delle Risorse Umane”, che ha visto coinvolta una rete di 17 università (sudamericane ed europee), che hanno lavorato assieme attraverso una comunità di pratica, sviluppando i profili del docente universitario, del direttivo e dell\'amministrativo.\r\n\r\nAlla conferenza sarà presente anche il prof. Ernesto González, Consigliere Accademico dell\'Istituto Internazionale della UNESCO per l\'Educazione Superiore in America Latina e nei Caraibi (IESALC).', '2019-03-30', 8);

-- --------------------------------------------------------

--
-- Struttura della tabella `progetto`
--

CREATE TABLE `progetto` (
  `id` int(11) NOT NULL,
  `titolo` varchar(250) NOT NULL,
  `contenuto` mediumtext NOT NULL,
  `id_img` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struttura della tabella `user`
--

CREATE TABLE `user` (
  `username` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dump dei dati per la tabella `user`
--

INSERT INTO `user` (`username`, `password`) VALUES
('admin', '35fd1b68a7fa7ba07c9fde405fcc802c');

--
-- Indici per le tabelle scaricate
--

--
-- Indici per le tabelle `evento`
--
ALTER TABLE `evento`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_img` (`id_img`);

--
-- Indici per le tabelle `file`
--
ALTER TABLE `file`
  ADD PRIMARY KEY (`id`);

--
-- Indici per le tabelle `gxg`
--
ALTER TABLE `gxg`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_img` (`id_img`);

--
-- Indici per le tabelle `img`
--
ALTER TABLE `img`
  ADD PRIMARY KEY (`id`);

--
-- Indici per le tabelle `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_img` (`id_img`);

--
-- Indici per le tabelle `progetto`
--
ALTER TABLE `progetto`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_img` (`id_img`);

--
-- Indici per le tabelle `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT per le tabelle scaricate
--

--
-- AUTO_INCREMENT per la tabella `file`
--
ALTER TABLE `file`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT per la tabella `gxg`
--
ALTER TABLE `gxg`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT per la tabella `img`
--
ALTER TABLE `img`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT per la tabella `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
