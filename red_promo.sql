-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Сен 10 2021 г., 15:36
-- Версия сервера: 5.7.33
-- Версия PHP: 7.4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `red_promo`
--

-- --------------------------------------------------------

--
-- Структура таблицы `articles`
--

CREATE TABLE `articles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tag` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `favorites` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `articles`
--

INSERT INTO `articles` (`id`, `name`, `title`, `text`, `tag`, `image`, `favorites`, `created_at`, `updated_at`) VALUES
(3, 'Новости Москвы', 'Article title 1', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium ad, amet deserunt dignissimos distinctio doloribus dolorum ducimus eos facere, fuga ipsam nemo nihil', 'Moscow', 'article.jpg', 1, '2021-09-08 17:47:55', '2021-09-08 17:47:55'),
(4, 'Новости Москвы', 'Article title 2', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium ad, amet deserunt dignissimos distinctio doloribus dolorum ducimus eos facere, fuga ipsam nemo nihil', 'Moscow', 'article.jpg', 0, '2021-09-08 17:47:55', '2021-09-08 17:47:55'),
(5, 'Новости Санкт Петербурга', 'Article title 3', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium ad, amet deserunt dignissimos distinctio doloribus dolorum ducimus eos facere, fuga ipsam nemo nihil', 'Piter', 'nature.jpg', 0, '2021-09-08 17:51:15', '2021-09-08 17:51:15'),
(6, 'Новости Санкт Петербурга', 'Article title 4', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium ad, amet deserunt dignissimos distinctio doloribus dolorum ducimus eos facere, fuga ipsam nemo nihil', 'Piter', 'nature.jpg', 1, '2021-09-08 17:51:15', '2021-09-08 17:51:15'),
(7, 'Новости Санкт Петербурга', 'Article title 5', 'test lorem', 'Piter', 'nature.jpg', 0, '2021-09-07 17:55:55', '2021-09-07 17:55:55'),
(8, 'Новости Санкт Петербурга', 'Article title 6', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium ad, amet deserunt dignissimos distinctio doloribus dolorum ducimus eos facere, fuga ipsam nemo nihil', 'Piter', 'nature.jpg', 1, '2021-09-06 20:21:08', '2021-09-06 20:21:08'),
(9, 'Новости Москвы', 'Article title 7', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium ad, amet deserunt dignissimos distinctio doloribus dolorum ducimus eos facere, fuga ipsam nemo nihil', 'Moscow', 'article.jpg', 1, '2021-09-06 22:05:54', '2021-09-06 22:05:54'),
(10, 'Новости Москвы', 'Article title 8', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium ad, amet deserunt dignissimos distinctio doloribus dolorum ducimus eos facere, fuga ipsam nemo nihil', 'Moscow', 'article.jpg', 0, '2021-09-06 22:05:54', '2021-09-06 22:05:54');

-- --------------------------------------------------------

--
-- Структура таблицы `article_city`
--

CREATE TABLE `article_city` (
  `article_id` bigint(20) UNSIGNED NOT NULL,
  `city_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `article_city`
--

INSERT INTO `article_city` (`article_id`, `city_id`) VALUES
(3, 1),
(4, 1),
(9, 1),
(10, 1),
(5, 2),
(7, 2),
(8, 2),
(6, 2);

-- --------------------------------------------------------

--
-- Структура таблицы `article_user`
--

CREATE TABLE `article_user` (
  `article_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `article_user`
--

INSERT INTO `article_user` (`article_id`, `user_id`) VALUES
(3, 1),
(5, 1),
(6, 1),
(5, 2),
(9, 2),
(3, 2);

-- --------------------------------------------------------

--
-- Структура таблицы `cities`
--

CREATE TABLE `cities` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `cities`
--

INSERT INTO `cities` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Moscow', '2021-09-07 21:35:16', '2021-09-07 21:35:16'),
(2, 'Saint Petersburg', '2021-09-07 21:35:16', '2021-09-07 21:35:16');

-- --------------------------------------------------------

--
-- Структура таблицы `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2021_09_08_175636_create_articles_table', 1),
(8, '2021_09_09_205119_create_cities_table', 2),
(10, '2021_09_09_205746_create_articles_cities_table', 3),
(11, '2021_09_10_114254_article_user_table', 4);

-- --------------------------------------------------------

--
-- Структура таблицы `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'test', 'test@mail.com', NULL, '$2y$10$FLV.HVXUXOPX0W7rtYaP5ugWsNplq4p2Nw6p8LsrExZY8xN4/Uf1y', NULL, '2021-09-10 08:03:19', '2021-09-10 08:03:19'),
(2, 'Руслан', 'ruslan@mail.com', NULL, '$2y$10$vEb8IsTJNoF96rHvXJi0eeEoNz2zEe02vr8YiQ43HzNFX1Qeh9K/C', NULL, '2021-09-10 09:30:30', '2021-09-10 09:30:30');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `article_city`
--
ALTER TABLE `article_city`
  ADD KEY `articles_cities_articles_id_foreign` (`article_id`),
  ADD KEY `articles_cities_cities_id_foreign` (`city_id`);

--
-- Индексы таблицы `article_user`
--
ALTER TABLE `article_user`
  ADD KEY `article_user_article_id_foreign` (`article_id`),
  ADD KEY `article_user_user_id_foreign` (`user_id`);

--
-- Индексы таблицы `cities`
--
ALTER TABLE `cities`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Индексы таблицы `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Индексы таблицы `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `articles`
--
ALTER TABLE `articles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT для таблицы `cities`
--
ALTER TABLE `cities`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT для таблицы `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `article_city`
--
ALTER TABLE `article_city`
  ADD CONSTRAINT `articles_cities_articles_id_foreign` FOREIGN KEY (`article_id`) REFERENCES `articles` (`id`),
  ADD CONSTRAINT `articles_cities_cities_id_foreign` FOREIGN KEY (`city_id`) REFERENCES `cities` (`id`);

--
-- Ограничения внешнего ключа таблицы `article_user`
--
ALTER TABLE `article_user`
  ADD CONSTRAINT `article_user_article_id_foreign` FOREIGN KEY (`article_id`) REFERENCES `articles` (`id`),
  ADD CONSTRAINT `article_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
