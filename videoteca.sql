/*
SQLyog Enterprise - MySQL GUI v6.07
Host - 5.0.51b-community-nt-log : Database - videoteca
*********************************************************************
Server version : 5.0.51b-community-nt-log
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

create database if not exists `videoteca`;

USE `videoteca`;

/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

/*Table structure for table `movies` */

DROP TABLE IF EXISTS `movies`;

CREATE TABLE `movies` (
  `id_movie` int(11) NOT NULL auto_increment,
  `titulo` varchar(30) default NULL,
  `actores` varchar(90) default NULL,
  `anno` year(4) default NULL,
  `director` varchar(25) default NULL,
  `estudio` varchar(25) default NULL,
  `genero` varchar(60) default NULL,
  `idiomas` varchar(30) default NULL,
  `formato` varchar(5) default NULL,
  `ubicacion` varchar(25) default NULL,
  `categoria` varchar(25) default NULL,
  `portada` blob,
  PRIMARY KEY  (`id_movie`),
  KEY `id_movie` (`id_movie`,`titulo`,`actores`,`director`,`estudio`,`genero`,`idiomas`,`formato`,`ubicacion`,`categoria`),
  KEY `titulo` (`titulo`,`actores`,`anno`,`director`,`estudio`,`genero`,`idiomas`,`formato`,`ubicacion`,`categoria`)
) ENGINE=MyISAM AUTO_INCREMENT=61 DEFAULT CHARSET=utf8;

/*Data for the table `movies` */

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
