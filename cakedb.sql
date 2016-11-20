-- MySQL dump 10.13  Distrib 5.5.50, for Linux (x86_64)
--
-- Host: localhost    Database: elevysic_unify
-- ------------------------------------------------------
-- Server version	5.5.50-cll

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `citations`
--

LOCK TABLES `citations` WRITE;
/*!40000 ALTER TABLE `citations` DISABLE KEYS */;
/*!40000 ALTER TABLE `citations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `elevysic_unify_users`
--

DROP TABLE IF EXISTS `elevysic_unify_users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `elevysic_unify_users` (
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
-- Dumping data for table `elevysic_unify_users`
--

LOCK TABLES `elevysic_unify_users` WRITE;
/*!40000 ALTER TABLE `elevysic_unify_users` DISABLE KEYS */;
/*!40000 ALTER TABLE `elevysic_unify_users` ENABLE KEYS */;
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
  `created` datetime DEFAULT NULL,
  `moodified` datetime DEFAULT NULL,
  `record_owner` int(11) DEFAULT NULL,
  `show` int(1) DEFAULT '1',
  `rank` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `list_post_types`
--

LOCK TABLES `list_post_types` WRITE;
/*!40000 ALTER TABLE `list_post_types` DISABLE KEYS */;
INSERT INTO `list_post_types` VALUES (1,'Text','2015-01-04 07:48:21','2015-01-04 07:48:00',1,1,1),(2,'Image','2015-01-04 07:48:37','2015-01-04 07:48:00',1,1,2),(3,'Audio','2015-01-04 07:48:47','2015-01-04 07:48:00',1,1,3),(4,'Video','2015-01-04 07:48:59','2015-01-04 07:48:00',1,1,4);
/*!40000 ALTER TABLE `list_post_types` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `menu_items`
--

DROP TABLE IF EXISTS `menu_items`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `menu_items` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `section_id` int(11) DEFAULT NULL,
  `text` varchar(50) DEFAULT NULL,
  `record_owner` int(11) DEFAULT NULL,
  `show` int(1) DEFAULT '1',
  `rank` int(11) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `menu_items`
--

LOCK TABLES `menu_items` WRITE;
/*!40000 ALTER TABLE `menu_items` DISABLE KEYS */;
/*!40000 ALTER TABLE `menu_items` ENABLE KEYS */;
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
  `section_id` int(11) DEFAULT NULL,
  `list_post_type_id` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `posts`
--

