CREATE DATABASE vbsqlinjection;
USE vbsqlinjection;
CREATE TABLE `gebruikers` (
 `id` tinyint(4) NOT NULL AUTO_INCREMENT,
 `username` varchar(10) NOT NULL,
 `password` varchar(100) NOT NULL,
 PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;


insert into gebruikers (username, password) values ('jan', MD5('jan_p'));

