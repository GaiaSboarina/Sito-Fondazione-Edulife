-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Creato il: Apr 11, 2019 alle 16:45
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
(55, 'news.jpg'),
(56, 'news.jpg'),
(61, 'immagine  per sito aaa.jpg'),
(54, 'news.jpg'),
(43, 'vezzaro.jpeg'),
(42, 'mirandola.jpeg'),
(60, '1471.jpg'),
(59, 'oratori 11.png'),
(58, 'In ascolto del futuro3.jpg'),
(57, 'plan-your-future.jpg'),
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
(10, 'Progetto Yachay - La Città della Conoscenza', 'La Fondazione Edulife collabora con il governo ecuadoriano nella progettazione di Yachay, la Citta della Conoscenza, che sarà una delle Università più moderne dell\'America Latina e del mondo.\r\n\r\nUn ecosistema di innovazione tecnologica; una vera e propria città, che avrà come obiettivo quello di generare felicità e soddisfazione tra tutti gli abitanti, e di costruire un collegamento tra le tradizioni del paese, le nuove metodologie didattiche e le tecnologie più avanzate.\r\n\r\nUn progetto molto ambizioso e strettamente legato al territorio, che funzionerà da ponte tra Università e mondo del lavoro.', '2019-04-11', 54),
(12, 'Presentazione della ricerca sul progetto IUS', 'A Roma dal 10 al 14 luglio p.v. Si terrà l\'Assemblea Generale delle IUS - Istituzioni Salesiane di Educazione Superiore -, un evento istituzionale che si celebra ogni due/tre anni, e che conta con la presenza dei rettori delle Università Salesiane presenti in America Latina, Asia (India) ed Europa.\r\n\r\nDurante l\'incontro porterà un suo contributo istituzionale anche il Rettor Maggiore p. Pasqual Chavez, la massima autorità della Congregazione Salesiana.\r\n\r\nDurante l’Assemblea sarà presentata dal Comitato Scientifico della Fondazione Edulife la ricerca sul progetto IUS, “Gestione Integrata delle Risorse Umane”, che ha visto coinvolta una rete di 17 università (sudamericane ed europee), che hanno lavorato assieme attraverso una comunità di pratica, sviluppando i profili del docente universitario, del direttivo e dell\'amministrativo.\r\n\r\nAlla conferenza sarà presente anche il prof. Ernesto González, Consigliere Accademico dell\'Istituto Internazionale della UNESCO per l\'Educazione Superiore in America Latina e nei Caraibi (IESALC).', '2019-04-11', 56),
(11, 'Progetto Yachay - La Città della Conoscenza', 'La Fondazione Edulife collabora con il governo ecuadoriano nella progettazione di Yachay, la Citta della Conoscenza, che sarà una delle Università più moderne dell\'America Latina e del mondo.\r\n\r\nUn ecosistema di innovazione tecnologica; una vera e propria città, che avrà come obiettivo quello di generare felicità e soddisfazione tra tutti gli abitanti, e di costruire un collegamento tra le tradizioni del paese, le nuove metodologie didattiche e le tecnologie più avanzate.\r\n\r\nUn progetto molto ambizioso e strettamente legato al territorio, che funzionerà da ponte tra Università e mondo del lavoro.', '2019-04-11', 55);

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
(2, 'PLAN YOUR FUTURE', 'Il progetto Plan your future è a supporto dei principali attori delle attività di orientamento che gli Istituti secondari di II grado hanno organizzato per sostenere le scelte formative e professionali del dopo maturità.\r\n\r\nGrazie a un ambiente virtuale di apprendimento: www.planyourfuture.eu, intenzionalmente progettato secondo metodologie collaborative attente alle nuove modalità di comunicazione in rete, con la supervisione di esperti in temi di orientamento, studenti, studentesse, docenti e famiglie potranno:\r\n\r\n- conoscere i percorsi professionali di manager, imprenditori, dirigenti di azienda e liberi professionisti, attraverso le diverse videointerviste presenti nell’ambiente;\r\n- mettersi in contatto diretto con i testimoni, grazie a un blog dedicato e porre delle domande;\r\n- accedere sia a contenuti informativi sul mondo del lavoro (disponibili per studenti, docenti e famiglie)  sia a unità formative strutturate, a supporto delle attività di orientamento (disponibili per docenti).', 57),
(3, 'IN ASCOLTO DEL FUTURO', 'Il progetto In ascolto del Futuro è il primo progetto di sistema di Rete di Reti, un network formato da 38 organizzazioni no profit, tra cui la Fondazione Edulife, impegnate nell’educazione e nell’innovazione per le giovani generazioni e per la ripresa del paese.\r\n\r\nSi tratta di una iniziativa di student coaching per fare emergere negli studenti la consapevolezza dei propri talenti, delle proprie vocazioni e del proprio orientamento.\r\n\r\nIl progetto ha l’obiettivo di attivare e potenziare nelle scuole superiori il Centro dell’Orientamento attraverso un nuovo paradigma di relazione con lo studente che ne favorisce lo sviluppo delle potenzialità personali.\r\n\r\nIn ascolto del futuro attraverso tre percorsi tematici dedicati al bilancio delle competenze, all’ascolto, alla comunicazione e alla gestione del tempo, vuole offrire agli studenti gli strumenti per attivare un processo di continua maturazione e consapevolezza in se stessi, per meglio misurarsi con le scelte per il proprio futuro, accademiche e/o professionali. L’intera proposta ha l’obiettivo di introdurre capillarmente, sul tema dell’orientamento, le tecniche di coaching nel Mondo Scuola.\r\n\r\nIl progetto prevede:\r\n\r\n- incontri diretti di coach con studenti delle medie, del biennio e/o del triennio superiore e gli insegnanti delle classi coinvolte di nove scuole a Milano, Roma, Capaci e Padova; \r\n- percorsi formativi rivolti ai docenti, funzionali all’estensione capillare dell’iniziativa. I coach insegneranno, infatti, le tecniche di student coaching ai docenti che, una volta formati, con l’ausilio di un coach di riferimento per Istituto, potranno progettare i momenti di intervento di student coaching e di orientamento nelle scuole di appartenenza fino a diventare completamente autonomi. \r\n\r\nL’ambizione è quella di estendere il modello di student coaching a tutti gli istituti di scuola superiore del paese.\r\n\r\nIl progetto è promosso da: Fondazione Edulife, Associazione Alunni Liceo Avogadro, Associazione Laureati Luiss, Junior Achievement, Fondazione Politecnico di Milano e Prospera.', 58),
(4, 'Progetto Oratori', 'Il progetto “Oratorio Learning Center” ha la finalità di accompagnare i giovani verso la scoperta del proprio progetto di vita coinvolgendo gli adulti in un rinnovato ruolo educativo. La diocesi di Verona ha scelto di mettere al centro del proprio progetto educativo-formativo la persona, risaltando il valore unico ed irripetibile di ciascuno all’interno della comunità di appartenenza. \r\nL’obiettivo è mettere le basi affinchè l’Oratorio diventi un ambiente esteso di comunicazione e apprendimento in grado di raggiungere la singola persona nella propria comunità, secondo i propri interessi, luoghi e tempi. Si tratta di offrire alla comunità educativa della Parrocchia il modello, la metodologia, gli strumenti e i contenuti didattici per coinvolgere tutti i soggetti attivi (al fine di creare una animazione permamente in qualsiasi luogo, in qualunque momento e con costi sostenibili.', 59),
(5, 'ETE', 'Il progetto Edulife Travel Education (ETE), nasce con la finalità di accompagnare i giovani verso la scoperta delle proprie potenzialità attraverso esperienze di apprendimento in Cina. Il progetto prevede un mese di permanenza (prorrogabile a due) ad Hangzhou, capitale della Provincia cinese dello Zhejiang. La formazione prevede tre moduli di studio: cultura cinese, lingua cinese (corso di 60 ore), perfezionamento della lingua inglese e, nel tempo libero, visite guidate a scopo culturale e professionale ed esperienze gastronomiche e sensoriali. Il progetto prevede anche la possibilità di svolgere degli stage presso aziende italiane con sede in Cina.\r\n\r\nGli obiettivi del progetto sono:\r\n\r\n- acquisire le conoscenze e le competenze essenziali per un approccio significativo alla cultura cinese;\r\n\r\n- acquisire le conoscenze minime per un dialogo con interlocutori cinesi, fondato sulle basi della mediazione culturale necessaria alla costruzione di relazioni;\r\n\r\n- offrire degli elementi per un confronto umano e professionale con una cultura profondamente diversa dalla propria.', 60),
(6, 'IUS', 'L’obiettivo del progetto è la creazione, promozione e animazione di una comunità di  pratica professionale, in grado di riflettere e implementare, all’interno delle Istituzioni Salesiane di Educazione Superiore (IUS), una gestione integrata delle Risorse Umane basata sulle competenze e finalizzata ad elevare il livello di eccellenza e la qualità delle università, secondo la mission e la vision istituzionali.\r\nLa comunità di pratica è formata da 17 università di Europa e America Latina, con un totale di 386 persone circa. Da giugno 2009 fino a diciembre 2010, la comunità ha definito e sperimentato all’interno delle IUS, con il supporto di un AVAC (Ambiente Virtuale di Apprendimento Collaborativo) i profili di competenza del docente, del personale direttivo ed amministrativo. Successivamente, da aprile 2010 a novembre 2011 si è sviuluppato un corso sui sistemi integrati della gestione delle RU basato sui profili di competenza definiti per poi, nella fase finale del progetto, implementarli nelle rispettive università (2012-2013).', 61);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT per la tabella `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT per la tabella `progetto`
--
ALTER TABLE `progetto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
