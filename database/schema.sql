DROP DATABASE IF EXISTS `cm2026`;

CREATE DATABASE `cm2026` DEFAULT CHARACTER SET 'utf8mb4' DEFAULT COLLATE 'utf8mb4_general_ci';

USE `cm2026`;


CREATE TABLE users(
   `id_user` INT AUTO_INCREMENT,
   `email` VARCHAR(150)  NOT NULL,
   `password` VARCHAR(255)  NOT NULL,
   `display_name` VARCHAR(100)  NOT NULL,
   `created_at` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
   `role` TINYINT NOT NULL,
   `deleted_at` DATETIME,
   PRIMARY KEY(id_user),
   UNIQUE(email)
);

CREATE TABLE groups(
   `id_group` INT AUTO_INCREMENT,
   `name` CHAR(1)  NOT NULL,
   PRIMARY KEY(id_group),
   UNIQUE(name)
);

CREATE TABLE stadiums(
   `id_stadium` INT AUTO_INCREMENT,
   `name` VARCHAR(100)  NOT NULL,
   `city` VARCHAR(100)  NOT NULL,
   `country` VARCHAR(100)  NOT NULL,
   PRIMARY KEY(id_stadium)
);

CREATE TABLE teams(
   `id_team` INT AUTO_INCREMENT,
   `country_name` VARCHAR(100)  NOT NULL,
   `fifa_code` CHAR(3)  NOT NULL,
   `url_flag` VARCHAR(255) ,
   `fifa_ranking` INT,
   `id_group` INT NOT NULL,
   PRIMARY KEY(id_team),
   UNIQUE(fifa_code),
   UNIQUE(fifa_ranking),
   FOREIGN KEY(id_group) REFERENCES groups(id_group)
);

CREATE TABLE matchs(
   `id_match` INT AUTO_INCREMENT,
   `date_time` DATETIME,
   `home_score` TINYINT,
   `away_score` TINYINT,
   `phase` TINYINT,
   `status` TINYINT,
   `id_team1` INT NOT NULL,
   `id_stadium` INT NOT NULL,
   `id_team2` INT NOT NULL,
   PRIMARY KEY(`id_match`),
   FOREIGN KEY(`id_team1`) REFERENCES `teams`(`id_team`),
   FOREIGN KEY(`id_stadium`) REFERENCES `stadiums`(`id_stadium`),
   FOREIGN KEY(`id_team2`) REFERENCES `teams`(`id_team`)
);
