-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Dim 28 Septembre 2014 à 13:04
-- Version du serveur :  5.6.16
-- Version de PHP :  5.5.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `nadia`
--

-- --------------------------------------------------------

--
-- Structure de la table `achats`
--

CREATE TABLE IF NOT EXISTS `achats` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `created` datetime NOT NULL,
  `users_id` int(11) NOT NULL,
  `TotalPrix` float NOT NULL,
  `commande` text NOT NULL,
  `email_send` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `articles`
--

CREATE TABLE IF NOT EXISTS `articles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `prix` float NOT NULL,
  `description` text NOT NULL,
  `img_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `updated` datetime NOT NULL,
  `created` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Contenu de la table `categories`
--

INSERT INTO `categories` (`id`, `name`) VALUES
(1, 'paysage');

-- --------------------------------------------------------

--
-- Structure de la table `cms`
--

CREATE TABLE IF NOT EXISTS `cms` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(10) NOT NULL,
  `value` varchar(10) NOT NULL,
  `img_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- Contenu de la table `cms`
--

INSERT INTO `cms` (`id`, `name`, `value`, `img_id`) VALUES
(1, 'colorBg', 'red', 1),
(2, 'colorMn', 'green', 0),
(3, 'lion', 'cochon', 4),
(4, 'lapin', 'dd', 0),
(5, 'ccby', 'zzz', 0),
(6, 'lapin', 'ff', 0),
(7, 'lapin', 'mm', 4),
(8, 'ff', 'ff', 0);

-- --------------------------------------------------------

--
-- Structure de la table `imgs`
--

CREATE TABLE IF NOT EXISTS `imgs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `format` varchar(200) NOT NULL,
  `created` date NOT NULL,
  `modified` date NOT NULL,
  `cm_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Contenu de la table `imgs`
--

INSERT INTO `imgs` (`id`, `id_user`, `name`, `format`, `created`, `modified`, `cm_id`) VALUES
(1, 1, 'lapin', 'lapin', '2014-09-25', '2014-09-25', 1),
(4, 2, 'lion', 'lapin', '2014-09-25', '2014-09-25', 0);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `isAdmin` tinyint(1) NOT NULL,
  `isActivate` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Contenu de la table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `isAdmin`, `isActivate`) VALUES
(1, 'admin', '331021bc258700a2e79d0b7c2a94fd56d7310739', '', 0, 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
