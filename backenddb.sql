CREATE DATABASE  IF NOT EXISTS `backenddb` /*!40100 DEFAULT CHARACTER SET utf8 COLLATE utf8_spanish2_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `backenddb`;
-- MySQL dump 10.13  Distrib 8.0.22, for Linux (x86_64)
--
-- Host: 127.0.0.1    Database: backenddb
-- ------------------------------------------------------
-- Server version	8.0.23

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
-- Table structure for table `almacenes`
--

DROP TABLE IF EXISTS `almacenes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `almacenes` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nombre` text COLLATE utf8_spanish2_ci,
  `localizacion` text COLLATE utf8_spanish2_ci,
  `responsable` text COLLATE utf8_spanish2_ci,
  `tipo` tinyint DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `almacenes`
--

LOCK TABLES `almacenes` WRITE;
/*!40000 ALTER TABLE `almacenes` DISABLE KEYS */;
INSERT INTO `almacenes` VALUES (1,'ALMACEN DEL CENTRO','CENTRO DE CDMX','EDGAR URRUTIA MÉNDEZ',1),(2,'ALMACEN DEL NORTE','NORTE DE CDMX','CRHISTIAN CARRASCO OCHOA',1),(3,'ALMACEN DEL SUR','SUR DE CDMX','JULIO SANCHEZ DOMINGUEZ',0),(4,'ALMACEN NACIONAL','almacencdmx.com.mx','GREGORIO LOZANO TINOCO',0);
/*!40000 ALTER TABLE `almacenes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `existencias`
--

DROP TABLE IF EXISTS `existencias`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `existencias` (
  `id` int NOT NULL AUTO_INCREMENT,
  `existencias` int DEFAULT NULL,
  `productos_id` int NOT NULL,
  `almacenes_id` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_existencias_productos1_idx` (`productos_id`),
  KEY `fk_existencias_almacenes1_idx` (`almacenes_id`),
  CONSTRAINT `fk_existencias_almacenes1` FOREIGN KEY (`almacenes_id`) REFERENCES `almacenes` (`id`),
  CONSTRAINT `fk_existencias_productos1` FOREIGN KEY (`productos_id`) REFERENCES `productos` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `existencias`
--

LOCK TABLES `existencias` WRITE;
/*!40000 ALTER TABLE `existencias` DISABLE KEYS */;
INSERT INTO `existencias` VALUES (1,7,1,1),(2,8,2,2),(3,9,3,3),(4,6,4,4),(5,6,5,1),(6,7,6,2),(7,8,7,3),(8,9,8,4),(9,9,9,1),(10,8,10,2),(11,7,11,3),(12,6,12,4),(13,6,13,1),(14,7,14,2),(15,8,15,3),(16,9,1,4),(17,8,2,1),(18,7,3,2),(19,6,4,3),(20,2,5,4);
/*!40000 ALTER TABLE `existencias` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `marcas`
--

DROP TABLE IF EXISTS `marcas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `marcas` (
  `id` int NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(45) COLLATE utf8_spanish2_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `marcas`
--

LOCK TABLES `marcas` WRITE;
/*!40000 ALTER TABLE `marcas` DISABLE KEYS */;
INSERT INTO `marcas` VALUES (1,'SAMSUNG'),(2,'LG'),(3,'SONY'),(4,'PANASONIC'),(5,'APPLE');
/*!40000 ALTER TABLE `marcas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `productos`
--

DROP TABLE IF EXISTS `productos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `productos` (
  `id` int NOT NULL AUTO_INCREMENT,
  `sku` varchar(255) COLLATE utf8_spanish2_ci NOT NULL,
  `descripcion` text COLLATE utf8_spanish2_ci NOT NULL,
  `color` varchar(20) COLLATE utf8_spanish2_ci NOT NULL,
  `precio` decimal(10,2) NOT NULL,
  `marcas_id` int NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `sku_UNIQUE` (`sku`),
  KEY `fk_productos_marcas_idx` (`marcas_id`),
  CONSTRAINT `fk_productos_marcas` FOREIGN KEY (`marcas_id`) REFERENCES `marcas` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `productos`
--

LOCK TABLES `productos` WRITE;
/*!40000 ALTER TABLE `productos` DISABLE KEYS */;
INSERT INTO `productos` VALUES (1,'SKU2030','TELÉFONO CELULAR S21','PLATA',21500.00,1),(2,'SKU2031','REFRIGERADOR','BLANCO',20000.00,2),(3,'SKU2032','PANTALLA LED 65\"','NEGRO',15000.00,3),(4,'SKU2033','MACKBOOK AIR 13\"','GRIS ESPACIAL',26000.00,5),(5,'SKU2034','PANTALLA LED 32\"','NEGRO',5000.00,4),(6,'SKU2035','PANTALLA LED 24\"','NEGRO',3200.00,4),(7,'SKU2036','TELÉFONO CELULAR S21 ULTRA','NEGRO',25000.00,1),(8,'SKU2037','LAVARODA INTELIGENTE 20 KILOS','BLANCO',20000.00,2),(9,'SKU2038','PANTALLA INTELIGENTE 27\"','PLATA',8000.00,3),(10,'SKU2039','IPHONE 12 PRO','BLANCO',27000.00,5),(11,'SKU2040','AUDIFONOS BLUETOOTH','BLANCO',3500.00,1),(12,'SKU2041','TELEFONO CELULAR','GRIS OXFORD',9000.00,2),(13,'SKU2042','ESTEREO PARA AUTO','NEGRO',3000.00,3),(14,'SKU2043','MINICOMPONENTE','NEGRO',7000.00,4),(15,'SKU2044','IPAD MINI 64GB','GRIS',8000.00,5);
/*!40000 ALTER TABLE `productos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Temporary view structure for view `vwfisico`
--

DROP TABLE IF EXISTS `vwfisico`;
/*!50001 DROP VIEW IF EXISTS `vwfisico`*/;
SET @saved_cs_client     = @@character_set_client;
/*!50503 SET character_set_client = utf8mb4 */;
/*!50001 CREATE VIEW `vwfisico` AS SELECT 
 1 AS `sku`,
 1 AS `descripcion`,
 1 AS `marca`,
 1 AS `existencias`,
 1 AS `nombre`*/;
