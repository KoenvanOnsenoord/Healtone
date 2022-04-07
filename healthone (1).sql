-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 07 apr 2022 om 21:33
-- Serverversie: 10.4.21-MariaDB
-- PHP-versie: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `healthone`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `catogories`
--

CREATE TABLE `catogories` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `picture` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `catogories`
--

INSERT INTO `catogories` (`id`, `name`, `picture`) VALUES
(1, 'Roeitrainer', 'categories/roeitrainer.jpg'),
(2, 'Crosstrainer', 'categories/crosstrainer.jpg'),
(3, 'Hometrainer', 'categories/hometrainer.jpg'),
(4, 'Loopband', 'categories/loopband.jpg');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `picture` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `product`
--

INSERT INTO `product` (`id`, `name`, `picture`, `description`, `category_id`) VALUES
(0, 'Tunturi Cardio Fit R20 Roeier', 'categories/roeitrainer/roeitrainer 1.jpg', 'Fitness is fun! Eén van de meest efficiënte manieren om je lichaam te trainen is met een roeitrainer. Met de Tunturi Cardio Fit R20 ga je thuis aan de slag. Deze roeibeweging zet bijna alle belangrijke spieren aan het werk.\r\n', 1),
(1, 'Tunturi Cardio Fit C30', 'categories/crosstrainer/cr1.jpg', 'Breng of hou je lichaam in shape: met deze Tunturi Cardio Fit C30 Crosstrainer bepaal je je eigen tempo en train je op je eigen niveau naar een persoonlijk trainingsdoel. Ga aan de slag met de belangrijkste trainingsresultaten en kies voor lichte tot matige trainingsintensiteit.', 2),
(2, 'VirtuFit CTR 1.1', 'categories/crosstrainer/cr2.jpg', 'De VirtuFit CTR 1.1 Crosstrainer gebruik je om in conditie te blijven in je eigen huis. Deze plaatsbesparende crosstrainer past ook gemakkelijk in minder grote woningen. Je gebruikt de wielen om hem gemakkelijk te verplaatsen en aan de kant te zetten na het sporten. De crosstrainer is stevig en heeft een prettige paslengte. De met matte lak afgewerkte framedelen en de hoogglans afgewerkte behuizing zorgen voor een fraaie uitstraling.', 2),
(3, 'De Focus Fitness Fox 3', 'categories/crosstrainer/cr3.jpg', 'De Focus Fitness Fox 3 is de ideale crosstrainer voor iedere thuissporter. Deze crosstrainer geeft je een stabiele training en is fluisterstil in gebruik. De verstelbare voetpedalen van de Fox 3 maken deze crosstrainer geschikt voor verschillende lichaamslengtes. Daarnaast maakt het vliegwiel, met een gewicht van 7 kg, je training comfortabel en zorgt dit vliegwiel voor een mooie ronde rotatie. Door deze factoren heeft de Focus Fitness Fox 3 in het verleden diverse Kieskeurig awards gewonnen.', 2),
(4, 'Tectake Crosstrainer', 'categories/crosstrainer/cr4.jpg', 'Deze crosstrainer is ideaal om thuis af te vallen, fit te worden of om aan je conditie te werken. De trainer is belastbaar tot 110 kg en voorzien van een functie voor hartslagmeting. Ook is de weerstand te verzwaren en de stoel te verstellen. ', 2),
(5, 'De Newton Fitness CT700', 'categories/crosstrainer/cr5.jpg', 'Compact, stabiel en functioneel. De Newton Fitness CT700 voldoet aan de hoge kwaliteitseisen en wordt aangeprijsd in het hoge segment binnen zijn prijsklasse. Dit wordt mede beïnvloed door het professionele railsysteem. Verder kunt u middels het LCD display verschillende voorgeprogrammeerde programma\'s instellen, of andere functies bekijken.', 2),
(7, 'Specifit Hometrainer', 'categories/hometrainer/ht1.jpg', 'De Specifit hometrainer is zeer stabiel, duurzaam, fluisterstil en biedt daarnaast meerdere trainingsmogelijkheden en zelfs de mogelijkheid voor een lichamelijk onderzoek. Geschikt voor de gevorderde fietser, maar vanwege de scherpe prijs ook voor de beginner.\nHet vliegwiel aan de achterkant zorgt ervoor dat de druk op de voorkant van de benen komt te staan, waardoor de houding sportief aanvoelt. Er wordt gebruikt gemaakt van degelijke materialen waardoor de fiets ook altijd stabiel blijft staan. Oneffenheden in de vloer kunnen worden opgevangen door middel van de verstelbare poten.', 3),
(9, 'Flow fitness Roeitrainer Perform W7i', 'categories/roeitrainer/roeitrainer 2.jpg', 'De Flow Fitness roeitrainer Perform W7i is een robuuste en strakke waterroeier die je thuis kunt gebruiken, maar die ook geschikt is voor commercieel gebruik. Het is een roeitrainer van hoge kwaliteit, die tevens toegang biedt tot trainingen met iConsole en Kinomap.', 1),
(10, 'Infiniti R-100 IR Roeitrainer', 'categories/roeitrainer/roeitrainer 3.jpg', 'Bij de ontwikkeling van de Infiniti R-100 IR roeitrainer is allereerst rekening gehouden met een natuurgetrouwe roeibeleving. Daarom heeft deze roeitrainer een dubbel weerstandssysteem. Mede hierdoor biedt de Infiniti R-100 IR u exact dezelfde roeibeleving en kwaliteit van de zware luchtroeiers uit de sportschool. Hierbij zorgt het zware luchtsysteem voor de basisweerstand en de natuurgetrouwe roeibeleving. Het magneetsysteem is er vervolgens voor extra trainingsweerstand. Deze weerstand wordt vervolgens geheel automatisch voor u geregeld door de unieke trainingscomputer. ', 1),
(11, 'Hammer Roeitrainer Ocean One', 'categories/roeitrainer/roeitrainer 4.jpg', 'Met de Ocean One train je met de kracht van water wat je een fantastisch en realistisch roeigevoel geeft. De weerstand kan op elk moment worden aangepast via het vulniveau in de transparante watertank. Hierdoor kun je de trainingsintensiteit aanpassen aan jouw individuele behoeften. Het kabbelen van het water katapulteert je automatisch in de juiste trainingsstemming en zorgt voor motivatie voor je training!', 1),
(12, 'Christopeit Sport Roeitrainer', 'categories/roeitrainer/roeitrainer 5.jpeg', ' Efficiënte bovenlichaam-, schouder-, rug-, arm- en beenspierentraining\r\n Ideaal voor rompoefeningen\r\n', 1);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `review`
--

