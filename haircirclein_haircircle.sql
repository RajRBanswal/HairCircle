-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 11, 2022 at 09:22 AM
-- Server version: 10.3.32-MariaDB-cll-lve
-- PHP Version: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `haircirclein_haircircle`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `usertype` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL,
  `login_time` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `usertype`, `mobile`, `email`, `username`, `password`, `login_time`, `created_at`, `updated_at`) VALUES
(1, 'admin', '9112060685', 'admin@gmail.com', 'Admin', 'Admin@123', '2022-01-12 08:35:42', '2022-01-12 03:05:42', '2022-02-05 07:52:50'),
(2, 'admin', '9823382555', NULL, 'Dr Samrat', '1', '2022-01-21 05:43:47', '2022-01-21 00:13:47', '2022-01-21 00:13:47'),
(3, 'admin', '8180017777', 'samrat251986@gmail.com', 'Dr Samrat', '1', '2022-02-05 06:14:42', '2022-02-05 00:44:42', '2022-02-05 00:44:42');

-- --------------------------------------------------------

--
-- Table structure for table `all_level`
--

CREATE TABLE `all_level` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `banks`
--

CREATE TABLE `banks` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `account_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `account_no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bank` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `branch_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ifsc` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `banks`
--

INSERT INTO `banks` (`id`, `account_type`, `account_no`, `bank`, `branch_name`, `ifsc`, `pan`, `created_at`, `updated_at`) VALUES
('1', 'saving', '5632', 'SBI', 'Jalna', 'dfsdf', 'Yes', NULL, '2020-12-14 05:27:04'),
('2', 'current', '123654789', 'AXIS', 'Pune', 'sdf56', 'No', NULL, NULL),
('3', 'current', '89215663', 'SBI', '5lkkk', 'jjbjkh', 'No', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `cash_claim_req`
--

CREATE TABLE `cash_claim_req` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `u_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `points` int(11) NOT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `upi_acc` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` date NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cash_claim_setting`
--

CREATE TABLE `cash_claim_setting` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `enddate` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `points` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` int(11) NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `customer_pimage`
--

CREATE TABLE `customer_pimage` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `top_image` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `right_image` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `left_image` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `back_image` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` date DEFAULT current_timestamp(),
  `updated_at` date DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customer_pimage`
--

INSERT INTO `customer_pimage` (`id`, `user_id`, `top_image`, `right_image`, `left_image`, `back_image`, `date`, `created_at`, `updated_at`) VALUES
(1, 1, NULL, NULL, NULL, NULL, '2022-02-07', '2022-02-07', '2022-02-07');

-- --------------------------------------------------------

--
-- Table structure for table `diagnosis`
--

CREATE TABLE `diagnosis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `type` varchar(51) COLLATE utf8mb4_unicode_ci NOT NULL,
  `diagnosis` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `suggetion` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `diagnosis`
--

