-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 23 Ara 2015, 14:25:32
-- Sunucu sürümü: 10.1.8-MariaDB
-- PHP Sürümü: 5.6.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `proje4`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `proje4`
--

CREATE TABLE `proje4` (
  `id` int(11) NOT NULL,
  `ad` varchar(225) COLLATE utf8_turkish_ci NOT NULL,
  `soyad` varchar(225) COLLATE utf8_turkish_ci NOT NULL,
  `tel` int(11) NOT NULL,
  `email` varchar(225) COLLATE utf8_turkish_ci NOT NULL,
  `notlar` text COLLATE utf8_turkish_ci NOT NULL,
  `image_80_80` varchar(225) COLLATE utf8_turkish_ci NOT NULL,
  `image_200_200` varchar(225) COLLATE utf8_turkish_ci NOT NULL,
  `image_300_300` varchar(225) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `proje4`
--

INSERT INTO `proje4` (`id`, `ad`, `soyad`, `tel`, `email`, `notlar`, `image_80_80`, `image_200_200`, `image_300_300`) VALUES
(1, 'd', 'sd', 1, 'sd', 'sd', '', '', '');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `proje4`
--
ALTER TABLE `proje4`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `proje4`
--
ALTER TABLE `proje4`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
