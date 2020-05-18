# ************************************************************
# Sequel Pro SQL dump
# Version 4529
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 127.0.0.1 (MySQL 5.5.5-10.4.11-MariaDB)
# Datenbank: videostore
# Erstellt am: 2020-05-16 11:51:39 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Export von Tabelle authors
# ------------------------------------------------------------

LOCK TABLES `authors` WRITE;
/*!40000 ALTER TABLE `authors` DISABLE KEYS */;

INSERT INTO `authors` (`id`, `firstname`, `lastname`)
VALUES
	(1,'Mic','Lennie'),
	(2,'Mildrid','Oger'),
	(3,'Isaak','Yakubov'),
	(4,'Gussy','Kellard'),
	(5,'Isidoro','Lambert'),
	(6,'Morganne','Milton-White'),
	(7,'Skye','Shovelton'),
	(8,'Ingra','Cowderay'),
	(9,'Juliet','Polo'),
	(10,'Lion','Lambeth'),
	(11,'Powell','Maccrie'),
	(12,'Mathias','Bixley'),
	(13,'Iolanthe','Selley'),
	(14,'Alys','Bickford'),
	(15,'Care','Mailes'),
	(16,'Tommie','Joselson'),
	(17,'Walther','Anchor'),
	(18,'Isa','Fernley'),
	(19,'Domenico','Sewards'),
	(20,'Nissa','Buttwell'),
	(21,'Sherri','Flewin'),
	(22,'Merry','Baugham'),
	(23,'Rosanna','Glazebrook'),
	(24,'Juliane','Tipper'),
	(25,'Cornie','Eicheler'),
	(26,'Jarib','Schubart'),
	(27,'Daven','Reggler'),
	(28,'Coral','Stalley'),
	(29,'Earvin','Tregiddo'),
	(30,'Cecile','Springate'),
	(31,'Alver','Ladbury'),
	(32,'Chris','MacCawley'),
	(33,'Emmet','Keave'),
	(34,'Bryant','Gyngell'),
	(35,'Ealasaid','Plante'),
	(36,'Naomi','Willshaw'),
	(37,'Cal','Kordovani'),
	(38,'Shayla','Shenton'),
	(39,'Shurwood','Jacox'),
	(40,'Julina','Cram'),
	(41,'Jyoti','Ericsson'),
	(42,'Giuseppe','Kither'),
	(43,'Carolin','Avard'),
	(44,'Beatrisa','Vanyushin'),
	(45,'Billy','Astbery'),
	(46,'Garek','Fahy'),
	(47,'Ulrick','Dally'),
	(48,'Anna','Grzelak'),
	(49,'Isacco','Extall'),
	(50,'Maddalena','Eagar'),
	(51,'Bernd','Engels');

/*!40000 ALTER TABLE `authors` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
