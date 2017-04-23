/*
SQLyog Ultimate v9.02 
MySQL - 5.5.5-10.1.13-MariaDB : Database - sicovip
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`sicovip` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `sicovip`;

/*Table structure for table `sv01clnte` */

DROP TABLE IF EXISTS `sv01clnte`;

CREATE TABLE `sv01clnte` (
  `sv01cedc` varchar(15) NOT NULL COMMENT 'tabla cliente-topografo\ncedula\ncodigo topografo\nnombre \napellidos \nemail \ntelefono',
  `sv01cdtpc` varchar(5) NOT NULL,
  `sv01nomc` varchar(200) NOT NULL,
  `sv01apdc` varchar(200) NOT NULL COMMENT 'tabla cliente-topo',
  `sv01emc` varchar(50) NOT NULL,
  `sv01telc` int(11) NOT NULL COMMENT 'tabla de topografo cliente\ncedula \ncodigo topografo\nnombre \napellido \nemail \ntelefono\n',
  `sv01pass` varchar(250) NOT NULL,
  PRIMARY KEY (`sv01cedc`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `sv01clnte` */

insert  into `sv01clnte`(`sv01cedc`,`sv01cdtpc`,`sv01nomc`,`sv01apdc`,`sv01emc`,`sv01telc`,`sv01pass`) values ('11185901','2017','Wesley','Gutierrez','wolf_7003@hotmail.com',83715157,'7c222fb2927d828af22f592134e8932480637c0d'),('115990808','IT553','Paola','Rosales Fernandez','lindsy.fernandez4@gmail.com',83308904,'12345'),('1234567','A1123','luis','Perez','danielramosr45@gmail.com',988764,'12345'),('142','54677','Rafael','Chavez','danielramosr45@gmail.com',83378319,'12345'),('2077530','IT-05','Jose Maria','Chincchilla','danielramosr45@gmail.com',83378319,''),('306730139','2009','Benjamin','Valdepera','kira_7003@hotmail.com',62739067,'7c222fb2927d828af22f592134e8932480637c0d'),('403760156','IT528','Alfredo','Salazar Murillo','danielramosr45@gmail.com',84900520,''),('406790123','2143','Sofia','Valerio','danielramosr45@gmail.com',83378319,'12345'),('501100809','0645','Juan','Ramos','danielramosr45@gmail.com',83715157,'12345'),('501800386','0999','Antonio','Espinoza','danielramosr45@gmail.com',83378319,'12345'),('503860180','0205','Daniel','Ramos Abarca','danielramosr45@gmail.com',62739067,'8cb2237d0679ca88db6464eac60da96345513964'),('504670340','IT201','David','Vargas','danielramosr45@gmail.com',83308904,'7c222fb2927d828af22f592134e8932480637c0d'),('509530180','4477','Mandfren','Espinoza','abarcamayra50@gmail.com',88304477,'12345'),('602980190','1992','Salvador','Conyugue','danielramosr45@gmail.com',84900520,'7c222fb2927d828af22f592134e8932480637c0d'),('608820331','8721','Franthy','Abarcar','danielramosr45@gmail.com',83378319,'12345'),('903780122','1213','Alberto','Lobo','danielramosr45@gmail.com',83378319,'12345');

/*Table structure for table `sv02estdo` */

DROP TABLE IF EXISTS `sv02estdo`;

CREATE TABLE `sv02estdo` (
  `sv02code` int(11) NOT NULL COMMENT 'tabla de estado(son varios estados)\ncodigo de estado \ndetalle de estado\n',
  `sv02dete` varchar(50) NOT NULL,
  PRIMARY KEY (`sv02code`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `sv02estdo` */

insert  into `sv02estdo`(`sv02code`,`sv02dete`) values (1,'Al dia'),(2,'Retrasado'),(3,'Presenta'),(4,'No presenta'),(5,'Aprovado'),(6,'Rechazado'),(7,'En proceso'),(8,'Oficio');

/*Table structure for table `sv03ptario` */

DROP TABLE IF EXISTS `sv03ptario`;

CREATE TABLE `sv03ptario` (
  `sv03cedp` varchar(15) NOT NULL COMMENT 'tabla propietario\n\ncedula propiet\nnombre  prop\napellidos prop\nemail prop\ntelefono prop\ncodigo de tipo de propietario',
  `sv03nomp` varchar(200) NOT NULL,
  `sv03apdp` varchar(200) NOT NULL,
  `sv03emp` varchar(50) NOT NULL,
  `sv03telp` int(11) NOT NULL,
  `sv06codp` int(11) NOT NULL,
  PRIMARY KEY (`sv03cedp`,`sv06codp`),
  KEY `fk_SV03PTARIO_SV06TIPPROP1_idx` (`sv06codp`),
  CONSTRAINT `fk_SV03PTARIO_SV06TIPPROP1` FOREIGN KEY (`sv06codp`) REFERENCES `sv06tipprop` (`sv06codp`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `sv03ptario` */

insert  into `sv03ptario`(`sv03cedp`,`sv03nomp`,`sv03apdp`,`sv03emp`,`sv03telp`,`sv06codp`) values ('1123856393','Stephanie','Gutierrez','abarcamayra50@gmail.com',88304477,1),('1234567','Andreina','Salvatierra','abarcamayra50@gmail.com',88304477,1),('1766755','karol','fernandez','hakuna@gmail.com',1234535,1),('401230788','Cecilia','Sanchez','abarcamayra50@gmail.com',83378719,1),('402380566','Andrey','Fernandez','abarcamayra50@gmail.com',88304477,1),('501800386','Bernardo','Espinoza','abarcamayra50@gmail',88304477,1),('503860180','Daniel','Ramos','dani.ramos92@gmail.com',83378319,1),('605800253','Kiana','Serrano','abarcamayra50@gmail.com',88304477,1),('63272899','Georgina','Sojo','danielramosr45@gmail.com',84900520,1),('6754322','Anderson','Alvarez','abarcamayra50@gmail.com',88304477,1),('704890122','Luis','Flores','abarcamayra50@gmail.com',62739067,1),('705890253','Sofia','Caravaca','danielramosr45@gmail',89703690,1),('777792920','Serafina','Dinarte','danielramosr45@gmail.com',84900520,1),('784899','JosÃ© Antonio','Vargas','danielramosr45@gmail.com',88304477,1),('78878892','Anderson','Figueroa','danielramosr45@gmail.com',84900520,1),('8372990','Pancracio','Delive','abarcamayra50@gmail.com',88304477,1),('900470253','Isidra','Espinoza','abarcamayra50@gmail.com',88304477,1),('987765432','Luisiana','su abuelita','xaro@gmail.com',877777666,1);

/*Table structure for table `sv04reqtos` */

DROP TABLE IF EXISTS `sv04reqtos`;

CREATE TABLE `sv04reqtos` (
  `sv04nfin` varchar(20) NOT NULL COMMENT 'tabla de requisitos\n\nnumero de finca \narchivo de plano \narchivo autocat\narchivo carta de agua',
  `sv04apln` varchar(100) NOT NULL,
  `sv04aact` varchar(100) NOT NULL,
  `sv04acta` varchar(100) NOT NULL,
  PRIMARY KEY (`sv04nfin`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `sv04reqtos` */

insert  into `sv04reqtos`(`sv04nfin`,`sv04apln`,`sv04aact`,`sv04acta`) values ('123213','CV.pdf','Curriculum.docx','CV.docx'),('12345','Plano.txt','AUTOCAD.txt','Carta.txt'),('123456789','Tarea2.docx','Tarea2.xlsx','simplificar.txt'),('25','Plano.txt','Carta.txt','AUTOCAD.txt'),('3343','','',''),('46789','','AUTOCAD.txt','Carta.txt'),('54321','Carta.txt','Carta.txt','AUTOCAD.txt'),('543218','Plano.txt','Carta.txt','AUTOCAD.txt'),('5555555','','',''),('557813456','SICOVIPv5.pdf','Vision.pdf','AprovaProyecto.pdf'),('632782','AprovaProyecto.pdf','Vision.pdf','Especificacion de Requerimientos.pdf'),('67387323','Plano.txt','AUTOCAD.txt','Carta.txt'),('737899','AprovaProyecto.pdf','Vision.pdf','SICOVIPv5.pdf'),('7777777777','','Carta.txt','Carta.txt'),('778432','AprovaProyecto.pdf','Vision.pdf','SICOVIPv5.pdf'),('82134','','AUTOCAD.txt','Carta.txt'),('87654398','CartaKiana.docx','Vision.pdf','Vision.pdf'),('87654678','AprovaProyecto(1).pdf','SICOVIPv5.pdf','Vision.pdf'),('88823','rayner-datamart.pdf','SICOVIPv5.pdf','Vision.pdf'),('88888','Casos_de_uso.pdf','cuadropyact.xlsx','EIF210-2016.pdf'),('888888','','',''),('9022323','CartaKiana.docx','SICOVIPv5(1).pdf','Prototipos.docx'),('907574','SICOVIPv5.pdf','Vision.pdf','AprovaProyecto.pdf'),('90839492','Poster_5.jpg','WhatsApp Image 2016-08-23 at 11.03.11 PM.jpeg','modelo de relacion.PNG'),('932432432','AprovaProyecto.pdf','SICOVIPv5.pdf','Vision.pdf'),('93892','14100517_524712651064309_8754159155534007906_n.png','Poster_5.jpg','14485136_1890936724471881_4908323458715384616_n.jpg'),('95','CartaKiana.docx','Scanned.pdf','OfertaB1-2017.pdf'),('98765542','Plano','Carta','Dibujo'),('9876554444','','Carta.txt','AUTOCAD.txt'),('987665','','AUTOCAD.txt','Plano.txt'),('998877','14100517_524712651064309_8754159155534007906_n.png','Scanned from a Xerox Multifunction Printer.pdf','guia_horarios_nicoya_IIciclo2016.pdf'),('Z8293782','','AUTOCAD.txt','Carta.txt');

/*Table structure for table `sv05tipusu` */

DROP TABLE IF EXISTS `sv05tipusu`;

CREATE TABLE `sv05tipusu` (
  `sv05codu` int(11) NOT NULL COMMENT 'tipo de usuario \n\ncodigo de usuario \ndetalle de usuario',
  `sv05detu` varchar(50) NOT NULL,
  PRIMARY KEY (`sv05codu`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `sv05tipusu` */

insert  into `sv05tipusu`(`sv05codu`,`sv05detu`) values (1,'Administrador'),(2,'Usuario'),(3,'Plataforma');

/*Table structure for table `sv06tipprop` */

DROP TABLE IF EXISTS `sv06tipprop`;

CREATE TABLE `sv06tipprop` (
  `sv06codp` int(11) NOT NULL COMMENT 'tabla tipo de propietario\ncodigo de propietario \ndetalle de propietario',
  `sv06detp` varchar(50) NOT NULL,
  PRIMARY KEY (`sv06codp`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `sv06tipprop` */

insert  into `sv06tipprop`(`sv06codp`,`sv06detp`) values (1,'Fisico'),(2,'Juridico'),(3,'test');

/*Table structure for table `sv07tpgfo` */

DROP TABLE IF EXISTS `sv07tpgfo`;

CREATE TABLE `sv07tpgfo` (
  `sv07cdtp` varchar(15) NOT NULL COMMENT 'tabla de topografo codigo de ingeniero topografocedula topografo nombre topoapellidos topoestdo de cuenta de topocontra codigo de tipo de usuario',
  `sv07cedt` varchar(15) NOT NULL,
  `sv07nomt` varchar(200) NOT NULL,
  `sv07apdt` varchar(200) NOT NULL,
  `sv07estd` varchar(100) NOT NULL,
  `sv07pass` varchar(250) NOT NULL,
  `sv07emt` varchar(50) NOT NULL,
  `sv05codu` int(11) NOT NULL,
  PRIMARY KEY (`sv07cdtp`,`sv05codu`),
  KEY `fk_SV07TPGFO_SV05TIPUSU1_idx` (`sv05codu`),
  CONSTRAINT `fk_SV07TPGFO_SV05TIPUSU1` FOREIGN KEY (`sv05codu`) REFERENCES `sv05tipusu` (`sv05codu`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `sv07tpgfo` */

insert  into `sv07tpgfo`(`sv07cdtp`,`sv07cedt`,`sv07nomt`,`sv07apdt`,`sv07estd`,`sv07pass`,`sv07emt`,`sv05codu`) values ('0502','503860180','Daniel','Ramos','2','8cb2237d0679ca88db6464eac60da96345513964','abarcamayra50@gmail.com',1),('4477','900470273','Mayra','Abarca','2','8cb2237d0679ca88db6464eac60da96345513964','abarcamayra50@gmail.com',1),('52525','504100492','Edrick','Lopez','2','b1b3773a05c0ed0176787a4f1574ff0075f7521e','dani.ramos92@gmail.com',1),('543','242432','Alex','Valle','1','12345','danielramosr45@gmail.com',1),('555','5020001000','Juan','Royo','1','348162101fc6f7e624681b7400b085eeac6df7bd','dani.ramos92@gmail.com',1),('A1992','707770779','JosÃ© Reynaldo','Ramos Espinoza','1','8cb2237d0679ca88db6464eac60da96345513964','dani.ramos92@hotmail.com',1);

/*Table structure for table `sv08trmte` */

DROP TABLE IF EXISTS `sv08trmte`;

CREATE TABLE `sv08trmte` (
  `sv08conse` varchar(15) NOT NULL COMMENT 'Tramite\n\nconsecutivo\nfecha solicitud\nfecha ultima modificacion \ncedula cliente-topo\ncedula propietario\nnumero de finca\n',
  `sv08fchs` datetime NOT NULL,
  `sv08fumt` datetime NOT NULL,
  `sv01cedc` varchar(15) NOT NULL,
  `sv03cedp` varchar(15) NOT NULL,
  `sv04nfin` varchar(20) NOT NULL,
  `sv02code` int(11) NOT NULL,
  PRIMARY KEY (`sv08conse`,`sv01cedc`,`sv03cedp`,`sv04nfin`,`sv02code`),
  KEY `fk_SV08TRMTE_SV01CLNTE_idx` (`sv01cedc`),
  KEY `fk_SV08TRMTE_SV03PTARIO1_idx` (`sv03cedp`),
  KEY `fk_SV08TRMTE_SV04REQTOS1_idx` (`sv04nfin`),
  KEY `fk_SV08TRMTE_SV02ESTDO1_idx` (`sv02code`),
  CONSTRAINT `fk_SV08TRMTE_SV01CLNTE` FOREIGN KEY (`sv01cedc`) REFERENCES `sv01clnte` (`sv01cedc`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_SV08TRMTE_SV02ESTDO1` FOREIGN KEY (`sv02code`) REFERENCES `sv02estdo` (`sv02code`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_SV08TRMTE_SV03PTARIO1` FOREIGN KEY (`sv03cedp`) REFERENCES `sv03ptario` (`sv03cedp`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_SV08TRMTE_SV04REQTOS1` FOREIGN KEY (`sv04nfin`) REFERENCES `sv04reqtos` (`sv04nfin`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `sv08trmte` */

insert  into `sv08trmte`(`sv08conse`,`sv08fchs`,`sv08fumt`,`sv01cedc`,`sv03cedp`,`sv04nfin`,`sv02code`) values ('0104201712','2017-03-31 23:50:11','2017-03-31 23:50:11','503860180','1234567','987665',8),('0504201713','2017-04-05 13:48:52','2017-04-05 13:48:52','503860180','777792920','543218',7),('0504201714','2017-04-05 13:58:21','2017-04-05 13:58:21','503860180','8372990','737899',8),('0504201715','2017-04-05 14:03:27','2017-04-05 14:03:27','503860180','78878892','778432',8),('0504201716','2017-04-05 14:10:12','2017-04-05 14:10:12','503860180','63272899','632782',8),('0504201717','2017-04-05 14:13:39','2017-04-05 14:13:39','503860180','501800386','9876554444',8),('0604201718','2017-04-05 23:54:41','2017-04-05 23:54:41','403760156','1123856393','67387323',6),('0604201719','2017-04-06 10:22:55','2017-04-06 10:22:55','306730139','784899','46789',8),('0604201720','2017-04-06 10:55:58','2017-04-06 10:55:58','2077530','6754322','557813456',8),('070420171','2017-04-07 14:03:14','2017-04-07 14:03:14','504670340','402380566','7777777777',8),('0804201724','2017-04-08 14:38:48','2017-04-08 14:38:48','602980190','1234567','Z8293782',8),('1023032017','2017-03-23 13:47:08','2017-03-23 13:47:08','509530180','705890253','123456789',8),('1128032017','2017-03-28 10:37:37','2017-03-28 10:37:37','406790123','501800386','54321',8),('120170222','2017-02-23 00:09:32','2017-02-23 00:09:32','501100809','503860180','12345',8),('201611104','2016-11-10 11:13:42','2016-11-10 11:13:42','903780122','605800253','12345',6),('201611105','2016-11-10 12:02:31','2016-11-10 12:02:31','608820331','401230788','82134',8),('201703118','2017-03-10 21:49:03','2017-03-10 21:49:03','142','503860180','123213',5),('66666666','2017-04-08 00:35:13','2017-04-08 00:35:13','142','501800386','888888',8),('915032017','2017-03-15 16:56:49','2017-03-15 16:56:49','1234567','987765432','25',7),('99999999','2017-04-08 00:47:17','2017-04-08 00:47:17','142','501800386','5555555',8);

/*Table structure for table `sv09vsdo` */

DROP TABLE IF EXISTS `sv09vsdo`;

CREATE TABLE `sv09vsdo` (
  `sv09npln` varchar(20) NOT NULL COMMENT 'tabla visado \nnumero de plano \nnumero de folio \nnumero de predio \nminuta(archivo)\nfecha de visado \nconsecutivo\ncedula de cliente-top\ncedila de propietario\nnumero de finca\ncodigo de estado\ncodigo de topografo\ncodigo de tipo de usuario\n',
  `sv09nfol` varchar(20) NOT NULL,
  `sv09npre` varchar(20) NOT NULL,
  `sv09mnt` varchar(100) NOT NULL,
  `sv09fvdp` date NOT NULL,
  `sv09fumv` date NOT NULL,
  `sv08conse` varchar(15) NOT NULL,
  `sv01cedc` varchar(15) NOT NULL,
  `sv03cedp` varchar(15) NOT NULL,
  `sv04nfin` varchar(20) NOT NULL,
  `sv02code` int(11) NOT NULL,
  `sv07cdtp` varchar(5) NOT NULL,
  `sv05codu` int(11) NOT NULL,
  PRIMARY KEY (`sv09npln`,`sv08conse`,`sv01cedc`,`sv03cedp`,`sv04nfin`,`sv02code`,`sv07cdtp`,`sv05codu`),
  KEY `fk_SV09VSDO_SV08TRMTE1_idx` (`sv08conse`,`sv01cedc`,`sv03cedp`,`sv04nfin`),
  KEY `fk_SV09VSDO_SV02ESTDO1_idx` (`sv02code`),
  KEY `fk_SV09VSDO_SV07TPGFO1_idx` (`sv07cdtp`,`sv05codu`),
  CONSTRAINT `fk_SV09VSDO_SV02ESTDO1` FOREIGN KEY (`sv02code`) REFERENCES `sv02estdo` (`sv02code`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_SV09VSDO_SV07TPGFO1` FOREIGN KEY (`sv07cdtp`, `sv05codu`) REFERENCES `sv07tpgfo` (`sv07cdtp`, `sv05codu`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_SV09VSDO_SV08TRMTE1` FOREIGN KEY (`sv08conse`, `sv01cedc`, `sv03cedp`, `sv04nfin`) REFERENCES `sv08trmte` (`sv08conse`, `sv01cedc`, `sv03cedp`, `sv04nfin`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `sv09vsdo` */

insert  into `sv09vsdo`(`sv09npln`,`sv09nfol`,`sv09npre`,`sv09mnt`,`sv09fvdp`,`sv09fumv`,`sv08conse`,`sv01cedc`,`sv03cedp`,`sv04nfin`,`sv02code`,`sv07cdtp`,`sv05codu`) values ('12','456789','1-222-000-222','','2017-04-06','2017-04-13','0104201712','503860180','1234567','987665',1,'555',1),('12345','654321','1-030-020','','2017-04-06','2017-04-06','201611104','903780122','605800253','12345',1,'555',1),('4432255','z-896507','1-000-040-000','','2017-04-08','2017-04-10','1128032017','406790123','501800386','54321',1,'555',1),('54321','8278398','1-222-000-937','','2017-04-06','2017-04-13','201611105','608820331','401230788','82134',1,'555',1),('83829','37282934','1-000-020-000','','2017-04-06','2017-04-06','0104201712','503860180','1234567','987665',1,'555',1),('883002','','','','2017-04-14','2017-04-08','0504201717','503860180','501800386','9876554444',1,'555',1),('A3333333','2222222','1111111','NAME','2017-04-11','2017-04-08','66666666','142','501800386','888888',1,'555',1),('F3749384','237948','98347755533','','2017-04-08','2017-04-08','99999999','142','501800386','5555555',1,'555',1),('g-30865-2017','689530','1-008-006-000','','2017-04-06','2017-04-13','0604201719','306730139','784899','46789',1,'555',1),('g6543380007655','7806757','1-098-054-887','DCT-e-XXXX-X-2016 (XX).xls','2017-04-06','2017-04-05','0604201718','403760156','1123856393','67387323',1,'555',1),('g6678834','12345678','97654321','','2017-04-07','2017-04-13','070420171','504670340','402380566','7777777777',1,'555',1),('kd2121','hd-889049','1-008-007-000','','2017-04-10','2017-04-13','0804201724','602980190','1234567','Z8293782',1,'555',1);

/*Table structure for table `sv10ctlcon` */

DROP TABLE IF EXISTS `sv10ctlcon`;

CREATE TABLE `sv10ctlcon` (
  `sv10codcon` int(11) NOT NULL AUTO_INCREMENT,
  `sv10fech` date NOT NULL,
  PRIMARY KEY (`sv10codcon`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=latin1;

/*Data for the table `sv10ctlcon` */

insert  into `sv10ctlcon`(`sv10codcon`,`sv10fech`) values (1,'2016-11-03'),(2,'2016-11-03'),(3,'2016-11-08'),(4,'2016-11-10'),(5,'2016-11-10'),(6,'2016-11-10'),(7,'2017-02-23'),(8,'2017-03-09'),(9,'2017-03-10'),(10,'2017-03-15'),(11,'2017-03-23'),(12,'2017-03-28'),(13,'2017-03-31'),(14,'2017-04-05'),(15,'2017-04-05'),(16,'2017-04-05'),(17,'2017-04-05'),(18,'2017-04-05'),(19,'2017-04-05'),(20,'2017-04-06'),(21,'2017-04-06'),(22,'2017-04-07'),(23,'2017-04-08'),(24,'2017-04-08'),(25,'2017-04-08');

/*Table structure for table `sv11res` */

DROP TABLE IF EXISTS `sv11res`;

CREATE TABLE `sv11res` (
  `sv11cod` int(11) NOT NULL AUTO_INCREMENT,
  `sv07cdtp` varchar(5) NOT NULL,
  `sv11tok` varchar(65) NOT NULL,
  `sv11fchs` datetime NOT NULL,
  PRIMARY KEY (`sv11cod`)
) ENGINE=InnoDB AUTO_INCREMENT=50 DEFAULT CHARSET=latin1;

/*Data for the table `sv11res` */

insert  into `sv11res`(`sv11cod`,`sv07cdtp`,`sv11tok`,`sv11fchs`) values (49,'0502','e8e93e17a1dca08a7b5708cb769b1dbc19656321','2017-03-29 16:55:04');

/* Trigger structure for table `sv08trmte` */

DELIMITER $$

/*!50003 DROP TRIGGER*//*!50032 IF EXISTS */ /*!50003 `after_tramite` */$$

/*!50003 CREATE */ /*!50017 DEFINER = 'root'@'localhost' */ /*!50003 TRIGGER `after_tramite` AFTER INSERT ON `sv08trmte` FOR EACH ROW BEGIN 
INSERT INTO sv10ctlcon(sv10fech) VALUES (CURDATE());
END */$$


DELIMITER ;

/* Procedure structure for procedure `ActualizarCliente` */

/*!50003 DROP PROCEDURE IF EXISTS  `ActualizarCliente` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `ActualizarCliente`(
in Psv01cedc varchar(15),
in Psv01cdtpc varchar(5),
in Psv01nomc varchar(200),
in Psv01apdc varchar (200),
in Psv01emc varchar(50),
in Psv01telc int)
BEGIN
START TRANSACTION;
UPDATE sv01clnte set sv01cdtpc=Psv01cdtpc,sv01nomc=Psv01nomc,sv01apdc=Psv01apdc,sv01emc=Psv01emc,sv01telc=Psv01telc
 Where sv01cedc=Psv01cedc;
COMMIT;
END */$$
DELIMITER ;

/* Procedure structure for procedure `ActualizarEstado` */

/*!50003 DROP PROCEDURE IF EXISTS  `ActualizarEstado` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `ActualizarEstado`(
in Psv02code int(11),
in Psv02dete varchar(50))
BEGIN
START TRANSACTION;
UPDATE sv02estdo SET sv02dete=Psv02dete WHERE sv02code=Psv02code;
COMMIT;
END */$$
DELIMITER ;

/* Procedure structure for procedure `ActualizarPropietario` */

/*!50003 DROP PROCEDURE IF EXISTS  `ActualizarPropietario` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `ActualizarPropietario`(
in Psv03cedp varchar(15),
in Psv03nomp varchar(200),
in Psv03apdp varchar(200),
in Psv03emp varchar(50),
in Psv03telp int,
in Psv06codp int)
BEGIN
START TRANSACTION;
UPDATE sv03ptario set sv03nomp=Psv03nomp,sv03apdp=Psv03apdp,sv03emp=Psv03emp,sv03telp=Psv03telp,sv06codp=Psv06codp
WHERE sv03cedp=Psv03cedp;
COMMIT;
END */$$
DELIMITER ;

/* Procedure structure for procedure `ActualizarRequisitos` */

/*!50003 DROP PROCEDURE IF EXISTS  `ActualizarRequisitos` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `ActualizarRequisitos`(
in Psv04nfin varchar(20),
in Psv04apln varchar(100),
in Psv04aact varchar(100),
in Psv04acta varchar(100))
BEGIN
START TRANSACTION;
UPDATE sv04reqtos set sv04apln=Psv04apln,sv04aact=Psv04aact,sv04acta=Psv04acta
WHERE sv04nfin=Psv04nfin;
COMMIT;
END */$$
DELIMITER ;

/* Procedure structure for procedure `ActualizarTipoPropietario` */

/*!50003 DROP PROCEDURE IF EXISTS  `ActualizarTipoPropietario` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `ActualizarTipoPropietario`(
in Psv06codp int,
in Psv06detp varchar(50))
BEGIN
START TRANSACTION;
UPDATE sv06tipprop SET sv06detp=Psv06detp
WHERE sv06codp=Psv06codp;
COMMIT;
END */$$
DELIMITER ;

/* Procedure structure for procedure `ActualizarTipoUsuario` */

/*!50003 DROP PROCEDURE IF EXISTS  `ActualizarTipoUsuario` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `ActualizarTipoUsuario`(
in Psv05codu int,
in Psv05detu varchar(50))
BEGIN
START TRANSACTION;
UPDATE sv05tipusu SET sv05detu=Psv05detu
WHERE sv05codu=Psv05codu;
COMMIT;
END */$$
DELIMITER ;

/* Procedure structure for procedure `AddTramite` */

/*!50003 DROP PROCEDURE IF EXISTS  `AddTramite` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `AddTramite`(
In Psv08conse VARCHAR(15),
In Psv01cedc VARCHAR(15),
In Psv03cedp VARCHAR(15),
In Psv04nfin VARCHAR(20)
)
BEGIN
START TRANSACTION;
INSERT INTO sv08trmte(sv08conse,sv08fchs,sv08fumt,sv01cedc,sv03cedp,sv04nfin,sv02code)
VALUES (Psv08conse,NOW(),NOW(),Psv01cedc,Psv03cedp,Psv04nfin,7);
COMMIT;
END */$$
DELIMITER ;

/* Procedure structure for procedure `AgregarCliente` */

/*!50003 DROP PROCEDURE IF EXISTS  `AgregarCliente` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `AgregarCliente`(
in Psv01cedc varchar(15),
in Psv01cdtpc varchar(5),
in Psv01nomc varchar(200),
in Psv01apdc varchar (200),
in Psv01emc varchar(50),
in Psv01telc int)
BEGIN
START TRANSACTION;
INSERT INTO sv01clnte (sv01cedc,sv01cdtpc,sv01nomc,sv01apdc,sv01emc,sv01telc)
VALUES (Psv01cedc,Psv01cdtpc,Psv01nomc,Psv01apdc,Psv01emc,Psv01telc);
COMMIT;
END */$$
DELIMITER ;

/* Procedure structure for procedure `AgregarEstado` */

/*!50003 DROP PROCEDURE IF EXISTS  `AgregarEstado` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `AgregarEstado`(
in Psv02code int,
in Psv02dete varchar(50))
BEGIN
START TRANSACTION;
INSERT INTO sv02estdo (sv02code,sv02dete) VALUES (Psv02code,Psv02dete);
COMMIT;
END */$$
DELIMITER ;

/* Procedure structure for procedure `AgregarPropietario` */

/*!50003 DROP PROCEDURE IF EXISTS  `AgregarPropietario` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `AgregarPropietario`(
in Psv03cedp varchar(15),
in Psv03nomp varchar(200),
in Psv03apdp varchar(200),
in Psv03emp varchar(50),
in Psv03telp int,
in Psv06codp int)
BEGIN
START TRANSACTION;
INSERT INTO sv03ptario (sv03cedp,sv03nomp,sv03apdp,sv03emp,sv03telp,sv06codp)
VALUES (Psv03cedp,Psv03nomp,Psv03apdp,Psv03emp,Psv03telp,Psv06codp);
COMMIT;
END */$$
DELIMITER ;

/* Procedure structure for procedure `AgregarRequisitos` */

/*!50003 DROP PROCEDURE IF EXISTS  `AgregarRequisitos` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `AgregarRequisitos`(
in Psv04nfin varchar(20),
in Psv04apln varchar(100),
in Psv04aact varchar(100),
in Psv04acta varchar(100))
BEGIN
START TRANSACTION;
INSERT INTO sv04reqtos (sv04nfin,sv04apln,sv04aact,sv04acta) 
VALUES (Psv04nfin,Psv04apln,Psv04aact,Psv04acta);
COMMIT;
END */$$
DELIMITER ;

/* Procedure structure for procedure `AgregarTipoPropietario` */

/*!50003 DROP PROCEDURE IF EXISTS  `AgregarTipoPropietario` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `AgregarTipoPropietario`(
in Psv06codp int,
in Psv06detp varchar(50))
BEGIN
START TRANSACTION;
INSERT INTO sv06tipprop (sv06codp,sv06detp)
VALUES (Psv06codp,Psv06detp);
COMMIT;
END */$$
DELIMITER ;

/* Procedure structure for procedure `AgregarTipoUsuario` */

/*!50003 DROP PROCEDURE IF EXISTS  `AgregarTipoUsuario` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `AgregarTipoUsuario`(
in Psv05codu int,
in Psv05detu varchar(50))
BEGIN
START TRANSACTION;
INSERT INTO sv05tipusu (sv05codu,sv05detu)
VALUES (Psv05codu,Psv05detu);
COMMIT;
END */$$
DELIMITER ;

/* Procedure structure for procedure `AgregarTopografo` */

/*!50003 DROP PROCEDURE IF EXISTS  `AgregarTopografo` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `AgregarTopografo`(
IN Psv07cdtp VARCHAR(5),
IN Psv07cedt VARCHAR(15),
IN Psv07nomt VARCHAR(200),
IN Psv07apdt VARCHAR(200),
IN Psv07estd Varchar (100),
IN Psv07pass VARCHAR(20),
IN Psv05codu INT)
BEGIN
START TRANSACTION;
INSERT INTO sv07tpgfo (sv07cdtp,sv07cedt,sv07nomt,sv07apdt,sv07estd,sv07pass,sv05codu)
VALUES (Psv07cdtp,Psv07cedt,Psv07nomt,psv07apdt,Psv07estd,Psv07pass,Psv05codu);
COMMIT;
END */$$
DELIMITER ;

/* Procedure structure for procedure `ConsultarCliente` */

/*!50003 DROP PROCEDURE IF EXISTS  `ConsultarCliente` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `ConsultarCliente`(IN Psv01cedc VARCHAR(15))
BEGIN
START TRANSACTION;
SELECT sv01cedc,sv01cdtpc,sv01nomc,sv01apdc,sv01emc,sv01telc FROM sv01clnte WHERE sv01cedc=Psv01cedc;
COMMIT;
END */$$
DELIMITER ;

/* Procedure structure for procedure `ConsultarEstado` */

/*!50003 DROP PROCEDURE IF EXISTS  `ConsultarEstado` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `ConsultarEstado`(
in Psv02code int)
BEGIN
START TRANSACTION;
SELECT sv02code,sv02dete FROM sv02estdo WHERE sv02code=Psv02code;
COMMIT;
END */$$
DELIMITER ;

/* Procedure structure for procedure `ConsultarPropietario` */

/*!50003 DROP PROCEDURE IF EXISTS  `ConsultarPropietario` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `ConsultarPropietario`(
in Psv03cedp varchar(15))
BEGIN
START TRANSACTION;
SELECT sv03cedp,sv03nomp,sv03apdp,sv03emp,sv03telp,sv06codp FROM sv03ptario WHERE sv03cedp=Psv03cedp;
COMMIT;
END */$$
DELIMITER ;

/* Procedure structure for procedure `ConsultarPropietarios` */

/*!50003 DROP PROCEDURE IF EXISTS  `ConsultarPropietarios` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `ConsultarPropietarios`()
BEGIN
START TRANSACTION;
SELECT sv03cedp,sv03nomp,sv03apdp,sv03emp,sv03telp,sv06codp FROM sv03ptario;
COMMIT;
END */$$
DELIMITER ;

/* Procedure structure for procedure `ConsultarRequisito` */

/*!50003 DROP PROCEDURE IF EXISTS  `ConsultarRequisito` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `ConsultarRequisito`(in Psv04nfin varchar(20))
BEGIN
START TRANSACTION;
SELECT sv04nfin,sv04apln,sv04aact,sv04acta FROM sv04reqtos WHERE sv04nfin=Psv04nfin;
COMMIT;
END */$$
DELIMITER ;

/* Procedure structure for procedure `ConsultarTipoPropietario` */

/*!50003 DROP PROCEDURE IF EXISTS  `ConsultarTipoPropietario` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `ConsultarTipoPropietario`(in Psv06codp int)
BEGIN
START TRANSACTION;
SELECT sv06codp,sv06detp FROM sv06tipprop WHERE sv06codp=Psv06codp;
END */$$
DELIMITER ;

/* Procedure structure for procedure `ConsultarTipoUsuario` */

/*!50003 DROP PROCEDURE IF EXISTS  `ConsultarTipoUsuario` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `ConsultarTipoUsuario`(
in Psv05codu int)
BEGIN
START TRANSACTION;
SELECT sv05codu,sv05detu FROM sv05tipusu WHERE sv05codu=Psv05codu;
COMMIT;
END */$$
DELIMITER ;

/* Procedure structure for procedure `EliminarEstado` */

/*!50003 DROP PROCEDURE IF EXISTS  `EliminarEstado` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `EliminarEstado`(
in Psv02code int)
BEGIN
START TRANSACTION;
DELETE FROM sv02estdo WHERE sv02code=Psv02code;
COMMIT;
END */$$
DELIMITER ;

/* Procedure structure for procedure `EliminarPropietario` */

/*!50003 DROP PROCEDURE IF EXISTS  `EliminarPropietario` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `EliminarPropietario`(
in Psv03cedp int)
BEGIN
START TRANSACTION;
DELETE FROM sv03ptario WHERE sv03cedp=Psv03cedp;
COMMIT;
END */$$
DELIMITER ;

/* Procedure structure for procedure `EliminarTipoUsuario` */

/*!50003 DROP PROCEDURE IF EXISTS  `EliminarTipoUsuario` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `EliminarTipoUsuario`(
in Psv05codu int)
BEGIN
START TRANSACTION;
DELETE FROM sv05tipusu WHERE sv05codu=Psv05codu;
COMMIT;
END */$$
DELIMITER ;

/* Procedure structure for procedure `ListarEstados` */

/*!50003 DROP PROCEDURE IF EXISTS  `ListarEstados` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `ListarEstados`()
BEGIN
START TRANSACTION;
SELECT sv02code,sv02dete FROM sv02estdo;
COMMIT;
END */$$
DELIMITER ;

/* Procedure structure for procedure `ListarRequisitos` */

/*!50003 DROP PROCEDURE IF EXISTS  `ListarRequisitos` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `ListarRequisitos`()
BEGIN
START TRANSACTION;
SELECT sv04nfin,sv04apln,sv04aact,sv04acta FROM sv04reqtos;
COMMIT;
END */$$
DELIMITER ;

/* Procedure structure for procedure `ListartarClientes` */

/*!50003 DROP PROCEDURE IF EXISTS  `ListartarClientes` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `ListartarClientes`()
BEGIN
START TRANSACTION;
SELECT sv01cedc,sv01cdtpc,sv01nomc,sv01apdc,sv01emc,sv01telc FROM sv01clnte;
COMMIT;
END */$$
DELIMITER ;

/* Procedure structure for procedure `ListarTipoPropietario` */

/*!50003 DROP PROCEDURE IF EXISTS  `ListarTipoPropietario` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `ListarTipoPropietario`()
BEGIN
START TRANSACTION;
SELECT sv06codp,sv06detp FROM sv06tipprop;
COMMIT; 
END */$$
DELIMITER ;

/* Procedure structure for procedure `ListarTipoUsuarios` */

/*!50003 DROP PROCEDURE IF EXISTS  `ListarTipoUsuarios` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `ListarTipoUsuarios`()
BEGIN
START TRANSACTION;
SELECT sv05codu,sv05detu FROM sv05tipusu;
COMMIT;
END */$$
DELIMITER ;

/* Procedure structure for procedure `ListarUsu` */

/*!50003 DROP PROCEDURE IF EXISTS  `ListarUsu` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `ListarUsu`()
BEGIN
START TRANSACTION;
SELECT sv07cdtp,sv07cedt,sv07nomt,sv07apdt,sv07estd,sv07pass,sv05codu FROM sv07tpgfo;
COMMIT;
END */$$
DELIMITER ;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
