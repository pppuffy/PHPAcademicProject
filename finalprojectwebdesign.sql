# Host: 127.0.0.1  (Version: 5.0.96-community-nt)
# Date: 2014-08-12 23:25:46
# Generator: MySQL-Front 5.3  (Build 4.120)

/*!40101 SET NAMES utf8 */;

#
# Structure for table "books"
#

DROP TABLE IF EXISTS `books`;
CREATE TABLE `books` (
  `Id` int(11) NOT NULL auto_increment,
  `name` varchar(255) NOT NULL default '',
  `author` varchar(255) default NULL,
  `year` varchar(255) default NULL,
  PRIMARY KEY  (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

#
# Data for table "books"
#

INSERT INTO `books` VALUES (1,'First Steps in Flex','Bruce Eckel','2000'),(2,'Thinking in Java 3rd Edition','Bruce Eckel','2002'),(3,'Thinking in Java 4th Edition','Bruce Eckel','2006'),(4,'Thinking in C++','Bruce Eckel','2004'),(5,'C++ Inside & Out','Bruce Eckel','1998'),(6,'Black Belt C++, The Master\'s Collection','Bruce Eckel','1999'),(7,'Using C++','Bruce Eckel','2001'),(8,'Computer Interfacing with Pascal & C','Bruce Eckel','1996');

#
# Structure for table "commentflex"
#

DROP TABLE IF EXISTS `commentflex`;
CREATE TABLE `commentflex` (
  `sentence` varchar(255) default NULL,
  `name` varchar(255) default NULL,
  KEY `sentence` (`sentence`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

#
# Data for table "commentflex"
#

INSERT INTO `commentflex` VALUES ('It is a very good book','Nick'),('I love it so much','Lily'),('Amazing Book','Jack'),('I like it ','Zhou'),('Very Very Very Helpful','Obama'),('How are you','Mr.Joke'),('Fine, Thank You','Hobs'),('This is the best book that I ever read','Fans'),('hah','jobs');

#
# Structure for table "java3comments"
#

DROP TABLE IF EXISTS `java3comments`;
CREATE TABLE `java3comments` (
  `Id` int(11) NOT NULL auto_increment,
  `reader` varchar(255) NOT NULL default '',
  `comment` varchar(255) NOT NULL default '',
  PRIMARY KEY  (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

#
# Data for table "java3comments"
#

INSERT INTO `java3comments` VALUES (1,'Jack','It is very good book'),(2,'Bob','A helpful instruction to learn java'),(3,'Li','I love it');

#
# Structure for table "quote"
#

DROP TABLE IF EXISTS `quote`;
CREATE TABLE `quote` (
  `Id` int(11) NOT NULL auto_increment,
  `author` varchar(255) NOT NULL default '',
  `sentence` varchar(255) default NULL,
  PRIMARY KEY  (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

#
# Data for table "quote"
#

INSERT INTO `quote` VALUES (1,'Yeats','The best lack all conviction, while the worst are full of passionate intensity.'),(2,'Jeff Atwood','Throwing a book of rules at a terrible programmer just creates a terrible programmer with a bruise on their head where the book bounced off.'),(3,'Benjamin Franklin','Tell me and I forget. Teach me and I remember. Involve me and I learn.'),(4,'Henry Ford','If I\'d asked people what they wanted, they would have asked for a better horse.'),(5,'Vidiu Platon','I don\'t care if it works on your machine! We are not shipping your machine!'),(6,'Carson Gross','I\'m beginning to wonder if the sum total pain caused by the box-and-arrow crowd has outweighed the occasional usefulness of UML.'),(7,'Max Kanat-Alexander','If somebody comes up to you and says something like, \"How do I make this pony fly to the moon?\", the question you need to ask is, \"What problem are you trying to solve?\" You\'ll find out that they really need to collect gray rocks. ');
