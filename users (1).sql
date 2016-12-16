-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Час створення: Гру 16 2016 р., 09:42
-- Версія сервера: 10.0.28-MariaDB-1.cba
-- Версія PHP: 7.0.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База даних: `anniebot`
--

-- --------------------------------------------------------

--
-- Структура таблиці `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `login` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `group_au` int(11) NOT NULL,
  `date_creation` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Дамп даних таблиці `users`
--

INSERT INTO `users` (`user_id`, `login`, `password`, `first_name`, `last_name`, `group_au`, `date_creation`) VALUES
(1, 'zac', 'ljk', 'edward', 'wu', 1, '2016-11-19 00:00:00'),
(2, 'Ewe', '123', 'Eve', 'Lug', 2, '2016-11-18 00:00:00'),
(5, 'login', '123', 'loo', 'lewis', 2, '2016-12-07 00:00:00'),
(6, 'Annie', '1234', 'An', 'Bot', 2, '2016-12-08 00:00:00'),
(11, 'Hel', '1234567', 'An', 'Zerr', 2, '2016-12-16 00:00:00'),
(17, 'Hades', '123', 'Qy', 'We', 2, '2016-12-15 22:35:32'),
(38, 'dorosha', '111', 'Ol', 'Dor', 2, '2016-12-15 23:17:31');

--
-- Індекси збережених таблиць
--

--
-- Індекси таблиці `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `login` (`login`);

--
-- AUTO_INCREMENT для збережених таблиць
--

--
-- AUTO_INCREMENT для таблиці `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
