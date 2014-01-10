-- phpMyAdmin SQL Dump
-- version 3.4.5deb1
-- http://www.phpmyadmin.net
--
-- Anamakine: localhost
-- Üretim Zamanı: 10 Oca 2014, 17:26:36
-- Sunucu sürümü: 5.1.69
-- PHP Sürümü: 5.3.6-13ubuntu3.10

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Veritabanı: `uyelik`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `uyeler`
--

CREATE TABLE IF NOT EXISTS `uyeler` (
  `uye_id` int(11) NOT NULL AUTO_INCREMENT,
  `kullaniciadi` varchar(100) NOT NULL,
  `sifre` varchar(150) NOT NULL,
  `email` varchar(100) NOT NULL,
  `takim` varchar(150) NOT NULL,
  `isim` varchar(150) NOT NULL,
  `soyad` varchar(150) NOT NULL,
  `sehir` varchar(150) NOT NULL,
  `cinsiyet` varchar(150) NOT NULL,
  `dogumtarihi` int(150) NOT NULL,
  `dogumyeri` varchar(150) NOT NULL,
  `isadresi` text NOT NULL,
  `evadresi` text NOT NULL,
  `telefon` varchar(150) NOT NULL,
  PRIMARY KEY (`uye_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Tablo döküm verisi `uyeler`
--

INSERT INTO `uyeler` (`uye_id`, `kullaniciadi`, `sifre`, `email`, `takim`, `isim`, `soyad`, `sehir`, `cinsiyet`, `dogumtarihi`, `dogumyeri`, `isadresi`, `evadresi`, `telefon`) VALUES
(12, 'baht', 'd9e556c9eba36bc31dfa3892dde28970', 'baht@bil.omu.edu.tr', 'fenerbahce', 'Mert', 'Bahtiyar', 'Samsun', 'erkek', 1992, 'Bafra', '', 'Çilhane Mah. Baltao?lu Sok. No:14 Kat:2 Bafra', '5415383000');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