LOCK TABLES `posts` WRITE;
/*!40000 ALTER TABLE `posts` DISABLE KEYS */;
INSERT INTO `posts` VALUES (11,'Beats Studio 2.0 Vs. Sennheiser Momentum (over ears)','<p style=\"outline: none 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); margin: 0px 0px 10px; padding: 0px; border: 0px; font-family: \'Helvetica Neue\', HelveticaNeue, Helvetica, Arial, sans-serif; font-size: 14px; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: inherit; line-height: 19.6000003814697px; vertical-align: baseline; box-sizing: border-box; color: #444444; letter-spacing: normal; orphans: auto; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: auto; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: #ffffff;\">After almost 8 months using the Beats Studio 2.0, they broke; the sound is still intact but the physical case broke at the folding point. I can still listen to them but I cannot carry them around because I&rsquo;d have to hold the case against my ears with my hand all the time.</p>\r\n<p style=\"outline: none 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); margin: 0px 0px 10px; padding: 0px; border: 0px; font-family: \'Helvetica Neue\', HelveticaNeue, Helvetica, Arial, sans-serif; font-size: 14px; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: inherit; line-height: 19.6000003814697px; vertical-align: baseline; box-sizing: border-box; color: #444444; letter-spacing: normal; orphans: auto; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: auto; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: #ffffff;\">I regretted their purchase; after all the cons and bad reviews I saw online, how could I go ahead to get myself a pair? A pair of headphones claimed to be overrated by knowledgeable people. I was even recommended better and cheaper options but I still decided to go with the Beats Studio. It did not feel good as I accept to have fell for the&nbsp;advertisement influence, the hype and the social recognition out of them. It did not feel good.<span class=\"Apple-converted-space\">&nbsp;</span><br style=\"outline: none 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); box-sizing: border-box;\" />I thought of giving up on headphones but as I am a music person, I wanted a good music listening experience; I could not do back the earphones which work&rdquo;okay&rdquo; for two weeks and start their way to horrible, inaudible and unenjoyable sound.</p>\r\n<p style=\"outline: none 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); margin: 0px 0px 10px; padding: 0px; border: 0px; font-family: \'Helvetica Neue\', HelveticaNeue, Helvetica, Arial, sans-serif; font-size: 14px; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: inherit; line-height: 19.6000003814697px; vertical-align: baseline; box-sizing: border-box; color: #444444; letter-spacing: normal; orphans: auto; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: auto; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: #ffffff;\">So I went ahead and purchased the Cr&egrave;me de la cr&egrave;me, the Sennheiser Momentum. Unlike the Beats, the Momentum have plenty of good reviews online; the experts seem to accept them as a good product with a good price quality ratio. As I was trying to find out more about the Sennheiser Momentum, all I was seeing was very positive reviews about them. I then decided to purchase one for myself hoping that they would be a good investment, that they would last for long, have a good built quality and deliver good audio.</p>\r\n<p style=\"outline: none 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); margin: 0px 0px 10px; padding: 0px; border: 0px; font-family: \'Helvetica Neue\', HelveticaNeue, Helvetica, Arial, sans-serif; font-size: 14px; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: inherit; line-height: 19.6000003814697px; vertical-align: baseline; box-sizing: border-box; color: #444444; letter-spacing: normal; orphans: auto; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: auto; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: #ffffff;\">After getting them, I finally have a clear idea for myself and I can relate to the reviews that I have been seeing online. Let me go ahead and give some points of comparison, for as far as I can; I cannot say anything about longevity as I have not got them for long. I do not have a strong technical audio vocabulary but I will describe them as a random consumer user, someone who just happens to listen to music just like most of people.</p>\r\n<p style=\"outline: none 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); margin: 0px 0px 10px; padding: 0px; border: 0px; font-family: \'Helvetica Neue\', HelveticaNeue, Helvetica, Arial, sans-serif; font-size: 14px; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: inherit; line-height: 19.6000003814697px; vertical-align: baseline; box-sizing: border-box; color: #444444; letter-spacing: normal; orphans: auto; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: auto; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: #ffffff;\">I will start with the quality of the audio as it is what we expect the most from headphones. The Beats Studio 2.0 are known to have a heavy bass which I guess is where they got their naming from (beats as urbanely used to refer to a song instrumental).<span class=\"Apple-converted-space\">&nbsp;</span><br style=\"outline: none 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); box-sizing: border-box;\" />I can guarantee that this legend is true; the Beats Studio won&rsquo;t leave you disappointed about that, and this aspect will be emphasised as soon as you use different headphones to listen. If you are into urban songs, hip hop and some pop songs, you will find your fit with the Beats. It is a full experience, they take you to another world where there is only you and the sound of the music. However, this doesn&rsquo;t mean that the vocals are drown by the bass, it stays reasonable and there is not such a thing as excessiveness. I personally often listen to urban songs, so they were perfect to me as far as the sound is concerned; I do listen to some classic music as well but the little I do cannot let me say objectively that they give a good listening experience to the classical music fan. I did not find this aspect bothering while listening to classical music.<br style=\"outline: none 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); box-sizing: border-box;\" />Sennheiser Momentum are a bit different; they do not have that much bass, as compared to the Beats Studio but they do have enough bass for the music; what is most appealing, from a Beats user,&nbsp;is the clarity of the vocals. Since the bass isn&rsquo;t there as before, the emphasis is no longer on the instrumental but on the music as a whole. The vocals will stand out because we, Beats users, are not used to them being like that. The sound is clear and concise, nothing but what we expect.&nbsp;<br style=\"outline: none 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); box-sizing: border-box;\" />However after giving them a trial for some time, they did not give me the same user experience as the Beats Studio. I did not feel like transported to a whole new world where only the music matters. They did give a clear sound but the sound was too ordinary, almost trivial. They were not breathtaking.<span class=\"Apple-converted-space\">&nbsp;</span><br style=\"outline: none 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); box-sizing: border-box;\" />The Beats Studio 2.0 use battery and when no music is playing you can hear a noisy background; the Sennheiser do not use any battery and there is not such disturbing sound at all.<span class=\"Apple-converted-space\">&nbsp;</span><br style=\"outline: none 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); box-sizing: border-box;\" />I guess it is a matter of what one listen to but as far as I am concerned, the Beats Studio win the sound battle.</p>\r\n<p style=\"outline: none 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); margin: 0px; padding: 0px; border: 0px; font-family: \'Helvetica Neue\', HelveticaNeue, Helvetica, Arial, sans-serif; font-size: 14px; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: inherit; line-height: 19.6000003814697px; vertical-align: baseline; box-sizing: border-box; color: #444444; letter-spacing: normal; orphans: auto; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: auto; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: #ffffff;\">On to the next point which is built quality; Sennheiser Momentum are very light compared to the Beats Studio. They are more portable than the Beats, exception for their case which is huge. Also, they don&rsquo;t fold the way Beats Studio do which can be bothersome sometimes. The ears are covered with a leather, supported by a light metal band from which the ears will slide up down. I have to admit that the whole design and the choice of materials feel good. The top band is made from leather, slim enough to hide the cables that are contained within.<span class=\"Apple-converted-space\">&nbsp;</span><br style=\"outline: none 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); box-sizing: border-box;\" />The Beats on the other side are made of a plastic case. The ears are comfy, bigger than the Sennheiser, and covered with leather. I had a better feeling on the ears from the Beats Studio but they soon become hot after long sessions due to the contained battery I guess. The plastic case for the Beats Studio broke at the folding point and I do not see the Sennheiser breaking the same way. The Sennheiser materials will break in another way that I have not figured out yet, but not as the Beats broke. This was my biggest disappointment about the Beats. I took good care of them, did not carry them around everyday but somehow, they found a way to break before their first anniversary. It is a big deal from a pair of headphones that I expected to last for a couple of years, given the investment I had put in them.<br style=\"outline: none 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); box-sizing: border-box;\" />Sennheiser will win the the built quality for me. They are really light, not flashy and discreet. Beats are nothing compared to them, built quality wise. Both pair of headphones retail within the same price range.<br style=\"outline: none 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); box-sizing: border-box;\" /><br style=\"outline: none 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); box-sizing: border-box;\" />To conclude this post, I noticed some injustice to the Beats. They are not that overrated as sometimes claimed by bloggers. There seem to be a campaign against them, I guess because they are in everyone&rsquo;s eyes. That does not take away anything from their qualities. They do give a positive user experience, mostly for the sound, which is mostly bass as claimed by the brand. Their hype is justified since they are good genuine, portable headphones. There is room for improvement on the built quality but it is just okay.&nbsp;<br style=\"outline: none 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); box-sizing: border-box;\" />The Sennheiser Momentum are good headphones; they do not favor a specific type of music but are there for everybody to enjoy, regardless their taste in music. The built quality and portability are also great which makes them win their war against the Beats Studio.</p>',4,'2015-01-03 14:39:02','2015-01-03 14:39:02',1,NULL,NULL,1),(12,'Motivation (Banking a Shot)','<p style=\"outline: none 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); margin: 0px 0px 10px; padding: 0px; border: 0px; font-family: \'Helvetica Neue\', HelveticaNeue, Helvetica, Arial, sans-serif; font-size: 14px; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: inherit; line-height: 19.6000003814697px; vertical-align: baseline; box-sizing: border-box; color: #444444; letter-spacing: normal; orphans: auto; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: auto; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: #ffffff;\">I was playing Basketball the other day doing a little &ldquo;Tour of France&rdquo; when I suggested my playmate to try make the shot without the help of the glass (without banking the shot as they say). She replied that it didn&rsquo;t matter, &ldquo;as long as the ball goes in&rdquo; she said! It made me reflect on what were our motivations, the reasons behind our behaviour and moves. It is a common perception that when you are out there living your life, you always want to win, to take the most of it. You need to take the opportunities and avoid being a so-called loser. The problem is, being so busy trynna win, we often forget what should be the essence of our actions. I can&rsquo;t help but notice that our desire to win overshadow the motives behind our actions. After all, the ultimate goal will always be being happy and not winning. We can still find the happiness in winning but we should at least feel pleased doing the actions that led to the win. If you have the right motivation, you will always feel pleased doing what you do, you will always find fun in your actions. On the other hand, if you do not have the required motivation, you will just be attracted by the end result and will not feel the happiness doing the job. Wouldn&rsquo;t it be better if we started by the beginning, if we were engaged in what we truly love, at least when we can afford it?</p>\r\n<p style=\"outline: none 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); margin: 0px 0px 10px; padding: 0px; border: 0px; font-family: \'Helvetica Neue\', HelveticaNeue, Helvetica, Arial, sans-serif; font-size: 14px; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: inherit; line-height: 19.6000003814697px; vertical-align: baseline; box-sizing: border-box; color: #444444; letter-spacing: normal; orphans: auto; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: auto; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: #ffffff;\">I would love to see everything I do as art and be able to contemplate&nbsp;the beauty in it. A poet works towards delivering his lines of words filled with rhymes so that the result is a piece of magic art. He&nbsp;probably&nbsp;achieves greatness because he puts his heart into the work as he is guided by the right motives. That is how it should feel like with our moves.</p>\r\n<p style=\"outline: none 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); margin: 0px 0px 10px; padding: 0px; border: 0px; font-family: \'Helvetica Neue\', HelveticaNeue, Helvetica, Arial, sans-serif; font-size: 14px; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: inherit; line-height: 19.6000003814697px; vertical-align: baseline; box-sizing: border-box; color: #444444; letter-spacing: normal; orphans: auto; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: auto; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: #ffffff;\">We gotta be able to look at our jobs and say: &ldquo;what i just realised right there is pure art&rdquo;. It might not be art as perceived by the others but what matters is what we think of it, we need not to let the others define the rules of the art for us. We start playing basketball because we love the beauty of the game, we start writing because we like reading them alexandrines&nbsp;or whatever our motives are. Unfortunately, as the time goes, we get caught up with the winning mentality; we need to excel as we crave for recognition from our peers, that recognition that is defined by the winning out of us.</p>\r\n<p style=\"outline: none 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); margin: 0px; padding: 0px; border: 0px; font-family: \'Helvetica Neue\', HelveticaNeue, Helvetica, Arial, sans-serif; font-size: 14px; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: inherit; line-height: 19.6000003814697px; vertical-align: baseline; box-sizing: border-box; color: #444444; letter-spacing: normal; orphans: auto; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: auto; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: #ffffff;\">I am not against winning and having a reality check once in a while is good but we should bare in mind what really matters. It is not what we see/show to the outside but rather what we think in the inside. Having a beautiful girlfriend is good but it is better when she really likes you as a person, as opposed to liking what you have. We might not be practicing basketball as we had dreamed when younger but at least we can give recognition to the people that made it, the people that play for the beauty of the art! Nevertheless, you can&rsquo;t even immagine how beautiful is the combination of art and effectiveness, when people win doing what they like! You look at Federer and his playing style and say, dayum i love that game!! You want to see Barcelona play because they play football in the rules of the art and win at it. You wish you could shoot that ball like KD or Melo,&nbsp;you want the ball to go straight in the basket, without rebounding or having to first bump on the glass. We might not be as effective as these guys are, but we need to try, for the sake of the art. We&rsquo;ve got to put ourselves in admirers shoes, do what would give us the envy to watch the game; what matters is not the ball in the basket but how it goes into the basket as well. And do not think that am restricting myself to the traditional artistic domains such as poetry or sports, i mean it for every little thing. Be a good friend, concerned people will remember you as fun being around, a cool kid. Be a good programmer, be a good driver, be a good leader, give an interview like Charles Ramsey, dead giveaway!! Do things in the rules of the game, strive for the beauty of the art.</p>',4,'2015-01-03 16:23:23','2015-01-03 16:23:23',1,NULL,NULL,1),(13,'Am I wrong','<p style=\"outline: none 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); margin: 0px 0px 10px; padding: 0px; border: 0px; font-family: \'Helvetica Neue\', HelveticaNeue, Helvetica, Arial, sans-serif; font-size: 14px; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: inherit; line-height: 19.6000003814697px; vertical-align: baseline; box-sizing: border-box; color: #444444; letter-spacing: normal; orphans: auto; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: auto; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: #ffffff;\">I downloaded the album (Black Star Elephant) by Nico &amp; Vinz just to throw it in the trash minutes later. However, I did not get rid of the album because I did not like it but rather because I felt their music was too good for me to download for free. So I went ahead and bought myself a fresh official copy of the album. Taste is indisputable and I don&rsquo;t expect you to like this music; that is not the point of this post. What I find interesting about Nico and Vinz&rsquo; music is their message and their state of spirit. You can tell by listening to their music that they are about positivity and good vibes. Here are some young folks who came from a not so much musically influential country (relatively) just to go and conquer the world with one song: &ldquo;Am I wrong&rdquo;. What made&nbsp;that one song&nbsp;a hit all the way from far away north? Apart from the good music production, I believe it had a good message. A message that advocates for one&rsquo;s right to be different, to be in control of their lives, live it the way they feel is right and hope for the best. This is what I like to refer to as positivity; that way of seeing things at your advantage, seeing the good always, even when skys are grey, &ldquo;seeing a sunshine in the rain&rdquo;.</p>\r\n<p style=\"outline: none 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); margin: 0px 0px 10px; padding: 0px; border: 0px; font-family: \'Helvetica Neue\', HelveticaNeue, Helvetica, Arial, sans-serif; font-size: 14px; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: inherit; line-height: 19.6000003814697px; vertical-align: baseline; box-sizing: border-box; color: #444444; letter-spacing: normal; orphans: auto; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: auto; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: #ffffff;\">I used to think that having a highly valued skill was the way to make it big down here but as I go, I start to think a little bit differently.&nbsp;No matter how much skill one has, if they don&rsquo;t have the right mindset, they will probably fall into the anonymity or just be used by people without skill but with a good mindset,&nbsp;just like most of us. Of course skill helps but, let it be alone, your deserved reward is not guaranteed. You have got to have faith, belief and hope that things will turn your side. Most of the people are not successful at what they do right out of the box, straight overnight; they fight for their dreams, they fail multiple times and yet come back at it and repeat for a better outcome. It takes a way of seeing things, a positive oriented mindset that is prepared to accept defeat but ready to go back to the war front.</p>\r\n<p style=\"outline: none 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); margin: 0px 0px 10px; padding: 0px; border: 0px; font-family: \'Helvetica Neue\', HelveticaNeue, Helvetica, Arial, sans-serif; font-size: 14px; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: inherit; line-height: 19.6000003814697px; vertical-align: baseline; box-sizing: border-box; color: #444444; letter-spacing: normal; orphans: auto; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: auto; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: #ffffff;\">When I watch the news on tv, I often see reports of people with a criminal background record, yet again, committing another crime. Why? Didn&rsquo;t they learn the first time they were caught? Well, maybe that is how they see things, that is the obvious solution to their problems. Do not get me wrong here, I am not blaming them or simplifying things; I know for a fact that a lot of factors come into the equation. I am simply exploiting the fact that, have they thought a little bit differently, they might not have gone for the same actions.&nbsp;</p>\r\n<p style=\"outline: none 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); margin: 0px 0px 10px; padding: 0px; border: 0px; font-family: \'Helvetica Neue\', HelveticaNeue, Helvetica, Arial, sans-serif; font-size: 14px; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: inherit; line-height: 19.6000003814697px; vertical-align: baseline; box-sizing: border-box; color: #444444; letter-spacing: normal; orphans: auto; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: auto; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: #ffffff;\">I look around at the people who have&nbsp;realised&nbsp;great achievements to wonder how they&nbsp;made it so big to&nbsp;their potential; probably by hard work, dedication and a good vision. However, I believe that, along the way, they had to think that their dream was possible despite it being compromised at times. Whether successful in Business, in Science or just at being a happy human being, those people started by looking at life from the positive side, by turning their mind&nbsp;to the right channel; that is what it takes first. The rest usually fall into place if it is meant to be. It is not guaranteed but even if failure there is, it is okay, strength to keep going is there because the mind is positive.</p>\r\n<p style=\"outline: none 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); margin: 0px; padding: 0px; border: 0px; font-family: \'Helvetica Neue\', HelveticaNeue, Helvetica, Arial, sans-serif; font-size: 14px; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: inherit; line-height: 19.6000003814697px; vertical-align: baseline; box-sizing: border-box; color: #444444; letter-spacing: normal; orphans: auto; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: auto; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: #ffffff;\">I believe Nico &amp; VInz are among those positive people and look at where it brought them! They got it, their worldwide number one record!</p>',4,'2015-01-03 17:20:40','2015-01-03 17:20:40',1,NULL,NULL,1),(14,'Evidemment (France Gall)','<p><span style=\"color: #444444; font-family: \'Helvetica Neue\', HelveticaNeue, Helvetica, Arial, sans-serif; font-size: 14px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 19.6000003814697px; orphans: auto; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: auto; word-spacing: 0px; -webkit-text-stroke-width: 0px; display: inline !important; float: none; background-color: #ffffff;\">I will always be amazed by the power of words; you use the right ones when suited and the outcome can be astonishingly wonderful. Some songs have the right words, they are so breathtaking that you wish you listened to them endlessly. I imagine that it would be because you can relate to them in most of the cases. &ldquo;Evidemment&rdquo; is one of these songs; it is made from simple words, words we use everyday rather than words from a poetic vocabulary. The song is a bit vague and that is where lies its magic! It lies in the margin left to the auditor&rsquo;s imagination, a margin that leaves room for everybody to feel concerned and relate to their own lives, almost as if it was written for them. This absolutely beautiful song was performed &nbsp;by France Gall. I understand that she remembers her sweet childhood and relates it to her life now. She realizes that stupid little things still make her laugh, that she still dance from the old chords she used to like. However, she ends up regretting that although she still dances and laugh, it is not like before, it is not as she used to. She describes it well in the beginning of the song when she says: &ldquo;There is like a bitter flavour in us, a taste of dust in everything&hellip;&rdquo;. The song is very deep, I always wonder how she came up with such fantastic lyrics. The beat is also simple, suits to the lyrics. There is lot of urban remixes to this song with different beats but props go, of course, to the original. One sure thing, she got it.</span></p>',4,'2015-01-03 17:23:34','2015-01-03 17:23:34',1,NULL,NULL,1),(15,'Computer Fan Apple MacBook Imac','<p style=\"outline: none 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); margin: 0px 0px 10px; padding: 0px; border: 0px; font-family: \'Helvetica Neue\', HelveticaNeue, Helvetica, Arial, sans-serif; font-size: 14px; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: inherit; line-height: 19.6000003814697px; vertical-align: baseline; box-sizing: border-box; color: #444444; letter-spacing: normal; orphans: auto; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: auto; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: #ffffff;\">It is a pity that the macBooks are overpriced for they deserve to be main stream computers. Apple should lower their prices so that everybody can benefit from their products. I believe that most of the people will&nbsp;definitely adopt them after giving them a try. There is a bunch of reasons why i like apple computers, the main being the way they perfectly combine effectiveness and look. I do like when products combine these two and Apple seem to have found the recipe. In Basketball, such products would be compared to the sixth man. The guy who comes off the bench and can do it all, play at different guard positions. But the fact that he starts from the bench is already self-revealing about his true abilities. That is why I&rsquo;d rather be led to think more of an MVP. The MVP will be the outstanding guy in the league, the guy who may not be the best at his position but has the greatest value overall. It&rsquo;s usually gonna be the player that has an entertaining playing style, the player that is a remarquable defender and the one that can make those shots. It is the combination of all these qualities together that makes him the most valuable rather than the excellence in one of them. Apple computers, and devices in general, have a great design. You look at them and feel the beauty of the art. Well, I may have been influenced by all the advertisement and marketing that I am exposed to but I do&nbsp;recognise,&nbsp;after all, that the design is great. Always seeing the computers on TV and hearing all this praise from the people I look up to may have formatted my opinion about the products, but now it is what it is and my opinion is already made up. I will always tend to compare every other product to what I consider the reference so far. The thinness, the trackpad, the short keyboard, the keyboard keys, the screen resolution and design, simplicity at its best. OS X which is the operating system found on apple computers is a powerful and effective OS. You may not feel the need to have such a powerful OS if you are a simple user but this will definitely help you out if you are a developer or a&nbsp;knowledgeable&nbsp;user. The computer&nbsp;obviously&nbsp;relies on a performant hardware but the operating system is also great. It is flexible, fast and reliable. You do not need to worry that much about viruses attacks and computer infections. They are still there but not as much as a Microsoft OS. The choice of native apple applications is also diversified. You will find the equivalents of MS Products like Office in better versions. You find in them the old recipe of effectiveness incorporated into great look. Keynote would be one of the perfect illustration of the above. Once you have gone Keynote, u never go back. If you want to deliver your presentations in style and capture the public eye, keynote, when mastered, will help you achieve your goals.&nbsp;</p>\r\n<p style=\"outline: none 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); margin: 0px; padding: 0px; border: 0px; font-family: \'Helvetica Neue\', HelveticaNeue, Helvetica, Arial, sans-serif; font-size: 14px; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: inherit; line-height: 19.6000003814697px; vertical-align: baseline; box-sizing: border-box; color: #444444; letter-spacing: normal; orphans: auto; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: auto; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: #ffffff;\">The only drawback is the price. Maybe they need to keep the prices&nbsp;high&nbsp;to ensure the quality of their products but I believe that they could still get a lot of money if more people bought their products. If they are more affordable, more people will buy them because they will recognise the good quality. If more people buy, more money goes in and the prices can be lowered, kind of the supermarket logic which can keep the prices low compared to local small crafts store. Hence, the products quality could also be preserved. However, I am not aware of their marketing strategies and I guess they know better than me what to do. I just feel the need for everybody to have a better user experience from the products they are offered. I also need to admit that I have not tried a lot of computers out there but with all due respect to the competitors, Apple got it.</p>',4,'2015-01-03 17:24:26','2015-01-03 17:24:26',1,NULL,NULL,1),(16,'Sneaker Fan Lacoste Amphtill','<p style=\"outline: none 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); margin: 0px 0px 10px; padding: 0px; border: 0px; font-family: \'Helvetica Neue\', HelveticaNeue, Helvetica, Arial, sans-serif; font-size: 14px; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: inherit; line-height: 19.6000003814697px; vertical-align: baseline; box-sizing: border-box; color: #444444; letter-spacing: normal; orphans: auto; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: auto; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: #ffffff;\">Props to Lacoste for making the&nbsp;ampthill, nothing else but absolute class. I am a huge fan and the tone is given for the reminder of what i think of this shoe. These mid-high top classy shoes rock the casual style like none else. You can wear them everywhere and with almost everything; whether&nbsp;you wear them with a suit or with shorts,&nbsp;they are still gonna give you a great look. Their strongest point for me would be this not too much but still standing out effect. They are simple but still got it; some of the high rated urban sneaker shoes have so many twists in them that they lose it. They lack this simplicity and make me feel like a hard trial; you know how you can tell when somebody pretends to be naturally funny but tries so hard to make people laugh&nbsp;every time.&nbsp; Reality is, although he is funny in the end, it reflects on the outcome. You appreciate better people with the same result but with less efforts. You wanna see great moves from a dancer without an obvious&nbsp;struggling effort from them. It is always better when the delivery is natural, what a computer nerd would call the facade design pattern.&nbsp;Well, am not saying that the simplest is always the best but for this particular shoe, its simplicity is definitively a winner. &nbsp;The mono-color tops and the white bottoms with a thin different-coloured line is stunning, no need for more. Colours combinations are also&nbsp;outstanding and&nbsp;the bottoms are not always white. Level of class varies in my opinion, but color and tastes are indisputable; the choice is out there and everyone shall find a fit. They have a black on black series, which always makes me relate to a black car with some big-o black rims. They got a white on white version which highlights bits of green from the logo. They got the gray top on white bottom, my favorite. You can find the tops fabrics in different styles and material; they seem to be competing each other as they would leave you undecided when confronted with a choice. Above all that, their price is not even that high, compared to high-rated brands like ballers endorsed sneakers or Jordans. I understand that the fabrics material is lighter for the ampthill and that they do not really belong in the exact same category of shoes, however the price-quality ratio won&rsquo;t leave you disappointed.</p>\r\n<p style=\"outline: none 0px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); margin: 0px 0px 10px; padding: 0px; border: 0px; font-family: \'Helvetica Neue\', HelveticaNeue, Helvetica, Arial, sans-serif; font-size: 14px; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: inherit; line-height: 19.6000003814697px; vertical-align: baseline; box-sizing: border-box; color: #444444; letter-spacing: normal; orphans: auto; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: auto; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: #ffffff;\">As far as I am concerned, they deserve to be casual shoe hall of fame. They got it.</p>',NULL,'2015-01-03 17:26:46','2015-01-03 17:26:46',1,NULL,NULL,1),(20,'How to highlight source code through TinyMce and Syntax Highlighter','<p>Let me teach you how you can add a nice syntax highlighter to your tinymce editor.?First a little background to this post. I am using CakePHP 2.3x and I want to set up a blog in which I can post random pieces of code like the one I am about to give. For the code to stand out from the other part of a particular post through a highliting system (as displayed in an Editor like Eclipse for instance). The program language needs to be identified and formatting applied afterwards.<br /><br />The solution is a combination of several tools:</p>\r\n<ul>\r\n<li><a href=\"http://www.tinymce.com/download/download.php\">TinyMce</a></li>\r\n<li><a href=\"http://lab.nomadonweb.com/en/sh4tinymce\">Sh4TinyMce</a></li>\r\n<li><a href=\"http://alexgorbatchev.com/SyntaxHighlighter/manual/installation.html\">Syntax Highlighter<br /></a></li>\r\n</ul>\r\n<p>On the page made to add the post, include the tinyMce and sh4TinyMce libraries as indicated below:</p>\r\n<pre class=\"brush:php;auto-links:false;toolbar:false\" contenteditable=\"false\">&lt;?php echo $this-&gt;Html-&gt;script(\'tinymce/js/tinymce/tinymce.min.js\'); ?&gt;\r\n\r\n\r\n&lt;script type=\"text/javascript\"&gt;\r\n\r\ntinymce.init({\r\n    selector: \"textarea\",\r\n    theme: \"modern\",\r\n    \r\n    height: 700,\r\n    plugins: [\r\n        \"advlist autolink lists link image charmap print preview hr anchor pagebreak\",\r\n        \"searchreplace wordcount sh4tinymce visualblocks visualchars code fullscreen\",\r\n        \"nonbreaking contextmenu directionality\",\r\n        \"emoticons template paste textcolor\",\r\n    ],\r\n    toolbar1: \" undo redo | codeElement varElement sh4tinymce | styleselect | bold italic underline | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | print preview | forecolor backcolor emoticons\",\r\n   \r\n    templates: [\r\n        {title: \'Test template 1\', content: \'Test 1\'},\r\n        {title: \'Test template 2\', content: \'Test 2\'}\r\n    ]\r\n    \r\n});\r\n\r\n&lt;/script&gt;</pre>\r\n<p>Note that I need to download&nbsp;<a href=\"http://lab.nomadonweb.com/en/sh4tinymce\">Sh4TinyMce</a> before hand and put it in the plugins folder of the Tinymce library for it to be included in the Tinymce editor.<br /><br />Then when my post is saved, on the view post page, I need to&nbsp; include the Syntax highlighter scripts as follows:</p>\r\n<pre class=\"brush:php;auto-links:false;toolbar:false\" contenteditable=\"false\">&lt;?php \r\n	echo $this-&gt;Html-&gt;script(\'/js/syntaxhighlighter_3.0.83/scripts/shCore.js\');\r\n	echo $this-&gt;Html-&gt;script(\'/js/syntaxhighlighter_3.0.83/scripts/shBrushJScript.js\');\r\n	echo $this-&gt;Html-&gt;script(\'syntaxhighlighter_3.0.83/scripts/shBrushPhp.js\');\r\n	echo $this-&gt;Html-&gt;css(\'/js/syntaxhighlighter_3.0.83/styles/shCoreDefault.css\');\r\n\r\n?&gt;\r\n\r\n&lt;script type=\"text/javascript\"&gt;SyntaxHighlighter.all();&lt;/script&gt;</pre>\r\n<p>Adjust the paths to the scripts relatively to your project set up and everything is ready to work.</p>',4,'2015-01-04 14:55:01','2015-01-04 14:55:01',1,NULL,NULL,1),(22,'RestFul Design for CakePHP 2.x and API Implementation using oauth2','<p>A couple of days ago I was&nbsp;introduced to a new challenge; getting a project of mine to&nbsp;be an API for another application that would act as a client. So my client would \"GET\" and \"POST\" from and to the API. Both the&nbsp;server and the client use CakePHP 2.x</p>\r\n<p>So I went ahead and started to research about how I would go about it. I was not interested in authenticating the client\'s users on the Server but the client itself. I was concerned about two aspects: how would I get the Server to reply to the client requests? &nbsp;and how would the Server be able to authenticate the client when it issues the request? The solution I found was to use&nbsp;<a href=\"http://book.cakephp.org/2.0/en/development/rest.html\">REST</a>&nbsp;(which is well documented&nbsp;in CakePHP) as a web service in combination with&nbsp;<a href=\"https://github.com/quizlet/oauth2-php\">Oauth2</a>&nbsp;for the security part.&nbsp;</p>\r\n<p>First let me start with an introduction to REST in CakePHP; as explained on the <a href=\"http://book.cakephp.org/2.0/en/development/rest.html\">documentation page</a>&nbsp;here is a sample for a restful Controller:</p>\r\n<pre class=\"brush:php;auto-links:false;toolbar:false\" contenteditable=\"false\">&lt;?php \r\nclass RecipesController extends AppController {\r\n\r\n    public $components = array(\'RequestHandler\');\r\n\r\n    public function index() {\r\n        $recipes = $this-&gt;Recipe-&gt;find(\'all\');\r\n        $this-&gt;set(array(\r\n            \'recipes\' =&gt; $recipes,\r\n            \'_serialize\' =&gt; array(\'recipes\')\r\n        ));\r\n    }\r\n\r\n    public function view($id) {\r\n        $recipe = $this-&gt;Recipe-&gt;findById($id);\r\n        $this-&gt;set(array(\r\n            \'recipe\' =&gt; $recipe,\r\n            \'_serialize\' =&gt; array(\'recipe\')\r\n        ));\r\n    }\r\n\r\n    public function add() {\r\n        $this-&gt;Recipe-&gt;create();\r\n        if ($this-&gt;Recipe-&gt;save($this-&gt;request-&gt;data)) {\r\n            $message = \'Saved\';\r\n        } else {\r\n            $message = \'Error\';\r\n        }\r\n        $this-&gt;set(array(\r\n            \'message\' =&gt; $message,\r\n            \'_serialize\' =&gt; array(\'message\')\r\n        ));\r\n    }\r\n\r\n    public function edit($id) {\r\n        $this-&gt;Recipe-&gt;id = $id;\r\n        if ($this-&gt;Recipe-&gt;save($this-&gt;request-&gt;data)) {\r\n            $message = \'Saved\';\r\n        } else {\r\n            $message = \'Error\';\r\n        }\r\n        $this-&gt;set(array(\r\n            \'message\' =&gt; $message,\r\n            \'_serialize\' =&gt; array(\'message\')\r\n        ));\r\n    }\r\n\r\n    public function delete($id) {\r\n        if ($this-&gt;Recipe-&gt;delete($id)) {\r\n            $message = \'Deleted\';\r\n        } else {\r\n            $message = \'Error\';\r\n        }\r\n        $this-&gt;set(array(\r\n            \'message\' =&gt; $message,\r\n            \'_serialize\' =&gt; array(\'message\')\r\n        ));\r\n    }\r\n}</pre>\r\n<p>This&nbsp;was then my controller for the API (Server) side. However, my app needed authentication for all the controllers&nbsp;since I had defined it in the beforeFilter() method of the AppController, from which all the others inherit;&nbsp;hence this was never going to work unless I was logged in. The solution was to authorize all the methods of this controller in its beforeFilter() method, overriding the setting of the AppController. Here is the code used below:</p>\r\n<pre class=\"brush:php;auto-links:false;toolbar:false\" contenteditable=\"false\">public function beforeFilter() {\r\n    	$this-&gt;Auth-&gt;allow();\r\n}</pre>\r\n<p>This would ensure that no authentication is needed for this part of the Application. At the same time, it would leave all the information open to the outside world.</p>\r\n<p>That is where oauth2 comes into the play. Remember that my challenge is to authenticate the client and not the users of this client. Oauth has support for these two but I will focus on the client one since it is what is needed here. I used <a href=\"https://github.com/thomseddon/cakephp-oauth-server\">CakePHP OAuth2 Server Plugin</a>, a cakePHP plugin. I downloaded the release and put it in the Plugin Folder (app/Plugin/Oauth) and declared it in app/config/bootstrap.php as follows (all on the server side):</p>\r\n<pre class=\"brush:php;auto-links:false;toolbar:false\" contenteditable=\"false\">CakePlugin::load(\'OAuth\'); // Loads Plugin</pre>\r\n<p>I also put the &nbsp;<a href=\"https://github.com/quizlet/oauth2-php\">oauth2-php</a>&nbsp;library in the Vendor folder (server side) since the Plugin uses oauth-2 (downloaded to app/Vendor/oauth-2-php); but all this is also explained on the Plugin page.</p>\r\n<p>Now the plugin was available in my app; the next step was to declare it in the Restful Controller under the controller\'s components as follows:</p>\r\n<pre class=\"brush:php;auto-links:false;toolbar:false\" contenteditable=\"false\">public $components = array(\'RequestHandler\', \'OAuth.OAuth\');</pre>\r\n<p>After adding this line, all of my restful controller methods were protected again. I could not access any of the controller\'s method without providing extra information; however, would I have needed to allow one or several methods, I would use it the same way Auth is used: $this-&gt;Oauth-&gt;allow() in the beforeFilter() method.&nbsp;</p>\r\n<p>As explained in the&nbsp;<a href=\"https://github.com/thomseddon/cakephp-oauth-server\">Plugin documentation</a>, you need to create tables in the Server Application Database that will hold the access tokens, the clients IDS and so on. Once all this is set up, create a client as described in the documentation; remember to debug the result of Client-&gt;add() since it is the only way you can retrieve the client secret which will be hashed in the table storage. Note down the client ID and secret to later provide them to the Client application. To complete, it is required to implement a getToken method which I implemented in my RestFul Controller (will be called later):</p>\r\n<pre class=\"brush:php;auto-links:false;toolbar:false\" contenteditable=\"false\">public function token() {\r\n    	$this-&gt;autoRender = false;\r\n    	try {\r\n    		$this-&gt;OAuth-&gt;grantAccessToken();\r\n    	} catch (OAuth2ServerException $e) {\r\n    		$e-&gt;sendHttpResponse();\r\n    	}\r\n    }</pre>\r\n<p>&nbsp;</p>\r\n<p>I edited my&nbsp;oauth2-php/lib/Oauth2Client.php file&nbsp;to be able to support&nbsp;<a href=\"https://aaronparecki.com/articles/2012/07/29/1/oauth2-simplified\">Client credentials</a><strong>&nbsp;</strong>since it seemed that it was not supported under the downloaded release. As&nbsp;I&nbsp;kept getting an error, I looked into the lib code and I modified as follow by adding a method that was completely left out. The class implements an interface that has the added method. However when I looked into the class, the method was not implemented hence throwing an Exception. I then researched for what the method was for and I implemented the code myself; it retrieves a client ID and secret and forwards them to the verification method.</p>\r\n<pre class=\"brush:php;auto-links:false;toolbar:false\" contenteditable=\"false\">private function getAccessTokenFromPassword($username, $password) {\r\n		if ($this-&gt;getVariable(\'access_token_uri\') &amp;&amp; $this-&gt;getVariable(\'client_id\') &amp;&amp; $this-&gt;getVariable(\'client_secret\')) {\r\n			return json_decode($this-&gt;makeRequest(\r\n				$this-&gt;getVariable(\'access_token_uri\'),\r\n				\'POST\',\r\n				array(\r\n					\'grant_type\' =&gt; \'password\',\r\n					\'client_id\' =&gt; $this-&gt;getVariable(\'client_id\'),\r\n					\'client_secret\' =&gt; $this-&gt;getVariable(\'client_secret\'),\r\n					\'username\' =&gt; $username,\r\n					\'password\' =&gt; $password\r\n				)\r\n			), TRUE);\r\n		}\r\n		return NULL;\r\n	}</pre>\r\n<p>Not much but once you start getting your hands around this, this piece of code will be self-explanatory.</p>\r\n<p>That was it for&nbsp;the server side; on the client side I use&nbsp;<a href=\"http://book.cakephp.org/2.0/en/core-utility-libraries/httpsocket.html\">HttpSocket</a>. Note that since it is needed to authenticate the client (through oauth2), I would first need&nbsp;to send the client ID and secret to the Server which would&nbsp;reply with an access token if the credentials were valid. Then I needed to provide this access token whenever I would make a request to the&nbsp;Server. There are several ways you can send the access token, most of which are explained in the&nbsp;<a href=\"http://tools.ietf.org/html/draft-ietf-oauth-v2-23#section-4.4\">oauth docs</a>. It is a lot of reading but it is worthy it if you want to get at least a glimpse at how all this work.&nbsp;</p>\r\n<p>Below is a sample of a Client equest&nbsp;to the Server:</p>\r\n<pre class=\"brush:php;auto-links:false;toolbar:false\" contenteditable=\"false\">public function index() {\r\n    \r\n    	$recipes = array();\r\n    	/**\r\n    	 * Look for Recipes on the other server\r\n    	*/\r\n    	$link_parameters = array();\r\n    	$session_access_token = NULL;\r\n    	$access_token = $this-&gt;Session-&gt;read(\'access_token\');\r\n    	if($access_token){\r\n    		$link_parameters[\'access_token\'] = $access_token;\r\n    		$session_access_token = $access_token;\r\n    	}\r\n    \r\n    	$link = SERVER.\"recipes.json\";\r\n    \r\n    	if($returnedData = $this-&gt;establishRestConnection($link, $link_parameters, \'get\', $session_access_token)){\r\n    		$recipes = $returnedData[\'recipes\'];\r\n    			\r\n    	}\r\n    	$this-&gt;set(\'recipes\', $recipes);\r\n    \r\n    }\r\n    \r\n    public function establishRestConnection($link = NULL, $link_parameters = array(), $method = NULL, $access_token = NULL){\r\n    \r\n    	if($data = $this-&gt;User-&gt;restConnect($link, $link_parameters, $method, $access_token)){\r\n    		if($data[\'GIVEN_ACCESS_TOKEN\']){\r\n    			$this-&gt;writeAccessToken($data[\'GIVEN_ACCESS_TOKEN\']);\r\n    			return $data;\r\n    		}\r\n    	}\r\n    \r\n    	return FALSE;\r\n    }\r\n    \r\n    public function acquireAccessToken(){\r\n    	$httpSocket = new HttpSocket();\r\n    	$link = SERVER. \"/recipes/token\";\r\n    	\r\n    \r\n    	$data = array(\r\n    			\'grant_type\' =&gt; \'client_credentials\',\r\n    			\'client_id\' =&gt; \'NTRjZjcwxZWUxZxxxx\',\r\n    			\'client_secret\' =&gt; \'xxxxxxxxxxxxxxxxxxxxxxxxxxx\'\r\n    	);\r\n    \r\n    \r\n    	$response = $httpSocket-&gt;post($link, $data);\r\n    \r\n    	if($response-&gt;code == 200){\r\n    		$data = json_decode($response-&gt;body, true);\r\n    		return $data[\'access_token\'];\r\n    	}\r\n    	return FALSE;\r\n    }\r\n    \r\n    \r\n    public function restConnect($link = NULL, $link_parameters = array(), $method = NULL, $access_token = NULL, $repeat = FALSE){\r\n    \r\n    	$httpSocket = new HttpSocket();\r\n    	switch ($method){\r\n    		case \'get\':\r\n    			$response = $httpSocket-&gt;get($link, $link_parameters);\r\n    			break;\r\n    		case \'put\':\r\n    			$token_string = \'?access_token=\'.$access_token;\r\n    			$response = $httpSocket-&gt;put($link.$token_string, $link_parameters);\r\n    			break;\r\n    		case \'post\':\r\n    			$token_string = \'?access_token=\'.$access_token;\r\n    			$response = $httpSocket-&gt;post($link, $link_parameters);\r\n    			break;\r\n    		case \'delete\':\r\n    			$token_string = \'?access_token=\'.$access_token;\r\n    			$response = $httpSocket-&gt;delete($link, $link_parameters);\r\n    			break;\r\n    \r\n    		default:\r\n    			$response = $httpSocket-&gt;get($link, $link_parameters);\r\n    			break;\r\n    	}\r\n    \r\n    	if($response-&gt;code == 200){\r\n    			\r\n    		$data = json_decode($response-&gt;body, true);\r\n    		$data[\'GIVEN_ACCESS_TOKEN\'] = $access_token;\r\n    		return $data;\r\n    	}elseif($repeat){\r\n    			\r\n    		/**\r\n    		 * Second Access token is invalid\r\n    		 */\r\n    			\r\n    		return FALSE;\r\n    	}\r\n    	elseif($response-&gt;code == 401){\r\n    			\r\n    		/**\r\n    		 * UnAuthorized\r\n    		 * Request New Token\r\n    		 */\r\n    		if($new_access_token = $this-&gt;acquireAccessToken()){\r\n    			/**\r\n    			 * Recursive the function replace access_token\r\n    				*/\r\n    			$link_parameters[\'access_token\'] = $new_access_token;\r\n    			return $this-&gt;restConnect($link, $link_parameters, $method, $new_access_token, TRUE);\r\n    		}\r\n    \r\n    \r\n    	}\r\n    	return FALSE;\r\n    }</pre>\r\n<p>Here is how my Server Restful Controller looks like in the end:</p>\r\n<pre class=\"brush:php;auto-links:false;toolbar:false\" contenteditable=\"false\">&lt;?php \r\nclass RecipesController extends AppController {\r\n\r\n    public $components = array(\'RequestHandler\', \'OAuth.OAuth\');\r\n    public $layout = FALSE;\r\n    \r\n    public function beforeFilter() {\r\n    	$this-&gt;Auth-&gt;allow();\r\n    }\r\n\r\n	public function index() {\r\n        $recipes = $this-&gt;Recipe-&gt;find(\'all\');\r\n        $this-&gt;set(array(\r\n            \'recipes\' =&gt; $recipes,\r\n            \'_serialize\' =&gt; array(\'recipes\')\r\n        ));\r\n    }	\r\n    \r\n   \r\n\r\n    public function view($id) {\r\n        $recipe = $this-&gt;Recipe-&gt;findById($id);\r\n        $this-&gt;set(array(\r\n            \'recipe\' =&gt; $recipe,\r\n            \'_serialize\' =&gt; array(\'recipe\')\r\n        ));\r\n    }\r\n\r\n    public function add() {\r\n        $this-&gt;Recipe-&gt;create();\r\n        if ($this-&gt;Recipe-&gt;save($this-&gt;request-&gt;data)) {\r\n            $message = \'Saved\';\r\n        } else {\r\n            $message = \'Error\';\r\n        }\r\n        $this-&gt;set(array(\r\n            \'message\' =&gt; $message,\r\n            \'_serialize\' =&gt; array(\'message\')\r\n        ));\r\n    }\r\n\r\n    public function edit($id) {\r\n        $this-&gt;Recipe-&gt;id = $id;\r\n        if ($this-&gt;Recipe-&gt;save($this-&gt;request-&gt;data)) {\r\n            $message = \'Saved\';\r\n        } else {\r\n            $message = \'Error\';\r\n        }\r\n        $this-&gt;set(array(\r\n            \'message\' =&gt; $message,\r\n            \'_serialize\' =&gt; array(\'message\')\r\n        ));\r\n    }\r\n\r\n    public function delete($id) {\r\n        if ($this-&gt;Recipe-&gt;delete($id)) {\r\n            $message = \'Deleted\';\r\n        } else {\r\n            $message = \'Error\';\r\n        }\r\n        $this-&gt;set(array(\r\n            \'message\' =&gt; $message,\r\n            \'_serialize\' =&gt; array(\'message\')\r\n        ));\r\n    }\r\n    \r\n    public function token() {\r\n    	$this-&gt;autoRender = false;\r\n    	try {\r\n    		$this-&gt;OAuth-&gt;grantAccessToken();\r\n    	} catch (OAuth2ServerException $e) {\r\n    		$e-&gt;sendHttpResponse();\r\n    	}\r\n    }\r\n}</pre>\r\n<p>And that was how I got it to work!</p>',4,'2015-02-08 06:56:48','2015-02-08 06:56:48',1,NULL,NULL,1);
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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `responsibles`
--

