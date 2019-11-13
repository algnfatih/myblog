-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 13 Kas 2019, 22:51:34
-- Sunucu sürümü: 10.4.8-MariaDB
-- PHP Sürümü: 7.2.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `myblog`
--
CREATE DATABASE IF NOT EXISTS `myblog` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `myblog`;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `deneyimler`
--

CREATE TABLE `deneyimler` (
  `id` int(11) NOT NULL,
  `deneyim` varchar(255) NOT NULL,
  `firma` varchar(255) NOT NULL,
  `aciklama` text NOT NULL,
  `calisma_suresi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `deneyimler`
--

INSERT INTO `deneyimler` (`id`, `deneyim`, `firma`, `aciklama`, `calisma_suresi`) VALUES
(1, 'Ekip Üyesi', 'Mc Donalds', 'Etiam vehicula, nulla vel vulputate sagittis, nulla nunc varius neque, ut porttitor felis lacus nec nulla. Phasellus lorem eros, efficitur sed nisl nec, pulvinar dignissim metus. Fusce sed ligula lobortis, ultricies purus quis, porttitor erat. Fusce malesuada laoreet nisi id luctus. Mauris scelerisque imperdiet arcu, et imperdiet ipsum dignissim et. Aenean eu dignissim orci. Donec commodo ipsum velit, quis vestibulum elit pulvinar quis.', 'Ekim 2018 - Temmuz 2019'),
(2, 'Stajyer', 'Adnan Menderes Üniversitesi - Bilgi İşlem', 'Etiam vehicula, nulla vel vulputate sagittis, nulla nunc varius neque, ut porttitor felis lacus nec nulla. Phasellus lorem eros, efficitur sed nisl nec, pulvinar dignissim metus. Fusce sed ligula lobortis, ultricies purus quis, porttitor erat. Fusce malesuada laoreet nisi id luctus. Mauris scelerisque imperdiet arcu, et imperdiet ipsum dignissim et. Aenean eu dignissim orci. Donec commodo ipsum velit, quis vestibulum elit pulvinar quis.', 'Temmuz 2012 - Ağustos 2013');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `user` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `resim` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `login`
--

INSERT INTO `login` (`id`, `user`, `name`, `pass`, `resim`) VALUES
(1, 'admin', 'Fatih Algün', 'admin', 'uploads/profil.jpg');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `okullar`
--

CREATE TABLE `okullar` (
  `id` int(11) NOT NULL,
  `okul_adi` varchar(255) NOT NULL,
  `bilgi` varchar(255) NOT NULL,
  `mezuniyet_tarihi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `okullar`
--

INSERT INTO `okullar` (`id`, `okul_adi`, `bilgi`, `mezuniyet_tarihi`) VALUES
(1, 'Adnan Menderes Üniversitesi', 'Bilgisayar Ve Öğretim Teknolojileri Eğitimi', 'Olamadım be hacı.'),
(2, 'Aydın Anadolu Teknik ve Endüstri Meslek Lisesi', 'Bilişim Teknolojileri / Ağ İşletmenliği', '2012 de mezun oldum hacı.');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `sertifikalar`
--

CREATE TABLE `sertifikalar` (
  `id` int(11) NOT NULL,
  `icon` varchar(255) NOT NULL,
  `bilgi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `sertifikalar`
--

INSERT INTO `sertifikalar` (`id`, `icon`, `bilgi`) VALUES
(1, 'fa-li fa fa-trophy text-warning', 'Google Analytics Certified Developer'),
(2, 'fa-li fa fa-trophy text-warning', '1st Place - University of Colorado Boulder - Emerging Tech Competition 2009');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `site_bilgiler`
--

CREATE TABLE `site_bilgiler` (
  `degisken` varchar(255) NOT NULL,
  `deger` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `site_bilgiler`
--

INSERT INTO `site_bilgiler` (`degisken`, `deger`) VALUES
('isim', 'Fatih'),
('soyisim', 'Algün'),
('bilgi1', 'Wordpress Uzmanı'),
('bilgi2', 'Seo ve Metin Yazarı'),
('mail', 'info@inceledi.com'),
('info', '<p>Merhaba adım Fatih. Mekanın Sahibiyim. Adndan Menderes &Uuml;niversite&#39;si Bilgisayar ve &Ouml;ğretim Teknolojileri b&ouml;l&uuml;m&uuml; &ouml;ğrencisiyim...</p>\r\n'),
('facebook_link', 'https://www.facebook.com/fatihalgun09'),
('twitter_link', 'https://www.twitter.com/'),
('linkedin_link', 'https://www.linkedin.com/'),
('github_link', 'http://github.com/'),
('resim_profil', 'uploads/profil.jpg');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `yazilar`
--

CREATE TABLE `yazilar` (
  `id` int(11) NOT NULL,
  `yazi_baslik` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  `yazi_metni` text NOT NULL,
  `kategori` varchar(255) NOT NULL,
  `resim` varchar(255) NOT NULL,
  `tarih` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `yazilar`
--

INSERT INTO `yazilar` (`id`, `yazi_baslik`, `link`, `yazi_metni`, `kategori`, `resim`, `tarih`) VALUES
(1, 'Yazı Başlığı 1', 'yazi-basligi-1', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis iaculis sagittis enim. In nulla nunc, tincidunt non ullamcorper ac, ullamcorper quis velit. Aenean pharetra orci nec orci sollicitudin venenatis. Maecenas sapien risus, ullamcorper nec velit vitae, ultrices interdum nibh. Proin dolor mauris, semper ac luctus hendrerit, facilisis ac lorem. Suspendisse lobortis consequat erat, vitae lacinia sem sollicitudin id. Pellentesque mollis ultrices arcu, sit amet placerat ex dignissim facilisis.\r\n\r\nDonec pretium, lacus ut rhoncus tincidunt, est elit ullamcorper eros, id feugiat lorem metus ac velit. Vestibulum odio dui, laoreet nec orci fermentum, vehicula faucibus tortor. Aliquam est leo, pharetra porta pellentesque eget, efficitur ac orci. Integer eget ligula vitae sapien pulvinar ultricies a ut nisl. Pellentesque eu ante vel nibh congue mollis. Sed pellentesque purus at mauris dignissim, non sollicitudin mauris consequat. Sed posuere nisi sit amet bibendum porta. Suspendisse potenti. Etiam fringilla orci metus, quis consequat nisl ultricies in. Sed laoreet dictum ipsum, at porttitor leo elementum ac. Proin nec nisi ac sapien consectetur pretium.', 'Güncel', 'assets/img/profile.jpg', '2019-11-01 00:00:00'),
(2, 'Yazı Başlığı 2', 'yazi-basligi-2', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis iaculis sagittis enim. In nulla nunc, tincidunt non ullamcorper ac, ullamcorper quis velit. Aenean pharetra orci nec orci sollicitudin venenatis. Maecenas sapien risus, ullamcorper nec velit vitae, ultrices interdum nibh. Proin dolor mauris, semper ac luctus hendrerit, facilisis ac lorem. Suspendisse lobortis consequat erat, vitae lacinia sem sollicitudin id. Pellentesque mollis ultrices arcu, sit amet placerat ex dignissim facilisis.\r\n\r\nDonec pretium, lacus ut rhoncus tincidunt, est elit ullamcorper eros, id feugiat lorem metus ac velit. Vestibulum odio dui, laoreet nec orci fermentum, vehicula faucibus tortor. Aliquam est leo, pharetra porta pellentesque eget, efficitur ac orci. Integer eget ligula vitae sapien pulvinar ultricies a ut nisl. Pellentesque eu ante vel nibh congue mollis. Sed pellentesque purus at mauris dignissim, non sollicitudin mauris consequat. Sed posuere nisi sit amet bibendum porta. Suspendisse potenti. Etiam fringilla orci metus, quis consequat nisl ultricies in. Sed laoreet dictum ipsum, at porttitor leo elementum ac. Proin nec nisi ac sapien consectetur pretium.', 'Teknoloji', 'assets/img/profile.jpg', '2019-11-02 00:00:00'),
(3, 'Yazı Başlığı 3', 'yazi-basligi-3', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis iaculis sagittis enim. In nulla nunc, tincidunt non ullamcorper ac, ullamcorper quis velit. Aenean pharetra orci nec orci sollicitudin venenatis. Maecenas sapien risus, ullamcorper nec velit vitae, ultrices interdum nibh. Proin dolor mauris, semper ac luctus hendrerit, facilisis ac lorem. Suspendisse lobortis consequat erat, vitae lacinia sem sollicitudin id. Pellentesque mollis ultrices arcu, sit amet placerat ex dignissim facilisis.\r\n\r\nDonec pretium, lacus ut rhoncus tincidunt, est elit ullamcorper eros, id feugiat lorem metus ac velit. Vestibulum odio dui, laoreet nec orci fermentum, vehicula faucibus tortor. Aliquam est leo, pharetra porta pellentesque eget, efficitur ac orci. Integer eget ligula vitae sapien pulvinar ultricies a ut nisl. Pellentesque eu ante vel nibh congue mollis. Sed pellentesque purus at mauris dignissim, non sollicitudin mauris consequat. Sed posuere nisi sit amet bibendum porta. Suspendisse potenti. Etiam fringilla orci metus, quis consequat nisl ultricies in. Sed laoreet dictum ipsum, at porttitor leo elementum ac. Proin nec nisi ac sapien consectetur pretium.', 'Güncel', 'assets/img/profile.jpg', '2019-11-03 00:00:00'),
(4, 'Yazı Başlığı 4', 'yazi-basligi-4', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis iaculis sagittis enim. In nulla nunc, tincidunt non ullamcorper ac, ullamcorper quis velit. Aenean pharetra orci nec orci sollicitudin venenatis. Maecenas sapien risus, ullamcorper nec velit vitae, ultrices interdum nibh. Proin dolor mauris, semper ac luctus hendrerit, facilisis ac lorem. Suspendisse lobortis consequat erat, vitae lacinia sem sollicitudin id. Pellentesque mollis ultrices arcu, sit amet placerat ex dignissim facilisis.\r\n\r\nDonec pretium, lacus ut rhoncus tincidunt, est elit ullamcorper eros, id feugiat lorem metus ac velit. Vestibulum odio dui, laoreet nec orci fermentum, vehicula faucibus tortor. Aliquam est leo, pharetra porta pellentesque eget, efficitur ac orci. Integer eget ligula vitae sapien pulvinar ultricies a ut nisl. Pellentesque eu ante vel nibh congue mollis. Sed pellentesque purus at mauris dignissim, non sollicitudin mauris consequat. Sed posuere nisi sit amet bibendum porta. Suspendisse potenti. Etiam fringilla orci metus, quis consequat nisl ultricies in. Sed laoreet dictum ipsum, at porttitor leo elementum ac. Proin nec nisi ac sapien consectetur pretium.', 'Teknoloji', 'assets/img/profile.jpg', '2019-11-04 00:00:00');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `yetenekler`
--

CREATE TABLE `yetenekler` (
  `id` int(11) NOT NULL,
  `icon` varchar(255) NOT NULL,
  `yildiz` int(11) NOT NULL,
  `aciklama` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `yetenekler`
--

INSERT INTO `yetenekler` (`id`, `icon`, `yildiz`, `aciklama`) VALUES
(1, 'fa-html5', 4, 'Some quick example text to build on the card title and make up the bulk of the card\'s content.'),
(2, 'fa-css3-alt', 3, 'Lorem ipsum dolar sat amat. CSS3 bilgim yeterli :D'),
(3, 'fa-wordpress', 5, 'Up the bulk of the card\'s content. Some quick example text to build on the card title and make..\r\n\r\n');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `deneyimler`
--
ALTER TABLE `deneyimler`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `okullar`
--
ALTER TABLE `okullar`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `sertifikalar`
--
ALTER TABLE `sertifikalar`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `yazilar`
--
ALTER TABLE `yazilar`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `yetenekler`
--
ALTER TABLE `yetenekler`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `deneyimler`
--
ALTER TABLE `deneyimler`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Tablo için AUTO_INCREMENT değeri `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `okullar`
--
ALTER TABLE `okullar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Tablo için AUTO_INCREMENT değeri `sertifikalar`
--
ALTER TABLE `sertifikalar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Tablo için AUTO_INCREMENT değeri `yazilar`
--
ALTER TABLE `yazilar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Tablo için AUTO_INCREMENT değeri `yetenekler`
--
ALTER TABLE `yetenekler`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
