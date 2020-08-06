-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 18, 2020 at 08:13 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.3.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `e-commerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `abouts`
--

CREATE TABLE `abouts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `about` varchar(10000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `abouts`
--

INSERT INTO `abouts` (`id`, `about`, `image`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(3, 'What does it mean by disruptive technologies, game-changers, or thinking out the box? How will they shape the new Post -Corona workspace? How do they relate to the context of Bangladesh?  ggggggggggggggggggggggggggg\r\n\r\nWe may have the answers, but we sure have a lot of questions. So please join us for an engaging online session on Saturday, June 20, at 10 pm BST, live on Facebook.', NULL, 1, 1, '2020-06-17 04:24:00', '2020-06-17 04:24:11');

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `name`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(4, 'Aarong', NULL, 1, '2020-05-12 00:19:27', '2020-05-12 00:19:27'),
(5, 'Esay', NULL, 1, '2020-05-12 00:19:37', '2020-05-12 00:20:46'),
(7, 'Rice Men', NULL, 1, '2020-05-18 02:53:35', '2020-05-18 02:53:35'),
(8, 'Gentle Park', NULL, 1, '2020-05-20 01:41:10', '2020-05-20 01:41:10');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(6, 'Mem', 1, 1, '2020-05-12 00:21:30', '2020-05-18 02:45:36'),
(7, 'Women', 1, 1, '2020-05-12 00:21:40', '2020-05-18 02:45:52'),
(8, 'Babies', 1, NULL, '2020-05-18 02:46:49', '2020-05-18 02:46:49'),
(9, 'Child', 1, NULL, '2020-05-20 01:40:31', '2020-05-20 01:40:31');

-- --------------------------------------------------------

--
-- Table structure for table `colors`
--

CREATE TABLE `colors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `colors`
--

INSERT INTO `colors` (`id`, `name`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(3, 'Black', 1, 1, '2020-05-12 00:03:13', '2020-05-18 02:53:52'),
(4, 'White', 1, NULL, '2020-05-18 02:54:04', '2020-05-18 02:54:04'),
(5, 'Red', 1, NULL, '2020-05-18 02:54:15', '2020-05-18 02:54:15'),
(6, 'Green', 1, NULL, '2020-05-18 02:54:24', '2020-05-18 02:54:24'),
(7, 'Blue', 1, NULL, '2020-05-18 02:54:33', '2020-05-18 02:54:33');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instagram` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `youtube` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `linkedin` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `phone`, `email`, `address`, `facebook`, `twitter`, `instagram`, `youtube`, `linkedin`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(2, '+8801517167619', 'shakil@mdsajedulislam.com', 'Dhanmondi, Dhaka-1209, Bangladesh', 'https://www.facebook.com/', 'https://twitter.com/', 'https://www.instagram.com/', 'https://www.youtube.com/', 'https://www.linkedin.com/', 1, NULL, '2020-05-05 00:04:23', '2020-05-18 03:51:05');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `logos`
--

CREATE TABLE `logos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `logos`
--

INSERT INTO `logos` (`id`, `image`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(13, '202005181012Fusion-Logo.png', 1, 1, '2020-05-18 02:17:59', '2020-05-18 04:12:16');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `name`, `email`, `mobile`, `message`, `created_at`, `updated_at`) VALUES
(8, 'Md. Sajedul Islam', 'sishakil546@gmail.com', '01517167619', 'goooood', '2020-06-17 05:49:23', '2020-06-17 05:49:23'),
(10, 'Md. Sajedul Islam', 'sishakil546@gmail.com', '01517167619', 'goood', '2020-06-17 05:56:39', '2020-06-17 05:56:39'),
(11, 'Md. Sajedul Islam', 'sishakil546@gmail.com', '01517167619', 'Gooddd', '2020-06-17 05:58:34', '2020-06-17 05:58:34'),
(12, 'Md. Sajedul Islam', 'sajedul.idb@gmail.com', '01517167619', 'The Regional Studies Association (RSA) is committed to supporting the global community in researching and disseminating evidence on how regions, cities and industry are addressing the impact of the Coronavirus (COVID-19). This Small Grant Scheme has been launched to support our community in this work. The money to fund this scheme has been repurposed from the Research Network scheme and Travel Grant scheme funding set aside for 2020 and has been topped up to allow more grants to be awarded.📣\r\n\r\n⏳DEADLINE\r\nJune 22, 2020', '2020-06-17 06:12:01', '2020-06-17 06:12:01');

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
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2020_05_03_105628_create_logos_table', 2),
(5, '2020_05_04_065213_create_sliders_table', 3),
(14, '2020_05_05_044055_create_abouts_table', 11),
(15, '2020_05_05_050612_create_contacts_table', 12),
(16, '2020_05_05_170634_create_messages_table', 13),
(17, '2020_05_10_080254_create_categories_table', 14),
(18, '2020_05_11_094122_create_brands_table', 15),
(19, '2020_05_12_055419_create_colors_table', 16),
(20, '2020_05_13_061650_create_sizes_table', 17),
(21, '2020_05_13_192913_create_products_table', 18),
(22, '2020_05_13_193419_create_product_sizes_table', 18),
(23, '2020_05_13_193442_create_product_colors_table', 18),
(24, '2020_05_13_193518_create_product_sub_images_table', 18),
(25, '2020_05_13_195012_create_product_colors_table', 19),
(26, '2020_06_10_085603_create_shippings_table', 20),
(27, '2020_06_10_085825_create_payments_table', 20),
(28, '2020_06_10_085843_create_orders_table', 20),
(29, '2020_06_10_085921_create_order_details_table', 20),
(30, '2020_06_11_083824_create_videos_table', 21);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL COMMENT 'user_id=customer_id',
  `shipping_id` int(11) NOT NULL,
  `payment_id` int(11) NOT NULL,
  `order_no` int(11) NOT NULL,
  `order_total` double NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0 COMMENT '0=pending and 1=approved',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `shipping_id`, `payment_id`, `order_no`, `order_total`, `status`, `created_at`, `updated_at`) VALUES
(9, 18, 10, 15, 1, 110000, 0, '2020-06-17 03:16:24', '2020-06-17 03:16:24'),
(10, 18, 10, 16, 2, 2400, 1, '2020-06-17 03:16:52', '2020-06-17 03:53:44'),
(11, 13, 11, 17, 3, 7500, 1, '2020-06-17 03:18:11', '2020-06-17 03:19:03');

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `color_id` int(11) NOT NULL,
  `size_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_details`
--

INSERT INTO `order_details` (`id`, `order_id`, `product_id`, `color_id`, `size_id`, `quantity`, `created_at`, `updated_at`) VALUES
(10, 9, 15, 6, 6, 2, '2020-06-17 03:16:24', '2020-06-17 03:16:24'),
(11, 10, 16, 5, 6, 2, '2020-06-17 03:16:52', '2020-06-17 03:16:52'),
(12, 11, 11, 3, 6, 3, '2020-06-17 03:18:11', '2020-06-17 03:18:11');

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
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `payment_method` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `transaction_no` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`id`, `payment_method`, `transaction_no`, `created_at`, `updated_at`) VALUES
(15, 'Bkash', '77777777', '2020-06-17 03:16:24', '2020-06-17 03:16:24'),
(16, 'Hand Cash', NULL, '2020-06-17 03:16:52', '2020-06-17 03:16:52'),
(17, 'Bkash', '7777777755555', '2020-06-17 03:18:11', '2020-06-17 03:18:11');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` int(11) NOT NULL,
  `brand_id` int(11) NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` double NOT NULL,
  `short_desc` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `long_desc` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category_id`, `brand_id`, `name`, `slug`, `price`, `short_desc`, `long_desc`, `image`, `created_at`, `updated_at`) VALUES
(18, 6, 5, 'Men T-shart', 'men-t-shart', 2500, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '202006180535202005181038product-03.jpg', '2020-06-17 23:35:29', '2020-06-17 23:35:29'),
(19, 7, 4, 'Women  dress 1', 'women-dress-1', 3500, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '202006180541202005181042product-08.jpg', '2020-06-17 23:41:28', '2020-06-17 23:41:28'),
(20, 8, 8, 'Baby one', 'baby-one', 2000, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galleyLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galleyLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley', '202006180542202005180902girl-holding-brown-dry-leaf-2249786.jpg', '2020-06-17 23:42:14', '2020-06-17 23:42:14'),
(21, 6, 5, 'Men two', 'men-two', 2500, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galleyLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galleyLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley', '202006180543202005180907product-min-02.jpg', '2020-06-17 23:43:13', '2020-06-17 23:43:13'),
(22, 7, 4, 'Women tree', 'women-tree', 2500, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galleyLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galleyLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galleyLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley', '202006180544202005181042product-05.jpg', '2020-06-17 23:44:29', '2020-06-17 23:44:29'),
(23, 8, 4, 'Baba tree', 'baba-tree', 2000, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galleyLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galleyLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley', '202006180546202005181045toddler-standing-on-open-area-2050289.jpg', '2020-06-17 23:46:04', '2020-06-17 23:46:04'),
(24, 6, 7, 'Mem four', 'mem-four', 3000, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galleyLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galleyLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley', '202006180548202005200822product-min-03.jpg', '2020-06-17 23:48:21', '2020-06-17 23:48:21'),
(25, 6, 4, 'Man Panjabi', 'man-panjabi', 3500, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galleyLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galleyLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley', '202006180549202005181038product-11.jpg', '2020-06-17 23:49:13', '2020-06-17 23:49:13'),
(26, 7, 5, 'Women four', 'women-four', 2500, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley', '202006180550202005200820product-01.jpg', '2020-06-17 23:50:10', '2020-06-17 23:50:10'),
(27, 7, 4, 'Women Six', 'women-six', 2300, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galleyLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galleyLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley', '202006180550202005181042product-10.jpg', '2020-06-17 23:50:54', '2020-06-17 23:50:54'),
(28, 8, 7, 'Baby Nine', 'baby-nine', 2500, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galleyLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galleyLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley', '202006180551202005181045toddler-standing-on-open-area-2050289.jpg', '2020-06-17 23:51:42', '2020-06-17 23:51:42'),
(29, 8, 7, 'Baby ten', 'baby-ten', 2500, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galleyLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galleyLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley', '202006180553202005180902girl-holding-brown-dry-leaf-2249786.jpg', '2020-06-17 23:52:25', '2020-06-17 23:53:53');

-- --------------------------------------------------------

--
-- Table structure for table `product_colors`
--

CREATE TABLE `product_colors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` int(11) DEFAULT NULL,
  `color_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_colors`
--

INSERT INTO `product_colors` (`id`, `product_id`, `color_id`, `created_at`, `updated_at`) VALUES
(76, 8, 5, '2020-06-17 23:26:49', '2020-06-17 23:26:49'),
(77, 8, 7, '2020-06-17 23:26:49', '2020-06-17 23:26:49'),
(78, 18, 3, '2020-06-17 23:35:29', '2020-06-17 23:35:29'),
(79, 18, 4, '2020-06-17 23:35:29', '2020-06-17 23:35:29'),
(80, 18, 5, '2020-06-17 23:35:29', '2020-06-17 23:35:29'),
(81, 19, 5, '2020-06-17 23:41:28', '2020-06-17 23:41:28'),
(82, 19, 6, '2020-06-17 23:41:28', '2020-06-17 23:41:28'),
(83, 19, 7, '2020-06-17 23:41:28', '2020-06-17 23:41:28'),
(84, 20, 4, '2020-06-17 23:42:14', '2020-06-17 23:42:14'),
(85, 20, 5, '2020-06-17 23:42:14', '2020-06-17 23:42:14'),
(89, 22, 4, '2020-06-17 23:44:29', '2020-06-17 23:44:29'),
(90, 22, 5, '2020-06-17 23:44:29', '2020-06-17 23:44:29'),
(91, 22, 6, '2020-06-17 23:44:29', '2020-06-17 23:44:29'),
(92, 23, 4, '2020-06-17 23:46:04', '2020-06-17 23:46:04'),
(93, 23, 5, '2020-06-17 23:46:04', '2020-06-17 23:46:04'),
(94, 23, 6, '2020-06-17 23:46:04', '2020-06-17 23:46:04'),
(95, 24, 3, '2020-06-17 23:48:21', '2020-06-17 23:48:21'),
(96, 24, 5, '2020-06-17 23:48:21', '2020-06-17 23:48:21'),
(97, 24, 7, '2020-06-17 23:48:21', '2020-06-17 23:48:21'),
(98, 25, 3, '2020-06-17 23:49:13', '2020-06-17 23:49:13'),
(99, 25, 4, '2020-06-17 23:49:13', '2020-06-17 23:49:13'),
(100, 26, 3, '2020-06-17 23:50:10', '2020-06-17 23:50:10'),
(101, 26, 4, '2020-06-17 23:50:10', '2020-06-17 23:50:10'),
(102, 27, 4, '2020-06-17 23:50:54', '2020-06-17 23:50:54'),
(103, 27, 5, '2020-06-17 23:50:54', '2020-06-17 23:50:54'),
(104, 28, 4, '2020-06-17 23:51:42', '2020-06-17 23:51:42'),
(105, 28, 5, '2020-06-17 23:51:43', '2020-06-17 23:51:43'),
(112, 29, 4, '2020-06-17 23:53:53', '2020-06-17 23:53:53'),
(113, 29, 6, '2020-06-17 23:53:53', '2020-06-17 23:53:53'),
(114, 21, 3, '2020-06-17 23:54:28', '2020-06-17 23:54:28'),
(115, 21, 4, '2020-06-17 23:54:28', '2020-06-17 23:54:28'),
(116, 21, 5, '2020-06-17 23:54:28', '2020-06-17 23:54:28');

-- --------------------------------------------------------

--
-- Table structure for table `product_sizes`
--

CREATE TABLE `product_sizes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` int(11) DEFAULT NULL,
  `size_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_sizes`
--

INSERT INTO `product_sizes` (`id`, `product_id`, `size_id`, `created_at`, `updated_at`) VALUES
(69, 18, 6, '2020-06-17 23:35:29', '2020-06-17 23:35:29'),
(70, 18, 7, '2020-06-17 23:35:29', '2020-06-17 23:35:29'),
(71, 18, 8, '2020-06-17 23:35:29', '2020-06-17 23:35:29'),
(72, 19, 6, '2020-06-17 23:41:28', '2020-06-17 23:41:28'),
(73, 19, 8, '2020-06-17 23:41:28', '2020-06-17 23:41:28'),
(74, 20, 6, '2020-06-17 23:42:15', '2020-06-17 23:42:15'),
(75, 20, 8, '2020-06-17 23:42:15', '2020-06-17 23:42:15'),
(77, 22, 5, '2020-06-17 23:44:29', '2020-06-17 23:44:29'),
(78, 22, 6, '2020-06-17 23:44:29', '2020-06-17 23:44:29'),
(79, 22, 7, '2020-06-17 23:44:29', '2020-06-17 23:44:29'),
(80, 23, 6, '2020-06-17 23:46:04', '2020-06-17 23:46:04'),
(81, 23, 7, '2020-06-17 23:46:04', '2020-06-17 23:46:04'),
(82, 24, 5, '2020-06-17 23:48:21', '2020-06-17 23:48:21'),
(83, 24, 6, '2020-06-17 23:48:21', '2020-06-17 23:48:21'),
(84, 24, 7, '2020-06-17 23:48:21', '2020-06-17 23:48:21'),
(85, 25, 6, '2020-06-17 23:49:13', '2020-06-17 23:49:13'),
(86, 25, 7, '2020-06-17 23:49:13', '2020-06-17 23:49:13'),
(87, 26, 6, '2020-06-17 23:50:10', '2020-06-17 23:50:10'),
(88, 26, 7, '2020-06-17 23:50:10', '2020-06-17 23:50:10'),
(89, 27, 7, '2020-06-17 23:50:54', '2020-06-17 23:50:54'),
(90, 27, 8, '2020-06-17 23:50:54', '2020-06-17 23:50:54'),
(91, 28, 5, '2020-06-17 23:51:43', '2020-06-17 23:51:43'),
(92, 28, 6, '2020-06-17 23:51:43', '2020-06-17 23:51:43'),
(99, 29, 6, '2020-06-17 23:53:53', '2020-06-17 23:53:53'),
(100, 29, 7, '2020-06-17 23:53:53', '2020-06-17 23:53:53'),
(101, 21, 7, '2020-06-17 23:54:28', '2020-06-17 23:54:28');

-- --------------------------------------------------------

--
-- Table structure for table `product_sub_images`
--

CREATE TABLE `product_sub_images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` int(11) DEFAULT NULL,
  `sub_image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_sub_images`
--

INSERT INTO `product_sub_images` (`id`, `product_id`, `sub_image`, `created_at`, `updated_at`) VALUES
(42, 18, '202006180535202005180907product-11.jpg', '2020-06-17 23:35:29', '2020-06-17 23:35:29'),
(43, 18, '202006180535202005180907product-min-02.jpg', '2020-06-17 23:35:29', '2020-06-17 23:35:29'),
(44, 18, '202006180535202005181038product-11.jpg', '2020-06-17 23:35:29', '2020-06-17 23:35:29'),
(45, 19, '202006180541202005181036banner-04.jpg', '2020-06-17 23:41:28', '2020-06-17 23:41:28'),
(46, 19, '202006180541202005181042product-05.jpg', '2020-06-17 23:41:28', '2020-06-17 23:41:28'),
(47, 19, '202006180541202005181042product-08.jpg', '2020-06-17 23:41:28', '2020-06-17 23:41:28'),
(48, 20, '202006180542202005180902photo-of-child-playing-with-wooden-blocks-3933279.jpg', '2020-06-17 23:42:14', '2020-06-17 23:42:14'),
(49, 20, '202006180542202005180902photo-of-child-standing-near-wooden-chair-3933052.jpg', '2020-06-17 23:42:14', '2020-06-17 23:42:14'),
(53, 22, '202006180544202005181042product-05.jpg', '2020-06-17 23:44:29', '2020-06-17 23:44:29'),
(54, 22, '202006180544202005181042product-08.jpg', '2020-06-17 23:44:29', '2020-06-17 23:44:29'),
(55, 22, '202006180544202005181042product-10.jpg', '2020-06-17 23:44:29', '2020-06-17 23:44:29'),
(56, 23, '202006180546202005181045people-girl-design-happy-35188.jpg', '2020-06-17 23:46:04', '2020-06-17 23:46:04'),
(57, 23, '202006180546202005181045boy-wearing-shirt-and-shorts-on-road-1374509.jpg', '2020-06-17 23:46:04', '2020-06-17 23:46:04'),
(58, 24, '202006180548202005181035gallery-03.jpg', '2020-06-17 23:48:21', '2020-06-17 23:48:21'),
(59, 24, '202006180548202005181041gallery-03.jpg', '2020-06-17 23:48:21', '2020-06-17 23:48:21'),
(60, 24, '202006180548202005181041gallery-07.jpg', '2020-06-17 23:48:21', '2020-06-17 23:48:21'),
(61, 25, '202006180549202005181041gallery-03.jpg', '2020-06-17 23:49:13', '2020-06-17 23:49:13'),
(62, 25, '202006180549202005181041gallery-07.jpg', '2020-06-17 23:49:13', '2020-06-17 23:49:13'),
(63, 26, '202006180550202005181042product-05.jpg', '2020-06-17 23:50:10', '2020-06-17 23:50:10'),
(64, 26, '202006180550202005181042product-08.jpg', '2020-06-17 23:50:10', '2020-06-17 23:50:10'),
(65, 26, '202006180550202005181042product-10.jpg', '2020-06-17 23:50:10', '2020-06-17 23:50:10'),
(66, 27, '202006180550202005181042product-05.jpg', '2020-06-17 23:50:54', '2020-06-17 23:50:54'),
(67, 27, '202006180550202005181042product-08.jpg', '2020-06-17 23:50:54', '2020-06-17 23:50:54'),
(68, 27, '202006180550202005181042product-10.jpg', '2020-06-17 23:50:54', '2020-06-17 23:50:54'),
(69, 28, '202006180551202005180902girl-holding-brown-dry-leaf-2249786.jpg', '2020-06-17 23:51:42', '2020-06-17 23:51:42'),
(70, 28, '202006180551202005180902photo-of-child-playing-with-wooden-blocks-3933279.jpg', '2020-06-17 23:51:42', '2020-06-17 23:51:42'),
(74, 29, '202006180553202005181045boy-wearing-shirt-and-shorts-on-road-1374509.jpg', '2020-06-17 23:53:15', '2020-06-17 23:53:15'),
(75, 29, '202006180553202005181045toddler-standing-on-open-area-2050289.jpg', '2020-06-17 23:53:15', '2020-06-17 23:53:15'),
(76, 21, '202006180554202005181041gallery-03.jpg', '2020-06-17 23:54:28', '2020-06-17 23:54:28'),
(77, 21, '20200618055420200617091635439675_2075136719421739_5378927396952997888_n.jpg', '2020-06-17 23:54:28', '2020-06-17 23:54:28');

-- --------------------------------------------------------

--
-- Table structure for table `shippings`
--

CREATE TABLE `shippings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL COMMENT 'user_id=customer_id',
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile_no` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `shippings`
--

INSERT INTO `shippings` (`id`, `user_id`, `name`, `email`, `mobile_no`, `address`, `created_at`, `updated_at`) VALUES
(10, 18, 'Md. Sajedul Islam', 'sishakil546@gmail.com', '+8801517167619', 'Village: Enayetpur', '2020-06-17 03:16:17', '2020-06-17 03:16:17'),
(11, 13, 'Md. Sajedul Islam', 'sishakil546@gmail.com', '+8801517167619', 'Village: Enayetpur', '2020-06-17 03:18:01', '2020-06-17 03:18:01');

-- --------------------------------------------------------

--
-- Table structure for table `sizes`
--

CREATE TABLE `sizes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sizes`
--

INSERT INTO `sizes` (`id`, `name`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(5, 'Small', 1, NULL, '2020-05-18 02:55:01', '2020-05-18 02:55:01'),
(6, 'Medium', 1, 1, '2020-05-18 02:55:39', '2020-05-18 02:55:52'),
(7, 'Large', 1, NULL, '2020-05-18 02:56:01', '2020-05-18 02:56:01'),
(8, 'XL', 1, NULL, '2020-05-18 02:56:10', '2020-05-18 02:56:10');

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `short_title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `long_title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `image`, `short_title`, `long_title`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(7, '202005180851man-wearing-red-sweatshirt-and-black-pants-leaning-on-the-845434.jpg', 'Dessert  Is Love', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.', 1, 1, '2020-05-05 00:16:14', '2020-05-18 04:26:26'),
(8, '202005180852people-girl-design-happy-35188.jpg', 'WoW JuSt', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.', 1, 1, '2020-05-05 00:16:41', '2020-05-18 04:26:41'),
(9, '202005180852smiling-woman-looking-upright-standing-against-yellow-wall-1536619.jpg', 'Dummy text-3', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.', 1, 1, '2020-05-18 02:19:13', '2020-05-18 04:26:54'),
(10, '202005180852actor-adult-black-and-white-dark-432059.jpg', 'Dummy text-4', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.', 1, 1, '2020-05-18 02:52:55', '2020-05-18 04:27:10');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `usertype` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `code` int(200) DEFAULT NULL,
  `gender` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `address` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `usertype`, `name`, `email`, `role`, `email_verified_at`, `password`, `mobile`, `code`, `gender`, `image`, `status`, `address`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'Admin', 'admin@gmail.com', 'admin', NULL, '$2y$10$GPzpF3.ApR/0pvRLZEcYJOeMaQGNULR7BvNpp9dYQHHlo9TZSYPRG', '01517167619', 1, 'Male', '202005040746si.jpg', 1, NULL, NULL, '2020-04-19 09:42:54', '2020-05-04 01:46:30'),
(7, 'User', 'Shakil Ahamed', 'shakil@gmail.com', NULL, NULL, '$2y$10$0qS.b//gPKib5NBy4XyDs.lP.Br7Qc1OW8bhD.542gOcNg.2BC1le', NULL, 1, NULL, NULL, 1, NULL, NULL, '2020-04-20 19:56:15', '2020-04-23 03:06:25'),
(13, 'customer', 'Shakil', 'sajedul.idb@gmail.com', NULL, NULL, '$2y$10$6aAqOefG7B75ahhauiZfY.rjcvSWjpV1JeD8YqNctCPeb9d.5WZQ2', '+8801517167611', 8974, 'Male', '202006100643WhatsApp Image 2020-02-22 at 12.07.07 AM.jpeg', 1, 'Dhaka, Bangladesh', NULL, '2020-05-27 23:34:21', '2020-06-10 01:19:53'),
(18, 'customer', 'shakil', 'sishakil546@gmail.com', NULL, NULL, '$2y$10$yfR43cVStDikABGRVkOXxuYqZ9ahSF7jo6SQMxu17Sk.zQK5Sx4PS', '+8801517167619', 8582, 'Male', '20200617091635439675_2075136719421739_5378927396952997888_n.jpg', 1, 'Village: Enayetpur', NULL, '2020-06-06 22:34:06', '2020-06-17 03:16:00'),
(22, 'admin', 'Shakib', 'shakib@gmail.com', 'user', NULL, '$2y$10$sqglGRq24YjwtEiomYA/R.jSAPJizgAdS4/K.V8YYUv7Ci8zWZcXG', NULL, NULL, NULL, NULL, 1, NULL, NULL, '2020-06-09 03:42:09', '2020-06-09 03:42:09'),
(23, 'customer', 'Md. Sajedul Islam', 'shakil@mdsajedulislam.com', NULL, NULL, '$2y$10$5gB91a4A1nIcnWZMG0Vp7ujAcniFrqWzNWfjItkiIk3sOeQf0XyQ6', '+8801517167600', 7185, NULL, NULL, 0, 'Village: Enayetpur', NULL, '2020-06-17 05:51:37', '2020-06-17 05:51:37');

-- --------------------------------------------------------

--
-- Table structure for table `videos`
--

CREATE TABLE `videos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `video` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `videos`
--

INSERT INTO `videos` (`id`, `video`, `created_at`, `updated_at`) VALUES
(2, 'https://www.youtube.com/embed/-EOVeb2e4fo', '2020-06-11 04:08:30', '2020-06-11 05:55:01');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abouts`
--
ALTER TABLE `abouts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `brands_name_unique` (`name`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_name_unique` (`name`);

--
-- Indexes for table `colors`
--
ALTER TABLE `colors`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `colors_name_unique` (`name`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `logos`
--
ALTER TABLE `logos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `products_name_unique` (`name`);

--
-- Indexes for table `product_colors`
--
ALTER TABLE `product_colors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_sizes`
--
ALTER TABLE `product_sizes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_sub_images`
--
ALTER TABLE `product_sub_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shippings`
--
ALTER TABLE `shippings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sizes`
--
ALTER TABLE `sizes`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `sizes_name_unique` (`name`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `abouts`
--
ALTER TABLE `abouts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `colors`
--
ALTER TABLE `colors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `logos`
--
ALTER TABLE `logos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `product_colors`
--
ALTER TABLE `product_colors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=117;

--
-- AUTO_INCREMENT for table `product_sizes`
--
ALTER TABLE `product_sizes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102;

--
-- AUTO_INCREMENT for table `product_sub_images`
--
ALTER TABLE `product_sub_images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;

--
-- AUTO_INCREMENT for table `shippings`
--
ALTER TABLE `shippings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `sizes`
--
ALTER TABLE `sizes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `videos`
--
ALTER TABLE `videos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
