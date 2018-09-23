-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 23, 2018 at 07:10 AM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wood`
--

-- --------------------------------------------------------

--
-- Table structure for table `achievements`
--

CREATE TABLE `achievements` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `achievements`
--

INSERT INTO `achievements` (`id`, `title`, `icon`, `total`, `created_at`, `updated_at`) VALUES
(1, 'Team Members', 'fa-suitcase', 10, NULL, '2018-09-22 05:13:01'),
(2, 'Happy Clients', 'fa-users', 54455, NULL, '2018-07-15 16:34:53'),
(3, 'Followers', 'fa-globe', 1200, NULL, '2018-09-22 05:13:49'),
(4, 'Users Review', 'fa-star', 4500, NULL, '2018-09-22 05:10:25');

-- --------------------------------------------------------

--
-- Table structure for table `apps`
--

CREATE TABLE `apps` (
  `id` int(10) UNSIGNED NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `apps`
--

INSERT INTO `apps` (`id`, `image`, `created_at`, `updated_at`) VALUES
(4, 'assets/frontend/img/app-image/1537615991.pic4.png', '2018-05-18 22:03:54', '2018-09-22 04:33:11'),
(5, 'assets/frontend/img/app-image/1537615977.pic3.png', '2018-05-18 22:03:59', '2018-09-22 04:32:57'),
(10, 'assets/frontend/img/app-image/1537615959.pic2.png', '2018-05-21 11:30:54', '2018-09-22 04:32:39'),
(13, 'assets/frontend/img/app-image/1537615943.pic1.png', '2018-06-21 01:16:59', '2018-09-22 04:32:23');

-- --------------------------------------------------------

--
-- Table structure for table `features`
--

CREATE TABLE `features` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `features`
--

INSERT INTO `features` (`id`, `title`, `description`, `icon`, `created_at`, `updated_at`) VALUES
(1, 'Bahan dan Material 1', 'There are many variations, but the majority have suffered alteration for define something amazing.dda', 'fa-arrow-left', NULL, '2018-09-22 05:15:07'),
(2, 'Bahan dan Material 2', 'There are many variations , but the majority have suffered alteration for define something amazissng.', 'fa-arrow-left', NULL, '2018-09-22 05:14:58'),
(3, 'Bahan dan Material 3', '1There are many variations, but the majority have suffered alteration for define something amazing.', 'fa-arrow-left', NULL, '2018-09-22 05:15:18'),
(4, 'Bahan dan Material 4', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration.', 'fa-arrow-right', NULL, '2018-09-22 05:15:29'),
(5, 'Bahan dan Material 5', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration.', 'fa-arrow-right', NULL, '2018-09-22 05:15:40'),
(6, 'Bahan dan Material 6', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration.', 'fa-arrow-right', NULL, '2018-09-22 05:15:50');

-- --------------------------------------------------------

--
-- Table structure for table `footers`
--

CREATE TABLE `footers` (
  `id` int(10) UNSIGNED NOT NULL,
  `icon` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `footers`
--

INSERT INTO `footers` (`id`, `icon`, `link`, `created_at`, `updated_at`) VALUES
(1, 'fa-instagram', 'https://www.instagram.com/', '2018-05-15 07:11:14', '2018-09-22 04:56:32'),
(2, 'fab fa-facebook', 'https://www.facebook.com/', '2018-05-18 22:57:44', '2018-09-22 04:55:51'),
(13, 'fa-google-plus', 'https://plus.google.com/u/1/110944827950239311225', '2018-05-22 02:05:20', '2018-09-22 04:54:43'),
(14, 'fa-youtube', 'https://www.youtube.com/', '2018-09-22 04:55:24', '2018-09-22 04:55:24');

-- --------------------------------------------------------

--
-- Table structure for table `general_settings`
--

CREATE TABLE `general_settings` (
  `id` int(10) UNSIGNED NOT NULL,
  `website_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `website_title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `website_sub_title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `base_color` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sub_color` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `menu_download_link` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` text COLLATE utf8mb4_unicode_ci,
  `message` text COLLATE utf8mb4_unicode_ci,
  `header_title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `header_text` text COLLATE utf8mb4_unicode_ci,
  `background_image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `advertise_image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link_one` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link_two` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `about_section_img` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `feature_title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `feature_text` text COLLATE utf8mb4_unicode_ci,
  `app_title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `app_text` text COLLATE utf8mb4_unicode_ci,
  `company_title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company_short_title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company_description` text COLLATE utf8mb4_unicode_ci,
  `company_btn_link` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `video_title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `video_link` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `suitable_title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `suitable_description` text COLLATE utf8mb4_unicode_ci,
  `suitable_link` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `screensoht_title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `screensoht_description` text COLLATE utf8mb4_unicode_ci,
  `team_title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `team_description` text COLLATE utf8mb4_unicode_ci,
  `question_title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `question_description` text COLLATE utf8mb4_unicode_ci,
  `contact_title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contact_description` text COLLATE utf8mb4_unicode_ci,
  `user_review_title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_review_star` int(4) DEFAULT NULL,
  `subscriber_title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pricing_title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pricing_description` text COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `general_settings`
