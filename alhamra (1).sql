-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 04, 2023 at 01:00 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `alhamra`
--

-- --------------------------------------------------------

--
-- Table structure for table `aboutheaders`
--

CREATE TABLE `aboutheaders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `bg_image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `aboutheaders`
--

INSERT INTO `aboutheaders` (`id`, `title`, `bg_image`, `created_at`, `updated_at`) VALUES
(2, 'ABOUT US', '202304281731g8.PNG', '2023-04-13 03:30:09', '2023-04-28 11:31:56');

-- --------------------------------------------------------

--
-- Table structure for table `abouts`
--

CREATE TABLE `abouts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` longtext NOT NULL,
  `button` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `abouts`
--

INSERT INTO `abouts` (`id`, `title`, `description`, `button`, `image`, `created_at`, `updated_at`) VALUES
(3, 'ABOUT US', 'Al Hamra Shopping City is one of the largest shopping city in Sylhet. Here you will find everything you need for your daily life such as shop, travel agency, consultancy, training center, hotel, restaurant, office space etc. It is very famous for meeting the goals of IELTS students. There are mosques for men and women and there is a separate place for women to perform their prayers. Here you will find all the necessary products for your daily life. In Sylhet, you can take advantage of all kinds of facilities just from Al Hamra Shopping City.', 'Know More', '2023042816561.PNG', '2023-04-11 11:44:16', '2023-04-28 10:56:35');

-- --------------------------------------------------------

--
-- Table structure for table `besthotelimages`
--

CREATE TABLE `besthotelimages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `besthotelimages`
--

INSERT INTO `besthotelimages` (`id`, `image`, `created_at`, `updated_at`) VALUES
(2, '202304281719h5.PNG', '2023-04-09 11:12:27', '2023-04-28 11:19:07'),
(3, '202304281718h4.PNG', '2023-04-09 11:12:36', '2023-04-28 11:18:59'),
(4, '202304281718h3.PNG', '2023-04-09 11:12:57', '2023-04-28 11:18:50'),
(5, '202304281718h2.PNG', '2023-04-09 11:13:05', '2023-04-28 11:18:41'),
(6, '202304281718h1.PNG', '2023-04-09 11:13:13', '2023-04-28 11:18:33');

-- --------------------------------------------------------

--
-- Table structure for table `besthoteltitles`
--

CREATE TABLE `besthoteltitles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `besthoteltitles`
--

INSERT INTO `besthoteltitles` (`id`, `title`, `created_at`, `updated_at`) VALUES
(2, 'BEST HOTEL\'S INGREDIENTS', '2023-04-09 11:10:19', '2023-04-28 11:16:51');

-- --------------------------------------------------------

--
-- Table structure for table `blogcomments`
--

CREATE TABLE `blogcomments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `comment` longtext NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogcomments`
--

INSERT INTO `blogcomments` (`id`, `comment`, `name`, `email`, `created_at`, `updated_at`) VALUES
(1, 'Id qui veniam duis', 'Kevin Summers', 'zenefagy@mailinator.com', '2023-04-28 23:34:52', '2023-04-28 23:34:52'),
(2, 'Est sed mollit dese', 'Tatyana Osborne', 'vajihacevi@mailinator.com', '2023-04-16 11:47:37', '2023-04-16 11:47:37'),
(3, 'hello', 'sunny', 'sunny123@gmail.com', '2023-04-16 11:48:26', '2023-04-16 11:48:26'),
(4, 'In est voluptates de', 'Jaime Logan', 'bany@mailinator.com', '2023-04-28 08:08:30', '2023-04-28 08:08:30'),
(5, 'Aut voluptas qui lab', 'Christian Moore', 'soqamezofa@mailinator.com', '2023-04-28 23:14:32', '2023-04-28 23:14:32'),
(6, 'Non in consequat Ip', 'Wylie Craft', 'nosigeku@mailinator.com', '2023-04-28 23:15:51', '2023-04-28 23:15:51'),
(7, 'Consequatur Accusan', 'Caldwell Knowles', 'rowo@mailinator.com', '2023-04-28 23:17:19', '2023-04-28 23:17:19'),
(9, 'tyrsy', 'rty', 'nosigeku@mailinator.com', '2023-04-29 00:09:13', '2023-04-29 00:09:13'),
(10, 'hello', 'rty', 'nosigeku@mailinator.com', '2023-04-29 00:12:35', '2023-04-29 00:12:35'),
(11, 'Pariatur Consectetu', 'Kelly Harrell', 'jygih@mailinator.com', '2023-04-30 00:27:11', '2023-04-30 00:27:11'),
(12, 'Quia consequatur in', 'Walker Sharpe', 'marudanib@mailinator.com', '2023-04-30 01:12:58', '2023-04-30 01:12:58');

-- --------------------------------------------------------

--
-- Table structure for table `blogcontents`
--

CREATE TABLE `blogcontents` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` varchar(255) NOT NULL,
  `created_by` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `description_1` longtext NOT NULL,
  `description_2` longtext NOT NULL,
  `description_3` longtext NOT NULL,
  `description_4` longtext NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `meta_title` varchar(255) NOT NULL,
  `meta_description` varchar(255) NOT NULL,
  `meta_keyword` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogcontents`
--

