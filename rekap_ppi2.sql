/*
SQLyog Ultimate v10.00 Beta1
MySQL - 5.6.16 : Database - rekap_ppi
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`rekap_ppi` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `rekap_ppi`;

/*Table structure for table `tb_harian` */

DROP TABLE IF EXISTS `tb_harian`;

CREATE TABLE `tb_harian` (
  `id_pas` int(10) NOT NULL AUTO_INCREMENT,
  `no_rm` varchar(20) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `nama_pas` varchar(100) DEFAULT NULL,
  `jekel` varchar(20) DEFAULT NULL,
  `tindakan` varchar(100) DEFAULT NULL,
  `tindakan2` varchar(100) DEFAULT NULL,
  `tindakan3` varchar(100) DEFAULT NULL,
  `infeksi` varchar(100) DEFAULT NULL,
  `kd_ruang` varchar(5) DEFAULT NULL,
  `kultur` varchar(100) DEFAULT NULL,
  `antibiotik` varchar(100) DEFAULT NULL,
  `ruangan` varchar(20) DEFAULT NULL,
  `umur` varchar(3) DEFAULT NULL,
  `diagnosa` varchar(200) DEFAULT NULL,
  `decubitus` varchar(200) DEFAULT NULL,
  `tirah` varchar(100) DEFAULT NULL,
  `tindakan4` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_pas`)
) ENGINE=InnoDB AUTO_INCREMENT=54 DEFAULT CHARSET=latin1;

/*Data for the table `tb_harian` */

insert  into `tb_harian`(`id_pas`,`no_rm`,`tanggal`,`nama_pas`,`jekel`,`tindakan`,`tindakan2`,`tindakan3`,`infeksi`,`kd_ruang`,`kultur`,`antibiotik`,`ruangan`,`umur`,`diagnosa`,`decubitus`,`tirah`,`tindakan4`) values (24,NULL,'2016-10-30','Nasrul Khakim','Laki-Laki','UC','UC','','','01','OKE','OKE',NULL,'25','DM','Ya','Ya',NULL),(25,NULL,'2016-10-27','Udin','Laki-Laki','UC','UC','','','01','OKE','OKE',NULL,'35','DM','Ya','Ya',NULL),(26,NULL,'2016-10-27','Unik','Perempuan','IVL',NULL,'','','01','OKE','OKE',NULL,'23','DM','Ya','Ya',NULL),(27,NULL,'2016-10-27','Ratna','Perempuan','ETT/V',NULL,NULL,'VAP','01','OKE','OKE',NULL,'24','DM','Ya','Ya',NULL),(28,NULL,'2016-10-27','Nasar','Laki-Laki','OP','UC','','IDO','01','OKE','OKE',NULL,'43','DM','Ya','Ya',NULL),(29,NULL,'2016-10-27','Nikmah','Perempuan','OP','','','IDO','01','OKE','OKE',NULL,'75','Typoid','Ya','Ya',NULL),(30,NULL,'2016-10-27','Fafa','Perempuan','OP','','UC','IDO','04','OKE','OKE',NULL,'12','DM','Ya','Ya',NULL),(31,NULL,'2016-10-27','Riski','Laki-Laki','OP','','','IDO','04','OKE','OKE',NULL,'45','DM','Ya','Ya',NULL),(32,NULL,'2016-10-27','Rina','Perempuan','ETT/V','UC','UC','','04','OKE','OKE',NULL,'34','Tipoid','Ya','Ya',NULL),(33,NULL,'2016-10-27','Galih','Perempuan','IVL','','','','04','OKE','OKE',NULL,'22','Tipoid','Ya','Ya',NULL),(34,NULL,'2016-10-28','Rida','Perempuan','ETT/V','','UC','VAP','01','OKE','OKE',NULL,'45','DM','Ya','Ya',NULL),(35,NULL,'2016-10-28','Fika','Perempuan','ETT/V','UC','UC','VAP','01','OKE','OKE',NULL,'43','II','Ya','Ya',NULL),(36,NULL,'2016-10-28','LOKI','Perempuan','ETT','','UC','VAP','01','OKE','OKE',NULL,'76','DM','Ya','Ya',NULL),(37,NULL,'2016-10-29','Dian','Perempuan','ETT','','UC','VAP','01','','Metronidazole',NULL,'20','DM','Ya','Ya',NULL),(38,NULL,'2016-10-29','Ahmad, Tn','Laki-Laki','UC','','UC','','01','','ceftriaxon, gentamicyn,',NULL,'35 ','febris Thypoid','Tidak','Tidak',NULL),(39,NULL,'2016-10-29','Aisyah, Ny','Perempuan','IVL','UC','','','06','','cefotaxime',NULL,'45 ','DM','Tidak','Ya',NULL),(40,NULL,'2016-10-29','Aisyah, Ny','Perempuan','IVL','','UC','','06','','cefotaxime',NULL,'45 ','DM','Tidak','Ya',NULL),(41,NULL,'2016-10-29','Aisyah, Ny','Perempuan','IVL','','','PLEB','06','','cefotaxime',NULL,'45 ','DM','Tidak','Ya',NULL),(42,NULL,'2016-10-29','gilang An','Laki-Laki','IVL','UC','UC','','02','','clatax',NULL,'3th','GE','Tidak','Tidak',NULL),(43,NULL,'2016-10-29','yunita An','Perempuan','IVL','','','PLEB','02','','taxegram,claneksi',NULL,'10 ','febris Thypoid','Tidak','Tidak',NULL),(44,NULL,'2016-10-29','sulistiowati ny','Perempuan','OP','','','','03','','ceftriaxon',NULL,'55 ','ulcus DM','Tidak','Ya',NULL),(45,NULL,'2016-10-29','Heru Tn','Laki-Laki','OP','UC','','IDO','03','','cefotaxim',NULL,'35 ','appendicitis','Tidak','Ya',NULL),(46,NULL,'2016-10-29','sari','Perempuan','OP','','','','04','','cefotaxim',NULL,' 23','post sc','Tidak','Ya',NULL),(47,NULL,'2016-10-29','eva by','Laki-Laki','IVL','','','PLEB','05','','cefotaxime',NULL,'3 h','aspixia','Tidak','Tidak',NULL),(48,NULL,'2016-10-29','dwi by','Perempuan','IVL','UC','','','05','','cefotaxime',NULL,'2 h','infeksi neonatal','Tidak','Tidak',NULL),(49,NULL,'2016-10-29','munari, Tn ','Laki-Laki','IVL','','','','01','','cefuroxime',NULL,'60 ','pneumonia','Tidak','Tidak',NULL),(50,'3456','2016-10-30','UNIK','Laki-Laki','UC','UC','','','01','OKE','cefotaxim',NULL,'34','DM','Ya','Ya',NULL),(51,'165756','2016-10-30','Kimin','Laki-Laki','UC','','','','01','OKe','OKE',NULL,'23','DM','Ya','Ya',NULL),(52,'1432','2016-10-31','Oon','Laki-Laki','UC','0','OP','','01','oke','oke',NULL,'25','DM','Ya','Ya','0'),(53,'98989','2016-10-31','MOSWANTED','Laki-Laki','UC','0','OP','','01','oke','ok',NULL,'20','DM','Ya','Ya','0');

/*Table structure for table `tb_harian_op` */

DROP TABLE IF EXISTS `tb_harian_op`;

CREATE TABLE `tb_harian_op` (
  `id_pas` int(11) NOT NULL AUTO_INCREMENT,
  `tgl_masuk` date DEFAULT NULL,
  `tgl_keluar` date DEFAULT NULL,
  `tindakan` varchar(100) DEFAULT NULL,
  `jenis_op` varchar(10) DEFAULT NULL,
  `klasifikasi` varchar(10) DEFAULT NULL,
  `waktu` int(11) DEFAULT NULL,
  `antibiotik` varchar(100) DEFAULT NULL,
  `keterangan` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id_pas`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tb_harian_op` */

/*Table structure for table `tb_ruangan` */

DROP TABLE IF EXISTS `tb_ruangan`;

CREATE TABLE `tb_ruangan` (
  `kd_ruang` varchar(5) NOT NULL,
  `ruangan` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`kd_ruang`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tb_ruangan` */

insert  into `tb_ruangan`(`kd_ruang`,`ruangan`) values ('01','Marwah'),('02','Mina'),('03','Arofah'),('04','Shofa'),('05','Perinatologi'),('06','ICU'),('07','Poliklinik');

/*Table structure for table `tb_user` */

DROP TABLE IF EXISTS `tb_user`;

CREATE TABLE `tb_user` (
  `id_user` varchar(2) NOT NULL,
  `nama_user` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `kd_ruang` varchar(5) DEFAULT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tb_user` */

insert  into `tb_user`(`id_user`,`nama_user`,`password`,`kd_ruang`) values ('1','marwah','marwah','01'),('2','mina','mina','02'),('3','shofa','shofa','04'),('4','arofah','arofah','03'),('5','icu','icu','06'),('6','perina','perina','05'),('7','poli','poli','07');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
