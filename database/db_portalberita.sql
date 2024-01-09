-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.4.14-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win64
-- HeidiSQL Version:             12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for db_portalberita
CREATE DATABASE IF NOT EXISTS `db_portalberita` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;
USE `db_portalberita`;

-- Dumping structure for table db_portalberita.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table db_portalberita.migrations: ~10 rows (approximately)
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(1, '2019_12_14_000001_create_personal_access_tokens_table', 1),
	(2, '2023_12_05_060026_kategori', 1),
	(3, '2023_12_05_060045_transaksi', 1),
	(4, '2023_12_05_060144_user', 1),
	(5, '2023_12_07_114837_artikel', 2),
	(6, '2023_12_08_091159_playlist', 3),
	(7, '2023_12_08_130306_materi', 4),
	(8, '2023_12_08_131425_materi', 5),
	(9, '2023_12_09_035242_banner', 6),
	(10, '2023_12_09_062218_iklan', 7);

-- Dumping structure for table db_portalberita.personal_access_tokens
CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table db_portalberita.personal_access_tokens: ~0 rows (approximately)

-- Dumping structure for table db_portalberita.tbl_artikel
CREATE TABLE IF NOT EXISTS `tbl_artikel` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `kategori_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `gambar_artikel` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_active` tinyint(1) NOT NULL,
  `views` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table db_portalberita.tbl_artikel: ~4 rows (approximately)
