-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 12, 2019 at 06:38 PM
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
-- Database: `lsapp`
--

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` int(10) UNSIGNED NOT NULL,
  `course_description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject_description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rank_requirements` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `course_fee` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `course_description`, `subject_description`, `rank_requirements`, `course_fee`, `created_at`, `updated_at`, `user_id`) VALUES
(22, 'STCW Courses', 'GMDSS RADIO OPERATOR', 'OIC', '6500', '2019-11-11 09:52:56', '2019-11-11 09:52:56', 1),
(23, 'In Houses Courses', 'GMDSS REFRESHER', 'Master Mariner', '123', '2019-11-11 10:45:38', '2019-11-11 10:45:38', 1);

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
(3, '2019_10_27_230341_create_posts_table', 1),
(4, '2019_10_28_080100_add_user_id_to_posts', 2),
(5, '2019_10_28_104402_add_cover_image_to_posts', 3),
(6, '2019_11_03_181205_create_courses_table', 4),
(8, '2019_11_11_183001_add_user_id_to_courses', 6),
(9, '2019_11_12_152132_create_scheds_table', 7);

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
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `cover_image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `body`, `created_at`, `updated_at`, `user_id`, `cover_image`) VALUES
(9, 'Post One', '<p>This is post one</p>', '2019-10-28 04:21:14', '2019-10-28 04:21:14', 2, 'noimage.jpg'),
(11, 'Post 2', '<p>this is post 2</p>', '2019-11-08 03:46:44', '2019-11-08 03:47:19', 1, 'a_1573213604.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `scheds`
--

CREATE TABLE `scheds` (
  `id` int(10) UNSIGNED NOT NULL,
  `slot_code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `room_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `instructor_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `scheds`
--

INSERT INTO `scheds` (`id`, `slot_code`, `start_date`, `end_date`, `room_id`, `instructor_id`, `created_at`, `updated_at`) VALUES
(1, 'GMDSS R.O REFRESHER', '2019-11-20', '2019-11-30', '201', 'Balmond', '2019-11-12 07:49:05', '2019-11-12 07:50:31'),
(2, 'GMDSS R.O 1', '2019-11-01', '2019-11-17', '302', 'Gusion', '2019-11-12 07:52:45', '2019-11-12 07:52:45'),
(3, 'Slot 1', '2019-11-01', '2019-11-02', 'Room 1', 'Instructor 1', '2019-11-12 08:48:03', '2019-11-12 09:11:03'),
(4, 'Slot 2', '2019-11-03', '2019-11-04', 'Room 2', 'Instructor 2', '2019-11-12 08:48:40', '2019-11-12 09:11:10');

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
(1, 'Jim Rivadelo', 'rivadelomij@gmail.com', '$2y$10$HDFrn15GNcsGUwPKNu7O3eHefXBrLsef/CHhnnr6QoQE5D4i8TTGy', 'l8NaOk7BCyL4FJA8nv8E3wHcGrLD0yr1vzIWH9ZTkIQiEDfi3tj6LMV4KzOl', '2019-10-27 23:47:41', '2019-10-27 23:47:41'),
(2, 'Yodanzu', 'yodanzu@gmail.com', '$2y$10$tTUP4s3i/cyWClQ0XTvBUO9iS7/2Qc7nWWBTpLjkDg2VvHaVdphDC', 'NLRXigGMQMaq37w52Wi07uy5QthWQC7OeJzAENYf2cCooZDLsOAmMSeWF2Or', '2019-10-28 01:38:42', '2019-10-28 01:38:42');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
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
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `scheds`
--
ALTER TABLE `scheds`
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
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `scheds`
--
ALTER TABLE `scheds`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
