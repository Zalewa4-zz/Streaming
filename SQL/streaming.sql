-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 22 Sty 2021, 21:39
-- Wersja serwera: 10.4.16-MariaDB
-- Wersja PHP: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `streaming`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `movies`
--

CREATE TABLE `movies` (
  `id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8_polish_ci NOT NULL,
  `minsrc` varchar(255) COLLATE utf8_polish_ci NOT NULL,
  `vidsrc` varchar(255) COLLATE utf8_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `movies`
--

INSERT INTO `movies` (`id`, `title`, `minsrc`, `vidsrc`) VALUES
(1, 'Zegarek', 'min/min1.jpg', 'videos/video1.mp4'),
(2, 'Łyżka', 'min/min2.jpg', 'videos/video2.mp4'),
(3, 'Owce', 'min/min3.jpg', 'videos/video3.mp4'),
(4, 'Balony', 'min/min4.jpg', 'videos/video4.mp4'),
(5, 'Kobieta', 'min/min5.jpg', 'videos/video5.mp4'),
(6, 'Natura', 'min/min6.jpg', 'videos/video6.mp4'),
(7, 'Fale', 'min/min7.jpg', 'videos/video7.mp4'),
(8, 'NYC', 'min/min8.jpg', 'videos/video8.mp4');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `music`
--

CREATE TABLE `music` (
  `id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8_polish_ci NOT NULL,
  `mus` varchar(255) COLLATE utf8_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `music`
--

INSERT INTO `music` (`id`, `title`, `mus`) VALUES
(1, 'Utwór 1', 'music/utwor1.m4a'),
(2, 'Utwór 2', 'music/utwor2.m4a'),
(3, 'Utwór 3', 'music/utwor3.mp3'),
(4, 'Utwór 4', 'music/utwor4.mp3'),
(5, 'Utwór 5', 'music/utwor5.mp3'),
(6, 'Utwór 6', 'music/utwor6.mp3'),
(7, 'Utwór 7', 'music/utwor7.mp3'),
(8, 'Utwór 8', 'music/utwor8.mp3');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `users`
--

CREATE TABLE `users` (
  `userid` int(11) NOT NULL,
  `login` varchar(255) COLLATE utf8_polish_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_polish_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_polish_ci NOT NULL,
  `isadmin` tinyint(1) NOT NULL,
  `islogged` tinyint(1) NOT NULL,
  `ispaid` tinyint(1) NOT NULL,
  `isactivated` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `users`
--

INSERT INTO `users` (`userid`, `login`, `email`, `password`, `isadmin`, `islogged`, `ispaid`, `isactivated`) VALUES
(1, 'Zalewa4', 'zalewa444@gmail.com', '9e38e8d688743e0d07d669a1fcbcd35b', 1, 1, 1, 1),
(10, 'Zaleski', 'zalewa18@gmail.com', '9e38e8d688743e0d07d669a1fcbcd35b', 1, 1, 1, 0),
(11, 'Adrian', 'zax@gmail.com', '9e38e8d688743e0d07d669a1fcbcd35b', 0, 0, 0, 0),
(13, 'Zalewa44', 'zalewka@xd.pl', '9e38e8d688743e0d07d669a1fcbcd35b', 0, 0, 0, 0),
(14, 'XD', 'elo@elo.pl', '9e38e8d688743e0d07d669a1fcbcd35b', 0, 0, 0, 0),
(46, 'Adrian Zalewski', 'zalewa4444@gmail.com', 'b8f3369ee39264015c159c66d0b2dd29', 0, 0, 1, 1);

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `movies`
--
ALTER TABLE `movies`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `music`
--
ALTER TABLE `music`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userid`),
  ADD UNIQUE KEY `ID` (`userid`);

--
-- AUTO_INCREMENT dla zrzuconych tabel
--

--
-- AUTO_INCREMENT dla tabeli `movies`
--
ALTER TABLE `movies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT dla tabeli `music`
--
ALTER TABLE `music`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT dla tabeli `users`
--
ALTER TABLE `users`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
