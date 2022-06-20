/*
SQLyog Professional v13.1.1 (64 bit)
MySQL - 10.4.24-MariaDB : Database - oleo
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`oleo` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

USE `oleo`;

/*Table structure for table `products` */

DROP TABLE IF EXISTS `products`;

CREATE TABLE `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `productName` varchar(100) DEFAULT NULL,
  `productType` varchar(30) DEFAULT NULL,
  `productImageURL` text DEFAULT NULL,
  `modelCode` varchar(20) DEFAULT NULL,
  `productDescription` text DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQUE` (`modelCode`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4;

/*Data for the table `products` */

insert  into `products`(`id`,`productName`,`productType`,`productImageURL`,`modelCode`,`productDescription`) values 
(1,'OMBA-01-C-10','Relief Valve',NULL,'OMBA-01-C-10','This valve is used in hydraulic system to prevent damage due to over pressure and to adjust the maximum system pressure\r\n\r\nCan have max pressure , max flow'),
(2,'OMBA-01-H-10\r\n','Relief Valve',NULL,'OMBA-01-H-10','This valve is used in hydraulic system to prevent damage due to over pressure and to adjust the maximum system pressure\r\n\r\nCan have max pressure , max flow'),
(3,'DSG-03-2D2-A240-N1-50','Direction Valve','images/DSG-03-2D2-A240-N1-50.png','DSG-03-2D2-A240-N1-5','DCVs allow fluid flow (hydraulic oil, water or air) into different paths from one or more sources\r\n'),
(7,'abvnvc','Relief Valve',NULL,'abc','bcdd');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
