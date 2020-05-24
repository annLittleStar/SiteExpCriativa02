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
  `idCarro` int NOT NULL,
  `marcaCarro` varchar(30) NOT NULL,
  `nomeCarro` varchar(30) NOT NULL,
  PRIMARY KEY (`idCarro`)
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
-- Table structure for table `folhaponto`
--

DROP TABLE IF EXISTS `folhaponto`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `folhaponto` (
  `idFuncionario` int NOT NULL,
  `hrEntrada` datetime NOT NULL,
  `hrSaida` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `folhaponto`
--

LOCK TABLES `folhaponto` WRITE;
/*!40000 ALTER TABLE `folhaponto` DISABLE KEYS */;
/*!40000 ALTER TABLE `folhaponto` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `funcionario`
--

DROP TABLE IF EXISTS `funcionario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `funcionario` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(30) NOT NULL,
  `login` varchar(30) NOT NULL,
  `senha` varchar(30) NOT NULL,
  `tipo` enum('Dono','Funcionario') NOT NULL,
  `cpf` varchar(15) NOT NULL,
  `telefone` varchar(20) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `cpf` (`cpf`),
  UNIQUE KEY `telefone` (`telefone`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `funcionario`
--

LOCK TABLES `funcionario` WRITE;
/*!40000 ALTER TABLE `funcionario` DISABLE KEYS */;
INSERT INTO `funcionario` VALUES (1,'admin','admin','admin','Dono','12312312344','12341234');
/*!40000 ALTER TABLE `funcionario` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `lavagem`
--

DROP TABLE IF EXISTS `lavagem`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `lavagem` (
  `idTipo` int NOT NULL AUTO_INCREMENT,
  `tipo` varchar(25) NOT NULL,
  PRIMARY KEY (`idTipo`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `lavagem`
--

LOCK TABLES `lavagem` WRITE;
/*!40000 ALTER TABLE `lavagem` DISABLE KEYS */;
INSERT INTO `lavagem` VALUES (1,'Lavagem Completa'),(2,'Lavagem Simples');
/*!40000 ALTER TABLE `lavagem` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `lavagemcompleta`
--

DROP TABLE IF EXISTS `lavagemcompleta`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `lavagemcompleta` (
  `idLavagemC` int NOT NULL,
  `valorLavagemC` float NOT NULL,
  `dataC` date DEFAULT NULL,
  `horaC` time DEFAULT NULL,
  PRIMARY KEY (`idLavagemC`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `lavagemcompleta`
--

LOCK TABLES `lavagemcompleta` WRITE;
/*!40000 ALTER TABLE `lavagemcompleta` DISABLE KEYS */;
INSERT INTO `lavagemcompleta` VALUES (1,25,'2020-04-12','02:02:02'),(3,25,'2020-05-24','17:00:00');
/*!40000 ALTER TABLE `lavagemcompleta` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `lavagemsimples`
--

DROP TABLE IF EXISTS `lavagemsimples`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `lavagemsimples` (
  `idLavagemS` int NOT NULL,
  `valorLavagemS` float NOT NULL,
  `dataS` date DEFAULT NULL,
  `horaS` time DEFAULT NULL,
  PRIMARY KEY (`idLavagemS`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `lavagemsimples`
--

LOCK TABLES `lavagemsimples` WRITE;
/*!40000 ALTER TABLE `lavagemsimples` DISABLE KEYS */;
INSERT INTO `lavagemsimples` VALUES (1,50,'2020-05-24','16:53:00'),(2,50,'2020-05-24','16:53:00');
/*!40000 ALTER TABLE `lavagemsimples` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `oservico`
--

DROP TABLE IF EXISTS `oservico`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `oservico` (
  `idServico` int NOT NULL AUTO_INCREMENT,
  `vTotal` float NOT NULL,
  `dataServico` datetime DEFAULT NULL,
  `idFunc` int NOT NULL,
  PRIMARY KEY (`idServico`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `oservico`
--

LOCK TABLES `oservico` WRITE;
/*!40000 ALTER TABLE `oservico` DISABLE KEYS */;
/*!40000 ALTER TABLE `oservico` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pneu`
--

DROP TABLE IF EXISTS `pneu`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `pneu` (
  `idPneu` int NOT NULL,
  `modelo` varchar(45) NOT NULL,
  `carro` int NOT NULL,
  `disponibilidade` int DEFAULT NULL,
  PRIMARY KEY (`idPneu`),
  KEY `disponibilidade` (`disponibilidade`),
  KEY `carro` (`carro`),
  CONSTRAINT `pneu_ibfk_1` FOREIGN KEY (`disponibilidade`) REFERENCES `produto` (`idProd`),
  CONSTRAINT `pneu_ibfk_2` FOREIGN KEY (`carro`) REFERENCES `carro` (`idCarro`)
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
-- Table structure for table `pneudef`
--

DROP TABLE IF EXISTS `pneudef`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `pneudef` (
  `idPneuDef` int NOT NULL,
  `qtdA` int NOT NULL DEFAULT (0),
  `qtdR` int NOT NULL DEFAULT (0),
  `qtdT` int NOT NULL DEFAULT (0),
  KEY `idPneuDef` (`idPneuDef`),
  CONSTRAINT `pneudef_ibfk_1` FOREIGN KEY (`idPneuDef`) REFERENCES `produto` (`idProd`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pneudef`
--

LOCK TABLES `pneudef` WRITE;
/*!40000 ALTER TABLE `pneudef` DISABLE KEYS */;
INSERT INTO `pneudef` VALUES (2,0,0,0),(3,0,0,0),(4,0,0,0),(5,0,0,0),(6,0,0,0),(7,0,0,0),(8,0,0,0),(9,0,0,0),(10,0,0,0),(11,0,0,0),(12,0,0,0),(13,0,0,0),(14,0,0,0),(15,0,0,0),(16,0,0,0);
/*!40000 ALTER TABLE `pneudef` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `produto`
--

DROP TABLE IF EXISTS `produto`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `produto` (
  `idProd` int NOT NULL AUTO_INCREMENT,
  `nomeProd` varchar(30) NOT NULL,
  `marcaProd` varchar(30) NOT NULL,
  `precoProd` double NOT NULL,
  `tipoProd` enum('Pneu','Produto de limpeza') NOT NULL,
  `quantidadeProd` int NOT NULL,
  `idFuncProd` int NOT NULL,
  PRIMARY KEY (`idProd`)
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

--
-- Table structure for table `vendapneu`
--

DROP TABLE IF EXISTS `vendapneu`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `vendapneu` (
  `idVenda` int NOT NULL,
  `totalVenda` float NOT NULL,
  `idProdutoVenda` int NOT NULL,
  `qtdVenda` int NOT NULL,
  KEY `idProdutoVenda` (`idProdutoVenda`),
  KEY `idVenda` (`idVenda`),
  CONSTRAINT `vendapneu_ibfk_1` FOREIGN KEY (`idProdutoVenda`) REFERENCES `produto` (`idProd`),
  CONSTRAINT `vendapneu_ibfk_2` FOREIGN KEY (`idVenda`) REFERENCES `oservico` (`idServico`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `vendapneu`
--

LOCK TABLES `vendapneu` WRITE;
/*!40000 ALTER TABLE `vendapneu` DISABLE KEYS */;
/*!40000 ALTER TABLE `vendapneu` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-05-24 17:02:45