INSERT INTO `tbl_artikel` (`id`, `judul`, `slug`, `body`, `kategori_id`, `user_id`, `gambar_artikel`, `is_active`, `views`, `created_at`, `updated_at`) VALUES
	(14, 'Nucha & Ario Ungkap Rahasia Perawatan Diri di Shopee 12.12', 'Nucha & Ario Ungkap Rahasia Perawatan Diri di Shopee 12.12', '<p>Batam, Trenusantara - Aktivitas merawat diri atau self-care menjadi salah satu hal penting untuk mencapai keseimbangan dan kebahagiaan dalam hidup. Terlebih dalam hiruk-pikuk rutinitas kehidupan yang sering kali penuh dengan berbagai aktivitas, kita sering lupa arti sejati dari asa dan kebahagiaan diri. Untuk itu, dalam menemani pengguna menciptakan momen self-care terbaiknya, Shopee 12.12 Birthday Sale yang masih berlangsung hingga puncaknya di 12 Desember 2023 nanti menghadirkan deretan promo spesial Gratis Ongkir Rp0 Sepuasnya, Gebyar Promo Mobil 12RB dan Bonus Akhir Tahun 12M, serta ragam kelengkapan produk yang bisa dinikmati.&nbsp;</p><p>Head of Brands Management &amp; Digital Product Shopee Indonesia, Daniel Minardi mengatakan, self-care atau merawat diri baik membantu mewujudkan hidup yang lebih sehat, elaks dan bahagia. Hal tersebut dapat membantu kita menjadi lebih produktif dan mengurangi tekanan dalam kegiatan sehari-hari. "Sebagai teman setia para pengguna, Shopee senantiasa berkomitmen untuk dapat membantu menciptakan momen bahagia melalui segudang pengalaman belanja terbaik dan interaktif. Dengan rangkaian inovasi, program dan fitur yang dihadirkan, secara khusus Shopee 12.12 Birthday Sale ini, kami berharap dapat memudahkan pengguna dalam menemukan berbagai kebutuhan perawatan diri terbaiknya.&nbsp;</p><p>Disaat bersamaan, tentunya kami turut mendampingi para brand lokal dan UMKM untuk bertumbuh baik dalam segi kapasitas dan jangkauan bisnisnya, hingga mampu menghasilkan berbagai produk lokal berkualitas. Spesialnya, menuju puncak kampanye di 12 Desember 2023 nanti akan hadir gebyar promo dan berbagai kejutan menarik lainnya untuk menemani persiapan akhir tahun pengguna," ujar Daniel, Jumat (8/12/2023). Seperti diketahui, menyikapi makna self-care sebagai suatu konsep yang mencakup serangkaian tindakan untuk merawat dan meningkatkan kesejahteraan fisik, emosional, dan mental. Dengan mengaplikasikannya, kita berpeluang untuk menciptakan daya resiliensi yang cukup untuk membantu tubuh dan pikiran dalam mengelola tekanan dan stress dalam hidup, serta mampu meningkatkan kualitas hubungan dengan diri sendiri dan orang terdekat.</p>', 11, 5, 'Artikel/neNDGjTZrXSv8PuJOY9afIiGwHG5iJxDiXbHvt8J.jpg', 1, 0, '2023-12-10 03:25:51', '2023-12-24 19:09:10'),
	(15, 'ROUNN Hadir Eksklusif di Shopee Finest dengan Promo Spesial', 'ROUNN Hadir Eksklusif di Shopee Finest dengan Promo Spesial', 'Batam, TreNusantara - Momen akhir tahun menjadi waktu yang pas atau tepat untuk membeli hadiah buat pasangan. Pasalnya di periode ini banyak promo mulai bertebaran.\r\nApalagi sekarang Shopee memiliki Shopee Finest, yang menyuguhkan kurasi produk-produk dengan kualitas unggul atau Finest Quality dari beragam brand terpercaya dengan harga terbaik.\r\n\r\nShopee Finest akan segera menghadirkan Exclusive Launch ROUNN dengan promo spektakuler melalui akun toko @rounnbag di Shopee Mall yang berlangsung mulai tanggal 9 Desember 2023 pukul 20.00 WIB sampai 13 Desember 2023 pukul 23.59 WIB.\r\n\r\nBrand lokal ROUNN akan meluncurkan koleksi tas kulit asli terbaru yang memiliki kualitas unggul dengan desain unik dan classy secara eksklusif hanya di Shopee Finest. Menariknya, kamu bisa berbelanja semua koleksi tas ROUNN terbaru yang diluncurkan di Shopee Finest dengan lebih hemat! Ya, kamu bisa memanfaatkan Exclusive Launch Promo Discount 12% All Variants + Voucher Discount 50K. Menarik banget, ya!\r\n\r\nShopee Finest menyajikan kurasi produk dari berbagai merek terpercaya yang memiliki kualitas terbaik atau Finest Quality, mulai dari produk fashion, kecantikan dan perawatan kulit, gadget, perlengkapan rumah tangga, dan lainnya. Dengan hadirnya Shopee Finest, kamu bisa dengan mudah menemukan berbagai produk berkualitas unggul yang terjamin keasliannya dan dijual dengan Best Prices atau harga terbaik, serta promo menarik lain seperti Free Instant Shipping atau gratis ongkos pengiriman instan.\r\n\r\nDengan berbelanja produk Shopee Finest, barang pesananmu bisa langsung diantar ke rumah secara aman dan cepat tanpa dipungut biaya sepeser pun. Kamu pun bisa berbelanja dengan sangat mudah, praktis, dan nyaman! Nah, salah satu merek lokal ternama dengan kualitas terbaik yang hadir di Shopee Finest adalah ROUNN. ROUNN sendiri merupakan merek fesyen asal Surabaya, Jawa Timur yang didirikan oleh Ivan Tiono dan Jessica Ariela pada tahun 2014 silam.', 11, 5, 'Artikel/qePvQkHeiElu0WECnf4kAX9mkak6u1Gbbw7tY2sf.jpg', 1, 0, '2023-12-10 03:27:34', '2023-12-10 03:27:34'),
	(16, 'Kans Gregoria Taklukkan Tai Tzu Ying di World Tour Finals', 'Kans Gregoria Taklukkan Tai Tzu Ying di World Tour Finals', 'Batam, Trenusantara - Turnamen BWF World Tour Finals 2023 menjadi kesempatan Gregoria Mariska Tunjung untuk pecah telur kalahkan dua musuh bebuyutannya, Tai Tzu Ying dan An Se Young.\r\nDemikian diutarakan Kabid Binpres PBSI, Rionny Mainaky, yang menyebut kans itu ada mengingat atletnya punya pukulan yang susah.\r\n\r\nSebagai informasi, dari delapan wakil sektor tunggal putri yang lolos BWF World Tour Finals di Hangzhou, Jorji, panggilan karibnya hanya belum pernah menang dari Tai Tzu Ying (Taiwan) dan An Se Young (Korea Selatan). Selebihnya, Chen Yu Fei (China), Akane Yamaguchi (Jepang), Carolina Marin (Spanyol), Han Yue (China), serta Beiwen Zhang (Amerika Serikat) sudah pernah saling mengalahkan.', 17, 5, 'Artikel/Pn5aZDk9REHO6oNbFwrs1JLYpVwodZOxi4F99Fmi.jpg', 1, 0, '2023-12-10 03:31:05', '2023-12-10 03:31:05'),
	(17, 'Senyum Lebar Jokowi Respons Isu Gabung PAN', 'Senyum Lebar Jokowi Respons Isu Gabung PAN', '<p>Batam, TreNusantara -- Presiden RI Joko Widodo (Jokowi) merespons pernyataan Ketua Umum Partai Amanat Nasional (PAN) Zulkifli Hasan yang menyebut dirinya bergabung dengan PAN. Jokowi usai meresmikan Stasiun Pompa Ancol Sentiong di Jakarta Utara, Senin (11/12), mengatakan bahwa PAN memang keluarga dalam hal koalisi pemerintahan.&nbsp;</p><p>"Begini, PAN ini kan masuk koalisi pemerintah, jadi PAN itu masuk ke keluarga kita. Kalau kita jadi keluarga PAN, \'kan juga ya sama saja \'kan. PAN masuk keluarga kita, kita masuk keluarga PAN," kata Jokowi. Jokowi tidak berbicara banyak mengenai pernyataan Zulikifli Hasan itu. Namun, Jokowi tampak tersenyum lebar saat wartawan melontarkan pertanyaan tentang bergabung dengan PAN kepadanya.</p>', 14, 5, 'Artikel/qzvjyrTLnOJyyg7Dp0O5UlzO1JdCjpvmKVHFlq1d.jpg', 1, 0, '2023-12-11 19:43:51', '2023-12-25 00:50:15');

