-- phpMyAdmin SQL Dump
-- version 4.4.15.10
-- https://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 25, 2020 at 08:07 PM
-- Server version: 10.2.25-MariaDB
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `if19_raimond_la_1`
--

-- --------------------------------------------------------

--
-- Table structure for table `Kasutaja`
--

CREATE TABLE IF NOT EXISTS `Kasutaja` (
  `ID` int(11) NOT NULL,
  `eesnimi` varchar(30) NOT NULL,
  `perekonnanimi` varchar(30) NOT NULL,
  `parool` varchar(60) NOT NULL,
  `email` varchar(255) NOT NULL,
  `roll` int(11) DEFAULT 0,
  `phonenr` int(15) DEFAULT NULL,
  `disabled` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Kasutaja`
--

INSERT INTO `Kasutaja` (`ID`, `eesnimi`, `perekonnanimi`, `parool`, `email`, `roll`, `phonenr`, `disabled`) VALUES
(1, 'Mark', 'Liiv', 'fmnjmkhj', 'mark.liiv@gmail.com', 0, NULL, NULL),
(2, 'Oliver', 'Egg', 'hgkghkgh', 'geeOllie@hot.ee', 1, NULL, NULL),
(3, 'Gasha', 'Basha', 'ghkghk', 'gashab@gmail.com', 2, NULL, NULL),
(4, 'Piho', 'Pihusti', '$2y$12$5646e154f8dd000e2cb7buVIU87tz8kAITAKuTQAFT2lsJ.ssSCK.', 'pihjo.pihjusti@pihustan.com', 0, NULL, NULL),
(5, 'Vahur', 'Koor', '$2y$12$7e29351f70b2a043f068aexkSjaDnP3not70zRhIUXsi0rb9NhfKm', 'vahukoor@vahusti.com', 0, NULL, NULL),
(7, 'Projekti', 'Juht', '$2y$12$501d082f80db0c3f749eeOnWl8NxmBE1iWEpx2PEPcHaI6J14YT0S', 'projektijuht@gmail.com', 2, NULL, NULL),
(8, 'Peeter', 'Peterson', '$2y$12$273026d951c2aff3d5728eRFqd7C5D1JmebJ.kw.4w2A.rB6gNG82', 'pets@gmail.com', 0, NULL, NULL),
(9, '1', '1', '$2y$12$bd3c82bb5e9333354dcffeEtccO/N8KaVktKE4J4BVx8jMdp.9c6O', 'Peeter@gmail.com', 0, NULL, NULL),
(10, 'Raimond', 'Laatspera', '$2y$12$6328762bc9d045f13455cuRyWWZxC1tsjt4UiJ5ejevfeZ2FsCe5a', 'raimondol1999@gmail.com', 0, NULL, NULL),
(11, 'Priit', 'Sauer', '$2y$12$8d5f91191913de261027duOy8KYKnHwOaTRxTzCD2Fp9U4LgTjifO', 'timemate@lala', 0, NULL, NULL),
(12, 'tanel', 'tanel', '$2y$12$b6e18ebd4a053a0709ce6u229tr5siYaN7QIXup4iFdDH4am6adkK', 'tanel@tanel.com', 0, NULL, NULL),
(13, 'mati', 'foti', '$2y$12$7e428ca20c4f77e4149d4ug/0RSDUsETlhyVczeWXSyn4OM8FSF4C', 'mati@hot.ee', 0, NULL, NULL),
(14, 'rene', 'raidmaa', '$2y$12$a62392ebaa6f6b1a48defuR46dM4ER6YU4kX6aaYXUdClP.QmnR8y', 'rene.raidmaa@gmail.com', 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `Kontakt`
--

CREATE TABLE IF NOT EXISTS `Kontakt` (
  `User_id` int(11) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Eesnimi` varchar(20) NOT NULL,
  `Perekonnanimi` varchar(20) NOT NULL,
  `Teema` varchar(30) NOT NULL,
  `Sonum` varchar(300) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Kontakt`
--

INSERT INTO `Kontakt` (`User_id`, `Email`, `Eesnimi`, `Perekonnanimi`, `Teema`, `Sonum`) VALUES
(1, 'pets@peeter.peetrus', 'Peeter', 'Peterson', 'Peetril on suur mureee', 'suur mure on mure'),
(2, 'pets@peeter.peetrus', 'Peeter', 'Peterson', 'Peetril on suur mureee', 'Peetter ei tea mida teha, palun abi'),
(3, 'jaanus@gmail.com', 'Jaanus', 'Jaanus', 'Jaanus vajab kÃ¤hku abiiii', 'Palun abi kiiret. aitÃ¤h'),
(4, 'jaanus@gmail.com', 'Jaanus', 'Jaanus', 'suur abi palun', 'TÃ¤na nÃ¤gin ma loomaaias elevanti'),
(20, 'jaannus@jinsadsa.com', 'asdddddd', 'asddddddddddd', 'sdaaaaaaaaa', '&lt;span&gt;&lt;/span&gt;&lt;br&gt;'),
(21, 'jaannus@jinsadsa.com', 'asdddddd', 'asddddddddddd', 'sdaaaaaaaaa', '&lt;span&gt;&lt;/span&gt;&lt;br&gt;'),
(22, 'Peeter@gmail.com', 'Peeter', 'Peterson', 'Peetril on suur mureee', 'Tehnika lÃ¤ks puru'),
(23, 'Peeter@gmail.com', 'pets', 'Peterson', 'Peetril on suur mureee', 'Mul pole masina vÃ¤rki ikkagi vaja'),
(24, 'projekt@juht.com', 'Projektimees', 'projektimees2', 'Tegija mees 3', 'olen suur mure'),
(25, 'gee@mail.ee', 'gfhgf', 'hfghfg', 'hgfhf', 'bvjhnvbbbbbbbbbbbbbbn'),
(26, 'gee@mail.ee', 'gfhgf', 'hfghfg', 'hgfhf', 'ytttttttttttttttttt'),
(27, 'gfhgf@mazda.com', 'fghfg', 'fgh', 'hfghfg', 'fghfghfgh'),
(28, 'projekt@juht.com', 'Projekti', 'Juht', 'Suur mure kohalevedamisega', 'Mulle meeldib teie leht. aitÃ¤h'),
(29, '1@1.com', '1', '1', '1', '1'),
(30, 'sdfsf@gmail.com', 'sdfs', 'dsf', 'dsf', 'sdfds'),
(31, 'sdsadsad@sadadas', 'sdsadsad', 'dsadsad', 'dsadadsad', 'sdsadad'),
(32, 'dsfs@jodnsaf.com', 'i0dasjdas', 'asfasf', 'asfsafsa', 'fasfsaaaaa'),
(33, 'qa@mail.ee', 'a', 'a', 'a', 'a'),
(34, 'hello@gmail.com', 'hello', 'hello', 'asd', 'asd'),
(35, 'hgfhfgh@hohgg.ee', 'Okei', 'hfghfg', 'Teema', 'Test');

-- --------------------------------------------------------

--
-- Table structure for table `Ladu`
--

CREATE TABLE IF NOT EXISTS `Ladu` (
  `ID` int(11) NOT NULL,
  `Tootekogus` int(11) DEFAULT NULL,
  `Toode_ID` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Ladu`
--

INSERT INTO `Ladu` (`ID`, `Tootekogus`, `Toode_ID`) VALUES
(1, 1, 1),
(2, 10, 2),
(3, 12, 3);

-- --------------------------------------------------------

--
-- Table structure for table `Portfoolio`
--

CREATE TABLE IF NOT EXISTS `Portfoolio` (
  `ID` int(11) NOT NULL,
  `name` varchar(60) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `pictureURL` varchar(255) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Portfoolio`
--

INSERT INTO `Portfoolio` (`ID`, `name`, `description`, `pictureURL`) VALUES
(1, 'Pidu1', 'VÄGEV', 'picture1.jpg'),
(2, 'Pidu2', 'Oppa', 'picture2.jpg'),
(3, 'Pidu3', 'OWO What''s THIS', 'picture3.jpg'),
(4, 'pidu4', 'ÄÄÄÄÄÄÄÄÄÄÄÄÄÄÄÄÄÄÄÄÄ', 'picture4.jpg'),
(5, 'pidu5', 'PogU', 'picture5.jpg'),
(6, 'pidu6', 'DESPACITO KUI 1 MILJARD VAATAJAT', 'picture6.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `Soiduk`
--

CREATE TABLE IF NOT EXISTS `Soiduk` (
  `ID` int(11) NOT NULL,
  `nimi` varchar(255) NOT NULL,
  `kategooria` varchar(30) NOT NULL,
  `hind` double(20,0) NOT NULL,
  `numbrimark` varchar(10) NOT NULL,
  `markmed` varchar(500) NOT NULL,
  `pilt` varchar(200) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Soiduk`
--

INSERT INTO `Soiduk` (`ID`, `nimi`, `kategooria`, `hind`, `numbrimark`, `markmed`, `pilt`) VALUES
(1, 'Mercedes-Benz Sprinter', 'Kaubik', 40, 'RTK001', 'Sõidab', 'pic'),
(2, 'Merceddes-Benz Sprinter', 'Furgoon', 60, 'RTK002', 'Liigub hästi', 'pic'),
(3, 'Scania V8', 'Rekka', 120, 'SCN001', 'Suur autu', 'pic');

-- --------------------------------------------------------

--
-- Table structure for table `Tellimus`
--

CREATE TABLE IF NOT EXISTS `Tellimus` (
  `ID` int(11) NOT NULL,
  `Kasutaja_ID` int(11) NOT NULL,
  `Soiduk_ID` int(11) DEFAULT NULL,
  `kuupaev` date NOT NULL,
  `kellaaeg` time NOT NULL,
  `Ladu_ID` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Tellimus`
--

INSERT INTO `Tellimus` (`ID`, `Kasutaja_ID`, `Soiduk_ID`, `kuupaev`, `kellaaeg`, `Ladu_ID`) VALUES
(1, 1, NULL, '2020-05-13', '04:24:00', 1),
(2, 2, 3, '2020-05-15', '15:00:00', 2),
(3, 3, 3, '2020-05-05', '12:44:59', 3);

-- --------------------------------------------------------

--
-- Table structure for table `Toode`
--

CREATE TABLE IF NOT EXISTS `Toode` (
  `nimi` varchar(255) NOT NULL,
  `kategooria` varchar(30) NOT NULL,
  `hind` double(20,0) NOT NULL,
  `markmed` varchar(500) DEFAULT NULL,
  `pilt` varchar(200) DEFAULT NULL,
  `kogus` int(11) NOT NULL,
  `ID` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Toode`
--

INSERT INTO `Toode` (`nimi`, `kategooria`, `hind`, `markmed`, `pilt`, `kogus`, `ID`) VALUES
('Avolites Quartz', 'Puldid', 100, 'Töötab', 'pic', 1, 1),
('Martin MH3', 'Liikuvpea', 25, 'Töötab ka', 'pic', 12, 2),
('AudioFocus Ares 8a', 'PA-top', 12, 'Mütsub', 'pic', 12, 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Kasutaja`
--
ALTER TABLE `Kasutaja`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `Kontakt`
--
ALTER TABLE `Kontakt`
  ADD PRIMARY KEY (`User_id`);

--
-- Indexes for table `Ladu`
--
ALTER TABLE `Ladu`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `Ladu_Toode` (`Toode_ID`);

--
-- Indexes for table `Portfoolio`
--
ALTER TABLE `Portfoolio`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `Soiduk`
--
ALTER TABLE `Soiduk`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `Tellimus`
--
ALTER TABLE `Tellimus`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `Tellimus_Kasutaja` (`Kasutaja_ID`),
  ADD KEY `Tellimus_Ladu` (`Ladu_ID`),
  ADD KEY `Tellimus_Soiduk` (`Soiduk_ID`);

--
-- Indexes for table `Toode`
--
ALTER TABLE `Toode`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Kasutaja`
--
ALTER TABLE `Kasutaja`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `Kontakt`
--
ALTER TABLE `Kontakt`
  MODIFY `User_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=36;
--
-- AUTO_INCREMENT for table `Ladu`
--
ALTER TABLE `Ladu`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `Portfoolio`
--
ALTER TABLE `Portfoolio`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `Soiduk`
--
ALTER TABLE `Soiduk`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `Tellimus`
--
ALTER TABLE `Tellimus`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `Toode`
--
ALTER TABLE `Toode`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `Ladu`
--
ALTER TABLE `Ladu`
  ADD CONSTRAINT `Ladu_Toode` FOREIGN KEY (`Toode_ID`) REFERENCES `Toode` (`ID`);

--
-- Constraints for table `Tellimus`
--
ALTER TABLE `Tellimus`
  ADD CONSTRAINT `Tellimus_Kasutaja` FOREIGN KEY (`Kasutaja_ID`) REFERENCES `Kasutaja` (`ID`),
  ADD CONSTRAINT `Tellimus_Ladu` FOREIGN KEY (`Ladu_ID`) REFERENCES `Ladu` (`ID`),
  ADD CONSTRAINT `Tellimus_Soiduk` FOREIGN KEY (`Soiduk_ID`) REFERENCES `Soiduk` (`ID`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
