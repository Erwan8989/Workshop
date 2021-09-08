-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mer. 08 sep. 2021 à 07:58
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
-- Base de données : `workshop`
--

-- --------------------------------------------------------

--
-- Structure de la table `question`
--

DROP TABLE IF EXISTS `question`;
CREATE TABLE IF NOT EXISTS `question` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `question` text COLLATE utf8_unicode_ci NOT NULL,
  `reponse` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=23 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `question`
--

INSERT INTO `question` (`id`, `question`, `reponse`) VALUES
(3, 'Combien de joueur y a t il dans une équipe de hockey sur glace ?', '20'),
(4, 'Avec la laine de quel animal fait on du cachemire ?', 'chevre'),
(5, 'Le 14 juillet existe t\'il en Tanzanie ?', 'oui'),
(6, 'Combien y a t-il de paires de chausettes dans une vingtaine ?', '10'),
(7, 'Dans quel état des Etats-Unis le Grand Canyon se trouve-t-il ?', 'Arizona'),
(8, 'Quel était l\'instrument de prédilection de Yehudi ?', 'le violon'),
(9, 'Quelle est la hauteur du Mont Blanc ?', '4809'),
(10, 'Quel fleuve traverse le Liban, la Syrie et la Turquie ?', 'L\'oronte'),
(11, 'quand est ce qu\'est apparu blanche neige et les sept nains pour la première fois ?', ' 1937'),
(12, 'Combien il y a de joueur sur un terrain de football ?', '11'),
(13, ' La superficie de la France est elle supérieure à 600 000 km ?', 'oui'),
(14, 'Combien de pattes ont les animaux hexapodes ?', '6'),
(15, 'Quel club de football détient le record du nombre de victoires en Ligue des Champion ?', 'Bayern Munich'),
(16, 'Qui a remporté le plus de fois le Ballon d\'or ?', 'Lionel Messi'),
(17, 'Combien de fois le Real de Madrid a-t-il gagné la ligue des champions  ?', '13'),
(18, 'Quel quartier est mis sous les feux de la rampe dans Amélie Poulain ?', 'Montmartre'),
(19, 'A quel autre animal ressemble le wallaby ?', 'Kangourou\r\n'),
(20, '\r\nQuelle note de musique est également appelée  ut  ?', 'Do'),
(21, 'Qui est l\'auteur de Moby Dick ?', 'Herman Melville'),
(22, 'Combien y a t\'il d\'Etoile sur le drapeau européen ?', '12');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
