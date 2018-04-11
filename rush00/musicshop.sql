-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Хост: localhost:3306
-- Время создания: Апр 08 2018 г., 12:46
-- Версия сервера: 5.7.21
-- Версия PHP: 7.1.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `musicshop`
--

-- --------------------------------------------------------

--
-- Структура таблицы `albom`
--

CREATE TABLE `albom` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `artist` varchar(100) NOT NULL,
  `price` float DEFAULT NULL,
  `img` varchar(255) NOT NULL,
  `user` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `albom`
--

INSERT INTO `albom` (`id`, `name`, `artist`, `price`, `img`, `user`) VALUES
(3, '', '50 Great ‘90s Hip-Hop Songs', 9.49, 'https://images-na.ssl-images-amazon.com/images/I/61Fwzx-K03L._SS500.jpg', ''),
(1, 'Back In Black', 'AC/DC', 9.99, 'https://images-na.ssl-images-amazon.com/images/I/31NpVIEtPGL._SS500.jpg', ''),
(1, 'Bon Jovi Greatest Hits', 'Bon Jovi', 10.49, 'https://images-na.ssl-images-amazon.com/images/I/51amCPAZafL._SS500.jpg', ''),
(2, 'Born This Way', 'Lady Gaga', 7.99, 'https://images-na.ssl-images-amazon.com/images/I/51yACnW-8PL._SS500.jpg', ''),
(1, 'For Those About to Rock', 'AC/DC', 9.99, 'https://images-na.ssl-images-amazon.com/images/I/51-ATRiWX7L._SS500.jpg', ''),
(1, 'Greatest Hits', 'Guns N Roses', 9.49, 'https://images-na.ssl-images-amazon.com/images/I/51tYrWO9tOL._SS500.jpg', ''),
(1, 'Highway to Hell', 'AC/DC', 9.99, 'https://images-na.ssl-images-amazon.com/images/I/61UVfrLJq2L._SS500.jpg', ''),
(3, 'Invasion of Privacy', 'Cardi B', 9.49, 'https://images-na.ssl-images-amazon.com/images/I/61-ec2OJGWL._SS500.jpg', ''),
(3, 'Kontra-Band', 'Stevie Stone, JL', 9.49, 'https://images-na.ssl-images-amazon.com/images/I/51WdvP6nvEL._SS500.jpg', ''),
(1, 'Nevermind (Super Deluxe Edition)', 'Nirvana', 30.49, 'https://images-na.ssl-images-amazon.com/images/I/51PX2OTgn9L._SS500.jpg', ''),
(2, 'One Of The Boys', 'Katy Perry', 9.49, 'https://images-na.ssl-images-amazon.com/images/I/61dY%2BvItevL._SS500.jpg', ''),
(2, 'Teenage Dream: The Complete Confection', 'Katy Perry', 12.49, 'https://images-na.ssl-images-amazon.com/images/I/51VNWoooz9L._SS500.jpg', '');

-- --------------------------------------------------------

--
-- Структура таблицы `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `artist` varchar(100) NOT NULL,
  `price` float NOT NULL,
  `img` varchar(255) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `order_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `music_genre`
--

CREATE TABLE `music_genre` (
  `id` int(5) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `music_genre`
--

INSERT INTO `music_genre` (`id`, `name`, `img`) VALUES
(1, 'Rock', 'https://i.pinimg.com/736x/eb/61/9f/eb619f58bce7b3998c297c5d850db0d0--skeleton-art-post-rock.jpg'),
(2, 'Pop', 'https://samira667.files.wordpress.com/2017/04/pop-music.jpg'),
(3, 'Hip_Hop', 'http://greenrobo.mobi/i2/42/4250480d3e3103ff2c7dd3d5690c959a/hip-hop-music-c.jpg');

-- --------------------------------------------------------

--
-- Структура таблицы `orders`
--

CREATE TABLE `orders` (
  `name` varchar(100) NOT NULL,
  `artist` varchar(100) NOT NULL,
  `price` float NOT NULL,
  `user` varchar(100) NOT NULL,
  `order_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `login` varchar(50) NOT NULL,
  `passwd` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`login`, `passwd`) VALUES
('fff', '05a9bf223fedf80a9d0da5f73f5c191a665bf4a0a4a3e608f2f9e7d5ff23959c'),
('gogog', '9f15d310c422448135eb3c0e8ed7c6097c124f59e9590edd9112e8f6f70e0dba'),
('huru', '8a255764318969e46613a93b84847750cec163f3dd820220c0110a81313274df'),
('toto', '31f7a65e315586ac198bd798b6629ce4903d0899476d5741a9f32e2e521b6a66');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `albom`
--
ALTER TABLE `albom`
  ADD PRIMARY KEY (`name`);

--
-- Индексы таблицы `cart`
--
ALTER TABLE `cart`
  ADD UNIQUE KEY `order_id` (`order_id`);

--
-- Индексы таблицы `music_genre`
--
ALTER TABLE `music_genre`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `orders`
--
ALTER TABLE `orders`
  ADD UNIQUE KEY `order_id` (`order_id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`login`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `cart`
--
ALTER TABLE `cart`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=96;

--
-- AUTO_INCREMENT для таблицы `music_genre`
--
ALTER TABLE `music_genre`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