--

INSERT INTO `general_settings` (`id`, `website_name`, `website_title`, `website_sub_title`, `base_color`, `sub_color`, `menu_download_link`, `email`, `phone`, `address`, `message`, `header_title`, `header_text`, `background_image`, `advertise_image`, `link_one`, `link_two`, `about_section_img`, `feature_title`, `feature_text`, `app_title`, `app_text`, `company_title`, `company_short_title`, `company_description`, `company_btn_link`, `video_title`, `video_link`, `created_at`, `updated_at`, `suitable_title`, `suitable_description`, `suitable_link`, `screensoht_title`, `screensoht_description`, `team_title`, `team_description`, `question_title`, `question_description`, `contact_title`, `contact_description`, `user_review_title`, `user_review_star`, `subscriber_title`, `pricing_title`, `pricing_description`) VALUES
(1, 'Lumau Wood', 'Everything you need from', 'SUITABLE FOR ANYTYPE LABX LANDINGPAGEfgfffffffffffffffffffff', '808000', '804000', 'https://goo.gl/Z9tDcP', 'mail.lumau@gmail.com', '+62813-9999-0000', 'Jl Kunir Raya, Depok, Jawa Barat', NULL, 'Welcome to a world of inspiration for your home', '<h1 style=\"box-sizing: inherit; margin: 0px auto; padding: 0px; letter-spacing: -0.06667em; max-width: 64rem; text-shadow: rgba(0, 0, 0, 0.5) 0px 2px 10px; font-size: 3.5rem; line-height: 1.2; color: rgb(255, 255, 255); font-family: Verdana, Helvetica, Arial, sans-serif; text-align: center;\"><br></h1>', NULL, NULL, 'https://facebook.com', 'https://instagram.com', NULL, 'Bahan dan Material', NULL, NULL, NULL, 'About Lumau Wood', 'Company Profile', '<span style=\"color: rgb(34, 34, 34); font-size: 14px; text-align: right;\">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration.</span>', 'https://goo.gl/uKQPjm', 'Introducting about Lumau Wood', 'https://www.youtube.com/', NULL, '2018-09-22 05:32:51', 'NEW CATALOGUE THIS YEAR', 'It is a long established fact that a reader will be distracted by the readable content of a pag', 'https://www.youtube.com/55', 'Portfolio', 'It is a long established fact that a reader will be distracted by the readable content of a pag', 'TEAM MEMBERS', 'It is a long established fact that a reader will be distracted by the readable content of this a page when looking at its layout point', 'FREQUENTLY ASKED QUESTIONS', '&nbsp;There are many variations of passages of Lorem Ipsum available, but the majority have suffered altera in the some form, by injected humour randomised.&nbsp;', 'GET IN TOUCH', 'There are many variations of passages of Lorem Ipsum available,', 'HAPPY USERS REVIEWS', 5, 'STAY TUNED SUBSCRIBE', 'PRICING PLAN', '&nbsp;“There are many variations of passages of Lorem Ipsum available, but the majority have suffered altera in the some form, by injected humour randomised.&nbsp;');

-- --------------------------------------------------------

--
-- Table structure for table `menus`
--

CREATE TABLE `menus` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2018_05_14_062714_create_menus_table', 1),
(4, '2018_05_14_062811_create_general_settings_table', 1),
(5, '2018_05_14_122718_create_product_qualities_table', 1),
(6, '2018_05_14_130921_create_features_table', 1),
(8, '2018_05_14_141000_create_apps_table', 2),
(10, '2018_05_15_101412_create_teams_table', 3),
(11, '2018_05_15_112655_create_questions_table', 4),
(12, '2018_05_15_123030_create_footers_table', 5),
(13, '2018_05_15_131829_create_user_reviews_table', 6),
(14, '2018_05_16_053012_create_achievements_table', 7),
(18, '2018_05_16_061925_create_subscribers_table', 8),
(19, '2018_05_16_070452_create_pricing_plans_table', 8),
(20, '2018_05_16_070509_create_pricing_plan_details_table', 8),
(21, '2018_05_19_075011_create_user_messages_table', 9);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pricing_plans`
--

CREATE TABLE `pricing_plans` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pricing_plans`
--

