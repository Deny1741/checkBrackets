# ************************************************************
# Sequel Pro SQL dump
# Версия 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Адрес: localhost (MySQL 5.7.26)
# Схема: flowlu
# Время создания: 2021-12-08 09:19:04 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Дамп таблицы brackets
# ------------------------------------------------------------

DROP TABLE IF EXISTS `brackets`;

CREATE TABLE `brackets` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL DEFAULT '',
  `result` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `brackets` WRITE;
/*!40000 ALTER TABLE `brackets` DISABLE KEYS */;

INSERT INTO `brackets` (`id`, `name`, `result`)
VALUES
	(30,'( 2 * 45 [ 11 ) - 7]',0),
	(31,'( 2 { 3 / [ ? } 1 ] )',0),
	(32,'> < > <',0),
	(33,'< ( { [ 42 ] } ) >',1),
	(34,'( 2 * 44 [ 11 ] ) ',1),
	(35,'< a * ( 4 / 7 - [ 2 - 2] / { 11 } ) >',1),
	(36,'(привет+пока)',1),
	(53,'[[]]{[}',0),
	(54,'{{[}}]',0);

/*!40000 ALTER TABLE `brackets` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
