-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mar. 04 juil. 2023 à 16:44
-- Version du serveur : 5.7.36
-- Version de PHP : 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `studi_techtrendz`
--

-- --------------------------------------------------------

--
-- Structure de la table `articles`
--

DROP TABLE IF EXISTS `articles`;
CREATE TABLE IF NOT EXISTS `articles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `category_id` (`category_id`)
) ENGINE=InnoDB AUTO_INCREMENT=54 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `articles`
--

INSERT INTO `articles` (`id`, `category_id`, `title`, `content`, `image`) VALUES
(1, 1, 'Article 1', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores, amet. Cum labore possimus ad vitae minima nesciunt commodi eos.', NULL),
(2, 1, 'Article 2', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores, amet. Cum labore possimus ad vitae minima nesciunt commodi eos.', NULL),
(3, 1, 'Article 3', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores, amet. Cum labore possimus ad vitae minima nesciunt commodi eos.', NULL),
(4, 1, 'Article 4', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores, amet. Cum labore possimus ad vitae minima nesciunt commodi eos.', NULL),
(5, 1, 'Article 5', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores, amet. Cum labore possimus ad vitae minima nesciunt commodi eos.', NULL),
(6, 1, 'Article 6', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores, amet. Cum labore possimus ad vitae minima nesciunt commodi eos.', NULL),
(7, 1, 'Article 7', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores, amet. Cum labore possimus ad vitae minima nesciunt commodi eos.', NULL),
(8, 1, 'Article 8', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores, amet. Cum labore possimus ad vitae minima nesciunt commodi eos.', NULL),
(9, 1, 'Article 9', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores, amet. Cum labore possimus ad vitae minima nesciunt commodi eos.', NULL),
(10, 1, 'Article 10', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores, amet. Cum labore possimus ad vitae minima nesciunt commodi eos.', NULL),
(11, 1, 'Article 11', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores, amet. Cum labore possimus ad vitae minima nesciunt commodi eos.', NULL),
(12, 1, 'Article 12', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores, amet. Cum labore possimus ad vitae minima nesciunt commodi eos.', NULL),
(13, 1, 'Article 13', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores, amet. Cum labore possimus ad vitae minima nesciunt commodi eos.', NULL),
(14, 1, 'Article 14', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores, amet. Cum labore possimus ad vitae minima nesciunt commodi eos.', NULL),
(15, 1, 'Article 15', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores, amet. Cum labore possimus ad vitae minima nesciunt commodi eos.', NULL),
(16, 1, 'Article 16', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores, amet. Cum labore possimus ad vitae minima nesciunt commodi eos.', NULL),
(17, 1, 'Article 17', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores, amet. Cum labore possimus ad vitae minima nesciunt commodi eos.', NULL),
(18, 1, 'Article 18', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores, amet. Cum labore possimus ad vitae minima nesciunt commodi eos.', NULL),
(19, 1, 'Article 19', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores, amet. Cum labore possimus ad vitae minima nesciunt commodi eos.', NULL),
(20, 1, 'Article 20', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores, amet. Cum labore possimus ad vitae minima nesciunt commodi eos.', NULL),
(21, 1, 'Article 21', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores, amet. Cum labore possimus ad vitae minima nesciunt commodi eos.', NULL),
(22, 1, 'Article 22', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores, amet. Cum labore possimus ad vitae minima nesciunt commodi eos.', NULL),
(23, 1, 'Article 23', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores, amet. Cum labore possimus ad vitae minima nesciunt commodi eos.', NULL),
(24, 1, 'Article 24', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores, amet. Cum labore possimus ad vitae minima nesciunt commodi eos.', NULL),
(25, 1, 'Article 25', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores, amet. Cum labore possimus ad vitae minima nesciunt commodi eos.', NULL),
(26, 2, 'Article 26', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores, amet. Cum labore possimus ad vitae minima nesciunt commodi eos.', NULL),
(27, 2, 'Article 27', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores, amet. Cum labore possimus ad vitae minima nesciunt commodi eos.', NULL),
(28, 2, 'Article 28', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores, amet. Cum labore possimus ad vitae minima nesciunt commodi eos.', NULL),
(29, 2, 'Article 29', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores, amet. Cum labore possimus ad vitae minima nesciunt commodi eos.', NULL),
(30, 2, 'Article 30', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores, amet. Cum labore possimus ad vitae minima nesciunt commodi eos.', NULL),
(31, 2, 'Article 31', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores, amet. Cum labore possimus ad vitae minima nesciunt commodi eos.', NULL),
(32, 2, 'Article 32', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores, amet. Cum labore possimus ad vitae minima nesciunt commodi eos.', NULL),
(33, 2, 'Article 33', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores, amet. Cum labore possimus ad vitae minima nesciunt commodi eos.', NULL),
(34, 2, 'Article 34', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores, amet. Cum labore possimus ad vitae minima nesciunt commodi eos.', NULL),
(35, 2, 'Article 35', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores, amet. Cum labore possimus ad vitae minima nesciunt commodi eos.', NULL),
(36, 2, 'Article 36', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores, amet. Cum labore possimus ad vitae minima nesciunt commodi eos.', NULL),
(37, 2, 'Article 37', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores, amet. Cum labore possimus ad vitae minima nesciunt commodi eos.', NULL),
(38, 2, 'Article 38', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores, amet. Cum labore possimus ad vitae minima nesciunt commodi eos.', NULL),
(39, 2, 'Article 39', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores, amet. Cum labore possimus ad vitae minima nesciunt commodi eos.', NULL),
(40, 2, 'Article 40', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores, amet. Cum labore possimus ad vitae minima nesciunt commodi eos.', NULL),
(41, 2, 'Article 41', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores, amet. Cum labore possimus ad vitae minima nesciunt commodi eos.', NULL),
(42, 2, 'Article 42', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores, amet. Cum labore possimus ad vitae minima nesciunt commodi eos.', NULL),
(43, 3, 'Article 43', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores, amet. Cum labore possimus ad vitae minima nesciunt commodi eos.', NULL),
(44, 3, 'Article 44', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores, amet. Cum labore possimus ad vitae minima nesciunt commodi eos.', NULL),
(45, 3, 'Article 45', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores, amet. Cum labore possimus ad vitae minima nesciunt commodi eos.', NULL),
(46, 3, 'Article 46', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores, amet. Cum labore possimus ad vitae minima nesciunt commodi eos.', NULL),
(47, 3, 'Article 47', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores, amet. Cum labore possimus ad vitae minima nesciunt commodi eos.', NULL),
(48, 3, 'Article 48', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores, amet. Cum labore possimus ad vitae minima nesciunt commodi eos.', NULL),
(49, 3, 'Article 49', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores, amet. Cum labore possimus ad vitae minima nesciunt commodi eos.', NULL),
(50, 1, 'PHP ou Python ?', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores, amet. Cum labore possimus ad vitae minima nesciunt commodi eos.\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Dolores, amet. Cum labore possimus ad vitae minima nesciunt commodi eos.\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Dolores, amet. Cum labore possimus ad vitae minima nesciunt commodi eos.\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Dolores, amet. Cum labore possimus ad vitae minima nesciunt commodi eos.\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Dolores, amet. Cum labore possimus ad vitae minima nesciunt commodi eos.', '1-php-vs-python.jpg'),
(51, 2, 'React Natives : Quelles différences par rapport à React', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores, amet. Cum labore possimus ad vitae minima nesciunt commodi eos.\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Dolores, amet. Cum labore possimus ad vitae minima nesciunt commodi eos.\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Dolores, amet. Cum labore possimus ad vitae minima nesciunt commodi eos.\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Dolores, amet. Cum labore possimus ad vitae minima nesciunt commodi eos.\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Dolores, amet. Cum labore possimus ad vitae minima nesciunt commodi eos.', '2-react-vs-react-native.jpg'),
(52, 3, 'Les meilleurs outils DevOps', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores, amet. Cum labore possimus ad vitae minima nesciunt commodi eos.\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Dolores, amet. Cum labore possimus ad vitae minima nesciunt commodi eos.\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Dolores, amet. Cum labore possimus ad vitae minima nesciunt commodi eos.\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Dolores, amet. Cum labore possimus ad vitae minima nesciunt commodi eos.\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Dolores, amet. Cum labore possimus ad vitae minima nesciunt commodi eos.', '3-devops.png'),
(53, 1, 'test', 'test', '64948e822a940-1-php-vs-python.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `categories`
--

DROP TABLE IF EXISTS `categories`;
CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `categories`
--

INSERT INTO `categories` (`id`, `name`) VALUES
(1, 'Développement Web'),
(2, 'Développement Mobile'),
(3, 'DevOps');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `first_name`, `last_name`, `role`) VALUES
(4, 'user@test.com', '$2y$10$lEzMI.H26sDsV4PzhAVBveHiTDBrH0BGSaNDAin.89cP8y/baG0vu', 'Test', 'Test', 'user'),
(5, 'admin@test.com', '$2y$10$lEzMI.H26sDsV4PzhAVBveHiTDBrH0BGSaNDAin.89cP8y/baG0vu', 'Admin', 'Admin', 'admin');

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `articles`
--
ALTER TABLE `articles`
  ADD CONSTRAINT `articles_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
