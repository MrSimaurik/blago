-- phpMyAdmin SQL Dump
-- version 5.2.2
-- https://www.phpmyadmin.net/
--
-- Хост: MySQL-8.0
-- Время создания: Апр 30 2025 г., 12:48
-- Версия сервера: 8.0.35
-- Версия PHP: 8.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `blago`
--

-- --------------------------------------------------------

--
-- Структура таблицы `donat`
--

CREATE TABLE `donat` (
  `id` int NOT NULL,
  `user_id` int NOT NULL,
  `project_id` int NOT NULL,
  `amount` int NOT NULL,
  `date` varchar(32) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `donat`
--

INSERT INTO `donat` (`id`, `user_id`, `project_id`, `amount`, `date`) VALUES
(2, 3, 1, 10000, NULL),
(4, 1, 1, 5000, NULL),
(6, 1, 7, 500, NULL),
(7, 1, 7, 500, NULL),
(8, 1, 8, 500, NULL),
(9, 2, 3, 2000, '30.04.2025');

-- --------------------------------------------------------

--
-- Структура таблицы `project`
--

CREATE TABLE `project` (
  `id` int NOT NULL,
  `tittle` varchar(32) NOT NULL,
  `target_amount` int NOT NULL,
  `target_current` int DEFAULT NULL,
  `purpose_of_donation` varchar(512) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `img_path` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `project`
--

INSERT INTO `project` (`id`, `tittle`, `target_amount`, `target_current`, `purpose_of_donation`, `img_path`) VALUES
(1, 'Сбор средств в приют для собак', 500000, 50000, 'Помогите собакам из приюта \"Добрые сердца\"! 🐕💛\r\n\r\nНам нужны средства на корм, лечение и ремонт вольеров. Каждая собака заслуживает шанс на счастливую жизнь!\r\nДавайте поможем вместе! 🐾', 'sobaka.jpg'),
(3, 'Сбор средств в приют для кошек', 1000000, 43500, 'Помогите кошкам обрести дом! 🐾\r\n\r\nНаш приют для кошек нуждается в вашей поддержке! Средства пойдут на корм, лечение, стерилизацию и обустройство комфортных условий для пушистых подопечных. Каждый рубль — шаг к спасению жизни!\r\n\r\nКак помочь?\r\n✔ Финансовая помощь (реквизиты ниже)\r\n✔ Корма, лекарства, наполнители\r\n✔ Волонтерство и передержки\r\n\r\nДавайте вместе подарим котикам шанс на счастливую жизнь! 💖\r\n#ПомощьПриюту #СпасемКотиков', 'cat.webp'),
(5, 'Помощь больным ДЦП', 2000000, 100000, 'Помощь больным ДЦП\r\nДетский церебральный паралич (ДЦП) – тяжелое заболевание, требующее комплексной реабилитации. \r\nПомощь включает:\r\n✅ Финансирование реабилитационных курсов;\r\n✅ Покупку технических средств;\r\n✅ Психологическую поддержку семей;\r\n✅ Организацию доступной среды.\r\nКаждый может внести вклад: сделать пожертвование, стать волонтером или распространить информацию. Вместе мы подарим детям с ДЦП шанс на полноценную жизнь!\r\n#ДЦП #ПомощьДетям #Благотворительность', 'dcp.webp'),
(6, 'Сбор средств в детские дома', 1500000, 500000, 'Сбор средств для детских домов  \r\nПодарите детям из детских домов шанс на счастливое будущее! Ваша помощь — это не просто деньги, это тепло, забота и возможность получить необходимое: одежду, игрушки, книги, лекарства и образование.  \r\n\r\nКаждый рубль идет на поддержку малышей, лишенных родительской любви. Вместе мы можем подарить им радость, уверенность в завтрашнем дне и веру в добро.  \r\n\r\nПоддержите наш сбор — даже небольшая сумма меняет жизни! 💙  \r\n\r\n#ПомогитеДетям #ДоброеДело #ДетиЖдутПомощи  ', 'dedskidom.jpg'),
(7, 'помощь в борьбе с анкологией', 1500000, 150009, 'Помогите в борьбе с онкологией!  \r\nКаждый день сотни детей и взрослых борются с раком. Ваша поддержка может спасти жизни — средства пойдут на лечение, дорогостоящие лекарства и реабилитацию пациентов.    \r\n#РакПобедим ', 'rak.jpg'),
(8, 'Помощь бездомным', 890000, 500234, 'Помощь бездомным\r\n\r\nБездомность — одна из острых социальных проблем. Люди оказываются на улице из-за потери работы, семейных конфликтов, болезней или зависимостей. Помочь может каждый:\r\n🔹 Еда и одежда – передайте в благотворительные организации или напрямую нуждающимся.\r\n🔹 Волонтерство – помогайте в приютах, пунктах питания или социальных службах.\r\n\r\nДаже небольшой вклад способен изменить чью-то жизнь.\r\n#ПомощьБездомным #Добро', 'bezdomni.jpg');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `login` varchar(32) NOT NULL,
  `name` varchar(32) NOT NULL,
  `phone` varchar(32) NOT NULL,
  `password` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `login`, `name`, `phone`, `password`) VALUES
(1, '111', '111', '111', '111'),
(2, 'Legion', 'Алексей', '+7 (919) 725-88-05', '111'),
(3, 'MrSimaurik', 'Evgenii', '+79778665020', '111'),
(4, 'MrSimaurik', 'Evgenii', '+79778665020', '123123');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `donat`
--
ALTER TABLE `donat`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `project_id` (`project_id`);

--
-- Индексы таблицы `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `donat`
--
ALTER TABLE `donat`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT для таблицы `project`
--
ALTER TABLE `project`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `donat`
--
ALTER TABLE `donat`
  ADD CONSTRAINT `donat_ibfk_1` FOREIGN KEY (`project_id`) REFERENCES `project` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `donat_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
