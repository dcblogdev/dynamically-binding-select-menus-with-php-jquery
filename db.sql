DROP TABLE IF EXISTS `book_categories`;

CREATE TABLE `book_categories` (
  `catID` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `catTitle` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`catID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `book_categories` (`catID`, `catTitle`)
VALUES
	(1,'HTML'),
	(2,'PHP'),
	(3,'jQuery'),
	(4,'CSS');


DROP TABLE IF EXISTS `books`;

CREATE TABLE `books` (
  `bookID` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `bookTitle` varchar(255) DEFAULT NULL,
  `catID` int(11) DEFAULT NULL,
  PRIMARY KEY (`bookID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `books` (`bookID`, `bookTitle`, `catID`)
VALUES
	(1,'Introducing HTML 5',1),
	(2,'What Is HTML5',1),
	(3,'PHP & MySQL In Easy Steps',2),
	(4,'PHP 6 and MySQL 5 for Dynamic Web Sites',2),
	(5,'PHP Cookbook ',2),
	(6,'Learning PHP 5',2),
	(7,'JavaScript & jQuery: The Missing Manual ',3),
	(8,'jQuery: Novice to Ninja 2nd Edition',3),
	(9,'jQuery Cookbook',3),
	(10,'CSS: The Missing Manual',4),
	(11,'What\'s New in CSS3',4),
	(12,'CSS Pocket Reference',4);

