-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Сен 29 2021 г., 10:48
-- Версия сервера: 8.0.24
-- Версия PHP: 7.4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `gallery`
--

-- --------------------------------------------------------

--
-- Структура таблицы `gallery`
--

CREATE TABLE `gallery` (
  `id` int NOT NULL,
  `name` varchar(50) NOT NULL,
  `description` varchar(100) NOT NULL,
  `file_name` varchar(50) NOT NULL,
  `path_mini` varchar(50) NOT NULL DEFAULT './gallery_img/small/',
  `path_original` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL DEFAULT './gallery_img/big/',
  `likes` int NOT NULL DEFAULT '0',
  `file_size_mini` float NOT NULL,
  `file_size_original` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `gallery`
--

INSERT INTO `gallery` (`id`, `name`, `description`, `file_name`, `path_mini`, `path_original`, `likes`, `file_size_mini`, `file_size_original`) VALUES
(1, 'Инопланетная жизнь', 'Один из возможных видов инопланетной жизни, которая могла бы выжить в суровых условиях.', 'alien_planet.jpg', './gallery_img/small/', './gallery_img/big/', 77, 6.47, 156),
(2, 'Экзопланета', 'Так может выглядить землеподобная экзопланета в глубиннах космоса.', 'blue_planet.jpg', './gallery_img/small/', './gallery_img/big/', 0, 3.72, 68.5),
(3, 'Голубая звезда', 'Возможный вид голубой звезды с одной из вращающейся вокруг нее планеты.', 'blue_star.jpg', './gallery_img/small/', './gallery_img/big/', 2, 4.27, 87.7),
(4, 'Мост над каналом', 'Так выглядят мосты в старых Европейских городах.', 'bridge.jpg', './gallery_img/small/', './gallery_img/big/', 0, 7.16, 110),
(5, 'Красоты Гренландии', 'Потрясающий контраст в природе Гренландии', 'dark_skies.jpg', './gallery_img/small/', './gallery_img/big/', 5, 4.7, 94.8),
(6, 'Эйфелева башня', 'Знаменитая и знаковаядостопримечательность Франции ', 'eiffel_tower.jpg', './gallery_img/small/', './gallery_img/big/', 0, 5.11, 109),
(7, 'Луна над руинами', 'Невероятно большая луна над заброшенными руинами первых эльфов в Средиземье', 'fantastic_moon.jpg', './gallery_img/small/', './gallery_img/big/', 0, 3.66, 60.2),
(8, 'Мост возле замка', 'Собранная картина из кусочков других изображений с добавлением свечения.', 'fantasy_bridge.jpg', './gallery_img/small/', './gallery_img/big/', 0, 5.36, 101),
(9, 'Далекая галактика', 'Так представляет себе далекую галактику один из CGI артистов.', 'gallactic.jpg', './gallery_img/small/', './gallery_img/big/', 0, 5.02, 108),
(10, 'Великая Китайская стена', 'Стена проходит по северному Китаю .', 'greet_wall.jpg', './gallery_img/small/', './gallery_img/big/', 0, 7.14, 148),
(12, 'Спутники', 'Так могут выглядеть с поверхности соседние спутники крупного газового гиганта.', 'planets_on_horizont.jpg', './gallery_img/small/', './gallery_img/big/', 0, 3.57, 68.4),
(13, 'Река в Гренландии', 'Фантастического вида суровая природа Гренландии', 'river.jpg', './gallery_img/small/', './gallery_img/big/', 0, 5.12, 97),
(14, 'Звездное скопление', 'Подобный вид в космосе является обычным для регионов близких к центру галактики.', 'stars.jpg', './gallery_img/small/', './gallery_img/big/', 0, 4.58, 97),
(15, 'Скорпион', 'Созвездие скорпиона, нарисованное художником KAGAYA', 'zodiac.jpg', './gallery_img/small/', './gallery_img/big/', 0, 7.9, 136);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
