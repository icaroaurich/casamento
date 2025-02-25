-- MySQL Administrator dump 1.4
--
-- ------------------------------------------------------
-- Server version	5.7.27-log


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


--
-- Create schema casamento
--

CREATE DATABASE IF NOT EXISTS casamento;
USE casamento;

--
-- Definition of table `padrinhos`
--

DROP TABLE IF EXISTS `padrinhos`;
CREATE TABLE `padrinhos` (
  `idPadrinhos` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `Nome` varchar(45) DEFAULT NULL,
  `Noivo` tinyint(1) unsigned DEFAULT '0',
  `casal` tinyint(1) unsigned DEFAULT NULL,
  PRIMARY KEY (`idPadrinhos`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=latin1;

INSERT INTO `padrinhos` (`idPadrinhos`,`Nome`,`Noivo`,`casal`) VALUES 
 (7,'Luciano',1,2),
 (8,'Fernanda',1,2),
 (9,'Bia',1,1),
 (10,'Emerson',1,1),
 (11,'Thaynara',0,3),
 (12,'Gabriel',0,3),
 (13,'Adriana',1,4),
 (14,'Má',1,4),
 (15,'Jáfia',1,5),
 (17,'Raul',0,6),
 (18,'Ana Clara',0,6),
 (19,'Allan',0,7),
 (20,'Samanta',0,7),
 (25,'Marcos',1,5),
 (26,'Gislaine',0,8),
 (27,'Carlinhos',0,8);
/*!40000 ALTER TABLE `padrinhos` ENABLE KEYS */;




/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
