-- MySQL dump 10.13  Distrib 5.5.41, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: weloveit
-- ------------------------------------------------------
-- Server version	5.5.41-0ubuntu0.14.04.1

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
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `adminuser` varchar(500) NOT NULL,
  `adminpassword` varchar(999) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admin`
--

LOCK TABLES `admin` WRITE;
/*!40000 ALTER TABLE `admin` DISABLE KEYS */;
INSERT INTO `admin` VALUES (1,'demo@learnsauce.com','15b35a9db965f3970e2bc39996be4c4c');
/*!40000 ALTER TABLE `admin` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cname` varchar(500) CHARACTER SET utf8 NOT NULL,
  `description` varchar(250) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categories`
--

LOCK TABLES `categories` WRITE;
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;
INSERT INTO `categories` VALUES (1,'Music','Music new artists and lot more.'),(2,'Food & Drink','It\'s all about satisfying taste buds'),(3,'Home & Kitchen','All about your beautiful home.'),(4,'Comic','Includes funny pictures'),(5,'Travel & Living','');
/*!40000 ALTER TABLE `categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `comments`
--

DROP TABLE IF EXISTS `comments`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `comments` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(128) NOT NULL DEFAULT '',
  `url` varchar(255) NOT NULL DEFAULT '',
  `email` varchar(255) NOT NULL DEFAULT '',
  `body` text NOT NULL,
  `dt` varchar(255) NOT NULL,
  `uid` int(255) NOT NULL,
  `postid` int(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `comments`
--

LOCK TABLES `comments` WRITE;
/*!40000 ALTER TABLE `comments` DISABLE KEYS */;
/*!40000 ALTER TABLE `comments` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `favip`
--

DROP TABLE IF EXISTS `favip`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `favip` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ip` int(40) NOT NULL,
  `postid` int(255) NOT NULL,
  `uid` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `favip`
--

LOCK TABLES `favip` WRITE;
/*!40000 ALTER TABLE `favip` DISABLE KEYS */;
INSERT INTO `favip` VALUES (1,10651,1,3),(2,10651,2,3),(4,1036,4,4),(6,1036,12,4),(7,1036,8,4),(8,1036,10,4),(10,1036,5,4),(13,1783,11,4),(14,1783,13,4),(15,8973,31,4),(21,72184,35,4),(23,99164,36,4),(24,197237,32,4),(25,10361,34,4),(26,12168,18,4),(27,153205,33,4);
/*!40000 ALTER TABLE `favip` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pages`
--

DROP TABLE IF EXISTS `pages`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pages` (
  `id` int(11) NOT NULL,
  `page` longtext NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pages`
--

LOCK TABLES `pages` WRITE;
/*!40000 ALTER TABLE `pages` DISABLE KEYS */;
INSERT INTO `pages` VALUES (1,'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce porttitor\r\n lobortis tortor sit amet auctor. Praesent pretium, leo eget luctus \r\ntempor, lectus erat vulputate libero, in viverra dolor velit quis ante. \r\nVivamus viverra pulvinar sollicitudin. Vivamus dictum orci sed lorem \r\nvenenatis quis rutrum risus dictum. Ut non enim elit. In consectetur, \r\nnibh sed iaculis pellentesque, nisi ligula egestas enim, sagittis \r\nfermentum nulla nisl sit amet velit. Aliquam erat volutpat. Suspendisse \r\nac mi tortor, at vestibulum augue. Suspendisse ut nisl quam, euismod \r\nscelerisque urna. Donec non leo et nisi tempus fermentum. Cum sociis \r\nnatoque penatibus et magnis dis parturient montes, nascetur ridiculus \r\nmus. Donec gravida sodales est vitae tincidunt.<br><br>Curabitur neque \r\ndui, adipiscing a dignissim sed, congue ut sem. Vivamus eget tellus \r\nlectus. Nullam ut tempus purus. Vestibulum pellentesque lorem nec velit \r\nhendrerit porta. Cras sit amet mauris odio. Sed sit amet libero nec \r\nipsum venenatis interdum. Class aptent taciti sociosqu ad litora \r\ntorquent per conubia nostra, per inceptos himenaeos. Sed at ligula eu \r\nenim congue molestie. Lorem ipsum dolor sit amet, consectetur adipiscing\r\n elit. Praesent tincidunt diam at metus facilisis aliquam. Vivamus a \r\norci nunc, molestie consectetur purus. Vivamus aliquam, diam eu rhoncus \r\nmollis, est lorem aliquam neque, elementum molestie sapien velit id \r\nsapien. Maecenas quis dolor <font face=\"times new roman\">nisl.</font><br><br>Morbi nisi quam, suscipit eu \r\naccumsan a, porttitor sed risus. Donec laoreet, dolor semper eleifend \r\nsodales, erat lacus pretium velit, vitae dignissim felis risus non \r\nmagna. Suspendisse potenti. Proin at nulla massa, et dictum magna. Lorem\r\n ipsum dolor sit amet, consectetur adipiscing elit. Integer pharetra, \r\npurus vel egestas egestas, orci lectus vehicula quam, non placerat massa\r\n lacus id justo. Integer posuere laoreet porttitor.<br><br>Nam nulla \r\nmetus, rutrum in suscipit ac, hendrerit eget nunc. In hac habitasse \r\nplatea dictumst. Mauris at justo magna. Class aptent taciti sociosqu ad \r\nlitora torquent per conubia nostra, per inceptos himenaeos. Duis \r\nmalesuada ultricies hendrerit. Vivamus ullamcorper consectetur \r\ndignissim. Praesent nunc lorem, elementum vitae scelerisque vitae, \r\npellentesque quis ipsum. Cras volutpat, erat eu mollis pulvinar, justo \r\nlibero dictum leo, ac accumsan tellus ipsum eget magna. Suspendisse \r\ntristique mauris nec odio fringilla sagittis. Donec rhoncus euismod \r\ntortor, nec commodo magna cursus at. Nunc ut euismod dui. Suspendisse \r\nsollicitudin, magna eget auctor euismod, dolor mi aliquet tellus, et \r\nsuscipit dui est nec odio. Aliquam rutrum tellus in nisi ultricies sed \r\nelementum nisi molestie. Praesent sit amet ligula id lorem ultrices \r\ntristique.<br><br>Suspendisse potenti. Sed urna est, fringilla a \r\ncondimentum eu, dapibus et erat. Cras ac aliquet erat. Integer eget \r\nrisus magna, non egestas nulla. Maecenas ut ante tortor. Pellentesque \r\nhabitant morbi tristique senectus et netus et malesuada fames ac turpis \r\negestas. Morbi vel eros nec quam cursus porttitor et nec orci. Nulla vel\r\n odio sit amet nisi feugiat dignissim. Mauris tincidunt enim quam, non \r\npharetra risus. Sed sed mi nulla, sit amet aliquam ipsum. Ut faucibus \r\nvestibulum feugiat. Nulla ut dui eget massa pellentesque scelerisque. \r\nAenean ut ipsum at orci lacinia mollis id nec urna. Proin eros dui, \r\nfeugiat vitae adipiscing ut, rutrum vitae quam. Nam et convallis augue. \r\nQuisque ut odio eu ante consequat elementum. <br>'),(2,'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce porttitor\r\n lobortis tortor sit amet auctor. Praesent pretium, leo eget luctus \r\ntempor, lectus erat vulputate libero, in viverra dolor velit quis ante. \r\nVivamus viverra pulvinar sollicitudin. Vivamus dictum orci sed lorem \r\nvenenatis quis rutrum risus dictum. Ut non enim elit. In consectetur, \r\nnibh sed iaculis pellentesque, nisi ligula egestas enim, sagittis \r\nfermentum nulla nisl sit amet velit. Aliquam erat volutpat. Suspendisse \r\nac mi tortor, at vestibulum augue. Suspendisse ut nisl quam, euismod \r\nscelerisque urna. Donec non leo et nisi tempus fermentum. Cum sociis \r\nnatoque penatibus et magnis dis parturient montes, nascetur ridiculus \r\nmus. Donec gravida sodales est vitae tincidunt.<br><br>Curabitur neque \r\ndui, adipiscing a dignissim sed, congue ut sem. Vivamus eget tellus \r\nlectus. Nullam ut tempus purus. Vestibulum pellentesque lorem nec velit \r\nhendrerit porta. Cras sit amet mauris odio. Sed sit amet libero nec \r\nipsum venenatis interdum. Class aptent taciti sociosqu ad litora \r\ntorquent per conubia nostra, per inceptos himenaeos. Sed at ligula eu \r\nenim congue molestie. Lorem ipsum dolor sit amet, consectetur adipiscing\r\n elit. Praesent tincidunt diam at metus facilisis aliquam. Vivamus a \r\norci nunc, molestie consectetur purus. Vivamus aliquam, diam eu rhoncus \r\nmollis, est lorem aliquam neque, elementum molestie sapien velit id \r\nsapien. Maecenas quis dolor nisl.<br><br>Morbi nisi quam, suscipit eu \r\naccumsan a, porttitor sed risus. Donec laoreet, dolor semper eleifend \r\nsodales, erat lacus pretium velit, vitae dignissim felis risus non \r\nmagna. Suspendisse potenti. Proin at nulla massa, et dictum magna. Lorem\r\n ipsum dolor sit amet, consectetur adipiscing elit. Integer pharetra, \r\npurus vel egestas egestas, orci lectus vehicula quam, non placerat massa\r\n lacus id justo. Integer posuere laoreet porttitor.<br><br>Nam nulla \r\nmetus, rutrum in suscipit ac, hendrerit eget nunc. In hac habitasse \r\nplatea dictumst. Mauris at justo magna. Class aptent taciti sociosqu ad \r\nlitora torquent per conubia nostra, per inceptos himenaeos. Duis \r\nmalesuada ultricies hendrerit. Vivamus ullamcorper consectetur \r\ndignissim. Praesent nunc lorem, elementum vitae scelerisque vitae, \r\npellentesque quis ipsum. Cras volutpat, erat eu mollis pulvinar, justo \r\nlibero dictum leo, ac accumsan tellus ipsum eget magna. Suspendisse \r\ntristique mauris nec odio fringilla sagittis. Donec rhoncus euismod \r\ntortor, nec commodo magna cursus at. Nunc ut euismod dui. Suspendisse \r\nsollicitudin, magna eget auctor euismod, dolor mi aliquet tellus, et \r\nsuscipit dui est nec odio. Aliquam rutrum tellus in nisi ultricies sed \r\nelementum nisi molestie. Praesent sit amet ligula id lorem ultrices \r\ntristique.<br><br>Suspendisse potenti. Sed urna est, fringilla a \r\ncondimentum eu, dapibus et erat. Cras ac aliquet erat. Integer eget \r\nrisus magna, non egestas nulla. Maecenas ut ante tortor. Pellentesque \r\nhabitant morbi tristique senectus et netus et malesuada fames ac turpis \r\negestas. Morbi vel eros nec quam cursus porttitor et nec orci. Nulla vel\r\n odio sit amet nisi feugiat dignissim. Mauris tincidunt enim quam, non \r\npharetra risus. Sed sed mi nulla, sit amet aliquam ipsum. Ut faucibus \r\nvestibulum feugiat. Nulla ut dui eget massa pellentesque scelerisque. \r\nAenean ut ipsum at orci lacinia mollis id nec urna. Proin eros dui, \r\nfeugiat vitae adipiscing ut, rutrum vitae quam. Nam et convallis augue. \r\nQuisque ut odio eu ante consequat elementum. <br>'),(3,'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce porttitor lobortis tortor sit amet auctor. Praesent pretium, leo eget luctus tempor, lectus erat vulputate libero, in viverra dolor velit quis ante. Vivamus viverra pulvinar sollicitudin. Vivamus dictum orci sed lorem venenatis quis rutrum risus dictum. Ut non enim elit. In consectetur, nibh sed iaculis pellentesque, nisi ligula egestas enim, sagittis fermentum nulla nisl sit amet velit. Aliquam erat volutpat. Suspendisse ac mi tortor, at vestibulum augue. Suspendisse ut nisl quam, euismod scelerisque urna. Donec non leo et nisi tempus fermentum. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec gravida sodales est vitae tincidunt.<br><br>Curabitur neque dui, adipiscing a dignissim sed, congue ut sem. Vivamus eget tellus lectus. Nullam ut tempus purus. Vestibulum pellentesque lorem nec velit hendrerit porta. Cras sit amet mauris odio. Sed sit amet libero nec ipsum venenatis interdum. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Sed at ligula eu enim congue molestie. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent tincidunt diam at metus facilisis aliquam. Vivamus a orci nunc, molestie consectetur purus. Vivamus aliquam, diam eu rhoncus mollis, est lorem aliquam neque, elementum molestie sapien velit id sapien. Maecenas quis dolor nisl.<br><br>Morbi nisi quam, suscipit eu accumsan a, porttitor sed risus. Donec laoreet, dolor semper eleifend sodales, erat lacus pretium velit, vitae dignissim felis risus non magna. Suspendisse potenti. Proin at nulla massa, et dictum magna. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer pharetra, purus vel egestas egestas, orci lectus vehicula quam, non placerat massa lacus id justo. Integer posuere laoreet porttitor.<br><br>Nam nulla metus, rutrum in suscipit ac, hendrerit eget nunc. In hac habitasse platea dictumst. Mauris at justo magna. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Duis malesuada ultricies hendrerit. Vivamus ullamcorper consectetur dignissim. Praesent nunc lorem, elementum vitae scelerisque vitae, pellentesque quis ipsum. Cras volutpat, erat eu mollis pulvinar, justo libero dictum leo, ac accumsan tellus ipsum eget magna. Suspendisse tristique mauris nec odio fringilla sagittis. Donec rhoncus euismod tortor, nec commodo magna cursus at. Nunc ut euismod dui. Suspendisse sollicitudin, magna eget auctor euismod, dolor mi aliquet tellus, et suscipit dui est nec odio. Aliquam rutrum tellus in nisi ultricies sed elementum nisi molestie. Praesent sit amet ligula id lorem ultrices tristique.<br><br>Suspendisse potenti. Sed urna est, fringilla a condimentum eu, dapibus et erat. Cras ac aliquet erat. Integer eget risus magna, non egestas nulla. Maecenas ut ante tortor. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Morbi vel eros nec quam cursus porttitor et nec orci. Nulla vel odio sit amet nisi feugiat dignissim. Mauris tincidunt enim quam, non pharetra risus. Sed sed mi nulla, sit amet aliquam ipsum. Ut faucibus vestibulum feugiat. Nulla ut dui eget massa pellentesque scelerisque. Aenean ut ipsum at orci lacinia mollis id nec urna. Proin eros dui, feugiat vitae adipiscing ut, rutrum vitae quam. Nam et convallis augue. Quisque ut odio eu ante consequat elementum. <br>'),(4,'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce porttitor\r\n lobortis tortor sit amet auctor. Praesent pretium, leo eget luctus \r\ntempor, lectus erat vulputate libero, in viverra dolor velit quis ante. \r\nVivamus viverra pulvinar sollicitudin. Vivamus dictum orci sed lorem \r\nvenenatis quis rutrum risus dictum. Ut non enim elit. In consectetur, \r\nnibh sed iaculis pellentesque, nisi ligula egestas enim, sagittis \r\nfermentum nulla nisl sit amet velit. Aliquam erat volutpat. Suspendisse \r\nac mi tortor, at vestibulum augue. Suspendisse ut nisl quam, euismod \r\nscelerisque urna. Donec non leo et nisi tempus fermentum. Cum sociis \r\nnatoque penatibus et magnis dis parturient montes, nascetur ridiculus \r\nmus. Donec gravida sodales est vitae tincidunt.<br><br>Curabitur neque \r\ndui, adipiscing a dignissim sed, congue ut sem. Vivamus eget tellus \r\nlectus. Nullam ut tempus purus. Vestibulum pellentesque lorem nec velit \r\nhendrerit porta. Cras sit amet mauris odio. Sed sit amet libero nec \r\nipsum venenatis interdum. Class aptent taciti sociosqu ad litora \r\ntorquent per conubia nostra, per inceptos himenaeos. Sed at ligula eu \r\nenim congue molestie. Lorem ipsum dolor sit amet, consectetur adipiscing\r\n elit. Praesent tincidunt diam at metus facilisis aliquam. Vivamus a \r\norci nunc, molestie consectetur purus. Vivamus aliquam, diam eu rhoncus \r\nmollis, est lorem aliquam neque, elementum molestie sapien velit id \r\nsapien. Maecenas quis dolor nisl.<br><br>Morbi nisi quam, suscipit eu \r\naccumsan a, porttitor sed risus. Donec laoreet, dolor semper eleifend \r\nsodales, erat lacus pretium velit, vitae dignissim felis risus non \r\nmagna. Suspendisse potenti. Proin at nulla massa, et dictum magna. Lorem\r\n ipsum dolor sit amet, consectetur adipiscing elit. Integer pharetra, \r\npurus vel egestas egestas, orci lectus vehicula quam, non placerat massa\r\n lacus id justo. Integer posuere laoreet porttitor.<br><br>Nam nulla \r\nmetus, rutrum in suscipit ac, hendrerit eget nunc. In hac habitasse \r\nplatea dictumst. Mauris at justo magna. Class aptent taciti sociosqu ad \r\nlitora torquent per conubia nostra, per inceptos himenaeos. Duis \r\nmalesuada ultricies hendrerit. Vivamus ullamcorper consectetur \r\ndignissim. Praesent nunc lorem, elementum vitae scelerisque vitae, \r\npellentesque quis ipsum. Cras volutpat, erat eu mollis pulvinar, justo \r\nlibero dictum leo, ac accumsan tellus ipsum eget magna. Suspendisse \r\ntristique mauris nec odio fringilla sagittis. Donec rhoncus euismod \r\ntortor, nec commodo magna cursus at. Nunc ut euismod dui. Suspendisse \r\nsollicitudin, magna eget auctor euismod, dolor mi aliquet tellus, et \r\nsuscipit dui est nec odio. Aliquam rutrum tellus in nisi ultricies sed \r\nelementum nisi molestie. Praesent sit amet ligula id lorem ultrices \r\ntristique.<br><br>Suspendisse potenti. Sed urna est, fringilla a \r\ncondimentum eu, dapibus et erat. Cras ac aliquet erat. Integer eget \r\nrisus magna, non egestas nulla. Maecenas ut ante tortor. Pellentesque \r\nhabitant morbi tristique senectus et netus et malesuada fames ac turpis \r\negestas. Morbi vel eros nec quam cursus porttitor et nec orci. Nulla vel\r\n odio sit amet nisi feugiat dignissim. Mauris tincidunt enim quam, non \r\npharetra risus. Sed sed mi nulla, sit amet aliquam ipsum. Ut faucibus \r\nvestibulum feugiat. Nulla ut dui eget massa pellentesque scelerisque. \r\nAenean ut ipsum at orci lacinia mollis id nec urna. Proin eros dui, \r\nfeugiat vitae adipiscing ut, rutrum vitae quam. Nam et convallis augue. \r\nQuisque ut odio eu ante consequat elementum. <br>');
/*!40000 ALTER TABLE `pages` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `posts`
--

DROP TABLE IF EXISTS `posts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `posts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `image` varchar(999) CHARACTER SET utf8 NOT NULL,
  `url` varchar(999) CHARACTER SET utf8 NOT NULL,
  `title` varchar(500) CHARACTER SET utf8 NOT NULL,
  `description` varchar(999) CHARACTER SET utf8 NOT NULL,
  `catid` int(11) NOT NULL,
  `uid` int(255) NOT NULL,
  `likes` int(11) NOT NULL,
  `hits` int(11) NOT NULL,
  `link_hits` int(11) NOT NULL,
  `tot` int(11) NOT NULL,
  `date` varchar(500) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `posts`
--

LOCK TABLES `posts` WRITE;
/*!40000 ALTER TABLE `posts` DISABLE KEYS */;
INSERT INTO `posts` VALUES (16,'tom_cruise_4136881353.jpg','http://www.vh1.com/news/43123/tom-cruise-flirting/','Tom cruise','Who was tom cruise flirting with at the red carpet?',1,4,0,1,8,9,'January 28, 2016'),(17,'robert_pattinson_3452894845.jpg','http://www.imdb.com/name/nm1500155/','Robert pattinson','Robert Douglas Thomas Pattinson was born May 13, 1986 in London, England, to Clare (Charlton), who worked at a modeling agency, and Richard Pattinson, a vintage car importer.',1,4,0,2,1,3,'January 28, 2016'),(18,'angelina_jolie_and_brad_pitt_fight_9388429038.jpg','http://radaronline.com/celebrity-news/brad-pitt-angelina-jolie-divorce-national-enquirer/','Angelina jolie and brad pitt Fight','Brad Pitt &amp; Angelina Jolie: The Epic Fight That Could Be Their Last',1,4,1,2,3,5,'January 28, 2016'),(19,'robert_downeys_salary_6663579312.jpg','http://www.telegraph.co.uk/film/avengers--infinity-war-part-1/robert-downey-jr-200-million-salary/','Robert Downey\'s salary','Robert Downey Jr to be paid $200 million for the next Avengers films',5,4,0,8,16,24,'January 28, 2016'),(20,'creed-the_movie_5967398844.jpg','http://www.imdb.com/title/tt3076658/','Creed-The Movie','Starring Michael B. Jordan, Sylvester Stallone, Tessa Thompson is a film about a former World Heavyweight Champion Rocky Balboa serves as a trainer and mentor to Adonis Johnson, the son of his late friend and former rival Apollo Creed.',4,4,0,5,6,11,'January 28, 2016'),(21,'kristen_stewart_and_twilight_8440836095.jpg','http://www.eonline.com/news/687547/kristen-stewart-talks-future-twilight-remakes-i-d-be-kind-of-fascinated','Kristen Stewart and Twilight','Kristen Stewart Talks Future Twilight Remakes: &quot;I\'d Be Kind of Fascinated&quot;',3,4,0,2,4,6,'January 28, 2016'),(22,'batman_vs_superman_7848068512.jpg','http://moviepilot.com/posts/3271653','Batman Vs Superman','Batman and Superman finally duking it out in a live action movie. This is what the fans of both superheroes have been waiting for ever since they both appeared on film, and now it&rsquo;s coming to theaters next year. We finally get to see who would really win in a fight. Would it be the man of steel? ',4,4,0,1,2,3,'January 28, 2016'),(23,'emma_watson_2622706987.jpg','http://www.justjared.com/tags/emma-watson/','Emma Watson','Emma Watson shares her feminist book club',1,4,0,6,3,9,'January 28, 2016'),(24,'megan_fox__520316124.jpg','http://www.movienewsguide.com/megan-fox-lists-house-sale-1-299-million/147203','MEGAN FOX ','MEGAN FOX LISTS HER HOUSE FOR SALE FOR $1.299 MILLION',1,4,0,1,4,5,'January 28, 2016'),(25,'scarlett_johansson_512375179.jpg','https://en.wikipedia.org/wiki/Scarlett_Johansson','Scarlett Johansson','Scarlett Johansson (/dÊ’oÊŠËˆh&aelig;nsÉ™n/ joh-han-sÉ™n; born November 22, 1984)[1] is an American actress, model, and singer. She made her film debut in North (1994). Johansson subsequently starred in Manny &amp; Lo in 1996, and garnered further acclaim and prominence with roles in The Horse Whisperer (1998) and Ghost World (2001). She shifted to adult roles with her performances in Girl with a Pearl Earring (2003) and Sofia Coppola\'s Lost in Translation (2003), for which she won a BAFTA award for Best Actress in a Leading Role.',1,4,0,4,12,16,'January 28, 2016'),(26,'emma_stone_7272395207.jpg','http://www.parentherald.com/articles/17429/20160126/emma-stone-andrew-garfield-split-rumored-break-up-is-publicity-stunt-for-actress-new-movie.htm','Emma Stone','Emma Stone, Andrew Garfield Split: Rumored Break-up Is Publicity Stunt For Actress&rsquo; New Movie?',1,4,0,3,10,13,'January 28, 2016'),(27,'jennifer_lopez_6586662335.jpg','http://www.dailymail.co.uk/femail/article-3183826/Jennifer-Lopez-46-looks-young-years-showcases-timeless-skin-new-Endless-Jewelry-campaign.html','Jennifer Lopez','Jennifer Lopez 46 looks young years showcases timeless skin new Endless Jewelry',1,4,0,5,6,11,'January 28, 2016'),(28,'alison_brie_6846241997.jpg','http://www.people.com/article/alison-brie-talks-dave-franco-engagement','Alison Brie','Alison Brie Opens Up About New Fianc&eacute; Dave Franco: \'He\'s So Wonderful\'',1,4,0,1,2,3,'January 28, 2016'),(29,'brad_pitt_4133670250.jpg','http://www.dnaindia.com/entertainment/report-by-the-sea-was-made-to-test-my-relationship-with-bradsays-angelina-jolie-2170880','Brad pitt','\'By the Sea\' was made to test my relationship with Brad Pitt, says Angelina Jolie',3,4,0,3,6,9,'January 28, 2016'),(30,'spectre_5687817917.jpg','http://picturelockshow.com/new-releases/2015/11/6/spectre-review','Spectre','It certainly ticks all the boxes on the Bond Movie Checklist. Exotic locales? Check. Sexy ladies? Check. High-speed car chases? Check. A vodka martini, shaken and not stirred? Check. Et cetera. Viewers should prepare for little that&rsquo;s new or surprising in the twenty-fourth Bond film overall, and the fourth starring Daniel Craig. ',1,4,0,1,7,8,'January 28, 2016'),(31,'dakota_johnson_8921655914.jpg','http://www.accesshollywood.com/videos/dakota-johnson-describes-fifty-shades-darker-explains-her-inhibitions/','Dakota Johnson','Dakota-Johnson-describes-fifty-shades-darker-explains-her-inhibitions',5,4,1,7,14,21,'January 28, 2016'),(32,'katy_perry_8217856949.jpg','http://www.mirror.co.uk/3am/celebrity-news/katy-perry-gives-kanye-west-7260020','Katy Perry','Katy Perry gives Kanye West a shout out after his explosive Wiz Khalifa rant',1,4,1,7,20,27,'January 28, 2016'),(33,'cheryl_cole_2689999830.jpg','http://www.ok.co.uk/celebrity-news/cheryl-fernandez-versini-without-wedding-ring-kimberley-walsh-wedding','Cheryl Cole','Cheryl Fernandez-Versini steps out without her wedding ring as she arrives in Barbados for Kimberley Walsh\'s nuptials',1,4,1,5,25,30,'January 28, 2016'),(34,'salena_gomez_6998753705.jpg','http://hollywoodlife.com/2016/01/27/selena-gomez-ignoring-justin-bieber-cutting-off-screwing-head/','Salena Gomez','Selena Gomez Cutting Justin Bieber Off For Weeks: It&rsquo;s &lsquo;Screwing With His Head&rsquo;',1,4,1,11,22,33,'January 28, 2016'),(35,'this_is_just_a_test_9202082054.jpg','http://google.com','this is just a test','this is just description',2,4,1,4,17,21,'January 28, 2016'),(36,'automation_9579581674.jpg','http://www.offauto.com/','Automation','The is a great thing to do!',1,4,1,5,4,9,'January 28, 2016');
/*!40000 ALTER TABLE `posts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `settings`
--

DROP TABLE IF EXISTS `settings`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `settings` (
  `id` int(1) NOT NULL,
  `name` varchar(100) NOT NULL,
  `siteurl` varchar(500) NOT NULL,
  `keywords` varchar(255) NOT NULL,
  `descrp` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `fbpage` varchar(900) NOT NULL,
  `twitter` varchar(500) NOT NULL,
  `pinterest` varchar(500) NOT NULL,
  `google_plus` varchar(500) NOT NULL,
  `template` varchar(255) NOT NULL,
  `site_hits` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `settings`
--

LOCK TABLES `settings` WRITE;
/*!40000 ALTER TABLE `settings` DISABLE KEYS */;
INSERT INTO `settings` VALUES (1,'Los Angeles','provenlogic.info/weloveit','Add Your Meta Keywords Here','Add Your Meta Description Here ','You@YourSite.Ext','https://www.facebook.com/Weloveit-1713034648941832/?skip_nax_wizard=true','https://twitter.com/weloveit00','https://in.pinterest.com/weloveit2807/','http://plus.google.com/You','fusion',1791);
/*!40000 ALTER TABLE `settings` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `siteads`
--

DROP TABLE IF EXISTS `siteads`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `siteads` (
  `id` int(11) NOT NULL,
  `ad1` varchar(500) NOT NULL,
  `ad2` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `siteads`
--

LOCK TABLES `siteads` WRITE;
/*!40000 ALTER TABLE `siteads` DISABLE KEYS */;
/*!40000 ALTER TABLE `siteads` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) CHARACTER SET utf8 NOT NULL,
  `email` varchar(500) CHARACTER SET utf8 NOT NULL,
  `password` varchar(999) CHARACTER SET utf8 NOT NULL,
  `avatar` varchar(500) CHARACTER SET utf8 NOT NULL,
  `about` varchar(999) CHARACTER SET utf8 NOT NULL,
  `reg_date` varchar(500) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'zack','info@flippyscripts.com','a9575efd6da5a277322853c68081ab88','','','July 5, 2013'),(2,'flippy','flippy@flippyscripts.com','9b3e0d3e3f362530e90c563321a6dc98','13730125632.jpg','','July 5, 2013'),(3,'pandiyaraja@provenlogic.net','pandiyaraja@provenlogic.net','15b35a9db965f3970e2bc39996be4c4c','','','December 28, 2015'),(4,'rupika@provenlogic.net','rupika@provenlogic.net','e10adc3949ba59abbe56e057f20f883e','14514609674.jpg','','December 28, 2015');
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

-- Dump completed on 2016-02-05  2:58:20
