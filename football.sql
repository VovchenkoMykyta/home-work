-- Adminer 4.8.1 MySQL 8.0.26-0ubuntu0.20.04.3 dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DROP TABLE IF EXISTS `Player`;
CREATE TABLE `Player` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `yellow_card` int NOT NULL,
  `red_card` int NOT NULL,
  `goals_kicking` int DEFAULT NULL,
  `assist` int DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

INSERT INTO `Player` (`id`, `name`, `lastname`, `yellow_card`, `red_card`, `goals_kicking`, `assist`) VALUES
(3,	'Маркос',	'Алонсо',	2,	0,	1,	2),
(4,	'Кепа',	'Аррисабалага',	0,	0,	0,	0),
(5,	'Сезар',	'Аспиликуэта',	0,	0,	0,	2),
(6,	'Росс',	'Баркли',	0,	0,	0,	0),
(7,	'Тимо',	'Вернер',	1,	0,	1,	2),
(8,	'Рис',	'Джеймс',	0,	1,	1,	3),
(9,	'Матео',	'Ковачич',	0,	0,	1,	4),
(10,	'Садио',	'Мане',	0,	0,	4,	4),
(11,	'Мохамед',	'Салах',	1,	0,	7,	9),
(12,	'Габриэль',	'Жезус',	0,	0,	2,	6),
(13,	'Александр',	'Зинченко',	0,	0,	0,	0),
(14,	'Мейсон',	'Гринвуд',	1,	0,	3,	3),
(15,	'Поль',	'Погба',	1,	0,	0,	5),
(16,	'Бруну',	'Фернандеш',	1,	0,	4,	5);

DROP TABLE IF EXISTS `Team`;
CREATE TABLE `Team` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `gerb_path` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `city` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `stadium` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `coach` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `game_amount` int DEFAULT NULL,
  `win_amount` int DEFAULT NULL,
  `loss_amount` int DEFAULT NULL,
  `draw_amount` int DEFAULT NULL,
  `goals_kicking` int DEFAULT NULL,
  `goals_missing` int DEFAULT NULL,
  `players_in_team` json DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

INSERT INTO `Team` (`id`, `name`, `gerb_path`, `city`, `stadium`, `coach`, `game_amount`, `win_amount`, `loss_amount`, `draw_amount`, `goals_kicking`, `goals_missing`, `players_in_team`) VALUES
(14,	'Челси',	NULL,	'Англия',	'Stamford Bridge',	'Томас Тухель',	7,	5,	1,	1,	15,	3,	NULL),
(15,	'Ливерпуль',	NULL,	'Англия',	'Anfield Road',	'Юрген Клопп',	7,	4,	0,	3,	17,	6,	NULL),
(16,	' Манчестер Сити',	NULL,	'Англия',	'Etihad Stadium',	'Хосеп Гвардиола',	7,	4,	1,	2,	14,	3,	NULL),
(17,	' Манчестер Юн',	NULL,	'Англия',	'Old Trafford',	'Оле-Гуннар Солскьяер',	7,	4,	1,	2,	14,	6,	NULL);

-- 2021-10-13 14:15:53