LOCK TABLES `responsibles` WRITE;
/*!40000 ALTER TABLE `responsibles` DISABLE KEYS */;
/*!40000 ALTER TABLE `responsibles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sections`
--

DROP TABLE IF EXISTS `sections`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sections` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `section_identifier` varchar(45) DEFAULT NULL,
  `record_owenr` int(11) DEFAULT NULL,
  `show` int(1) DEFAULT '1',
  `rank` int(11) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `section_class` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sections`
--

LOCK TABLES `sections` WRITE;
/*!40000 ALTER TABLE `sections` DISABLE KEYS */;
/*!40000 ALTER TABLE `sections` ENABLE KEYS */;
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
-- Table structure for table `site_variables`
--

DROP TABLE IF EXISTS `site_variables`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `site_variables` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `upper_left_text` varchar(255) DEFAULT NULL,
  `page_title` varchar(255) DEFAULT NULL,
  `welcome_title` varchar(255) DEFAULT NULL,
  `welcome_text` varchar(255) DEFAULT NULL,
  `logo_path` varchar(255) DEFAULT NULL,
  `responsabe_title` varchar(255) DEFAULT NULL,
  `responsable_description` varchar(255) DEFAULT NULL,
  `contact_title` varchar(255) DEFAULT NULL,
  `contact_description` varchar(255) DEFAULT NULL,
  `copyright_text` varchar(255) DEFAULT NULL,
  `record_owner` int(11) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `site_variables`
