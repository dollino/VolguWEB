-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Окт 13 2021 г., 22:34
-- Версия сервера: 5.7.33
-- Версия PHP: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `lb2`
--

-- --------------------------------------------------------

--
-- Структура таблицы `orders`
--

CREATE TABLE `orders` (
  `name_client` varchar(80) NOT NULL,
  `id_retail_outlet` int(11) NOT NULL,
  `price` float NOT NULL,
  `image` varchar(80) NOT NULL,
  `order_list` varchar(150) NOT NULL,
  `id_order` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `orders`
--

INSERT INTO `orders` (`name_client`, `id_retail_outlet`, `price`, `image`, `order_list`, `id_order`) VALUES
('Зубенко М.И', 4, 1579.59, '1.jpg', 'Сет из 3 роллов.', 1),
(' Липатов А.Е.', 4, 856.48, '2.jpg', 'Сет из 5 видов роллов. Запеченые, Калифорния, Блинные, с семгой, Эвитон', 2),
(' Гоцмальн Д.Ж.', 2, 946.15, '3.jpg', 'Роллы с семгой, роллы с крабовыми палочками, роллы с грибами, роллы с огурцом', 3),
(' Херон Г.К.', 1, 599.99, '4.jpg', 'Сет \"Морепродукты\"', 4),
(' Жигуль О.Н.', 1, 649.99, '5.jpg', 'Сет \"Животный мир\"', 5),
(' Онегин Е.В.', 5, 350, '6.jpg', 'Ролл с сумгой и огурцом', 6),
(' Дубровский О.У.', 3, 450, '7.jpg', 'Сет обычных роллов с запеченым роллом', 7),
(' Ленский Е.П.', 5, 350, '8.jpg', 'Ролл с семгой и икрой', 8),
(' Полковников Х.Х.', 2, 799.99, '9.jpg', 'Роллы с королевской креветкой, набор обычных роллов.', 9),
(' Борщ Н.С.', 3, 625, '10.jpg', 'Сет \"огонь\"', 10),
(' Борщова Ю.А.', 1, 1199.99, '11.jpg', 'Большой сет для компании', 11),
(' Мартыненко К.С.', 4, 875, '12.jpg', 'Сет \"Филадельфия\"', 12),
(' Куликов Л.Е.', 2, 264.99, '13.jpg', 'Филадельфия', 13),
(' Лерой М.Н.', 3, 324.99, '14.jpg', 'Ролл из рыбы', 14),
(' Коваленко Д.Э.', 5, 125, '15.jpg', 'Ролл с семгой', 15),
(' Зернов В.Г.', 1, 754.99, '16.jpg', 'Сет Волжский', 16),
(' Широков Э.Ж.', 5, 469.99, '17.jpg', 'Ролл с семгой и икрой', 17),
(' Энгельс Р.К.', 3, 0.99, '18.jpg', 'Набор на 2', 18),
(' Гнекс Э.Ю.', 4, 250, '19.jpg', 'Ролл \"Цезарь\"', 19),
(' Степкина С.А.', 1, 500, '20.jpg', 'Набор Рыбный', 20);

-- --------------------------------------------------------

--
-- Структура таблицы `retail_outlet`
--

CREATE TABLE `retail_outlet` (
  `id` int(11) NOT NULL,
  `name_retail_outlet` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `retail_outlet`
--

INSERT INTO `retail_outlet` (`id`, `name_retail_outlet`) VALUES
(1, 'Бамбук'),
(2, 'MyBox'),
(3, 'Смакон'),
(4, 'ПапаПанда'),
(5, 'Зачет');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id_order`),
  ADD KEY `id_retail_outlet` (`id_retail_outlet`);

--
-- Индексы таблицы `retail_outlet`
--
ALTER TABLE `retail_outlet`
  ADD PRIMARY KEY (`id`);

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`id_retail_outlet`) REFERENCES `retail_outlet` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
