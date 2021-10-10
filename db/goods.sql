-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Окт 10 2021 г., 03:00
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
(49, 1, 'oaq4rceukfja9lpppfk9h3vcog3i3nmn'),
(50, 3, 'oaq4rceukfja9lpppfk9h3vcog3i3nmn'),
(51, 4, 'oaq4rceukfja9lpppfk9h3vcog3i3nmn'),
(52, 8, 'mgk537c33jq403k636la723ou9ftd6lg'),
(53, 2, 'mgk537c33jq403k636la723ou9ftd6lg'),
(54, 5, 'mgk537c33jq403k636la723ou9ftd6lg'),
(55, 4, 'mgk537c33jq403k636la723ou9ftd6lg'),
(56, 2, 'mgk537c33jq403k636la723ou9ftd6lg'),
(57, 3, '8vib0fm8ld0ftg4l69lhrm2ccnmf5adg'),
(58, 5, '8vib0fm8ld0ftg4l69lhrm2ccnmf5adg'),
(59, 4, '8vib0fm8ld0ftg4l69lhrm2ccnmf5adg'),
(63, 4, 'ub2ug572qgbe2g3g9eivvfqqqrstrgnr'),
(64, 3, 'ub2ug572qgbe2g3g9eivvfqqqrstrgnr'),
(65, 2, 'ub2ug572qgbe2g3g9eivvfqqqrstrgnr');

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

-- --------------------------------------------------------

--
-- Структура таблицы `orders`
--

CREATE TABLE `orders` (
  `id` int NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `user_phone` varchar(30) NOT NULL,
  `session_id` text NOT NULL,
  `status` varchar(50) NOT NULL DEFAULT 'Ожидает подтверждения'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `orders`
--

INSERT INTO `orders` (`id`, `user_name`, `user_phone`, `session_id`, `status`) VALUES
(15, 'Алексей', '+7(906)6790232', 'oaq4rceukfja9lpppfk9h3vcog3i3nmn', 'Отклонено'),
(16, 'Максим', '89066790232', 'mgk537c33jq403k636la723ou9ftd6lg', 'Ожидает подтверждения'),
(17, 'Джек', '89066791234', '8vib0fm8ld0ftg4l69lhrm2ccnmf5adg', 'Подтверждено');

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
-- Индексы таблицы `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `basket`
--
ALTER TABLE `basket`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT для таблицы `goods`
--
ALTER TABLE `goods`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT для таблицы `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
