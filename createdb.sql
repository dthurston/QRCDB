SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Database: `qrcdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `inventory`
--

CREATE TABLE IF NOT EXISTS `inventory` (
  `item_id` smallint(4) unsigned NOT NULL AUTO_INCREMENT,
  `item_name` varchar(20) NOT NULL,
  `item_status` char(3) NOT NULL,
  `user_id` int(20) DEFAULT NULL,
  `checkin_date` datetime DEFAULT NULL,
  `checkout_date` datetime DEFAULT NULL,
  PRIMARY KEY (`item_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=53 ;

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `user_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `first_name` varchar(15) NOT NULL,
  `last_name` varchar(30) NOT NULL,
  `email` varchar(40) DEFAULT NULL,
  `password` varchar(41) NOT NULL,
  `registration_date` datetime NOT NULL,
  PRIMARY KEY (`user_id`),
  UNIQUE KEY `username` (`username`),
  KEY `first_name` (`first_name`),
  KEY `last_name` (`last_name`),
  KEY `password` (`password`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;
