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
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_admin` */

insert  into `tbl_admin`(`id`,`name`,`email`,`password`,`mob_num`,`admin_level`,`created_by`,`created`,`admin_last_login`,`address`) values (1,'admin','admin@gmail.com','e10adc3949ba59abbe56e057f20f883e',NULL,'1','1','2019-07-22 17:32:08','2019-07-24 10:26:36',NULL),(2,'shailum','shailaja@gmail.com','e10adc3949ba59abbe56e057f20f883e','9154572708','0',NULL,'2019-07-22 15:22:01','2019-07-24 10:26:36','Addressff'),(3,'shailaja','shailajaw@gmail.com',NULL,'9154572704','0',NULL,'2019-07-22 17:25:57','2019-07-24 10:26:36',NULL),(4,'shailaja','shaildfu@gmail.com',NULL,'9100704080','0',NULL,'2019-07-22 17:31:31','2019-07-24 10:26:36',NULL),(5,'qwdqwd','dwdd@gmail.com',NULL,'9100704080','0',NULL,'2019-07-22 17:31:43','2019-07-24 10:26:36',NULL),(6,'shailum','shailaja@gmail.com',NULL,'9154572708',NULL,NULL,NULL,'2019-07-24 10:26:36','Addressff'),(7,'shailum','shailaja@gmail.com',NULL,'9154572708',NULL,NULL,NULL,'2019-07-24 10:26:36','Addressff');

/*Table structure for table `tbl_menu` */

DROP TABLE IF EXISTS `tbl_menu`;

CREATE TABLE `tbl_menu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `suba_id` int(11) DEFAULT NULL,
  `category` varchar(255) DEFAULT NULL,
  `sub_cat` varchar(255) DEFAULT NULL,
  `item_name` varchar(255) DEFAULT NULL,
  `quantity` varchar(255) DEFAULT NULL,
  `prise` varchar(255) DEFAULT NULL,
  `created_by` varchar(255) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_menu` */

insert  into `tbl_menu`(`id`,`suba_id`,`category`,`sub_cat`,`item_name`,`quantity`,`prise`,`created_by`,`created`) values (1,2,'aa','cz','asas','half','as','2',NULL),(2,2,'biryani','plain','biryani hyd','full','150','2',NULL);

/*Table structure for table `tbl_offerndeal` */

DROP TABLE IF EXISTS `tbl_offerndeal`;

CREATE TABLE `tbl_offerndeal` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `suba_id` int(11) DEFAULT NULL,
  `offer_type` varchar(255) DEFAULT NULL,
  `item` varchar(255) DEFAULT NULL,
  `ofer_des` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_by` varchar(255) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_offerndeal` */

insert  into `tbl_offerndeal`(`id`,`suba_id`,`offer_type`,`item`,`ofer_des`,`image`,`created_by`,`created`) values (3,2,'trwe','esefsd','sdgg','offer-208-Lighthouse.jpg','2',NULL),(4,2,'rr','rewr','efdsf','offer-369-Penguins.jpg','2',NULL);

/*Table structure for table `tbl_table` */

DROP TABLE IF EXISTS `tbl_table`;

CREATE TABLE `tbl_table` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `suba_id` int(11) DEFAULT NULL,
  `floor_num` varchar(255) DEFAULT NULL,
  `table_name` varchar(255) DEFAULT NULL,
  `num_of_seats` varchar(255) DEFAULT NULL,
  `created_by` varchar(255) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `barcode` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_table` */

insert  into `tbl_table`(`id`,`suba_id`,`floor_num`,`table_name`,`num_of_seats`,`created_by`,`created`,`barcode`) values (16,2,'32','3','2',NULL,NULL,NULL),(17,2,'32','3','2',NULL,NULL,NULL),(18,2,'4','3','23',NULL,NULL,NULL),(19,2,'2','5','3',NULL,NULL,'1563957286.png'),(20,2,'32','af','2',NULL,NULL,'1563957320.png'),(21,2,'32','3','2',NULL,NULL,'14302'),(22,2,'32','af','2',NULL,NULL,'156396008742625.png'),(23,2,'32','3','55',NULL,NULL,'1563960158.png'),(24,2,'32','43','2',NULL,NULL,'156396017629871.png'),(25,2,'32','3','2',NULL,NULL,'156396030478.png'),(26,2,'32','3','2',NULL,NULL,'156396062181366.png'),(27,2,'32','3','2',NULL,NULL,'156396065311300.png');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
