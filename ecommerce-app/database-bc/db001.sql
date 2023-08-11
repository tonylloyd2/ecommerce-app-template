-- MariaDB dump 10.19-11.0.2-MariaDB, for Linux (x86_64)
--
-- Host: localhost    Database: ecommerce
-- ------------------------------------------------------
-- Server version	11.0.2-MariaDB

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
-- Table structure for table `product_information`
--

DROP TABLE IF EXISTS `product_information`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `product_information` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `item_name` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `items_number` varchar(20) DEFAULT '5',
  `image_primary` varchar(255) NOT NULL,
  `image2` varchar(255) NOT NULL,
  `image3` varchar(255) NOT NULL,
  `image4` varchar(255) NOT NULL,
  `image5` varchar(255) NOT NULL,
  `image6` varchar(255) NOT NULL,
  `description` varchar(300) NOT NULL,
  `price` varchar(10) NOT NULL,
  `wishlist_tag` tinyint(1) DEFAULT 0,
  `cart_tag` tinyint(1) DEFAULT 0,
  `new_arrival_tag` tinyint(1) DEFAULT 0,
  `in_demand_tag` tinyint(1) DEFAULT 0,
  `trending_tag` tinyint(1) DEFAULT 0,
  `flash_sale_tag` tinyint(1) DEFAULT 0,
  `availability` tinyint(1) DEFAULT 1,
  `ratings` varchar(5) DEFAULT NULL,
  `reviews` varchar(5) DEFAULT NULL,
  `seller_name` varchar(20) NOT NULL,
  `seller_phone_contact` varchar(20) NOT NULL,
  `seller_email_contact` varchar(20) NOT NULL,
  `seller_website_link` varchar(20) NOT NULL,
  `seller_organization` varchar(200) DEFAULT 'Self Bussiness',
  `comming_soon` tinyint(1) DEFAULT 0,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `product_information`
--

LOCK TABLES `product_information` WRITE;
/*!40000 ALTER TABLE `product_information` DISABLE KEYS */;
/*!40000 ALTER TABLE `product_information` ENABLE KEYS */;
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
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES
(1,'2023-08-09 01:32:52','lloyd','tony','123456789','lloyd@gmail.com','$2y$10$xWa35jeJKkBW.km09ckBjuAnz/tRYmlk.09.MjBnogtx9lSrIjOV6','../../image/instagram1.jpg'),
(4,'2023-08-09 03:54:25','tony','katila','0718999990','tony@gmail.com','$2y$10$9hSRNYtBJW4laEyVIYXVcuBOpwTCYs9DkZv6LzuoavnMVuMeJd/Fy','../../image/instagram1.jpg'),
(5,'2023-08-09 06:11:36','rro','werty','12343467','katila@gmail.com','$2y$10$Jq//nU./81rc3Wt/6gh1Wuicon1zeYxTJsB2fak3Ns5O4Flx3Td3K','../../image/instagram1.jpg'),
(6,'2023-08-11 05:11:44','ws','wef','65432','lloyd@gmail.com','$2y$10$PJ8YB4U9yTyRWjJHpeT.L.QmbJ4YPHE4zfzEYlGDYcOtEmun8gl3W','../../image/instagram1.jpg'),
(7,'2023-08-11 05:47:09','EEFEF','wef','23456','lloyd@gmail.com','1212','../../image/instagram1.jpg'),
(8,'2023-08-11 05:50:03','EEFEF','wef','23456','lloyd@gmail.com','$2y$10$DxqVrdKdJvQLcXSy99ANiutubYbVW/ZBqoWoJ.m3Yr7H3QrLbjjJC','../../image/product-detail-800x800.jpg');
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

-- Dump completed on 2023-08-11  8:09:21
