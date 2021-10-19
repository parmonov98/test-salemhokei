-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Окт 19 2021 г., 07:31
-- Версия сервера: 10.5.11-MariaDB
-- Версия PHP: 7.4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `salemhok_db`
--

-- --------------------------------------------------------

--
-- Структура таблицы `admin_menus`
--

CREATE TABLE `admin_menus` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `admin_menus`
--

INSERT INTO `admin_menus` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Главный меню', '2021-07-29 01:58:03', '2021-07-29 01:58:03'),
(2, 'Родителям', '2021-09-17 01:07:05', '2021-09-17 01:18:29');

-- --------------------------------------------------------

--
-- Структура таблицы `admin_menu_items`
--

CREATE TABLE `admin_menu_items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `label` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `label_ru` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `label_kk` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link_kk` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link_ru` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parent` bigint(20) UNSIGNED NOT NULL DEFAULT 0,
  `sort` int(11) NOT NULL DEFAULT 0,
  `class` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `menu` bigint(20) UNSIGNED NOT NULL,
  `depth` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `admin_menu_items`
--

INSERT INTO `admin_menu_items` (`id`, `label`, `label_ru`, `label_kk`, `link`, `link_kk`, `link_ru`, `parent`, `sort`, `class`, `menu`, `depth`, `created_at`, `updated_at`) VALUES
(3, 'ХОККЕЙ', 'ХОККЕЙ', 'HOKEI', 'hockey', 'http://test.salemhokei.loc/kk/hockey', 'http://test.salemhokei.loc/ru/hockey', 0, 1, NULL, 1, 0, '2021-07-29 02:29:57', '2021-08-30 12:41:29'),
(4, 'ПОПРОБУЙ', 'ПОПРОБУЙ', 'Мектептер', 'school', 'http://test.salemhokei.kz/kk/schools', 'http://test.salemhokei.kz/ru/schools', 0, 2, NULL, 1, 0, '2021-07-29 12:17:48', '2021-08-30 12:41:42'),
(6, 'С ЧЕГО НАЧАТЬ?', 'С ЧЕГО НАЧАТЬ?', 'Неден бастау қажет?', 'faq', 'http://test.salemhokei.kz/kk/faq', 'http://test.salemhokei.kz/ru/faq', 0, 4, NULL, 1, 0, '2021-07-29 12:22:29', '2021-08-30 12:42:36'),
(7, 'ПОСМОТРИ', 'ПОСМОТРИ', 'Жаңалықтар', 'Новости', 'http://test.salemhokei.kz/kk/news', 'http://test.salemhokei.kz/uz/news', 0, 3, NULL, 1, 0, '2021-07-29 12:24:20', '2021-08-30 12:41:52'),
(8, 'ПРИВЕТ!', 'ПРИВЕТ!', 'SALEM!', '/', 'http://test.salemhokei.kz/kk/', 'http://test.salemhokei.kz/ru/', 0, 0, NULL, 1, 0, '2021-07-29 21:36:16', '2021-08-30 12:41:11'),
(10, 'РОДИТЕЛЯМ', 'РОДИТЕЛЯМ', 'РОДИТЕЛЯМ', 'parents', 'http://test.salemhokei.kz/kk/parents', 'http://test.salemhokei.kz/ru/parents', 0, 5, NULL, 1, 0, '2021-08-30 12:42:26', '2021-09-12 13:44:13'),
(11, 'СЫГРАЙ', 'СЫГРАЙ', 'СЫГРАЙ', 'http://test.salemhokei.kz/kk/play', 'http://test.salemhokei.kz/kk/play', 'http://test.salemhokei.kz/ru/play', 0, 6, NULL, 1, 0, '2021-09-12 14:25:46', '2021-09-12 14:26:14'),
(12, 'Тренировки', 'Тренировки', 'Машықтану', 'Тренировки', NULL, NULL, 0, 0, '5-trenirovki', 2, 0, '2021-09-17 01:08:04', '2021-09-17 06:48:28'),
(13, 'Тамақтану', 'Питание', 'Тамақтану', 'Тамақтану', NULL, NULL, 0, 1, '6-pitanie', 2, 0, '2021-09-17 01:11:15', '2021-09-17 06:56:45'),
(14, 'Психология', 'Психология', 'Психология', 'Психология', NULL, NULL, 0, 2, '7-psikhologiya', 2, 0, '2021-09-17 01:11:47', '2021-09-17 06:57:32'),
(15, 'test tab', 'test tab ru', 'test tab kk', 'test tab', NULL, NULL, 0, 3, NULL, 2, 0, '2021-09-17 06:58:24', '2021-09-17 06:58:43');

-- --------------------------------------------------------

--
-- Структура таблицы `albums`
--