INSERT INTO `diagnosis` (`id`, `type`, `diagnosis`, `product_name`, `price`, `suggetion`, `created_at`, `updated_at`) VALUES
(1, 'aga', 'This is most common type of baldness seen in males. Genetic predisposition plays important role in AGA, also hormonal and nutritional imbalances plays influential role.', 'Canditral Cap', 110, 'This is most common type of baldness seen in males. Genetic predisposition plays important role in AGA, also hormonal and nutritional imbalances plays influential role.', '2022-01-12 04:03:13', '2022-02-01 01:14:45'),
(2, 'te', 'telogen effluvium (TE), one of the most common cause of alopecia(hair fall).', 'SUPIROCIN LIPOGEL 5', 90, 'telogen effluvium (TE), one of the most common cause of alopecia(hair fall).', '2022-01-12 04:03:52', '2022-01-12 04:03:52'),
(3, 'ca', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting,', 'Canditral Cap', 110, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting,', '2022-01-12 04:06:12', '2022-01-12 04:06:12'),
(4, 'aa', 'This is a hair condition where hairs are lost in patches and noticed all of a sudden. It can involve any part of body bearing hairs such as scalp, beard, moustache, body hairs.', 'SUPIROCIN LIPOGEL 5', 90, 'This is a hair condition where hairs are lost in patches and noticed all of a sudden. It can involve any part of body bearing hairs such as scalp, beard, moustache, body hairs.', '2022-01-12 04:07:00', '2022-01-12 04:07:00'),
(5, 'ta', 'This type is commonly seen in people who are having habit tight pony tail, use of caps, turbans,use of head gadgets such as helmets.', 'KIT-1', 100, 'This type is commonly seen in people who are having habit tight pony tail, use of caps, turbans,use of head gadgets such as helmets.', '2022-01-12 04:07:31', '2022-01-12 04:07:31'),
(6, 'ttm', 'This type of hair fall is not commonly seen in normal peoples. This is common in patients undergoing any treatment for psychological distress.', 'Canditral Cap', 110, 'This type of hair fall is not commonly seen in normal peoples. This is common in patients undergoing any treatment for psychological distress.', '2022-01-12 04:08:06', '2022-01-12 04:08:06');

-- --------------------------------------------------------

--
-- Table structure for table `enquiry`
--

CREATE TABLE `enquiry` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile_no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `e_register`
--

CREATE TABLE `e_register` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `emps_id` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pincode` int(11) NOT NULL,
  `mobile_no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `aadhar_no` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `p_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `aadhar` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pan` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `passbook` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `image`
--

