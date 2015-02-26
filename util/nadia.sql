-- phpMyAdmin SQL Dump
-- version 4.3.10
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Jeu 26 Février 2015 à 16:40
-- Version du serveur :  10.0.16-MariaDB-log
-- Version de PHP :  5.6.6

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
  `id` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `users_id` int(11) NOT NULL,
  `TotalPrix` float NOT NULL,
  `commande` text NOT NULL,
  `email_send` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `actualites`
--

CREATE TABLE IF NOT EXISTS `actualites` (
  `id` int(11) NOT NULL,
  `titre` varchar(200) NOT NULL,
  `text` text NOT NULL,
  `image_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Contenu de la table `actualites`
--

INSERT INTO `actualites` (`id`, `titre`, `text`, `image_id`) VALUES
(1, 'Nouvelle collection', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel, libero ut iure ab, accusamus illum tempore maiores similique dolore excepturi quas natus itaque non eum eos, deserunt. Totam quos, tempore.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel, libero ut iure ab, accusamus illum tempore maiores similique dolore excepturi quas natus itaque non eum eos, deserunt. Totam quos, tempore.\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit. Vel, libero ut iure ab, accusamus illum tempore maiores similique dolore excepturi quas natus itaque non eum eos, deserunt. Totam quos, tempore.\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit. Vel, libero ut iure ab, accusamus illum tempore maiores similique dolore excepturi quas natus itaque non eum eos, deserunt. Totam quos, tempore.\r\n', 6),
(2, 'Le Printent', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel, libero ut iure ab, accusamus illum tempore maiores similique dolore excepturi quas natus itaque non eum eos, deserunt. Totam quos, tempore.\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit. Vel, libero ut iure ab, accusamus illum tempore maiores similique dolore excepturi quas natus itaque non eum eos, deserunt. Totam quos, tempore.\r\n', 7);

-- --------------------------------------------------------

--
-- Structure de la table `adresse_pofiles`
--

CREATE TABLE IF NOT EXISTS `adresse_pofiles` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `rue` varchar(255) NOT NULL,
  `num_rue` int(5) NOT NULL,
  `codePostal` varchar(6) NOT NULL,
  `vile` varchar(200) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

--
-- Contenu de la table `adresse_pofiles`
--

INSERT INTO `adresse_pofiles` (`id`, `name`, `rue`, `num_rue`, `codePostal`, `vile`, `user_id`) VALUES
(1, 'here', '00', 0, '00', '00', 1),
(2, 'here1', '00', 0, '00', '00', 1),
(3, '', '', 0, '', '', 40),
(4, '', '', 0, '', '', 41),
(5, 'chez moi', '4444', 1222, '4441', 'paris', 42),
(6, 'chez moi', '444', 44, '444', '444', 43),
(7, 'chez moi', 'rie', 77, 'ee', 'ee', 44),
(8, 'ma gm', 'du cochon', 10, '77750', 'saint cyr', 1),
(9, 'ma gms', 'du cochon', 10, '77750', 'saint cyr', 1),
(10, 'lapin ', 'paris', 10, '77750', 'paris', 1);

-- --------------------------------------------------------

--
-- Structure de la table `articles`
--

CREATE TABLE IF NOT EXISTS `articles` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `prix` float NOT NULL,
  `description` text NOT NULL,
  `img_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `updated` datetime NOT NULL,
  `created` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

--
-- Contenu de la table `articles`
--

INSERT INTO `articles` (`id`, `name`, `prix`, `description`, `img_id`, `category_id`, `updated`, `created`) VALUES
(1, 'sac ', 50, 'lla\r\n', 1, 1, '2014-11-03 16:15:32', '2014-11-03 16:15:32'),
(2, 'sac', 50, 'Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l''imprimerie depuis les années 1500, quand un peintre anonyme assembla ensemble des morceaux de texte pour réaliser un livre spécimen de polices de texte. Il n''a pas fait que survivre cinq siècles, mais s''est aussi adapté à la bureautique informatique, sans que son contenu n''en soit modifié. Il a été popularisé dans les années 1960 grâce à la vente de feuilles Letraset contenant des passages du Lorem Ipsum, et, plus récemment, par son inclusion dans des applications de mise en page de texte, comme Aldus PageMaker.', 2, 1, '2014-11-09 16:53:19', '2014-11-09 16:53:19'),
(3, 'gros sac', 32, 'ornecdzk,splqivenf ezjdf oezn voe oneo noeaov oezvo n oenoveo ne nvozs vo eovn moenvo mjze vnoez svmeaz ', 1, 2, '2014-11-11 15:19:36', '2014-11-11 15:19:36'),
(4, 'sac petit', 10, 'jgroesn ^âhzr vne v^asrozvonosv oe àrzhoifvjorzjvo hoe&rhojvoejvegen v og ogoneon oehoéevneoo  ojoez h ei pi hohkh kyink ig jgihig pib jb obk oh bz p j hoeé kjvzh ojeké e éeo hpoe henv eh ovhepo oe^\r\n\r\nPanier (vide)\r\n', 1, 1, '2014-11-11 15:21:06', '2014-11-11 15:21:06'),
(6, 'sac a ma mere ', 42.42, 'salut', 5, 2, '2014-12-23 17:43:01', '2014-12-23 17:43:01'),
(8, 'name', 52.4, 'dfsjvpqsfm', 1, 2, '2014-11-23 22:37:40', '2014-11-23 22:37:40'),
(9, 'sac de ville', 52.99, 'laorem rze o oreaonaeo l rlnl aenln a nlbnel noj g ngoeao, gl agjale,  lz:g maj mgna:j ppaojvùm ,mg paejg slgnajp,ol', 10, 1, '2015-02-26 11:39:46', '2015-02-26 11:39:46');

-- --------------------------------------------------------

--
-- Structure de la table `boutique`
--

CREATE TABLE IF NOT EXISTS `boutique` (
  `id` int(11) NOT NULL,
  `achat` varchar(50) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `updated` datetime NOT NULL,
  `panier` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `boutiques_articles`
--

CREATE TABLE IF NOT EXISTS `boutiques_articles` (
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `boutiques_categories`
--

CREATE TABLE IF NOT EXISTS `boutiques_categories` (
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(11) NOT NULL,
  `value` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

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
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `type` varchar(10) NOT NULL,
  `img_id` int(11) NOT NULL,
  `article_id` int(11) NOT NULL,
  `categorie_id` int(11) NOT NULL,
  `value_id` int(11) NOT NULL,
  `text_id` int(11) NOT NULL,
  `color_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8;

--
-- Contenu de la table `cms`
--

INSERT INTO `cms` (`id`, `name`, `type`, `img_id`, `article_id`, `categorie_id`, `value_id`, `text_id`, `color_id`) VALUES
(1, 'color-fond-exterieur', 'color', 0, 0, 0, 0, 0, 11),
(3, 'color-fond-menu-generale', 'color', 0, 0, 0, 0, 0, 8),
(4, 'color-passage-souris-menu-generale', 'color', 0, 0, 0, 0, 0, 9),
(5, 'color-fond-interieur', 'color', 0, 0, 0, 0, 0, 7),
(6, 'color-police-menu-generale-passage-souris', 'color', 0, 0, 0, 0, 0, 10),
(7, 'color-police-menu-generale-sans-souris', 'color', 0, 0, 0, 0, 0, 6),
(8, 'color-police-top-bar', 'color', 0, 0, 0, 0, 0, 4),
(9, 'color-fond-top-bar', 'color', 0, 0, 0, 0, 0, 1),
(10, 'texte-presentation-home', 'text', 0, 0, 0, 0, 2, 0),
(11, 'slider1', 'img', 10, 0, 0, 0, 0, 0),
(12, 'slider2', 'img', 9, 0, 0, 0, 0, 0),
(13, 'slider0', 'img', 9, 0, 0, 0, 0, 0),
(17, 'texte-presentation-article1-home-courte', 'text', 0, 0, 0, 0, 3, 0),
(20, 'articleEnDevant', 'article', 0, 3, 0, 0, 0, 0),
(21, 'article-home-1', 'article', 0, 2, 0, 0, 0, 0),
(22, 'article-home-2', 'article', 0, 6, 0, 0, 0, 0),
(23, 'article-home-3', 'article', 0, 2, 0, 0, 0, 0),
(24, 'panier-fond-color', 'color', 0, 0, 0, 0, 0, 12),
(25, 'panier-text-color', 'color', 0, 0, 0, 0, 0, 4),
(26, 'panier-fond-passage-color', 'color', 0, 0, 0, 0, 0, 6);

-- --------------------------------------------------------

--
-- Structure de la table `colors`
--

CREATE TABLE IF NOT EXISTS `colors` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `value` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

--
-- Contenu de la table `colors`
--

INSERT INTO `colors` (`id`, `name`, `value`) VALUES
(1, 'red', '#e93133'),
(2, 'color1', '#46b98b'),
(3, 'pink', '#ff2bff'),
(4, 'blanc', '#ffffff'),
(5, 'noir', '#000000'),
(6, 'marron', '#988863'),
(7, 'color-top-bar-base', '#212121'),
(8, 'couleur-menu-base-sans-souris', '#545454'),
(9, 'couleur-menu-base-avec-souris', '#5f5f5f'),
(10, 'couleur-menu-police-apres-passage-souris', '#ebebeb'),
(11, 'fond', '#b1947b'),
(12, 'button-panier', '#acbebb');

-- --------------------------------------------------------

--
-- Structure de la table `imgs`
--

CREATE TABLE IF NOT EXISTS `imgs` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `created` date NOT NULL,
  `modified` date NOT NULL,
  `cm_id` int(11) NOT NULL,
  `value` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

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
(10, 0, 'slider1', '2014-12-14', '2014-12-14', 0, '10.jpg'),
(11, 0, 'monMag', '2015-02-25', '2015-02-25', 0, '11.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `imgs_actualites`
--

CREATE TABLE IF NOT EXISTS `imgs_actualites` (
  `id` int(11) NOT NULL,
  `img_id` int(11) NOT NULL,
  `actualites` int(11) NOT NULL,
  `imp` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `imgs_articles`
--

CREATE TABLE IF NOT EXISTS `imgs_articles` (
  `id` int(11) NOT NULL,
  `img_id` int(11) NOT NULL,
  `article_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `livraison`
--

CREATE TABLE IF NOT EXISTS `livraison` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `adresseProfile_id` int(11) NOT NULL,
  `created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `livraison_article`
--

CREATE TABLE IF NOT EXISTS `livraison_article` (
  `id` int(11) NOT NULL,
  `livraison_id` int(11) NOT NULL,
  `article_id` int(11) NOT NULL,
  `nbOfThen` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `point_de_ventes`
--

CREATE TABLE IF NOT EXISTS `point_de_ventes` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `description` text NOT NULL,
  `img_id` int(11) NOT NULL,
  `rue` varchar(255) NOT NULL,
  `num_rue` int(5) NOT NULL,
  `codePostal` int(6) NOT NULL,
  `vile` varchar(200) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Contenu de la table `point_de_ventes`
--

INSERT INTO `point_de_ventes` (`id`, `name`, `description`, `img_id`, `rue`, `num_rue`, `codePostal`, `vile`) VALUES
(1, 'Mon Mag', '   lapin  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia a sint animi ipsa minus, voluptates dignissimos assumenda nam facilis laborum suscipit doloremque eos deleniti blanditiis delectus asperiores, quidem quod voluptatum.    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia a sint animi ipsa minus, voluptates dignissimos assumenda nam facilis laborum suscipit doloremque eos deleniti blanditiis delectus asperiores, quidem quod voluptatum.\r\n    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia a sint animi ipsa minus, voluptates dignissimos assumenda nam facilis laborum suscipit doloremque eos deleniti blanditiis delectus asperiores, quidem quod voluptatum.', 11, 'rue de la pompe', 5, 78113, 'la hauteville'),
(2, 'mon showroom', 'lsrdtfyguhij  (edr-fyuino rcvu fyf iu y u iygo uo ', 8, 'rue du bonhomme monthomé', 10, 77750, 'saint cyr sur morin'),
(3, 'forge', 'eswrdtfyguhbinjo,kl tcyvgubhinj xcyvubhinjo xtcyvubinj x(cvubinjo yuino,k  tyuijo', 2, 'rue de l\\''ile caquot', 11, 77260, 'la ferte sous jouarre'),
(4, 'ppp', 'pppppp', 2, 'rue chone', 4, 77260, 'la ferte sous jouarre');

-- --------------------------------------------------------

--
-- Structure de la table `test`
--

CREATE TABLE IF NOT EXISTS `test` (
  `id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `test`
--

INSERT INTO `test` (`id`) VALUES
(1);

-- --------------------------------------------------------

--
-- Structure de la table `texts`
--

CREATE TABLE IF NOT EXISTS `texts` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `value` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

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
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `isAdmin` tinyint(1) NOT NULL,
  `isActivate` tinyint(1) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=45 DEFAULT CHARSET=utf8;

--
-- Contenu de la table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `isAdmin`, `isActivate`) VALUES
(1, 'admin', '331021bc258700a2e79d0b7c2a94fd56d7310739', 'ruhtra.php@gmail.com', 1, 0),
(42, 'oll', 'b6c6c5cb570de53bdf45abe216be0898a6952a03', 'oll@gmail.com', 0, 0),
(43, 'lapin', '7c649658621dd245d5a25d57ca674a016af68d7c', 'lapin@gmail.com', 0, 0),
(44, 'lapinnnn', '90041c89ae1fc45347de7e2fc2d9a149ead620eb', 'nnnn@free.fr', 0, 0);

-- --------------------------------------------------------

--
-- Structure de la table `values`
--

CREATE TABLE IF NOT EXISTS `values` (
  `id` int(10) unsigned NOT NULL,
  `name` varchar(11) NOT NULL,
  `value` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Contenu de la table `values`
--

INSERT INTO `values` (`id`, `name`, `value`) VALUES
(1, 'red', '#ff0000'),
(2, 'green', '#00ff00'),
(3, 'blue', '#0000ff'),
(4, 'black', '#222222'),
(5, 'rien', 'none');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `achats`
--
ALTER TABLE `achats`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `actualites`
--
ALTER TABLE `actualites`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `adresse_pofiles`
--
ALTER TABLE `adresse_pofiles`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `boutique`
--
ALTER TABLE `boutique`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `cms`
--
ALTER TABLE `cms`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `colors`
--
ALTER TABLE `colors`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `imgs`
--
ALTER TABLE `imgs`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `imgs_actualites`
--
ALTER TABLE `imgs_actualites`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `imgs_articles`
--
ALTER TABLE `imgs_articles`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `livraison`
--
ALTER TABLE `livraison`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `livraison_article`
--
ALTER TABLE `livraison_article`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `point_de_ventes`
--
ALTER TABLE `point_de_ventes`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `texts`
--
ALTER TABLE `texts`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `values`
--
ALTER TABLE `values`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `achats`
--
ALTER TABLE `achats`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `actualites`
--
ALTER TABLE `actualites`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `adresse_pofiles`
--
ALTER TABLE `adresse_pofiles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT pour la table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT pour la table `boutique`
--
ALTER TABLE `boutique`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT pour la table `cms`
--
ALTER TABLE `cms`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT pour la table `colors`
--
ALTER TABLE `colors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT pour la table `imgs`
--
ALTER TABLE `imgs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT pour la table `imgs_actualites`
--
ALTER TABLE `imgs_actualites`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `imgs_articles`
--
ALTER TABLE `imgs_articles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `livraison`
--
ALTER TABLE `livraison`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `livraison_article`
--
ALTER TABLE `livraison_article`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `point_de_ventes`
--
ALTER TABLE `point_de_ventes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT pour la table `texts`
--
ALTER TABLE `texts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=45;
--
-- AUTO_INCREMENT pour la table `values`
--
ALTER TABLE `values`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