-- Dumping structure for table db_portalberita.tbl_iklan
CREATE TABLE IF NOT EXISTS `tbl_iklan` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `judul_iklan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar_iklan` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table db_portalberita.tbl_iklan: ~3 rows (approximately)
INSERT INTO `tbl_iklan` (`id`, `judul_iklan`, `link`, `gambar_iklan`, `status`, `created_at`, `updated_at`) VALUES
	(3, 'KFC Indonesia', 'https://kfcku.com/', 'Iklan/Qki2EByqO3andPiYUzqwcbxOzgD1A6ZFABzMfUlz.png', 1, '2023-12-10 20:53:27', '2023-12-10 20:53:27'),
	(4, 'Mcdonald Indonesia', 'https://www.mcdonalds.co.id/promo/rayakanharapan5', 'Iklan/ADsQ97XoyywzyS3poi3XFjamB7Z3shh6UBJRvMij.jpg', 0, '2023-12-12 06:42:55', '2023-12-20 08:31:27'),
	(5, 'Richeese Indonesia', 'https://www.richeesefactory.com/id', 'Iklan/Yul2upMU8O5cn76ypsgrwxtcUFYeg3bvQIr7TtTW.jpg', 1, '2023-12-12 06:44:33', '2023-12-12 06:44:33');

