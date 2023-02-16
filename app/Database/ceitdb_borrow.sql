-- MySQL dump 10.13  Distrib 8.0.31, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: ceitdb
-- ------------------------------------------------------
-- Server version	8.0.31

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
-- Table structure for table `borrow`
--

DROP TABLE IF EXISTS `borrow`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `borrow` (
  `br_id` int NOT NULL AUTO_INCREMENT,
  `id` int DEFAULT NULL,
  `user_id` int DEFAULT NULL,
  `activity` varchar(45) DEFAULT NULL,
  `location` varchar(45) DEFAULT NULL,
  `br_date` date DEFAULT NULL,
  `br_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` int NOT NULL,
  PRIMARY KEY (`br_id`),
  KEY `id_idx` (`id`),
  KEY `br_uid_user_fk_idx` (`user_id`),
  CONSTRAINT `br_uid_user_fk` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`),
  CONSTRAINT `id_itemdata_fk` FOREIGN KEY (`id`) REFERENCES `itemdata` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `borrow`
--

LOCK TABLES `borrow` WRITE;
/*!40000 ALTER TABLE `borrow` DISABLE KEYS */;
INSERT INTO `borrow` VALUES (9,545,NULL,'จัดรายการวิถยุ','F7','2023-02-21','2023-02-03 03:54:12',1),(10,563,NULL,'จัดรายการวิถยุ','F7','2023-02-21','2023-02-03 03:54:12',1),(11,548,NULL,'จัดรายการวิถยุ','F7','2023-02-21','2023-02-03 03:54:12',1),(12,545,NULL,'รับปริญญา','มทส','2023-02-23','2023-02-03 06:41:04',1),(13,545,NULL,'ee','ff','2023-02-16','2023-02-03 06:49:54',1),(14,545,NULL,'ss','sd','2023-02-18','2023-02-03 06:56:34',0),(15,563,NULL,'sd','sd','2023-02-23','2023-02-03 07:10:34',1),(18,548,NULL,'พเด','พเเ','2023-02-20','2023-02-03 09:09:09',1),(19,548,NULL,'g','f','2023-02-16','2023-02-08 06:26:45',1),(20,548,NULL,'งานวัด','วัด','2023-02-21','2023-02-10 06:43:53',1),(21,548,NULL,'ยักใหญ่','ยักใหญ่','2023-02-20','2023-02-10 07:37:15',1),(22,548,NULL,'งานวัด','วัด','2023-02-21','2023-02-10 07:43:39',1),(23,548,NULL,'งานวัด','วัด','2023-03-01','2023-02-10 07:49:51',1),(24,548,NULL,'งานวัด','วัด','2023-02-22','2023-02-10 08:23:39',1),(25,548,NULL,'งานวัด','วัด','2023-02-22','2023-02-13 03:07:31',1),(26,548,1,'งานวันเด็ก','กองบิน','2023-02-20','2023-02-15 04:00:38',1);
/*!40000 ALTER TABLE `borrow` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-02-16 11:22:29
