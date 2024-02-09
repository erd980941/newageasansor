-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 09 Şub 2024, 12:36:58
-- Sunucu sürümü: 10.4.32-MariaDB
-- PHP Sürümü: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `new_age_asansor`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `about_us`
--

CREATE TABLE `about_us` (
  `about_id` int(11) NOT NULL,
  `about_title` varchar(250) NOT NULL,
  `about_content` text NOT NULL,
  `about_image` varchar(250) NOT NULL,
  `about_image_alt` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Tablo döküm verisi `about_us`
--

INSERT INTO `about_us` (`about_id`, `about_title`, `about_content`, `about_image`, `about_image_alt`) VALUES
(0, 'NewAgeAsansör', '<p>Firmamız, asansör sektöründeki köklü geçmişi ve uzman kadrosuyla öne çıkan bir kuruluştur. Müşterilerimize sunduğumuz kaliteli ürünler ve çözümlerle sektörde güvenilir bir isim haline gelmiş bulunmaktayız.</p><p><strong>Güvenilir ve Kaliteli Hizmet:</strong>&nbsp;<br>Müşteri memnuniyetini en üst düzeyde tutan firmamız, güvenilir ve kaliteli hizmet anlayışıyla sektörde öne çıkmaktadır. Her projede titizlikle çalışarak müşteri beklentilerini karşılamayı ve aşmayı hedefliyoruz.</p><p><strong>İnovasyon ve Çözüm Odaklı Yaklaşım:</strong>&nbsp;<br>Sektördeki yenilikleri yakından takip eden firmamız, inovasyon ve çözüm odaklı yaklaşımıyla öne çıkmaktadır. Her müşteriye özel çözümler üreterek, ihtiyaçları en iyi şekilde karşılamayı amaçlıyoruz.</p><p><strong>Mükemmeliyet ve Sürekli Gelişim:</strong>&nbsp;<br>Mükemmeliyeti ilke edinen firmamız, sürekli gelişimi ön planda tutmaktadır. Personelimizin eğitimi ve sürekli iyileştirme çabalarımızla, sektördeki en son standartlara uygun ürünler sunmayı sürdürüyoruz.</p>', 'karavan-tinyhouse_2024-02-05_212606.png', 'NewAgeAsansör');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `mision_vision`
--

CREATE TABLE `mision_vision` (
  `mv_id` int(11) NOT NULL,
  `mv_image` varchar(255) NOT NULL,
  `mv_title` varchar(150) DEFAULT NULL,
  `mv_content` text NOT NULL,
  `mv_type` enum('mision','vision') NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `mision_vision`
--

INSERT INTO `mision_vision` (`mv_id`, `mv_image`, `mv_title`, `mv_content`, `mv_type`, `created_at`, `updated_at`) VALUES
(0, 'misyon-vizyon_2024-02-05_212623.jpg', 'Misyonumuz', '<p><span style=\"color:rgb(55,65,81);\">Firmamızın misyonu, müşterilerimize sadece asansör değil, aynı zamanda güven, konfor ve estetik değerler sunarak, seyahat deneyimlerini dönüştürmektir. Müşteri memnuniyetini en üst düzeye çıkarmak adına güçlü bir taahhüt ile hareket ediyor, yenilikçi çözümlerimiz ve güvenilir hizmet anlayışımızla sektörde öncü bir konumda yer almayı hedefliyoruz.</span></p>', 'mision', '2023-11-14 13:34:36', '2024-02-05 20:36:25'),
(1, 'misyon-vizyon_2024-02-05_212626.jpg', 'Vizyonumuz', '<p><span style=\"color:rgb(55,65,81);\">Vizyonumuz, sektörde lider bir marka olarak tanınmak ve gelecekteki asansör ihtiyaçlarına yönelik öncü çözümler sunmak üzerine odaklanmaktadır. Teknolojik gelişmeleri yakından takip ederek, çevre dostu ve sürdürülebilir uygulamalarla sektör standartlarını belirlemek ve yönlendirmek en önemli hedefimizdir. Müşterilerimize değer katmak ve çalışanlarımızın gelişimine destek olmak, vizyonumuzun temel taşlarıdır.</span></p>', 'vision', '2023-12-18 08:23:51', '2024-02-05 20:36:29');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `our_documents`
--

CREATE TABLE `our_documents` (
  `document_id` int(11) NOT NULL,
  `document_title` varchar(255) NOT NULL,
  `document_path` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `our_references`
--

CREATE TABLE `our_references` (
  `reference_id` int(11) NOT NULL,
  `reference_name` varchar(255) NOT NULL,
  `reference_description` text NOT NULL,
  `reference_image` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `products`
--

CREATE TABLE `products` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(250) NOT NULL,
  `product_short_description` varchar(500) NOT NULL,
  `product_description` text NOT NULL,
  `product_url` varchar(255) NOT NULL,
  `product_image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `site_admin`
--

CREATE TABLE `site_admin` (
  `admin_id` int(11) NOT NULL,
  `admin_username` varchar(50) NOT NULL,
  `admin_password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `site_admin`
--

INSERT INTO `site_admin` (`admin_id`, `admin_username`, `admin_password`) VALUES
(0, 'admin', '$2y$10$W6792yH.Usx8B5GoMXiJ6ehvrMh51V6UKRwl59XwC5qrVdGeNW.2K');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `site_contact_information`
--

CREATE TABLE `site_contact_information` (
  `site_id` int(11) NOT NULL,
  `site_contact_text` varchar(500) NOT NULL,
  `site_city` varchar(250) NOT NULL,
  `site_district` varchar(250) NOT NULL,
  `site_address` varchar(250) NOT NULL,
  `site_maps` text NOT NULL,
  `site_tel` varchar(250) NOT NULL,
  `site_whatsapp` varchar(250) NOT NULL,
  `site_email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `site_contact_information`
--

INSERT INTO `site_contact_information` (`site_id`, `site_contact_text`, `site_city`, `site_district`, `site_address`, `site_maps`, `site_tel`, `site_whatsapp`, `site_email`) VALUES
(0, 'Bize Ulaşabilirsiniz', 'Kocaeli', 'İzmit', 'Erenler Mah. Erenler Cedit Sitesi Erenler Mah. Erenler Cedit Sitesi', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3021.239888522251!2d29.937042076520264!3d40.778740033526404!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14cb4f977eeba6f7%3A0xa122d1b5de23c58f!2sErenler%20Cedit%20Konutlar%C4%B1!5e0!3m2!1str!2str!4v1704637739956!5m2!1str!2str', '+90 541 520 44 41', '+90 541 520 44 41', 'erdal318@gmail.com');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `site_email`
--

CREATE TABLE `site_email` (
  `site_id` int(11) NOT NULL,
  `site_smtpEmail` varchar(250) NOT NULL,
  `site_smtpHost` varchar(50) NOT NULL,
  `site_smtpUser` varchar(50) NOT NULL,
  `site_smtpPassword` varchar(50) NOT NULL,
  `site_smtpPort` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `site_email`
--

INSERT INTO `site_email` (`site_id`, `site_smtpEmail`, `site_smtpHost`, `site_smtpUser`, `site_smtpPassword`, `site_smtpPort`) VALUES
(0, '', '', '', '', '');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `site_settings`
--

CREATE TABLE `site_settings` (
  `site_id` int(11) NOT NULL,
  `site_logo` varchar(250) NOT NULL,
  `site_title` varchar(250) NOT NULL,
  `site_url` varchar(50) NOT NULL,
  `site_description` varchar(250) NOT NULL,
  `site_keywords` varchar(250) NOT NULL,
  `site_author` varchar(250) NOT NULL,
  `site_zopim` varchar(250) NOT NULL,
  `site_maps` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `site_settings`
--

INSERT INTO `site_settings` (`site_id`, `site_logo`, `site_title`, `site_url`, `site_description`, `site_keywords`, `site_author`, `site_zopim`, `site_maps`) VALUES
(0, '65c1444d2c69e-logo.png', 'New Age Asansör', 'http://localhost/newageasansor/', 'descriptiopn', 'keyword', 'author', 'zopim', 'maps');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `social_media`
--

CREATE TABLE `social_media` (
  `social_media_id` int(11) NOT NULL,
  `instagram` varchar(250) NOT NULL,
  `facebook` varchar(250) NOT NULL,
  `linkedin` varchar(255) NOT NULL,
  `youtube` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `social_media`
--

INSERT INTO `social_media` (`social_media_id`, `instagram`, `facebook`, `linkedin`, `youtube`) VALUES
(0, 'https://www.instagram.com/elma.karavan/', 'https://www.facebook.com/elmakaravan', '', '');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `why_us`
--

CREATE TABLE `why_us` (
  `why_us_id` int(11) NOT NULL,
  `why_us_title` varchar(255) NOT NULL,
  `why_us_content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `why_us`
--

INSERT INTO `why_us` (`why_us_id`, `why_us_title`, `why_us_content`) VALUES
(7, 'Deneyim ve Uzmanlık', 'Sektörde yılların getirdiği güçlü tecrübe ve bilgi birikimine sahibiz. Uzman mühendislerimizle asansör sektöründe lider konumdayız. Proje yönetimi ve inşaat deneyimimizle kesintisiz başarılar elde ediyoruz. Müşterilerimize sorunsuz hizmet sunabilmek için alanında yetkin bir ekibe sahibiz.'),
(8, 'Yüksek Kalite Standartları', 'Gelişmiş teknoloji ve yüksek standartlarda üretim yapıyoruz. ISO kalite güvencesi ile uyumlu üretim süreçleri ile her aşamada titizlikle çalışıyoruz. Dayanıklılık ve güven konusunda kendimize olan güvenimizi yüksek standartlardan alıyoruz.'),
(9, 'Özel Tasarım ve Çözümler', 'Müşteri ihtiyaçlarına özel tasarım konusundaki uzmanlığımızla öne çıkıyoruz. Estetik ve fonksiyonellikte öncü çözümler sunarak, modüler ve esnek tasarım seçenekleri ile müşterilerimizin beklentilerini aşmayı hedefliyoruz. Özelleştirilebilir asansör projeleri ile fark yaratıyoruz.'),
(10, 'Hızlı ve Profesyonel Hizmet', '7/24 acil servis ve destek ile müşterilerimize kesintisiz bir destek sağlıyoruz. Hızlı montaj ve kurulum süreçleri ile projelerin zamanında tamamlanmasını sağlıyoruz. Profesyonel müşteri hizmetleri ekibimiz, her an size yardımcı olmaya hazır. Zamanında teslimat ve kurulum garantisi veriyoruz.');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `about_us`
--
ALTER TABLE `about_us`
  ADD PRIMARY KEY (`about_id`);

--
-- Tablo için indeksler `mision_vision`
--
ALTER TABLE `mision_vision`
  ADD PRIMARY KEY (`mv_id`);

--
-- Tablo için indeksler `our_documents`
--
ALTER TABLE `our_documents`
  ADD PRIMARY KEY (`document_id`);

--
-- Tablo için indeksler `our_references`
--
ALTER TABLE `our_references`
  ADD PRIMARY KEY (`reference_id`);

--
-- Tablo için indeksler `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Tablo için indeksler `site_admin`
--
ALTER TABLE `site_admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Tablo için indeksler `site_contact_information`
--
ALTER TABLE `site_contact_information`
  ADD PRIMARY KEY (`site_id`);

--
-- Tablo için indeksler `site_email`
--
ALTER TABLE `site_email`
  ADD PRIMARY KEY (`site_id`);

--
-- Tablo için indeksler `site_settings`
--
ALTER TABLE `site_settings`
  ADD PRIMARY KEY (`site_id`);

--
-- Tablo için indeksler `social_media`
--
ALTER TABLE `social_media`
  ADD PRIMARY KEY (`social_media_id`);

--
-- Tablo için indeksler `why_us`
--
ALTER TABLE `why_us`
  ADD PRIMARY KEY (`why_us_id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `our_documents`
--
ALTER TABLE `our_documents`
  MODIFY `document_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Tablo için AUTO_INCREMENT değeri `our_references`
--
ALTER TABLE `our_references`
  MODIFY `reference_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Tablo için AUTO_INCREMENT değeri `why_us`
--
ALTER TABLE `why_us`
  MODIFY `why_us_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