INSERT INTO `pricing_plans` (`id`, `name`, `type`, `link`, `image`, `created_at`, `updated_at`) VALUES
(33, 'Starter', 'free', 'http://localhost/app-advertise/admin/app-create', 'assets/frontend/img/pricing-card-image/02.jpg', '2018-05-17 00:22:29', '2018-05-21 11:01:41'),
(34, 'Personal', '4.49 $', 'http://localhost/app-advertise/admin/app-createA', 'assets/frontend/img/pricing-card-image/02.jpg', '2018-05-17 01:57:27', '2018-05-21 11:09:12'),
(35, 'Business', '20.00 $', 'http://localhost/app-advertise/admin/app-create', 'assets/frontend/img/pricing-card-image/03.jpg', '2018-05-17 02:11:39', '2018-05-21 11:09:51'),
(36, 'Group', '50.70 $', 'http://localhost/app-advertise/admin/app-createdd', 'assets/frontend/img/pricing-card-image/1526886708.pricing-plan-bg.jpg', '2018-05-21 11:11:48', '2018-05-21 11:11:48');

-- --------------------------------------------------------

--
-- Table structure for table `pricing_plan_details`
--

CREATE TABLE `pricing_plan_details` (
  `id` int(10) UNSIGNED NOT NULL,
  `plan_id` int(10) UNSIGNED NOT NULL,
  `icon` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pricing_plan_details`
--

INSERT INTO `pricing_plan_details` (`id`, `plan_id`, `icon`, `title`, `created_at`, `updated_at`) VALUES
(67, 35, 'far fa-address-book', 'Full Access', '2018-05-17 02:17:46', '2018-05-21 11:10:48'),
(80, 35, 'fa-phone', 'Support', '2018-05-17 03:26:41', '2018-05-21 11:10:48'),
(81, 35, 'fa-question', '1 Years Licence', '2018-05-17 03:35:40', '2018-05-21 11:10:48'),
(82, 35, 'fa-share-alt-square', 'Source File', '2018-05-17 04:30:42', '2018-05-21 11:10:48'),
(85, 34, 'fa-arrow-circle-down', 'Full Access', '2018-05-18 23:49:13', '2018-05-21 11:08:46'),
(86, 34, 'fa-phone', 'Support', '2018-05-20 11:03:43', '2018-05-21 11:08:46'),
(87, 34, 'fa-question', '1 Years Licence', '2018-05-20 14:08:54', '2018-05-21 11:08:46'),
(89, 33, 'fa-phone', 'Support', '2018-05-20 14:09:39', '2018-05-21 11:03:35'),
(90, 33, 'fa-question', '1 Years Licence', '2018-05-20 14:09:39', '2018-05-21 11:03:35'),
(91, 33, 'fa-share-alt-square', 'Source File', '2018-05-21 11:01:41', '2018-05-21 11:03:35'),
(92, 34, 'fa-share-alt-square', 'Source File', '2018-05-21 11:08:46', '2018-05-21 11:08:46'),
(94, 36, 'fa-arrow-circle-down', 'Full Access', '2018-05-21 11:13:58', '2018-05-21 11:13:58'),
(95, 36, 'fa-phone', 'Support', '2018-05-21 11:13:58', '2018-05-21 11:13:58'),
(96, 36, 'fa-question', '1 Years Licence', '2018-05-21 11:13:58', '2018-05-21 11:13:58'),
(97, 36, 'fa-share-alt-square', 'Source File', '2018-05-21 11:13:58', '2018-05-21 11:13:58'),
(98, 33, 'fa-align-justify', 'Source File', '2018-05-22 21:45:07', '2018-05-22 21:45:07');

-- --------------------------------------------------------

--
-- Table structure for table `product_qualities`
--

CREATE TABLE `product_qualities` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_qualities`
--

INSERT INTO `product_qualities` (`id`, `title`, `icon`, `created_at`, `updated_at`) VALUES
(1, 'Quality 1', 'fa-diamond', NULL, '2018-09-22 05:27:19'),
(2, 'Quality 2', 'fa-diamond', NULL, '2018-09-22 05:28:51'),
(3, 'Quality 4', 'fa-diamond', NULL, '2018-09-22 05:28:58'),
(4, 'Quality 5', 'fa-diamond', NULL, '2018-09-22 05:29:04');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `id` int(10) UNSIGNED NOT NULL,
  `question` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `answer` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `question`, `answer`, `created_at`, `updated_at`) VALUES
