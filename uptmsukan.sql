/*

SQLyog Community v8.4 RC2
MySQL - 5.5.40 : Database - uptmsukan

*********************************************************************

*/



/*!40101 SET NAMES utf8 */;



/*!40101 SET SQL_MODE=''*/;



/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;

/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;

/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

CREATE DATABASE /*!32312 IF NOT EXISTS*/`uptmsukan` /*!40100 DEFAULT CHARACTER SET latin1 */;



USE `uptmsukan`;



/*Table structure for table `alatan` */



DROP TABLE IF EXISTS `alatan`;



CREATE TABLE `alatan` (
  `id_alatan` int(5) NOT NULL,
  `nama_alatan` varchar(30) NOT NULL,
  PRIMARY KEY (`id_alatan`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;



/*Data for the table `alatan` */



insert  into `alatan`(`id_alatan`,`nama_alatan`) values (1,'Bola'),(2,'Raket Badminton'),(3,'Kayu Hoki');



/*Table structure for table `alatan_unit` */



DROP TABLE IF EXISTS `alatan_unit`;



CREATE TABLE `alatan_unit` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_alatan` int(11) NOT NULL,
  `no_siri_pendaftaran` varchar(100) DEFAULT NULL,
  `kondisi` varchar(25) DEFAULT NULL,
  PRIMARY KEY (`id`,`id_alatan`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;



/*Data for the table `alatan_unit` */



insert  into `alatan_unit`(`id`,`id_alatan`,`no_siri_pendaftaran`,`kondisi`) values (1,1,'KKSB/A-2 COMl/10-04/03-07/1','Baik'),(2,1,'KKSB/A-2 COMl/10-04/03-07/2','Baik'),(3,1,'KKSB/A-2 COMl/10-04/03-07/3','Baik'),(4,2,'KKSB/A-3 COMl/10-04/03-07/1','Baik'),(5,2,'KKSB/A-3 COMl/10-04/03-07/2','Baik'),(6,2,'KKSB/A-3 COMl/10-04/03-07/3','Baik'),(7,3,'KKSB/A-4 COMl/10-04/03-07/1','Baik'),(8,3,'KKSB/A-4 COMl/10-04/03-07/2','Baik'),(9,3,'KKSB/A-4 COMl/10-04/03-07/3','Baik'),(10,1,'KKSB/A-2 COMl/10-04/03-07/4','Baik'),(11,1,'11123666','Rosak');



/*Table structure for table `pegawai_sukan` */



DROP TABLE IF EXISTS `pegawai_sukan`;



CREATE TABLE `pegawai_sukan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(200) DEFAULT NULL,
  `no_kadpengenalan` varchar(12) DEFAULT NULL,
  `emel` varchar(150) DEFAULT NULL,
  `id_pengguna` varchar(25) DEFAULT NULL,
  `katalaluan` varchar(25) DEFAULT NULL,
  `aras` varchar(25) NOT NULL DEFAULT 'Pegawai',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;



/*Data for the table `pegawai_sukan` */



insert  into `pegawai_sukan`(`id`,`nama`,`no_kadpengenalan`,`emel`,`id_pengguna`,`katalaluan`,`aras`) values (1,'Mohd Syukri Ismail','870105035687','arifwahab@rocketmail.com','K003','123','Pegawai');



/*Table structure for table `pelajar` */



DROP TABLE IF EXISTS `pelajar`;



CREATE TABLE `pelajar` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(200) DEFAULT NULL,
  `no_kadpengenalan` varchar(12) DEFAULT NULL,
  `emel` varchar(150) DEFAULT NULL,
  `no_telefon` varchar(25) DEFAULT NULL,
  `id_pengguna` varchar(25) DEFAULT NULL,
  `katalaluan` varchar(25) DEFAULT NULL,
  `aras` varchar(25) NOT NULL DEFAULT 'Student',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;



/*Data for the table `pelajar` */



insert  into `pelajar`(`id`,`nama`,`no_kadpengenalan`,`emel`,`no_telefon`,`id_pengguna`,`katalaluan`,`aras`) values (1,'Mohd Amin Zakaria','900331115130','arifwahab@rocketmail.com','0133034626','A001','123','Pelajar'),(2,'Muhd Salleh Abdullah','5689','arifwahab@rocketmail.com',NULL,'K002','123','Pelajar');



/*Table structure for table `peminjaman` */



DROP TABLE IF EXISTS `peminjaman`;



CREATE TABLE `peminjaman` (
  `id_bilpinjam` int(11) NOT NULL AUTO_INCREMENT,
  `id_peminjam` varchar(12) NOT NULL,
  `id_alatan` int(11) NOT NULL,
  `tarikh_mohon` date NOT NULL,
  `tarikh_pinjam` date NOT NULL,
  `tarikh_pulang` date NOT NULL,
  `kuantiti` varchar(30) NOT NULL,
  `list` varchar(2) NOT NULL,
  `status_pegawai` varchar(20) NOT NULL,
  `catatan` varchar(255) DEFAULT NULL,
  `tarikh_proses` date NOT NULL,
  `status_staf` varchar(20) NOT NULL,
  PRIMARY KEY (`id_bilpinjam`,`id_peminjam`)
) ENGINE=MyISAM AUTO_INCREMENT=80 DEFAULT CHARSET=latin1;



/*Data for the table `peminjaman` */



/*Table structure for table `staf` */



DROP TABLE IF EXISTS `staf`;



CREATE TABLE `staf` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(200) DEFAULT NULL,
  `no_kadpengenalan` varchar(12) DEFAULT NULL,
  `id_pengguna` varchar(25) DEFAULT NULL,
  `katalaluan` varchar(25) DEFAULT NULL,
  `aras` varchar(25) NOT NULL DEFAULT 'Staf',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;



/*Data for the table `staf` */



insert  into `staf`(`id`,`nama`,`no_kadpengenalan`,`id_pengguna`,`katalaluan`,`aras`) values (1,'Nur Asma Abd Wahab','860828292544','K001','123','Staf');



/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;

/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;

/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;

/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

