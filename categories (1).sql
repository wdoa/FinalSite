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
-- Структура таблиці `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `url_img` varchar(300) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Дамп даних таблиці `categories`
--

INSERT INTO `categories` (`id`, `title`, `url_img`) VALUES
(1, 'Cats', 'http://hollyandhugo.com/blog/wp-content/uploads/2015/10/Cat-Care11.jpg'),
(2, 'Dogs', 'http://cdn2-www.dogtime.com/assets/uploads/2011/01/file_23244_what-is-the-appenzeller-sennenhunde-dog-300x189.jpg'),
(3, 'Raccoons', 'http://www.alertpestcontrol.com/images/2016/09/10/raccoons-006.jpg'),
(4, 'Foxes', 'http://static.guim.co.uk/sys-images/Guardian/About/General/2012/10/1/1349091325402/red-fox-009.jpg');

--
-- Індекси збережених таблиць
--

--
-- Індекси таблиці `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для збережених таблиць
--

--
-- AUTO_INCREMENT для таблиці `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