-- Dumping structure for table db_portalberita.tbl_kategori
CREATE TABLE IF NOT EXISTS `tbl_kategori` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nama_kategori` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table db_portalberita.tbl_kategori: ~8 rows (approximately)
INSERT INTO `tbl_kategori` (`id`, `nama_kategori`, `slug`, `created_at`, `updated_at`) VALUES
	(11, 'E-commers', 'E-commers', '2023-12-10 03:17:59', '2023-12-10 03:17:59'),
	(12, 'Content Creator', 'Content Creator', '2023-12-10 03:18:20', '2023-12-10 03:18:20'),
	(13, 'Business collaboration', 'Business collaboration', '2023-12-10 03:18:51', '2023-12-10 03:18:51'),
	(14, 'Knowledge', 'Knowledge', '2023-12-10 03:18:57', '2023-12-10 03:18:57'),
	(15, 'Learning', 'Learning', '2023-12-10 03:19:06', '2023-12-10 03:19:06'),
	(16, 'Social media', 'Social media', '2023-12-10 03:19:20', '2023-12-10 03:19:20'),
	(17, 'Sport', 'Sport', '2023-12-10 03:22:12', '2023-12-10 03:22:12'),
	(18, 'Cook', 'Cook', '2023-12-11 18:30:59', '2023-12-11 18:30:59');

-- Dumping structure for table db_portalberita.tbl_materi
CREATE TABLE IF NOT EXISTS `tbl_materi` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `judul_materi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `playlist_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `deskripsi_materi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar_materi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_active` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table db_portalberita.tbl_materi: ~8 rows (approximately)
INSERT INTO `tbl_materi` (`id`, `judul_materi`, `slug`, `link`, `playlist_id`, `user_id`, `deskripsi_materi`, `gambar_materi`, `is_active`, `created_at`, `updated_at`) VALUES
	(5, 'Tutorial Laravel 10 untuk Pemula #1 : Intro', 'Tutorial Laravel 10 untuk Pemula #1 : Intro', 'xaNpU898Ht4', 8, 5, '<p>Tutorial Laravel 10 untuk Pemula</p>', 'Materi/dpVRJoCDsT9mIFOKX9QkoTuFjYyFK1cHci0bPHRd.webp', 1, '2023-12-12 20:05:55', '2023-12-20 07:37:59'),
	(6, 'Tutorial Laravel 10 untuk Pemula #2 : Cara Install Laravel 10', 'Tutorial Laravel 10 untuk Pemula #2 : Cara Install Laravel 10', 'BiF-qWuGdJI', 8, 5, '<p>Tutorial bagaimana cara install Laravel 10&nbsp;</p>', 'Materi/8H9o2QhDa4Fo9hHGAyzsgU2lWJvwXBGGZZT2Gm16.webp', 1, '2023-12-12 20:07:45', '2023-12-12 20:07:45'),
	(7, 'Tutorial Laravel 10 untuk Pemula #3 : Membuat Model dan Migration', 'Tutorial Laravel 10 untuk Pemula #3 : Membuat Model dan Migration', '_aXKg7LDcxU', 8, 5, '<p>Tutorial Membuat Model dan Migration di Laravel 10.</p>', 'Materi/0o3llPn05LeaKCTPYoxoPeblud8IjOtWBYz4EIRk.webp', 1, '2023-12-12 20:08:25', '2023-12-12 20:08:25'),
	(8, '01 Belajar Codeigniter 4 Indonesia - Persiapan Dan Install', '01 Belajar Codeigniter 4 Indonesia - Persiapan Dan Install', 'Vxr77rE06ko', 7, 5, '<p>Bergabung dengan channel ini untuk mendapatkan akses ke berbagai keuntungan:&nbsp;<a href="https://www.youtube.com/channel/UC_fIMfdn6h8i03YR1SLUr5A/join"> &nbsp;<img src="https://www.gstatic.com/youtube/img/watch/yt_favicon.png" alt="" width="14" heigh', 'Materi/CikHHs0v0pM1jASp0BzUJeX2UifGkxImUf4gNICo.webp', 1, '2023-12-12 20:10:12', '2023-12-20 07:27:46'),
	(9, '02 Belajar Codeigniter 4 Indonesia - Install Dan Run Project', '02 Belajar Codeigniter 4 Indonesia - Install Dan Run Project', 'dxHRQcZ_f08', 7, 5, '<p>Bergabung dengan channel ini untuk mendapatkan akses ke berbagai keuntungan:&nbsp;<a href="https://www.youtube.com/channel/UC_fIMfdn6h8i03YR1SLUr5A/join"> &nbsp;<img src="https://www.gstatic.com/youtube/img/watch/yt_favicon.png" alt="" width="14" heigh', 'Materi/9ZpOFZplzJqfweBznq8xsCxucGz49MzdC2nkyY7j.webp', 1, '2023-12-12 20:10:47', '2023-12-12 20:10:47'),
	(10, 'Tutorial Laravel 10 untuk Pemula #4 : Menampilkan Data dari Database', 'Tutorial Laravel 10 untuk Pemula #4 : Menampilkan Data dari Database', 'mWRzpoHHu8Y', 8, 5, '<p>Tutorial Menampilkan Data dari Database di Laravel 10.<br>Link : <a href="https://www.youtube.com/redirect?event=video_description&amp;redir_token=QUFFLUhqbjFiYmZDY21JanBtdF9sM2dxZ0cxa3V4QV9CZ3xBQ3Jtc0tsd0QwUnZGMXlPZmhkTHRSWFN0aUh1dW5yYnBCY0U5SlFTeUczd', 'Materi/saRdr9S5r2c15sBGLwwbxWW9T5UVC03hUBmzc7de.webp', 1, '2023-12-20 07:37:11', '2023-12-20 07:37:11'),
	(11, 'Tutorial Laravel 10 untuk Pemula #5 : Insert Data ke Dalam Database', 'Tutorial Laravel 10 untuk Pemula #5 : Insert Data ke Dalam Database', '_yeskAN1iOQ', 8, 5, '<p>Tutorial Cara Inser Data ke Dalam Database di Laravel 10.<br>Link : <a href="https://www.youtube.com/redirect?event=video_description&amp;redir_token=QUFFLUhqazFEbW5KR1pQYkpTbk45a0xCU3pqWmFpak82UXxBQ3Jtc0ttVDRjcXQ2QzIwNWFDVHVKcG5LbE5qMjRmay1ENXFRcmVNdz', 'Materi/VaJ8hvnvyEl2dMvi9rkv9VesnolWQz8yhByTjA8I.webp', 1, '2023-12-20 07:39:30', '2023-12-20 07:39:30'),
	(12, 'Tutorial Laravel 10 untuk Pemula #6 : Menampilkan Detail Data By ID', 'Tutorial Laravel 10 untuk Pemula #6 : Menampilkan Detail Data By ID', 'Sk1_wX2zzbo', 8, 5, '<p>Detail Data adalah fitur baru yang diperkenalkan dalam Laravel 10. Fitur ini memungkinkan pengembang web untuk mengelola dan memanipulasi data dengan lebih mudah dan efisien. Dengan Detail Data, Kamu dapat dengan cepat menambahkan, mengedit, dan menghapus data dalam aplikasi Laravel Kamu.</p><p>Detail Data juga menyediakan berbagai fitur yang berguna, seperti validasi data, pencarian data, dan pengurutan data. Fitur-fitur ini memungkinkan Kamu untuk mengelola data dengan lebih baik dan menjaga integritas data Kamu.</p><p>Selain itu, Detail Data juga memiliki tampilan antarmuka yang intuitif dan mudah digunakan. Kamu dapat dengan mudah menavigasi melalui data Kamu dan melakukan tindakan yang diperlukan.Dengan adanya Detail Data di Laravel 10, pengembangan aplikasi web Kamu akan menjadi lebih efisien dan efektif.</p><p>Kamu tidak perlu lagi menghabiskan waktu dan tenaga untuk mengelola data secara manual. Detail Data akan membantu Kamu mengotomatisasi proses pengelolaan data dan meningkatkan produktivitas Kamu sebagai pengembang web.</p><ol><li><a href="https://divisidev.com/post/tutorial-menampilkan-detail-data-di-laravel-10#judul-3">Mengenal Konsep Model-View-Controller (MVC) di Laravel 10</a></li><li><a href="https://divisidev.com/post/tutorial-menampilkan-detail-data-di-laravel-10#judul-4">Membuat Model untuk Detail Data di Laravel 10</a></li><li><a href="https://divisidev.com/post/tutorial-menampilkan-detail-data-di-laravel-10#judul-5">Membuat View untuk Menampilkan Detail Data di Laravel 10</a></li><li><a href="https://divisidev.com/post/tutorial-menampilkan-detail-data-di-laravel-10#judul-6">Membuat Controller untuk Mengatur Tampilan Detail Data di Laravel 10</a></li><li><a href="https://divisidev.com/post/tutorial-menampilkan-detail-data-di-laravel-10#judul-7">Menghubungkan Model, View, dan Controller di Laravel 10</a></li><li><a href="https://divisidev.com/post/tutorial-menampilkan-detail-data-di-laravel-10#judul-8">Menggunakan Eloquent ORM untuk Mengambil Detail Data di Laravel 10</a></li><li><a href="https://divisidev.com/post/tutorial-menampilkan-detail-data-di-laravel-10#judul-9">Menggunakan Query Builder untuk Mengambil Detail Data di Laravel 10</a></li></ol>', 'Materi/X8v8MmtExMVFTir9TeYvLQLcWr4UPOrSWwEYSk1Y.webp', 1, '2023-12-24 07:47:28', '2023-12-24 18:57:04');

-- Dumping structure for table db_portalberita.tbl_playlist
CREATE TABLE IF NOT EXISTS `tbl_playlist` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `judul_playlist` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `gambar_playlist` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_active` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table db_portalberita.tbl_playlist: ~3 rows (approximately)
INSERT INTO `tbl_playlist` (`id`, `judul_playlist`, `slug`, `deskripsi`, `user_id`, `gambar_playlist`, `is_active`, `created_at`, `updated_at`) VALUES
	(7, 'Codeigniter 4', 'Codeigniter 4', '<p>Codeigniter 4</p>', 5, 'Playlist/RGp94CKAYJKBp85aLofKq0yNX6dtGlp0Z8ltYjdC.png', 1, '2023-12-12 20:01:38', '2023-12-20 07:28:29'),
	(8, 'Laravel 10', 'Laravel 10', '<p>laravel 10</p>', 5, 'Playlist/B37ue8ojqSvnjvSV2pDgZAxuZOWrK4lyBCQZxYUi.png', 1, '2023-12-12 20:02:41', '2023-12-20 07:28:38'),
	(9, 'CSS', 'CSS', '<p>sad</p>', 5, 'Playlist/QRlYr45v0FwqQhOqeYeZjK4EBz8Bc5jSAquoDFrX.webp', 1, '2023-12-25 06:53:37', '2023-12-25 06:53:37');

