-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 12, 2019 at 10:30 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `e3lanmisr`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `id` int(10) NOT NULL,
  `image_id` int(10) UNSIGNED DEFAULT NULL,
  `mission_image_id` int(10) UNSIGNED DEFAULT NULL,
  `vision_image_id` int(10) UNSIGNED DEFAULT NULL,
  `values_image_id` int(10) UNSIGNED DEFAULT NULL,
  `approach_image_id` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id`, `image_id`, `mission_image_id`, `vision_image_id`, `values_image_id`, `approach_image_id`, `created_at`, `updated_at`) VALUES
(1, 9, 30, 38, 39, 59, '2019-11-11 22:00:00', '2019-11-11 22:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `area`
--

CREATE TABLE `area` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `billboard`
--

CREATE TABLE `billboard` (
  `id` int(10) UNSIGNED NOT NULL,
  `code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_id` int(10) UNSIGNED DEFAULT NULL,
  `service_id` int(10) DEFAULT NULL,
  `area_id` int(10) UNSIGNED DEFAULT NULL,
  `size_id` int(10) UNSIGNED DEFAULT NULL,
  `dimension` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `location` text COLLATE utf8mb4_unicode_ci,
  `created_by` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `billboard`
--

INSERT INTO `billboard` (`id`, `code`, `image_id`, `service_id`, `area_id`, `size_id`, `dimension`, `location`, `created_by`, `created_at`, `updated_at`) VALUES
(12, NULL, 46, 23, NULL, NULL, NULL, NULL, 3, '2019-10-26 12:12:27', '2019-10-26 18:24:49');

-- --------------------------------------------------------

--
-- Table structure for table `billboard_images`
--

CREATE TABLE `billboard_images` (
  `id` int(10) UNSIGNED NOT NULL,
  `project_id` int(10) UNSIGNED NOT NULL,
  `image_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `billboard_images`
--

INSERT INTO `billboard_images` (`id`, `project_id`, `image_id`, `created_at`, `updated_at`) VALUES
(31, 12, 58, '2019-10-26 18:25:15', '2019-10-26 18:25:15'),
(32, 12, 59, '2019-10-26 18:25:15', '2019-10-26 18:25:15'),
(33, 12, 60, '2019-10-26 18:25:15', '2019-10-26 18:25:15'),
(34, 12, 61, '2019-10-26 18:25:15', '2019-10-26 18:25:15'),
(35, 12, 62, '2019-10-26 18:25:15', '2019-10-26 18:25:15'),
(36, 12, 63, '2019-10-26 18:25:15', '2019-10-26 18:25:15');

-- --------------------------------------------------------

--
-- Table structure for table `campaign`
--

CREATE TABLE `campaign` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `campaign_details`
--

