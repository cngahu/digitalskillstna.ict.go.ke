-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 22, 2024 at 04:17 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gaa`
--

-- --------------------------------------------------------

--
-- Table structure for table `advert_categories`
--

CREATE TABLE `advert_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `advert_categories`
--

INSERT INTO `advert_categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Tenders', NULL, NULL),
(2, 'Job Advert', NULL, NULL),
(3, 'Public Notices', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `entities`
--

CREATE TABLE `entities` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `ministry_id` bigint(20) UNSIGNED NOT NULL,
  `buyer_id` bigint(20) UNSIGNED NOT NULL,
  `creator_id` bigint(20) UNSIGNED NOT NULL,
  `postal_address` varchar(255) DEFAULT NULL,
  `physical_address` varchar(255) DEFAULT NULL,
  `telephone_number` varchar(255) DEFAULT NULL,
  `request_letter` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `entities`
--

INSERT INTO `entities` (`id`, `name`, `ministry_id`, `buyer_id`, `creator_id`, `postal_address`, `physical_address`, `telephone_number`, `request_letter`, `created_at`, `updated_at`) VALUES
(1, 'Bianca Coleman', 7, 15, 1, 'P.O Box 9659-00300', 'Telposta Towers 23rd Floor', '0700123456', 'uploads/letter/1724083416.pdf', '2024-08-19 13:03:36', '2024-08-20 04:36:40'),
(2, 'Germane Carroll', 23, 15, 1, 'Blanditiis aliqua A', 'Itaque irure sunt au', '+1 (816) 973-8584', 'uploads/letter/1724139726.bin', '2024-08-19 13:08:04', '2024-08-20 04:42:06'),
(3, 'ICT Authority', 8, 23, 1, '62000-00200 Nairobi', 'Telposta Towers 23rd Floor', '020123456789', 'uploads/letter/1724144079.pdf', '2024-08-20 05:54:39', '2024-08-20 05:54:39'),
(4, 'Maxwell Richards', 21, 25, 1, 'Animi ex quidem ex', 'Non consequatur magn', '+1 (256) 451-8705', 'uploads/letter/1724248501.pdf', '2024-08-21 13:55:01', '2024-08-21 13:55:01'),
(5, 'KENYA REVENUE AUTHORITY', 4, 29, 1, 'P.O BOX 48240 -00100 NAIROBI', 'TIMES TOWER', '+254204999999', 'uploads/letter/1724251264.pdf', '2024-08-21 14:41:04', '2024-08-21 14:41:04');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2024_02_27_185700_create_permission_tables', 2),
(6, '2024_08_19_084722_create_ministries_table', 3),
(7, '2024_08_19_123423_add_columns_to_table', 4),
(8, '2024_08_19_134618_create_entities_table', 5),
(9, '2024_08_20_083907_add_entities_to_table', 6),
(10, '2024_08_20_093646_create_sizes_table', 7),
(11, '2024_08_20_093706_create_advert_categories_table', 7),
(12, '2024_08_20_094129_create_releases_table', 7),
(13, '2024_08_20_095306_create_multi_images_table', 7),
(14, '2024_08_20_096628_create_print_adverts_table', 7),
(15, '2024_08_20_163000_add_designer_to_table', 8),
(16, '2024_08_20_173059_add_designers_to_table', 9),
(17, '2024_08_21_054805_create_rate_cards_table', 10),
(18, '2024_08_21_061601_add_fdesigners_to_table', 11),
(19, '2024_08_21_061928_create_proforma_invoices_table', 12),
(20, '2024_08_21_080919_create_review_comments_table', 13),
(21, '2024_08_21_100552_create_review_comments_table', 14),
(22, '2024_08_21_101727_create_jobs_table', 15),
(23, '2024_08_21_104302_add_clientsend_to_table', 16);

-- --------------------------------------------------------

--
-- Table structure for table `ministries`
--

CREATE TABLE `ministries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ministries`
--

INSERT INTO `ministries` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'OFFICE OF THE PRIME CABINET SECRETARY & MINISTRY OF FOREIGN AND DIASPORA AFFAIRS', NULL, NULL),
(2, 'MINISTRY OF INTERIOR AND NATIONAL ADMINISTRATION', NULL, NULL),
(3, 'MINISTRY OF DEFENCE', NULL, NULL),
(4, 'THE NATIONAL TREASURY AND ECONOMIC PLANNING', NULL, NULL),
(5, 'MINISTRY OF PUBLIC SERVICE, PERFORMANCE AND DELIVERY MANAGEMENT', NULL, NULL),
(6, 'MINISTRY OF ROADS AND TRANSPORT', NULL, NULL),
(7, 'MINISTRY OF LANDS, PUBLIC WORKS, HOUSING AND URBAN DEVELOPMENT', NULL, NULL),
(8, 'MINISTRY OF INFORMATION, COMMUNICATIONS AND THE DIGITAL ECONOMY', NULL, NULL),
(9, 'MINISTRY OF HEALTH', NULL, NULL),
(10, 'MINISTRY OF EDUCATION', NULL, NULL),
(11, 'MINISTRY OF AGRICULTURE AND LIVESTOCK DEVELOPMENT', NULL, NULL),
(12, 'MINISTRY OF INVESTMENTS, TRADE AND INDUSTRY', NULL, NULL),
(13, 'MINISTRY OF CO-OPERATIVES AND MICRO, SMALL AND MEDIUM ENTERPRISES (MSMEs) DEVELOPMENT', NULL, NULL),
(14, 'MINISTRY OF YOUTH AFFAIRS, CREATIVE ECONOMY AND SPORTS', NULL, NULL),
(15, 'MINISTRY OF ENVIRONMENT, CLIMATE CHANGE AND FORESTRY', NULL, NULL),
(16, 'MINISTRY OF TOURISM AND WILDLIFE', NULL, NULL),
(17, 'MINISTRY OF GENDER, CULTURE, THE ARTS & HERITAGE', NULL, NULL),
(18, 'MINISTRY OF WATER, SANITATION AND IRRIGATION', NULL, NULL),
(19, 'MINISTRY OF ENERGY AND PETROLEUM', NULL, NULL),
(20, 'MINISTRY OF LABOUR AND SOCIAL PROTECTION', NULL, NULL),
(21, 'MINISTRY OF EAST AFRICAN COMMUNITY (EAC), THE ASALs AND REGIONAL DEVELOPMENT', NULL, NULL),
(22, 'MINISTRY OF MINING, BLUE ECONOMY AND MARITIME AFFAIRS', NULL, NULL),
(23, 'THE STATE LAW OFFICE', NULL, NULL),
(24, 'test gt', '2024-08-19 06:31:39', '2024-08-19 06:39:30');

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'App\\Models\\User', 2),
(1, 'App\\Models\\User', 20),
(2, 'App\\Models\\User', 1),
(2, 'App\\Models\\User', 22),
(4, 'App\\Models\\User', 15),
(4, 'App\\Models\\User', 23),
(4, 'App\\Models\\User', 25),
(4, 'App\\Models\\User', 29),
(5, 'App\\Models\\User', 24),
(5, 'App\\Models\\User', 26),
(5, 'App\\Models\\User', 28),
(6, 'App\\Models\\User', 16),
(6, 'App\\Models\\User', 27),
(6, 'App\\Models\\User', 30),
(7, 'App\\Models\\User', 17),
(7, 'App\\Models\\User', 18),
(7, 'App\\Models\\User', 19);

-- --------------------------------------------------------

--
-- Table structure for table `multi_images`
--

CREATE TABLE `multi_images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `print_id` int(11) NOT NULL,
  `print_image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `group_name` varchar(255) DEFAULT NULL,
  `guard_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `group_name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'admin.role.menu', 'role', 'web', '2024-02-28 06:04:18', '2024-02-28 06:49:12'),
(2, 'admin.user.menu', 'user', 'web', '2024-02-28 06:50:27', '2024-02-28 06:50:27'),
(3, 'user.menu', 'setting', 'web', '2024-03-02 08:57:02', '2024-03-02 08:57:02'),
(4, 'user.delete', 'setting', 'web', '2024-03-02 08:57:40', '2024-03-02 08:57:40');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `print_adverts`
--

CREATE TABLE `print_adverts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `entity_id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `size_id` bigint(20) UNSIGNED NOT NULL,
  `request_ref_no` varchar(255) NOT NULL,
  `release_id` bigint(20) UNSIGNED NOT NULL,
  `releases` varchar(255) DEFAULT NULL,
  `artwork` tinyint(1) NOT NULL DEFAULT 0,
  `artwork_upload` varchar(255) DEFAULT NULL,
  `raw_advert` varchar(255) DEFAULT NULL,
  `colour` enum('colour','black') NOT NULL DEFAULT 'colour',
  `request_letter` varchar(255) NOT NULL,
  `logo` varchar(255) DEFAULT NULL,
  `requester_id` bigint(20) UNSIGNED NOT NULL,
  `sys_ref` varchar(255) DEFAULT NULL,
  `designer_id` bigint(20) UNSIGNED DEFAULT NULL,
  `designer_assign` datetime DEFAULT NULL,
  `designer_design` varchar(255) DEFAULT NULL,
  `design_final` datetime DEFAULT NULL,
  `num_pages` int(11) DEFAULT NULL,
  `rate_id` bigint(20) UNSIGNED DEFAULT NULL,
  `client_send` datetime DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `print_adverts`
--

INSERT INTO `print_adverts` (`id`, `entity_id`, `category_id`, `size_id`, `request_ref_no`, `release_id`, `releases`, `artwork`, `artwork_upload`, `raw_advert`, `colour`, `request_letter`, `logo`, `requester_id`, `sys_ref`, `designer_id`, `designer_assign`, `designer_design`, `design_final`, `num_pages`, `rate_id`, `client_send`, `status`, `created_at`, `updated_at`) VALUES
(2, 3, 1, 1, 'ICTA/ADMIN/MYGOV/1/2020', 1, NULL, 0, NULL, 'uploads/letter/1724083416.pdf', 'colour', 'uploads/letter/1724083416.pdf', NULL, 23, 'GAA-08/2024-001', 24, '2024-08-20 20:15:47', 'uploads/adverts/1724211630.pdf', '2024-08-21 06:40:30', 1, 1, '2024-08-21 10:40:24', 'admitted', '2024-08-20 14:57:16', '2024-08-21 13:33:47'),
(3, 3, 2, 8, 'ICTA/ADMIN/MYGOV/2/2024', 1, NULL, 0, NULL, 'uploads/letter/1724083416.pdf', 'black', 'uploads/letter/1724083416.pdf', NULL, 23, 'GAA-08/2024-002', 24, '2024-08-20 20:20:58', 'uploads/adverts/1724245346.pdf', '2024-08-21 16:02:26', 2, 1, '2024-08-21 16:09:38', 'Client_Feedback', '2024-08-20 17:21:17', '2024-08-21 13:09:46'),
(4, 3, 3, 1, 'csr/2024/081', 1, '1', 1, 'uploads/artwork_upload/1724226973.pdf', NULL, 'colour', 'uploads/letter/1724226973.pdf', 'uploads/logo/1724226973.png', 2, 'GAA-08/24-003', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Submitted', '2024-08-21 07:56:13', '2024-08-21 07:56:28'),
(5, 4, 3, 1, 'MXRW/2024/081', 1, '1', 1, 'uploads/artwork_upload/1724248789.pdf', NULL, 'colour', 'uploads/letter/1724248789.pdf', 'uploads/logo/1724248789.png', 27, 'GAA-08/24-004', 26, '2024-08-21 17:58:44', 'uploads/adverts/1724249005.pdf', '2024-08-21 17:03:25', 1, 1, '2024-08-21 17:04:12', 'admitted', '2024-08-21 13:59:49', '2024-08-21 14:06:57'),
(6, 5, 1, 1, 'KRA/2024/08/023', 1, '1', 1, 'uploads/artwork_upload/1724251862.pdf', NULL, 'colour', 'uploads/letter/1724251862.pdf', 'uploads/logo/1724251862.png', 30, 'GAA-08/24-005', 28, '2024-08-21 17:58:34', 'uploads/adverts/1724252887.pdf', '2024-08-21 18:08:07', 1, 1, '2024-08-21 18:12:18', 'admitted', '2024-08-21 14:51:02', '2024-08-21 15:21:31'),
(7, 5, 3, 2, 'KRA/2024/08/024', 1, '1,2', 0, NULL, 'uploads/raw_advert/1724252078.docx', 'black', 'uploads/letter/1724252078.pdf', 'uploads/logo/1724252078.png', 30, 'GAA-08/24-006', 28, '2024-08-14 18:00:48', 'uploads/adverts/1724253544.pdf', '2024-08-21 18:19:04', 1, 4, '2024-08-21 18:19:43', 'Client_Rejected', '2024-08-21 14:54:38', '2024-08-21 15:20:48');

-- --------------------------------------------------------

--
-- Table structure for table `proforma_invoices`
--

CREATE TABLE `proforma_invoices` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `print_advert_id` bigint(20) UNSIGNED NOT NULL,
  `rate_id` bigint(20) UNSIGNED NOT NULL,
  `num_pages` int(11) NOT NULL DEFAULT 1,
  `amount` decimal(10,2) NOT NULL,
  `invoice_no` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `proforma_invoices`
--

INSERT INTO `proforma_invoices` (`id`, `print_advert_id`, `rate_id`, `num_pages`, `amount`, `invoice_no`, `created_at`, `updated_at`) VALUES
(1, 2, 1, 1, 500000.00, 'PI-00001', '2024-08-21 03:39:01', '2024-08-21 03:39:01'),
(2, 2, 1, 1, 500000.00, 'PI-00002', '2024-08-21 03:40:30', '2024-08-21 03:40:30'),
(3, 3, 1, 2, 1000000.00, 'PI-00003', '2024-08-21 03:41:16', '2024-08-21 13:02:26'),
(4, 5, 1, 1, 500000.00, 'PI-00004', '2024-08-21 14:03:25', '2024-08-21 14:03:25'),
(5, 6, 1, 1, 500000.00, 'PI-00005', '2024-08-21 15:08:07', '2024-08-21 15:08:07'),
(6, 7, 4, 1, 400000.00, 'PI-00006', '2024-08-21 15:09:52', '2024-08-21 15:19:04');

-- --------------------------------------------------------

--
-- Table structure for table `rate_cards`
--

CREATE TABLE `rate_cards` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `size_description` varchar(255) NOT NULL,
  `colour` varchar(255) NOT NULL,
  `unit_price` double NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT 1,
  `creator_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `rate_cards`
