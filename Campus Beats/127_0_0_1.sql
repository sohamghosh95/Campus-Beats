-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 17, 2015 at 02:34 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `campus_beats`
--

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE IF NOT EXISTS `events` (
  `idEvent` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(40) NOT NULL,
  `type` varchar(5) NOT NULL,
  `branch` varchar(4) DEFAULT NULL,
  `about` text,
  `venue` varchar(4) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `youtubeUrl` varchar(80) DEFAULT NULL,
  `idPoster` varchar(30) DEFAULT NULL,
  `idUser` int(10) NOT NULL,
  `idSoc` int(10) NOT NULL,
  PRIMARY KEY (`idEvent`),
  UNIQUE KEY `idEvent` (`idEvent`),
  KEY `idEvent_2` (`idEvent`),
  KEY `idUser` (`idUser`),
  KEY `idSoc` (`idSoc`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`idEvent`, `name`, `type`, `branch`, `about`, `venue`, `date`, `time`, `youtubeUrl`, `idPoster`, `idUser`, `idSoc`) VALUES
(1, 'Orientation Ceremony', 'TT', 'COE', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean odio orci, accumsan vel lectus ut, finibus viverra diam.', 'CH', '2015-09-03', '17:15:00', NULL, '1', 10000, 10005),
(2, 'Anti Coding', 'TT', 'COE', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima ipsa est provident quia, corporis fugiat natus, animi molestias placeat nesciunt ratione.', 'B103', '2015-11-02', '17:15:00', NULL, '2', 10000, 10005),
(3, 'Code Jam', 'TT', 'COE', 'lorem lorem lorem lorem lorem', 'CITM', '2015-11-12', '12:00:00', NULL, NULL, 10000, 10005);

-- --------------------------------------------------------

--
-- Table structure for table `passwords`
--

CREATE TABLE IF NOT EXISTS `passwords` (
  `idUser` int(10) NOT NULL AUTO_INCREMENT,
  `pass` varchar(40) NOT NULL,
  PRIMARY KEY (`idUser`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `posters`
--

CREATE TABLE IF NOT EXISTS `posters` (
  `idPoster` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(40) NOT NULL,
  `upDate` date NOT NULL,
  `upPub` varchar(40) NOT NULL,
  PRIMARY KEY (`idPoster`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `publishers`
--

CREATE TABLE IF NOT EXISTS `publishers` (
  `idSoc` int(10) NOT NULL,
  `idUser` int(10) NOT NULL,
  `idPub` int(10) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`idPub`),
  UNIQUE KEY `idPub` (`idPub`),
  KEY `idUser` (`idUser`),
  KEY `idSoc` (`idSoc`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `society`
--

CREATE TABLE IF NOT EXISTS `society` (
  `idSoc` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(40) NOT NULL,
  `about` text NOT NULL,
  `type` varchar(2) NOT NULL,
  `logoUrl` varchar(40) NOT NULL,
  `fbUrl` varchar(80) NOT NULL,
  PRIMARY KEY (`idSoc`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10007 ;

--
-- Dumping data for table `society`
--

INSERT INTO `society` (`idSoc`, `name`, `about`, `type`, `logoUrl`, `fbUrl`) VALUES
(10000, 'Frosh Week', 'FROSH WEEK comprises of various activities and events for the fresher class of Thapar University to ease them into their new surroundings.', 'TT', '10000', 'https://www.facebook.com/froshweektu'),
(10001, 'AIESEC', 'AIESEC is the world''s leading youth leadership development organization. Developing the potential of young people across 128 countries and territories', 'NT', 'aiesec', 'https://www.facebook.com/AIESECglobal'),
(10002, 'Thapar MUN Society', 'Thapar University welcomes you to the official page of its Model United Nations Society of Thapar University, Patiala.', 'NT', 'tumun', 'https://www.facebook.com/thaparmunsociety'),
(10003, 'Enactus', 'A community of student and business leaders committed to use the power of entrepreneurial action to transform lives and shape a better sustainable world', 'NT', 'enactus', 'https://www.facebook.com/TUEnactus'),
(10004, 'LUGTU', 'Thapar University Linux Users Group supporting all things Linux and Open Source', 'TT', 'lugtu', 'https://www.facebook.com/LinuxUsrGrp.ThaparUniversity'),
(10005, 'Creative Computing Society', 'The Creative Computing Society is a University level society of Thapar University. Its president is Dr. Inderveer Chana', 'TT', 'ccs', 'https://www.facebook.com/CCSTU'),
(10006, 'OWASP', 'The Open Web Application Security Project (OWASP) Student chapters,Thapar University helps to teach, learn, and inspire application security.', 'TT', 'owasp', 'https://www.facebook.com/owasptsc');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `idUser` int(10) NOT NULL AUTO_INCREMENT,
  `firstName` varchar(40) NOT NULL,
  `middleName` varchar(40) DEFAULT NULL,
  `lastName` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `phone` int(11) NOT NULL,
  PRIMARY KEY (`idUser`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10001 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`idUser`, `firstName`, `middleName`, `lastName`, `email`, `phone`) VALUES
(10000, 'Soumik', NULL, 'Pradhan', 'soumikpradhan14@gmail.com', 87258328);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `events`
--
ALTER TABLE `events`
  ADD CONSTRAINT `fk_eventsSoc` FOREIGN KEY (`idSoc`) REFERENCES `society` (`idSoc`),
  ADD CONSTRAINT `fk_eventsUser` FOREIGN KEY (`idUser`) REFERENCES `users` (`idUser`);

--
-- Constraints for table `passwords`
--
ALTER TABLE `passwords`
  ADD CONSTRAINT `fk_userpass` FOREIGN KEY (`idUser`) REFERENCES `users` (`idUser`) ON DELETE CASCADE;

--
-- Constraints for table `publishers`
--
ALTER TABLE `publishers`
  ADD CONSTRAINT `fk_pubSoc` FOREIGN KEY (`idSoc`) REFERENCES `society` (`idSoc`),
  ADD CONSTRAINT `fk_pubUser` FOREIGN KEY (`idUser`) REFERENCES `users` (`idUser`);
--
-- Database: `test`
--

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