(1, 'What is Our Goal ?', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered altera in the some form, by injected humour randomised', NULL, '2018-06-21 01:21:00'),
(2, 'What is Our Vission ?', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered altera in the some form, by injected humour randomised', NULL, '2018-06-21 01:21:50'),
(3, 'What is Our Mission ?', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered altera in the some form, by injected humour randomised', NULL, '2018-06-21 01:21:36'),
(4, 'What is Our Goal ?', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered altera in the some form, by injected humour randomised', NULL, '2018-06-21 01:21:18');

-- --------------------------------------------------------

--
-- Table structure for table `subscribers`
--

CREATE TABLE `subscribers` (
  `id` int(10) UNSIGNED NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subscribers`
--

INSERT INTO `subscribers` (`id`, `email`, `created_at`, `updated_at`) VALUES
(1, 'aa@gmail.com', '2018-05-19 01:40:54', '2018-05-19 01:40:54'),
(2, 'aalnoor74@gmail.com', '2018-05-19 01:48:03', '2018-05-19 01:48:03'),
(3, 'user@gmail.com', '2018-05-19 01:48:15', '2018-05-19 01:48:15'),
(4, 'aalnoor7dd4@gmail.com', '2018-06-20 23:58:34', '2018-06-20 23:58:34'),
(5, 'aalnoor74d@gmail.com', '2018-06-21 00:00:16', '2018-06-21 00:00:16'),
(6, 'abdulgglah@gmail.com', '2018-06-21 00:03:20', '2018-06-21 00:03:20'),
(7, 'aalnodddddddddor74@gmail.com', '2018-06-21 00:40:18', '2018-06-21 00:40:18'),
(8, 'ussser@gmail.com', '2018-06-21 00:41:13', '2018-06-21 00:41:13'),
(9, 'usder@gmail.com', '2018-06-21 00:42:31', '2018-06-21 00:42:31'),
(10, 'usedddddddddddddddddr@gmail.com', '2018-06-21 00:54:53', '2018-06-21 00:54:53'),
(11, 'usedddddddddddddddddddddr@gmail.com', '2018-06-21 00:55:21', '2018-06-21 00:55:21');

-- --------------------------------------------------------

--
-- Table structure for table `teams`
--

CREATE TABLE `teams` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `position` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lnk_one` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lnk_two` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lnk_three` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lnk_four` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `teams`
--

INSERT INTO `teams` (`id`, `name`, `position`, `image`, `lnk_one`, `lnk_two`, `lnk_three`, `lnk_four`, `created_at`, `updated_at`) VALUES
(2, 'Mr Deka', 'CEO', 'assets/frontend/img/member-image/1537619926.carpenter1.png', 'https://www.youtube.com/a', 'https://www.youtube.com/a', 'https://www.youtube.com/a', 'https://www.youtube.com/a', '2018-05-19 00:37:15', '2018-09-22 05:38:46'),
(3, 'MT JHONHESON', 'Carpentry', 'assets/frontend/img/member-image/1537619903.carpenter1.png', 'https://www.youtube.com/', 'https://www.youtube.com/', 'https://www.youtube.com/', 'https://www.youtube.com/', '2018-05-20 14:03:09', '2018-09-22 05:38:23'),
(4, 'Mr Triyadi', 'Carpentry', 'assets/frontend/img/member-image/1537619879.carpenter1.png', 'https://www.youtube.com/', 'https://www.youtube.com/', 'https://www.youtube.com/', 'https://www.youtube.com/', '2018-05-21 11:19:52', '2018-09-22 05:37:59'),
(5, 'BENNIE M. MCNAIR', 'Carpentry', 'assets/frontend/img/member-image/1537619841.carpenter1.png', 'https://www.youtube.com/', 'https://www.twitter.com/', 'https://www.youtube.com/', 'https://www.instagram.com/', '2018-05-21 11:20:24', '2018-09-22 05:37:21');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', '', '$2y$10$1xcEVH1hqTSAKi/AGj.CHuoFjLwU24uQudN.VPQtbDProPc7vfNZ6', 'DyTrL2KSrOmyNRqPnVsUFQKRUsCfOuWh734eho8RKOViP53ryb4PoZaBbRnX', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user_messages`
--

CREATE TABLE `user_messages` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_messages`
--

INSERT INTO `user_messages` (`id`, `name`, `email`, `message`, `created_at`, `updated_at`) VALUES
(1, 'abuubaidah', 'user@gmail.com', 'sdaf', '2018-05-19 02:53:35', '2018-05-19 02:53:35'),
(2, 'abuubaidah', 'user@gmail.com', 'adsfds', '2018-05-20 11:11:50', '2018-05-20 11:11:50'),
(3, 'abuubaidah', 'user@gmail.com', 'dsa', '2018-05-20 14:22:43', '2018-05-20 14:22:43'),
(4, 'abuubaidah', 'user@gmail.com', 'sda', '2018-05-20 14:23:01', '2018-05-20 14:23:01'),
(5, 'ds', 'user@gmail.com', 'sd', '2018-05-20 14:23:18', '2018-05-20 14:23:18'),
(6, 'adf', 'userff@gmail.com', 'adf', '2018-06-21 00:02:03', '2018-06-21 00:02:03'),
(7, 'abuubaidah', 'userdddddddddddddd@gmail.com', 'ddddddddd', '2018-06-21 01:02:21', '2018-06-21 01:02:21'),
(8, 'dfsa', 'user@gmail.com', 'dfsa', '2018-06-21 01:03:50', '2018-06-21 01:03:50'),
(9, 'dfsa', 'user@gmail.com', 'dfsa', '2018-06-21 01:03:57', '2018-06-21 01:03:57'),
(10, 'abuubaidah', 'user@gmail.com', 'sdaf', '2018-06-21 01:09:20', '2018-06-21 01:09:20'),
(11, 'abuubaidah', 'user@gmail.com', 'safd', '2018-06-21 01:10:40', '2018-06-21 01:10:40');

-- --------------------------------------------------------

--
-- Table structure for table `user_reviews`
--

CREATE TABLE `user_reviews` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `position` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_reviews`
--

INSERT INTO `user_reviews` (`id`, `name`, `position`, `description`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Helliam calson', 'Founder & CEO Themes', 'Founder &amp; CEO Themes', 'assets/frontend/img/user-image/1537620262.userreview4.png', NULL, '2018-09-22 05:44:22'),
(3, 'Helliam calson', 'Founder & CEO Themes', 'Founder &amp; CEO Themes', 'assets/frontend/img/user-image/1537620245.userreview3.png', NULL, '2018-09-22 05:44:05'),
(5, 'Helliam calson', 'Founder & CEO Themes', 'Founder &amp; CEO Themes', 'assets/frontend/img/user-image/1537620218.userreview2.png', '2018-05-21 10:53:45', '2018-09-22 05:43:38'),
(7, 'Clare Rau', 'Founder & CEO Themes', 'Founder &amp; CEO Themes', 'assets/frontend/img/user-image/1537620197.userreview1.png', '2018-06-21 01:16:13', '2018-09-22 05:43:17');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `achievements`
--
ALTER TABLE `achievements`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `apps`
--
ALTER TABLE `apps`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `features`
--
ALTER TABLE `features`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `footers`
--
ALTER TABLE `footers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `general_settings`
--
ALTER TABLE `general_settings`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `general_settings_email_unique` (`email`);

--
-- Indexes for table `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `pricing_plans`
--
ALTER TABLE `pricing_plans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pricing_plan_details`
--
ALTER TABLE `pricing_plan_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pricing_plan_details_plan_id_foreign` (`plan_id`);

--
-- Indexes for table `product_qualities`
--
ALTER TABLE `product_qualities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subscribers`
--
ALTER TABLE `subscribers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `subscribers_email_unique` (`email`);

--
-- Indexes for table `teams`
--
ALTER TABLE `teams`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `user_messages`
--
ALTER TABLE `user_messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_reviews`
--
ALTER TABLE `user_reviews`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `achievements`
--
ALTER TABLE `achievements`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `apps`
--
ALTER TABLE `apps`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `features`
--
ALTER TABLE `features`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `footers`
--
ALTER TABLE `footers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `general_settings`
--
ALTER TABLE `general_settings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `menus`
--
ALTER TABLE `menus`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `pricing_plans`
--
ALTER TABLE `pricing_plans`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `pricing_plan_details`
--
ALTER TABLE `pricing_plan_details`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=99;

--
-- AUTO_INCREMENT for table `product_qualities`
--
ALTER TABLE `product_qualities`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `subscribers`
--
ALTER TABLE `subscribers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `teams`
--
ALTER TABLE `teams`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user_messages`
--
ALTER TABLE `user_messages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `user_reviews`
--
ALTER TABLE `user_reviews`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `pricing_plan_details`
--
ALTER TABLE `pricing_plan_details`
  ADD CONSTRAINT `pricing_plan_details_plan_id_foreign` FOREIGN KEY (`plan_id`) REFERENCES `pricing_plans` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
