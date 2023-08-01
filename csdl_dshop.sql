-- MySQL dump 10.13  Distrib 8.0.32, for Win64 (x86_64)
--
-- Host: localhost    Database: dshop
-- ------------------------------------------------------
-- Server version	8.0.32

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
-- Table structure for table `brand`
--

DROP TABLE IF EXISTS `brand`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `brand` (
  `id_brand` int NOT NULL AUTO_INCREMENT,
  `name_brand` varchar(255) NOT NULL,
  `img_brand` varchar(500) NOT NULL,
  `description_brand` text,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_brand`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `brand`
--

LOCK TABLES `brand` WRITE;
/*!40000 ALTER TABLE `brand` DISABLE KEYS */;
INSERT INTO `brand` VALUES (3,'Kaiyodo','kaiyodo.png','Hãng Kaiyodo','2023-05-17 06:12:49','2023-05-17 14:33:31'),(4,'Good Smile Company','goodsmile.png','Hãng Good Smile Company','2023-05-17 06:12:49','2023-05-17 14:33:43'),(5,'Max Factory','maxfactory.png','Hãng Max Factory','2023-05-17 06:12:49','2023-05-17 14:33:54'),(6,'Aniplex','aniplex.png','Hãng Aniplex','2023-05-17 06:12:49','2023-05-17 14:34:13'),(24,'Bandai Namco','bandai.png','<p>Bandai Namco</p>','2023-05-20 03:34:39','2023-05-20 03:34:39'),(25,'Artspirit','artspirit.png','<p>Artspirit</p>','2023-05-20 03:35:10','2023-05-20 03:35:10');
/*!40000 ALTER TABLE `brand` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `comment_figure`
--

DROP TABLE IF EXISTS `comment_figure`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `comment_figure` (
  `id_comment` int NOT NULL AUTO_INCREMENT,
  `name_com` varchar(255) NOT NULL,
  `comment_mes` text,
  `figure_id` int NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_comment`),
  KEY `figure_id` (`figure_id`),
  CONSTRAINT `comment_figure_ibfk_1` FOREIGN KEY (`figure_id`) REFERENCES `figure` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `comment_figure`
--

