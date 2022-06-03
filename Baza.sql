DROP DATABASE IF EXISTS `bookStore`;
CREATE DATABASE `bookStore` ;
USE `bookStore`;

DROP TABLE IF EXISTS `knjige`;

CREATE TABLE `knjige` (
  `id_knjige` int(11) NOT NULL AUTO_INCREMENT,
  `naslov` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `autor` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `izdavac` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `godina_izdavanja` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `cena` float(11) NOT NULL,
  `id_zanra` int(5) NOT NULL,
  PRIMARY KEY (`id_knjige`),
  KEY `id_zanra` (`id_zanra`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

insert  into `knjige`(`id_knjige`,`naslov`,`autor`,`izdavac`,`godina_izdavanja`,`cena`,`id_zanra`) values 
(10,'Blink','Malcolm Gladwell','PENGUIN','2005.',1355.75,5);




DROP TABLE IF EXISTS `zanr_knjige`;

CREATE TABLE `zanr_knjige` (
  `id_zanra` int(5) NOT NULL,
  `naziv_zanra` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id_zanra`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

insert  into `zanr_knjige`(`id_zanra`,`naziv_zanra`) values 
(1,'Roman'),
(2,'Biografija'),
(3,'Autobiografija'),
(4,'Naucna fantastika'),
(5,'Psihologija'),
(6,'Filozofija'),
(7,'Horor'),
(8,'Knjige za decu'),
(9,'Triler'),
(10,'Komedija');