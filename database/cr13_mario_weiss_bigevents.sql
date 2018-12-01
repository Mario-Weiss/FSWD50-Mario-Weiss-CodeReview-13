-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Erstellungszeit: 01. Dez 2018 um 16:37
-- Server-Version: 10.1.30-MariaDB
-- PHP-Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `cr13_mario_weiss_bigevents`
--
CREATE DATABASE IF NOT EXISTS `cr13_mario_weiss_bigevents` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `cr13_mario_weiss_bigevents`;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `category`
--

DROP TABLE IF EXISTS `category`;
CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `create_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Daten für Tabelle `category`
--

INSERT INTO `category` (`id`, `name`, `create_date`) VALUES
(1, 'music', '2018-12-01 10:52:01'),
(2, 'sport', '2018-12-01 10:52:01'),
(3, 'movie', '2018-12-01 10:52:21'),
(4, 'theater', '2018-12-01 10:52:21');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `event`
--

DROP TABLE IF EXISTS `event`;
CREATE TABLE `event` (
  `id` int(11) NOT NULL,
  `category_id` int(11) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `day` datetime NOT NULL,
  `description` varchar(2048) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `capacity` int(11) NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `locationName` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `adress` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `zip` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `create_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Daten für Tabelle `event`
--

INSERT INTO `event` (`id`, `category_id`, `name`, `day`, `description`, `image`, `capacity`, `email`, `phone`, `locationName`, `adress`, `zip`, `city`, `url`, `create_date`) VALUES
(1, 4, 'Der Herr der Ringe - Die Zwei Türme', '2018-12-04 17:00:00', 'Zwei Türme – der Turm „Orthanc“ mitten in der Festung Isengard und „Barad Dûr“, der dunkle Turm Saurons – werfen im zweiten Teil der legendären Fantasy-Trilogie „Der Herr der Ringe“ ihre Schatten weit über Mittelerde. Der eine Ring hat nichts von seiner Macht verloren. Dieser Ring, geschaffen von Sauron, dem dunklen Herrscher von Mordor, entscheidet über das Schicksal von Frodo Beutlin und seinen Gefährten. Er muss vernichtet werden um Mittelerde vor Sauron zu schützen, um das Gute gegen das Böse zu verteidigen.\r\n\r\nSeit Tolkien sein dreiteiliges Epos im Jahr 1954 veröffentlichte, hat „Der Herr der Ringe“ Millionen LeserInnen beeindruckt und in die Welt von Mittelerde entführt. 2001 kam „Der Herr der Ringe“ endlich in einer atemberaubenden Verfilmung in die Kinos, als größte und aufwändigste Filmproduktion aller Zeiten. Filmmusik-Komponist Howard Shore gestaltete dazu ein voll durchkomponiertes Oscar- und Grammy-prämiertes musikalisches Werk, das die Handlung mit emotionalen, komplex verwobenen Themen begleitet und jeder Kultur in Mittelerde eigene Motive zuweist. Grund genug, um diese wunderbare Musik live zum Film zu erleben! Die Originaltonspur des Films, reduziert um die Musik, sorgt für den richtigen Kinosound. Dass die Musik dann von über 200 Mitwirkenden live dazu gespielt wird, verstärkt das Gänsehaut-Gefühl. Eine der erfolgreichsten Verfilmungen der Kinogeschichte wird so zu einem multimedialen Erlebnis, dessen emotionale Kraft in der Live-Musik kulminiert und dem sich niemand entziehen kann. Nach dem großen Erfolg des Vorjahres steht im Dezember 2018 der zweite Teil mit den Helden Frodo Beutlin, Gandalf, Aragorn, Legolas und Gimli auf dem Spielplan.', 'zwei_tuerme.jpg', 16000, 'service@stadthalle.com', '+43 1 79 999 79', 'Vienna Stadthalle', 'Roland-Rainer-Platz 1', '1150', 'Wien', 'www.stadthalle.com', '2018-12-01 13:17:01'),
(2, 1, 'I am from Austria', '2018-12-07 19:30:00', 'The new musical of the VBW with the music of Austria\'s hit producer number one, Rainhard Fendrich, is our declaration of love to this country.\r\nA concert by Rainhard Fendrich is always a journey into a fascinating world. Music with power, words with weigh', '5419.jpg', 1225, 'not available', 'not available', 'Raimund Theater', 'Wallgasse 18-20', '1060', 'Wien', 'www.musicalvienna.at', '2018-12-01 13:17:01'),
(3, 1, 'Angelo Kelly & Family', '2018-12-14 20:00:00', 'Irish Christmas', 'Stadthalle_1.jpg', 2000, 'service@stadthalle.com', '+43 1 79 999 79', 'Vienna Stadthalle', 'Roland-Rainer-Platz 1', '1150', 'Wien', 'www.stadthalle.com', '2018-12-01 13:17:17'),
(5, 3, 'Elvira Notari', '2018-12-01 00:00:00', 'Austrian Film Museum (Österreichisches Filmmuseum)', 'Filmmuseum_04_1.jpg', 80, 'office@filmmuseum.at', '+43 1 533 70 54 0', 'Austrian Film Museum (Österreichisches Filmmuseum)', 'Augustinerstraße 1', '1010', 'Wien', 'www.filmmuseum.at', '2018-12-01 14:12:37'),
(6, 3, 'Kinder Kino Klassiker', '2018-12-02 16:00:00', 'Kid\'s & Family Tip', 'metro_kino.jpg', 85, 'not available', '+43 1 512 18 03', 'Metro Kinokulturhaus', 'Johannesgasse 4', '1010', 'Wien', 'http://filmarchiv.at', '2018-12-01 14:15:27'),
(7, 2, 'Kleiner Eistraum', '2018-12-02 10:00:00', 'Rund 3.000m² Eisfläche am \"Kleinen Eistraum\" am Wiener Weihnachtstraum.\r\n\r\nRomantik pur beim Eislaufen auf verschlungenen Wegen durch den Rathauspark. Untermalt von weihnachtlichen Klängen, umgeben von traumhaften Ambiente, ein einzigartiges Eislauferlebnis inmitten der Stadt - das ist der \"Kleine Eistraum\".', '23117035_1699880956751101_1842452335707131322_o.jpg', 200, 'not available', '+43 1 40 900 40', 'City Hall Square', 'Rathausplatz', '1010', 'Wien', 'www.wienereistraum.com', '2018-12-01 14:17:45'),
(8, 2, 'Wiener Trabrennverein - Renntage 2018', '2018-12-09 00:00:00', 'The first and easiest way to start racing trotting is to follow the thrilling races live as a spectator. The tension increases when you bet one or two euros on one of the participating horses. This will make you race by race a fan of your favorite horse and will be even happier if it is successful.', 'BG1125x600.jpg', 255, 'info@krieau.at', '+43 1 728 00 46', 'Krieau', 'Nordportalstraße 247', '1020', 'Wien', 'http://www.krieau.at/', '2018-12-01 14:21:19'),
(9, 4, 'Der einsame Weg', '2018-12-14 19:30:00', 'von Arthur Schnitzler\r\n\r\nDirection Mateja Koležnik\r\n\r\nPremiere 15. 11. 2018', 'Der_einsame_Weg_C_Astrid_Knie__2_.jpg', 619, 'ticket@josefstadt.org', '+43 1 42 700-300', 'Theater in Josefstadt', 'Josefstädter Straße 26', '1080', 'Wien', 'www.josefstadt.org', '2018-12-01 14:28:43');

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indizes für die Tabelle `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_3BAE0AA712469DE2` (`category_id`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT für Tabelle `event`
--
ALTER TABLE `event`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints der exportierten Tabellen
--

--
-- Constraints der Tabelle `event`
--
ALTER TABLE `event`
  ADD CONSTRAINT `FK_3BAE0AA712469DE2` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