SET character_set_client = @saved_cs_client;

--
-- Temporary view structure for view `vwproductos`
--

DROP TABLE IF EXISTS `vwproductos`;
/*!50001 DROP VIEW IF EXISTS `vwproductos`*/;
SET @saved_cs_client     = @@character_set_client;
/*!50503 SET character_set_client = utf8mb4 */;
/*!50001 CREATE VIEW `vwproductos` AS SELECT 
 1 AS `sku`,
 1 AS `descripcion`,
 1 AS `color`,
 1 AS `marca`*/;
SET character_set_client = @saved_cs_client;

--
-- Temporary view structure for view `vwvirtual`
--

DROP TABLE IF EXISTS `vwvirtual`;
/*!50001 DROP VIEW IF EXISTS `vwvirtual`*/;
SET @saved_cs_client     = @@character_set_client;
/*!50503 SET character_set_client = utf8mb4 */;
/*!50001 CREATE VIEW `vwvirtual` AS SELECT 
 1 AS `sku`,
 1 AS `descripcion`,
 1 AS `marca`,
 1 AS `existencias`,
 1 AS `nombre`*/;
SET character_set_client = @saved_cs_client;

--
-- Final view structure for view `vwfisico`
--

/*!50001 DROP VIEW IF EXISTS `vwfisico`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8mb4 */;
/*!50001 SET character_set_results     = utf8mb4 */;
/*!50001 SET collation_connection      = utf8mb4_0900_ai_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`jolguin`@`%` SQL SECURITY DEFINER */
/*!50001 VIEW `vwfisico` AS select `p`.`sku` AS `sku`,`p`.`descripcion` AS `descripcion`,`m`.`descripcion` AS `marca`,`e`.`existencias` AS `existencias`,`a`.`nombre` AS `nombre` from (((`productos` `p` join `marcas` `m` on((`p`.`marcas_id` = `m`.`id`))) join `existencias` `e` on((`e`.`productos_id` = `p`.`id`))) join `almacenes` `a` on((`e`.`almacenes_id` = `a`.`id`))) where (`a`.`tipo` = 1) order by `a`.`id`,`p`.`sku` */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `vwproductos`
--

/*!50001 DROP VIEW IF EXISTS `vwproductos`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8mb4 */;
/*!50001 SET character_set_results     = utf8mb4 */;
/*!50001 SET collation_connection      = utf8mb4_0900_ai_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`jolguin`@`%` SQL SECURITY DEFINER */
/*!50001 VIEW `vwproductos` AS select `p`.`sku` AS `sku`,`p`.`descripcion` AS `descripcion`,`p`.`color` AS `color`,`m`.`descripcion` AS `marca` from (`productos` `p` join `marcas` `m` on((`p`.`marcas_id` = `m`.`id`))) order by `p`.`sku` */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `vwvirtual`
--

/*!50001 DROP VIEW IF EXISTS `vwvirtual`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8mb4 */;
/*!50001 SET character_set_results     = utf8mb4 */;
/*!50001 SET collation_connection      = utf8mb4_0900_ai_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`jolguin`@`%` SQL SECURITY DEFINER */
/*!50001 VIEW `vwvirtual` AS select `p`.`sku` AS `sku`,`p`.`descripcion` AS `descripcion`,`m`.`descripcion` AS `marca`,`e`.`existencias` AS `existencias`,`a`.`nombre` AS `nombre` from (((`productos` `p` join `marcas` `m` on((`p`.`marcas_id` = `m`.`id`))) join `existencias` `e` on((`e`.`productos_id` = `p`.`id`))) join `almacenes` `a` on((`e`.`almacenes_id` = `a`.`id`))) where (`a`.`tipo` = 0) order by `a`.`id`,`p`.`sku` */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-04-10 23:47:21
