-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le: Dim 05 Mai 2013 à 14:50
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
USE edouardssakijlou;
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=31 ;

--
-- Contenu de la table `appartement`
--


-- --------------------------------------------------------

--
-- Structure de la table `bailleur`
--

CREATE TABLE IF NOT EXISTS `bailleur` (
  `bail_login` varchar(10) NOT NULL,
  `bail_pwd` varchar(15) NOT NULL,
  `bail_id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`bail_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Contenu de la table `bailleur`
--

-- --------------------------------------------------------

--
-- Structure de la table `commentaire`
--

CREATE TABLE IF NOT EXISTS `commentaire` (
  `com_id` int(11) NOT NULL AUTO_INCREMENT,
  `com_content` varchar(150) NOT NULL,
  `com_objet` varchar(50) NOT NULL,
  `com_idApp` int(11) NOT NULL,
  PRIMARY KEY (`com_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `commentaire`
--

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Contenu de la table `locataire`
--

-- --------------------------------------------------------

--
-- Structure de la table `photo`
--

CREATE TABLE IF NOT EXISTS `photo` (
  `ph_id` int(11) NOT NULL AUTO_INCREMENT,
  `ph_nom` varchar(25) NOT NULL,
  `ph_chemin` varchar(50) NOT NULL,
  `ph_idApp` int(11) NOT NULL,
  PRIMARY KEY (`ph_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=30 ;

--
-- Contenu de la table `photo`
--

-- --------------------------------------------------------

--
-- Structure de la table `travaux`
--

CREATE TABLE IF NOT EXISTS `travaux` (
  `tra_id` int(11) NOT NULL AUTO_INCREMENT,
  `tra_motif` varchar(50) NOT NULL,
  `tra_dateDeb` date NOT NULL,
  `tra_dateFin` date NOT NULL,
  `tra_cout` float NOT NULL,
  `tra_idApp` int(11) NOT NULL,
  PRIMARY KEY (`tra_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Contenu de la table `travaux`
--

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
