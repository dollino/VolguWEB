-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Хост: localhost
-- Время создания: Окт 05 2021 г., 11:34
-- Версия сервера: 10.4.19-MariaDB
-- Версия PHP: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `Transformators`
--

-- --------------------------------------------------------

--
-- Структура таблицы `Products`
--

CREATE TABLE `Products` (
  `id` int(11) UNSIGNED NOT NULL,
  `img` varchar(45) NOT NULL DEFAULT 'no_img.png',
  `name` varchar(45) NOT NULL,
  `id_provider` int(10) UNSIGNED NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  `cost` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `Products`
--

INSERT INTO `Products` (`id`, `img`, `name`, `id_provider`, `description`, `cost`) VALUES
(1, '1транс.jpg.webp', ' Phaseo Optimum ABL6 230-400 В 1x230 В 160 ВA', 1, 'Решения Phaseo становятся еще более компактными и простыми,предлагая 3 трансформатора для каждой среды.', 3610),
(2, '2транс.jpg.webp', 'Трансформатор понижающий NDK-50VA 230/24', 3, 'Понижающие трансформаторы серий NDK предназначены для питания цепей управления и сигнализации оборудования, а также освещения в помещения повышенной опасности.', 1489),
(3, '3транс.png.webp', 'Трансформатор ТСЗЛ 1000-6/0,4 У/Ун-0', 5, 'Сухие, литые, высоковольтные трансформаторы типа ТСЛ, ТСЗЛ, ТС, ТСЗ, максимальная мощности от 16 кВА до 2500 кВА.', 770),
(4, '4транс.jpg.webp', 'Трансформатор ТСЛ 100-10/0,4 Д/Ун-11', 2, NULL, 270),
(5, '5транс.jpg.webp', 'Трансформатор ТМГ-100-10/0,4 Д/Ун-11', 1, NULL, 95000),
(6, '6транс.jpg.webp', 'Трансформатор ТС-25-10/0,69 Ун/Д-11', 4, 'Трансформаторы соответствуют ГОСТ Р 52719-2007 и другим стандартам качества, предприятие имеет аттестованную электролабораторию, что подтверждено сертификатами и свидетельствами.\r\n', 5100),
(7, '7транс.jpg.webp', 'Трансформатор ТМГ-160-10.5/0,4 У/Zн-11', 4, 'В трансформаторы серии ТМГ заложены овальные конструкции обмоток в соответствии с со - временной идеологией проектирования ведущих зарубежных производите', 87000),
(8, '8транс.jpg.webp', 'Трансформатор ТСДЗЛФ11-100-10,5/0,4 У/Ун–0', 2, NULL, 2870),
(9, '9транс.jpg.webp', 'Трансформатор ТС-6,3-0,4/0,23 У/Ун-0', 5, 'Эксплуатация трансформаторов сухого типа наиболее безопасна, т.к. их конструкция не имеет горючих материалов и удовлетворяет более жесткие требования к пожарной безопасности.\r\n', 1104),
(10, '10транс.jpg.webp', 'Трансформатор ТМГ-25-6/0,4 У/Zн-11', 3, NULL, 4900),
(11, '11транс.jpg.webp', 'Трансформатор ОСМ-1-220/5 1/1-0', 1, '', 2671),
(12, '12транс.jpg.webp', 'Трансформатор ТМ-160-6/0,4 У/Zн-11', 5, '', 66000),
(13, '13транс.png.webp', 'Трансформатор ТМГС–63-6/0,4 У/Zн-11', 4, '', 4700),
(14, '14транс.png.webp', ' ТСЛ-1000-10/0,4 У/Ун-0 сейсмостойкий', 1, 'В линейке силовых сухих трансформаторов ТС(З)Л имеется серия сейсмостойких трансформаторов мощностью 40-2500 кВА, предназначенных для эксплуатации в регионах с повышенной сейсмической активностью', 101000);

-- --------------------------------------------------------

--
-- Структура таблицы `Providers`
--

CREATE TABLE `Providers` (
  `id` int(11) UNSIGNED NOT NULL,
  `Provider` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `Providers`
--

INSERT INTO `Providers` (`id`, `Provider`) VALUES
(1, 'CHINT'),
(2, 'IEK'),
(3, 'MBS'),
(4, 'Diel SRL'),
(5, 'СВЭЛ');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `Products`
--
ALTER TABLE `Products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `index_1` (`id_provider`);

--
-- Индексы таблицы `Providers`
--
ALTER TABLE `Providers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `Products`
--
ALTER TABLE `Products`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT для таблицы `Providers`
--
ALTER TABLE `Providers`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `Products`
--
ALTER TABLE `Products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`id_provider`) REFERENCES `Providers` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
