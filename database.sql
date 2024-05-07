/*
SQLyog Ultimate v13.1.1 (64 bit)
MySQL - 10.4.27-MariaDB : Database - bdmvc
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`bdmvc` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci */;

USE `bdmvc`;

/*Table structure for table `t_programa` */

DROP TABLE IF EXISTS `t_programa`;

CREATE TABLE `t_programa` (
  `PRO_ID` int(11) NOT NULL AUTO_INCREMENT,
  `PRO_UID` varchar(10) DEFAULT NULL,
  `PRO_NOMBRE` varchar(30) NOT NULL,
  `PRO_CODIGO` varchar(20) NOT NULL,
  `USU_ROL` int(11) DEFAULT NULL,
  PRIMARY KEY (`PRO_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `t_programa` */

insert  into `t_programa`(`PRO_ID`,`PRO_UID`,`PRO_NOMBRE`,`PRO_CODIGO`,`USU_ROL`) values 
(21,'65de0c0457',' ADSO','2620654   ',NULL),
(27,'65df2d3bd8',' SEGURIDAD Y SALUD  ','2563956 ',NULL),
(30,'65eccaa058','GESTION CONTABLE','2902189 ',NULL),
(31,'65ed46506b','CONSTRUCCION','2452635',NULL);

/*Table structure for table `t_us_pro` */

DROP TABLE IF EXISTS `t_us_pro`;

CREATE TABLE `t_us_pro` (
  `USPRO_ID` int(11) NOT NULL AUTO_INCREMENT,
  `USPRO_UID` varchar(10) DEFAULT NULL,
  `USPRO_USU_ID` int(11) DEFAULT NULL,
  `USPRO_PRO_ID` int(11) DEFAULT NULL,
  `USPRO_FCH_INS` date DEFAULT NULL,
  PRIMARY KEY (`USPRO_ID`),
  KEY `USPRO_USU_ID` (`USPRO_USU_ID`),
  KEY `USPRO_PRO_ID` (`USPRO_PRO_ID`),
  CONSTRAINT `t_us_pro_ibfk_1` FOREIGN KEY (`USPRO_USU_ID`) REFERENCES `t_usuario` (`USU_ID`),
  CONSTRAINT `t_us_pro_ibfk_2` FOREIGN KEY (`USPRO_PRO_ID`) REFERENCES `t_programa` (`PRO_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `t_us_pro` */

insert  into `t_us_pro`(`USPRO_ID`,`USPRO_UID`,`USPRO_USU_ID`,`USPRO_PRO_ID`,`USPRO_FCH_INS`) values 
(31,'65ed47dbb7',76,21,NULL),
(32,'6636466715',83,21,NULL),
(33,'663648cfd2',76,27,NULL),
(34,'663649c76d',77,27,NULL),
(35,'66364a13d9',78,21,NULL);

/*Table structure for table `t_usuario` */

DROP TABLE IF EXISTS `t_usuario`;

CREATE TABLE `t_usuario` (
  `USU_ID` int(11) NOT NULL AUTO_INCREMENT,
  `USU_NOMBRES` varchar(50) DEFAULT NULL,
  `USU_APELLIDOS` varchar(100) DEFAULT NULL,
  `USU_EMAIL` varchar(100) NOT NULL,
  `USU_PASSWORD` varchar(100) NOT NULL,
  `USU_TELEFONO` varchar(10) NOT NULL,
  `USU_FCH_NAC` date DEFAULT NULL,
  `USU_UID` varchar(10) NOT NULL,
  `USU_ROL` tinyint(20) DEFAULT NULL,
  `USU_CONTRASEÑA` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`USU_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=84 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `t_usuario` */

insert  into `t_usuario`(`USU_ID`,`USU_NOMBRES`,`USU_APELLIDOS`,`USU_EMAIL`,`USU_PASSWORD`,`USU_TELEFONO`,`USU_FCH_NAC`,`USU_UID`,`USU_ROL`,`USU_CONTRASEÑA`) values 
(76,'JJ','Muñoz','jjmunozbenitez@gmail.com','','3008825321','2024-02-16','65d6163fd5',1,'40bd001563085fc35165329ea1ff5c5ecbdbbeef'),
(77,'nesty','Benitez','nesty@gmail.com','','3008825321','2024-02-16','65d616586d',3,'40bd001563085fc35165329ea1ff5c5ecbdbbeef'),
(78,'paula','gomez','paulagomez@gmail.com','','3008825321','2024-02-10','65d6166dd1',2,'40bd001563085fc35165329ea1ff5c5ecbdbbeef'),
(82,'nestor','garcia','nestor@gmail.com','','3008825321','0012-12-23','65ed462091',3,'40bd001563085fc35165329ea1ff5c5ecbdbbeef'),
(83,'nesty','benitez','nestybenitez@gmail.com','','3008825321','0564-06-15','663646190a',3,'8cb2237d0679ca88db6464eac60da96345513964');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
