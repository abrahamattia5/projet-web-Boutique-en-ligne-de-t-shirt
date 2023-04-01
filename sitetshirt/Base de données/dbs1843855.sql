-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : jeu. 27 mai 2021 à 20:54
-- Version du serveur :  5.7.31
-- Version de PHP : 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `dbs1843855`
--

-- --------------------------------------------------------

--
-- Structure de la table `adminid`
--

DROP TABLE IF EXISTS `adminid`;
CREATE TABLE IF NOT EXISTS `adminid` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `identifiant` varchar(255) NOT NULL,
  `mdp` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `adminid`
--

INSERT INTO `adminid` (`id`, `identifiant`, `mdp`) VALUES
(1, 'ee', 'ee');

-- --------------------------------------------------------

--
-- Structure de la table `article`
--

DROP TABLE IF EXISTS `article`;
CREATE TABLE IF NOT EXISTS `article` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_categorie` int(11) NOT NULL,
  `nom` varchar(254) NOT NULL,
  `composition` varchar(254) NOT NULL,
  `couleur` varchar(250) NOT NULL,
  `coupe` varchar(254) NOT NULL,
  `reference` varchar(254) NOT NULL,
  `prix` varchar(11) NOT NULL,
  `longueur des manches` text NOT NULL,
  `encolure` text NOT NULL,
  `description` text NOT NULL,
  `entretien` text NOT NULL,
  `src` varchar(254) NOT NULL,
  `quantite` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=28 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `article`
--

INSERT INTO `article` (`id`, `id_categorie`, `nom`, `composition`, `couleur`, `coupe`, `reference`, `prix`, `longueur des manches`, `encolure`, `description`, `entretien`, `src`, `quantite`) VALUES
(1, 1, 't-shirt bleu', ' 100 % coton ', 'bleu', 'slim', 'ref : 05176	', '20', 'manches courtes ', 'encolure ronde ', 'T-shirt en doux jersey flammé de coton. Modèle avec bord à cru roulé au niveau de l’encolure un peu plus large et en bas de manche. Couture centrale dans le dos. Un peu plus de longueur dans le dos terminé par base arrondie.', 'lavable a 40°', 'photo/t-shirt_bleu.jpg', 4),
(2, 1, 't-shirt noir', ' 100 % coton ', 'noir', 'regular', 'ref : 05976	', '20', 'manches courtes ', 'col en V ', 'T-shirt en doux jersey flammé de coton. Modèle avec bord à cru roulé au niveau de l’encolure un peu plus large et en bas de manche. Couture centrale dans le dos. Un peu plus de longueur dans le dos terminé par base arrondie.', 'lavable a 35°', 'photo/t-shirt_noir.jpg', 1),
(3, 1, 't-shirt vert', ' 100 % coton ', 'vert', 'regular', 'ref : 05976	', '20', 'manches courtes ', 'col en V ', 'T-shirt en doux jersey flammé de coton. Modèle avec bord à cru roulé au niveau de l’encolure un peu plus large et en bas de manche. Couture centrale dans le dos. Un peu plus de longueur dans le dos terminé par base arrondie.', 'lavable a 35°', 'photo/t-shirt_vert.jpg', 1),
(4, 1, 't-shirt  jaune', ' 100 % coton ', 'jaune', 'regular', 'ref : 05976	', '20', 'manches courtes ', 'col en V ', 'T-shirt en doux jersey flammé de coton. Modèle avec bord à cru roulé au niveau de l’encolure un peu plus large et en bas de manche. Couture centrale dans le dos. Un peu plus de longueur dans le dos terminé par base arrondie.', 'lavable a 35°', 'photo/t-shirt_jaune.jpg', 14),
(5, 1, 't-shirt violet', ' 100 % coton ', 'violet', 'regular', 'ref : 05976	', '20', 'manches courtes ', 'col en V ', 'T-shirt en doux jersey flammé de coton. Modèle avec bord à cru roulé au niveau de l’encolure un peu plus large et en bas de manche. Couture centrale dans le dos. Un peu plus de longueur dans le dos terminé par base arrondie.', 'lavable a 35°', 'photo/t-shirt_violet.jpg', 1),
(6, 1, 't-shirt rouge', ' 100 % coton ', 'rouge', 'regular', 'ref : 05976	', '20', 'manches courtes ', 'col en V ', 'T-shirt en doux jersey flammé de coton. Modèle avec bord à cru roulé au niveau de l’encolure un peu plus large et en bas de manche. Couture centrale dans le dos. Un peu plus de longueur dans le dos terminé par base arrondie.', 'lavable a 35°', 'photo/t-shirt_rouge.jpg', 1),
(7, 2, 't-shirt rouge', ' 100 % coton ', 'rouge', 'regular', 'ref : 05976	', '20', 'manches courtes ', 'col en V ', 'T-shirt en doux jersey flammé de coton. Modèle avec bord à cru roulé au niveau de l’encolure un peu plus large et en bas de manche. Couture centrale dans le dos. Un peu plus de longueur dans le dos terminé par base arrondie.', 'lavable a 35°', 'photo/t-shirt_rouge.jpg', 1),
(8, 2, 't-shirt vert', ' 100 % coton ', 'vert', 'regular', 'ref : 05976	', '20', 'manches courtes ', 'col en V ', 'T-shirt en doux jersey flammé de coton. Modèle avec bord à cru roulé au niveau de l’encolure un peu plus large et en bas de manche. Couture centrale dans le dos. Un peu plus de longueur dans le dos terminé par base arrondie.', 'lavable a 35°', 'photo/t-shirt_vert.jpg', 1),
(9, 2, 't-shirt jaune', ' 100 % coton ', 'jaune', 'regular', 'ref : 05976	', '20', 'manches courtes ', 'col en V ', 'T-shirt en doux jersey flammé de coton. Modèle avec bord à cru roulé au niveau de l’encolure un peu plus large et en bas de manche. Couture centrale dans le dos. Un peu plus de longueur dans le dos terminé par base arrondie.', 'lavable a 35°', 'photo/t-shirt_jaune.jpg', 1),
(10, 2, 't-shirt noir', ' 100 % coton ', 'noir', 'regular', 'ref : 05976	', '20', 'manches courtes ', 'col en V ', 'T-shirt en doux jersey flammé de coton. Modèle avec bord à cru roulé au niveau de l’encolure un peu plus large et en bas de manche. Couture centrale dans le dos. Un peu plus de longueur dans le dos terminé par base arrondie.', 'lavable a 35°', 'photo/t-shirt_noir.jpg', 1),
(11, 2, 't-shirt violet', ' 100 % coton ', 'violet', 'regular', 'ref : 05976	', '20', 'manches courtes ', 'col en V ', 'T-shirt en doux jersey flammé de coton. Modèle avec bord à cru roulé au niveau de l’encolure un peu plus large et en bas de manche. Couture centrale dans le dos. Un peu plus de longueur dans le dos terminé par base arrondie.', 'lavable a 35°', 'photo/t-shirt_violet.jpg', 1),
(12, 2, 't-shirt bleu', ' 100 % coton ', 'bleu', 'regular', 'ref : 05976	', '20', 'manches courtes ', 'col en V ', 'T-shirt en doux jersey flammé de coton. Modèle avec bord à cru roulé au niveau de l’encolure un peu plus large et en bas de manche. Couture centrale dans le dos. Un peu plus de longueur dans le dos terminé par base arrondie.', 'lavable a 35°', 'photo/t-shirt_bleu.jpg', 1),
(13, 3, 't-shirtbleu', ' 100 % coton ', 'bleu', 'regular', 'ref : 05976	', '20', 'manches courtes ', 'col en V ', 'T-shirt en doux jersey flammé de coton. Modèle avec bord à cru roulé au niveau de l’encolure un peu plus large et en bas de manche. Couture centrale dans le dos. Un peu plus de longueur dans le dos terminé par base arrondie.', 'lavable a 35°', 'photo/t-shirt_bleu.jpg', 1),
(14, 3, 't-shirt vert', ' 100 % coton ', 'vert', 'regular', 'ref : 05976	', '20', 'manches courtes ', 'col en V ', 'T-shirt en doux jersey flammé de coton. Modèle avec bord à cru roulé au niveau de l’encolure un peu plus large et en bas de manche. Couture centrale dans le dos. Un peu plus de longueur dans le dos terminé par base arrondie.', 'lavable a 35°', 'photo/t-shirt_vert.jpg', 1),
(15, 3, 't-shirt rouge', ' 100 % coton ', 'rouge', 'regular', 'ref : 05976	', '20', 'manches courtes ', 'col en V ', 'T-shirt en doux jersey flammé de coton. Modèle avec bord à cru roulé au niveau de l’encolure un peu plus large et en bas de manche. Couture centrale dans le dos. Un peu plus de longueur dans le dos terminé par base arrondie.', 'lavable a 35°', 'photo/t-shirt_rouge.jpg', 1),
(16, 3, 't-shirt jaune', ' 100 % coton ', 'jaune', 'regular', 'ref : 05976	', '20', 'manches courtes ', 'col en V ', 'T-shirt en doux jersey flammé de coton. Modèle avec bord à cru roulé au niveau de l’encolure un peu plus large et en bas de manche. Couture centrale dans le dos. Un peu plus de longueur dans le dos terminé par base arrondie.', 'lavable a 35°', 'photo/t-shirt_jaune.jpg', 1),
(17, 3, 't-shirt noir', ' 100 % coton ', 'noir', 'regular', 'ref : 05976	', '20', 'manches courtes ', 'col en V ', 'T-shirt en doux jersey flammé de coton. Modèle avec bord à cru roulé au niveau de l’encolure un peu plus large et en bas de manche. Couture centrale dans le dos. Un peu plus de longueur dans le dos terminé par base arrondie.', 'lavable a 35°', 'photo/t-shirt_noir.jpg', 1),
(18, 3, 't-shirt violet', ' 100 % coton ', 'violet', 'regular', 'ref : 05976	', '20', 'manches courtes ', 'col en V ', 'T-shirt en doux jersey flammé de coton. Modèle avec bord à cru roulé au niveau de l’encolure un peu plus large et en bas de manche. Couture centrale dans le dos. Un peu plus de longueur dans le dos terminé par base arrondie.', 'lavable a 35°', 'photo/t-shirt_violet.jpg', 1),
(20, 3, 'TEST', 'TESTV', '', 'TEST', 'VTEST', '', 'TEST', 'TEST', '', '', '', 1),
(23, 3, 'lalou', 'lalou', 'lalou', 'lalou', 'lalou', '23', 'lalou', 'lalou', 'lalou', 'lalou', 'lalou', 34),
(26, 3, 'ff', 'ff', 'ff', 'ff', 'ff', '3', 'ff', 'f', 'ff', 'f', 'ff', 23);

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

DROP TABLE IF EXISTS `categorie`;
CREATE TABLE IF NOT EXISTS `categorie` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(254) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `categorie`
--

INSERT INTO `categorie` (`id`, `nom`) VALUES
(1, 'HOMME'),
(2, 'FEMME'),
(3, 'MATERIEL');

-- --------------------------------------------------------

--
-- Structure de la table `panier`
--

DROP TABLE IF EXISTS `panier`;
CREATE TABLE IF NOT EXISTS `panier` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_session` varchar(254) NOT NULL,
  `id_produit` int(11) NOT NULL,
  `quantite` int(11) NOT NULL,
  `taille` varchar(254) NOT NULL,
  `date_r` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=71 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `panier`
