-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 22, 2023 at 03:23 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `spiffyline`
--

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `ID_News` varchar(10) NOT NULL,
  `Image` varchar(255) NOT NULL,
  `Title` varchar(50) NOT NULL,
  `Text` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`ID_News`, `Image`, `Title`, `Text`) VALUES
('ID_N1', 'VD.jpg', 'Zbritje Dashurie 50%', 'Gjithqka qe ju nevojitet eshte dashuria. Por pak shopping nuk ben dem'),
('ID_N2', 'News2.jpg', 'Urime Ditelindja Me Shume Zbritje !', 'Perfito Nga Ditelindja Jone. Zbritje Ne Te Gjithe Artikujt!'),
('ID_N3', 'News3.jpg', 'Zbritje Pranverore', 'A Mendoni Se Është Nxeht? Pritni Sa Të Shihni Zbritjen Pranverore'),
('ID_N4', 'News4.png', 'Regjistrohu Për Përfitime', 'Bëhuni Pjesë E Klubit Të Zbritjeve Të Jashtëzakonshme, Regjistrohuni Sot Dhe Lini Stresin Në Qetësi!');

-- --------------------------------------------------------

--
-- Table structure for table `produktet`
--

CREATE TABLE `produktet` (
  `ID_Produkti` int(11) NOT NULL,
  `Kategoria` varchar(20) NOT NULL,
  `Image` varchar(255) NOT NULL,
  `Emri` varchar(50) NOT NULL,
  `Qmimi` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `produktet`
--

INSERT INTO `produktet` (`ID_Produkti`, `Kategoria`, `Image`, `Emri`, `Qmimi`) VALUES
(1, 'korset', 'Korset1.jpg', ' Olive Green Strapless Korset', '40'),
(2, 'qant', 'qant3.jpg', 'Black Leather Handbag Pink Plush', '20'),
(3, 'korset', 'PKorset.jpg', 'Plain Pink Korset', '30'),
(4, 'kapele', 'Kapele1.jpg', 'Leopard Print Plush Buckethat', '10'),
(5, 'qant', 'qant4.jpg', 'Zebra Print Handbag', '20'),
(6, 'korset', 'RKorset.jpg', 'Red Mesh Korset', '35'),
(7, 'korset', 'YKorset.jpg', 'Sunflower Korset', '35'),
(8, 'qant', 'qant5.jpg', 'Hot Red Handbag', '20'),
(9, 'korset', 'WKorset.jpg', 'Simple White Bustier', '20'),
(10, 'kapele', 'Kapele2.jpg', 'Brownish Plush Buckehat', '10'),
(11, 'qant', 'qant6.jpg', 'Green Handbag', '20'),
(12, 'korset', 'Korset2.jpg', 'Light Green Mesh Korset', '30'),
(13, 'korset', 'PKorset1.jpg', 'Pink Plush Korset', '38'),
(14, 'qant', 'qant7.jpg', 'White Plush Handbag', '20'),
(15, 'kapele', 'Kapele3.jpg', 'White Fluffy Buckehat', '10'),
(16, 'korset', 'RKorset1.jpg', 'Red Korset With Sleeves', '48'),
(17, 'qant', 'qant8.jpg', 'Black Stripes Handbag', '20'),
(18, 'korset', 'YKorset1.jpg', 'Fluffy Sleeves Yellow Korset', '37'),
(19, 'kapele', 'Kapele4.jpg', 'Red Buckehat', '10'),
(20, 'qant', 'qant9.jpg', 'Cow Print Fluffy Handbag', '15'),
(21, 'korset', 'Korset3.jpg', 'Olive Green Korset', '35'),
(22, 'korset', 'PKorset2.jpg', 'Vibrant Pink Korset', '25'),
(23, 'qant', 'qant10.jpg', 'Special Violet Handbag', '20'),
(24, 'kapele', 'Kapele5.jpg', 'Pink-ish Buckehat', '10'),
(25, 'korset', 'RKorset2.jpg', 'Sparkly Red Korset', '45'),
(26, 'qant', 'qant11.jpg', 'Hot Green Handbag', '20'),
(27, 'korset', 'YKorset2.jpg', 'Yellow Korset with purple details', '27'),
(28, 'kapele', 'Kapele6.jpg', 'White & Brown Buckehat', '10'),
(29, 'qant', 'qant12.jpg', 'Black Plush Handbag', '20'),
(30, 'korset', 'WKorset1.jpg', 'Long Sleeved White Korset', '39'),
(31, 'korset', 'Korset4.jpg', 'Complicated Green Korset', '50'),
(32, 'kapele', 'Kapele7.jpg', 'Violet Buckehat', '10'),
(33, 'qant', 'qant13.jpg', 'Purple Handbag', '20'),
(34, 'korset', 'PKorset3.jpg', 'Pink Strapless Korset', '33'),
(35, 'korset', 'RKorset3.jpg', 'Red Bustier', '34'),
(36, 'qant', 'qant14.jpg', 'Pink Handbag', '20'),
(37, 'kapele', 'Kapele8.jpg', 'Brown Fluffy Buckehat', '10'),
(38, 'korset', 'YKorset3.jpg', 'Yellow Bustier with purple details', '35'),
(39, 'korset', 'Korset5.jpg', 'Light Green Pearl Korset', '55'),
(40, 'kapele', 'Kapele9.jpg', 'Pink Buckehat', '10'),
(41, 'qant', 'qant15.jpg', 'Leopard Print Handbag', '20'),
(42, 'korset', 'PKorset4.jpg', 'Bow Pink Korset', '42'),
(43, 'korset', 'RKorset4.jpg', 'Red Plush Bustier', '47'),
(44, 'kapele', 'Kapele10.jpg', 'Purple Buckehat', '10'),
(45, 'korset', 'YKorset5.jpg', 'Vibrant Yellow Korset', '33'),
(46, 'qant', 'qant16,jpg.jpeg', 'Pearl Handbag', '75'),
(47, 'korset', 'Korset6.jpg', 'Vibrant Green Korset', '25'),
(48, 'kapele', 'Kapele11.jpg', 'Black Leather Buckehat', '15'),
(49, 'korset', 'PKorset5.jpg', 'Violet-ish Korset', '35'),
(50, 'korset', 'RKorset5.jpg', 'Red Fluffy Korset', '35'),
(51, 'kapele', 'Kapele12.jpg', 'Zebra Print Buckehat', '10'),
(52, 'korset', 'YKorset6.jpg', 'Pointy Yellow Korset', '35'),
(53, 'qant', 'qantgjelbert.jpg', 'Emerald Green Classy Handbag', '20'),
(54, 'korset', 'WKorset2.jpg', 'White Flowery Bustier', '28'),
(55, 'kapele', 'Kapele13.jpg', 'Sky Blue Buckehat', '10'),
(56, 'korset', 'Korset7.jpg', 'Green Plush Korset', '30'),
(57, 'korset', 'PKorset6.jpg', 'Pink Flower Korset', '23'),
(58, 'kapele', 'Kapele14.jpg', 'Light Brown Buckehat', '10'),
(59, 'korset', 'RKorset6.jpg', 'Red Sparkly Bustier', '47'),
(60, 'korset', 'YKorset7.jpg', 'Yellow Bustier', '25'),
(61, 'kapele', 'Kapele15.jpg', 'Brown Stripes Buckehat', '10'),
(62, 'korset', 'Korset8.jpg', 'Simple Green Korset', '30'),
(63, 'korset', 'PKorset7.jpg', 'Fading Pink Korset', '25'),
(64, 'kapele', 'Kapele16.jpg', 'Love Buckehat', '10'),
(65, 'korset', 'RKorset7.jpg', 'Simple Red Korse', '30'),
(66, 'kapele', 'Kapele17.jpg', 'Red Plush Buckehat', '10'),
(67, 'kapele', 'Kapele18.jpg', 'White Buckehat', '10'),
(68, 'qant', 'qant2.jpg', 'Black Leather Hat', '20');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `ID_User` int(11) NOT NULL,
  `Emri` varchar(20) NOT NULL,
  `Mbiemri` varchar(20) NOT NULL,
  `Username` varchar(20) NOT NULL,
  `Password` varchar(32) NOT NULL,
  `Email` varchar(40) NOT NULL,
  `Phone` char(9) NOT NULL,
  `Gjinia` char(1) NOT NULL,
  `Roli` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`ID_User`, `Emri`, `Mbiemri`, `Username`, `Password`, `Email`, `Phone`, `Gjinia`, `Roli`) VALUES
