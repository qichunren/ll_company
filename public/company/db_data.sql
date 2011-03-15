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
INSERT INTO `admins` VALUES (1,'admin','e10adc3949ba59abbe56e057f20f883e','管理员','2011-03-15 13:45:23','127.0.0.1',2,'2011-03-11 14:45:34','2011-03-11 14:45:34'),(2,'qichunren','e10adc3949ba59abbe56e057f20f883e','蕲春人','2011-03-11 14:45:34','127.0.0.1',0,'2011-03-11 14:45:34','2011-03-11 14:45:34'),(3,'workerhi','e10adc3949ba59abbe56e057f20f883e','测试帐号','2011-03-11 14:45:34','127.0.0.1',0,'2011-03-11 14:45:34','2011-03-11 14:45:34'),(4,'test','e10adc3949ba59abbe56e057f20f883e','测试帐号2','2011-03-11 14:45:34','127.0.0.1',0,'2011-03-11 14:45:34','2011-03-11 14:45:34'),(5,'test2','e10adc3949ba59abbe56e057f20f883e','测试帐号3','2011-03-11 14:45:34','127.0.0.1',0,'2011-03-11 14:45:34','2011-03-11 14:45:34');
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
INSERT INTO `news` VALUES (1,'公司开张了',1,'公司开张了, 欢迎访问。',0,'公司','2011-03-11 14:45:34','2011-03-11 14:45:34'),(2,'我是最新的',2,'<p>公司开张了, 欢迎访问。哈哈哈哈哈2121212112</p>',0,'21212','2011-03-11 14:45:34','2011-03-11 14:45:34');
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
INSERT INTO `news_categories` VALUES (1,'公司新闻',0,'2011-03-11 14:45:34','2011-03-11 14:45:34'),(2,'行业新闻',0,'2011-03-11 14:45:34','2011-03-11 14:45:34');
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
INSERT INTO `pcategories` VALUES (1,'家电',NULL,NULL,'2011-03-11 14:45:34','2011-03-11 14:45:34'),(2,'数码',NULL,NULL,'2011-03-11 14:45:34','2011-03-11 14:45:34'),(3,'图书',NULL,NULL,'2011-03-11 14:45:34','2011-03-11 14:45:34'),(4,'电视',1,NULL,'2011-03-11 14:45:34','2011-03-11 14:45:34'),(5,'空调',1,NULL,'2011-03-11 14:45:34','2011-03-11 14:45:34'),(6,'台式电脑',2,NULL,'2011-03-11 14:45:34','2011-03-11 14:45:34'),(7,'手机',2,NULL,'2011-03-11 14:45:34','2011-03-11 14:45:34'),(8,'计算机图片',3,NULL,'2011-03-11 14:45:34','2011-03-11 14:45:34'),(9,'文学',3,NULL,'2011-03-11 14:45:34','2011-03-11 14:45:34'),(10,'畅销书',3,NULL,'2011-03-11 14:45:34','2011-03-11 14:45:34');
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
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `products`
--

