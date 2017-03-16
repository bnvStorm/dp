-- phpMyAdmin SQL Dump
-- version 4.4.15.5
-- http://www.phpmyadmin.net
--
-- Хост: localhost
-- Время создания: Июн 26 2016 г., 19:02
-- Версия сервера: 5.6.30
-- Версия PHP: 5.5.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `surf`
--

-- --------------------------------------------------------

--
-- Структура таблицы `client`
--

CREATE TABLE IF NOT EXISTS `client` (
  `FIO` text COLLATE utf8_unicode_ci NOT NULL,
  `IIN` text COLLATE utf8_unicode_ci NOT NULL,
  `TN` text COLLATE utf8_unicode_ci NOT NULL,
  `ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `client`
--

INSERT INTO `client` (`FIO`, `IIN`, `TN`, `ID`) VALUES
('2', '2', '2', 3),
('Birukov Nikita Vladimirovich', '160119962016', '87771891558', 8);

-- --------------------------------------------------------

--
-- Структура таблицы `houses`
--

CREATE TABLE IF NOT EXISTS `houses` (
  `N_HOUSE` int(11) NOT NULL,
  `VMEST` int(11) NOT NULL,
  `PRICE` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `houses`
--

INSERT INTO `houses` (`N_HOUSE`, `VMEST`, `PRICE`) VALUES
(1, 3, 3000),
(2, 5, 5000),
(3, 8, 7000),
(4, 4, 8000),
(5, 5, 18000),
(6, 2, 3000),
(7, 2, 3000),
(8, 4, 5000);

-- --------------------------------------------------------

--
-- Структура таблицы `orders`
--

CREATE TABLE IF NOT EXISTS `orders` (
  `PRICE` int(11) NOT NULL,
  `DN` date NOT NULL,
  `DK` date NOT NULL,
  `IIN` text COLLATE utf8_unicode_ci NOT NULL,
  `ID` int(11) NOT NULL,
  `ORDERS_ID` int(11) NOT NULL,
  `N_HOUSE` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `orders`
--

INSERT INTO `orders` (`PRICE`, `DN`, `DK`, `IIN`, `ID`, `ORDERS_ID`, `N_HOUSE`) VALUES
(5000, '2016-06-01', '2016-06-30', '2', 3, 27, 2),
(3000, '2016-06-01', '2016-06-23', '1', 8, 76, 1);

-- --------------------------------------------------------

--
-- Структура таблицы `usertbl`
--

CREATE TABLE IF NOT EXISTS `usertbl` (
  `ID` int(11) NOT NULL,
  `full_name` varchar(32) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `email` varchar(32) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `username` varchar(20) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `password` varchar(32) COLLATE utf8_unicode_ci NOT NULL DEFAULT ''
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `usertbl`
--

INSERT INTO `usertbl` (`ID`, `full_name`, `email`, `username`, `password`) VALUES
(5, 'NVBirukov', 'birukov@cool.ru', 'Biukov', '111'),
(3, 'Nikita', 'vagabuntpro@live.com', 'Zecu', '111'),
(6, 'A', 'ABC@ABC.COM', 'annanikita', '111'),
(7, 'ccc', 'ccc@f.ro', 'anna', '111'),
(8, 'Apple Grapple', 'applegrapple@icloud.com', 'iApple', '111');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`ID`);

--
-- Индексы таблицы `houses`
--
ALTER TABLE `houses`
  ADD PRIMARY KEY (`N_HOUSE`);

--
-- Индексы таблицы `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`ORDERS_ID`);

--
-- Индексы таблицы `usertbl`
--
ALTER TABLE `usertbl`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `usertbl`
--
ALTER TABLE `usertbl`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
