-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Mer 28 Septembre 2016 à 19:32
-- Version du serveur :  5.7.9
-- Version de PHP :  5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `cdpm2`
--
CREATE DATABASE IF NOT EXISTS `cdpm2` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `cdpm2`;

-- --------------------------------------------------------

--
-- Structure de la table `ateliers`
--

DROP TABLE IF EXISTS `ateliers`;
CREATE TABLE IF NOT EXISTS `ateliers` (
  `id` int(4) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nom` varchar(25) COLLATE utf8_bin DEFAULT NULL,
  `theme` varchar(25) COLLATE utf8_bin DEFAULT NULL,
  `type` varchar(25) COLLATE utf8_bin NOT NULL,
  `discipline` varchar(25) COLLATE utf8_bin NOT NULL,
  `public` varchar(8) COLLATE utf8_bin NOT NULL,
  `duree` int(3) DEFAULT NULL,
  `capacite` int(4) DEFAULT NULL,
  `animateur` varchar(50) COLLATE utf8_bin NOT NULL,
  `adresse` varchar(50) COLLATE utf8_bin NOT NULL,
  `ville` varchar(40) COLLATE utf8_bin NOT NULL,
  `codePostal` int(5) NOT NULL,
  `zone` varchar(1) COLLATE utf8_bin NOT NULL,
  `creneaux` varchar(5) COLLATE utf8_bin DEFAULT NULL,
  `resume` text COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