-- Dumping structure for table db_portalberita.tbl_slide
CREATE TABLE IF NOT EXISTS `tbl_slide` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `judul_slide` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar_slide` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table db_portalberita.tbl_slide: ~3 rows (approximately)
INSERT INTO `tbl_slide` (`id`, `judul_slide`, `link`, `gambar_slide`, `status`, `created_at`, `updated_at`) VALUES
	(3, 'Shutterstock', 'https://www.shutterstock.com', 'Slide/GQrc7zt0NKBP9hKiEBtstEH9m6Sh6KnG99M97y8D.jpg', 1, '2023-12-12 20:18:51', '2023-12-12 20:19:36'),
	(4, 'Vietnam Coffer', 'https://ottencoffee.co.id/majalah/vietnamese-drip-coffee', 'Slide/o8CUgBzuxvOiAqncjZtViuIbUFcEIqgV8aRe49c2.jpg', 1, '2023-12-12 20:20:44', '2023-12-12 20:20:44'),
	(5, 'Smart Donat', 'https://smartcity.gowakab.go.id/kuliner/donat-jodooh/16', 'Slide/SO7SS2nxxZC7hygKMV6s4Dp7wNyLWXgKXFEaGPNn.jpg', 0, '2023-12-12 20:22:02', '2023-12-25 06:54:46');

-- Dumping structure for table db_portalberita.tbl_users
CREATE TABLE IF NOT EXISTS `tbl_users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` enum('administrator','penulis') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jabatan` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `instagram` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tiktok` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `linkedin` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gambar_user` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table db_portalberita.tbl_users: ~3 rows (approximately)
INSERT INTO `tbl_users` (`id`, `name`, `password`, `role`, `jabatan`, `status`, `instagram`, `twitter`, `tiktok`, `facebook`, `linkedin`, `gambar_user`, `updated_at`, `created_at`) VALUES
	(5, 'fauzan', '$2y$10$WIV..LZ5tOGONqGXb5gSFOeiJaY.aIB3DVecVN402V7p3WoOZhEqa', 'administrator', 'Direktur riset & teknologi', 1, 'https://www.instagram.com/fauzan_khastrian/', NULL, 'https://www.tiktok.com/@fauzan_khastriant?lang=id-', 'https://www.facebook.com/profile.php?id=1000050190', 'https://www.linkedin.com/in/muhammad-fauzan-a31724', 'Users/EYRtol1ltxkFHCApf0YMDPwvQd2Oiyh0pH9bXEbM.jpg', '2023-12-19 08:08:45', '2023-12-08 20:35:10'),
	(6, 'Happy', '$2y$10$mRgNspb8.0gVvlpnrYjZueYD8XAjqjcF6vgEcj8cXbLFBWuLcx5U.', 'penulis', 'Bendahara Umum', 2, 'https://www.instagram.com/happy_asmara77/', NULL, NULL, NULL, NULL, 'Users/ZhENJ60era1tkK0ajt3MQAJdm6nZ3vLqK9UokIvB.jpg', '2023-12-19 09:13:26', '2023-12-19 07:26:32'),
	(7, 'Dewi', '$2y$10$UwedjpLgSYLPh7vHGLThgebRw5ieGPecJjMp2FHPfx2kmjkqLnlNK', 'penulis', NULL, 1, NULL, NULL, NULL, NULL, NULL, 'Users/hsktyh09yRrII5fmVLjvvmsB9xgUxfmjckVurCM1.jpg', '2023-12-25 07:03:57', '2023-12-25 07:03:57');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
