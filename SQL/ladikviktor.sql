-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Мар 13 2020 г., 19:49
-- Версия сервера: 8.0.12
-- Версия PHP: 7.2.10

SET SQL_MODE
= "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT
= 0;
START TRANSACTION;
SET time_zone
= "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `ladikviktor`
--
CREATE DATABASE
IF NOT EXISTS `ladikviktor` DEFAULT CHARACTER
SET utf8
COLLATE utf8_general_ci;
USE `ladikviktor`;

-- --------------------------------------------------------

--
-- Структура таблицы `payroll`
--

CREATE TABLE `payroll`
(
  `Number` int
(11) NOT NULL,
  `FIO` varchar
(50) NOT NULL,
  `Salary` float NOT NULL,
  `Department` varchar
(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `payroll`
--

INSERT INTO `payroll` (`
Number`,
`FIO
`, `Salary`, `Department`) VALUES
(1, 'Иванов', 100, 'Разработчик'),
(2, 'Петров', 50, 'QA'),
(3, 'Сидоров', 150, 'Разработчик'),
(4, 'Сергеев', 70, 'QA'),
(5, 'Андреев', 200, 'Бизнес-аналитик'),
(6, 'Поляков', 110, 'Бизнес-аналитик'),
(7, 'Карнилов', 300, 'Проект-менеджер'),
(8, 'Рыбкина', 60, 'Отдел кадров'),
(9, 'Демидов', 30, 'Системный администратор'),
(10, 'Федорович', 200, 'Разработчик');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
