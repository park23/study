-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Хост: localhost
-- Время создания: Июн 04 2012 г., 20:03
-- Версия сервера: 5.5.16
-- Версия PHP: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `study`
--

-- --------------------------------------------------------

--
-- Структура таблицы `students`
--

CREATE TABLE IF NOT EXISTS `students` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'идентификатор юзера',
  `firstname` varchar(55) NOT NULL COMMENT 'имя студента',
  `lastname` varchar(55) NOT NULL COMMENT 'Фамилия',
  `middlename` varchar(55) NOT NULL COMMENT 'отчество студента',
  `birthday` date NOT NULL COMMENT 'дата рождения',
  `national` varchar(55) NOT NULL,
  `sex` int(10) NOT NULL,
  `address` varchar(256) NOT NULL,
  `work` varchar(256) NOT NULL,
  `edu` varchar(256) NOT NULL,
  `family` varchar(55) NOT NULL,
  `grup` varchar(54) NOT NULL COMMENT 'группа',
  `course` varchar(55) NOT NULL,
  `phone` int(55) NOT NULL,
  `email` varchar(55) NOT NULL,
  `key` int(55) NOT NULL,
  `avatar` varchar(50) NOT NULL COMMENT 'Картинко',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=18 ;

--
-- Дамп данных таблицы `students`
--

INSERT INTO `students` (`id`, `firstname`, `lastname`, `middlename`, `birthday`, `national`, `sex`, `address`, `work`, `edu`, `family`, `grup`, `course`, `phone`, `email`, `key`, `avatar`) VALUES
(12, 'Андрей', 'Пупкин', 'Андреевич', '1990-05-09', 'еврей', 1, 'г Бишкек Восток 5 д34-34', 'Оператор сотовой связи', 'ПТУ имени гоголя', 'Холост', 'ПОВТ-1-08', 'Третий', 514312, 'lamer@mail.ru', 0, 'func.php%00.gif'),
(13, 'Василий', 'ЛОЛ', 'Валеревич', '1990-12-05', 'русский', 1, 'г Бишкек Восток 5 д34-34', 'Дворник', 'ПТУ имени гоголя', 'холост', 'ПОВТ-1-08', 'Первый', 555546213, 'test@inbox.kg', 0, 'cartman-awesom-o-256x256.png'),
(14, 'Сергей', 'Гусев', 'Иванович', '0000-00-00', 'еврей', 1, 'г Бишкек мкрн Кок Джар', 'Доктор зло', 'шк 26 , КРСУ', 'холост', 'ЕПИ-2-11', 'Первый', 555625456, 'lol@mail.ru', 0, 'cartman-awesom-o-256x256.png'),
(15, 'Виктор', 'Снапков', 'Ололоевич', '1990-11-27', 'швед', 2, 'г Бишкек Восток 5 д34-34', 'ОПСОС', 'ПТУ имени гоголя', 'замужем', 'ПОВТ-1-08', 'Пятый', 555456545, 'gg@mail.ru', 0, '19945577884c448a194881c.png'),
(16, 'Азиз', 'Алиев', 'Алмазбекович', '1993-02-13', 'кыргыз', 1, 'мкрн Улан д23-45', 'Оператор сотовой связи', 'КНУ', 'холост', 'ПОВТ-1-08', 'Третий', 772456565, 'lol@mail.ru', 0, ''),
(17, 'Денис', 'Гонцов', 'Олегович', '1992-05-06', 'еврей', 1, '/home', 'Ыы', 'кгуста', 'холостяк', 'ПОВТ-1-09', 'Третий', 551127001, 'diezel_fors@mail.ru', 0, '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
