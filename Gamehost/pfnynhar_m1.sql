-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Ноя 01 2023 г., 10:49
-- Версия сервера: 8.0.31
-- Версия PHP: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `pfnynhar_m1`
--

-- --------------------------------------------------------

--
-- Структура таблицы `catalogs`
--

DROP TABLE IF EXISTS `catalogs`;
CREATE TABLE IF NOT EXISTS `catalogs` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int NOT NULL,
  `Sostav` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `Bec` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `cart` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `catalogs`
--

INSERT INTO `catalogs` (`id`, `title`, `img`, `price`, `Sostav`, `Bec`, `category`, `cart`, `created_at`, `updated_at`) VALUES
(1, 'Приставка CoolPud', 'img/cool.jpg', 2500, 'Помидор, Огурец, Цукини,Болгарский перец,Масло.', '200', '1', NULL, '2022-06-15 11:12:04', '2022-06-15 11:12:04'),
(2, 'Портативная приставка FCPlus', 'img/fcplus.jpg', 3000, 'Курица, Картошка, Морковка, Бульен.', '300', '1', NULL, '2022-06-15 11:12:50', '2022-06-15 11:12:50'),
(3, 'Джойстик Nacon', 'img/nacon.jpg', 750, 'Курица, Рис, Морковка, Лук, Картошка, Сельдерей.', '300', '3', NULL, '2022-06-15 11:14:00', '2022-06-15 11:14:00'),
(4, 'Приставка PS', 'img/ps.jpg', 5000, 'Картошка, Грибы, Лук, Морковка.', '300', '1', NULL, '2022-06-15 11:14:40', '2022-06-15 11:14:40'),
(6, 'Приставка PS4', 'img/ps4.jpg', 27000, 'Лосось, Рис, Нори, Огурец, Сливочный сыр, Кунжут.', '800', '1', NULL, '2022-06-15 12:27:27', '2022-06-15 12:27:27'),
(7, 'Джойстик PS4', 'img/ps4godz.jpg', 1200, 'Бутылка 0.5л', '500', '3', NULL, '2022-06-15 15:50:41', '2022-06-15 15:50:41'),
(8, 'Карта PS4 на 20$', 'img/pscard20.jpg', 1450, 'Бутылка 1л', '1000', '2', NULL, '2022-06-15 15:51:38', '2022-06-15 15:51:38'),
(9, 'Карта PS4 на 25$', 'img/pscard25.jpg', 1750, 'Банка 0.2 л', '200', '2', NULL, '2022-06-15 15:52:10', '2022-06-15 15:52:10'),
(10, 'Карта PS4 на 50$', 'img/pscard50.jpg', 3000, 'Бутылка 0.5л', '500', '2', NULL, '2022-06-15 15:52:51', '2022-06-15 15:52:51'),
(11, 'USERfdfd', 'img/psplus12.jpg', 3000, 'Бутылка 1.5л', '1500', '2', NULL, '2023-05-15 07:00:00', '2023-05-15 07:00:00'),
(12, 'Портативная приставка PSVita', 'img/psvita.jpg', 5000, 'Оливка, Сыр Фета, Красный лук, Болгарский перец, Огурец.', '200', '1', NULL, '2023-05-15 07:00:00', '2023-05-15 07:00:00'),
(13, 'Приставка Retro ', 'img/Retro.jpg', 2000, 'Кукуруза, Майонез,  Яйцо, Соленый Огурец, Кальмар. ', '200', '1', NULL, '2023-05-15 07:00:00', '2023-05-15 07:00:00'),
(14, 'Джойстик Xbox360', 'img/xbox360.jpg', 28, 'Петрушка, Помидор, Красный лук, Лайм, Авокадо.', '200', '3', NULL, '2023-05-15 07:00:00', '2023-05-15 07:00:00'),
(15, 'Приставка Xbox One', 'img/xbox2o.jpg', 10200, 'Картошка, Морковка, Петрушка, Перловка', '300', '1', NULL, '2023-05-15 07:00:00', '2023-05-15 07:00:00'),
(16, 'Приставка Xbox One white', 'img/xboxowhite.jpg', 10200, 'Крабовые палочки, Кукуруза, Горошек, Варёные яйца, Майонез.', '200', '1', NULL, '2023-05-15 07:00:00', '2023-05-15 07:00:00'),
(17, 'Приставка Xbox One X', 'img/xboxox.jpg', 12000, 'Мохито, Кола, Фанта, Барбарис', '2000', '1', NULL, '2023-05-15 07:00:00', '2023-05-15 07:00:00'),
(23, 'MINECRAFT', 'img/MINECRAFT.jpg', 3500, '-', '200', '4', NULL, '2023-05-25 12:09:57', '2023-05-25 12:09:57'),
(24, 'BattelField 2042', 'img/battlefield-2042.jpg', 2500, '-', '200', '4', NULL, '2023-05-25 12:17:26', '2023-05-25 12:17:26'),
(25, 'dsdsds', 'img/Switch.jpg', 323, 'ds', '111', '1', NULL, '2023-10-30 04:48:46', '2023-10-30 04:48:46');

