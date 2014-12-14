-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Dim 14 Décembre 2014 à 21:29
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Contenu de la table `articles`
--

INSERT INTO `articles` (`id`, `name`, `prix`, `description`, `img_id`, `category_id`, `updated`, `created`) VALUES
(1, 'sac ', 50, 'lla\r\n', 1, 1, '2014-11-03 16:15:32', '2014-11-03 16:15:32'),
(2, 'sac', 50, 'Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l''imprimerie depuis les années 1500, quand un peintre anonyme assembla ensemble des morceaux de texte pour réaliser un livre spécimen de polices de texte. Il n''a pas fait que survivre cinq siècles, mais s''est aussi adapté à la bureautique informatique, sans que son contenu n''en soit modifié. Il a été popularisé dans les années 1960 grâce à la vente de feuilles Letraset contenant des passages du Lorem Ipsum, et, plus récemment, par son inclusion dans des applications de mise en page de texte, comme Aldus PageMaker.', 2, 1, '2014-11-09 16:53:19', '2014-11-09 16:53:19'),
(3, 'gros sac', 32, 'ornecdzk,splqivenf ezjdf oezn voe oneo noeaov oezvo n oenoveo ne nvozs vo eovn moenvo mjze vnoez svmeaz ', 1, 2, '2014-11-11 15:19:36', '2014-11-11 15:19:36'),
(4, 'sac petit', 10, 'jgroesn ^âhzr vne v^asrozvonosv oe àrzhoifvjorzjvo hoe&rhojvoejvegen v og ogoneon oehoéevneoo  ojoez h ei pi hohkh kyink ig jgihig pib jb obk oh bz p j hoeé kjvzh ojeké e éeo hpoe henv eh ovhepo oe^\r\n\r\nPanier (vide)\r\n', 1, 1, '2014-11-11 15:21:06', '2014-11-11 15:21:06');

-- --------------------------------------------------------

--
-- Structure de la table `boutique`
--

CREATE TABLE IF NOT EXISTS `boutique` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `achat` varchar(50) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `updated` datetime NOT NULL,
  `panier` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `boutiques_articles`
--

CREATE TABLE IF NOT EXISTS `boutiques_articles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `boutique_id` int(11) NOT NULL,
  `article_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `boutiques_categories`
--

