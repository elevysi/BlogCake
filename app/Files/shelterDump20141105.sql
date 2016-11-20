CREATE DATABASE  IF NOT EXISTS `shelterdata` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `shelterdata`;
-- MySQL dump 10.13  Distrib 5.6.13, for osx10.6 (i386)
--
-- Host: localhost    Database: shelterdata
-- ------------------------------------------------------
-- Server version	5.5.33

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
-- Table structure for table `citations`
--

DROP TABLE IF EXISTS `citations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `citations` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `text` mediumtext NOT NULL,
  `upload_id` int(11) DEFAULT NULL,
  `description` mediumtext,
  `rank` int(11) DEFAULT NULL,
  `show` int(1) DEFAULT NULL,
  `record_owner` int(11) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `citations`
--

LOCK TABLES `citations` WRITE;
/*!40000 ALTER TABLE `citations` DISABLE KEYS */;
INSERT INTO `citations` VALUES (1,'Galates 6v.2 ',NULL,'PORTEZ LES FARDEAUX  LES UNS DES AUTRES  ET ACCOMPLISSEZ AINSI  LA LOI DE CHRIST',1,1,NULL,'2014-11-05 20:37:05','2014-11-05 20:37:05'),(2,'Galatians 6v.2 ',NULL,'BEAR YE ONE  ANOTHER’S BURDENS,  AND SO FULFIL THE LAW OF CHRIST',2,1,NULL,'2014-11-05 20:37:35','2014-11-05 20:37:35'),(3,'Galaterbreif 6v.2',NULL,'HËLLEFT EEN DEEM ANEREN ZE DROEN, WAT IECH BELAASCHT. OP DËSEM WEE ERFËLLT DIR D’GESETZ, DAT CHRISTUS EIS GINN HUET',3,1,NULL,'2014-11-05 20:38:09','2014-11-05 20:38:09');
/*!40000 ALTER TABLE `citations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `messages`
--

DROP TABLE IF EXISTS `messages`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `messages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `object` varchar(255) DEFAULT NULL,
  `sender` varchar(255) DEFAULT NULL,
  `recipients` mediumtext,
  `body` mediumtext,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `show` int(1) DEFAULT '1',
  `record_owner` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `messages`
--

LOCK TABLES `messages` WRITE;
/*!40000 ALTER TABLE `messages` DISABLE KEYS */;
/*!40000 ALTER TABLE `messages` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `news`
--

DROP TABLE IF EXISTS `news`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `news` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `newstext` mediumtext,
  `footer` mediumtext,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `record_owner` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `news`
--

LOCK TABLES `news` WRITE;
/*!40000 ALTER TABLE `news` DISABLE KEYS */;
/*!40000 ALTER TABLE `news` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `posts`
--

DROP TABLE IF EXISTS `posts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `posts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `content` longtext NOT NULL,
  `record_owner` int(11) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `show` int(1) DEFAULT '1',
  `rank` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `posts`
--

LOCK TABLES `posts` WRITE;
/*!40000 ALTER TABLE `posts` DISABLE KEYS */;
INSERT INTO `posts` VALUES (2,'QUI SOMMES-NOUS? ','<p>Shelter th&eacute;rapeutique est une association chr&eacute;tienne d&rsquo;accompagnement spirituelle, psychologique et psychiatrique. Notre but est d&rsquo;apporter une aide professionnelle aux personnes en souffrance, en ayant pour base la conception biblique de l&rsquo;homme. <br />Nous consid&eacute;rons l&rsquo;homme dans sa globalit&eacute; (corps, &acirc;me et esprit) et abordons les probl&egrave;mes du quotidien sous l&rsquo;&eacute;clairage de l&rsquo;&eacute;criture sainte, la Bible. <br />Shelter th&eacute;rapeutique consid&egrave;re aussi les avanc&eacute;es m&eacute;dicales et scientifiques et les int&egrave;gre dans sa pratique avec discernement.</p>',NULL,'2014-10-28 19:42:27','2014-10-28 19:42:27',1,NULL),(3,'WHO ARE WE ? ','Shelter thérapeutique is a Christian counseling \r\nassociation that comes alongside those who seek professional help on a spiritual, psychological, and psychiatric level. Our view of man is based on the Bible. \r\nWe consider man as a whole (body, soul, spirit), and we confront everyday problems with the word of God, the Bible. \r\nShelter thérapeutique is also up to date to the \r\nnewest medical and scientific knowledge, and uses it with care and discernment. ',1,'2014-11-05 20:03:00','2014-11-05 20:03:00',1,NULL),(4,'WIE SI MIR ?','Shelter thérapeutique ass eng chrëschtlech  Associatioun, déi professionell spirituell, psychologesch a psychiatresch Hëllef a Begleedung ubitt. Dobäi baséiere mir eis op ee biblescht Mënschebild. \r\nMir gesinn de Mënsch a senger Globalitéit (Kierper, Séil, Geescht) a kucken eis all Problem vun engem biblesche Point de vue un. \r\nDe Shelter thérapeutique ass och um neieste Stand vun der Medezin an der Wëssenschaft, a versicht, déi Erkenntnisser richteg anzesetzen.',NULL,'2014-11-05 20:03:31','2014-11-05 20:03:31',1,NULL),(5,'COMMENT TRAVAILLONS-NOUS?','Nous donnons une place importante à l’écoute, \r\nla prière, l’encouragement, le conseil et l’exhortation. Nous pouvons vous accompagner en français, \r\nallemand, luxembourgeois ou en anglais. ',NULL,'2014-11-05 20:04:05','2014-11-05 20:04:05',1,NULL),(6,'HOW DO WE WORK?','We are there to listen, to pray, to encourage, \r\nto edify and to exhort. We speak fluently French, \r\nGerman, Luxembourgish or English. ',NULL,'2014-11-05 20:04:29','2014-11-05 20:04:29',1,NULL),(7,'WÉI SCHAFFE MIR? ','Mir sinn do fir de Leit nozelauschteren, ze bieden, \r\nz’encouragéieren, z’erbauen an ze beroden. Mir schwätze fléissend Franséisch, Lëtzebuergesch Däitsch oder Englesch. ',NULL,'2014-11-05 20:04:48','2014-11-05 20:04:48',1,NULL),(8,'QUI ACCUEILLONS-NOUS? ','Notre accompagnement s’adresse \r\naux personnes qui présentent: \r\n• angoisses, dépressions, TOC \r\n• trouble alimentaire \r\n• traumatisme \r\n• souffrance morale, psychologique, spirituelle \r\n• dépendances: alcool et autres dépendances \r\n• difficultés relationnelles (couple, enfant, famille) \r\n• conseil d’éducation chrétienne et enfants avec troubles du comportement ',NULL,'2014-11-05 20:05:04','2014-11-05 20:05:04',1,NULL),(9,'WHO CAN COME?','We offer help to people who suffer from: \r\n• Anxieties, depression, Compulsive disorder \r\n• Eating disorders \r\n• Traumatisms \r\n• Spiritual and/or psychological suffering \r\n• Dependency of alcohol and other drugs \r\n• Relational conflicts (couples, families) \r\n• Educational problems (Christian basis) and behavioral disorders of children ',NULL,'2014-11-05 20:05:20','2014-11-05 20:05:20',1,NULL),(10,'WIE KËNNE MIR BEHANDELEN? ','Mir bidden eis Hëllef a folgende \r\nProblemberäicher un: \r\n• Ängscht, Depressioun, Zwangsstéierungen \r\n• Iessstéierungen \r\n• Traumatismen \r\n• Psychologescht, séilescht an/–oder spirituellt Leiden \r\n• Ofhängegkeet vun Alkohol an aneren Drogen \r\n• Beziehungsproblemer a Familientherapie \r\n• Berodung am Beräich vun der Erzéiung mat engem chrëschtleche Standpunkt, souwéi Kanner ',NULL,'2014-11-05 20:05:38','2014-11-05 20:05:38',1,NULL);
/*!40000 ALTER TABLE `posts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `responsibles`
--

