CREATE DATABASE  IF NOT EXISTS `rent_house` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `rent_house`;
-- MySQL dump 10.13  Distrib 8.0.19, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: rent_house
-- ------------------------------------------------------
-- Server version	5.7.35

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `houses`
--

DROP TABLE IF EXISTS `houses`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `houses` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `address` varchar(100) DEFAULT NULL,
  `cost` int(11) DEFAULT NULL,
  `area` int(11) DEFAULT NULL,
  `type` varchar(50) DEFAULT NULL,
  `description` varchar(1000) DEFAULT NULL,
  `iduser` int(11) DEFAULT NULL,
  `img` varchar(1000) DEFAULT NULL,
  `district` varchar(45) DEFAULT NULL,
  `street` varchar(45) DEFAULT NULL,
  `bedroom` int(11) DEFAULT NULL,
  `bathroom` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `iduser` (`iduser`),
  CONSTRAINT `houses_ibfk_1` FOREIGN KEY (`iduser`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `houses`
--

LOCK TABLES `houses` WRITE;
/*!40000 ALTER TABLE `houses` DISABLE KEYS */;
INSERT INTO `houses` VALUES (9,'trete',345455,45,'phong tro','',2,'H6tycvyaWJyt.jpeg;','hai ba trung',NULL,NULL,NULL),(10,'dsgdfg',4534534,454,'chung cu mini','',2,'95TEQxPbBNimages.jpeg;','hai ba trung',NULL,NULL,NULL),(11,'asdfads',343434,43,'nha nguyen can','',5,'KgybekEu3Ehg.png;l5VuIKT5nsimages.jpeg;OxihgdS56cmonkas.png;4faOdZL3TRpoggers.jpg;','dong da',NULL,NULL,NULL),(12,'ffsdf',232323,323,'chung cu mini','',2,'nHnNuPliONcover9.jpg;','hai ba trung',NULL,NULL,NULL),(13,'fasdfsd',234234234,344,'chung cu mini','',2,'WNbQSvnkdjcover9.jpg;','hai ba trung',NULL,NULL,NULL),(15,'4323423',3434234,43,'chung cu mini','',2,'eHfVwEjVKncover9.jpg;','hai ba trung',NULL,NULL,NULL),(19,'adfsad',1231232,23,'chung cu mini','',2,'ZGl3cngdAscover9.jpg;','hai ba trung',NULL,NULL,NULL),(21,'werwer',3423423,34,'chung cu mini','',2,'i1OCVJr4Hscover9.jpg;','hai ba trung',NULL,NULL,NULL),(22,'234ewfs',3423423,343,'chung cu mini','',2,'CDjZwhrKNRcover9.jpg;','hai ba trung',NULL,NULL,NULL);
/*!40000 ALTER TABLE `houses` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `saves`
--

DROP TABLE IF EXISTS `saves`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `saves` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `iduser` int(11) DEFAULT NULL,
  `idhouse` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `saves`
--

LOCK TABLES `saves` WRITE;
/*!40000 ALTER TABLE `saves` DISABLE KEYS */;
INSERT INTO `saves` VALUES (4,2,3),(5,2,4),(11,2,7),(12,2,12),(13,2,13),(17,1,6),(18,1,5),(19,1,8),(20,1,11),(21,1,12);
/*!40000 ALTER TABLE `saves` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `pass` varchar(1000) DEFAULT NULL,
  `phone` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'trang1','trang@gmail.com','$2y$10$y1feGA5XDZo7aA0U.Vdie.eWz9uYqr8OvJZbJ97OgTrLyqkKPghRe',NULL),(2,'trang123','trang@gmail.com','$2y$10$OWhRz6LvzjrNvF3Bpo/YkO4t3xBKjoNHsAu1BwCcGNTuchPHISrw.',NULL),(5,'trang43','trang3@gmail.com','$2y$10$40K0DTM0Ex6Jzlm/bJVftOGsVyQiu6ZjL27aEmBdsTjxvQRWNRpJ.','0123456789');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-08-20 21:43:54
