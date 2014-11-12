-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 12, 2014 at 10:43 PM
-- Server version: 10.0.14-MariaDB-log
-- PHP Version: 5.6.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `nadia`
--

-- --------------------------------------------------------

--
-- Table structure for table `achats`
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
-- Table structure for table `articles`
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
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `name`, `prix`, `description`, `img_id`, `category_id`, `updated`, `created`) VALUES
(1, 'sac ', 50, 'lla\r\n', 1, 1, '2014-11-03 16:15:32', '2014-11-03 16:15:32'),
(2, 'sac', 50, 'Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l''imprimerie depuis les années 1500, quand un peintre anonyme assembla ensemble des morceaux de texte pour réaliser un livre spécimen de polices de texte. Il n''a pas fait que survivre cinq siècles, mais s''est aussi adapté à la bureautique informatique, sans que son contenu n''en soit modifié. Il a été popularisé dans les années 1960 grâce à la vente de feuilles Letraset contenant des passages du Lorem Ipsum, et, plus récemment, par son inclusion dans des applications de mise en page de texte, comme Aldus PageMaker.', 2, 1, '2014-11-09 16:53:19', '2014-11-09 16:53:19'),
(3, 'gros sac', 32, 'ornecdzk,splqivenf ezjdf oezn voe oneo noeaov oezvo n oenoveo ne nvozs vo eovn moenvo mjze vnoez svmeaz ', 1, 2, '2014-11-11 15:19:36', '2014-11-11 15:19:36'),
(4, 'sac petit', 10, 'jgroesn ^âhzr vne v^asrozvonosv oe àrzhoifvjorzjvo hoe&rhojvoejvegen v og ogoneon oehoéevneoo  ojoez h ei pi hohkh kyink ig jgihig pib jb obk oh bz p j hoeé kjvzh ojeké e éeo hpoe henv eh ovhepo oe^\r\n\r\nPanier (vide)\r\n', 1, 1, '2014-11-11 15:21:06', '2014-11-11 15:21:06');

-- --------------------------------------------------------

--
-- Table structure for table `boutique`
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
-- Table structure for table `boutiques_articles`
--

CREATE TABLE IF NOT EXISTS `boutiques_articles` (
`id` int(11) NOT NULL,
  `boutique_id` int(11) NOT NULL,
  `article_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `boutiques_categories`
--

CREATE TABLE IF NOT EXISTS `boutiques_categories` (
  `id` int(11) NOT NULL,
  `boutiques_id` int(11) NOT NULL,
  `categories_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
`id` int(11) NOT NULL,
  `value` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `value`) VALUES
(1, 'paysage'),
(2, 'sac'),
(3, 'bijoux');

-- --------------------------------------------------------

--
-- Table structure for table `cms`
--

