-- MariaDB dump 10.19  Distrib 10.4.19-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: equity_meetup
-- ------------------------------------------------------
-- Server version	10.4.19-MariaDB

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
-- Table structure for table `booking`
--

DROP TABLE IF EXISTS `booking`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `booking` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fullname` varchar(100) DEFAULT NULL,
  `email_address` varchar(100) DEFAULT NULL,
  `post_id` varchar(100) DEFAULT NULL,
  `owner_id` varchar(100) DEFAULT NULL,
  `email_count` varchar(100) DEFAULT NULL,
  `timing` varchar(100) DEFAULT NULL,
  `timing1` varchar(100) DEFAULT NULL,
  `timing2` varchar(100) DEFAULT NULL,
  `status` varchar(30) DEFAULT NULL,
  `channel` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `booking`
--

LOCK TABLES `booking` WRITE;
/*!40000 ALTER TABLE `booking` DISABLE KEYS */;
INSERT INTO `booking` VALUES (10,'Rachael Bush','rachaelbush@gmail.com','47','35','0','1678065341','Monday, March 6, 2023, 4:40 am','2023-03-06 40:00 AM','approved','avanade1678065162'),(11,'Rachael Bush','rachaelbush@gmail.com','45','35','0','1678065341','Monday, March 6, 2023, 4:40 am','2023-03-06 40:00 AM','awaiting','avanade1678065236');
/*!40000 ALTER TABLE `booking` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `posts`
--

DROP TABLE IF EXISTS `posts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `posts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) CHARACTER SET utf8 NOT NULL,
  `title_seo` varchar(200) DEFAULT NULL,
  `content` text CHARACTER SET utf8 NOT NULL,
  `timer1` varchar(100) DEFAULT NULL,
  `timer2` varchar(100) DEFAULT NULL,
  `username` varchar(100) DEFAULT NULL,
  `fullname` varchar(100) DEFAULT NULL,
  `userphoto` varchar(100) DEFAULT NULL,
  `userid` int(30) DEFAULT NULL,
  `points` varchar(100) DEFAULT NULL,
  `help_category` varchar(100) DEFAULT NULL,
  `offering` varchar(100) DEFAULT NULL,
  `total_comments` varchar(100) DEFAULT NULL,
  `data_type` varchar(100) DEFAULT NULL,
  `video` varchar(100) DEFAULT NULL,
  `address` varchar(300) DEFAULT NULL,
  `lat` double DEFAULT NULL,
  `lng` double DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=48 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `posts`
--

LOCK TABLES `posts` WRITE;
/*!40000 ALTER TABLE `posts` DISABLE KEYS */;
INSERT INTO `posts` VALUES (44,'I am a Gynecologist Doctor. I can Help Pregnant Women','I-am-a-Gynecologist-Doctor.-I-can-Help-Pregnant-Women-1678013344','I  am a Gynecological Doctor from United State. I can assist  Pregnant Women to solve their Health Challenges','1678064822','Monday, March 6, 2023, 3:23 am','35','Ann Cool','good1678013101.png',35,'250','Medical_Personnel','Offering Medical Help','0','post',NULL,NULL,NULL,NULL),(45,'I can Help Women in Enterpreneurship','I-can-Help-Women-in-Enterpreneurship-1678013533','I am a Business Entrepreneur.I can help Women  seeking for Help in all Business Entrepreneurship.  Interested Women should book Appointments with me.','1678064822','Monday, March 6, 2023, 3:23 am','35','Ann Cool','good1678013101.png',35,'250','Enterpreneurs','Offering Medical Help','0','post',NULL,NULL,NULL,NULL),(46,'I can help women solve Rapes and Sexual Harrasment Cases','I-can-help-women-solve-Rapes-and-Sexual-Harrasment-Cases-1678013860','I am a Senior Lawyer from Michigan in United State.I am here to help young Girls, Ladies and Women to get justice on any Rape and Sexual harassment Cases.  You can Book Appointment with Me if you are interested...','1678064822','Monday, March 6, 2023, 3:23 am','36','Rachael Bush','good1678013657.png',36,'150','Lawyers','Offering Medical Help','0','post',NULL,NULL,NULL,NULL),(47,'I can Teach Women how to Make Local Soap and Detergents','I-can-Teach-Women-how-to-Make-Local-Soap-and-Detergents-1678014006','I am a Black Business Woman from Texas, United State.   I can teach Women on how to be productive. I can teach them how to make soap, detergents, Hand Wash, cosmestics,Shoe polish etc','1678064822','Monday, March 6, 2023, 3:23 am','35','Ann Cool','good1678013101.png',35,'250','Business_Women','Offering Medical Help','0','post',NULL,NULL,NULL,NULL);
/*!40000 ALTER TABLE `posts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(200) DEFAULT NULL,
  `password` varchar(200) DEFAULT NULL,
  `fullname` varchar(200) DEFAULT NULL,
  `email` varchar(200) DEFAULT NULL,
  `photo` varchar(200) DEFAULT NULL,
  `user_rank` varchar(200) DEFAULT NULL,
  `user_verified` varchar(200) DEFAULT NULL,
  `user_banned` varchar(200) DEFAULT NULL,
  `created_time` varchar(200) DEFAULT NULL,
  `timer1` varchar(200) DEFAULT NULL,
  `timer2` varchar(200) DEFAULT NULL,
  `data` varchar(200) DEFAULT NULL,
  `country` varchar(200) DEFAULT NULL,
  `phone_no` varchar(60) DEFAULT NULL,
  `status` varchar(100) DEFAULT NULL,
  `points` varchar(100) DEFAULT NULL,
  `levels` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (35,NULL,'123','Ann Cool','anncool@gmail.com','good1678013101.png','member','1','0','Monday, March 6, 2023, 3:20 am','1678064822',NULL,'b4f642fd1761c2690b202b3ccffa3d681678013102',NULL,NULL,'1678013102','250','1'),(36,NULL,'123','Rachael Bush','rachaelbush@gmail.com','good1678013657.png','member','1','0','Monday, March 6, 2023, 3:20 am','1678064822',NULL,'0f43bc5886bce528ded56d321e2831f71678013657',NULL,NULL,'1678013657','150','1');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping routines for database 'equity_meetup'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-03-06  2:20:46
