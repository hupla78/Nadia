-- phpMyAdmin SQL Dump
-- version 4.3.12
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 21, 2015 at 03:30 PM
-- Server version: 10.0.17-MariaDB-log
-- PHP Version: 5.6.6

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
-- Table structure for table `actualites`
--

CREATE TABLE IF NOT EXISTS `actualites` (
	`id` int(11) NOT NULL,
	`titre` varchar(200) NOT NULL,
	`text` text NOT NULL,
	`image_id` int(11) NOT NULL
	) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

	--
	-- Dumping data for table `actualites`
	--

	INSERT INTO `actualites` (`id`, `titre`, `text`, `image_id`) VALUES
	(1, 'Nouvelle collection', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel, libero ut iure ab, accusamus illum tempore maiores similique dolore excepturi quas natus itaque non eum eos, deserunt. Totam quos, tempore.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel, libero ut iure ab, accusamus illum tempore maiores similique dolore excepturi quas natus itaque non eum eos, deserunt. Totam quos, tempore.\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit. Vel, libero ut iure ab, accusamus illum tempore maiores similique dolore excepturi quas natus itaque non eum eos, deserunt. Totam quos, tempore.\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit. Vel, libero ut iure ab, accusamus illum tempore maiores similique dolore excepturi quas natus itaque non eum eos, deserunt. Totam quos, tempore.\r\n', 6),
	(2, 'Le Printent', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel, libero ut iure ab, accusamus illum tempore maiores similique dolore excepturi quas natus itaque non eum eos, deserunt. Totam quos, tempore.\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit. Vel, libero ut iure ab, accusamus illum tempore maiores similique dolore excepturi quas natus itaque non eum eos, deserunt. Totam quos, tempore.\r\n', 7);

	-- --------------------------------------------------------

	--
	-- Table structure for table `adresse_pofiles`
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
		-- Dumping data for table `adresse_pofiles`
		--

		INSERT INTO `adresse_pofiles` (`id`, `name`, `rue`, `num_rue`, `codePostal`, `vile`, `user_id`) VALUES
		(1, 'here', '00', 0, '00', '00', 1),
		(2, 'here1', '00', 0, '00', '00', 1),
		(3, '', '', 0, '', '', 40),
		(4, '', '', 0, '', '', 41),
		(5, 'chez moi', '4444', 1222, '4441', 'paris', 42),
		(6, 'chez moi', '444', 44, '444', '444', 43),
		(7, 'chez moi', 'rie', 77, 'ee', 'ee', 44),
		(8, 'ma gm', 'du cochon', 86, '77750', 'saint cyr', 1),
		(9, 'ma gms', 'du cochon', 10, '77750', 'saint cyr', 1),
		(10, 'lapin ', 'paris', 10, '77750', 'paris', 1);

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
			) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

			--
			-- Dumping data for table `articles`
			--

			INSERT INTO `articles` (`id`, `name`, `prix`, `description`, `img_id`, `category_id`, `updated`, `created`) VALUES
			(1, 'sac ', 50, 'lla\r\n', 1, 1, '2014-11-03 16:15:32', '2014-11-03 16:15:32'),
			(2, 'sac', 50, 'Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l''imprimerie depuis les années 1500, quand un peintre anonyme assembla ensemble des morceaux de texte pour réaliser un livre spécimen de polices de texte. Il n''a pas fait que survivre cinq siècles, mais s''est aussi adapté à la bureautique informatique, sans que son contenu n''en soit modifié. Il a été popularisé dans les années 1960 grâce à la vente de feuilles Letraset contenant des passages du Lorem Ipsum, et, plus récemment, par son inclusion dans des applications de mise en page de texte, comme Aldus PageMaker.', 2, 1, '2014-11-09 16:53:19', '2014-11-09 16:53:19'),
			(3, 'gros sac', 32, 'ornecdzk,splqivenf ezjdf oezn voe oneo noeaov oezvo n oenoveo ne nvozs vo eovn moenvo mjze vnoez svmeaz ', 1, 2, '2014-11-11 15:19:36', '2014-11-11 15:19:36'),
			(4, ''),
			(2, 'color1', '#46b98b'),
			(3, 'pink', '#ff2bff'),
			(4, 'blanULL
			) ENGINE=InnoDB AUTO_INCREMENT=45 DEFAULT CHARSET=utf8;

			--
			-- Dumping data for table `users`
			--

			INSERT INTO `users` (`id`, `username`, `password`, `email`, `isAdmin`, `isActivate`) VALUES
			(1, 'admin', '331021bc258700a2e79d0b7c2a94fd56d7310739', 'ruhtra.php@gmail.com', 1, 0),
			(42, 'oll', 'b6c6c5cb570de53bdf45abe216be0898a6952a03', 'oll@gmail.com', 0, 0),
			(43, 'lapin', '7c649658621dd245d5a25d57ca674a016af68d7c', 'lapin@gmail.com', 0, 0),
			(44, 'lapinnnn', '90041c89ae1fc45347de7e2fc2d9a149ead620eb', 'nnnn@free.fr', 0, 0);

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
				-- Indexes for table `actualites`
				--
				ALTER TABLE `actualites`
				ADD PRIMARY KEY (`id`);

				--
				-- Indexes for table `adresse_pofiles`
				--
				ALTER TABLE `adresse_pofiles`
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
				-- Indexes for table `imgs_actualites`
				--
				ALTER TABLE `imgs_actualites`
				ADD PRIMARY KEY (`id`);

				--
				-- Indexes for table `imgs_articles`
				--
				ALTER TABLE `imgs_articles`
				ADD PRIMARY KEY (`id`);

				--
				-- Indexes for table `panier_commands`
				--
				ALTER TABLE `panier_commands`
				ADD PRIMARY KEY (`id`);

				--
				-- Indexes for table `panier_ventes`
				--
				ALTER TABLE `panier_ventes`
				ADD PRIMARY KEY (`id`);

				--
				-- Indexes for table `point_de_ventes`
				--
				ALTER TABLE `point_de_ventes`
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
				-- AUTO_INCREMENT for table `actualites`
				--
				ALTER TABLE `actualites`
				MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
				--
				-- AUTO_INCREMENT for table `adresse_pofiles`
				--
				ALTER TABLE `adresse_pofiles`
				MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
				--
				-- AUTO_INCREMENT for table `articles`
				--
				ALTER TABLE `articles`
				MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
				--
				-- AUTO_INCREMENT for table `boutique`
				--
				ALTER TABLE `boutique`
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
				MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=27;
				--
				-- AUTO_INCREMENT for table `colors`
				--
				ALTER TABLE `colors`
				MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
				--
				-- AUTO_INCREMENT for table `imgs`
				--
				ALTER TABLE `imgs`
				MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
				--
				-- AUTO_INCREMENT for table `imgs_actualites`
				--
				ALTER TABLE `imgs_actualites`
				MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
				--
				-- AUTO_INCREMENT for table `imgs_articles`
				--
				ALTER TABLE `imgs_articles`
				MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
				--
				-- AUTO_INCREMENT for table `panier_commands`
				--
				ALTER TABLE `panier_commands`
				MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=36;
				--
				-- AUTO_INCREMENT for table `panier_ventes`
				--
				ALTER TABLE `panier_ventes`
				MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
				--
				-- AUTO_INCREMENT for table `point_de_ventes`
				--
				ALTER TABLE `point_de_ventes`
				MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
				--
				-- AUTO_INCREMENT for table `texts`
				--
				ALTER TABLE `texts`
				MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
				--
				-- AUTO_INCREMENT for table `users`
				--
				ALTER TABLE `users`
				MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=45;
				--
				-- AUTO_INCREMENT for table `values`
				--
				ALTER TABLE `values`
				MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
				/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
				/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
				/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
