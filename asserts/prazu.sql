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
  `modified` datetime DEFAULT NULL,
  `package_id` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_admin` */

insert  into `tbl_admin`(`id`,`name`,`email`,`password`,`mob_num`,`admin_level`,`created_by`,`created`,`admin_last_login`,`address`,`modified`,`package_id`,`status`) values (1,'admin','admin@gmail.com','827ccb0eea8a706c4c34a16891f84e7b',NULL,'1',NULL,NULL,'2019-08-01 02:53:04',NULL,NULL,NULL,1),(3,'subadmin','subadmin@gmail.com','e10adc3949ba59abbe56e057f20f883e','9745632111','0','1','2019-07-30 14:48:36','2019-08-01 02:53:04',NULL,NULL,7,1),(4,'kitchen','kitchen@gmail.com','e10adc3949ba59abbe56e057f20f883e','9100704080','2','3','2019-07-30 14:53:19','2019-08-01 02:53:04','wdwqd\r\nwqdqwd',NULL,NULL,0),(5,'shailaja','sasdas@gmail.com','d41d8cd98f00b204e9800998ecf8427e','9100704080','2','3','2019-07-31 15:48:26','2019-08-01 02:53:04','wdwqd\r\nwqdqwd',NULL,NULL,0),(6,'shailu','aaaa@gmail.com','d41d8cd98f00b204e9800998ecf8427e','7896543211','2','3','2019-07-31 15:50:37','2019-08-01 02:53:04','testing',NULL,NULL,1),(7,'shailu','aaaa@gmail.com','d41d8cd98f00b204e9800998ecf8427e','7896543211','2','3','2019-07-31 15:50:37','2019-08-01 02:53:04','testing',NULL,NULL,1),(8,'bfjsdj','emfnnwje@gmail.com','dbb518e71882a7f2a6fb90b9abab3390','9876543211','0','1','2019-07-31 15:52:09','2019-08-01 02:53:04',NULL,NULL,12,0);

/*Table structure for table `tbl_banner` */

DROP TABLE IF EXISTS `tbl_banner`;

CREATE TABLE `tbl_banner` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `banner` varchar(255) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `banner_title` varchar(255) DEFAULT NULL,
  `delete` varchar(1) DEFAULT 'N',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tbl_banner` */

/*Table structure for table `tbl_billing` */

DROP TABLE IF EXISTS `tbl_billing`;

CREATE TABLE `tbl_billing` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `suba_id` int(11) DEFAULT NULL,
  `holder_name` varchar(255) DEFAULT NULL,
  `account_num` varchar(255) DEFAULT NULL,
  `ifsc_code` varchar(255) DEFAULT NULL,
  `created_by` varchar(255) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_billing` */

insert  into `tbl_billing`(`id`,`suba_id`,`holder_name`,`account_num`,`ifsc_code`,`created_by`,`created`,`modified`) values (1,2,'hghfj','54564665','54645','2','2019-07-27 07:29:24',NULL);

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
  `barcode` varchar(255) DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_menu` */

insert  into `tbl_menu`(`id`,`suba_id`,`category`,`sub_cat`,`item_name`,`quantity`,`prise`,`created_by`,`created`,`barcode`,`modified`) values (1,2,'biryani','chicken biryani','biryani','half','120','2','2019-07-27 07:50:05','156420660585743.png',NULL);

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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_offerndeal` */

insert  into `tbl_offerndeal`(`id`,`suba_id`,`offer_type`,`item`,`ofer_des`,`image`,`created_by`,`created`) values (1,2,'zomoto','gg','sgg','offer-771-Lighthouse.jpg','2',NULL);

/*Table structure for table `tbl_orders` */

DROP TABLE IF EXISTS `tbl_orders`;

CREATE TABLE `tbl_orders` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `r_id` int(11) DEFAULT NULL,
  `k_id` int(11) DEFAULT NULL,
  `t_id` int(11) DEFAULT NULL,
  `item_name` varchar(255) DEFAULT NULL,
  `item_type` varchar(255) DEFAULT NULL,
  `quantity` varchar(255) DEFAULT NULL,
  `prise` varchar(255) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_orders` */

insert  into `tbl_orders`(`id`,`r_id`,`k_id`,`t_id`,`item_name`,`item_type`,`quantity`,`prise`,`status`,`created_by`,`created`) values (1,NULL,4,1,'Lollypup','non veg','2','500',0,NULL,NULL),(2,NULL,4,1,'Lollypup','non veg','2','500',0,NULL,NULL);

/*Table structure for table `tbl_packages` */

DROP TABLE IF EXISTS `tbl_packages`;

CREATE TABLE `tbl_packages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `package_name` varchar(255) DEFAULT NULL,
  `cost_package` varchar(255) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `billing` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_packages` */

insert  into `tbl_packages`(`id`,`package_name`,`cost_package`,`created_by`,`created`,`billing`) values (7,'Tablet','2500',1,'2019-07-27 15:56:10','2'),(8,'Tablet + Printer','3125',1,'2019-07-27 15:58:02','2'),(9,'Tablet + Printer + swipe','3750',1,'2019-07-27 15:59:08','2'),(10,'Tablet','2833',1,'2019-07-27 16:00:16','1'),(11,'Tablet + Printer','3542',1,'2019-07-27 16:00:59','1'),(12,'Tablet + Printer + swipe','4250',1,'2019-07-27 16:01:27','1');

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
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_table` */

insert  into `tbl_table`(`id`,`suba_id`,`floor_num`,`table_name`,`num_of_seats`,`created_by`,`created`,`barcode`) values (1,2,'1','1','4',NULL,NULL,'156414083831734.png'),(2,2,'1','2','4',NULL,NULL,'156420721742761.png'),(3,2,'1','3','6',NULL,NULL,'156420733558713.png'),(4,2,'1','4','6',NULL,NULL,'156420737557693.png');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
