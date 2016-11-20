CREATE DATABASE  IF NOT EXISTS `blogdb` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `blogdb`;
-- MySQL dump 10.13  Distrib 5.6.13, for osx10.6 (i386)
--
-- Host: localhost    Database: blogdb
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
-- Table structure for table `albums`
--

DROP TABLE IF EXISTS `albums`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `albums` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `dateofshot` datetime DEFAULT NULL,
  `place` varchar(255) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `link_id` int(11) DEFAULT NULL,
  `link_table` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `albums`
--

LOCK TABLES `albums` WRITE;
/*!40000 ALTER TABLE `albums` DISABLE KEYS */;
INSERT INTO `albums` VALUES (4,NULL,NULL,'2015-11-05 21:13:19',NULL,'2015-11-05 21:13:19','2015-11-05 21:13:19',26,'posts'),(5,NULL,NULL,'2015-11-05 21:21:18',NULL,'2015-11-05 21:21:18','2015-11-05 21:21:18',27,'posts'),(6,NULL,NULL,'2015-11-05 21:24:11',NULL,'2015-11-05 21:24:11','2015-11-05 21:24:11',28,'posts'),(7,NULL,NULL,'2015-11-05 22:13:52',NULL,'2015-11-05 22:13:52','2015-11-05 22:13:52',29,'posts'),(8,NULL,NULL,'2015-11-05 22:18:11',NULL,'2015-11-05 22:18:11','2015-11-05 22:18:11',30,'posts'),(9,NULL,NULL,'2015-11-05 22:20:47',NULL,'2015-11-05 22:20:47','2015-11-05 22:20:47',31,'posts'),(10,NULL,NULL,'2015-11-07 11:56:07',NULL,'2015-11-07 11:56:07','2015-11-07 11:56:07',35,'posts'),(11,NULL,NULL,'2015-11-07 12:32:01',NULL,'2015-11-07 12:32:01','2015-11-07 12:32:01',36,'posts'),(12,NULL,NULL,'2015-11-07 13:34:36',NULL,'2015-11-07 13:34:36','2015-11-07 13:34:36',37,'posts'),(13,NULL,NULL,'2015-11-08 18:46:12',NULL,'2015-11-08 18:46:12','2015-11-08 18:46:12',39,'posts'),(14,NULL,NULL,'2015-11-08 18:47:42',NULL,'2015-11-08 18:47:42','2015-11-08 18:47:42',40,'posts'),(15,NULL,NULL,'2015-12-11 14:53:34',NULL,'2015-12-11 14:53:34','2015-12-11 14:53:34',45,'posts'),(16,NULL,NULL,'2015-12-11 15:01:41',NULL,'2015-12-11 15:01:41','2015-12-11 15:01:41',46,'posts'),(17,NULL,NULL,'2015-12-11 15:03:49',NULL,'2015-12-11 15:03:49','2015-12-11 15:03:49',47,'posts'),(18,NULL,NULL,'2015-12-11 15:04:55',NULL,'2015-12-11 15:04:55','2015-12-11 15:04:55',48,'posts'),(19,NULL,NULL,'2015-12-11 15:24:23',NULL,'2015-12-11 15:24:23','2015-12-11 15:24:23',49,'posts'),(20,NULL,NULL,'2015-12-11 15:41:26',NULL,'2015-12-11 15:41:26','2015-12-11 15:41:26',50,'posts'),(21,NULL,NULL,'2015-12-11 15:44:39',NULL,'2015-12-11 15:44:39','2015-12-11 15:44:39',51,'posts'),(22,NULL,NULL,'2015-12-11 16:12:19',NULL,'2015-12-11 16:12:19','2015-12-11 16:12:19',52,'posts'),(23,NULL,NULL,'2015-12-11 16:27:22',NULL,'2015-12-11 16:27:22','2015-12-11 16:27:22',54,'posts');
/*!40000 ALTER TABLE `albums` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(25) NOT NULL,
  `order` int(10) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categories`
--

LOCK TABLES `categories` WRITE;
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;
INSERT INTO `categories` VALUES (1,'Life Style',NULL),(2,'Technology',NULL),(3,'Money',NULL),(4,'Social',NULL),(5,'Art',NULL),(6,'Music',NULL),(7,'Movies',NULL),(8,'Design',NULL);
/*!40000 ALTER TABLE `categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `comments`
--

DROP TABLE IF EXISTS `comments`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `comments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `item_id` int(11) DEFAULT NULL,
  `item_type` varchar(255) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `profile_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `anonymous_email` varchar(255) DEFAULT NULL,
  `anonymous_name` varchar(255) DEFAULT NULL,
  `message` mediumtext,
  `uuid` varchar(45) DEFAULT NULL,
  `reply_to` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=55 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `comments`
--

LOCK TABLES `comments` WRITE;
/*!40000 ALTER TABLE `comments` DISABLE KEYS */;
INSERT INTO `comments` VALUES (1,NULL,NULL,NULL,NULL,NULL,NULL,'info@web.com','Elvis','A comment',NULL,NULL),(2,NULL,NULL,NULL,NULL,NULL,NULL,'info@web.com','Elvis','We dem boyz',NULL,NULL),(3,31,'posts',NULL,NULL,NULL,NULL,'info@web.com','Elvis','ada',NULL,NULL),(4,31,'posts',NULL,NULL,NULL,NULL,'lemarcus@spurs.com','Lemarchus Aldbrigde','I think SA Spurs will improve over the years. We are just getting started',NULL,NULL),(5,31,'posts',NULL,NULL,NULL,NULL,NULL,NULL,'A new one',NULL,NULL),(6,31,'posts',NULL,NULL,9,NULL,NULL,NULL,'My new comment comes here',NULL,NULL),(7,36,'posts',NULL,NULL,9,NULL,NULL,NULL,'Here comes my comment on this post',NULL,NULL),(8,54,'posts',NULL,NULL,9,NULL,NULL,NULL,'This is Kevin\'s comment',NULL,NULL),(9,54,'posts',NULL,NULL,9,NULL,NULL,NULL,'Kevin again',NULL,NULL),(10,NULL,NULL,NULL,NULL,9,NULL,NULL,NULL,NULL,NULL,NULL),(11,52,'posts',NULL,NULL,9,NULL,NULL,NULL,'New Comment here',NULL,NULL),(12,NULL,NULL,NULL,NULL,9,NULL,NULL,NULL,NULL,NULL,NULL),(13,52,'posts',NULL,NULL,9,NULL,NULL,NULL,'A new one',NULL,NULL),(14,NULL,NULL,NULL,NULL,9,NULL,NULL,NULL,NULL,NULL,NULL),(15,NULL,NULL,NULL,NULL,9,NULL,NULL,NULL,NULL,NULL,NULL),(16,NULL,NULL,NULL,NULL,9,NULL,NULL,NULL,NULL,NULL,NULL),(17,52,'posts',NULL,NULL,9,NULL,NULL,NULL,'See',NULL,NULL),(22,54,'posts',NULL,NULL,9,NULL,NULL,NULL,'Another one',NULL,NULL),(24,NULL,NULL,NULL,NULL,9,NULL,NULL,NULL,NULL,NULL,NULL),(25,NULL,NULL,NULL,NULL,9,NULL,NULL,NULL,NULL,NULL,NULL),(26,54,'posts',NULL,NULL,9,NULL,NULL,NULL,'nope',NULL,NULL),(27,54,'posts',NULL,NULL,9,NULL,NULL,NULL,'go',NULL,NULL),(28,54,'posts',NULL,NULL,9,NULL,NULL,NULL,'I have a comment',NULL,NULL),(30,NULL,NULL,NULL,NULL,9,NULL,NULL,NULL,NULL,NULL,NULL),(31,NULL,NULL,NULL,NULL,9,NULL,NULL,NULL,NULL,NULL,NULL),(45,55,'posts',NULL,NULL,9,NULL,NULL,NULL,'We want',NULL,NULL),(50,55,'posts',NULL,NULL,9,NULL,NULL,NULL,'nope',NULL,NULL),(51,55,'posts',NULL,NULL,9,NULL,NULL,NULL,'Dialog',NULL,NULL),(52,55,'posts',NULL,NULL,9,NULL,NULL,NULL,'Dialog',NULL,NULL),(53,55,'posts',NULL,NULL,9,NULL,NULL,NULL,'Formula',NULL,NULL),(54,55,'posts',NULL,NULL,12,NULL,'io@spring.io','Spring','Tony P est dans la place,This is an anonymous comment',NULL,NULL);
/*!40000 ALTER TABLE `comments` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `likes`
--

DROP TABLE IF EXISTS `likes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `likes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `item_id` int(11) DEFAULT NULL,
  `item_type` varchar(50) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `profile_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `likes`
--

LOCK TABLES `likes` WRITE;
/*!40000 ALTER TABLE `likes` DISABLE KEYS */;
/*!40000 ALTER TABLE `likes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `list_post_types`
--

DROP TABLE IF EXISTS `list_post_types`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `list_post_types` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime DEFAULT NULL,
  `record_owner` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `list_post_types`
--

LOCK TABLES `list_post_types` WRITE;
/*!40000 ALTER TABLE `list_post_types` DISABLE KEYS */;
/*!40000 ALTER TABLE `list_post_types` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `media_kinds`
--

DROP TABLE IF EXISTS `media_kinds`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `media_kinds` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `media_kinds`
--

LOCK TABLES `media_kinds` WRITE;
/*!40000 ALTER TABLE `media_kinds` DISABLE KEYS */;
INSERT INTO `media_kinds` VALUES (1,'Image'),(2,'Video'),(3,'Audio'),(4,'Other');
/*!40000 ALTER TABLE `media_kinds` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `message_recipients`
--

DROP TABLE IF EXISTS `message_recipients`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `message_recipients` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `message_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `message_recipients`
--

LOCK TABLES `message_recipients` WRITE;
/*!40000 ALTER TABLE `message_recipients` DISABLE KEYS */;
/*!40000 ALTER TABLE `message_recipients` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `messages`
--

DROP TABLE IF EXISTS `messages`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `messages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `message` mediumtext,
  `sender` int(11) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
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
-- Table structure for table `post_categories`
--

DROP TABLE IF EXISTS `post_categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `post_categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `post_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `post_categories`
--

LOCK TABLES `post_categories` WRITE;
/*!40000 ALTER TABLE `post_categories` DISABLE KEYS */;
INSERT INTO `post_categories` VALUES (1,32,1),(2,34,2),(3,34,4),(4,35,2),(5,36,1),(6,36,4),(7,38,1),(8,40,1),(9,40,3),(10,43,1),(11,43,4),(12,44,1),(13,44,2),(14,44,3),(15,45,1),(16,45,2),(17,48,1),(18,48,3),(19,51,1),(20,51,4),(21,51,7),(22,53,3),(23,56,1);
/*!40000 ALTER TABLE `post_categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `post_statuses`
--

DROP TABLE IF EXISTS `post_statuses`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `post_statuses` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `post_statuses`
--

LOCK TABLES `post_statuses` WRITE;
/*!40000 ALTER TABLE `post_statuses` DISABLE KEYS */;
INSERT INTO `post_statuses` VALUES (1,'Draft'),(2,'Published'),(3,'To be published');
/*!40000 ALTER TABLE `post_statuses` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `posts`
--

DROP TABLE IF EXISTS `posts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `posts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(45) NOT NULL,
  `description` varchar(45) DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `content` mediumtext,
  `upload_id` int(11) DEFAULT NULL,
  `type_id` int(11) DEFAULT NULL,
  `profile_id` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `uuid` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `uid_UNIQUE` (`uuid`)
) ENGINE=InnoDB AUTO_INCREMENT=57 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `posts`
--

LOCK TABLES `posts` WRITE;
/*!40000 ALTER TABLE `posts` DISABLE KEYS */;
INSERT INTO `posts` VALUES (10,'Team Work',NULL,16,'2015-10-13 16:44:19','2015-10-13 16:44:19','Lebron James',NULL,NULL,4,NULL,NULL),(11,'New Post with no md',NULL,9,'2015-10-14 13:31:28','2015-10-14 13:31:28','Here goes the post in question',NULL,NULL,4,NULL,NULL),(12,'A dummy Post','Just to start out',16,'2015-10-17 20:59:44','2015-10-17 20:59:44','<p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart. I am alone, and feel the charm of existence in this spot, which was created for the bliss of souls like mine. I am so happy, my dear friend, so absorbed in the exquisite sense of mere tranquil existence, t<span style=\"text-decoration: underline;\">hat I neglect my talents. I should</span> be incapable of drawing a single stroke at the present moment; and yet I feel that I never was a greater artist than now. When, while the lovely valley teems with vapour around me, and the meridi<strong>an sun strikes the upper</strong> surface of the impenetrable foliage of my trees, and but a few stray gleams steal into the inner sanctuary, I throw myself down among the tall grass by the trickling stream; and, as I lie close to the earth, a thousand unknown plants are noticed by me: when I hear the buzz of the little world among the stalks, and grow familiar with the countless indescribable forms of the insects and flies, then I feel the presence of the Almighty, who formed us in his own image, and the breath</p>',NULL,NULL,NULL,NULL,NULL),(13,'Second Dummy Post','A second dummy post',16,'2015-10-17 21:05:51','2015-10-17 21:05:51','<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth. Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar. The Big Oxmox advised her not to do so, because there were thousands of bad Commas, wild Question Marks and devious Semikoli, but the Little Blind Text didn&rsquo;t listen. She packed her seven versalia, put her initial into the belt and made herself on the way. When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrove, the headline of Alphabet Village and the subline of her own road, the Line Lane. Pityful a rethoric question ran over her cheek, then</p>',NULL,NULL,4,NULL,NULL),(14,'Post avec Image','Un post avec une Image',16,'2015-10-17 22:23:59','2015-10-17 22:23:59','<p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces no resultant pleasure? On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee</p>',NULL,NULL,4,NULL,NULL),(15,'First UI Post','Eh bah',16,'2015-10-17 22:34:58','2015-10-17 22:34:58','<p>One morning, when Gregor Samsa woke from troubled dreams, he found himself transformed in his bed into a horrible vermin. He lay on his armour-like back, and if he lifted his head a little he could see his brown belly, slightly domed and divided by arches into stiff sections. The bedding was hardly able to cover it and seemed ready to slide off any moment. His many legs, pitifully thin compared with the size of the rest of him, waved about helplessly as he looked. \"What\'s happened to me?\" he thought. It wasn\'t a dream. His room, a proper human room although a little too small, lay peacefully between its four familiar walls. A collection of textile samples lay spread out on the table - Samsa was a travelling salesman - and above it there hung a picture that he had recently cut out of an illustrated magazine and housed in a nice, gilded frame. It showed a lady fitted out with a fur hat and fur boa who sat upright, raising a heavy fur muff that covered the whole of her lower arm towards the viewer. Gregor then turned to look out the window at the dull weather. Drops</p>',NULL,NULL,4,NULL,NULL),(16,'dw','dwd',16,'2015-10-17 22:41:22','2015-10-17 22:41:22','<p>dwdwdw</p>',NULL,NULL,4,NULL,NULL),(17,'A dummy Post','No matter',16,'2015-10-17 22:43:35','2015-10-17 22:43:35','<p>Check console</p>',NULL,NULL,4,NULL,NULL),(18,'Post with Image v2','This one is gonna work',16,'2015-10-17 22:52:51','2015-10-17 22:52:51','<p>The European languages are members of the same family. Their separate existence is a myth. For science, music, sport, etc, Europe uses the same vocabulary. The languages only differ in their grammar, their pronunciation and their most common words. Everyone realizes why a new common language would be desirable: one could refuse to pay expensive translators. To achieve this, it would be necessary to have uniform grammar, pronunciation and more common words. If several languages coalesce, the grammar of the resulting language is more simple and regular than that of the individual languages. The new common language will be more simple and regular than the existing European languages. It will be as simple as Occidental; in fact, it will be Occidental. To an English person, it will seem like simplified English, as a skeptical Cambridge friend of mine told me what Occidental is.The European languages are members of the same family. Their separate existence is a myth. For science, music, sport, etc, Europe uses the same vocabulary. The languages only differ in their grammar, their pronunciation and their most common words. Everyone realizes why a new common language would be desirable: one could refuse to pay expensive translators. To</p>',NULL,NULL,4,NULL,NULL),(19,'Mignons','How Cute',16,'2015-10-17 23:07:01','2015-10-17 23:07:01','<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna. Sed consequat, leo eget bibendum sodales, augue velit cursus nunc,</p>',NULL,NULL,4,NULL,NULL),(20,'OKC en route','my journey to the championship',20,'2015-10-18 18:16:50','2015-10-18 18:16:50','<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth. Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar. The Big Oxmox advised her not to do so, because there were thousands of bad Commas, wild Question Marks and devious Semikoli, but the Little Blind Text didn&rsquo;t listen. She packed her seven versalia, put her initial into the belt and made herself on the way. When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrove, the headline of Alphabet Village and the subline of her own road, the Line Lane. Pityful a rethoric question ran over her cheek, then she continued her way. On her way she met a copy. The copy warned the Little Blind Text, that where it came from it would have been rewritten a thousand times and everything that was left from its origin would be the word \"and\" and the Little Blind Text should turn around and return to its own, safe country. But nothing the copy said could convince her and so it didn&rsquo;t take long until a few insidious Copy Writers ambushed her, made her drunk with Longe and Parole and dragged her into their agency, where they abused her for their projects again and again. And if she hasn&rsquo;t been rewritten, then they are still using her. Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth. Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar. The Big Oxmox advised her not to do so, because there were thousands of bad Commas, wild Question Marks and devious Semikoli, but the Little Blind Text didn&rsquo;t listen. She packed her seven versalia, put her initial into the belt and made herself on the way. When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrove, the headline of Alphabet Village and the subline of her own road, the Line Lane. Pityful a rethoric question ran over her cheek, then she continued her way. On her way she met a copy. The copy warned the Little Blind Text, that where it came from it would have been rewritten a thousand times and everything that was left from its origin would be the word \"and\" and the Little Blind Text should turn around and return to its own, safe country. But nothing the copy said could convince her and so it didn&rsquo;t take long until a few insidious Copy Writers ambushed her, made her drunk with Longe and Parole and dragged her into their agency, where they abused her for their projects again and again. And if she hasn&rsquo;t been rewritten, then they are still using her. Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth. Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar. The Big Oxmox advised her not to do so, because there were thousands of bad Commas, wild Question Marks and devious Semikoli, but the Little Blind Text didn&rsquo;t listen. She packed her seven versalia, put her initial into the belt and made herself on the way. When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrove, the headline of Alphabet Village and the subline of her own road, the Line Lane. Pityful a rethoric question ran over her cheek, then she continued her way. On her way she met a copy. The copy warned the Little Blind Text, that where it came from it would have been rewritten a thousand times and everything that was left from its origin would be the word \"and\" and the Little Blind Text should turn around and return to its own, safe country. But nothing the copy said could convince her and so it didn&rsquo;t take long until a few insidious Copy Writers ambushed her, made her drunk with Longe and Parole and dragged her into their agency, where they abused her for their projects again and again. And if she hasn&rsquo;t been rewritten, then they are still using her.Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies it with the necessary regelialia. It</p>',NULL,NULL,9,NULL,NULL),(21,'Album Post','Here',20,'2015-11-05 17:05:59','2015-11-05 17:05:59','<p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart. I am alone, and feel the charm of existence in this spot, which was created for the bliss of souls like mine. I am so happy, my dear friend, so absorbed in the exquisite sense of mere tranquil existence, that I neglect my talents. I should be incapable of drawing a single stroke at the present moment; and yet I feel that I never was a greater artist than now. When, while the lovely valley teems with vapour around me, and the meridian sun strikes the upper surface of the impenetrable foliage of my trees, and but a few stray gleams steal into the inner sanctuary, I throw myself down among the tall grass by the trickling stream; and, as I lie close to the earth, a thousand unknown plants are noticed by me: when I hear the buzz of the little world among the stalks, and grow familiar with the countless indescribable forms of the insects and flies, then I feel the presence of the Almighty, who formed us in his own image, and the breath</p>',NULL,NULL,9,2,'12fde53f-7dfa-42c8-8301-65968319a05a'),(22,'Business','As Usual',20,'2015-11-05 17:18:30','2015-11-05 17:18:30','<p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart. I am alone, and feel the charm of existence in this spot, which was created for the bliss of souls like mine. I am so happy, my dear friend, so absorbed in the exquisite sense of mere tranquil existence, that I neglect my talents. I should be incapable of drawing a single stroke at the present moment; and yet I feel that I never was a greater artist than now. When, while the lovely valley teems with vapour around me, and the meridian sun strikes the upper surface of the impenetrable foliage of my trees, and but a few stray gleams steal into the inner sanctuary, I throw myself down among the tall grass by the trickling stream; and, as I lie close to the earth, a thousand unknown plants are noticed by me: when I hear the buzz of the little world among the stalks, and grow familiar with the countless indescribable forms of the insects and flies, then I feel the presence of the Almighty, who formed us in his own image, and the breath</p>',NULL,NULL,9,2,'90f1475d-d389-44d5-93fc-ed6fe9671300'),(23,'Another one','I changed a lot',20,'2015-11-05 17:56:17','2015-11-05 17:56:17','<p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart. I am alone, and feel the charm of existence in this spot, which was created for the bliss of souls like mine. I am so happy, my dear friend, so absorbed in the exquisite sense of mere tranquil existence, that I neglect my talents. I should be incapable of drawing a single stroke at the present moment; and yet I feel that I never was a greater artist than now. When, while the lovely valley teems with vapour around me, and the meridian sun strikes the upper surface of the impenetrable foliage of my trees, and but a few stray gleams steal into the inner sanctuary, I throw myself down among the tall grass by the trickling stream; and, as I lie close to the earth, a thousand unknown plants are noticed by me: when I hear the buzz of the little world among the stalks, and grow familiar with the countless indescribable forms of the insects and flies, then I feel the presence of the Almighty, who formed us in his own image, and the breath</p>',NULL,NULL,9,2,'44f47285-9928-4c75-8f35-a97128e7e263'),(24,'Bleu','Is',20,'2015-11-05 17:58:00','2015-11-05 17:58:00','<p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart. I am alone, and feel the charm of existence in this spot, which was created for the bliss of souls like mine. I am so happy, my dear friend, so absorbed in the exquisite sense of mere tranquil existence, that I neglect my talents. I should be incapable of drawing a single stroke at the present moment; and yet I feel that I never was a greater artist than now. When, while the lovely valley teems with vapour around me, and the meridian sun strikes the upper surface of the impenetrable foliage of my trees, and but a few stray gleams steal into the inner sanctuary, I throw myself down among the tall grass by the trickling stream; and, as I lie close to the earth, a thousand unknown plants are noticed by me: when I hear the buzz of the little world among the stalks, and grow familiar with the countless indescribable forms of the insects and flies, then I feel the presence of the Almighty, who formed us in his own image, and the breath</p>',NULL,NULL,9,2,'3fb13d7a-33d1-4110-a18e-e5ca59f955d7'),(25,'Let a n','try me ',20,'2015-11-05 20:47:42','2015-11-05 20:47:42','<p>Imma pot a</p>',NULL,NULL,9,2,'f1fb5b31-e9e0-4683-8b20-a92c1d954354'),(26,'xaxax','xaxa',20,'2015-11-05 21:13:19','2015-11-05 21:13:19','<p>xaxaxa</p>',NULL,NULL,9,2,'8a774124-ebd1-4365-b44c-7023ef471757'),(27,'I am','Heree',20,'2015-11-05 21:21:18','2015-11-05 21:21:18','<p>Alicia Keys</p>',NULL,NULL,9,2,'681203fa-495d-4da8-bbd0-a5d4455f4458'),(28,'We','are',20,'2015-11-05 21:24:11','2015-11-05 21:24:11','<p>here</p>',NULL,NULL,9,2,'7491243c-52b2-4d3f-892b-d808a4226698'),(29,'Album Post','Aucun line',20,'2015-11-05 22:13:52','2015-11-05 22:13:52','<p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart. I am alone, and feel the charm of existence in this spot, which was created for the bliss of souls like mine. I am so happy, my dear friend, so absorbed in the exquisite sense of mere tranquil existence, that I neglect my talents. I should be incapable of drawing a single stroke at the present moment; and yet I feel that I never was a greater artist than now. When, while the lovely valley teems with vapour around me, and the meridian sun strikes the upper surface of the impenetrable foliage of my trees, and but a few stray gleams steal into the inner sanctuary, I throw myself down among the tall grass by the trickling stream; and, as I lie close to the earth, a thousand unknown plants are noticed by me: when I hear the buzz of the little world among the stalks, and grow familiar with the countless indescribable forms of the insects and flies, then I feel the presence of the Almighty, who formed us in his own image, and the breath</p>',NULL,NULL,9,2,'37ce393c-2044-411a-a5a7-e4a423801329'),(30,'Une recrue','Intention',20,'2015-11-05 22:18:11','2015-11-05 22:18:11','<p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally</p>',NULL,NULL,9,2,'7edf64b2-0d26-4a8c-92a8-e22985b4b055'),(31,'Ola','We dem boyz',20,'2015-11-05 22:20:47','2015-11-05 22:20:47','<p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally</p>',NULL,NULL,9,2,'f6fb6c02-1c66-4820-8daa-2b5df7e3d63b'),(32,'Dummy Integer','No comments',20,'2015-11-06 15:53:12','2015-11-06 15:53:12','<p>Another dummy Post here to see what happens as we go</p>',NULL,NULL,9,2,'5be42d04-1997-4645-b0be-73d531bd486e'),(33,'My awesome post','I am making a post',20,'2015-11-06 15:54:52','2015-11-06 15:54:52','<p>A new awesome post goes on here as prepared.</p>',NULL,NULL,9,2,'09da3669-18b1-4a4b-8928-5eb27a6444a3'),(34,'Several Categories','Here are some more',20,'2015-11-06 16:23:27','2015-11-06 16:23:27','<p>Li Europan lingues es membres del sam familie. Lor separat existentie es un myth. Por scientie, musica, sport etc, litot Europa usa li sam vocabular. Li lingues differe solmen in li grammatica, li pronunciation e li plu commun vocabules. Omnicos directe al desirabilite de un nov lingua franca: On refusa continuar payar custosi traductores. At solmen va esser necessi far uniform grammatica, pronunciation e plu sommun paroles. Ma quande lingues coalesce, li grammatica del resultant lingue es plu simplic e regulari quam ti del coalescent lingues. Li nov lingua franca va esser plu simplic e regulari quam li existent Europan</p>',NULL,NULL,9,2,'213523bb-2808-42d0-8e01-b6d4eee6b02e'),(35,'The new Face of Network Media','A small description of nowadays social media',23,'2015-11-07 11:56:07','2015-11-07 11:56:07','<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth. Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to</p>',NULL,NULL,12,2,'0cf29bed-741e-4594-814c-747b6f847fdc'),(36,'Checking the new images path','',20,'2015-11-07 12:32:01','2015-11-07 12:32:01','<p>I am gonna upload two more images. Here we go</p>',NULL,NULL,9,2,'5214f815-9d0a-40ac-86be-31523f5f098d'),(37,'Singing','Ella Henderson',20,'2015-11-07 13:34:36','2015-11-07 13:34:36','<p>Sigma and glitterball best song ever</p>',NULL,NULL,9,2,'c6702fb6-f7e0-4cae-980a-b2850542154a'),(38,'Mignons','Where they at though',20,'2015-11-08 18:28:48','2015-11-08 18:28:48','<p>Where they at though</p>\r\n<div id=\"home-1\" class=\"tab-pane active\">\r\n<p>Vivamus imperdiet condimentum diam, eget placerat felis consectetur id. Donec eget orci metus, ac ac adipiscing nunc.</p>\r\n<p>Pellentesque fermentum, ante ac felis consectetur id. Donec eget orci metusvivamus imperdiet.</p>\r\n</div>',NULL,NULL,9,2,'23bc7ec5-5f1d-4df2-a0de-5d176577e8df'),(39,'Tony and me','',20,'2015-11-08 18:46:12','2015-11-08 18:46:12','<p>Li Europan lingues es membres del sam familie. Lor separat existentie es un myth. Por scientie, musica, sport etc, litot Europa usa li sam vocabular. Li lingues differe solmen in li grammatica, li pronunciation e li plu commun vocabules. Omnicos directe al desirabilite de un nov lingua franca: On refusa continuar payar custosi traductores. At solmen va esser necessi far uniform grammatica, pronunciation e plu sommun paroles. Ma quande lingues coalesce, li grammatica del resultant lingue es plu simplic e regulari quam ti del coalescent lingues. Li nov lingua franca va esser plu simplic e regulari quam li existent Europan</p>',NULL,NULL,9,2,'2cd36c80-ab4a-492b-b64e-e42e9d493c25'),(40,'Two from each category','',20,'2015-11-08 18:47:42','2015-11-08 18:47:42','<p>Li Europan lingues es membres del sam familie. Lor separat existentie es un myth. Por scientie, musica, sport etc, litot Europa usa li sam vocabular. Li lingues differe solmen in li grammatica, li pronunciation e li plu commun vocabules. Omnicos directe al desirabilite de un nov lingua franca: On refusa continuar payar custosi traductores. At solmen va esser necessi far uniform grammatica, pronunciation e plu sommun paroles. Ma quande lingues coalesce, li grammatica del resultant lingue es plu simplic e regulari quam ti del coalescent lingues. Li nov lingua franca va esser plu simplic e regulari quam li existent Europan</p>',NULL,NULL,9,2,'0b5337d0-95cf-418a-9b0c-1daa4056b7aa'),(43,'Is this love','Bob marley song',20,'2015-12-11 14:48:50','2015-12-11 14:48:50','<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna. Sed consequat, leo eget bibendum sodales, augue velit cursus nunc,</p>',NULL,NULL,9,2,'f5ed94ac-186c-4a1c-83ed-5db51ff76ed9'),(52,'Refactor IV','',20,'2015-12-11 16:12:19','2015-12-11 16:12:19','<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth. Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar. The Big Oxmox advised her not to do so, because there were thousands of bad Commas, wild Question Marks and devious Semikoli, but the Little Blind Text didn&rsquo;t listen. She packed her seven versalia, put her initial into the belt and made herself on the way. When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrove, the headline of Alphabet Village and the subline of her own road, the Line Lane. Pityful a rethoric question ran over her cheek, then</p>',NULL,NULL,9,2,'3d0548fd-0963-43ca-9a8d-e6a22fc8239d'),(53,'Ultimate','',20,'2015-12-11 16:14:54','2015-12-11 16:14:54','<p>The quick, brown fox jumps over a lazy dog. DJs flock by when MTV ax quiz prog. Junk MTV quiz graced by fox whelps. Bawds jog, flick quartz, vex nymphs. Waltz, bad nymph, for quick jigs vex! Fox nymphs grab quick-jived waltz. Brick quiz whangs jumpy veldt fox. Bright vixens jump; dozy fowl quack. Quick wafting zephyrs vex bold Jim. Quick zephyrs blow, vexing daft Jim. Sex-charged fop blew my junk TV quiz. How quickly daft jumping zebras vex. Two driven jocks help fax my big quiz. Quick, Baz, get my woven flax jodhpurs! \"Now fax quiz Jack!\" my brave ghost pled. Five quacking zephyrs jolt my wax bed. Flummoxed by job, kvetching W. zaps Iraq. Cozy sphinx waves quart jug of bad milk. A very bad quack might jinx zippy fowls. Few quips galvanized the mock jury box. Quick brown dogs jump over the lazy fox. The jay, pig, fox, zebra, and my wolves quack! Blowzy red vixens fight for a quick jump. Joaquin Phoenix was gazed by MTV for luck. A wizard&rsquo;s job is to vex chumps quickly in fog. Watch \"Jeopardy!\", Alex Trebek\'s fun TV quiz game. Woven silk pyjamas exchanged for blue quartz. Brawny gods just</p>',NULL,NULL,9,2,'115f2075-347a-4b1e-b6de-b9f493c32754'),(54,'Kafa','',20,'2015-12-11 16:27:22','2015-12-11 16:27:22','<p>One morning, when Gregor Samsa woke from troubled dreams, he found himself transformed in his bed into a horrible vermin. He lay on his armour-like back, and if he lifted his head a little he could see his brown belly, slightly domed and divided by arches into stiff sections. The bedding was hardly able to cover it and seemed ready to slide off any moment. His many legs, pitifully thin compared with the size of the rest of him, waved about helplessly as he looked. \"What\'s happened to me?\" he thought. It wasn\'t a dream. His room, a proper human room although a little too small, lay peacefully between its four familiar walls. A collection of textile samples lay spread out on the table - Samsa was a travelling salesman - and above it there hung a picture that he had recently cut out of an illustrated magazine and housed in a nice, gilded frame. It showed a lady fitted out with a fur hat and fur boa who sat upright, raising a heavy fur muff that covered the whole of her lower arm towards the viewer. Gregor then turned to look out the window at the dull weather. Drops</p>',NULL,NULL,9,2,'4c2a8166-4ee9-48af-b6f0-a6af9dacedd8'),(55,'Line','post',20,'2015-12-16 14:54:52','2015-12-16 14:54:52','<p>A one line post</p>',NULL,NULL,9,2,'cdac6c14-51b3-4f41-838f-e62e635fd7b2'),(56,'No Image Post','No image post',20,'2015-01-01 22:31:32','2015-01-01 22:31:32','<p>Here comes the content of this post</p>',NULL,NULL,9,2,'d2188f2a-e02e-4ec4-a914-329a34d4a546');
/*!40000 ALTER TABLE `posts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `profile_configurations`
--

DROP TABLE IF EXISTS `profile_configurations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `profile_configurations` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `profile_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `profile_configurations`
--

LOCK TABLES `profile_configurations` WRITE;
/*!40000 ALTER TABLE `profile_configurations` DISABLE KEYS */;
/*!40000 ALTER TABLE `profile_configurations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `profile_friends`
--

DROP TABLE IF EXISTS `profile_friends`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `profile_friends` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `profile_id` int(11) NOT NULL,
  `friend_id` int(11) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `initiator` int(11) DEFAULT NULL,
  `accepted` int(1) DEFAULT '1',
  `request_sent_on` datetime DEFAULT NULL,
  `request_accepted_on` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `profile_friends`
--

LOCK TABLES `profile_friends` WRITE;
/*!40000 ALTER TABLE `profile_friends` DISABLE KEYS */;
INSERT INTO `profile_friends` VALUES (1,3,1,'2015-10-09 16:05:50','2015-10-09 16:05:50',3,1,'2015-10-09 16:05:50','2015-10-09 16:05:50'),(2,3,2,'2015-10-09 16:05:50','2015-10-09 16:05:50',3,1,'2015-10-09 16:05:50','2015-10-09 16:05:50'),(10,5,4,NULL,NULL,NULL,1,NULL,NULL),(11,4,5,NULL,NULL,NULL,1,NULL,NULL);
/*!40000 ALTER TABLE `profile_friends` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `profile_types`
--

DROP TABLE IF EXISTS `profile_types`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `profile_types` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `record_owner` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `profile_types`
--

LOCK TABLES `profile_types` WRITE;
/*!40000 ALTER TABLE `profile_types` DISABLE KEYS */;
INSERT INTO `profile_types` VALUES (1,'user',NULL,NULL,NULL);
/*!40000 ALTER TABLE `profile_types` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `profiles`
--

DROP TABLE IF EXISTS `profiles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `profiles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `profile_type_id` int(11) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `description` mediumtext,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `profiles`
--

LOCK TABLES `profiles` WRITE;
/*!40000 ALTER TABLE `profiles` DISABLE KEYS */;
INSERT INTO `profiles` VALUES (1,14,NULL,NULL,1,'dummy',NULL),(2,15,'2015-10-09 16:05:50','2015-10-09 16:05:50',1,'dummy',NULL),(4,16,'2015-10-13 10:13:25','2015-10-13 10:13:25',1,'dummy',NULL),(8,19,'2015-10-18 16:21:44','2015-10-18 16:21:44',1,'kobe',NULL),(9,20,'2015-10-18 16:24:17','2015-10-18 16:24:17',1,'kevin',NULL),(10,21,'2015-11-06 21:26:48','2015-11-06 21:26:48',1,'steph',NULL),(11,22,'2015-11-06 23:19:07','2015-11-06 23:19:07',1,'james',NULL),(12,23,'2015-11-06 23:35:18','2015-11-06 23:35:18',1,'tony',NULL),(13,12,NULL,NULL,1,'admin',NULL);
/*!40000 ALTER TABLE `profiles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `roles`
--

DROP TABLE IF EXISTS `roles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `roles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `record_owner` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `roles`
--

LOCK TABLES `roles` WRITE;
/*!40000 ALTER TABLE `roles` DISABLE KEYS */;
INSERT INTO `roles` VALUES (1,'ROLE_ADMIN',NULL,NULL,1),(2,'ROLE_MODERATOR',NULL,NULL,1),(3,'ROLE_DBADMIN',NULL,NULL,1),(4,'ROLE_USER',NULL,NULL,1);
/*!40000 ALTER TABLE `roles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tags`
--

DROP TABLE IF EXISTS `tags`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tags` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `item_id` int(11) NOT NULL,
  `item_type` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tags`
--

LOCK TABLES `tags` WRITE;
/*!40000 ALTER TABLE `tags` DISABLE KEYS */;
/*!40000 ALTER TABLE `tags` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `uploads`
--

DROP TABLE IF EXISTS `uploads`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `uploads` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(45) DEFAULT NULL,
  `description` text,
  `filename` varchar(255) DEFAULT NULL,
  `filesize` int(11) DEFAULT '0',
  `filemine` varchar(45) DEFAULT 'text/plain',
  `link_table` varchar(255) DEFAULT NULL,
  `link_id` int(11) DEFAULT NULL,
  `record_owner` int(11) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `path` varchar(255) DEFAULT NULL,
  `file_identificator` varchar(45) DEFAULT NULL,
  `position` int(11) DEFAULT NULL,
  `type` int(11) DEFAULT NULL,
  `uuid` varchar(45) DEFAULT NULL,
  `album_id` int(11) DEFAULT NULL,
  `display` int(1) DEFAULT '1',
  `url` varchar(255) DEFAULT NULL,
  `profile_id` int(11) DEFAULT NULL,
  `keyIdentification` varchar(45) DEFAULT NULL,
  `altText` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1212 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `uploads`
--

LOCK TABLES `uploads` WRITE;
/*!40000 ALTER TABLE `uploads` DISABLE KEYS */;
INSERT INTO `uploads` VALUES (1112,NULL,NULL,'passport.jpg',117991,'image/jpeg','profilePicture',4,NULL,NULL,NULL,'mignon.png',NULL,NULL,NULL,NULL,NULL,1,NULL,NULL,NULL,NULL),(1113,NULL,NULL,'mignon.png',395011,'image/png','postImage',NULL,NULL,NULL,NULL,'mignon.png',NULL,NULL,NULL,NULL,NULL,1,NULL,NULL,NULL,NULL),(1114,NULL,NULL,'mignon.png',395011,'image/png','postImage',NULL,NULL,NULL,NULL,'mignon.png',NULL,NULL,NULL,NULL,NULL,1,NULL,NULL,NULL,NULL),(1115,NULL,NULL,'mignon.png',395011,'image/png','postImage',NULL,NULL,NULL,NULL,'mignon.png',NULL,NULL,NULL,NULL,NULL,1,NULL,NULL,NULL,NULL),(1120,NULL,NULL,'1profile.jpg',461693,'image/jpeg','profilePicture',9,NULL,NULL,'2015-11-07 15:01:19','profiles/9/avatar/1446904878965/1profile.jpg',NULL,NULL,NULL,NULL,NULL,1,NULL,NULL,'7b56bcb0-cc7c-49e0-a8fe-f49b7c0375d7','profilePicture'),(1121,NULL,NULL,'1.jpg',336712,'image/jpeg','postImage',20,NULL,NULL,NULL,'stateless/image/1.jpg',NULL,NULL,NULL,NULL,NULL,1,NULL,NULL,NULL,NULL),(1122,NULL,NULL,'#2.png',114605,'image/png','postImage',NULL,NULL,NULL,NULL,'stateless/image/#2.png',NULL,NULL,NULL,'0d5de1fb-c0ae-428b-b4d3-27140af94bfc',NULL,1,NULL,NULL,NULL,NULL),(1123,NULL,NULL,'#2.png',114605,'image/png','postImage',NULL,NULL,NULL,NULL,'stateless/image/#2.png',NULL,NULL,NULL,'800a09d4-ea79-4d6f-a63c-b7c1b2995d8a',NULL,1,NULL,NULL,NULL,NULL),(1124,NULL,NULL,'hot',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,2,'61668a1c-642e-47c8-84b1-3069afb732c4',NULL,0,'http://www.elevysi.com',9,NULL,NULL),(1143,NULL,NULL,'https://getimage.com',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,1,'d443c7a8-a59a-44df-a183-3a0b8e0066a5',NULL,0,'https://getimage.com',NULL,NULL,NULL),(1144,NULL,NULL,'http://www.elevysi.com',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,1,'d443c7a8-a59a-44df-a183-3a0b8e0066a5',NULL,0,'http://www.elevysi.com',NULL,NULL,NULL),(1145,NULL,NULL,'http://www.tomcatexpert.com/blog/feed',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,1,'d443c7a8-a59a-44df-a183-3a0b8e0066a5',NULL,0,'http://www.tomcatexpert.com/blog/feed',NULL,NULL,NULL),(1146,NULL,NULL,'www.lessentiel.lu',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,1,'d443c7a8-a59a-44df-a183-3a0b8e0066a5',NULL,0,'www.lessentiel.lu',NULL,NULL,NULL),(1147,NULL,NULL,'http://www.elevysi.com',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,1,'d443c7a8-a59a-44df-a183-3a0b8e0066a5',NULL,0,'http://www.elevysi.com',9,NULL,NULL),(1148,NULL,NULL,'http://anotherone.rule.com',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,1,'d443c7a8-a59a-44df-a183-3a0b8e0066a5',NULL,0,'http://anotherone.rule.com',9,NULL,NULL),(1149,NULL,NULL,'1.jpg',336712,'image/jpeg','postImage',NULL,NULL,NULL,NULL,'stateless/image/1.jpg',NULL,NULL,NULL,'d443c7a8-a59a-44df-a183-3a0b8e0066a5',NULL,0,NULL,NULL,NULL,NULL),(1150,NULL,NULL,'#2.png',114605,'image/png','postImage',NULL,NULL,NULL,NULL,'stateless/image/#2.png',NULL,NULL,NULL,'d443c7a8-a59a-44df-a183-3a0b8e0066a5',NULL,0,NULL,9,NULL,NULL),(1151,NULL,NULL,'1.jpg',336712,'image/jpeg','postImage',NULL,NULL,NULL,NULL,'stateless/image/1.jpg',NULL,NULL,NULL,'d443c7a8-a59a-44df-a183-3a0b8e0066a5',NULL,0,NULL,9,NULL,NULL),(1177,NULL,NULL,'3.jpg',217196,'image/jpeg','profilePicture',10,NULL,NULL,NULL,'profiles/10/avatar/3.jpg',NULL,NULL,NULL,NULL,NULL,0,NULL,NULL,'544fdc1e-262d-4df4-99d6-613de222b324',NULL),(1178,NULL,NULL,'3.jpg',217196,'image/jpeg',NULL,NULL,NULL,NULL,NULL,'/Users/elvishatungimana/Desktop/3.jpg',NULL,NULL,NULL,NULL,NULL,1,NULL,NULL,'0917bcc4-093a-4834-bc3f-753fa19339bc',NULL),(1179,NULL,NULL,'3.jpg',217196,'image/jpeg','profilePicture',12,NULL,NULL,NULL,'profiles/12/avatar/3.jpg',NULL,NULL,NULL,NULL,NULL,0,NULL,NULL,'8f773430-d85c-463e-aaf1-ad0631958fba',NULL),(1180,NULL,NULL,'1.jpg',336712,'image/jpeg','postImage',NULL,NULL,NULL,NULL,'stateless/image/1.jpg',NULL,NULL,NULL,'0cf29bed-741e-4594-814c-747b6f847fdc',10,1,NULL,12,'bd3744ff-55dc-4bf0-ab4c-98186cc4cba0',NULL),(1181,NULL,NULL,'12.jpg',443738,'image/jpeg','postImage',NULL,NULL,NULL,NULL,'stateless/image/12.jpg',NULL,NULL,NULL,'0cf29bed-741e-4594-814c-747b6f847fdc',10,1,NULL,12,'0825273d-39bc-4846-9c0d-efcb54875b6e',NULL),(1182,NULL,NULL,'12.jpg',443738,'image/jpeg','postImage',NULL,NULL,NULL,'2015-11-08 18:47:32','posts/5214f815-9d0a-40ac-86be-31523f5f098d/image/1446895896679/12.jpg',NULL,NULL,NULL,'0b5337d0-95cf-418a-9b0c-1daa4056b7aa',14,1,NULL,9,'7ab70248-816d-4c79-b170-c15bdc4fe5c7',NULL),(1183,NULL,NULL,'1profile.jpg',461693,'image/jpeg','postImage',NULL,NULL,NULL,'2015-12-11 15:03:33','posts/5214f815-9d0a-40ac-86be-31523f5f098d/image/1446895911335/1profile.jpg',NULL,NULL,NULL,'f7449e8b-7aa3-4ffe-aa1d-bac2138b04fc',11,1,NULL,9,'45919cda-bf88-4398-a752-11017146ee15',NULL),(1184,NULL,NULL,'1.jpg',336712,'image/jpeg','postImage',NULL,NULL,NULL,'2015-12-11 15:03:34','posts/c6702fb6-f7e0-4cae-980a-b2850542154a/image/1446899483168/1.jpg',NULL,NULL,NULL,'f7449e8b-7aa3-4ffe-aa1d-bac2138b04fc',12,1,NULL,9,'1837b173-4684-4d3c-ba23-dc982b897066',NULL),(1185,NULL,NULL,'12.jpg',443738,'image/jpeg','postImage',NULL,NULL,NULL,NULL,'posts/c6702fb6-f7e0-4cae-980a-b2850542154a/image/1446899637635/12.jpg',NULL,NULL,NULL,'c6702fb6-f7e0-4cae-980a-b2850542154a',12,1,NULL,9,'0753f03f-4697-4548-886d-59f8f350f9fc',NULL),(1186,NULL,NULL,'2.png',114605,'image/png','postImage',38,NULL,'2015-11-08 18:27:06','2015-11-08 18:28:14','posts/23bc7ec5-5f1d-4df2-a0de-5d176577e8df/image/1447003626455/2.png',NULL,NULL,NULL,'23bc7ec5-5f1d-4df2-a0de-5d176577e8df',NULL,1,NULL,9,'ba4433cf-1265-4f20-8fcd-c344a6ce0207',NULL),(1187,NULL,NULL,'1profile.jpg',461693,'image/jpeg','postImage',NULL,NULL,'2015-11-08 18:43:54','2015-11-08 18:45:34','posts/79e74cc0-d1a5-4699-b74e-7a29965ed67e/image/1447004634468/1profile.jpg',NULL,NULL,NULL,'2cd36c80-ab4a-492b-b64e-e42e9d493c25',13,1,NULL,9,'e87af256-d4eb-4ea8-8e99-cadd00781c7d',NULL),(1188,NULL,NULL,'3.jpg',217196,'image/jpeg','postImage',NULL,NULL,'2015-11-08 18:45:17','2015-11-08 18:47:32','posts/2cd36c80-ab4a-492b-b64e-e42e9d493c25/image/1447004717375/3.jpg',NULL,NULL,NULL,'0b5337d0-95cf-418a-9b0c-1daa4056b7aa',14,1,NULL,9,'2a8f44de-8337-44ce-a298-be88f018aac3',NULL),(1189,NULL,NULL,'1.jpg',336712,'image/jpeg','postImage',NULL,NULL,'2015-11-08 18:47:02','2015-11-08 18:47:32','posts/0b5337d0-95cf-418a-9b0c-1daa4056b7aa/image/1447004822315/1.jpg',NULL,NULL,NULL,'0b5337d0-95cf-418a-9b0c-1daa4056b7aa',14,1,NULL,9,'7cd8dd19-270a-44d8-876f-704ff94b1355',NULL),(1190,NULL,NULL,'1profile.jpg',461693,'image/jpeg','postImage',NULL,NULL,'2015-11-08 18:47:13','2015-12-11 15:05:35','posts/0b5337d0-95cf-418a-9b0c-1daa4056b7aa/image/1447004833555/1profile.jpg',NULL,NULL,NULL,'c51693c0-7b90-4312-825b-6a86f22b6039',14,1,NULL,9,'edad8ec5-e81c-4e30-9d57-d04122a8de2a',NULL),(1191,NULL,NULL,'1.jpg',336712,'image/jpeg','postImage',NULL,NULL,'2015-12-11 14:35:35','2015-12-11 15:05:35','posts/dc90f0f7-dc95-45ad-a252-b1f16013ecd5/image/1449840935161/1.jpg',NULL,NULL,NULL,'c51693c0-7b90-4312-825b-6a86f22b6039',NULL,1,NULL,9,'b55f228c-66b9-4e2a-b620-9c574f31eaf9',NULL),(1192,NULL,NULL,'1.jpg',336712,'image/jpeg','postImage',44,NULL,'2015-12-11 14:50:04','2015-12-11 15:05:14','posts/374dd7d9-8b8f-4e66-89a5-72fec3d204a0/image/1449841804716/1.jpg',NULL,NULL,NULL,'64e8d1f4-da73-4f65-bcea-4245c84a64ea',NULL,1,NULL,9,'beddbadf-2ea4-4ed1-93b4-acee7fdc4baa',NULL),(1193,NULL,NULL,'12.jpg',443738,'image/jpeg','postImage',NULL,NULL,'2015-12-11 14:51:25','2015-12-11 15:05:14','posts/9936052b-1325-4b5c-924a-7d9cc1844d72/image/1449841885036/12.jpg',NULL,NULL,NULL,'64e8d1f4-da73-4f65-bcea-4245c84a64ea',NULL,1,NULL,9,'4db06626-74cc-4475-8158-7efe6ce30489',NULL),(1194,NULL,NULL,'1.jpg',336712,'image/jpeg','postImage',NULL,NULL,'2015-12-11 14:51:31','2015-12-11 14:51:37','posts/9936052b-1325-4b5c-924a-7d9cc1844d72/image/1449841891145/1.jpg',NULL,NULL,NULL,'9936052b-1325-4b5c-924a-7d9cc1844d72',NULL,1,NULL,9,'80869acb-b018-411c-8e49-44645e121802',NULL),(1195,NULL,NULL,'1.jpg',336712,'image/jpeg','postImage',NULL,NULL,'2015-12-11 14:53:09','2015-12-11 14:53:29','posts/84013c95-da47-45e8-826f-f89611ee2954/image/1449841989456/1.jpg',NULL,NULL,NULL,'84013c95-da47-45e8-826f-f89611ee2954',NULL,1,NULL,9,'11e837aa-4fec-45f2-9b4a-b3e7c813f109',NULL),(1196,NULL,NULL,'1profile.jpg',461693,'image/jpeg','postImage',NULL,NULL,'2015-12-11 14:53:24','2015-12-11 14:53:29','posts/84013c95-da47-45e8-826f-f89611ee2954/image/1449842004012/1profile.jpg',NULL,NULL,NULL,'84013c95-da47-45e8-826f-f89611ee2954',NULL,1,NULL,9,'c93ed6f2-5c66-4685-95f9-f478de19003d',NULL),(1197,NULL,NULL,'1profile.jpg',461693,'image/jpeg','postImage',NULL,NULL,'2015-12-11 15:04:31','2015-12-11 15:04:42','posts/ab3145f5-d5db-4f59-990e-1480702b1246/image/1449842671485/1profile.jpg',NULL,NULL,NULL,'ab3145f5-d5db-4f59-990e-1480702b1246',NULL,1,NULL,9,'9f55e21d-02a8-466e-b2e2-1309683353c7',NULL),(1198,NULL,NULL,'1.jpg',336712,'image/jpeg','postImage',NULL,NULL,'2015-12-11 15:04:37','2015-12-11 15:04:42','posts/ab3145f5-d5db-4f59-990e-1480702b1246/image/1449842677492/1.jpg',NULL,NULL,NULL,'ab3145f5-d5db-4f59-990e-1480702b1246',NULL,1,NULL,9,'8f524818-1945-4e5c-b026-a29c254d89cd',NULL),(1199,NULL,NULL,'1profile.jpg',461693,'image/jpeg','postImage',NULL,NULL,'2015-12-11 15:23:43','2015-12-11 15:23:43','posts/5214f815-9d0a-40ac-86be-31523f5f098d/image/1446895911335/1profile.jpg',NULL,NULL,NULL,'89f8deeb-4707-4d4d-96a3-574367507c9f',11,1,NULL,9,'45919cda-bz88-4398-a752-11017146ee15',NULL),(1207,NULL,NULL,'1.jpg',336712,'image/jpeg','postImage',52,NULL,'2015-12-11 16:12:02','2015-12-11 16:12:02','posts/0b5337d0-95cf-418a-9b0c-1daa4056b7aa/image/1447004822315/1.jpg',NULL,NULL,NULL,'3d0548fd-0963-43ca-9a8d-e6a22fc8239d',22,1,NULL,9,'a698cf17-96a2-4488-8bfd-58edd8ccd3cb',NULL),(1208,NULL,NULL,'1profile.jpg',461693,'image/jpeg','postImage',NULL,NULL,'2015-12-11 16:12:02','2015-12-11 16:12:02','posts/0b5337d0-95cf-418a-9b0c-1daa4056b7aa/image/1447004833555/1profile.jpg',NULL,NULL,NULL,'3d0548fd-0963-43ca-9a8d-e6a22fc8239d',22,1,NULL,9,'c527ea6b-b59a-473b-bd61-50f0f27b3aa7',NULL),(1209,NULL,NULL,'12.jpg',443738,'image/jpeg','postImage',53,NULL,'2015-12-11 16:14:38','2015-12-11 16:14:44','posts/115f2075-347a-4b1e-b6de-b9f493c32754/image/1449846878898/12.jpg',NULL,NULL,NULL,'115f2075-347a-4b1e-b6de-b9f493c32754',NULL,1,NULL,9,'2466fe4d-efe4-4cde-bf69-84dd440e53e6',NULL),(1210,NULL,NULL,'1profile.jpg',461693,'image/jpeg','postImage',54,NULL,'2015-12-11 16:27:11','2015-12-11 16:27:11','posts/79e74cc0-d1a5-4699-b74e-7a29965ed67e/image/1447004634468/1profile.jpg',NULL,NULL,NULL,'4c2a8166-4ee9-48af-b6f0-a6af9dacedd8',23,1,NULL,9,'9c71637c-f528-49b9-9ecb-37885dffad6b',NULL),(1211,NULL,NULL,'3.jpg',217196,'image/jpeg','postImage',NULL,NULL,'2015-12-11 16:27:11','2015-12-11 16:27:11','posts/2cd36c80-ab4a-492b-b64e-e42e9d493c25/image/1447004717375/3.jpg',NULL,NULL,NULL,'4c2a8166-4ee9-48af-b6f0-a6af9dacedd8',23,1,NULL,9,'6a034ac5-fd5f-4de3-9964-be2f4a98bc0b',NULL);
/*!40000 ALTER TABLE `uploads` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `uploads_items`
--

DROP TABLE IF EXISTS `uploads_items`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `uploads_items` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `upload_id` int(11) NOT NULL,
  `link_id` int(11) NOT NULL,
  `link_table` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `uploads_items`
--

LOCK TABLES `uploads_items` WRITE;
/*!40000 ALTER TABLE `uploads_items` DISABLE KEYS */;
/*!40000 ALTER TABLE `uploads_items` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `active` int(1) NOT NULL DEFAULT '1',
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `record_owner` int(11) DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL,
  `town` varchar(255) DEFAULT NULL,
  `street` varchar(255) DEFAULT NULL,
  `postal_code` varchar(255) DEFAULT NULL,
  `phone_number` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (10,'Jane','Doe','jane','$2a$10$j6jJeXCYduoTXebq01LbeOitOOqWtGi35jRexRN.MpGiyMYdiib8K','jane@email.com',1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(12,'Elvis','Hatungimana','admin','$2a$10$/uXRPfSZaAERLx5aUHota.fUpgSsus6cbzAJyrl9Y2MK677PyQWci','admin@elevysi.com',1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(14,'John','Boss','john','$2a$10$yowWGLSDERIJmoQ90XKNCOfvo1eEIsBRYMEhiIWqGX3.1kZFmkZ86','john@elevysi.com',1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(15,'Jean','News','jean','$2a$10$MKHQTktR5gkk2i3cabA57O0pZAn8HdMaWMx422Lf/1CnPnbGy7kd6','news@elevysi.com',1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(16,'Lebron','James','lebron','$2a$10$OnOrzDvIR6W2FUWxhLoZJ.K31XEXLZSTz3FCQNS1hfX/F4QouZ5uu','lebron@cavaliers.com',1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(19,'Kobe','Bryant','kobe','$2a$10$pUmlqHbWs966.FG3dtkvvOyFCc6v9a0s.EmGIE37vM.wqNI4Qk7Ha','kobe@lakers.com',1,'2015-10-18 16:21:44','2015-10-18 16:21:44',NULL,NULL,NULL,NULL,NULL,NULL),(20,'Kevin','Durant','kevin','$2a$10$Qzd1BtwfAW8TDE9ovfheqO0Pu41GYI3g71hlPtDbJC.31NHN33qta','kevin@okc.com',1,'2015-10-18 16:24:17','2015-10-18 16:24:17',NULL,NULL,NULL,NULL,NULL,NULL),(21,'Steph','Curry','steph','$2a$10$2sI2UW8/1WebQh8MEgkjkOajksLauREMMBwoYryRGuJAnMDBvJ536','steph@warrioirs.com',1,'2015-11-06 21:26:48','2015-11-06 21:26:48',NULL,NULL,NULL,NULL,NULL,NULL),(22,'James','Harden','james','$2a$10$IQf1SqC1ScYk/rgSaQbHOuHbs1xdszQph9KvWByybxh8mDklaisWq','harden@houston.com',1,'2015-11-06 23:19:07','2015-11-06 23:19:07',NULL,NULL,NULL,NULL,NULL,NULL),(23,'Tony','Parker','tony','$2a$10$9VgmIS.VW97gdCv3ERHhLO9QI2ZCufQmKAN6FH.m013ssNh2jZg4y','parker@spurs.com',1,'2015-11-06 23:35:18','2015-11-06 23:35:18',NULL,NULL,NULL,NULL,NULL,NULL);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users_roles`
--

DROP TABLE IF EXISTS `users_roles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users_roles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `role_id` varchar(45) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `record_owner` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users_roles`
--

LOCK TABLES `users_roles` WRITE;
/*!40000 ALTER TABLE `users_roles` DISABLE KEYS */;
INSERT INTO `users_roles` VALUES (2,9,'4',NULL,NULL,NULL),(3,10,'4',NULL,NULL,NULL),(5,12,'1',NULL,NULL,NULL),(6,14,'4',NULL,NULL,NULL),(7,15,'4',NULL,NULL,NULL),(8,16,'4',NULL,NULL,NULL),(9,17,'4',NULL,NULL,NULL),(10,18,'4',NULL,NULL,NULL),(11,19,'4',NULL,NULL,NULL),(12,20,'4',NULL,NULL,NULL),(13,21,'4',NULL,NULL,NULL),(14,22,'4',NULL,NULL,NULL),(15,23,'4',NULL,NULL,NULL),(16,12,'4',NULL,NULL,NULL);
/*!40000 ALTER TABLE `users_roles` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-02-04  9:46:47
