-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Anamakine: localhost:3306
-- Üretim Zamanı: 13 Eyl 2022, 16:03:15
-- Sunucu sürümü: 5.7.33
-- PHP Sürümü: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `eticaret`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `ayar`
--

CREATE TABLE `ayar` (
  `ayar_id` int(11) NOT NULL,
  `ayar_logo` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ayar_title` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ayar_description` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ayar_keywords` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ayar_author` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ayar_tel` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ayar_gsm` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ayar_faks` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ayar_mail` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ayar_ilçe` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ayar_il` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ayar_adres` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ayar_mesai` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ayar_maps` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ayar_analystic` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ayar_zopim` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ayar_facebook` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ayar_twitter` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ayar_google` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ayar_youtube` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ayar_smtphost` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ayar_smtpuser` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ayar_smtpassword` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ayar_smtpport` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ayar_bakım` enum('0','1') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `ayar`
--

INSERT INTO `ayar` (`ayar_id`, `ayar_logo`, `ayar_title`, `ayar_description`, `ayar_keywords`, `ayar_author`, `ayar_tel`, `ayar_gsm`, `ayar_faks`, `ayar_mail`, `ayar_ilçe`, `ayar_il`, `ayar_adres`, `ayar_mesai`, `ayar_maps`, `ayar_analystic`, `ayar_zopim`, `ayar_facebook`, `ayar_twitter`, `ayar_google`, `ayar_youtube`, `ayar_smtphost`, `ayar_smtpuser`, `ayar_smtpassword`, `ayar_smtpport`, `ayar_bakım`) VALUES
(0, 'dimg/20433', 'Joy Akademi E-Ticaret Scripti asSs', 'Joy Akademi E-Ticaret Scripti yazım eğitimi projesi', 'eticaret, shopping, php, leaming, student php', 'Joy Akademi', '0537 400 84 08', '0537 400 84 08', '0537 400 84 08', 'ysftkn34@gmail.com', 'Bağcılar', 'İstanbul', 'kirazlı mahallesi merkez caddesi', '7 gün 24 saat açık e-ticaret scripti', 'ayar_maps_api', 'ayar_analystic', 'ayar_zopim', 'www.facebook.com', 'www.twitter.com', 'www.google.com', 'www.youtube.com', 'mail.alanadiniz.com', 'user_host', 'password', '587', '1');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `hakkimizda`
--

CREATE TABLE `hakkimizda` (
  `hakkimizda_id` int(11) NOT NULL,
  `hakkimizda_başlık` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hakkimizda_içerik` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `hakkimizda_video` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hakkimizda_vizyon` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hakkimizda_misyon` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `hakkimizda`
--

INSERT INTO `hakkimizda` (`hakkimizda_id`, `hakkimizda_başlık`, `hakkimizda_içerik`, `hakkimizda_video`, `hakkimizda_vizyon`, `hakkimizda_misyon`) VALUES
(0, 'Joy Akademi Eğitim Sürümü ', 'Joy Akademi Eğitim Sürümü  ile ilgili detaylı içerik bulabilirsiniz.', 'video_kodu', 'Joy akademi ile ilgi içeriğiyle ilgili hakkımızda vizyon ile ilgili burada yer alacağından burada vizyon içeriği yer alacaktır.', 'Joy akademi ile ilgi içeriğiyle ilgili hakkımızda vizyon ile ilgili burada yer alacağından burada vizyon içeriği yer alacaktır.');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kategori`
--

CREATE TABLE `kategori` (
  `kategori_id` int(11) UNSIGNED NOT NULL,
  `kategori_ad` varchar(100) NOT NULL,
  `kategori_ust` int(2) NOT NULL,
  `kategori_seourl` varchar(250) NOT NULL,
  `kategori_sira` int(2) NOT NULL,
  `kategori_durum` enum('0','1') NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `kategori`
--

INSERT INTO `kategori` (`kategori_id`, `kategori_ad`, `kategori_ust`, `kategori_seourl`, `kategori_sira`, `kategori_durum`) VALUES
(2, 'Gömlekler', 0, 'gomlekler', 1, '1'),
(3, 'Tişörtler', 0, 'tisortler', 2, '1'),
(4, 'Pantolon', 0, 'pantolon', 3, '1'),
(5, 'Şapka', 0, 'sapka', 4, '1'),
(6, 'Bluz', 0, 'bluz', 6, '1'),
(7, 'şapkalar', 0, 'sapkalar', 5, '1');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kullanici`
--

CREATE TABLE `kullanici` (
  `kullanici_id` int(11) NOT NULL,
  `kullanici_zaman` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `kullanici_resim` varchar(250) COLLATE utf8mb4_turkish_ci DEFAULT NULL,
  `kullanici_tc` varchar(50) COLLATE utf8mb4_turkish_ci NOT NULL,
  `kullanici_ad` varchar(100) COLLATE utf8mb4_turkish_ci NOT NULL,
  `kullanici_mail` varchar(70) COLLATE utf8mb4_turkish_ci NOT NULL,
  `kullanici_gsm` varchar(50) COLLATE utf8mb4_turkish_ci NOT NULL,
  `kullanici_password` varchar(50) COLLATE utf8mb4_turkish_ci NOT NULL,
  `kullanici_adsoyad` varchar(50) COLLATE utf8mb4_turkish_ci NOT NULL,
  `kullanici_adres` varchar(250) COLLATE utf8mb4_turkish_ci NOT NULL,
  `kullanici_il` varchar(100) COLLATE utf8mb4_turkish_ci NOT NULL,
  `kullanici_ilçe` varchar(100) COLLATE utf8mb4_turkish_ci NOT NULL,
  `kullanici_unvan` varchar(100) COLLATE utf8mb4_turkish_ci NOT NULL,
  `kullanici_yetki` varchar(50) COLLATE utf8mb4_turkish_ci NOT NULL,
  `kullanici_durum` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

--
-- Tablo döküm verisi `kullanici`
--

INSERT INTO `kullanici` (`kullanici_id`, `kullanici_zaman`, `kullanici_resim`, `kullanici_tc`, `kullanici_ad`, `kullanici_mail`, `kullanici_gsm`, `kullanici_password`, `kullanici_adsoyad`, `kullanici_adres`, `kullanici_il`, `kullanici_ilçe`, `kullanici_unvan`, `kullanici_yetki`, `kullanici_durum`) VALUES
(2, '2022-08-16 23:12:40', NULL, '21323134324', 'ysftkn', 'ysftkn@gmail.com', '0543566762', '123456', 'yusuf tekin', 'adadadjkandk jalşddl32', 'istanbul', 'bağcılar', 'adad', '5', 1),
(3, '2022-08-16 23:12:40', NULL, '213231343455', 'ysftkn', 'ysftkn@gmail.com', '0543566762', '123456', 'ahmet tekin', 'adadadjkandk jalşddl32', 'istanbul', 'bağcılar', 'adad', '1', 0);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `menu`
--

CREATE TABLE `menu` (
  `menu_id` int(11) NOT NULL,
  `menu_ust` int(11) NOT NULL,
  `menu_ad` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `menu_detay` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `menu_url` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `menu_sira` int(2) NOT NULL,
  `menu_durum` tinyint(4) NOT NULL,
  `menu_seourl` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `menu`
--

INSERT INTO `menu` (`menu_id`, `menu_ust`, `menu_ad`, `menu_detay`, `menu_url`, `menu_sira`, `menu_durum`, `menu_seourl`) VALUES
(1, 0, 'Hakkımızda ', '<p>swqdwqd</p>\r\n', 'hakkimizda.php', 1, 1, 'hakkimizda'),
(2, 0, 'İletişim', '', 'iletişim.php', 4, 1, 'iletisim'),
(3, 0, 'Kategoriler', '', 'kategoriler.php', 2, 1, 'kategoriler'),
(4, 0, 'Gizlilik koşullarımız', '', 'gizlilik.php', 3, 1, 'gizlilik-kosullarimiz'),
(21, 0, 'Elektronik', '<p>Elektronik</p>\r\n', 'elektronik', 6, 1, 'elektronik'),
(22, 21, 'Macbook', '<p>Macbook</p>\r\n', 'Macbook', 5, 1, 'macbook');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `slider`
--

CREATE TABLE `slider` (
  `slider_id` int(11) NOT NULL,
  `slider_ad` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `slider_resimyol` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `slider_sira` int(2) NOT NULL,
  `slider_link` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `slider_durum` enum('0','1') COLLATE utf8_turkish_ci NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `slider`
--

INSERT INTO `slider` (`slider_id`, `slider_ad`, `slider_resimyol`, `slider_sira`, `slider_link`, `slider_durum`) VALUES
(9, 'slider1', 'dimg/slider/slide-1.jpg', 1, 'http://www.joyakedemi.com', '1'),
(10, 'slider2', 'dimg/slider/slide-2.jpg', 2, 'http://www.joyakedemi.com', '1'),
(11, 'slider3', 'dimg/slider/slide-3.jpg', 3, 'http://www.joyakedemi.com', '1'),
(12, 'slider4', 'dimg/slider/slide-4.jpg', 4, 'http://www.joyakedemi.com', '1');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `urun`
--

CREATE TABLE `urun` (
  `urun_id` int(11) NOT NULL,
  `kategori_id` int(11) NOT NULL,
  `urun_zaman` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `urun_ad` varchar(250) NOT NULL,
  `urun_seourl` varchar(250) NOT NULL,
  `urun_detay` text NOT NULL,
  `urun_fiyat` float NOT NULL,
  `urun_video` varchar(50) NOT NULL,
  `urun_keyword` varchar(250) NOT NULL,
  `urun_stok` int(11) NOT NULL,
  `urun_durum` enum('0','1') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `urun`
--

INSERT INTO `urun` (`urun_id`, `kategori_id`, `urun_zaman`, `urun_ad`, `urun_seourl`, `urun_detay`, `urun_fiyat`, `urun_video`, `urun_keyword`, `urun_stok`, `urun_durum`) VALUES
(7, 2, '2022-09-06 01:25:16', 'Ekose süper pantolon mavi çizgili', 'ekose-super-pantolon-mavi-cizgili', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n', 100, '', 'polo marka', 200, '1'),
(8, 4, '2022-09-06 01:25:16', 'Ekose süper tişört mavi çizgili', 'tişört mavi renk', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n', 100, '', 'polo marka', 200, '1'),
(9, 2, '2022-09-06 01:25:16', 'Ekose süper şapka mavi çizgili', 'ekose-super-pantolon-mavi-cizgili', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n', 100, '', 'polo marka', 200, '1'),
(10, 5, '2022-09-06 01:25:16', 'Ekose süper saat mavi çizgili', 'erkek saati', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n', 100, '', 'polo marka', 200, '1'),
(11, 4, '2022-09-06 01:25:16', 'Ekose süper ayakkabı mavi çizgili', 'tişört mavi renk', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n', 100, '', 'polo marka', 200, '1'),
(12, 5, '2022-09-06 01:25:16', 'Ekose süper gömlek mavi çizgili', 'erkek saati', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n', 100, '', 'polo marka', 200, '1');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `ayar`
--
ALTER TABLE `ayar`
  ADD PRIMARY KEY (`ayar_id`);

--
-- Tablo için indeksler `hakkimizda`
--
ALTER TABLE `hakkimizda`
  ADD PRIMARY KEY (`hakkimizda_id`);

--
-- Tablo için indeksler `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`kategori_id`);

--
-- Tablo için indeksler `kullanici`
--
ALTER TABLE `kullanici`
  ADD PRIMARY KEY (`kullanici_id`);

--
-- Tablo için indeksler `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`menu_id`);

--
-- Tablo için indeksler `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`slider_id`);

--
-- Tablo için indeksler `urun`
--
ALTER TABLE `urun`
  ADD PRIMARY KEY (`urun_id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `kategori`
--
ALTER TABLE `kategori`
  MODIFY `kategori_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Tablo için AUTO_INCREMENT değeri `kullanici`
--
ALTER TABLE `kullanici`
  MODIFY `kullanici_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Tablo için AUTO_INCREMENT değeri `menu`
--
ALTER TABLE `menu`
  MODIFY `menu_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- Tablo için AUTO_INCREMENT değeri `slider`
--
ALTER TABLE `slider`
  MODIFY `slider_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Tablo için AUTO_INCREMENT değeri `urun`
--
ALTER TABLE `urun`
  MODIFY `urun_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
