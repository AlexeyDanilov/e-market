-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Мар 19 2019 г., 09:39
-- Версия сервера: 5.6.38
-- Версия PHP: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `e-market`
--

-- --------------------------------------------------------

--
-- Структура таблицы `cart-story`
--

CREATE TABLE `cart-story` (
  `id_user` int(100) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `product_photo` varchar(500) NOT NULL,
  `quantity` int(100) NOT NULL,
  `price` int(100) NOT NULL,
  `total_price` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `cart-story`
--

INSERT INTO `cart-story` (`id_user`, `product_name`, `product_photo`, `quantity`, `price`, `total_price`) VALUES
(2, 'Laptop 1', '/views/img/product/images/laptops/1.jpg', 2, 500, 1000),
(2, 'Laptop 2', '/views/img/product/images/laptops/2.jpg', 1, 650, 650),
(5, 'Camera 1', '/views/img/product/images/cameras/1.jpg', 1, 250, 250),
(5, 'Camera 2', '/views/img/product/images/cameras/2.jpg', 1, 350, 350),
(5, 'Camera 3', '/views/img/product/images/cameras/3.jpg', 1, 300, 300),
(5, 'Accessory 4', '/views/img/product/images/accessories/4.jpg', 2, 45, 90),
(3, 'TV 3', '/views/img/product/images/tvs/3.jpg', 1, 600, 600),
(3, 'TV 4', '/views/img/product/images/tvs/4.jpg', 1, 500, 500),
(5, 'Phone 2', '/views/img/product/images/mobile/2.jpg', 1, 400, 400);

-- --------------------------------------------------------

--
-- Структура таблицы `Product-category`
--

CREATE TABLE `Product-category` (
  `id_category` int(100) NOT NULL,
  `name_category` varchar(100) NOT NULL,
  `show_category` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `Product-category`
--

INSERT INTO `Product-category` (`id_category`, `name_category`, `show_category`) VALUES
(1, 'Laptops', 1),
(2, 'Computers', 1),
(3, 'Mobile devices', 1),
(4, 'TVs', 1),
(5, 'Cameras', 1),
(6, 'Accessories', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `products`
--

CREATE TABLE `products` (
  `id_product` int(100) NOT NULL,
  `id_category` int(100) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `product_photo` varchar(100) NOT NULL,
  `second_photo` varchar(100) NOT NULL,
  `price` int(100) NOT NULL,
  `old_price` int(100) NOT NULL,
  `publication` int(100) NOT NULL,
  `is_new` int(100) NOT NULL,
  `discount` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `products`
--

INSERT INTO `products` (`id_product`, `id_category`, `product_name`, `product_photo`, `second_photo`, `price`, `old_price`, `publication`, `is_new`, `discount`) VALUES
(1, 1, 'Laptop 1', '/views/img/product/images/laptops/1.jpg', '/views/img/product/images/laptops/1-1.jpg', 500, 600, 1, 1, 15),
(2, 1, 'Laptop 2', '/views/img/product/images/laptops/2.jpg', '/views/img/product/images/laptops/2-2.jpg', 650, 700, 1, 0, 0),
(3, 1, 'Laptop 3', '/views/img/product/images/laptops/3.jpg', '/views/img/product/images/laptops/3-3.jpg', 750, 0, 1, 0, 10),
(4, 1, 'Laptop 4', '/views/img/product/images/laptops/4.jpg', '/views/img/product/images/laptops/4-4.jpg', 400, 0, 1, 1, 0),
(5, 1, 'Laptop 5', '/views/img/product/images/laptops/5.jpg', '/views/img/product/images/laptops/5-5.jpg', 780, 900, 1, 0, 0),
(6, 2, 'Computer 1', '/views/img/product/images/computers/1.jpg', '/views/img/product/images/computers/1-1.jpg', 800, 1100, 1, 0, 0),
(7, 2, 'Computer 2', '/views/img/product/images/computers/2.jpg', '/views/img/product/images/computers/2-2.jpg', 750, 0, 1, 1, 10),
(8, 2, 'Computer 3', '/views/img/product/images/computers/3.jpg', '/views/img/product/images/computers/3-3.jpg', 500, 0, 1, 1, 0),
(9, 2, 'Computer 4', '/views/img/product/images/computers/4.jpg', '/views/img/product/images/computers/4-4.jpg', 650, 700, 1, 0, 15),
(10, 2, 'Computer 5', '/views/img/product/images/computers/5.jpg', '/views/img/product/images/computers/5-5.jpg', 1000, 0, 1, 1, 10),
(11, 3, 'Phone 1', '/views/img/product/images/mobile/1.jpg', '/views/img/product/images/mobile/1-1.jpg', 250, 300, 1, 1, 5),
(12, 3, 'Phone 2', '/views/img/product/images/mobile/2.jpg', '/views/img/product/images/mobile/2-2.jpg', 400, 0, 1, 0, 0),
(13, 3, 'Phone 3', '/views/img/product/images/mobile/3.jpg', '/views/img/product/images/mobile/3-3.jpg', 350, 450, 1, 0, 15),
(14, 3, 'Phone 4', '/views/img/product/images/mobile/4.jpg', '/views/img/product/images/mobile/4-4.jpg', 300, 0, 1, 1, 0),
(15, 4, 'TV 1', '/views/img/product/images/tvs/1.jpg', '0', 700, 0, 1, 0, 0),
(16, 4, 'TV 2', '/views/img/product/images/tvs/2.jpg', '0', 550, 650, 1, 0, 20),
(17, 4, 'TV 3', '/views/img/product/images/tvs/3.jpg', '0', 600, 0, 1, 1, 0),
(18, 4, 'TV 4', '/views/img/product/images/tvs/4.jpg', '0', 500, 0, 1, 1, 15),
(19, 4, 'TV 5', '/views/img/product/images/tvs/5.jpg', '0', 800, 900, 1, 0, 5),
(20, 5, 'Camera 1', '/views/img/product/images/cameras/1.jpg', '/views/img/product/images/cameras/1-1.jpg', 250, 320, 1, 1, 0),
(21, 5, 'Camera 2', '/views/img/product/images/cameras/2.jpg', '/views/img/product/images/cameras/2-2.jpg', 350, 400, 1, 0, 0),
(22, 5, 'Camera 3', '/views/img/product/images/cameras/3.jpg', '/views/img/product/images/cameras/3-3.jpg', 300, 0, 1, 0, 0),
(23, 6, 'Accessory 1', '/views/img/product/images/accessories/1.jpg', '/views/img/product/images/accessories/1-1.jpg', 50, 75, 1, 0, 5),
(24, 6, 'Accessory 2', '/views/img/product/images/accessories/2.jpg', '/views/img/product/images/accessories/2-2.jpg', 50, 0, 1, 1, 0),
(25, 6, 'Accessory 3', '/views/img/product/images/accessories/3.jpg', '/views/img/product/images/accessories/3-3.jpg', 65, 70, 1, 0, 0),
(26, 6, 'Accessory 4', '/views/img/product/images/accessories/4.jpg', '/views/img/product/images/accessories/4-4.jpg', 45, 0, 1, 1, 10);

-- --------------------------------------------------------

--
-- Структура таблицы `user`
--

CREATE TABLE `user` (
  `user_id` int(100) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `user_lastname` varchar(50) NOT NULL,
  `user_email` varchar(50) NOT NULL,
  `user_password` varchar(50) NOT NULL,
  `newsletter` int(11) NOT NULL,
  `address` text NOT NULL,
  `city` varchar(70) NOT NULL,
  `postcode` varchar(70) NOT NULL,
  `country` varchar(100) NOT NULL,
  `region` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `user`
--

INSERT INTO `user` (`user_id`, `user_name`, `user_lastname`, `user_email`, `user_password`, `newsletter`, `address`, `city`, `postcode`, `country`, `region`) VALUES
(2, 'Alexey', 'Danilov', 'al.s.danilov@gmail.com', 'admin', 1, '', '', '', '', ''),
(3, 'Alvina', 'Ashurbekova', 'tabazik@mail.ru', '12345', 0, '', '', '', '', ''),
(4, 'Said', 'Danilov', 'skvbwi@cns.fsn', 'qwerty', 0, '', '', '', '', ''),
(5, 'Abdurashid', 'Danilov', 'sbvskbvk@vssk.vbs', '54321', 1, '', '', '', '', ''),
(8, 'Ivan', 'Avanov', 'jvdslvsl@hdfsl.dk', 'qw', 0, '', '', '', '', ''),
(10, 'Magomed', 'Aliev', 'm.aliev@email.ru', 'qwerty', 0, 'Russia. Dagestan, Mahachkala', 'Mahachkala', '00000', '4', '2'),
(11, 'Shamil', 'Ibragimov', 's.ibragimov@email.com', 'qwerty', 0, 'USA, Los-Angeles', 'Los-Angeles', '8888', 'United States', 'East Ayrshire'),
(12, 'Artur', 'Emitbekov', 'emir@email.com', '12345', 0, 'USA, Los-Angeles', 'Los-Angeles', '44444', 'United States', 'East Ayrshire');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `Product-category`
--
ALTER TABLE `Product-category`
  ADD PRIMARY KEY (`id_category`);

--
-- Индексы таблицы `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id_product`);

--
-- Индексы таблицы `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `Product-category`
--
ALTER TABLE `Product-category`
  MODIFY `id_category` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `products`
--
ALTER TABLE `products`
  MODIFY `id_product` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT для таблицы `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
