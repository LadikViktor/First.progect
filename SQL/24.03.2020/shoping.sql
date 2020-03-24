-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Мар 24 2020 г., 21:20
-- Версия сервера: 8.0.12
-- Версия PHP: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `shoping`
--
CREATE DATABASE IF NOT EXISTS `shoping` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `shoping`;

-- --------------------------------------------------------

--
-- Структура таблицы `customers`
--

CREATE TABLE `customers` (
  `CNUM` int(11) NOT NULL,
  `CNAME` varchar(150) DEFAULT NULL,
  `CITY` varchar(150) DEFAULT NULL,
  `RATING` int(11) DEFAULT NULL,
  `SNUM` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `customers`
--

INSERT INTO `customers` (`CNUM`, `CNAME`, `CITY`, `RATING`, `SNUM`) VALUES
(2001, 'Hoffman', 'London', 100, 1001);

-- --------------------------------------------------------

--
-- Структура таблицы `orders`
--

CREATE TABLE `orders` (
  `ONUM` int(11) NOT NULL,
  `AMT` double DEFAULT NULL,
  `ODATE` date DEFAULT NULL,
  `CNUM` int(11) NOT NULL,
  `SNUM` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `orders`
--

INSERT INTO `orders` (`ONUM`, `AMT`, `ODATE`, `CNUM`, `SNUM`) VALUES
(3001, 18.69, '1990-03-10', 2001, 1001);

-- --------------------------------------------------------

--
-- Структура таблицы `salepeople`
--

CREATE TABLE `salepeople` (
  `SNUM` int(11) NOT NULL,
  `SNAME` varchar(150) DEFAULT NULL,
  `CITY` varchar(150) DEFAULT NULL,
  `COMM` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `salepeople`
--

INSERT INTO `salepeople` (`SNUM`, `SNAME`, `CITY`, `COMM`) VALUES
(1001, 'Peel', 'London', 0.12);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`CNUM`);

--
-- Индексы таблицы `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`ONUM`),
  ADD KEY `fk_orders_customers_idx` (`CNUM`),
  ADD KEY `fk_orders_salepeople1_idx` (`SNUM`);

--
-- Индексы таблицы `salepeople`
--
ALTER TABLE `salepeople`
  ADD PRIMARY KEY (`SNUM`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `customers`
--
ALTER TABLE `customers`
  MODIFY `CNUM` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2002;

--
-- AUTO_INCREMENT для таблицы `orders`
--
ALTER TABLE `orders`
  MODIFY `ONUM` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3002;

--
-- AUTO_INCREMENT для таблицы `salepeople`
--
ALTER TABLE `salepeople`
  MODIFY `SNUM` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1002;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `fk_orders_customers` FOREIGN KEY (`CNUM`) REFERENCES `customers` (`cnum`),
  ADD CONSTRAINT `fk_orders_salepeople1` FOREIGN KEY (`SNUM`) REFERENCES `salepeople` (`snum`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
