-- MySQL dump 10.13  Distrib 8.0.19, for Win64 (x86_64)
--
-- Host: localhost    Database: info_php_26
-- ------------------------------------------------------
-- Server version	5.5.5-10.6.23-MariaDB-0ubuntu0.22.04.1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `cidades`
--

DROP TABLE IF EXISTS `cidades`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `cidades` (
  `id` tinyint(4) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL,
  `populacao` decimal(10,0) NOT NULL,
  `criadoEm` timestamp NOT NULL DEFAULT current_timestamp(),
  `atualizadoEm` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE current_timestamp(),
  `idEstado` tinyint(4) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `cidades_estados_FK` (`idEstado`),
  CONSTRAINT `cidades_estados_FK` FOREIGN KEY (`idEstado`) REFERENCES `estados` (`id`) ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cidades`
--

LOCK TABLES `cidades` WRITE;
/*!40000 ALTER TABLE `cidades` DISABLE KEYS */;
INSERT INTO `cidades` VALUES (1,'Bento Gonçalves',100,'2026-06-23 22:59:58','0000-00-00 00:00:00',1),(2,'Caxias do Sul',101,'2026-06-23 23:00:31','0000-00-00 00:00:00',1),(3,'Rio de Janeiro',102,'2026-06-23 23:01:05','0000-00-00 00:00:00',2);
/*!40000 ALTER TABLE `cidades` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `endereco`
--

DROP TABLE IF EXISTS `endereco`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `endereco` (
  `id` tinyint(4) NOT NULL AUTO_INCREMENT,
  `cep` varchar(10) NOT NULL,
  `bairro` varchar(255) NOT NULL,
  `rua` varchar(512) NOT NULL,
  `numero` varchar(30) DEFAULT NULL,
  `criadoEm` timestamp NOT NULL DEFAULT current_timestamp(),
  `atualizadoEm` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE current_timestamp(),
  `idEstado` tinyint(4) DEFAULT NULL,
  `idCidade` tinyint(4) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `endereco_estados_FK` (`idEstado`),
  KEY `endereco_cidades_FK` (`idCidade`),
  CONSTRAINT `endereco_cidades_FK` FOREIGN KEY (`idCidade`) REFERENCES `cidades` (`id`) ON UPDATE CASCADE,
  CONSTRAINT `endereco_estados_FK` FOREIGN KEY (`idEstado`) REFERENCES `estados` (`id`) ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `endereco`
--

LOCK TABLES `endereco` WRITE;
/*!40000 ALTER TABLE `endereco` DISABLE KEYS */;
INSERT INTO `endereco` VALUES (1,'95700000','Centro','General Osório','444','2026-06-17 00:08:43','2026-06-23 23:02:48',1,2),(2,'95707000','Universitário','Principal','102','2026-06-17 00:08:43','2026-06-23 23:02:48',1,2),(3,'80500500','Ipanema','Da Silva','202','2026-06-17 00:08:43','2026-06-23 23:02:48',2,3),(4,'95700500','Botafogo','Natal','421','2026-06-17 00:08:43','2026-06-23 23:02:48',1,1),(5,'95707000','Borgo','São Paulo','','2026-06-17 00:08:43','2026-06-23 23:02:49',1,1);
/*!40000 ALTER TABLE `endereco` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `estados`
--

DROP TABLE IF EXISTS `estados`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `estados` (
  `id` tinyint(4) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL,
  `sigla` varchar(2) NOT NULL,
  `populacao` decimal(10,0) NOT NULL,
  `numeroMunicipios` decimal(10,0) NOT NULL,
  `criadoEm` timestamp NOT NULL DEFAULT current_timestamp(),
  `atualizadoEm` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `estados`
--

LOCK TABLES `estados` WRITE;
/*!40000 ALTER TABLE `estados` DISABLE KEYS */;
INSERT INTO `estados` VALUES (1,'Rio Gande do Sul','RS',200,2,'2026-06-17 00:51:21','2026-06-17 00:51:31'),(2,'Rio de Janeiro','RJ',201,1,'2026-06-23 22:59:09','0000-00-00 00:00:00');
/*!40000 ALTER TABLE `estados` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `funcionario`
--

DROP TABLE IF EXISTS `funcionario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `funcionario` (
  `id` tinyint(4) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) NOT NULL,
  `sobrenome` varchar(255) NOT NULL,
  `salario` decimal(10,0) NOT NULL,
  `cargo` varchar(512) NOT NULL,
  `setor` varchar(150) NOT NULL,
  `cracha` varchar(15) NOT NULL,
  `idPessoa` tinyint(4) DEFAULT NULL,
  `criadoEm` timestamp NOT NULL DEFAULT current_timestamp(),
  `atualizadoEm` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`),
  KEY `funcionario_Pessoa_FK` (`idPessoa`),
  CONSTRAINT `funcionario_Pessoa_FK` FOREIGN KEY (`idPessoa`) REFERENCES `pessoa` (`id`) ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `funcionario`
--

LOCK TABLES `funcionario` WRITE;
/*!40000 ALTER TABLE `funcionario` DISABLE KEYS */;
INSERT INTO `funcionario` VALUES (1,'Enzo','Massutti',2000,'Técnico','TI','2561532221',5,'2026-06-17 00:07:54','0000-00-00 00:00:00'),(2,'Seu','Jorge',100000,'Cantor','Rádio','2222222222',4,'2026-06-17 00:07:54','0000-00-00 00:00:00');
/*!40000 ALTER TABLE `funcionario` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pessoa`
--

DROP TABLE IF EXISTS `pessoa`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `pessoa` (
  `id` tinyint(4) NOT NULL AUTO_INCREMENT,
  `nome` varchar(512) NOT NULL,
  `idade` int(11) NOT NULL,
  `telefone` varchar(20) NOT NULL,
  `cpf` varchar(14) DEFAULT NULL,
  `cnpj` varchar(18) DEFAULT NULL,
  `tipoPessoa` enum('F','J') NOT NULL DEFAULT 'F',
  `idEndereco` tinyint(4) DEFAULT NULL,
  `criadoEm` timestamp NOT NULL DEFAULT current_timestamp(),
  `atualizadoEm` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`),
  KEY `Pessoa_endereco_FK` (`idEndereco`),
  CONSTRAINT `Pessoa_endereco_FK` FOREIGN KEY (`idEndereco`) REFERENCES `endereco` (`id`) ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pessoa`
--

LOCK TABLES `pessoa` WRITE;
/*!40000 ALTER TABLE `pessoa` DISABLE KEYS */;
INSERT INTO `pessoa` VALUES (1,'João',20,'54999990000','000.000.000-00',NULL,'F',1,'2026-06-17 00:09:21','0000-00-00 00:00:00'),(2,'Zegla',85,'5434555555',NULL,'00000000000','J',5,'2026-06-17 00:09:21','0000-00-00 00:00:00'),(3,'Maria',18,'54999880000','000.000.000-00',NULL,'F',1,'2026-06-17 00:09:21','0000-00-00 00:00:00'),(4,'Seu Jorge',60,'51944445555','000.000.000-00',NULL,'F',3,'2026-06-17 00:09:21','0000-00-00 00:00:00'),(5,'Enzo',21,'54996676980','000.000.000-00',NULL,'F',4,'2026-06-17 00:09:21','0000-00-00 00:00:00');
/*!40000 ALTER TABLE `pessoa` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping routines for database 'info_php_26'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2026-06-23 22:01:37
