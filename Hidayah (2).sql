-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Июн 27 2023 г., 14:01
-- Версия сервера: 5.5.62
-- Версия PHP: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `Hidayah`
--

-- --------------------------------------------------------

--
-- Структура таблицы `aboutinfrormation`
--

CREATE TABLE `aboutinfrormation` (
  `id` int(11) NOT NULL,
  `clients` int(11) DEFAULT NULL,
  `projects` int(11) DEFAULT NULL,
  `hoursofsupport` int(11) DEFAULT NULL,
  `hardworkers` int(11) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `aboutinfrormation`
--

INSERT INTO `aboutinfrormation` (`id`, `clients`, `projects`, `hoursofsupport`, `hardworkers`, `status`) VALUES
(1, 250, 100, 434, 500, 1);

-- --------------------------------------------------------

--
-- Структура таблицы `aboutsection`
--

CREATE TABLE `aboutsection` (
  `id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `titleru` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `descriptionru` text COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `aboutsection`
--

INSERT INTO `aboutsection` (`id`, `title`, `description`, `icon`, `status`, `titleru`, `descriptionru`) VALUES
(1, 'Fingerprint', 'On the other hand, the beginning of daily work on the formation of a position allows us to assess the value\r\n', 'bx bx-fingerprint', 1, 'Отпечаток пальца', 'С другой стороны начало повседневной работы по формированию позиции позволяет оценить значение'),
(2, 'Gifts', 'It should not be forgotten, however, that a new model of organizational activity entails a process of implementation\r\n', 'bx bx-gift', 1, 'Подарки', 'Не следует, однако забывать, что новая модель организационной деятельности влечет за собой процесс внедрения'),
(3, 'Atom', 'In the same way, the constant information and propaganda support of our activities contributes to\r\n', 'bx bx-atom', 1, 'Атом', 'Равным образом постоянное информационно-пропагандистское обеспечение нашей деятельности способствует');

-- --------------------------------------------------------

--
-- Структура таблицы `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `categoryname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `categorystatus` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `category`
--

INSERT INTO `category` (`id`, `categoryname`, `categorystatus`) VALUES
(1, 'app', 1),
(2, 'web', 1),
(3, 'card', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `forms`
--

CREATE TABLE `forms` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` text COLLATE utf8mb4_unicode_ci,
  `answer` text COLLATE utf8mb4_unicode_ci,
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `hidayahlinks`
--

CREATE TABLE `hidayahlinks` (
  `id` int(11) NOT NULL,
  `socname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `hidayahlinks`
--

INSERT INTO `hidayahlinks` (`id`, `socname`, `icon`, `link`, `status`) VALUES
(1, 'twitter', 'bx bxl-twitter', 'qwer', 1),
(2, 'facebook', 'bx bxl-facebook', 'qwer', 1),
(3, 'instagram', 'bx bxl-instagram', 'qqwer', 1),
(4, 'google-plus', 'bx bxl-skype', 'qwer', 1),
(5, 'linkedin', 'bx bxl-linkedin', 'qwer', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `mainslider`
--

CREATE TABLE `mainslider` (
  `id` int(11) NOT NULL,
  `bgimage` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `titleru` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `descriptionru` text COLLATE utf8mb4_unicode_ci,
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `mainslider`
--

INSERT INTO `mainslider` (`id`, `bgimage`, `title`, `titleru`, `description`, `descriptionru`, `status`) VALUES
(9, 'slide-1.jpg', 'Welcome to Hidayah', 'Добро пожаловать в Hidayah', 'Thus, the scope and place of personnel training require us to analyze further development directions.\r\n', 'Таким образом рамки и место обучения кадров требуют от нас анализа дальнейших направлений развития.', 1),
(10, 'slide-2.jpg', 'Example', 'Пример', 'We should not, however, forget that the constant information and propaganda support of our activities\r\n', 'Не следует, однако забывать, что постоянное информационно-пропагандистское обеспечение нашей деятельности', 1),
(11, 'slide-3.jpg', 'Example', 'Пример', 'Comrades! the implementation of the planned targets contributes to the preparation and implementation of the development model.\r\n', 'Товарищи! реализация намеченных плановых заданий способствует подготовки и реализации модели развития. ', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `percent`
--

CREATE TABLE `percent` (
  `id` int(11) NOT NULL,
  `html` int(100) DEFAULT NULL,
  `css` int(100) DEFAULT NULL,
  `js` int(100) DEFAULT NULL,
  `php` int(100) DEFAULT NULL,
  `wordpresscms` int(100) DEFAULT NULL,
  `photoshop` int(100) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `percent`
--

INSERT INTO `percent` (`id`, `html`, `css`, `js`, `php`, `wordpresscms`, `photoshop`, `status`) VALUES
(1, 100, 100, 100, 100, 100, 100, 1);

-- --------------------------------------------------------

--
-- Структура таблицы `percenttable`
--

CREATE TABLE `percenttable` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `percent` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `percenttable`
--

INSERT INTO `percenttable` (`id`, `name`, `percent`, `status`) VALUES
(1, 'HTML', 100, 1),
(2, 'CSS', 100, 1),
(3, 'JAVASCRIPT', 95, 1),
(4, 'PHP', 100, 2),
(5, 'WORDPRESS/CMS', 55, 2),
(6, 'PHOTOSHOP', 77, 2);

-- --------------------------------------------------------

--
-- Структура таблицы `portfoliophotos`
--

CREATE TABLE `portfoliophotos` (
  `id` int(11) NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL,
  `categoryid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `portfoliophotos`
--

INSERT INTO `portfoliophotos` (`id`, `image`, `title`, `description`, `status`, `categoryid`) VALUES
(5, 'portfolio-1.jpg', 'app', 'app', 1, 1),
(6, 'portfolio-2.jpg', 'web', 'web', 1, 2),
(7, 'portfolio-3.jpg', 'card', 'card', 1, 3),
(8, 'portfolio-4.jpg', 'app', 'app', 1, 1);

-- --------------------------------------------------------

--
-- Структура таблицы `services`
--

CREATE TABLE `services` (
  `id` int(11) NOT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `status` int(11) NOT NULL DEFAULT '0',
  `titleru` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `descriptionru` text COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `services`
--

INSERT INTO `services` (`id`, `icon`, `title`, `description`, `status`, `titleru`, `descriptionru`) VALUES
(1, 'ri-stack-line', 'Squares', 'The significance of these problems is so obvious that the constant quantitative growth and scope of our activity', 1, 'Квадраты', 'Значимость этих проблем настолько очевидна, что постоянный количественный рост и сфера нашей активности'),
(2, 'ri-markup-line', 'Markup', 'Thus, the constant information and propaganda support of our activities is\r\n', 1, 'Разметка', 'Таким образом постоянное информационно-пропагандистское обеспечение нашей деятельности представляет собой'),
(3, 'ri-shape-line', 'Shape', 'The task of the organization, in particular the existing structure of the organization, requires definition and clarification.\r\n', 1, 'Форма', 'Задача организации, в особенности же сложившаяся структура организации требуют определения и уточнения'),
(4, 'ri-fingerprint-line', 'Fingerprint', 'Thus, a new model of organizational activity entails a process of implementation and modernization\r\n', 1, 'Отпечаток', 'Таким образом новая модель организационной деятельности влечет за собой процесс внедрения и модернизации');

-- --------------------------------------------------------

--
-- Структура таблицы `staff`
--

CREATE TABLE `staff` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `post` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quote` text COLLATE utf8mb4_unicode_ci,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `nameru` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `postru` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quoteru` text COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `staff`
--

INSERT INTO `staff` (`id`, `name`, `post`, `quote`, `img`, `status`, `nameru`, `postru`, `quoteru`) VALUES
(1, 'Saul Goodman', 'Ceo & Founder', 'Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper. ', 'testimonials-1.jpg', 1, 'Сол Гудман', 'Генеральный директор и основатель', 'Для целевой группы результат стоит позаботиться, пока авиакомпания не возьмет на себя управление. Однако обвинителям это нужно, и им нужна дисциплина. Немного слабости, но всегда улыбка.'),
(2, 'Sara Wilsson', 'Designer', 'Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa. ', 'testimonials-2.jpg', 1, 'Сара Уилсон', 'Дизайнер', 'Экспорт времени, однако, я был за зло зол, что я собирался злиться на усилия, что я собирался быть тем, кто был тем, кто собирался быть тем, кем хотел быть.');

-- --------------------------------------------------------

--
-- Структура таблицы `workingteam`
--

CREATE TABLE `workingteam` (
  `id` int(11) NOT NULL,
  `workerimage` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `workername` text COLLATE utf8mb4_unicode_ci,
  `workerpost` text COLLATE utf8mb4_unicode_ci,
  `twitterurl` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebookurl` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instagramurl` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `linkedinurl` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  `workernameru` text COLLATE utf8mb4_unicode_ci,
  `workerpostru` text COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `workingteam`
--

INSERT INTO `workingteam` (`id`, `workerimage`, `workername`, `workerpost`, `twitterurl`, `facebookurl`, `instagramurl`, `linkedinurl`, `status`, `workernameru`, `workerpostru`) VALUES
(8, 'team-1.jpg', 'Walter White', 'Example', 'qwer', 'qwer', 'qwerq', 'qwer', 1, 'Уолтер Уайт', 'Пример'),
(9, 'team-2.jpg', 'Sarah Polson', 'Example', 'qwer', 'qwer', 'qwerq', 'qwer', 1, 'Сара Полсон', 'Пример'),
(10, 'team-3.jpg', 'Leonardo Dicaprio', 'Example', 'qwer', 'qwer', 'qwer', 'qwer', 1, 'Леонардо Дикаприо', 'Пример'),
(11, 'team-4.jpg', 'Kate Winslet', 'Example', 'qwer', 'qwer', 'qwer', 'qwer', 1, 'Кейт Уинслет', 'Пример');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `aboutinfrormation`
--
ALTER TABLE `aboutinfrormation`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `aboutsection`
--
ALTER TABLE `aboutsection`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `forms`
--
ALTER TABLE `forms`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `hidayahlinks`
--
ALTER TABLE `hidayahlinks`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `mainslider`
--
ALTER TABLE `mainslider`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `percent`
--
ALTER TABLE `percent`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `percenttable`
--
ALTER TABLE `percenttable`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `portfoliophotos`
--
ALTER TABLE `portfoliophotos`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `workingteam`
--
ALTER TABLE `workingteam`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `aboutinfrormation`
--
ALTER TABLE `aboutinfrormation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `aboutsection`
--
ALTER TABLE `aboutsection`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `forms`
--
ALTER TABLE `forms`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `hidayahlinks`
--
ALTER TABLE `hidayahlinks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `mainslider`
--
ALTER TABLE `mainslider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT для таблицы `percent`
--
ALTER TABLE `percent`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `percenttable`
--
ALTER TABLE `percenttable`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `portfoliophotos`
--
ALTER TABLE `portfoliophotos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT для таблицы `services`
--
ALTER TABLE `services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `staff`
--
ALTER TABLE `staff`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `workingteam`
--
ALTER TABLE `workingteam`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
