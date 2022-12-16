-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 16, 2022 at 01:37 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `docatto`
--

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `published_at` datetime DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `image`, `title`, `body`, `published_at`, `created_at`, `updated_at`) VALUES
(1, 'animal-1671188854.jpeg', 'halo', 'halo', '2022-12-28 00:00:00', '2022-12-16 04:07:34', '2022-12-16 04:07:34'),
(5, 'animal-1671191650.jpg', 'What is this cute cat', 'SO THIS IS IT GUYS, THE CUTEST CAT', '2022-12-12 00:00:00', '2022-12-16 04:54:10', '2022-12-16 04:54:10'),
(6, 'animal-1671193456.jpg', 'LOOK AT THIS CAT', 'Oh my.. this cat is so gorgeous! Can\'t handle all the cuteness!', '2022-12-14 00:00:00', '2022-12-16 05:24:16', '2022-12-16 05:24:16'),
(7, 'animal-1671193528.jpg', 'What a cat!', 'This cat is too cute to be left alone.', '2022-12-29 00:00:00', '2022-12-16 05:25:28', '2022-12-16 05:25:28'),
(8, 'animal-1671193801.jpg', 'This dog thinks he can fly', '\"Look I\'m superman!\"', '2022-12-15 00:00:00', '2022-12-16 05:30:01', '2022-12-16 05:30:01'),
(9, 'animal-1671193968.jpg', 'The winner in the house!', 'He just won a competition! I have no idea which competition, maybe the goodest boy competition?', '2022-12-12 00:00:00', '2022-12-16 05:32:48', '2022-12-16 05:32:48'),
(10, 'animal-1671194117.jpg', 'Stares..', '\"Whatcha lookin at, boys?\"', '2022-12-20 00:00:00', '2022-12-16 05:35:17', '2022-12-16 05:35:17');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
