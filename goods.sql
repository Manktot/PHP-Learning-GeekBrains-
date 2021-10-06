-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Окт 06 2021 г., 21:02
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
-- База данных: `goods`
--

-- --------------------------------------------------------

--
-- Структура таблицы `basket`
--

CREATE TABLE `basket` (
  `id` int NOT NULL,
  `goods_id` int NOT NULL,
  `session_id` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `basket`
--

INSERT INTO `basket` (`id`, `goods_id`, `session_id`) VALUES
(16, 2, 'gp5qabjkpmioqd5pvjueg8uppo2d8bq9'),
(17, 7, 'gp5qabjkpmioqd5pvjueg8uppo2d8bq9'),
(18, 1, 'gp5qabjkpmioqd5pvjueg8uppo2d8bq9'),
(19, 2, 'gp5qabjkpmioqd5pvjueg8uppo2d8bq9'),
(20, 4, 'gp5qabjkpmioqd5pvjueg8uppo2d8bq9'),
(21, 5, 'gp5qabjkpmioqd5pvjueg8uppo2d8bq9');

-- --------------------------------------------------------

--
-- Структура таблицы `goods`
--

CREATE TABLE `goods` (
  `id` int NOT NULL,
  `name` varchar(100) NOT NULL,
  `company` varchar(100) NOT NULL,
  `price` int NOT NULL,
  `description` varchar(350) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `goods`
--

INSERT INTO `goods` (`id`, `name`, `company`, `price`, `description`, `image`) VALUES
(1, 'Sword and Shield', 'Мастерская Старого Света', 100, 'Самое многофункциональное оружие в игре: оно может наносить как физический, так и элементальный и статусный урон.\r\nДробящий урон и оглушение, режущий урон и провоцирование кровотечения — всё это тоже про меч и щит. Но, к сожалению, самые сильные атаки сложны в исполнении и требуют практики.', 'sword_and_shield.jpg'),
(2, 'Great Sword', 'Мастерская Старого Света', 290, 'Простой, как тяпка, коварный, как грабли. Двуручным мечом можно разделаться с любым монстром за пару десятков точных ударов — главное подгадать момент, когда противник откроется. Замах с этим оружием получается долгим, поэтому важно не пропустить продолжительное «окно» для ударов.', 'greatsword.jpg'),
(3, 'Long Sword', 'Кузня Большой Лапы', 190, 'Хороший урон, мобильность, высокая скорость и внушительная дальность атаки делает Бастард универсальным оружием. В то же время меч требует грамотного обращения: в сражении с боссом его нужно «разогнать» разными комбо, а также получить бафы, чтоб завершить атаку колоссальным уроном.', 'longsword.jpg'),
(4, 'Hammer', 'Дом Каменной Длани', 160, 'Король станов, гроза медленных монстров и просто удобное оружие. Чтобы наносить максимум урона, важно поддерживать бафы в боевом состоянии. Сделать это относительно просто: один из бафов даёт гиперброню, которая нивелирует многие удары противника.', 'hammer.jpg'),
(5, 'Bow', 'Мастерская Астера', 175, 'Этот лук атакует противника на большом расстоянии, при этом персонаж сохраняет высокую мобильность, что очень важно в бою. ', 'bow.jpg'),
(6, 'Charge Blade', 'Мастерская Астера', 350, 'Особенность этого оружия заключается в опциональном выборе между большим топором и щитом и мечом. Диковинное устройство превращается из топора в меч по нажатию одной кнопки. ', 'charge_blade.jpg'),
(7, 'Heavy Bowgun', 'Дом Старого Охотника', 450, 'Тяжёлый арбалет — оружие огнестрельное. А потому, с одной стороны, оно наносит колоссальный урон, а с другой — с ним трудно себя защитить от контратак. Если вооружиться этим арбалетом, персонаж не сможет ни нормальный блок поставить, ни увернуться.\r\nТяжёлый арбалет стоит брать с собой только на мультиплеерные вылазки в одной команде с танком.', 'heavy_bowgun.jpg'),
(8, 'Lance', 'Орден Крепкого Щита', 250, 'Копьё — самое агрессивное оборонительное оружие в Monster Hunter: World. Такой парадокс возникает благодаря лучшему в игре блоку копейщика, который открывает доступ к различным видам контратак.', 'lance.jpg');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `basket`
--
ALTER TABLE `basket`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `goods`
--
ALTER TABLE `goods`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `basket`
--
ALTER TABLE `basket`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT для таблицы `goods`
--
ALTER TABLE `goods`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
