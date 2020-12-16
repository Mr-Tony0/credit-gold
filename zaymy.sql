-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Дек 16 2020 г., 09:33
-- Версия сервера: 5.6.41
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
-- База данных: `credit-gold`
--

-- --------------------------------------------------------

--
-- Структура таблицы `zaymy`
--

CREATE TABLE `zaymy` (
  `id` int(32) NOT NULL,
  `name` varchar(64) NOT NULL,
  `img` text NOT NULL,
  `link` text NOT NULL,
  `procent` float NOT NULL,
  `sum` int(10) NOT NULL,
  `term_ot` int(3) NOT NULL,
  `na_kartu` varchar(4) NOT NULL,
  `na_kartu_bezOtkaza` varchar(4) NOT NULL,
  `na_kartu_kruglosut` varchar(4) NOT NULL,
  `na_kartu_bezProcentov` varchar(4) NOT NULL,
  `na_kartu_srocno` varchar(4) NOT NULL,
  `na_kartu_bystro` varchar(4) NOT NULL,
  `na_kartu_maestro` varchar(4) NOT NULL,
  `na_kartu_s18` varchar(4) NOT NULL,
  `na_kartu_s20` varchar(4) NOT NULL,
  `na_kartu_bezKomisii` varchar(4) NOT NULL,
  `na_kartu_za5Minut` varchar(4) NOT NULL,
  `na_kartu_novie` varchar(4) NOT NULL,
  `na_kartu_bezZvonkovOperatora` varchar(4) NOT NULL,
  `na_kartu_mir` varchar(4) NOT NULL,
  `na_kartu_sberbank` varchar(4) NOT NULL,
  `na_kartu_bezProverok` varchar(4) NOT NULL,
  `na_kartu_mgnoveno` varchar(4) NOT NULL,
  `na_kartu_momentalno` varchar(4) NOT NULL,
  `na_kartu_sPloxoyKreditnoyIstoriey` varchar(4) NOT NULL,
  `nalichnimi` varchar(4) NOT NULL,
  `na_qiwi` varchar(4) NOT NULL,
  `na_qiwi_bezKarti` varchar(4) NOT NULL,
  `na_qiwi_bezPasporta` varchar(4) NOT NULL,
  `na_qiwi_poPasportu` varchar(4) NOT NULL,
  `na_qiwi_bistro` varchar(4) NOT NULL,
  `na_qiwi_bezProverok` varchar(4) NOT NULL,
  `na_qiwi_sPloxoyKreditnoyIstoriey` varchar(4) NOT NULL,
  `na_yandex` varchar(4) NOT NULL,
  `pod_zalog` varchar(4) NOT NULL,
  `pod_zalog_pts` varchar(4) NOT NULL,
  `pod_zalog_nedvijimosti` varchar(4) NOT NULL,
  `pod_zalog_kvartiri` varchar(4) NOT NULL,
  `pod_zalog_avto` varchar(4) NOT NULL,
  `luchie` varchar(4) NOT NULL,
  `do_zp` varchar(4) NOT NULL,
  `term_do` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `zaymy`
--
ALTER TABLE `zaymy`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `zaymy`
--
ALTER TABLE `zaymy`
  MODIFY `id` int(32) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
