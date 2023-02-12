-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: sql203.epizy.com
-- Czas generowania: 12 Lut 2023, 12:13
-- Wersja serwera: 10.3.27-MariaDB
-- Wersja PHP: 7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `epiz_33055031_picturebox`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `7cmbigdick`
--

CREATE TABLE `7cmbigdick` (
  `id_7cmbigdick` int(11) NOT NULL,
  `zdj_miejsce` text NOT NULL,
  `zdj_data` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `Aaa`
--

CREATE TABLE `Aaa` (
  `id_Aaa` int(11) NOT NULL,
  `zdj_miejsce` text NOT NULL,
  `zdj_data` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `bart`
--

CREATE TABLE `bart` (
  `id_bart` int(11) NOT NULL,
  `zdj_miejsce` text NOT NULL,
  `zdj_data` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `Blabla`
--

CREATE TABLE `Blabla` (
  `id_Blabla` int(11) NOT NULL,
  `zdj_miejsce` text NOT NULL,
  `zdj_data` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `chuj`
--

CREATE TABLE `chuj` (
  `id_chuj` int(11) NOT NULL,
  `zdj_miejsce` text NOT NULL,
  `zdj_data` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `example`
--

CREATE TABLE `example` (
  `id_example` int(11) NOT NULL,
  `zdj_miejsce` text NOT NULL,
  `zdj_data` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `Guli`
--

CREATE TABLE `Guli` (
  `id_Guli` int(11) NOT NULL,
  `zdj_miejsce` text NOT NULL,
  `zdj_data` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `Janusz`
--

CREATE TABLE `Janusz` (
  `id_Janusz` int(11) NOT NULL,
  `zdj_miejsce` text NOT NULL,
  `zdj_data` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `JestemPolakiem`
--

CREATE TABLE `JestemPolakiem` (
  `id_JestemPolakiem` int(11) NOT NULL,
  `zdj_miejsce` text NOT NULL,
  `zdj_data` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `kogo_obs`
--

CREATE TABLE `kogo_obs` (
  `id_kogo_obs` int(11) NOT NULL,
  `kto_obs` varchar(50) NOT NULL,
  `kogo_obs` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `kogo_obs`
--

INSERT INTO `kogo_obs` (`id_kogo_obs`, `kto_obs`, `kogo_obs`) VALUES
(1, 'polak', 'oplak');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `Krisu13PL`
--

CREATE TABLE `Krisu13PL` (
  `id_Krisu13PL` int(11) NOT NULL,
  `zdj_miejsce` text NOT NULL,
  `zdj_data` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `michuj2137`
--

CREATE TABLE `michuj2137` (
  `id_michuj2137` int(11) NOT NULL,
  `zdj_miejsce` text NOT NULL,
  `zdj_data` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `mokramamitka`
--

CREATE TABLE `mokramamitka` (
  `id_mokramamitka` int(11) NOT NULL,
  `zdj_miejsce` text NOT NULL,
  `zdj_data` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `nazwy_zdj`
--

CREATE TABLE `nazwy_zdj` (
  `id_zdj` int(11) NOT NULL,
  `czyje_zdj` varchar(50) NOT NULL,
  `zdj_path` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `OloPL`
--

CREATE TABLE `OloPL` (
  `id_OloPL` int(11) NOT NULL,
  `zdj_miejsce` text NOT NULL,
  `zdj_data` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `ostatnie_zdj`
--

CREATE TABLE `ostatnie_zdj` (
  `id_ost_zdj` int(11) NOT NULL,
  `nick_ost` varchar(50) NOT NULL,
  `ostatnie_zdj_path` varchar(250) NOT NULL,
  `opis_zdj` text NOT NULL,
  `data_dod` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `ostatnie_zdj`
--

INSERT INTO `ostatnie_zdj` (`id_ost_zdj`, `nick_ost`, `ostatnie_zdj_path`, `opis_zdj`, `data_dod`) VALUES
(2, '1', 'img_users/1/zdj/ec9387b0e0e039147c59890f7298ed31.jpeg', 'siemano', '2023-01-29 13:22:31'),
(3, '6', 'img_users/6/zdj/images.jpg', 'kocham policje', '2023-01-18 18:19:55'),
(4, '1', 'img_users/1/zdj/kremowka.jpg', 'smaczna kremówka', '2023-01-01 10:11:08'),
(5, '23', 'img_users/23/zdj/admin3.png', 'Eluwina testuje komentarze ', '2023-01-29 18:15:12'),
(6, '14', 'img_users/14/zdj/owner.png', 'meksykanin', '2023-01-29 18:49:37'),
(7, '2', 'img_users/2/zdj/channels4_profile.jpg', 'subskrybujcie mÃ³j kanaÅ‚', '2023-01-30 05:32:57'),
(8, '2', 'img_users/2/zdj/63a36492844fb_o_full.jpg', '', '2023-01-30 05:33:06'),
(9, '2', 'img_users/2/zdj/f.png', 'muj kot', '2023-01-30 05:33:20'),
(10, '2', 'img_users/2/zdj/192329_co-robi-pijak-na-chodniku.jpg', 'hahaha', '2023-01-30 05:34:36'),
(11, '2', 'img_users/2/zdj/indeks.jpg', 'haha memy', '2023-01-30 05:34:46'),
(12, '2', 'img_users/2/zdj/3f26daa78c35b8d16ec6a898bf88d858.jpg', 'HEHEHE!!!!!!!1!!!1!1!1', '2023-01-30 05:36:21'),
(13, '2', 'img_users/2/zdj/images.jpg', 'moja ulubiona gra', '2023-01-30 05:37:01'),
(14, '9', 'img_users/9/zdj/kotpost.jpg', 'halo siemka kocham koty i inne takie zwierzaki', '2023-02-01 09:38:52'),
(15, '9', 'img_users/9/zdj/kotprze.jpg', 'halo slychac mnie>\r\n', '2023-02-01 09:40:28'),
(16, '10', 'img_users/10/zdj/pies.jpg', 'pies', '2023-02-01 09:42:29'),
(17, '10', 'img_users/10/zdj/pies2.jpg', '', '2023-02-01 09:42:47'),
(18, '12', 'img_users/12/zdj/okon.jpg', '30 cm okon\r\n', '2023-02-01 09:43:52'),
(19, '12', 'img_users/12/zdj/szczupak.jpg', '2m 30 obwod\r\n', '2023-02-01 09:44:45'),
(20, '16', 'img_users/16/zdj/dlugopis.jpg', 'jednak znalazlem dlugopis, tu jest\r\n', '2023-02-01 09:45:38'),
(21, '16', 'img_users/16/zdj/notatak.jpg', 'to polski\r\n', '2023-02-01 09:46:29'),
(22, '30', 'img_users/30/zdj/marcel.jpg', 'to ja\r\nprzysto?', '2023-02-01 09:48:21'),
(23, '30', 'img_users/30/zdj/dowcip.jpg', 'smieszne :D\r\n', '2023-02-01 09:49:05'),
(24, '50', 'img_users/50/zdj/1200px-ZSL_clover.svg.png', 'JOL', '2023-02-06 07:09:22'),
(25, '47', 'img_users/47/zdj/indeks2.jpg', '', '2023-02-06 07:11:00'),
(26, '52', 'img_users/52/zdj/26807E65-E45D-43C3-AC2B-965C5F9CC39D.jpeg', 'Pozdrawiam', '2023-02-06 07:11:59');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `peepee`
--

CREATE TABLE `peepee` (
  `id_peepee` int(11) NOT NULL,
  `zdj_miejsce` text NOT NULL,
  `zdj_data` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `penis`
--

CREATE TABLE `penis` (
  `id_penis` int(11) NOT NULL,
  `zdj_miejsce` text NOT NULL,
  `zdj_data` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `Plpllp`
--

CREATE TABLE `Plpllp` (
  `id_Plpllp` int(11) NOT NULL,
  `zdj_miejsce` text NOT NULL,
  `zdj_data` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `teodor`
--

CREATE TABLE `teodor` (
  `id_teodor` int(11) NOT NULL,
  `zdj_miejsce` text NOT NULL,
  `zdj_data` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `test`
--

CREATE TABLE `test` (
  `id_test` int(11) NOT NULL,
  `zdj_miejsce` text NOT NULL,
  `zdj_data` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `Tmp_Wilku`
--

CREATE TABLE `Tmp_Wilku` (
  `id_Tmp_Wilku` int(11) NOT NULL,
  `zdj_miejsce` text NOT NULL,
  `zdj_data` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `turbogej`
--

CREATE TABLE `turbogej` (
  `id_turbogej` int(11) NOT NULL,
  `zdj_miejsce` text NOT NULL,
  `zdj_data` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `users`
--

CREATE TABLE `users` (
  `id_users` int(11) NOT NULL,
  `user` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `obserwowani` int(9) NOT NULL,
  `obserwatorzy` int(9) NOT NULL,
  `opis` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `users`
--

INSERT INTO `users` (`id_users`, `user`, `password`, `obserwowani`, `obserwatorzy`, `opis`) VALUES
(1, 'polak', 'cos', 0, 0, 'To moj opis.'),
(2, 'oplak', 'cos', 0, 0, 'eluwina'),
(3, 'alek Bytkowiak', 'cos', 0, 0, 'kocham świat'),
(4, 'niekt', 'cos', 0, 0, 'lorem ipsum'),
(5, 'miloszskotak', 'cos', 0, 0, 'jestem fanem liverpoolu :)'),
(6, 'bartekochota', 'cos', 0, 0, 'halo halo jak mnie slychac'),
(7, 'beniaminsokolowski', 'cos', 0, 0, 'kocham psy'),
(8, 'andrzejkowalski', 'cos', 0, 0, 'czesc, jestem andrzej :)'),
(9, 'igorwisniewski', 'cos', 0, 0, 'ale mam opis smieszny '),
(10, 'szklaruk143', 'cos', 0, 0, 'kocham grac w lola'),
(11, 'xxx_czolgista_XXX', 'cos', 0, 0, 'moj nick WOT: HUBKOB11'),
(12, 'wedkarz2115', 'cos', 0, 0, 'obczajcie moje foty ryb'),
(13, 'xx_pro100_w_banie_xx', 'cos', 0, 0, 'gram w csa'),
(14, 'kicia12', 'cos', 0, 0, 'lubie koty'),
(15, 'michal2003pl', 'cos', 0, 0, 'Imie: Michal\r\nLat: 20\r\nshe/they/tank'),
(16, 'dawid2902', 'cos', 0, 0, 'nie ma opisu bo nie ma dlugopisu'),
(17, 'adrianstrzelacz', 'cos', 0, 0, 'halohalohalo, ktos w csa?'),
(18, 'lukasz99124', 'cos', 0, 0, 'fikasz?'),
(19, 'lysy2003pl', 'cos', 0, 0, 'kocham programowac'),
(20, 'rudyrydz12', 'cos', 0, 0, 'halo'),
(23, 'test', 'cos', 0, 0, 'Kocham Pieski i kotki :) '),
(30, 'marcel', 'cos', 0, 0, 'Siema to moj nowy opis'),
(31, 'teodor1', 'cos', 0, 0, 'dziala'),
(32, 'Krisu13PL', 'Krisu13PL#', 0, 0, 'Jestem Olivier i gram w fortnite\r\n'),
(33, 'wisniewskii', 'cos', 0, 0, 'halo jestem Igor w.'),
(34, 'turbogej', 'kupa123', 0, 0, ''),
(35, '7cmbigdick', 'admin1', 0, 0, 'Mam wystarczajÄ…cego'),
(36, 'bart', 'bart1', 0, 0, ''),
(37, 'OloPL', 'ASD123', 0, 0, ''),
(38, 'example', 'example1!', 0, 0, ''),
(39, 'blabla', '123', 0, 0, ''),
(40, 'Janusz', 'Siema123', 0, 0, ''),
(41, 'JestemPolakiem', 'JPL', 0, 0, ''),
(42, 'Wilkuuu', 'qwerty123', 0, 0, 'Siemka jestem pro playerem w Fortnite. Dodawajcie Tmp_Wilku'),
(43, 'mamitka', 'mokramamitka3', 0, 0, ''),
(44, 'mokramamitka', 'mokramamitka#', 0, 0, ''),
(45, 'peepee', 'poopoo', 0, 0, ''),
(46, 'yes', '1234', 0, 0, ''),
(47, 'potÄ™Å¼nyinformatyk', 'duzy123', 0, 0, 'Kocham Android Studio.'),
(48, 'Tmp_Wilku', 'qwerty', 0, 0, ''),
(49, 'michuj2137', 'michuj21371', 0, 0, ''),
(50, 'XXXD', 'lol', 0, 0, 'KOLA'),
(51, 'Janus', '123o', 0, 0, ''),
(52, 'Plpllp', '123', 0, 0, 'Poz'),
(53, 'MedÅ‚ko', 'MedÅ‚ko', 0, 0, ''),
(54, 'Guli', '1234', 0, 0, ''),
(55, 'Aaa', '123', 0, 0, 'Bdb');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `Wilkuuu`
--

CREATE TABLE `Wilkuuu` (
  `id_Wilkuuu` int(11) NOT NULL,
  `zdj_miejsce` text NOT NULL,
  `zdj_data` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `wisniewskii`
--

CREATE TABLE `wisniewskii` (
  `id_wisniewskii` int(11) NOT NULL,
  `zdj_miejsce` text NOT NULL,
  `zdj_data` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `XXXD`
--

CREATE TABLE `XXXD` (
  `id_XXXD` int(11) NOT NULL,
  `zdj_miejsce` text NOT NULL,
  `zdj_data` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `yes`
--

CREATE TABLE `yes` (
  `id_yes` int(11) NOT NULL,
  `zdj_miejsce` text NOT NULL,
  `zdj_data` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `7cmbigdick`
--
ALTER TABLE `7cmbigdick`
  ADD PRIMARY KEY (`id_7cmbigdick`);

--
-- Indeksy dla tabeli `Aaa`
--
ALTER TABLE `Aaa`
  ADD PRIMARY KEY (`id_Aaa`);

--
-- Indeksy dla tabeli `bart`
--
ALTER TABLE `bart`
  ADD PRIMARY KEY (`id_bart`);

--
-- Indeksy dla tabeli `Blabla`
--
ALTER TABLE `Blabla`
  ADD PRIMARY KEY (`id_Blabla`);

--
-- Indeksy dla tabeli `chuj`
--
ALTER TABLE `chuj`
  ADD PRIMARY KEY (`id_chuj`);

--
-- Indeksy dla tabeli `example`
--
ALTER TABLE `example`
  ADD PRIMARY KEY (`id_example`);

--
-- Indeksy dla tabeli `Guli`
--
ALTER TABLE `Guli`
  ADD PRIMARY KEY (`id_Guli`);

--
-- Indeksy dla tabeli `Janusz`
--
ALTER TABLE `Janusz`
  ADD PRIMARY KEY (`id_Janusz`);

--
-- Indeksy dla tabeli `JestemPolakiem`
--
ALTER TABLE `JestemPolakiem`
  ADD PRIMARY KEY (`id_JestemPolakiem`);

--
-- Indeksy dla tabeli `kogo_obs`
--
ALTER TABLE `kogo_obs`
  ADD PRIMARY KEY (`id_kogo_obs`);

--
-- Indeksy dla tabeli `Krisu13PL`
--
ALTER TABLE `Krisu13PL`
  ADD PRIMARY KEY (`id_Krisu13PL`);

--
-- Indeksy dla tabeli `michuj2137`
--
ALTER TABLE `michuj2137`
  ADD PRIMARY KEY (`id_michuj2137`);

--
-- Indeksy dla tabeli `mokramamitka`
--
ALTER TABLE `mokramamitka`
  ADD PRIMARY KEY (`id_mokramamitka`);

--
-- Indeksy dla tabeli `nazwy_zdj`
--
ALTER TABLE `nazwy_zdj`
  ADD PRIMARY KEY (`id_zdj`);

--
-- Indeksy dla tabeli `OloPL`
--
ALTER TABLE `OloPL`
  ADD PRIMARY KEY (`id_OloPL`);

--
-- Indeksy dla tabeli `ostatnie_zdj`
--
ALTER TABLE `ostatnie_zdj`
  ADD PRIMARY KEY (`id_ost_zdj`);

--
-- Indeksy dla tabeli `peepee`
--
ALTER TABLE `peepee`
  ADD PRIMARY KEY (`id_peepee`);

--
-- Indeksy dla tabeli `penis`
--
ALTER TABLE `penis`
  ADD PRIMARY KEY (`id_penis`);

--
-- Indeksy dla tabeli `Plpllp`
--
ALTER TABLE `Plpllp`
  ADD PRIMARY KEY (`id_Plpllp`);

--
-- Indeksy dla tabeli `teodor`
--
ALTER TABLE `teodor`
  ADD PRIMARY KEY (`id_teodor`);

--
-- Indeksy dla tabeli `test`
--
ALTER TABLE `test`
  ADD PRIMARY KEY (`id_test`);

--
-- Indeksy dla tabeli `Tmp_Wilku`
--
ALTER TABLE `Tmp_Wilku`
  ADD PRIMARY KEY (`id_Tmp_Wilku`);

--
-- Indeksy dla tabeli `turbogej`
--
ALTER TABLE `turbogej`
  ADD PRIMARY KEY (`id_turbogej`);

--
-- Indeksy dla tabeli `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_users`);

--
-- Indeksy dla tabeli `Wilkuuu`
--
ALTER TABLE `Wilkuuu`
  ADD PRIMARY KEY (`id_Wilkuuu`);

--
-- Indeksy dla tabeli `wisniewskii`
--
ALTER TABLE `wisniewskii`
  ADD PRIMARY KEY (`id_wisniewskii`);

--
-- Indeksy dla tabeli `XXXD`
--
ALTER TABLE `XXXD`
  ADD PRIMARY KEY (`id_XXXD`);

--
-- Indeksy dla tabeli `yes`
--
ALTER TABLE `yes`
  ADD PRIMARY KEY (`id_yes`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `7cmbigdick`
--
ALTER TABLE `7cmbigdick`
  MODIFY `id_7cmbigdick` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT dla tabeli `Aaa`
--
ALTER TABLE `Aaa`
  MODIFY `id_Aaa` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT dla tabeli `bart`
--
ALTER TABLE `bart`
  MODIFY `id_bart` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT dla tabeli `Blabla`
--
ALTER TABLE `Blabla`
  MODIFY `id_Blabla` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT dla tabeli `chuj`
--
ALTER TABLE `chuj`
  MODIFY `id_chuj` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT dla tabeli `example`
--
ALTER TABLE `example`
  MODIFY `id_example` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT dla tabeli `Guli`
--
ALTER TABLE `Guli`
  MODIFY `id_Guli` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT dla tabeli `Janusz`
--
ALTER TABLE `Janusz`
  MODIFY `id_Janusz` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT dla tabeli `JestemPolakiem`
--
ALTER TABLE `JestemPolakiem`
  MODIFY `id_JestemPolakiem` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT dla tabeli `kogo_obs`
--
ALTER TABLE `kogo_obs`
  MODIFY `id_kogo_obs` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT dla tabeli `Krisu13PL`
--
ALTER TABLE `Krisu13PL`
  MODIFY `id_Krisu13PL` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT dla tabeli `michuj2137`
--
ALTER TABLE `michuj2137`
  MODIFY `id_michuj2137` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT dla tabeli `mokramamitka`
--
ALTER TABLE `mokramamitka`
  MODIFY `id_mokramamitka` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT dla tabeli `nazwy_zdj`
--
ALTER TABLE `nazwy_zdj`
  MODIFY `id_zdj` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT dla tabeli `OloPL`
--
ALTER TABLE `OloPL`
  MODIFY `id_OloPL` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT dla tabeli `ostatnie_zdj`
--
ALTER TABLE `ostatnie_zdj`
  MODIFY `id_ost_zdj` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT dla tabeli `peepee`
--
ALTER TABLE `peepee`
  MODIFY `id_peepee` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT dla tabeli `penis`
--
ALTER TABLE `penis`
  MODIFY `id_penis` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT dla tabeli `Plpllp`
--
ALTER TABLE `Plpllp`
  MODIFY `id_Plpllp` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT dla tabeli `teodor`
--
ALTER TABLE `teodor`
  MODIFY `id_teodor` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT dla tabeli `test`
--
ALTER TABLE `test`
  MODIFY `id_test` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT dla tabeli `Tmp_Wilku`
--
ALTER TABLE `Tmp_Wilku`
  MODIFY `id_Tmp_Wilku` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT dla tabeli `turbogej`
--
ALTER TABLE `turbogej`
  MODIFY `id_turbogej` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT dla tabeli `users`
--
ALTER TABLE `users`
  MODIFY `id_users` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT dla tabeli `Wilkuuu`
--
ALTER TABLE `Wilkuuu`
  MODIFY `id_Wilkuuu` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT dla tabeli `wisniewskii`
--
ALTER TABLE `wisniewskii`
  MODIFY `id_wisniewskii` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT dla tabeli `XXXD`
--
ALTER TABLE `XXXD`
  MODIFY `id_XXXD` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT dla tabeli `yes`
--
ALTER TABLE `yes`
  MODIFY `id_yes` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
