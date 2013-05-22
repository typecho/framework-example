# Dump of table people
# ------------------------------------------------------------

DROP TABLE IF EXISTS `people`;

CREATE TABLE `people` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(64) DEFAULT NULL,
  `description` text,
  `created` int(11) DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `created` (`created`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `people` WRITE;
/*!40000 ALTER TABLE `people` DISABLE KEYS */;

INSERT INTO `people` (`id`, `name`, `description`, `created`)
VALUES
	(1,'joyqi','这是一个好青年',1369215468),
	(2,'fenbox','文艺青年',1369215598),
	(3,'sunny','UFO',1369215765);

/*!40000 ALTER TABLE `people` ENABLE KEYS */;
UNLOCK TABLES;