CREATE TABLE `image` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `suggestion` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `product_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) DEFAULT 0,
  `date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` date NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `image`
--

INSERT INTO `image` (`id`, `user_id`, `image`, `suggestion`, `product_name`, `price`, `product_image`, `status`, `date`, `created_at`, `updated_at`) VALUES
(1, 1, 'https://haircircleindia.com/haircircle/public/img/diagnosis/aga2.jpg', 'This is most common type of baldness seen in males. Genetic predisposition plays important role in AGA, also hormonal and nutritional imbalances plays influential role.', 'Canditral Cap', 110, NULL, 1, NULL, '2022-02-07', '2022-02-06 23:04:39');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(63, '2014_10_12_000000_create_users_table', 1),
(64, '2014_10_12_100000_create_password_resets_table', 1),
(65, '2019_08_19_000000_create_failed_jobs_table', 1),
(66, '2021_08_10_105430_create_user_question_answer_table', 1),
(67, '2021_08_10_105608_create_product_table', 1),
(68, '2021_08_14_121432_answers_of_question', 1),
(69, '2021_08_27_071708_create_questions_table', 1),
(70, '2021_08_27_112013_create_patient_register_table', 1),
(71, '2021_08_30_062355_create_vendor_table', 1),
(72, '2021_08_30_095348_create_e_register_table', 1),
(73, '2021_09_02_094935_create_question_table', 1),
(74, '2021_09_03_044250_create_question1_table', 1),
(75, '2021_09_04_041605_create_image_table', 1),
(76, '2021_10_02_122228_create_producttbl_table', 1),
(77, '2021_10_04_043039_create_order_table', 1),
(78, '2021_10_07_044837_create_roles_table', 1),
(79, '2021_10_07_045004_create_ref_levels_table', 1),
(80, '2021_10_07_045018_create_ref_category_table', 1),
(81, '2021_10_20_071027_create_user_tbl_table', 2),
(82, '2021_10_21_074951_create_all_level_table', 3),
(83, '2021_11_09_063312_create_purchasepp_table', 4),
(84, '2021_11_09_101646_create_enquiry_table', 5),
(85, '2021_11_24_105625_create_diagnosis_table', 6),
(86, '2021_12_28_095453_create_set_schedule_table', 7),
(87, '2021_12_29_043424_create_customer_pimage_table', 8),
(88, '2022_01_06_132612_create_vendor_request_table', 9);

-- --------------------------------------------------------

--
-- Table structure for table `offline_sold`
--

CREATE TABLE `offline_sold` (
  `id` int(11) NOT NULL,
  `vendor_id` int(11) DEFAULT NULL,
  `product_name` varchar(255) NOT NULL,
  `quantity` int(11) NOT NULL,
  `p_price` int(11) DEFAULT NULL,
  `date` varchar(255) NOT NULL,
  `c_mobile` text DEFAULT NULL,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `offline_sold`
--

INSERT INTO `offline_sold` (`id`, `vendor_id`, `product_name`, `quantity`, `p_price`, `date`, `c_mobile`, `created_at`, `updated_at`) VALUES
(1, 3, 'hair', 2, 2000, '10-02-2022', NULL, '2022-02-10', '2022-02-10'),
(2, 4, 'Solshine', 2, 328, '10-02-2022', NULL, '2022-02-10', '2022-02-10');

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `bill_no` varchar(11) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `vendor_id` int(11) DEFAULT NULL,
  `product_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiry_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rate` int(11) DEFAULT NULL,
  `batch_no` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `remaining_q` int(11) DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `approved_by` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `total_amount` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gst` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `total_gst` int(11) DEFAULT NULL,
  `withGSTAmount` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `discount` int(11) DEFAULT NULL,
  `disAmount` int(11) DEFAULT NULL,
  `pending_amount` int(11) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `shop_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile_no` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pay_mode` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pay_status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `pay_amount` int(11) DEFAULT NULL,
  `date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `billing_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`id`, `bill_no`, `vendor_id`, `product_name`, `expiry_date`, `price`, `rate`, `batch_no`, `quantity`, `remaining_q`, `status`, `approved_by`, `total_amount`, `gst`, `total_gst`, `withGSTAmount`, `discount`, `disAmount`, `pending_amount`, `name`, `shop_name`, `phone`, `address`, `mobile_no`, `email`, `pay_mode`, `pay_status`, `pay_amount`, `date`, `billing_date`, `created_at`, `updated_at`) VALUES
(1, 'BILL-00000', 3, 'hair', '25-08-2023', '1000', 900, 'HAIR12354', 5, 3, 'done', 'Dr Samrat', '4500', NULL, NULL, NULL, NULL, NULL, NULL, 'SamG', 'Sam Saloon', NULL, 'garkheda,Aurangabad,', '9823382555', NULL, 'credit', 'Paid', 4500, '05-02-2022', '10-02-2022', '2022-02-05', '2022-02-10'),
(2, 'BILL-00001', 4, 'Solshine', '25-04-2022', '164', 160, 'TF21295', 5, 2, 'done', 'Admin', '800', '18', 144, '944', 1, 935, NULL, 'vendor', 'vendor shop', NULL, 'Sillod, Sillod, Maharashtra, 431112', '9673060685', NULL, NULL, 'Paid', 960, '05-02-2022', '07-02-2022', '2022-02-05', '2022-02-10'),
(3, 'BILL-00002', 3, 'Canditral Cap', '25-04-2022', '345', 345, '021SY005', 11, 11, 'done', 'Admin', '3795', NULL, NULL, NULL, NULL, NULL, NULL, 'SamG', 'Sam Saloon', NULL, 'garkheda,Aurangabad,', '9823382555', NULL, 'online', 'Paid', 3795, '05-02-2022', NULL, '2022-02-05', '2022-02-05'),
(4, 'BILL-00003', 4, 'Canditral Cap', '25-06-2022', '345', 345, '021SY005', 10, 6, NULL, 'Admin', '3450', NULL, NULL, NULL, NULL, NULL, NULL, 'Rajesh', 'vendor shop', NULL, 'Sillod,Sillod,431112', '9673060685', 'user@gmail.com', 'online', 'Paid', 3450, '07-02-2022', NULL, '2022-02-07', '2022-02-07'),
(5, 'BILL-00004', 3, 'hair', '25-08-2023', '1000', 900, 'HAIR12354', 5, 5, NULL, NULL, '4500', NULL, NULL, NULL, NULL, NULL, NULL, 'SamG', 'Sam Saloon', NULL, 'garkheda,Aurangabad,', '9823382555', NULL, 'credit', '0', 4500, '09-02-2022', '09-02-2022', '2022-02-09', '2022-02-09'),
(6, 'BILL-00005', 3, 'hair', '25-08-2023', '1000', 900, 'HAIR12354', 5, 5, 'done', 'Dr Samrat', '4500', '18', 810, '5310', 2, 5204, NULL, 'SamG', 'Sam Saloon', NULL, 'garkheda, Aurangabad, Maharashtra,', '9823382555', NULL, 'credit', 'Paid', 4500, '10-02-2022', NULL, '2022-02-10', '2022-02-10');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `patient_register`
--

CREATE TABLE `patient_register` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `patients_id` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_of_birth` date DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `marital_status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `religion` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `medicin_pref` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `profession` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reference` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `weight_in_kg` int(11) DEFAULT NULL,
  `height_in_cm` int(11) DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `state` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pincode` int(11) DEFAULT NULL,
  `mobile_no` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `active` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ref_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ref_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ref_id1` int(11) DEFAULT NULL,
  `ref_id2` int(11) DEFAULT NULL,
  `ref_id3` int(11) DEFAULT NULL,
  `ref_id4` int(11) DEFAULT NULL,
  `ref_id5` int(11) DEFAULT NULL,
  `reffered_by` int(11) DEFAULT 0,
  `no_of_refs` int(11) DEFAULT 0,
  `check_me` int(11) DEFAULT NULL,
  `date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` date DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `patient_register`
