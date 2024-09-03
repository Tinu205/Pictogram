--yeah i know this is unsafe and this is where database update shoud be pasted
-- Adminer 4.8.1 MySQL 8.0.39-0ubuntu0.22.04.1 dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

SET NAMES utf8mb4;

DROP TABLE IF EXISTS `auth`;
CREATE TABLE `auth` (
  `account no` int NOT NULL AUTO_INCREMENT,
  `email` varchar(30) NOT NULL,
  `password` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `username` varchar(30) NOT NULL,
  PRIMARY KEY (`account no`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;


DROP TABLE IF EXISTS `log_cred`;
CREATE TABLE `log_cred` (
  `sl.no` int NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`sl.no`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

INSERT INTO `log_cred` (`sl.no`, `username`, `password`) VALUES
(1,	'root ',	'rootpass'),
(2,	'user1',	'user1pass');

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `accuont no` int NOT NULL,
  `bio` longtext NOT NULL,
  `avatar` varchar(1024) NOT NULL,
  `firstname` int NOT NULL,
  `dob` date NOT NULL,
  `links` varchar(1024) DEFAULT NULL,
  KEY `accuont no` (`accuont no`),
  CONSTRAINT `users_ibfk_1` FOREIGN KEY (`accuont no`) REFERENCES `auth` (`account no`) ON DELETE RESTRICT
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;


-- 2024-08-31 18:05:51

