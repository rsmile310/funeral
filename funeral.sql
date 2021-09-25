/*
SQLyog Community v13.1.7 (64 bit)
MySQL - 10.4.19-MariaDB : Database - funeral
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`funeral` /*!40100 DEFAULT CHARACTER SET utf8 */;

USE `funeral`;

/*Table structure for table `news_tbl` */

DROP TABLE IF EXISTS `news_tbl`;

CREATE TABLE `news_tbl` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Title` text DEFAULT NULL,
  `Summary` text DEFAULT NULL,
  `Matter` text DEFAULT NULL,
  `Image` text DEFAULT NULL,
  `Status` int(11) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8;

/*Data for the table `news_tbl` */

/*Table structure for table `obitury_tbl` */

DROP TABLE IF EXISTS `obitury_tbl`;

CREATE TABLE `obitury_tbl` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(50) DEFAULT NULL,
  `Age` varchar(11) DEFAULT NULL,
  `OccuringDate` varchar(30) DEFAULT NULL,
  `FuneralPlace` varchar(100) DEFAULT NULL,
  `BurialPlace` varchar(100) DEFAULT NULL,
  `FuneralDate` varchar(55) DEFAULT NULL,
  `FuneralTime` varchar(55) DEFAULT NULL,
  `BurialDate` varchar(55) DEFAULT NULL,
  `BurialTime` varchar(55) DEFAULT NULL,
  `Email` varchar(50) DEFAULT NULL,
  `Image` text DEFAULT NULL,
  `Status` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=76 DEFAULT CHARSET=utf8;

/*Data for the table `obitury_tbl` */

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