CREATE TABLE `campaign_details` (
  `id` int(10) UNSIGNED NOT NULL,
  `campaign_id` int(10) UNSIGNED NOT NULL,
  `company` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `position` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `start_at` timestamp NULL DEFAULT NULL,
  `end_at` timestamp NULL DEFAULT NULL,
  `availability` int(10) DEFAULT NULL,
  `price` double DEFAULT NULL,
  `printing_cost` double DEFAULT NULL,
  `status` int(10) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `campaign_items`
--

CREATE TABLE `campaign_items` (
  `id` int(10) UNSIGNED NOT NULL,
  `campaign_id` int(10) UNSIGNED NOT NULL,
  `billboard_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE `client` (
  `id` int(10) NOT NULL,
  `image_id` int(10) DEFAULT NULL,
  `created_by` int(10) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`id`, `image_id`, `created_by`, `created_at`, `updated_at`) VALUES
(8, 11, 3, '2019-10-26 08:29:06', '2019-10-26 08:29:06');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(10) NOT NULL,
  `email` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_alt` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `file_id` int(10) UNSIGNED DEFAULT NULL,
  `address_en` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `address_ar` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` text,
  `facebook` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instagram` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `youtube` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `linkedin` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pintrest` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `behance` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `whatsapp` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `google_plus` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `email`, `phone`, `phone_alt`, `file_id`, `address_en`, `address_ar`, `location`, `facebook`, `twitter`, `instagram`, `youtube`, `linkedin`, `pintrest`, `behance`, `whatsapp`, `google_plus`, `updated_at`, `created_at`) VALUES
(1, 'sales@cropmedia.org', '(+20) 01033493933', NULL, NULL, '6th of october, 210, 4th district, 1st Neighborhood<br>Giza, Egypt.', '28 عمارات رابعة العدوية الاستثماري، تقاطع شارع النزهة مع، طريق النصر، الجولف، مدينة نصر، محافظة القاهرة‬', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d13825.616729845546!2d30.945927432480183!3d29.96781221056226!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x145856ee6b6d886f%3A0x693dd328b325464f!2s1st%20District%2C%20First%206th%20of%20October%2C%20Giza%20Governorate!5e0!3m2!1sen!2seg!4v1572107931561!5m2!1sen!2seg', 'https://www.facebook.com/fikraapps/', 'https://twitter.com/drahmedelnabil', 'https://www.instagram.com/drahmedelnabil/', 'https://www.youtube.com/channel/UCZaztM96-ZdrF9raT6OFb7A', NULL, NULL, NULL, '+201012461121', NULL, '2019-10-26 14:39:12', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `feature`
--

CREATE TABLE `feature` (
  `id` int(10) UNSIGNED NOT NULL,
  `image_id` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `feature`
--

INSERT INTO `feature` (`id`, `image_id`, `created_at`, `updated_at`) VALUES
(4, NULL, '2019-08-25 11:19:35', '2019-08-25 11:19:35');

-- --------------------------------------------------------

--
-- Table structure for table `image`
--

CREATE TABLE `image` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `path` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `alt` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `album_id` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `image`
--

INSERT INTO `image` (`id`, `name`, `path`, `alt`, `album_id`, `created_at`, `updated_at`) VALUES
(1, '157208329717-650x350.jpg', 'dashboardImages/slider/157208329717-650x350.jpg', NULL, NULL, '2019-10-26 07:48:17', '2019-10-26 07:48:17'),
(7, '1572084663image-right.png', 'dashboardImages/service/1572084663image-right.png', NULL, NULL, '2019-10-26 08:11:03', '2019-10-26 08:11:03'),
(8, '1572085605client2.png', 'dashboardImages/client/1572085605client2.png', NULL, NULL, '2019-10-26 08:26:45', '2019-10-26 08:26:45'),
(9, '1572085652client2.png', 'dashboardImages/client/1572085652client2.png', NULL, NULL, '2019-10-26 08:27:32', '2019-10-26 08:27:32'),
(11, '1572085746client2.png', 'dashboardImages/client/1572085746client2.png', NULL, NULL, '2019-10-26 08:29:06', '2019-10-26 08:29:06'),
(30, '1572099147client4.png', 'dashboardImages/project/1572099147client4.png', NULL, NULL, '2019-10-26 12:12:27', '2019-10-26 12:12:27'),
(31, '1572099147client2.png', 'dashboardImages/project/1572099147client2.png', NULL, NULL, '2019-10-26 12:12:27', '2019-10-26 12:12:27'),
(34, '157210533370931182_110023727068649_8418248183490019328_n.jpg', 'dashboardImages/team/157210533370931182_110023727068649_8418248183490019328_n.jpg', NULL, NULL, '2019-10-26 13:55:33', '2019-10-26 13:55:33'),
(37, '1572106879Logo-Red-H.png', 'dashboardImages/setting/1572106879Logo-Red-H.png', NULL, NULL, '2019-10-26 14:21:19', '2019-10-26 14:21:19'),
(38, '1572108788slide-2.jpg', 'dashboardImages/slider/1572108788slide-2.jpg', NULL, NULL, '2019-10-26 14:53:08', '2019-10-26 14:53:08'),
(39, '1572108825slide-1.jpg', 'dashboardImages/slider/1572108825slide-1.jpg', NULL, NULL, '2019-10-26 14:53:45', '2019-10-26 14:53:45'),
(40, '1572108920slide-3.jpg', 'dashboardImages/slider/1572108920slide-3.jpg', NULL, NULL, '2019-10-26 14:55:20', '2019-10-26 14:55:20'),
(41, '1572113740crop-moc.png', 'dashboardImages/about/1572113740crop-moc.png', NULL, NULL, '2019-10-26 16:15:40', '2019-10-26 16:15:40'),
(46, '1572115668design.jpg', 'dashboardImages/service/1572115668design.jpg', NULL, NULL, '2019-10-26 16:47:48', '2019-10-26 16:47:48'),
(56, '15721211396.jpg', 'dashboardImages/project/15721211396.jpg', NULL, NULL, '2019-10-26 18:18:59', '2019-10-26 18:18:59'),
(57, '1572121489ee6fbe44521941.5814bb27bbf4d.jpg', 'dashboardImages/project/1572121489ee6fbe44521941.5814bb27bbf4d.jpg', NULL, NULL, '2019-10-26 18:24:49', '2019-10-26 18:24:49'),
(58, '15721215151.jpg', 'dashboardImages/project/15721215151.jpg', NULL, NULL, '2019-10-26 18:25:15', '2019-10-26 18:25:15'),
(59, '15721215152.jpg', 'dashboardImages/project/15721215152.jpg', NULL, NULL, '2019-10-26 18:25:15', '2019-10-26 18:25:15'),
(60, '15721215153.jpg', 'dashboardImages/project/15721215153.jpg', NULL, NULL, '2019-10-26 18:25:15', '2019-10-26 18:25:15'),
(61, '15721215154.jpg', 'dashboardImages/project/15721215154.jpg', NULL, NULL, '2019-10-26 18:25:15', '2019-10-26 18:25:15'),
(62, '15721215155.jpg', 'dashboardImages/project/15721215155.jpg', NULL, NULL, '2019-10-26 18:25:15', '2019-10-26 18:25:15'),
(63, '15721215156.jpg', 'dashboardImages/project/15721215156.jpg', NULL, NULL, '2019-10-26 18:25:15', '2019-10-26 18:25:15'),
(65, '15721290943.jpg', 'dashboardImages/project/15721290943.jpg', NULL, NULL, '2019-10-26 20:31:34', '2019-10-26 20:31:34'),
(66, '157213158020257992_10211454245566143_6148412932699077504_n.jpg', 'dashboardImages/team/157213158020257992_10211454245566143_6148412932699077504_n.jpg', NULL, NULL, '2019-10-26 21:13:00', '2019-10-26 21:13:00'),
(67, '1573591040Light.png', 'dashboardImages/setting/1573591040Light.png', NULL, NULL, '2019-11-12 18:37:20', '2019-11-12 18:37:20');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `id` int(11) NOT NULL,
  `name` varchar(191) NOT NULL,
  `email` varchar(191) NOT NULL,
  `phone` varchar(191) NOT NULL,
  `title` varchar(191) DEFAULT NULL,
  `message` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_id` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `parent`
--

CREATE TABLE `parent` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE `service` (
  `id` int(10) NOT NULL,
  `image_id` int(10) UNSIGNED DEFAULT NULL,
  `icon` int(10) UNSIGNED DEFAULT NULL,
  `icon_code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parent_service_id` int(10) DEFAULT NULL,
  `created_by` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`id`, `image_id`, `icon`, `icon_code`, `parent_service_id`, `created_by`, `created_at`, `updated_at`) VALUES
(23, 7, NULL, 'icon-megaphone', NULL, 3, '2019-10-26 08:11:04', '2019-10-26 16:40:01');

-- --------------------------------------------------------

--
-- Table structure for table `service_images`
--

CREATE TABLE `service_images` (
  `id` int(10) UNSIGNED NOT NULL,
  `image_id` int(10) UNSIGNED NOT NULL,
  `service_id` int(10) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `setting`
--

CREATE TABLE `setting` (
  `id` int(10) NOT NULL,
  `logo` int(10) UNSIGNED NOT NULL,
  `status` int(10) NOT NULL DEFAULT '1',
  `default_lang` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'en',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `setting`
--

INSERT INTO `setting` (`id`, `logo`, `status`, `default_lang`, `created_at`, `updated_at`) VALUES
(1, 67, 1, 'en', '2019-08-07 22:00:00', '2019-11-12 18:37:20');

-- --------------------------------------------------------

--
-- Table structure for table `size`
--

CREATE TABLE `size` (
  `id` int(10) UNSIGNED NOT NULL,
  `size` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `id` int(10) NOT NULL,
  `image_id` int(10) UNSIGNED DEFAULT NULL,
  `video_id` int(10) DEFAULT NULL,
  `url` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_by` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id`, `image_id`, `video_id`, `url`, `created_by`, `created_at`, `updated_at`) VALUES
(2, 39, NULL, 'http://cropmedia.org', 3, '2019-10-26 07:48:17', '2019-10-26 14:53:45'),
(4, 38, NULL, NULL, 3, '2019-10-26 14:53:09', '2019-10-26 14:53:09'),
(5, 40, NULL, 'http://cropmedia.org/service', 3, '2019-10-26 14:55:20', '2019-10-26 14:55:20');

-- --------------------------------------------------------

--
-- Table structure for table `testimonial`
--

CREATE TABLE `testimonial` (
  `id` int(10) NOT NULL,
  `image_id` int(10) UNSIGNED DEFAULT NULL,
  `created_by` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role_id` int(10) UNSIGNED DEFAULT NULL,
  `image_id` int(10) UNSIGNED DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `role_id`, `image_id`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 'Mohamed Kidwany', 'kidoo@3elaji.com', NULL, NULL, NULL, '$2y$12$..vHGD7vwnIG74yYwzR2h.DKGN2MEZGaqkTkVl5cwpHsxkINHXL3W\r\n', '0LpvuglkZ4sffPupecJrX9yJqHg9Jag1sAkILElvehb9GdFbK7n13sDwK58Q', '2019-06-18 15:45:49', '2019-06-18 16:12:57'),
(3, 'Admin', 'admin@e3lan-misr.com', NULL, NULL, NULL, '$2y$10$hK.eiBbbNJsfhenhnuiyBeyFG3YKJgspnP0uUsvFM33SXqZ2OPLd6', 'tHNn1QXvh25NVKAgZ2jaMT28icdlEDdFbJ789Dxvly5oC7D7lqPMQ6aaVZzr', '2019-08-14 09:42:26', '2019-08-14 09:42:26');

-- --------------------------------------------------------

--
-- Table structure for table `zone`
--

CREATE TABLE `zone` (
  `id` int(10) UNSIGNED NOT NULL,
  `area_id` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`),
  ADD KEY `about_image_id` (`image_id`),
  ADD KEY `mission_image_id` (`mission_image_id`),
  ADD KEY `vision_image_id` (`vision_image_id`),
  ADD KEY `values_image_id` (`values_image_id`),
  ADD KEY `approach_image_id` (`approach_image_id`);

--
-- Indexes for table `area`
--
ALTER TABLE `area`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `billboard`
--
ALTER TABLE `billboard`
  ADD PRIMARY KEY (`id`),
  ADD KEY `project_service_id` (`service_id`),
  ADD KEY `billboard_image_id` (`image_id`),
  ADD KEY `billboard_area_id` (`area_id`),
  ADD KEY `billboard_size_id` (`size_id`);

--
-- Indexes for table `billboard_images`
--
ALTER TABLE `billboard_images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `project_image_id` (`image_id`),
  ADD KEY `image_project_id` (`project_id`);

--
-- Indexes for table `campaign`
--
ALTER TABLE `campaign`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id_cart` (`user_id`);

--
-- Indexes for table `campaign_details`
--
ALTER TABLE `campaign_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `campaign_parent` (`campaign_id`);

--
-- Indexes for table `campaign_items`
--
ALTER TABLE `campaign_items`
  ADD KEY `parent_campaign_id` (`campaign_id`),
  ADD KEY `parent_billboard_id` (`billboard_id`);

--
-- Indexes for table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feature`
--
ALTER TABLE `feature`
  ADD PRIMARY KEY (`id`),
  ADD KEY `feature_image_id` (`image_id`);

--
-- Indexes for table `image`
--
ALTER TABLE `image`
  ADD PRIMARY KEY (`id`),
  ADD KEY `image_album_id` (`album_id`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `parent`
--
ALTER TABLE `parent`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`id`),
  ADD KEY `service_created_by` (`created_by`),
  ADD KEY `service_icon` (`icon`),
  ADD KEY `service_image_id` (`image_id`),
  ADD KEY `parent_service_id` (`parent_service_id`);

--
-- Indexes for table `service_images`
--
ALTER TABLE `service_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `setting`
--
ALTER TABLE `setting`
  ADD PRIMARY KEY (`id`),
  ADD KEY `webiste_logo_image_id` (`logo`);

--
-- Indexes for table `size`
--
ALTER TABLE `size`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`),
  ADD KEY `slide_created_by` (`created_by`),
  ADD KEY `slide_image_id` (`image_id`);

--
-- Indexes for table `testimonial`
--
ALTER TABLE `testimonial`
  ADD PRIMARY KEY (`id`),
  ADD KEY `testimonial_created_by` (`created_by`),
  ADD KEY `tetsti_image_id` (`image_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `user_role_id` (`role_id`),
  ADD KEY `user_image_id` (`image_id`);

--
-- Indexes for table `zone`
--
ALTER TABLE `zone`
  ADD PRIMARY KEY (`id`),
  ADD KEY `zone_area_id` (`area_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `area`
--
ALTER TABLE `area`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `billboard`
--
ALTER TABLE `billboard`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `billboard_images`
--
ALTER TABLE `billboard_images`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `campaign`
--
ALTER TABLE `campaign`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `campaign_details`
--
ALTER TABLE `campaign_details`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `client`
--
ALTER TABLE `client`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `feature`
--
ALTER TABLE `feature`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `image`
--
ALTER TABLE `image`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `parent`
--
ALTER TABLE `parent`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `service`
--
ALTER TABLE `service`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `service_images`
--
ALTER TABLE `service_images`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `setting`
--
ALTER TABLE `setting`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `size`
--
ALTER TABLE `size`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `testimonial`
--
ALTER TABLE `testimonial`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `zone`
--
ALTER TABLE `zone`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `about`
--
ALTER TABLE `about`
  ADD CONSTRAINT `about_image_id` FOREIGN KEY (`image_id`) REFERENCES `image` (`id`),
  ADD CONSTRAINT `approach_image_id` FOREIGN KEY (`approach_image_id`) REFERENCES `image` (`id`),
  ADD CONSTRAINT `mission_image_id` FOREIGN KEY (`mission_image_id`) REFERENCES `image` (`id`),
  ADD CONSTRAINT `values_image_id` FOREIGN KEY (`values_image_id`) REFERENCES `image` (`id`),
  ADD CONSTRAINT `vision_image_id` FOREIGN KEY (`vision_image_id`) REFERENCES `image` (`id`);

--
-- Constraints for table `billboard`
--
ALTER TABLE `billboard`
  ADD CONSTRAINT `billboard_area_id` FOREIGN KEY (`area_id`) REFERENCES `area` (`id`),
  ADD CONSTRAINT `billboard_image_id` FOREIGN KEY (`image_id`) REFERENCES `image` (`id`),
  ADD CONSTRAINT `billboard_size_id` FOREIGN KEY (`size_id`) REFERENCES `size` (`id`),
  ADD CONSTRAINT `project_service_id` FOREIGN KEY (`service_id`) REFERENCES `service` (`id`);

--
-- Constraints for table `billboard_images`
--
ALTER TABLE `billboard_images`
  ADD CONSTRAINT `image_project_id` FOREIGN KEY (`project_id`) REFERENCES `billboard` (`id`),
  ADD CONSTRAINT `project_image_id` FOREIGN KEY (`image_id`) REFERENCES `image` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `campaign`
--
ALTER TABLE `campaign`
  ADD CONSTRAINT `user_id_cart` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `campaign_details`
--
ALTER TABLE `campaign_details`
  ADD CONSTRAINT `campaign_parent` FOREIGN KEY (`campaign_id`) REFERENCES `campaign` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `campaign_items`
--
ALTER TABLE `campaign_items`
  ADD CONSTRAINT `parent_billboard_id` FOREIGN KEY (`billboard_id`) REFERENCES `billboard` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `parent_campaign_id` FOREIGN KEY (`campaign_id`) REFERENCES `campaign` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `feature`
--
ALTER TABLE `feature`
  ADD CONSTRAINT `feature_image_id` FOREIGN KEY (`image_id`) REFERENCES `image` (`id`);

--
-- Constraints for table `service`
--
ALTER TABLE `service`
  ADD CONSTRAINT `parent_service_id` FOREIGN KEY (`parent_service_id`) REFERENCES `service` (`id`),
  ADD CONSTRAINT `service_created_by` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `service_icon` FOREIGN KEY (`icon`) REFERENCES `image` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `service_image_id` FOREIGN KEY (`image_id`) REFERENCES `image` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `setting`
--
ALTER TABLE `setting`
  ADD CONSTRAINT `logo_image_id` FOREIGN KEY (`logo`) REFERENCES `image` (`id`);

--
-- Constraints for table `slider`
--
ALTER TABLE `slider`
  ADD CONSTRAINT `slider_created_by` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `slider_image_id` FOREIGN KEY (`image_id`) REFERENCES `image` (`id`);

--
-- Constraints for table `testimonial`
--
ALTER TABLE `testimonial`
  ADD CONSTRAINT `testimonial_created_by` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `tetsti_image_id` FOREIGN KEY (`image_id`) REFERENCES `image` (`id`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `user_image_id` FOREIGN KEY (`image_id`) REFERENCES `image` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `zone`
--
ALTER TABLE `zone`
  ADD CONSTRAINT `zone_area_id` FOREIGN KEY (`area_id`) REFERENCES `area` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
