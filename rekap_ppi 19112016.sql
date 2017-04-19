/*
SQLyog Ultimate v10.00 Beta1
MySQL - 5.6.20 : Database - rekap_ppi
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

/*Table structure for table `tb_analisa` */

DROP TABLE IF EXISTS `tb_analisa`;

CREATE TABLE `tb_analisa` (
  `kd_analisa` int(11) NOT NULL AUTO_INCREMENT,
  `analisa` text,
  `kd_ruang` varchar(5) DEFAULT NULL,
  `kd_inmut` varchar(10) DEFAULT NULL,
  `jml_num` int(11) DEFAULT NULL,
  `jml_denum` int(11) DEFAULT NULL,
  `tanggal_awal` date DEFAULT NULL,
  `tanggal_akhir` date DEFAULT NULL,
  PRIMARY KEY (`kd_analisa`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `tb_analisa` */

insert  into `tb_analisa`(`kd_analisa`,`analisa`,`kd_ruang`,`kd_inmut`,`jml_num`,`jml_denum`,`tanggal_awal`,`tanggal_akhir`) values (1,'asdasd','01','0',96,190,NULL,NULL),(2,'asdasd','01','0',96,190,NULL,NULL),(3,'asdasd','01','0',96,190,NULL,NULL);

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
) ENGINE=InnoDB AUTO_INCREMENT=64 DEFAULT CHARSET=latin1;

/*Data for the table `tb_harian` */

insert  into `tb_harian`(`id_pas`,`no_rm`,`tanggal`,`nama_pas`,`jekel`,`tindakan`,`tindakan2`,`tindakan3`,`infeksi`,`kd_ruang`,`kultur`,`antibiotik`,`ruangan`,`umur`,`diagnosa`,`decubitus`,`tirah`,`tindakan4`) values (52,'1432','2016-10-31','Oon','Laki-Laki','UC','0','OP','','01','oke','oke',NULL,'25','DM','Ya','Ya','0'),(53,'98989','2016-10-31','MOSWANTED','Laki-Laki','UC','0','OP','','01','oke','ok',NULL,'20','DM','Ya','Ya','0'),(54,'123456','2016-09-08','A','Laki-Laki','UC','IVL','0','','07','dc','dc',NULL,'23','dc','Ya','Ya','0'),(55,'123456','2016-06-02','D','Laki-Laki','UC','0','0','','07','D','D',NULL,'90','DM','Ya','Ya','0'),(56,'09876767','2016-11-08','Ruki','Laki-Laki','0','0','0','','01','OKE','OKE',NULL,'54 ','DM','Ya','Ya','ETT'),(57,'0980987','2016-11-03','asdasd','Laki-Laki','UC','0','0','','01','df','df',NULL,'86','df','Ya','Ya','0'),(58,'1234567','2016-11-12','asma','Laki-Laki','UC','0','OP','IDO','01','asd','asd',NULL,'12','da','Ya','Ya','0'),(59,'324324234','2016-11-12','dfgdfg','Laki-Laki','UC','0','OP','','01','oke','oke',NULL,'dfg','dfg','Ya','Ya','0'),(60,'534545','2016-11-12','xccxb','Laki-Laki','UC','0','OP','','04','gh','gfh',NULL,'12','gfhfgh','Ya','Ya','0'),(61,'67878','2016-11-12','gfdg','Perempuan','UC','0','OP','','04','bcvb','vcnb',NULL,'dfg','sfd','Ya','Ya','0'),(62,'4565','2016-11-12','fgfhgh','Laki-Laki','UC','0','OP','IDO','04','ghg','kjhk',NULL,'987','fdgdf','Ya','Ya','0'),(63,'98797','2016-11-12','fghgfh','Laki-Laki','UC','0','OP','IDO','04','vbnvbnvb','nvbnv',NULL,'90','vbnvbn','Ya','Ya','0');

/*Table structure for table `tb_harian_op` */

DROP TABLE IF EXISTS `tb_harian_op`;

CREATE TABLE `tb_harian_op` (
  `id_pas` int(11) NOT NULL AUTO_INCREMENT,
  `tgl_masuk` date DEFAULT NULL,
  `tgl_keluar` date DEFAULT NULL,
  `tindakan` varchar(100) DEFAULT NULL,
  `jenis_op` varchar(10) DEFAULT NULL,
  `klasifikasi` varchar(10) DEFAULT NULL,
  `waktu` varchar(20) DEFAULT NULL,
  `antibiotik` varchar(100) DEFAULT NULL,
  `keterangan` varchar(200) DEFAULT NULL,
  `nama_pas` varchar(100) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `no_rm` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id_pas`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `tb_harian_op` */

insert  into `tb_harian_op`(`id_pas`,`tgl_masuk`,`tgl_keluar`,`tindakan`,`jenis_op`,`klasifikasi`,`waktu`,`antibiotik`,`keterangan`,`nama_pas`,`tanggal`,`no_rm`) values (1,'2016-11-01','2016-11-08','0','B','2','2','metrozzzz',NULL,'Zulmi',NULL,'12345'),(2,'2016-11-02','2016-11-08','0','BK','3','3 Jam','A',NULL,'Oyi',NULL,'54321'),(3,'2016-11-02','2016-11-08','IVL','B','1','4 Jam','A',NULL,'Riski',NULL,'09876');

/*Table structure for table `tb_ikp` */

DROP TABLE IF EXISTS `tb_ikp`;

CREATE TABLE `tb_ikp` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kd_ruang` varchar(5) DEFAULT NULL,
  `sentinel` mediumint(9) DEFAULT NULL,
  `ktd` mediumint(9) DEFAULT NULL,
  `knc` mediumint(9) DEFAULT NULL,
  `ktc` mediumint(9) DEFAULT NULL,
  `kpc` mediumint(9) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `tb_ikp` */

insert  into `tb_ikp`(`id`,`kd_ruang`,`sentinel`,`ktd`,`knc`,`ktc`,`kpc`,`tanggal`) values (1,'01',0,0,0,0,0,'2016-11-03');

/*Table structure for table `tb_ikp_ok` */

DROP TABLE IF EXISTS `tb_ikp_ok`;

CREATE TABLE `tb_ikp_ok` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kd_ruang` varchar(5) DEFAULT NULL,
  `sentinel` mediumint(9) DEFAULT NULL,
  `ktd` mediumint(9) DEFAULT NULL,
  `salah_lokasi` mediumint(9) DEFAULT NULL,
  `salah_prosedur` mediumint(9) DEFAULT NULL,
  `salah_pasien` mediumint(9) DEFAULT NULL,
  `descrepancy` mediumint(9) DEFAULT NULL,
  `ktd_sedasi` mediumint(9) DEFAULT NULL,
  `knc` mediumint(9) DEFAULT NULL,
  `ktc` mediumint(9) DEFAULT NULL,
  `kpc` mediumint(9) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tb_ikp_ok` */

/*Table structure for table `tb_indikator_utama` */

DROP TABLE IF EXISTS `tb_indikator_utama`;

CREATE TABLE `tb_indikator_utama` (
  `kd_indikator` varchar(5) NOT NULL,
  `nama_indikator_utama` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`kd_indikator`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tb_indikator_utama` */

insert  into `tb_indikator_utama`(`kd_indikator`,`nama_indikator_utama`) values ('IND01','Indikator Area Klinis'),('IND02','Indikator Area Manajerial'),('IND03','Indikator Sasaran Keselamatan Pasien');

/*Table structure for table `tb_inmut` */

DROP TABLE IF EXISTS `tb_inmut`;

CREATE TABLE `tb_inmut` (
  `kd_inmut` varchar(10) NOT NULL,
  `nama_indikator` varchar(200) DEFAULT NULL,
  `kd_sub_inmut` varchar(5) DEFAULT NULL,
  `id_ruang_inmut` varchar(5) DEFAULT NULL,
  `standar` int(11) DEFAULT NULL,
  `rumus` varchar(1) DEFAULT NULL,
  PRIMARY KEY (`kd_inmut`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tb_inmut` */

insert  into `tb_inmut`(`kd_inmut`,`nama_indikator`,`kd_sub_inmut`,`id_ruang_inmut`,`standar`,`rumus`) values ('FAR01','Waktu Tunggu Pelayanan Obat Jadi <= 30 Menit (RJ)',NULL,'010',NULL,NULL),('FAR02','Waktu Tunggu Pelayanan Obat Racikan <= 60 Menit (RJ)',NULL,'010',NULL,NULL),('FAR03','Tidak Adanya Kesalahan dalam Pemberian Obat',NULL,'010',NULL,NULL),('FAR04','Penulisan Resep Obat Sesuai Formularium',NULL,'010',NULL,NULL),('FAR05','Angka Kepatuhan Pelabelan Obat High Alert di Ins. Farmasi','SKP3','010',100,'1'),('FAR06','Ketepatan Waktu Laporan Indikator Mutu Unit ke Komite PMKP','IAM2','010',100,'1'),('ICU01','Pasien yang Kembali ke Perawatan Intensif dengan Kasusu Sama < 72 Jam',NULL,'004',NULL,NULL),('ICU02','Penggunaan Aspirin pada Pasien AMI dalam 24 Jam Pertama','IAK5','004',100,'1'),('ICU03','Utilitas Ruang ICU',NULL,'004',NULL,NULL),('ICU04','Ketepatan Waktu Laporan Indikator Mutu Unit ke Komite PMKP','IAM2','004',100,'1'),('IGD01','Waktu Tanggap Pelayanan Dokter di IGD',NULL,'009',NULL,NULL),('IGD02','Kepuasan Pelanggan','IAM5','009',80,'4'),('IGD03','Ketersediaan Obat dan Alkes Emergency di Ruang Resusitas IGD','IAM1','009',100,'1'),('IGD04','Assesmen Resiko Jatuh',NULL,'009',NULL,NULL),('IGD05','Ketepatan Waktu Laporan Indikator Mutu Unit ke Komite PMKP','IAM2','009',100,'1'),('IR001','Assesmen Awal Medis Rawat Inap dalam 24 Jam','IAK1','001',100,'1'),('IR002','Kepatuhan Petugas dalam Identifikasi Pasien Sebelum','SKP1','001',100,'1'),('IR003','Kelengkapan Assesmen Pra Anestesi oleh Dokter Anestesi','IAK7','001',100,'1'),('IR004','Angka Kejadian Decubitus','IAK10','001',0,'1'),('IR005','Angka Kejadian Efek Samping/Reaksi Pasca Transfusi','IAK8','001',0,'2'),('IR006','Kepatuhan Melakukan SBAR dan CABAKO','SKP2','001',100,'1'),('IR007','Kejadian Pasien Pulang Paksa (APS)','IAM3','001',5,'3'),('IR008','Ketepatan Waktu Laporan Indikator Mutu Unit Ke PMKP','IAM2','001',100,'1'),('IR009','Angka Kejadian Pasien Jatuh di Rawat Inap','SKP6','001',0,'1'),('LAB01','Tidak Adanya Kesalahan Pemberian Identitas Hasil Pemeriksaan Lab',NULL,'007',NULL,NULL),('LAB02','Pelaporan Nilai Kritis Lab','IAK2','007',100,'1'),('LAB03','Ketepatan Waktu Laporan Indikator Mutu Unit ke Komite Medik','IAM2','007',100,'1'),('OK1','Tidak Adanya Kejadian Operasi Sala Sisi',NULL,'006',NULL,NULL),('OK2','Kepatuhan Melaksanakan Proses Time Out pada Pasien Pre OP','IAK4','006',100,'1'),('OK3','Kelengkapan Surgical Checklist','SKP4','006',100,'1'),('OK4','Site Marking',NULL,'006',NULL,NULL),('OK5','Ketidakcocokan Diagnosa Pra Dengan Post OP',NULL,'006',NULL,NULL),('OK6','Tidak Adanya KTD Selama Tindakan Anestesi',NULL,'006',NULL,NULL),('OK7','Ketepatan Waktu Laporan Indikator Mutu ke PMKP','IAM2','006',100,'1'),('PER01','Kemampuan Menangani BBLR (1500-2500 GR)',NULL,NULL,NULL,NULL),('PER02','Kepatuhan Petugas dalam Identifikasi Pasien Sebelum','SKP2','003',100,'1'),('PER03','Ketepatan Waktu Laporan Indikator Mutu Unit ke Komite PMKP ','IAM2','003',100,'1'),('PER04','Utilisasi Alat CPAP','IAM4','003',100,'1'),('POL01','Waktu Tunggu di Poliklinik Umum',NULL,'005',NULL,NULL),('POL02','Ketepatan Waktu Lapor Indikator Mutu Unit ke Komite PMKP','IAM2','005',100,'1'),('RAD01','Pelaksanaan Ekspertisi Hasil Pemeriksaan Radiologi',NULL,'008',NULL,NULL),('RAD02','Respontime Pemeriksaan Cito dari IGD','IAK3','008',100,'1'),('RAD03','Tidak Terjadi Kesalahan Pemberian Identitas Hasil Pemeriksaan Rad',NULL,'008',NULL,NULL),('RAD04','Ketepatan Waktu Laporan Indikator Mutu Unit ke Komite PMKP','IAM2','008',100,'1'),('SHO01','Assesmen Awal Medis RI dalam 24 Jam','IAK1','002',100,'1'),('SHO02','Kepatuhan Petugas dalam Identifikasi Pasien Sebelum','SKP1','002',100,'1'),('SHO03','Kelengkapan Assesmen Pra Anestesi oleh Dokter Anestesi','IAK7','002',100,'1'),('SHO04','Angka Kejadian Efek Samping / Reaksi Pasca Transfusi','IAK8','002',0,'2'),('SHO05','Kejadian Pasien Pulang Paksa','IAM3','002',5,'3'),('SHO06','Kejadian Kematian Ibu Karena Eklampsia',NULL,'002',NULL,NULL),('SHO07','Kematian Ibu Karena Perdarahan',NULL,'002',NULL,NULL),('SHO08','Kejadian Kematisn Ibu Karena Sepsis',NULL,'002',NULL,NULL),('SHO09','Ketepatan Waktu Laporan Indikator Mutu Unit ke PMKP','IAM2','002',100,'1'),('SHO10','Angka Kejadian Pasien Jatuh di Rawat Inap','SKP6','002',0,'1'),('SHO11','Infeksi Luka Pasca Operasi',NULL,'002',NULL,NULL);

/*Table structure for table `tb_inmut_farmasi` */

DROP TABLE IF EXISTS `tb_inmut_farmasi`;

CREATE TABLE `tb_inmut_farmasi` (
  `kd_inmut_farmasi` varchar(5) NOT NULL,
  `nama_indikator` varchar(100) DEFAULT NULL,
  `kd_sub_inmut` varchar(5) DEFAULT NULL,
  PRIMARY KEY (`kd_inmut_farmasi`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tb_inmut_farmasi` */

insert  into `tb_inmut_farmasi`(`kd_inmut_farmasi`,`nama_indikator`,`kd_sub_inmut`) values ('FAR01','Waktu Tunggu Pelayanan Obat Jadi <= 30 Menit (RJ)',NULL),('FAR02','Waktu Tunggu Pelayanan Obat Racikan <= 60 Menit (RJ)',NULL),('FAR03','Tidak Adanya Kesalahan dalam Pemberian Obat',NULL),('FAR04','Penulisan Resep Obat Sesuai Formularium',NULL),('FAR05','Angka Kepatuhan Pelabelan Obat High Alert di Ins. Farmasi','SKP3'),('FAR06','Ketepatan Waktu Laporan Indikator Mutu Unit ke Komite PMKP','IAM2');

/*Table structure for table `tb_inmut_icu` */

DROP TABLE IF EXISTS `tb_inmut_icu`;

CREATE TABLE `tb_inmut_icu` (
  `kd_inmut_icu` varchar(5) NOT NULL,
  `nama_indikator` varchar(100) DEFAULT NULL,
  `kd_sub_inmut` varchar(5) DEFAULT NULL,
  PRIMARY KEY (`kd_inmut_icu`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tb_inmut_icu` */

insert  into `tb_inmut_icu`(`kd_inmut_icu`,`nama_indikator`,`kd_sub_inmut`) values ('ICU01','Pasien yang Kembali ke Perawatan Intensif dengan Kasusu Sama < 72 Jam',NULL),('ICU02','Penggunaan Aspirin pada Pasien AMI dalam 24 Jam Pertama','IAK5'),('ICU03','Utilitas Ruang ICU',NULL),('ICU04','Ketepatan Waktu Laporan Indikator Mutu Unit ke Komite PMKP','IAM2');

/*Table structure for table `tb_inmut_igd` */

DROP TABLE IF EXISTS `tb_inmut_igd`;

CREATE TABLE `tb_inmut_igd` (
  `kd_inmut_igd` varchar(5) NOT NULL,
  `nama_indikator` varchar(100) DEFAULT NULL,
  `kd_sub_inmut` varchar(5) DEFAULT NULL,
  PRIMARY KEY (`kd_inmut_igd`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tb_inmut_igd` */

insert  into `tb_inmut_igd`(`kd_inmut_igd`,`nama_indikator`,`kd_sub_inmut`) values ('IGD01','Waktu Tanggap Pelayanan Dokter di IGD',NULL),('IGD02','Kepuasan Pelanggan','IAM5'),('IGD03','Ketersediaan Obat dan Alkes Emergency di Ruang Resusitas IGD','IAM1'),('IGD04','Assesmen Resiko Jatuh',NULL),('IGD05','Ketepatan Waktu Laporan Indikator Mutu Unit ke Komite PMKP','IAM2');

/*Table structure for table `tb_inmut_lab` */

DROP TABLE IF EXISTS `tb_inmut_lab`;

CREATE TABLE `tb_inmut_lab` (
  `kd_inmut_lab` varchar(5) NOT NULL,
  `nama_indikator` varchar(100) DEFAULT NULL,
  `kd_sub_inmut` varchar(5) DEFAULT NULL,
  PRIMARY KEY (`kd_inmut_lab`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tb_inmut_lab` */

insert  into `tb_inmut_lab`(`kd_inmut_lab`,`nama_indikator`,`kd_sub_inmut`) values ('LAB01','Tidak Adanya Kesalahan Pemberian Identitas Hasil Pemeriksaan Lab',NULL),('LAB02','Pelaporan Nilai Kritis Lab','IAK2'),('LAB03','Ketepatan Waktu Laporan Indikator Mutu Unit ke Komite Medik','IAM2');

/*Table structure for table `tb_inmut_ok` */

DROP TABLE IF EXISTS `tb_inmut_ok`;

CREATE TABLE `tb_inmut_ok` (
  `kd_inmut_ok` varchar(10) DEFAULT NULL,
  `nama_indikator` varchar(100) DEFAULT NULL,
  `kd_sub_inmut` varchar(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tb_inmut_ok` */

insert  into `tb_inmut_ok`(`kd_inmut_ok`,`nama_indikator`,`kd_sub_inmut`) values ('OK1','Tidak Adanya Kejadian Operasi Sala Sisi',NULL),('OK2','Kepatuhan Melaksanakan Proses Time Out pada Pasien Pre OP','IAK4'),('OK3','Kelengkapan Surgical Checklist','SKP4'),('OK4','Site Marking',NULL),('OK5','Ketidakcocokan Diagnosa Pra Dengan Post OP',NULL),('OK6','Tidak Adanya KTD Selama Tindakan Anestesi',NULL),('OK7','Ketepatan Waktu Laporan Indikator Mutu ke PMKP','IAM2');

/*Table structure for table `tb_inmut_peri` */

DROP TABLE IF EXISTS `tb_inmut_peri`;

CREATE TABLE `tb_inmut_peri` (
  `kd_inmut_peri` varchar(5) NOT NULL,
  `nama_indikator` varchar(100) DEFAULT NULL,
  `kd_sub_inmut` varchar(5) DEFAULT NULL,
  PRIMARY KEY (`kd_inmut_peri`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tb_inmut_peri` */

insert  into `tb_inmut_peri`(`kd_inmut_peri`,`nama_indikator`,`kd_sub_inmut`) values ('PER01','Kemampuan Menangani BBLR (1500-2500 GR)',NULL),('PER02','Kepatuhan Petugas dalam Identifikasi Pasien Sebelum','SKP2'),('PER03','Ketepatan Waktu Laporan Indikator Mutu Unit ke Komite PMKP ','IAM2'),('PER04','Utilisasi Alat CPAP','IAM4');

/*Table structure for table `tb_inmut_poli` */

DROP TABLE IF EXISTS `tb_inmut_poli`;

CREATE TABLE `tb_inmut_poli` (
  `kd_inmut_poli` varchar(5) NOT NULL,
  `nama_indikator` varchar(100) DEFAULT NULL,
  `kd_sub_inmut` varchar(5) DEFAULT NULL,
  PRIMARY KEY (`kd_inmut_poli`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tb_inmut_poli` */

insert  into `tb_inmut_poli`(`kd_inmut_poli`,`nama_indikator`,`kd_sub_inmut`) values ('POL01','Waktu Tunggu di Poliklinik Umum',NULL),('POL02','Ketepatan Waktu Lapor Indikator Mutu Unit ke Komite PMKP','IAM2');

/*Table structure for table `tb_inmut_rad` */

DROP TABLE IF EXISTS `tb_inmut_rad`;

CREATE TABLE `tb_inmut_rad` (
  `kd_inmut_rad` varchar(5) NOT NULL,
  `nama_indikator` varchar(100) DEFAULT NULL,
  `kd_sub_inmut` varchar(5) DEFAULT NULL,
  PRIMARY KEY (`kd_inmut_rad`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tb_inmut_rad` */

insert  into `tb_inmut_rad`(`kd_inmut_rad`,`nama_indikator`,`kd_sub_inmut`) values ('RAD01','Pelaksanaan Ekspertisi Hasil Pemeriksaan Radiologi',NULL),('RAD02','Respontime Pemeriksaan Cito dari IGD','IAK3'),('RAD03','Tidak Terjadi Kesalahan Pemberian Identitas Hasil Pemeriksaan Rad',NULL),('RAD04','Ketepatan Waktu Laporan Indikator Mutu Unit ke Komite PMKP','IAM2');

/*Table structure for table `tb_inmut_shofa` */

DROP TABLE IF EXISTS `tb_inmut_shofa`;

CREATE TABLE `tb_inmut_shofa` (
  `kd_inmut_shofa` varchar(5) NOT NULL,
  `nama_indikator` varchar(100) DEFAULT NULL,
  `kd_sub_inmut` varchar(5) DEFAULT NULL,
  PRIMARY KEY (`kd_inmut_shofa`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tb_inmut_shofa` */

insert  into `tb_inmut_shofa`(`kd_inmut_shofa`,`nama_indikator`,`kd_sub_inmut`) values ('SHO01','Assesmen Awal Medis RI dalam 24 Jam','IAK1'),('SHO02','Kepatuhan Petugas dalam Identifikasi Pasien Sebelum','SKP1'),('SHO03','Kelengkapan Assesmen Pra Anestesi oleh Dokter Anestesi','IAK7'),('SHO04','Angka Kejadian Efek Samping / Reaksi Pasca Transfusi','IAK8'),('SHO05','Kejadian Pasien Pulang Paksa','IAM3'),('SHO06','Kejadian Kematian Ibu Karena Eklampsia',NULL),('SHO07','Kematian Ibu Karena Perdarahan',NULL),('SHO08','Kejadian Kematisn Ibu Karena Sepsis',NULL),('SHO09','Ketepatan Waktu Laporan Indikator Mutu Unit ke PMKP','IAM2'),('SHO10','Angka Kejadian Pasien Jatuh di Rawat Inap','SKP6'),('SHO11','Infeksi Luka Pasca Operasi',NULL);

/*Table structure for table `tb_rekap_inmut` */

DROP TABLE IF EXISTS `tb_rekap_inmut`;

CREATE TABLE `tb_rekap_inmut` (
  `kd_inmut` varchar(10) DEFAULT NULL,
  `nama_indikator` varchar(50) DEFAULT NULL,
  `kd_ruang` varchar(5) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `num` int(11) DEFAULT NULL,
  `denum` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tb_rekap_inmut` */

insert  into `tb_rekap_inmut`(`kd_inmut`,`nama_indikator`,`kd_ruang`,`tanggal`,`num`,`denum`) values ('IR001',NULL,'02','2016-11-14',2,3),('IR004',NULL,'02','2016-11-14',2,4),('LAB01',NULL,'09','2016-11-14',2,4),('LAB02','0','09','2016-11-14',2,3),('IR001','0','01','2016-11-14',2,4),('IR003',NULL,'01','2016-11-14',2,4),('IR001',NULL,'01','2016-11-14',2,4),('IR001',NULL,'01','2016-11-15',6,10),('IR001',NULL,'01','2016-11-16',7,14),('0',NULL,'01','2016-11-17',8,10),('IR001',NULL,'01','2016-11-18',4,8),('IR001',NULL,'01','2016-11-19',5,10),('IR001',NULL,'01','2016-11-01',70,140),('IR009',NULL,'01','2016-11-01',5,20),('IR009',NULL,'01','2016-11-02',10,20);

/*Table structure for table `tb_ruangan` */

DROP TABLE IF EXISTS `tb_ruangan`;

CREATE TABLE `tb_ruangan` (
  `kd_ruang` varchar(5) NOT NULL,
  `ruangan` varchar(20) DEFAULT NULL,
  `id_ruang_inmut` varchar(5) DEFAULT NULL,
  PRIMARY KEY (`kd_ruang`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tb_ruangan` */

insert  into `tb_ruangan`(`kd_ruang`,`ruangan`,`id_ruang_inmut`) values ('01','Marwah','001'),('02','Mina','001'),('03','Arofah','001'),('04','Shofa','002'),('05','Perinatologi','003'),('06','ICU','004'),('07','Poliklinik','005'),('08','Ok','006'),('09','Laborat','007'),('10','Radiologi','008'),('11','IGD','009'),('12','Farmasi','010'),('13','Gizi','011'),('14','Keuangan','012');

/*Table structure for table `tb_ruangan_indikator` */

DROP TABLE IF EXISTS `tb_ruangan_indikator`;

CREATE TABLE `tb_ruangan_indikator` (
  `kd_ruang` varchar(20) DEFAULT NULL,
  `nama_ruang` varchar(25) DEFAULT NULL,
  `id` varchar(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tb_ruangan_indikator` */

insert  into `tb_ruangan_indikator`(`kd_ruang`,`nama_ruang`,`id`) values ('01','Marwah',NULL),('02','Mina',NULL),('03','Arofah',NULL),('04','Shofa',NULL),('05','Perinatologi',NULL),('06','ICU',NULL),('07','Poliklonik',NULL),('08','Laborat',NULL),('09','Radiologi',NULL),('10','IGD',NULL),('11','Farmasi',NULL),('12','Kamar Operasi',NULL),('13','Gizi',NULL),('14','Keuangan',NULL);

/*Table structure for table `tb_sub_inmut` */

DROP TABLE IF EXISTS `tb_sub_inmut`;

CREATE TABLE `tb_sub_inmut` (
  `kd_sub_inmut` varchar(5) NOT NULL,
  `nama_sub_indikator` varchar(100) DEFAULT NULL,
  `kd_indikator` varchar(5) DEFAULT NULL,
  PRIMARY KEY (`kd_sub_inmut`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tb_sub_inmut` */

insert  into `tb_sub_inmut`(`kd_sub_inmut`,`nama_sub_indikator`,`kd_indikator`) values ('IAK1','Assesmen Pasien','IND01'),('IAK10','Pencegahan dan Pengendalian Infeksi, Surveilans dan Pelaporan','IND01'),('IAK11','Riset Klinis','IND01'),('IAK2','Pelayanan Laboratorium','IND01'),('IAK3','Pelayanan Radiologi','IND01'),('IAK4','Prosedur Bedah','IND01'),('IAK5','Penggunaan Antibiotik dan Obat Lainnya','IND01'),('IAK6','Medication Error','IND01'),('IAK7','Penggunaan Anestesi','IND01'),('IAK8','Penggunaan Darah dan Produk Darah','IND01'),('IAK9','Ketersediaan Isi dan Penggunaan Rekam Medik','IND01'),('IAM1','Pengadaan Rutin','IND02'),('IAM2','Pelaporan Yang Diwajibkan','IND02'),('IAM3','Manajemen Resiko','IND02'),('IAM4','Penggunaan Sumber Daya','IND02'),('IAM5','Harapan dan Kepuasan Pasien / Keluarga','IND02'),('IAM6','Harapan dan Kepuasan Staf','IND02'),('IAM7','Demografi dan Diagnosa Klinis','IND02'),('IAM8','Manajemen Keuangan','IND02'),('IAM9','Pencegahan dan Pengendalian dari Kejadian yang Menimbulkan Masalah bagi Keselamatan Pasien, Keluarga','IND02'),('SKP1','Ketpatan Identifikasi Pasien','IND03'),('SKP2','Peningkatan Komunikasi Efektif','IND03'),('SKP3','Peningkatan Keamanan Pelabelan Obat High Alert','IND03'),('SKP4','Kepastian Tepat Lokasi, Tepat Prosedur, dan Tepat Pasien Operasi','IND03'),('SKP5','Pengurangan Resiko Infeksi Terkait Pelayanan Kesehatan','IND03'),('SKP6','Pengurangan Resiko Pasien Jatuh','IND03');

/*Table structure for table `tb_user` */

DROP TABLE IF EXISTS `tb_user`;

CREATE TABLE `tb_user` (
  `id_user` varchar(2) NOT NULL,
  `nama_user` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `kd_ruang` varchar(5) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `id_ruang_inmut` varchar(5) DEFAULT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tb_user` */

insert  into `tb_user`(`id_user`,`nama_user`,`password`,`kd_ruang`,`status`,`id_ruang_inmut`) values ('1','marwah','marwah','01',0,'001'),('10','rontgen','rontgen','10',0,'008'),('11','igd','igd','11',0,'009'),('12','farmasi','farmasi','12',0,'010'),('13','gizi','gizi','13',0,'011'),('14','keuangan','keuangan','14',0,'012'),('2','mina','mina','02',0,'001'),('3','shofa','shofa','04',0,'002'),('4','arofah','arofah','03',0,'001'),('5','icu','icu','06',0,'004'),('6','perina','perina','05',0,'003'),('7','poli','poli','07',0,'005'),('8','ok','ok','08',1,'006'),('9','laborat','laborat','09',0,'007');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
