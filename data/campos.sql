-- MySQL dump 10.13  Distrib 5.5.40, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: campos
-- ------------------------------------------------------
-- Server version	5.5.40-0ubuntu0.14.04.1

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
-- Table structure for table `alquilercancha`
--

DROP TABLE IF EXISTS `alquilercancha`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `alquilercancha` (
  `idHorario` int(11) NOT NULL AUTO_INCREMENT,
  `idUsuario` int(11) NOT NULL,
  `fecha` date DEFAULT NULL,
  `horaInicio` time DEFAULT NULL,
  `horaFin` time DEFAULT NULL,
  PRIMARY KEY (`idHorario`,`idUsuario`),
  KEY `fk_HorarioCancha_has_Usuario_Usuario1` (`idUsuario`),
  KEY `fk_HorarioCancha_has_Usuario_HorarioCancha1` (`idHorario`),
  CONSTRAINT `fk_HorarioCancha1` FOREIGN KEY (`idHorario`) REFERENCES `horariocancha` (`idHorario`),
  CONSTRAINT `fk_Usuario1` FOREIGN KEY (`idUsuario`) REFERENCES `usuario` (`idUsuario`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `alquilercancha`
--

LOCK TABLES `alquilercancha` WRITE;
/*!40000 ALTER TABLE `alquilercancha` DISABLE KEYS */;
/*!40000 ALTER TABLE `alquilercancha` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `alquilercanchapromocion`
--

DROP TABLE IF EXISTS `alquilercanchapromocion`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `alquilercanchapromocion` (
  `idHorario` int(11) NOT NULL AUTO_INCREMENT,
  `idUsuario` int(11) NOT NULL,
  `idPromocion` int(11) NOT NULL,
  `precio` double DEFAULT NULL,
  `precioPromocion` double DEFAULT NULL,
  `precioTotal` double DEFAULT NULL,
  PRIMARY KEY (`idHorario`,`idUsuario`,`idPromocion`),
  KEY `fk_HorarioCancha_has_Usuario_has_Promocion_Promocion1` (`idPromocion`),
  KEY `fk_HorarioCancha_has_Usuario_has_Promocion_HorarioCancha_has_1` (`idHorario`,`idUsuario`),
  CONSTRAINT `fk_HorarioCancha_has_Usuario_has_Promocion_HorarioCancha_has_1` FOREIGN KEY (`idHorario`, `idUsuario`) REFERENCES `alquilercancha` (`idHorario`, `idUsuario`),
  CONSTRAINT `fk_HorarioCancha_has_Usuario_has_Promocion_Promocion1` FOREIGN KEY (`idPromocion`) REFERENCES `promocion` (`idPromocion`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `alquilercanchapromocion`
--

LOCK TABLES `alquilercanchapromocion` WRITE;
/*!40000 ALTER TABLE `alquilercanchapromocion` DISABLE KEYS */;
/*!40000 ALTER TABLE `alquilercanchapromocion` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cancha`
--

DROP TABLE IF EXISTS `cancha`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cancha` (
  `idCancha` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) DEFAULT NULL,
  `tarifaD` double DEFAULT NULL,
  `tarifaN` double DEFAULT NULL,
  `idLocal` int(11) NOT NULL,
  PRIMARY KEY (`idCancha`),
  KEY `fk_Cancha_Local1` (`idLocal`),
  CONSTRAINT `fk_Cancha_Local1` FOREIGN KEY (`idLocal`) REFERENCES `local` (`idLocal`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cancha`
--

LOCK TABLES `cancha` WRITE;
/*!40000 ALTER TABLE `cancha` DISABLE KEYS */;
INSERT INTO `cancha` VALUES (1,'Estadio UNI',30,50,2),(2,'Estadio UNI',40,60,3);
/*!40000 ALTER TABLE `cancha` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `estados`
--

DROP TABLE IF EXISTS `estados`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `estados` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tipo` varchar(50) NOT NULL,
  `ref` int(11) NOT NULL,
  `descripcion` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `estados`
--

LOCK TABLES `estados` WRITE;
/*!40000 ALTER TABLE `estados` DISABLE KEYS */;
INSERT INTO `estados` VALUES (1,'local',1,'reservado'),(2,'local',2,'disponible'),(3,'local',3,'En mantenimiento'),(4,'cancha',1,'Disponible');
/*!40000 ALTER TABLE `estados` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `horariocancha`
--

DROP TABLE IF EXISTS `horariocancha`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `horariocancha` (
  `idHorario` int(11) NOT NULL AUTO_INCREMENT,
  `dia` int(11) DEFAULT NULL,
  `hora` time DEFAULT NULL,
  `idCancha` int(11) NOT NULL,
  PRIMARY KEY (`idHorario`),
  KEY `fk_HorarioCancha_Cancha1` (`idCancha`),
  CONSTRAINT `fk_HorarioCancha_Cancha1` FOREIGN KEY (`idCancha`) REFERENCES `cancha` (`idCancha`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `horariocancha`
--

LOCK TABLES `horariocancha` WRITE;
/*!40000 ALTER TABLE `horariocancha` DISABLE KEYS */;
/*!40000 ALTER TABLE `horariocancha` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `local`
--

DROP TABLE IF EXISTS `local`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `local` (
  `idLocal` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) DEFAULT NULL,
  `distrito` varchar(45) DEFAULT NULL,
  `direccion` varchar(200) DEFAULT NULL,
  `telefono` varchar(20) DEFAULT NULL,
  `idUsuario` int(11) NOT NULL,
  `estado` int(11) NOT NULL,
  PRIMARY KEY (`idLocal`),
  KEY `fk_Local_Usuario1` (`idUsuario`),
  CONSTRAINT `fk_Local_Usuario1` FOREIGN KEY (`idUsuario`) REFERENCES `usuario` (`idUsuario`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `local`
--

LOCK TABLES `local` WRITE;
/*!40000 ALTER TABLE `local` DISABLE KEYS */;
INSERT INTO `local` VALUES (2,' La 7 - San Luis (Colegio San Juan Macias)','San Luis, Lima','Jr Río Piura s/n ( espalda de la Videna, a 1 cdra de la Av del Aire) ','4510001 / ',1,1),(3,' Complejo Deportivo la 9',' San Miguel, Lima','Av. Venezuela cdra. 34 s/n','4510001 / ',1,2),(4,'Nuevo Potrero F.Planet','Surco, Lima','Av Combate de Iquique 181 (A 5 cdras del ovalo Higuereta) ','984471883',1,0),(5,'VillaSport Los Precursores','Surco, Lima','Jr. Jose Aguilar Segura s/n ( a 3 cdra del cruce de Av Proceres y Av Paseo de la Republica','984471883',1,0),(6,' Centenario FC','Pueblo Libre, Lima','colegio pedro galvez egusquiza jr emilio rossel 670 urb las brisas, lima, limite con puelo libre ','984471883',1,0);
/*!40000 ALTER TABLE `local` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `promocion`
--

DROP TABLE IF EXISTS `promocion`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `promocion` (
  `idPromocion` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(200) DEFAULT NULL,
  `descripcion` text,
  `precio` double DEFAULT NULL,
  PRIMARY KEY (`idPromocion`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `promocion`
--

LOCK TABLES `promocion` WRITE;
/*!40000 ALTER TABLE `promocion` DISABLE KEYS */;
/*!40000 ALTER TABLE `promocion` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuario`
--

DROP TABLE IF EXISTS `usuario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `usuario` (
  `idUsuario` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) NOT NULL,
  `apellidoPaterno` varchar(100) NOT NULL,
  `apellidoMaterno` varchar(100) NOT NULL,
  `sexo` char(1) NOT NULL,
  `dni` varchar(8) NOT NULL,
  `direccion` varchar(200) DEFAULT NULL,
  `distrito` int(11) DEFAULT NULL,
  `correo` varchar(100) DEFAULT NULL,
  `clave` varchar(20) DEFAULT NULL,
  `fechaNacimiento` date DEFAULT NULL,
  `celular` varchar(10) DEFAULT NULL,
  `tipo` int(11) DEFAULT NULL,
  `estado` int(11) DEFAULT NULL,
  PRIMARY KEY (`idUsuario`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuario`
--

LOCK TABLES `usuario` WRITE;
/*!40000 ALTER TABLE `usuario` DISABLE KEYS */;
INSERT INTO `usuario` VALUES (1,'Jason','Martinez','Vera','M','74308234','Mz. E Lt.16 Ubr. Miguel Grau',1,'jason1994.8@gmail.com','123456','0000-00-00','954923908',1,1);
/*!40000 ALTER TABLE `usuario` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2014-12-10 20:31:33
