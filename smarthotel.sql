-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 05, 2019 at 12:00 PM
-- Server version: 5.7.24
-- PHP Version: 7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `smarthotel`
--

-- --------------------------------------------------------

--
-- Table structure for table `bills`
--

DROP TABLE IF EXISTS `bills`;
CREATE TABLE IF NOT EXISTS `bills` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `reservation_id` int(10) UNSIGNED NOT NULL,
  `cost` double(8,2) NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order_id` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `message_id` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `details` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `bills_reservation_id_foreign` (`reservation_id`),
  KEY `bills_order_id_foreign` (`order_id`),
  KEY `bills_message_id_foreign` (`message_id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bills`
--

INSERT INTO `bills` (`id`, `reservation_id`, `cost`, `type`, `order_id`, `message_id`, `details`, `created_at`, `updated_at`) VALUES
(1, 2, 2000.00, '2', 2, 0, '2 :مقابل سعر الخدمة رقم', '2019-07-29 10:33:09', '2019-07-29 10:33:09'),
(2, 1, 20000.00, '1', 0, 0, 'مقابل سعر الغرفة المحجوزة', '2019-07-29 11:36:52', '2019-07-29 11:36:52'),
(3, 3, 20000.00, '1', 0, 0, 'مقابل سعر الغرفة المحجوزة', '2019-07-29 12:18:25', '2019-07-29 12:18:25'),
(4, 7, 1000.00, '1', 0, 0, 'مقابل سعر الغرفة المحجوزة', '2019-09-19 05:06:47', '2019-09-19 05:06:47');

-- --------------------------------------------------------

--
-- Table structure for table `boxes`
--

DROP TABLE IF EXISTS `boxes`;
CREATE TABLE IF NOT EXISTS `boxes` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `box` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `boxes`
--

INSERT INTO `boxes` (`id`, `user_name`, `email`, `box`, `created_at`, `updated_at`) VALUES
(1, 'c', 'c@gmail.com', 'adlgdalf', '2019-07-28 19:23:59', '2019-07-28 19:23:59'),
(2, 'ali', 'azmman2012@gmail.com', 'dlagm,g', '2019-07-28 19:51:12', '2019-07-28 19:51:12');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

DROP TABLE IF EXISTS `messages`;
CREATE TABLE IF NOT EXISTS `messages` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `reservation_id` int(10) UNSIGNED NOT NULL,
  `message` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `messages_reservation_id_foreign` (`reservation_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
) ENGINE=MyISAM AUTO_INCREMENT=144 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(132, '2014_10_12_000000_create_users_table', 4),
(133, '2014_10_12_100000_create_password_resets_table', 4),
(134, '2019_05_18_224427_create_rooms', 4),
(135, '2019_05_18_224437_create_reservations', 4),
(136, '2019_05_24_222209_create_rooms_images', 4),
(137, '2019_05_25_213828_add_type_inside_rooms', 4),
(9, '2019_07_02_200344_create_messages', 3),
(138, '2019_07_02_200322_create_services', 4),
(139, '2019_07_02_200400_create_orders', 4),
(140, '2019_07_02_200417_create_bills', 4),
(141, '2019_07_02_200434_create_payments', 4),
(142, '2019_07_02_211954_create_messages', 4),
(143, '2019_07_28_214938_create_box_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
CREATE TABLE IF NOT EXISTS `orders` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `state` int(11) NOT NULL DEFAULT '3',
  `service_id` int(10) UNSIGNED NOT NULL,
  `reservation_id` int(10) UNSIGNED NOT NULL,
  `count` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `orders_service_id_foreign` (`service_id`),
  KEY `orders_reservation_id_foreign` (`reservation_id`)
) ENGINE=MyISAM AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `state`, `service_id`, `reservation_id`, `count`, `created_at`, `updated_at`) VALUES
(1, 3, 2, 3, 1, '2019-07-29 10:32:55', '2019-07-29 12:46:11'),
(2, 3, 2, 2, 1, '2019-07-29 10:33:08', '2019-07-29 10:33:08'),
(3, 3, 2, 2, 1, '2019-07-29 10:33:24', '2019-08-15 19:28:33'),
(4, 3, 4, 1, 1, '2019-07-29 10:33:40', '2019-07-29 16:43:02'),
(5, 1, 3, 3, 1, '2019-07-29 10:34:06', '2019-07-29 10:34:06'),
(6, 1, 1, 2, 1, '2019-07-29 14:56:49', '2019-07-29 14:56:49'),
(7, 1, 1, 2, 1, '2019-07-29 15:21:22', '2019-07-29 15:21:22'),
(8, 0, 3, 2, 1, '2019-07-29 15:42:20', '2019-08-15 19:29:24'),
(9, 1, 4, 2, 1, '2019-07-29 15:43:51', '2019-07-29 15:43:51'),
(10, 1, 4, 2, 1, '2019-07-29 15:44:59', '2019-07-29 15:44:59'),
(11, 1, 1, 2, 1, '2019-07-29 15:47:02', '2019-07-29 15:47:02'),
(12, 1, 1, 2, 1, '2019-07-29 15:47:51', '2019-07-29 15:47:51'),
(13, 1, 1, 2, 1, '2019-07-29 15:48:18', '2019-07-29 15:48:18'),
(14, 1, 1, 2, 1, '2019-07-29 15:49:15', '2019-07-29 15:49:15'),
(15, 1, 1, 2, 1, '2019-07-29 15:49:45', '2019-07-29 15:49:45'),
(16, 1, 1, 2, 1, '2019-07-29 15:50:23', '2019-07-29 15:50:23'),
(17, 1, 1, 2, 1, '2019-07-29 16:46:11', '2019-07-29 16:46:11'),
(18, 1, 1, 5, 1, '2019-08-15 13:28:09', '2019-08-15 13:28:09'),
(19, 1, 1, 2, 1, '2019-08-15 18:37:01', '2019-08-15 18:37:01'),
(20, 1, 2, 2, 1, '2019-08-15 19:21:32', '2019-08-15 19:21:32'),
(21, 1, 1, 2, 1, '2019-09-19 03:47:13', '2019-09-19 03:47:13');

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
-- Table structure for table `payments`
--

