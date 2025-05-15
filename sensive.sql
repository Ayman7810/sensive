-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               8.4.3 - MySQL Community Server - GPL
-- Server OS:                    Win64
-- HeidiSQL Version:             12.8.0.6908
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for sensive
-- DROP DATABASE IF EXISTS `sensive`;
-- CREATE DATABASE IF NOT EXISTS `sensive` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `if0_38885466_sensive`;

-- Dumping structure for table sensive.blogs
DROP TABLE IF EXISTS `blogs`;
CREATE TABLE IF NOT EXISTS `blogs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` bigint unsigned DEFAULT NULL,
  `user_id` bigint unsigned DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `blogs_category_id_foreign` (`category_id`),
  KEY `blogs_user_id_foreign` (`user_id`),
  CONSTRAINT `blogs_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`),
  CONSTRAINT `blogs_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table sensive.blogs: ~10 rows (approximately)
DELETE FROM `blogs`;
INSERT INTO `blogs` (`id`, `name`, `desc`, `image`, `category_id`, `user_id`, `created_at`, `updated_at`) VALUES
	(3, 'Tamekah Sellers', 'Iste autem sit quo', '1740505389-1eabb218bfce408ca3167dbf5eb618cecdaa2686.jpg', 1, 6, '2025-02-25 14:43:09', '2025-02-25 14:43:09'),
	(4, 'Hiroko Foreman', 'Vero velit porro ul', '1740505427-BU320935_11fdc558.jpg', 2, 7, '2025-02-25 14:43:47', '2025-02-25 14:43:47'),
	(5, 'Sydnee Fitzpatrick', 'Et eveniet et amet', '1740505496-16f0d2ccb0348781e67d74acb037c0567d6603e7_med.jpg', 2, 7, '2025-02-25 14:44:56', '2025-02-25 14:44:56'),
	(6, 'Conan Reyes', 'Consectetur minima v', '1740505520-b4229d0fad428225ad761da02e2860f6f37512ed_med.jpg', 2, 7, '2025-02-25 14:45:20', '2025-02-25 14:45:20'),
	(7, 'Tallulah Mejia', 'Ex velit error molli', '1740505533-6673a7a8b0347ac3a6705cc47f79f118969d56f6_med.jpg', 3, 7, '2025-02-25 14:45:33', '2025-02-25 14:45:33'),
	(8, 'Kirby Allison', 'Porro do tempore mi', '1740508252-b4229d0fad428225ad761da02e2860f6f37512ed_med.jpg', 1, 7, '2025-02-25 15:30:52', '2025-02-25 15:30:52'),
	(14, 'Pamela Emerson', 'Irure qui nulla odio', '1740524469-cart3.png', 1, 4, '2025-02-25 20:01:09', '2025-02-25 20:01:09'),
	(15, 'Cedric Hess', 'Duis voluptatem Ape', '1740524752-hero-slide2.png', 5, 8, '2025-02-25 20:05:52', '2025-02-25 20:05:52'),
	(16, 'Brock Garza', 'Consectetur non est dolorem proident lorem sed perspiciatis voluptatem Consequuntur ipsum dolore', '1743458518-related-3.jpg', 5, 9, '2025-03-31 19:01:59', '2025-03-31 19:01:59'),
	(17, 'MacKenzie Mclean 111', 'In non voluptatem Possimus irure sunt porro sapiente nihil ad enim doloribus error non', '1743459777-related-1.jpg', 4, 10, '2025-03-31 19:22:24', '2025-03-31 19:23:21');

-- Dumping structure for table sensive.categories
DROP TABLE IF EXISTS `categories`;
CREATE TABLE IF NOT EXISTS `categories` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `categories_name_unique` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table sensive.categories: ~5 rows (approximately)
DELETE FROM `categories`;
INSERT INTO `categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
	(1, 'Technology', '2025-02-25 13:35:09', '2025-02-25 13:35:09'),
	(2, 'Software', '2025-02-25 13:35:09', '2025-02-25 13:35:09'),
	(3, 'Lifestyle', '2025-02-25 13:35:09', '2025-02-25 13:35:09'),
	(4, 'Shopping', '2025-02-25 13:35:09', '2025-02-25 13:35:09'),
	(5, 'Newos', '2025-02-25 13:35:09', '2025-02-25 13:35:09');

-- Dumping structure for table sensive.comments
DROP TABLE IF EXISTS `comments`;
CREATE TABLE IF NOT EXISTS `comments` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `blog_id` bigint unsigned DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `comments_blog_id_foreign` (`blog_id`),
  CONSTRAINT `comments_blog_id_foreign` FOREIGN KEY (`blog_id`) REFERENCES `blogs` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table sensive.comments: ~7 rows (approximately)
