/*
SQLyog Community v11.52 (64 bit)
MySQL - 10.1.37-MariaDB : Database - prazu
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`prazu` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `prazu`;

/*Table structure for table `tbl_admin` */

DROP TABLE IF EXISTS `tbl_admin`;

CREATE TABLE `tbl_admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `mob_num` varchar(255) DEFAULT NULL,
  `admin_level` varchar(255) DEFAULT NULL,
  `created_by` varchar(255) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `admin_last_login` datetime DEFAULT NULL,
  `address` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_admin` */

insert  into `tbl_admin`(`id`,`name`,`email`,`password`,`mob_num`,`admin_level`,`created_by`,`created`,`admin_last_login`,`address`) values (1,'admin','admin@gmail.com','e10adc3949ba59abbe56e057f20f883e',NULL,'1','1','2019-07-22 17:32:08','2019-07-23 03:00:07',NULL),(2,'shailum','shailaja@gmail.com','e10adc3949ba59abbe56e057f20f883e','9154572708','0',NULL,'2019-07-22 15:22:01','2019-07-23 03:00:07','Addressff'),(3,'shailaja','shailajaw@gmail.com',NULL,'9154572704','0',NULL,'2019-07-22 17:25:57','2019-07-23 03:00:07',NULL),(4,'shailaja','shaildfu@gmail.com',NULL,'9100704080','0',NULL,'2019-07-22 17:31:31','2019-07-23 03:00:07',NULL),(5,'qwdqwd','dwdd@gmail.com',NULL,'9100704080','0',NULL,'2019-07-22 17:31:43','2019-07-23 03:00:07',NULL);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
