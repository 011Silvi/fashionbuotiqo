-- MySQL dump 10.13  Distrib 5.5.62, for Win64 (AMD64)
--
-- Host: localhost    Database: ecom_store
-- ------------------------------------------------------
-- Server version	5.5.5-10.4.27-MariaDB

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
-- Table structure for table `about_us`
--

DROP TABLE IF EXISTS `about_us`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `about_us` (
  `about_id` int(10) NOT NULL AUTO_INCREMENT,
  `about_heading` text NOT NULL,
  `about_short_desc` text NOT NULL,
  `about_desc` text NOT NULL,
  PRIMARY KEY (`about_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `about_us`
--

LOCK TABLES `about_us` WRITE;
/*!40000 ALTER TABLE `about_us` DISABLE KEYS */;
INSERT INTO `about_us` VALUES (1,'About Us - Cerita Kami','\r\nBuotiqo Fashion adalah sebuah toko thrifting yang menyediakan pilihan unik dan berkualitas dari barang-barang bekas yang didonasikan atau dijual kembali. Toko ini berlokasi di pusat kota yang ramai, memberikan kesempatan kepada para pelanggan untuk menemukan barang-barang vintage, retro, dan unik dengan harga terjangkau.\r\n\r\n','Toko thrifting seperti Buotiqo Fashion tidak hanya menawarkan pengalaman berbelanja yang berbeda, tetapi juga mendukung gerakan berkelanjutan dan upaya mengurangi limbah tekstil. Dengan membeli dan menggunakan barang-barang bekas, pelanggan dapat berkontribusi pada upaya pengurangan sampah dan memberikan barang-barang tersebut kesempatan kedua untuk digunakan.\r\n\r\nDengan staf yang berpengetahuan luas tentang mode dan seni rupa retro, Buotiqo Fashion siap memberikan nasihat dan rekomendasi kepada pelanggan. Toko ini menciptakan komunitas yang ramah dan inklusif di antara para pencinta fashion vintage dan thrifting, di mana penggemar fashion dapat bertukar ide, berbagi pengetahuan, dan menemukan temuan yang langka dan istimewa.\r\n');
/*!40000 ALTER TABLE `about_us` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `admins`
--

DROP TABLE IF EXISTS `admins`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `admins` (
  `admin_id` int(10) NOT NULL AUTO_INCREMENT,
  `admin_name` varchar(255) NOT NULL,
  `admin_email` varchar(255) NOT NULL,
  `admin_pass` varchar(255) NOT NULL,
  `admin_image` text NOT NULL,
  `admin_contact` varchar(255) NOT NULL,
  `admin_country` text NOT NULL,
  `admin_job` varchar(255) NOT NULL,
  `admin_about` text NOT NULL,
  PRIMARY KEY (`admin_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admins`
--

LOCK TABLES `admins` WRITE;
/*!40000 ALTER TABLE `admins` DISABLE KEYS */;
INSERT INTO `admins` VALUES (2,'DindaSilvi','admin@mail.com','Password@123','user-profile-min.png','08123456789','Indonesia','Developer Web Buotiqo','Telah bekerja sebagai developer web buotiqo selama 2 bulan dan berkontribusi untuk selalu melakukan yang terbaik agar pelanggan puas.');
/*!40000 ALTER TABLE `admins` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `bundle_product_relation`
--

DROP TABLE IF EXISTS `bundle_product_relation`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `bundle_product_relation` (
  `rel_id` int(10) NOT NULL AUTO_INCREMENT,
  `rel_title` varchar(255) NOT NULL,
  `product_id` int(10) NOT NULL,
  `bundle_id` int(10) NOT NULL,
  PRIMARY KEY (`rel_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `bundle_product_relation`
--

LOCK TABLES `bundle_product_relation` WRITE;
/*!40000 ALTER TABLE `bundle_product_relation` DISABLE KEYS */;
/*!40000 ALTER TABLE `bundle_product_relation` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cart`
--

DROP TABLE IF EXISTS `cart`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cart` (
  `p_id` int(10) NOT NULL,
  `ip_add` varchar(255) NOT NULL,
  `qty` int(10) NOT NULL,
  `p_price` varchar(255) NOT NULL,
  `size` text NOT NULL,
  PRIMARY KEY (`p_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cart`
--

LOCK TABLES `cart` WRITE;
/*!40000 ALTER TABLE `cart` DISABLE KEYS */;
/*!40000 ALTER TABLE `cart` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `categories` (
  `cat_id` int(10) NOT NULL AUTO_INCREMENT,
  `cat_title` text NOT NULL,
  `cat_top` text NOT NULL,
  `cat_image` text NOT NULL,
  PRIMARY KEY (`cat_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categories`
--

LOCK TABLES `categories` WRITE;
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;
INSERT INTO `categories` VALUES (2,'Wanita','no','feminelg.png'),(3,'Anak-anak','no','kidslg.jpg'),(4,'Lainnya','yes','othericon.png'),(5,'Pria','yes','malelg.png');
/*!40000 ALTER TABLE `categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `contact_us`
--

DROP TABLE IF EXISTS `contact_us`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `contact_us` (
  `contact_id` int(10) NOT NULL AUTO_INCREMENT,
  `contact_email` text NOT NULL,
  `contact_heading` text NOT NULL,
  `contact_desc` text NOT NULL,
  PRIMARY KEY (`contact_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contact_us`
--

LOCK TABLES `contact_us` WRITE;
/*!40000 ALTER TABLE `contact_us` DISABLE KEYS */;
INSERT INTO `contact_us` VALUES (1,'buotiqofash@gmail.com','Hubungi Kami','Jika ada pertanyaan, silahkan kontak customer service kami supaya mendapatkan solusi.');
/*!40000 ALTER TABLE `contact_us` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `coupons`
--

DROP TABLE IF EXISTS `coupons`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `coupons` (
  `coupon_id` int(10) NOT NULL AUTO_INCREMENT,
  `product_id` int(10) NOT NULL,
  `coupon_title` varchar(255) NOT NULL,
  `coupon_price` varchar(255) NOT NULL,
  `coupon_code` varchar(255) NOT NULL,
  `coupon_limit` int(100) NOT NULL,
  `coupon_used` int(100) NOT NULL,
  PRIMARY KEY (`coupon_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `coupons`
--

LOCK TABLES `coupons` WRITE;
/*!40000 ALTER TABLE `coupons` DISABLE KEYS */;
INSERT INTO `coupons` VALUES (5,8,'Sale','10','BUOFASH',2,1),(6,14,'Sale','65','BUOTIQO',3,1);
/*!40000 ALTER TABLE `coupons` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `customer_orders`
--

DROP TABLE IF EXISTS `customer_orders`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `customer_orders` (
  `order_id` int(10) NOT NULL AUTO_INCREMENT,
  `customer_id` int(10) NOT NULL,
  `due_amount` int(100) NOT NULL,
  `invoice_no` int(100) NOT NULL,
  `qty` int(10) NOT NULL,
  `size` text NOT NULL,
  `order_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `order_status` text NOT NULL,
  PRIMARY KEY (`order_id`)
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `customer_orders`
--

LOCK TABLES `customer_orders` WRITE;
/*!40000 ALTER TABLE `customer_orders` DISABLE KEYS */;
INSERT INTO `customer_orders` VALUES (17,2,100,1715523401,2,'Large','2017-02-20 08:21:42','pending'),(23,3,20,1762810884,1,'Medium','2021-09-14 08:35:57','Complete'),(24,4,100,1972602052,1,'Large','2021-09-14 16:37:52','Complete'),(25,4,90,2008540778,1,'Medium','2021-09-14 16:43:15','pending'),(27,5,120,2138906686,1,'Small','2021-09-15 03:18:41','Complete'),(28,5,180,361540113,2,'Medium','2021-09-15 03:25:42','Complete'),(29,3,100,858195683,1,'Large','2021-09-15 03:14:01','Complete'),(31,6,245,901707655,1,'Medium','2021-09-15 03:52:18','Complete'),(32,6,75,2125554712,1,'Large','2021-09-15 03:52:58','pending'),(33,8,120,274095233,1,'M','2023-06-12 05:50:19','Complete'),(34,8,180,1423158422,2,'M','2023-06-13 07:03:51','Complete');
/*!40000 ALTER TABLE `customer_orders` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `customers`
--

DROP TABLE IF EXISTS `customers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `customers` (
  `customer_id` int(10) NOT NULL AUTO_INCREMENT,
  `customer_name` varchar(255) NOT NULL,
  `customer_email` varchar(255) NOT NULL,
  `customer_pass` varchar(255) NOT NULL,
  `customer_country` text NOT NULL,
  `customer_city` text NOT NULL,
  `customer_contact` varchar(255) NOT NULL,
  `customer_address` text NOT NULL,
  `customer_image` text NOT NULL,
  `customer_ip` varchar(255) NOT NULL,
  `customer_confirm_code` text NOT NULL,
  PRIMARY KEY (`customer_id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `customers`
--

LOCK TABLES `customers` WRITE;
/*!40000 ALTER TABLE `customers` DISABLE KEYS */;
INSERT INTO `customers` VALUES (2,'Jevano','jevano@gmail.com','123','Indonesia','Surabaya','0092334566931','Rungkut','user.jpg','::1',''),(3,'Michael','michael@mail.com','Password123','Indonesia','Jakarta','0123456789','Pondok Indah','sample_image.jpg','::1',''),(4,'Thomas','thomas@gmail.com','Password123','Indonesia','Bandung','081245321','Kawasan Puncak','sample_img360.png','::1','1427053935'),(5,'Julio','juliofar@mail.com','Password123','Indonesia','Bogor','0876543219','Cilandak','userav-min.png','::1','1634138674'),(6,'Amanda','amandaraw@gmail.com','Password123','Indonesia','Semarang','0123456789','Semarang','user-icn-min.png','::1','174829126'),(7,'Silvia','silvia@gmail.com','silvi1234567','Indonesia','Surabaya','08123456789','Nginden','Screenshot 2023-02-22 191736.png','::1','1415276500'),(8,'Adhinda','dinda46@gmail.com','dinda46','Indonesia','Surabaya','08123456789','Ketintang','dinda.jpg','::1','1161054621');
/*!40000 ALTER TABLE `customers` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `enquiry_types`
--

DROP TABLE IF EXISTS `enquiry_types`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `enquiry_types` (
  `enquiry_id` int(10) NOT NULL AUTO_INCREMENT,
  `enquiry_title` varchar(255) NOT NULL,
  PRIMARY KEY (`enquiry_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `enquiry_types`
--

LOCK TABLES `enquiry_types` WRITE;
/*!40000 ALTER TABLE `enquiry_types` DISABLE KEYS */;
INSERT INTO `enquiry_types` VALUES (1,'Order and Delivery Support'),(2,'Technical Support'),(3,'Price Concern');
/*!40000 ALTER TABLE `enquiry_types` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `manufacturers`
--

DROP TABLE IF EXISTS `manufacturers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `manufacturers` (
  `manufacturer_id` int(10) NOT NULL AUTO_INCREMENT,
  `manufacturer_title` text NOT NULL,
  `manufacturer_top` text NOT NULL,
  `manufacturer_image` text NOT NULL,
  PRIMARY KEY (`manufacturer_id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `manufacturers`
--

LOCK TABLES `manufacturers` WRITE;
/*!40000 ALTER TABLE `manufacturers` DISABLE KEYS */;
INSERT INTO `manufacturers` VALUES (2,'Adidas','no','adilg.png'),(3,'Nike','no','niketransl.png'),(4,'Philip Plein','no','pplg.png'),(5,'Lacoste','no','lacostelg.png'),(7,'Polo','no','polobn.jpg'),(8,'Gildan 1800','no','sample_img360.png');
/*!40000 ALTER TABLE `manufacturers` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mitra`
--

DROP TABLE IF EXISTS `mitra`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `mitra` (
  `mitra_id` int(11) DEFAULT NULL,
  `mitra_name` varchar(255) DEFAULT NULL,
  `mitra_email` varchar(255) DEFAULT NULL,
  `mitra_pass` varchar(255) DEFAULT NULL,
  `mitra_image` varchar(255) DEFAULT NULL,
  `mitra_contact` varchar(255) DEFAULT NULL,
  `mitra_country` varchar(255) DEFAULT NULL,
  `mitra_job` varchar(255) DEFAULT NULL,
  `mitra_about` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mitra`
--

LOCK TABLES `mitra` WRITE;
/*!40000 ALTER TABLE `mitra` DISABLE KEYS */;
INSERT INTO `mitra` VALUES (1,'mitra','mitra@mail.com','mitra123','image1.jpg','1234567890','United States','Sales','Lorem ipsum');
/*!40000 ALTER TABLE `mitra` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `payments`
--

DROP TABLE IF EXISTS `payments`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `payments` (
  `payment_id` int(10) NOT NULL AUTO_INCREMENT,
  `invoice_no` int(10) NOT NULL,
  `amount` int(10) NOT NULL,
  `payment_mode` text NOT NULL,
  `ref_no` int(10) NOT NULL,
  `code` int(10) NOT NULL,
  `payment_date` text NOT NULL,
  PRIMARY KEY (`payment_id`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `payments`
--

LOCK TABLES `payments` WRITE;
/*!40000 ALTER TABLE `payments` DISABLE KEYS */;
INSERT INTO `payments` VALUES (2,1607603019,447,'Transfer Bank',5678,33,'11/1/2016'),(3,314788500,345,'COD',443,865,'11/1/2016'),(4,6906,400,'PayLater',101025780,696950,'January 1'),(5,10023,20,'Transfer Bank',1000010101,6969,'09/14/2021'),(6,69088,100,'COD',1010101022,88669,'09/14/2021'),(7,1835758347,480,'PayLater',1785002101,66990,'09-04-2021'),(8,1835758347,480,'Transfer Bank',1012125550,66500,'09-14-2021'),(9,1144520,480,'COD',1025000020,66990,'09-14-2021'),(10,2145000000,480,'PayLater',2147483647,66580,'09-14-2021'),(20,858195683,100,'Transfer Bank',1400256000,47850,'09-13-2021'),(21,2138906686,120,'COD',1455000020,202020,'09-13-2021'),(22,2138906686,120,'PayLater',1450000020,202020,'09-15-2021'),(23,361540113,180,'Transfer Bank',1470000020,12001,'09-15-2021'),(24,361540113,180,'COD',1258886650,200,'09-15-2021'),(25,901707655,245,'PayLater',1200002588,88850,'09-15-2021'),(26,123456,120,'Transfer Bank',123456,123456,'12/06/2023'),(27,8765432,180,'PayLater',43215,0,'13/06/2023');
/*!40000 ALTER TABLE `payments` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pending_orders`
--

DROP TABLE IF EXISTS `pending_orders`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pending_orders` (
  `order_id` int(10) NOT NULL AUTO_INCREMENT,
  `customer_id` int(10) NOT NULL,
  `invoice_no` int(10) NOT NULL,
  `product_id` text NOT NULL,
  `qty` int(10) NOT NULL,
  `size` text NOT NULL,
  `order_status` text NOT NULL,
  PRIMARY KEY (`order_id`)
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pending_orders`
--

LOCK TABLES `pending_orders` WRITE;
/*!40000 ALTER TABLE `pending_orders` DISABLE KEYS */;
INSERT INTO `pending_orders` VALUES (17,2,1715523401,'9',2,'Large','pending'),(23,3,1762810884,'12',1,'Medium','Complete'),(24,4,1972602052,'5',1,'Large','Complete'),(25,4,2008540778,'13',1,'Medium','pending'),(27,5,2138906686,'14',1,'Small','Complete'),(28,5,361540113,'13',2,'Medium','Complete'),(29,3,858195683,'5',1,'Large','Complete'),(31,6,901707655,'8',1,'Medium','Complete'),(32,6,2125554712,'15',1,'Large','pending'),(33,8,274095233,'14',1,'M','Complete'),(34,8,1423158422,'13',2,'M','Complete');
/*!40000 ALTER TABLE `pending_orders` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `product_categories`
--

DROP TABLE IF EXISTS `product_categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `product_categories` (
  `p_cat_id` int(10) NOT NULL AUTO_INCREMENT,
  `p_cat_title` text NOT NULL,
  `p_cat_top` text NOT NULL,
  `p_cat_image` text NOT NULL,
  PRIMARY KEY (`p_cat_id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `product_categories`
--

LOCK TABLES `product_categories` WRITE;
/*!40000 ALTER TABLE `product_categories` DISABLE KEYS */;
INSERT INTO `product_categories` VALUES (4,'Mantel','no','coaticn.png'),(5,'Kemeja','no','tshirticn.png'),(6,'Sweater','no','sweatericn.png'),(7,'Jaket','yes','jacketicn.png'),(8,'Sepatu','yes','sneakericn.png'),(9,'Celana','no','trousericn.png');
/*!40000 ALTER TABLE `product_categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `products` (
  `product_id` int(10) NOT NULL AUTO_INCREMENT,
  `p_cat_id` int(10) NOT NULL,
  `cat_id` int(10) NOT NULL,
  `manufacturer_id` int(10) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `product_title` text NOT NULL,
  `product_url` text NOT NULL,
  `product_img1` text NOT NULL,
  `product_img2` text NOT NULL,
  `product_img3` text NOT NULL,
  `product_price` int(10) NOT NULL,
  `product_psp_price` int(100) NOT NULL,
  `product_desc` text NOT NULL,
  `product_features` text NOT NULL,
  `product_video` text NOT NULL,
  `product_keywords` text NOT NULL,
  `product_label` text NOT NULL,
  `status` varchar(255) NOT NULL,
  PRIMARY KEY (`product_id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `products`
--

LOCK TABLES `products` WRITE;
/*!40000 ALTER TABLE `products` DISABLE KEYS */;
INSERT INTO `products` VALUES (5,7,5,5,'2023-06-12 03:33:00','Jaket Denim Bergaris','product-url-5','Next-Denim-Borg-Lined-Western-Jacket-0463-0064553-1-pdp_slider_l.jpg','Next-Denim-Borg-Lined-Western-Jacket-0463-0064553-2-pdp_slider_l.jpg','Next-Denim-Borg-Lined-Western-Jacket-0465-0064553-3-pdp_slider_l.jpg',259,100,'\r\n<p>Jaket Denim diatas merupakan jaket paling populer di kalangan anak muda.</p>\r\n','\r\nJaket Denim dengan bahan katun dipadukan dengan bahan kulit yang membuat pemakai tidak merasa gerah ketika digunakan diluar.\r\n','\r\n<iframe width=\"854\" height=\"480\" src=\"https://www.youtube.com/embed/qRswlmADRa8\" frameborder=\"0\" allowfullscreen></iframe>\r\n','Jaket','Gift','product'),(8,4,2,4,'2023-06-12 03:34:38','Mantel Bulu Tanpa Lengan','product-url-8','Black Blouse Versace Coat1.jpg','Black Blouse Versace Coat2.jpg','Black Blouse Versace Coat3.jpg',245,100,'\r\n\r\n\r\n<p>Mantel Bulu yang cocok digunakan di musim dingin atau sebagai barang yang dibawa ketika berlibur ke luar negeri.</p>\r\n','Mantel Bulu dengan bahan wool asli,lembut dan tidak menimbulkan gatal-atal ketika dipakai berkali-kali.\r\n\r\n\r\n\r\n','\r\n\r\n\r\n<iframe width=\"854\" height=\"480\" src=\"https://www.youtube.com/embed/qRswlmADRa8\" frameborder=\"0\" allowfullscreen></iframe>\r\n\r\n\r\n','Mantel','Baru','product'),(9,5,4,7,'2023-06-12 03:36:01','Kemeja Polo Lengan Panjang untuk Pria','product-url-9','product-1.jpg','product-2.jpg','product-3.jpg',50,35,'<p>Kemeja Polo untuk pria yang formal dan pas digunakan untuk acara formal.</p>','Kemeja Polo yang diproduksi dengan bahan katun dan tidak panas untuk dipakai sehari-hari.\r\n\r\n\r\n\r\n','\r\n\r\n\r\n\r\n<iframe width=\"854\" height=\"480\" src=\"https://www.youtube.com/embed/qRswlmADRa8\" frameborder=\"0\" allowfullscreen></iframe>\r\n\r\n\r\n\r\n','Kemeja','Diskon','product'),(12,8,5,2,'2023-06-12 03:37:27','Sepatu Adidas Ultraboost Edisi 21','ultraboost-21-adidas','Ultraboost_21.jpg','Ultraboost_21_2.jpg','Ultraboost_21_3.jpg',150,180,'Produk ini dibuat dengan bahan katun biru, bahan daur ulang berkinerja tinggi yang sebagian dibuat dengan daur ulang plastik.','Sepatu ini menjadi sepatu yang populer di kalangan anak muda karena bergaya streetwear.','\r\nhttps://assets.adidas.com/videos/q_auto,f_auto,g_auto/599fff35a3cf432aa9bbac7c0091316f_d98c/Ultraboost_21_Primeblue_Shoes_Blue_FX7729_video.mp4\r\n','Sepatu Adidas','Baru','product'),(13,9,2,3,'2023-06-12 03:39:09','Sepatu Nike Edisi Terbaru','nike-sportswear-essen-col','nike-s.jpg','nike-s2.jpg','nike-s02.jpg',90,85,'Sepatu Nike berbahan katun dipadukan dengan kulit yang nyaman untuk dipakai sehari-hari.\r\n\r\n\r\n\r\n\r\n','Sepatu Nike yang nyaman berbahan katun yang pas dipakai sehari-hari dan populer di kalangan anak muda.\r\n\r\n','\r\n\r\n\r\n','Sepatu Nike','Populer','product'),(14,5,5,7,'2023-06-12 03:41:08','Kemeja Polo Putih Lengan Pendek Pria','demo-product-showcase','polo-1.png','polo-2.png','polo-3.png',120,111,'Kemeja Polo warna putih lengan pendek untuk pria yang cocok untuk acara formal dan informal.\r\n\r\n\r\n','Produk ini menggunakan kain katun yang nyaman untuk dipakai sehari-hari.','\r\n\r\n\r\n\r\n','Kemeja','Baru','product'),(15,5,5,8,'2023-06-12 03:42:26','Kemeja Polo Ultra Gildan','cotton-polo-shirt','g18bulk.jpg','g18bulk2.jpg','g18bulk3.jpg',88,75,'Kemeja Polo yang cocok untuk dipakai ketika beraktivitas sehari-hari tanpa takut gerah.\r\n','Kemeja polo terbuat dari bahan katun yang sejuk dan tidak menyebabkan gatal-gatal untuk pemakaian jangka panjang.\r\n\r\n\r\n','\r\n\r\n\r\n\r\n','Kemeja Polo','Diskon','bundle');
/*!40000 ALTER TABLE `products` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `store`
--

DROP TABLE IF EXISTS `store`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `store` (
  `store_id` int(10) NOT NULL AUTO_INCREMENT,
  `store_title` varchar(255) NOT NULL,
  `store_image` varchar(255) NOT NULL,
  `store_desc` text NOT NULL,
  `store_button` varchar(255) NOT NULL,
  `store_url` varchar(255) NOT NULL,
  PRIMARY KEY (`store_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `store`
--

LOCK TABLES `store` WRITE;
/*!40000 ALTER TABLE `store` DISABLE KEYS */;
INSERT INTO `store` VALUES (4,'London Store','store (3).jpg','<p style=\"text-align: center;\"><strong>180-182 RECENTS STREET, LONDON, W1B 5BT</strong></p>\r\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut libero erat, aliquet eget mauris ut, dictum sagittis libero. Nam at dui dapibus, semper dolor ac, malesuada mi. Duis quis lobortis arcu. Vivamus sed sodales orci, non varius dolor.</p>','View Map','http://www.thedailylux.com/ecommerce'),(5,'New York Store','store (1).png','<p style=\"text-align: center;\"><strong>109 COLUMBUS CIRCLE, NEW YORK, NY10023</strong></p>\r\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut libero erat, aliquet eget mauris ut, dictum sagittis libero. Nam at dui dapibus, semper dolor ac, malesuada mi. Duis quis lobortis arcu. Vivamus sed sodales orci, non varius dolor.</p>','View Map','http://www.thedailylux.com/ecommerce'),(6,'Paris Store','store (2).jpg','<p style=\"text-align: center;\"><strong>2133 RUE SAINT-HONORE, 75001 PARIS&nbsp;</strong></p>\r\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut libero erat, aliquet eget mauris ut, dictum sagittis libero. Nam at dui dapibus, semper dolor ac, malesuada mi. Duis quis lobortis arcu. Vivamus sed sodales orci, non varius dolor.</p>','View Map','http://www.thedailylux.com/ecommerce');
/*!40000 ALTER TABLE `store` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `terms`
--

DROP TABLE IF EXISTS `terms`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `terms` (
  `term_id` int(10) NOT NULL AUTO_INCREMENT,
  `term_title` varchar(100) NOT NULL,
  `term_link` varchar(100) NOT NULL,
  `term_desc` text NOT NULL,
  PRIMARY KEY (`term_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `terms`
--

LOCK TABLES `terms` WRITE;
/*!40000 ALTER TABLE `terms` DISABLE KEYS */;
INSERT INTO `terms` VALUES (1,'Rules And Regulations','rules','<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance.&nbsp;</p>'),(2,'Refund Policy','link2','It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).Why do we use it?It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on'),(3,'Pricing and Promotions Policy','link3','It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).Why do we use it?It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on');
/*!40000 ALTER TABLE `terms` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `wishlist`
--

DROP TABLE IF EXISTS `wishlist`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `wishlist` (
  `wishlist_id` int(10) NOT NULL AUTO_INCREMENT,
  `customer_id` int(10) NOT NULL,
  `product_id` int(10) NOT NULL,
  PRIMARY KEY (`wishlist_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `wishlist`
--

LOCK TABLES `wishlist` WRITE;
/*!40000 ALTER TABLE `wishlist` DISABLE KEYS */;
INSERT INTO `wishlist` VALUES (2,2,8),(3,5,13),(4,3,13),(5,6,15);
/*!40000 ALTER TABLE `wishlist` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping routines for database 'ecom_store'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-06-16  8:39:08