DELETE FROM `comments`;
INSERT INTO `comments` (`id`, `name`, `email`, `subject`, `message`, `blog_id`, `created_at`, `updated_at`) VALUES
	(12, 'Rashad Petersen', 'desucipyda@mailinator.com', 'Autem enim eum qui r', 'Aliquam ipsam amet', 3, '2025-02-25 20:03:06', '2025-02-25 20:03:06'),
	(13, 'Maisie Goff', 'rumudutec@mailinator.com', 'Est ut nihil error e', 'Officiis facere illu', 3, '2025-02-25 20:03:12', '2025-02-25 20:03:12'),
	(14, 'Leila Hunt', 'haqut@mailinator.com', 'Dolor itaque eum et', 'Dolore in ex veniam', 3, '2025-02-25 20:03:19', '2025-02-25 20:03:19'),
	(15, 'Trevor Walker', 'rusof@mailinator.com', 'Dolores iure dolore', 'Numquam ut natus aut', 3, '2025-02-25 20:03:26', '2025-02-25 20:03:26'),
	(16, 'Evan Bailey', 'puvegi@mailinator.com', 'Qui et ipsam soluta illo perspiciatis vel unde alias minus duis ipsum laborum Ipsum corrupti', 'Incidunt reiciendis enim nemo molestias delectus ipsa ad mollit sint eiusmod fugiat deleniti nos', 16, '2025-03-31 19:02:31', '2025-03-31 19:02:31'),
	(17, 'Lunea Martinez', 'tyzuc@mailinator.com', 'Excepteur a placeat qui cillum officiis est ex aliquip cillum suscipit rerum velit et incidunt sed', 'Sequi itaque mollit vitae dolores', 14, '2025-04-30 07:42:28', '2025-04-30 07:42:28'),
	(18, 'Elaine Jenkins', 'wosufijumo@mailinator.com', 'Sit fuga Aut quis libero explicabo Veritatis dolor aut accusamus mollit omnis enim ratione labori', 'Minima quia delectus quibusdam autem aut commodi odit maiores alias nemo molestiae', 14, '2025-04-30 07:42:38', '2025-04-30 07:42:38');

-- Dumping structure for table sensive.contacts
DROP TABLE IF EXISTS `contacts`;
CREATE TABLE IF NOT EXISTS `contacts` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `contacts_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table sensive.contacts: ~12 rows (approximately)
DELETE FROM `contacts`;
INSERT INTO `contacts` (`id`, `name`, `email`, `subject`, `message`, `created_at`, `updated_at`) VALUES
	(1, 'Drew Blair', 'josewe@mailinator.com', 'Fugiat dolores labo', 'Modi quis possimus', '2025-02-23 16:35:04', '2025-02-23 16:35:04'),
	(2, 'Nola Dodson', 'wohuk@mailinator.com', 'Aliquam assumenda re', 'Tempore eos odit qu', '2025-02-23 16:36:17', '2025-02-23 16:36:17'),
	(3, 'Kai Wiggins', 'kajicu@mailinator.com', 'Hic reiciendis dolor', 'Possimus placeat c', '2025-02-23 16:36:39', '2025-02-23 16:36:39'),
	(4, 'Lacey Murray', 'gymow@mailinator.com', 'Mollitia itaque sed', 'Elit et aliqua Max', '2025-02-23 16:37:24', '2025-02-23 16:37:24'),
	(5, 'Buckminster Prince', 'rigiz@mailinator.com', 'Et aut enim et delec', 'Sit ut maxime in dol', '2025-02-23 16:37:48', '2025-02-23 16:37:48'),
	(6, 'Miriam Wilcox', 'zizobu@mailinator.com', 'Incidunt sequi et s', 'Elit eum impedit l', '2025-02-23 16:38:02', '2025-02-23 16:38:02'),
	(7, 'Raphael Green', 'vogaf@mailinator.com', 'Proident deserunt d', 'Possimus nihil qui', '2025-02-23 16:38:17', '2025-02-23 16:38:17'),
	(8, 'Hedwig Perry', 'wexyxy@mailinator.com', 'Totam veniam nesciu', 'Voluptatem quia hic', '2025-02-23 16:40:52', '2025-02-23 16:40:52'),
	(9, 'Cora White', 'remypunak@mailinator.com', 'Ut velit enim qui ve', 'asdasd', '2025-02-23 16:41:35', '2025-02-23 16:41:35'),
	(10, 'Audrey Sears', 'bucuzejy@mailinator.com', 'Ut voluptatem aut vo', 'Mollitia laborum Mo', '2025-02-23 16:42:00', '2025-02-23 16:42:00'),
	(11, 'Alea Navarro', 'kogabot@mailinator.com', 'Vitae excepturi accusamus Nam dolor reiciendis', 'Voluptate id sed praesentium ea lorem cumque similique et', '2025-03-31 19:03:15', '2025-03-31 19:03:15'),
	(12, 'Francis Monroe', 'cegenak@mailinator.com', 'Aut et exercitation eu sint saepe sed consequatur in totam sunt', 'Nihil do cillum ad molestiae asperiores rerum officia dignissimos est', '2025-03-31 19:05:43', '2025-03-31 19:05:43');

-- Dumping structure for table sensive.failed_jobs
DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table sensive.failed_jobs: ~0 rows (approximately)
DELETE FROM `failed_jobs`;

-- Dumping structure for table sensive.migrations
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table sensive.migrations: ~9 rows (approximately)
DELETE FROM `migrations`;
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(1, '2014_10_12_000000_create_users_table', 1),
	(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
	(3, '2019_08_19_000000_create_failed_jobs_table', 1),
	(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
	(5, '2025_02_23_184820_create_subcribes_table', 2),
	(6, '2025_02_23_192140_create_contacts_table', 3),
	(7, '2025_02_25_162941_create_categories_table', 4),
	(8, '2025_02_25_164357_create_blogs_table', 5),
	(9, '2025_02_25_214948_create_comments_table', 6);

-- Dumping structure for table sensive.password_reset_tokens
DROP TABLE IF EXISTS `password_reset_tokens`;
CREATE TABLE IF NOT EXISTS `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table sensive.password_reset_tokens: ~0 rows (approximately)
DELETE FROM `password_reset_tokens`;

