-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le: Mer 01 Mai 2013 à 11:36
-- Version du serveur: 5.5.24-log
-- Version de PHP: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `akijlou`
--
CREATE DATABASE IF NOT EXISTS akijlou;
USE akijlou; 
-- --------------------------------------------------------

--
-- Structure de la table `appartement`
--

CREATE TABLE IF NOT EXISTS `appartement` (
  `app_id` int(11) NOT NULL AUTO_INCREMENT,
  `app_ad1` varchar(125) NOT NULL,
  `app_ad2` varchar(125) DEFAULT NULL,
  `app_cp` varchar(5) NOT NULL,
  `app_ville` varchar(50) NOT NULL,
  `app_loye` float NOT NULL,
  `app_idBailleur` int(11) NOT NULL,
  PRIMARY KEY (`app_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=27 ;

--
-- Contenu de la table `appartement`
--

INSERT INTO `appartement` (`app_id`, `app_ad1`, `app_ad2`, `app_cp`, `app_ville`, `app_loye`, `app_idBailleur`) VALUES
(24, '67 rue Mestre', 'RÃ©sidence Batany app 6', '33200', 'BORDEAUX', 494, 12),
(25, '50 rue du loup', '', '33000', 'BORDEAUX', 400, 12),
(26, '8 allÃ©e de la fontaine d''albion', '', '33370', 'SALLEBOEUF', 500, 20);

-- --------------------------------------------------------

--
-- Structure de la table `bailleur`
--

CREATE TABLE IF NOT EXISTS `bailleur` (
  `bail_login` varchar(10) NOT NULL,
  `bail_pwd` varchar(15) NOT NULL,
  `bail_id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`bail_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Contenu de la table `bailleur`
--

INSERT INTO `bailleur` (`bail_login`, `bail_pwd`, `bail_id`) VALUES
('cynthia', 'cyRhfVxdX78Uk', 11),
('edouard', 'edjtgzjPsbAw.', 12),
('joel', 'jo66yMe1oOvWc', 14),
('martine', 'maBfrusWRmQvs', 20);

-- --------------------------------------------------------

--
-- Structure de la table `commentaire`
--

CREATE TABLE IF NOT EXISTS `commentaire` (
  `com_id` int(11) NOT NULL AUTO_INCREMENT,
  `com_content` varchar(150) NOT NULL,
  `com_objet` varchar(50) NOT NULL,
  PRIMARY KEY (`com_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `locataire`
--

CREATE TABLE IF NOT EXISTS `locataire` (
  `loc_id` int(11) NOT NULL AUTO_INCREMENT,
  `loc_nom` varchar(50) NOT NULL,
  `loc_prenom` varchar(25) NOT NULL,
  `loc_dateEntree` date NOT NULL,
  `loc_dateDepart` date DEFAULT NULL,
  `loc_caution` float NOT NULL,
  `loc_situation` varchar(25) NOT NULL,
  `loc_garant` varchar(200) DEFAULT NULL,
  `loc_idApp` int(11) NOT NULL,
  PRIMARY KEY (`loc_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Contenu de la table `locataire`
--

INSERT INTO `locataire` (`loc_id`, `loc_nom`, `loc_prenom`, `loc_dateEntree`, `loc_dateDepart`, `loc_caution`, `loc_situation`, `loc_garant`, `loc_idApp`) VALUES
(4, 'souan', 'edouard', '2011-07-19', NULL, 17000, 'ETUDIANT', 'Joel Souan', 24),
(5, 'marcelon', 'martine', '2012-05-23', NULL, 300, 'CDI', 'Yvette Oggian', 25);

-- --------------------------------------------------------

--
-- Structure de la table `photo`
--

CREATE TABLE IF NOT EXISTS `photo` (
  `ph_id` int(11) NOT NULL AUTO_INCREMENT,
  `ph_nom` varchar(25) NOT NULL,
  `ph_date` date NOT NULL,
  `ph_chemin` varchar(50) NOT NULL,
  PRIMARY KEY (`ph_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `travaux`
--

CREATE TABLE IF NOT EXISTS `travaux` (
  `tra_id` int(11) NOT NULL AUTO_INCREMENT,
  `tra_motif` varchar(50) NOT NULL,
  `tra_date` date NOT NULL,
  `tra_cout` float NOT NULL,
  PRIMARY KEY (`tra_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
