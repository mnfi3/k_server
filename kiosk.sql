-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 26, 2019 at 06:02 AM
-- Server version: 5.7.24
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kiosk`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `user_id`, `name`, `image`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 'پیتزا آمریکایی', 'https://sib360.com/_upload/foodstuffs_group/2.jpg', '2019-08-05 19:30:00', '2019-10-09 09:09:18', NULL),
(2, 1, 'پیتزا ایتالیایی', 'https://sib360.com/_upload/foodstuffs_group/3.jpg', '2019-08-05 19:30:00', '2019-08-05 19:30:00', NULL),
(3, 1, 'برگر', 'https://sib360.com/_upload/foodstuffs_group/5.jpg', '2019-08-05 19:30:00', '2019-08-05 19:30:00', NULL),
(4, 1, 'ساندویچ', 'https://sib360.com/_upload/foodstuffs_group/1.jpg', '2019-08-05 19:30:00', '2019-08-05 19:30:00', NULL),
(5, 1, 'پیش غذا', 'https://sib360.com/_upload/foodstuffs_group/4.jpg', '2019-08-05 19:30:00', '2019-08-05 19:30:00', NULL),
(6, 1, 'نوشیدنی', 'https://sib360.com/_upload/foodstuffs_group/6.jpg', '2019-08-05 19:30:00', '2019-08-05 19:30:00', NULL),
(7, 1, 'سالاد', 'uploads/images/2019/10/27salads.jpg', '2019-10-09 08:37:55', '2019-10-09 09:44:02', '2019-10-09 09:44:02');

-- --------------------------------------------------------

--
-- Table structure for table `desserts`
--

DROP TABLE IF EXISTS `desserts`;
CREATE TABLE IF NOT EXISTS `desserts` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `type` varchar(255) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `is_available` tinyint(1) DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=23 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `desserts`
--

INSERT INTO `desserts` (`id`, `user_id`, `name`, `type`, `price`, `image`, `is_available`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 'پیاز', 'd1', 500, 'https://images.hamshahrionline.ir/images/2011/1/piyaz-1210-mm.jpg', 1, '2019-08-05 19:30:00', '2019-10-13 11:07:56', NULL),
(20, 1, 'ماست موسیر', 'd2', 3000, 'http://www.bisacodairy.com/smallpic/PLP_P_28364956b16.jpg', 1, '2019-08-05 19:30:00', '2019-08-05 19:30:00', NULL),
(3, 1, 'گوجه فرنگی', 'd1', 500, 'http://redmag.ir/wp-content/uploads/2018/01/%DA%AF%D9%88%D8%AC%D9%87-%D9%81%D8%B1%D9%86%DA%AF%DB%8C.jpg', 1, '2019-08-05 19:30:00', '2019-08-05 19:30:00', NULL),
(4, 1, 'سوپ جو', 'd2', 4000, 'https://cdn.sarashpazpapion.com/files/pictures/org/2018/09/24/37f0f0a351738e26fa701bf208feb3b7r.jpg', 1, '2019-08-05 19:30:00', '2019-08-05 19:30:00', NULL),
(5, 1, 'خلال سیب زمینی', 'd2', 3000, 'http://shoolenco.com/wp-content/uploads/2018/09/French-Fries-zigzag.png', 1, '2019-08-05 19:30:00', '2019-08-05 19:30:00', NULL),
(6, 1, 'سس مایونز', 'd1', 500, 'http://20cet.com/wp-content/uploads/2019/05/%D8%B3%D8%B3-%D9%81%D8%B1%D8%A7%D9%86%D8%B3%D9%88%DB%8C-%D8%AA%DA%A9-%D9%86%D9%81%D8%B1%D9%87-%D8%AF%D9%84%D9%88%D8%B3%D9%87.jpg', 1, '2019-08-05 19:30:00', '2019-10-13 10:45:15', NULL),
(7, 1, 'نمک', 'd1', 500, 'http://iran-tejarat.com/AdImages/2016/4/20/3090789-2016-4-20-11-41-59.jpg', 1, '2019-08-05 19:30:00', '2019-08-05 19:30:00', NULL),
(8, 1, 'سماق', 'd1', 500, 'https://sanatkaranco.com/wp-content/uploads/2019/06/bl57129ebf-7a79-4901-902b-f60b185a44e5.jpg', 1, '2019-08-05 19:30:00', '2019-08-05 19:30:00', NULL),
(10, 1, 'سالاد شیرازی', 'd2', 500, 'http://delbaraneh.com/wp-content/uploads/2019/01/%D8%AA%D8%B2%DB%8C%DB%8C%D9%86-%D8%B3%D8%A7%D9%84%D8%A7%D8%AF-%D8%B4%DB%8C%D8%B1%D8%A7%D8%B2%DB%8C-41.jpg', 1, '2019-08-05 19:30:00', '2019-08-05 19:30:00', NULL),
(11, 1, 'زیتون', 'd1', 500, 'http://www.majalesalamat.com/wp-content/uploads/2016/01/Olives.jpg', 1, '2019-08-05 19:30:00', '2019-10-13 10:48:34', NULL),
(12, 1, 'ماست', 'd2', 3000, 'http://www.bisacodairy.com/smallpic/PLP_P_28364956b16.jpg', 1, '2019-08-05 19:30:00', '2019-08-05 19:30:00', NULL),
(13, 1, 'ماست خامه ای', 'd1', 3000, 'http://diku.ir//Opitures/107250975883590.jpg', 1, '2019-08-05 19:30:00', '2019-08-05 19:30:00', NULL),
(21, 1, 'خیار شور', 'd2', 3000, 'http://saten.ir/wp-content/uploads/2016/03/P1180174.jpg', 1, '2019-08-05 19:30:00', '2019-08-05 19:30:00', NULL),
(15, 1, 'ترشی', 'd2', 3000, 'https://www.tasvirezendegi.com/wp-content/uploads/2016/11/%D8%AA%D8%B1%D8%B4%DB%8C-%D9%87%D9%81%D8%AA-%D8%A8%DB%8C%D8%AC%D8%A7%D8%B1-2.jpg', 1, '2019-08-05 19:30:00', '2019-08-05 19:30:00', NULL),
(16, 1, 'سبزیجات', 'd2', 3000, 'http://khabarfoori.com/bundles/data/images/filemanager/1/goonagoon/SABZI.jpg', 1, '2019-08-05 19:30:00', '2019-08-05 19:30:00', NULL),
(22, 1, 'فلفل', 'd1', 500, 'http://shirazfruit.com/wp-content/uploads/2018/05/felfel-sabz-tond-logo.jpg', 1, '2019-08-05 19:30:00', '2019-08-05 19:30:00', NULL),
(19, 1, 'کاهو', 'd1', 1000, 'http://files.namnak.com/users/hb/aup/201904/393_pics/%D8%AE%D9%88%D8%A7%D8%B5-%DA%A9%D8%A7%D9%87%D9%88.jpg', 1, '2019-08-05 19:30:00', '2019-08-05 19:30:00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `discounts`
--

DROP TABLE IF EXISTS `discounts`;
CREATE TABLE IF NOT EXISTS `discounts` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `code` varchar(255) DEFAULT NULL,
  `percent` int(11) DEFAULT NULL,
  `count` int(11) DEFAULT NULL,
  `started_at` timestamp NULL DEFAULT NULL,
  `invoked_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `discounts`
--

