-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Anamakine: localhost:3306
-- Üretim Zamanı: 23 Şub 2023, 06:10:17
-- Sunucu sürümü: 8.0.32
-- PHP Sürümü: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `musta208_deprem`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `depremzede`
--

CREATE TABLE `depremzede` (
  `name` text NOT NULL,
  `surname` text NOT NULL,
  `city` text NOT NULL,
  `district` text NOT NULL,
  `adress` text NOT NULL,
  `status` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Tablo döküm verisi `depremzede`
--

INSERT INTO `depremzede` (`name`, `surname`, `city`, `district`, `adress`, `status`) VALUES
('Name', 'Surname', 'City', 'District', 'Adress', 'Status');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