DROP TABLE IF EXISTS `responsibles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `responsibles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `function` varchar(255) DEFAULT NULL,
  `responsability` varchar(45) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `phone` varchar(45) DEFAULT NULL,
  `show` int(1) DEFAULT '1',
  `record_owner` int(11) DEFAULT NULL,
  `citation` varchar(255) DEFAULT NULL,
  `facebook` varchar(255) DEFAULT NULL,
  `linked_in` varchar(255) DEFAULT NULL,
  `gmail` varchar(255) DEFAULT NULL,
  `twitter` varchar(255) DEFAULT NULL,
  `pin` varchar(255) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `avatar` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `responsibles`
--

LOCK TABLES `responsibles` WRITE;
/*!40000 ALTER TABLE `responsibles` DISABLE KEYS */;
INSERT INTO `responsibles` VALUES (1,'Jacques','Bernard','Médecin Psychiatre / Doctor in psychiatry','','83, RUE DICKS<br>L-4082 ESCH-SUR-ALZETTE<br>G.D. LUXEMBOURG ','(00352) 691 610 217',1,NULL,'','','','','','','2014-11-05 20:45:34','2014-11-05 20:47:02',NULL),(2,'Darlène','Colas','Psychologue diplômée / clinical psychologist','','83, RUE DICKS<br>L-4082 ESCH-SUR-ALZETTE<br>G.D. LUXEMBOURG ','(00352) 691 999 669',1,NULL,'','','','','','','2014-11-05 20:46:53','2014-11-05 20:46:53',NULL);
/*!40000 ALTER TABLE `responsibles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `shelterdata_users`
--

DROP TABLE IF EXISTS `shelterdata_users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `shelterdata_users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `security_descriptor` varchar(36) NOT NULL,
  `fonction` varchar(100) DEFAULT NULL,
  `record_owner` int(10) unsigned DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `shelterdata_users`
--

LOCK TABLES `shelterdata_users` WRITE;
/*!40000 ALTER TABLE `shelterdata_users` DISABLE KEYS */;
/*!40000 ALTER TABLE `shelterdata_users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `uploads`
--

DROP TABLE IF EXISTS `uploads`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `uploads` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(45) NOT NULL,
  `description` text,
  `filename` varchar(255) DEFAULT NULL,
  `filesize` int(11) DEFAULT '0',
  `filemine` varchar(45) DEFAULT 'text/plain',
  `link_table` varchar(255) DEFAULT NULL,
  `link` int(11) DEFAULT NULL,
  `record_owner` int(11) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `path` varchar(255) DEFAULT NULL,
  `file_identificator` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `uploads`
--

LOCK TABLES `uploads` WRITE;
/*!40000 ALTER TABLE `uploads` DISABLE KEYS */;
/*!40000 ALTER TABLE `uploads` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `security_descriptor` varchar(36) NOT NULL,
  `fonction` varchar(100) DEFAULT NULL,
  `record_owner` int(10) unsigned DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
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

-- Dump completed on 2014-11-05 21:57:11
