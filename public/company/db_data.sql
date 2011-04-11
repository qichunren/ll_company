-- MySQL dump 10.13  Distrib 5.1.44, for apple-darwin8.11.1 (i386)
--
-- Host: 127.0.0.1    Database: ll_company_development
-- ------------------------------------------------------
-- Server version	5.1.51

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
-- Table structure for table `admins`
--

DROP TABLE IF EXISTS `admins`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `admins` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `crypted_password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `true_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `last_login_at` datetime DEFAULT NULL,
  `last_login_ip` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `login_count` int(11) DEFAULT '0',
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admins`
--

/*!40000 ALTER TABLE `admins` DISABLE KEYS */;
INSERT INTO `admins` VALUES (1,'admin','e10adc3949ba59abbe56e057f20f883e','管理员','2011-03-23 06:42:00','127.0.0.1',20,'2011-03-23 03:41:11','2011-03-23 03:41:11'),(2,'qichunren','e10adc3949ba59abbe56e057f20f883e','蕲春人','2011-03-23 03:41:11','127.0.0.1',0,'2011-03-23 03:41:12','2011-03-23 03:41:12'),(3,'workerhi','e10adc3949ba59abbe56e057f20f883e','测试帐号','2011-03-23 03:41:11','127.0.0.1',0,'2011-03-23 03:41:12','2011-03-23 03:41:12'),(4,'test','e10adc3949ba59abbe56e057f20f883e','测试帐号2','2011-03-23 03:41:11','127.0.0.1',0,'2011-03-23 03:41:12','2011-03-23 03:41:12'),(5,'test2','e10adc3949ba59abbe56e057f20f883e','测试帐号3','2011-03-23 03:41:11','127.0.0.1',0,'2011-03-23 03:41:12','2011-03-23 03:41:12');
/*!40000 ALTER TABLE `admins` ENABLE KEYS */;

--
-- Table structure for table `news`
--

DROP TABLE IF EXISTS `news`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `news` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `news_category_id` int(11) NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `reading_count` int(11) DEFAULT '0',
  `author` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `news`
--

/*!40000 ALTER TABLE `news` DISABLE KEYS */;
INSERT INTO `news` VALUES (1,'公司开张了',1,'公司开张了, 欢迎访问。',0,'公司','2011-03-23 03:41:12','2011-03-23 03:41:12'),(2,'好消息',1,'公司开张了, 欢迎访问。',0,'公司','2011-03-23 03:41:12','2011-03-23 03:41:12');
/*!40000 ALTER TABLE `news` ENABLE KEYS */;

--
-- Table structure for table `news_categories`
--

DROP TABLE IF EXISTS `news_categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `news_categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `position` int(11) NOT NULL DEFAULT '0',
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `news_categories`
--

/*!40000 ALTER TABLE `news_categories` DISABLE KEYS */;
INSERT INTO `news_categories` VALUES (1,'公司新闻',0,'2011-03-23 03:41:12','2011-03-23 03:41:12'),(2,'行业新闻',0,'2011-03-23 03:41:12','2011-03-23 03:41:12');
/*!40000 ALTER TABLE `news_categories` ENABLE KEYS */;

--
-- Table structure for table `pcategories`
--

DROP TABLE IF EXISTS `pcategories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pcategories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `position` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pcategories`
--

/*!40000 ALTER TABLE `pcategories` DISABLE KEYS */;
INSERT INTO `pcategories` VALUES (1,'家电',NULL,NULL,'2011-03-23 03:41:12','2011-03-23 03:41:12'),(2,'数码',NULL,NULL,'2011-03-23 03:41:12','2011-03-23 03:41:12'),(3,'图书',NULL,NULL,'2011-03-23 03:41:12','2011-03-23 03:41:12'),(4,'电视',1,NULL,'2011-03-23 03:41:12','2011-03-23 03:41:12'),(5,'空调',1,NULL,'2011-03-23 03:41:12','2011-03-23 03:41:12'),(6,'台式电脑',2,NULL,'2011-03-23 03:41:12','2011-03-23 03:41:12'),(7,'手机',2,NULL,'2011-03-23 03:41:12','2011-03-23 03:41:12'),(8,'计算机图片',3,NULL,'2011-03-23 03:41:12','2011-03-23 03:41:12'),(9,'文学',3,NULL,'2011-03-23 03:41:12','2011-03-23 03:41:12'),(10,'畅销书',3,NULL,'2011-03-23 03:41:12','2011-03-23 03:41:12');
/*!40000 ALTER TABLE `pcategories` ENABLE KEYS */;

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `introduce` text COLLATE utf8_unicode_ci,
  `target_url` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image_url` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `pcategory_id` int(11) NOT NULL,
  `click_count` int(11) NOT NULL DEFAULT '0',
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `products`
--

/*!40000 ALTER TABLE `products` DISABLE KEYS */;
/*!40000 ALTER TABLE `products` ENABLE KEYS */;

--
-- Table structure for table `schema_migrations`
--

DROP TABLE IF EXISTS `schema_migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `schema_migrations` (
  `version` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  UNIQUE KEY `unique_schema_migrations` (`version`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `schema_migrations`
--

/*!40000 ALTER TABLE `schema_migrations` DISABLE KEYS */;
INSERT INTO `schema_migrations` VALUES ('20110222081036'),('20110222081213'),('20110222130128'),('20110222143510'),('20110223124718'),('20110223130709');
/*!40000 ALTER TABLE `schema_migrations` ENABLE KEYS */;

--
-- Table structure for table `settings`
--

DROP TABLE IF EXISTS `settings`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `settings` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `setting_key` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `setting_value` text COLLATE utf8_unicode_ci,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `index_settings_on_setting_key` (`setting_key`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `settings`
--

/*!40000 ALTER TABLE `settings` DISABLE KEYS */;
INSERT INTO `settings` VALUES (1,'company_introduce','上海佳诚工程设备有限公司建于1996年，位于上海市普陀区金沙江路1340弄2号，是一家专业从事各种制冷设备的生产、安装、销售、售后服务为一体的中大型企业。佳诚公司主营溴化锂制冷机组、螺杆制冷机组、离心制冷机组、配套供应三洋、开利、双良、远大、乐星、联丰、荏原、深蓝等压缩机、冷剂泵、溴化锂溶液、电路板等系列配件。经营的项目主要有冷库、中央空调、速冻隧道、特殊制冷的设计、安装维修保养一条龙服务。 游戏机破解佳诚公司拥有一支技艺精良的技修队伍和雄厚的经济实力，曾获国家级“先进企业”荣誉称号。 当前，佳诚已立足于上海西南部地区，在全国享有很高的信誉。正筹备建造，开拓大规模的批发市场，力争在各个地区开办佳诚连锁店，以一流的产品与一流的服务与你携手共创新的辉煌！ 使命... ','2011-03-23 03:41:12','2011-03-23 03:41:12'),(2,'analysis_code','','2011-03-23 03:41:12','2011-03-23 03:41:12'),(3,'company_name','上海佳诚工程设备有限公司','2011-03-23 03:41:12','2011-03-23 03:41:12'),(4,'company_short_name','上海佳诚','2011-03-23 03:41:12','2011-03-23 03:41:12');
/*!40000 ALTER TABLE `settings` ENABLE KEYS */;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2011-03-28 21:11:24