INSERT INTO `blogcontents` (`id`, `category_id`, `created_by`, `title`, `slug`, `description_1`, `description_2`, `description_3`, `description_4`, `status`, `meta_title`, `meta_description`, `meta_keyword`, `image`, `created_at`, `updated_at`) VALUES
(5, '11', '1', 'Shopping Malls Thrive in the…', 'pariatur-elit-cons', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam a placeat alias sit provident debitis sequi culpa asperiores voluptatibus, quos voluptatem! Cupiditate laudantium voluptatem repellendus ab, illo cumque voluptatum accusantium expedita, sed excepturi, deleniti aliquid nihil! Ea non aliquam beatae ipsa voluptate officiis tempore voluptatum optio soluta, fugiat quidem, facere ipsam temporibus, natus perferendis error quos laboriosam reprehenderit earum est dignissimos sed reiciendis ex ipsum? Totam similique sequi laboriosam tenetur soluta error atque exercitationem corporis enim vitae quisquam itaque ullam eos, praesentium distinctio blanditiis rerum veritatis. Distinctio itaque ut accusamus deleniti reprehenderit quasi enim consequuntur, nesciunt ex, commodi inventore repudiandae numquam, voluptates libero fuga adipisci labore praesentium soluta dolore maxime cum placeat. Non tempore velit, dolorem dicta officiis voluptatem quos repudiandae aliquid ratione magnam, pariatur veritatis delectus nemo iusto, asperiores quod. Maxime nemo veniam, aspernatur doloribus distinctio nostrum harum vitae quos exercitationem unde. Nihil, quaerat officiis illum ex tempora sed reiciendis laudantium quos sit nulla eos cumque odit sint at quam. Facilis vel dolorum nam dolores illum saepe, in nemo dolore ex laborum iusto, quod mollitia consequuntur voluptatibus enim qui quam, maxime doloribus hic officia. Sunt, doloribus, at pariatur ullam quaerat architecto ipsam eius odit laboriosam, explicabo neque nihil. Vitae!', 'Aute repudiandae id', 'Aut in nostrum repre', 'Qui cum aute deserun', 0, 'Esse laborum Ea be', 'A excepturi quam sit', 'Nostrum et eiusmod a', '202304300610ac7b7752-d5cf-4ad4-bae9-430b7e67dcde.jpg', '2023-04-12 03:41:35', '2023-04-30 00:10:58'),
(6, '11', '1', 'Who Wants to Go Back…', 'latin-americas-rebound-from-covid-19', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam a placeat alias sit provident debitis sequi culpa asperiores voluptatibus, quos voluptatem! Cupiditate laudantium voluptatem repellendus ab, illo cumque voluptatum accusantium expedita, sed excepturi, deleniti aliquid nihil! Ea non aliquam beatae ipsa voluptate officiis tempore voluptatum optio soluta, fugiat quidem, facere ipsam temporibus, natus perferendis error quos laboriosam reprehenderit earum est dignissimos sed reiciendis ex ipsum? Totam similique sequi laboriosam tenetur soluta error atque exercitationem corporis enim vitae quisquam itaque ullam eos, praesentium distinctio blanditiis rerum veritatis. Distinctio itaque ut accusamus deleniti reprehenderit quasi enim consequuntur, nesciunt ex, commodi inventore repudiandae numquam, voluptates libero fuga adipisci labore praesentium soluta dolore maxime cum placeat. Non tempore velit, dolorem dicta officiis voluptatem quos repudiandae aliquid ratione magnam, pariatur veritatis delectus n', 'Non ipsum maxime lo', 'Numquam laborum ipsu', 'Laborum voluptate ex', 0, 'Ut et consectetur e', 'Harum provident rep', 'Ut eiusmod non aliqu', '202304300610ac7b7752-d5cf-4ad4-bae9-430b7e67dcde.jpg', '2023-04-12 04:26:03', '2023-04-30 00:10:34'),
(7, '11', '1', 'Latin America’s Rebound from Covid-19…', 'latin-americas-rebound-from-covid-19', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam a placeat alias sit provident debitis sequi culpa asperiores voluptatibus, quos voluptatem! Cupiditate laudantium voluptatem repellendus ab, illo cumque voluptatum accusantium expedita, sed excepturi, deleniti aliquid nihil! Ea non aliquam beatae ipsa voluptate officiis tempore voluptatum optio soluta, fugiat quidem, facere ipsam temporibus, natus perferendis error quos laboriosam reprehenderit earum est dignissimos sed reiciendis ex ipsum? Totam similique sequi laboriosam tenetur soluta error atque exercitationem corporis enim vitae quisquam itaque ullam eos, praesentium distinctio blanditiis rerum veritatis. Distinctio itaque ut accusamus deleniti reprehenderit quasi enim consequuntur, nesciunt ex, commodi inventore repudiandae numquam, voluptates libero fuga adipisci labore praesentium soluta dolore maxime cum placeat. Non tempore velit, dolorem dicta officiis voluptatem quos repudiandae aliquid ratione magnam, pariatur veritatis delectus n', 'dasdadadasd', 'asdadadadad', 'adadadasdasd', 0, 'asdasdadadad', 'adasdadasd', 'asdadadada', '202304300610ac7b7752-d5cf-4ad4-bae9-430b7e67dcde.jpg', '2023-04-12 18:00:00', '2023-04-30 00:10:22');

-- --------------------------------------------------------

--
-- Table structure for table `blogheaders`
--

CREATE TABLE `blogheaders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogheaders`
--

INSERT INTO `blogheaders` (`id`, `title`, `created_at`, `updated_at`) VALUES
(1, 'Porro ullamco labori', '2023-04-15 02:35:27', '2023-04-15 02:35:27');

-- --------------------------------------------------------

--
-- Table structure for table `blogmains`
--

CREATE TABLE `blogmains` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `created_by` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `meta_title` varchar(255) NOT NULL,
  `meta_description` varchar(255) NOT NULL,
  `meta_keyword` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogmains`
--

INSERT INTO `blogmains` (`id`, `category_name`, `slug`, `created_by`, `status`, `meta_title`, `meta_description`, `meta_keyword`, `created_at`, `updated_at`) VALUES
(11, 'SHOPPING MALL', 'shopping-mall', '1', 0, 'Latin America’s Rebound from Covid-19…', 't is a long established fact that a reader will be distracted by the readable content of…', 'ssss', '2023-04-12 03:38:20', '2023-04-29 00:30:00'),
(12, 'Interview', 'interview', '1', 0, 'Meta Title', 'Meta Description', 'Meta Keyword', '2023-04-12 03:39:43', '2023-04-12 03:39:50');

-- --------------------------------------------------------

--
-- Table structure for table `blogpageheaders`
--

CREATE TABLE `blogpageheaders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `bg_image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogpageheaders`
--

INSERT INTO `blogpageheaders` (`id`, `title`, `bg_image`, `created_at`, `updated_at`) VALUES
(2, 'OUR BLOG', '202304300607h1.PNG', '2023-04-14 09:40:21', '2023-04-30 00:07:36');

-- --------------------------------------------------------

--
-- Table structure for table `buffetparadiseimages`
--

CREATE TABLE `buffetparadiseimages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `buffetparadiseimages`
--

INSERT INTO `buffetparadiseimages` (`id`, `image`, `created_at`, `updated_at`) VALUES
(2, '202304281721r5.PNG', '2023-04-07 05:24:01', '2023-04-28 11:21:58'),
(3, '202304281721r4.PNG', '2023-04-10 09:04:56', '2023-04-28 11:21:50'),
(4, '202304281721r3.PNG', '2023-04-10 09:05:05', '2023-04-28 11:21:40'),
(5, '202304281721r2.PNG', '2023-04-10 09:05:18', '2023-04-28 11:21:32'),
(6, '202304281721r1.PNG', '2023-04-10 09:05:25', '2023-04-28 11:21:24');

-- --------------------------------------------------------

--
-- Table structure for table `buffetparadisetitles`
--

CREATE TABLE `buffetparadisetitles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `buffetparadisetitles`
--

INSERT INTO `buffetparadisetitles` (`id`, `title`, `created_at`, `updated_at`) VALUES
(1, 'BUFFET PARADISE RESTAURANT & PARTY CENTER', '2023-04-07 05:08:10', '2023-04-28 11:19:39');

-- --------------------------------------------------------

--
-- Table structure for table `contactcontents`
--

CREATE TABLE `contactcontents` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `description` longtext NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contactcontents`
--

INSERT INTO `contactcontents` (`id`, `name`, `email`, `subject`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Vielka Wilkins', 'copewojev@mailinator.com', 'In libero qui incidi', 'Dolore totam est qu', '2023-04-09 08:41:15', '2023-04-09 08:41:15');

-- --------------------------------------------------------

--
-- Table structure for table `contactheaders`
--

CREATE TABLE `contactheaders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `bg_image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contactheaders`
--

INSERT INTO `contactheaders` (`id`, `title`, `bg_image`, `created_at`, `updated_at`) VALUES
(3, 'CONTACT US', '202304300620g5.PNG', '2023-04-30 00:20:50', '2023-04-30 00:20:50');

-- --------------------------------------------------------

--
-- Table structure for table `contactmessages`
--

CREATE TABLE `contactmessages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `comment` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contactmessages`
--

INSERT INTO `contactmessages` (`id`, `name`, `email`, `subject`, `comment`, `created_at`, `updated_at`) VALUES
(1, 'George Ratliff', 'mekunof@mailinator.com', 'Optio cum provident', 'Cupiditate aut est c', '2023-04-11 00:59:09', '2023-04-11 00:59:09'),
(2, 'Barclay Kline', 'kinecyqu@mailinator.com', 'Voluptate aute archi', 'Sed dolor aut eaque', '2023-04-11 01:55:07', '2023-04-11 01:55:07'),
(3, 'Kyra Mueller', 'qovymifule@mailinator.com', 'Voluptas dolorem ess', 'Expedita minim deser', '2023-04-11 01:55:15', '2023-04-11 01:55:15'),
(4, 'Kaseem Deleon', 'mekacyf@mailinator.com', 'Officia rerum dolore', 'Voluptatem in omnis', '2023-04-11 10:36:07', '2023-04-11 10:36:07'),
(5, 'Claudia Gregory', 'wutex@mailinator.com', 'Iusto ex placeat fu', 'Expedita odit vero a', '2023-04-11 10:36:15', '2023-04-11 10:36:15'),
(6, 'Stacy Mcgowan', 'nadusu@mailinator.com', 'Accusamus sint ad ul', 'Voluptatem quisquam', '2023-04-11 10:38:22', '2023-04-11 10:38:22'),
(7, 'Daniel Waller', 'buvuziqan@mailinator.com', 'Magni ullam sint qu', 'Vel consequat Sunt', '2023-04-11 10:38:35', '2023-04-11 10:38:35'),
(8, 'Hilel Lawson', 'nuwyx@mailinator.com', 'Omnis tempor eligend', 'Qui vero consectetur', '2023-04-13 03:43:32', '2023-04-13 03:43:32'),
(9, 'Leroy Hancock', 'sixyhod@mailinator.com', 'Aliquam facilis cupi', 'Reiciendis qui aliqu', '2023-04-17 02:52:49', '2023-04-17 02:52:49'),
(10, 'Kamal Jennings', 'difyrod@mailinator.com', 'Sunt velit neque do', 'Ea facere Nam fugit', '2023-04-17 02:53:11', '2023-04-17 02:53:11'),
(11, 'Suki Figueroa', 'jowav@mailinator.com', 'Provident illum am', 'Adipisicing incididu', '2023-04-17 02:55:17', '2023-04-17 02:55:17'),
(12, 'Wang Cortez', 'data@mailinator.com', 'Totam accusantium ne', 'Officia deserunt lab', '2023-04-17 02:55:42', '2023-04-17 02:55:42'),
(13, 'Victor Griffin', 'sosysenaj@mailinator.com', 'Duis inventore excep', 'Ullam voluptates cum', '2023-04-17 02:59:20', '2023-04-17 02:59:20'),
(14, 'Aspen Rosa', 'kiru@mailinator.com', 'Officia necessitatib', 'Asperiores totam eum', '2023-04-17 03:00:27', '2023-04-17 03:00:27'),
(15, 'Rina Padilla', 'nivytujene@mailinator.com', 'Sunt do esse illo in', 'Est accusantium non', '2023-04-17 03:01:05', '2023-04-17 03:01:05'),
(16, 'Elton Pena', 'siha@mailinator.com', 'Deserunt irure omnis', 'Ipsam a debitis et a', '2023-04-17 03:01:59', '2023-04-17 03:01:59'),
(17, 'Stephen Jensen', 'suxemelebi@mailinator.com', 'Fugiat dolor consequ', 'Nihil sint voluptate', '2023-04-17 03:02:19', '2023-04-17 03:02:19'),
(18, 'Stephen Jensen', 'suxemelebi@mailinator.com', 'Fugiat dolor consequ', 'Nihil sint voluptate', '2023-04-17 03:02:19', '2023-04-17 03:02:19'),
(19, 'Stephen Jensen', 'suxemelebi@mailinator.com', 'Fugiat dolor consequ', 'Nihil sint voluptate', '2023-04-17 03:02:20', '2023-04-17 03:02:20'),
(20, 'Noah Collins', 'fyhub@mailinator.com', 'Voluptas magna sint', 'Et dolore mollit aut', '2023-04-17 03:03:07', '2023-04-17 03:03:07'),
(21, 'Natalie Beard', 'behodu@mailinator.com', 'Anim temporibus veli', 'Quo dolor do possimu', '2023-04-17 03:03:48', '2023-04-17 03:03:48'),
(22, 'Tanya Schultz', 'tysyxowo@mailinator.com', 'Necessitatibus et co', 'Impedit amet solut', '2023-04-17 03:06:27', '2023-04-17 03:06:27'),
(23, 'Jaime Carpenter', 'wifil@mailinator.com', 'Occaecat odio porro', 'Ipsum sunt exercitat', '2023-04-17 03:06:55', '2023-04-17 03:06:55'),
(24, 'Graham Mccullough', 'xomuta@mailinator.com', 'Nihil aliquip eos nu', 'Ut sed est dolor eni', '2023-04-21 05:12:05', '2023-04-21 05:12:05'),
(25, 'Felicia Flowers', 'tejiq@mailinator.com', 'Suscipit voluptatibu', 'Cillum quo deleniti', '2023-04-30 00:14:46', '2023-04-30 00:14:46'),
(26, 'Hayfa Drake', 'cyho@mailinator.com', 'Aliquid doloremque e', 'Corrupti cumque nis', '2023-04-30 00:22:54', '2023-04-30 00:22:54'),
(27, 'Velma Morris', 'zifawi@mailinator.com', 'Voluptates iusto arc', 'Rerum et esse magnam', '2023-04-30 00:24:19', '2023-04-30 00:24:19'),
(28, 'Iona Terry', 'huzexyre@mailinator.com', 'Quidem commodi quo e', 'Odit quam itaque et', '2023-04-30 00:24:31', '2023-04-30 00:24:31'),
(29, 'Tamekah Colon', 'sywarowel@mailinator.com', 'Eius ut occaecat off', 'Sit vitae minus qui', '2023-04-30 00:25:36', '2023-04-30 00:25:36'),
(30, 'Kibo Lyons', 'misahog@mailinator.com', 'Aut do quaerat sunt', 'Natus pariatur Cons', '2023-04-30 00:27:02', '2023-04-30 00:27:02'),
(31, 'Lareina Osborne', 'typecugu@mailinator.com', 'Et nesciunt quo qui', 'Delectus aut sapien', '2023-04-30 23:45:19', '2023-04-30 23:45:19'),
(32, 'Kiara Randall', 'jemaro@mailinator.com', 'Dolore odio enim ani', 'Cupiditate officia a', '2023-05-11 12:03:33', '2023-05-11 12:03:33'),
(33, 'Yuli Kemp', 'deqe@mailinator.com', 'Minima facere conseq', 'Sint non voluptas no', '2023-06-03 02:41:06', '2023-06-03 02:41:06');

-- --------------------------------------------------------

--
-- Table structure for table `contactsectionimages`
--

CREATE TABLE `contactsectionimages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) NOT NULL,
  `bg_image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contactsectionimages`
--

INSERT INTO `contactsectionimages` (`id`, `image`, `bg_image`, `created_at`, `updated_at`) VALUES
(4, '2023042908431.PNG', '2023042908451.PNG', '2023-04-29 02:43:01', '2023-04-29 02:45:54');

-- --------------------------------------------------------

--
-- Table structure for table `contentdeadlines`
--

CREATE TABLE `contentdeadlines` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `position` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contentdeadlines`
--

INSERT INTO `contentdeadlines` (`id`, `category_id`, `name`, `position`, `image`, `created_at`, `updated_at`) VALUES
(26, '18', 'shule Kadir Chowdhury', 'Chairmain', '202304281747shule.PNG', '2023-04-28 11:47:26', '2023-04-28 11:47:26'),
(27, '18', 'Abdul Asik Chowdhury', 'Vice-Chairman', '202304281747ashik.PNG', '2023-04-28 11:47:49', '2023-04-28 11:47:49'),
(28, '18', 'Moslen Uddin Chowdhury', 'Vice-Chairman', '202304281749mosleh.PNG', '2023-04-28 11:49:09', '2023-04-28 11:49:09'),
(29, '18', 'Pabel Kadir Chowdhury', 'Managing Director', '202304281749pabel.PNG', '2023-04-28 11:49:29', '2023-04-28 11:49:29'),
(30, '18', 'Abdul Hai', 'Deputy Managing Director', '202304281751hai.PNG', '2023-04-28 11:51:15', '2023-04-28 11:51:15'),
(31, '18', 'Principal Maulana Farid Uddin Chowdhury', 'Director', '202304281751farid.PNG', '2023-04-28 11:51:46', '2023-04-28 11:51:46'),
(32, '18', 'Maulana Misbahul Islam Chowdhury', 'Director', '202304281752misbah.PNG', '2023-04-28 11:52:15', '2023-04-29 02:05:33'),
(33, '18', 'Mohammad Azam Khan', 'Director', '202304281752azam.PNG', '2023-04-28 11:52:34', '2023-04-28 11:52:34'),
(39, '20', 'shule Kadir Chowdhury', 'Chairman', '202304290806shule.PNG', '2023-04-29 02:06:51', '2023-04-29 02:06:51'),
(40, '20', 'Principal Maulana Farid Uddin Chowdhury', 'Vice-Chairman', '202304290809farid.PNG', '2023-04-29 02:09:00', '2023-04-29 02:09:00'),
(41, '20', 'Prof Mohammad Abdul Hannan', 'Managing Director', '202304290820hannan.PNG', '2023-04-29 02:20:26', '2023-04-29 02:20:26'),
(42, '20', 'Moslen Uddin Chowdhury', 'Executive Director', '202304290821mosleh.PNG', '2023-04-29 02:21:33', '2023-04-29 02:21:33'),
(43, '20', 'Abdul Asik Chowdhury', 'Director', '202304290822ashik.PNG', '2023-04-29 02:22:54', '2023-04-29 02:22:54'),
(44, '20', 'Maulana Misbahul Islam Chowdhury', 'Director', '202304290823misbah.PNG', '2023-04-29 02:23:22', '2023-04-29 02:23:22'),
(45, '20', 'Mohammad Azam Khan', 'Director', '202304290823azam.PNG', '2023-04-29 02:23:42', '2023-04-29 02:23:42'),
(46, '20', 'Pabel Kadir Chowdhury', 'Director', '202304290824pabel.PNG', '2023-04-29 02:24:11', '2023-04-29 02:24:11'),
(47, '20', 'Abdul Hai', 'Director', '202304290824hai.PNG', '2023-04-29 02:24:36', '2023-04-29 02:24:36'),
(48, '20', 'Kaniz Fatema Chowdhury', 'Director', '202304290826fatema.PNG', '2023-04-29 02:26:37', '2023-04-29 02:26:37'),
(49, '20', 'Mohammad Abdul Mukit Chowdhury', 'Director', '202304290828mukit.PNG', '2023-04-29 02:28:13', '2023-04-29 02:28:13'),
(50, '22', 'Abdul Kadir Chowdhury', 'Chairman', '202304300824abdul.PNG', '2023-04-30 02:24:51', '2023-04-30 02:24:51'),
(51, '22', 'Principal Maulana Farid Uddin Chowdhury', 'Vice-Chairman', '202304300826farid.PNG', '2023-04-30 02:26:14', '2023-04-30 02:26:14'),
(52, '22', 'Prof Mohammad Abdul Hannan', 'Managing Director', '202304300826hannan.PNG', '2023-04-30 02:26:54', '2023-04-30 02:26:54'),
(53, '22', 'Dr.Mudabbir Hussian', 'Managing Director', '202304300827mussabir.PNG', '2023-04-30 02:27:22', '2023-04-30 02:27:22'),
(54, '22', 'Abdul Asik Chowdhury', 'Director', '202304300827ashik.PNG', '2023-04-30 02:27:46', '2023-04-30 02:27:46'),
(55, '22', 'Abdul Hai', 'Director', '202304300830hai.PNG', '2023-04-30 02:30:33', '2023-04-30 02:30:33'),
(56, '22', 'Mosleh Ahmed Chowdhury', 'Director', '202304300831nasren.PNG', '2023-04-30 02:31:01', '2023-04-30 02:31:01'),
(57, '22', 'Shuhel Kadir Chowdhury', 'Director', '202304300831shule.PNG', '2023-04-30 02:31:45', '2023-04-30 02:31:45'),
(58, '23', 'Abdul Kadir Chowdhury', 'Director', '202304300835abdul.PNG', '2023-04-30 02:35:58', '2023-04-30 02:35:58'),
(59, '23', 'Principal Maulana Farid Uddin Chowdhury', 'Vice-Chairman', '202304300837farid.PNG', '2023-04-30 02:37:03', '2023-04-30 02:37:03'),
(60, '23', 'Prof Mohammad Abdul Hannan', 'Managing Director', '202304300837hannan.PNG', '2023-04-30 02:37:40', '2023-04-30 02:37:40'),
(61, '23', 'Dr.Mudabbir Hussian', 'Executive Director', '202304300838mussabir.PNG', '2023-04-30 02:38:11', '2023-04-30 02:41:44'),
(62, '23', 'Abdul Asik Chowdhury', 'Director', '202304300839ashik.PNG', '2023-04-30 02:39:33', '2023-04-30 02:42:00'),
(63, '23', 'Maulana Misbahul Islam Chowdhury', 'Director', '202304300840misbah.PNG', '2023-04-30 02:40:02', '2023-04-30 02:42:11'),
(64, '23', 'Pabel Kadir Chowdhury', 'Director', '202304300840pabel.PNG', '2023-04-30 02:40:34', '2023-04-30 02:42:19'),
(65, '23', 'Shuhel Kadir Chowdhury', 'Director', '202304300841shule.PNG', '2023-04-30 02:41:02', '2023-04-30 02:42:27'),
(66, '24', 'Abdul Kadir Chowdhury', 'Director', '202304300844abdul.PNG', '2023-04-30 02:44:00', '2023-04-30 02:44:00'),
(67, '24', 'Principal Maulana Farid Uddin Chowdhury', 'Vice-Chairman', '202304300844farid.PNG', '2023-04-30 02:44:49', '2023-04-30 02:44:49'),
(68, '24', 'Abdul Hai', 'Director', '202304300846hai.PNG', '2023-04-30 02:46:49', '2023-04-30 02:46:49'),
(69, '24', 'Shuhel Kadir Chowdhury', 'Director', '202304300847shule.PNG', '2023-04-30 02:47:15', '2023-04-30 02:47:15'),
(70, '24', 'Dr.Mudabbir Hussian', 'Executive Director', '202304300848mussabir.PNG', '2023-04-30 02:48:12', '2023-04-30 02:48:12'),
(71, '24', 'Prof Mohammad Abdul Hannan', 'Managing Director', '202304300848hannan.PNG', '2023-04-30 02:48:50', '2023-04-30 02:48:50'),
(72, '31', 'Shuhel Kadir Chowdhury', 'Chairman', '202305010548shule.PNG', '2023-04-30 23:48:41', '2023-04-30 23:49:23'),
(73, '31', 'Principal Maulana Farid Uddin Chowdhury', 'Vice-Chairman', '202305010549farid.PNG', '2023-04-30 23:49:10', '2023-04-30 23:49:10'),
(74, '31', 'Prof Mohammad Abdul Hannan', 'Managing Director', '202305010550hannan.PNG', '2023-04-30 23:50:03', '2023-04-30 23:50:03'),
(75, '31', 'Moslen Uddin Chowdhury', 'Executive Director', '202305010551mosleh.PNG', '2023-04-30 23:51:20', '2023-04-30 23:51:20'),
(76, '31', 'Abdul Asik Chowdhury', 'Director', '202305010551ashik.PNG', '2023-04-30 23:51:51', '2023-04-30 23:51:51'),
(77, '31', 'Maulana Misbahul Islam Chowdhury', 'Director', '202305010552misbah.PNG', '2023-04-30 23:52:33', '2023-04-30 23:52:33'),
(78, '31', 'Pabel Kadir Chowdhury', 'Director', '202305010552pabel.PNG', '2023-04-30 23:52:59', '2023-04-30 23:52:59'),
(79, '31', 'Nasreen Chowdhury', 'Director', '202305010557nasren.PNG', '2023-04-30 23:57:34', '2023-04-30 23:57:34'),
(80, '30', 'Abdul Kadir Chowdhury', 'Chairman', '202305010558abdul.PNG', '2023-04-30 23:58:23', '2023-04-30 23:58:23'),
(81, '30', 'Principal Maulana Farid Uddin Chowdhury', 'Vice-Chairman', '202305010558farid.PNG', '2023-04-30 23:58:48', '2023-04-30 23:58:48'),
(82, '30', 'Prof Mohammad Abdul Hannan', 'Managing Director', '202305010603hannan.PNG', '2023-05-01 00:03:46', '2023-05-01 00:03:46'),
(83, '30', 'Moslen Uddin Chowdhury', 'Executive Director', '202305010604mosleh.PNG', '2023-05-01 00:04:17', '2023-05-01 00:04:17'),
(84, '30', 'Abdul Asik Chowdhury', 'Director', '202305010604ashik.PNG', '2023-05-01 00:04:41', '2023-05-01 00:04:41'),
(85, '30', 'Maulana Misbahul Islam Chowdhury', 'Director', '202305010605misbah.PNG', '2023-05-01 00:05:12', '2023-05-01 00:05:12'),
(86, '30', 'Pabel Kadir Chowdhury', 'Director', '202305010605pabel.PNG', '2023-05-01 00:05:43', '2023-05-01 00:05:43'),
(87, '30', 'Abdul Hai', 'Director', '202305010606hai.PNG', '2023-05-01 00:06:26', '2023-05-01 00:06:26'),
(88, '29', 'Abdul Kadir Chowdhury', 'Chairman', '202305010608abdul.PNG', '2023-05-01 00:08:34', '2023-05-01 00:08:34'),
(89, '28', 'Abdul Kadir Chowdhury', 'Chairman', '202305010722abdul.PNG', '2023-05-01 01:22:26', '2023-05-01 01:22:26'),
(90, '28', 'Principal Maulana Farid Uddin Chowdhury', 'Vice-Chairman', '202305010723farid.PNG', '2023-05-01 01:23:10', '2023-05-01 01:23:10'),
(91, '28', 'Prof Mohammad Abdul Hannan', 'Managing Director', '202305010723hannan.PNG', '2023-05-01 01:23:37', '2023-05-01 01:23:37'),
(92, '28', 'Dr.Mudabbir Hussian', 'Executive Director', '202305010725mussabir.PNG', '2023-05-01 01:25:02', '2023-05-01 01:25:02'),
(93, '28', 'Abdul Asik Chowdhury', 'Director', '202305010725ashik.PNG', '2023-05-01 01:25:25', '2023-05-01 01:25:25'),
(94, '28', 'Mohammad Abdul Hamid', 'Director', '202305010726hamid.PNG', '2023-05-01 01:26:14', '2023-05-01 01:26:14'),
(95, '28', 'Abdul Hai', 'Director', '202305010727hai.PNG', '2023-05-01 01:27:08', '2023-05-01 01:27:08'),
(96, '28', 'Shuhel Kadir Chowdhury', 'Director', '202305010728shule.PNG', '2023-05-01 01:28:14', '2023-05-01 01:28:14'),
(97, '27', 'Abdul Kadir Chowdhury', 'Chairman', '202305010729abdul.PNG', '2023-05-01 01:29:34', '2023-05-01 01:29:34'),
(98, '27', 'Principal Maulana Farid Uddin Chowdhury', 'Vice-Chairman', '202305010730farid.PNG', '2023-05-01 01:30:27', '2023-05-01 01:30:27'),
(99, '27', 'Prof Mohammad Abdul Hannan', 'Managing Director', '202305010730hannan.PNG', '2023-05-01 01:30:55', '2023-05-01 01:30:55'),
(100, '27', 'Maulana Misbahul Islam Chowdhury', 'Director', '202305010731misbah.PNG', '2023-05-01 01:31:20', '2023-05-01 01:31:20'),
(101, '27', 'Mohammad Azam Khan', 'Director', '202305010732azam.PNG', '2023-05-01 01:32:00', '2023-05-01 01:32:00'),
(102, '27', 'Pabel Kadir Chowdhury', 'Director', '202305010732pabel.PNG', '2023-05-01 01:32:26', '2023-05-01 01:32:26'),
(103, '27', 'Mohammad Abdul Hamid', 'Director', '202305010732hamid.PNG', '2023-05-01 01:32:51', '2023-05-01 01:32:51'),
(104, '27', 'Abdul Hai', 'Director', '202305010733hai.PNG', '2023-05-01 01:33:18', '2023-05-01 01:33:18'),
(105, '26', 'Abdul Kadir Chowdhury', 'Director', '202305010734abdul.PNG', '2023-05-01 01:34:22', '2023-05-01 01:34:22'),
(106, '26', 'Principal Maulana Farid Uddin Chowdhury', 'Vice-Chairman', '202305010734farid.PNG', '2023-05-01 01:34:59', '2023-05-01 01:34:59'),
(107, '26', 'Prof Mohammad Abdul Hannan', 'Managing Director', '202305010735hannan.PNG', '2023-05-01 01:35:47', '2023-05-01 01:35:47'),
(108, '26', 'Dr.Mudabbir Hussian', 'Executive Director', '202305010736mussabir.PNG', '2023-05-01 01:36:27', '2023-05-01 01:36:27'),
(109, '26', 'Mohammad Abdul Hamid', 'Director', '202305010737hamid.PNG', '2023-05-01 01:37:06', '2023-05-01 01:37:06'),
(110, '26', 'Abdul Asik Chowdhury', 'Director', '202305010737ashik.PNG', '2023-05-01 01:37:34', '2023-05-01 01:37:34'),
(111, '26', 'Mohammad Azam Khan', 'Director', '202305010738azam.PNG', '2023-05-01 01:38:17', '2023-05-01 01:38:17'),
(112, '26', 'Shuhel Kadir Chowdhury', 'Director', '202305010738shule.PNG', '2023-05-01 01:38:40', '2023-05-01 01:38:40'),
(113, '25', 'Abdul Kadir Chowdhury', 'Chairman', '202305010741abdul.PNG', '2023-05-01 01:41:38', '2023-05-01 01:41:38'),
(114, '25', 'Principal Maulana Farid Uddin Chowdhury', 'Vice-Chairman', '202305010741farid.PNG', '2023-05-01 01:41:57', '2023-05-01 01:41:57'),
(115, '25', 'Prof Mohammad Abdul Hannan', 'Managing Director', '202305010742hannan.PNG', '2023-05-01 01:42:31', '2023-05-01 01:42:31'),
(116, '25', 'Dr.Mudabbir Hussian', 'Executive Director', '202305010742mussabir.PNG', '2023-05-01 01:42:57', '2023-05-01 01:42:57'),
(117, '25', 'Pabel Kadir Chowdhury', 'Director', '202305010743pabel.PNG', '2023-05-01 01:43:52', '2023-05-01 01:43:52'),
(118, '25', 'Mohammad Abdul Mukit Chowdhury', 'Director', '202305010744mukit.PNG', '2023-05-01 01:44:09', '2023-05-01 01:44:09'),
(119, '25', 'Mohammad Abdul Hamid', 'Director', '202305010744hamid.PNG', '2023-05-01 01:44:35', '2023-05-01 01:44:35'),
(120, '25', 'Abdul Hai', 'Director', '202305010745hai.PNG', '2023-05-01 01:45:22', '2023-05-01 01:45:22'),
(121, '29', 'Principal Maulana Farid Uddin Chowdhury', 'Vice-Chairman', '202305010747farid.PNG', '2023-05-01 01:47:02', '2023-05-01 01:47:02'),
(122, '29', 'Prof Mohammad Abdul Hannan', 'Managing Director', '202305010747hannan.PNG', '2023-05-01 01:47:27', '2023-05-01 01:47:27'),
(123, '29', 'Mohammad Abdul Rob', 'Director', '202305010747rob.PNG', '2023-05-01 01:47:57', '2023-05-01 01:47:57'),
(124, '29', 'Shuhel Kadir Chowdhury', 'Director', '202305010748shule.PNG', '2023-05-01 01:48:21', '2023-05-01 01:48:21'),
(125, '29', 'Mohammad Abdul Hamid', 'Director', '202305010748hamid.PNG', '2023-05-01 01:48:39', '2023-05-01 01:48:39'),
(126, '29', 'Dr.Mudabbir Hussian', 'Executive Director', '202305010749mussabir.PNG', '2023-05-01 01:49:08', '2023-05-01 01:49:08'),
(127, '29', 'Mohammad Azam Khan', 'Director', '202305010749azam.PNG', '2023-05-01 01:49:58', '2023-05-01 01:49:58'),
(128, '19', 'Shuhel Kadir Chowdhury', 'Chairman', '202305010813shule.PNG', '2023-05-01 02:13:16', '2023-05-01 02:13:16'),
(129, '19', 'Moslen Uddin Chowdhury', 'Vice-Chairman', '202305010813mosleh.PNG', '2023-05-01 02:13:53', '2023-05-01 02:13:53'),
(130, '19', 'Pabel Kadir Chowdhury', 'Managing Director', '202305010814pabel.PNG', '2023-05-01 02:14:32', '2023-05-01 02:14:32'),
(131, '19', 'Dr.Mudabbir Hussian', 'Director', '202305010815mussabir.PNG', '2023-05-01 02:15:33', '2023-05-01 02:15:33'),
(132, '19', 'Mohammad Abdul Hamid', 'Director', '202305010816hamid.PNG', '2023-05-01 02:16:05', '2023-05-01 02:16:05'),
(133, '19', 'Abdul Hai', 'Director', '202305010816hai.PNG', '2023-05-01 02:16:42', '2023-05-01 02:16:42'),
(134, '19', 'Mohammad Abdul Rob', 'Director', '202305010817rob.PNG', '2023-05-01 02:17:23', '2023-05-01 02:17:23'),
(135, '19', 'Nasreen Chowdhury', 'Director', '202305010817nasren.PNG', '2023-05-01 02:17:54', '2023-05-01 02:17:54');

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
-- Table structure for table `footers`
--

CREATE TABLE `footers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title_1` varchar(255) NOT NULL,
  `description_1` longtext NOT NULL,
  `title_2` varchar(255) NOT NULL,
  `title_3` varchar(255) NOT NULL,
  `description_2` longtext NOT NULL,
  `location` longtext NOT NULL,
  `number_1` varchar(255) NOT NULL,
  `number_2` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `location_icon` varchar(255) NOT NULL,
  `phone_icon_1` varchar(255) NOT NULL,
  `phone_icon_2` varchar(255) NOT NULL,
  `email_icon` varchar(255) NOT NULL,
  `facebook` varchar(255) NOT NULL,
  `twitter` varchar(255) NOT NULL,
  `linkdin` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `footers`
--

INSERT INTO `footers` (`id`, `title_1`, `description_1`, `title_2`, `title_3`, `description_2`, `location`, `number_1`, `number_2`, `email`, `location_icon`, `phone_icon_1`, `phone_icon_2`, `email_icon`, `facebook`, `twitter`, `linkdin`, `created_at`, `updated_at`) VALUES
(3, 'ABOUT', 'Al Hamra Shopping City is one of the largest shopping mall in Sylhet. Here you will locate everything you need for shopping such as shops, travel agencies, coaching centers. It is famous for IELTS students.', 'CONTACT INFO', 'SUBSCRIBE', 'SUBSCRIBE OUR NEWSLETTER FOR GEETING YOU NTIOCH', 'Al-Hamra Shopping City Zindabazar Sylhet', '880189441930006', '8802996635612', 'Farhan@gmail.com', 'fas fa-map-marker-alt', 'fas fa-phone-alt', 'fas fa-check', 'far fa-envelope', 'fa-brands fa-facebook', 'fa-brands fa-twitter', 'fa-brands fa-linkedin-in', '2023-04-28 11:24:05', '2023-04-30 02:08:35');

-- --------------------------------------------------------

--
-- Table structure for table `headers`
--

CREATE TABLE `headers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `button1` varchar(255) NOT NULL,
  `button2` varchar(255) NOT NULL,
  `bg_image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `headers`
--

INSERT INTO `headers` (`id`, `title`, `button1`, `button2`, `bg_image`, `created_at`, `updated_at`) VALUES
(12, 'SATISFACTION IS NOT CAUGHT IN MONEY BUT IN SHOPPING.', 'Explore Us', 'Know More', '202304281645ac7b7752-d5cf-4ad4-bae9-430b7e67dcde.jpg', '2023-04-11 11:12:00', '2023-04-28 10:50:37'),
(14, 'WE CONSISTENTLY SAY SHOPPING IS MORE AFFORDABLE THAN A PSYCHIATRIST', 'Explore Us', 'Know More', '202304281644a2011c6b-6b5b-4240-bdd6-936784f674c0.jpg', '2023-04-11 11:12:51', '2023-04-28 10:50:15'),
(15, 'HERE YOU WILL FIND EVERYTHING YOU NEED FOR YOUR DAILY LIFE', 'Explore Us', 'Know More', '2023042816443b0e6cfd-d18a-428d-9d22-64e37582796a.jpg', '2023-04-11 11:13:54', '2023-04-28 10:49:52');

-- --------------------------------------------------------

--
-- Table structure for table `maindeadlines`
--

CREATE TABLE `maindeadlines` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `maindeadlines`
--

INSERT INTO `maindeadlines` (`id`, `category_name`, `created_at`, `updated_at`) VALUES
(18, '2021JAN -2022 DEC', '2023-04-27 01:20:22', '2023-04-27 01:20:22'),
(19, '2019 jan -2020 Dec', '2023-04-27 01:20:45', '2023-04-27 01:20:45'),
(20, '2017JAN - 2018DEC', '2023-04-27 01:21:11', '2023-04-27 01:21:11'),
(22, '1997 Jan -1998 Dec', '2023-04-29 03:19:01', '2023-04-29 03:19:01'),
(23, '1999 Jan -2000 Dec', '2023-04-29 03:19:09', '2023-04-29 03:19:09'),
(24, '2001Jan-2002Dec', '2023-04-29 03:19:17', '2023-04-29 03:19:17'),
(25, '2003 Jan - 2004 Dec', '2023-04-29 03:19:36', '2023-04-29 03:19:36'),
(26, '2005Jan-2006 DEC', '2023-04-29 03:20:04', '2023-04-29 03:20:04'),
(27, '2007 Jan -2008 DEC', '2023-04-29 03:22:51', '2023-04-29 03:22:51'),
(28, '2009 Jan -2010 Dec', '2023-04-29 03:24:19', '2023-04-29 03:24:19'),
(29, '2011 Jan -2012 Dec', '2023-04-29 03:24:30', '2023-04-29 03:24:30'),
(30, '2013 JAN- 2014 DEC', '2023-04-29 03:29:24', '2023-04-29 03:29:24'),
(31, '2015Jan -2016 Dec', '2023-04-29 03:29:33', '2023-04-29 03:29:33');

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
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2014_10_12_100000_create_password_resets_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2023_04_05_071953_create_headers_table', 1),
(7, '2023_04_05_154508_create_abouts_table', 2),
(8, '2023_04_05_162909_create_ouractivitiestitles_table', 3),
(10, '2023_04_06_064701_create_ouractivitiescontents_table', 4),
(11, '2023_04_06_074834_create_ourgallerytitles_table', 5),
(12, '2023_04_06_091724_create_ourgalleryimages_table', 6),
(13, '2023_04_06_101236_create_besthoteltitles_table', 7),
(14, '2023_04_06_104632_create_besthotelimages_table', 8),
(15, '2023_04_07_105440_create_buffetparadisetitles_table', 9),
(16, '2023_04_07_111047_create_buffetparadiseimages_table', 10),
(18, '2023_04_07_112611_create_contactsectionimages_table', 11),
(25, '2023_04_08_075914_create_aboutheaders_table', 14),
(26, '2023_04_08_083726_create_ourqualities_table', 15),
(27, '2023_04_08_095401_create_whychooseustitles_table', 16),
(29, '2023_04_08_140817_create_ourplancontents_table', 18),
(30, '2023_04_08_160320_create_ourmanagementtitles_table', 19),
(33, '2023_04_08_172702_create_serviceheaders_table', 22),
(34, '2023_04_09_055856_create_serviceseconds_table', 23),
(41, '2023_04_09_083511_create_trustedtitles_table', 26),
(42, '2023_04_09_090914_create_trustedsliders_table', 27),
(43, '2023_04_09_100816_create_contactheaders_table', 28),
(44, '2023_04_09_142033_create_contactcontents_table', 29),
(46, '2023_04_09_163056_create_blogpageheaders_table', 30),
(52, '2023_04_07_133249_create_footers_table', 34),
(53, '2023_04_10_095149_create_blogcomments_table', 35),
(55, '2023_04_10_151522_create_contactmessages_table', 36),
(56, '2023_04_10_054219_create_blogmains_table', 37),
(61, '2023_04_10_075852_create_blogcontents_table', 41),
(62, '2023_04_07_115134_create_sitesettings_table', 42),
(63, '2023_04_15_072452_create_blogheaders_table', 43),
(71, '2023_04_25_152551_maindeadline', 44),
(73, '2023_04_26_103157_contentdeadline', 45),
(76, '2023_04_09_072443_create_whatwedotitles_table', 46),
(77, '2023_04_09_074005_create_whatwedocontents_table', 46),
(78, '2023_04_08_103104_create_whychooseuscontents_table', 47);

-- --------------------------------------------------------

--
-- Table structure for table `ouractivitiescontents`
--

CREATE TABLE `ouractivitiescontents` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `icon` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ouractivitiescontents`
--

INSERT INTO `ouractivitiescontents` (`id`, `name`, `icon`, `created_at`, `updated_at`) VALUES
(3, 'SHOPPING MALL', 'Minus similique dolo', '2023-04-09 10:56:17', '2023-04-11 11:48:29'),
(4, 'RESTAURANT', 'Cupiditate culpa vel', '2023-04-09 10:57:09', '2023-04-11 11:48:21'),
(5, 'HOTELS', 'Numquam tempora sint', '2023-04-09 11:01:46', '2023-04-11 11:48:14'),
(6, 'OFFICE SPACE', 'Dolorem ut laudantiu', '2023-04-09 11:01:51', '2023-04-11 11:48:05');

-- --------------------------------------------------------

--
-- Table structure for table `ouractivitiestitles`
--

CREATE TABLE `ouractivitiestitles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ouractivitiestitles`
--

INSERT INTO `ouractivitiestitles` (`id`, `title`, `created_at`, `updated_at`) VALUES
(3, 'OUR ACTIVITIES', '2023-04-11 11:47:47', '2023-04-11 11:47:47');

-- --------------------------------------------------------

--
-- Table structure for table `ourgalleryimages`
--

CREATE TABLE `ourgalleryimages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ourgalleryimages`
--

INSERT INTO `ourgalleryimages` (`id`, `image`, `created_at`, `updated_at`) VALUES
(8, '202304281715g3.PNG', '2023-04-13 04:12:57', '2023-04-28 11:15:45'),
(9, '202304281715g2.PNG', '2023-04-13 04:13:29', '2023-04-28 11:15:37'),
(10, '202304281715g1.PNG', '2023-04-13 04:14:01', '2023-04-28 11:15:29'),
(11, '202304281715g4.PNG', '2023-04-28 11:15:54', '2023-04-28 11:15:54'),
(12, '202304281716g5.PNG', '2023-04-28 11:16:11', '2023-04-28 11:16:11'),
(13, '202304281716g6.PNG', '2023-04-28 11:16:17', '2023-04-28 11:16:17');

-- --------------------------------------------------------

--
-- Table structure for table `ourgallerytitles`
--

CREATE TABLE `ourgallerytitles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ourgallerytitles`
--

INSERT INTO `ourgallerytitles` (`id`, `title`, `created_at`, `updated_at`) VALUES
(3, 'OUR GALLERY', '2023-04-09 11:02:59', '2023-04-11 11:48:46');

-- --------------------------------------------------------

--
-- Table structure for table `ourmanagementtitles`
--

CREATE TABLE `ourmanagementtitles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ourmanagementtitles`
--

INSERT INTO `ourmanagementtitles` (`id`, `title`, `created_at`, `updated_at`) VALUES
(2, 'Our Management', '2023-04-11 02:56:39', '2023-04-28 11:44:00');

-- --------------------------------------------------------

--
-- Table structure for table `ourplancontents`
--

CREATE TABLE `ourplancontents` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` longtext NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ourplancontents`
--

INSERT INTO `ourplancontents` (`id`, `title`, `description`, `image`, `created_at`, `updated_at`) VALUES
(2, 'Our Mission', 'Our main goal here is to provide space for different types of offices, hotels for accommodation, restaurants for meals. We’re working on how to make these aspects better suited to people. We are also working on other topics so that everyone who comes to us can take benefit from all the good opportunities from Al Hamra. Soon we will be known as one of the most unique and popular shopping city in Bangladesh', '202304281736g1.PNG', '2023-04-11 02:41:24', '2023-04-28 11:36:25'),
(3, 'Our Plan', 'Al Hamra Shopping City is one of the well-known shopping malls located in Sylhet. We plan to keep our customers satisfied and deliver quality services for them. We are working to make this shopping center one of the most popular shopping centers in Bangladesh. Nowadays we are now known as one of the leading shopping malls in Sylhet for maintaining the quality of all shoppers as well as providing the best service to our customers.', '202304281736g4.PNG', '2023-04-11 02:42:33', '2023-04-28 11:36:04');

-- --------------------------------------------------------

--
-- Table structure for table `ourqualities`
--

CREATE TABLE `ourqualities` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` longtext NOT NULL,
  `title_1` varchar(255) NOT NULL,
  `title_2` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ourqualities`
--

INSERT INTO `ourqualities` (`id`, `title`, `description`, `title_1`, `title_2`, `image`, `created_at`, `updated_at`) VALUES
(3, 'Our qualities are our pride', 'Everyone has known Alhambra Shopping City for over 20 years. In this time they didn’t have to go anywhere else to meet the needs that everyone came for. Here they can find all kinds of products that everymen needs. The best customer service of all time is committed You can all kinds of needs completed from Al Hamra.', 'First Working Process', '24/7 Live Supportt', '2023042817331.PNG', '2023-04-11 02:22:07', '2023-04-28 11:33:36');

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
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `serviceheaders`
--

CREATE TABLE `serviceheaders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `bg_image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `serviceheaders`
--

INSERT INTO `serviceheaders` (`id`, `title`, `bg_image`, `created_at`, `updated_at`) VALUES
(3, 'OUR SERVICE', '202304300508g2.PNG', '2023-04-29 23:08:44', '2023-04-29 23:08:44');

-- --------------------------------------------------------

--
-- Table structure for table `serviceseconds`
--

CREATE TABLE `serviceseconds` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` longtext NOT NULL,
  `button` varchar(255) NOT NULL,
  `icon` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `serviceseconds`
--

INSERT INTO `serviceseconds` (`id`, `title`, `description`, `button`, `icon`, `created_at`, `updated_at`) VALUES
(3, 'TRANING CENTER', 'There are available many kinds of training centers such as IELTS or IT and these are very famous institutions in Sylhet City. More additional advantages to be found here', 'Learn More', 'Veniam officiis dig', '2023-04-11 09:25:14', '2023-04-29 23:11:59'),
(4, 'SHOPPING MALL', 'In Al Hamra Shopping City, you will find the hotel of your choice to stay the day. One of the most popular hotels in Sylhet, Richmond is located in Al -Hamra.', 'Learn More', 'Aut nulla eligendi q', '2023-04-11 09:25:21', '2023-04-29 23:11:30'),
(5, 'HOTELS', 'In Al Hamra Shopping City, you will find the hotel of your choice to stay the day. One of the most popular hotels in Sylhet, Richmond is located in Al -Hamra.', 'Learn More', 'Voluptatum qui et as', '2023-04-11 09:26:40', '2023-04-29 23:10:09');

-- --------------------------------------------------------

--
-- Table structure for table `sitesettings`
--

CREATE TABLE `sitesettings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `copyright` longtext NOT NULL,
  `button` longtext NOT NULL,
  `logo` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sitesettings`
--

INSERT INTO `sitesettings` (`id`, `copyright`, `button`, `logo`, `created_at`, `updated_at`) VALUES
(2, '© 2022 All Rights Reserved By Al Hamra International. Developed By', 'Explore More', '202304281633Al-hamra-logo-01-1-300x268.png', '2023-04-28 10:33:11', '2023-04-28 10:33:11');

-- --------------------------------------------------------

--
-- Table structure for table `trustedsliders`
--

CREATE TABLE `trustedsliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `trustedsliders`
--

INSERT INTO `trustedsliders` (`id`, `image`, `created_at`, `updated_at`) VALUES
(7, '202304300554slide1.PNG', '2023-04-29 23:54:44', '2023-04-29 23:54:44'),
(8, '202304300554slide2.PNG', '2023-04-29 23:54:54', '2023-04-29 23:54:54'),
(9, '202304300555slide3.PNG', '2023-04-29 23:55:04', '2023-04-29 23:55:04'),
(10, '202304300555slide2.PNG', '2023-04-29 23:55:27', '2023-04-29 23:55:27'),
(11, '202304300555slide3.PNG', '2023-04-29 23:55:38', '2023-04-29 23:55:38');

-- --------------------------------------------------------

--
-- Table structure for table `trustedtitles`
--

CREATE TABLE `trustedtitles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` longtext NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `trustedtitles`
--

INSERT INTO `trustedtitles` (`id`, `title`, `description`, `created_at`, `updated_at`) VALUES
(4, 'We\'re Trusted by 2500+ Professional Customer', 'The shop owners and the people working in the shop are committed to speaking with the utmost respect to the customers.', '2023-04-29 23:50:32', '2023-04-29 23:50:32');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@gmail.com', NULL, '$2y$10$J4bkU0Zvpf/TcszPc2P0eOI/oAQ17P0Pjr6BQG1XJOfs8in690R36', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `whatwedocontents`
--

CREATE TABLE `whatwedocontents` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `sub_title` varchar(255) NOT NULL,
  `description` longtext NOT NULL,
  `icon` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `whatwedocontents`
--

INSERT INTO `whatwedocontents` (`id`, `title`, `sub_title`, `description`, `icon`, `created_at`, `updated_at`) VALUES
(1, 'Office Space', 'Exclusive', 'There are rented here for any type of agency or company, Al Hamra is a popular shopping city for office space.', 'sss', '2023-04-29 23:43:40', '2023-04-29 23:43:40'),
(2, 'Restaurant', 'Exclusive', 'There are restaurants for men and women and all types of food are available in the restaurant.', 'sss', '2023-04-29 23:47:05', '2023-04-29 23:47:05'),
(3, 'Mosque', 'Exclusive', 'There are mosques for men and women and there is a separate place for women to perform their prayers.', 'ssss', '2023-04-29 23:48:04', '2023-04-29 23:48:04'),
(4, 'Consultancy', 'Exclusive', 'There are consultancies to go abroad and they have been involved in this work for a long time.', 'assss', '2023-04-29 23:49:22', '2023-04-29 23:49:22');

-- --------------------------------------------------------

--
-- Table structure for table `whatwedotitles`
--

CREATE TABLE `whatwedotitles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `subtitle` varchar(255) NOT NULL,
  `bg_img` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `whatwedotitles`
--

INSERT INTO `whatwedotitles` (`id`, `title`, `subtitle`, `bg_img`, `created_at`, `updated_at`) VALUES
(1, 'WHAT WE DO', 'More additional advantages to be found here', '202304300542e5b12cad-e9bc-4151-93a5-24de3e1aaad3.jpg', '2023-04-29 23:42:14', '2023-04-29 23:42:14');

-- --------------------------------------------------------

--
-- Table structure for table `whychooseuscontents`
--

CREATE TABLE `whychooseuscontents` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` longtext NOT NULL,
  `icon` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `whychooseustitles`
--

CREATE TABLE `whychooseustitles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `sub_title` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `whychooseustitles`
--

INSERT INTO `whychooseustitles` (`id`, `title`, `sub_title`, `created_at`, `updated_at`) VALUES
(3, 'Why You Choose US', 'See Our Top Facilities', '2023-04-11 02:32:17', '2023-04-28 11:33:56');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aboutheaders`
--
ALTER TABLE `aboutheaders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `abouts`
--
ALTER TABLE `abouts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `besthotelimages`
--
ALTER TABLE `besthotelimages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `besthoteltitles`
--
ALTER TABLE `besthoteltitles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blogcomments`
--
ALTER TABLE `blogcomments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blogcontents`
--
ALTER TABLE `blogcontents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blogheaders`
--
ALTER TABLE `blogheaders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blogmains`
--
ALTER TABLE `blogmains`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blogpageheaders`
--
ALTER TABLE `blogpageheaders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `buffetparadiseimages`
--
ALTER TABLE `buffetparadiseimages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `buffetparadisetitles`
--
ALTER TABLE `buffetparadisetitles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contactcontents`
--
ALTER TABLE `contactcontents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contactheaders`
--
ALTER TABLE `contactheaders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contactmessages`
--
ALTER TABLE `contactmessages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contactsectionimages`
--
ALTER TABLE `contactsectionimages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contentdeadlines`
--
ALTER TABLE `contentdeadlines`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `footers`
--
ALTER TABLE `footers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `headers`
--
ALTER TABLE `headers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `maindeadlines`
--
ALTER TABLE `maindeadlines`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ouractivitiescontents`
--
ALTER TABLE `ouractivitiescontents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ouractivitiestitles`
--
ALTER TABLE `ouractivitiestitles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ourgalleryimages`
--
ALTER TABLE `ourgalleryimages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ourgallerytitles`
--
ALTER TABLE `ourgallerytitles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ourmanagementtitles`
--
ALTER TABLE `ourmanagementtitles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ourplancontents`
--
ALTER TABLE `ourplancontents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ourqualities`
--
ALTER TABLE `ourqualities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `serviceheaders`
--
ALTER TABLE `serviceheaders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `serviceseconds`
--
ALTER TABLE `serviceseconds`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sitesettings`
--
ALTER TABLE `sitesettings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `trustedsliders`
--
ALTER TABLE `trustedsliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `trustedtitles`
--
ALTER TABLE `trustedtitles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `whatwedocontents`
--
ALTER TABLE `whatwedocontents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `whatwedotitles`
--
ALTER TABLE `whatwedotitles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `whychooseuscontents`
--
ALTER TABLE `whychooseuscontents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `whychooseustitles`
--
ALTER TABLE `whychooseustitles`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aboutheaders`
--
ALTER TABLE `aboutheaders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `abouts`
--
ALTER TABLE `abouts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `besthotelimages`
--
ALTER TABLE `besthotelimages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `besthoteltitles`
--
ALTER TABLE `besthoteltitles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `blogcomments`
--
ALTER TABLE `blogcomments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `blogcontents`
--
ALTER TABLE `blogcontents`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `blogheaders`
--
ALTER TABLE `blogheaders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `blogmains`
--
ALTER TABLE `blogmains`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `blogpageheaders`
--
ALTER TABLE `blogpageheaders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `buffetparadiseimages`
--
ALTER TABLE `buffetparadiseimages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `buffetparadisetitles`
--
ALTER TABLE `buffetparadisetitles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contactcontents`
--
ALTER TABLE `contactcontents`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contactheaders`
--
ALTER TABLE `contactheaders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `contactmessages`
--
ALTER TABLE `contactmessages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `contactsectionimages`
--
ALTER TABLE `contactsectionimages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `contentdeadlines`
--
ALTER TABLE `contentdeadlines`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=136;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `footers`
--
ALTER TABLE `footers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `headers`
--
ALTER TABLE `headers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `maindeadlines`
--
ALTER TABLE `maindeadlines`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;

--
-- AUTO_INCREMENT for table `ouractivitiescontents`
--
ALTER TABLE `ouractivitiescontents`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `ouractivitiestitles`
--
ALTER TABLE `ouractivitiestitles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `ourgalleryimages`
--
ALTER TABLE `ourgalleryimages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `ourgallerytitles`
--
ALTER TABLE `ourgallerytitles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `ourmanagementtitles`
--
ALTER TABLE `ourmanagementtitles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `ourplancontents`
--
ALTER TABLE `ourplancontents`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `ourqualities`
--
ALTER TABLE `ourqualities`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `serviceheaders`
--
ALTER TABLE `serviceheaders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `serviceseconds`
--
ALTER TABLE `serviceseconds`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `sitesettings`
--
ALTER TABLE `sitesettings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `trustedsliders`
--
ALTER TABLE `trustedsliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `trustedtitles`
--
ALTER TABLE `trustedtitles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `whatwedocontents`
--
ALTER TABLE `whatwedocontents`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `whatwedotitles`
--
ALTER TABLE `whatwedotitles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `whychooseuscontents`
--
ALTER TABLE `whychooseuscontents`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `whychooseustitles`
--
ALTER TABLE `whychooseustitles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
