-- Adminer 4.1.0 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DROP TABLE IF EXISTS `event`;
CREATE TABLE `event` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) DEFAULT NULL,
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `recurrence` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `event` (`id`, `title`, `start_date`, `end_date`, `recurrence`) VALUES
(5,	'event 1',	'2022-01-03',	'2022-01-07',	'{\"recurrence_type\":\"0\",\"every_type\":\"every\",\"every_day\":\"day\"}'),
(7,	'event 3',	'2022-01-03',	'2022-01-07',	'{\"recurrence_type\":\"0\",\"every_type\":\"every_other\",\"every_day\":\"day\"}'),
(8,	'event 4',	'2022-01-03',	'2022-01-07',	'{\"recurrence_type\":\"0\",\"every_type\":\"every_third\",\"every_day\":\"day\"}');

-- 2022-01-03 16:51:24
