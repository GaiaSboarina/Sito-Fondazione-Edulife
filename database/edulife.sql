-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Creato il: Mar 30, 2019 alle 14:22
-- Versione del server: 10.1.38-MariaDB
-- Versione PHP: 7.3.3

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
-- Struttura della tabella `gxg`
--

CREATE TABLE `gxg` (
  `id` int(11) NOT NULL,
  `link` varchar(250) NOT NULL,
  `titolo` varchar(250) NOT NULL,
  `contenuto` mediumtext NOT NULL,
  `img_name` varchar(250) NOT NULL,
  `data` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dump dei dati per la tabella `gxg`
--

INSERT INTO `gxg` (`id`, `link`, `titolo`, `contenuto`, `img_name`, `data`) VALUES
(1, 'IhEP3_mIqV8', 'GxG Andrea Mirandola', 'Prova GxG', '', '2019-03-30');

-- --------------------------------------------------------

--
-- Struttura della tabella `img`
--

CREATE TABLE `img` (
  `id` int(11) NOT NULL,
  `nome` varchar(250) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

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
(1, 'Progetto Yachay - La Città della Conoscenza\r\n', 'La Fondazione Edulife collabora con il governo ecuadoriano nella progettazione di Yachay, la Citta della Conoscenza, che sarà una delle Università più moderne dell\'America Latina e del mondo.\r\n\r\nUn ecosistema di innovazione tecnologica; una vera e propria città, che avrà come obiettivo quello di generare felicità e soddisfazione tra tutti gli abitanti, e di costruire un collegamento tra le tradizioni del paese, le nuove metodologie didattiche e le tecnologie più avanzate.\r\n\r\nUn progetto molto ambizioso e strettamente legato al territorio, che funzionerà da ponte tra Università e mondo del lavoro.', '2019-03-30', 0),
(2, 'Presentazione della ricerca sul progetto IUS: \"Un processo di costruzione partecipata del profilo docente in una rete di Istituzioni di Educazione Superiore in America Latina\"\r\n', 'A Roma dal 10 al 14 luglio p.v. Si terrà l\'Assemblea Generale delle IUS - Istituzioni Salesiane di Educazione Superiore -, un evento istituzionale che si celebra ogni due/tre anni, e che conta con la presenza dei rettori delle Università Salesiane presenti in America Latina, Asia (India) ed Europa.\r\n\r\nDurante l\'incontro porterà un suo contributo istituzionale anche il Rettor Maggiore p. Pasqual Chavez, la massima autorità della Congregazione Salesiana.\r\n\r\nDurante l’Assemblea sarà presentata dal Comitato Scientifico della Fondazione Edulife la ricerca sul progetto IUS, “Gestione Integrata delle Risorse Umane”, che ha visto coinvolta una rete di 17 università (sudamericane ed europee), che hanno lavorato assieme attraverso una comunità di pratica, sviluppando i profili del docente universitario, del direttivo e dell\'amministrativo.\r\n\r\nAlla conferenza sarà presente anche il prof. Ernesto González, Consigliere Accademico dell\'Istituto Internazionale della UNESCO per l\'Educazione Superiore in America Latina e nei Caraibi (IESALC).', '2019-03-30', 0);

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

--
-- Dump dei dati per la tabella `progetto`
--

INSERT INTO `progetto` (`id`, `titolo`, `contenuto`, `id_img`) VALUES
(1, 'PLAN YOUR FUTURE\r\n', 'Tramite questa piattaforma web, viene creata la possibilità di aprire un dialogo diretto ed immediato tra i professionisti che già operano nel mondo del lavoro e i giovani, un elemento essenziale per creare un processo di orientamento scolastico e lavorativo.\r\nI partner che hanno reso possibile la creazione di questo portale sono:\r\nFondazione Edulife;\r\nAssociazione Prospera;\r\nCOSP Verona;\r\nFondazione Cariverona;\r\nIl patrocinio.\r\nPer maggiori informazioni: www.planyourfuture.eu', 0),
(2, 'Go To Talent', 'È un progetto che ha l’obiettivo di promuovere l’internazionalizzazione dei giovani talenti, attraverso partnership con Università e Istituzioni pubbliche e private, considerate come aggregatori naturali per aiutare i giovani nel proprio sviluppo umano, professionale e all’orientamento del lavoro. \r\nIl progetto prevede:\r\nL’accoglienza e orientamento dei giovani nell’incontro con le diverse culture a partire dalla cultura Cinese per offrire stimoli forti ed intensi verso una riflessività individuale capace di aprire le proprie prospettive ed aspettative;\r\nL’accompagnamento dei giovani attraverso tirocini formativi e stage professionali nelle imprese che commercializzano e producono nei mercati esteri;\r\nLa promozione dei giovani al lavoro nelle imprese a vocazione internazionale nelle imprese a vocazione internazionale.\r\nLa Fondazione Edulife Onlus si avvale del centro servizi Edulife spa, che opera nel campo della formazione a distanza e dell’innovazione didattico-metodologica, nell’utilizzo delle ICT nonché nella formazione degli insegnanti e formatori.\r\n', 0);

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

-- --------------------------------------------------------

--
-- Struttura della tabella `video`
--

CREATE TABLE `video` (
  `id` int(11) NOT NULL,
  `link` varchar(250) NOT NULL,
  `titolo` varchar(250) NOT NULL,
  `contenuto` mediumtext NOT NULL,
  `data` date NOT NULL,
  `id_img` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

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
-- Indici per le tabelle `gxg`
--
ALTER TABLE `gxg`
  ADD PRIMARY KEY (`id`);

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
-- Indici per le tabelle `video`
--
ALTER TABLE `video`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_img` (`id_img`);

--
-- AUTO_INCREMENT per le tabelle scaricate
--

--
-- AUTO_INCREMENT per la tabella `gxg`
--
ALTER TABLE `gxg`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT per la tabella `img`
--
ALTER TABLE `img`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT per la tabella `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT per la tabella `progetto`
--
ALTER TABLE `progetto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
