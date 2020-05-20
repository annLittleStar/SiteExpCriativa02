CREATE DATABASE  IF NOT EXISTS `sea` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `sea`;
-- MySQL dump 10.13  Distrib 8.0.20, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: sea
-- ------------------------------------------------------
-- Server version	8.0.20

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
-- Table structure for table `carro`
--

DROP TABLE IF EXISTS `carro`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `carro` (
  `id` int NOT NULL,
  `marca` varchar(30) NOT NULL,
  `nome` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `carro`
--

LOCK TABLES `carro` WRITE;
/*!40000 ALTER TABLE `carro` DISABLE KEYS */;
INSERT INTO `carro` VALUES (1,'Chevrolet','Opala Comodoro'),(2,'Mitsubishi','Pajero TR4'),(3,'Huyndai','Veloster'),(4,'Peugeot','2007'),(5,'Honda','HRV');
/*!40000 ALTER TABLE `carro` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pneu`
--

DROP TABLE IF EXISTS `pneu`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `pneu` (
  `id` int NOT NULL,
  `nome` varchar(45) NOT NULL,
  `carro` int NOT NULL,
  `disponibilidade` int DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `disponibilidade` (`disponibilidade`),
  KEY `carro` (`carro`),
  CONSTRAINT `pneu_ibfk_1` FOREIGN KEY (`disponibilidade`) REFERENCES `produto` (`id`),
  CONSTRAINT `pneu_ibfk_2` FOREIGN KEY (`carro`) REFERENCES `carro` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pneu`
--

LOCK TABLES `pneu` WRITE;
/*!40000 ALTER TABLE `pneu` DISABLE KEYS */;
INSERT INTO `pneu` VALUES (1,'Hankook Dynamic RA03',1,11),(2,'Pirelli Tornado Beta 4 Lonas',1,2),(3,'Pirelli Scorpion ATR',2,4),(4,'Pirelli Scorpion STR',2,3),(5,'Pirelli Scorpion MUD',2,5),(6,'Technic aro 14',1,12),(7,'Kumho Ecsta PA31',3,13),(8,'Dunlop Direzza DZ102',3,7),(9,'Hankook Laufenn S FIT',3,6),(10,'Dunlop Touring R1',4,8),(11,'Goodyear Assurance Touring',4,14),(12,'Pirelli Cinturato P1',4,9),(13,'Michelin Primacy 3',5,15),(14,'Bridgestone Turanza ER370',5,16),(15,'Dunlop SP SPORT LM704',5,10);
/*!40000 ALTER TABLE `pneu` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `produto`
--

DROP TABLE IF EXISTS `produto`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `produto` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(30) NOT NULL,
  `marca` varchar(30) NOT NULL,
  `preco` double NOT NULL,
  `tipo` enum('Pneu','Produto de limpeza') NOT NULL,
  `quantidade` int NOT NULL,
  `idFunc` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `produto`
--

LOCK TABLES `produto` WRITE;
/*!40000 ALTER TABLE `produto` DISABLE KEYS */;
INSERT INTO `produto` VALUES (2,'Tornado Beta 4 Lonas','Pirelli',150.45,'Pneu',8,1),(3,'Scorpion STR','Pirelli',123.44,'Pneu',15,1),(4,'Scorpion ATR','Pirelli',177.83,'Pneu',7,1),(5,'Scorpion MUD','Pirelli',183.73,'Pneu',6,1),(6,'Laufen S FIT','Hankook',205.47,'Pneu',3,1),(7,'Direzza DZ102','Dunlop',203.82,'Pneu',10,1),(8,'Touring R1','Dunlop',165,'Pneu',1,1),(9,'Cinturato P1','Pirelli',162.63,'Pneu',21,1),(10,'SP Sport LM704','Dunlop',148.9,'Pneu',18,1),(11,'Dynamic RA03','Hankook',250,'Pneu',5,1),(12,'Technic aro 14','Technic',200,'Pneu',7,1),(13,'Ecsta PA31','Kumho',230,'Pneu',6,1),(14,'Assurance Touring','Goodyear',200,'Pneu',9,1),(15,'Primacy 3','Michelin',215,'Pneu',11,1),(16,'Turanza ER370','Bridgestone',270,'Pneu',2,1);
/*!40000 ALTER TABLE `produto` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-05-20 11:18:58
