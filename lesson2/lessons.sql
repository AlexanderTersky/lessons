-- Adminer 4.3.1 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DROP TABLE IF EXISTS `company`;
CREATE TABLE `company` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` char(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `company` (`id`, `name`) VALUES
(1,	'Don_avia'),
(2,	'Aeroflot'),
(3,	'Dale_avia'),
(4,	'air_France'),
(5,	'British_AW');

DROP TABLE IF EXISTS `passenger`;
CREATE TABLE `passenger` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` char(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `passenger` (`id`, `name`) VALUES
(1,	'Bruce Willis'),
(2,	'George Clooney'),
(3,	'Kevin Costner'),
(4,	'Donald Sutherland'),
(5,	'Jennifer Lopez'),
(6,	'Ray Liotta'),
(7,	'Samuel L. Jackson'),
(8,	'Nikole Kidman'),
(9,	'Alan Rickman'),
(10,	'Kurt Russell'),
(11,	'Harrison Ford'),
(12,	'Russell Crowe'),
(13,	'Steve Martin'),
(14,	'Michael Caine'),
(15,	'Angelina Jolie'),
(16,	'Mel Gibson'),
(17,	'Michael Douglas'),
(18,	'John Travolta'),
(19,	'Sylvester Stallone'),
(20,	'Tommy Lee Jones'),
(21,	'Catherine Zeta-Jones'),
(22,	'Antonio Banderas'),
(23,	'Kim Basinger'),
(24,	'Sam Neill'),
(25,	'Gary Oldman'),
(26,	'Clint Eastwood'),
(27,	'Brad Pitt'),
(28,	'Johnny Depp'),
(29,	'Pierce Brosnan'),
(30,	'Sean Connery'),
(37,	'Mullah Omar');

DROP TABLE IF EXISTS `pass_in_trip`;
CREATE TABLE `pass_in_trip` (
  `trip_id` int(11) NOT NULL,
  `date` datetime NOT NULL,
  `passenger_id` int(11) NOT NULL,
  `place` char(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `pass_in_trip` (`trip_id`, `date`, `passenger_id`, `place`) VALUES
(1100,	'2003-04-29 00:00:00',	1,	'1a'),
(1123,	'2003-04-05 00:00:00',	3,	'2a'),
(1123,	'2003-04-08 00:00:00',	1,	'4c'),
(1123,	'2003-04-08 00:00:00',	6,	'4b'),
(1124,	'2003-04-02 00:00:00',	2,	'2d'),
(1145,	'2003-04-05 00:00:00',	3,	'2c'),
(1181,	'2003-04-01 00:00:00',	1,	'1a'),
(1181,	'2003-04-01 00:00:00',	6,	'1b'),
(1181,	'2003-04-01 00:00:00',	8,	'3c'),
(1181,	'2003-04-13 00:00:00',	5,	'1b'),
(1182,	'2003-04-13 00:00:00',	5,	'4b'),
(1187,	'2003-04-14 00:00:00',	8,	'3a'),
(1188,	'2003-04-01 00:00:00',	8,	'3a'),
(1182,	'2003-04-13 00:00:00',	9,	'6d'),
(1145,	'2003-04-25 00:00:00',	5,	'1d'),
(1187,	'2003-04-14 00:00:00',	10,	'3d'),
(8882,	'2005-11-06 00:00:00',	37,	'1a'),
(7771,	'2005-11-07 00:00:00',	37,	'1c'),
(7772,	'2005-11-07 00:00:00',	37,	'1a'),
(8881,	'2005-11-08 00:00:00',	37,	'1d'),
(7778,	'2005-11-05 00:00:00',	10,	'2a'),
(7772,	'2005-11-29 00:00:00',	10,	'3a'),
(7771,	'2005-11-04 00:00:00',	11,	'4a'),
(7771,	'2005-11-07 00:00:00',	11,	'1b'),
(7771,	'2005-11-09 00:00:00',	11,	'5a'),
(7772,	'2005-11-07 00:00:00',	12,	'1d'),
(7773,	'2005-11-07 00:00:00',	13,	'2d'),
(7772,	'2005-11-29 00:00:00',	13,	'1b'),
(8882,	'2005-11-13 00:00:00',	14,	'3d'),
(7771,	'2005-11-14 00:00:00',	14,	'4d'),
(7771,	'2005-11-16 00:00:00',	14,	'5d'),
(7772,	'2005-11-29 00:00:00',	14,	'1c');

DROP TABLE IF EXISTS `trip`;
CREATE TABLE `trip` (
  `id` int(11) NOT NULL,
  `company_id` int(11) NOT NULL,
  `plane` char(10) NOT NULL,
  `town_from` char(25) NOT NULL,
  `town_to` char(25) NOT NULL,
  `time_out` datetime NOT NULL,
  `time_in` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `trip` (`id`, `company_id`, `plane`, `town_from`, `town_to`, `time_out`, `time_in`) VALUES
(1100,	4,	'Boeing',	'Rostov',	'Paris',	'1900-01-01 14:30:00',	'1900-01-01 17:50:00'),
(1101,	4,	'Boeing',	'Paris',	'Rostov',	'1900-01-01 08:12:00',	'1900-01-01 11:45:00'),
(1123,	3,	'TU-154',	'Rostov',	'Vladivostok',	'1900-01-01 16:20:00',	'1900-01-01 03:40:00'),
(1124,	3,	'TU-154',	'Vladivostok',	'Rostov',	'1900-01-01 09:00:00',	'1900-01-01 19:50:00'),
(1145,	2,	'IL-86',	'Moscow',	'Rostov',	'1900-01-01 09:35:00',	'1900-01-01 11:23:00'),
(1146,	2,	'IL-86',	'Rostov',	'Moscow',	'1900-01-01 17:55:00',	'1900-01-01 20:01:00'),
(1181,	1,	'TU-134',	'Rostov',	'Moscow',	'1900-01-01 06:12:00',	'1900-01-01 08:01:00'),
(1182,	1,	'TU-134',	'Moscow',	'Rostov',	'1900-01-01 12:35:00',	'1900-01-01 14:30:00'),
(1187,	1,	'TU-134',	'Rostov',	'Moscow',	'1900-01-01 15:42:00',	'1900-01-01 17:39:00'),
(1188,	1,	'TU-134',	'Moscow',	'Rostov',	'1900-01-01 22:50:00',	'1900-01-01 00:48:00'),
(1195,	1,	'TU-154',	'Rostov',	'Moscow',	'1900-01-01 23:30:00',	'1900-01-01 01:11:00'),
(1196,	1,	'TU-154',	'Moscow',	'Rostov',	'1900-01-01 04:00:00',	'1900-01-01 05:45:00'),
(7771,	5,	'Boeing',	'London',	'Singapore',	'1900-01-01 01:00:00',	'1900-01-01 11:00:00'),
(7772,	5,	'Boeing',	'Singapore',	'London',	'1900-01-01 12:00:00',	'1900-01-01 02:00:00'),
(7773,	5,	'Boeing',	'London',	'Singapore',	'1900-01-01 03:00:00',	'1900-01-01 13:00:00'),
(7774,	5,	'Boeing',	'Singapore',	'London',	'1900-01-01 14:00:00',	'1900-01-01 06:00:00'),
(7775,	5,	'Boeing',	'London',	'Singapore',	'1900-01-01 09:00:00',	'1900-01-01 20:00:00'),
(7776,	5,	'Boeing',	'Singapore',	'London',	'1900-01-01 18:00:00',	'1900-01-01 08:00:00'),
(7777,	5,	'Boeing',	'London',	'Singapore',	'1900-01-01 18:00:00',	'1900-01-01 06:00:00'),
(7778,	5,	'Boeing',	'Singapore',	'London',	'1900-01-01 22:00:00',	'1900-01-01 12:00:00'),
(8881,	5,	'Boeing',	'London',	'Paris',	'1900-01-01 03:00:00',	'1900-01-01 04:00:00'),
(8882,	5,	'Boeing',	'Paris',	'London',	'1900-01-01 22:00:00',	'1900-01-01 23:00:00');

-- 2018-11-27 04:27:51
