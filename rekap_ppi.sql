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
  `tanggal` date DEFAULT NULL,
  `nama_pas` varchar(100) DEFAULT NULL,
  `jekel` varchar(20) DEFAULT NULL,
  `tindakan` varchar(100) DEFAULT NULL,
  `infeksi` varchar(100) DEFAULT NULL,
  `tirah` varchar(100) DEFAULT NULL,
  `kultur` varchar(100) DEFAULT NULL,
  `antibiotik` varchar(100) DEFAULT NULL,
  `ruangan` varchar(20) DEFAULT NULL,
  `umur` varchar(3) DEFAULT NULL,
  `diagnosa` varchar(200) DEFAULT NULL,
  `decubitus` varchar(200) DEFAULT NULL,
  `kd_ruang` varchar(5) DEFAULT NULL,
  PRIMARY KEY (`id_pas`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;

/*Data for the table `tb_harian` */

insert  into `tb_harian`(`id_pas`,`tanggal`,`nama_pas`,`jekel`,`tindakan`,`infeksi`,`tirah`,`kultur`,`antibiotik`,`ruangan`,`umur`,`diagnosa`,`decubitus`,`kd_ruang`) values (17,'2016-10-22','sadsa','Perempuan','UC','ISK','Ya','asd','xcvxcv',NULL,'45','asdad','Ya','07'),(18,'2016-10-22','asdasd','Perempuan','OP','PLEB','Tidak','cxv','vbn',NULL,'56','asdsad','Ya','07'),(19,'2016-10-22','mnbmbnm','Perempuan','IVL','IDO','Tidak','sdfds','sdfsdf',NULL,'45','safdsfs','Ya','01'),(20,'2016-10-22','tyutyu','Perempuan','IVL','PLEB','Ya','vbnvn','vbnvb',NULL,'45','gfhfgh','Ya','01'),(21,'2016-10-24','asdasjkdhashd','Perempuan','IVL','IDO','Tidak','sadas','sadas',NULL,'78','dsadasd','Tidak','07'),(22,'2016-10-26','asdsd','Laki-Laki','UC','','Ya','sadsa','asdad',NULL,'87','sad','Ya','01');

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