-- --------------------------------------------------------

--
-- Структура таблицы `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_05_15_051118_create_catalogs_table', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `orders`
--

DROP TABLE IF EXISTS `orders`;
CREATE TABLE IF NOT EXISTS `orders` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `idP` bigint UNSIGNED NOT NULL,
  `idU` bigint UNSIGNED NOT NULL,
  `address` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` int NOT NULL,
  `cart` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `delivery` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `Number` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `idP` (`idP`),
  KEY `idU` (`idU`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Структура таблицы `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `surname` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `patronymic` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `login` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `isAdmin` tinyint(1) DEFAULT NULL,
  `Info` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_login_unique` (`login`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `surname`, `patronymic`, `login`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `isAdmin`, `Info`) VALUES
(1, 'admina', 'admin', 'admin', 'admin', 'admin', '2023-05-13 07:00:00', '$2y$10$ezK84QN3oiPX.324GdaRve5TkZC/KRxewFtr.EZ7ClgRaO9ymjcTi', 's2IFiN4TOqSdVFReUmDtRzDEiqpMWzed6G3M5Am6aeSgV8QLyQIhqxYN9fC0', '2023-05-13 07:00:00', '2023-05-13 07:00:00', 1, NULL),
(11, 'USER', 'USERa', 'USER', 'user', 'user', NULL, '$2y$10$OGOR.spaWp3nB.bfQk7dCu4FnTa7UUgMlzBiiQDkXVAAnFd82INx2', 'r4KCtjVAyHTHn4GcFlYBWmsnGht5iEau9oBGq5EOxK8Dqf374WupPXuoGuPE', '2023-05-22 11:51:44', '2023-05-22 11:51:44', 1, NULL),
(12, 'Loxov', 'Lohovich', 'Loxovchenko', 'LoXov', 'LOX', NULL, '$2y$10$lrWUzxGZLxEeKpFv/Ap3j.cASKtcCLOq8pSHe1LLDSXdOefyejVEW', NULL, '2023-10-30 22:20:06', '2023-10-30 22:20:06', NULL, NULL),
(13, 'sd', 'asd', 'asfg', 'assss', 'assss', NULL, '$2y$10$PNy6xAGya9fWdGJo8rdzjer/ahy1PUbIwDXsSZ40Iz5Xo4bvxaDli', NULL, '2023-10-30 23:38:40', '2023-10-30 23:38:40', NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `weq`
--

DROP TABLE IF EXISTS `weq`;
CREATE TABLE IF NOT EXISTS `weq` (
  `id` bigint UNSIGNED NOT NULL DEFAULT '0',
  `ID-u` bigint NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `weq`
--

INSERT INTO `weq` (`id`, `ID-u`) VALUES
(1, 1);

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `Orders_ibfk_1` FOREIGN KEY (`idU`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `Orders_ibfk_2` FOREIGN KEY (`idP`) REFERENCES `catalogs` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