--

INSERT INTO `patient_register` (`id`, `patients_id`, `name`, `date_of_birth`, `age`, `gender`, `marital_status`, `religion`, `medicin_pref`, `profession`, `reference`, `weight_in_kg`, `height_in_cm`, `address`, `city`, `state`, `pincode`, `mobile_no`, `code`, `active`, `email`, `password`, `image`, `ref_id`, `ref_name`, `ref_id1`, `ref_id2`, `ref_id3`, `ref_id4`, `ref_id5`, `reffered_by`, `no_of_refs`, `check_me`, `date`, `created_at`, `updated_at`) VALUES
(1, 'PATIENT-00000', 'Rajesh', NULL, 21, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '9112060685', NULL, '1', NULL, '12345', '1.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, 35, '05-02-2022', '2022-02-05', '2022-02-06 23:08:50'),
(2, 'PATIENT-00001', 'Pilot 1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '779890888', '3213', NULL, NULL, '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 30, '09-02-2022', '2022-02-09', '2022-02-09 07:21:38'),
(3, 'PATIENT-00002', 'Rajesh', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '967306068', '5793', NULL, NULL, '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 30, '09-02-2022', '2022-02-09', '2022-02-09 07:25:46'),
(4, 'PATIENT-00003', 'pilot1', NULL, 35, 'Male', NULL, NULL, NULL, 'kamgar', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '7798908888', NULL, '1', NULL, '1', 'IMG-20210725-WA0027e.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 45, '09-02-2022', '2022-02-09', '2022-02-09 07:28:20');

-- --------------------------------------------------------

--
-- Table structure for table `producttbl`
--

CREATE TABLE `producttbl` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch_no` varchar(11) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hsn` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `expiry_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mrp` float DEFAULT NULL,
  `quantity` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rate` float DEFAULT NULL,
  `total_amount` float DEFAULT NULL,
  `discount` int(11) DEFAULT NULL,
  `ad_amount` float DEFAULT NULL,
  `GST` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `taxable_amount` float DEFAULT NULL,
  `v_purchase_rate` int(11) DEFAULT NULL,
  `image` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `s_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `s_address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `s_mobile` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `s_gstin` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` date DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `producttbl`
--

INSERT INTO `producttbl` (`id`, `product_name`, `batch_no`, `hsn`, `expiry_date`, `mrp`, `quantity`, `rate`, `total_amount`, `discount`, `ad_amount`, `GST`, `taxable_amount`, `v_purchase_rate`, `image`, `s_name`, `s_address`, `s_mobile`, `s_gstin`, `date`, `created_at`, `updated_at`) VALUES
(1, 'SUPIROCIN LIPOGEL 5', '021SY002', '5421', '2022-01-26', 100, '115', 100, 10000, 5, 9500, '12', NULL, 100, 'Hair Products-01.png', NULL, NULL, NULL, NULL, NULL, '2022-01-12', '2022-02-01 00:49:01'),
(2, 'KIT-1', '021SY002', '2345', '2022-05-25', 100, '25', 90, 9000, 4, 8640, '12', NULL, 100, '80x80-01.png', NULL, NULL, NULL, NULL, NULL, '2022-01-12', '2022-01-28 05:20:15'),
(3, 'Canditral Cap', '021SY005', '1234', '2022-06-25', 345, '49', 110, 11000, 5, 10450, '12', NULL, 345, 'Hair Products-02.png', NULL, NULL, NULL, NULL, NULL, '2022-01-12', '2022-02-06 23:06:48'),
(12, 'Solshine', 'TF21295', '2106', '2023-04-25', 164, '4', 76.44, 4586.4, NULL, NULL, '18', 5411.95, 160, 'Hair Products-05.png', 'Bhawani drug Distributors', 'UP', '9643897328', '09AAFFB3250L1ZF', '25-01-2022', '2022-01-25', '2022-02-07 06:12:57'),
(13, 'Solahine', 'Hh', 'Hh', '2022-01-30', 100, '20', 100, 2000, NULL, NULL, '18', 2360, 100, NULL, 'Rajesh', 'Sillod', '9112060685', 'Hjsj', '28-01-2022', '2022-01-28', '2022-01-28 05:17:24'),
(14, 'hair', 'HAIR12354', '123', '2023-08-25', 1000, '0', 800, 8000, NULL, 9440, '18', 9440, 900, 'Hair Products-03.png', 'Bhawani drug Distributors', 'UP', '9643897328', '09AAFFB3250L1ZF', '04-02-2022', '2022-02-04', '2022-02-10 03:37:56'),
(15, 'product 1', '12345', '5421', '2022-06-29', 100, '20', 90, 1800, NULL, NULL, '18', 2124, 95, '1134942-1366x768-sunset-in-a-jar.jpg', 'Bhawani drug Distributors', 'UP', '9643897328', '09AAFFB3250L1ZF', '07-02-2022', '2022-02-07', '2022-02-07 02:12:39');

-- --------------------------------------------------------

--
-- Table structure for table `purchasepp`
--

CREATE TABLE `purchasepp` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kit` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quantity` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `buying_price` float DEFAULT NULL,
  `product_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pay_mode` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `vendor` int(255) DEFAULT NULL,
  `vens_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sold_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` date DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `purchasepp`
--

INSERT INTO `purchasepp` (`id`, `user_id`, `image`, `kit`, `quantity`, `buying_price`, `product_image`, `pay_mode`, `vendor`, `vens_id`, `status`, `date`, `sold_date`, `created_at`, `updated_at`) VALUES
(1, 1, 'https://haircircleindia.com/haircircle/public/img/diagnosis/aga2.jpg', 'Canditral Cap', '1', 110, 'Hair Products-02.png', 'Offline', 4, NULL, '1', NULL, '07-02-2022', '2022-02-07', '2022-02-06 23:08:50'),
(2, 1, 'https://haircircleindia.com/haircircle/public/img/diagnosis/aga2.jpg', 'Canditral Cap', '1', 110, 'Hair Products-02.png', 'Offline', 4, NULL, '0', '10-02-2022', NULL, '2022-02-10', '2022-02-10 07:16:05');

-- --------------------------------------------------------

--
-- Table structure for table `question`
--

CREATE TABLE `question` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `p_id` int(11) NOT NULL,
  `radio` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `question1`
--

CREATE TABLE `question1` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `questions` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `answers` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `freq_res_qua` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reas_dura` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` date NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `question1`
--

INSERT INTO `question1` (`id`, `user_id`, `questions`, `answers`, `type`, `freq_res_qua`, `reas_dura`, `date`, `created_at`, `updated_at`) VALUES
(1, 1, 'Hair Loss ?', 'Yes', NULL, NULL, NULL, NULL, '2022-02-07', '2022-02-07 04:32:32'),
(2, 1, 'Dandruff ?', 'Yes', NULL, NULL, NULL, NULL, '2022-02-07', '2022-02-07 04:32:32');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile_no` varchar(11) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fquestions1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fanswers1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fquestions2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fanswers2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fquestions3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fanswers3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fquestions4` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fanswers4` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fquestions5` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fanswers5` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fquestions6` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fanswers6` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fquestions7` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fanswers7` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fquestions8` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fanswers8` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fquestions9` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fanswers9` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fquestions10` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fanswers10` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ref_category`
--

CREATE TABLE `ref_category` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reward` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `congratulatory_message` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `target_no_refferrals` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `points_per_refferral` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ref_levels`
--

CREATE TABLE `ref_levels` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `return_product`
--

CREATE TABLE `return_product` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `bill_no` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL,
  `product_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `batch_no` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `rate` int(11) DEFAULT NULL,
  `expiry_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `total_amount` int(11) DEFAULT NULL,
  `vendor_id` int(11) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `shop_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile_no` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `billing_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `set_schedule`
--

CREATE TABLE `set_schedule` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `date` date NOT NULL,
  `shift` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fromtime` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `totime` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cust_id` int(11) NOT NULL,
  `customer_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `doctor_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `suggestion` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `notes` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kit` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `dueDate` date DEFAULT NULL,
  `update_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` date DEFAULT NULL,
  `updated_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `time_schedule`
--

CREATE TABLE `time_schedule` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `time_slot` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fromtime` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `totime` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `time_schedule`
--

INSERT INTO `time_schedule` (`id`, `date`, `time_slot`, `fromtime`, `totime`, `created_at`, `updated_at`) VALUES
(1, '07-02-2022', 'Morning', '09:00:AM', '12:00:PM', '2022-02-05 00:53:34', '2022-02-05 00:53:34'),
(2, '07-02-2022', 'Evening', '04:00:PM', '08:00:PM', '2022-02-05 00:54:23', '2022-02-05 00:54:23'),
(3, '08-02-2022', 'Morning', '09:00:PM', '12:00:PM', '2022-02-05 00:54:44', '2022-02-05 00:54:44'),
(4, '08-02-2022', 'Evening', '04:00:PM', '08:00:PM', '2022-02-05 00:55:05', '2022-02-05 00:55:05'),
(5, '09-02-2022', 'Morning', '09:00:PM', '12:00:PM', '2022-02-05 00:55:27', '2022-02-05 00:55:27'),
(6, '09-02-2022', 'Evening', '04:00:PM', '08:00:PM', '2022-02-05 00:55:44', '2022-02-05 00:55:44');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user_tbl`
--

CREATE TABLE `user_tbl` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sex` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ref_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ref_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ref_id1` int(11) DEFAULT NULL,
  `ref_id2` int(11) DEFAULT NULL,
  `ref_id3` int(11) DEFAULT NULL,
  `ref_id4` int(11) DEFAULT NULL,
  `ref_id5` int(11) DEFAULT NULL,
  `mobile_no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reffered_by` int(11) DEFAULT 0,
  `no_of_refs` int(11) DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `vendor`
--

CREATE TABLE `vendor` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `vens_id` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `shop_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `shop_license` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(11) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `shop_logo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `state` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pincode` int(11) DEFAULT NULL,
  `mobile_no` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reffered_by` int(11) DEFAULT NULL,
  `no_of_refs` int(11) DEFAULT 0,
  `p_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `adhar` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pan` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `license` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fssai` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fssai_no` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `p_points` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT 0,
  `code` int(11) DEFAULT NULL,
  `kyc_confirm_by` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` date DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT current_timestamp(),
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `vendor`
--

INSERT INTO `vendor` (`id`, `vens_id`, `name`, `gender`, `shop_name`, `shop_license`, `phone`, `shop_logo`, `address`, `state`, `city`, `pincode`, `mobile_no`, `email`, `password`, `reffered_by`, `no_of_refs`, `p_image`, `adhar`, `pan`, `license`, `fssai`, `fssai_no`, `p_points`, `status`, `code`, `kyc_confirm_by`, `message`, `date`, `created_at`, `updated_at`, `deleted_at`) VALUES
(3, 'VENDOR-00002', 'SamG', 'Male', 'Sam Saloon', NULL, NULL, 'F2.large.jpg', 'garkheda', 'Maharashtra', 'Aurangabad', NULL, '9823382555', NULL, '1', NULL, 0, NULL, NULL, 'IMG_20171213_162843__01__01.jpg', NULL, NULL, NULL, 85, 1, NULL, 'Dr Samrat', 'AAAAAAAAA', '05-02-2022', '2022-02-05', '2022-02-09 08:37:07', NULL),
(4, 'VENDOR-00003', 'Rajesh', 'Other', 'vendor shop', NULL, NULL, '2ngs8iw.jpg', 'Sillod', 'Maharashtra', 'Sillod', 431112, '9673060685', 'user@gmail.com', '1452', NULL, 0, '01defee4-da8a-4cf2-9a7a-4284730a72eb_9.jpg', '0e8c5cfc-9b44-4c4c-8cb2-c3cab50c908c_6.jpg', '2ngs8iw.jpg', '2ngs8iw.jpg', '3e9d780c-c6b3-41a6-8f71-578d708d5478_14.jpg', '1234567890', 95, 1, NULL, 'Admin', 'asdfghjkl;', '05-02-2022', '2022-02-05', '2022-02-10 07:15:43', NULL),
(7, 'VENDOR-00004', 'Kirti', NULL, 'Suraj Collection', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '08796776628', 'wayalkarkirti7@gmail.com', '1', NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, 40, 0, NULL, NULL, NULL, '10-02-2022', '2022-02-10', '2022-02-10 07:45:38', NULL),
(8, 'VENDOR-00005', 'Rajesh', NULL, 'Anup shop', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '09673060685', 'rajeshrb@gmail.com', '1', NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, 40, 0, NULL, NULL, NULL, '10-02-2022', '2022-02-10', '2022-02-10 07:50:04', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `vendor_request`
--

CREATE TABLE `vendor_request` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `v_id` int(11) NOT NULL,
  `mobile_no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `document` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `images` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reason` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) DEFAULT NULL,
  `request_confirm_by` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` date DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `vendor_request`
--

INSERT INTO `vendor_request` (`id`, `name`, `v_id`, `mobile_no`, `document`, `images`, `reason`, `status`, `request_confirm_by`, `date`, `created_at`, `updated_at`) VALUES
(1, 'SamG', 3, '9823382555', NULL, NULL, 'g', 1, 'Dr Samrat', '05-02-2022', '2022-02-05', '2022-02-05 01:25:32'),
(12, 'Rajesh', 4, '9673060685', 'Adhar', '2ngs8iw.jpg', 'sdf', 1, 'Admin', '08-02-2022', '2022-02-08', '2022-02-10 07:15:43');

-- --------------------------------------------------------

--
-- Table structure for table `_disabled_date`
--

CREATE TABLE `_disabled_date` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `dates` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `_disabled_date`
--

INSERT INTO `_disabled_date` (`id`, `dates`, `created_at`, `updated_at`) VALUES
(1, '2022-02-06,2022-02-13,2022-02-20,2022-02-27,2022-02-19,2022-03-06,2022-03-13,2022-03-20,2022-03-27,2022-04-03,2022-04-10,2022-04-17,2022-04-24,2022-04-14,2022-05-01,2022-05-08,2022-05-15,2022-05-22,2022-05-29,2022-03-01,2022-03-18,2022-04-15', '2022-02-05 00:52:59', '2022-02-05 00:52:59');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `all_level`
--
ALTER TABLE `all_level`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cash_claim_req`
--
ALTER TABLE `cash_claim_req`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cash_claim_setting`
--
ALTER TABLE `cash_claim_setting`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer_pimage`
--
ALTER TABLE `customer_pimage`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `diagnosis`
--
ALTER TABLE `diagnosis`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `type` (`type`);

--
-- Indexes for table `enquiry`
--
ALTER TABLE `enquiry`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `e_register`
--
ALTER TABLE `e_register`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `image`
--
ALTER TABLE `image`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `offline_sold`
--
ALTER TABLE `offline_sold`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `patient_register`
--
ALTER TABLE `patient_register`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `mobile_no` (`mobile_no`);

--
-- Indexes for table `producttbl`
--
ALTER TABLE `producttbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `purchasepp`
--
ALTER TABLE `purchasepp`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `question`
--
ALTER TABLE `question`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `question1`
--
ALTER TABLE `question1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `mobile_no` (`mobile_no`);

--
-- Indexes for table `ref_category`
--
ALTER TABLE `ref_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ref_levels`
--
ALTER TABLE `ref_levels`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `return_product`
--
ALTER TABLE `return_product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `set_schedule`
--
ALTER TABLE `set_schedule`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `time_schedule`
--
ALTER TABLE `time_schedule`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_tbl`
--
ALTER TABLE `user_tbl`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `vendor`
--
ALTER TABLE `vendor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vendor_request`
--
ALTER TABLE `vendor_request`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `_disabled_date`
--
ALTER TABLE `_disabled_date`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `all_level`
--
ALTER TABLE `all_level`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cash_claim_req`
--
ALTER TABLE `cash_claim_req`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cash_claim_setting`
--
ALTER TABLE `cash_claim_setting`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `customer_pimage`
--
ALTER TABLE `customer_pimage`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `diagnosis`
--
ALTER TABLE `diagnosis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `enquiry`
--
ALTER TABLE `enquiry`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `e_register`
--
ALTER TABLE `e_register`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `image`
--
ALTER TABLE `image`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=89;

--
-- AUTO_INCREMENT for table `offline_sold`
--
ALTER TABLE `offline_sold`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `patient_register`
--
ALTER TABLE `patient_register`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `producttbl`
--
ALTER TABLE `producttbl`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `purchasepp`
--
ALTER TABLE `purchasepp`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `question`
--
ALTER TABLE `question`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `question1`
--
ALTER TABLE `question1`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ref_category`
--
ALTER TABLE `ref_category`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ref_levels`
--
ALTER TABLE `ref_levels`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `return_product`
--
ALTER TABLE `return_product`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `set_schedule`
--
ALTER TABLE `set_schedule`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `time_schedule`
--
ALTER TABLE `time_schedule`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_tbl`
--
ALTER TABLE `user_tbl`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `vendor`
--
ALTER TABLE `vendor`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `vendor_request`
--
ALTER TABLE `vendor_request`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `_disabled_date`
--
ALTER TABLE `_disabled_date`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
