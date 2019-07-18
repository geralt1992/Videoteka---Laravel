-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 18, 2019 at 10:33 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `video`
--

-- --------------------------------------------------------

--
-- Table structure for table `genres`
--

CREATE TABLE `genres` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `žanr` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `genres`
--

INSERT INTO `genres` (`id`, `žanr`, `created_at`, `updated_at`) VALUES
(1, 'Akcijski', NULL, NULL),
(2, 'Drama', NULL, NULL),
(3, 'Triler', NULL, NULL),
(4, 'Komedija', NULL, NULL),
(5, 'Animirani', NULL, NULL),
(6, 'Horor', NULL, NULL),
(7, 'Romantični', NULL, NULL),
(8, 'SF', NULL, NULL),
(9, 'Porno film', '2019-07-16 18:19:48', '2019-07-16 18:19:48'),
(10, 'Dokumentarni film', '2019-07-17 19:37:28', '2019-07-17 19:37:28'),
(11, 'Psihološka drama', '2019-07-17 19:38:23', '2019-07-17 19:38:23'),
(12, 'Psihološka drama', '2019-07-17 19:38:23', '2019-07-17 19:38:23');

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
(3, '2019_07_10_073242_create_movies_table', 1),
(4, '2019_07_10_073358_create_genres_table', 1),
(5, '2019_07_10_092502_update_time_at_gernes', 2),
(6, '2019_07_12_064858_add_column_to_movies', 3),
(8, '2019_07_12_074115_drop_title_movies', 4),
(9, '2019_07_12_074426_drop_title', 5),
(10, '2019_07_12_082451_add_opis_to_movies', 6),
(11, '2019_07_18_075437_add_to_movies_user_id', 7);

-- --------------------------------------------------------

--
-- Table structure for table `movies`
--

CREATE TABLE `movies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `naslov` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_zanra` bigint(20) UNSIGNED DEFAULT NULL,
  `godina` int(11) NOT NULL,
  `trajanje` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `filename` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mime` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `original_filename` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `opis` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_autora` bigint(20) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `movies`
--

