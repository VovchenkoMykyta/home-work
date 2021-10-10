-- Adminer 4.8.1 MySQL 8.0.26-0ubuntu0.20.04.3 dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DROP TABLE IF EXISTS `Game`;
CREATE TABLE `Game` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `date` datetime DEFAULT NULL,
  `team_id_first` int unsigned NOT NULL,
  `team_id_second` int unsigned NOT NULL,
  `total` int DEFAULT NULL,
  `gol_player` int unsigned NOT NULL,
  `gols_team1` int NOT NULL,
  `gols_team2` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `team_id_first` (`team_id_first`),
  KEY `team_id_second` (`team_id_second`),
  KEY `gol_player` (`gol_player`),
  CONSTRAINT `Game_ibfk_1` FOREIGN KEY (`team_id_first`) REFERENCES `Team` (`id`) ON DELETE RESTRICT,
  CONSTRAINT `Game_ibfk_2` FOREIGN KEY (`team_id_second`) REFERENCES `Team` (`id`) ON DELETE RESTRICT,
  CONSTRAINT `Game_ibfk_3` FOREIGN KEY (`gol_player`) REFERENCES `Player` (`id`) ON DELETE RESTRICT
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

INSERT INTO `Game` (`id`, `date`, `team_id_first`, `team_id_second`, `total`, `gol_player`, `gols_team1`, `gols_team2`) VALUES
(1,	'2021-09-10 18:00:00',	1,	2,	1,	1,	2,	1);

DROP TABLE IF EXISTS `Player`;
CREATE TABLE `Player` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `team_id` int unsigned NOT NULL,
  `yellow_card` int NOT NULL,
  `red_card` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `team_id` (`team_id`),
  CONSTRAINT `Player_ibfk_1` FOREIGN KEY (`team_id`) REFERENCES `Player` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

INSERT INTO `Player` (`id`, `name`, `lastname`, `team_id`, `yellow_card`, `red_card`) VALUES
(1,	'Test',	'Test',	1,	1,	0);

DROP TABLE IF EXISTS `Team`;
CREATE TABLE `Team` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `gerb_path` varchar(255) NOT NULL,
  `city` varchar(100) NOT NULL,
  `stadium` varchar(255) NOT NULL,
  `coach` varchar(255) NOT NULL,
  `game_amount` int NOT NULL,
  `win_amount` int NOT NULL,
  `loss_amount` int NOT NULL,
  `draw_amount` int NOT NULL,
  `goals_kicking` int NOT NULL,
  `goals_missing` int NOT NULL,
  `players_in_team` json DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

INSERT INTO `Team` (`id`, `name`, `gerb_path`, `city`, `stadium`, `coach`, `game_amount`, `win_amount`, `loss_amount`, `draw_amount`, `goals_kicking`, `goals_missing`, `players_in_team`) VALUES
(1,	'Name',	'path',	'city',	'stadium',	'coach',	10,	7,	3,	0,	11,	5,	NULL),
(2,	'Name2',	'path',	'city',	'stadium',	'coach',	21,	14,	7,	0,	25,	12,	NULL),
(3,	'Name3',	'some path',	'city',	'stadium',	'coach',	15,	7,	2,	6,	12,	9,	NULL);

-- 2021-10-10 13:02:02