--

LOCK TABLES `site_variables` WRITE;
/*!40000 ALTER TABLE `site_variables` DISABLE KEYS */;
/*!40000 ALTER TABLE `site_variables` ENABLE KEYS */;
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
  `link_id` int(11) DEFAULT NULL,
  `record_owner` int(11) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `link_table` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=45 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tags`
--

LOCK TABLES `tags` WRITE;
/*!40000 ALTER TABLE `tags` DISABLE KEYS */;
INSERT INTO `tags` VALUES (1,'music',11,NULL,'2015-01-03 14:39:02','2015-01-03 14:39:02',NULL),(2,'beats by dr. dre',11,NULL,'2015-01-03 14:39:02','2015-01-03 14:39:02','posts'),(3,'sennheiser',11,NULL,'2015-01-03 14:39:02','2015-01-03 14:39:02','posts'),(4,'momentum',11,NULL,'2015-01-03 14:39:02','2015-01-03 14:39:02','posts'),(5,'comparisions',11,NULL,'2015-01-03 14:39:02','2015-01-03 14:39:02','posts'),(6,'overears',11,NULL,'2015-01-03 14:39:02','2015-01-03 14:39:02','posts'),(7,'motivation',12,NULL,'2015-01-03 16:23:23','2015-01-03 16:23:23','posts'),(8,'art',12,NULL,'2015-01-03 16:23:23','2015-01-03 16:23:23','posts'),(9,'beauty',12,NULL,'2015-01-03 16:23:23','2015-01-03 16:23:23','posts'),(10,'basketball',12,NULL,'2015-01-03 16:23:23','2015-01-03 16:23:23','posts'),(11,'winning',12,NULL,'2015-01-03 16:23:23','2015-01-03 16:23:23','posts'),(12,'mentality',12,NULL,'2015-01-03 16:23:23','2015-01-03 16:23:23','posts'),(13,'positivity',13,NULL,'2015-01-03 17:20:40','2015-01-03 17:20:40','posts'),(14,'nico & vinz',13,NULL,'2015-01-03 17:20:40','2015-01-03 17:20:40','posts'),(15,'success',13,NULL,'2015-01-03 17:20:40','2015-01-03 17:20:40','posts'),(16,'happy',13,NULL,'2015-01-03 17:20:40','2015-01-03 17:20:40','posts'),(17,'song of the day',14,NULL,'2015-01-03 17:23:34','2015-01-03 17:23:34','posts'),(18,'computer',15,NULL,'2015-01-03 17:24:26','2015-01-03 17:24:26','posts'),(19,'apple',15,NULL,'2015-01-03 17:24:26','2015-01-03 17:24:26','posts'),(20,'macbook',15,NULL,'2015-01-03 17:24:26','2015-01-03 17:24:26','posts'),(21,'imac',15,NULL,'2015-01-03 17:24:26','2015-01-03 17:24:26','posts'),(22,'design',15,NULL,'2015-01-03 17:24:26','2015-01-03 17:24:26','posts'),(23,'sneakers',16,NULL,'2015-01-03 17:26:46','2015-01-03 17:26:46','posts'),(24,'lacoste',16,NULL,'2015-01-03 17:26:46','2015-01-03 17:26:46','posts'),(25,'amphtill',16,NULL,'2015-01-03 17:26:46','2015-01-03 17:26:46','posts'),(26,'code',17,NULL,'2015-01-04 13:35:26','2015-01-04 13:35:26','posts'),(27,'sample code',18,NULL,'2015-01-04 14:03:13','2015-01-04 14:03:13','posts'),(28,'PHP',18,NULL,'2015-01-04 14:03:13','2015-01-04 14:03:13','posts'),(29,'cakePHP',20,NULL,'2015-01-04 14:46:46','2015-01-04 14:46:46','posts'),(30,'tinymce',20,NULL,'2015-01-04 14:46:46','2015-01-04 14:46:46','posts'),(31,'syntax highlighter',20,NULL,'2015-01-04 14:46:46','2015-01-04 14:46:46','posts'),(32,'source code',20,NULL,'2015-01-04 14:46:46','2015-01-04 14:46:46','posts'),(33,'sh4tinymce',20,NULL,'2015-01-04 14:46:46','2015-01-04 14:46:46','posts'),(34,'admin',4,NULL,'2015-01-05 21:47:22','2015-01-05 21:47:22','posts'),(35,'first user',4,NULL,'2015-01-05 21:47:22','2015-01-05 21:47:22','posts'),(36,'admin',4,NULL,'2015-01-05 21:50:01','2015-01-05 21:50:01','users'),(37,'first user',4,NULL,'2015-01-05 21:50:01','2015-01-05 21:50:01','users'),(38,'cakePHP',22,NULL,'2015-02-08 06:56:48','2015-02-08 06:56:48','posts'),(39,'REST',22,NULL,'2015-02-08 06:56:48','2015-02-08 06:56:48','posts'),(40,'oauth-2',22,NULL,'2015-02-08 06:56:48','2015-02-08 06:56:48','posts'),(41,'PHP',22,NULL,'2015-02-08 06:56:48','2015-02-08 06:56:48','posts'),(42,'server',22,NULL,'2015-02-08 06:56:48','2015-02-08 06:56:48','posts'),(43,'client',22,NULL,'2015-02-08 06:56:48','2015-02-08 06:56:48','posts'),(44,'authentication',22,NULL,'2015-02-08 06:56:48','2015-02-08 06:56:48','posts');
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
  `principal` int(1) NOT NULL DEFAULT '0',
  `type` varchar(45) DEFAULT 'image',
  `url` varchar(500) DEFAULT NULL,
  `list_post_type_id` int(11) DEFAULT NULL,
  `embedded` mediumtext,
  `embedded_type` varchar(155) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `uploads`
--

LOCK TABLES `uploads` WRITE;
/*!40000 ALTER TABLE `uploads` DISABLE KEYS */;
INSERT INTO `uploads` VALUES (1,'BeatsAndSennheiser.jpg','Photo of Beats Studioo 2.0 vs Sennheiser Momentum','DSCN1839.JPG',4182830,'jpg',NULL,NULL,NULL,'2015-01-03 12:35:03','2015-01-03 12:35:03','/Applications/MAMP/htdocs/ElvisUnify/app/Files/Uploads 2015/',NULL,0,'image',NULL,2,NULL,NULL),(2,'Headphones.jpg','Comparison of Beats Studio 2.0 and Sennheiser Momentum','DSCN1839.JPG',4182830,'jpg','posts',11,NULL,'2015-01-03 14:39:02','2015-01-03 14:39:02','/Applications/MAMP/htdocs/ElvisUnify/app/webroot/Files/Uploads 2015/',NULL,1,'image',NULL,2,NULL,NULL),(3,'Amphtill.jpg','Sneaker Lacoste Ampphtill','amphtill.jpg',101721,'jpg','posts',16,NULL,'2015-01-03 17:26:46','2015-01-03 17:26:46','/Applications/MAMP/htdocs/ElvisUnify/app/webroot/Files/Uploads 2015/',NULL,1,'image',NULL,NULL,NULL,NULL),(4,NULL,NULL,NULL,0,'text/plain','posts',13,NULL,NULL,NULL,NULL,NULL,1,'video',NULL,3,'<iframe src=\"//player.vimeo.com/video/68791101\" width=\"500\" height=\"281\" frameborder=\"0\" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe> <p><a href=\"http://vimeo.com/68791101\">NICO & VINZ - AM I WRONG</a> from <a href=\"http://vimeo.com/kavarsingh\">Kavar Singh</a> on <a href=\"https://vimeo.com\">Vimeo</a>.</p>','vimeo'),(5,NULL,NULL,NULL,0,'text/plain','posts',14,NULL,NULL,NULL,NULL,NULL,1,'video',NULL,3,'<iframe width=\"560\" height=\"315\" src=\"//www.youtube.com/embed/6sWpLXaMooE\" frameborder=\"0\" allowfullscreen></iframe>','youtube'),(6,'.jpg',NULL,'pier-sunset-iphone4-wallpaper.jpg',451934,'jpg','posts',NULL,NULL,'2015-01-05 21:47:21','2015-01-05 21:47:21','/Applications/MAMP/htdocs/ElvisUnify/app/Files/Users4/Avatar/',NULL,1,'image',NULL,NULL,NULL,NULL),(7,'avatar.jpg','Avatar','pier-sunset-iphone4-wallpaper.jpg',451934,'jpg','users',4,NULL,'2015-01-05 21:50:01','2015-01-05 21:50:01','/Applications/MAMP/htdocs/ElvisUnify/app/Files/Users4/Avatar/',NULL,1,'image',NULL,NULL,NULL,NULL);
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
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `security_descriptor` varchar(36) DEFAULT NULL,
  `fonction` varchar(100) DEFAULT NULL,
  `record_owner` int(10) unsigned DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `show` int(1) DEFAULT '1',
  `active` int(1) DEFAULT '1',
  `gender` char(1) DEFAULT NULL,
  `description` varchar(505) DEFAULT NULL,
  `embedded` varchar(255) DEFAULT NULL,
  `website` varchar(505) DEFAULT NULL,
  `thrird_party_platform_id` text,
  `third_party_avatar_url` varchar(500) DEFAULT NULL,
  `third_party_type` varchar(255) DEFAULT NULL,
  `uid` varchar(255) NOT NULL,
  `third_party_url` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (4,'elevysi','aadaa0807832c9bb4f03be1735c2bd1a51c8b5a6','Elvis','Hat','elevysi@elevysi.com','',NULL,NULL,'2015-01-01 20:36:36','2015-01-06 21:27:41',1,1,'M','Nice person','','www.elevysi.com',NULL,NULL,NULL,'elevysi',NULL),(5,NULL,NULL,'Elvis Facebook','Hat',NULL,NULL,NULL,NULL,'2015-01-11 03:13:25','2015-01-11 03:13:25',1,1,NULL,NULL,NULL,NULL,'10152584169498263','https://graph.facebook.com/10152584169498263/picture?type=square','Facebook','54b24cc546b9c600006852',NULL);
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

-- Dump completed on 2016-10-31 19:01:00
