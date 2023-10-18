-- MariaDB dump 10.19  Distrib 10.11.3-MariaDB, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: mysitedb
-- ------------------------------------------------------
-- Server version	10.11.3-MariaDB-1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `tcomentarios`
--

DROP TABLE IF EXISTS `tcomentarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tcomentarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `comentario` varchar(2000) DEFAULT NULL,
  `usuario_id` int(11) DEFAULT NULL,
  `juego_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_const1` (`usuario_id`),
  KEY `fk_const2` (`juego_id`),
  CONSTRAINT `fk_const1` FOREIGN KEY (`usuario_id`) REFERENCES `tusuarios` (`id`),
  CONSTRAINT `fk_const2` FOREIGN KEY (`juego_id`) REFERENCES `tjuegos` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tcomentarios`
--

LOCK TABLES `tcomentarios` WRITE;
/*!40000 ALTER TABLE `tcomentarios` DISABLE KEYS */;
INSERT INTO `tcomentarios` VALUES
(1,'Es un videojuego muy adictivo',3,1),
(2,'Se centra en personas que le gustan las armas',2,2),
(3,'Es un juego de cartas donde la estrategia es el mayor aliado',1,3),
(4,'Se centra en peleas de campeones del mundo de League of Legends',5,4),
(5,'Es un juego de mundo abierto donde no existen reglas',4,5);
/*!40000 ALTER TABLE `tcomentarios` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tjuegos`
--

DROP TABLE IF EXISTS `tjuegos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tjuegos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) DEFAULT NULL,
  `url_imagen` varchar(700) DEFAULT NULL,
  `ano_creacion` int(11) NOT NULL,
  `genero` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tjuegos`
--

LOCK TABLES `tjuegos` WRITE;
/*!40000 ALTER TABLE `tjuegos` DISABLE KEYS */;
INSERT INTO `tjuegos` VALUES
(1,'League of Legends','https://fotos.perfil.com/2022/02/01/trim/720/410/conoce-todos-los-detalles-acerca-de-lol-y-enterate-como-se-juega-1306879.jpg?webp',2009,'MOBA'),
(2,'Valorant','https://i.blogs.es/8d13e9/valorant/1366_2000.jpg',2019,'Shooter'),
(3,'Legends of Runeterra','https://phantom-marca.unidadeditorial.es/3fff20d513d318183ca65af266d5b52b/resize/660/f/webp/assets/multimedia/imagenes/2020/09/04/15992279271667.png',2020,'Estrategia'),
(4,'Teamfight Tactics','https://i.blogs.es/b1b2bf/tft-para-moviles/1024_2000.jpg',2019,'Estrategia'),
(5,'GTA V','https://i.blogs.es/dfbccc/trucosgtavps4/1366_2000.webp',2013,'Mundo abierto');
/*!40000 ALTER TABLE `tjuegos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tusuarios`
--

DROP TABLE IF EXISTS `tusuarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tusuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) DEFAULT NULL,
  `apellidos` varchar(100) DEFAULT NULL,
  `email` varchar(200) DEFAULT NULL,
  `contraseña` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tusuarios`
--

LOCK TABLES `tusuarios` WRITE;
/*!40000 ALTER TABLE `tusuarios` DISABLE KEYS */;
INSERT INTO `tusuarios` VALUES
(1,'Rubén','Varela','rubenvarelafigueroa@gmail.com','cualquiera'),
(2,'Manuel','Mouzo','manuelmouzo@gmail.com','12367'),
(3,'María','Veiga','mariaveiga@gmail.com','9812'),
(4,'Carla','Santana','carlasantana@gmail.com','unicornio'),
(5,'Álvaro','Cunqueiro','alvarocunqueiro@gmail.com','Galicia1972');
/*!40000 ALTER TABLE `tusuarios` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-10-18 14:13:38
