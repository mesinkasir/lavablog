-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 27, 2021 at 12:10 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravelblogs`
--

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
(1, '2021_02_25_110946_users', 1),
(2, '2021_02_25_112118_posts', 1);

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `author_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subtitle` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('publish','draft') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'draft',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `author_id`, `title`, `subtitle`, `image`, `description`, `slug`, `status`, `created_at`, `updated_at`) VALUES
(13, 1, 'Welcome to the artisan family', 'Build new modern website app and blog using laravel the php artisan, an popular php framework on the world', 'uploads/welcome-to-the-artisan-family.png', 'Welcome to the artisan family\r\n\r\nBuild new modern website app and blog using laravel the php artisan, an popular php framework on the world, laravel is magic for build anything for business and various other business needs.\r\n\r\nSimple easy blast fast develope new modern website app using laravel.\r\n\r\nThis is a free and open source code project develope by axcora technology, and other source code project you can visit we blog https://www.hockeycomputindo.com/2010/12/blog-post.html\r\n\r\nGet started now and by the artisan !!', 'welcome-to-the-artisan-family', 'publish', '2021-02-26 12:29:08', '2021-02-26 12:29:18'),
(15, 1, 'Why Must Lava Blog Web Apps', 'Why must use laravel cms blog php artisan with lava web apps', 'uploads/why-must-lava-blog-web-apps.jpg', 'Why Must Lava Blog Web Apps\r\n\r\nYap.. because this a content management system CMS with simple and easy for learn, fast for create an article content, lite and of course powerfull with laravel the php artisan.\r\n\r\nDownload this source code now and get started with lava blog cms web apps', 'why-must-lava-blog-web-apps', 'publish', '2021-02-26 13:40:45', '2021-02-26 13:40:57'),
(16, 1, 'Lava CMS Blog web Apps', 'All in one with laravel backend integration with angular and react front end.', 'uploads/lava-cms-blog-web-apps.jpg', 'Lava CMS Blog web Apps\r\n\r\nAll in one with laravel backend integration with angular and react front end.\r\n\r\nYap.. soon... we develope again for you, with colaboration technology using laravel on backend then integration with angular and react, make your website super techno.. stay tuned with us.', 'lava-cms-blog-web-apps', 'publish', '2021-02-26 13:45:08', '2021-02-26 13:45:16');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` enum('admin','author') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'author',
  `status` enum('approved','notapproved') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'notapproved',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `type`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@admin.com', '$2y$10$A5iSKvAqhRs0kAv/3YxfDu1B6SPBsZFtZo4UWAiZIQ.QQ.q7JRhaS', 'admin', 'approved', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `posts_author_id_foreign` (`author_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_author_id_foreign` FOREIGN KEY (`author_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