CREATE TABLE IF NOT EXISTS `boutiques_categories` (
  `id` int(11) NOT NULL,
  `boutiques_id` int(11) NOT NULL,
  `categories_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `value` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Contenu de la table `categories`
--

INSERT INTO `categories` (`id`, `value`) VALUES
(1, 'paysage'),
(2, 'sac'),
(3, 'bijoux');

-- --------------------------------------------------------

--
-- Structure de la table `cms`
--

CREATE TABLE IF NOT EXISTS `cms` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `type` varchar(10) NOT NULL,
  `img_id` int(11) NOT NULL,
  `article_id` int(11) NOT NULL,
  `categorie_id` int(11) NOT NULL,
  `value_id` int(11) NOT NULL,
  `text_id` int(11) NOT NULL,
  `color_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=21 ;

--
-- Contenu de la table `cms`
--

INSERT INTO `cms` (`id`, `name`, `type`, `img_id`, `article_id`, `categorie_id`, `value_id`, `text_id`, `color_id`) VALUES
(1, 'color-fond-exterieur', 'color', 0, 0, 0, 0, 0, 5),
(3, 'color-fond-menu-generale', 'color', 0, 0, 0, 0, 0, 8),
(4, 'color-passage-souris-menu-generale', 'color', 0, 0, 0, 0, 0, 9),
(5, 'color-fond-interieur', 'color', 0, 0, 0, 0, 0, 5),
(6, 'color-police-menu-generale-passage-souris', 'color', 0, 0, 0, 0, 0, 10),
(7, 'color-police-menu-generale-sans-souris', 'color', 0, 0, 0, 0, 0, 4),
(8, 'color-police-top-bar', 'color', 0, 0, 0, 0, 0, 4),
(9, 'color-fond-top-bar', 'color', 0, 0, 0, 0, 0, 7),
(10, 'texte-presentation-home', 'text', 0, 0, 0, 0, 2, 0),
(11, 'slider1', 'img', 10, 0, 0, 0, 0, 0),
(12, 'slider2', 'img', 9, 0, 0, 0, 0, 0),
(13, 'slider0', 'img', 9, 0, 0, 0, 0, 0),
(14, 'article-home1', 'img', 6, 0, 0, 0, 0, 0),
(15, 'article-home2', 'img', 7, 0, 0, 0, 0, 0),
(16, 'article-home3', 'img', 8, 0, 0, 0, 0, 0),
(17, 'texte-presentation-article1-home-courte', 'text', 0, 0, 0, 0, 3, 0),
(18, 'texte-presentation-article2-home-courte', 'text', 0, 0, 0, 0, 3, 0),
(19, 'texte-presentation-article3-home-courte', 'text', 0, 0, 0, 0, 3, 0),
(20, 'articleEnDevant', 'article', 0, 3, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Structure de la table `colors`
--

CREATE TABLE IF NOT EXISTS `colors` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `value` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

--
-- Contenu de la table `colors`
--

INSERT INTO `colors` (`id`, `name`, `value`) VALUES
(1, 'red', '#5fe931'),
(2, 'color1', '#46b98b'),
(3, 'pink', '#ff2bff'),
(4, 'blanc', '#ffffff'),
(5, 'noir', '#000000'),
(6, 'marron', '#988863'),
(7, 'color-top-bar-base', '#212121'),
(8, 'couleur-menu-base-sans-souris', '#545454'),
(9, 'couleur-menu-base-avec-souris', '#5f5f5f'),
(10, 'couleur-menu-police-apres-passage-souris', '#ebebeb');

-- --------------------------------------------------------

--
-- Structure de la table `imgs`
--

CREATE TABLE IF NOT EXISTS `imgs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `created` date NOT NULL,
  `modified` date NOT NULL,
  `cm_id` int(11) NOT NULL,
  `value` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

--
-- Contenu de la table `imgs`
--

INSERT INTO `imgs` (`id`, `id_user`, `name`, `created`, `modified`, `cm_id`, `value`) VALUES
(2, 0, 'img2', '2014-11-09', '2014-11-09', 0, '2.png'),
(5, 0, 'img3', '2014-11-12', '2014-11-12', 0, '5.JPG'),
(6, 0, 'article1', '2014-11-23', '2014-11-23', 0, '6.jpg'),
(7, 0, 'article2', '2014-11-23', '2014-11-23', 0, '7.jpg'),
(8, 0, 'article3', '2014-11-23', '2014-11-23', 0, '8.JPG'),
(9, 0, 'slider0', '2014-12-14', '2014-12-14', 0, '9.jpg'),
(10, 0, 'slider1', '2014-12-14', '2014-12-14', 0, '10.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `texts`
--

CREATE TABLE IF NOT EXISTS `texts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `value` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Contenu de la table `texts`
--

INSERT INTO `texts` (`id`, `name`, `value`) VALUES
(1, 'lapin', 'Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l''imprimerie depuis les années 1500, quand un peintre anonyme assembla ensemble des morceaux de texte pour réaliser un livre spécimen de polices de texte. Il n''a pas fait que survivre cinq siècles, mais s''est aussi adapté à la bureautique informatique, sans que son contenu n''en soit modifié. Il a été popularisé dans les années 1960 grâce à la vente de feuilles Letraset contenant des passages du Lorem Ipsum, et, plus récemment, par son inclusion dans des applications de mise en page de texte, comme Aldus PageMaker.'),
(2, 'presentation', 'CrÃ©Ã© en<b> 2011</b> dans la rÃ©gion de Marseille par la crÃ©atrice Nadia Barberet.\r\nFil de bohÃªme est une marque de maroquinerie textile haute fantaisie qui propose 2 fois par an des collections de sacs modulables et dâ€™accessoires Ã  coordonner.\r\n- Du mini-sac compartimentÃ© pour emporter lâ€™essentiel, au sac 2 en 1, qui transforme un cabas en sac Ã  main (modÃ¨le dÃ©posÃ©) , les formes sâ€™adaptent Ã  lâ€™envie au quotidien des femmes.<br>\r\n- Des accessoires Ã  coordonner se glissent les uns dans les autres faÃ§on Â« matriochka Â» pour organiser le sac ou se porter Ã  main.\r\nToutes les piÃ¨ces sont entiÃ¨rement rÃ©alisÃ©es Ã  la main et en sÃ©rie limitÃ©e Ã  lâ€™atelier dans des textiles et toiles recherchÃ©s et Ã©lÃ©gants afin de donner aux collections une touche rÃ©solument fÃ©minine.\r\nEn 2014 la marque FIL DE BOHÃŠME a obtenu le PURE LABEL de la Maison MÃ©diterranÃ©enne des mÃ©tiers de la Mode- MARSEILLE.'),
(3, 'article', 'article111');

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Contenu de la table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `isAdmin`, `isActivate`) VALUES
(1, 'admin', '331021bc258700a2e79d0b7c2a94fd56d7310739', '', 1, 0),
(2, 'test', 'eec4e6a8a4051bbf4e15483b89b14ae4242fcdcd', 'ruhtra.mar@gmail.com', 0, 0),
(3, 'test1', 'eec4e6a8a4051bbf4e15483b89b14ae4242fcdcd', 'ruhtra.mar1@gmail.com', 0, 0);

-- --------------------------------------------------------

--
-- Structure de la table `values`
--

CREATE TABLE IF NOT EXISTS `values` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(11) NOT NULL,
  `value` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Contenu de la table `values`
--

INSERT INTO `values` (`id`, `name`, `value`) VALUES
(1, 'red', '#ff0000'),
(2, 'green', '#00ff00'),
(3, 'blue', '#0000ff'),
(4, 'black', '#222222'),
(5, 'rien', 'none');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