--

INSERT INTO `rate_cards` (`id`, `size_description`, `colour`, `unit_price`, `active`, `creator_id`, `created_at`, `updated_at`) VALUES
(1, 'Full Page', 'Colour', 500000, 1, 1, '2024-08-21 03:04:05', NULL),
(2, 'Full Page', 'Black', 400000, 1, 1, '2024-08-21 03:06:01', NULL),
(3, 'Half Page', 'Colour', 450000, 1, 1, '2024-08-21 03:06:27', NULL),
(4, 'Half Page', 'Black', 400000, 1, 1, '2024-08-21 03:06:27', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `releases`
--

CREATE TABLE `releases` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `refno` varchar(255) NOT NULL,
  `release_date` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `releases`
--

INSERT INTO `releases` (`id`, `refno`, `release_date`, `created_at`, `updated_at`) VALUES
(1, 'MYGOV-1', '2024-08-27', '2024-08-20 14:59:44', NULL),
(2, 'MYGOV-2', '2024-09-03', '2024-08-21 14:53:18', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `review_comments`
--

CREATE TABLE `review_comments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `print_advert_id` bigint(20) UNSIGNED NOT NULL,
  `reviewer_id` bigint(20) UNSIGNED NOT NULL,
  `comments` text NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `review_comments`
--

INSERT INTO `review_comments` (`id`, `print_advert_id`, `reviewer_id`, `comments`, `active`, `created_at`, `updated_at`) VALUES
(1, 3, 23, 'uliweka ile logo mbaya, halafu umemispell jina corrections..', 0, '2024-08-21 09:06:19', '2024-08-21 12:57:14'),
(2, 3, 23, 'kamau tiga wana', 0, '2024-08-21 12:58:35', '2024-08-21 13:02:26'),
(3, 7, 29, 'logo is not well placed. umetumia dragons instead ya lion.acha mchezo', 0, '2024-08-21 15:14:12', '2024-08-21 15:16:54'),
(4, 7, 29, 'Do not have the 3 years minimum experience', 0, '2024-08-21 15:17:58', '2024-08-21 15:19:04'),
(5, 7, 30, 'check namings', 1, '2024-08-21 15:20:48', '2024-08-21 15:20:48');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `guard_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'user', 'web', '2024-02-28 08:32:10', '2024-03-02 08:58:46'),
(2, 'admin', 'web', '2024-03-02 08:58:37', '2024-03-02 08:58:37'),
(3, 'Super Admin', 'web', '2024-03-02 08:59:01', '2024-03-02 08:59:01'),
(4, 'advertising', 'web', '2024-08-19 06:42:30', '2024-08-19 06:42:30'),
(5, 'designer', 'web', '2024-08-19 06:42:59', '2024-08-19 06:42:59'),
(6, 'Requestor', 'web', '2024-08-19 08:52:41', '2024-08-19 08:52:41'),
(7, 'Approver', 'web', '2024-08-19 08:52:51', '2024-08-19 08:52:51');

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_has_permissions`
--

INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES
(1, 1),
(1, 2),
(1, 3),
(2, 2),
(2, 3),
(3, 3),
(4, 2),
(4, 3);

-- --------------------------------------------------------

--
-- Table structure for table `sizes`
--

CREATE TABLE `sizes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sizes`
--

INSERT INTO `sizes` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Full Page', NULL, NULL),
(2, 'Half Page', NULL, NULL),
(3, 'Quarter Page', NULL, NULL),
(4, '1/8 Pge', NULL, NULL),
(5, '25*3 Page Size', NULL, NULL),
(6, '25*4 Page Size', NULL, NULL),
(7, '20*3 Page Size', NULL, NULL),
(8, '33*4 Page Size', NULL, NULL),
(9, 'Front Strip', NULL, NULL),
(10, 'Back Strip', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `must_change_password` tinyint(1) NOT NULL DEFAULT 0,
  `photo` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `payrollnumber` varchar(255) DEFAULT NULL,
  `address` text DEFAULT NULL,
  `role` enum('admin','vendor','user','technical') NOT NULL DEFAULT 'technical',
  `status` enum('active','inactive') NOT NULL DEFAULT 'active',
  `entity_id` bigint(20) UNSIGNED DEFAULT NULL,
  `code` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `email`, `email_verified_at`, `password`, `must_change_password`, `photo`, `phone`, `payrollnumber`, `address`, `role`, `status`, `entity_id`, `code`, `user_id`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Samuel Mayenga', 'admin', 'admin@gmail.com', NULL, '$2y$10$WdPp1GAY6NsVYq.3KpeEk.2xnNgAfk.Bkzr63NvuetU5SMhQhHxOC', 0, '202402230724IMG_20170701_120416_669.jpg', '0723243173', NULL, '43285-01000 Nairobi', 'admin', 'active', NULL, NULL, NULL, NULL, NULL, '2024-02-23 04:24:46'),
(2, 'Sam Vendor', 'vendor', 'vendor@gmail.com', NULL, '$2y$10$WhMdg7ghkjbnyRJUU9Rr.eOUZqs6D4vnl/V8XnjOPPWUvbTvgdpo6', 0, '202402231112IMG_20170722_160837.jpg', '0723243173', NULL, '43285-01000 Nairobi', 'vendor', 'active', NULL, NULL, NULL, NULL, NULL, '2024-02-23 08:12:01'),
(3, 'Sam User', 'user', 'user@gmail.com', NULL, '$2y$10$M4BMpTvoEFg0p5WbkpguHeXk9cDaitFlcV7BYNzJUM7mfLQbeRg9W', 0, NULL, NULL, NULL, NULL, 'user', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(4, 'Prof. Florence Farrell Jr.', NULL, 'tianna95@example.net', '2024-02-22 02:19:10', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 0, 'https://via.placeholder.com/60x60.png/008833?text=labore', '+1 (629) 645-9355', NULL, '2370 Parker Crossing\nWaelchiborough, AR 96172', 'admin', 'active', NULL, NULL, NULL, 'zUCijO3r90', '2024-02-22 02:19:10', '2024-02-22 02:19:10'),
(5, 'Alden Schoen', NULL, 'kenton17@example.net', '2024-02-22 02:19:10', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 0, 'https://via.placeholder.com/60x60.png/0022cc?text=tenetur', '458.752.2490', NULL, '844 Rico Cliffs\nGabrielleberg, WY 20828', 'vendor', 'inactive', NULL, NULL, NULL, 'ezmBxN4gFA', '2024-02-22 02:19:10', '2024-02-22 02:19:10'),
(6, 'Eldridge Schiller V', NULL, 'jazmyn38@example.com', '2024-02-22 02:19:10', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 0, 'https://via.placeholder.com/60x60.png/00aa88?text=quaerat', '1-509-628-3488', NULL, '2994 Gerhold Plains Apt. 202\nOthostad, PA 60881-7882', 'vendor', 'inactive', NULL, NULL, NULL, 'dhEw695onY', '2024-02-22 02:19:10', '2024-02-22 02:19:10'),
(7, 'Misty Lebsack', NULL, 'christelle68@example.com', '2024-02-22 02:19:10', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 0, 'https://via.placeholder.com/60x60.png/0011dd?text=odit', '1-440-917-0648', NULL, '45559 Hegmann Coves Apt. 598\nNorth Riverside, CA 36905', 'vendor', 'active', NULL, NULL, NULL, 'M4zqYT1sBD', '2024-02-22 02:19:10', '2024-02-22 02:19:10'),
(8, 'Dr. Noemie Kuhn', NULL, 'gibson.alvena@example.net', '2024-02-22 02:19:10', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 0, 'https://via.placeholder.com/60x60.png/002255?text=velit', '1-845-961-4226', NULL, '447 White Summit\nMoenborough, CT 64339-3709', 'vendor', 'active', NULL, NULL, NULL, 'MTnpxzMhpl', '2024-02-22 02:19:10', '2024-02-22 02:19:10'),
(9, 'Prof. Anika Dietrich', NULL, 'abbey21@example.org', '2024-02-22 02:19:10', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 0, 'https://via.placeholder.com/60x60.png/00ff33?text=dolorum', '(702) 931-3469', NULL, '806 Queenie Prairie\nZiemannmouth, UT 01128', 'vendor', 'inactive', NULL, NULL, NULL, 'uEltVkR2uB', '2024-02-22 02:19:10', '2024-02-22 02:19:10'),
(10, 'Ms. Yvonne Parker', NULL, 'aimee22@example.org', '2024-02-22 02:19:10', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 0, 'https://via.placeholder.com/60x60.png/005533?text=molestias', '1-484-460-6913', NULL, '48753 Schinner Fall Apt. 571\nSouth Audramouth, UT 80373-8907', 'vendor', 'inactive', NULL, NULL, NULL, 'BWq2eYZ4cS', '2024-02-22 02:19:10', '2024-02-22 02:19:10'),
(11, 'Keira Lemke', NULL, 'domenica76@example.org', '2024-02-22 02:19:10', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 0, 'https://via.placeholder.com/60x60.png/00bb99?text=omnis', '+17602644049', NULL, '5138 Malvina Port\nGerlachside, MA 83637-3615', 'vendor', 'active', NULL, NULL, NULL, 'aB69RUIAzk', '2024-02-22 02:19:10', '2024-02-22 02:19:10'),
(12, 'Prof. Jon McDermott', NULL, 'aida.nitzsche@example.org', '2024-02-22 02:19:10', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 0, 'https://via.placeholder.com/60x60.png/0011bb?text=reiciendis', '+1-646-418-8683', NULL, '320 Okuneva Crest\nEstabury, MI 45995', 'user', 'active', NULL, NULL, NULL, 'k8t7uGJEBm', '2024-02-22 02:19:10', '2024-02-22 02:19:10'),
(13, 'Leonie Sauer', NULL, 'yoberbrunner@example.org', '2024-02-22 02:19:10', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 0, 'https://via.placeholder.com/60x60.png/00eeff?text=voluptatem', '747.512.7435', NULL, '46784 Greta Locks\nDavonton, IL 16674', 'user', 'active', NULL, NULL, NULL, 'AnIlU9WZQE', '2024-02-22 02:19:10', '2024-02-22 02:19:10'),
(14, 'mayenga', NULL, 'samuel.mayenga3@ict.go.ke', NULL, '$2y$10$SeQG/VqB9yD5KLejU5bGS.5BX2X4EzS9ZdCE8log4uN5MI6nhRSIm', 0, NULL, NULL, NULL, NULL, 'user', 'active', NULL, NULL, NULL, NULL, '2024-08-15 05:23:08', '2024-08-15 05:23:08'),
(15, 'Ignacia', NULL, 'rarul@mailinator.com', '2024-08-19 09:45:03', '$2y$10$7tXRogb5WV6c6OM..9TR8eCEKEj8/LpiKL88AavuYOyt4m2rB9cDa', 0, NULL, '+1 (738) 254-1788', '40778999', NULL, 'technical', 'active', NULL, 7240, 1, NULL, '2024-08-19 09:45:03', '2024-08-19 09:45:03'),
(16, 'Samuel Mayenga', NULL, 'samuel.mayenga@ict.go.ke', '2024-08-20 05:55:27', '$2y$10$lr/xCnThxtnHUlp7/S/jl.GTeLoSuoiltaGpNDL6KoUy70VmD0wUK', 1, NULL, '0723243173', '0071', NULL, 'technical', 'active', 3, 6253, 1, NULL, '2024-08-20 05:55:27', '2024-08-20 05:55:27'),
(17, 'Canjetan Ngahu', NULL, '1canjetanngahu@gmail.com', '2024-08-20 06:01:03', '$2y$10$sWyF87iK2UKFsr1stRE7d.Ep0LN4OFvDT63TPLDlhYs3rBIsrjtZa', 1, NULL, '0700924662', '0104', NULL, 'technical', 'active', 3, 3150, 1, NULL, '2024-08-20 06:01:03', '2024-08-20 06:01:03'),
(18, 'Canjetan Ngahu', NULL, '2canjetanngahu@gmail.com', '2024-08-20 06:03:56', '$2y$10$mlrHngw6uVjDaMDJ6A1/Geux.SYaAbXgiZDFd59m9Zy92/NsbpnYG', 1, NULL, '0700924662', '0104', NULL, 'technical', 'active', 3, 5128, 1, NULL, '2024-08-20 06:03:56', '2024-08-20 06:03:56'),
(19, 'Brandon', NULL, '1micewejor@mailinator.com', '2024-08-20 06:04:53', '$2y$10$r5O5Q2qFT5py8O8MLKm2U.seUH6DCMw54iLryyM6FfuzIKAn90Pn2', 1, NULL, '+1 (249) 182-7806', '422', NULL, 'technical', 'active', 2, 2984, 1, NULL, '2024-08-20 06:04:53', '2024-08-20 06:04:53'),
(20, 'Brandon', NULL, 'micewejor@mailinator.com', '2024-08-20 06:07:03', '$2y$10$Zp6PhYxt93npA1AGYLfxpu.BQxY2RitIpr6Hl1G1KgNma9IIYDh3G', 1, NULL, '+1 (249) 182-7806', '422', NULL, 'technical', 'active', 2, 4172, 1, NULL, '2024-08-20 06:07:03', '2024-08-20 06:07:03'),
(21, 'Canjetan Ngahu', NULL, '3canjetanngahu@gmail.com', '2024-08-20 06:17:37', '$2y$10$Ka5JqYCnxWB4AC/hZ7hVeO21v.WuNZnnzu0AbvfmtVCji2STE6Die', 1, NULL, '0700924662', '422', NULL, 'technical', 'active', 3, 6614, 1, NULL, '2024-08-20 06:17:37', '2024-08-20 06:17:38'),
(22, 'Canjetan Ngahu', NULL, 'canjetanngahu@gmail.com', '2024-08-20 06:18:11', '$2y$10$.GxHb/w06aYJZ0shyINWpuldScApE.gwMPZWu72W9zPQJSZWQlvqK', 1, NULL, '0700924662', '422', NULL, 'technical', 'active', 3, 6020, 1, NULL, '2024-08-20 06:18:11', '2024-08-20 06:18:11'),
(23, 'Requestor ICTA', NULL, 'cwanguingahu@gmail.com', '2024-08-20 10:31:44', '$2y$10$5/xZ7c.6S/J4Rx9Rp30VF.4wvXHxHDTw43SErN/cI.UZkDZcR4ZxO', 0, NULL, '0790909090', '555', NULL, 'technical', 'active', NULL, 3326, 22, NULL, '2024-08-20 10:31:44', '2024-08-20 10:31:45'),
(24, 'Designer Papa', NULL, 'papacosi@gmail.com', '2024-08-20 14:14:43', '$2y$10$je3l2LB41pj6W2s0iV7/HuwHxV13pUcu9YuJ0eVYGWXhEzZTLZz0u', 0, NULL, '0700924662', '0104', NULL, 'technical', 'active', NULL, 6946, 22, NULL, '2024-08-20 14:14:43', '2024-08-20 14:14:43'),
(25, 'SALIM Juma', NULL, 'juma@gaa.go.ke', '2024-08-21 13:50:37', '$2y$10$xrLv1OxgZ1SVlbRCo1rFOORZ0IlE8hTPojZz9Im4Lodk3gaAEC7cO', 0, NULL, '0712345678', '111', NULL, 'technical', 'active', NULL, 2711, 1, NULL, '2024-08-21 13:50:37', '2024-08-21 13:50:37'),
(26, 'Macey', NULL, 'hyjyranypa@mailinator.com', '2024-08-21 13:51:00', '$2y$10$HRsOmRd6bCGUh/u1zN3e2.SH/wQH9FqXQuxyfYvLoF8sUJG3xmnK.', 0, NULL, '+1 (314) 614-2195', '637', NULL, 'technical', 'active', NULL, 7365, 1, NULL, '2024-08-21 13:51:00', '2024-08-21 13:51:00'),
(27, 'Lucius', NULL, 'beqocameq@mailinator.com', '2024-08-21 13:57:13', '$2y$10$mfXXCeR1BPGyWkRa0f23iuCqLXe3P/QLrSd8JQDtcpWde36lNzxqu', 1, NULL, '+1 (528) 717-9925', '218', NULL, 'technical', 'active', 4, 5976, 1, NULL, '2024-08-21 13:57:13', '2024-08-21 13:57:13'),
(28, 'Erick Owino', NULL, 'ericowino.gaa@gmail.com', '2024-08-21 14:36:12', '$2y$10$MrHS36xX6MgHmIl/j2r3V.ZW51ROvRl1riclVgxXB0Q.UNuhxhxqm', 0, NULL, '0724607434', '24065804', NULL, 'technical', 'active', NULL, 5114, 1, NULL, '2024-08-21 14:36:12', '2024-08-21 14:36:12'),
(29, 'Elvis Lemiso', NULL, 'eshunkur@gmail.com', '2024-08-21 14:37:53', '$2y$10$ofM7qTKOcsi9hTSl5OrwhulMMJk3LgDntG9T7Ft3b7gBzfiQ.mRmS', 0, NULL, '0708048807', '29396000', NULL, 'technical', 'active', NULL, 3152, 1, NULL, '2024-08-21 14:37:53', '2024-08-21 14:37:53'),
(30, 'Hilda Cheshari', NULL, 'chesharihilda@gmail.com', '2024-08-21 14:44:04', '$2y$10$2UwqNz2x4NyZqf37D0JLu.kaVqqysMoP3qAyWk3wzQsZxXz6O6wF2', 1, NULL, '0710316083', '2016026936', NULL, 'technical', 'active', 5, 7212, 1, NULL, '2024-08-21 14:44:04', '2024-08-21 14:44:04');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `advert_categories`
--
ALTER TABLE `advert_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `entities`
--
ALTER TABLE `entities`
  ADD PRIMARY KEY (`id`),
  ADD KEY `entities_ministry_id_foreign` (`ministry_id`),
  ADD KEY `entities_buyer_id_foreign` (`buyer_id`),
  ADD KEY `entities_creator_id_foreign` (`creator_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ministries`
--
ALTER TABLE `ministries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `multi_images`
--
ALTER TABLE `multi_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `print_adverts`
--
ALTER TABLE `print_adverts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `print_adverts_entity_id_foreign` (`entity_id`),
  ADD KEY `print_adverts_category_id_foreign` (`category_id`),
  ADD KEY `print_adverts_size_id_foreign` (`size_id`),
  ADD KEY `print_adverts_release_id_foreign` (`release_id`),
  ADD KEY `print_adverts_designer_id_foreign` (`designer_id`);

--
-- Indexes for table `proforma_invoices`
--
ALTER TABLE `proforma_invoices`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `proforma_invoices_invoice_no_unique` (`invoice_no`),
  ADD KEY `proforma_invoices_print_advert_id_foreign` (`print_advert_id`),
  ADD KEY `proforma_invoices_rate_id_foreign` (`rate_id`);

--
-- Indexes for table `rate_cards`
--
ALTER TABLE `rate_cards`
  ADD PRIMARY KEY (`id`),
  ADD KEY `rate_cards_creator_id_foreign` (`creator_id`);

--
-- Indexes for table `releases`
--
ALTER TABLE `releases`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `review_comments`
--
ALTER TABLE `review_comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `review_comments_print_advert_id_foreign` (`print_advert_id`),
  ADD KEY `review_comments_reviewer_id_foreign` (`reviewer_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indexes for table `sizes`
--
ALTER TABLE `sizes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `advert_categories`
--
ALTER TABLE `advert_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `entities`
--
ALTER TABLE `entities`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `ministries`
--
ALTER TABLE `ministries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `multi_images`
--
ALTER TABLE `multi_images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `print_adverts`
--
ALTER TABLE `print_adverts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `proforma_invoices`
--
ALTER TABLE `proforma_invoices`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `rate_cards`
--
ALTER TABLE `rate_cards`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `releases`
--
ALTER TABLE `releases`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `review_comments`
--
ALTER TABLE `review_comments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `sizes`
--
ALTER TABLE `sizes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `entities`
--
ALTER TABLE `entities`
  ADD CONSTRAINT `entities_buyer_id_foreign` FOREIGN KEY (`buyer_id`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `entities_creator_id_foreign` FOREIGN KEY (`creator_id`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `entities_ministry_id_foreign` FOREIGN KEY (`ministry_id`) REFERENCES `ministries` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `print_adverts`
--
ALTER TABLE `print_adverts`
  ADD CONSTRAINT `print_adverts_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `advert_categories` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `print_adverts_designer_id_foreign` FOREIGN KEY (`designer_id`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `print_adverts_entity_id_foreign` FOREIGN KEY (`entity_id`) REFERENCES `entities` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `print_adverts_release_id_foreign` FOREIGN KEY (`release_id`) REFERENCES `releases` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `print_adverts_size_id_foreign` FOREIGN KEY (`size_id`) REFERENCES `sizes` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `proforma_invoices`
--
ALTER TABLE `proforma_invoices`
  ADD CONSTRAINT `proforma_invoices_print_advert_id_foreign` FOREIGN KEY (`print_advert_id`) REFERENCES `print_adverts` (`id`),
  ADD CONSTRAINT `proforma_invoices_rate_id_foreign` FOREIGN KEY (`rate_id`) REFERENCES `rate_cards` (`id`);

--
-- Constraints for table `rate_cards`
--
ALTER TABLE `rate_cards`
  ADD CONSTRAINT `rate_cards_creator_id_foreign` FOREIGN KEY (`creator_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `review_comments`
--
ALTER TABLE `review_comments`
  ADD CONSTRAINT `review_comments_print_advert_id_foreign` FOREIGN KEY (`print_advert_id`) REFERENCES `print_adverts` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `review_comments_reviewer_id_foreign` FOREIGN KEY (`reviewer_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
