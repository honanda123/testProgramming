/*
SQLyog Ultimate v12.5.1 (32 bit)
MySQL - 8.0.31 : Database - db_produksi
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`id20918355_db_produksi`;

USE `id20918355_db_produksi`;

/*Table structure for table `m_barang` */

DROP TABLE IF EXISTS `m_barang`;

CREATE TABLE `m_barang` (
  `id` int NOT NULL AUTO_INCREMENT,
  `kode` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `harga` decimal(10,0) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

/*Data for the table `m_barang` */

insert  into `m_barang`(`id`,`kode`,`nama`,`harga`) values 
(1,'B001','Barang A',200000),
(2,'B002','Barang B',300000);

/*Table structure for table `m_customer` */

DROP TABLE IF EXISTS `m_customer`;

CREATE TABLE `m_customer` (
  `id` int NOT NULL AUTO_INCREMENT,
  `kode` varchar(10) DEFAULT NULL,
  `name` varchar(100) DEFAULT NULL,
  `telp` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

/*Data for the table `m_customer` */

insert  into `m_customer`(`id`,`kode`,`name`,`telp`) values 
(1,'C001','Ananda','0812345678'),
(2,'C002','Aprilia','0897654321');

/*Table structure for table `t_sales` */

DROP TABLE IF EXISTS `t_sales`;

CREATE TABLE `t_sales` (
  `id` int NOT NULL AUTO_INCREMENT,
  `kode` varchar(15) DEFAULT NULL,
  `tgl` datetime DEFAULT NULL,
  `cust_id` int DEFAULT NULL,
  `subtotal` decimal(10,0) DEFAULT NULL,
  `diskon` decimal(10,0) DEFAULT NULL,
  `ongkir` decimal(10,0) DEFAULT NULL,
  `total_bayar` decimal(10,0) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `cust_id` (`cust_id`),
  CONSTRAINT `t_sales_ibfk_1` FOREIGN KEY (`cust_id`) REFERENCES `m_customer` (`id`) ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

/*Data for the table `t_sales` */

/*Table structure for table `t_sales_det` */

DROP TABLE IF EXISTS `t_sales_det`;

CREATE TABLE `t_sales_det` (
  `sales_id` int DEFAULT NULL,
  `barang_id` int DEFAULT NULL,
  `harga_bandrol` decimal(10,0) DEFAULT NULL,
  `diskon_pct` decimal(10,0) DEFAULT NULL,
  `diskon_nilai` decimal(10,0) DEFAULT NULL,
  `harga_diskon` decimal(10,0) DEFAULT NULL,
  `total` decimal(10,0) DEFAULT NULL,
  KEY `sales_id` (`sales_id`),
  KEY `barang_id` (`barang_id`),
  CONSTRAINT `t_sales_det_ibfk_1` FOREIGN KEY (`sales_id`) REFERENCES `t_sales` (`id`) ON UPDATE CASCADE,
  CONSTRAINT `t_sales_det_ibfk_2` FOREIGN KEY (`barang_id`) REFERENCES `m_barang` (`id`) ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

/*Data for the table `t_sales_det` */

/*Table structure for table `user` */

DROP TABLE IF EXISTS `user`;

CREATE TABLE `user` (
  `id_user` int NOT NULL AUTO_INCREMENT,
  `nama_lengkap` varchar(50) DEFAULT NULL,
  `no_hp` varchar(20) DEFAULT NULL,
  `username` varchar(15) DEFAULT NULL,
  `password` varchar(10) DEFAULT NULL,
  `level` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

/*Data for the table `user` */

insert  into `user`(`id_user`,`nama_lengkap`,`no_hp`,`username`,`password`,`level`) values 
(1,'admin','0812341334','admin','123','admin');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
