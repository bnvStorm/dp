-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Май 29 2017 г., 05:55
-- Версия сервера: 5.5.53
-- Версия PHP: 5.6.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `dProject`
--

-- --------------------------------------------------------

--
-- Структура таблицы `client`
--

CREATE TABLE `client` (
  `phone` int(11) NOT NULL,
  `fnp` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `number_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `houses`
--

CREATE TABLE `houses` (
  `img_source` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `house_id` int(11) NOT NULL,
  `number_house` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `capacity` int(11) NOT NULL,
  `category` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `houses`
--

INSERT INTO `houses` (`img_source`, `house_id`, `number_house`, `capacity`, `category`, `description`, `price`) VALUES
('images/houses/1.jpg', 38, '1А', 4, '1', ' yut  \r\n L31orem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam odit ea quae necessitatibus at vitae hic ipsa harum, neque nisi consequatur consequuntur, \r\nmagnam laboriosam consectetur fugiat quia. Qui, sunt, voluptatem.\r\n yut  \r\n L31orem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam odit ea quae necessitatibus at vitae hic ipsa harum, neque nisi consequatur consequuntur, \r\nmagnam laboriosam consectetur fugiat quia. Qui, sunt, voluptatem.\r\n yut  \r\n L31orem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam odit ea quae necessitatibus at vitae hic ipsa harum, neque nisi consequatur consequuntur, \r\nmagnam laboriosam consectetur fugiat quia. Qui, sunt, voluptatem.\r\n yut  \r\n L31orem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam odit ea quae necessitatibus at vitae hic ipsa harum, neque nisi consequatur consequuntur, \r\nmagnam laboriosam consectetur fugiat quia. Qui, sunt, voluptatem.\r\n yut  \r\n L31orem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam odit ea quae necessitatibus at vitae hic ipsa harum, neque nisi consequatur consequuntur, \r\nmagnam laboriosam consectetur fugiat quia. Qui, sunt, voluptatem.\r\n yut  \r\n L31orem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam odit ea quae necessitatibus at vitae hic ipsa harum, neque nisi consequatur consequuntur, \r\nmagnam laboriosam consectetur fugiat quia. Qui, sunt, voluptatem.\r\n yut  \r\n L31orem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam odit ea quae necessitatibus at vitae hic ipsa harum, neque nisi consequatur consequuntur, \r\nmagnam laboriosam consectetur fugiat quia. Qui, sunt, voluptatem.\r\n yut  \r\n L31orem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam odit ea quae necessitatibus at vitae hic ipsa harum, neque nisi consequatur consequuntur, \r\nmagnam laboriosam consectetur fugiat quia. Qui, sunt, voluptatem.', 4500),
('images/houses/2.jpg', 42, '2Б', 4, '1', '3', 5200),
('images/houses/3.jpg', 43, '3C', 4, '1', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Necessitatibus cumque iusto corrupti, doloremque assumenda. Voluptas, temporibus, eos explicabo molestiae cumque tempore nam ratione aspernatur ipsam ullam animi tempora omnis incidunt!\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit. Necessitatibus cumque iusto corrupti, doloremque assumenda. Voluptas, temporibus, eos explicabo molestiae cumque tempore nam ratione aspernatur ipsam ullam animi tempora omnis incidunt!\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit. Necessitatibus cumque iusto corrupti, doloremque assumenda. Voluptas, temporibus, eos explicabo molestiae cumque tempore nam ratione aspernatur ipsam ullam animi tempora omnis incidunt!\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit. Necessitatibus cumque iusto corrupti, doloremque assumenda. Voluptas, temporibus, eos explicabo molestiae cumque tempore nam ratione aspernatur ipsam ullam animi tempora omnis incidunt!\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit. Necessitatibus cumque iusto corrupti, doloremque assumenda. Voluptas, temporibus, eos explicabo molestiae cumque tempore nam ratione aspernatur ipsam ullam animi tempora omnis incidunt!\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit. Necessitatibus cumque iusto corrupti, doloremque assumenda. Voluptas, temporibus, eos explicabo molestiae cumque tempore nam ratione aspernatur ipsam ullam animi tempora omnis incidunt!', 7000),
('images/houses/4.jpg', 57, '4D', 8, '1', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus consequuntur eum commodi nulla enim facere ad accusantium? Recusandae qui sapiente quod, quidem blanditiis tenetur eum consequatur culpa, molestiae dolores natus!\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus consequuntur eum commodi nulla enim facere ad accusantium? Recusandae qui sapiente quod, quidem blanditiis tenetur eum consequatur culpa, molestiae dolores natus!\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus consequuntur eum commodi nulla enim facere ad accusantium? Recusandae qui sapiente quod, quidem blanditiis tenetur eum consequatur culpa, molestiae dolores natus!\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus consequuntur eum commodi nulla enim facere ad accusantium? Recusandae qui sapiente quod, quidem blanditiis tenetur eum consequatur culpa, molestiae dolores natus!', 10000),
('images/houses/title/11281b.jpg', 58, '5E', 6, '2', 'Домик № 5  категории «элитный», построен в 2015  году. Расположен в начале  базы отдыха, в тихом и спокойном уголке.\r\n\r\nДомик имеет просторную веранду, на которой расположен обеденный стол и лавочки, а также раковина для мытья посуды. Большинство отдыхающих ценят домики с большой верандой,  так как завтракать, обедать и ужинать на свежем воздухе, под пение птиц и ароматы леса приятней вдвойне.\r\n\r\nВнутри дома имеется 2 комнаты, выполненные в деревянном интерьере: спальня и кухня, а также душевая с горячей и холодной водой.  В спальной комнате расположены 2-х спальная и односпальная кровати, тумбочки (комод), спутниковое ТВ. На кухне имеется всё необходимое для приготовления и приема пищи: вместительный современный холодильник,  микроволновая печь, электрочайник, электрическая плита с духовым шкафом, посуда на 3 персоны, необходимые кухонные принадлежности и мебель.', 8900),
('images/houses/title/198a723de46bd2bcc1cfcd56f71666f2.jpg', 59, '6', 8, '2', 'Домик 76/1 – деревянный, 2-х этажный, с просторной верандой, на которой большинство отдыхающих устраивают застолья, ведь для этого имеется вместительный стол и деревянные лавочки. И на свежем воздехе всегда гораздо приятней проводить свои обеды и ужины. Кроме того, на веранде имеется раковина с водой. Вместимость домика 6 человек.  На первом этаже расположена кухня, гостиная — спальня и душ с холодной и горячей водой.  В гостиной располагается 2 односпальных кровати и ТВ со спутниковым телевидением.  На втором этаже — две спальных комнаты: в одной из них 2-х спальная кровать и 2 односпальных кровати во  второй спальне.\r\n\r\nНа кухне для удобства хозяйки есть всё необходимое для приготовления пищи: микроволновая печь, плита и холодильник, мебель, посуда на 6 персон. Если Вы отдыхаете с детьми или предпочитаете тихий и спокойный уголок, то этот вариант Вам однозначно подойдет.', 11500),
('images/houses/title/4.jpg', 60, '7K', 4, '1', 'Домик №7K – стандартный, выполненный из ДСП, без веранды. Вместимость домика 2 человека. Домик является смежным, т.е. на 2 хозяина, имеет отдельный вход. В домике есть 2 комнаты — кухня и спальня ,в которых есть все необходимое для отдыха: мебель, посуда, плита, холодильник,  постельное бельё приобретается в аренду за дополнительную плату.  Домик располагается не далеко от воды, на горе. С места расположения домика открывается живописный вид на залив, а если прогуляться выше, то вы попадете в лес, полный грибов.', 7000),
('images/houses/title/5.jpg', 61, '8', 6, '2', 'Домик № 8 категории «элитный», построен в 2014 году. Расположен в начале базы отдыха, в тихом и спокойном уголке, в окружении сосен.  Домик находится у воды, в 2-3 минутах ходьбы от центрального пляжа. У домика имеется возможность парковки  автомобиля.\r\n\r\n\r\nДомик имеет просторную веранду, на которой расположен обеденный стол и лавочки, а также раковина для мытья посуды. Большинство отдыхающих ценят домики с большой верандой,  так как завтракать, обедать и ужинать на свежем воздухе, под пение птиц и ароматы леса приятней вдвойне.\r\n\r\nВнутри дома имеется 2 комнаты, выполненные в деревянном интерьере: спальня и кухня, а также душевая с горячей и холодной водой.  В спальной комнате расположены 2-х спальная и односпальная кровати, тумбочки, спутниковое ТВ. На кухне имеется всё необходимое для приготовления и приема пищи: вместительный современный холодильник,  микроволновая печь, электрочайник, электрическая плита с духовым шкафом, посуда на 3 персоны, необходимые кухонные принадлежност', 15000);

-- --------------------------------------------------------

--
-- Структура таблицы `images`
--

CREATE TABLE `images` (
  `house_id` int(11) NOT NULL,
  `source1` text NOT NULL,
  `source2` text NOT NULL,
  `source3` text NOT NULL,
  `source4` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `images`
--

INSERT INTO `images` (`house_id`, `source1`, `source2`, `source3`, `source4`) VALUES
(38, 'images/houses/_2_2.jpg', 'images/houses/1.jpg', 'images/houses/2.jpg', 'images/houses/3.jpg'),
(42, 'images/houses/1.jpg', 'images/houses/2.jpg', 'images/houses/3.jpg', 'images/houses/4.jpg'),
(43, 'images/houses/1.jpg', 'images/houses/2.jpg', 'images/houses/3.jpg', 'images/houses/4.jpg'),
(44, 'images/houses/1.jpg', 'images/houses/', 'images/houses/', 'images/houses/'),
(45, 'images/houses/', 'images/houses/', 'images/houses/', 'images/houses/4.jpg'),
(57, 'images/houses/1.jpg', 'images/houses/2.jpg', 'images/houses/3.jpg', 'images/houses/4.jpg');

-- --------------------------------------------------------

--
-- Структура таблицы `orders`
--

CREATE TABLE `orders` (
  `id_orders` int(11) NOT NULL,
  `number_house` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `house_id` int(11) NOT NULL,
  `date_rent` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `season` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `phone` int(11) NOT NULL,
  `fnp` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `additionally` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `orders`
--

INSERT INTO `orders` (`id_orders`, `number_house`, `house_id`, `date_rent`, `season`, `price`, `phone`, `fnp`, `additionally`) VALUES
(1, '4D', 57, '23.05.17', 1, 100000, 123, '123', '123'),
(2, '7K', 60, '24.05.17', 7, 280000, 12345678, 'Иванова Иоанна Ивановна', 'Пример текста');

-- --------------------------------------------------------

--
-- Структура таблицы `orders_accepted`
--

CREATE TABLE `orders_accepted` (
  `id_orders` int(11) NOT NULL,
  `number_house` varchar(15) NOT NULL,
  `house_id` int(111) NOT NULL,
  `date_rent` text NOT NULL,
  `season` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `phone` int(11) NOT NULL,
  `fnp` text NOT NULL,
  `additionally` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

--
-- Дамп данных таблицы `orders_accepted`
--

INSERT INTO `orders_accepted` (`id_orders`, `number_house`, `house_id`, `date_rent`, `season`, `price`, `phone`, `fnp`, `additionally`) VALUES
(23, '1А', 38, '1', 1, 45000, 123, '123', '123'),
(24, '2Б', 42, '05.17.17', 3, 104000, 123123, '123123', '12312'),
(34, '1А', 38, '19.05.17', 1, 45000, 213, 'Galaxy', ''),
(35, '2Б', 42, '20.05.17', 2, 62400, 321, 'Porchy', ''),
(37, '1А', 38, '20.05.17', 2, 54000, 323456546, 'Пуеещ', '');

-- --------------------------------------------------------

--
-- Структура таблицы `personal`
--

CREATE TABLE `personal` (
  `id` int(11) NOT NULL,
  `fnp` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `personal`
--

INSERT INTO `personal` (`id`, `fnp`, `email`, `username`, `password`) VALUES
(1, 'Admin', 'master@admin.com', 'admin', '12345');

-- --------------------------------------------------------

--
-- Структура таблицы `season`
--

CREATE TABLE `season` (
  `season_id` int(11) NOT NULL,
  `season_name` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_begin` date NOT NULL,
  `date_end` date NOT NULL,
  `percent` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `season`
--

INSERT INTO `season` (`season_id`, `season_name`, `date_begin`, `date_end`, `percent`) VALUES
(1, '(Заезд: 1.06—11.06)', '2017-06-01', '2017-06-11', 10),
(2, '(Заезд: 21.06—21.06)', '2017-06-11', '2017-06-21', 12),
(3, '(Заезд: 21.06—1.07)', '2017-06-21', '2017-07-01', 20),
(4, '(Заезд: 1.07—11.07)', '2017-07-01', '2017-07-11', 25),
(5, '(Заезд: 11.07—21.07)', '2017-07-11', '2017-07-21', 30),
(6, '(Заезд: 21.07—31.07)', '2017-07-21', '2017-07-31', 35),
(7, '(Заезд: 1.08—11.08)', '2017-08-01', '2017-08-11', 40),
(8, '(Заезд: 11.08—21.08)', '2017-08-11', '2017-08-21', 35),
(9, '(Заезд: 21.08—31.08)', '2017-08-21', '2017-08-31', 20);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`number_id`);

--
-- Индексы таблицы `houses`
--
ALTER TABLE `houses`
  ADD PRIMARY KEY (`house_id`);

--
-- Индексы таблицы `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`house_id`);

--
-- Индексы таблицы `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id_orders`);

--
-- Индексы таблицы `orders_accepted`
--
ALTER TABLE `orders_accepted`
  ADD PRIMARY KEY (`id_orders`);

--
-- Индексы таблицы `season`
--
ALTER TABLE `season`
  ADD PRIMARY KEY (`season_id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `houses`
--
ALTER TABLE `houses`
  MODIFY `house_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;
--
-- AUTO_INCREMENT для таблицы `orders`
--
ALTER TABLE `orders`
  MODIFY `id_orders` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT для таблицы `orders_accepted`
--
ALTER TABLE `orders_accepted`
  MODIFY `id_orders` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
