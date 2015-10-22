SET FOREIGN_KEY_CHECKS=0;
SET AUTOCOMMIT = 0;

START TRANSACTION;

DROP TABLE IF EXISTS `article`;
CREATE TABLE IF NOT EXISTS `article` (
  `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `created` datetime DEFAULT NULL,
  `changed` datetime DEFAULT NULL,
  `author` smallint(5) unsigned DEFAULT NULL,
  `status` enum('new','reviewed','released','blocked','outdated') NOT NULL DEFAULT 'new',
  `category` tinyint(3) unsigned DEFAULT NULL,
  `title` varchar(64) NOT NULL,
  `teaser` tinytext NOT NULL,
  `text` text NOT NULL,
  PRIMARY KEY (`id`),
  KEY `category` (`category`),
  KEY `author` (`author`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8;

DROP TABLE IF EXISTS `author`;
CREATE TABLE IF NOT EXISTS `author` (
  `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `first_name` varchar(64) NOT NULL,
  `last_name` varchar(64) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8;

DROP TABLE IF EXISTS `category`;
CREATE TABLE IF NOT EXISTS `category` (
  `id` tinyint(3) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(32) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8;

ALTER TABLE `article`
  ADD CONSTRAINT `article_ibfk_2` FOREIGN KEY (`author`) REFERENCES `author` (`id`) ON DELETE SET NULL ON UPDATE NO ACTION,
  ADD CONSTRAINT `article_ibfk_1` FOREIGN KEY (`category`) REFERENCES `category` (`id`) ON DELETE SET NULL ON UPDATE NO ACTION;

SET FOREIGN_KEY_CHECKS=1;

COMMIT;