INSERT INTO `movies` (`id`, `naslov`, `id_zanra`, `godina`, `trajanje`, `created_at`, `updated_at`, `filename`, `mime`, `original_filename`, `opis`, `id_autora`) VALUES
(11, 'Antitrust', 3, 1996, 200, '2019-07-12 06:10:14', '2019-07-12 06:20:23', 'phpDAAE.tmp.jpg', 'image/jpeg', 'antitrust_2001.jpg', 'A computer programmer\'s dream job at a hot Portland-based firm turns nightmarish when he discovers his boss has a secret and ruthless means of dispatching anti-trust problems.', 3),
(12, 'Firewall', 3, 2006, 100, '2019-07-12 06:10:36', '2019-07-12 06:10:36', 'php3255.tmp.jpg', 'image/jpeg', 'firewall_2006.jpg', 'A security specialist is forced into robbing the bank that he\'s protecting, as a bid to pay off his family\'s ransom.', 4),
(13, 'Hackers', 4, 1995, 80, '2019-07-12 06:11:03', '2019-07-12 06:11:03', 'php9A28.tmp.jpg', 'image/jpeg', 'hackers_1995.jpg', 'Dade Murphy was a hacker even as a kid in Seattle. He got arrested for the computer virus that he planted and was banned from using any computer until the age of 18.Then he moves to New York ', 2),
(14, 'Operation Swordfish', 7, 2001, 200, '2019-07-12 06:11:29', '2019-07-12 06:11:29', 'phpB3.tmp.jpg', 'image/jpeg', 'operation_swordfish_2001.jpg', 'A covert counter-terrorist unit called Black Cell led by Gabriel Shear wants the money to help finance their war against international terrorism, but it\'s all locked away. Gabriel brings in c', 2),
(15, 'Operation Takedown', 3, 2000, 96, '2019-07-12 06:11:53', '2019-07-12 06:11:53', 'php5C22.tmp.jpg', 'image/jpeg', 'operation_takedown_2000.jpg', 'Kevin Mitnick is quite possibly the best hacker in the world. Hunting for more and more information, seeking more and more cybertrophies every day, he constantly looks for bigger challenges. ', 4),
(16, 'Pirates of Silicon Valley', 6, 1999, 85, '2019-07-12 06:12:14', '2019-07-12 06:12:14', 'phpB0AC.tmp.jpg', 'image/jpeg', 'pirates_of_silicone_valley_1999.jpg', 'This is a semi-humorous biographical film about the men who made the world of technology what it is today, their struggles during college, the founding of their companies, and the ingenious a', 4),
(17, 'The Social Network', 6, 2010, 69, '2019-07-12 06:12:39', '2019-07-12 06:12:39', 'php117A.tmp.jpg', 'image/jpeg', 'the_social_network_2010.jpg', 'On a fall night in 2003, Harvard undergrad and computer programming genius Mark Zuckerberg sits down at his computer and heatedly begins working on a new idea. In a fury of blogging and progr', 3),
(18, 'Tron', 1, 1982, 70, '2019-07-12 06:12:56', '2019-07-12 06:12:56', 'php52AA.tmp.jpg', 'image/jpeg', 'tron_1982.jpg', 'The son of a virtual world designer goes looking for his father and ends up inside the digital world that his father designed. He meets his father\'s corrupted creation and a unique ally who w', 3),
(19, 'Tron Legacy', 3, 2010, 150, '2019-07-12 06:13:22', '2019-07-12 06:13:22', 'phpB916.tmp.jpg', 'image/jpeg', 'tron_legacy_2010.jpg', 'Hacker/arcade owner Kevin Flynn is digitally broken down into a data stream by a villainous software pirate known as Master Control and reconstituted into the internal, 3-D graphical world of', 1),
(20, 'War Games', 2, 1983, 210, '2019-07-12 06:13:39', '2019-07-12 06:13:39', 'phpFB12.tmp.jpg', 'image/jpeg', 'war_games_1983.jpg', 'War Games has clearly \'borrowed\' it\'s central themes and story from several films that have gone before it. Despite this it\'s hard not to like it, because it has been executed so well here on', 1);

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
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Marin', 'crazy.mad.man@hotmail.com', NULL, '$2y$10$aHEW7nrj4gVwl6wXT3QG8ujZEFEyWO8ICC4CKZqKus7413p47NAne', 'xs5Uiycl5KbL6DtdO9na2veiVpeXFAT7m4M0xtiAbkJaMCWCqIe0BwxKBUmQ', '2019-07-10 06:01:56', '2019-07-10 06:01:56'),
(2, 'Matej', 'matej.mikulic@gmail.com', NULL, '$2y$10$oibmEUQttYSbUK6DB1qJEuoFSRFdNB.AcqdwZhmlYCE08Dmy3SJJO', NULL, '2019-07-16 17:21:20', '2019-07-16 17:21:20'),
(3, 'Dario', 'dario.kovacevic@gmail.com', NULL, '$2y$10$ShydyTtvB14XBUsbmjI5Wue5WDc6y30mPz79JpKTBievWXSpYSBK.', NULL, '2019-07-18 06:15:30', '2019-07-18 06:15:30'),
(4, 'Nina', 'nina.boro96@gmail.com', NULL, '$2y$10$umOwBEGFndslrlnXGYDdpuj2rXCJHxb8KVQn/o3pef.Fjmfmodhqi', NULL, '2019-07-18 06:15:50', '2019-07-18 06:15:50');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `genres`
--
ALTER TABLE `genres`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `movies`
--
ALTER TABLE `movies`
  ADD PRIMARY KEY (`id`),
  ADD KEY `movies_id_zanra_index` (`id_zanra`),
  ADD KEY `movies_id_autora_index` (`id_autora`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

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
-- AUTO_INCREMENT for table `genres`
--
ALTER TABLE `genres`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `movies`
--
ALTER TABLE `movies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `movies`
--
ALTER TABLE `movies`
  ADD CONSTRAINT `movies_ibfk_1` FOREIGN KEY (`id_zanra`) REFERENCES `genres` (`id`),
  ADD CONSTRAINT `movies_ibfk_2` FOREIGN KEY (`id_autora`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
