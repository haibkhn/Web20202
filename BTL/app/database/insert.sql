CREATE DATABASE  IF NOT EXISTS `rent_house` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `rent_house`;
-- MySQL dump 10.13  Distrib 8.0.22, for Linux (x86_64)
--
-- Host: localhost    Database: rent_house
-- ------------------------------------------------------
-- Server version	8.0.25-0ubuntu0.20.04.1

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
  `id` int NOT NULL AUTO_INCREMENT,
  `addr` varchar(100) DEFAULT NULL,
  `cost` int DEFAULT NULL,
  `s` int DEFAULT NULL,
  `type` varchar(50) DEFAULT NULL,
  `scribble` varchar(1000) DEFAULT NULL,
  `iduser` int DEFAULT NULL,
  `img` varchar(1000) DEFAULT NULL,
  `site` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `iduser` (`iduser`),
  CONSTRAINT `houses_ibfk_1` FOREIGN KEY (`iduser`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `houses`
--

LOCK TABLES `houses` WRITE;
/*!40000 ALTER TABLE `houses` DISABLE KEYS */;
INSERT INTO `houses` VALUES (3,'sdfasdf',234234,34,'chung cu mini','',2,'oF4sNKvICApoggers.jpg;6N6XkVSTOldf.jpeg;dfUDWn7plbfd.png;','hai ba trung'),(4,'sdfdf',234233,34,'chung cu mini','',2,'3QpEsZsp3iimages.jpeg;','hai ba trung'),(5,'fsdgdf',234234,34,'chung cu mini','',2,'Wg0GN1EGAiyt.jpeg;','hai ba trung'),(6,'fsdfsf',2342344,43,'chung cu mini','',2,'IlFeFH4nqOimages.jpeg;','hai ba trung'),(7,'gerg',564566,454,'chung cu mini','',2,'9XpRSWw4fLhg.png;','hai ba trung'),(8,'sadfet',546456,34,'chung cu mini','',2,'syhd6dYotzhg.png;','hai ba trung'),(9,'trete',345455,45,'phong tro','',2,'H6tycvyaWJyt.jpeg;','hai ba trung'),(10,'dsgdfg',4534534,454,'chung cu mini','',2,'95TEQxPbBNimages.jpeg;','hai ba trung'),(11,'asdfads',343434,43,'nha nguyen can','',5,'KgybekEu3Ehg.png;l5VuIKT5nsimages.jpeg;OxihgdS56cmonkas.png;4faOdZL3TRpoggers.jpg;','dong da'),(12,'ffsdf',232323,323,'chung cu mini','',2,'nHnNuPliONcover9.jpg;','hai ba trung'),(13,'fasdfsd',234234234,344,'chung cu mini','',2,'WNbQSvnkdjcover9.jpg;','hai ba trung'),(14,'dfasdfasd',234323,34,'chung cu mini','',2,'wDN3g3ZYTIcover9.jpg;','hai ba trung'),(15,'4323423',3434234,43,'chung cu mini','',2,'eHfVwEjVKncover9.jpg;','hai ba trung'),(16,'dfgdf',3423443,34,'chung cu mini','',2,'c4SvyXzTyhcover9.jpg;','hai ba trung'),(17,'sdfsd',3423423,34,'chung cu mini','',2,'S1KxT4er6Ncover9.jpg;','hai ba trung'),(18,'ssdfsdf',234323,34,'chung cu mini','',2,'HBoGJtlU0Tcover9.jpg;','hai ba trung'),(19,'adfsad',1231232,23,'chung cu mini','',2,'ZGl3cngdAscover9.jpg;','hai ba trung'),(20,'sadfasdf',423423,34,'chung cu mini','',2,'XEgEoXUkSUcover9.jpg;','hai ba trung'),(21,'werwer',3423423,34,'chung cu mini','',2,'i1OCVJr4Hscover9.jpg;','hai ba trung'),(22,'234ewfs',3423423,343,'chung cu mini','',2,'CDjZwhrKNRcover9.jpg;','hai ba trung'),(23,'wrewer',324334,343,'chung cu mini','',2,'hz6I1kNMzicover9.jpg;','hai ba trung');
/*!40000 ALTER TABLE `houses` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `pass` varchar(1000) DEFAULT NULL,
  `phone` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
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

-- Dump completed on 2021-05-17 20:32:12