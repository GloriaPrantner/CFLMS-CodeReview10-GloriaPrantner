-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Erstellungszeit: 18. Jul 2020 um 15:56
-- Server-Version: 10.4.13-MariaDB
-- PHP-Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `cr10_gloriaprantner_biglibrary`
--
CREATE DATABASE IF NOT EXISTS `cr10_gloriaprantner_biglibrary` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `cr10_gloriaprantner_biglibrary`;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `book`
--

CREATE TABLE `book` (
  `ISBN` varchar(50) NOT NULL,
  `title` varchar(55) NOT NULL,
  `img` varchar(500) NOT NULL,
  `description` varchar(500) NOT NULL,
  `pages` smallint(6) NOT NULL,
  `released` date NOT NULL,
  `status` tinyint(1) NOT NULL,
  `type` enum('book','CD','DVD') NOT NULL,
  `author` varchar(55) NOT NULL,
  `publisher` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Daten für Tabelle `book`
--

INSERT INTO `book` (`ISBN`, `title`, `img`, `description`, `pages`, `released`, `status`, `type`, `author`, `publisher`) VALUES
('1', 'CDs are outdated', 'https://www.notebookcheck.net/fileadmin/_processed_/e/2/csm_Compact_disc_four_decade_anniversary_8_March_2019_c2f022af42.jpg', 'Nobody uses cds anymore', 0, '1980-01-01', 0, 'CD', 'NoOne', 'NoBody'),
('124', 'Interstellar', 'https://m.media-amazon.com/images/M/MV5BZjdkOTU3MDktN2IxOS00OGEyLWFmMjktY2FiMmZkNWIyODZiXkEyXkFqcGdeQXVyMTMxODk2OTU@._V1_SY1000_SX675_AL_.jpg', 'Earths future has been riddled by disasters, famines, and droughts. There is only one way to ensure mankinds survival: Interstellar travel. A newly discovered wormhole in the far reaches of our solar system allows a team of astronauts to go where no man has gone before, a planet that may have the right environment to sustain human life.', 0, '2014-04-09', 1, 'DVD', 'Christopher Nolan', ' Jonathan Nolan'),
('9780136083238', 'Clean Code', 'https://learning.oreilly.com/library/cover/9780136083238/250w/', 'Even bad code can function. But if code isnt clean, it can bring a development organization to its knees. Every year, countless hours and significant resources are lost because of poorly written code. But it doesnt have to be that way.', 464, '2008-08-01', 0, 'book', 'Robert C. Martin', 'Pearson'),
('9780596009205', 'Head First Java, 2nd Edition', 'https://learning.oreilly.com/library/cover/0596009208/250w/', 'Learning a complex new language is no easy task especially when it s an object-oriented computer programming language like Java. You might think the problem is your brain. It seems to have a mind of its own, a mind that doesnt always want to take in the dry, technical stuff youre forced to study.', 688, '2005-02-01', 0, 'book', 'Kathy Sierra', 'OReilly Media'),
('9781449369415', 'Introduction to Machine Learning with Python', 'https://learning.oreilly.com/library/cover/9781449369880/250w/', 'Machine learning has become an integral part of many commercial applications and research projects, but this field is not exclusive to large companies with extensive research teams. If you use Python, even as a beginner, this book will teach you practical ways to build your own machine learning solutions. With all the data available today, machine learning applications are limited only by your imagination.', 400, '2016-10-01', 1, 'book', 'Andreas C. Müller', 'OReilly Media'),
('9781491952023', 'JavaScript: The Definitive Guide, 7th Edition', 'https://learning.oreilly.com/library/cover/9781491952016/250w/', 'JavaScript is the programming language of the web and is used by more software developers today than any other programming language. For nearly 25 years this best seller has been the go-to guide for JavaScript programmers.', 706, '2020-05-01', 1, 'book', 'David Flanagan', 'OReilly Media'),
('9781492037651', 'Programming TypeScript', 'https://learning.oreilly.com/library/cover/9781492037644/250w/', 'Any programmer working with a dynamically typed language will tell you how hard it is to scale to more lines of code and more engineers. Thats why Facebook, Google, and Microsoft invented gradual static type layers for their dynamically typed JavaScript and Python code. This practical book shows you how one such type layer, TypeScript, is unique among them: it makes programming fun with its powerful static type system.', 324, '2019-05-01', 1, 'book', 'Boris Cherny', 'OReilly Media'),
('9781593279523', 'The Linux Command Line, 2nd Edition', 'https://learning.oreilly.com/library/cover/9781492071235/250w/', 'The Linux Command Line takes you from your very first terminal keystrokes to writing full programs in Bash, the most popular Linux shell (or command line). Along the way youll learn the timeless skills handed down by generations of experienced, mouse-shunning gurus: file navigation, environment configuration, command chaining, pattern matching with regular expressions, and more.', 504, '2019-02-01', 1, 'book', 'William E. Shotts', 'No Starch Press'),
('9781593279929', 'Automate the Boring Stuff with Python, 2nd Edition', 'https://learning.oreilly.com/library/cover/9781098122584/250w/', 'If youve ever spent hours renaming files or updating hundreds of spreadsheet cells, you know how tedious tasks like these can be. But what if you could have your computer do them for you?', 592, '2019-11-01', 1, 'book', 'Al Sweigart', 'No Starch Press');

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`ISBN`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