CREATE TABLE `review` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `description` text NOT NULL,
  `stars` int(11) NOT NULL,
  `product_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `review`
--

INSERT INTO `review` (`id`, `name`, `date`, `description`, `stars`, `product_id`) VALUES
(13, 'Koen', '2021-12-01', 'Goed werkend apparaatje', 5, 2),
(15, 'Koen', '2022-01-19', 'Mooi product', 5, 3),
(16, 'Koen', '2022-01-21', 'Mooi', 5, 2),
(17, 'Customer', '2022-02-25', 'Mooi apparaat', 3, 3),
(18, 'Kees', '2022-02-25', 'Perfect', 5, 11),
(19, 'Kees', '2022-02-25', 'super goed ', 5, 0),
(20, 'Demo', '2022-02-25', 'top', 5, 0),
(21, 'test 1', '2022-02-25', 'mooi', 5, 0);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `times`
--

CREATE TABLE `times` (
  `id` int(11) NOT NULL,
  `dag` varchar(255) NOT NULL,
  `tijd` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `times`
--

INSERT INTO `times` (`id`, `dag`, `tijd`) VALUES
(1, 'Maandag', '07:00 - 20:00'),
(2, 'Dinsdag', '08:00 - 20:00'),
(3, 'Woensdag', '07:00 - 20:00 '),
(4, 'Donderdag', '08:00 - 20:00'),
(5, 'Vrijdag', '07:00 - 20:30'),
(6, 'Zaterdag', '08:00 - 13:00 '),
(7, 'Zondag', '08:00 - 13:00');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `role` enum('member','admin','','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `user`
--

INSERT INTO `user` (`id`, `email`, `password`, `first_name`, `last_name`, `role`) VALUES
(1, 'koenvanonsenoord@gmail.com', '1234', 'Koen', 'van Onsenoord', 'admin'),
(2, 'piet@gmail.com', 'qwerty', 'dada', 'daddda', 'member'),
(3, 'jan@fgd.nl', 'qwerty', 'sdfsd', 'fafa', 'member'),
(6, 'jan@fgd.nl', 'qwerty', 'dasdsa', 'dadas', 'member'),
(7, 'kees@mail.com', 'qwerty', 'Koen', 'Klaassen', 'member'),
(8, 'test@gmail.com', '1234', 'test', 'test', 'member'),
(9, 'test@gmail.com', '1234', 'test', 'test', 'member'),
(10, 'test@gmail.com', '1234', 'test', 'test', 'member'),
(11, 'testaccount@mail.com', '1234', 'test', 'test', 'member'),
(12, 'koen2@mail.com', '1234', 'koen', '2', 'member'),
(13, 'review@gmail.com', 'qwerty', 'review', 'test', 'member'),
(14, 'kees@mail.com', 'qwerty', 'kees', 'vd spek', 'member'),
(15, 'testtesttest@mail.com', 'qwerty', 'testtesttest', 'asasasasas', 'member'),
(16, 'demoaccount@gmail.com', 'qwerty', 'Demo', 'Account', 'member'),
(17, 'new@gmail.com', '1234', 'new', 'client', 'member');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `catogories`
--
ALTER TABLE `catogories`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexen voor tabel `times`
--
ALTER TABLE `times`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `catogories`
--
ALTER TABLE `catogories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT voor een tabel `review`
--
ALTER TABLE `review`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT voor een tabel `times`
--
ALTER TABLE `times`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT voor een tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- Beperkingen voor geëxporteerde tabellen
--

--
-- Beperkingen voor tabel `catogories`
--
ALTER TABLE `catogories`
  ADD CONSTRAINT `catogories_ibfk_1` FOREIGN KEY (`id`) REFERENCES `product` (`id`);

--
-- Beperkingen voor tabel `review`
--
ALTER TABLE `review`
  ADD CONSTRAINT `review_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
