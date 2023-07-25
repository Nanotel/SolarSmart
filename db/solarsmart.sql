-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 25, 2023 at 06:16 PM
-- Server version: 10.3.39-MariaDB
-- PHP Version: 8.1.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `solarsmart_mon`
--

-- --------------------------------------------------------

--
-- Table structure for table `consum_lunar`
--

CREATE TABLE `consum_lunar` (
  `id` int(11) NOT NULL,
  `anul` int(11) NOT NULL,
  `luna` varchar(10) NOT NULL,
  `consumul` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `consum_lunar`
--

INSERT INTO `consum_lunar` (`id`, `anul`, `luna`, `consumul`) VALUES
(227, 2023, 'Dec', 0),
(226, 2023, 'Noi', 0),
(225, 2023, 'Oct', 0),
(224, 2023, 'Sep', 0),
(223, 2023, 'Aug', 0),
(222, 2023, 'Jul', 488),
(221, 2023, 'Jun', 590),
(220, 2023, 'Mai', 587),
(219, 2023, 'Apr', 420),
(218, 2023, 'Mar', 413),
(217, 2023, 'Feb', 312),
(216, 2023, 'Ian', 80),
(215, 2022, 'Dec', 120),
(214, 2022, 'Noi', 183),
(213, 2022, 'Oct', 404),
(212, 2022, 'Sep', 453),
(211, 2022, 'Aug', 710),
(210, 2022, 'Jul', 717),
(209, 2022, 'Jun', 668),
(208, 2022, 'Mai', 625),
(207, 2022, 'Apr', 515),
(206, 2022, 'Mar', 368),
(205, 2022, 'Feb', 272),
(204, 2022, 'Ian', 183),
(203, 2021, 'Dec', 83),
(202, 2021, 'Noi', 204),
(201, 2021, 'Oct', 325),
(200, 2021, 'Sep', 482),
(199, 2021, 'Aug', 713),
(198, 2021, 'Jul', 822),
(197, 2021, 'Jun', 667),
(196, 2021, 'Mai', 640),
(195, 2021, 'Apr', 514),
(194, 2021, 'Mar', 369),
(193, 2021, 'Feb', 102),
(192, 2021, 'Ian', 43),
(191, 2020, 'Dec', 22),
(190, 2020, 'Noi', 74),
(189, 2020, 'Oct', 161),
(188, 2020, 'Sep', 263),
(187, 2020, 'Aug', 345),
(186, 2020, 'Jul', 509),
(185, 2020, 'Jun', 295),
(184, 2020, 'Mai', 367),
(183, 2020, 'Apr', 300),
(182, 2020, 'Mar', 201),
(181, 2020, 'Feb', 138),
(180, 2020, 'Ian', 70),
(179, 2019, 'Dec', 35),
(178, 2019, 'Noi', 78),
(177, 2019, 'Oct', 154),
(176, 2019, 'Sep', 248),
(175, 2019, 'Aug', 318),
(174, 2019, 'Jul', 397),
(173, 2019, 'Jun', 350),
(172, 2019, 'Mai', 403),
(171, 2019, 'Apr', 227),
(170, 2019, 'Mar', 238),
(169, 2019, 'Feb', 95),
(168, 2019, 'Ian', 47),
(167, 2019, 'Dec', 32),
(166, 2018, 'Noi', 31),
(165, 2018, 'Oct', 111),
(164, 2018, 'Sep', 101),
(163, 2018, 'Aug', 139),
(162, 2018, 'Jul', 91),
(161, 2018, 'Jun', 85),
(160, 2018, 'Mai', 77),
(159, 2018, 'Apr', 30),
(158, 2018, 'Mar', 0),
(157, 2018, 'Feb', 0),
(156, 2018, 'Ian', 0);

-- --------------------------------------------------------

--
-- Table structure for table `invertor`
--

CREATE TABLE `invertor` (
  `id` int(11) NOT NULL,
  `voltaj_baterie` decimal(4,1) NOT NULL,
  `putere_consumata_ac` int(11) NOT NULL,
  `incarcare_pv1` int(11) NOT NULL,
  `putere_incarcare_baterii` int(11) NOT NULL,
  `consum_aparent` int(11) NOT NULL,
  `procent_incarcare_baterii` int(11) NOT NULL,
  `procent_consum` int(11) NOT NULL,
  `mod_de_lucru` varchar(30) NOT NULL,
  `voltaj_pv1` decimal(4,1) NOT NULL,
  `curent_descarcare_bat` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `invertor`
--

INSERT INTO `invertor` (`id`, `voltaj_baterie`, `putere_consumata_ac`, `incarcare_pv1`, `putere_incarcare_baterii`, `consum_aparent`, `procent_incarcare_baterii`, `procent_consum`, `mod_de_lucru`, `voltaj_pv1`, `curent_descarcare_bat`) VALUES
(1, 51.0, 1602, 1502, 0, 1679, 34, 33, 'Battery mode', 85.4, 4);

-- --------------------------------------------------------

--
-- Table structure for table `prize`
--

CREATE TABLE `prize` (
  `id_p` int(11) NOT NULL,
  `tp01_power_mw` int(11) DEFAULT NULL,
  `tp02_power_mw` int(11) DEFAULT NULL,
  `tp03_power_mw` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `prize`
--

INSERT INTO `prize` (`id_p`, `tp01_power_mw`, `tp02_power_mw`, `tp03_power_mw`) VALUES
(1, 531372, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `pylontech`
--

CREATE TABLE `pylontech` (
  `id_bat` int(11) NOT NULL,
  `voltaj_baterie` decimal(5,2) DEFAULT NULL,
  `procent_baterie` decimal(5,0) DEFAULT NULL,
  `temperatura_baterie` decimal(5,0) DEFAULT NULL,
  `cell01_voltaj` decimal(4,3) DEFAULT NULL,
  `cell02_voltaj` decimal(4,3) DEFAULT NULL,
  `cell03_voltaj` decimal(4,3) DEFAULT NULL,
  `cell04_voltaj` decimal(4,3) DEFAULT NULL,
  `cell05_voltaj` decimal(4,3) DEFAULT NULL,
  `cell06_voltaj` decimal(4,3) DEFAULT NULL,
  `cell07_voltaj` decimal(4,3) DEFAULT NULL,
  `cell08_voltaj` decimal(4,3) DEFAULT NULL,
  `cell09_voltaj` decimal(4,3) DEFAULT NULL,
  `cell10_voltaj` decimal(4,3) DEFAULT NULL,
  `cell11_voltaj` decimal(4,3) DEFAULT NULL,
  `cell12_voltaj` decimal(4,3) DEFAULT NULL,
  `cell13_voltaj` decimal(4,3) DEFAULT NULL,
  `cell14_voltaj` decimal(4,3) DEFAULT NULL,
  `cell15_voltaj` decimal(4,3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `pylontech`
--

INSERT INTO `pylontech` (`id_bat`, `voltaj_baterie`, `procent_baterie`, `temperatura_baterie`, `cell01_voltaj`, `cell02_voltaj`, `cell03_voltaj`, `cell04_voltaj`, `cell05_voltaj`, `cell06_voltaj`, `cell07_voltaj`, `cell08_voltaj`, `cell09_voltaj`, `cell10_voltaj`, `cell11_voltaj`, `cell12_voltaj`, `cell13_voltaj`, `cell14_voltaj`, `cell15_voltaj`) VALUES
(1, 51.12, 99, 30, 3.409, 3.410, 3.410, 3.409, 3.409, 3.409, 3.408, 3.403, 3.410, 3.407, 3.407, 3.409, 3.408, 3.407, 3.407),
(2, 51.13, 101, 29, 3.409, 3.408, 3.409, 3.409, 3.403, 3.409, 3.408, 3.412, 3.412, 3.406, 3.408, 3.410, 3.408, 3.409, 3.410),
(3, 51.15, 102, 29, 3.411, 3.411, 3.412, 3.411, 3.413, 3.412, 3.411, 3.413, 3.410, 3.404, 3.408, 3.409, 3.409, 3.409, 3.409),
(4, 51.11, 99, 28, 3.404, 3.409, 3.409, 3.410, 3.409, 3.409, 3.408, 3.403, 3.408, 3.407, 3.406, 3.408, 3.407, 3.405, 3.404);

-- --------------------------------------------------------

--
-- Table structure for table `temperaturi`
--

CREATE TABLE `temperaturi` (
  `id_t` int(11) NOT NULL,
  `atelier` decimal(3,1) NOT NULL,
  `parter` decimal(3,1) NOT NULL,
  `etaj` decimal(3,1) NOT NULL,
  `dormitor_mic` decimal(3,1) NOT NULL,
  `foisor` decimal(3,1) NOT NULL,
  `exterior` decimal(3,1) NOT NULL,
  `meteo` decimal(3,1) NOT NULL,
  `uparter` decimal(4,2) NOT NULL,
  `uetaj` decimal(4,2) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `temperaturi`
--

INSERT INTO `temperaturi` (`id_t`, `atelier`, `parter`, `etaj`, `dormitor_mic`, `foisor`, `exterior`, `meteo`, `uparter`, `uetaj`) VALUES
(1, 24.2, 29.8, 30.4, 99.0, 33.0, 33.8, 33.5, 62.60, 61.80);

-- --------------------------------------------------------

--
-- Table structure for table `time`
--

CREATE TABLE `time` (
  `id_time` int(11) NOT NULL,
  `timestamp` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `time`
--

INSERT INTO `time` (`id_time`, `timestamp`) VALUES
(1, '1690298166');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `consum_lunar`
--
ALTER TABLE `consum_lunar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `invertor`
--
ALTER TABLE `invertor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `prize`
--
ALTER TABLE `prize`
  ADD PRIMARY KEY (`id_p`);

--
-- Indexes for table `pylontech`
--
ALTER TABLE `pylontech`
  ADD PRIMARY KEY (`id_bat`);

--
-- Indexes for table `temperaturi`
--
ALTER TABLE `temperaturi`
  ADD PRIMARY KEY (`id_t`);

--
-- Indexes for table `time`
--
ALTER TABLE `time`
  ADD PRIMARY KEY (`id_time`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `consum_lunar`
--
ALTER TABLE `consum_lunar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=228;

--
-- AUTO_INCREMENT for table `invertor`
--
ALTER TABLE `invertor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `prize`
--
ALTER TABLE `prize`
  MODIFY `id_p` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pylontech`
--
ALTER TABLE `pylontech`
  MODIFY `id_bat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `temperaturi`
--
ALTER TABLE `temperaturi`
  MODIFY `id_t` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `time`
--
ALTER TABLE `time`
  MODIFY `id_time` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
