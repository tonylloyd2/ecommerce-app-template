-- MariaDB dump 10.19-11.2.0-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: ecommerce
-- ------------------------------------------------------
-- Server version	11.2.0-MariaDB

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
-- Table structure for table `cart`
--

DROP TABLE IF EXISTS `cart`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cart` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Primary Key',
  `create_time` datetime DEFAULT current_timestamp() COMMENT 'Create Time',
  `product_name` varchar(25) NOT NULL,
  `product_image` varchar(255) NOT NULL,
  `product_price` varchar(15) NOT NULL,
  `product_id` varchar(10) NOT NULL,
  `user_id` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cart`
--

LOCK TABLES `cart` WRITE;
/*!40000 ALTER TABLE `cart` DISABLE KEYS */;
INSERT INTO `cart` VALUES
(1,'2023-08-18 14:21:48','electric gassoline','Fp_4xzKaEAAh2kB.jpg','22345','6','9'),
(2,'2023-08-18 14:27:49','electric gassoline','Fp_4xzKaEAAh2kB.jpg','22345','7','9'),
(8,'2023-08-18 16:58:00','car appliance','FqWU4FvaUAEF7YM.jpeg','1200','3','4'),
(9,'2023-08-18 17:00:44','car appliance','FqWU4FvaUAEF7YM.jpeg','1200','3','4'),
(10,'2023-08-18 17:01:00','art wefwe','Fp_4xzKaEAAh2kB.jpg','2345','9','4'),
(14,'2023-08-18 17:06:50','REDET','FpMTWt3WYB8H02i.jpeg','1212','20','4'),
(17,'2023-08-18 17:20:36','dfgr','FpOkMa1XsAE1RQq.jpeg','1212','13','4'),
(18,'2023-08-18 20:48:28','jhfgdf','FpO8fdYWIAA3PlK.jpeg','765','14',''),
(19,'2023-08-18 23:02:15','zsdvsd','Fp_54kFaAAATYAR.jpeg','2345','11','9'),
(21,'2023-08-18 23:08:55','','','','','9'),
(22,'2023-08-18 23:19:59','car appliance','FqWU4FvaUAEF7YM.jpeg','1200','3','10'),
(23,'2023-08-18 23:20:07','jhfgdf','FpO8fdYWIAA3PlK.jpeg','765','14','10'),
(24,'2023-08-18 23:20:18','zsdvsd','Fp_54kFaAAATYAR.jpeg','2345','11','10'),
(26,'2023-08-18 23:53:34','','','','','10'),
(27,'2023-08-18 23:53:50','dfgr','FpOkMa1XsAE1RQq.jpeg','1212','13','10'),
(30,'2023-08-19 01:50:07','zsdvsd','Fp_54kFaAAATYAR.jpeg','2345','11','11');
/*!40000 ALTER TABLE `cart` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `category`
--

DROP TABLE IF EXISTS `category`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `category` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Primary Key',
  `create_time` datetime DEFAULT NULL COMMENT 'Create Time',
  `category_name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `category`
--

LOCK TABLES `category` WRITE;
/*!40000 ALTER TABLE `category` DISABLE KEYS */;
INSERT INTO `category` VALUES
(1,NULL,'Electronics'),
(2,NULL,'Clothing'),
(3,NULL,'Home and Living'),
(4,NULL,'Books'),
(5,NULL,'Beauty and Personal Care'),
(6,NULL,'Phones and Accessories'),
(7,NULL,'Shoes'),
(8,NULL,'Home and Kitchen'),
(9,NULL,'Beauty , Health and hair'),
(10,NULL,'bags'),
(11,NULL,'Clothes'),
(12,NULL,'Watches and jewellery'),
(13,NULL,'Computers and accessories'),
(14,NULL,'Baby , kids and maternity'),
(15,NULL,'Drinks'),
(16,NULL,'automotive'),
(17,NULL,'Sports ,fitness and outdoor'),
(18,NULL,'office products');
/*!40000 ALTER TABLE `category` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `product_information`
--

DROP TABLE IF EXISTS `product_information`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `product_information` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `item_name` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `items_number` varchar(20) DEFAULT '10',
  `image_primary` varchar(255) NOT NULL,
  `image2` varchar(255) NOT NULL,
  `image3` varchar(255) NOT NULL,
  `image4` varchar(255) NOT NULL,
  `image5` varchar(255) NOT NULL,
  `image6` varchar(255) NOT NULL,
  `description` varchar(300) NOT NULL,
  `price` varchar(10) NOT NULL,
  `wishlist_tag` varchar(255) DEFAULT 'false',
  `cart_tag` varchar(255) DEFAULT 'false',
  `new_arrival_tag` varchar(255) DEFAULT 'false',
  `in_demand_tag` varchar(255) DEFAULT 'false',
  `trending_tag` varchar(255) DEFAULT 'false',
  `flash_sale_tag` varchar(255) DEFAULT 'false',
  `availability` varchar(255) DEFAULT 'true',
  `ratings` varchar(5) DEFAULT NULL,
  `reviews` varchar(5) DEFAULT NULL,
  `seller_phone_contact` varchar(20) DEFAULT NULL,
  `seller_email_contact` varchar(20) DEFAULT NULL,
  `seller_organization` varchar(200) DEFAULT 'Self Bussiness',
  `coming_soon` varchar(255) DEFAULT 'false',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `product_information`
--

LOCK TABLES `product_information` WRITE;
/*!40000 ALTER TABLE `product_information` DISABLE KEYS */;
INSERT INTO `product_information` VALUES
(1,'art','Other','56','FpMolNUX0AMXaWo.jpeg','Fp_5TA8aEAE5vFk.jpeg','FpFLDzyXwAEvH63.jpeg','Fp_5TA8aEAE5vFk.jpeg','Fp_4xzKaEAAh2kB.jpg','FpNI6l4XsAARCIw.jpeg','art is wonderfull','1200','false','false','true','true','true','true','true',NULL,NULL,NULL,NULL,'Self Bussiness','true'),
(2,'electric gas','Electronics','50','FqWU4FvaUAEF7YM.jpeg','Fp_5CBGaMAIdbV0.jpeg','Fp_5TA8aEAE5vFk.jpeg','FpOaEwcWAAAuAlk.jpeg','FpOhueNX0AIiBbH.jpeg','FpOpxxwWYAEee-k.jpeg','gas that can cook beterr bitch ass','1200','false','false','true','true','true','true','true',NULL,NULL,NULL,NULL,'Self Bussiness','true'),
(3,'car appliance','Electronics','50','FqWU4FvaUAEF7YM.jpeg','Fp_5CBGaMAIdbV0.jpeg','Fp_5TA8aEAE5vFk.jpeg','FpOaEwcWAAAuAlk.jpeg','FpOhueNX0AIiBbH.jpeg','FpOpxxwWYAEee-k.jpeg','car parts in the hood','1200','false','false','true','true','true','true','true',NULL,NULL,NULL,NULL,'Self Bussiness','true'),
(4,'car appliance','Electronics','50','FqWU4FvaUAEF7YM.jpeg','Fp_5CBGaMAIdbV0.jpeg','Fp_5TA8aEAE5vFk.jpeg','FpOaEwcWAAAuAlk.jpeg','FpOhueNX0AIiBbH.jpeg','FpOpxxwWYAEee-k.jpeg','car parts in the hood','1200','false','false','true','true','true','true','true',NULL,NULL,NULL,NULL,'Self Bussiness','true'),
(5,'electric gassoline','Clothing','43','Fp1EFIsX0AEGSFU.jpeg','FpPnSYZX0AEZuKp.jpeg','Fp_57vLaMAIoTe5.jpeg','Fp1EFIsX0AEGSFU.jpeg','FpMTWt3WYB8H02i.jpeg','FpMKerjXECM-B8j.jpeg','awfegadg adg asdjgnsdg zsdzgk sdgzjnsdg sdgkzsdjzbgsdjkgbsd gsdkjgnzsdkljgnzSDz gSDkjgnzsdjkg','3400','false','false','true','true','false','false','true',NULL,NULL,NULL,NULL,'','false'),
(6,'electric gassoline','Beauty and Personal Care','22','Fp_4xzKaEAAh2kB.jpg','Fp_4xzKaEAAh2kB.jpg','Fp1EFIsX0AEGSFU.jpeg','Fp_57vLaMAIoTe5.jpeg','Fp_5CBGaMAIdbV0.jpeg','FpObXBpWYAEr8Ti.jpeg','drxstfcdgh j jhbjknsd askfjasbjkdfnasfas aksdvjjfa','22345','false','false','true','false','false','false','true',NULL,NULL,NULL,NULL,'qewwewd ','false'),
(7,'electric gassoline','Beauty and Personal Care','22','Fp_4xzKaEAAh2kB.jpg','Fp_4xzKaEAAh2kB.jpg','Fp1EFIsX0AEGSFU.jpeg','Fp_57vLaMAIoTe5.jpeg','Fp_5CBGaMAIdbV0.jpeg','FpObXBpWYAEr8Ti.jpeg','drxstfcdgh j jhbjknsd askfjasbjkdfnasfas aksdvjjfa','22345','false','false','true','false','false','false','true',NULL,NULL,NULL,NULL,'qewwewd ','false'),
(8,'art wefwe','Beauty , Health and hair','34','Fp_4xzKaEAAh2kB.jpg','Fp_5CBGaMAIdbV0.jpeg','FpOkK0qWIAUAyhc.jpeg','FpPiR5CWAAArmEZ.jpeg','FpNcKgKXgAAGadw.jpeg','FpObpWaXoAE0VIz.jpeg','awergasbegkljawe gwemgbwklgnwe gjmwebnagkle gwejgbweklg fawem gkwebngke','2345','false','false','false','false','false','false','true',NULL,NULL,NULL,NULL,'qewwewd ','false'),
(9,'art wefwe','Beauty , Health and hair','34','Fp_4xzKaEAAh2kB.jpg','Fp_5CBGaMAIdbV0.jpeg','FpOkK0qWIAUAyhc.jpeg','FpPiR5CWAAArmEZ.jpeg','FpNcKgKXgAAGadw.jpeg','FpObpWaXoAE0VIz.jpeg','awergasbegkljawe gwemgbwklgnwe gjmwebnagkle gwejgbweklg fawem gkwebngke','2345','false','false','false','false','false','false','true',NULL,NULL,NULL,NULL,'qewwewd ','false'),
(10,'art sdfhzsdfh','Electronics','34','Fp_4xzKaEAAh2kB.jpg','Fp_5CBGaMAIdbV0.jpeg','FpOkK0qWIAUAyhc.jpeg','FpPiR5CWAAArmEZ.jpeg','FpNcKgKXgAAGadw.jpeg','FpObpWaXoAE0VIz.jpeg','awergasbegkljawe gwemgbwklgnwe gjmwebnagkle gwejgbweklg fawem gkwebngke','2345','false','false','false','false','false','false','true',NULL,NULL,NULL,NULL,'qewwewd ','false'),
(11,'zsdvsd','Electronics','33','Fp_54kFaAAATYAR.jpeg','Fp_5CBGaMAIdbV0.jpeg','FpPM9InXoAAJKs1.jpeg','FpPiR5CWAAArmEZ.jpeg','FpNcKgKXgAAGadw.jpeg','FpObpWaXoAE0VIz.jpeg','awergasbegkljawe gwemgbwklgnwe gjmwebnagkle gwejgbweklg fawem gkwebngke','2345','false','false','false','false','false','false','true',NULL,NULL,NULL,NULL,'erergcxss','false'),
(12,'sdgsd sef','Clothing','700','Fp_54kFaAAATYAR.jpeg','FpPiR5CWAAArmEZ.jpeg','FpPM9InXoAAJKs1.jpeg','FpPiR5CWAAArmEZ.jpeg','Fp_5TA8aEAE5vFk.jpeg','FpObpWaXoAE0VIz.jpeg','awergasbegkljawe gwemgbwklgnwe gjmwebnagkle gwejgbweklg fawem gkwebngke','12334','false','false','false','false','false','false','true',NULL,NULL,NULL,NULL,'rfedwew','false'),
(13,'dfgr','Clothing','232','FpOkMa1XsAE1RQq.jpeg','FpPiR5CWAAArmEZ.jpeg','FpPM9InXoAAJKs1.jpeg','FpPiR5CWAAArmEZ.jpeg','FpRuyNrXgAAMCL4.jpeg','FpObpWaXoAE0VIz.jpeg','awergasbegkljawe gwemgbwklgnwe gjmwebnagkle gwejgbweklg fawem gkwebngke','1212','false','false','false','false','false','false','true',NULL,NULL,NULL,NULL,'yutrgrf','false'),
(14,'jhfgdf','Clothing','2325','FpO8fdYWIAA3PlK.jpeg','FpOVObBXEAIlYpu.jpeg','FpPM9InXoAAJKs1.jpeg','FpPiR5CWAAArmEZ.jpeg','FpRuyNrXgAAMCL4.jpeg','FpObpWaXoAE0VIz.jpeg','asdfghjkl;ltuher gwetgwe fgwe fgwe tgwe tagwe tawe twet wertawe tgaweg weyh wrujwtqwe FAWRHTRB','765','false','false','false','false','false','false','true',NULL,NULL,NULL,NULL,'gtgt','false'),
(15,'WEDWSCDGSD','bags','234','FpPQ0M-XwAAnPOL.jpeg','FpPCpyHWcAErWzX.jpeg','FpPM9InXoAAJKs1.jpeg','FpPXvlwWcAA8NfX.jpeg','FpRuyNrXgAAMCL4.jpeg','FpObpWaXoAE0VIz.jpeg','asdfghjkl;ltuher gwetgwe fgwe fgwe tgwe tagwe tawe twet wertawe tgaweg weyh wrujwtqwe FAWRHTRB','200','false','false','false','false','false','false','true',NULL,NULL,NULL,NULL,'DHED','false'),
(16,'DFGHD','bags','222','FqYW8RXXwAESFAg.jpeg','FpPnSYZX0AEZuKp.jpeg','FpMuPVaaYAAsokG.jpeg','FpPXvlwWcAA8NfX.jpeg','FpRuyNrXgAAMCL4.jpeg','FpObpWaXoAE0VIz.jpeg','DDFFAA SD.FGNKSE;LNAWE GWE,.GNWE;KLNTGWE MGAKLWETNQIW3EJTFQWE TWKLJEGHWEGATNWELKGNWE TJAW BGWEGA FGVW','349','false','false','false','false','false','false','true',NULL,NULL,NULL,NULL,'WEWDCC','false'),
(17,'SGJN','bags','23','FqYW8RXXwAESFAg.jpeg','FpPnSYZX0AEZuKp.jpeg','FpMuPVaaYAAsokG.jpeg','FpPXvlwWcAA8NfX.jpeg','FpRuyNrXgAAMCL4.jpeg','FpObpWaXoAE0VIz.jpeg','DDFFAA SD.FGNKSE;LNAWE GWE,.GNWE;KLNTGWE MGAKLWETNQIW3EJTFQWE TWKLJEGHWEGATNWELKGNWE TJAW BGWEGA FGVW','3494','false','false','false','false','false','false','true',NULL,NULL,NULL,NULL,'DFGHDF','false'),
(18,'RFDGER','Other','123','FpObpWaXoAE0VIz.jpeg','FpPM9InXoAAJKs1.jpeg','FpMuPVaaYAAsokG.jpeg','FpPXvlwWcAA8NfX.jpeg','FpRuyNrXgAAMCL4.jpeg','FpObpWaXoAE0VIz.jpeg','DDFFAA SD.FGNKSE;LNAWE GWE,.GNWE;KLNTGWE MGAKLWETNQIW3EJTFQWE TWKLJEGHWEGATNWELKGNWE TJAW BGWEGA FGVW','1000','false','false','false','false','false','false','true',NULL,NULL,NULL,NULL,'DERE','false'),
(19,'REDER','office products','233','FpPCpyHWcAErWzX.jpeg','FqWU4FuacAAdL_T.jpeg','FpQgY1EXwAANhl5.jpeg','FpPXvlwWcAA8NfX.jpeg','FpRuyNrXgAAMCL4.jpeg','FpObpWaXoAE0VIz.jpeg','DDFFAA SD.FGNKSE;LNAWE GWE,.GNWE;KLNTGWE MGAKLWETNQIW3EJTFQWE TWKLJEGHWEGATNWELKGNWE TJAW BGWEGA FGVW','1212','false','false','false','false','false','false','true',NULL,NULL,NULL,NULL,'TERES','false'),
(20,'REDET','office products','233','FpMTWt3WYB8H02i.jpeg','FpMPPSiWYBIGVDr.jpeg','FpQgY1EXwAANhl5.jpeg','FpPXvlwWcAA8NfX.jpeg','FpRuyNrXgAAMCL4.jpeg','FpObpWaXoAE0VIz.jpeg','DDFFAA SD.FGNKSE;LNAWE GWE,.GNWE;KLNTGWE MGAKLWETNQIW3EJTFQWE TWKLJEGHWEGATNWELKGNWE TJAW BGWEGA FGVW','1212','false','false','false','false','false','false','true',NULL,NULL,NULL,NULL,'TERES','false'),
(21,'UYTR','office products','222','Fp_57vLaMAIoTe5.jpeg','FpOkE75WAAA6nxv.jpeg','FpQgY1EXwAANhl5.jpeg','FpPXvlwWcAA8NfX.jpeg','FpRuyNrXgAAMCL4.jpeg','FpObpWaXoAE0VIz.jpeg','DDFFAA SD.FGNKSE;LNAWE GWE,.GNWE;KLNTGWE MGAKLWETNQIW3EJTFQWE TWKLJEGHWEGATNWELKGNWE TJAW BGWEGA FGVW','3456','false','false','false','false','false','false','true',NULL,NULL,NULL,NULL,'SDFGH','false');
/*!40000 ALTER TABLE `product_information` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sellers`
--

DROP TABLE IF EXISTS `sellers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sellers` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Primary Key',
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `bussiness_name` varchar(255) NOT NULL,
  `bussiness_account` varchar(255) NOT NULL,
  `create_time` datetime DEFAULT current_timestamp() COMMENT 'Create Time',
  `profile` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sellers`
--

LOCK TABLES `sellers` WRITE;
/*!40000 ALTER TABLE `sellers` DISABLE KEYS */;
INSERT INTO `sellers` VALUES
(3,'tony','lloyd','12345677','$2y$10$HnwjpE9ryfHCiGHf7jdfUumjmeckfAEMtTAODxXl2wZDte9x.mHKO','lloydkatila@gmail.com','qewwewd','2345678','2023-08-16 13:27:45','../../../image/seller/Fp_5TA8aEAE5vFk.jpeg');
/*!40000 ALTER TABLE `sellers` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Primary Key',
  `registered_date` datetime DEFAULT current_timestamp() COMMENT 'Create Time',
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `phone` varchar(25) NOT NULL,
  `email` varchar(25) NOT NULL,
  `password` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES
(1,'2023-08-09 01:32:52','lloyd','tony','123456789','lloyd@gmail.com','$2y$10$xWa35jeJKkBW.km09ckBjuAnz/tRYmlk.09.MjBnogtx9lSrIjOV6','../../image/instagram1.jpg'),
(4,'2023-08-09 03:54:25','tony','katila','0718999990','tony@gmail.co.ke','$2y$10$ebU8ONRiyiGKTXOGBMXDbubJsRJdsj6IL6jS/kw/E4WFrpa5LfZri','../../image/instagram1.jpg'),
(5,'2023-08-09 06:11:36','rro','werty','12343467','katila@gmail.com','$2y$10$Jq//nU./81rc3Wt/6gh1Wuicon1zeYxTJsB2fak3Ns5O4Flx3Td3K','../../image/instagram1.jpg'),
(6,'2023-08-11 05:11:44','ws','wef','65432','lloyd@gmail.com','$2y$10$PJ8YB4U9yTyRWjJHpeT.L.QmbJ4YPHE4zfzEYlGDYcOtEmun8gl3W','../../image/instagram1.jpg'),
(7,'2023-08-11 05:47:09','EEFEF','wef','23456','lloyd@gmail.com','1212','../../image/instagram1.jpg'),
(8,'2023-08-11 05:50:03','EEFEF','wef','23456','lloyd@gmail.com','$2y$10$DxqVrdKdJvQLcXSy99ANiutubYbVW/ZBqoWoJ.m3Yr7H3QrLbjjJC','../../image/product-detail-800x800.jpg'),
(9,'2023-08-16 17:09:39','tupak','jafe','0742441412','tupack@gmail.com','$2y$10$qYAa/vhMLy5rUBiFrtWzZOClCN1sjamOLdXWCr02dxt0HpiggtPb2','../../image/FpPvT0FWYAIKV6B.jpeg'),
(10,'2023-08-18 23:19:39','lloyd','katila','0742441412','katilalloyd@gmail.co.ke','$2y$10$o4dgDNsDym3tSnSVaPfQc.lmMTITK.AqPpNSpNMfjI4ZRYY/rddBu','../../image/FpSC-x4acAESU3a.jpeg'),
(11,'2023-08-19 01:45:42','last','tasa','1234567','lloydkatila@gmail.co.ke','$2y$10$0oezFYsZeI4ACKCTFvuLG.wf/OrA3lDyHqt0HCuCDyQKoh1oZ/KeW','../../image/FpQgY1EXwAANhl5.jpeg');
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

-- Dump completed on 2023-08-19  1:54:36