DROP TABLE IF EXISTS `payments`;
CREATE TABLE IF NOT EXISTS `payments` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `reservation_id` int(10) UNSIGNED NOT NULL,
  `count` double(8,2) NOT NULL,
  `details` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `payments_reservation_id_foreign` (`reservation_id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`id`, `reservation_id`, `count`, `details`, `created_at`, `updated_at`) VALUES
(1, 1, 200.00, 'مبلغ تسديد', '2019-07-29 10:37:19', '2019-07-29 10:37:19'),
(2, 2, 1000.00, 'تسليم من المبالغ تسديد', '2019-07-29 10:38:10', '2019-07-29 10:38:10'),
(3, 2, 1000.00, 'مبالغ', '2019-07-29 10:38:28', '2019-07-29 10:38:28'),
(4, 4, 1000.00, 'مقابل مبلغ حجز', '2019-08-15 19:32:28', '2019-08-15 19:32:28');

-- --------------------------------------------------------

--
-- Table structure for table `reservations`
--

DROP TABLE IF EXISTS `reservations`;
CREATE TABLE IF NOT EXISTS `reservations` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` int(10) UNSIGNED NOT NULL,
  `room_id` int(10) UNSIGNED NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `payment_state` tinyint(1) NOT NULL DEFAULT '0',
  `state` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `reservations_user_id_foreign` (`user_id`),
  KEY `reservations_room_id_foreign` (`room_id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `reservations`
--

INSERT INTO `reservations` (`id`, `user_id`, `room_id`, `start_date`, `end_date`, `payment_state`, `state`, `created_at`, `updated_at`) VALUES
(1, 3, 1, '2019-07-01', '2019-07-02', 1, 1, '2019-07-29 10:29:48', '2019-07-29 11:36:51'),
(2, 2, 2, '2019-07-03', '2019-07-05', 1, 0, '2019-07-29 10:30:22', '2019-07-29 11:37:01'),
(3, 5, 1, '2019-07-01', '2019-07-03', 1, 1, '2019-07-29 10:31:45', '2019-07-29 12:18:25'),
(4, 2, 2, '2019-07-01', '2019-07-02', 0, 2, '2019-07-29 16:45:48', '2019-07-29 16:45:48'),
(5, 9, 2, '2019-07-02', '2019-07-01', 0, 2, '2019-07-30 06:10:17', '2019-07-30 06:10:17'),
(6, 1, 5, '2019-09-01', '2019-09-03', 0, 2, '2019-09-19 04:32:06', '2019-09-19 04:32:06'),
(7, 10, 5, '2019-09-04', '2019-09-01', 0, 1, '2019-09-19 05:05:16', '2019-09-19 05:06:47');

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

DROP TABLE IF EXISTS `rooms`;
CREATE TABLE IF NOT EXISTS `rooms` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `details` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` double(8,2) NOT NULL,
  `state` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `room_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `rooms`
--

INSERT INTO `rooms` (`id`, `details`, `price`, `state`, `created_at`, `updated_at`, `room_type`) VALUES
(1, 'غرفة جيدة ومريحة', 20000.00, 2, '2019-07-29 10:21:02', '2019-07-29 11:36:52', '1'),
(2, 'غرفة مريحة', 2000.00, 1, '2019-07-29 10:21:33', '2019-07-29 10:21:33', '2'),
(3, 'اجمل شقة', 2000.00, 1, '2019-07-29 10:22:43', '2019-07-29 10:22:43', '3'),
(4, 'غرفة خاصة', 1500.00, 1, '2019-07-29 10:23:14', '2019-07-29 10:23:14', '4'),
(5, 'تم انشاءها للغرض الاختبار', 1000.00, 2, '2019-09-19 04:30:46', '2019-09-19 05:06:47', '5'),
(6, 'تم اضافتها مرة اخرئ للغرض الاختبار', 1000.00, 1, '2019-09-19 04:31:18', '2019-09-19 04:31:18', '5');

-- --------------------------------------------------------

--
-- Table structure for table `rooms_images`
--

DROP TABLE IF EXISTS `rooms_images`;
CREATE TABLE IF NOT EXISTS `rooms_images` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `image1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image4` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `room_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `rooms_images_room_id_foreign` (`room_id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `rooms_images`
--

INSERT INTO `rooms_images` (`id`, `image1`, `image2`, `image3`, `image4`, `room_id`, `created_at`, `updated_at`) VALUES
(1, 'noImage.jpg', NULL, NULL, NULL, 1, '2019-07-29 10:21:03', '2019-07-29 10:21:03'),
(2, 'noImage.jpg', NULL, NULL, NULL, 2, '2019-07-29 10:21:34', '2019-07-29 10:21:34'),
(3, 'noImage.jpg', NULL, NULL, NULL, 3, '2019-07-29 10:22:43', '2019-07-29 10:22:43'),
(4, 'noImage.jpg', NULL, NULL, NULL, 4, '2019-07-29 10:23:14', '2019-07-29 10:23:14'),
(5, 'noImage.jpg', NULL, NULL, NULL, 5, '2019-09-19 04:30:46', '2019-09-19 04:30:46'),
(6, 'noImage.jpg', NULL, NULL, NULL, 6, '2019-09-19 04:31:18', '2019-09-19 04:31:18');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

DROP TABLE IF EXISTS `services`;
CREATE TABLE IF NOT EXISTS `services` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `details` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` double(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `type`, `details`, `image`, `price`, `created_at`, `updated_at`) VALUES
(1, 'شيشة', 'شيشة بتوابع معسل من جميع الانواع', 'noImage.jpg', 1500.00, '2019-07-29 10:24:06', '2019-07-29 10:24:06'),
(2, 'وجبية غداء', 'وجبة غداءراقية حسب الطلب', 'noImage.jpg', 2000.00, '2019-07-29 10:24:47', '2019-07-29 10:24:47'),
(3, 'وجبة العشاء', 'وجبة العشاء  حسب الطلب', 'noImage.jpg', 1600.00, '2019-07-29 10:25:30', '2019-07-29 10:25:30'),
(4, 'وجبة الافطار', 'وجبة الافطار راقية حسب الطلب', 'noImage.jpg', 1550.00, '2019-07-29 10:26:02', '2019-07-29 10:26:02');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `state` int(11) NOT NULL DEFAULT '5',
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'customer',
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `state`, `type`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@gmail.com', NULL, 1, 'admin', '$2y$10$Tqju.9l18U4ZwmzSPZb5N.hMBlUlagGGvMHYOcVeN3Ifv2gsQL40.', NULL, '2019-07-28 18:57:26', '2019-07-28 18:57:26'),
(2, 'c', 'c@gmail.com', NULL, 5, 'Customer', '$2y$10$xs1pxliJX3azTVhi6DC2wusF7PMbyVtSjNV7GLfvMYV/oPeL6Kkdq', NULL, '2019-07-28 18:58:51', '2019-07-28 18:58:51'),
(3, 'recp@gmail.com', 'recp@gmail.com', NULL, 2, 'Receptionist', '$2y$10$mftL5PJxZipXA2fLLHIeweuExL82i9Xjr5GHIFmBWv9rwDhLJVAb2', NULL, '2019-07-28 18:59:18', '2019-07-28 18:59:18'),
(4, 'super@gmail.com', 'super@gmail.com', NULL, 3, 'Supervisor', '$2y$10$Nq65.TSuUD45KTjCcf.J5OpNfsqGIs8Qr3/3j.TK7NQauiBLWoAYu', NULL, '2019-07-28 19:00:04', '2019-07-28 19:00:04'),
(5, 'c2', 'c2@gmail.com', NULL, 5, 'Customer', '$2y$10$6Mmw/MlgXEnBpObyNdVeke7GyV0F7LKy2E52rJ9FCvhxun79nMifm', NULL, '2019-07-29 10:27:05', '2019-07-29 10:27:05'),
(6, 'c4', 'c4@gmail.com', NULL, 5, 'Customer', '$2y$10$yCeah5zv1QOPBkJxkfE/9Oiomj5Pdcvjkp/SBryWnYws05LcUAlm2', NULL, '2019-07-29 10:27:41', '2019-07-29 10:27:41'),
(7, 'c3', 'c3@gmail.com', NULL, 5, 'Customer', '$2y$10$IkyL1/hnJW6xvg0N3fOFEOPEDjorK6NH5bAUu9ejd4JdBrE8jFbYK', NULL, '2019-07-29 10:28:11', '2019-07-29 10:28:11'),
(8, 'c5', 'c15@gmail.com', NULL, 3, 'Supervisor', '$2y$10$gcaGsnI5YHio.GzoYu3lD.PxDb7kto0DO66lD7XDyb3WHq9IGf9DK', NULL, '2019-07-29 19:43:40', '2019-08-15 19:24:13'),
(10, 'ammar', 'ammar@gmail.com', NULL, 5, 'Customer', '$2y$10$maAT/U9j6voRyQExmb09b.GKXg7hmKCgRa8lBJQDBFnMsPLVayp9m', 'l6fIxAPJnLfW14h06OVb2JFoTgPiGq1ku2rkuWlDlctKYIocu24m33jxIFnT', '2019-09-19 05:05:16', '2019-09-19 05:05:16');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