--

INSERT INTO `panier` (`id`, `id_session`, `id_produit`, `quantite`, `taille`, `date_r`) VALUES
(45, 'hl67j2ib181nb7hp02n1p5a42h', 7, 2, 'XS', '2021-04-05 14:22:43'),
(69, 'ldkp7hauj9v09efhkg12uhatkr', 7, 15, 'S', '2021-05-27 13:43:57'),
(58, '1dg010lv4npjpijvj5el0t7rb3', 1, 5, 'XL', '2021-05-27 12:31:45'),
(57, '1dg010lv4npjpijvj5el0t7rb3', 1, 39, 'L', '2021-05-27 12:31:31'),
(51, 'nl2h88rb7b755j1r65ja672pg8', 2, 5, 'M', '2021-04-07 12:12:35'),
(55, 'jj3mopv955bd22hqsrfhpeglup', 7, 13, 'S', '2021-05-27 12:14:12'),
(44, 'hl67j2ib181nb7hp02n1p5a42h', 9, 1, 'S', '2021-04-05 14:19:35'),
(13, 'ju49emotjdpdgutmi4qooq4gp3', 19, 3, 'S', '2021-03-15 12:01:54'),
(43, 'hl67j2ib181nb7hp02n1p5a42h', 2, 1, 'S', '2021-04-05 14:19:29'),
(38, 'hl67j2ib181nb7hp02n1p5a42h', 9, 2, 'XS', '2021-04-05 12:53:31'),
(34, '46mqekcvb0crjps9djf5k42vrn', 8, 1, 'XS', '2021-03-16 15:52:27'),
(35, '46mqekcvb0crjps9djf5k42vrn', 23, 2, 'S', '2021-03-16 15:52:33'),
(61, 'hgundktv0320cvqusrl2t6pept', 1, 15, 'XL', '2021-05-27 12:32:36'),
(70, 'ldkp7hauj9v09efhkg12uhatkr', 3, 15, 'XS', '2021-05-27 13:45:55'),
(65, '5dvt5rdtrm0mnig79ucp876mh0', 1, 15, 'XL', '2021-05-27 13:06:37'),
(66, '5dvt5rdtrm0mnig79ucp876mh0', 1, 14, 'M', '2021-05-27 13:06:41');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `identifiant` varchar(250) NOT NULL,
  `mdp` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `identifiant`, `mdp`) VALUES
(1, 'elie', 'elie'),
(2, 'elie', 'elie'),
(3, 'elie', 'elie'),
(4, 'dede', 'dede'),
(5, 'elie', 'elie');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
