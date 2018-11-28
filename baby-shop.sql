-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 28, 2018 at 09:39 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `baby-shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `category_posts`
--

CREATE TABLE `category_posts` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `content` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `category_posts`
--

INSERT INTO `category_posts` (`id`, `title`, `content`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Tin tức', 'tin tức', 'tin-tuc', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `category_taxonomy`
--

CREATE TABLE `category_taxonomy` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_category` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `name_category` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `category_taxonomy`
--

INSERT INTO `category_taxonomy` (`id`, `id_category`, `name_category`, `slug`, `created_at`, `updated_at`) VALUES
(15, 'N01', 'Thời trang bé trai', 'thoi-trang-be-trai', NULL, NULL),
(17, 'N02', 'Thời trang bé gái', 'thoi-trang-be-gai', NULL, NULL),
(18, 'N03', 'Quần áo sơ sinh', 'quan-ao-so-sinh', NULL, NULL),
(19, 'N04', 'Phụ kiện cho bé', 'phu-kien-cho-be', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id_contact` int(10) UNSIGNED NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `gallery_products`
--

CREATE TABLE `gallery_products` (
  `id_images` int(10) UNSIGNED NOT NULL,
  `images_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `id_product` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2018_11_25_001050_create_table_category_taxonomy', 1),
(4, '2018_11_25_001948_create_table_category_taxonomy', 2),
(5, '2018_11_25_002143_create_table_category_term_small', 3),
(6, '2018_11_25_002730_create_table__t_k__users', 4),
(7, '2018_11_25_004201_create_table_category_taxonomy', 5),
(8, '2018_11_25_004635_create_table_category_terms', 6),
(9, '2018_11_25_005104_create_table_user', 7),
(10, '2018_11_25_005458_create_table_gallery_product', 8),
(11, '2018_11_25_005709_create_table_product', 9),
(12, '2018_11_25_010808_create_table_product_weight', 10),
(13, '2018_11_25_010936_create_table_contact', 11),
(14, '2018_11_25_011151_create_table_cart_product', 12),
(15, '2018_11_25_155014_add_paid_to_products', 13),
(16, '2018_11_26_080349_create_table_category_taxonomy', 14),
(17, '2018_11_26_080506_create_tabe_category_terms', 15),
(18, '2018_11_26_105631_create_table_category_taxonomy', 16),
(19, '2018_11_26_105735_create_table_category_taxonomy', 17),
(20, '2018_11_26_145401_create_table_gallery_products', 18),
(21, '2018_11_27_094434_add_paid_to_product_weight', 19),
(22, '2018_11_27_122423_create_table_posts', 20),
(23, '2018_11_27_122636_create_table_category_posts', 21),
(24, '2018_11_27_124831_add_table_to_category_posts', 22),
(25, '2018_11_27_130712_create_table_category_posts', 23);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `excerpt` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `images` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `id_category` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `slug`, `excerpt`, `content`, `images`, `id_category`, `created_at`, `updated_at`) VALUES
(1, 'nguyen tuyen giang', 'nguyen-tuyen-giang', 'dfghjjkjhgfdsa', '<p>dfghjkl;kjhgfd</p>', '1543376707.jpg', 1, NULL, NULL),
(3, 'Thời trang cho bé', 'thoi-trang-cho-be', 'fghjkjhgfdsa', '<p>&agrave;ghjkjkhgfds</p>', '1543375444.jpg', 1, NULL, NULL),
(4, 'Thời trang 1', 'do-boi-be-gai', 'aaaaaaaaaaa', '<p>aaaaaaaaaaaa</p>', '1543393665.jpg', 1, NULL, NULL),
(5, 'bài viết 1', 'ba-viet-1', 'aaaaaaaaaa', '<p>aaaaaaaaaaaaaaa</p>', '1543393688.jpg', 1, NULL, NULL),
(6, 'Thời trang', 'thoi-trang', 'aaaaaaaaaaaaaaaaaa', '<p>aaaaaaaaaaaaaaaa</p>', '1543393740.png', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_product` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `name_product` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `count` int(11) NOT NULL,
  `date_add` datetime NOT NULL,
  `price` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `price_sale` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `images` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `id_images` int(11) NOT NULL,
  `id_weight` int(11) NOT NULL,
  `id_terms` int(11) NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product_carts`
--

CREATE TABLE `product_carts` (
  `id_store` int(10) UNSIGNED NOT NULL,
  `id_product` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `images` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `count_store` int(11) NOT NULL,
  `date_time` datetime NOT NULL,
  `price` double(8,2) NOT NULL,
  `id_user` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product_weight`
--

CREATE TABLE `product_weight` (
  `id` int(10) UNSIGNED NOT NULL,
  `weight` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `age` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `size` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `height` varchar(15) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `product_weight`
--

INSERT INTO `product_weight` (`id`, `weight`, `created_at`, `updated_at`, `age`, `size`, `height`) VALUES
(5, '8 - 10 Kg', NULL, NULL, '12 - 18 tháng', '80 - 90', '80'),
(6, '11 - 13 Kg', NULL, NULL, '1 - 2 tuổi', '90 - 100', '90'),
(7, '14 - 16 Kg', NULL, NULL, '3 - 4 tuổi', '100 - 110', '100'),
(8, '17 - 20 Kg', NULL, NULL, '4 - 5 tuổi', '110 - 120', '110'),
(9, '19 - 20 Kg', NULL, NULL, '5 - 7 tuổi', '120 - 125', '120'),
(10, '21 - 23 Kg', NULL, NULL, '6 - 8 tuổi', '125 - 130', '130'),
(11, '24 - 27 Kg', NULL, NULL, '7 - 9 tuổi', '140', '130 - 140'),
(12, '28 - 32 Kg', NULL, NULL, '9 - 10 tuổi', '140 - 150', '150');

-- --------------------------------------------------------

--
-- Table structure for table `tabe_category_terms`
--

CREATE TABLE `tabe_category_terms` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_term` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `category_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `id_category` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tabe_category_terms`
--

INSERT INTO `tabe_category_terms` (`id`, `id_term`, `category_name`, `id_category`, `slug`, `created_at`, `updated_at`) VALUES
(9, 'CT01', 'Đồ bộ bé gái', 'N02', 'do-bo-be-gai', NULL, NULL),
(10, 'CT02', 'Váy đầm bé gái', 'N02', 'vay-dam-be-gai', NULL, NULL),
(11, 'CT03', 'Đồ bơi bé gái', 'N02', 'do-boi-be-gai', NULL, NULL),
(12, 'CT04', 'Áo bé gái', 'N02', 'ao-be-gai', NULL, NULL),
(13, 'CT05', 'Quần cho bé gái', 'N02', 'quan-ao-cho-be-gai', NULL, NULL),
(14, 'CT06', 'Áo cho bé trai', 'N01', 'ao-cho-be-trai', NULL, NULL),
(15, 'CT07', 'Quần cho bé trai', 'N01', 'quan-cho-be-trai', NULL, NULL),
(16, 'CT08', 'Đồ bơi bé trai', 'N01', 'do-boi-be-trai', NULL, NULL),
(17, 'CT09', 'Đồ bộ bé trai', 'N01', 'do-bo-be-trai', NULL, NULL),
(18, 'CT10', 'Đồ bộ sơ sinh', 'N03', 'do-bo-so-sinh', NULL, NULL),
(19, 'CT12', 'Đầm sơ sinh', 'N03', 'dam-so-sinh', NULL, NULL),
(20, 'CT13', 'Balo, túi đeo', 'N04', 'balo-tui-deo', NULL, NULL),
(21, 'CT11', 'Body liền quần', 'N04', 'body-lien-quan', NULL, NULL),
(22, 'CT14', 'Giày, dép bé gái', 'N02', 'giay-dep-be-gai', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tk_users`
--

CREATE TABLE `tk_users` (
  `id_user` int(10) UNSIGNED NOT NULL,
  `username` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `femal` int(11) NOT NULL,
  `phone` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `city` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category_posts`
--
ALTER TABLE `category_posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category_taxonomy`
--
ALTER TABLE `category_taxonomy`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id_contact`);

--
-- Indexes for table `gallery_products`
--
ALTER TABLE `gallery_products`
  ADD PRIMARY KEY (`id_images`);

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
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_carts`
--
ALTER TABLE `product_carts`
  ADD PRIMARY KEY (`id_store`);

--
-- Indexes for table `product_weight`
--
ALTER TABLE `product_weight`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tabe_category_terms`
--
ALTER TABLE `tabe_category_terms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tk_users`
--
ALTER TABLE `tk_users`
  ADD PRIMARY KEY (`id_user`);

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
-- AUTO_INCREMENT for table `category_posts`
--
ALTER TABLE `category_posts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `category_taxonomy`
--
ALTER TABLE `category_taxonomy`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id_contact` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `gallery_products`
--
ALTER TABLE `gallery_products`
  MODIFY `id_images` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product_carts`
--
ALTER TABLE `product_carts`
  MODIFY `id_store` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product_weight`
--
ALTER TABLE `product_weight`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tabe_category_terms`
--
ALTER TABLE `tabe_category_terms`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `tk_users`
--
ALTER TABLE `tk_users`
  MODIFY `id_user` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
