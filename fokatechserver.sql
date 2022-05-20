CREATE DATABASE  IF NOT EXISTS `fokatech_server` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `fokatech_server`;
-- MySQL dump 10.13  Distrib 8.0.27, for Win64 (x86_64)
--
-- Host: localhost    Database: fokatech_server
-- ------------------------------------------------------
-- Server version	8.0.27

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
-- Table structure for table `_settings`
--

DROP TABLE IF EXISTS `_settings`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `_settings` (
  `serial` varchar(50) NOT NULL,
  `alert_fluid` int NOT NULL,
  `low_tank` int NOT NULL,
  `high_tank` int NOT NULL,
  PRIMARY KEY (`serial`),
  CONSTRAINT `_settings_ibfk_1` FOREIGN KEY (`serial`) REFERENCES `serial_data` (`serial`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `_settings`
--

LOCK TABLES `_settings` WRITE;
/*!40000 ALTER TABLE `_settings` DISABLE KEYS */;
/*!40000 ALTER TABLE `_settings` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `battery_settings`
--

DROP TABLE IF EXISTS `battery_settings`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `battery_settings` (
  `serial` varchar(50) NOT NULL,
  `low_voltage` varchar(200) DEFAULT NULL,
  `alerts` int NOT NULL,
  KEY `serial` (`serial`),
  CONSTRAINT `battery_settings_ibfk_1` FOREIGN KEY (`serial`) REFERENCES `serial_data` (`serial`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `battery_settings`
--

LOCK TABLES `battery_settings` WRITE;
/*!40000 ALTER TABLE `battery_settings` DISABLE KEYS */;
/*!40000 ALTER TABLE `battery_settings` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `bilge_settings`
--

DROP TABLE IF EXISTS `bilge_settings`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `bilge_settings` (
  `serial` varchar(50) NOT NULL,
  `water_distance` int NOT NULL DEFAULT '14',
  `alert_bilge` int NOT NULL DEFAULT '0',
  `time_alert` int NOT NULL DEFAULT '30',
  `calibration` int NOT NULL DEFAULT '0',
  KEY `serial` (`serial`),
  CONSTRAINT `bilge_settings_ibfk_1` FOREIGN KEY (`serial`) REFERENCES `serial_data` (`serial`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `bilge_settings`
--

LOCK TABLES `bilge_settings` WRITE;
/*!40000 ALTER TABLE `bilge_settings` DISABLE KEYS */;
/*!40000 ALTER TABLE `bilge_settings` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `boat_data`
--

DROP TABLE IF EXISTS `boat_data`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `boat_data` (
  `hubid` varchar(50) NOT NULL,
  `user` varchar(100) NOT NULL,
  `boatname` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`hubid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `boat_data`
--

LOCK TABLES `boat_data` WRITE;
/*!40000 ALTER TABLE `boat_data` DISABLE KEYS */;
INSERT INTO `boat_data` VALUES ('DEMOHUB001','sathya@test.com','My Boat 1'),('DEMOHUB002','sathya@test.com','My Boat 2'),('DEMOHUB003','sathya@test.com','My Boat 3'),('DEMOHUB004','123@123.com','REC Boat'),('DEMOHUB005','123@123.com','REC sample boat'),('DEMOHUB007','123@123.com','New Boat 16/1/22'),('DEMOHUB022','boundlessbloggers@gmail.com','hub22'),('DEMOHUB023','boundlessbloggers@gmail.com','23hub'),('DEMOHUB040','sathya@test.com','Boat 40'),('DEMOHUB10','123@123.com','another boat'),('test-lol','123@123.com','killua');
/*!40000 ALTER TABLE `boat_data` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `currentconnections`
--

DROP TABLE IF EXISTS `currentconnections`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `currentconnections` (
  `serial` varchar(50) NOT NULL,
  `hubid` varchar(50) NOT NULL,
  UNIQUE KEY `serial` (`serial`),
  CONSTRAINT `currentconnections_ibfk_1` FOREIGN KEY (`serial`) REFERENCES `sync_data` (`serial`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `currentconnections`
--

LOCK TABLES `currentconnections` WRITE;
/*!40000 ALTER TABLE `currentconnections` DISABLE KEYS */;
/*!40000 ALTER TABLE `currentconnections` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `fluid_settings`
--

DROP TABLE IF EXISTS `fluid_settings`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `fluid_settings` (
  `serial` varchar(50) NOT NULL,
  `alert_fluid` int NOT NULL DEFAULT '0',
  `low_tank` int NOT NULL DEFAULT '0',
  `calibration_val` int NOT NULL DEFAULT '0',
  PRIMARY KEY (`serial`),
  CONSTRAINT `fluid_settings_ibfk_1` FOREIGN KEY (`serial`) REFERENCES `serial_data` (`serial`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fluid_settings`
--

LOCK TABLES `fluid_settings` WRITE;
/*!40000 ALTER TABLE `fluid_settings` DISABLE KEYS */;
INSERT INTO `fluid_settings` VALUES ('FKB001US',1,43,0);
/*!40000 ALTER TABLE `fluid_settings` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `location_data`
--

DROP TABLE IF EXISTS `location_data`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `location_data` (
  `serial` varchar(50) NOT NULL,
  `dock_point` varchar(200) DEFAULT '0,0',
  `geofence_enable` int NOT NULL DEFAULT '0',
  `radius` int NOT NULL DEFAULT '150',
  KEY `serial` (`serial`),
  CONSTRAINT `location_data_ibfk_1` FOREIGN KEY (`serial`) REFERENCES `serial_data` (`serial`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `location_data`
--

LOCK TABLES `location_data` WRITE;
/*!40000 ALTER TABLE `location_data` DISABLE KEYS */;
INSERT INTO `location_data` VALUES ('FKB001LT','59.9139,10.7522',1,263);
/*!40000 ALTER TABLE `location_data` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `security_images`
--

DROP TABLE IF EXISTS `security_images`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `security_images` (
  `id` varchar(50) NOT NULL,
  `serial` varchar(50) NOT NULL,
  `url` varchar(300) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `hubid` varchar(50) NOT NULL,
  `viewed` int NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `serial` (`serial`),
  CONSTRAINT `security_images_ibfk_1` FOREIGN KEY (`serial`) REFERENCES `serial_data` (`serial`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `security_images`
--

LOCK TABLES `security_images` WRITE;
/*!40000 ALTER TABLE `security_images` DISABLE KEYS */;
INSERT INTO `security_images` VALUES ('TESTID1020','FKB001SE','https://www.briefcam.com/wp-content/uploads/2020/01/video-evidence-900.jpg','2022-01-27 05:02:01','DEMOHUB001',0),('TESTID1021','FKB001SE','https://www.briefcam.com/wp-content/uploads/2020/01/video-evidence-900.jpg','2022-03-04 14:13:51','DEMOHUB001',0);
/*!40000 ALTER TABLE `security_images` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `serial_data`
--

DROP TABLE IF EXISTS `serial_data`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `serial_data` (
  `serial` varchar(50) NOT NULL,
  `type` int NOT NULL,
  PRIMARY KEY (`serial`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `serial_data`
--

LOCK TABLES `serial_data` WRITE;
/*!40000 ALTER TABLE `serial_data` DISABLE KEYS */;
INSERT INTO `serial_data` VALUES ('FKB001BMS',7),('FKB001FLT',3),('FKB001LT',5),('FKB001SC',4),('FKB001SE',6),('FKB001THS',1),('FKB001US',2);
/*!40000 ALTER TABLE `serial_data` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `smartconnect_settings`
--

DROP TABLE IF EXISTS `smartconnect_settings`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `smartconnect_settings` (
  `serial` varchar(50) NOT NULL,
  `p1_enable` int NOT NULL DEFAULT '0',
  `p1_name` varchar(40) NOT NULL DEFAULT 'Port 1',
  `p2_enable` int NOT NULL DEFAULT '0',
  `p2_name` varchar(40) NOT NULL DEFAULT 'Port 2',
  `p3_enable` int NOT NULL DEFAULT '0',
  `p3_name` varchar(40) NOT NULL DEFAULT 'Port 3',
  `p4_enable` int NOT NULL DEFAULT '0',
  `p4_name` varchar(40) NOT NULL DEFAULT 'Port 4',
  `p5_enable` int NOT NULL DEFAULT '0',
  `p5_name` varchar(40) NOT NULL DEFAULT 'Port 5',
  `p6_enable` int NOT NULL DEFAULT '0',
  `p6_name` varchar(40) NOT NULL DEFAULT 'Port 6',
  `p7_enable` int NOT NULL DEFAULT '0',
  `p7_name` varchar(40) NOT NULL DEFAULT 'Port 7',
  `p8_enable` int NOT NULL DEFAULT '0',
  `p8_name` varchar(40) NOT NULL DEFAULT 'Port 8',
  KEY `serial` (`serial`),
  CONSTRAINT `smartconnect_settings_ibfk_1` FOREIGN KEY (`serial`) REFERENCES `serial_data` (`serial`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `smartconnect_settings`
--

LOCK TABLES `smartconnect_settings` WRITE;
/*!40000 ALTER TABLE `smartconnect_settings` DISABLE KEYS */;
INSERT INTO `smartconnect_settings` VALUES ('FKB001SC',0,'hey there',0,'hell',1,'Port 3',0,'Port 4',1,'hello world',0,'Port 6',1,'Port 7',0,'Port 8');
/*!40000 ALTER TABLE `smartconnect_settings` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sync_data`
--

DROP TABLE IF EXISTS `sync_data`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `sync_data` (
  `hubid` varchar(50) NOT NULL,
  `serial` varchar(50) NOT NULL,
  `devicename` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`serial`),
  UNIQUE KEY `serial` (`serial`),
  CONSTRAINT `sync_data_ibfk_1` FOREIGN KEY (`serial`) REFERENCES `serial_data` (`serial`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sync_data`
--

LOCK TABLES `sync_data` WRITE;
/*!40000 ALTER TABLE `sync_data` DISABLE KEYS */;
INSERT INTO `sync_data` VALUES ('DEMOHUB001','FKB001BMS','Battery1'),('DEMOHUB001','FKB001FLT','FLT1'),('DEMOHUB001','FKB001LT','LOC1'),('DEMOHUB001','FKB001SC','1'),('DEMOHUB001','FKB001SE','Office Room Security Cam'),('DEMOHUB001','FKB001THS','Living Room'),('DEMOHUB001','FKB001US','US1');
/*!40000 ALTER TABLE `sync_data` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ths_settings`
--

DROP TABLE IF EXISTS `ths_settings`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `ths_settings` (
  `serial` varchar(50) NOT NULL,
  `alert_temp` int NOT NULL DEFAULT '0',
  `low_temp` int NOT NULL DEFAULT '-50',
  `high_temp` int NOT NULL DEFAULT '50',
  `alert_gas` int NOT NULL DEFAULT '0',
  `high_gas` int NOT NULL DEFAULT '4500',
  `alert_hum` int NOT NULL DEFAULT '0',
  `low_hum` int NOT NULL DEFAULT '0',
  `high_hum` int NOT NULL DEFAULT '100',
  PRIMARY KEY (`serial`),
  CONSTRAINT `ths_settings_ibfk_1` FOREIGN KEY (`serial`) REFERENCES `serial_data` (`serial`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ths_settings`
--

LOCK TABLES `ths_settings` WRITE;
/*!40000 ALTER TABLE `ths_settings` DISABLE KEYS */;
INSERT INTO `ths_settings` VALUES ('FKB001THS',1,21,45,0,7300,0,0,47);
/*!40000 ALTER TABLE `ths_settings` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user_data`
--

DROP TABLE IF EXISTS `user_data`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `user_data` (
  `email` varchar(100) NOT NULL,
  `token` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_data`
--

LOCK TABLES `user_data` WRITE;
/*!40000 ALTER TABLE `user_data` DISABLE KEYS */;
INSERT INTO `user_data` VALUES ('sathya@test.com','3qB8DnaBPlgp017zJM9iu7d4ke12');
/*!40000 ALTER TABLE `user_data` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping events for database 'fokatech_server'
--

--
-- Dumping routines for database 'fokatech_server'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-04-25 11:27:35
