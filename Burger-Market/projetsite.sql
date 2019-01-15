-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  Dim 16 déc. 2018 à 15:28
-- Version du serveur :  5.7.23
-- Version de PHP :  7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `projetsite`
--

-- --------------------------------------------------------

--
-- Structure de la table `categories`
--

DROP TABLE IF EXISTS `categories`;
CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `categories`
--

INSERT INTO `categories` (`id`, `name`) VALUES
(1, 'Menus');

-- --------------------------------------------------------

--
-- Structure de la table `inscription`
--

DROP TABLE IF EXISTS `inscription`;
CREATE TABLE IF NOT EXISTS `inscription` (
  `nom` varchar(30) NOT NULL,
  `prenom` varchar(30) NOT NULL,
  `date_naissance` date NOT NULL,
  `adresse_po` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `tel` int(11) NOT NULL,
  `mot_de_passe` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `inscription`
--

INSERT INTO `inscription` (`nom`, `prenom`, `date_naissance`, `adresse_po`, `email`, `tel`, `mot_de_passe`) VALUES
('segseth', 'sethsteh', '2018-12-12', '0', 'dhrhr', 567431267, 'ab1234iuyikyki'),
('Toto', 'dskhfsdh', '2222-05-25', '32767', 'tl@gmail.com', 2147483647, 'test2'),
('Jean', 'David', '1999-01-01', '0', 'J.P@gmail.com', 615439765, ''),
('Jiji', 'Tutu', '1999-01-01', '0', 'jiji.tutu@gmail.com', 646768905, ''),
('Jiji', 'Tutu', '1999-01-01', '0', 'Jiji.tu', 645762398, ''),
('qfrg', 'qgrrg', '2017-10-05', '0', 'qgrrg', 67556, ''),
('rrwhgx', 'wgrwrg', '2016-10-03', '0', 'whrrhe', 98076, ''),
('Toto', 'dskhfsdh', '2222-05-25', '32767', 'Juju@gmail.com', 2147483647, ''),
('yddruyduj', 'vgkjkgvkj', '2019-01-06', '0', 'xhhgxfh', 545475, 'xgxxgh'),
('sdgcfg', 'dgxdgdg', '2019-01-05', '0', 'xdggd', 67586, 'xdgxgdf'),
('Jhon', 'David', '1999-01-01', '0', 'Dave@gmail.com', 615439765, 'test'),
('louhd', 'halouloudo', '1999-05-12', '32767', 'loudovic46@gmail.com', 960366585, 'loudovic1212ab'),
('admin', 'admin', '2000-12-26', '11111', 'admin@admin.com', 666666666, 'admin'),
('qzdqz', 'qzdqzd', '2000-12-26', '11111', 'qzdzdq@zdzqd.com', 666666666, 'louis06'),
('qzdzqdqqdqz', 'qzdqzdqzqzddzqdqzqzdqdz', '2000-12-26', '11111', 'qzdzdq@zdzqdqzd.com', 666666666, 'louis26'),
('loudovic', 'Karim93', '1999-02-12', '06659', 'louis75@gmail.com', 654789658, 'abcdefg1212'),
('sds', 'sdsds', '9157-02-12', '32767', 'louud45@gmail.com', 2147483647, 'abf456'),
('louhds', 'qsqsqsq', '1999-05-04', '32767', 'mama78@gmail.com', 645859886, 'abcde456789'),
('REX-HARRISON', 'Loudovic', '1999-02-12', '93893', 'loudovic93@hotmail.fr', 658963256, 'loudovic12');

-- --------------------------------------------------------

--
-- Structure de la table `items`
--

DROP TABLE IF EXISTS `items`;
CREATE TABLE IF NOT EXISTS `items` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `description` varchar(255) NOT NULL,
  `price` float NOT NULL,
  `image` varchar(255) NOT NULL,
  `category` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `category` (`category`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `items`
--

INSERT INTO `items` (`id`, `name`, `description`, `price`, `image`, `category`) VALUES
(1, 'Menu Classic', 'Sandwich: Burger, Salade, Tomate, Cornichon + Frites + Boisson', 8.9, 'm1.png', 1),
(2, 'Menu Bacon', 'Sandwich: Burger, Fromage, Bacon, Salade, Tomate + Frites + Boisson', 9.5, 'm2.png', 1),
(3, 'Menu Big', 'Sandwich: Double Burger, Fromage, Cornichon, Salade + Frites + Boisson', 10.9, 'm3.png', 1),
(6, 'Menu Double Steak', 'Sandwich: Double Burger, Fromage, Bacon, Salade, Tomate + Frites + Boisson', 11.9, 'm6.png', 1);

-- --------------------------------------------------------

--
-- Structure de la table `reservation`
--

DROP TABLE IF EXISTS `reservation`;
CREATE TABLE IF NOT EXISTS `reservation` (
  `nombre_personne` smallint(6) NOT NULL,
  `date_reservation` datetime NOT NULL,
  `menu` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `reservation`
--

INSERT INTO `reservation` (`nombre_personne`, `date_reservation`, `menu`) VALUES
(32, '2019-05-06 15:00:00', 'Menu 3'),
(12, '2019-06-11 13:00:00', 'Menu 3'),
(6, '0000-00-00 00:00:00', 'Menu 3'),
(10, '2019-06-11 14:00:00', 'Menu 1'),
(25, '2019-05-06 19:00:00', 'Menu 2'),
(25, '2019-05-07 09:00:00', 'Menu 1'),
(25, '2019-05-07 09:00:00', 'Menu 1'),
(25, '2019-05-07 09:00:00', 'Menu 1');

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `items`
--
ALTER TABLE `items`
  ADD CONSTRAINT `items_ibfk_1` FOREIGN KEY (`category`) REFERENCES `categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