CREATE TABLE `albums` (
  `id` int(10) UNSIGNED NOT NULL,
  `name_ru` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name_kk` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_title_ru` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_title_kk` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_title_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_description_ru` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_description_kk` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_description_en` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `open_graph_title_ru` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `open_graph_title_kk` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `open_graph_title_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `open_graph_description_ru` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `open_graph_description_kk` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `open_graph_description_en` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alias` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` tinyint(1) NOT NULL DEFAULT 3,
  `published_at` timestamp NOT NULL,
  `is_published` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `albums`
--

INSERT INTO `albums` (`id`, `name_ru`, `name_kk`, `name_en`, `meta_title_ru`, `meta_title_kk`, `meta_title_en`, `meta_description_ru`, `meta_description_kk`, `meta_description_en`, `open_graph_title_ru`, `open_graph_title_kk`, `open_graph_title_en`, `open_graph_description_ru`, `open_graph_description_kk`, `open_graph_description_en`, `avatar`, `alias`, `type`, `published_at`, `is_published`, `created_at`, `updated_at`) VALUES
(1, 'Альбом 1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '/images/1591596329.png', '1-albom-1', 3, '2020-04-04 05:05:00', 1, '2020-03-30 11:52:18', '2020-06-08 06:05:33');

-- --------------------------------------------------------

--
-- Структура таблицы `album_images`
--

CREATE TABLE `album_images` (
  `id` int(10) UNSIGNED NOT NULL,
  `album_id` int(10) UNSIGNED NOT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_published` tinyint(1) DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `album_images`
--

INSERT INTO `album_images` (`id`, `album_id`, `avatar`, `is_published`, `created_at`, `updated_at`) VALUES
(4, 1, '/img/gallery/1591596418.png', 0, '2020-06-08 06:06:58', '2020-06-08 06:06:58');

-- --------------------------------------------------------

--
-- Структура таблицы `articles`
--

CREATE TABLE `articles` (
  `id` int(10) UNSIGNED NOT NULL,
  `name_ru` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_kk` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description_ru` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description_kk` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description_en` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_title_ru` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_title_kk` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_title_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_description_ru` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_description_kk` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_description_en` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `open_graph_title_ru` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `open_graph_title_kk` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `open_graph_title_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `open_graph_description_ru` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `open_graph_description_kk` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `open_graph_description_en` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alias` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `avatar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` tinyint(1) NOT NULL DEFAULT 1,
  `is_published` tinyint(1) NOT NULL DEFAULT 0,
  `published_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `articles`
--

INSERT INTO `articles` (`id`, `name_ru`, `name_kk`, `name_en`, `description_ru`, `description_kk`, `description_en`, `meta_title_ru`, `meta_title_kk`, `meta_title_en`, `meta_description_ru`, `meta_description_kk`, `meta_description_en`, `open_graph_title_ru`, `open_graph_title_kk`, `open_graph_title_en`, `open_graph_description_ru`, `open_graph_description_kk`, `open_graph_description_en`, `alias`, `avatar`, `type`, `is_published`, `published_at`, `created_at`, `updated_at`) VALUES
(1, 'Первая запись', 'Биринши', 'First', '<p>12345</p>', '<p>1234567</p>', '<p>12345</p>', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1-pervaya-zapis', '/images/1591595892.png', 1, 1, '2020-03-31 10:24:00', '2020-03-26 10:27:13', '2020-08-18 15:46:57'),
(2, 'ddfgdfgd', NULL, NULL, '<p>dsdfgffgdfgdf</p>', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2-ddfgdfgd', NULL, 1, 0, '2021-09-17 03:38:00', '2021-09-17 03:38:24', '2021-09-17 03:38:24');

-- --------------------------------------------------------

--
-- Структура таблицы `article_author`
--

CREATE TABLE `article_author` (
  `id` int(10) UNSIGNED NOT NULL,
  `article_id` int(10) UNSIGNED DEFAULT NULL,
  `author_id` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `article_author`
--

INSERT INTO `article_author` (`id`, `article_id`, `author_id`, `created_at`, `updated_at`) VALUES
(35, NULL, 2, NULL, NULL),
(36, NULL, 2, NULL, NULL),
(37, 3, 2, NULL, NULL),
(38, NULL, 2, NULL, NULL),
(39, NULL, 2, NULL, NULL),
(40, NULL, 2, NULL, NULL),
(41, NULL, 2, NULL, NULL),
(42, NULL, 2, NULL, NULL),
(43, NULL, 2, NULL, NULL),
(44, NULL, 2, NULL, NULL),
(45, NULL, 2, NULL, NULL),
(46, NULL, 2, NULL, NULL),
(47, NULL, 2, NULL, NULL),
(48, NULL, 2, NULL, NULL),
(49, NULL, 2, NULL, NULL),
(50, NULL, 2, NULL, NULL),
(51, NULL, 2, NULL, NULL),
(52, NULL, 2, NULL, NULL),
(53, NULL, 2, NULL, NULL),
(54, NULL, 2, NULL, NULL),
(55, NULL, 2, NULL, NULL),
(56, NULL, 2, NULL, NULL),
(57, NULL, 2, NULL, NULL),
(58, NULL, 2, NULL, NULL),
(59, NULL, 2, NULL, NULL),
(60, NULL, 2, NULL, NULL),
(61, NULL, 2, NULL, NULL),
(62, 38, 2, NULL, NULL),
(35, NULL, 2, NULL, NULL),
(36, NULL, 2, NULL, NULL),
(37, 3, 2, NULL, NULL),
(38, NULL, 2, NULL, NULL),
(39, NULL, 2, NULL, NULL),
(40, NULL, 2, NULL, NULL),
(41, NULL, 2, NULL, NULL),
(42, NULL, 2, NULL, NULL),
(43, NULL, 2, NULL, NULL),
(44, NULL, 2, NULL, NULL),
(45, NULL, 2, NULL, NULL),
(46, NULL, 2, NULL, NULL),
(47, NULL, 2, NULL, NULL),
(48, NULL, 2, NULL, NULL),
(49, NULL, 2, NULL, NULL),
(50, NULL, 2, NULL, NULL),
(51, NULL, 2, NULL, NULL),
(52, NULL, 2, NULL, NULL),
(53, NULL, 2, NULL, NULL),
(54, NULL, 2, NULL, NULL),
(55, NULL, 2, NULL, NULL),
(56, NULL, 2, NULL, NULL),
(57, NULL, 2, NULL, NULL),
(58, NULL, 2, NULL, NULL),
(59, NULL, 2, NULL, NULL),
(60, NULL, 2, NULL, NULL),
(61, NULL, 2, NULL, NULL),
(62, 38, 2, NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `article_category`
--

CREATE TABLE `article_category` (
  `id` int(10) UNSIGNED NOT NULL,
  `article_id` int(10) UNSIGNED DEFAULT NULL,
  `category_id` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `article_category`
--

INSERT INTO `article_category` (`id`, `article_id`, `category_id`, `created_at`, `updated_at`) VALUES
(81, NULL, 2, NULL, NULL),
(82, NULL, 2, NULL, NULL),
(83, 3, 2, NULL, NULL),
(84, NULL, 2, NULL, NULL),
(87, NULL, 1, NULL, NULL),
(89, NULL, 19, NULL, NULL),
(90, NULL, 1, NULL, NULL),
(92, NULL, 19, NULL, NULL),
(93, NULL, 5, NULL, NULL),
(94, NULL, 1, NULL, NULL),
(95, NULL, 1, NULL, NULL),
(96, NULL, 1, NULL, NULL),
(97, NULL, 19, NULL, NULL),
(98, NULL, 1, NULL, NULL),
(99, NULL, 1, NULL, NULL),
(100, NULL, 1, NULL, NULL),
(101, NULL, 1, NULL, NULL),
(102, NULL, 1, NULL, NULL),
(104, NULL, 19, NULL, NULL),
(105, NULL, 1, NULL, NULL),
(106, NULL, 1, NULL, NULL),
(108, NULL, 19, NULL, NULL),
(110, NULL, 19, NULL, NULL),
(111, NULL, 1, NULL, NULL),
(112, NULL, 1, NULL, NULL),
(113, NULL, 1, NULL, NULL),
(119, NULL, 1, NULL, NULL),
(121, 38, 19, NULL, NULL),
(81, NULL, 2, NULL, NULL),
(82, NULL, 2, NULL, NULL),
(83, 3, 2, NULL, NULL),
(84, NULL, 2, NULL, NULL),
(87, NULL, 1, NULL, NULL),
(89, NULL, 19, NULL, NULL),
(90, NULL, 1, NULL, NULL),
(92, NULL, 19, NULL, NULL),
(93, NULL, 5, NULL, NULL),
(94, NULL, 1, NULL, NULL),
(95, NULL, 1, NULL, NULL),
(96, NULL, 1, NULL, NULL),
(97, NULL, 19, NULL, NULL),
(98, NULL, 1, NULL, NULL),
(99, NULL, 1, NULL, NULL),
(100, NULL, 1, NULL, NULL),
(101, NULL, 1, NULL, NULL),
(102, NULL, 1, NULL, NULL),
(104, NULL, 19, NULL, NULL),
(105, NULL, 1, NULL, NULL),
(106, NULL, 1, NULL, NULL),
(108, NULL, 19, NULL, NULL),
(110, NULL, 19, NULL, NULL),
(111, NULL, 1, NULL, NULL),
(112, NULL, 1, NULL, NULL),
(113, NULL, 1, NULL, NULL),
(119, NULL, 1, NULL, NULL),
(121, 38, 19, NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `article_image`
--

CREATE TABLE `article_image` (
  `id` int(10) UNSIGNED NOT NULL,
  `article_id` int(10) UNSIGNED DEFAULT NULL,
  `image_id` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `article_tag`
--

CREATE TABLE `article_tag` (
  `id` int(10) UNSIGNED NOT NULL,
  `article_id` int(10) UNSIGNED DEFAULT NULL,
  `tag_id` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `article_tag`
--

INSERT INTO `article_tag` (`id`, `article_id`, `tag_id`, `created_at`, `updated_at`) VALUES
(25, NULL, 3, NULL, NULL),
(26, NULL, 3, NULL, NULL),
(27, 3, 3, NULL, NULL),
(28, NULL, 3, NULL, NULL),
(41, NULL, 3, NULL, NULL),
(42, NULL, 3, NULL, NULL),
(43, NULL, 2, NULL, NULL),
(44, NULL, 1, NULL, NULL),
(45, NULL, 2, NULL, NULL),
(46, NULL, 5, NULL, NULL),
(47, NULL, 6, NULL, NULL),
(48, NULL, 7, NULL, NULL),
(49, NULL, 8, NULL, NULL),
(50, NULL, 9, NULL, NULL),
(51, NULL, 10, NULL, NULL),
(52, 38, 9, NULL, NULL),
(25, NULL, 3, NULL, NULL),
(26, NULL, 3, NULL, NULL),
(27, 3, 3, NULL, NULL),
(28, NULL, 3, NULL, NULL),
(41, NULL, 3, NULL, NULL),
(42, NULL, 3, NULL, NULL),
(43, NULL, 2, NULL, NULL),
(44, NULL, 1, NULL, NULL),
(45, NULL, 2, NULL, NULL),
(46, NULL, 5, NULL, NULL),
(47, NULL, 6, NULL, NULL),
(48, NULL, 7, NULL, NULL),
(49, NULL, 8, NULL, NULL),
(50, NULL, 9, NULL, NULL),
(51, NULL, 10, NULL, NULL),
(52, 38, 9, NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `authors`
--

CREATE TABLE `authors` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alias` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `annotation` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `avatar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_keywords` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook_url` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instagram_url` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `youtube_url` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `vk_url` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter_url` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `site_url` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `views` int(11) NOT NULL DEFAULT 0,
  `is_published` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `authors`
--

INSERT INTO `authors` (`id`, `name`, `alias`, `annotation`, `description`, `avatar`, `meta_title`, `meta_description`, `meta_keywords`, `facebook_url`, `instagram_url`, `youtube_url`, `vk_url`, `twitter_url`, `site_url`, `views`, `is_published`, `created_at`, `updated_at`) VALUES
(2, 'Мухамед-Канапия', '2-mukhamed-kanapiya', '<p><span style=\"color: #545454; font-family: Ubuntu, sans-serif; font-size: 16px; text-align: center;\">Главный редактор блога Panama.kz. Пишу про интернет маркетинг, в основном про поисковое продвижение (SEO).</span></p>', '<p><span style=\"color: #545454; font-family: Ubuntu, sans-serif; font-size: 16px; text-align: center;\">Главный редактор блога Panama.kz. Пишу про интернет маркетинг, в основном про поисковое продвижение (SEO).</span></p>', '/images/1573557000.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'https://twitter.com/kanapiyaru', NULL, 0, 1, '2019-11-12 06:48:17', '2019-12-09 09:10:04'),
(2, 'Мухамед-Канапия', '2-mukhamed-kanapiya', '<p><span style=\"color: #545454; font-family: Ubuntu, sans-serif; font-size: 16px; text-align: center;\">Главный редактор блога Panama.kz. Пишу про интернет маркетинг, в основном про поисковое продвижение (SEO).</span></p>', '<p><span style=\"color: #545454; font-family: Ubuntu, sans-serif; font-size: 16px; text-align: center;\">Главный редактор блога Panama.kz. Пишу про интернет маркетинг, в основном про поисковое продвижение (SEO).</span></p>', '/images/1573557000.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'https://twitter.com/kanapiyaru', NULL, 0, 1, '2019-11-12 06:48:17', '2019-12-09 09:10:04');

-- --------------------------------------------------------

--
-- Структура таблицы `events`
--

CREATE TABLE `events` (
  `id` int(11) NOT NULL,
  `name_ru` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_kk` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city_ru` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city_kk` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alias` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description_ru` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description_kk` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description_en` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` timestamp NULL DEFAULT NULL,
  `is_published` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `events`
--

INSERT INTO `events` (`id`, `name_ru`, `name_kk`, `name_en`, `city_ru`, `city_kk`, `city_en`, `alias`, `description_ru`, `description_kk`, `description_en`, `date`, `is_published`, `created_at`, `updated_at`) VALUES
(1, 'Мероприятие 1', 'Мероприятие 1', 'Event', 'Астана', 'Астана каласы', NULL, '1-meropriyatie-1', '<p>123456</p>', '<p>223</p>', '<p>2345</p>', '2020-03-28 11:27:00', 1, '2020-03-26 11:29:29', '2020-03-26 11:32:21');

-- --------------------------------------------------------

--
-- Структура таблицы `images`
--

CREATE TABLE `images` (
  `id` int(10) UNSIGNED NOT NULL,
  `article_id` int(10) UNSIGNED DEFAULT NULL,
  `src` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alt` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `views` int(11) NOT NULL DEFAULT 0,
  `is_published` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2015_01_20_084450_create_roles_table', 1),
(4, '2015_01_20_084525_create_role_user_table', 1),
(5, '2015_01_24_080208_create_permissions_table', 1),
(6, '2015_01_24_080433_create_permission_role_table', 1),
(7, '2015_12_04_003040_add_special_role_column', 1),
(8, '2017_08_11_073824_create_menus_wp_table', 1),
(9, '2017_08_11_074006_create_menu_items_wp_table', 1),
(10, '2017_10_17_170735_create_permission_user_table', 1),
(11, '2019_10_17_111340_add_iin_bin_columns_to_users_table', 1),
(12, '2019_10_17_164200_create_sections_table', 1),
(13, '2021_08_16_081000_create_album_images_table', 1),
(14, '2021_08_16_081000_create_albums_table', 1),
(15, '2021_08_16_081000_create_article_author_table', 1),
(16, '2021_08_16_081000_create_article_category_table', 1),
(17, '2021_08_16_081000_create_article_image_table', 1),
(18, '2021_08_16_081000_create_article_tag_table', 1),
(19, '2021_08_16_081000_create_articles_table', 1),
(20, '2021_08_16_081000_create_authors_table', 1),
(21, '2021_08_16_081000_create_events_table', 1),
(22, '2021_08_16_081000_create_images_table', 1),
(23, '2021_08_16_081000_create_pages_table', 1),
(24, '2021_08_16_081000_create_regions_table', 1),
(25, '2021_08_16_081000_create_section_region_table', 1),
(26, '2021_08_16_081000_create_section_user_table', 1),
(27, '2021_08_16_081000_create_videos_table', 1),
(28, '2021_08_16_081002_add_foreign_keys_to_section_region_table', 1),
(29, '2021_08_16_081002_add_foreign_keys_to_section_user_table', 1),
(30, '2021_08_18_091252_create_texts_table', 1),
(31, '2021_08_20_052038_create_uploads_table', 1),
(32, '2021_08_20_074207_add_columns_to_texts', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `pages`
--

CREATE TABLE `pages` (
  `id` int(11) NOT NULL,
  `name_ru` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_kk` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alias` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description_ru` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description_kk` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description_en` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_title_ru` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_title_kk` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_title_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_description_ru` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_description_kk` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_description_en` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `open_graph_title_ru` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `open_graph_title_kk` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `open_graph_title_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `open_graph_description_ru` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `open_graph_description_kk` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `open_graph_description_en` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `accordion_ru` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `accordion_kk` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `accordion_en` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `employees_ru` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `employees_kk` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `employees_en` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_published` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `pages`
--

INSERT INTO `pages` (`id`, `name_ru`, `name_kk`, `name_en`, `alias`, `description_ru`, `description_kk`, `description_en`, `meta_title_ru`, `meta_title_kk`, `meta_title_en`, `meta_description_ru`, `meta_description_kk`, `meta_description_en`, `open_graph_title_ru`, `open_graph_title_kk`, `open_graph_title_en`, `open_graph_description_ru`, `open_graph_description_kk`, `open_graph_description_en`, `accordion_ru`, `accordion_kk`, `accordion_en`, `employees_ru`, `employees_kk`, `employees_en`, `is_published`, `created_at`, `updated_at`) VALUES
(5, 'Тренировки', 'Машықтану', NULL, '5-trenirovki', '<div class=\"training-steps\">\r\n<h2><span style=\"color: #003165; font-size: 1.25em;\">ВАШИ ШАГИ</span><br /><span style=\"margin-left: 3.5em; color: #b1cb04;\">от первого звонка</span><br /><span style=\"margin-left: 1em; font-size: 1.1em; color: #cd0054;\">до первой тренировки</span></h2>\r\n<div class=\"steps text-center\">\r\n<div class=\"row row--multiline\">\r\n<div class=\"col-sm-4\">\r\n<div class=\"step step__blue\">\r\n<div class=\"step__icon\"><img src=\"http://test.salemhokei.loc/assets/img/step1.svg\" alt=\"\" /></div>\r\n<div class=\"step__text\"><strong>Выбрать</strong> школу <br />в&nbsp;вашем регионе <br />на&nbsp;<strong>Salemhokei.kz</strong></div>\r\n<div class=\"step__title\">Шаг 1</div>\r\n</div>\r\n</div>\r\n<div class=\"col-sm-4\">\r\n<div class=\"step step__pink\">\r\n<div class=\"step__icon\"><img src=\"http://test.salemhokei.loc/assets/img/step2.svg\" alt=\"\" /></div>\r\n<div class=\"step__text\"><strong>Оставить заявку</strong><br />на&nbsp;сайте школы <br />или позвонить</div>\r\n<div class=\"step__title\">Шаг 2</div>\r\n</div>\r\n</div>\r\n<div class=\"col-sm-4\">\r\n<div class=\"step step__green\">\r\n<div class=\"step__icon\"><img src=\"http://test.salemhokei.loc/assets/img/step3.svg\" alt=\"\" /></div>\r\n<div class=\"step__text\"><strong>Прийти</strong><br />на&nbsp;тренировку</div>\r\n<div class=\"step__title\">Шаг 3</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n<div class=\"white-block\">\r\n<div class=\"plain-text plain-text__24\">\r\n<p><strong style=\"color: #00aeef;\">Участники</strong><br />дети 5-8 лет (кроме воспитанников ДЮСШ)</p>\r\n<p><strong style=\"color: #cc0256;\">Количество детей</strong><br />в одной группе не более 25-30 чел.</p>\r\n<p>Тренировки проводятся на безвозмездной основе в выходные дни <strong>(суббота, воскресенье)</strong>.</p>\r\n<p>Для участия в тренировках детям на прокат выдается экипировка.</p>\r\n<p>Время занятия на льду &ndash; 45 минут.</p>\r\n<p>Участники &ndash; дети 5-8 лет (кроме воспитанников ДЮСШ).</p>\r\n<p>Количество детей в одной группе - не более 25-30 человек.</p>\r\n<p>На первую тренировку необходимо предоставить медицинскую справку, подтверждающую отсутствие противопоказаний для занятий спортом. Срок предоставления справки не должен составлять более 30 (тридцати) дней от даты ее выдачи.</p>\r\n<p><strong>На все занятия необходимо иметь с собой</strong>: спортивную форму, сменную спортивную обувь (кроссовки), нательное белье.</p>\r\n<p>Тренировки проводятся в позитивной игровой форме поперек площадки. Одновременно может быть организованно две площадки.</p>\r\n<p>На тренировках присутствует тренер набора, который дает рекомендации по поступлению в ДЮСШ.</p>\r\n<p>Для определения перспективы и степени вовлечения в хоккей необходимо проводить не более 3-5 занятий.</p>\r\n<p>Физическая подготовка юных спортсменов основывается на теории сенситивных периодов развития детей. Суть теории состоит в том, что в жизни каждого ребенка есть отрезки времени, когда развиваются и хорошо усваиваются определенные навыки и умения, и очень важно не пропустить эти периоды.</p>\r\n<p><strong>В период с 5 до 10 лет</strong> очень хорошо развиваются такие качества, как гибкость, ловкость, которая включает в себя координацию, равновесие, сложную моторику, базовые двигательные навыки.</p>\r\n<p><strong>С 5 до 7 лет</strong> закладываются основы техники катания. Укрепляется здоровье, происходит первое знакомство со льдом, клюшкой, шайбой. Техника катания очень важна, так как если она не правильно поставлена, то это будет влиять на эффективность хоккеиста, увеличивать его энергозатраты во время игр и тренировок, будет повышать риск травматизма.</p>\r\n<p><strong>Уже после 7 и до 10 лет</strong>&nbsp;идет работа над улучшением техники катания, совершенствуется катание вперед лицом и спиной, повороты, виражи и другие элементы.</p>\r\n<p>В этом же возрасте дети познают технику владения клюшкой. Начиная с простых упражнений, учатся правильно держать клюшку, ведению шайбы разным дриблингом, с удобной и неудобной стороны, и постепенно переходят к более сложным упражнениям, отрабатывая обманные движения, прием и передачу шайбы, броски.</p>\r\n<p><strong>Очень важно не перегрузить организм ребенка тренировками.</strong></p>\r\n</div>\r\n</div>\r\n</div>', '<div class=\"training-steps\">\r\n<h2><span style=\"color: #003165; font-size: 1.25em;\">СІЗДІҢ ҚАДАМДАРЫҢЫЗ</span><br /><span style=\"margin-left: 2.5em; color: #b1cb04;\">бірінші қоңыраудан бастап </span><br /><span style=\"font-size: 1.1em; color: #cd0054;\">бірінші жаттықтыруға дейін</span></h2>\r\n<div class=\"steps text-center\">\r\n<div class=\"row row--multiline\">\r\n<div class=\"col-sm-4\">\r\n<div class=\"step step__blue\">\r\n<div class=\"step__icon\"><img src=\"http://test.salemhokei.loc/assets/img/step1.svg\" alt=\"\" /></div>\r\n<div class=\"step__text\"><strong>Salemhokei.kz </strong> сайтында <br />өңіріңізде мектепті<br /><strong>таңдау</strong></div>\r\n<div class=\"step__title\">ҚАДАМ 1</div>\r\n</div>\r\n</div>\r\n<div class=\"col-sm-4\">\r\n<div class=\"step step__pink\">\r\n<div class=\"step__icon\"><img src=\"http://test.salemhokei.loc/assets/img/step2.svg\" alt=\"\" /></div>\r\n<div class=\"step__text\">Мектеп сайтында <br /><strong> өтініш қалдыру </strong><br />немесе қоңырау шалу</div>\r\n<div class=\"step__title\">ҚАДАМ 2</div>\r\n</div>\r\n</div>\r\n<div class=\"col-sm-4\">\r\n<div class=\"step step__green\">\r\n<div class=\"step__icon\"><img src=\"http://test.salemhokei.loc/assets/img/step3.svg\" alt=\"\" /></div>\r\n<div class=\"step__text\">Жаттықтыруға<br /><strong> келу</strong></div>\r\n<div class=\"step__title\">ҚАДАМ 3</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n<div class=\"white-block\">\r\n<div class=\"plain-text plain-text__24\">\r\n<p><strong style=\"color: #00aeef;\">Қатысушылар</strong><br />5-8 жастағы балалар (БЖАСМ тәрбиеленушілерінен басқа)</p>\r\n<p><strong style=\"color: #cc0256;\">Балалар саны</strong><br />Бір топта 25-30 балалардан көп емес.</p>\r\n<p>Жаттықтырулар демалыс күндері тегін өткізіледі <strong>(сенбі, жексенбі)</strong>.</p>\r\n<p>Жаттықтыру үшін балаларға жалға жабдық беріледі.</p>\r\n<p>Мұзда өткізілетін сабақтың уақыты &ndash; 45 минут.</p>\r\n<p>Қатысушылар &ndash; 5-8 жастағы балалар (БЖАСМ тәрбиеленушілерінен басқа).</p>\r\n<p>Балалар саны бір топта 25-30 балалардан көп емес.</p>\r\n<p>Бірінші жаттықтыруға спортпен айналысуға қарсы көрсетімдерді растайтын медициналық анықтаманы әкелу қажет. Медициналық анықтаманы тапсыру мерзімі берілген күннен бастап 30 (отыз) күннен аспауы тиіс.</p>\r\n<p><strong>Барлық сабақтарда </strong>: спорт киім, ауысымды спорт аяқ киімі (кроссовки), ішкі киім міндетті түрде болуы тиіс.</p>\r\n<p>Жаттықтырулар позитивті тұрғыда алаңда көлденең өткізіледі. Бір уақытта екі алаңды ұйымдастыруға болады.</p>\r\n<p>Жаттықтыруға БЖАСМ-не түсу үшін ұсыныстармен бөлісетін жаттықтырушы қатысады.</p>\r\n<p>Хоккеймен айналысу болашағын және қатысу дәрежесін анықтау үшін кемінде 3-5 сабақ өткізу қажет.</p>\r\n<p>Жас спортшылардың физикалық дайындығы балалардың сенситивті даму теориясына негізделген. Осы теорияға сәйкес әр баланың өмірінде белгілі бір дағдылар мен икемділіктер жақсы дамитын және меңгерілетін кезеңдер болады, сондықтан мұндай кезеңдерді өткізіп алмау аса маңызды.</p>\r\n<p><strong>5-10 жас арасында </strong>үйлесімділік, тепе-теңдік, күрделі моторика, басты қозғалу дағдылары кіретін икемділік, ептілік сияқты қасиеттер жақсы дамиды.</p>\r\n<p><strong>5-7 жас арасында </strong> сырғанау техникасы жақсы дамиды. Денсаулық жақсарады, мұзбен, доп таяқпен, шайбамен алғашқы танысу орын алады. Сырғанау техникасы өте маңызды, себебі дұрыс орнатылмаған техника хоккейшінің тиімділігіне әсер етеді, ойын және жаттықтыру кезінде оның қуат шығындарын үлкейтіп, жарақаттану қауіп-қатерін үлкейтеді.</p>\r\n<p><strong>7-10 жас аралығынан кейін </strong>&nbsp;сырғанау техникасын жақсарту бойыша жұмыстар жүргізіледі, бетпен және артымен алға қарай, бұрылу, бұрылыс және басқа элементтер жетілдіріледі</p>\r\n<p>Осы жас аралығында балалар доп таяқты қолдану техникасын таниды. Қарапайым жаттықтырулардан бастап, доп таяқты дұрыс ұстауға, шайбаны ыңғайлы және ыңғайсыз жақтан әр түрлі дриблингпен жүргізуге үйренеді және алдамшы адымдарды, шайбаны қабылдауды және беруді, лақтыруды игеріп, бірте-бірте одан да күрделі жаттықтыруларға көшеді.</p>\r\n<p><strong>Баланың ағзасын жаттықтырулармен ауырлатпау өте маңызды.</strong></p>\r\n</div>\r\n</div>\r\n</div>', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '[]', '[]', '[]', '[]', '[]', '[]', 1, '2021-09-17 05:40:38', '2021-09-17 05:40:38'),
(6, 'Питание', 'Тамақтану', NULL, '6-pitanie', '<div class=\"white-block\">\r\n<div class=\"plain-text plain-text__24\">\r\n<p><strong>ОСНОВНЫЕ АСПЕКТЫ ПИТАНИЯ ЮНЫХ ХОККЕИСТОВ</strong></p>\r\n<p>В современном хоккее интенсивность и количество игр и тренировок увеличилось. Соответственно, значимость питания для активной работоспособности и хорошего состояния здоровья стала еще выше и, как следствие, тренеры и игроки должны уделять больше внимания различным вопросам питания.</p>\r\n<p>Правильное и сбалансированное питание способно предупреждать травмы, усиливать иммунитет, что дает возможность спортсмену активнее тренироваться и в условиях соревнований использовать свои внутренние ресурсы полностью, без ограничений.</p>\r\n<p>Три составляющих фактора: еда, тренировка и отдых/восстановление должны рассматриваться как единое целое, что оказывает существенное влияние на работоспособность спортсменов. Так называемый &laquo;треугольник работоспособности&raquo; является равносторонним и при изменении одной из сторон меняются две другие составляющие.<br />Например, при увеличении количества и интенсивности тренировок, необходимо позаботиться и об увеличении самой еды и ее энергоемкости, а также об увеличении продолжительности отдыха и восстановительных мероприятий.</p>\r\n<p>Основой для развития выносливости спортсмена является энергетический баланс организма. Если юный спортсмен ест очень мало в соотношении к количеству и интенсивности тренировок, то энергия используется из ранее сформированных запасов питательных веществ. Возникает ситуация, когда протеин используется не как &laquo;строительный материал&raquo;, а для компенсирования энергетических затрат организма.</p>\r\n<p>Затраты энергии при различных видах деятельности существенно отличаются. Интенсивная работа мышц, где задействована большая часть мышечных групп в течение длительного времени, требует больших затрат энергии. Обычно профессиональный спортсмен использует 3000 &ndash; 6000 ккал в день, а во время интенсивной тренировки и соревнований до 8000 ккал. А зачастую фактическая потребность в энергии во время тренировочного занятия выше, чем на соревнованиях, где спортсмен может компенсировать затраты энергии мастерством спортсмена, рациональной техникой и умелыми тактическими действиями.</p>\r\n<p>Грамотно организованный и сбалансированный режим питания поможет юному хоккеисту эффективно воспринимать тренировочную нагрузку, быстро восстанавливаться и максимально реализовывать свой потенциал в соревнованиях.</p>\r\n<p><strong>ПРИМЕРЫ ПО СОДЕРЖАНИЮ ЭНЕРГИИ В НЕКОТОРЫХ ПРОДУКТАХ ПИТАНИЯ</strong></p>\r\n<table>\r\n<tbody>\r\n<tr>\r\n<td>Хлопья, мюсли</td>\r\n<td>40 г&nbsp;</td>\r\n<td>168 ккал</td>\r\n</tr>\r\n<tr>\r\n<td>Овсяная каша&nbsp;</td>\r\n<td>225 г</td>\r\n<td>137 ккал</td>\r\n</tr>\r\n<tr>\r\n<td>Вареная колбаса с хлебом</td>\r\n<td>1</td>\r\n<td>316 ккал</td>\r\n</tr>\r\n<tr>\r\n<td>Яйцо&nbsp;</td>\r\n<td>1</td>\r\n<td>80 ккал</td>\r\n</tr>\r\n<tr>\r\n<td>Яблоко&nbsp;</td>\r\n<td>1</td>\r\n<td>55 ккал</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n<p><strong><br />УГЛЕВОДЫ</strong></p>\r\n<p>- углеводы: сахар, крахмал, пищевые волокна;<br />- сахар и крахмал дают энергию, пищевые волокна &ndash; дают объем содержимого в желудке.<br />- продукты, богатые углеводами: рис, макароны, хлеб, каши, бобы, чечевица, картофель, корнеплоды, овощи, фрукты и ягоды;<br />- часть расщепленного углевода в виде гликогена используется в организме для поддержания сахара в крови и для поддержания уровня снабжения энергией мозга и нервной системы;<br />- мышечный гликоген &ndash; источник самой доступной энергии при мышечной работе.</p>\r\n<p>Потребность в углеводах в день у спортсмена: 6-10 г на 1 кг веса.<br />Наиболее полезными и эффективными для спортсменов принято считать продукты, содержащие медленный гликоген: рис и макароны твердых сортов.</p>\r\n<p><strong>ПРОТЕИНЫ</strong></p>\r\n<p>Главная функция: восстановление и поддержка всех клеток организма.<br />Потребность в протеинах у спортсменов: 0,8 &ndash; 1,6 г на 1 кг веса в день.<br />Протеины высокой биологической ценности содержаться в: мясе, рыбе, яйце, молоке, сыре.<br />Протеины ДОЛЖНЫ ПОСТУПАТЬ в организм из натуральных продуктов, а не из пищевых добавок.</p>\r\n<p><strong>ЖИРЫ</strong></p>\r\n<p>Различаются на жиры растительного и животного происхождения.<br />37% энергии мы получаем из жиров.<br />Продукты, содержащие жиры: масло, сметана, кефир, сыр, шоколад, печенье.<br />Норма потребления для спортсменов: 30 &ndash; 35%.</p>\r\n<p><strong>ВИТАМИНЫ, МИНЕРАЛЫ И АНТИОКСИДАНТЫ</strong></p>\r\n<p>Витамины А, D, E, K &ndash; жирорастворимые и сохраняются в организме.<br />Витамины В и С растворимы в воде и быстро выводятся из организма.<br />Большинство витаминов выступают как антиоксиданты для выведения свободных радикалов из организма.</p>\r\n<p><strong>ЖИДКОСТЬ</strong></p>\r\n<p>Во время тяжелой физической тренировки потеря жидкости может составлять 1-2% от массы тела, а работоспособность может снижаться на 75-80%.<br />Подходящая температура жидкости для приема во время нагрузки &ndash; + 15.<br />Лучше пить понемногу и часто, по 150 г каждые 15-20 минут.<br />Для подростков рекомендуется пить простую воду, а не спортивные напитки или газированные напитки, исключить Кока-колу, Пепси-колу, Фанту, Спрайт и пр.<br />Осторожно с чаем и кофе, тонизирующими, но не способствующими усвоению железа из еды.</p>\r\n<p><strong>КАК ИСПОЛЬЗУЮТСЯ ЗАПАСЫ ЭНЕРГИИ</strong></p>\r\n<p>Единственная энергия, которую используют мышцы, АТФ.<br />Для быстрой энергии используется АТФ в работе 8-10 секунд (анаэробная работа).<br />При длительной активной работе используется гликоген и жиры.<br />Гликоген и АТФ являются основными источниками энергии в хоккее.</p>\r\n<p><strong>ПОПОЛНЕНИЕ ЗАПАСОВ ГЛИКОГЕНА</strong></p>\r\n<p>Для восполнения гликогена необходимо 1-2 дня.<br />Во время восстановления гликогена необходимо употреблять богатую углеводами пищу и пить много воды.<br />Во время соревнований есть за 2-3 часа до игры и исключить продукты, содержащие быстрый гликоген, хлеб, богатый волокнами, бобы, чечевицу, большое количество свежих овощей и сильно пряную еду.<br />После игры рекомендуется съесть сразу один бутерброд или банан с фруктовым напитком, затем в течение часа съесть основную еду.</p>\r\n<p><strong>ПРИМЕРНЫЙ ДНЕВНОЙ РАЦИОН ЮНОГО ХОККЕИСТА</strong></p>\r\n<p>Завтрак: овсяная, манная или рисовая каша, мюсли, молоко, кефир, сок, йогурт, варенье, фрукты, хлеб, плавленые сыры, мясо для гамбургеров, огурец, помидор, сладкий перец.<br />Обед и ужин: рыба, мясо, мясные котлеты, макароны, овощи, рис, фрукты, спагетти, брокколи, птица, фрукты, молоко, мороженное, салаты, картофель, корнеплоды, яйцо.<br />Полдник: йогурт, банан, изюм, молоко, творог со сливками, фруктовый кисель, банан.</p>\r\n<p><strong>ВРЕМЯ ПЕРЕВАРИВАНИЯ ПРОДУКТОВ</strong></p>\r\n<p>30 мин &ndash; глюкоза, напиток на завтрак;<br />30-40 мин &ndash; чай, кофе, нежирное молоко, нежирный суп;<br />1-2 часа &ndash; жирное молоко, йогурт, шоколад, нежирный сыр, белый хлеб, яйцо всмятку, картофельное пюре, вареный рис, вареная рыба, фруктовый компот;<br />2-3 часа &ndash; нежирное мясо, вареные овощи, макароны, яйцо, омлет, бананы;<br />3-4 часа &ndash; хлеб грубого помола, жирный сыр, свежие фрукты, тушеные овощи, зеленый салат, поджаренное мясо, ветчина;<br />4-5 часов &ndash; жареное мясо и рыба, бобы, соус с мясным фаршем;<br />5-6 часов &ndash; бекон, копченый лосось, тунец в масле, картофельные чипсы; <br />До 8 часов &ndash; сардины в масле, некоторые сорта капусты.<br />Исключить: кетчуп и майонез!</p>\r\n</div>\r\n</div>', '<div class=\"white-block\">\r\n<div class=\"plain-text plain-text__24\">\r\n<p><strong>ЖАС ХОККЕЙШІЛЕРДІҢ ТАМАҚТАНУДЫҢ БАСТЫ АСПЕКТІЛЕРІ </strong></p>\r\n<p>Қазіргі кездегі хоккейде ойындар мен жаттықтырулардың қарқындылығы мен саны өсті. Сондықтан белсенді қабілеттілік және жақсы денсаулық жағдайы үшін тамақтанудың маңыздылығы одан да жоғары болды, сәйкесінше, жаттықтырушылар және ойыншылар тамақтануға қатысты әр түрлі сұрақтарға көбірек назар аударуы тиіс.</p>\r\n<p>Дұрыс әрі үйлестірілген тамақтану жарақаттанудың алдын алуға, иммунитетті нығайтуға көмектеседі, бұл, өз кезегінде, спортшыға одан да белсенді жаттықтыруға және жарыста ішкі қорларын толық шектеусіз қолдануға мүмкіндік береді.</p>\r\n<p>Үш басты фактор: тамақ, жаттықтыру және дем алу/қалпына келтіру біртұтас қарастырылуы тиіс, себебі олар спортшылардың жұмыс қабілеттілігіне айтарлықтай әсер етеді. &laquo;Жұмыс қабілеттілігінің үшбұрышы&raquo; жан-жақты болып табылады және бір жақтың өзгеруі екі құрамдас бөліктің өзгеруіне әкеледі.<br />Мысалы, жаттықтырулар саны және қарқындылығы ұлғайғанда тамақтың және оның энергия сыйымдылығы, сондай-ақ демалыс және қалпына келу шараларының уақытын ұлғайтуды ойластыру қажет.</p>\r\n<p>Спортшының төзімділігін дамытудың негізі ағзаның энергия теңгерімі болып табылады. Егер жас спортшы жаттықтырулардың саны мен қарқындылығына ара қатынасына сәйкес аз тамақтанса, энергия бұрын қалыптасқан қоректік заттардың қорларынан жұмсалады. Протеин &laquo;құрылыс материалы&raquo; сияқты емес, ал ағзаның энергиялық шығындарын өтейтін зат ретінде жұмсалатын жағдай орын алады.</p>\r\n<p>Әр түрлі қызмет түрлерінде энергия шығындары әр түрлі болады. Ұзақ уақыт бойы бұлшықет топтардың үлкен бөлігін жұмсайтын бұлшықеттердің қарқынды жұмысы жоғары энергия шығындарын талап етеді. Кәсіби спортшы әдетте тәулігіне 3000-600 ккал жұмайды, ал қарқынды жаттықтыру және жарыс кезінде 8000 ккал-ға дейін. Жаттықтыру кезінде энергияны қажетсіну жарыспен салыстырғанда жоғары болады, мұнда спортшы энергия шығындарын өз шеберлігімен, рационалды техникамне және шеберлі тактикалық әрекеттерімен өтей алады.</p>\r\n<p>Дұрыс ұйымдастырылған және үйлестірілген тамақтану тәртібі жас хоккейшіге жаттықтыру жүктеуін тиімді қабылдауға, тез қалпына келуге және жарыста өз потенциалын жүзеге асыруға көмектеседі.</p>\r\n<p><strong>КЕЙБІР ТАМАҚ ӨНІМДЕРІНДЕ ЭНЕРГИЯ ҚҰРАМЫНЫҢ МЫСАЛДАРЫ </strong></p>\r\n<table>\r\n<tbody>\r\n<tr>\r\n<td>Қауыз, мюсли</td>\r\n<td>40 г&nbsp;</td>\r\n<td>168 ккал</td>\r\n</tr>\r\n<tr>\r\n<td>Сұлы жармасының ботқасы</td>\r\n<td>225 г</td>\r\n<td>137 ккал</td>\r\n</tr>\r\n<tr>\r\n<td>Нан мен пісірілген шұжық</td>\r\n<td>1</td>\r\n<td>316 ккал</td>\r\n</tr>\r\n<tr>\r\n<td>Жұмыртқа&nbsp;</td>\r\n<td>1</td>\r\n<td>80 ккал</td>\r\n</tr>\r\n<tr>\r\n<td>Алма&nbsp;</td>\r\n<td>1</td>\r\n<td>55 ккал</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n<p><strong><br />КӨМІРСУЛАР</strong></p>\r\n<p>- көмірсулар: қант, крахмал, тағамдық талшықтар;<br />- қант және крахмал энергия береді, тағамдық талшықтар &ndash; асқазан ішіндегісінің көлемін береді.<br />- көмірсуларға бай өнімдер: күріш, макарон, нан, ботқа, бұршақ, жасымық, картоп, тамыр жемістер, көкөніс, жеміс-жидектер;<br />- гликоген түрінде ыдыраған көмірсулардың бөлігі ағзада қанда қант құрамын сақтау үшін және миды және жүйке жүйесін қажетті энергия деңгейін сақтау үшін пайдаланады;<br />- бұлшықет гликогені &ndash; бұлшықет жұмысы кезінде ең қолжетімді энергияның қоры.</p>\r\n<p>Спортшының тәулік ішінде көмірсуларды қажетсіну көлемі: салмақтың 1 кг-на 6-10 г. <br />Құрамында баяу гликоген бар өнімдер спортшылар үшін ең пайдалы әрі тиімді болып табылады: күріш және қатты сұрыптардан жасалған макарон.</p>\r\n<p><strong>ПРОТЕИНДЕР</strong></p>\r\n<p>Басты функция: ағзаның барлық жасушаларын қалпына келтіру және сақтау.<br />Спортшылардың протеиндерді қажетсіну көлему: тәулігіне салмақтың 1 кг-на 0,8 &ndash; 1,6 г.<br />Жоғары биологиялық құндылыққа ие протеиндер етте, балық етінде, жұмыртқада, сүтте, ірімшікте бар.<br />Протеин ағзаға тағамдық қосымшалардан емес, табиғи өнімдерден ТҮСУІ ТИІС.</p>\r\n<p><strong>МАЙЛАР</strong></p>\r\n<p>Өсімдік және жануар майлары болады.<br />Біз энергияның 37% майлардан аламыз.<br />Құрамында майлар бар өнімдер: май, қаймақ, айран, ірімшік, шоколад, піспенан. <br />Спортшылар үшін тұтыну нормасы: 30 &ndash; 35%.</p>\r\n<p><strong>ДӘРУМЕНДЕР, МИНЕРАЛДАР ЖӘНЕ АНТИОКСИДАНТТАР</strong></p>\r\n<p>А, D, E, K дәрумендері &ndash; майда еритін және ағзада сақталатын.<br />В және С дәрумендері суда ериді және ағзадан тез шығады.<br />Дәрумендердің көбі ағзадан еркін радикалдарды шығару үшін антиоксидант қызметін атқарады.</p>\r\n<p><strong>СҰЙЫҚТЫҚ</strong></p>\r\n<p>Ауыр физикалық жаттықтыру кезінде дене массасынан 1-2% сұйықтықты жоғалтуға болады, ал жұмыс қабілеттілігі 75-80% төмендеуі мүмкін. <br />Күш түсіру кезінде сұйықтықтың қолайлы температурасы - +15. <br />Әр 15-20 минут сайын 150 г кіші мөлшермен ішкен дұрыс. <br />Жасөспірімдерге Кока-Кола, Пепси-Кола, Фанта, Спрайт және т.б. жойып, спорт немесе газдалған сусындарды емес, қарапайым суды ішу ұсынылады. <br />Сергітетін, бірақ тамақтан темірдің сіңуіне көмектеспейтін шай мен кофені байқап ішу қажет.</p>\r\n<p><strong>ЭНЕРГИЯ ҚОРЛАРЫ ҚАЛАЙ ҚОЛДАНЫЛАДЫ </strong></p>\r\n<p>Бұлшықеттермен жұмсалатын бірден-бір энергия - АТФ.<br />8-10 секунд бойы жұмыс істегенде тез энергия үшін АТФ қолданылады (анаэробты жұмыс). <br />Ұзақ белсенді жұмыс кезінде гликоген және майлар жұмсалады.<br />Гликоген және АТФ хоккейде басты энергия қорлары болып табылады.</p>\r\n<p><strong>ГЛИКОГЕН ҚОРЛАРЫН ТОЛТЫРУ</strong></p>\r\n<p>Гликоген қорларын толтыру үшін 1-2 күн қажет.<br />Жарыс кезінде ойынға 2-3 сағат бұрын тамақ ішу және құрамында тез гликоген, талшықтарға бай нанды, бұршақты, жасымықты, жаңа піскен көкөністерді және қатты татымды тамақ өнімдерін жою қажет.<br />Ойыннан кейін жемісті сусынмен бір бутерброд немесе банан жеп, бір сағат ішінде басты тамақты жеу қажет.</p>\r\n<p><strong>ЖАС ХОККЕЙШІНІҢ ҮЛГІЛІ КҮНДІЗГІ РАЦИОНЫ</strong></p>\r\n<p>Таңғы ас: сұлы жармасының, ұнтақ немесе күріш ботқасы, мюсли, сүт, айран, шырын, йогурт, тосап, жидектер, нан, балқытылған ірімшік, гамбургерлерге арналған ет, қияр, қызанақ, тәтті бұрыш. <br />Түскі және кешкі ас: балық еті, ет, ет котлет, макарон, көкөніс, күріш, жидектер, спагетти, брокколи, құс еті, сүт, балмұздақ, салат, картоп, тамыр жемістері, жұмыртқа.<br />Бесіндік: йогурт, мәуіз, жүзім, сүт, кілегей қосылған сүзбе, жидекті кисель.</p>\r\n<p><strong>ҚОРЫТУ УАҚЫТЫ</strong></p>\r\n<p>30 мин &ndash; глюкоза, таңғы асқа сусын;<br />30-40 мин &ndash; шай, кофе, майлы емес сүт, майлы емес сорпа;<br />1-2 сағат &ndash; майлы сүт, йогурт, шоколад, майлы емес ірімшік, ақ нан, шала пісірілген жұмыртқа, картоп пюресі, суға пісірілген күріш, суға пісірілген балық, жидекті компот;<br />2-3 сағат &ndash; майлы емес ет, пісірілген көкөніс, макарон, жұмыртқа, омлет, мәуіз;<br />3-4 сағат &ndash; ірі үгінді нан, майлы сүзбе, жаңа піскен жидек, бұқтырылған көкөніс, жасыл салат, қуырылған ет, ветчина;<br />4-5 сағат &ndash; қуырылған ет және балық еті, бұршақ, тартылған етпен соус;<br />5-6 сағат &ndash; бекон, сүрленген ақсерке, май ішінде тунец, картоп чипстері;<br />8 сағатқа дейін &ndash; май ішінде сардина, қырыққабаттың кейбір сұрыптары.<br />Рационнан жою: кетчуп және майонез!</p>\r\n</div>\r\n</div>', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '[]', '[]', '[]', '[]', '[]', '[]', 1, '2021-09-17 05:46:41', '2021-09-17 05:47:19'),
(7, 'Психология', 'Психология', NULL, '7-psikhologiya', '<div class=\"white-block\">\r\n<div class=\"plain-text plain-text__24\">\r\n<p><strong>НЕМАЛОВАЖНУЮ РОЛЬ В ПОДГОТОВКЕ ИГРАЕТ ПСИХОЛОГИЯ.</strong></p>\r\n<p>Элементом спортивно-психологической подготовки является также работа с ожиданиями тренеров и родителей воспитанников. Зачастую здесь встречаются несовпадения интересов, что негативно сказывается на эмоциональном состоянии спортсмена.<br />При подготовке необходимо выстраивать эффективный процесс взаимодействия тренеров, родителей и самих юных хоккеистов</p>\r\n<p><strong>О ЗАДАЧАХ РОДИТЕЛЕЙ В РАЗВИТИИ ЛИЧНОСТИ ХОККЕИСТА</strong><br />Хоккей поможет вашему ребёнку стать сильным, ловким, быстрым и выносливым, научит жить и трудиться в коллективе, выработает такие необходимые для человека свойства личности как дисциплинированность, решительность, выдержку и самообладание, воспитает по-настоящему сильный характер. Поэтому семья должна стать верным союзником юного хоккеиста. Родители должны знать и придерживаться пяти основных правил.</p>\r\n<p><strong style=\"color: #00aeef;\">Правило первое:</strong><br /><em style=\"color: #00aeef;\">Отношение родителей к занятиям влияет на мотивацию юного хоккеиста.</em><br />Недостаток внимания, когда родители отдали ребёнка в секцию и считают, что все вопросы, связанные с хоккеем, больше их не касаются или наоборот чрезмерная настойчивость родителей в равной степени вредны.<br />Постарайтесь найти золотую середину: проявляйте интерес к тому, что происходит в спортивной жизни ребёнка, радуйтесь вместе с ним победам, поддерживайте при неудачах. Но не забывайте, что в спортивной школе у ребёнка уже есть тренер, поэтому дома ему нужен не ещё один наставник, а понимающий родитель.</p>\r\n<p><strong style=\"color: #00aeef;\">Правило второе:</strong><br /><em style=\"color: #00aeef;\">Здоровье является ключевым фактором успехов юного спортсмена.</em><br />Залог хорошего самочувствия и физического здоровья - здоровое питание! Исключите &laquo;фастфуд&raquo;, добавьте в рацион питания витамины, молочную продукцию, фрукты, орехи. Необходимо соблюдение &laquo;режима дня&raquo;, даже в выходные дни. Ограничите время провождение вашего ребенка за компьютером и просмотром телевизора.<br />Уделяйте ребенку больше времени, постарайтесь отвлечь его от хоккея в выходные дни, посетите кинотеатр, парк - это снизит у него внутреннее напряжение, тревожность.</p>\r\n<p><strong style=\"color: #00aeef;\">Правило третье:</strong><br /><em style=\"color: #00aeef;\">Хоккей - это спорт, в котором успехи начинаются с победы над собой. </em><br />Для того чтобы достичь высоких результатов, юному хоккеисту придётся много работать, развивать в себе трудолюбие, терпение, дисциплину, самостоятельность. Помогите ребёнку распланировать свой день и придерживаться составленного плана. Только так он сможет приучиться к порядку, аккуратности и самодисциплине и сможет больше успевать. Позволяйте ребёнку принимать решения и самому разбираться с задачами, возникающими перед ним. Не спешите вмешиваться в конфликтные ситуации, которые иногда возникают между детьми, дайте им самостоятельно разрешить проблемы. Если же вы видите, что они не могут сами справиться с ситуацией, помогите советом или обсудите пути решения проблемы с тренером</p>\r\n<p><strong style=\"color: #00aeef;\">Правило четвертое:</strong><br /><em style=\"color: #00aeef;\">Юному спортсмену предстоит совмещать обучение в двух школах</em><br />Занятия спортом укрепляют ребёнка физически и развивают работоспособность, он начинает более ответственно относиться к жизни, это поможет ему в обучении. Совмещать спортивную и общеобразовательную школу - не самая простая задача для ребёнка. Это становится особенно заметно, когда нагрузки в обеих школах начинают возрастать, к урокам и тренировкам добавляются экзамены и соревнования. Задача родителей - показать, что обе школы являются равнозначными. Привыкнув совмещать учёбу в школе и спорт, он с большей вероятностью сможет совмещать тренировки и обучение в высшем учебном заведении.</p>\r\n<p><strong style=\"color: #00aeef;\">Правило пятое:</strong><br /><em style=\"color: #00aeef;\">Собственный пример родителей и их поддержка &ndash; важные факторы успешности юного хоккеиста</em><br />Большинство детей очень внимательны к мнению родителей, они оценивают и воспроизводят не только то, о чём родители им говорят, но и то, что родители демонстрируют на практике. Внимание к своим поступкам и речам &ndash; залог правильного воспитания личности <br />Вам необходимо помогать с соблюдением режима дня и питания, мотивировать его на победы и при этом не только радоваться его успехам, но и поддержать в моменты поражений. При неудачах не критикуйте его. <br />Вселяйте в него уверенность в своих силах. Ребенок, растущий в атмосфере поддержки, учится быть уверенным в себе. Не сравнивайте своего ребенка с другими, более успешными, на ваш взгляд, его товарищами по команде. <br />Это может выработать у ребенка чувство зависти.</p>\r\n<p><strong style=\"color: #00aeef;\">Не обсуждайте личность тренера.</strong><br />Тренер должен стать для каждого спортсмена авторитетной личностью! Наберитесь терпения в ожидании результатов. Не критикуйте ребенка за недостаточно хорошие, с вашей точки зрения, результаты. Помните: всему своё время.<br />Быть родителями юного хоккеиста &mdash; большая ответственность. Но некоторые папы и мамы воспринимают это слишком буквально.</p>\r\n<p><strong style=\"color: #00aeef;\">Не гонитесь за результатом.</strong><br />Не нужно сверхурочно заставлять детей тренироваться. Придёт время &mdash; они сами поймут, когда нужно усиленно заниматься, и когда это будет давать плоды. В детстве надо получать удовольствие. Если ребёнок встаёт на тренировки лучше, чем в школу, если он просится на занятия с температурой, значит вы всё сделали правильно. Большим хоккеистом станет не тот, кто будет быстрее всех кататься в детской команде или забивать по три гола за игру, а кто каждый день будет получать удовольствие от занятий и знать, к чему он стремится. Вам, родители, нужно только создать правильные условия для роста ребёнка, развивать в нём любовь к игре, трудолюбие и поддерживать на протяжении всего пути.</p>\r\n</div>\r\n<div class=\"slogan\"><img src=\"http://test.salemhokei.loc/assets/img/boy-icon.svg\" alt=\"\" />\r\n<div>\r\n<p><strong>Станьте частью хокейной семьи!</strong></p>\r\n<p><strong>МЫ ЖДЁМ НОВОЕ ПОКОЛЕНИЕ <br />СПОРТСМЕНОВ!</strong></p>\r\n</div>\r\n<img src=\"http://test.salemhokei.loc/assets/img/girl-icon.svg\" alt=\"\" /></div>\r\n</div>', '<div class=\"white-block\">\r\n<div class=\"plain-text plain-text__24\">\r\n<p><strong>ПСИХОЛОГИЯНЫҢ ДА ДАЙЫНДЫҚТА РӨЛІ КЕМ ЕМЕС.</strong></p>\r\n<p>Спорт-психологиялық дайындықтың элементі жаттықтырушылар мен тәрбиеленушілер ата-аналарының болжалдарына байланысты болады. Көбінесе мүдделер сәйкес келмейді, бұл, өз кезегінде, спортшының эмоционалдық күйіне теріс әсерін тигізеді.<br />Дайындық барысында жаттықтырушылар, ата-аналар және хоккейшілердің өзара әрекеттесудің тиімді процессін ұйымдастыру қажет.</p>\r\n<p><strong>ХОККЕЙШІНІҢ ЖЕКЕ ТҰЛҒАСЫНЫҢ ДАМУЫНДА АТА-АНАЛАРДЫҢ МІНДЕТТЕРІ ТУРАЛЫ</strong><br />Хоккей балаңызға мықты, епті, тез әрі төзімді болуға, ұжым ішінде өмір сүруге және еңбектенуге үйретеді, тәртіптілік, батылдық, шыдам және өз-өзін ұстау сияқты маңызды қасиеттерді дамытады, нағыз мықты мінезді тәрбиелейді. Сондықтан жас отбасы үшін отбасы адал одақтасы болуы тиіс. Ата-аналар басты бес ережені сақтау тиіс.</p>\r\n<p><strong style=\"color: #00aeef;\">Бірінші ереже:</strong><br /><em style=\"color: #00aeef;\">Ата-аналардың хоккейге көзқарасы жас хоккейшінің мотивациясына әсер етеді.</em><br />Баланы секцияға бергеннен кейін назардың тапшылығы және ата-аналардың енді хоккейге байланысты барлық сұрақтар енді оларға қатысты емес деген көзқарастары немесе ата-аналардың тым көп табандылық көрсетуі бірдей дәрежеде зиянды. <br />Алтын ортаны табуға тырысып көріңіз: баланың спорт өміріне қызығушылық көрсетіңіз, балаңызбен жеңіске бірге қуанып, сәтсіз жағдайларда қолдау көрсетіңіз. Бірақ спорт мектепте балаңыздың жаттықтырушысы бар екенін ұмытпаңыз, сондықтан үйде оған тағы бір тәлімгер емес, түсінетін ата-ана қажет.</p>\r\n<p><strong style=\"color: #00aeef;\">Екінші ереже:</strong><br /><em style=\"color: #00aeef;\">Денсаулық &ndash; жас спортшының кілтті факторы болып табылады. </em><br />Жақсы хал-жайдың және физикалық денсаулықтың кепілі &ndash; пайдалы тамақтану! &laquo;Фастфудты&raquo; жойыңыз, тамақтану рационына дәрумендерді, сүт өнімдерін, жеміс-жидектерді, жаңғақтарды қосыңыз. &laquo;Күн тәртібін&raquo; сақтау маңызды, демалыс күндерін қоса. Балаңыздың компьютермен ойнау және теледидарды көрумен уақытты өткізуіне шектеу қойыңыз. <br />Балаға көбірек уақыт бөліп, демалыс күндері хоккейден алаңдатуға тырысыңыз; кинотеатр, саябаққа барыңыз &ndash; бұл баланың ішкі шиеленісін, мазасыздануын төмендетеді.</p>\r\n<p><strong style=\"color: #00aeef;\">Үшінші ереже:</strong><br /><em style=\"color: #00aeef;\">Хоккей &ndash; табыс өз-өзін жеңуден басталатын спорт.</em><br />Жоғары нәтижелерге жету үшін жас хоккейші көп еңбектенуі, еңбекқорлық, шыдамдылық, тәртіпті, дербестілікті дамытуы тиіс. Балаңызға күнді жоспарлауға және дайындаған жоспарды орындауға көмектесіңіз. Тек Сіздің көмегіңізбен ол тәртіпке, ұқыптылыққа және өзіндік тәртіпке үйреніп, көп нәрсені жасауға үлгеруге қол жеткізеді. Балаңызға өз басымен шешімдерді қабылдауға және пайда болатын мәселелерді шешуге жол беріңіз. Кей-кезде балалар арасында пайда болатын тартысты жағдайларға араласпай, жеке өз басымен шешуге жол беріңіз. Егер олар мәселені өздері шеше алмайтынын көрсеңіз, кеңес беріңіз немесе жаттықтырушымен бірге шешу жолдарын талқылап көріңіз.</p>\r\n<p><strong style=\"color: #00aeef;\">Төртінші ереже:</strong><br /><em style=\"color: #00aeef;\">Жас спортшы екі мектепте оқуды қиыстыра алуы тиіс</em><br />Спорт баланың денсаулығын нығайтып, жұмысқа қабілеттілігін дамытады, ол өмірге жауапкершілікпен қарай бастайды, бұл қасиеттер оған оқуда көмектеседі. Спорт және жалпы білім мектебін қиыстыру &ndash; бала үшін аса қиын мәселе. Екі мектепте де тапсырмалар ұлғайғанда, сабақтар мен жаттықтыруларға емтихандар және жарыстар қосылғанда, бұл қатты байқалады. Ата-аналардың міндеті &ndash; екі мектептің маңыздылығы бірдей екенін көрсету. Мектепте және спортта оқуды қиыстыруды үйреніп алғаннан кейін балаңыз жаттықтыруларды және жоғары оқу орнында оқуды қиыстыра алатыны ықтимал.</p>\r\n<p><strong style=\"color: #00aeef;\">Бесінші ереже:</strong><br /><em style=\"color: #00aeef;\">Ата-аналардың жеке үлгісі және қолдауы &ndash; жас хоккейші табысының маңызды факторлары</em><br />Балалардың көбі ата-ананың пікірін ерекше назармен тыңдайды, олар ата-аналардың айтқан сөздерін ғана емес, іс жүзінде әрекеттерін бағалап, қайталайды. Өзіңіздің әрекеттеріңізге және сөзіңізге деген назар &ndash; тұлғаны дұпыс тәрбиелеудің кепілі <br />Сіз балаңызды күн және тамақтану тәртібін сақтауға көмектесуіңіз, оны жеңіске ынталандыруға, сонымен қатар оның жеңістеріне қуанып қана қоймай, жеңіліс тапқан кезде де қолдау көрсетуіңіз тиіс. Сәтсіздікке ұшыраған кезде балаңызды сынға алмаңыз. <br />Өзіне деген сенімділікті күшейтуге тырысыңыз. Қолдау атмосферасында өсетін бала өз-өзіне сенімді болуға үйренеді. Балаңызды сіздің көзқарасыңыз бойынша одан табысты команда мүшелерімен салыстырмаңыз. <br />Одан балаңыздан көре алмаушылық сезімі пайда болуы мүмкін.</p>\r\n<p><strong style=\"color: #00aeef;\">Жаттықтырушының жеке тұлғасын талқылаудың қажеті жоқ. </strong><br />Жаттықтырушы әр спортшы үшін беделді тұлға болуы тиіс! Сабыр жинап, нәтижелерді күтіңіз. Балаңызды Сіз үшін орташа болатын нәтижелер үшін сынға алмаңыз. Әр нәрсе өз уақытында екенін есіңізде сақтаңыз.<br />Жас хоккейшінің ата-анасы болу &ndash; үлкен жауапкершілік. Бірақ кейбір әкелер және аналар осы сөздерді дәлме-дәл түсінеді.</p>\r\n<p><strong style=\"color: #00aeef;\">Нәтиженің соңына түспеңіз. </strong><br />Балаларды тым көп жаттықтыруға мәжбүрлеудің қажеті жоқ. Уақыты келгенде, олар көп еңбектену қажет екенін және бұл өз жемістерін беретінін түсінеді. Балалық шақ рақаттылыққа толы болуы тиіс. Егер балаңыз таңертең мектеппен салыстырғанда жаттықтыруға жақсы тұрса, сабаққа температурамен баруға сұранса, Сіз барлығын дұрыс жасадыңыз. Үлкен хоккейші команда ішінде бәрінен тез сырғанайтын немесе ойын барысында үш гол соғатын ойыншы емес, сабақтан ляззәт алатын, өз мақсатын жақсы білетін ойыншы болады. Ата-аналар, Сіз балаңыздың өсуі үшін дұрыс жағдай жасап, ойынға сүйіспеншілікті, еңбекқорлықты дамытып, жол бойы қолдау қажет.</p>\r\n</div>\r\n<div class=\"slogan\"><img src=\"http://test.salemhokei.loc/assets/img/boy-icon.svg\" alt=\"\" />\r\n<div>\r\n<p><strong> Хоккейлік отбасының бір бөлігі болыңыз!</strong></p>\r\n<p><strong>БІЗ ЖАҢА СПОРТШЫЛАР ҰРПАҒЫН <br />КҮТУДЕМІЗ!</strong></p>\r\n</div>\r\n<img src=\"http://test.salemhokei.loc/assets/img/girl-icon.svg\" alt=\"\" /></div>\r\n</div>', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '[]', '[]', '[]', '[]', '[]', '[]', 1, '2021-09-17 05:48:17', '2021-09-17 05:48:17');

-- --------------------------------------------------------

--
-- Структура таблицы `password_resets`
--

CREATE TABLE `password_resets` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `slug`, `description`, `created_at`, `updated_at`) VALUES
(5, 'Просмотр списка пользователей', 'user.view', NULL, NULL, NULL),
(6, 'Создание записи пользователя', 'user.create', NULL, NULL, NULL),
(7, 'Редактирование записи пользователя', 'user.edit', NULL, NULL, NULL),
(8, 'Удаление записи пользователя', 'user.delete', NULL, NULL, NULL),
(55, 'Просмотр списка альбомов', 'album.view', NULL, NULL, NULL),
(56, 'Создание альбома', 'album.create', NULL, NULL, NULL),
(57, 'Редактирование альбома', 'album.edit', NULL, NULL, NULL),
(58, 'Удаление альбома', 'album.delete', NULL, NULL, NULL),
(59, 'Просмотр списка видео', 'video.view', NULL, NULL, NULL),
(60, 'Создание записи видео', 'video.create', NULL, NULL, NULL),
(61, 'Редактирование записи видео', 'video.edit', NULL, NULL, NULL),
(62, 'Удаление записи видео', 'video.delete', NULL, NULL, NULL),
(63, 'Просмотр списка статичных страниц', 'page.view', NULL, NULL, NULL),
(64, 'Создание статичных страниц', 'page.create', NULL, NULL, NULL),
(65, 'Редактирование статичных страниц', 'page.edit', NULL, NULL, NULL),
(66, 'Удаление статичных страниц', 'page.delete', NULL, NULL, NULL),
(68, 'Просмотр списка ролей пользователей', 'user_role.view', NULL, NULL, NULL),
(69, 'Создание ролей пользователей', 'user_role.create', NULL, NULL, NULL),
(70, 'Редактирование ролей пользователей', 'user_role.edit', NULL, NULL, NULL),
(71, 'Удаление ролей пользователей', 'user_role.delete', NULL, NULL, NULL),
(76, 'Просмотр секций', 'section.view', NULL, NULL, NULL),
(77, 'Создание секции', 'section.create', NULL, NULL, NULL),
(78, 'Редактирование секций', 'section.edit', NULL, NULL, NULL),
(79, 'Удаление секций', 'section.delete', NULL, NULL, NULL),
(80, 'Просмотр новостей', 'article.view', NULL, NULL, NULL),
(81, 'Создание новостей', 'article.create', NULL, NULL, NULL),
(82, 'Редактирование новостей', 'article.edit', NULL, NULL, NULL),
(83, 'Удаление новостей', 'article.delete', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `permission_role`
--

CREATE TABLE `permission_role` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `permission_id` bigint(20) UNSIGNED DEFAULT NULL,
  `role_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `permission_role`
--

INSERT INTO `permission_role` (`id`, `permission_id`, `role_id`, `created_at`, `updated_at`) VALUES
(11, 55, 1, NULL, NULL),
(12, 56, 1, NULL, NULL),
(14, 57, 1, NULL, NULL),
(15, 58, 1, NULL, NULL),
(16, 59, 1, NULL, NULL),
(17, 60, 1, NULL, NULL),
(18, 61, 1, NULL, NULL),
(19, 62, 1, NULL, NULL),
(20, 63, 1, NULL, NULL),
(21, 64, 1, NULL, NULL),
(22, 65, 1, NULL, NULL),
(23, 66, 1, NULL, NULL),
(25, 68, 1, NULL, NULL),
(27, 70, 1, NULL, NULL),
(28, 71, 1, NULL, NULL),
(29, 1, 3, '2020-03-27 06:51:38', '2020-03-27 06:51:38'),
(30, 2, 3, '2020-03-27 06:51:38', '2020-03-27 06:51:38'),
(32, 6, 1, '2020-03-27 07:02:29', '2020-03-27 07:02:29'),
(48, 5, 1, '2020-03-27 08:11:47', '2020-03-27 08:11:47'),
(49, 69, 1, '2020-03-27 08:12:10', '2020-03-27 08:12:10'),
(52, 8, 1, '2020-03-27 08:21:08', '2020-03-27 08:21:08'),
(56, 7, 1, '2020-03-27 08:32:10', '2020-03-27 08:32:10'),
(59, 76, 1, '2020-03-27 09:38:29', '2020-03-27 09:38:29'),
(60, 77, 1, '2020-03-27 09:38:29', '2020-03-27 09:38:29'),
(61, 78, 1, '2020-03-27 09:38:29', '2020-03-27 09:38:29'),
(62, 79, 1, '2020-03-27 09:38:29', '2020-03-27 09:38:29'),
(63, 80, 1, '2020-04-08 04:59:31', '2020-04-08 04:59:31'),
(64, 81, 1, '2020-04-08 04:59:31', '2020-04-08 04:59:31'),
(65, 82, 1, '2020-04-08 04:59:31', '2020-04-08 04:59:31'),
(66, 83, 1, '2020-04-08 04:59:31', '2020-04-08 04:59:31');

-- --------------------------------------------------------

--
-- Структура таблицы `permission_user`
--

CREATE TABLE `permission_user` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `regions`
--

CREATE TABLE `regions` (
  `id` int(10) UNSIGNED NOT NULL,
  `name_ru` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_kk` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `regions`
--

INSERT INTO `regions` (`id`, `name_ru`, `name_kk`, `name_en`, `created_at`, `updated_at`) VALUES
(4, 'Акмолинская область', 'Ақмола облысы', NULL, '2020-04-08 08:12:23', '0000-00-00 00:00:00'),
(5, 'Актюбинская область', 'Ақтөбе облысы', NULL, '2020-04-08 08:12:31', '0000-00-00 00:00:00'),
(6, 'Алматинская область', 'Алматы облысы', NULL, '2020-04-08 08:12:41', '0000-00-00 00:00:00'),
(7, 'Атырауская область', 'Атырау облысы', NULL, '2020-04-08 08:12:48', '0000-00-00 00:00:00'),
(8, 'Восточно-Казахстанская область', 'ШҚО', NULL, '2020-04-08 08:12:54', '0000-00-00 00:00:00'),
(9, 'Жамбылская область', 'Жамбыл облысы', NULL, '2020-04-08 08:13:01', '0000-00-00 00:00:00'),
(10, 'Западно-Казахстанская область', 'БҚО', NULL, '2020-04-08 08:13:06', '0000-00-00 00:00:00'),
(11, 'Карагандинская область', 'Қарағанды облысы', NULL, '2020-04-08 08:13:12', '0000-00-00 00:00:00'),
(12, 'Костанайская область', 'Қостанай облысы', NULL, '2020-04-08 08:13:22', '0000-00-00 00:00:00'),
(13, 'Кызылординская область', 'Қызылорда облысы', NULL, '2020-04-08 08:13:32', '0000-00-00 00:00:00'),
(14, 'Мангистауская область', 'Маңғыстау облысы', NULL, '2020-04-08 08:13:41', '0000-00-00 00:00:00'),
(15, 'Павлодарская область', 'Павлодар облысы', NULL, '2020-04-08 08:13:47', '0000-00-00 00:00:00'),
(16, 'Северо-Казахстанская область', 'СҚО', NULL, '2020-04-08 08:13:55', '0000-00-00 00:00:00'),
(17, 'Туркестанская область', 'Түркістан облысы', NULL, '2020-04-08 08:14:01', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Структура таблицы `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `special` enum('all-access','no-access') COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `roles`
--

INSERT INTO `roles` (`id`, `name`, `slug`, `description`, `created_at`, `updated_at`, `special`) VALUES
(1, 'Администратор', 'admin', NULL, NULL, NULL, NULL),
(2, 'Редактор', 'redactor', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `role_user`
--

CREATE TABLE `role_user` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `role_user`
--

INSERT INTO `role_user` (`id`, `role_id`, `user_id`, `created_at`, `updated_at`) VALUES
(4, 2, 3, '2020-03-26 09:28:45', '2020-03-26 09:28:45'),
(5, 2, 9, '2020-03-26 09:33:11', '2020-03-26 09:33:11'),
(9, 1, 13, NULL, NULL),
(10, 1, 14, NULL, NULL),
(11, 1, 15, NULL, NULL),
(12, 1, 16, NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `schoolreg`
--

CREATE TABLE `schoolreg` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sex` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cite` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `shool` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lang` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `schoolreg`
--

INSERT INTO `schoolreg` (`id`, `first_name`, `last_name`, `email`, `phone`, `avatar`, `sex`, `cite`, `shool`, `lang`, `deleted_at`, `created_at`, `updated_at`) VALUES
(27, 'Фозилжон', 'Турсунов', 'bjr061981@gmail.com', '998919077684', NULL, NULL, '1', '5', 'kk', NULL, '2021-10-17 12:17:48', '2021-10-17 12:17:48'),
(28, 'Фозилжон', 'Турсунов2', 'parmonov98@yandex.ru', '+3459834588394', NULL, NULL, '1', '8', 'kk', NULL, '2021-10-17 12:20:01', '2021-10-17 12:20:01');

-- --------------------------------------------------------

--
-- Структура таблицы `sections`
--

CREATE TABLE `sections` (
  `id` int(10) UNSIGNED NOT NULL,
  `parent_id` int(10) UNSIGNED DEFAULT NULL,
  `avatar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name_ru` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `open_graph_title_en` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `open_graph_title_kk` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `open_graph_title_ru` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `open_graph_description_en` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `open_graph_description_kk` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `open_graph_description_ru` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city_en` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city_kk` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city_ru` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name_kk` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name_en` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description_ru` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description_kk` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description_en` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `employees_ru` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `employees_kk` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `employees_en` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `accordion_ru` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `accordion_kk` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `accordion_en` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_title_ru` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_title_kk` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_title_en` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_description_ru` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_description_kk` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_description_en` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_keywords_ru` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_keywords_kk` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_keywords_en` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alt` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `annotation_en` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `annotation_ru` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `annotation_kk` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alias` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `satrud` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alias_ru` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alias_kk` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alias_en` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `views` int(11) NOT NULL DEFAULT 0,
  `is_published` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `sections`
--

INSERT INTO `sections` (`id`, `parent_id`, `avatar`, `name_ru`, `open_graph_title_en`, `open_graph_title_kk`, `open_graph_title_ru`, `open_graph_description_en`, `open_graph_description_kk`, `open_graph_description_ru`, `city_en`, `city_kk`, `city_ru`, `name_kk`, `name_en`, `description_ru`, `description_kk`, `description_en`, `employees_ru`, `employees_kk`, `employees_en`, `accordion_ru`, `accordion_kk`, `accordion_en`, `meta_title_ru`, `meta_title_kk`, `meta_title_en`, `meta_description_ru`, `meta_description_kk`, `meta_description_en`, `meta_keywords_ru`, `meta_keywords_kk`, `meta_keywords_en`, `alt`, `annotation_en`, `annotation_ru`, `annotation_kk`, `alias`, `satrud`, `alias_ru`, `alias_kk`, `alias_en`, `views`, `is_published`, `created_at`, `updated_at`) VALUES
(1, NULL, '/images/1594354624.png', 'Детско-юношеская спортивная школа «Барыс»', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Нұр-Сұлтан қ. «Барыс» балалар мен жасөспірімдерге арналған спорт мектебі', NULL, '<p class=\"MsoNormal\" style=\"margin-bottom: .0001pt; text-align: justify; line-height: normal; background: white;\"><strong><span style=\"font-size: 10.0pt; font-family: \'Arial\',\'sans-serif\'; mso-fareast-font-family: \'Times New Roman\'; mso-fareast-language: RU;\">История:</span></strong><span style=\"font-size: 10.0pt; font-family: \'Arial\',\'sans-serif\'; mso-fareast-font-family: \'Times New Roman\'; mso-fareast-language: RU; mso-bidi-font-weight: bold;\"> Детско-юношеская спортивная школа &laquo;Барыс&raquo; была основана 2011 году, на начальном этапе развития в школе было создано 6 команд своих возрастных групп. В 2017 году школа осуществила первый выпуск молодых хоккеистов &ndash; игроков команды 1999 г.р. Команды детско-юношеской спортивной школы &laquo;Барыс&raquo; выступают в Чемпионате Республики Казахстан</span><span style=\"font-size: 10.0pt; font-family: \'Arial\',\'sans-serif\'; mso-fareast-font-family: \'Times New Roman\'; mso-fareast-language: RU;\"> среди детско-юношеских команд<span style=\"mso-bidi-font-weight: bold;\"> и Первенстве Российской Федерации, а также на официальных международных чемпионатах и турнирах. На сегодня в хоккейной школе занимаются около 700 спортсменов в 13 возрастных группах. Команды разных возрастных групп являются неоднократными победителями и призерами республиканских и международных соревнований</span></span></p>', '<p><span style=\"font-size: 12pt;\"><span lang=\"KZ\" style=\"line-height: 107%; font-family: \'Times New Roman\', serif;\"><strong>Тарихы</strong>: </span><span lang=\"KZ\" style=\"line-height: 107%; font-family: \'Times New Roman\', serif;\">&laquo;Барыс&raquo; балалар мен жасөспірімдерге арналған спорт мектебі 2011 жылы құрылған, бастапқы даму кезеңінде мектепте жастық топтарға қарай 6 команда құрылды. 2017 жылы мектеп 1999 жылы туған жас хоккей ойыншыларды, алғашқы түлектерін шығарды. &laquo;Барыс&raquo; балалар мен жасөспірімдерге арналған спорт мектебінің командалары балалар және жасөспірімдер командаларының арасында Қазақстан Республикасының Чемпионатына және Ресей Федерациясының біріншілігіне қатысады, сондай-ақ ресми халықаралық чемпионаттарға және турнирлерге қатысады. Қазіргі таңда хоккей мектебінде 13 жас топтарында 700-ге жуық спортсмендер оқиды. Әр түрлі жастық топтарға жататын командалар республикалық және халықаралық жарыстардың жеңімпаздары және жүлдегерлері болып табылады.&nbsp; &nbsp;</span></span></p>', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '<p><strong>Полное название:</strong> Детско-юношеская спортивная школа \"Барыс\"<br /><strong>Хоккейная команда:</strong> Барыс<br /><strong>Руководитель:</strong> Нурмухамедов Руслан Болатович</p>', '<p class=\"MsoNormal\"><span lang=\"KZ\" style=\"font-size: 12.0pt; line-height: 107%; font-family: \'Times New Roman\',\'serif\'; mso-ansi-language: KZ;\">&laquo;Барыс&raquo; хоккей командасы</span>&lt;/</p>', '1-detsko-yunosheskaya-sportivnaya-shkola-barys', 'on', NULL, NULL, NULL, 0, 1, '2020-05-20 09:00:37', '2021-10-18 23:25:10'),
(2, NULL, '/images/1594354613.png', 'КГУ «Специализированная детско-юношеская спортивная школа №10 по хоккею с шайбой» акимата г.Нур-Султан', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Нұр-Сұлтан қ. әкімдігінің «№10 шайбалы хоккей бойынша мамандандырылған балалар мен жасөспірімдерге арналған спорт мектебі» КММ', NULL, '<p style=\"margin: 0cm; margin-bottom: .0001pt; text-align: justify;\"><strong><span style=\"font-size: 10pt; font-family: Arial, sans-serif;\">История:</span></strong><span style=\"font-size: 10pt; font-family: Arial, sans-serif;\"> Специализированная детско-юношеская спортивная школа №10 по хоккею с шайбой была образована в январе 2002 года. По результатам 3-х сезонов 2014-2015гг., 2015-2016гг., 2018-2019 гг. школа признана трижды лучшая школа в Республике Казахстан по хоккею с шайбой.</span></p>\n<p><span style=\"font-size: 10pt; line-height: 107%; font-family: Arial, sans-serif;\">В спортивной школе занимаются: 680 воспитанников</span><span lang=\"KZ\" style=\"font-size: 10.0pt; line-height: 107%; font-family: \'Arial\',\'sans-serif\'; mso-fareast-font-family: Calibri; mso-fareast-theme-font: minor-latin; mso-ansi-language: KZ; mso-fareast-language: EN-US; mso-bidi-language: AR-SA;\"> из 49 возрастных групп</span><span style=\"font-size: 10pt; line-height: 107%; font-family: Arial, sans-serif;\">, Воспитанники школы принимают участие в официальных спортивных соревнованиях, таких как: Чемпионат Республики Казахстан, Первенство Российской Федерации, Молодежная хоккейная Лига Казахстана</span></p>', '<p><strong><span lang=\"KZ\" style=\"font-size: 12pt; line-height: 107%; font-family: \'Times New Roman\', serif;\">Тарихы: </span></strong><span lang=\"KZ\" style=\"font-size: 12.0pt; line-height: 107%; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: Calibri; mso-fareast-theme-font: minor-latin; mso-ansi-language: KZ; mso-fareast-language: EN-US; mso-bidi-language: AR-SA;\">&laquo;№10 шайбалы хоккей бойынша мамандандырылған балалар мен жасөспірімдерге арналған спорт мектебі 2002 жылдың қаңтарында құрылды. </span><span lang=\"KZ\" style=\"font-size: 12pt; line-height: 107%; font-family: \'Times New Roman\', serif;\">2014-2015 ж.ж., 2015-2016 ж.ж., 2018-2019 ж.ж. 3 маусымның қорытындылары бойынша мектеп Қазақстан Республикасында шайбалы хоккей бойынша үздік мектеп атағына үш рет ие болды. Спорт мектебінде 49 жастық топтардан 680 тәрбиеленушілер оқиды. Тәрбиеленушілер Қазақстан Республикасының Чемпионаты, Ресей Федерациясының біріншілігі, Қазақстанның Жастардың хоккей лигасы сияқты ресми спорт жарыстарына қатысады.</span></p>', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '<p><strong>Полное название:</strong> КГУ &laquo;Специализированная детско-юношеская спортивная школа №10 по хоккею с шайбой&raquo; <br /><strong>Хоккейная команда:</strong> Астана<br /><stron', '<p class=\"MsoNormal\"><span style=\"font-family: \'Times New Roman\', serif; font-size: 12pt;\">&laquo;АSTANA&raquo; хоккей командасы</span></p>\n<p class=\"MsoNormal\"><span lang=\"KZ\" style=\"font-si', '2-kgu-spetsializirovannaya-detsko-yunosheskaya-sportivnaya-shkola-10-po-khokkeyu-s-shayboy-akimata-gnur-sultan', '0', NULL, NULL, NULL, 0, 1, '2020-05-20 09:01:57', '2020-07-10 11:59:44'),
(3, NULL, '/images/1594354605.jpeg', 'ОФ «Детская хоккейная школа «HOCKEY PLANET»', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '«HOCKEY PLANET» балаларға арналған хоккей мектебі» ҚҚ', NULL, '<p class=\"MsoNormalCxSpMiddle\" style=\"text-align: justify; line-height: normal;\"><span style=\"font-size: 10pt;\"><strong style=\"mso-bidi-font-weight: normal;\"><span style=\"font-family: Arial, sans-serif;\">История:</span></strong><span style=\"font-family: Arial, sans-serif;\"> Детская хоккейная школа <span style=\"mso-bidi-font-weight: bold;\">&laquo;</span></span><span lang=\"EN-US\" style=\"font-family: Arial, sans-serif;\">Hockey</span> <span lang=\"EN-US\" style=\"font-family: Arial, sans-serif;\">Planet</span><span style=\"font-family: Arial, sans-serif;\">&raquo; основана в 2016 году</span><strong style=\"mso-bidi-font-weight: normal;\"><span style=\"font-family: Arial, sans-serif;\">, </span></strong><span style=\"font-family: Arial, sans-serif;\">количество занимающихся воспитанников 110 спортсменов из 10 возрастных групп (2006-2015г.р.). </span><span style=\"font-family: Arial, sans-serif;\">Команда &laquo;</span><span lang=\"EN-US\" style=\"font-family: Arial, sans-serif;\">NOMAD</span><span style=\"font-family: Arial, sans-serif;\">&raquo; принимает</span><span style=\"font-family: Arial, sans-serif;\"> участие в Чемпионате Республики Казахстан по хоккею с шайбой среди детско-юношеских команд</span></span></p>', '<p style=\"text-align: justify;\"><span lang=\"KZ\" style=\"font-size: 12pt; line-height: 107%; font-family: \'Times New Roman\', serif;\"><strong>Тарихы</strong>: &laquo;Hockey&nbsp;Planet&raquo; балаларға арналған хоккей мектебі 2016 жылы құрылды, мектепте 10 жастық топтардан 110 спортшылар оқиды (2006-2015 ж.т.). &laquo;NOMAD&raquo; командасы Қазақстан Республикасының балалар мен жасөспірімдер командаларының арасында шайбалы хоккей бойынша чемпионатына қатысады.&nbsp; &nbsp;</span></p>', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '<p><strong>Полное название:</strong> ОФ &laquo;Детская хоккейная школа &laquo;HOCKEY PLANET&raquo;<br /><strong>Хоккейная команда:</strong> Brigantina<br /><strong>Руководитель:</strong> Бори', '<p class=\"MsoNormal\"><span style=\"font-size: 12pt;\"><span style=\"line-height: 107%; font-family: \'Times New Roman\', serif; color: black;\">&laquo;NOMAD&raquo;</span><span lang=\"KZ\" style=\"line', '3-of-detskaya-khokkeynaya-shkola-hockey-planet', '0', NULL, NULL, NULL, 0, 1, '2020-05-20 09:03:37', '2020-07-10 11:58:16'),
(4, NULL, '/images/1594354597.png', 'ЧУ «Школа хоккейного мастерства «BRIGANTINA»', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '«BRIGANTINA» хоккей шеберлігінің мектебі» ЖМ', NULL, '<p class=\"MsoNormalCxSpMiddle\" style=\"text-align: justify; line-height: normal;\"><strong><span style=\"font-size: 10.0pt; font-family: \'Arial\',\'sans-serif\';\">История:</span></strong><span style=\"font-size: 10.0pt; font-family: \'Arial\',\'sans-serif\';\"> Частная хоккейная школа основана в 2016 года, количество занимающихся составляет более 60 спортсменов по 5 возрастным группам (2008-2012г.р.) Команда &laquo;</span><span lang=\"EN-US\" style=\"font-size: 10.0pt; font-family: \'Arial\',\'sans-serif\'; mso-ansi-language: EN-US;\">BRIGANTINA</span><span style=\"font-size: 10.0pt; font-family: \'Arial\',\'sans-serif\';\">&raquo; принимает</span><span style=\"font-size: 10.0pt; font-family: \'Arial\',\'sans-serif\'; mso-fareast-font-family: \'Times New Roman\'; mso-fareast-language: RU;\"> участие в Чемпионате Республики Казахстан по хоккею с шайбой среди детско-юношеских команд</span></p>', '<p style=\"text-align: justify;\"><span lang=\"KZ\" style=\"font-size: 12pt; line-height: 107%; font-family: \'Times New Roman\', serif;\"><strong>Тарихы:</strong> Жеке хоккей мектебі 2016 жылы құрылды, мектепте 5 жастық топтардан 60-тан астам спортшылар оқиды (2008-2012 ж.т.). &laquo;BRIGANTINA&raquo; командасы Қазақстан Республикасының балалар мен жасөспірімдер командаларының арасында шайбалы хоккей бойынша чемпионатына қатысады.</span></p>', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '<p><strong>Полное название:</strong> ЧУ &laquo;Школа хоккейного мастерства &laquo;BRIGANTINA&raquo;<br /><strong>Хоккейная команда:</strong> Brigantina<br /><strong>Руководитель:</strong> Бау', '<p class=\"MsoNormal\"><span lang=\"KZ\" style=\"font-size: 12.0pt; line-height: 107%; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-ansi-la', '4-chu-shkola-khokkeynogo-masterstva-brigantina', '0', NULL, NULL, NULL, 0, 1, '2020-05-20 09:04:38', '2020-07-10 11:56:54'),
(5, NULL, '/images/1594354589.png', 'Детский хоккейный клуб «ДИНАМО АЛМАТЫ»', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '«ДИНАМО АЛМАТЫ» балаларға арналған хоккей клубы', NULL, '<p class=\"MsoNormalCxSpMiddle\" style=\"text-align: justify; line-height: normal;\"><strong style=\"mso-bidi-font-weight: normal;\"><span style=\"font-size: 10.0pt; font-family: \'Arial\',\'sans-serif\';\">История:</span></strong><span style=\"font-size: 10.0pt; font-family: \'Arial\',\'sans-serif\';\"> Детский хоккейный клуб &laquo;ДИНАМО АЛМАТЫ&raquo; было основано </span><span style=\"font-size: 10.0pt; font-family: \'Arial\',\'sans-serif\'; mso-fareast-language: RU; mso-no-proof: yes;\">2019 года</span><span style=\"font-size: 10.0pt; font-family: \'Arial\',\'sans-serif\';\">, численность занимающихся составляет более 220 спортсменов по 6 возрастным группам (2015-2010г.р.). Команда &laquo;ДИНАМО&raquo; принимает</span><span style=\"font-size: 10.0pt; font-family: \'Arial\',\'sans-serif\'; mso-fareast-font-family: \'Times New Roman\'; mso-fareast-language: RU;\"> участие в Чемпионате Республики Казахстан по хоккею с шайбой среди детско-юношеских команд</span></p>', '<p style=\"text-align: justify;\"><strong><span lang=\"KZ\" style=\"font-size: 12pt; line-height: 107%; font-family: \'Times New Roman\', serif;\">Тарихы: </span></strong><span lang=\"KZ\" style=\"font-size: 12pt; line-height: 107%; font-family: \'Times New Roman\', serif;\">&laquo;ДИНАМО АЛМАТЫ&raquo; балаларға арналған хоккей клубы 2019 жылы құрылды, мектепте 6 жастық топтардан 220-ден астам спортшылар оқиды (2015-2010 ж.т.). &laquo;ДИНАМО&raquo; командасы Қазақстан Республикасының балалар мен жасөспірімдер командаларының арасында шайбалы хоккей бойынша чемпионатына қатысады.</span></p>', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '<p><strong>Полное название:</strong> Детский хоккейный клуб &laquo;ДИНАМО АЛМАТЫ&raquo; <br /><strong>Хоккейная команда:</strong> Динамо<br /><strong>Руководитель:</strong> Богайчук Иван Юрье', '<p class=\"MsoNormal\"><span lang=\"KZ\" style=\"font-size: 12.0pt; line-height: 107%; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-ansi-la', '5-detskiy-khokkeynyy-klub-dinamo-almaty', '0', NULL, NULL, NULL, 0, 1, '2020-05-20 09:05:48', '2020-07-10 11:54:34'),
(6, NULL, '/images/1594354582.png', 'Хоккейный клуб «МЕДВЕДИ»', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '«МЕДВЕДИ» хоккей клубы', NULL, '<p>История: Хоккейный клуб основан в 2014 году, количество занимающихся 300 спортсменов по 12 возрастным группам (2006-2015г.р.)&nbsp;</p>\n<p>Команда &laquo;МЕДВЕДИ&raquo; принимает участие в Чемпионате Республики Казахстан по хоккею с шайбой среди детско-юношеских команд&nbsp; &nbsp; &nbsp;</p>\n<p>&nbsp;</p>', '<p><span lang=\"KZ\" style=\"font-size: 12pt; line-height: 107%; font-family: \'Times New Roman\', serif;\"><strong>Тарихы:</strong> Хоккей клубы 2014 жылы құрылды, оқушылардың саны &ndash; 12 жастық топтардан 300 спортшы (2006-2015 ж.т.). &laquo;МЕДВЕДИ&raquo; командасы Қазақстан Республикасының балалар мен жасөспірімдер командаларының арасында шайбалы хоккей бойынша чемпионатына қатысады.&nbsp;&nbsp;</span></p>', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '<p><strong>Полное название:</strong> Хоккейный клуб&laquo;МЕДВЕДИ&raquo;<br /><strong>Хоккейная команда:</strong> Медведи<br /><strong>Руководитель:</strong> Штельмайстер Роман Брониславович<', '<p class=\"MsoNormal\"><span lang=\"KZ\" style=\"font-size: 12.0pt; line-height: 107%; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-ansi-la', '6-khokkeynyy-klub-medvedi', '0', NULL, NULL, NULL, 0, 1, '2020-05-20 09:06:54', '2020-07-10 11:52:45'),
(7, NULL, '/images/1594354565.png', 'Детский хоккейный клуб «Стрижи»', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '«Стрижи» балаларға арналған хоккей клубы', NULL, '<p>История: Детский хоккейный клуб &laquo;Стрижи&raquo; основано в 2015 году, количество занимающихся составляет 228 спортсменов в 10 возрастных группах (2006-2015г.р.) Команда &laquo;СТРИЖИ&raquo; принимает участие в Чемпионате Республики Казахстан по хоккею с шайбой среди детско-юношеских команд. Лучшие достижения команды: Чемпион Республики Казахстан (сезон 2017-2018гг., среди возрастной группы 2007г.р. группе &laquo;А&raquo;). Двухкратный серебренные призёр Чемпионата Республики Казахстан (сезон 2016-2017гг. и 2018-2019гг. среди возрастной группы 2007г.р. группа &laquo;А&raquo;)&nbsp; &nbsp;&nbsp;</p>\n<p>&nbsp;</p>', '<p><span lang=\"KZ\" style=\"font-size: 12pt; line-height: 107%; font-family: \'Times New Roman\', serif;\"><strong>Тарихы:</strong> &laquo;Стрижи&raquo; балаларға арналған хоккей клубы 2015 жылы құрылған, оқушылар саны &ndash; 10 жастық топтардан 228 спортшы (2006-2015 ж.т.). &laquo;СТРИЖИ&raquo; командасы </span><span lang=\"KZ\" style=\"font-size: 12pt; line-height: 107%; font-family: \'Times New Roman\', serif;\">Қазақстан Республикасының балалар мен жасөспірімдер командаларының арасында шайбалы хоккей бойынша чемпионатына қатысады. Команданың үздік жетістіктері: Қазақстан Республикасының чемпионы (2017-2018 ж.ж. маусымында &laquo;А&raquo; тобында 2007 ж.т. жастық топ арасында). Қазақстан Республикасы Чемпионатының екі мәрте күміс жүлдегері (2016-2017 ж.ж. және 2018-2019 ж.ж. маусымында &laquo;А&raquo; тобында 2007 ж.т. жастық топ арасында). &nbsp;</span></p>', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '<p><strong>Полное название:</strong> ТОО &laquo;Спорт Клуб Аспан&raquo;<br /><strong>Хоккейная команда:</strong> Стрижи<br /><strong>Руководитель:</strong> Утеев Инар Мамырбекович<br /><stron', '<p class=\"MsoNormal\"><span lang=\"KZ\" style=\"font-size: 12.0pt; line-height: 107%; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-ansi-la', '7-detskiy-khokkeynyy-klub-strizhi', '0', NULL, NULL, NULL, 0, 1, '2020-05-20 09:10:02', '2020-07-10 11:49:03'),
(8, NULL, '/images/1594354552.png', 'Хоккейный клуб «RAHIMZHAN»', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '«RAHIMZHAN» хоккей клубы', NULL, '<p class=\"MsoNormal\" style=\"margin-bottom: .0001pt; line-height: normal; background: white;\"><span style=\"mso-bookmark: _Hlk39581837;\"><strong style=\"mso-bidi-font-weight: normal;\"><span style=\"font-size: 10.0pt; font-family: \'Arial\',\'sans-serif\';\">История:</span></strong></span><span style=\"mso-bookmark: _Hlk39581837;\"><span style=\"font-size: 10.0pt; font-family: \'Arial\',\'sans-serif\';\"> Команда &laquo;</span></span><span style=\"mso-bookmark: _Hlk39581837;\"><span lang=\"EN-US\" style=\"font-size: 10.0pt; font-family: \'Arial\',\'sans-serif\'; mso-fareast-font-family: Calibri; mso-ansi-language: EN-US; mso-fareast-language: RU; mso-bidi-font-weight: bold;\">RAHIMZHAN</span></span><span style=\"mso-bookmark: _Hlk39581837;\"><span style=\"font-size: 10.0pt; font-family: \'Arial\',\'sans-serif\';\">&raquo; принимает</span></span><span style=\"mso-bookmark: _Hlk39581837;\"><span style=\"font-size: 10.0pt; font-family: \'Arial\',\'sans-serif\'; mso-fareast-font-family: \'Times New Roman\'; mso-fareast-language: RU;\"> участие в Чемпионате Республики Казахстан по хоккею с шайбой среди детско-юношеских команд</span></span></p>', '<p><span lang=\"KZ\" style=\"font-size: 12pt; line-height: 107%; font-family: \'Times New Roman\', serif;\"><strong>Тарихы:</strong> &laquo;RAHIMZHAN&raquo; командасы </span><span lang=\"KZ\" style=\"font-size: 12pt; line-height: 107%; font-family: \'Times New Roman\', serif;\">Қазақстан Республикасының балалар мен жасөспірімдер командаларының арасында шайбалы хоккей бойынша чемпионатына қатысады. &nbsp;&nbsp;</span></p>', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '<p><strong>Полное название:</strong> Хоккейный клуб &laquo;RAHIMZHAN&raquo;<br /><strong>Хоккейная команда:</strong> Рахимжан<br /><strong>Руководитель:</strong> Осинцев Сергей Сергеевич<br /', '<p class=\"MsoNormal\"><span lang=\"KZ\" style=\"font-size: 12.0pt; line-height: 107%; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-ansi-la', '8-khokkeynyy-klub-rahimzhan', '0', NULL, NULL, NULL, 0, 1, '2020-05-20 09:11:14', '2020-07-10 11:46:27'),
(9, NULL, '/images/1594354544.png', 'ТОО «Спорт Клуб Аспан» г. Алматы', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '«Аспан Спорт Клубы» ЖШС Алматы қ.', NULL, '<p class=\"MsoNormal\" style=\"margin-bottom: .0001pt; line-height: normal; background: white;\"><span style=\"font-size: 10.0pt; font-family: \'Arial\',\'sans-serif\'; mso-fareast-font-family: Calibri; mso-fareast-language: RU;\">На базе спортивного клуба функционирует</span></p>\n<p class=\"MsoNormal\" style=\"margin-bottom: .0001pt; line-height: normal; background: white;\"><strong style=\"mso-bidi-font-weight: normal;\"><span style=\"font-size: 10.0pt; font-family: \'Arial\',\'sans-serif\'; mso-fareast-font-family: Calibri; mso-fareast-language: RU;\">Детский Хоккейный Клуб &laquo;Стрижи&raquo;</span></strong></p>\n<p class=\"MsoNormal\" style=\"margin-bottom: .0001pt; line-height: normal; background: white;\"><a href=\"mailto:info@aspanhoc%D0%BAey.kz\"><span style=\"font-size: 10.0pt; font-family: \'Arial\',\'sans-serif\'; mso-fareast-font-family: Calibri; color: blue; mso-fareast-language: RU;\">info@aspanhocкey.kz</span></a><span style=\"font-size: 10.0pt; font-family: \'Arial\',\'sans-serif\'; mso-fareast-font-family: Calibri; mso-fareast-language: RU;\"><br /></span><a href=\"http://www.xn--aspanhocey-cui.kz/\"><span style=\"font-size: 10.0pt; font-family: \'Arial\',\'sans-serif\'; mso-fareast-font-family: Calibri; mso-fareast-language: RU;\">www.aspanhocкey.kz</span></a></p>', '<p><span lang=\"KZ\" style=\"font-size: 12pt; line-height: 107%; font-family: \'Times New Roman\', serif;\">Спорт клубының базасында &laquo;Стрижи&raquo; балаларға арналған хоккей клубы жұмыс істейді.</span></p>\n<p><span lang=\"KZ\" style=\"font-size: 12pt; line-height: 107%; font-family: \'Times New Roman\', serif;\"><a style=\"font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 14px;\" href=\"mailto:info@aspanhoc%D0%BAey.kz\"><span style=\"font-size: 10.0pt; font-family: \'Arial\',\'sans-serif\'; mso-fareast-font-family: Calibri; color: blue; mso-fareast-language: RU;\">info@aspanhocкey.kz</span></a><span style=\"font-size: 10.0pt; font-family: \'Arial\',\'sans-serif\'; mso-fareast-font-family: Calibri; mso-fareast-language: RU;\"><br /></span><a style=\"font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 14px;\" href=\"http://www.xn--aspanhocey-cui.kz/\"><span style=\"font-size: 10.0pt; font-family: \'Arial\',\'sans-serif\'; mso-fareast-font-family: Calibri; mso-fareast-language: RU;\">www.aspanhocкey.kz</span></a></span></p>', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '9-too-sport-klub-aspan-g-almaty', '0', NULL, NULL, NULL, 0, 0, '2020-05-20 09:12:06', '2020-07-10 11:31:24'),
(10, NULL, '/images/1594354534.png', 'Академия хоккея «АRLAN» имени Айгайбекова Р.Б.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Айғайбеков Р.Б. атындағы «АRLAN» хоккей академиясы', NULL, '<p class=\"MsoNormal\" style=\"margin-bottom: .0001pt; line-height: normal; background: white;\"><strong><span style=\"font-size: 10.0pt; font-family: \'Arial\',\'sans-serif\'; mso-fareast-font-family: \'Times New Roman\'; mso-fareast-language: RU;\">История:</span></strong><span style=\"font-size: 10.0pt; font-family: \'Arial\',\'sans-serif\'; mso-fareast-font-family: \'Times New Roman\'; mso-fareast-language: RU; mso-bidi-font-weight: bold;\"> Академия хоккея &laquo;<a name=\"_Hlk39588929\"></a>А</span><span style=\"mso-bookmark: _Hlk39588929;\"><span lang=\"EN-US\" style=\"font-size: 10.0pt; font-family: \'Arial\',\'sans-serif\'; mso-fareast-font-family: \'Times New Roman\'; mso-ansi-language: EN-US; mso-fareast-language: RU; mso-bidi-font-weight: bold;\">RLAN</span></span><span style=\"font-size: 10.0pt; font-family: \'Arial\',\'sans-serif\'; mso-fareast-font-family: \'Times New Roman\'; mso-fareast-language: RU; mso-bidi-font-weight: bold;\">&raquo; имени Айгайбекова Р.Б основана в 2019 году, в Академии занимаются 130 воспитанников по 7 возрастным группам. </span><span style=\"font-size: 10.0pt; font-family: \'Arial\',\'sans-serif\';\">Команда &laquo;</span><span style=\"font-size: 10.0pt; font-family: \'Arial\',\'sans-serif\'; mso-fareast-font-family: \'Times New Roman\'; mso-fareast-language: RU; mso-bidi-font-weight: bold;\">А</span><span lang=\"EN-US\" style=\"font-size: 10.0pt; font-family: \'Arial\',\'sans-serif\'; mso-fareast-font-family: \'Times New Roman\'; mso-ansi-language: EN-US; mso-fareast-language: RU; mso-bidi-font-weight: bold;\">RLAN</span><span style=\"font-size: 10.0pt; font-family: \'Arial\',\'sans-serif\';\">&raquo; принимает</span><span style=\"font-size: 10.0pt; font-family: \'Arial\',\'sans-serif\'; mso-fareast-font-family: \'Times New Roman\'; mso-fareast-language: RU;\"> участие в Чемпионате Республики Казахстан по хоккею с шайбой среди детско-юношеских команд в возрастных группах 2003г.р., 2005г.р., 2006г.р.</span><span style=\"font-size: 9.0pt; font-family: \'Arial\',\'sans-serif\'; mso-fareast-font-family: \'Times New Roman\'; mso-fareast-language: RU;\"><span style=\"mso-spacerun: yes;\">&nbsp;&nbsp;&nbsp;&nbsp; </span></span></p>', '<p><span lang=\"KZ\" style=\"font-size: 12pt; line-height: 107%; font-family: \'Times New Roman\', serif;\"><strong>Тарихы:</strong> Айғайбеков Р.Б. атындағы &laquo;АRLAN&raquo; хоккей академиясы 2019 жылы негізделген. Оқушылар саны &ndash; 7 жастық топтардан 130 тәрбиеленушілер. &laquo;АRLAN&raquo; командасы 2003, 2005, 2006 ж.т. жастық топтарда Қазақстан Республикасының балалар мен жасөспірімдер командаларының арасында шайбалы хоккей бойынша чемпионатына қатысады.&nbsp; &nbsp;</span></p>', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '<p><strong>Полное название:</strong> Академия хоккея &laquo;АRLAN&raquo; имени Айгайбекова Р.Б.<br /><strong>Хоккейная команда:</strong> Арлан<br /><strong>Руководитель:</strong> Севастьянова', '<p class=\"MsoNormal\"><span lang=\"KZ\" style=\"font-size: 12.0pt; line-height: 107%; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-ansi-la', '10-akademiya-khokkeya-arlan-imeni-aygaybekova-rb', '0', NULL, NULL, NULL, 0, 1, '2020-05-20 09:13:32', '2020-07-10 11:30:48'),
(11, NULL, '/images/1594354526.png', 'Восточно-Казахстанская областная специализированная детско-юношеская школа олимпийского резерва «TORPEDO» г. Усть-Каменогорск', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '«TORPEDO» Шығыс Қазақстан облыстық мамандандырылған балалар мен жасөспірімдерге арналған олимпиадалық қордың мектебі, Өскемен қ.', NULL, '<p><strong><span style=\"font-size: 10.0pt; line-height: 107%; font-family: \'Arial\',\'sans-serif\'; mso-fareast-font-family: \'Times New Roman\'; mso-ansi-language: RU; mso-fareast-language: RU; mso-bidi-language: AR-SA;\">История:</span></strong><span style=\"font-size: 10.0pt; line-height: 107%; font-family: \'Arial\',\'sans-serif\'; mso-fareast-font-family: \'Times New Roman\'; mso-ansi-language: RU; mso-fareast-language: RU; mso-bidi-language: AR-SA;\"> Восточно-Казахстанская областная специализированная школа олимпийского резерва &laquo;Т</span><span lang=\"EN-US\" style=\"font-size: 10.0pt; line-height: 107%; font-family: \'Arial\',\'sans-serif\'; mso-fareast-font-family: \'Times New Roman\'; mso-ansi-language: EN-US; mso-fareast-language: RU; mso-bidi-language: AR-SA;\">ORPEDO</span><span style=\"font-size: 10.0pt; line-height: 107%; font-family: \'Arial\',\'sans-serif\'; mso-fareast-font-family: \'Times New Roman\'; mso-ansi-language: RU; mso-fareast-language: RU; mso-bidi-language: AR-SA;\">&raquo; была основана в 1965 году. Число занимающихся более 650 детей, 29 тренеров в том числе женское отделение, 12 возрастных групп (2015-2003г.р.). Воспитанники хоккейной школы участвуют в Чемпионате Республики Казахстан <a name=\"_Hlk39490686\"></a>среди детско-юношеских команд и в Первенстве Российской Федерации.</span><span style=\"font-size: 10.0pt; line-height: 107%; font-family: \'Arial\',\'sans-serif\'; mso-fareast-font-family: Calibri; mso-fareast-theme-font: minor-latin; mso-ansi-language: RU; mso-fareast-language: EN-US; mso-bidi-language: AR-SA;\"> Воспитанники хоккейной школы неоднократно становились победителями и призерами в республиканских и международных соревнованиях</span><span style=\"font-size: 9.0pt; line-height: 107%; font-family: \'Arial\',\'sans-serif\'; mso-fareast-font-family: Calibri; mso-fareast-theme-font: minor-latin; mso-ansi-language: RU; mso-fareast-language: EN-US; mso-bidi-language: AR-SA;\">.</span><span style=\"font-size: 10.0pt; line-height: 107%; font-family: \'Arial\',\'sans-serif\'; mso-fareast-font-family: \'Times New Roman\'; mso-ansi-language: RU; mso-fareast-language: RU; mso-bidi-language: AR-SA;\"> Знаменитыми воспитанниками школы являются Олимпийский чемпион в составе сборной СССР на Олимпиаде 1976г. в г. Инсбруке (Австрия) Борис Александров, чемпион Мира в составе СССР, Заслуженный мастер спорта СССР Евгений Паладьев. Более 100 воспитанников хоккейной школы играли и играют в НХЛ, а именно: Евгений Набоков, Андрей Трощинский, Антон Худобин, Андрей Райский. В КХЛ братья Корешковы Александр и Евгений, Игорь Земляной, Михаил Бородулин, Игорь Никитин, Алексей Трощинский, Виталий Еремеев, Федор Полищук, Рустам Есеркенов и многие другие воспитанники нынешнего поколения действующие игроки: Старченко Роман, Талгат Жайлауов, Савченко Роман, Кошелев Семен, Асетов Алихан, Шестаков Аркадий и другие воспитанники играют в чемпионатах&nbsp; ВХЛ РФ и РК.</span></p>', '<p style=\"text-align: justify;\"><span lang=\"KZ\" style=\"font-size: 12pt; line-height: 107%; font-family: \'Times New Roman\', serif;\"><strong>Тарихы:</strong> &laquo;TORPEDO&raquo; Шығыс Қазақстан облыстық мамандандырылған балалар мен жасөспірімдерге арналған олимпиадалық қордың мектебі 1965 жылы құрылды. Тәрбиеленушілер саны &ndash; 650 астам бала, 29 жаттықтырушы, соның ішінде әйелдер бөлімшесі, 12 жастық топ (2015-2003 ж.т.). Хоккей мектебінің тәрбиеленушілері </span><span lang=\"KZ\" style=\"font-size: 12.0pt; line-height: 107%; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: Calibri; mso-fareast-theme-font: minor-latin; mso-ansi-language: KZ; mso-fareast-language: EN-US; mso-bidi-language: AR-SA;\">Қазақстан Республикасының Чемпионатына және Ресей Федерациясының біріншілігіне қатысады. Мектеп тәрбиеленушілері бірнеше рет республикалық және халықаралық жарыстардың жеңімпаздары мен жүлдегерлері болып атанды. Мектептің танымал тәрбиеленушілері 1976 ж. Инсбрук қ. (Австрия) Олимпиадасында КСРО құрама команданың құрамында Олимпиада чемпионы Борис Александров, КСРО құрамында Әлем чемпионы, КСРО еңбең сіңірген спорт шебері Евгений Паладьев. Хоккей мектебінің 100-ден астам тәрбиеленушілері ҰХЛ ойнады, атап айтқанда: </span><span style=\"font-size: 12pt; line-height: 107%; font-family: \'Times New Roman\', serif;\">Евгений Набоков, Андрей Трощинский, Антон Худобин, Андрей Райский</span><span lang=\"KZ\" style=\"font-size: 12pt; line-height: 107%; font-family: \'Times New Roman\', serif;\">. КХЛ-да ағайындылар Александр және Евгений Корешковтар, Игорь Земляной, Михаил Бородулин, Игорь Никитин, Алексей Трощинский, Виталий Еремеев, Федор Полищук, Рустам Есеркенов және көптеген басқа қазіргі ұрпақтың тәрбиеленушілері, ойыншылар: Старченко Роман, Талгат Жайлауов, Савченко Роман, Кошелев Семен, Асетов Алихан, Шестаков Аркадий және басқа тәрбиеленушілер РФ және ҚР ЖХЛ чемпионаттарында ойнайды.</span></p>', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '<p><strong>Полное название:</strong> Восточно-Казахстанская областная специализированная детско-юношеская школа олимпийского резерва &laquo;TORPEDO&raquo; <br /><strong>Хоккейная команда:</st', '<p class=\"MsoNormal\"><span lang=\"KZ\" style=\"font-size: 12.0pt; line-height: 107%; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-ansi-la', '11-vostochno-kazakhstanskaya-oblastnaya-spetsializirovannaya-detsko-yunosheskaya-shkola-olimpiyskogo-rezerva-torpedo-g-ust-kamenogorsk', '0', NULL, NULL, NULL, 0, 1, '2020-05-20 09:14:50', '2020-07-10 11:28:52'),
(12, NULL, '/images/1594354517.png', 'КГУ «Областная специализированная детско-юношеская школа олимпийского резерва по хоккею с шайбой» Управления физической культуры и спорта Карагандинской области', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Қарағанды облысының Дене шынықтыру және спорт басқармасының «Облыстық мамандандырылған балалар мен жасөспірімдерге арналған шайбалы хоккей бойынша олимпиадалық қордың мектебі» КММ', NULL, '<p class=\"MsoNormal\"><strong style=\"mso-bidi-font-weight: normal;\"><span style=\"font-size: 10.0pt; line-height: 107%; font-family: \'Arial\',\'sans-serif\';\">История:</span></strong><span style=\"font-size: 10.0pt; line-height: 107%; font-family: \'Arial\',\'sans-serif\';\"> Распоряжением Акима Карагандинской области 2003 года была создана &laquo;Областная Специализированная детско-юношеская школа олимпийского резерва по хоккею с шайбой&raquo;. В ОСДЮШОР по хоккею с шайбой культивируется 2 вида спорта: хоккей с шайбой и фигурное катание на коньках, школа принимает участие в Чемпионате Республики Казахстан по хоккею с шайбой среди детско-юношеских команд 2 хоккейными командами &laquo;Юность&raquo; и &laquo;Юность-Металлург&raquo;.<span style=\"mso-spacerun: yes;\">&nbsp; </span>Число занимающихся по хоккею составляет более 500 спортсменов по 12 возрастным группам. <a name=\"_Hlk39594430\"></a>Воспитанники хоккейной школы неоднократно становились победителями и призерами в республиканских и международных соревнованиях</span></p>', '<p style=\"text-align: justify;\"><span lang=\"KZ\" style=\"font-size: 12pt; line-height: 107%; font-family: \'Times New Roman\', serif;\"><strong>Тарихы:</strong> Қарағанды облысы әкімінің 2003 жылғы қаулысымен &laquo;Облыстық мамандандырылған балалар мен жасөспірімдерге арналған шайбалы хоккей бойынша олимпиадалық қордың мектебі&raquo; құрылды. Облыстық мамандандырылған балалар мен жасөспірімдерге арналған шайбалы хоккей бойынша олимпиадалық қордың мектебінде шайбалы хоккей бойынша 2 спорт түрі дәріптеледі: шайбалы хоккей және конькимен мәнерлеп сырғанау. </span><span lang=\"KZ\" style=\"font-size: 12pt; line-height: 107%; font-family: \'Times New Roman\', serif;\">&laquo;Юность&raquo; және &laquo;Юность-Металлург&raquo; мектептің 2 хоккей командасы Қазақстан Республикасының балалар мен жасөспірімдер командаларының арасында шайбалы хоккей бойынша чемпионатына қатысады. Хоккейді үйренетін оқушылардың саны &ndash; 12 жастық топтарда 500-ден астам спортшылар. Хоккей мектебінің тәрбиеленушілері бірнеше рет республикалық және халықаралық жарыстардың жеңімпаздары және жүлдегерлері болып атанды.&nbsp; &nbsp;&nbsp;</span></p>', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '<p><strong>Полное название:</strong> КГУ &laquo;Областная специализированная детско-юношеская школа олимпийского резерва по хоккею с шайбой&raquo; Управления физической культуры и спорта Кара', '<p class=\"MsoNormal\"><span lang=\"KZ\" style=\"font-size: 12.0pt; line-height: 107%; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-ansi-la', '12-kgu-oblastnaya-spetsializirovannaya-detsko-yunosheskaya-shkola-olimpiyskogo-rezerva-po-khokkeyu-s-shayboy-upravleniya-fizicheskoy-kultury-i-sporta-karagandinskoy-oblasti', '0', NULL, NULL, NULL, 0, 1, '2020-05-20 09:17:20', '2020-07-10 11:27:34'),
(13, NULL, '/images/1594354509.png', 'Общественный Фонд хоккейный клуб «ПСО» г. Экибастуз', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '«ПСО» хоккей клубы қоғамдық қоры, Екібастұз қ.', NULL, '<p class=\"MsoNormal\" style=\"margin-bottom: .0001pt; text-align: justify; line-height: normal; background: white;\"><strong style=\"mso-bidi-font-weight: normal;\"><span style=\"font-size: 10.0pt; font-family: \'Arial\',\'sans-serif\';\">История:</span></strong><span style=\"font-size: 10.0pt; font-family: \'Arial\',\'sans-serif\';\"> Хоккейный клуб &laquo;ПСО&raquo; создан в 2004 году. В 2005 году открылось детская хоккейная школа, в настоящее время в клубе занимаются 200 спортсменов, 9 тренеров. Команда &laquo;</span><span style=\"font-size: 10.0pt; font-family: \'Arial\',\'sans-serif\'; mso-fareast-font-family: \'Times New Roman\'; mso-fareast-language: RU; mso-bidi-font-weight: bold;\">ПСО</span><span style=\"font-size: 10.0pt; font-family: \'Arial\',\'sans-serif\';\">&raquo; принимает</span><span style=\"font-size: 10.0pt; font-family: \'Arial\',\'sans-serif\'; mso-fareast-font-family: \'Times New Roman\'; mso-fareast-language: RU;\"> участие в Чемпионате Республики Казахстан по хоккею с шайбой среди детско-юношеских команд в возрастных группах 2004-2005г.р.,2007г.р.</span><span style=\"font-size: 9.0pt; font-family: \'Arial\',\'sans-serif\'; mso-fareast-font-family: \'Times New Roman\'; mso-fareast-language: RU;\"><span style=\"mso-spacerun: yes;\">&nbsp;&nbsp;&nbsp;&nbsp; </span></span></p>', '<p><span lang=\"KZ\" style=\"font-size: 12pt; line-height: 107%; font-family: \'Times New Roman\', serif;\"><strong>Тарихы:</strong> &laquo;ПСО&raquo; хоккей клубы 2004 жылы құрылды. 2005 жылы балаларға арналған хоккей мектебі ашылды, қазіргі уақытта мектепте 200 спортшы оқиды, 9 жаттықтырушы жұмыс істейді. &laquo;ПСО&raquo; командасы 2004-2005 ж.т., 2007 ж.т. жастық топтарда Қазақстан Республикасының балалар мен жасөспірімдер командалары арасында шайбалы хоккей бойынша чемпионатына қатысады.&nbsp;&nbsp;</span></p>', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '<p><strong>Полное название:</strong> ОФ Хоккейный клуб &laquo;ПСО&raquo; <br /><strong>Хоккейная команда:</strong> ПСО <br /><strong>Руководитель:</strong> Дручинин Владислав Сергеевич <br />', '<p class=\"MsoNormal\"><span lang=\"KZ\" style=\"font-size: 12.0pt; line-height: 107%; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-ansi-la', '13-obshchestvennyy-fond-khokkeynyy-klub-pso-g-ekibastuz', '0', NULL, NULL, NULL, 0, 1, '2020-05-20 09:18:38', '2020-07-10 11:21:23'),
(14, NULL, '/images/1594401479.png', 'КГУ Шымкентская городская специализированная Детско-юношеская спортивная школа олимпийского резерва №8 по зимним видам спорта г. Шымкент', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '№8 Шымкент қаласының қыс спорт түрлері бойынша мамандандырылған балалар мен жасөспірімдерге арналған спорт мектебі КММ, Шымкент қ.', NULL, '<p class=\"MsoNormal\"><strong><span style=\"font-size: 10.0pt; line-height: 107%; font-family: \'Arial\',\'sans-serif\'; mso-fareast-font-family: \'Times New Roman\'; mso-fareast-language: RU;\">История:</span></strong><span style=\"font-size: 10.0pt; line-height: 107%; font-family: \'Arial\',\'sans-serif\'; mso-fareast-font-family: \'Times New Roman\'; mso-fareast-language: RU; mso-bidi-font-weight: bold;\"> Шымкентская городская специализированная детско-юношеская спортивная школа олимпийского резерва №8 по зимним видам спорта основана в 2010 году. Число занимающихся составляет более 496 спортсменов по 6 видам спорта: хоккей с шайбой, фристайл, фигурное катание на коньках, шорт-трек, универсальный бой, летний биатлон. Количество занимающихся отделения хоккея с шайбой составляет 113 спортсменов по 5 возрастным группам (2008-2014г.р.).</span><span style=\"font-size: 10.0pt; line-height: 107%; font-family: \'Arial\',\'sans-serif\';\"> Команда &laquo;</span><span style=\"font-size: 10.0pt; line-height: 107%; font-family: \'Arial\',\'sans-serif\'; mso-fareast-font-family: \'Times New Roman\'; mso-fareast-language: RU; mso-bidi-font-weight: bold;\">ТУРАН</span><span style=\"font-size: 10.0pt; line-height: 107%; font-family: \'Arial\',\'sans-serif\';\">&raquo; принимает</span><span style=\"font-size: 10.0pt; line-height: 107%; font-family: \'Arial\',\'sans-serif\'; mso-fareast-font-family: \'Times New Roman\'; mso-fareast-language: RU;\"> участие в Чемпионате Республики Казахстан по хоккею с шайбой среди детско-юношеских команд</span></p>', '<p><span lang=\"KZ\" style=\"font-size: 12pt; line-height: 107%; font-family: \'Times New Roman\', serif;\"><strong>Тарихы:</strong> №8 Шымкент қаласының қыс спорт түрлері бойынша мамандандырылған балалар мен жасөспірімдерге арналған спорт мектебі 2010 жылы құрылды. Мектепте 6 спорт түрлерінен 496 астам спортшы оқиды: шайбалы хоккей, фристайл, конькимен мәнерлеп сырғанау, шорт-трек, әмбебап жекпе-жек, жазғы биатлон. Шайбалы хоккеймен айналысатындардың саны 5 жастық топтар бойынша 113 спортшы (2008-2014 ж.т.). &laquo;ТУРАН&raquo; командасы </span><span lang=\"KZ\" style=\"font-size: 12pt; line-height: 107%; font-family: \'Times New Roman\', serif;\">Қазақстан Республикасының балалар мен жасөспірімдер командалары арасында шайбалы хоккей бойынша чемпионатына қатысады.</span></p>', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '<p><strong>Полное название:</strong> ГУ Шымкентская городская специализированная Детско-юношеская спортивная школа олимпийского резерва №8 по зимним видам спорта <br /><strong>Хоккейная коман', '<p class=\"MsoNormal\"><span lang=\"KZ\" style=\"font-size: 12.0pt; line-height: 107%; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-ansi-la', '14-kgu-shymkentskaya-gorodskaya-spetsializirovannaya-detsko-yunosheskaya-sportivnaya-shkola-olimpiyskogo-rezerva-8-po-zimnim-vidam-sporta-g-shymkent', '0', NULL, NULL, NULL, 0, 1, '2020-05-20 09:19:53', '2020-07-10 11:19:38'),
(15, NULL, '/images/1594354481.png', 'КГУ «Детско-юношеская спортивная школа №1, отдела физической культуры и спорта города Павлодар, акимата города Павлодара', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Павлодар қаласы әкімдігінің Павлодар қаласының Дене шынықтыру және спорт бөлімінің «№1 балалар мен жасөспірімдерге арналған спорт мектебі» КММ', NULL, '<p class=\"MsoNormal\"><strong><span style=\"font-size: 10.0pt; line-height: 107%; font-family: \'Arial\',\'sans-serif\'; mso-fareast-font-family: \'Times New Roman\'; mso-fareast-language: RU;\">История:</span></strong><span style=\"font-size: 10.0pt; line-height: 107%; font-family: \'Arial\',\'sans-serif\'; mso-fareast-font-family: \'Times New Roman\'; mso-fareast-language: RU; mso-bidi-font-weight: bold;\"> Детско-юношеская спортивная школа №1 основана в 2005 году, численность занимающихся </span><span style=\"font-size: 10.0pt; line-height: 107%; font-family: \'Arial\',\'sans-serif\'; mso-fareast-font-family: \'Times New Roman\'; mso-fareast-language: RU;\">составляет более 205 спортсменов. В состав школы входит 5 отделений: хоккей с шайбой, фигурное катание на коньках, биатлон, лыжные гонки, фристайл.</span><span style=\"font-size: 10.0pt; line-height: 107%; font-family: \'Arial\',\'sans-serif\';\"> Команда &laquo;</span><span lang=\"EN-US\" style=\"font-size: 10.0pt; line-height: 107%; font-family: \'Arial\',\'sans-serif\'; mso-fareast-font-family: \'Times New Roman\'; mso-ansi-language: EN-US; mso-fareast-language: RU; mso-bidi-font-weight: bold;\">ERTIS</span><span style=\"font-size: 10.0pt; line-height: 107%; font-family: \'Arial\',\'sans-serif\';\">&raquo; принимает</span><span style=\"font-size: 10.0pt; line-height: 107%; font-family: \'Arial\',\'sans-serif\'; mso-fareast-font-family: \'Times New Roman\'; mso-fareast-language: RU;\"> участие в Чемпионате Республики Казахстан по хоккею с шайбой среди детско-юношеских команд</span><span style=\"font-size: 9.0pt; line-height: 107%; font-family: \'Arial\',\'sans-serif\'; mso-fareast-font-family: \'Times New Roman\'; mso-fareast-language: RU;\"><span style=\"mso-spacerun: yes;\">&nbsp;&nbsp;&nbsp;&nbsp; </span></span></p>', '<p><span lang=\"KZ\" style=\"font-size: 12pt; line-height: 107%; font-family: \'Times New Roman\', serif;\"><strong>Тарихы:</strong> &laquo;№1 балалар мен жасөспірімдерге арналған спорт мектебі 2005 жылы құрылды. Мектепте 205 астам спортшы оқиды. Мектептің құрамына 5 бөлімше кіреді: шайбалы хоккей, конькимен мәнерлеп сырғанау, биатлон, шаңғы жарысы, фристайл. &laquo;ERTIS&raquo; хоккей командасы Қазақстан Республикасының балалар мен жасөспірімдер командалары арасында шайбалы хоккей бойынша чемпионатына қатысады.</span></p>', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '<p><strong>Полное название:</strong> КГУ &laquo;Детско-юношеская спортивная школа №1, отдела физической культуры и спорта города Павлодар<br /><strong>Хоккейная команда:</strong> Ertis <br />', '<p class=\"MsoNormal\"><span lang=\"KZ\" style=\"font-size: 12.0pt; line-height: 107%; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-ansi-la', '15-kgu-detsko-yunosheskaya-sportivnaya-shkola-1-otdela-fizicheskoy-kultury-i-sporta-goroda-pavlodar-akimata-goroda-pavlodara', '0', NULL, NULL, NULL, 0, 1, '2020-05-20 09:21:42', '2020-07-10 11:17:27');
INSERT INTO `sections` (`id`, `parent_id`, `avatar`, `name_ru`, `open_graph_title_en`, `open_graph_title_kk`, `open_graph_title_ru`, `open_graph_description_en`, `open_graph_description_kk`, `open_graph_description_ru`, `city_en`, `city_kk`, `city_ru`, `name_kk`, `name_en`, `description_ru`, `description_kk`, `description_en`, `employees_ru`, `employees_kk`, `employees_en`, `accordion_ru`, `accordion_kk`, `accordion_en`, `meta_title_ru`, `meta_title_kk`, `meta_title_en`, `meta_description_ru`, `meta_description_kk`, `meta_description_en`, `meta_keywords_ru`, `meta_keywords_kk`, `meta_keywords_en`, `alt`, `annotation_en`, `annotation_ru`, `annotation_kk`, `alias`, `satrud`, `alias_ru`, `alias_kk`, `alias_en`, `views`, `is_published`, `created_at`, `updated_at`) VALUES
(16, NULL, '/images/1594354473.png', 'Коммунальное государственное казенное предприятие «Детско-юношеская спортивная школа города Аксу», государственного учреждения «Отдел физической культуры и спорта города Аксу», акимата города', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Ақсу қаласы әкімдігінің «Ақсу қаласының дене шынықтыру және спорт бөлімі» мемлекеттік мекемесінің «Ақсу қаласының балалар мен жасөспірімдерге арналған спорт мектебі» коммуналдық мемлекеттік қ', NULL, '<p class=\"MsoNormal\" style=\"margin-bottom: .0001pt; text-align: justify; line-height: normal; background: white;\"><strong style=\"mso-bidi-font-weight: normal;\"><span style=\"font-size: 10.0pt; font-family: \'Arial\',\'sans-serif\'; mso-fareast-font-family: \'Times New Roman\'; mso-fareast-language: RU;\">История:</span></strong><span style=\"font-size: 10.0pt; font-family: \'Arial\',\'sans-serif\'; mso-fareast-font-family: \'Times New Roman\'; mso-fareast-language: RU;\"> Детско-юношеская спортивная школа г. Аксу было открыто в 1966 году. В настоящее время в спортивной школе тренируются спортсмены по 14-ти видам спорта, общей численностью 1113 человек (из них 709 человек в городе и 404 человек в сельской местности). Работает 28 тренеров-преподавателей. Отделение по хоккею с шайбой в ДЮСШ открыто с сентября 2016 года. За период работы отделения была сформирована команда &laquo;Молния &ndash; 2009&raquo;, которая 2017-2018 учебном году приняла участие в 4-х турнирах по хоккею с шайбой, в 2-х из них становилась победителем и призером (Открытый турнир ДЮСШ г. Славгорода &ndash; 1 место) и второе место в Открытом Первенстве ДЮСШ г. Аксу. В августе 2018 года команда была заявлена <a name=\"_Hlk39571116\"></a>на участие в Чемпионате Республики Казахстан по хоккею с шайбой среди детско-юношеских команд (сезон 2018-2019 гг.). По итогам сезона ХК &laquo;Молния&raquo; заняла 2 место (группе В); По итогам сезона 2019-2020 гг. команда заняла 1 место (группа В).</span></p>', '<p><strong><span lang=\"KZ\" style=\"font-size: 12pt; line-height: 107%; font-family: \'Times New Roman\', serif;\">Тарихы</span></strong><span lang=\"KZ\" style=\"font-size: 12pt; line-height: 107%; font-family: \'Times New Roman\', serif;\">: Ақсу қаласының балалар мен жасөспірімдерге арналған спорт мектебі 1966 жылы құрылды. Қазіргі уақытта мектепте 14 спорт түрлері бойынша 1113 спортшы оқиды (олардың ішінде 709 спортшы қалада және 404 спортшы ауыл мекенде). 28 жаттықтырушы-мұғалімдер жұмыс істейді. Шайбалы хоккей бөлімшесі балалар мен жасөспірімдерге арналған спорт мектебінде 2016 жылдың қыркүйек айынан ашық. Осы уақыт ішінде </span><span lang=\"KZ\" style=\"font-size: 12pt; line-height: 107%; font-family: \'Times New Roman\', serif;\">&laquo;Молния &ndash; 2009&raquo; командасы құрылды, бұл команда 2017-2018 оқу жылында 4 шайбалы хоккей бойынша турнирлерге қатысып, 2-де жеңімпаз және жүлдегер болып атанды (Славгород қ. БЖАСМ Ашық турнирі &ndash; 1-ші орын) және Ақсу қ. БЖАСМ Ашық біріншілігінде 2-ші орын. 2018 жылдың тамыз айында команда Қазақстан Республикасының балалар мен жасөспірімдер командалары арасында шайбалы хоккей бойынша чемпионатына қатысуға тіркелді (2018-2019 ж.ж. маусымы). Маусым қорытындылары бойынша &laquo;Молния&raquo; ХК 2-ші орынға ие болды (В тобы); 2019-2020 ж.ж. маусымының қорытындылары бойынша команда 1-ші орын алды (В тобы).</span></p>', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '<p><strong>Полное название:</strong> Коммунальное государственное казенное предприятие &laquo;Детско-юношеская спортивная школа города Аксу&raquo;, государственного учреждения &laquo;Отдел фи', '<p class=\"MsoNormal\"><span lang=\"KZ\" style=\"font-size: 12.0pt; line-height: 107%; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-ansi-la', '16-kommunalnoe-gosudarstvennoe-kazennoe-predpriyatie-detsko-yunosheskaya-sportivnaya-shkola-goroda-aksu-gosudarstvennogo-uchrezhdeniya-otdel-fizicheskoy-kultury-i-sporta-goroda-aksu-akimata-g', '0', NULL, NULL, NULL, 0, 1, '2020-05-20 09:22:57', '2020-07-10 11:04:32'),
(17, NULL, '/images/1594354465.png', 'КГУ «Областная специализированная детско-юношеская спортивная школа имени Казбека Байболова» КГУ «Управление физической культуры и спорта акимата Северо-Казахстанской области»', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '«Солтүстік Қазақстан облысы әкімдігінің Дене шынықтыру және спорт басқармасы» КММ «Қазбек Байболов атындағы облыстық мамандандырылған балалар мен жасөспірімдерге арналған спорт мектебі» КММ', NULL, '<p>История: &laquo;Областная специализированная детско-юношеская спортивная школа имени Казбека Байболова&raquo; создана 2003 году. В школе 6 специализированных отделений: хоккей с шайбой, лыжные гонки, шорт-трек, биатлон, хоккей с мячом и конькобежный спорт. В отделение хоккея с шайбой занимаются 111 воспитанников по 3 возрастным группам (2006г.р.,2008г.р.,2010г.р.). Команда &laquo;QULAGER&raquo; принимает участие в Чемпионате Республики Казахстан по хоккею с шайбой среди детско-юношеских команд</p>\n<p>&nbsp;</p>', '<p><span lang=\"KZ\" style=\"font-size: 12pt; line-height: 107%; font-family: \'Times New Roman\', serif;\"><strong>Тарихы:</strong> Қазбек Байболов атындағы облыстық мамандандырылған балалар мен жасөспірімдерге арналған спорт мектебі 2003 жылы құрылды. Мектепте 6 мамандандырылған бөлімше жұмыс істейді: шайбалы хоккей, шаңғы жарысы, шорт-трек, биатлон, допты хоккей және конькимен жүгіру спорты. Шайбалы хоккей бөлімшесіне 3 жастық топтар бойынша 111 тәрбиеленушілер барады (2006 ж.т.,2008 ж.т., 2010 ж.т.). &laquo;QULAGER&raquo; командасы Қазақстан Республикасының балалар мен жасөспірімдер командалары арасында шайбалы хоккей бойынша чемпионатына қатысады.&nbsp; &nbsp;&nbsp;</span></p>', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '<p><strong>Полное название:</strong> КГУ &laquo;Областная специализированная детско-юношеская спортивная школа имени Казбека Байболова&raquo; КГУ &laquo;Управление физической культуры и спорт', '<p class=\"MsoNormal\"><span style=\"font-size: 12.0pt; line-height: 107%; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-fareast-language:', '17-kgu-oblastnaya-spetsializirovannaya-detsko-yunosheskaya-sportivnaya-shkola-imeni-kazbeka-baybolova-kgu-upravlenie-fizicheskoy-kultury-i-sporta-akimata-severo-kazakhstanskoy-oblasti', '0', NULL, NULL, NULL, 0, 1, '2020-05-20 09:24:50', '2020-07-10 11:00:16'),
(18, NULL, '/images/1594354455.png', 'Мангыстауская Федерация хоккея с шайбой', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Маңғыстау шайбалы хоккей федерациясы', NULL, '<p class=\"MsoNormal\" style=\"margin-bottom: .0001pt; line-height: normal; background: white;\"><strong style=\"mso-bidi-font-weight: normal;\"><span style=\"font-size: 10.0pt; font-family: \'Arial\',\'sans-serif\';\">История:</span></strong><span style=\"font-size: 10.0pt; font-family: \'Arial\',\'sans-serif\';\"> Хоккейный клуб создан в 2012 году, общее количество занимающихся составляет 60 спортсменов по разным возрастным группам (2004-2016г.р.) Команда &laquo;</span><span lang=\"EN-US\" style=\"font-size: 10.0pt; font-family: \'Arial\',\'sans-serif\'; mso-ansi-language: EN-US;\">CASPIY</span><span style=\"font-size: 10.0pt; font-family: \'Arial\',\'sans-serif\';\">&raquo; принимает</span><span style=\"font-size: 10.0pt; font-family: \'Arial\',\'sans-serif\'; mso-fareast-font-family: \'Times New Roman\'; mso-fareast-language: RU;\"> участие в Чемпионате Республики Казахстан по хоккею с шайбой среди детско-юношеских команд</span></p>', '<p><strong><span lang=\"KZ\" style=\"font-size: 12pt; line-height: 107%; font-family: \'Times New Roman\', serif;\">Тарихы</span></strong><span lang=\"KZ\" style=\"font-size: 12pt; line-height: 107%; font-family: \'Times New Roman\', serif;\">: Хоккей клубы 2012 жылы құрылды, мектеп оқушыларының жалпы саны &ndash; әр түрлі жастық топтарда 60 спортшы (2004-2016 ж.т.). &laquo;CASPIY&raquo; командасы Қазақстан Республикасының балалар мен жасөспірімдер командалары арасында шайбалы хоккей бойынша чемпионатына қатысады.</span></p>', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '<p><strong>Полное название:</strong>Мангыстауская Федерация хоккея с шайбой<br /><strong>Хоккейная команда:</strong>Caspiy<br /><strong>Руководитель:</strong> Шахов Дмитрий Александрович <br ', '<p class=\"MsoNormal\"><span lang=\"KZ\" style=\"font-size: 12.0pt; line-height: 107%; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-ansi-la', '18-mangystauskaya-federatsiya-khokkeya-s-shayboy', '0', NULL, NULL, NULL, 0, 1, '2020-05-20 09:26:06', '2020-07-10 03:51:28'),
(19, NULL, '/images/1594354447.png', 'КГУ Детско-юношеская спортивная школа № 5 г. Актобе', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Ақтөбе қ. №5 балалар мен жасөспірімдерге арналған спорт мектебі КММ', NULL, '<p class=\"MsoNoSpacing\" style=\"text-align: justify;\"><strong style=\"mso-bidi-font-weight: normal;\"><span style=\"font-size: 10.0pt; font-family: \'Arial\',\'sans-serif\';\">История:</span></strong><span style=\"font-size: 10.0pt; font-family: \'Arial\',\'sans-serif\';\"> Детско-юношеская спортивная школа основана в 2017 году, в состав школы входит 3 отделения: хоккей с шайбой, фигурное катание на коньках, шорт-трек. В отделение хоккея с шайбой занимается более 200 спортсменов по 9 возрастным группам (2014-2006 г.р.). Команда &laquo;</span><span style=\"font-size: 10.0pt; font-family: \'Arial\',\'sans-serif\'; mso-fareast-font-family: \'Times New Roman\'; mso-fareast-language: RU;\">Олимп</span><span style=\"font-size: 10.0pt; font-family: \'Arial\',\'sans-serif\';\">&raquo; принимает</span><span style=\"font-size: 10.0pt; font-family: \'Arial\',\'sans-serif\'; mso-fareast-font-family: \'Times New Roman\'; mso-fareast-language: RU;\"> участие в Чемпионате Республики Казахстан по хоккею с шайбой среди детско-юношеских команд</span></p>', '<p><strong><span lang=\"KZ\" style=\"font-size: 12pt; line-height: 107%; font-family: \'Times New Roman\', serif;\">Тарихы</span></strong><span lang=\"KZ\" style=\"font-size: 12pt; line-height: 107%; font-family: \'Times New Roman\', serif;\">: Балалар мен жасөспірімдерге арналған спорт мектебі 2017 жылы құрылған, мектептің құрамына 3 бөлімше кіреді: шайбалы хоккей, конькимен мәнерлеп сырғанау, шорт-трек. Шайбалы хоккей бөлімшесіне 9 жастық топ бойынша 200-ден астам спортшы қатысады (2006-2014 ж.т.). &laquo;Олимп&raquo; командасы Қазақстан Республикасының балалар мен жасөспірімдер командалары арасында шайбалы хоккей бойынша чемпионатына қатысады. &nbsp;</span></p>', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '<p><strong>Полное название:</strong>КГУ Детско-юношеская спортивная школа №5 <br /><strong>Хоккейная команда:</strong>Олимп<br /><strong>Руководитель:</strong> Шварц Виталий Николаевич <br />', '<p class=\"MsoNormal\"><span lang=\"KZ\" style=\"font-size: 12.0pt; line-height: 107%; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-ansi-la', '19-kgu-detsko-yunosheskaya-sportivnaya-shkola-5-g-aktobe', '0', NULL, NULL, NULL, 0, 1, '2020-05-20 09:27:50', '2020-07-10 01:51:36'),
(20, NULL, '/images/1594354436.png', 'ДКХ «BEIBARYS»', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '«BEIBARYS» БХК', NULL, '<p class=\"MsoNormalCxSpMiddle\" style=\"text-align: justify; line-height: normal;\"><strong style=\"mso-bidi-font-weight: normal;\"><span style=\"font-size: 10.0pt; font-family: \'Arial\',\'sans-serif\';\">История:</span></strong><span style=\"font-size: 10.0pt; font-family: \'Arial\',\'sans-serif\';\"> Команда &laquo;</span><span lang=\"EN-US\" style=\"font-size: 10.0pt; font-family: \'Arial\',\'sans-serif\'; mso-ansi-language: EN-US;\">BEIBARYS</span><span style=\"font-size: 10.0pt; font-family: \'Arial\',\'sans-serif\';\">&raquo; принимает</span><span style=\"font-size: 10.0pt; font-family: \'Arial\',\'sans-serif\'; mso-fareast-font-family: \'Times New Roman\'; mso-fareast-language: RU;\"> участие в Чемпионате Республики Казахстан по хоккею с шайбой среди детско-юношеских команд в возрастных группах 2008г.р., 2010г.р., 2012г.р.</span></p>', '<p><span lang=\"KZ\" style=\"font-size: 12pt; line-height: 107%; font-family: \'Times New Roman\', serif;\"><strong>Тарихы:</strong> &laquo;BEIBARYS&raquo; командасы 2008, 2010, 2012 ж.т. Қазақстан Республикасының балалар мен жасөспірімдер командалары арасында шайбалы хоккей бойынша чемпионатына қатысады.&nbsp;&nbsp;</span></p>', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '<p><strong>Полное название:</strong> ДКХ &laquo;BEIBARYS&raquo;<br /><strong>Хоккейная команда:</strong>Beibarys<br /><strong>Руководитель:</strong> Макеев Сагиндык Махметович<br /><strong>Ад', '<h1 style=\"margin-top: 0cm;\"><strong><span lang=\"KZ\" style=\"font-size: 12.0pt; line-height: 107%; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: bl', '20-dkkh-beibarys', '0', NULL, NULL, NULL, 0, 1, '2020-05-20 09:29:06', '2020-07-10 01:46:40'),
(21, NULL, '/images/1594354427.png', 'Областная детско-юношеская спортивная школа по зимним видам спорта Управления физической культуры и спорта ЗКО', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'БҚО Дене шынықтыру және спорт басқармасының Облыстық қыс спорт түрлері бойынша балалар мен жасөспірімдерге арналған спорт мектебі', NULL, '<p><strong><span style=\"font-size: 10pt; line-height: 107%; font-family: Arial, sans-serif; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">История:</span></strong><span style=\"font-size: 10pt; line-height: 107%; font-family: Arial, sans-serif; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"> В областная детско-юношеская спортивной школе по зимним видам спорта</span> <span lang=\"KZ\" style=\"font-size: 10pt; line-height: 107%; font-family: Arial, sans-serif; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">культивируются </span><span style=\"font-size: 10pt; line-height: 107%; font-family: Arial, sans-serif; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">5 отделений: </span><span lang=\"KZ\" style=\"font-size: 10pt; line-height: 107%; font-family: Arial, sans-serif; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">хоккей с шайбой, шорт-трек, лыжные гонки, хоккей с мячом, фигурное катание на коньках. Отделение хоккея с шайбой создана 2013 году, количество воспитанников составляет более 150 спортменов по 6 возрастным группам (2008-2014г.р.).</span> <span style=\"font-size: 10.0pt; line-height: 107%; font-family: \'Arial\',\'sans-serif\'; mso-fareast-font-family: Calibri; mso-fareast-theme-font: minor-latin; mso-ansi-language: RU; mso-fareast-language: EN-US; mso-bidi-language: AR-SA;\">Команда &laquo;</span><span style=\"font-size: 10.0pt; line-height: 107%; font-family: \'Arial\',\'sans-serif\'; mso-fareast-font-family: \'Times New Roman\'; mso-ansi-language: RU; mso-fareast-language: RU; mso-bidi-language: AR-SA;\">ЯСТРЕБЫ</span><span style=\"font-size: 10.0pt; line-height: 107%; font-family: \'Arial\',\'sans-serif\'; mso-fareast-font-family: Calibri; mso-fareast-theme-font: minor-latin; mso-ansi-language: RU; mso-fareast-language: EN-US; mso-bidi-language: AR-SA;\">&raquo; принимает</span><span style=\"font-size: 10.0pt; line-height: 107%; font-family: \'Arial\',\'sans-serif\'; mso-fareast-font-family: \'Times New Roman\'; mso-ansi-language: RU; mso-fareast-language: RU; mso-bidi-language: AR-SA;\"> участие в Чемпионате Республики Казахстан по хоккею с шайбой среди детско-юношеских команд</span><span style=\"font-size: 9.0pt; line-height: 107%; font-family: \'Arial\',\'sans-serif\'; mso-fareast-font-family: \'Times New Roman\'; mso-ansi-language: RU; mso-fareast-language: RU; mso-bidi-language: AR-SA;\">&nbsp;</span></p>', '<p><strong><span lang=\"KZ\" style=\"font-size: 12pt; line-height: 107%; font-family: \'Times New Roman\', serif;\">Тарихы</span></strong><span lang=\"KZ\" style=\"font-size: 12pt; line-height: 107%; font-family: \'Times New Roman\', serif;\">: Облыстық қыс спорт түрлері бойынша балалар мен жасөспірімдерге арналған спорт мектебіне 5 бөлімшелер кіреді: шайбалы хоккей, шорт-трек, шаңғы жарысы, допты хоккей, конькимен мәнерлеп сырғанау. Шайбалы хоккей бөлімшесі 2013 жылы құрылды, тәрбиеленушілердің саны &ndash; 6 жастық топтар бойынша 150-ден астам спортшылар (2008-2014 ж.т.). &laquo;ЯСТРЕБЫ&raquo; командасы </span><span lang=\"KZ\" style=\"font-size: 12pt; line-height: 107%; font-family: \'Times New Roman\', serif;\">Қазақстан Республикасының балалар мен жасөспірімдер командалары арасында шайбалы хоккей бойынша чемпионатына қатысады.&nbsp;&nbsp;</span></p>', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '<p><strong>Полное название:</strong> Областная детско-юношеская спортивная школа по зимним видам спорта Управления физической культуры и спорта Западно-Казахстанской области<br /><strong>Хокк', '<p class=\"MsoNormal\"><span lang=\"KZ\" style=\"font-size: 12.0pt; line-height: 107%; font-family: \'Times New Roman\',\'serif\'; mso-fareast-font-family: \'Times New Roman\'; color: black; mso-ansi-la', '21-oblastnaya-detsko-yunosheskaya-sportivnaya-shkola-po-zimnim-vidam-sporta-upravleniya-fizicheskoy-kultury-i-sporta-zko', '0', NULL, NULL, NULL, 0, 1, '2020-05-20 09:30:02', '2020-07-10 01:44:52'),
(22, NULL, '/images/1594354413.png', 'ТОО «Профессиональный клуб «Аят»', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '«Аят» кәсіби клубы» ЖШС', NULL, '<p class=\"MsoNormal\" style=\"margin-bottom: .0001pt; text-align: justify; line-height: normal; background: white;\"><strong style=\"mso-bidi-font-weight: normal;\"><span style=\"font-size: 10.0pt; font-family: \'Arial\',\'sans-serif\';\">История:</span></strong><span style=\"font-size: 10.0pt; font-family: \'Arial\',\'sans-serif\';\"> Команда &laquo;</span><span lang=\"EN-US\" style=\"font-size: 10.0pt; font-family: \'Arial\',\'sans-serif\'; mso-fareast-font-family: \'Times New Roman\'; mso-ansi-language: EN-US; mso-fareast-language: RU; mso-bidi-font-weight: bold;\">GORNAK</span><span style=\"font-size: 10.0pt; font-family: \'Arial\',\'sans-serif\';\">&raquo; была создана в 1958 году в городе Рудном Костанайской области, в настоящее время в состав клуба входят 3 команды: взрослая, молодежная и детско-юношеская. Команда детско-юношеского хоккея создана 1986 году, количество занимающихся составляет более 250 воспитанников по следующим возрастным группам: 2007г.р., 2009г.р.-2015г.р. Команды разных возрастных групп становилась победителями и призерами </span><span style=\"font-size: 10.0pt; font-family: \'Arial\',\'sans-serif\'; mso-fareast-font-family: \'Times New Roman\'; mso-fareast-language: RU;\">Чемпионата Республики Казахстан по хоккею с шайбой среди детско-юношеских команд</span><span style=\"font-size: 9.0pt; font-family: \'Arial\',\'sans-serif\'; mso-fareast-font-family: \'Times New Roman\'; mso-fareast-language: RU;\">.<span style=\"mso-spacerun: yes;\">&nbsp;&nbsp;&nbsp; </span></span></p>', '<p><strong><span lang=\"KZ\" style=\"font-size: 12pt; line-height: 107%; font-family: \'Times New Roman\', serif;\">Тарихы</span></strong><span lang=\"KZ\" style=\"font-size: 12pt; line-height: 107%; font-family: \'Times New Roman\', serif;\">: &laquo;GORNAK&raquo; хоккей командасы 1958 жылы Қостанай облысының Рудный қаласында құрылған, қазіргі уақытта клуб 3 командадан тұрады: ересек, жас және балалар-жасөспірімдер. Балалар мен жасөспірімдердің хоккей командасы 1986 жылы құрылды, тәрбиеленушілердің жалпы саны &ndash; 250, жастық топтар: 2007 ж.т., 2009 ж.т., 2015 ж.т. Әр түрлі жастық топтарға жататын командалар </span><span lang=\"KZ\" style=\"font-size: 12pt; line-height: 107%; font-family: \'Times New Roman\', serif;\">Қазақстан Республикасының балалар мен жасөспірімдер командалары арасында шайбалы хоккей бойынша чемпионатының жеңімпаздары мен жүлдегерлері болып атанды.</span><span lang=\"KZ\" style=\"font-size: 12pt; line-height: 107%; font-family: \'Times New Roman\', serif;\">&nbsp;</span></p>', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '<p><strong>Полное название:</strong> ТОО &laquo;Профессиональный клуб &laquo;Аят&raquo; <br /><strong>Хоккейная команда:</strong>Gornak <br /><strong>Руководитель:</strong> Казбеков Кайрат Ка', '<p class=\"MsoNormal\"><span lang=\"KZ\" style=\"font-size: 12pt; line-height: 107%; font-family: \'Times New Roman\', serif;\">&laquo;GORNAK&raquo; хоккей командасы</span></p>\n<p class=\"MsoNormal\"><', '22-too-professionalnyy-klub-ayat', '0', NULL, NULL, NULL, 0, 1, '2020-05-20 09:30:54', '2020-07-10 01:42:13'),
(23, NULL, '/images/1594354359.png', 'КГКП «Спортивно – оздоровительный комплекс «Қазақстан»  ГУ «Отдела физической культуры и спорта города Сатпаев»', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '«Сәтпаев қаласының Дене шынықтыру және спорт бөлімі» ММ «Қазақстан» спорт-сауықтыру кешені» КМҚК', NULL, '<p><strong>История:</strong> Хоккейная команда <span lang=\"KZ\">&laquo;</span><span lang=\"EN-US\">YASTREBY</span><span lang=\"KZ\">&raquo; создана в 2016 году, количество занимающихся 20 спортменов.</span> Хоккейная команда <span lang=\"KZ\">&laquo;</span>Сатпаевские волки<span lang=\"KZ\">&raquo; создана в 2010 году, количество занимающихся 15 спортменов.</span> Хоккейные команды участвуют в Чемпионате Республики Казахстан по хоккею с шайбой среди детско-юношеских команд представляют команды в возрастных группах 2009г.р. и 2005 г.р.</p>', '<p><strong><span lang=\"KZ\">Тарихы</span></strong><span lang=\"KZ\"><strong>:</strong> &laquo;</span><span lang=\"EN-US\">YASTREBY</span><span lang=\"KZ\">&raquo; командасы 2016 жылы құрылды, спортшылардың саны &ndash; 20. &laquo;Сатпаевские волки&raquo; хоккей командасы 2010 жылы құрылды, спортшылардың саны &ndash; 15. Хоккей командалары 2009 және 2005 жылы туған </span><span lang=\"KZ\">Қазақстан Республикасының балалар мен жасөспірімдер командалары арасында шайбалы хоккей бойынша чемпионатына қатысады. </span><span lang=\"KZ\">&nbsp;&nbsp;</span></p>', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '<p><span lang=\"KZ\">Хоккейные команды &laquo;</span><span lang=\"EN-US\">YASTREBY</span><span lang=\"KZ\">&raquo;</span>&nbsp;и<span lang=\"KZ\">&nbsp;&laquo;Сатпаевские волки&raquo;</span></p>\n<p><', '<p><span lang=\"KZ\">&laquo;</span><span lang=\"EN-US\">YASTREBY</span><span lang=\"KZ\">&raquo; және&nbsp;&laquo;Сатпаевские волки&raquo; хоккей командалары</span></p>\n<p><span lang=\"KZ\"><strong>М', '23-kgkp-sportivno-ozdorovitelnyy-kompleks-azastan-gu-otdela-fizicheskoy-kultury-i-sporta-goroda-satpaev', '0', NULL, NULL, NULL, 0, 1, '2020-05-20 09:32:15', '2020-07-09 22:12:42'),
(24, NULL, '/images/1594404101.png', 'КГУ «Областная специализированная детско-юношеская школа олимпийского резерва №4»', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '<p><strong>Полное название:</strong> КГУ &laquo;Областная специализированная детско-юношеская школа олимпийского резерва №4&raquo;<br /><strong>Хоккейная команда:</strong> Кайсар<br /><strong', NULL, '24-kgu-oblastnaya-spetsializirovannaya-detsko-yunosheskaya-shkola-olimpiyskogo-rezerva-4', '0', NULL, NULL, NULL, 0, 1, '2020-07-10 12:01:42', '2020-07-10 12:01:42');

-- --------------------------------------------------------

--
-- Структура таблицы `section_region`
--

CREATE TABLE `section_region` (
  `id` int(10) UNSIGNED NOT NULL,
  `section_id` int(10) UNSIGNED NOT NULL,
  `region_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NOT NULL,
  `updated_at` timestamp NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `section_region`
--

INSERT INTO `section_region` (`id`, `section_id`, `region_id`, `created_at`, `updated_at`) VALUES
(8, 8, 6, '2020-06-10 04:29:14', '2020-06-10 04:29:14'),
(9, 1, 4, '2020-06-10 04:25:48', '2020-06-10 04:25:48'),
(10, 2, 4, '2020-06-10 04:25:48', '2020-06-10 04:25:48'),
(11, 3, 4, '2020-06-10 04:25:48', '2020-06-10 04:25:48'),
(12, 4, 4, '2020-06-10 04:25:48', '2020-06-10 04:25:48'),
(13, 5, 6, '2020-06-10 04:29:14', '2020-06-10 04:29:14'),
(14, 6, 6, '2020-06-10 04:29:14', '2020-06-10 04:29:14'),
(15, 7, 6, '2020-06-10 04:29:14', '2020-06-10 04:29:14'),
(16, 9, 6, '2020-06-10 04:29:14', '2020-06-10 04:29:14'),
(17, 10, 4, '2020-05-20 09:13:32', '2020-05-20 09:13:32'),
(18, 11, 8, '2020-05-20 09:14:50', '2020-05-20 09:14:50'),
(19, 12, 11, '2020-05-20 09:17:20', '2020-05-20 09:17:20'),
(20, 13, 15, '2020-05-20 09:18:38', '2020-05-20 09:18:38'),
(21, 14, 17, '2020-06-10 04:31:26', '2020-06-10 04:31:26'),
(22, 15, 15, '2020-05-20 09:21:42', '2020-05-20 09:21:42'),
(23, 16, 15, '2020-05-20 09:22:57', '2020-05-20 09:22:57'),
(24, 17, 16, '2020-05-20 09:24:50', '2020-05-20 09:24:50'),
(25, 18, 14, '2020-05-20 09:26:06', '2020-05-20 09:26:06'),
(26, 19, 5, '2020-05-20 09:27:50', '2020-05-20 09:27:50'),
(27, 20, 7, '2020-05-20 09:29:06', '2020-05-20 09:29:06'),
(28, 21, 10, '2020-05-20 09:30:02', '2020-05-20 09:30:02'),
(29, 22, 12, '2020-05-20 09:30:54', '2020-05-20 09:30:54'),
(30, 23, 11, '2020-05-20 09:32:15', '2020-05-20 09:32:15'),
(31, 24, 13, '2020-07-10 18:01:42', '2020-07-10 18:01:42');

-- --------------------------------------------------------

--
-- Структура таблицы `section_user`
--

CREATE TABLE `section_user` (
  `id` int(10) UNSIGNED NOT NULL,
  `section_id` int(10) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `section_user`
--

INSERT INTO `section_user` (`id`, `section_id`, `user_id`, `created_at`, `updated_at`) VALUES
(21, 1, 3, '2020-05-20 09:00:37', '2020-05-20 09:00:37'),
(22, 2, 3, '2020-05-20 09:01:57', '2020-05-20 09:01:57'),
(23, 3, 3, '2020-05-20 09:03:37', '2020-05-20 09:03:37'),
(24, 4, 3, '2020-05-20 09:04:38', '2020-05-20 09:04:38'),
(25, 5, 3, '2020-05-20 09:05:48', '2020-05-20 09:05:48'),
(26, 6, 3, '2020-05-20 09:06:54', '2020-05-20 09:06:54'),
(27, 7, 3, '2020-05-20 09:10:02', '2020-05-20 09:10:02'),
(28, 8, 3, '2020-05-20 09:11:14', '2020-05-20 09:11:14'),
(29, 9, 3, '2020-05-20 09:12:06', '2020-05-20 09:12:06'),
(30, 10, 3, '2020-05-20 09:13:32', '2020-05-20 09:13:32'),
(31, 11, 3, '2020-05-20 09:14:50', '2020-05-20 09:14:50'),
(32, 12, 3, '2020-05-20 09:17:20', '2020-05-20 09:17:20'),
(33, 13, 3, '2020-05-20 09:18:38', '2020-05-20 09:18:38'),
(34, 14, 3, '2020-05-20 09:19:53', '2020-05-20 09:19:53'),
(35, 15, 3, '2020-05-20 09:21:42', '2020-05-20 09:21:42'),
(36, 16, 3, '2020-05-20 09:22:57', '2020-05-20 09:22:57'),
(37, 17, 3, '2020-05-20 09:24:50', '2020-05-20 09:24:50'),
(38, 18, 3, '2020-05-20 09:26:06', '2020-05-20 09:26:06'),
(39, 19, 3, '2020-05-20 09:27:50', '2020-05-20 09:27:50'),
(40, 20, 3, '2020-05-20 09:29:06', '2020-05-20 09:29:06'),
(41, 21, 3, '2020-05-20 09:30:02', '2020-05-20 09:30:02'),
(42, 22, 3, '2020-05-20 09:30:54', '2020-05-20 09:30:54'),
(44, 23, 14, '2020-07-08 08:24:38', '2020-07-08 08:24:38'),
(45, 24, 3, '2020-07-10 18:01:42', '2020-07-10 18:01:42');

-- --------------------------------------------------------

--
-- Структура таблицы `texts`
--

CREATE TABLE `texts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `language` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'ru',
  `element_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `page` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'home',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `video_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `texts`
--

INSERT INTO `texts` (`id`, `content`, `language`, `element_id`, `page`, `created_at`, `updated_at`, `video_id`) VALUES
(1, 'Хороший, надежный вратарь — половина команды, это общепризнанное мнение хоккейных специалистов самого разного уровня. История знает много примеров, когда вратарь в одиночку решал судьбу матча. Самая важная черта, отличающая вратарей, — психологическая устойчивость, поскольку его спокойные уравновешенные действия передаются партнерам по команде, вселяя в них уверенность. Из физиологических особенностей необходимо учитывать: Природную гибкость; Быстроту реакции; Периферийное зрение; Физическую выносливость.', 'ru', 'goal_keeper__content_ru', 'hockey', NULL, '2021-08-20 03:38:32', '52'),
(2, 'Хороший, надежный вратарь — половина команды, это общепризнанное мнение хоккейных специалистов самого разного уровня. История знает много примеров, когда вратарь в одиночку решал судьбу матча. Самая важная черта, отличающая вратарей, — психологическая устойчивость, поскольку его спокойные уравновешенные действия передаются партнерам по команде, вселяя в них уверенность. Из физиологических особенностей необходимо учитывать: Природную гибкость; Быстроту реакции; Периферийное зрение; Физическую выносливость.', 'kk', 'goal_keeper__content_kk', 'hockey', NULL, '2021-08-18 06:13:32', NULL),
(3, 'Вратарь', 'ru', 'goal_keeper__title_ru', 'hockey', NULL, '2021-08-18 15:30:08', NULL),
(4, 'Хороший вратарь', 'ru', 'goal_keeper__title_kk', 'hockey', NULL, '2021-08-20 03:36:49', NULL),
(5, 'Шабуылшы', 'kk', 'forwarder__title_kk', 'hockey', NULL, NULL, NULL),
(6, 'Нападающий', 'ru', 'forwarder__title_ru', 'hockey', NULL, NULL, NULL),
(7, 'Ойын моделі басты қатынасушы тұлғаларға, яғни шабуылшыларға негізделген. Алаңдағы басты фигура – орталық шабуылшы, ол шабуыл жасағанда да, қақпаны қорғаған кезде де аса маңызды. Ол – басты жасампаз, пас беруші. Шеттегі шабуылшылар, әдеттегідей, шабуылды аяқтайды, олар көбінесе голдарды соғады. Шабуылшылардың басты сипаттамалары: жоғары сырғанау техникасы, доп таяқты қолдана білу; дәл лақтыру; тез әрі ерекше ойлау; қарсы қақпаға шабуыл жасағанда қарсылас командасына алдын-ала біліп алуға қиын болатын шешім табу; жоғары нәтижелерге жету үшін шабуылшы жауынгерлік қасиеттерге ие болуы тиіс.', 'kk', 'forwarder__content_kk', 'hockey', NULL, '2021-08-18 07:09:02', NULL),
(8, 'Основными действующими лицами при создании модели игры являются игроки атаки — нападающие. Ключевая фигура на площадке — центральный нападающий, его роль очень велика как при атаке, так и при обороне своих ворот. Он главный созидатель, распасовщик. Крайние нападающие, как правило, специалисты по завершению атаки, большинство голов забивают именно они. Основные характеристики нападающих: Хорошая техника катания, владения клюшкой; Точный бросок; Способность быстро и изобретательно мыслить, находить такие решения при атаке ворот соперника, которые будет сложно предугадать обороняющейся команде; Для достижения высоких результатов нападающий должен обладать «бойцовскими» качествами. ', 'ru', 'forwarder__content_ru', 'hockey', NULL, '2021-08-18 07:17:28', NULL),
(9, 'Қорғаушы', 'kk', 'defender__title_kk', 'hockey', NULL, NULL, NULL),
(10, 'Защитник', 'ru', 'defender__title_ru', 'hockey', NULL, NULL, NULL),
(11, 'Біріншіден, қорғаушы өз қақпаның қауіпсіздігін қамтамасыз етуі тиіс. Ойыншыны қорғаушы позициясына таңдағанда бойы және салмағы өте маңызды рөл атқарады, қорғаушылар көбінесе бойлы, ірі денелі, мықты болып келеді. Қорғау ойыншылардың жалпы сипаттамалары: қарсы команданың шабуыл әрекеттеріне талқандаушы қарсы әрекеттерді ұйымдастыру. Ол үшін алаңның барлық жерлерін көру қажет, қарсыластардың әрекеттерін алдын-ала біліп, ойынды «оқи» білу қажет; қажетті жағдайда қарсы ойыншымен жекпе-жекке шығу; қарсыластың соғуынан кейін шайбаны өзіне алып, батыл болу; артымен алға қарай жақсы коньки тебе білу; тез әрі дәл пас бере білу; шабуылды «шерту» атты қатты соғумен қолдай білу.', 'kk', 'defender__content_kk', 'hockey', NULL, '2021-08-18 07:09:02', NULL),
(12, 'Само понятие говорит за себя, защитник в первую очередь должен обеспечить безопасность собственных ворот. Большое значение при выборе игрока на позицию защитника имеют росто-весовые данные, как правило, защитники — высокие, крупные, физически сильные парни.\n\nХарактерными особенностями игрока обороны являются: Способность организовать разрушительные противодействия на атакующие маневры команды соперника. Для этого необходимо хорошо видеть поле, предугадывать действия нападающих противника, «читать» игру; Умение при необходимости вступить в силовое единоборство с игроком соперника; Смелость, для того чтобы принять шайбу после броска соперника на себя; Умение хорошо катить на коньках спиной вперед; Способность отдать быстрый и точный пас; Способность поддержать атаку сильным броском — так называемым «щелчком». ', 'ru', 'defender__content_ru', 'hockey', NULL, '2021-08-18 07:34:00', NULL),
(13, 'Кеудеше', 'kk', 'equipment_bib__title_kk', 'hockey', NULL, NULL, NULL),
(14, 'Нагрудник', 'ru', 'equipment_bib__title_ru', 'hockey', NULL, NULL, NULL),
(15, 'Хоккейшінің арқасын, кеудесін, омыртқасын және иығын қорғайтын жабдық элементі.\r\n\n', 'kk', 'equipment_bib__content_kk', 'hockey', NULL, '2021-08-18 07:09:02', NULL),
(16, 'Элемент экипировки хоккеиста, обеспечивающий защиту спины, грудной клетки, позвоночника и плеч.', 'ru', 'equipment_bib__content_ru', 'hockey', NULL, '2021-08-20 07:24:36', '53'),
(17, 'Шынтақтықтар', 'kk', 'equipment_pads__title_kk', 'hockey', NULL, NULL, NULL),
(18, 'Нагрудник', 'ru', 'equipment_pads__title_ru', 'hockey', NULL, NULL, NULL),
(19, 'Хоккейшінің шынтақ буындарын қорғауға арналған жабдық элементі.', 'kk', 'equipment_pads__content_kk', 'hockey', NULL, '2021-08-18 07:09:02', NULL),
(20, 'Элемент экипировки, предназначеный для защиты локтевого сустава хоккеиста.', 'ru', 'equipment_pads__content_ru', 'hockey', NULL, '2021-08-18 07:34:00', NULL),
(21, 'Қалқаншалар', 'kk', 'equipment_shields__title_kk', 'hockey', NULL, NULL, NULL),
(22, 'Щитки', 'ru', 'equipment_shields__title_ru', 'hockey', NULL, NULL, NULL),
(23, 'Хоккейшінің тізе буындарын және жіліншігін қорғайтын жабдық бөлшегі.', 'kk', 'equipment_shields__content_kk', 'hockey', NULL, '2021-08-18 07:09:02', NULL),
(24, 'Часть экипировки, защищающая коленный сустав и голень хоккеиста', 'ru', 'equipment_shields__content_ru', 'hockey', NULL, '2021-08-18 07:34:00', NULL),
(25, 'Мойынға арналған қорғау', 'kk', 'neck_protection__title_kk', 'hockey', NULL, NULL, NULL),
(26, 'Защита для шеи', 'ru', 'neck_protection__title_ru', 'hockey', NULL, NULL, NULL),
(27, 'Ойыншының тамағын, мойынын (алдынан және артынан) және бұғанасын қорғайтын жартылай қатты бөлшек.', 'kk', 'neck_protection__content_kk', 'hockey', NULL, '2021-08-18 07:09:02', NULL),
(28, 'Полужесткая деталь, защищающая горло, шею (спереди и сзади) и ключицы игрока.', 'ru', 'neck_protection__content_ru', 'hockey', NULL, '2021-08-20 08:14:01', '55'),
(29, 'Джерси', 'kk', 'equipment_jersey__title_kk', 'hockey', NULL, NULL, NULL),
(30, 'Джерси', 'ru', 'equipment_jersey__title_ru', 'hockey', NULL, NULL, NULL),
(31, 'Ойыншының хоккейге арналған киімінің жоғарғы бөлігі. Хоккей жабдығының үстінен киінеді және хоккейшінің командаға тиістілігін белгілеуге және ойыншыны оның нөмірі мен тегі бойынша анықтауға арналған.', 'kk', 'equipment_jersey__content_kk', 'hockey', NULL, '2021-08-18 07:09:02', NULL),
(32, 'Составляющая верхняя часть хоккейной формы игрока. Одевается поверх хоккейной экипировки и предназначен для обозначения принадлежности хоккеиста к команде и распознавания отдельного игрока по номеру и фамилии.', 'ru', 'equipment_jersey__content_ru', 'hockey', NULL, '2021-08-18 07:34:00', NULL),
(33, 'Жылы қоныш', 'kk', 'equipment_gaiters__title_kk', 'hockey', NULL, NULL, NULL),
(34, 'Иілгіштікті және пішінді сақтауға қажетті бұйымдар. Жылы қоныш қалқаншаларға киінеді, белдегі арнайы ілгектер, сонымен қатар басқа тәсілдер арқылы бекітіледі.', 'kk', 'equipment_gaiters__content_kk', 'hockey', NULL, '2021-08-18 07:09:02', NULL),
(35, 'Гетры', 'ru', 'equipment_gaiters__title_ru', 'hockey', NULL, NULL, NULL),
(36, 'Изделия, необходимые для придания эластичности и поддержанию формы. Гетры надеваются на щитки и фиксирующиеся с помощью специальных застежек на поясе, а также рядом иных способов.', 'ru', 'equipment_gaiters__content_ru', 'hockey', NULL, '2021-08-18 07:34:00', NULL),
(37, 'Шлем', 'kk', 'equipment_helmet__title_kk', 'hockey', NULL, NULL, NULL),
(38, 'Басты қорғауға арналған хоккейші жабдығының элементі. Бетті қорғау үшін келесі шлемге бекітілетін элементтер қолданылады: металды бетперде; визор – арнайы ашық пластикалық қалқанша; визордан және металды тордан тұратын құрама бетперде.', 'kk', 'equipment_helmet__content_kk', 'hockey', NULL, '2021-08-18 07:09:02', NULL),
(39, 'Шлем', 'ru', 'equipment_helmet__title_ru', 'hockey', NULL, NULL, NULL),
(40, 'Элемент экипировки хоккеиста, предназначенный для защиты головы. Для защиты лица используются, прикрепляемые к шлему: металическая маска; визор - специальный прозрачный пластиковый щиток; комбинированная маска, состоящая из визора и металической сетки.', 'ru', 'equipment_helmet__content_ru', 'hockey', NULL, '2021-08-18 07:34:00', NULL),
(41, 'Хоккей қолғаптары', 'kk', 'equipment_gloves__title_kk', 'hockey', NULL, '2021-08-18 16:23:38', NULL),
(42, 'Доп таяқпен қолға соғуы, шайбаның соңғы және басқа ұқсас жағдайларда ойыншының қолбасын, қолбас буындарын және жіліншіктің төменгі бөлігін қорғайтын қолғап.', 'kk', 'equipment_gloves__content_kk', 'hockey', NULL, '2021-08-18 16:24:07', NULL),
(43, 'Хоккейные перчатки', 'ru', 'equipment_gloves__title_ru', 'hockey', NULL, NULL, NULL),
(44, 'Перчатки, защищающие кисти рук, кистевые суставы и нижнюю часть предплечий игрока при ударах клюшкой по рукам, попаданиях шайбы, и в других подобных случаях.', 'ru', 'equipment_gloves__content_ru', 'hockey', NULL, '2021-08-18 07:34:00', NULL),
(45, 'Доп таяқ', 'kk', 'equipment_stick__title_kk', 'hockey', NULL, NULL, NULL),
(46, 'Бастаушы хоккейшілерге ең қарапайым ағаш доп таяқ келеді, бірақ кейін композитті доп таяқты сатып алу қажет, себебі оны ұзақ уақыт бойы пайдаланып, техниканы жетілдіріп алуға болады.\r\n\nДоп таяқты ұстауды анықтау үшін баланың оны қалай ұстап тұрғанына қарау қажет. Егер баланың сол қолы төмен, ал оң қолы жоғары таяқта тұрса, бала доп таяқты сол жағынан ұстап тұр, керісінше болса, оң жақтан ұстап тұр.\r\n\nДоп таяқты арнайы таспамен орау қажет. Ораусыз доп таяқ қолдан тайып шығып кетуі мүмкін, бұл бастаушы ойыншылар үшін өте өзекті сұрақ. Қақпада шайбаны қабылдағанда, бергенде, лақтырғанда таспамен оралған доп таяқ шайбамен өте жақсы ілініседі.\r\n\nДоп таяқтардың қаттылығы 30-120 сандарымен белгіленеді. Доп таяқ неғұрлым қатты болса, соғұрлым оның икемділігі төмен болады. Икемді доп таяқ дәл пас беру үшін, қолбасы лақтыру және айналдырып әкелу үшін жақсы келеді, мұндай доп таяқты көбінесе шабуылшылар таңдайды. Шабуылшылар көбінесе қатты доп таяқтарды таңдайды, себебі олар шертуде өте ыңғайлы болып келеді және қарсыласпен жарысқан кезде онымен шайбаны жеңіл қайтарып алуға болады.', 'kk', 'equipment_stick__content_kk', 'hockey', NULL, '2021-08-18 07:09:02', NULL),
(47, 'Клюшка', 'ru', 'equipment_stick__title_ru', 'hockey', NULL, NULL, NULL),
(48, 'Для начинающих подойдет самая простая деревянная клюшка, но позже следует приобретать композитную, такая клюшка прослужит дольше и позволит совершенствовать свою технику.\n\nЧтобы определить, какой хват клюшки - правый или левый, необходимо посмотреть как ребенок ее держит. Если у него левая рука внизу, а правая вверху, на палке клюшки, то у ребенка левый хват, а если наоборот, то правый.\n\nКлюшку необходимо обматывать специальной лентой. Так без обмотки клюшка легко может выскользнуть из рук, особенно это актуально для начинающих игроков. При приеме, передаче, броске шайбы по воротам клюшка, обмотанная хоккейной лентой, получает лучшее сцепление с шайбой.\n\nЖесткость клюшек обозначают цифрами от 30 до 120 и указывают их на клюшке. Чем больше жесткость, тем меньше гибкость клюшки. Гибкая клюшка подходит для точных пасов, кистевых бросков и обводок, ее обычно выбирают нападающие. Защитники чаще выбирают жесткие клюшки, так как она удобнее при щелчках, ей легче отбирать шайбу у борта в борьбе с соперником.', 'ru', 'equipment_stick__content_ru', 'hockey', NULL, '2021-08-18 16:42:18', NULL),
(49, 'Хоккейге арналған қысқа шалбар', 'kk', 'equipment_shorts__title_kk', 'hockey', NULL, NULL, NULL),
(50, 'Ойыншы құлағанда, қақтығысқанда, шайба соққанда және басқа ұқсас жағдайларда жанбасты, құйымшақты, белді және омыртқаны жарақаттанудан қорғатын жабдықтың бөлшегі.', 'kk', 'equipment_shorts__content_kk', 'hockey', NULL, '2021-08-18 07:09:02', NULL),
(51, 'Хоккейные шорты', 'ru', 'equipment_shorts__title_ru', 'hockey', NULL, NULL, NULL),
(52, 'Часть экипировки, предназначенная для предотвращения травмирования бедёр, копчика, поясницы и позвоночника хоккеиста при падениях, столкновениях, попаданиях шайбы и в других случаях', 'ru', 'equipment_shorts__content_ru', 'hockey', NULL, '2021-08-18 07:34:00', NULL),
(53, 'Коньки', 'kk', 'equipment_skates__title_kk', 'hockey', NULL, NULL, NULL),
(54, 'Сырғанау техникасы хоккейшіні дайындауда ең маңызды элемент болып табылады. Ата-аналар басынан бастап конькиді шындап таңдауы тиіс. Басында қатты конькиді таңдаған жөн, себебі олар аяқты «ұстайды» және хоккейші одан қатты шаршамайды. Сәл тәжірибелі хоккейшілерге жұмсақ коньки келеді, себебі олар маневр жасауға және сырғанау техникасында күрделі техникалық элементтерді орындауға мүмкіндік береді.\r\n\nЖеңіл әрі жақсы қорғалған конькидің бағасы жоғары болады, дегенмен олар жаттықтыру барысында баланы қандай да бір қолайсыздықтардан қорғап, жайлылықпен қамтамасыз етеді. Коньки басқа аяқ киім сияқты жайлы болуы тиіс.\r\n\nОдан қымбат коньки арнайы пеште қыздыру арқылы аяқтың пішінін және өлшемін беретін арнайы материалды қолданумен шығарылады. Бұл – мінсіз нұсқа.\r\n\nКонькиді сатып алғаннан кейін оларды ұштау қажет. Ұштауды 5-7 жаттықтырулардан кейін істеу қажет.\r\n\nБауды байлау - маңызды элемент. Бауды қатты байлау қажет. Соңғы 3 люверс жұптарын табан бос болатындай сәл күш салып байлау қажет.\r\n\nКонькиді сақтауға ерекше талаптар қойылмайды. Тек үйге келгеннен кейін міндетті түрде жүз қабын шешуді ұмытпаңыз. Ылғал түскен конькиді тот жейді, сондықтан жүзді құрғақ матамен сүртіп алған жөн.', 'kk', 'equipment_skates__content_kk', 'hockey', NULL, '2021-08-18 07:09:02', NULL),
(55, 'Коньки', 'ru', 'equipment_skates__title_ru', 'hockey', NULL, NULL, NULL),
(56, 'Техника катания самый важный элемент в подготовке хоккеиста. Родителям необходимо с самого начала серьёзно подходить к выбору коньков. Для начала лучше покупать жесткие коньки, они лучше «держат» ногу, хоккеист меньше утомляется. Для более опытных учеников подойдут мягкие коньки, у которых лучше маневренность, на них легче выполнять сложные технические элементы в технике катания.\r\n\nЛёгкие и хорошо защищённые коньки стоят дороже, зато избавят ребёнка от каких-либо неудобств и обеспечат комфорт во время тренировочного процесса. При выборе коньков, как и другой обуви, главное - удобство.\r\n\nБолее дорогие модели коньков выпускаются с использованием специального материала, который при разогреве в специальной печи принимает форму и размер ноги – это идеальный вариант.\r\n\nПосле покупки коньков необходимо заточить коньки. Заточку необходимо делать в среднем через 5-7 тренировок.\r\n\nНемаловажный элемент, это шнуровка. Начинать шнуровать необходимо туго. Последние 3 пары люверсов с легким усилием, чтобы голеностоп был свободен.\r\n\nОсобых требований к хранению коньков нет. Единственное, на что необходимо обратить внимание, снимайте чехлы с лезвий, приходя домой. Влага, попадающая на коньки, превращается в ржавчину, поэтому лезвия лучше протереть сухой тряпочкой.', 'ru', 'equipment_skates__content_ru', 'hockey', NULL, '2021-08-18 07:34:00', NULL),
(57, 'Хоккей қақпасы', 'kk', 'hockey_goal__title_kk', 'hockey', NULL, NULL, NULL),
(58, 'Тікбұрышты 1,83 х 1,22 метр өлшемді шайба жіберілетін құрылым. Қақпа ойыншылардың жарақаттануын алдын алу мақсатында жылжымалы болуы тиіс, сондай-ақ бұл матч және кезеңдердің алдында мұзды дайындауды жеңілдетеді.', 'kk', 'hockey_goal__content_kk', 'hockey', NULL, '2021-08-18 07:09:02', NULL),
(59, 'Хоккейные ворота', 'ru', 'hockey_goal__title_ru', 'hockey', NULL, NULL, NULL),
(60, 'Конструкция прямоугольной формы размером 1,83 х 1,22 метров, куда направляют шайбу. Ворота должны быть передвижными для предотвращения травмирования игроков; также упрощается подготовка льда перед матчами и периодами', 'ru', 'hockey_goal__content_ru', 'hockey', NULL, '2021-08-18 07:34:00', NULL),
(61, 'Төрешілер', 'kk', 'referee_field__title_kk', 'hockey', NULL, NULL, NULL),
(62, '<p>Хоккей матчін үш немесе төрт төрешілерден тұратын төрешілер бригадасы өткізеді. Бір немесе екі төреші (турнирдің регламентіне байланысты) бас төрешілер, қалған екі төрешілер сызықтық төрешілер деп аталынады (лайнсмен — ағылш. linesman — сызықта тұратын төреші). Бас төреші ереже бұзушылықтарын бақылауға, қақпаны алуды (голдарды) тіркеуге міндетті. Сызықтық төрешілер «ойыннан тыс» қалыптарды бақылауға, шайбаны лақтыруды, сандық құрамды бұзушылықтарды, сонымен қатар шайбаны тастауды бақылауға міндетті. </p>\r\n<p>Төрешілерден басқа әр матчқа алаңнан тыс тұратын төрешілер бригадасы қатысады. Оның құрамына кіретіндер:</p>\r\n<ul>\r\n<li>қақпа артындағы екі төреші (бір бас төреші болғанда)</li>\r\n<li>бір хатшы және екі хатшы көмекшілері</li>\r\n<li>бір төреші-уақыт өлшеуші</li>\r\n<li>бір төреші-хабарлаушы</li>\r\n<li>бір бейне қайталаудың төрешісі</li>\r\n<li>айыптылар орындығында отыратын екі төреші    </li>\r\n</ul>', 'kk', 'referee_field__content_kk', 'hockey', NULL, '2021-08-18 07:09:02', NULL),
(63, 'Судьи', 'ru', 'referee_field__title_ru', 'hockey', NULL, NULL, NULL),
(64, '<p></p><p>Хоккейный матч проводит судейская бригада, состоящая из трёх или четырёх судей. Один или два судьи (в зависимости от регламента турнира) называются главными судьями, два других — линейными судьями (лайнсменами — англ. linesman — судья на линии). В обязанности главного судьи входит отслеживание нарушений правил, фиксация взятия ворот (голов). Линейные судьи отвечают за отслеживание положений «вне игры», пробросов шайбы, нарушений численного состава, а также проведение вбрасываний шайбы.</p>\r\n<p>Кроме судей на льду, на каждом матче присутствует судейская бригада, находящаяся за пределами площадки. В неё входят:</p>\r\n<ul>\r\n<li>двое судей за воротами (при наличии одного главного судьи)</li>\r\n<li>один секретарь и до двух помощников секретаря</li>\r\n<li>один судья-хронометрист</li>\r\n<li>один судья-информатор</li>\r\n<li>один судья видеоповтора</li>\r\n<li>двое судей на скамейке штрафников</li>\r\n</ul>\r\n<p></p>', 'ru', 'referee_field__content_ru', 'hockey', NULL, '2021-08-18 07:34:00', NULL),
(65, 'Шайба', 'kk', 'washer_field__title_kk', 'hockey', NULL, NULL, NULL),
(66, 'Шайбалы хоккей ойынына арналған спорт снаряды. Қалыңдығы 2,54 см (1 дюйм), диаметрі 7,62 см (3 дюйм) және салмағы 156-170 грамм ысытылған резеңкеден жасалған диск. Шайбалар түсі және тағайындалуына қарай әр түрлі болады: қара шайбалар хоккейге арналған; көк шайбалар – жеңілдетілген дайындық үшін; қызғылт сары шайбалар – ауырлатылған дайындық үшін; ақ шайбалар – қақпашылардың дайындығына арналған.', 'kk', 'washer_field__content_kk', 'hockey', NULL, '2021-08-18 07:09:02', NULL),
(67, 'Шайба', 'ru', 'washer_field__title_ru', 'hockey', NULL, NULL, NULL),
(68, 'Спортивный снаряд для игры в хоккей с шайбой. Представляет собой диск из вулканизированной резины, толщиной 2,54 см (1 дюйм), диаметром 7,62 см (3 дюйма) и весом 156-170 грамм. Шайбы отличаются по цветам и предназначению: черные шайбы для игры в хоккей; синие шайбы - облегченные тренировочные; оранжевые шайбы - утяжелённые тренировочные; белые шайбы - для тренировки вратарей.', 'ru', 'washer_field__content_ru', 'hockey', NULL, '2021-08-18 07:34:00', NULL),
(69, 'Электрондық табло', 'kk', 'scoreboard__title_kk', 'hockey', NULL, NULL, NULL),
(70, 'Ойын есебі, кезең нөмірі, қалған ойын уақыты, әр команда үшін бір айыптық жою уақыты жөнінде ақпаратты көрсетуге (визуалдауға) арналған табло.', 'kk', 'scoreboard__content_kk', 'hockey', NULL, '2021-08-18 07:09:02', NULL),
(71, 'Электронное табло', 'ru', 'scoreboard__title_ru', 'hockey', NULL, NULL, NULL),
(72, 'Табло предназначено для вывода(визуализации) информации о счете игры, номера периода, оставшегося времени игры, времени одного штрафного удаления для каждой из команд.', 'ru', 'scoreboard__content_ru', 'hockey', NULL, '2021-08-18 07:34:00', NULL),
(73, 'Мұз құюшы машина', 'kk', 'ice_machine__title_kk', 'hockey', NULL, NULL, NULL),
(74, 'Ойын есебі, кезең нөмірі, қалған ойын уақыты, әр команда үшін бір айыптық жою уақыты жөнінде ақпаратты көрсетуге (визуалдауға) арналған табло.', 'kk', 'ice_machine__content_kk', 'hockey', NULL, '2021-08-18 07:09:02', NULL),
(75, 'Ледозаливочная машина', 'ru', 'ice_machine__title_ru', 'hockey', NULL, '2021-08-18 21:24:39', NULL),
(76, 'Используется для восстановления льда на катках. До их изобретения это производилось вручную. Первый ресурфейсер изобрёл Фрэнк Замбони в 1949 году в городе Парамаунт, штат Калифорния.', 'ru', 'ice_machine__content_ru', 'hockey', NULL, '2021-08-18 21:25:01', NULL),
(77, 'Көрермендер трибунасы', 'kk', 'tribune__title_kk', 'hockey', NULL, '2021-08-18 21:28:58', NULL),
(78, 'Жанкүйерлер командалардың ойынын көретін жер.', 'kk', 'tribune__content_kk', 'hockey', NULL, '2021-08-18 21:29:09', NULL),
(79, 'Зрительская трибуна', 'ru', 'tribune__title_ru', 'hockey', NULL, '2021-08-18 21:28:21', NULL),
(80, 'Места, откуда болельщики наблюдают за игрой команд', 'ru', 'tribune__content_ru', 'hockey', NULL, '2021-08-18 21:28:39', NULL),
(81, 'Ойыншылардың орындығы', 'kk', 'bench__title_kk', 'hockey', NULL, '2021-08-18 21:35:26', NULL),
(82, 'Ойыншылар орындығында отыруға ойынға арналған киім киген хоккейшілер және сегізден көп емес әр команданың ресми өкілдеріне ғана рұқсат етілген. 1,5 х 10 өлшемді әр ойыншылар орны қызыл сызықтың ортасынан 2,0 м қашықтықта орналасуы тиіс. <br/><br/> Орындықтың екі шетінде екі есік болуы тиіс (есікшелер). Ойыншылардың орындығы айыптылар орындығына және матч хатшысының орындығына қарама-қарсы мұз алаңының бір жағынан орналасуы тиіс. <br/><br/> Командалар өз орындықтарын матч бойы пайдалануы тиіс. <br/><br/> Ойыншылар орындықтары көрермендерден жан-жақтан қоршаулануы тиіс; хоккейшілердің мұзға шығатын жақ қана ашық болуы тиіс. <br/><br/> Ойын иесі ретінде белгіленген команда ойыншылар орындығын таңдау құқығына ие.', 'kk', 'bench__content_kk', 'hockey', NULL, '2021-08-18 21:45:03', NULL),
(83, 'Скамейки игроков', 'ru', 'bench__title_ru', 'hockey', NULL, '2021-08-18 21:34:35', NULL),
(84, 'На скамейках допускается присутствие только хоккеистов в форме и не более восьми официальных представителей каждой команды. <br/> <br/>Каждая скамейка игроков размерами 1,5 х 10 метров должна быть установлена в 2,0 метрах от центра красной линии.<br/><br/> С каждого конца скамейки игроков должны быть две двери (калитки). <br/> Скамейки игроков должны располагаться с одной стороны ледовой площадки напротив своих скамеек штрафников и скамейки секретаря матча. <br/> Команды должны использовать свои скамейки в течение всего матча.<br/><br/> Скамейки игроков должны быть огорожены со всех трех сторон от зрителей; единственной открытой стороной является та, которая открыта для выхода хоккеистов на лед. Команда, определенная как команда хозяев, имеет право выбора скамейки игроков.', 'ru', 'bench__content_ru', 'hockey', NULL, '2021-08-18 21:46:13', NULL),
(85, 'Айыптылар орындығы', 'kk', 'penalty_box__title_kk', 'hockey', NULL, NULL, NULL),
(86, 'Әр хоккей алаңы айыпталған ойыншыларға арналған екі орындықпен жабдықталған. Әр орындық кемінде 5 ойыншыға есептелген. Орындықтың минималдық ұзындығы – 4 метр, ені – 1,5 метр.', 'kk', 'penalty_box__content_kk', 'hockey', NULL, '2021-08-18 07:09:02', NULL),
(87, 'Скамейка штрафников', 'ru', 'penalty_box__title_ru', 'hockey', NULL, NULL, NULL),
(88, 'Каждая хоккейная площадка оборудована двумя скамейками для оштрафованных игроков. Каждая скамейка должна быть рассчитана минимум на 5 игроков. Минимальная длина скамейки — 4 метра, ширина — 1,5 метра.', 'ru', 'penalty_box__content_ru', 'hockey', NULL, '2021-08-18 07:34:00', NULL),
(89, 'Қорғау аймағы', 'kk', 'zone_a__title_kk', 'hockey', NULL, NULL, NULL),
(90, 'Аймақ - белгілеу сызықтарымен белгіленген алаңның бөлігі.\r\n<br/>\r\nҚорғау аймағы (қақпа жанындағы аймақ)', 'kk', 'zone_a__content_kk', 'hockey', NULL, '2021-08-18 07:09:02', NULL),
(91, 'Зона обороны', 'ru', 'zone_a__title_ru', 'hockey', NULL, NULL, NULL),
(92, 'Зона - определённая линиями разметки часть площадки.\n\nЗона обороны (зона у своих ворот)', 'ru', 'zone_a__content_ru', 'hockey', NULL, '2021-08-20 08:12:20', '54'),
(93, 'Орта аймақ', 'kk', 'zone_c__title_kk', 'hockey', NULL, NULL, NULL),
(94, 'Аймақ - белгілеу сызықтарымен белгіленген алаңның бөлігі.\r\n<br/>\r\nОрта аймақ (бейтарап аймақ) әр команданың шабуыл және қорғау аймақтарының арасында орналасады.', 'kk', 'zone_c__content_kk', 'hockey', NULL, '2021-08-18 07:09:02', NULL),
(95, 'Средняя зона', 'ru', 'zone_c__title_ru', 'hockey', NULL, NULL, NULL),
(96, 'Зона - определённая линиями разметки часть площадки. Средняя зона (нейтральная зона), находится между зонами атаки и обороны каждой команды)', 'ru', 'zone_c__content_ru', 'hockey', NULL, '2021-08-18 07:34:00', NULL),
(97, 'Шабуыл аймағы', 'kk', 'zone_b__title_kk', 'hockey', NULL, NULL, NULL),
(98, 'Аймақ - белгілеу сызықтарымен белгіленген алаңның бөлігі. <br/>Шабуыл аймағы (қарсылас қақпаның жанында)', 'kk', 'zone_b__content_kk', 'hockey', NULL, '2021-08-18 07:09:02', NULL),
(99, 'Зона атаки', 'ru', 'zone_b__title_ru', 'hockey', NULL, NULL, NULL),
(100, 'Зона - определённая линиями разметки часть площадки. <br> Зона атаки (у чужих ворот)', 'ru', 'zone_b__content_ru', 'hockey', NULL, '2021-08-18 07:34:00', NULL),
(101, 'Для выбора игрового амплуа следует учитывать ряд факторов, влияющих на способность игрока решать поставленную перед ним задачу на льду. Необходимо знать психологичепские особенности будущего хоккеиста, потенциал его физического развития, склонность к атакующим или оборонительным действиям.', 'ru', 'hockey_block_desc_4_ru', 'hockey', NULL, '2021-09-10 12:21:35', NULL),
(102, 'Қорғаушы, шабуылшы немесе қақпашы Ойын амплуасын таңдау үшін ойыншының мұз айдынында қойылған міндетті шешу қабілетіне әсер ететін бірқатар факторларды есепке алу қажет.<br/><br/> Болашақ хоккейшінің психологиялық ерекшеліктерін, оның физикалық дамуының потенциалын, шабуыл немесе қорғау әрекеттерге бейімділігін білу қажет.', 'kk', 'hockey_block_desc_4_kk', 'hockey', NULL, '2021-08-19 00:59:05', NULL),
(103, 'Хоккейная инфраструктура', 'ru', 'hockey_infrastructure_title_ru', 'hockey', NULL, NULL, NULL),
(104, 'Хоккей инфрақұрылымы', 'kk', 'hockey_infrastructure_title_kk', 'hockey', NULL, '2021-08-18 07:09:02', NULL),
(105, 'Найдите школу в своем регионе', 'ru', 'schools_page__desc_ru', 'schools', NULL, '2021-08-19 08:13:37', NULL),
(106, 'Өз өңіріңізде мектепті тауып алыңыз', 'kk', 'schools_page__desc_kk', 'schools', NULL, '2021-08-18 07:09:02', NULL),
(107, 'хоккейные  школы', 'ru', 'schools_count_title_ru', 'schools', NULL, '2021-08-22 22:32:11', NULL),
(108, 'хоккей <br/>\r\nмектептері', 'kk', 'schools_count_title_kk', 'schools', NULL, NULL, NULL),
(109, '23', 'ru', 'schools_count_ru', 'schools', NULL, NULL, NULL),
(110, '23', 'kk', 'schools_count_kk', 'schools', NULL, NULL, NULL),
(111, '6850', 'ru', 'children_count_ru', 'schools', NULL, NULL, NULL),
(112, '6850', 'kk', 'children_count_kk', 'schools', NULL, NULL, NULL),
(113, 'детей <br/>в хоккее', 'ru', 'children_count_title_ru', 'schools', NULL, '2021-08-22 11:17:00', NULL),
(114, 'хоккей ойнайтын <br/>\r\nбала', 'kk', 'children_count_title_kk', 'schools', NULL, NULL, NULL),
(115, 'балалар<br/>командалары', 'kk', 'children_teams_count_title_kk', 'schools', NULL, '2021-08-22 11:24:01', NULL),
(116, 'детских<br/>команд', 'ru', 'children_teams_count_title_ru', 'schools', NULL, '2021-08-22 11:25:17', NULL),
(117, '116', 'ru', 'children_teams_count_ru', 'schools', NULL, NULL, NULL),
(118, '116', 'kk', 'children_teams_count_kk', 'schools', NULL, NULL, NULL),
(119, 'Как записать ребенка?', 'ru', 'how_register_a_child_ru', 'faq', NULL, NULL, NULL),
(120, 'Баланы қалай тіркеуге болады?', 'kk', 'how_register_a_child_kk', 'faq', NULL, NULL, NULL),
(121, 'Чтобы попасть в хоккейную секцию, свяжитесь с администрацией хоккейной школы в Вашем городе. Полный список городов, в которых работают хоккейные школы, и контакты администрации можно посмотреть на нашем сайте в разделе Школы или на Карте. Администрация расскажет вам об условиях, графике тренировок, запишет на первую тренировку.', 'ru', 'how_register_a_child_text_ru', 'faq', NULL, NULL, '53'),
(122, 'Хоккей секциясына тіркелу үшін қалаңыздағы хоккей мектебінің әкімшілігіне хабарласыңыз. Хоккей мектептері бар қалалар тізімі және әкімшіліктің байланыс ақпараты сайтымыздың Мектептер бөлімінде немесе Картада берілген. Әкімшілік шарттар, жаттықтыру кестесі жөнінде айтып береді және бірінші жаттықтыруға жазып алады.', 'kk', 'how_register_a_child_text_kk', 'faq', NULL, NULL, '53'),
(123, ' Во сколько лет лучше отдать ребенка в хоккей?', 'ru', 'what_age_a_child_to_give_ru', 'faq', NULL, '2021-09-11 09:15:33', '57'),
(124, 'Баланы хоккейге қай жасында берген жөн?', 'kk', 'what_age_a_child_to_give_kk', 'faq', NULL, NULL, NULL),
(125, '5 лет, это тот возраст, когда лучше всего развивается координация. Во сколько привести ребенка в хоккей, необходимо ориентироваться на желания самого ребенка. Если заинтересуется в 4 года — можете пробовать ставить его на коньки. Первый основной набор хоккейные школы проводят в 5 лет.', 'ru', 'what_age_a_child_to_give_text_ru', 'faq', NULL, '2021-09-11 09:04:02', '58'),
(126, '5 жас - үйлесімділік ең жақсы дамитын кезең. Баланың ниетіне қарап, хоккейге жаздыру шешімін қабылдау қажет. Егер баланың өзі 4 жасында қызығушылық танытса, оны конькиге тұрғызып, көруге болады. Хоккей мектептеріне алғашқы басты қабылдау 5 жаста өткізіледі. ', 'kk', 'what_age_a_child_to_give_text_kk', 'faq', NULL, '2021-09-12 12:47:02', '59'),
(127, 'Как понять, получится ли из ребенка хоккеист?', 'ru', 'how_to_determine_child_to_become_hockey_player_ru', 'faq', NULL, NULL, NULL),
(128, 'Бала хоккейші бола алатынын қалай түсінуге болады?', 'kk', 'how_to_determine_child_to_become_hockey_player_kk', 'faq', NULL, NULL, NULL),
(129, 'Любой ребенок имеет шанс, если у него развиты физиологические особенности - выносливость, координация, гибкость, ловкость, быстрота реакции и мышления. Для определения перспективы и степени вовлечения в хоккей необходимо проводить не более 3-5 занятий.', 'ru', 'how_to_determine_child_to_become_hockey_player_text_ru', 'faq', NULL, '2021-09-12 12:54:43', '60'),
(130, 'Егер төзімділік, үйлесімділік, икемділік, ептілік, тез реакция және ойлау қабілеті сияқты физиологиялық қасиеттері дамыған болса, әр баланың хоккейші болуға мүмкіндігі бар. Хоккейді ойнау болашағын және қатысу дәрежесін анықтау үшін кемінде 3-5 сабақ өткізу қажет.', 'kk', 'how_to_determine_child_to_become_hockey_player_text_kk', 'faq', NULL, NULL, NULL),
(131, 'Кто проводит занятия?', 'ru', 'who_conducts_classess_ru', 'faq', NULL, NULL, NULL),
(132, 'Сабақты кім жүргізеді?', 'kk', 'who_conducts_classess_kk', 'faq', NULL, NULL, NULL),
(133, 'Занятия в хоккейных школах проводят профессиональные хоккейные тренеры. В некоторых командах помощниками тренеров выступают действующие спортсмены, выступающие в составе профессиональных хоккейных клубов. Также к работе в командах могут привлекаться тренеры по катанию или тренеры для проведения ОФП. На тренировках присутствует тренер набора, который дает рекомендации по поступлению в ДЮСШ. Тренировки проводятся в позитивной игровой форме поперек площадки. Одновременно может быть организованно две площадки.', 'ru', 'who_conducts_classess_text_ru', 'faq', NULL, '2021-09-12 13:01:01', '61'),
(134, 'Хоккей мектептеріндегі сабақтарды кәсіби хоккей жаттықтырушылары жүргізеді. Кейбір командаларда кәсіби хоккей клубтардың құрамында ойнайтын спортшылар жаттықтырушылардың көмекшілері ретінде жұмыс істейді. Сондай-ақ командада жұмысқа сырғанау бойынша жаттықтырушылар немесе жалпы физикалық дайындық бойынша жаттықтырушылар тартылуы мүмкін. Жаттықтырулар позитивті түрде алаңда көлденең өткізіледі.', 'kk', 'who_conducts_classess_text_kk', 'faq', NULL, NULL, NULL),
(135, 'Какие документы нужны?', 'ru', 'what_documents_are_required_ru', 'faq', NULL, NULL, NULL),
(136, 'Қандай құжаттар қажет?', 'kk', 'what_documents_are_required_kk', 'faq', NULL, NULL, NULL),
(137, 'На первую тренировку необходимо предоставить медицинскую справку, подтверждающую отсутствие противопоказаний для занятий спортом. Срок предоставления справки не должен составлять более 30 (тридцати) дней от даты ее выдачи. На все занятия необходимо иметь с собой: спортивную форму, сменную спортивную обувь (кроссовки), нательное белье.', 'ru', 'what_documents_are_required_text_ru', 'faq', NULL, NULL, NULL),
(138, 'Бірінші жаттықтыруға спортпен айналысуға қарсы көрсетімдерді растайтын медициналық анықтаманы әкелу қажет. Медициналық анықтаманы тапсыру мерзімі берілген күннен бастап 30 (отыз) күннен аспауы тиіс. Барлық сабақтарда спорт киім, ауысымды спорт аяқ киімі (кроссовки), ішкі киім міндетті түрде болуы тиіс.', 'kk', 'what_documents_are_required_text_kk', 'faq', NULL, NULL, NULL),
(139, 'Где можно купить экипировку?', 'ru', 'where_to_buy_equipments_ru', 'faq', NULL, NULL, NULL),
(140, 'Жабдықты қайда сатып алуға болады?', 'kk', 'where_to_buy_equipments_kk', 'faq', NULL, NULL, NULL),
(141, 'Необходимый инвентарь и экипировку вы можете найти в специализированных магазинах. Консультанты помогут правильно подобрать необходимую для Вас экипировку.', 'ru', 'where_to_buy_equipments_text_ru', 'faq', NULL, NULL, NULL),
(142, 'Қажетті құралдарды және жабдықты мамандандырылған дүкендерде табуға болады. Кеңес берушілер Сізге қажетті жабдықты дұрыс таңдап береді.', 'kk', 'where_to_buy_equipments_text_kk', 'faq', NULL, NULL, NULL),
(143, 'Не нашли ответ?', 'ru', 'not_found_answers_ru', 'faq', NULL, NULL, NULL),
(144, 'Жауапты таба алмадыңыз ба?', 'kk', 'not_found_answers_kk', 'faq', NULL, NULL, NULL),
(145, 'Пришлите его нам на почту office@icehockey.kz, и мы обязательно ответим!', 'ru', 'not_found_answers_text_ru', 'faq', NULL, '2021-09-12 13:11:26', '62'),
(146, 'Сұрағыңызды office@icehockey.kz поштасына жіберіңіз және біз Сізге міндетті түрде жауап береміз!', 'kk', 'not_found_answers_text_kk', 'faq', NULL, NULL, NULL),
(147, 'QHF предлагает программу, которая позволит детям познакомится с этим прекрасным видом спорта Программа «SALEM HOKEI» обучает детей основам игры вне соревнований, поэтому они могут делать свои првые шаги в хоккее без угрозы для здоровья', 'ru', 'what_to_from_page_description_ru', 'faq', NULL, '2021-09-11 06:05:32', NULL),
(148, 'QHF балаларға осы спорт түрімен танысуға мүмкіндік беретін бағдарламаны ұсынады.\n\n«SALEM HOKEI» бағдарламасы балаларға жарыстан тыс ойын негіздеріне үйретеді, сондықтан олар хоккейдегі алғашқы қадамдарын денсаулыққа қауіп-қатерсіз жасай алады.', 'kk', 'what_to_from_page_description_kk', 'faq', NULL, '2021-09-11 06:03:27', NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `uploads`
--

CREATE TABLE `uploads` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'image',
  `filename` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `uploads`
--

INSERT INTO `uploads` (`id`, `type`, `filename`, `created_at`, `updated_at`) VALUES
(1, 'video', 'WAa3SnArEKZMo6ZrXp37040sVXemA3XH0DVLYV38.mp4', '2021-08-20 00:56:14', '2021-08-20 00:56:14'),
(2, 'video', 'N7ignAMSorJiE1Wgw357QKQO00TtNU2OjEiUc6ZE.mp4', '2021-08-20 00:56:27', '2021-08-20 00:56:27'),
(3, 'video', 'zh8FXUO6NfJGQfucZIO5tLELWRZp9icYw8nWWBpT.mp4', '2021-08-20 00:58:37', '2021-08-20 00:58:37'),
(4, 'video', 'Hc5fD3s9xZnxSAveTxRFM64bPzEXyBzR6SGICsFX.mp4', '2021-08-20 00:59:15', '2021-08-20 00:59:15'),
(5, 'video', 'QjkryJafO8BgFWlPmeKohxFctHq7VZQRk5yvVR8X.mp4', '2021-08-20 01:15:48', '2021-08-20 01:15:48'),
(6, 'video', 'Qr2ltVV3AnfWTpppiQ3hTnHSTwyME3AJk6BJldoS.mp4', '2021-08-20 01:15:55', '2021-08-20 01:15:55'),
(7, 'video', 'oRVvzy7kTcs8GAXdS5KTemVU7IOzjszmHfSji2dZ.mp4', '2021-08-20 01:16:01', '2021-08-20 01:16:01'),
(8, 'video', '0dbz7Mg4eIe1j6hO9nU50r9pqTpPno5nh4OGAJAd.mp4', '2021-08-20 01:22:17', '2021-08-20 01:22:17'),
(9, 'video', 'V63L3mjTnhlkeHQ3NDQT9Inx9ytSWbJYKrMIlWRR.mp4', '2021-08-20 01:22:21', '2021-08-20 01:22:21'),
(10, 'video', 'xvy3bCJVi1W41cWcZmypdF7j9qHYTH8gLkLLZR36.mp4', '2021-08-20 01:24:00', '2021-08-20 01:24:00'),
(11, 'video', 'w1swezpZWmblEkh1aEvpR5f30gXBGfQJBXdx46fK.mp4', '2021-08-20 01:24:06', '2021-08-20 01:24:06'),
(12, 'video', 'AkkcMmVJcwC6JaZX9U6EMa7mAHeJTBgNEt5Ky7Ed.mp4', '2021-08-20 01:24:16', '2021-08-20 01:24:16'),
(13, 'video', 'UL0Uhiet7BO8ht8UXGOIrcM9TUiROlTeOvQveO7w.mp4', '2021-08-20 01:27:20', '2021-08-20 01:27:20'),
(14, 'video', '2XXUNoqhL36sobDOFxLyxtz3uAXownDsqBVPamqq.mp4', '2021-08-20 01:31:44', '2021-08-20 01:31:44'),
(15, 'video', '1XJoedBQoghG3n9fZTBd2aj9ZRCw8htlaNqEX4SG.mp4', '2021-08-20 01:32:24', '2021-08-20 01:32:24'),
(16, 'video', 'GurDp6SbQwh4v9immeCJ8q3ubHDaEeXiMpHtZ1bN.mp4', '2021-08-20 01:34:29', '2021-08-20 01:34:29'),
(17, 'video', 'RFqcAnsLvaCk2mp1nIHxp5KsOnLLqqTHRs2MGZ0A.mp4', '2021-08-20 01:37:09', '2021-08-20 01:37:09'),
(18, 'video', 'ZyyTlm64XgK5ISbPRNCCFxOjZuNmFfmMMCasAF3D.mp4', '2021-08-20 01:38:11', '2021-08-20 01:38:11'),
(19, 'video', 'NGRm3qe3DOUN2boMIaBFNMy5qstCRQrYnqoDsVbK.mp4', '2021-08-20 01:39:45', '2021-08-20 01:39:45'),
(20, 'video', 'wwAC9NQbCJfqoFPOwQGyI5r9MUBS0vIXVRlNgCUm.mp4', '2021-08-20 01:40:34', '2021-08-20 01:40:34'),
(21, 'video', 'Erfa09pPHA7ieFkiHcWmvIpMPX6StxMvrrn8gW3z.mp4', '2021-08-20 01:41:46', '2021-08-20 01:41:46'),
(22, 'video', 'ld9r5kP83eIzfRfYSYHkceRjX0kPPiUBi759BFpc.mp4', '2021-08-20 01:43:11', '2021-08-20 01:43:11'),
(23, 'video', '9TXJVEQ7WlTOh6BSOtTHODV6z02E3bOmQbHBC7rr.mp4', '2021-08-20 01:44:10', '2021-08-20 01:44:10'),
(24, 'video', 'MHwhrIgniGL7ePa4DlV0zTaGmuJXaZsMvlR4SElh.mp4', '2021-08-20 01:47:34', '2021-08-20 01:47:34'),
(25, 'video', 'fFtM77YcKhkujwhrcKv6qGaHg3YUOckEFxyBretz.mp4', '2021-08-20 01:48:46', '2021-08-20 01:48:46'),
(26, 'video', 'rj3jT20cJJXhwPRbLKm3LUjPAkk8Jd9dMTgjHpa3.mp4', '2021-08-20 01:49:08', '2021-08-20 01:49:08'),
(27, 'video', 'ETAtpEaXjW6efELZVxCQRXnCps1CHJP3uSVXkKm5.mp4', '2021-08-20 01:50:19', '2021-08-20 01:50:19'),
(28, 'video', 'hm9DmKHOZBzecNndcIZp7cyKxRyek7HynA5HOp2L.mp4', '2021-08-20 01:51:25', '2021-08-20 01:51:25'),
(29, 'video', 'm8j1lMlrnZtxunX6ZDhy2EuZmY5zEDW8WiOvHL78.mp4', '2021-08-20 01:51:45', '2021-08-20 01:51:45'),
(30, 'video', 'MMiF6mN9Avi2ZZviE8GLjFsSr9uPXr5GtjAr0VOV.mp4', '2021-08-20 01:52:09', '2021-08-20 01:52:09'),
(31, 'video', 'y1TPArsuJahSLAa6ma1kJjj4WN5PWqs6h7WjP1i5.mp4', '2021-08-20 01:52:55', '2021-08-20 01:52:55'),
(32, 'video', 'fdio3ACVZFSH3hV10Leq0tZonJ3lWyCy2FkTdQdt.mp4', '2021-08-20 01:53:44', '2021-08-20 01:53:44'),
(33, 'video', 'YygUfGF9ZHHtv8iuUDj61vrPEXv6Q8VPqZ9Jw6jj.mp4', '2021-08-20 01:54:05', '2021-08-20 01:54:05'),
(34, 'video', 'yI61uX45NUpmLGDvZ40nV5yaUXku1mgT7nTCfc1w.mp4', '2021-08-20 02:04:53', '2021-08-20 02:04:53'),
(35, 'video', 'ZINV4SC2xnyAdM8GgIBXXhtdUsBitl7gKkyoB899.mp4', '2021-08-20 02:05:37', '2021-08-20 02:05:37'),
(36, 'video', '7v7cTvLNSeFdiNYg37NCVm3qvRqoqYl76p7NODeH.mp4', '2021-08-20 02:08:14', '2021-08-20 02:08:14'),
(37, 'video', 'iDgtV4LZFEpppVfzBLiy29OjviTXYs2ETKjVNjP6.mp4', '2021-08-20 02:08:40', '2021-08-20 02:08:40'),
(38, 'video', 'VUMTilAzgXzBxv1NqpfVQx5IPztEERFXYRwofJuA.mp4', '2021-08-20 02:09:27', '2021-08-20 02:09:27'),
(39, 'video', '9mllVqlh9gdkCDwHDFgZkMPcLJ8U9yyXwykzwKwp.mp4', '2021-08-20 02:09:46', '2021-08-20 02:09:46'),
(40, 'video', 'FTWOiNDoet0pkAQMVgLS2bEo2BO4JGKMmKGTbnwY.mp4', '2021-08-20 02:46:46', '2021-08-20 02:46:46'),
(41, 'video', '3n2nxKrfl4L93Spnfo7lj4o9Pstdeo3Eg9N7jmsp.mp4', '2021-08-20 02:52:14', '2021-08-20 02:52:14'),
(42, 'video', 'zhxCyFbOarFZL8x9rEn0l2g97RdJe7CX7TPkIIAJ.mp4', '2021-08-20 03:07:42', '2021-08-20 03:07:42'),
(43, 'video', 'tEV6wD5yrm5yfPlpIWE0ci15XA1aDv7awpb36rzh.mp4', '2021-08-20 03:12:06', '2021-08-20 03:12:06'),
(44, 'video', 'rTR3SmAmDkJ96pPG3nnp98e2yuQjnEoMivR7Y0Sd.mp4', '2021-08-20 03:15:15', '2021-08-20 03:15:15'),
(45, 'video', 'M7sztQYDdwhd3Mbwv5yE4spd1iP8bqqSwRnux3MK.mp4', '2021-08-20 03:15:57', '2021-08-20 03:15:57'),
(46, 'video', 'FxyDw4nJOmKP16kLBy0DZMCYpM3hEw1zYQOuJfXO.mp4', '2021-08-20 03:18:49', '2021-08-20 03:18:49'),
(47, 'video', '0TEtjmSDShpdLIexhBPEwjOEVGBvjx0kFvUMS6EH.mp4', '2021-08-20 03:19:27', '2021-08-20 03:19:27'),
(48, 'video', 'a4ldeF70519IpoCcirWRaqt1BM659bUmZUkf6qwJ.mp4', '2021-08-20 03:20:00', '2021-08-20 03:20:00'),
(49, 'video', 'MCwNzYNNUlGAw7oNZPxMzExKS5nHW9uNAniPyaJG.mp4', '2021-08-20 03:20:28', '2021-08-20 03:20:28'),
(50, 'video', 'n0lx7CoDMMveGFbuxPkdzdoxPxiqr2SOOFhPqisr.mp4', '2021-08-20 03:36:20', '2021-08-20 03:36:20'),
(51, 'video', 'xKrZWfEG2v1t0XOtYX5kac7DaolveAbcb5NyLw5q.mp4', '2021-08-20 03:38:17', '2021-08-20 03:38:17'),
(52, 'video', 'i3HVfZlVsfsjYrE4X6PSxrjeis2YR8goMygXjuEj.mp4', '2021-08-20 03:38:32', '2021-08-20 03:38:32'),
(53, 'video', 'Qjiftbo2t4EGZtJVw4fVgRwmc1ZRLR6YLRsPzuzH.mp4', '2021-08-20 07:24:36', '2021-08-20 07:24:36'),
(54, 'video', 'EYLYtObJldVv1zuxUbM85nS7g040eyT17SxFPyR5.mp4', '2021-08-20 08:12:20', '2021-08-20 08:12:20'),
(55, 'video', 'JyHQhRZWJEvQaxAnX9R4w6F2yza7SGr6XnMMhCNS.mp4', '2021-08-20 08:14:01', '2021-08-20 08:14:01'),
(56, 'video', 'RzXXdKaKuNlrvQ9NC3vMWUdg5PwESQsslk8u2AYQ.mp4', '2021-09-11 08:56:44', '2021-09-11 08:56:44'),
(57, 'video', 'zx0KyObtQ9pzyzbOg8915yo8NUMviAwGxnjg4pDp.mp4', '2021-09-11 08:59:49', '2021-09-11 08:59:49'),
(58, 'video', 'bwvSZpTyOcAlBNUf2ezn5Q83G1AuWUGLMLshCbQ9.mp4', '2021-09-11 09:04:02', '2021-09-11 09:04:02'),
(59, 'video', 'Z72PatS3pKPApOjJ1PXWl11nDpnKzfPb7fkeRx01.mp4', '2021-09-12 12:44:35', '2021-09-12 12:44:35'),
(60, 'video', 'JM0ykwLshc3mTgVX20uNl2CyBK5nkmqIockfilb3.mp4', '2021-09-12 12:54:43', '2021-09-12 12:54:43'),
(61, 'video', '5dBOt1rB3nS4TREG5QelaHmGjbPsQa2G1FDLUJtq.mp4', '2021-09-12 13:01:01', '2021-09-12 13:01:01'),
(62, 'video', 'pGqKXBC4lMpnYI6oXy4l3aVVOplV90OSeoB3y5WG.mp4', '2021-09-12 13:11:26', '2021-09-12 13:11:26');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `surname` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `published` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role` smallint(5) UNSIGNED DEFAULT NULL,
  `avatar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sex` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `birthday_at` datetime DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `iin` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bin` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `surname`, `description`, `phone`, `published`, `role`, `avatar`, `sex`, `slug`, `birthday_at`, `email`, `email_verified_at`, `iin`, `bin`, `password`, `remember_token`, `deleted_at`, `created_at`, `updated_at`) VALUES
(3, 'Редактор-1', 'Жаксылык', 'I love to play dota 2', '77011234567', '1', 0, '/assets/img/avatars/m1.png', '0', NULL, '1994-05-03 05:00:00', 'redactor@info.kz', NULL, NULL, NULL, '$2y$10$LS8mjz6nwvm/e8d1I1r3lONSSfqdKsDX0W6eY7JcZKK1b5OK5V/lG', 'sq8QYN2sNAZR9ty8aBl15lxTtdM9zGzhAR6F3rDVCICLi501L77oC7toEwV9', NULL, NULL, '2020-06-08 05:21:38'),
(13, 'Марина', NULL, NULL, NULL, '0', 0, NULL, '0', NULL, NULL, 'marina@info.kz', '2020-06-08 05:23:52', NULL, NULL, '$2y$10$5LI3JoczhY1TuBMu0NcAO.sY9fiVWu6o6mnS61Aaej/Myp2C.OQGK', '48d0FgmLVKlR3DWi4tlNRtwPDjRoreS5vUIc5AV9cBqWvJekkdlu9rlYLX6r', NULL, '2020-06-08 05:23:52', '2020-06-08 05:23:52'),
(14, 'Администратор Salem Hokei', NULL, NULL, NULL, '0', 0, NULL, '0', NULL, NULL, 'salem.hokei@yandex.kz', '2020-07-02 02:13:37', NULL, NULL, '$2y$10$iqom/qLSfc7eXQRq9Q.pcO123g/Ewx7N8xEVM/sKXsj2ojNrLtvXe', 'il16b5L5XQBNf6c8r0nXUJwm42FTk62FpHtdJuWjQ1waZPnTil7wJHO8UOOn', NULL, '2020-07-02 02:13:38', '2020-07-02 02:13:38'),
(15, 'Трушков Михаил', NULL, NULL, NULL, '0', 0, NULL, '0', NULL, NULL, 'trushkov@icehockey.kz', '2021-07-26 19:56:57', NULL, NULL, '$2y$10$/QIxNmFKYSeDqHKWsb3Sy.a/n.EaY1Fyyr9qiKtiukpN9mT9OfgqC', 'PAsVZLShczGgSp9DidREDmB10AQcVfhunSw9CCxTGV4nPcZL4wac3kHuIHxi', NULL, '2021-07-26 19:56:57', '2021-07-26 19:56:57'),
(16, 'ссс', NULL, NULL, NULL, '0', 0, NULL, '0', NULL, '2021-10-17 07:29:53', 'bjr061981@gmail.com', NULL, NULL, NULL, '$2y$10$8WuxfhGrqZt1593OYHBtNuMJ8LpGkESbtAI68701Y603.u4XBN6k.', 'u5UxhYSTQP1dx0sJXKWH9Fs4qKU58whfVM3lKzzjyojXxLrsgX2hdSAZNPvT', NULL, '2021-10-01 04:40:46', '2021-10-12 04:40:51');

-- --------------------------------------------------------

--
-- Структура таблицы `videos`
--

CREATE TABLE `videos` (
  `id` int(11) NOT NULL,
  `name_ru` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name_kk` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link_ru` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link_kk` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` tinyint(1) NOT NULL DEFAULT 2,
  `published_at` timestamp NOT NULL,
  `is_published` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `videos`
--

INSERT INTO `videos` (`id`, `name_ru`, `name_kk`, `name_en`, `link_ru`, `link_kk`, `link_en`, `type`, `published_at`, `is_published`, `created_at`, `updated_at`) VALUES
(1, 'Видео 1', NULL, NULL, 'https://www.youtube.com/watch?v=cbe1x1Eh1Ds', NULL, NULL, 2, '2020-05-05 11:17:14', 1, '2020-05-05 11:17:14', '2020-05-04 12:26:47');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `admin_menus`
--
ALTER TABLE `admin_menus`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `admin_menu_items`
--
ALTER TABLE `admin_menu_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `admin_menu_items_menu_foreign` (`menu`);

--
-- Индексы таблицы `albums`
--
ALTER TABLE `albums`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `album_images`
--
ALTER TABLE `album_images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `parent_id` (`album_id`);

--
-- Индексы таблицы `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `password_resets`
--
ALTER TABLE `password_resets`
  ADD PRIMARY KEY (`id`),
  ADD KEY `password_resets_email_index` (`email`);

--
-- Индексы таблицы `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_slug_unique` (`slug`);

--
-- Индексы таблицы `permission_role`
--
ALTER TABLE `permission_role`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `permission_user`
--
ALTER TABLE `permission_user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `permission_user_permission_id_index` (`permission_id`),
  ADD KEY `permission_user_user_id_index` (`user_id`);

--
-- Индексы таблицы `regions`
--
ALTER TABLE `regions`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_unique` (`name`),
  ADD UNIQUE KEY `roles_slug_unique` (`slug`);

--
-- Индексы таблицы `role_user`
--
ALTER TABLE `role_user`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `schoolreg`
--
ALTER TABLE `schoolreg`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `sections`
--
ALTER TABLE `sections`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sections_parent_id_index` (`parent_id`);

--
-- Индексы таблицы `section_region`
--
ALTER TABLE `section_region`
  ADD PRIMARY KEY (`id`),
  ADD KEY `section_id` (`section_id`,`region_id`),
  ADD KEY `region_id` (`region_id`);

--
-- Индексы таблицы `section_user`
--
ALTER TABLE `section_user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `section_id` (`section_id`,`user_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Индексы таблицы `texts`
--
ALTER TABLE `texts`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `uploads`
--
ALTER TABLE `uploads`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Индексы таблицы `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `admin_menus`
--
ALTER TABLE `admin_menus`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `admin_menu_items`
--
ALTER TABLE `admin_menu_items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT для таблицы `albums`
--
ALTER TABLE `albums`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `album_images`
--
ALTER TABLE `album_images`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `events`
--
ALTER TABLE `events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT для таблицы `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT для таблицы `password_resets`
--
ALTER TABLE `password_resets`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=84;

--
-- AUTO_INCREMENT для таблицы `permission_role`
--
ALTER TABLE `permission_role`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT для таблицы `permission_user`
--
ALTER TABLE `permission_user`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `regions`
--
ALTER TABLE `regions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT для таблицы `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `role_user`
--
ALTER TABLE `role_user`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT для таблицы `schoolreg`
--
ALTER TABLE `schoolreg`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT для таблицы `sections`
--
ALTER TABLE `sections`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT для таблицы `section_region`
--
ALTER TABLE `section_region`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT для таблицы `section_user`
--
ALTER TABLE `section_user`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT для таблицы `texts`
--
ALTER TABLE `texts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=149;

--
-- AUTO_INCREMENT для таблицы `uploads`
--
ALTER TABLE `uploads`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT для таблицы `videos`
--
ALTER TABLE `videos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `admin_menu_items`
--
ALTER TABLE `admin_menu_items`
  ADD CONSTRAINT `admin_menu_items_menu_foreign` FOREIGN KEY (`menu`) REFERENCES `admin_menus` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `permission_user`
--
ALTER TABLE `permission_user`
  ADD CONSTRAINT `permission_user_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `permission_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Ограничения внешнего ключа таблицы `sections`
--
ALTER TABLE `sections`
  ADD CONSTRAINT `sections_parent_id_foreign` FOREIGN KEY (`parent_id`) REFERENCES `sections` (`id`) ON DELETE SET NULL;

--
-- Ограничения внешнего ключа таблицы `section_region`
--
ALTER TABLE `section_region`
  ADD CONSTRAINT `section_region_ibfk_1` FOREIGN KEY (`section_id`) REFERENCES `sections` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `section_region_ibfk_2` FOREIGN KEY (`region_id`) REFERENCES `regions` (`id`) ON DELETE CASCADE;

--
-- Ограничения внешнего ключа таблицы `section_user`
--
ALTER TABLE `section_user`
  ADD CONSTRAINT `section_user_ibfk_1` FOREIGN KEY (`section_id`) REFERENCES `sections` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `section_user_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