-- Dumping structure for table sensive.personal_access_tokens
DROP TABLE IF EXISTS `personal_access_tokens`;
CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table sensive.personal_access_tokens: ~0 rows (approximately)
DELETE FROM `personal_access_tokens`;

-- Dumping structure for table sensive.subcribes
DROP TABLE IF EXISTS `subcribes`;
CREATE TABLE IF NOT EXISTS `subcribes` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `subcribes_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table sensive.subcribes: ~3 rows (approximately)
DELETE FROM `subcribes`;
INSERT INTO `subcribes` (`id`, `email`, `created_at`, `updated_at`) VALUES
	(1, 'vepyjyw@mailinator.com', '2025-02-23 16:08:12', '2025-02-23 16:08:12'),
	(2, 'e@gsmail.com', '2025-02-23 16:11:31', '2025-02-23 16:11:31'),
	(3, 'lymyhuz@mailinator.com', '2025-02-23 16:14:48', '2025-02-23 16:14:48');

-- Dumping structure for table sensive.users
DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table sensive.users: ~10 rows (approximately)
DELETE FROM `users`;
INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
	(1, 'Noelani Mckee', 'gafuneli@mailinator.com', NULL, '$2y$12$G3TT2PXf7N7X6qaYn4niwuBM/ScWPmuKZ16wvVpBeYNlTYthG7Cmu', NULL, '2025-02-23 13:56:04', '2025-02-23 13:56:04'),
	(2, 'Blair Mcfarland', 'fejunefic@mailinator.com', NULL, '$2y$12$feqtNk85s3mEhkYkJdRWYeE05s9ZfUEmI.SEC8KVv2mQ91WI55O1G', NULL, '2025-02-23 14:03:58', '2025-02-23 14:03:58'),
	(3, 'Lillith Wise', 'naxijyv@mailinator.com', NULL, '$2y$12$XS7uZ/3VqgLhF.DFLImzK.bh13C6fBNmkm8iQP8YUeF2J6Nfvixrq', NULL, '2025-02-23 14:04:52', '2025-02-23 14:04:52'),
	(4, 'ايمن الاوزري', 'admin@gmail.com', NULL, '$2y$12$wbe4fsIWqntSk.pF9aqanerjrmzQgKXwTHkBhTVfC0XopplquPYBy', NULL, '2025-02-23 14:06:50', '2025-02-23 14:06:50'),
	(5, 'Ora Byers', 'zomuw@mailinator.com', NULL, '$2y$12$dd9rvnvwLqwW1bAgYb4MV.qJgNlLyOQHYWGxaWOYw2ZNGc/KCBvky', NULL, '2025-02-25 14:18:57', '2025-02-25 14:18:57'),
	(6, 'Gary Thompson', 'cebytedaja@mailinator.com', NULL, '$2y$12$k1CBhUNuWC2I3ukY9UU87.4tMJn0BqEp0r7TOyJvbCx82fQUWG4PK', NULL, '2025-02-25 14:22:33', '2025-02-25 14:22:33'),
	(7, 'Zenia Wolfe', 'jeguhinyka@mailinator.com', NULL, '$2y$12$EKIUcxQqRFkFaqsRmpoW1.P/nWybGNB8UyoYnLcv9PdhJzQZSFXda', NULL, '2025-02-25 14:43:33', '2025-02-25 14:43:33'),
	(8, 'Renee Mays', 'dugifemod@mailinator.com', NULL, '$2y$12$Vvo94LPpuZTPBb4k3xnT2OfxXbG1EmW0W9A9ug19zh8QmcVyuVGPS', NULL, '2025-02-25 20:04:51', '2025-02-25 20:04:51'),
	(9, 'Ishmael Whitaker', 'danujoce@mailinator.com', NULL, '$2y$12$6XhIgidDX3k7uBtb5OrZXOAXvOQPS3CEyM31IOYugLJjdge/qb756', NULL, '2025-03-31 19:01:33', '2025-03-31 19:01:33'),
	(10, 'Kiara Neal', 'xaceja@mailinator.com', NULL, '$2y$12$lpFhgO20ElSmVElR0Vg2eu1XEzlA7ctMQxkRSZIunpP7IvFui02rC', NULL, '2025-03-31 19:22:08', '2025-03-31 19:22:08');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
