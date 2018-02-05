-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 05 Lut 2018, 10:07
-- Wersja serwera: 10.1.26-MariaDB
-- Wersja PHP: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `cms`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `administratorzycms`
--

CREATE TABLE `administratorzycms` (
  `IDużytkownika` int(11) NOT NULL,
  `Login` varchar(16) NOT NULL,
  `Haslo` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Zrzut danych tabeli `administratorzycms`
--

INSERT INTO `administratorzycms` (`IDużytkownika`, `Login`, `Haslo`) VALUES
(1, 'Daniel', '202cb962ac59075b964b07152d234b70'),
(2, 'Jedrzej', 'caf1a3dfb505ffed0d024130f58c5cfa');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indexes for table `administratorzycms`
--
ALTER TABLE `administratorzycms`
  ADD PRIMARY KEY (`IDużytkownika`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `administratorzycms`
--
ALTER TABLE `administratorzycms`
  MODIFY `IDużytkownika` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
