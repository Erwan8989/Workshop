-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : jeu. 09 sep. 2021 à 10:24
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
-- Structure de la table `bonus`
--

DROP TABLE IF EXISTS `bonus`;
CREATE TABLE IF NOT EXISTS `bonus` (
  `id` int NOT NULL AUTO_INCREMENT,
  `titre` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `instruction` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `bonus`
--

INSERT INTO `bonus` (`id`, `titre`, `instruction`) VALUES
(3, 'Bonne réponse ! \r\n  ', 'Si au prochain tour tu as un malus, tu peux le garder OU le donner a l\'équipe adverse. Que vas tu choisir ?'),
(4, 'Bonne réponse ! ', 'Tu as obtenus un JOKER, tu peux ne pas réaliser l\'action donnée en cas de malus.'),
(5, 'Bonne réponse ! ', 'TIRE AU BUT ! Réalise ton plus beau tir avec tes attaquants !'),
(7, 'Bonne réponse ! ', 'Au prochain tour si tu mets un but avec la défense, le point compte triple.'),
(8, 'Bonne réponse ! ', 'Lors du prochain tour, le but compte double.'),
(9, 'Bonne réponse !', 'Lorsque tes attaquants détiennent la balle, la défense adverse te laisse le champ libre. Bon courage au gardien !');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