/*!40000 ALTER TABLE `products` DISABLE KEYS */;
INSERT INTO `products` VALUES (2,'诺基亚N85 ','内置RealPlayer播放器, 支持MPEG4、H.264/AVC、H.263/3GP、RealVideo等视频格式全屏播放','http://www.ecshop.cn/goods.php?id=32','http://localhost/company/assets/uploads/products/product1.png',7,0,'2011-03-15 15:23:11',NULL),(3,'26万色TFT彩色屏幕','摄像头：内置\n\n摄像头像素：30万像素\n\n传感器类型：CMOS\n\n变焦模式：数码变焦\n\n照片分辨率：多种照片分辨率选择\n\n拍摄模式：多种拍摄模式选择\n\n照片质量：多种照片质量选择','http://www.ecshop.cn/exchange.php?id=24&act=view','http://localhost/company/assets/uploads/products/product2.png',7,0,'2011-03-15 15:25:04',NULL),(4,'12122122112','GSM,850,900,1800,1900','多普达Touch HD ','http://localhost/company/assets/uploads/products/product3.png',7,0,'2011-03-15 15:26:11',NULL),(5,'索爱C702c ','C702可以说是一种在外观上复古的产物，不仅延续T系列早期的直板造型，而且在屏幕和键盘的组合分布上都继承了前辈的精髓。C702的机身尺寸为106×48×15.5毫米，重量为105克。此外索尼爱立信为C702融入了三防特性，即防尘、防滑和防水溅，这款新的C702搭载了索尼爱立信经典A200平台，界面布局与W908c、K858c一致，典型的特征就是配备左右软键、中央确定键和通话/挂机键。\n\n索尼爱立信C702配备一块2.2英寸26万色TFT液晶显示屏，分辨率为240×320像素(QVGA)，显示效果属于目前主流水准。C702可以说是索尼爱立信首批内置GPS模块的 手机产品之一，C702的搜星、定位一气呵成，十分精准，误差大约在10米之内。基本上定位后可以将有效卫星数量控制在4—6颗，可以说可以满足我们的需 要了。C702还提供了“影像定位”功能，配合内置的AGPS全球定位辅助系统，只须启动Geo-Tagging智能影像定位功能，便可将拍摄地点记录在 照片内，方便用户随时查询。\n\n \n\n作为一款Cyber-shot系列影像手机，索尼爱立信C702在拍照功能方面同样有不俗的表现。并且手机内置的320万像素摄像头也 同样在拍照功能上也不错的表现。不仅支持自动聚焦和双LED闪光功能，而且还拥有2倍数码变焦、防红眼、Photo fix优画及场景模式等功能。索尼爱立信C702除了配备的是最大光圈为F3.2的4.2毫米镜头之外，该机也如同门中的旗舰C902一样增加了对脸部有 先自动聚焦功能的支持。','http://www.ecshop.cn/goods.php?id=10','http://localhost/company/assets/uploads/products/product4.png',7,0,'2011-03-15 15:27:08',NULL),(6,'三星BC01','GSM,900,1800,1900,2100','http://www.ecshop.cn/goods.php?id=20','http://localhost/company/assets/uploads/products/product5.png',6,0,'2011-03-15 15:35:12',NULL),(7,'飞利浦9@9v','作为一款性价比极高的入门级商务手机，飞利浦Xenium  9@9v三围大小为105×44×15.8mm，机身重量仅为75g，装配了一块低规格1.75英寸128×160像素65000色CSTN显示屏。身正面采用月银色功能键区与屏幕数字键区相分隔，键盘设计较为别致，中部导航键区采用钛金色的“腰带”彰显出浓郁的商务气息。\n\n \n\n此款手机采用触摸屏设计，搭配精致的手写笔，可支持手写中文和英文两个版本。增强的内置系统还能识别潦草字迹，确保在移动中和匆忙时输入文字的识别率。手写指令功能还支持特定图案的瞬间调用，独特的手写记事本功能，可以在触摸屏上随意绘制个性化的图案并进行记事提醒，让商务应用更加随意。\n\n \n\n 作为入门级为数不多支持双卡功能的手机，可以同时插入两张SIM卡，通过菜单随意切换，只需开启漫游自动切换模式，9@9V在该模式下能够判断网络情况，自动切换适合的手机号。','http://www.ecshop.cn/goods.php?id=8','http://localhost/company/assets/uploads/products/product6.png',5,0,'2011-03-15 15:37:00',NULL);
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
INSERT INTO `settings` VALUES (1,'company_introduce','上海佳诚工程设备有限公司建于1996年，位于上海市普陀区金沙江路1340弄2号，是一家专业从事各种制冷设备的生产、安装、销售、售后服务为一体的中大型企业。佳诚公司主营溴化锂制冷机组、螺杆制冷机组、离心制冷机组、配套供应三洋、开利、双良、远大、乐星、联丰、荏原、深蓝等压缩机、冷剂泵、溴化锂溶液、电路板等系列配件。经营的项目主要有冷库、中央空调、速冻隧道、特殊制冷的设计、安装维修保养一条龙服务。 游戏机破解佳诚公司拥有一支技艺精良的技修队伍和雄厚的经济实力，曾获国家级“先进企业”荣誉称号。 当前，佳诚已立足于上海西南部地区，在全国享有很高的信誉。正筹备建造，开拓大规模的批发市场，力争在各个地区开办佳诚连锁店，以一流的产品与一流的服务与你携手共创新的辉煌！ 使命... ','2011-03-11 14:45:34','2011-03-11 14:45:34'),(2,'analysis_code','','2011-03-11 14:45:34','2011-03-11 14:45:34'),(3,'company_name','上海佳诚工程设备有限公司','2011-03-11 14:45:34','2011-03-11 14:45:34'),(4,'company_short_name','上海佳诚','2011-03-11 14:45:34','2011-03-11 14:45:34');
/*!40000 ALTER TABLE `settings` ENABLE KEYS */;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2011-03-16  0:09:55