CREATE TABLE IF NOT EXISTS `cms` (
`id` int(11) NOT NULL,
  `name` varchar(10) NOT NULL,
  `type` varchar(10) NOT NULL,
  `img_id` int(11) NOT NULL,
  `article_id` int(11) NOT NULL,
  `categorie_id` int(11) NOT NULL,
  `value_id` int(11) NOT NULL,
  `text_id` int(11) NOT NULL,
  `color_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cms`
--

INSERT INTO `cms` (`id`, `name`, `type`, `img_id`, `article_id`, `categorie_id`, `value_id`, `text_id`, `color_id`) VALUES
(1, 'val', 'img', 2, 0, 0, 0, 0, 0),
(6, 'lapin', 'img', 4, 0, 0, 0, 0, 0),
(7, 'lapin2', 'img', 3, 0, 0, 0, 0, 0),
(8, 'lapin3', 'img', 0, 0, 0, 0, 0, 0),
(9, 'colorlink', 'value', 0, 0, 0, 5, 0, 0),
(10, 'colorfond', 'value', 0, 0, 0, 4, 0, 0),
(11, 'slide0', 'img', 1, 0, 0, 0, 0, 0),
(12, 'slide1', 'img', 0, 0, 0, 0, 0, 0),
(13, 'slide2', 'img', 3, 0, 0, 0, 0, 0),
(14, 'color1', 'color', 0, 0, 0, 0, 0, 0),
(15, 'color2', 'color', 0, 0, 0, 0, 0, 0),
(16, 'color', 'color', 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `colors`
--

CREATE TABLE IF NOT EXISTS `colors` (
`id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `value` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `colors`
--

INSERT INTO `colors` (`id`, `name`, `value`) VALUES
(1, 'red', '#5fe931');

-- --------------------------------------------------------

--
-- Table structure for table `imgs`
--

CREATE TABLE IF NOT EXISTS `imgs` (
`id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `created` date NOT NULL,
  `modified` date NOT NULL,
  `cm_id` int(11) NOT NULL,
  `value` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `imgs`
--

INSERT INTO `imgs` (`id`, `id_user`, `name`, `created`, `modified`, `cm_id`, `value`) VALUES
(1, 0, 'img1', '2014-11-09', '2014-11-12', 0, '1.png'),
(2, 0, 'img2', '2014-11-09', '2014-11-09', 0, '2.png'),
(3, 0, 'amilia', '2014-11-12', '2014-11-12', 0, '3.jpg'),
(4, 0, 'fb', '2014-11-12', '2014-11-12', 0, '4.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `texts`
--

CREATE TABLE IF NOT EXISTS `texts` (
`id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `value` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `texts`
--

INSERT INTO `texts` (`id`, `name`, `value`) VALUES
(1, 'lapin', 'Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l''imprimerie depuis les années 1500, quand un peintre anonyme assembla ensemble des morceaux de texte pour réaliser un livre spécimen de polices de texte. Il n''a pas fait que survivre cinq siècles, mais s''est aussi adapté à la bureautique informatique, sans que son contenu n''en soit modifié. Il a été popularisé dans les années 1960 grâce à la vente de feuilles Letraset contenant des passages du Lorem Ipsum, et, plus récemment, par son inclusion dans des applications de mise en page de texte, comme Aldus PageMaker.');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `isAdmin` tinyint(1) NOT NULL,
  `isActivate` tinyint(1) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `isAdmin`, `isActivate`) VALUES
(1, 'admin', '331021bc258700a2e79d0b7c2a94fd56d7310739', '', 1, 0),
(2, 'test', 'eec4e6a8a4051bbf4e15483b89b14ae4242fcdcd', 'ruhtra.mar@gmail.com', 0, 0),
(3, 'test1', 'eec4e6a8a4051bbf4e15483b89b14ae4242fcdcd', 'ruhtra.mar1@gmail.com', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `values`
--

CREATE TABLE IF NOT EXISTS `values` (
`id` int(10) unsigned NOT NULL,
  `name` varchar(11) NOT NULL,
  `value` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `values`
--

INSERT INTO `values` (`id`, `name`, `value`) VALUES
(1, 'red', '#ff0000'),
(2, 'green', '#00ff00'),
(3, 'blue', '#0000ff'),
(4, 'black', '#222222'),
(5, 'rien', 'none');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `achats`
--
ALTER TABLE `achats`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `boutique`
--
ALTER TABLE `boutique`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `boutiques_articles`
--
ALTER TABLE `boutiques_articles`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cms`
--
ALTER TABLE `cms`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `colors`
--
ALTER TABLE `colors`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `imgs`
--
ALTER TABLE `imgs`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `texts`
--
ALTER TABLE `texts`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `values`
--
ALTER TABLE `values`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `achats`
--
ALTER TABLE `achats`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `boutique`
--
ALTER TABLE `boutique`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `boutiques_articles`
--
ALTER TABLE `boutiques_articles`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `cms`
--
ALTER TABLE `cms`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `colors`
--
ALTER TABLE `colors`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `imgs`
--
ALTER TABLE `imgs`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `texts`
--
ALTER TABLE `texts`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `values`
--
ALTER TABLE `values`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