LOCK TABLES `comment_figure` WRITE;
/*!40000 ALTER TABLE `comment_figure` DISABLE KEYS */;
INSERT INTO `comment_figure` VALUES (12,'Bùi trần nguyên danh','mô hình rất đẹp',4,'2023-05-24 06:59:11','2023-05-24 06:59:11'),(13,'Bùi trần nguyên danh','đẹp',4,'2023-05-24 07:48:44','2023-05-24 07:48:44'),(14,'bình diamond','nhưcak',36,'2023-05-24 08:03:06','2023-05-24 08:03:06'),(15,'Bùi trần nguyên danh','s',36,'2023-05-24 08:06:02','2023-05-24 08:06:02'),(16,'s','s',36,'2023-05-24 08:06:43','2023-05-24 08:06:43'),(17,'g','g',36,'2023-05-24 08:08:28','2023-05-24 08:08:28'),(18,'s','s',36,'2023-05-24 08:09:47','2023-05-24 08:09:47'),(19,'s','s',36,'2023-05-24 08:09:48','2023-05-24 08:09:48'),(20,'d','d',36,'2023-05-24 08:10:08','2023-05-24 08:10:08'),(21,'d','d',36,'2023-05-24 08:10:08','2023-05-24 08:10:08'),(22,'DC Comic','d',36,'2023-05-24 08:16:31','2023-05-24 08:16:31'),(23,'Bình Diamond','mô hình rất đẹp',30,'2023-05-25 00:30:00','2023-05-25 00:30:00'),(24,'Bình Diamond','mô hình đẹp',36,'2023-05-25 02:21:35','2023-05-25 02:21:35'),(25,'Danh Bùi','mô hình rất đẹp',33,'2023-05-26 08:51:19','2023-05-26 08:51:19');
/*!40000 ALTER TABLE `comment_figure` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `customer_shipping`
--

DROP TABLE IF EXISTS `customer_shipping`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `customer_shipping` (
  `id_ship` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `address` text,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `note` text,
  `payment` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id_ship`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `customer_shipping`
--

LOCK TABLES `customer_shipping` WRITE;
/*!40000 ALTER TABLE `customer_shipping` DISABLE KEYS */;
INSERT INTO `customer_shipping` VALUES (6,'Nguyễn Tiến Đạt','jfwhf@dh','0981215023','Hưng Yên','2023-05-24 02:43:51','2023-05-24 02:43:51','giao càng nhanh càng tốt','COD'),(7,'Bùi trần nguyên danh','jfwhf@dh','0981215023','Hưng Yên','2023-05-25 02:22:12','2023-05-25 02:22:12','kfk','COD'),(8,'Bùi trần nguyên danh','jfwhf@dh','0981215023','Hưng Yên','2023-05-26 08:51:42','2023-05-26 08:51:42','không có gì','MoMo'),(9,'Nguyễn Thái Bình','Binh12@gmail.com','0123456789','Thái Bình','2023-05-26 15:39:02','2023-05-26 15:39:02','ship càng nhanh càng tốt','MoMo'),(10,'Mai Thị Hường','Huong@gmail.com','0258741963','Hưng Yên','2023-05-26 15:42:54','2023-05-26 15:42:54','không có gì','COD'),(11,'Phạm Văn Của','cua@gmail.com','0789564213','Kim Động - Hưng Yên','2023-05-26 15:47:37','2023-05-26 15:47:37','không có gì','MoMo'),(12,'ad','admin@gmail.com','0198745632','Văn Lâm - Hưng Yên','2023-05-26 16:07:22','2023-05-26 16:07:22','anh1','MoMo');
/*!40000 ALTER TABLE `customer_shipping` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `failed_jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `failed_jobs`
--

LOCK TABLES `failed_jobs` WRITE;
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `figure`
--

DROP TABLE IF EXISTS `figure`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `figure` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `img` varchar(500) DEFAULT NULL,
  `description` text,
  `price` decimal(10,2) DEFAULT NULL,
  `promotionprice` decimal(10,2) DEFAULT NULL,
  `quantity` int NOT NULL,
  `figure_category_id` int NOT NULL,
  `brand_id` int NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `warranty` int DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `figure_category_id` (`figure_category_id`),
  KEY `brand_id` (`brand_id`),
  CONSTRAINT `figure_ibfk_1` FOREIGN KEY (`figure_category_id`) REFERENCES `figure_category` (`id_cate`) ON DELETE CASCADE,
  CONSTRAINT `figure_ibfk_2` FOREIGN KEY (`brand_id`) REFERENCES `brand` (`id_brand`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=39 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `figure`
--

LOCK TABLES `figure` WRITE;
/*!40000 ALTER TABLE `figure` DISABLE KEYS */;
INSERT INTO `figure` VALUES (4,'Mô hình các hình thái của Frieza','Frieza.png','Mô hình thuộc anime Dragon Ball',5500.00,5200.00,124,9,5,'2023-05-17 14:36:10','2023-05-17 15:22:51',6),(5,'Naruto Cửu Vĩ hình','cuu-vi2.png','Mô hình thuộc anime Naruto',3800.00,3547.00,26,2,4,'2023-05-17 14:38:08','2023-05-17 14:38:08',6),(6,'Mô hình Batman Samurai','batmansamurai.png','<p>Mô hình Batman Samurai</p>',1520.00,1450.00,15,14,4,'2023-05-18 00:33:16','2023-05-18 00:33:16',6),(10,'Set Skin assimov','set-skin-assimov.png','<p>Set Skin assimov CSGO</p>',555.00,520.00,85,15,3,'2023-05-18 00:35:45','2023-05-18 00:35:45',6),(11,'Bộ dao Butterfly CSGO','combobutterfly.png','<p>Bộ dao Butterfly CSGO</p>',62.00,45.00,166,15,5,'2023-05-18 00:36:25','2023-05-18 00:36:25',6),(13,'Phụ kiện cosplay kiếm tanjiro','kiem_tanjiro.png','<p>Phụ kiện cosplay kiếm tanjiro</p>',23.00,15.00,155,15,6,'2023-05-18 00:40:20','2023-05-18 00:40:20',6),(14,'Set Marvel chibi','marvelchibi.png','<p>Set Marvel chibi&nbsp;</p>',500.00,450.00,16,15,3,'2023-05-18 00:43:18','2023-05-18 00:43:18',6),(17,'Mô hình rồng thần Namek','god_dragon.png','<p>Mô hình rồng thần Namek</p>',8200.00,8100.00,66,9,5,'2023-05-18 00:45:00','2023-05-18 00:45:00',6),(18,'Mô hình Joker(Dark Knight)','joker.png','<p>Mô hình Joker(Dark Knight)</p>',1650.00,1500.00,55,14,4,'2023-05-18 00:45:56','2023-05-18 00:45:56',6),(19,'Mô hình Joker X Harlay','jokerxharley.png','<p>Mô hình Joker X Harlay</p>',2654.00,2555.00,14,14,4,'2023-05-18 00:48:01','2023-05-18 00:48:01',6),(20,'Mô hình Kaido(Arc Wano)','kaido.png','<p>Mô hình Kaido(Arc Wano)</p>',5520.00,5220.00,44,1,3,'2023-05-18 00:49:48','2023-05-18 00:49:48',6),(22,'Huy hiệu One Piece','huy_hieu_one_piece.png','<p>Huy hiệu One Piece</p>',10.00,8.00,550,15,5,'2023-05-18 00:51:56','2023-05-18 00:51:56',6),(23,'Phi tiêu Batman','phi-tieu-batman.png','<p>Phi tiêu Batman</p>',15.00,12.00,55,15,4,'2023-05-18 00:52:55','2023-05-18 00:52:55',6),(24,'Phụ kiện anime Naruto','phu_kien_naruto.png','<p>Phụ kiện anime Naruto</p>',55.00,45.00,12,15,4,'2023-05-18 00:53:31','2023-05-18 00:53:31',6),(25,'Móc khóa kiếm One Piece','set_moc_khoa.png','<p>Móc khóa kiếm One Piece</p>',8.00,5.00,150,15,5,'2023-05-18 00:54:26','2023-05-18 00:54:26',6),(26,'Set cosplay Kunai Naruto','setkunai.png','<p>Set cosplay Kunai Naruto</p>',35.00,30.00,66,15,3,'2023-05-18 00:55:07','2023-05-18 00:55:07',6),(29,'Mô hình Tanjiro vũ điệu hỏa thần','tanjiro.png','<p>mô hình rất đẹp</p>',2500.00,2450.00,66,17,3,'2023-05-20 03:19:24','2023-05-20 03:19:24',6),(30,'Mô hìn Nezuko hóa quỷ','nezuko.png','<p>đẹp</p><p>&nbsp;</p>',3500.00,3200.00,55,17,3,'2023-05-20 03:20:04','2023-05-20 03:20:04',6),(31,'Mô hình nữ hoàng Boa Hancook','boa.png','<p>mô hình Boa</p>',5200.00,5100.00,11,1,24,'2023-05-20 03:37:08','2023-05-20 03:37:08',6),(32,'Mô hình Son Goku','songoku.png','<p>mô hình đẹp</p>',2500.00,2456.00,55,9,24,'2023-05-20 03:37:42','2023-05-20 03:37:42',6),(33,'Luffy X Kaido','luffyxkaido.png','<p>Luffy X Kaido</p>',6500.00,6420.00,22,1,24,'2023-05-20 03:38:19','2023-05-20 03:38:19',6),(34,'Mô hình Darkness Saber','dark_saber.png','<p>Mô hình Darkness Saber</p>',2600.00,2400.00,15,16,25,'2023-05-20 03:39:08','2023-05-20 03:39:08',6),(35,'Mô hình vua Gilgamesh','gilgamesh.png','<p>Mô hình vua Gilgamesh</p>',1520.00,1420.00,15,16,25,'2023-05-20 03:40:08','2023-05-20 03:40:08',6),(36,'Mô hình vua Gilgamesh model 2','gilgamesh2.png','<p>Mô hình vua Gilgamesh 2</p>',2610.00,2510.00,66,16,25,'2023-05-20 03:40:45','2023-05-20 03:40:45',6),(37,'Mô hình Madara Lục Đạo','madaralucdao.png','<p>Mô hình Madara Lục Đạo</p>',6200.00,6000.00,54,2,6,'2023-05-20 03:41:38','2023-05-20 03:41:38',6);
/*!40000 ALTER TABLE `figure` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `figure_category`
--

DROP TABLE IF EXISTS `figure_category`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `figure_category` (
  `id_cate` int NOT NULL AUTO_INCREMENT,
  `name_cate` varchar(255) NOT NULL,
  `description_cate` text,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_cate`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `figure_category`
--

LOCK TABLES `figure_category` WRITE;
/*!40000 ALTER TABLE `figure_category` DISABLE KEYS */;
INSERT INTO `figure_category` VALUES (1,'One Piece','<p>Mô hình thuộc anime One Piece</p>','2023-05-11 02:49:36','2023-05-17 16:24:49'),(2,'Naruto','Mô hình thuộc anime Naruto','2023-05-11 02:50:19','2023-05-11 02:50:19'),(9,'Dragon Ball','Mô hình thuộc anime Dragon Ball','2023-05-11 03:53:37','2023-05-11 03:53:37'),(14,'DC Comic','<p>DC Comic</p>','2023-05-18 00:29:12','2023-05-18 00:29:12'),(15,'Phụ kiện','<p>Phụ kiện</p>','2023-05-18 00:29:26','2023-05-18 00:29:26'),(16,'Fate/stay','<p>Fate/stay</p>','2023-05-18 00:29:43','2023-05-18 00:29:43'),(17,'Kimetsu No Yaiba','<p>Kimetsu No Yaiba</p>','2023-05-18 00:30:11','2023-05-18 00:30:11');
/*!40000 ALTER TABLE `figure_category` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_reset_tokens_table',1),(3,'2019_08_19_000000_create_failed_jobs_table',1),(4,'2019_12_14_000001_create_personal_access_tokens_table',1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `order_detail`
--

DROP TABLE IF EXISTS `order_detail`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `order_detail` (
  `id_detail` int NOT NULL AUTO_INCREMENT,
  `order_id` int NOT NULL,
  `figure_id` int NOT NULL,
  `totalquantity` int NOT NULL,
  `totalprice` int NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_detail`),
  KEY `order_id` (`order_id`),
  KEY `figure_id` (`figure_id`),
  CONSTRAINT `order_detail_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id_order`) ON DELETE CASCADE,
  CONSTRAINT `order_detail_ibfk_2` FOREIGN KEY (`figure_id`) REFERENCES `figure` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `order_detail`
--

LOCK TABLES `order_detail` WRITE;
/*!40000 ALTER TABLE `order_detail` DISABLE KEYS */;
INSERT INTO `order_detail` VALUES (1,1,34,1,2400,'2023-05-24 02:43:51','2023-05-24 02:43:51'),(2,1,33,2,12840,'2023-05-24 02:43:51','2023-05-24 02:43:51'),(3,1,35,1,1420,'2023-05-24 02:43:51','2023-05-24 02:43:51'),(4,2,36,4,10040,'2023-05-25 02:22:12','2023-05-25 02:22:12'),(5,3,35,1,1420,'2023-05-26 08:51:42','2023-05-26 08:51:42'),(6,3,33,2,12840,'2023-05-26 08:51:42','2023-05-26 08:51:42'),(7,4,30,1,3200,'2023-05-26 15:39:02','2023-05-26 15:39:02'),(8,4,31,1,5100,'2023-05-26 15:39:02','2023-05-26 15:39:02'),(9,4,32,1,2456,'2023-05-26 15:39:02','2023-05-26 15:39:02'),(10,4,29,1,2450,'2023-05-26 15:39:02','2023-05-26 15:39:02'),(11,5,30,1,3200,'2023-05-26 15:42:54','2023-05-26 15:42:54'),(12,5,31,1,5100,'2023-05-26 15:42:54','2023-05-26 15:42:54'),(13,6,11,1,45,'2023-05-26 15:47:37','2023-05-26 15:47:37'),(14,6,13,1,15,'2023-05-26 15:47:37','2023-05-26 15:47:37'),(15,6,17,1,8100,'2023-05-26 15:47:37','2023-05-26 15:47:37'),(16,7,37,1,6000,'2023-05-26 16:07:22','2023-05-26 16:07:22');
/*!40000 ALTER TABLE `order_detail` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `orders` (
  `id_order` int NOT NULL AUTO_INCREMENT,
  `shipping_id` int NOT NULL,
  `status` enum('pending','processing','shipped','delivered','cancelled') NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `user_id` int NOT NULL,
  PRIMARY KEY (`id_order`),
  KEY `orders_ibfk_1` (`shipping_id`),
  KEY `fk_user` (`user_id`),
  CONSTRAINT `fk_user` FOREIGN KEY (`user_id`) REFERENCES `user` (`id_us`) ON DELETE CASCADE,
  CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`shipping_id`) REFERENCES `customer_shipping` (`id_ship`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `orders`
--

LOCK TABLES `orders` WRITE;
/*!40000 ALTER TABLE `orders` DISABLE KEYS */;
INSERT INTO `orders` VALUES (1,6,'pending','2023-05-24 02:43:51','2023-05-26 08:36:41',4),(2,7,'pending','2023-05-25 02:22:12','2023-05-26 08:36:41',5),(3,8,'pending','2023-05-26 08:51:42','2023-05-26 08:51:42',8),(4,9,'pending','2023-05-26 15:39:02','2023-05-26 15:39:02',5),(5,10,'pending','2023-05-26 15:42:54','2023-05-26 15:42:54',5),(6,11,'pending','2023-05-26 15:47:37','2023-05-26 15:47:37',9),(7,12,'pending','2023-05-26 16:07:22','2023-05-26 16:07:22',3);
/*!40000 ALTER TABLE `orders` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_reset_tokens`
--

DROP TABLE IF EXISTS `password_reset_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_reset_tokens`
--

LOCK TABLES `password_reset_tokens` WRITE;
/*!40000 ALTER TABLE `password_reset_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_reset_tokens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `personal_access_tokens` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `personal_access_tokens`
--

LOCK TABLES `personal_access_tokens` WRITE;
/*!40000 ALTER TABLE `personal_access_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `personal_access_tokens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `post`
--

DROP TABLE IF EXISTS `post`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `post` (
  `id` int NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `img` varchar(500) NOT NULL,
  `description` text,
  `content` text,
  `post_category_id` int NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `author` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `post_category_id` (`post_category_id`),
  CONSTRAINT `post_ibfk_1` FOREIGN KEY (`post_category_id`) REFERENCES `post_category` (`id_cate`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `post`
--

LOCK TABLES `post` WRITE;
/*!40000 ALTER TABLE `post` DISABLE KEYS */;
INSERT INTO `post` VALUES (2,'Cẩm nan hướng dẫn chọn figure','Raiden_-28-1068x580.jpg','<p>Đối với những người chơi figure đã không còn quá xa lạ đến với thuật ngữ này. Nhưng còn đối với những người chưa biết hay đang tìm hiểu về loại hình này thì hãy cùng theo dõi bài viết dưới đây để hiểu thêm nhửng cơ bản về figure nhé !</p><p><br>&nbsp;</p>','<h2><strong>Figure là gì ?</strong></h2><p>Được ra đời vào những năm 1964, đến ngày nay dù cho đã trải qua hơn 50 năm phát triển, thế nhưng thì tại Việt Nam, figure vẫn còn khá lạ lẫm. Đối với nhiều người thì figure chỉ là một món đồ chơi dành cho trẻ em. Tuy nhiên thì đằng sau những mô hình đắt tiền đó là những nghệ thuật, mang theo một nền văn hóa và là thú vui của rất nhiều nhà sưu tầm coi trọng giữ gìn.</p><figure class=\"image\"><img src=\"https://mohinhfigure.com/wp-content/uploads/2021/08/cam-nang-figurer-1-e1628082603557-651x400.jpeg\" alt=\"figure là gì 1\" srcset=\"https://mohinhfigure.com/wp-content/uploads/2021/08/cam-nang-figurer-1-e1628082603557-651x400.jpeg 651w, https://mohinhfigure.com/wp-content/uploads/2021/08/cam-nang-figurer-1-e1628082603557-1302x800.jpeg 1302w, https://mohinhfigure.com/wp-content/uploads/2021/08/cam-nang-figurer-1-e1628082603557-768x472.jpeg 768w, https://mohinhfigure.com/wp-content/uploads/2021/08/cam-nang-figurer-1-e1628082603557-1320x811.jpeg 1320w, https://mohinhfigure.com/wp-content/uploads/2021/08/cam-nang-figurer-1-e1628082603557-600x369.jpeg 600w, https://mohinhfigure.com/wp-content/uploads/2021/08/cam-nang-figurer-1-e1628082603557.jpeg 1500w\" sizes=\"100vw\" width=\"651\"></figure><p>Theo trong từ điển tiếng anh, thì figure nghĩa là nhân vật tượng trưng, hình minh họa. Có nguồn gốc bắt đầu từ Mỹ. Nhưng dần phát triển nên trong văn hóa Otaku của Nhật Bản. Ban đầu cụm từ figure để chỉ nhựng mô hình mọ phỏng các nhân vật truyện tranh, manga và anime. Nhưng đến nay thì bất kì figure nào cũng có thể là nhân vật trong phim ảnh, thậm chí là cả ngoài đời thực.</p><h2><strong>Figure được tạo ra như thế nào ?</strong></h2><p>Đầu tiên, quá trình tạo ra một nhân vật anime rất đa dạng phụ thuộc vào nhân vật nào sẽ được thể hiện, vật liệu nào sẽ được sử dụng, v.v. Đại khái là hiểu một số bước (Tất nhiên nó có thể khác nhau):</p><ol><li>Đầu tiên, tất nhiên, cần phải có một hình minh họa khá rõ ràng, đó không phải là ý tưởng một bản vẽ về tác phẩm cuối cùng trông như thế nào</li><li>Ý tưởng này được điêu khắc bằng đất sét hoặc bất kỳ vật liệu dễ uốn nào và do những tiến bộ công nghệ ngày nay một số thậm chí còn được thực hiện bằng mô hình 3D</li><li>Sau đó, khuôn cho mỗi phần của bức tượng (tay, chân, v.v.) được làm từ mô hình cuối cùng làm bằng “Đất sét”, thường những khuôn này là từ silicone và để sản xuất hàng loạt, một số được làm từ thép.</li><li>Các khuôn được sử dụng sau khi đổ vật liệu mà từ đó tạo ra hình, chẳng hạn như PVC, một loại nhựa được đổ nóng lên khuôn và sau đó PVC được làm nguội để nó có thể có hình dạng của hình hoặc một phần</li><li>Sau quá trình làm mát, các bộ phận được sơn có thể được thực hiện bằng máy chải không khí hoặc máy sơn tự động hóa</li><li>Khi sơn đã khô thì hình có thể được lắp ráp mặc dù một số đang được bán theo bộ phận</li></ol><figure class=\"image\"><img src=\"https://mohinhfigure.com/wp-content/uploads/2021/08/cam-nang-figurer-2-e1628082623959-656x400.jpeg\" alt=\"figure là gì 2\" srcset=\"https://mohinhfigure.com/wp-content/uploads/2021/08/cam-nang-figurer-2-e1628082623959-656x400.jpeg 656w, https://mohinhfigure.com/wp-content/uploads/2021/08/cam-nang-figurer-2-e1628082623959-1311x800.jpeg 1311w, https://mohinhfigure.com/wp-content/uploads/2021/08/cam-nang-figurer-2-e1628082623959-768x468.jpeg 768w, https://mohinhfigure.com/wp-content/uploads/2021/08/cam-nang-figurer-2-e1628082623959-1320x805.jpeg 1320w, https://mohinhfigure.com/wp-content/uploads/2021/08/cam-nang-figurer-2-e1628082623959-600x366.jpeg 600w, https://mohinhfigure.com/wp-content/uploads/2021/08/cam-nang-figurer-2-e1628082623959.jpeg 1500w\" sizes=\"100vw\" width=\"656\"></figure><p>Vì vậy, quá trình tạo hình anime là một nghệ thuật hiện nay kết hợp giữa điêu khắc và mô hình 3D.&nbsp;Để tạo ra những tác phẩm nghệ thuật mà tất cả chúng ta yêu thích.</p><p>Dưới đây, nó sẽ hiển thị các loại&nbsp;nhân vật anime&nbsp;trước tiên theo chất liệu làm chúng và sau đó theo thiết kế mà chúng tôi cho rằng những đặc điểm này đến đặc điểm của các hình tượng yêu thích của Nhật Bản thực sự thú vị và quan trọng cần biết.</p><h2><strong>Phân loại figure phổ biến</strong></h2><h3><strong>Figma</strong></h3><p>Một&nbsp;nhân vật anime&nbsp;thực sự&nbsp;đi kèm với chuyển động thực tế, tự nhiên và cũng kết hợp với sự khéo léo và đẹp mắt.&nbsp;Họ là&nbsp;<strong>những nhân vật anime dễ thương.&nbsp;</strong>Các&nbsp;<strong>nhân vật trong anime</strong>&nbsp;Figma&nbsp;<strong>này có thể điều chỉnh được</strong>&nbsp;và bạn có thể di chuyển khớp của chúng vào hầu hết mọi vị trí.&nbsp;Đối với những người hâm mộ anime muốn vẽ, Figma cơ thể đơn giản cho phép bạn phác thảo và nó giúp bạn trở nên giỏi phác họa các nhân vật của con người&nbsp;<strong>.&nbsp;Các</strong>&nbsp;số liệu Figma tương tự như các số liệu hành động.&nbsp;Chúng có khớp bóng để bạn có thể cử động cánh tay, chân và thậm chí cả đầu của chúng trong hầu hết các trường hợp.&nbsp;Điều tốt về những loại hình này là bạn thực tế có thể tạo hình chúng ở bất kỳ tư thế nào bạn muốn, do đó chúng thú vị hơn như một món đồ chơi.</p><figure class=\"image\"><img src=\"https://mohinhfigure.com/wp-content/uploads/2021/08/cam-nang-figurer-4-e1628082644899-662x400.jpeg\" alt=\"figure là gì 3\" srcset=\"https://mohinhfigure.com/wp-content/uploads/2021/08/cam-nang-figurer-4-e1628082644899-662x400.jpeg 662w, https://mohinhfigure.com/wp-content/uploads/2021/08/cam-nang-figurer-4-e1628082644899-1323x800.jpeg 1323w, https://mohinhfigure.com/wp-content/uploads/2021/08/cam-nang-figurer-4-e1628082644899-768x464.jpeg 768w, https://mohinhfigure.com/wp-content/uploads/2021/08/cam-nang-figurer-4-e1628082644899-1320x798.jpeg 1320w, https://mohinhfigure.com/wp-content/uploads/2021/08/cam-nang-figurer-4-e1628082644899-600x363.jpeg 600w, https://mohinhfigure.com/wp-content/uploads/2021/08/cam-nang-figurer-4-e1628082644899.jpeg 1500w\" sizes=\"100vw\" width=\"662\"></figure><h3><strong>Nendoroid</strong></h3><p>Nendoroid là&nbsp;<strong>những nhân vật hoạt hình anime nhỏ</strong>&nbsp;với cái đầu to.&nbsp;Chúng được làm bằng PVC hoặc ABS.&nbsp;Điểm độc đáo của chúng là kích thước nhỏ, cao khoảng 10 cm.&nbsp;Chúng thường có vẻ ngoài dễ thương.&nbsp;Vẻ ngoài và các bộ phận cơ thể khác của chúng có thể hoán đổi cho nhau, tạo cho chúng một phạm vi các khớp và tư thế có thể hình dung được.&nbsp;Chúng được sử dụng như một món đồ chơi và được&nbsp;các&nbsp;nhà sưu tập&nbsp;nhân vật anime&nbsp;thu thập.</p><figure class=\"image\"><img src=\"https://mohinhfigure.com/wp-content/uploads/2021/08/cam-nang-figurer-5-e1628082663162-651x400.jpeg\" alt=\"figure là gì 4\" srcset=\"https://mohinhfigure.com/wp-content/uploads/2021/08/cam-nang-figurer-5-e1628082663162-651x400.jpeg 651w, https://mohinhfigure.com/wp-content/uploads/2021/08/cam-nang-figurer-5-e1628082663162-1302x800.jpeg 1302w, https://mohinhfigure.com/wp-content/uploads/2021/08/cam-nang-figurer-5-e1628082663162-768x472.jpeg 768w, https://mohinhfigure.com/wp-content/uploads/2021/08/cam-nang-figurer-5-e1628082663162-1320x811.jpeg 1320w, https://mohinhfigure.com/wp-content/uploads/2021/08/cam-nang-figurer-5-e1628082663162-600x369.jpeg 600w, https://mohinhfigure.com/wp-content/uploads/2021/08/cam-nang-figurer-5-e1628082663162.jpeg 1500w\" sizes=\"100vw\" width=\"651\"></figure><h3><strong>Action figure</strong></h3><p>Mô hình Action Figure là mô hình linh hoạt. Các figure&nbsp;có các khớp nối để có thể tạo ra những tư thế hành động khác nhau&nbsp;và có thể đi kèm với&nbsp;các phụ kiện, chẳng hạn như quần áo, công cụ, vũ khí và phương tiện. Action Figure&nbsp;được tạo ra bằng cách lắp ráp các bộ phận bằng nhựa đúc được làm dựa trên các mô hình mẫu&nbsp;đầu tiên&nbsp;và các mô hình này&nbsp;được điêu khắc bằng tay vô cùng tỉ mỉ.</p><figure class=\"image\"><img src=\"https://mohinhfigure.com/wp-content/uploads/2021/08/cam-nang-figurer-3-e1628082682144-678x400.jpeg\" alt=\"figure là gì 5\" srcset=\"https://mohinhfigure.com/wp-content/uploads/2021/08/cam-nang-figurer-3-e1628082682144-678x400.jpeg 678w, https://mohinhfigure.com/wp-content/uploads/2021/08/cam-nang-figurer-3-e1628082682144-1356x800.jpeg 1356w, https://mohinhfigure.com/wp-content/uploads/2021/08/cam-nang-figurer-3-e1628082682144-768x453.jpeg 768w, https://mohinhfigure.com/wp-content/uploads/2021/08/cam-nang-figurer-3-e1628082682144-1320x779.jpeg 1320w, https://mohinhfigure.com/wp-content/uploads/2021/08/cam-nang-figurer-3-e1628082682144-600x354.jpeg 600w, https://mohinhfigure.com/wp-content/uploads/2021/08/cam-nang-figurer-3-e1628082682144.jpeg 1500w\" sizes=\"100vw\" width=\"678\"></figure><h3><strong>Revoltech</strong></h3><p>Revoltech là dòng sản phẩm tương tự như Figma nhưng thô và chất lượng kém hơn nhiều. Tuy nhiên, giá của Revoltech lại rẻ hơn, nên cũng được rất nhiều người yêu thích lựa chọn. Nổi bật nhất trong dòng Revoltech phải kể tới Transformers, một trong những sản phẩm mang lại sự khởi sắc cho Figure những năm 1980.</p><figure class=\"image\"><img src=\"https://mohinhfigure.com/wp-content/uploads/2021/08/banner-8-533x400.jpeg\" alt=\"figure là gì 6\" srcset=\"https://mohinhfigure.com/wp-content/uploads/2021/08/banner-8-533x400.jpeg 533w, https://mohinhfigure.com/wp-content/uploads/2021/08/banner-8-1065x800.jpeg 1065w, https://mohinhfigure.com/wp-content/uploads/2021/08/banner-8-768x577.jpeg 768w, https://mohinhfigure.com/wp-content/uploads/2021/08/banner-8-600x451.jpeg 600w, https://mohinhfigure.com/wp-content/uploads/2021/08/banner-8.jpeg 1100w\" sizes=\"100vw\" width=\"533\"></figure><p>&nbsp;</p>',4,'2023-05-26 07:03:20','2023-05-26 07:29:56','Đạt Nguyễn'),(3,'Giới thiệu về DShop','Elden-Ring_-5-1068x580.jpg','<p>Giới thiệu cho mọi người hiểu thêm về shop bán mô hình DShop</p>','<h2>GIỚI THIỆU CỬA HÀNG MÔ HÌNH DShop</h2><p>&nbsp;</p><h3>MÔ HÌNH DShop LÀ 1 SHOP CÓ UY TÍN VÀ ĐƯỢC NHIỀU KHÁCH HÀNG TÍN NHIỆM.</h3><p>Với phương châm kinh doanh hài lòng trước nhận tiền sau, Mô Hình Figure luôn cố gắng mang lại giá sản phẩm ổn định và đảm bảo có nguồn hàng sẵn cho quý khách hàng. Cố gắng vì khách hàng là động lực để cửa hàng cố gắng phát triển</p><figure class=\"image\"><img src=\"https://mohinhfigure.com/wp-content/uploads/2021/08/gioi-thieu-1.jpeg\" alt=\"giới thiệu 1\"></figure><h2>ĐẶC BIỆT:</h2><ul><li>Những mặt hàng đã có sẵn tại shop mà giá trị thị trường đã tăng lên tới gấp 3 4 lần thì tại shop vẫn sẽ luôn giữ nguyên giá cố định và cam kết với khách hàng không đội giá sản phẩm lên cao theo thị trường. ( đã có nhiều khách hàng trên thị trường kiểm chứng và đánh giá tốt về dịch vụ của chúng tôi )</li><li>Hướng đi của Mô Hình Figure là luôn bán hàng theo giá cả cạnh tranh và tốt nhất trên thị trường mô hình&nbsp;figure Việt Nam, không để giá ảo hay giá độn lên nhằm mục đích câu khách hoặc tạo tiếng tăm ảo.</li><li>Chúng tôi luôn có quan niệm mua bán phải minh bạch rõ ràng nên sẽ có giá niêm yết của cửa hàng và không lên xuống bất thường. ( Trừ các dịp khuyến mãi sản phẩm dành cho khách hàng thân thiết của shop )</li><li>Luôn đặt giá trị cốt lõi của shop là sự uy tín và niềm tin về giá cả</li><li>Mọi qúy khách hàng khi đến với Mô Hình Figure&nbsp;sẽ có những chính sách khuyến mãi liên tục và quyền lợi riêng của khách hàng thân thiết.</li></ul><p><strong>LUÔN CÓ TÂM TRONG CÔNG VIỆC VÌ CHÚNG TÔI LÀ NHỮNG NGƯỜI CÓ CHUNG SỞ THÍCH SƯU TẬP GIỐNG NHƯ CÁC BẠN !</strong></p><figure class=\"image\"><img src=\"https://mohinhfigure.com/wp-content/uploads/2021/08/gioi-thieu-2.jpeg\" alt=\"giới thiệu 2\"></figure><h3>Mô hình figure là shop hàng đầu trong lĩnh vực Manga – Anime.</h3><p>Nếu bạn là một trong những tín đồ của các bộ truyện manga hay anime thì chắc chắn không thể bỏ qua được những nhân vật mình yêu thích, mong muốn sở hữu và được ngắm nhìn mỗi ngày cũng là cách để giải tỏa tâm trạng rất tốt, những nhân vật đã gắn liên với tuổi thơ các bạn như thám tử Conan, chú mèo máy đến từ tương lại Doreamon, còn các nhân vật cộm cán trong bộ truyện nổi tiếng One Piece, Dragon Ball Z,…. và còn rất nhiều nhân vật trong các bộ truyện khác như Gintama, Kimetsu no Yaiba, SAO, Tokyo Ghoul,..v..,<br><strong>C</strong>òn nếu bạn là fan ruột của những thước phim hoạt hình Pixar, Disney: ToyStory, Incredible, Wall-e, Ice Age,… hay những bộ phim Hollywood bom tấn như Batman, Avenger, Ironman, Hulk,.. thì bạn cũng không thể bỏ qua vì tất cả đều có tại&nbsp;Figure Store</p><p>Còn nếu bạn là fan ruột của những thước phim nổi tiếng đến từ hollywood như Mavell, DC hay các bộ phim nổi tiếng khác thì cũng không thể bỏ qua chúng mình, vì tại Mô Hình Figure đều có sẵn các nhân vật cộm cán nổi tiếng hiện nay nhé !</p><figure class=\"image\"><img src=\"https://mohinhfigure.com/wp-content/uploads/2021/08/gioi-thieu-3.jpeg\" alt=\"giới thiệu 3\"></figure><p><strong>Mời các bạn Like shop tại địa chỉ</strong></p><ul><li>Facebook : <strong>https://www.facebook.com/mohinhfiguree</strong> để luôn cập nhật sản phẩm figure mới nhanh nhất.</li><li>Hoặc ghé qua địa chỉ của Shop tại: <strong>221/7/37, Đất Thánh,P.6 , Quận Tân Bình, TP.HCM</strong>&nbsp;</li><li>Nhận ship hàng miễn phí trong nội thành Hồ Chí Minh&nbsp;(bán kính 2km) (áp dụng với đơn hàng trên 200.000).</li><li>Với các đơn hàng trên website shop sẽ gọi điện xác nhận đơn hàng và báo phí ship cho khách hàng,hàng sẽ được khi sau khi khách đồng ý với phí ship.</li><li><strong>Ship hàng COD toàn quốc</strong>, chuyển phát nhanh phí hợp lý.</li></ul><p>Chúng tôi chuyên về các loại mặt hàng mô hình – figure, nendoroid, mô hình anime</p><p>Các bạn cũng có thể order sản phẩm theo yêu cầu hoặc hình ảnh.&nbsp;</p>',4,'2023-05-26 07:19:02','2023-05-26 07:29:56','Diamond'),(4,'SHONEN JUMP PHÁT TRIỂN CÔNG CỤ VIẾT MANGA AI, GÂY TRANH CÃI','shonen.png','<p>Tạp chí truyện tranh <strong>Nhảy Shonen+</strong> đã bước vào cuộc tranh luận phân cực hiện tại xung quanh sự tham gia của Trí tuệ nhân tạo vào nghệ thuật bằng cách tạo ra một công cụ mới để mangaka tạo truyện tranh bằng AI</p>','<p>&nbsp;</p><p>Tạp chí truyện tranh <strong>Nhảy Shonen+</strong> đã bước vào cuộc tranh luận phân cực hiện tại xung quanh sự tham gia của Trí tuệ nhân tạo vào nghệ thuật bằng cách tạo ra một công cụ mới để mangaka tạo truyện tranh bằng AI. Khi trí tuệ nhân tạo đã được cải thiện và các chương trình như ChatGPT trở nên tốt hơn trong việc viết như người thật, một số người lo ngại rằng điều này có thể thay thế công việc của nhiều nghệ sĩ. May mắn thay, công cụ mới của Shonen Jump+ vẫn chưa thể thay thế các mangaka, nhưng nó có thể báo trước một tương lai đáng lo ngại.</p><p>Phó tổng biên tập của Shonen Jump+ Yuta Momiyama đã tweet một liên kết đến công cụ AI mới của công ty Comic-Copilot (hay gọi tắt là Comicopa), nhằm giúp mangaka thực hiện các tác vụ đơn giản như tinh chỉnh lời thoại và tạo tên nhân vật. Mangakas có thể hỏi AI một câu hỏi hoặc đưa ra yêu cầu và Comicopa sẽ cố gắng giúp họ hết sức có thể. Trang web nhấn mạnh rằng công cụ này được dùng để hỗ trợ các mangaka chứ không phải để thay thế họ và cho đến nay điều này chắc chắn là đúng. Các khả năng hiện tại của Comicopa chắc chắn không thể tự tạo ra một bộ truyện tranh và vì vậy hiện tại chương trình này là một ví dụ khác về cách Shonen Jump + đang cố gắng hiện đại hóa ngành công nghiệp truyện tranh.</p><h2><strong>Comicopa của Shonen Jump+ sử dụng AI để làm cho việc sáng tác Manga trở nên đơn giản hơn</strong></h2><p>Phân nhánh từ tạp chí Weekly Shonen Jump, Shonen Jump+ là một tuyển tập manga kỹ thuật số có một số bộ truyện nổi tiếng nhất của Shonen Jump. Nhiều độc giả thậm chí còn coi Shonen Jump+ hay hơn Shonen Jump. Những bộ truyện tranh nổi tiếng như Spy x Family và Kaiju No. 8 đã được công chiếu lần đầu trên ấn phẩm và sê-ri Chainsaw Man cực kỳ nổi tiếng đã chuyển sang Shonen Jump+ khi nó bắt đầu phần thứ hai. Tạp chí kỹ thuật số trao cho người sáng tạo nhiều tự do hơn về cả chủ đề và lịch phát hành của họ, với nhiều sê-ri phát hành hai tuần một lần thay vì hàng tuần. Cách tiếp cận chung này trong việc điều chỉnh việc sáng tạo và phân phối manga cho phù hợp với công nghệ hiện đại khiến việc tạp chí thâm nhập vào các công cụ AI không có gì đáng ngạc nhiên ngay cả khi việc sử dụng AI trong sáng tạo nghệ thuật hiện đang gây tranh cãi.</p><p>Ngay cả khi Comicopa tiên tiến hơn đáng kể, nó vẫn không thể thay thế các mangaka của con người. Xét cho cùng, khi tác giả của One Piece, Eiichiro Oda, sử dụng ChatGPT để viết một chương giả định của bộ truyện, trong khi nó có thể nắm bắt được một số chi tiết và cốt truyện, thì phần lớn điều đó là vô nghĩa. Và ngay cả khi Comicopa có thể viết cả một chương truyện tranh, nó vẫn phải tạo ra nghệ thuật và bảng điều khiển, điều này nằm ngoài khả năng hiện tại của nó.</p><h2><strong>Comicopa của Shonen Jump+ là dấu hiệu của những điều sắp tới</strong></h2><p>Tuy nhiên, mặc dù bản thân Comicopa có thể lành tính, nhưng một số người lo ngại rằng đây có thể là bước đầu tiên trong quá trình sản xuất truyện tranh tự động lâu dài hơn. Một số độc giả thậm chí còn không thoải mái với việc tiêu thụ tác phẩm nghệ thuật chỉ được tạo ra một phần bởi AI. Nhưng khi AI trở nên phổ biến hơn trong mọi khía cạnh của cuộc sống, <strong>nhảy Shonen</strong> người hâm mộ cũng sẽ phải tính đến tác động của nó đối với ngành công nghiệp truyện tranh, với <strong>diễn viên hài</strong> chỉ là ví dụ đầu tiên.</p>',3,'2023-05-26 07:23:05','2023-05-26 08:17:14','Gold');
/*!40000 ALTER TABLE `post` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `post_category`
--

DROP TABLE IF EXISTS `post_category`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `post_category` (
  `id_cate` int NOT NULL AUTO_INCREMENT,
  `name_cate` varchar(255) NOT NULL,
  `description_cate` text,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_cate`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `post_category`
--

LOCK TABLES `post_category` WRITE;
/*!40000 ALTER TABLE `post_category` DISABLE KEYS */;
INSERT INTO `post_category` VALUES (3,'Tin tức anime','<p>Tin tức về anime</p>','2023-05-25 01:15:29','2023-05-25 01:21:46'),(4,'Hướng dẫn và giới thiếu','<p>Hướng dẫn và giới thiệu về các thông tin cửa hàng và giới thiệu về mô hình</p>','2023-05-25 01:16:26','2023-05-25 01:16:26');
/*!40000 ALTER TABLE `post_category` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `user` (
  `id_us` int NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `role` enum('admin','user') NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_us`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES (3,'admin','21232f297a57a5a743894a0e4a801fc3','admin@gmail.com','admin','2023-05-22 16:17:38','2023-05-22 16:17:38'),(4,'Đạt Nguyễn','e10adc3949ba59abbe56e057f20f883e','datnguyen@gmail.com','user','2023-05-22 16:19:45','2023-05-22 16:19:45'),(5,'Bình Diamond','e10adc3949ba59abbe56e057f20f883e','Binh12@gmail.com','user','2023-05-22 16:26:35','2023-05-22 16:26:35'),(8,'Danh Bùi','202cb962ac59075b964b07152d234b70','danh@gmail.com','user','2023-05-26 08:50:39','2023-05-26 08:50:39'),(9,'của','202cb962ac59075b964b07152d234b70','cua@gmail.com','user','2023-05-26 15:46:08','2023-05-26 15:46:08'),(10,'test 1','202cb962ac59075b964b07152d234b70','test@gmail.com','user','2023-05-28 07:27:38','2023-05-28 07:27:38');
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
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

-- Dump completed on 2023-05-28 14:54:16