INSERT INTO `discounts` (`id`, `user_id`, `code`, `percent`, `count`, `started_at`, `invoked_at`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, '1234', 20, 24, '2019-08-12 19:30:00', '2019-10-24 20:30:00', '2019-08-12 19:30:00', '2019-10-15 08:16:12', NULL),
(3, 1, 'yalada54', 18, 10, '2019-10-08 20:30:00', '2019-10-09 20:30:00', '2019-10-09 11:26:54', '2019-10-09 12:04:04', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `kiosks`
--

DROP TABLE IF EXISTS `kiosks`;
CREATE TABLE IF NOT EXISTS `kiosks` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `user_name` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `client_key` varchar(255) DEFAULT NULL,
  `token` varchar(255) DEFAULT NULL,
  `version` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `kiosks`
--

INSERT INTO `kiosks` (`id`, `name`, `user_name`, `password`, `client_key`, `token`, `version`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'کیوسک رستوران ستاره', 'kiosk1', '$2y$10$XXErxY9T/FiSBYIMyJ2.ZOh4.lI1jX8AtZVRW4zGUu1J9tcqOxVHe', '5F63DA0CE9', 'eyJpdiI6IkxPeUlUQklaNUxkM2JsaGdoZWpuZ3c9PSIsInZhbHVlIjoiQkE3Z0U0SUNnTDM0TkxtRHdrTFcydW8rUUhcL2RGdWZDVis5WEFwMEkzdXUySTlZc21VNmYrTloxSTN3d1lLRlMiLCJtYWMiOiI3NWViOWRmOWY2OWI2YzI5N2Y5NDFhOTBmYjUzNzQ4ZTM3NWJhMjY3YzFlMGFhMGY1ZTgyZmViNTc5NjU1NTM4In0=', '1.0.0', '2019-07-26 19:30:00', '2019-10-22 10:42:23', NULL),
(2, 'کیوسک رستوران تخت جمشید', 'kiosk2', '$2y$10$XXErxY9T/FiSBYIMyJ2.ZOh4.lI1jX8AtZVRW4zGUu1J9tcqOxVHe', '5F63DA0CE9   ', 'RXJ2YWIta2lvc2sxLTIwMTktMTAtMDUgMDE6MjA6MDY=', NULL, '2019-07-26 19:30:00', '2019-10-05 09:50:06', NULL),
(3, 'کیوسک رستوران هیلا', 'kiosk3', '$2y$10$tSTo2S81v2wcjKgK8GxcuOyoNDQokhQKPaWTqYuo3oCXq2rFuLgim', '6556454564', NULL, NULL, '2019-10-10 12:46:42', '2019-10-10 13:05:47', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=39 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2016_06_01_000001_create_oauth_auth_codes_table', 1),
(4, '2016_06_01_000002_create_oauth_access_tokens_table', 1),
(5, '2016_06_01_000003_create_oauth_refresh_tokens_table', 1),
(6, '2016_06_01_000004_create_oauth_clients_table', 1),
(7, '2016_06_01_000005_create_oauth_personal_access_clients_table', 1),
(8, '2019_07_24_102747_create_kiosks_table', 1),
(9, '2019_07_24_103440_create_user_kiosks_table', 1),
(10, '2019_07_24_104510_create_categories_table', 1),
(11, '2019_07_24_104727_create_products_table', 1),
(12, '2019_07_24_110912_create_orders_table', 1),
(13, '2019_07_24_111336_create_order_contents_table', 1),
(14, '2019_07_24_112801_create_discounts_table', 1),
(15, '2019_07_25_085457_create_roles_table', 2),
(16, '2019_07_25_122304_add_kiosk_id_to_orders_table', 3),
(17, '2019_08_01_122328_add_new_fields_to_products', 4),
(18, '2019_08_01_124532_create_sides_table', 5),
(19, '2019_08_01_125217_add_type_to_sides', 6),
(20, '2019_08_01_133703_create_product_sides_table', 7),
(21, '2019_08_06_124208_create_desserts_table', 8),
(22, '2019_08_06_125515_create_product_desserts_table', 9),
(23, '2019_08_13_162616_add_local_id_to_orders', 10),
(24, '2019_08_13_162904_add_discount_id_to_orders', 11),
(25, '2019_08_13_163128_add_count_to_discounts', 12),
(26, '2019_08_14_141101_create_order_content_desserts_table', 13),
(27, '2019_08_14_142012_add_desset_size_to_order_contents', 14),
(28, '2019_08_14_143209_add_d_cost_to_orders', 15),
(29, '2019_10_06_115836_add_is_one_size_to_products_table', 16),
(30, '2019_10_07_135916_add_payment_details_to_orders_table', 17),
(31, '2019_10_08_095302_add_some_fields_to_users_table', 18),
(32, '2019_10_08_101125_add_is_delivered_to_orders_table', 19),
(33, '2019_10_08_104805_add_is_out_to_orders_table', 20),
(34, '2019_10_08_113038_add_order_number_to_orders_table', 21),
(35, '2019_10_12_140753_add_app_password_to_users_table', 22),
(36, '2019_10_13_140602_add_is_available_to_products_table', 23),
(37, '2019_10_13_140738_add_is_available_to_desserts_table', 24),
(38, '2019_10_22_121302_add_version_to_kiosks_table', 25);

-- --------------------------------------------------------

--
-- Table structure for table `oauth_access_tokens`
--

DROP TABLE IF EXISTS `oauth_access_tokens`;
CREATE TABLE IF NOT EXISTS `oauth_access_tokens` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `client_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `scopes` text COLLATE utf8mb4_unicode_ci,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `expires_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `oauth_access_tokens_user_id_index` (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `oauth_access_tokens`
--

INSERT INTO `oauth_access_tokens` (`id`, `user_id`, `client_id`, `name`, `scopes`, `revoked`, `created_at`, `updated_at`, `expires_at`) VALUES
('df8d1cc1fe7c1a556b0e5551b82300ff8aaecfa18142196d91514731968451c69e030c48645a7c19', 1, 1, 'mohsen1@gmail.com', '[]', 0, '2019-07-27 04:45:00', '2019-07-27 04:45:00', '2020-07-27 09:15:00'),
('09fb5d782ddb2d50b69b8246d95afc137b3c75514e51ae3a3022b38236acaef1b22d228cab6f6f78', 1, 1, 'mohsen1@gmail.com', '[]', 0, '2019-07-27 04:45:57', '2019-07-27 04:45:57', '2020-07-27 09:15:57'),
('e3969a70a622a9265cc3e5aa1f91b4a5dae2c34faef0ec303f1af829065f0d95a836d6e85dee1520', 1, 1, 'mohsen1@gmail.com', '[]', 0, '2019-07-27 12:02:03', '2019-07-27 12:02:03', '2020-07-27 16:32:03'),
('02544272282555ab8d23f84202bf8a1dfb61fa32314e310e78d224f2870ea1ae2d23280e9225f516', 1, 1, 'mohsen1@gmail.com', '[]', 0, '2019-07-27 12:03:12', '2019-07-27 12:03:12', '2020-07-27 16:33:12'),
('ad7b6a2d4593c5b036f277e5db796028efeea0a775aff0851765a2c270d68136868e35b11aabb284', 1, 1, 'mohsen1@gmail.com', '[]', 0, '2019-07-27 12:03:14', '2019-07-27 12:03:14', '2020-07-27 16:33:14'),
('c4db68f3bfcef8ad3956a0981cd730d286b5b8ac8b7fb09b26dd2a8bcf54efbafd8311401f8be0cd', 1, 1, 'mohsen1@gmail.com', '[]', 0, '2019-07-27 12:03:56', '2019-07-27 12:03:56', '2020-07-27 16:33:56'),
('382fc49846d41102c6270debe54ce1a3ac452003e595a57ae6a4ba5b723dac8f738ccce9dc27145f', 1, 1, 'mohsen1@gmail.com', '[]', 0, '2019-07-27 12:03:58', '2019-07-27 12:03:58', '2020-07-27 16:33:58'),
('c2a99fdb19f009111442a5e6ee658b024f533fe0a6830f77fb9c7c073cd18e4128769dcfffbd2b5d', 1, 1, 'mohsen1@gmail.com', '[]', 0, '2019-07-27 12:03:59', '2019-07-27 12:03:59', '2020-07-27 16:33:59'),
('a8484ef20ac96db899dee3583bcc865cc22f6999a36969730c72abd83060cbb284361af333f66981', 1, 1, 'mohsen1@gmail.com', '[]', 0, '2019-08-03 12:03:36', '2019-08-03 12:03:36', '2020-08-03 16:33:36'),
('18767189c325ce3c20b42db99e59ef6412518493cb4e86ebe08056e7fc7b0fed8c063a9acfc556e6', 1, 1, 'mohsen1@gmail.com', '[]', 0, '2019-08-03 12:03:44', '2019-08-03 12:03:44', '2020-08-03 16:33:44'),
('d902155f12add06a74ff25d2f162725cecad286fbda7ab7d7a90d2c4a8323a57a0455b6eb1f1687b', 1, 1, 'rest1@gmail.com', '[]', 0, '2019-08-03 13:35:48', '2019-08-03 13:35:48', '2020-08-03 18:05:48'),
('885d2ab9c9305f0a1b72a4b82f8ce8ff7af9dd59f0bec9c88bcf4e91521c0cec02fc9168bc51609c', 1, 1, 'rest1@gmail.com', '[]', 0, '2019-08-03 13:37:16', '2019-08-03 13:37:16', '2020-08-03 18:07:16'),
('71361499ede031cf4b4ef36e839b63ef307872e56adfc4e7cdd0bd87addaecf12e2070724c4136e0', 1, 1, 'rest1@gmail.com', '[]', 0, '2019-08-03 13:38:56', '2019-08-03 13:38:56', '2020-08-03 18:08:56'),
('fb5918d293642bd314193e2c337ad4ade07294940f2aa122331af6075ab9aa3afb1a88abbc6d9686', 1, 1, 'rest1@gmail.com', '[]', 0, '2019-08-03 13:41:11', '2019-08-03 13:41:11', '2020-08-03 18:11:11'),
('f4e9c6deffee08daa7d1c7c1066a8fb78e33f39f40ccc0cbbee7614f79ac988d044c04b7bd5a8861', 1, 1, 'rest1@gmail.com', '[]', 0, '2019-08-03 13:44:36', '2019-08-03 13:44:36', '2020-08-03 18:14:36'),
('fe7d49c52fbb79acda7204d8ce57c24498212a6b3fa1e74f31af902e232cd51ba7d35301e2761ecd', 1, 1, 'rest1@gmail.com', '[]', 0, '2019-08-03 13:46:15', '2019-08-03 13:46:15', '2020-08-03 18:16:15'),
('5ff7db577ba319726c670ac53be8c22cffc744c0c31a452fa440271b5e8dbe0743e2ac2f51f49eff', 1, 1, 'rest1@gmail.com', '[]', 0, '2019-08-03 13:48:48', '2019-08-03 13:48:48', '2020-08-03 18:18:48'),
('b0c132dcf31257deaedc1888fef20167675ac43bf764b38159540e1e1478643ad088f9f230de56c6', 1, 1, 'rest1@gmail.com', '[]', 0, '2019-08-03 13:50:39', '2019-08-03 13:50:39', '2020-08-03 18:20:39'),
('697cc654cab4791163e7fca605348f4ce5ce5fb6c83fa7e403f66bc92ac38242aac213a34cd91458', 1, 1, 'rest1@gmail.com', '[]', 0, '2019-08-03 13:52:49', '2019-08-03 13:52:49', '2020-08-03 18:22:49'),
('f4b8a19e3c6d63250fe448b3496907b112a48b49e2e21fefc98884b01a8e396694c5474b8f9483a3', 1, 1, 'rest1@gmail.com', '[]', 0, '2019-08-03 13:56:11', '2019-08-03 13:56:11', '2020-08-03 18:26:11'),
('23ce4dc4b4cf1fd5ebac96d2827c1231cb17e11239727dd3a659ef9ed01695bc420c50f1e81180e3', 1, 1, 'rest1@gmail.com', '[]', 0, '2019-08-03 13:57:45', '2019-08-03 13:57:45', '2020-08-03 18:27:45'),
('5f5c0ed9c4459971e2890a881cfa40037eafb6c54470f6ebb5f7334d31912eb62fc6967939547e24', 1, 1, 'rest1@gmail.com', '[]', 0, '2019-08-03 13:58:37', '2019-08-03 13:58:37', '2020-08-03 18:28:37'),
('5835e4e2365500536636d2262e3ab9265f263632b58eed0f574614f9c6526bd636e78fe9372eedb1', 1, 1, 'rest1@gmail.com', '[]', 1, '2019-08-03 14:04:13', '2019-08-03 14:04:13', '2020-08-03 18:34:13'),
('38b34455d7fccca6570f0d9a3bb3d965694a9f360593f8e65c14474af238cfd18a3697a9494a637b', 1, 1, 'rest1@gmail.com', '[]', 1, '2019-08-04 10:18:54', '2019-08-04 10:18:54', '2020-08-04 14:48:54'),
('447b25cc3ffa93351e44fffaa436815c7290adc912c88bf7250bff8d6ac168e3be6ee83ac0a9d989', 1, 1, 'rest1@gmail.com', '[]', 1, '2019-08-04 10:24:27', '2019-08-04 10:24:27', '2020-08-04 14:54:27'),
('4b7c4bd165036318df4806061a12f1a03889dcea086b5662b0800aa7932a498318a2d32eb6cc45d8', 1, 1, 'rest1@gmail.com', '[]', 1, '2019-08-04 11:11:01', '2019-08-04 11:11:01', '2020-08-04 15:41:01'),
('bdf565ec6b0d3058a876152bded05c09a8789a3a1d9cdf0c89fba2ccec97d5607c7cde751b50d6b2', 1, 1, 'rest1@gmail.com', '[]', 1, '2019-08-04 11:18:17', '2019-08-04 11:18:17', '2020-08-04 15:48:17'),
('765848a37736aaf49c991469d294eea9444bcbd87c7840562082004b71c85ac2e210f2c275d067a8', 1, 1, 'rest1@gmail.com', '[]', 0, '2019-08-04 11:20:56', '2019-08-04 11:20:56', '2020-08-04 15:50:56'),
('0815f0d1f645f98407aea3a3b8723e7a4f08c943568efc3e5025c7d3c14052ebb8be428f5d6e4da5', 1, 1, 'rest1@gmail.com', '[]', 1, '2019-08-04 11:23:05', '2019-08-04 11:23:05', '2020-08-04 15:53:05'),
('9b90591f7bfb2e9607ec75d51da49d70668e707b4e8641f8f980a7162dd83e02bf60d3c30c9d0df1', 1, 1, 'rest1@gmail.com', '[]', 1, '2019-08-04 11:26:52', '2019-08-04 11:26:52', '2020-08-04 15:56:52'),
('d4306ee6e048e125d8bcaa9c98457d5f7cd3bd8f1cf05d88653aeb26c23d63b588d97062c543e173', 1, 1, 'rest1@gmail.com', '[]', 0, '2019-08-04 11:26:59', '2019-08-04 11:26:59', '2020-08-04 15:56:59'),
('1fcd693aef02bc098d7058436354595184376329fbcc7d87946c45e914c4bdd8f89173fa0a85fd97', 2, 1, 'rest2@gmail.com', '[]', 1, '2019-08-04 12:21:34', '2019-08-04 12:21:34', '2020-08-04 16:51:34'),
('3b9eaa5f2d6ece95f5c51e268ab27d1b9e7afdb54acd2e2d4462a16f2426cf7e0cff4daa411f3075', 1, 1, 'rest1@gmail.com', '[]', 0, '2019-08-04 12:37:55', '2019-08-04 12:37:55', '2020-08-04 17:07:55'),
('d88a1f00c304665add52f5865c132e4e815628f99f7176ff51477c03ebbf4da6cd08451b3ebce2a0', 2, 1, 'rest2@gmail.com', '[]', 0, '2019-08-05 10:23:25', '2019-08-05 10:23:25', '2020-08-05 14:53:25'),
('8b9b86639fedcd430aaeb086003dff8804c6d568fb8e2ad487bf2074cb636da3536dd429debe9e23', 2, 1, 'rest2@gmail.com', '[]', 0, '2019-08-06 07:11:51', '2019-08-06 07:11:51', '2020-08-06 11:41:51'),
('c7603a70db16f921129e96b758875e31bcf296aaa2a6cec918749b5c45957ecf6cd08e5b0cd35675', 2, 1, 'rest2@gmail.com', '[]', 0, '2019-08-06 07:15:37', '2019-08-06 07:15:37', '2020-08-06 11:45:37'),
('0b2025a3c9dde26726820fc8492039117436b3bb717a7b72e1d7d775c67041a617cb818368b5069f', 1, 1, 'rest1@gmail.com', '[]', 0, '2019-08-06 07:26:00', '2019-08-06 07:26:00', '2020-08-06 11:56:00'),
('4be51874576190ff05e795304ddd8233193a294617ede0de2d0281aa7e52fecc93f28369905cabe8', 1, 1, 'rest1@gmail.com', '[]', 0, '2019-08-07 07:55:12', '2019-08-07 07:55:12', '2020-08-07 12:25:12'),
('b829532b434b1600758489f518ae2a76968a3475f505b5dc29a3a5d0a1c38d7f0c7d9fd66e00ae97', 2, 1, 'rest2@gmail.com', '[]', 0, '2019-08-07 07:55:18', '2019-08-07 07:55:18', '2020-08-07 12:25:18'),
('f69a0e8b4483c16ea689ac004447be5c0012b73ce6d0d50d271aeacdba8c59b657b06000444b72e1', 1, 1, 'rest1@gmail.com', '[]', 0, '2019-08-11 08:46:32', '2019-08-11 08:46:32', '2020-08-11 13:16:32'),
('b191124c7ca1b70ec7c49f587152b0464e041288610e15afbcb05818c0c77f545479e7f5bce04a25', 2, 1, 'rest2@gmail.com', '[]', 0, '2019-08-11 08:46:43', '2019-08-11 08:46:43', '2020-08-11 13:16:43'),
('2bf522cdbbde42b4bd9e8600a0199c0a9ecc82b885e94fa95520b93dc0d6c2b4c9697ba18a936efc', 1, 1, 'rest1@gmail.com', '[]', 0, '2019-09-07 08:20:06', '2019-09-07 08:20:06', '2020-09-07 12:50:06'),
('95cbe2dc01f5e639bc6aa752270c62b5afeaa72137f9bd91db6ffde1f616b75543ad579673cc9be2', 2, 1, 'rest2@gmail.com', '[]', 1, '2019-09-07 18:46:49', '2019-09-07 18:46:49', '2020-09-07 23:16:49'),
('0c4cea4c5d13f17629fab45ca153d479246370989cb3d8a5cf4980004230349ac003fb542855badb', 1, 1, 'rest1@gmail.com', '[]', 0, '2019-09-30 11:30:10', '2019-09-30 11:30:10', '2020-09-30 15:00:10'),
('003f5673875ed09a75291eb2aebc5894bbacc0c63d1526c5b8039056c0e6cd041f950fb37f56edb4', 1, 1, 'rest1@gmail.com', '[]', 0, '2019-10-05 09:55:36', '2019-10-05 09:55:36', '2020-10-05 13:25:36'),
('9e0d0485826e1d3b1f933bcb45e2c46fb838d1f30ca2b3a28d3a47214babe9791235d9fa6ad16944', 1, 1, 'rest1@gmail.com', '[]', 1, '2019-10-05 09:58:19', '2019-10-05 09:58:19', '2020-10-05 13:28:19'),
('36a1cc427f363fb462de5a44a20352a3350544d6bfd7919ef7a167cf62c1a4c0190d9aa770dadf3f', 1, 1, 'rest1@gmail.com', '[]', 0, '2019-10-05 09:59:41', '2019-10-05 09:59:41', '2020-10-05 13:29:41'),
('05adb8b5fd44917421720c972d61dbde93733538b3e8b7ed6b484d5f089ded4c794f6335bb08b192', 1, 1, 'rest1@gmail.com', '[]', 0, '2019-10-12 10:19:42', '2019-10-12 10:19:42', '2020-10-12 13:49:42'),
('cb33ded4f603f09ffa0885c8331f757c60ad2f01ebf29643e2feae5bfbaa1c2d53d5cd3cd4cf963e', 1, 1, 'rest1@gmail.com', '[]', 0, '2019-10-13 09:16:55', '2019-10-13 09:16:55', '2020-10-13 12:46:55'),
('777d92d4c63335083fc2ba765d271aa5b9bf6ddd392a562b0ed993456d0c977c2459b9fea1b3f00f', 2, 1, 'rest2@gmail.com', '[]', 1, '2019-10-13 09:38:28', '2019-10-13 09:38:28', '2020-10-13 13:08:28'),
('c950abdf0f53d20f6c0525432fd6ee0c471d6cb5a8aa8de5b50cd2cbaf49b3f4b3870b00440c0898', 1, 1, 'rest1@gmail.com', '[]', 1, '2019-10-22 10:52:43', '2019-10-22 10:52:43', '2020-10-22 14:22:43'),
('ba1cfec4f5723c42722f458f60e9d2b128635e8f651983abdfec800e87c54978d95131828ab60619', 1, 1, 'rest1@gmail.com', '[]', 0, '2019-10-22 10:56:08', '2019-10-22 10:56:08', '2020-10-22 14:26:08');

-- --------------------------------------------------------

--
-- Table structure for table `oauth_auth_codes`
--

DROP TABLE IF EXISTS `oauth_auth_codes`;
CREATE TABLE IF NOT EXISTS `oauth_auth_codes` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `client_id` int(10) UNSIGNED NOT NULL,
  `scopes` text COLLATE utf8mb4_unicode_ci,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_clients`
--

DROP TABLE IF EXISTS `oauth_clients`;
CREATE TABLE IF NOT EXISTS `oauth_clients` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `secret` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `redirect` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `personal_access_client` tinyint(1) NOT NULL,
  `password_client` tinyint(1) NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `oauth_clients_user_id_index` (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `oauth_clients`
--

INSERT INTO `oauth_clients` (`id`, `user_id`, `name`, `secret`, `redirect`, `personal_access_client`, `password_client`, `revoked`, `created_at`, `updated_at`) VALUES
(1, NULL, 'Laravel Personal Access Client', 'Jf7WS5YB2zWRzOs8ZvaMy7ZvI3V0RY347z0i0kcK', 'http://localhost', 1, 0, 0, '2019-07-24 07:30:00', '2019-07-24 07:30:00'),
(2, NULL, 'Laravel Password Grant Client', '1s8ix1KX7MGkyXy4XoTSYHwkGjAABLjBMtxX3cw1', 'http://localhost', 0, 1, 0, '2019-07-24 07:30:00', '2019-07-24 07:30:00');

-- --------------------------------------------------------

--
-- Table structure for table `oauth_personal_access_clients`
--

DROP TABLE IF EXISTS `oauth_personal_access_clients`;
CREATE TABLE IF NOT EXISTS `oauth_personal_access_clients` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `client_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `oauth_personal_access_clients_client_id_index` (`client_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `oauth_personal_access_clients`
--

INSERT INTO `oauth_personal_access_clients` (`id`, `client_id`, `created_at`, `updated_at`) VALUES
(1, 1, '2019-07-24 07:30:00', '2019-07-24 07:30:00');

-- --------------------------------------------------------

--
-- Table structure for table `oauth_refresh_tokens`
--

DROP TABLE IF EXISTS `oauth_refresh_tokens`;
CREATE TABLE IF NOT EXISTS `oauth_refresh_tokens` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `access_token_id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `oauth_refresh_tokens_access_token_id_index` (`access_token_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
CREATE TABLE IF NOT EXISTS `orders` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `local_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `kiosk_id` int(11) DEFAULT NULL,
  `order_number` varchar(255) DEFAULT NULL,
  `is_delivered` tinyint(1) NOT NULL DEFAULT '0',
  `is_out` tinyint(1) DEFAULT '0',
  `discount_id` int(11) DEFAULT NULL,
  `cost` int(11) DEFAULT NULL,
  `d_cost` int(11) DEFAULT NULL,
  `local_time` timestamp NULL DEFAULT NULL,
  `pan` varchar(255) DEFAULT NULL,
  `req_id` varchar(255) DEFAULT NULL,
  `serial_transaction` varchar(255) DEFAULT NULL,
  `terminal_no` varchar(255) DEFAULT NULL,
  `trace_number` varchar(255) DEFAULT NULL,
  `transaction_date` date DEFAULT NULL,
  `transaction_time` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `local_id`, `user_id`, `kiosk_id`, `order_number`, `is_delivered`, `is_out`, `discount_id`, `cost`, `d_cost`, `local_time`, `pan`, `req_id`, `serial_transaction`, `terminal_no`, `trace_number`, `transaction_date`, `transaction_time`, `created_at`, `updated_at`, `deleted_at`) VALUES
(3, 1, 1, 1, '456', 1, 0, 1, 267670, 214136, '2019-10-10 10:22:07', '', '', '564546546', '1234', '564', '2019-10-22', '14:55', '2019-10-10 10:22:11', '2019-10-10 10:24:01', NULL),
(2, 1, 1, 1, '54564', 1, 0, 0, 173610, 173610, '2019-10-09 10:20:06', '', '', '564546546', '1234', '564', '2019-10-22', '14:55', '2019-10-10 10:20:11', '2019-10-10 10:23:57', NULL),
(4, 1, 1, 1, '454455', 1, 0, 1, 88636, 70908, '2019-10-10 10:22:39', '', '', '564546546', '1234', '564', '2019-10-22', '14:55', '2019-10-10 10:22:41', '2019-10-13 11:08:22', NULL),
(5, 1, 1, 1, '114565', 1, 0, 0, 56620, 56620, '2019-10-10 11:43:01', '', '', '564546546', '1234', '564', '2019-10-22', '14:55', '2019-10-10 11:43:05', '2019-10-10 12:36:42', NULL),
(6, 1, 1, 1, '1160156', 1, 1, 0, 254980, 254980, '2019-10-10 12:31:56', '', '', '564546546', '1234', '564', '2019-10-22', '14:55', '2019-10-10 12:32:00', '2019-10-13 11:08:24', NULL),
(7, 1, 1, 1, '1133314', 1, 1, 0, 110865, 110865, '2019-10-13 10:03:14', '', '', '564546546', '1234', '564', '2019-10-22', '14:55', '2019-10-13 10:03:18', '2019-10-13 11:08:26', NULL),
(8, 1, 1, 1, '1145037', 1, 1, 0, 36955, 36955, '2019-10-14 11:20:37', '', '', '564546546', '1234', '564', '2019-10-22', '14:55', '2019-10-14 11:20:41', '2019-10-22 08:33:47', NULL),
(9, 1, 1, 1, '1113318', 1, 1, 1, 137820, 110256, '2019-10-15 08:03:18', '', '', '564546546', '1234', '564', '2019-10-22', '14:55', '2019-10-15 08:03:23', '2019-10-22 08:33:50', NULL),
(10, 1, 1, 1, '111467', 1, 1, 1, 231135, 184908, '2019-10-15 08:16:07', '610433***9896', '', '35', '5089229', '157999169962', '2019-10-22', '11:46', '2019-10-15 08:16:12', '2019-10-22 08:33:52', NULL),
(11, 1, 1, 1, '1123110', 1, 0, 0, 27888, 27888, '2019-10-22 09:01:10', '610433***9896', '', '564546546', '1234', '564', '2019-10-22', '14:55', '2019-10-22 09:01:17', '2019-10-24 16:52:45', NULL),
(12, 1, 1, 1, '1123257', 1, 1, 0, 72800, 72800, '2019-10-22 09:02:57', '610433***9896', '', '564546546', '1234', '564', '2019-10-22', '14:55', '2019-10-22 09:03:03', '2019-10-24 16:52:50', NULL),
(13, 1, 1, 1, '1125852', 1, 0, 0, 67505, 67505, '2019-10-22 09:28:52', '610433***9896', '', '564546546', '1234', '564', '2019-04-13', '14:55', '2019-10-22 09:28:56', '2019-10-24 16:52:52', NULL),
(14, 1, 1, 1, '110050', 0, 0, 0, 167328, 167328, '2019-11-18 06:35:00', '610433***9896', '', '564546546', '1234', '564', '2019-04-13', '14:55', '2019-11-18 06:35:03', '2019-11-18 06:35:03', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `order_contents`
--

DROP TABLE IF EXISTS `order_contents`;
CREATE TABLE IF NOT EXISTS `order_contents` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `order_id` int(11) DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL,
  `count` int(11) DEFAULT NULL,
  `cost` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=34 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `order_contents`
--

INSERT INTO `order_contents` (`id`, `order_id`, `product_id`, `count`, `cost`, `created_at`, `updated_at`, `deleted_at`) VALUES
(6, 2, 2, 1, 35105, '2019-10-10 10:20:11', '2019-10-10 10:20:11', NULL),
(5, 2, 12, 1, 28900, '2019-10-10 10:20:11', '2019-10-10 10:20:11', NULL),
(4, 2, 1, 2, 88800, '2019-10-10 10:20:11', '2019-10-10 10:20:11', NULL),
(7, 2, 40, 1, 20805, '2019-10-10 10:20:11', '2019-10-10 10:20:11', NULL),
(8, 3, 1, 1, 48900, '2019-10-10 10:22:11', '2019-10-10 10:22:11', NULL),
(9, 3, 12, 3, 85200, '2019-10-10 10:22:11', '2019-10-10 10:22:11', NULL),
(10, 3, 2, 3, 102315, '2019-10-10 10:22:11', '2019-10-10 10:22:11', NULL),
(11, 3, 15, 1, 31255, '2019-10-10 10:22:11', '2019-10-10 10:22:11', NULL),
(12, 4, 29, 2, 79610, '2019-10-10 10:22:41', '2019-10-10 10:22:41', NULL),
(13, 4, 49, 2, 9026, '2019-10-10 10:22:41', '2019-10-10 10:22:41', NULL),
(14, 5, 41, 4, 56620, '2019-10-10 11:43:05', '2019-10-10 11:43:05', NULL),
(15, 6, 1, 2, 69800, '2019-10-10 12:32:00', '2019-10-10 12:32:00', NULL),
(16, 6, 5, 5, 171025, '2019-10-10 12:32:00', '2019-10-10 12:32:00', NULL),
(17, 6, 41, 1, 14155, '2019-10-10 12:32:00', '2019-10-10 12:32:00', NULL),
(18, 7, 14, 3, 110865, '2019-10-13 10:03:18', '2019-10-13 10:03:18', NULL),
(19, 8, 14, 1, 36955, '2019-10-14 11:20:41', '2019-10-14 11:20:41', NULL),
(20, 9, 1, 2, 69800, '2019-10-15 08:03:23', '2019-10-15 08:03:23', NULL),
(21, 9, 41, 2, 28310, '2019-10-15 08:03:23', '2019-10-15 08:03:23', NULL),
(22, 9, 43, 1, 18905, '2019-10-15 08:03:23', '2019-10-15 08:03:23', NULL),
(23, 9, 45, 1, 20805, '2019-10-15 08:03:23', '2019-10-15 08:03:23', NULL),
(24, 10, 1, 2, 75800, '2019-10-15 08:16:12', '2019-10-15 08:16:12', NULL),
(25, 10, 4, 2, 64800, '2019-10-15 08:16:12', '2019-10-15 08:16:12', NULL),
(26, 10, 25, 2, 60610, '2019-10-15 08:16:12', '2019-10-15 08:16:12', NULL),
(27, 10, 43, 1, 18905, '2019-10-15 08:16:12', '2019-10-15 08:16:12', NULL),
(28, 10, 48, 4, 11020, '2019-10-15 08:16:12', '2019-10-15 08:16:12', NULL),
(29, 11, 11, 1, 27888, '2019-10-22 09:01:17', '2019-10-22 09:01:17', NULL),
(30, 12, 1, 2, 72800, '2019-10-22 09:03:03', '2019-10-22 09:03:03', NULL),
(31, 13, 1, 1, 32900, '2019-10-22 09:28:56', '2019-10-22 09:28:56', NULL),
(32, 13, 2, 1, 34605, '2019-10-22 09:28:56', '2019-10-22 09:28:56', NULL),
(33, 14, 11, 6, 167328, '2019-11-18 06:35:03', '2019-11-18 06:35:03', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `order_content_desserts`
--

DROP TABLE IF EXISTS `order_content_desserts`;
CREATE TABLE IF NOT EXISTS `order_content_desserts` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `order_content_id` int(11) DEFAULT NULL,
  `dessert_id` int(11) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=55 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `order_content_desserts`
--

INSERT INTO `order_content_desserts` (`id`, `order_content_id`, `dessert_id`, `price`, `created_at`, `updated_at`, `deleted_at`) VALUES
(30, 8, 6, 500, '2019-10-10 10:22:11', '2019-10-10 10:22:11', NULL),
(29, 8, 3, 500, '2019-10-10 10:22:11', '2019-10-10 10:22:11', NULL),
(28, 8, 1, 500, '2019-10-10 10:22:11', '2019-10-10 10:22:11', NULL),
(27, 6, 3, 500, '2019-10-10 10:20:11', '2019-10-10 10:20:11', NULL),
(26, 6, 1, 500, '2019-10-10 10:20:11', '2019-10-10 10:20:11', NULL),
(25, 5, 1, 500, '2019-10-10 10:20:11', '2019-10-10 10:20:11', NULL),
(24, 5, 1, 500, '2019-10-10 10:20:11', '2019-10-10 10:20:11', NULL),
(23, 4, 15, 3000, '2019-10-10 10:20:11', '2019-10-10 10:20:11', NULL),
(22, 4, 12, 3000, '2019-10-10 10:20:11', '2019-10-10 10:20:11', NULL),
(21, 4, 10, 500, '2019-10-10 10:20:11', '2019-10-10 10:20:11', NULL),
(20, 4, 5, 3000, '2019-10-10 10:20:11', '2019-10-10 10:20:11', NULL),
(19, 4, 8, 500, '2019-10-10 10:20:11', '2019-10-10 10:20:11', NULL),
(18, 4, 7, 500, '2019-10-10 10:20:11', '2019-10-10 10:20:11', NULL),
(17, 4, 3, 500, '2019-10-10 10:20:11', '2019-10-10 10:20:11', NULL),
(16, 4, 1, 500, '2019-10-10 10:20:11', '2019-10-10 10:20:11', NULL),
(31, 8, 7, 500, '2019-10-10 10:22:11', '2019-10-10 10:22:11', NULL),
(32, 8, 8, 500, '2019-10-10 10:22:11', '2019-10-10 10:22:11', NULL),
(33, 8, 4, 4000, '2019-10-10 10:22:11', '2019-10-10 10:22:11', NULL),
(34, 8, 5, 3000, '2019-10-10 10:22:11', '2019-10-10 10:22:11', NULL),
(35, 8, 10, 500, '2019-10-10 10:22:11', '2019-10-10 10:22:11', NULL),
(36, 8, 12, 3000, '2019-10-10 10:22:11', '2019-10-10 10:22:11', NULL),
(37, 8, 15, 3000, '2019-10-10 10:22:11', '2019-10-10 10:22:11', NULL),
(38, 9, 1, 500, '2019-10-10 10:22:11', '2019-10-10 10:22:11', NULL),
(39, 15, 1, 500, '2019-10-10 12:32:00', '2019-10-10 12:32:00', NULL),
(40, 15, 3, 500, '2019-10-10 12:32:00', '2019-10-10 12:32:00', NULL),
(41, 15, 6, 500, '2019-10-10 12:32:00', '2019-10-10 12:32:00', NULL),
(42, 15, 7, 500, '2019-10-10 12:32:00', '2019-10-10 12:32:00', NULL),
(43, 20, 1, 500, '2019-10-15 08:03:23', '2019-10-15 08:03:23', NULL),
(44, 20, 3, 500, '2019-10-15 08:03:23', '2019-10-15 08:03:23', NULL),
(45, 20, 6, 500, '2019-10-15 08:03:23', '2019-10-15 08:03:23', NULL),
(46, 20, 7, 500, '2019-10-15 08:03:23', '2019-10-15 08:03:23', NULL),
(47, 24, 3, 500, '2019-10-15 08:16:12', '2019-10-15 08:16:12', NULL),
(48, 24, 6, 500, '2019-10-15 08:16:12', '2019-10-15 08:16:12', NULL),
(49, 24, 7, 500, '2019-10-15 08:16:12', '2019-10-15 08:16:12', NULL),
(50, 24, 10, 500, '2019-10-15 08:16:12', '2019-10-15 08:16:12', NULL),
(51, 24, 15, 3000, '2019-10-15 08:16:12', '2019-10-15 08:16:12', NULL),
(52, 30, 3, 500, '2019-10-22 09:03:03', '2019-10-22 09:03:03', NULL),
(53, 30, 5, 3000, '2019-10-22 09:03:03', '2019-10-22 09:03:03', NULL),
(54, 32, 3, 500, '2019-10-22 09:28:56', '2019-10-22 09:28:56', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `discount_percent` int(11) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `is_available` tinyint(1) DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=63 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `user_id`, `category_id`, `name`, `price`, `discount_percent`, `description`, `image`, `is_available`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 1, 'پیتزا توکیو', 32900, 0, 'مواد تشکیل دهنده: خمیر پیتزای آمریکایی، سوسیس ژاپنی، قارچ، گوجه، فلفل دلمه، پنیر مخصوص ، سس بیانز', 'https://sib360.com/_upload/foodstuffs/2.png', 1, '2019-08-05 19:30:00', '2019-10-24 16:53:36', NULL),
(12, 1, 1, 'پیتزا مارگاریتا آمریکایی', 27900, 0, 'مواد تشکیل دهنده: خمیرپیتزای آمریکایی، گوجه، سس مخصوص ، پنیر مخصوص', 'https://sib360.com/_upload/foodstuffs/23.png', 1, '2019-08-05 19:30:00', '2019-10-13 10:51:23', NULL),
(2, 1, 1, 'پیتزا میکس', 35900, 5, 'مواد تشکیل دهنده: خمیرپیتزای امریکایی، فیله مرغ گریل شده، گوشت نعنایی، سس بیانز، ژامبون مرغ، فلفل دلمه، قارچ، پنیر، زیتون و گوجه', 'https://sib360.com/_upload/foodstuffs/3.png', 1, '2019-08-05 19:30:00', '2019-08-05 19:30:00', NULL),
(11, 1, 1, 'پیتزا سبزیجات آمریکایی', 29355, 5, 'مواد تشکیل دهنده: خمیرپیتزای آمریکایی،قارچ،ذرت، گوجه، زیتون، فلفل دلمه، پنیر مخصوص ، سس مخصوص ، سس بیانز', 'https://sib360.com/_upload/foodstuffs/24.png', 1, '2019-08-05 19:30:00', '2019-10-13 10:49:00', NULL),
(3, 1, 1, 'بک فایر', 36005, 5, 'مواد تشکیل دهنده: خمیر پیتزای آمریکای ، سس مخصوص ، گوشت چرخکرده، چیپس ذرت ، قارچ ، پنیر مخصوص، ذرت ، فلفل هالوپینو', 'https://sib360.com/_upload/foodstuffs/60.jpg', 1, '2019-08-05 19:30:00', '2019-08-05 19:30:00', NULL),
(5, 1, 1, 'پیتزا کالزون', 36005, 5, 'مواد تشکیل دهنده: خمیر پیتزا آمریکایی ، مرغ طعم دار شده ، کنجد ،پنیر مخصوص ،فلفل دلمه ،گوشت چرخکرده طعم دار شده ،سس مخصوص', 'https://sib360.com/_upload/foodstuffs/25.png', 1, '2019-08-05 19:30:00', '2019-08-05 19:30:00', NULL),
(4, 1, 1, 'پیتزا گوشت و قارچ', 34105, 5, 'مواد تشکیل دهنده: خمیر پیتزا آمریکایی ، گوشت چرخ کرده ، فلفل دلمه ، قارچ، سس مخصوص، پنیر مخصوص', 'https://sib360.com/_upload/foodstuffs/60.jpg', 1, '2019-08-05 19:30:00', '2019-08-05 19:30:00', NULL),
(22, 1, 2, 'چهار فصل', 44900, 0, 'مواد تشکیل دهنده: ترکیبی از پیتزاهای کنی باله ،چیکن گورمه ، سبزیجات ، پپرونی به صورت تفکیک شده', 'https://sib360.com/_upload/foodstuffs/12.png', 1, '2019-08-05 19:30:00', '2019-08-05 19:30:00', NULL),
(20, 1, 2, 'بیف گورمه', 46900, 5, 'مواد تشکیل دهنده: خمیر نازک ایتالیایی، سس سفید ایتالیایی، راسته گوساله رست بیف، قارچ، گوجه، پنیر مخصوص', 'https://sib360.com/_upload/foodstuffs/7.png', 1, '2019-08-05 19:30:00', '2019-08-05 19:30:00', NULL),
(21, 1, 2, 'چیکن گورمه', 40900, 5, 'مواد تشکیل دهنده: خمیر نازک ایتالیایی ، سس سفید ایتالیایی، فیله مرغ گریل شده، قارچ، گوجه، پنیرمخصوص ، زیتون', 'https://sib360.com/_upload/foodstuffs/8.png', 1, '2019-08-05 19:30:00', '2019-08-05 19:30:00', NULL),
(19, 1, 2, 'سوپریم', 43900, 5, 'مواد تشکیل دهنده: خمیر نازک ایتالیایی ، فیله مرغ گریل شده، گوشت چرخکرده ، ژامبون ، سس بیانز، فلفل دلمه، قارچ، پنیر، زیتون و گوجه و پنیر مخصوص', 'https://sib360.com/_upload/foodstuffs/6.png', 1, '2019-08-05 19:30:00', '2019-10-13 10:49:03', NULL),
(17, 1, 1, 'غذای کودک پسرانه', 37900, 5, 'مواد تشکیل دهنده: پیتزای مرغ (خمیر نازک ایتالیایی ، سس مخصوص ، قارچ ، مرغ گریل شده ، ذرت ، پنیر مخصوص) + سیب زمینی+ آب میوه + اسباب بازی', 'https://sib360.com/_upload/foodstuffs/65.png', 1, '2019-08-05 19:30:00', '2019-08-05 19:30:00', NULL),
(18, 1, 1, 'غذای کودک دخترانه', 37900, 0, 'مواد تشکیل دهنده: پیتزای مرغ (خمیر نازک ایتالیایی ، سس مخصوص ، قارچ ، مرغ گریل شده ، ذرت ، پنیر مخصوص) + سیب زمینی+ آب میوه + اسباب بازی', 'https://sib360.com/_upload/foodstuffs/71.png', 1, '2019-08-05 19:30:00', '2019-08-05 19:30:00', NULL),
(15, 1, 1, 'پیتزا مونترال', 32900, 5, 'مواد تشکیل دهنده: خمیر پیتزای آمریکایی، ژامبون ،فلفل دلمه، زیتون، قارچ، سس مخصوص، پنیر مخصوص', 'https://sib360.com/_upload/foodstuffs/5.png', 1, '2019-08-05 19:30:00', '2019-10-13 10:51:35', NULL),
(16, 1, 1, 'پیتزا آفریکانا', 32900, 5, 'مواد تشکیل دهنده: خمیرپیتزای آمریکایی، مرغ گریل شده، فلفل دلمه، قارچ، سس مخصوص، پنیر مخصوص ، پیاز', 'https://sib360.com/_upload/foodstuffs/4.png', 1, '2019-08-05 19:30:00', '2019-08-05 19:30:00', NULL),
(13, 1, 1, ' پیتزا پپرونی آمریکایی', 32900, 5, 'مواد تشکیل دهنده: خمیرپیتزای آمریکایی ، سوسیس پپرونی، سس مخصوص، پنیر مخصوص', 'https://sib360.com/_upload/foodstuffs/22.png', 1, '2019-08-05 19:30:00', '2019-08-05 19:30:00', NULL),
(14, 1, 1, 'پیتزا آپاچینو', 38900, 5, 'مواد تشکیل دهنده: خمیرپیتزای آمریکایی، رست بیف، قارچ، زیتون، سس بیانز، پنیر مخصوص', 'https://sib360.com/_upload/foodstuffs/21.png', 1, '2019-08-05 19:30:00', '2019-08-05 19:30:00', NULL),
(23, 1, 2, 'کاپریچیوزا', 39900, 5, 'مواد تشکیل دهنده: خمیر نازک ایتالیایی ، سس مخصوص، ژامبون، پنیر مخصوص، قارچ، زیتون ،گوجه ، فلفل دلمه', 'https://sib360.com/_upload/foodstuffs/13.png', 1, '2019-08-05 19:30:00', '2019-08-05 19:30:00', NULL),
(24, 1, 2, 'پپرونی ایتالیائی', 36900, 5, 'مواد تشکیل دهنده: خمیر نازک ایتالیایی ، سوسیس پپرونی، سس مخصوص، پنیر مخصوص', 'https://sib360.com/_upload/foodstuffs/15.png', 1, '2019-08-05 19:30:00', '2019-08-05 19:30:00', NULL),
(25, 1, 2, 'مارگاریتا', 31900, 5, 'مواد تشکیل دهنده: گوجه، سس پستو، پنیر', 'https://sib360.com/_upload/foodstuffs/8.png', 1, '2019-08-05 19:30:00', '2019-08-05 19:30:00', NULL),
(26, 1, 2, 'چانو', 47900, 5, 'مواد تشکیل دهنده: خمیر نازک ایتالیایی ، گوشت استیک، قارچ، زیتون، سس سیر مخصوص، پنیر مخصوص', 'https://sib360.com/_upload/foodstuffs/19.png', 1, '2019-08-05 19:30:00', '2019-08-05 19:30:00', NULL),
(27, 1, 2, 'سبزیجات ایتالیایی', 34900, 5, 'مواد تشکیل دهنده: قارچ،ذرت، گوجه، زیتون، فلفل دلمه، پنیر', 'https://sib360.com/_upload/foodstuffs/75.jpg', 1, '2019-08-05 19:30:00', '2019-08-05 19:30:00', NULL),
(28, 1, 2, 'بیکن', 46900, 5, 'مواد تشکیل دهنده: خمیر نازک ایتالیایی، سس سیر مخصوص، بیکن، اسفناج، قارچ، پیاز، پنیر مخصوص', 'https://sib360.com/_upload/foodstuffs/76.png', 1, '2019-08-05 19:30:00', '2019-08-05 19:30:00', NULL),
(29, 1, 3, 'سوپر برگر', 41900, 5, 'مواد تشکیل دهنده: گوشت مخصوص ، پنیر دیپ چدار، ژامبون ، نان مخصوص فرانسوی طبخ شده با پنیر پروسس ، سیب زمینی سرخ شده معطر ، سس قارچ ، هات داگ', 'https://sib360.com/_upload/foodstuffs/1.jpg', 1, '2019-08-05 19:30:00', '2019-08-05 19:30:00', NULL),
(30, 1, 3, 'چیزبرگر فرانسوی', 39900, 5, 'مواد تشکیل دهنده: گوشت مخصوص ، پنیر دیپ چدار، ژامبون ، نان مخصوص فرانسوی طبخ شده با پنیر پروسس ، سیب زمینی سرخ شده معطر ، سس قارچ', 'https://sib360.com/_upload/foodstuffs/27.jpg', 1, '2019-08-05 19:30:00', '2019-08-05 19:30:00', NULL),
(31, 1, 3, 'همبرگر', 24900, 5, 'مواد تشکیل دهنده: گوشت مخصوص ، کاهو، گوجه، خیارشور، پیاز کاراملی ، سس مخصوص ساندویچ', 'https://sib360.com/_upload/foodstuffs/30.png', 1, '2019-08-05 19:30:00', '2019-08-05 19:30:00', NULL),
(32, 1, 3, 'هالوپینو', 25900, 5, 'مواد تشکیل دهنده: گوشت مخصوص ، فلفل هالوپینو، پنیر دیپ چدار، کاهو، گوجه، خیارشور ، پیاز کاراملی ، سس مخصوص ساندویچ', 'https://sib360.com/_upload/foodstuffs/31.png', 1, '2019-08-05 19:30:00', '2019-08-05 19:30:00', NULL),
(33, 1, 3, 'اسموکی', 25900, 5, 'مواد تشکیل دهنده: گوشت دودی ، کاهو، گوجه، خیارشور،سس مخصوص ساندویچ ، پیاز کاراملی', 'https://sib360.com/_upload/foodstuffs/32.png', 1, '2019-08-05 19:30:00', '2019-08-05 19:30:00', NULL),
(34, 1, 3, 'چیز برگر', 26900, 5, 'مواد تشکیل دهنده: گوشت مخصوص ، کاهو، گوجه، خیارشور ، پیاز کاراملی ، پنیر دیپ چدار ،سس مخصوص ساندویچ', 'https://sib360.com/_upload/foodstuffs/33.png', 1, '2019-08-05 19:30:00', '2019-08-05 19:30:00', NULL),
(35, 1, 3, 'ماشروم', 28900, 5, 'مواد تشکیل دهنده: گوشت مخصوص ، قارچ، پنیر پروسس، کاهو، گوجه، خیارشور ، پیاز کاراملی، سس مخصوص ساندویچ', 'https://sib360.com/_upload/foodstuffs/34.png', 1, '2019-08-05 19:30:00', '2019-08-05 19:30:00', NULL),
(36, 1, 3, 'چیکوچی', 24900, 5, 'مواد تشکیل دهنده: شنیسل مرغ ویژه (بیکن، سبزیجات معطر، پنیر چدار)، کاهو، گوجه، خیارشور، سس مخصوص ساندویچ، سس سالسا', 'https://sib360.com/_upload/foodstuffs/83.jpg', 1, '2019-08-05 19:30:00', '2019-08-05 19:30:00', NULL),
(37, 1, 4, 'رست بیف', 31900, 5, 'مواد تشکیل دهنده: گوشت رست بیف، قارچ، پنیر، گوجه ، سس مخصوص ساندویچ ، خیارشور', 'https://sib360.com/_upload/foodstuffs/37.jpg', 1, '2019-08-05 19:30:00', '2019-08-05 19:30:00', NULL),
(38, 1, 4, 'هات داگ ویژه', 23900, 5, 'مواد تشکیل دهنده: هات داگ ویژه ، قارچ، پنیر دیپ چدار، خیارشور ،گوجه ، سس مخصوص ساندویچ', 'https://sib360.com/_upload/foodstuffs/38.jpg', 1, '2019-08-05 19:30:00', '2019-08-05 19:30:00', NULL),
(39, 1, 4, 'مرغ ویژه', 27900, 5, 'مواد تشکیل دهنده: مرغ گریل شده، کاهو، گوجه، قارچ، پنیر پروسس ، خیارشور، سس مخصوص ساندویچ', 'https://sib360.com/_upload/foodstuffs/39.jpg', 1, '2019-08-05 19:30:00', '2019-08-05 19:30:00', NULL),
(40, 1, 5, 'نان سیر', 21900, 5, '', 'https://sib360.com/_upload/foodstuffs/9.png', 1, '2019-08-05 19:30:00', '2019-08-05 19:30:00', NULL),
(41, 1, 5, 'سیب زمینی پنیر ویژه', 14900, 5, '', 'https://sib360.com/_upload/foodstuffs/10.jpg', 1, '2019-08-05 19:30:00', '2019-08-05 19:30:00', NULL),
(42, 1, 5, 'سیب زمینی', 12900, 5, '', 'https://sib360.com/_upload/foodstuffs/11.jpg', 1, '2019-08-05 19:30:00', '2019-08-05 19:30:00', NULL),
(43, 1, 5, 'سالاد مرغ کرنبری', 19900, 5, '', 'https://sib360.com/_upload/foodstuffs/40.jpg', 1, '2019-08-05 19:30:00', '2019-08-05 19:30:00', NULL),
(44, 1, 5, 'سالاد سبز ویژه سیب', 20900, 5, 'مواد تشکیل دهنده: کاهو پیچ، کاهو فرانسه سبز، کاهو فرانسه بنفش، گوجه گیلاسی، گوجه خشک، پنیر موزارلا، ریحان، کاپاریس، نان مدیترانه ای تست شده،سس مخصوص', 'https://sib360.com/_upload/foodstuffs/81.jpg', 1, '2019-08-05 19:30:00', '2019-08-05 19:30:00', NULL),
(45, 1, 5, 'سالاد اسفناج', 21900, 5, '', 'https://sib360.com/_upload/foodstuffs/82.png', 1, '2019-08-05 19:30:00', '2019-08-05 19:30:00', NULL),
(46, 1, 6, 'نوشابه کوکا قوطی', 2900, 5, '', 'https://sib360.com/_upload/foodstuffs/42.png', 1, '2019-08-05 19:30:00', '2019-08-05 19:30:00', NULL),
(47, 1, 6, 'نوشابه فانتا قوطی', 2900, 5, '', 'https://sib360.com/_upload/foodstuffs/43.png', 1, '2019-08-05 19:30:00', '2019-08-05 19:30:00', NULL),
(48, 1, 6, 'نوشابه اسپرایت قوطی', 2900, 5, '', 'https://sib360.com/_upload/foodstuffs/44.png', 1, '2019-08-05 19:30:00', '2019-08-05 19:30:00', NULL),
(49, 1, 6, 'نوشابه کوکا خانواده', 4750, 5, '', 'https://sib360.com/_upload/foodstuffs/45.png', 1, '2019-08-05 19:30:00', '2019-08-05 19:30:00', NULL),
(50, 1, 6, 'نوشابه فانتا خانواده', 4750, 5, '', 'https://sib360.com/_upload/foodstuffs/46.png', 1, '2019-08-05 19:30:00', '2019-08-05 19:30:00', NULL),
(51, 1, 6, 'نوشابه اسپرایت خانواده', 4750, 5, '', 'https://sib360.com/_upload/foodstuffs/47.png', 1, '2019-08-05 19:30:00', '2019-08-05 19:30:00', NULL),
(52, 1, 6, 'نوشابه رژیمی قوطی', 2900, 5, '', 'https://sib360.com/_upload/foodstuffs/48.png', 1, '2019-08-05 19:30:00', '2019-08-05 19:30:00', NULL),
(53, 1, 6, 'آب معدنی', 1500, 5, '', 'https://sib360.com/_upload/foodstuffs/49.png', 1, '2019-08-05 19:30:00', '2019-08-05 19:30:00', NULL),
(54, 1, 6, '(ماءالشعیر قوطی هی دی (لیمو', 4000, 5, '', 'https://sib360.com/_upload/foodstuffs/72.png', 1, '2019-08-05 19:30:00', '2019-08-05 19:30:00', NULL),
(55, 1, 6, '(ماءالشعیر قوطی هی دی (استوایی', 4000, 5, '', 'https://sib360.com/_upload/foodstuffs/73.png', 1, '2019-08-05 19:30:00', '2019-08-05 19:30:00', NULL),
(56, 1, 6, '(ماءالشعیر قوطی هی دی (کلاسیک', 4000, 5, '', 'https://sib360.com/_upload/foodstuffs/74.png', 1, '2019-08-05 19:30:00', '2019-08-05 19:30:00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `product_desserts`
--

DROP TABLE IF EXISTS `product_desserts`;
CREATE TABLE IF NOT EXISTS `product_desserts` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `product_id` int(11) NOT NULL,
  `dessert_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=123 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_desserts`
--

INSERT INTO `product_desserts` (`id`, `product_id`, `dessert_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 1, '2019-08-05 19:30:00', '2019-10-09 07:20:00', '2019-10-09 07:20:00'),
(2, 1, 2, '2019-08-05 19:30:00', '2019-10-09 07:20:00', '2019-10-09 07:20:00'),
(3, 1, 3, '2019-08-05 19:30:00', '2019-08-05 19:30:00', NULL),
(4, 1, 4, '2019-08-05 19:30:00', '2019-08-05 19:30:00', NULL),
(5, 1, 5, '2019-08-05 19:30:00', '2019-08-05 19:30:00', NULL),
(6, 2, 1, '2019-08-05 19:30:00', '2019-08-05 19:30:00', NULL),
(7, 2, 2, '2019-08-05 19:30:00', '2019-08-05 19:30:00', NULL),
(8, 2, 3, '2019-08-05 19:30:00', '2019-08-05 19:30:00', NULL),
(9, 1, 6, '2019-08-05 19:30:00', '2019-08-05 19:30:00', NULL),
(10, 1, 7, '2019-08-05 19:30:00', '2019-08-05 19:30:00', NULL),
(11, 1, 8, '2019-08-05 19:30:00', '2019-08-05 19:30:00', NULL),
(12, 1, 9, '2019-08-05 19:30:00', '2019-08-05 19:30:00', NULL),
(13, 1, 10, '2019-08-05 19:30:00', '2019-08-05 19:30:00', NULL),
(14, 1, 11, '2019-08-05 19:30:00', '2019-08-05 19:30:00', NULL),
(15, 1, 12, '2019-08-05 19:30:00', '2019-08-05 19:30:00', NULL),
(16, 1, 13, '2019-08-05 19:30:00', '2019-08-05 19:30:00', NULL),
(17, 1, 14, '2019-08-05 19:30:00', '2019-08-05 19:30:00', NULL),
(18, 1, 15, '2019-08-05 19:30:00', '2019-08-05 19:30:00', NULL),
(19, 1, 16, '2019-08-05 19:30:00', '2019-08-05 19:30:00', NULL),
(20, 1, 17, '2019-08-05 19:30:00', '2019-08-05 19:30:00', NULL),
(21, 57, 2, '2019-10-08 09:56:04', '2019-10-08 09:56:04', NULL),
(22, 57, 3, '2019-10-08 09:56:04', '2019-10-08 09:56:04', NULL),
(23, 57, 4, '2019-10-08 09:56:04', '2019-10-08 09:56:04', NULL),
(24, 57, 5, '2019-10-08 09:56:04', '2019-10-08 09:56:04', NULL),
(25, 57, 6, '2019-10-08 09:56:04', '2019-10-08 09:56:04', NULL),
(26, 57, 7, '2019-10-08 09:56:04', '2019-10-08 09:56:04', NULL),
(27, 57, 8, '2019-10-08 09:56:04', '2019-10-08 09:56:04', NULL),
(28, 57, 9, '2019-10-08 09:56:04', '2019-10-08 09:56:04', NULL),
(29, 57, 10, '2019-10-08 09:56:04', '2019-10-08 09:56:04', NULL),
(30, 58, 2, '2019-10-08 11:09:21', '2019-10-08 11:09:21', NULL),
(31, 58, 3, '2019-10-08 11:09:21', '2019-10-08 11:09:21', NULL),
(32, 58, 4, '2019-10-08 11:09:21', '2019-10-08 11:09:21', NULL),
(33, 58, 5, '2019-10-08 11:09:21', '2019-10-08 11:09:21', NULL),
(34, 58, 6, '2019-10-08 11:09:21', '2019-10-08 11:09:21', NULL),
(35, 58, 7, '2019-10-08 11:09:21', '2019-10-08 11:09:21', NULL),
(36, 58, 8, '2019-10-08 11:09:21', '2019-10-08 11:09:21', NULL),
(37, 58, 9, '2019-10-08 11:09:21', '2019-10-08 11:09:21', NULL),
(38, 58, 10, '2019-10-08 11:09:21', '2019-10-08 11:09:21', NULL),
(39, 58, 11, '2019-10-08 11:09:21', '2019-10-08 11:09:21', NULL),
(40, 58, 12, '2019-10-08 11:09:21', '2019-10-08 11:09:21', NULL),
(41, 58, 13, '2019-10-08 11:09:21', '2019-10-08 11:09:21', NULL),
(42, 58, 14, '2019-10-08 11:09:21', '2019-10-08 11:09:21', NULL),
(43, 58, 15, '2019-10-08 11:09:21', '2019-10-08 11:09:21', NULL),
(44, 58, 16, '2019-10-08 11:09:21', '2019-10-08 11:09:21', NULL),
(45, 58, 17, '2019-10-08 11:09:21', '2019-10-08 11:09:21', NULL),
(46, 59, 2, '2019-10-08 11:09:28', '2019-10-08 11:09:28', NULL),
(47, 59, 3, '2019-10-08 11:09:28', '2019-10-08 11:09:28', NULL),
(48, 59, 4, '2019-10-08 11:09:28', '2019-10-08 11:09:28', NULL),
(49, 59, 5, '2019-10-08 11:09:28', '2019-10-08 11:09:28', NULL),
(50, 59, 6, '2019-10-08 11:09:28', '2019-10-08 11:09:28', NULL),
(51, 59, 7, '2019-10-08 11:09:28', '2019-10-08 11:09:28', NULL),
(52, 59, 8, '2019-10-08 11:09:28', '2019-10-08 11:09:28', NULL),
(53, 59, 9, '2019-10-08 11:09:28', '2019-10-08 11:09:28', NULL),
(54, 59, 10, '2019-10-08 11:09:28', '2019-10-08 11:09:28', NULL),
(55, 59, 11, '2019-10-08 11:09:28', '2019-10-08 11:09:28', NULL),
(56, 59, 12, '2019-10-08 11:09:28', '2019-10-08 11:09:28', NULL),
(57, 59, 13, '2019-10-08 11:09:28', '2019-10-08 11:09:28', NULL),
(58, 59, 14, '2019-10-08 11:09:28', '2019-10-08 11:09:28', NULL),
(59, 59, 15, '2019-10-08 11:09:28', '2019-10-08 11:09:28', NULL),
(60, 59, 16, '2019-10-08 11:09:28', '2019-10-08 11:09:28', NULL),
(61, 59, 17, '2019-10-08 11:09:28', '2019-10-08 11:09:28', NULL),
(62, 60, 2, '2019-10-08 11:09:42', '2019-10-08 11:09:42', NULL),
(63, 60, 3, '2019-10-08 11:09:42', '2019-10-08 11:09:42', NULL),
(64, 60, 4, '2019-10-08 11:09:42', '2019-10-08 11:09:42', NULL),
(65, 60, 5, '2019-10-08 11:09:42', '2019-10-08 11:09:42', NULL),
(66, 60, 6, '2019-10-08 11:09:42', '2019-10-08 11:09:42', NULL),
(67, 60, 7, '2019-10-08 11:09:42', '2019-10-08 11:09:42', NULL),
(68, 60, 8, '2019-10-08 11:09:42', '2019-10-08 11:09:42', NULL),
(69, 60, 9, '2019-10-08 11:09:42', '2019-10-08 11:09:42', NULL),
(70, 60, 10, '2019-10-08 11:09:42', '2019-10-08 11:09:42', NULL),
(71, 60, 11, '2019-10-08 11:09:42', '2019-10-08 11:09:42', NULL),
(72, 60, 12, '2019-10-08 11:09:42', '2019-10-08 11:09:42', NULL),
(73, 60, 13, '2019-10-08 11:09:42', '2019-10-08 11:09:42', NULL),
(74, 60, 14, '2019-10-08 11:09:42', '2019-10-08 11:09:42', NULL),
(75, 60, 15, '2019-10-08 11:09:42', '2019-10-08 11:09:42', NULL),
(76, 60, 16, '2019-10-08 11:09:42', '2019-10-08 11:09:42', NULL),
(77, 60, 17, '2019-10-08 11:09:42', '2019-10-08 11:09:42', NULL),
(78, 61, 1, '2019-10-08 11:11:46', '2019-10-08 11:11:46', NULL),
(79, 61, 2, '2019-10-08 11:11:46', '2019-10-08 11:11:46', NULL),
(80, 61, 3, '2019-10-08 11:11:46', '2019-10-08 11:11:46', NULL),
(81, 61, 4, '2019-10-08 11:11:46', '2019-10-08 11:11:46', NULL),
(82, 61, 5, '2019-10-08 11:11:46', '2019-10-08 11:11:46', NULL),
(83, 61, 6, '2019-10-08 11:11:46', '2019-10-08 11:11:46', NULL),
(84, 61, 7, '2019-10-08 11:11:46', '2019-10-08 11:11:46', NULL),
(85, 61, 8, '2019-10-08 11:11:46', '2019-10-08 11:11:46', NULL),
(86, 61, 9, '2019-10-08 11:11:46', '2019-10-08 11:11:46', NULL),
(87, 61, 10, '2019-10-08 11:11:46', '2019-10-08 11:11:46', NULL),
(88, 61, 11, '2019-10-08 11:11:46', '2019-10-08 11:11:46', NULL),
(89, 61, 12, '2019-10-08 11:11:46', '2019-10-08 11:11:46', NULL),
(90, 61, 13, '2019-10-08 11:11:46', '2019-10-08 11:11:46', NULL),
(91, 61, 14, '2019-10-08 11:11:46', '2019-10-08 11:11:46', NULL),
(92, 61, 15, '2019-10-08 11:11:46', '2019-10-08 11:11:46', NULL),
(93, 61, 16, '2019-10-08 11:11:46', '2019-10-08 11:11:46', NULL),
(94, 61, 17, '2019-10-08 11:11:46', '2019-10-08 11:11:46', NULL),
(95, 62, 2, '2019-10-08 11:11:50', '2019-10-08 11:11:50', NULL),
(96, 62, 3, '2019-10-08 11:11:50', '2019-10-08 11:11:50', NULL),
(97, 62, 4, '2019-10-08 11:11:50', '2019-10-08 11:11:50', NULL),
(98, 62, 5, '2019-10-08 11:11:50', '2019-10-08 11:11:50', NULL),
(99, 62, 6, '2019-10-08 11:11:50', '2019-10-08 11:11:50', NULL),
(100, 62, 7, '2019-10-08 11:11:50', '2019-10-08 11:11:50', NULL),
(101, 62, 8, '2019-10-08 11:11:50', '2019-10-08 11:11:50', NULL),
(102, 62, 9, '2019-10-08 11:11:50', '2019-10-08 11:11:50', NULL),
(103, 62, 10, '2019-10-08 11:11:50', '2019-10-08 11:11:50', NULL),
(104, 62, 11, '2019-10-08 11:11:50', '2019-10-08 11:11:50', NULL),
(105, 62, 12, '2019-10-08 11:11:50', '2019-10-08 11:11:50', NULL),
(106, 62, 13, '2019-10-08 11:11:50', '2019-10-08 11:11:50', NULL),
(107, 62, 14, '2019-10-08 11:11:50', '2019-10-08 11:11:50', NULL),
(108, 62, 15, '2019-10-08 11:11:50', '2019-10-08 11:11:50', NULL),
(109, 62, 16, '2019-10-08 11:11:50', '2019-10-08 11:11:50', NULL),
(110, 62, 17, '2019-10-08 11:11:50', '2019-10-08 11:11:50', NULL),
(111, 1, 1, '2019-10-09 07:20:18', '2019-10-09 07:20:18', NULL),
(112, 1, 2, '2019-10-09 07:20:18', '2019-10-09 07:20:18', NULL),
(113, 12, 1, '2019-10-09 07:26:06', '2019-10-09 08:19:25', '2019-10-09 08:19:25'),
(114, 12, 2, '2019-10-09 07:28:42', '2019-10-09 07:28:45', '2019-10-09 07:28:45'),
(115, 12, 2, '2019-10-09 08:19:25', '2019-10-09 08:19:25', NULL),
(116, 12, 1, '2019-10-09 08:19:55', '2019-10-09 08:19:55', NULL),
(119, 1, 19, '2019-08-05 19:30:00', '2019-08-05 19:30:00', NULL),
(120, 1, 20, '2019-08-05 19:30:00', '2019-08-05 19:30:00', NULL),
(121, 1, 21, '2019-08-05 19:30:00', '2019-08-05 19:30:00', NULL),
(122, 1, 22, '2019-08-05 19:30:00', '2019-08-05 19:30:00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `type` varchar(255) DEFAULT NULL,
  `role` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `type`, `role`, `name`, `phone`, `address`, `image`, `email`, `password`, `remember_token`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'restaurant', 'restaurant-admin', 'rest1', '0414567898', 'تبریز خیابان ورزش کوی پامچال کوچه مینو پلاک 66', 'https://www.jasna.sk/fileadmin/sandbox/uploads/PWH_7635.jpg', 'rest1@gmail.com', '$2y$10$Pf0MmYm/l6gGtt477dbijO8DSJjg2Of/myeQVj7K1kY0W6inR8gN6', 'tBZyQhbas8D1KjjJsPYRkjW11bgM45g6rUd216wSNFBSsr1Yelp81sW90jme', '2019-07-25 03:18:47', '2019-10-09 12:48:43', NULL),
(2, 'restaurant', 'restaurant-admin', 'restaurant2', '024154554', 'تبریز خیابان ورزش کوی پامچال کوچه مینو پلاک 66', 'https://www.jasna.sk/fileadmin/sandbox/uploads/PWH_7635.jpg', 'rest2@gmail.com', '$2y$10$XXErxY9T/FiSBYIMyJ2.ZOh4.lI1jX8AtZVRW4zGUu1J9tcqOxVHe', '', '2019-07-25 03:18:47', '2019-07-25 03:18:47', NULL),
(3, 'admin', 'super-admin', 'admin', '0414567898', 'تبریز خیابان ورزش کوی پامچال کوچه مینو پلاک 66', 'uploads/images/2019/10/63res.jpg', 'admin@gmail.com', '$2y$10$Pf0MmYm/l6gGtt477dbijO8DSJjg2Of/myeQVj7K1kY0W6inR8gN6', 'LK3wLZLRqWrTpz6XpGvVJnNrkuNTtyOR5jOnWj09Y5gYX77Wf4qgOjYZ9lyw', '2019-07-25 03:18:47', '2019-10-09 12:48:43', NULL),
(4, 'restaurant', 'restaurant-admin', 'رستوران تخت جمشید', '54564', 'تبریز خیابان ورزش کوی پامچال کوچه مینو پلاک 66', 'http://localhost:8080/kiosk/uploads/images/2019/10/17res.jpg', 'rest3@gmail.com', '$2y$10$f8P1dOhpu7O23XM0PyZ0T..dwqctPAvJ2IMt00bFv9ZJVdFS3yOxS', NULL, '2019-10-12 11:19:24', '2019-10-12 11:46:41', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user_kiosks`
--

DROP TABLE IF EXISTS `user_kiosks`;
CREATE TABLE IF NOT EXISTS `user_kiosks` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `kiosk_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_kiosks`
--

INSERT INTO `user_kiosks` (`id`, `user_id`, `kiosk_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 1, '2019-07-26 19:30:00', '2019-07-26 19:30:00', NULL),
(2, 2, 1, '2019-07-26 19:30:00', '2019-07-26 19:30:00', NULL),
(3, 4, 2, '2019-10-12 11:19:24', '2019-10-12 11:19:24', NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