(3, 'Arianita', 'Gashi', 'nita', 'nita1234', 'nita@spiffy.com', '049999999', 'f', 'Admin'),
(4, 'Gent', 'Jusufi', 'genti', 'gent1234', 'gent@spiffy.com', '044444444', 'm', 'Admin'),
(5, 'ramiz', 'hoxha', 'babaiwebit', 'ramiz123', 'baba123@spiffy.com', '049123123', 'm', 'Klient'),
(6, 'ramiz', 'hoxha', 'babaiwebit', 'ramiz123', 'baba123@spiffy.com', '049123123', 'm', 'Klient'),
(8, '12312312', '123123123', '123123', 'admin123123', 'test@test.com', '044444444', 'f', 'Klient'),
(10, '123123123', '123123123', '123123123', '123123123', 'test123tenita@gmail.com', '049888888', 'f', 'Klient'),
(11, 'Ariana', 'Gashi', 'ArianaGashi', 'Ariana123', 'ariana@gmail.com', '045123456', 'f', 'Klient'),
(27, 'rita', 'mala', 'rita', 'ritarita123', 'rita@gmail.com', '049999204', 'f', 'Klient');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`ID_News`);

--
-- Indexes for table `produktet`
--
ALTER TABLE `produktet`
  ADD PRIMARY KEY (`ID_Produkti`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`ID_User`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `ID_User` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
