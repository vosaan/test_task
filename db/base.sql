-- phpMyAdmin SQL Dump
-- version 4.4.12
-- http://www.phpmyadmin.net
--
-- Хост: localhost
-- Время создания: Окт 12 2015 г., 14:03
-- Версия сервера: 5.6.25
-- Версия PHP: 5.6.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `base`
--

-- --------------------------------------------------------

--
-- Структура таблицы `feedbacks`
--

CREATE TABLE IF NOT EXISTS `feedbacks` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `datetime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `feedbacks`
--

INSERT INTO `feedbacks` (`id`, `userid`, `title`, `email`, `message`, `datetime`) VALUES
(17, 2, 'Firtst feed', 'admin@gmail.com', 'Feedback', '2015-10-10 15:59:19'),
(18, 9, 'ÐžÑ‚Ð»Ð¸Ñ‡Ð½Ñ‹Ð¹ ÑÐ°Ð¹Ñ‚!', 'little_badger@ukr.net', 'ÐšÐ°ÐºÐ¾Ð¹ Ñ…Ð¾Ñ€Ð¾ÑˆÐ¸Ð¹ ÑÐ°Ð¹Ñ‚! Ð¢ÐµÐ¿ÐµÑ€ÑŒ Ð¿Ð¾Ð³Ð¾Ð´Ñƒ Ñ‚Ð¾Ð»ÑŒÐºÐ¾ Ð½Ð° Ð½Ñ‘Ð¼ Ð±ÑƒÐ´Ñƒ ÑÐ¼Ð¾Ñ‚Ñ€ÐµÑ‚ÑŒ! Ð–Ð°Ð»ÑŒ, Ñ‡Ñ‚Ð¾ Ð³Ð¾Ñ€Ð¾ÑÐºÐ¾Ð¿Ð° Ð½ÐµÑ‚, Ð½Ð¾ Ð½Ð°Ð´ÐµÑŽÑÑŒ, Ñ‡Ñ‚Ð¾ Ð´Ð¾Ð±Ð°Ð²ÑÑ‚.', '2015-10-10 16:13:09');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL,
  `login` varchar(15) NOT NULL,
  `passw` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `login`, `passw`) VALUES
(2, 'admin', 'admin'),
(9, 'badger', '123456');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `feedbacks`
--
ALTER TABLE `feedbacks`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `feedbacks`
--
ALTER TABLE `feedbacks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
