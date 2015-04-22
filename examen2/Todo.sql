-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Machine: localhost
-- Gegenereerd op: 22 apr 2015 om 20:08
-- Serverversie: 5.6.20
-- PHP-versie: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Databank: `Todo`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `gebruikers`
--

CREATE TABLE IF NOT EXISTS `gebruikers` (
`id` int(4) NOT NULL,
  `email` varchar(150) NOT NULL,
  `wachtwoord` varchar(200) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=26 ;

--
-- Gegevens worden geëxporteerd voor tabel `gebruikers`
--

INSERT INTO `gebruikers` (`id`, `email`, `wachtwoord`) VALUES
(22, 'glenlauwers@hotmail.com', '202cb962ac59075b964b07152d234b70'),
(23, 'rina@hotmail.com', '202cb962ac59075b964b07152d234b70'),
(24, 'azer@a.be', '202cb962ac59075b964b07152d234b70'),
(25, 'aze@aa.be', '202cb962ac59075b964b07152d234b70');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `todos`
--

CREATE TABLE IF NOT EXISTS `todos` (
`id` int(5) NOT NULL,
  `e-mail_gebruiker` varchar(11) NOT NULL,
  `beschrijving` varchar(500) NOT NULL,
  `actief` tinyint(1) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=35 ;

--
-- Gegevens worden geëxporteerd voor tabel `todos`
--

INSERT INTO `todos` (`id`, `e-mail_gebruiker`, `beschrijving`, `actief`) VALUES
(14, '24', 'melk', 1),
(15, '24', 'cola', 2),
(16, '24', 'ei', 2),
(17, '24', 'cola', 0),
(18, '22', 'a', 2),
(19, '22', 'fds', 2),
(20, '22', 'fdqs', 2),
(21, '22', 'fds', 2),
(22, '22', 'aa', 2),
(23, '22', 'fqsd', 2),
(24, '22', 'sdf', 2),
(25, '22', 'qfsdqfds', 2),
(26, '22', 'zertterzetrz', 2),
(27, '25', '147', 2),
(28, '25', '258', 2),
(29, '25', '369', 2),
(30, '25', '369', 2),
(31, '22', 'a', 2),
(32, '22', 'aa', 2),
(33, '22', 'bb', 2),
(34, '22', 'cc', 2);

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `gebruikers`
--
ALTER TABLE `gebruikers`
 ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `todos`
--
ALTER TABLE `todos`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `gebruikers`
--
ALTER TABLE `gebruikers`
MODIFY `id` int(4) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT voor een tabel `todos`
--
ALTER TABLE `todos`
MODIFY `id` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=35;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
