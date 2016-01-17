use sschange;
DROP TABLE IF EXISTS `message`;
CREATE TABLE `message` (
  `id` mediumint(9) NOT NULL AUTO_INCREMENT,
  `name` char(128) NOT NULL,
  `content` text NOT NULL,
  `answer` text DEFAULT NULL,
  `publishtime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `lastrevisetime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
LOCK TABLES `message` WRITE;
INSERT INTO `message` (id,name,content,publishtime,lastrevisetime) VALUES (1,'吳懿文','有甚麼問題歡迎在這裡發問喔~\n我有看到就會回答','2016-1-17 12:30:10','2016-1-17 12:30:10');
UNLOCK TABLES;
DROP TABLE IF EXISTS `member`;
CREATE TABLE `member` (
  `id` mediumint(9) NOT NULL AUTO_INCREMENT,
  `name` char(128) NOT NULL,
  `skill` text NOT NULL,
  `wanttolearn` text NOT NULL,
  `publishtime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `lastrevisetime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;