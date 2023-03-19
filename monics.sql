-- phpMyAdmin SQL Dump
-- version 2.6.1
-- http://www.phpmyadmin.net
-- 
-- Host: localhost
-- Generation Time: Mar 19, 2023 at 08:06 PM
-- Server version: 4.1.9
-- PHP Version: 4.3.10
-- 
-- Database: `monics`
-- 

-- --------------------------------------------------------

-- 
-- Table structure for table `appuser`
-- 

CREATE TABLE `appuser` (
  `IdUser` int(12) NOT NULL auto_increment,
  `Adress` varchar(50) NOT NULL default '',
  `Password` varchar(50) NOT NULL default '',
  `Name` varchar(50) NOT NULL default '',
  `ProfileName` varchar(50) NOT NULL default '',
  `SignupDate` datetime NOT NULL default '0000-00-00 00:00:00',
  `Tel` int(20) NOT NULL default '0',
  `Bio` text NOT NULL,
  `ProfileImgPath` varchar(200) NOT NULL default '',
  `CoverImgPath` varchar(200) NOT NULL default '',
  `Type` varchar(50) NOT NULL default 'photographer',
  PRIMARY KEY  (`IdUser`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

-- 
-- Dumping data for table `appuser`
-- 

INSERT INTO `appuser` VALUES (1, 'wajihsayes@gmail.com', 'Wajih07D2', 'EssayesMedWajih', 'Wv jih', '2022-12-23 00:00:00', 27553981, 'Photoghrapher CmeraMen Arttiste Developer', 'img/1.jpg', 'img/5.jpg', 'photographer');
INSERT INTO `appuser` VALUES (2, 'wajih-essayes@outlook.fr', 'Wajih2002', 'wajih', 'Wajih Essayes', '2022-12-21 00:00:00', 99248034, '', 'img/5.jpg', 'img/7.jpg', 'photographer');
INSERT INTO `appuser` VALUES (3, 'HamdiAmor@gmail.com', 'AmorHamdi', 'Amor', 'Amor', '2023-02-02 00:00:00', 95243584, 'Prof Info', 'img/19.jpg', 'img/18.jpg', 'photographer');
INSERT INTO `appuser` VALUES (4, 'YahiaHamdi@gmail.com', 'YahyaYahya', 'Yahya', 'Yahya Ha', '2023-02-02 04:30:00', 27518165, 'Photographer', 'img/10.jpg', 'img/6.jpg', 'photographer');
INSERT INTO `appuser` VALUES (5, 'SalmaElArbi@gmail.com', 'Wajih2002', 'Salma', 'pce Peace', '2023-02-07 00:00:00', 27553981, 'Best Model in The World', 'img/20.jpg', 'img/21.jpg', 'model');
INSERT INTO `appuser` VALUES (6, 'AdelSriha@gsi.com.tn', 'AdelAdel', 'Adel Sriha', 'Adel Sriha', '2023-02-13 00:00:00', 27553981, 'Adel GSI', 'img/15.jpg', 'img/13.jpg', 'photographer');
INSERT INTO `appuser` VALUES (7, 'Salah@salih.com', 'Saleh', 'salih', 'Saleh', '2023-02-22 00:00:00', 54792416, 'fdqsqdqsfrtfgfta', 'img/22.jpg', 'img/6.jpg', 'photographer');

-- --------------------------------------------------------

-- 
-- Table structure for table `follower`
-- 

CREATE TABLE `follower` (
  `FollowerUser` int(12) NOT NULL default '0',
  `FollowredUser` int(12) NOT NULL default '0',
  KEY `FollowerUser` (`FollowerUser`,`FollowredUser`),
  KEY `FollowredUser` (`FollowredUser`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- 
-- Dumping data for table `follower`
-- 

INSERT INTO `follower` VALUES (1, 2);

-- --------------------------------------------------------

-- 
-- Table structure for table `post`
-- 

CREATE TABLE `post` (
  `IdPost` int(50) NOT NULL auto_increment,
  `CreatedBy` int(12) NOT NULL default '0',
  `CreateDate` datetime NOT NULL default '0000-00-00 00:00:00',
  `Caption` varchar(50) NOT NULL default '',
  `PostType` varchar(50) NOT NULL default '',
  `PostDesc` text NOT NULL,
  `FilePath` varchar(200) NOT NULL default '',
  PRIMARY KEY  (`IdPost`),
  KEY `CreatedBy` (`CreatedBy`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=22 ;

-- 
-- Dumping data for table `post`
-- 

INSERT INTO `post` VALUES (1, 1, '2022-12-23 00:00:00', 'Image By me', 'Post', 'Nikon d3200 Art w dra chnoua', 'img/8.jpg');
INSERT INTO `post` VALUES (2, 1, '2022-12-22 00:00:00', 'Im The Best One', 'Post', 'Nikon d3200 Art w dra chnoua', 'img/9.jpg');
INSERT INTO `post` VALUES (3, 1, '2022-12-21 00:00:00', 'Im the best one', 'Post', 'Nikon d3200 Art w dra chnoua', 'img/10.jpg');
INSERT INTO `post` VALUES (4, 2, '2022-12-15 00:00:00', 'Image By me', 'Post', 'Nikon d3200 Art w dra chnoua', 'img/11.jpg');
INSERT INTO `post` VALUES (5, 2, '2022-12-08 00:00:00', 'Im the best one', 'Post', 'Nikon d3200 Art w dra chnoua', 'img/7.jpg');
INSERT INTO `post` VALUES (6, 3, '2023-02-02 00:00:00', 'Warda', 'Post', 'une jolie fleure', 'img/13.jpg');
INSERT INTO `post` VALUES (7, 4, '2023-02-02 00:00:00', 'Im the best one', 'Post', 'waaaaaaaaw', 'img/12.jpg');
INSERT INTO `post` VALUES (8, 4, '2023-02-02 00:00:00', 'Image By me', 'Post', 'fdsfsdfsdfsd', 'img/14.jpg');
INSERT INTO `post` VALUES (9, 3, '2023-02-02 00:00:00', 'Im the best one', 'Post', 'dqdsqdsqd', 'img/15.jpg');
INSERT INTO `post` VALUES (10, 3, '2023-02-02 00:00:00', 'Image By me', 'Story', 'Frist Story', 'img/16.jpg');
INSERT INTO `post` VALUES (11, 4, '2023-02-01 00:00:00', 'Im the best one', 'Story', 'SecondStory', 'img/17.jpg');
INSERT INTO `post` VALUES (12, 3, '0000-00-00 00:00:00', 'The best Story', 'Story', 'ahahhahahahah', 'img/18.jpg');
INSERT INTO `post` VALUES (13, 4, '2023-02-02 00:00:00', 'Im the best one', 'Post', 'yala best web site', 'img/19.jpg');
INSERT INTO `post` VALUES (14, 5, '2023-02-01 00:00:00', 'Image By me', 'Post', 'qdsqdfggsdgfg', 'img/20.jpg');
INSERT INTO `post` VALUES (15, 6, '2023-02-22 00:00:00', 'Im the best one', 'Post', 's;kkkdmmldhb', 'img/21.jpg');
INSERT INTO `post` VALUES (16, 7, '2023-02-14 00:00:00', 'Warda', 'Post', 'dsggdsfsdf', 'img/22.jpg');
INSERT INTO `post` VALUES (17, 5, '2023-02-15 00:00:00', 'Im the best one', 'Post', 'kklllmzaùmùkd', 'img/23.jpg');
INSERT INTO `post` VALUES (18, 6, '2023-02-22 00:00:00', 'The best Story', 'Story', 'rdfserfsdfsdf', 'img/24.jpg');
INSERT INTO `post` VALUES (19, 7, '2023-02-21 00:00:00', 'Im the best one', 'Post', 'dsqfdqsfqsdqs', 'img/25.jpg');
INSERT INTO `post` VALUES (20, 6, '2023-02-23 00:00:00', 'Image By me', 'Story', 'FDSQGFSDFGQDF', 'img/26.jpg');
INSERT INTO `post` VALUES (21, 7, '2023-02-14 00:00:00', 'fsfdsfsd', 'Post', 'qsdqsdqsdsq', 'img/24.jpg');

-- --------------------------------------------------------

-- 
-- Table structure for table `reaction`
-- 

CREATE TABLE `reaction` (
  `UserId` int(12) NOT NULL default '0',
  `PostId` int(50) NOT NULL default '0',
  KEY `UserId` (`UserId`,`PostId`),
  KEY `PostId` (`PostId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- 
-- Dumping data for table `reaction`
-- 

INSERT INTO `reaction` VALUES (1, 1);
INSERT INTO `reaction` VALUES (1, 2);
INSERT INTO `reaction` VALUES (1, 4);
INSERT INTO `reaction` VALUES (2, 5);

-- 
-- Constraints for dumped tables
-- 

-- 
-- Constraints for table `follower`
-- 
ALTER TABLE `follower`
  ADD CONSTRAINT `follower_ibfk_1` FOREIGN KEY (`FollowerUser`) REFERENCES `appuser` (`IdUser`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `follower_ibfk_2` FOREIGN KEY (`FollowredUser`) REFERENCES `appuser` (`IdUser`) ON DELETE CASCADE ON UPDATE CASCADE;

-- 
-- Constraints for table `post`
-- 
ALTER TABLE `post`
  ADD CONSTRAINT `post_ibfk_1` FOREIGN KEY (`CreatedBy`) REFERENCES `appuser` (`IdUser`) ON DELETE CASCADE ON UPDATE CASCADE;

-- 
-- Constraints for table `reaction`
-- 
ALTER TABLE `reaction`
  ADD CONSTRAINT `reaction_ibfk_1` FOREIGN KEY (`UserId`) REFERENCES `appuser` (`IdUser`),
  ADD CONSTRAINT `reaction_ibfk_2` FOREIGN KEY (`PostId`) REFERENCES `post` (`IdPost`);
