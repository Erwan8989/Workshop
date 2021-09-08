-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mer. 08 sep. 2021 à 10:15
-- Version du serveur :  8.0.21
-- Version de PHP : 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `workshop`
--

-- --------------------------------------------------------

--
-- Structure de la table `malus`
--

DROP TABLE IF EXISTS `malus`;
CREATE TABLE IF NOT EXISTS `malus` (
  `id` int NOT NULL AUTO_INCREMENT,
  `titre` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `instruction` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `malus`
--

INSERT INTO `malus` (`id`, `titre`, `instruction`) VALUES
(1, 'Mauvaise réponse !', 'Joue avec une main dans le dos jusqu\'au prochain tour.'),
(2, 'Mauvaise réponse ! ', 'Et si tu jouais jusqu\'au prochain but en équilibre sur un pied ?'),
(3, 'Mauvaise réponse !', 'Les deux joueurs ferment leurs yeux pendant 15 secondes.'),
(5, 'Mauvaise réponse ! ', 'Un des deux joueurs fait 2 tours du babyfoot au début du prochain tour !'),
(6, 'Mauvaise réponse ! ', 'N\'utilisez que les défenseur et les milieux de terrain pour jouer.'),
(7, 'Mauvaise réponse ! ', 'Mets toi dos au babyfoot pour jouer lors de la prochaine partie.'),
(8, 'Mauvaise réponse !', 'Croise tes mains pour jouer !'),
(9, 'Mauvaise réponse !', 'Malheureusement tu perds 1 point.'),
(10, 'Mauvaise réponse ! ', 'Les joueurs se mettent en position de squat pendant 20 secondes.'),
(11, 'Mauvaise réponse !', 'Les joueurs se mettent en position de la chaise jusqu\'au au prochain but.'),
(13, 'Mauvaise réponse ! ', 'Un des deux joueurs ne peux plus jouer pendant 20 secondes.'),
(14, 'Mauvaise réponse ! ', 'Le joueur en défense échange sa main droite avec la main gauche de son co-équipier.');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
