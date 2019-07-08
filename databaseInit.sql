-- MySQL dump 10.13  Distrib 5.7.26, for Linux (x86_64)
--
-- Host: localhost    Database: noventena
-- ------------------------------------------------------
-- Server version	5.7.26-0ubuntu0.18.04.1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `cliente`
--

DROP TABLE IF EXISTS `cliente`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cliente` (
  `idcliente` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `noventena` date DEFAULT NULL,
  PRIMARY KEY (`idcliente`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cliente`
--

LOCK TABLES `cliente` WRITE;
/*!40000 ALTER TABLE `cliente` DISABLE KEYS */;
INSERT INTO `cliente` VALUES (1,'Maria Clara','mariaclara@ts-test.com.br','2019-06-28'),(2,'João Batista','joaobatista123@gmail.com','2019-09-20'),(3,'Rodrigo Oliveira','rodoliveira_abc@terra.com.br','2019-08-28'),(4,'Mário Castro','marioctec@techtest.com.br','2019-09-20'),(5,'Calors Roberto Silva','crsilva@testingnow.com.br','2019-09-20'),(6,'Mariana Mendes','marianamendes123@teste.com.br','2019-08-28'),(7,'Rafael Pereira','rafaelpereiraolt@blabla.com.br','2019-05-22'),(8,'Roger da Silva','rogersilvalol@gmail.com',NULL),(9,'Ana Carla Ferreira','anacferreira@bol.com.br','2019-08-28'),(10,'Thiago da Costa','thiagocostatol@outlook.com',NULL);
/*!40000 ALTER TABLE `cliente` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `envio`
--

DROP TABLE IF EXISTS `envio`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `envio` (
  `idenvio` int(11) NOT NULL AUTO_INCREMENT,
  `idpesquisa` int(11) NOT NULL,
  `idcliente` int(11) NOT NULL,
  `dataenvio` datetime NOT NULL,
  PRIMARY KEY (`idenvio`),
  KEY `fk_envio_pesquisa_idx` (`idpesquisa`),
  KEY `fk_envio_cliente_idx` (`idcliente`),
  CONSTRAINT `fk_envio_cliente` FOREIGN KEY (`idcliente`) REFERENCES `cliente` (`idcliente`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_envio_pesquisa` FOREIGN KEY (`idpesquisa`) REFERENCES `pesquisa` (`idpesquisa`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `envio`
--

LOCK TABLES `envio` WRITE;
/*!40000 ALTER TABLE `envio` DISABLE KEYS */;
INSERT INTO `envio` VALUES (1,1,2,'2019-06-20 09:55:54'),(2,1,4,'2019-06-20 09:55:59'),(3,1,5,'2019-06-20 09:56:08'),(4,3,3,'2019-05-28 14:25:30'),(5,3,6,'2019-05-28 14:25:42'),(6,3,9,'2019-05-28 14:25:53'),(7,2,1,'2019-03-28 17:42:20'),(8,2,7,'2019-02-22 17:55:30');
/*!40000 ALTER TABLE `envio` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pesquisa`
--

DROP TABLE IF EXISTS `pesquisa`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pesquisa` (
  `idpesquisa` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(50) NOT NULL,
  `descricao` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`idpesquisa`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pesquisa`
--

LOCK TABLES `pesquisa` WRITE;
/*!40000 ALTER TABLE `pesquisa` DISABLE KEYS */;
INSERT INTO `pesquisa` VALUES (1,'Atendimento Online','Satisfação com Atendimento Online no site'),(2,'Consultoria Presencial','Taxa de aproveitamento da consultoria prestada na empresa'),(3,'Suporte Pós Venda','Qualidade do suporte pós venda e prestação de serviço'),(4,'Informações do Site','Clareza e facilidade em localizar infomações no site');
/*!40000 ALTER TABLE `pesquisa` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-07-08 11:54:00
