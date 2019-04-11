-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Creato il: Apr 11, 2019 alle 16:23
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
(9, 'BILANCIO SOCIALE FONDAZIOEN EDULIFE 2017.pdf');

-- --------------------------------------------------------

--
-- Struttura della tabella `gxg`
--

CREATE TABLE `gxg` (
  `id` int(11) NOT NULL,
  `link` varchar(250) NOT NULL,
  `link2` varchar(250) NOT NULL,
  `titolo` varchar(250) NOT NULL,
  `contenuto` mediumtext NOT NULL,
  `data` date NOT NULL,
  `id_img` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dump dei dati per la tabella `gxg`
--

INSERT INTO `gxg` (`id`, `link`, `link2`, `titolo`, `contenuto`, `data`, `id_img`) VALUES
(15, 'IhEP3_mIqV8', '5--lgXlHI98&t', 'Andrea Mirandola', 'Studente dell\'ITS, \r\nci racconta i suoi primi passi in Edulife. \r\n“ITS è una scuola decisamente diversa dalle superiori, perché dinamica, viva e ci sono sempre cose nuove da imparare“ \r\nAndiamo insieme a rivivere le emozioni del suo percorso!!', '2019-04-11', 42),
(16, '4LVi9ihO43M', '1Ar3SBx96oE&t', 'Lorenzo Vezzaro', 'Studente dell\'ITS, \r\nci racconta i suoi primi passi in Edulife. \r\n“Il parkour mi ha sicuramente fatto imparare a superare gli ostacoli non solo nella disciplina stessa, ma anche nella vita reale, quindi quando incontri un ostacolo non ci giri attorno, non fai la strada più corta, ma anzi provi a scavalcarlo nel migliore dei modi” \r\nAndiamo insieme a rivivere le emozioni del suo percorso!!', '2019-04-11', 43),
(14, 'TFj31mp1A9E', 'fbS2TLMErlM&t', 'Cristian Zeni', 'Programmatore, amministratore di sistema e docente dell\'ITS, \r\nsi racconta a 10 anni dall\'inizio della sua esperienza in Edulife.\r\n\"Si possono fare un milione di cose nella vita, certo è che se sei indeciso e non hai grandi certezze e sicurezze, la cosa migliore che puoi fare è prendere una tua passione e provare a seguirla che tanto alla fine qualcosa salta fuori\"\r\nRipercorriamo insieme il suo percorso!!', '2019-04-11', 35);

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
(43, 'vezzaro.jpeg'),
(42, 'mirandola.jpeg'),
(35, 'zeni.jpeg');

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
(9, 'Presentazione della ricerca sul progetto IUS', 'A Roma dal 10 al 14 luglio p.v. Si terrà l\'Assemblea Generale delle IUS - Istituzioni Salesiane di Educazione Superiore -, un evento istituzionale che si celebra ogni due/tre anni, e che conta con la presenza dei rettori delle Università Salesiane presenti in America Latina, Asia (India) ed Europa.\r\n\r\nDurante l\'incontro porterà un suo contributo istituzionale anche il Rettor Maggiore p. Pasqual Chavez, la massima autorità della Congregazione Salesiana.\r\n\r\nDurante l’Assemblea sarà presentata dal Comitato Scientifico della Fondazione Edulife la ricerca sul progetto IUS, “Gestione Integrata delle Risorse Umane”, che ha visto coinvolta una rete di 17 università (sudamericane ed europee), che hanno lavorato assieme attraverso una comunità di pratica, sviluppando i profili del docente universitario, del direttivo e dell\'amministrativo.\r\n\r\nAlla conferenza sarà presente anche il prof. Ernesto González, Consigliere Accademico dell\'Istituto Internazionale della UNESCO per l\'Educazione Superiore in America Latina e nei Caraibi (IESALC).', '2019-04-11', 16);

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
(0, 'PLAN YOUR FUTURE', 'Il progetto Plan your future è a supporto dei principali attori delle attività di orientamento che gli Istituti secondari di II grado hanno organizzato per sostenere le scelte formative e professionali del dopo maturità.\r\n\r\nGrazie a un ambiente virtuale di apprendimento: www.planyourfuture.eu, intenzionalmente progettato secondo metodologie collaborative attente alle nuove modalità di comunicazione in rete, con la supervisione di esperti in temi di orientamento, studenti, studentesse, docenti e famiglie potranno:\r\n\r\n- conoscere i percorsi professionali di manager, imprenditori, dirigenti di azienda e liberi professionisti, attraverso le diverse videointerviste presenti nell’ambiente;\r\n- mettersi in contatto diretto con i testimoni, grazie a un blog dedicato e porre delle domande;\r\n- accedere sia a contenuti informativi sul mondo del lavoro (disponibili per studenti, docenti e famiglie)  sia a unità formative strutturate, a supporto delle attività di orientamento (disponibili per docenti).\r\n\r\nIl progetto è promosso dalla Fondazione Edulife insieme all’associazione Prospera www.prospera.it e al COSP di Verona www.cosp.verona.it.', 17);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT per la tabella `gxg`
--
ALTER TABLE `gxg`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT per la tabella `img`
--
ALTER TABLE `img`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT per la tabella `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
