-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : ven. 10 sep. 2021 à 11:52
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
(3, 'Bonne réponse ! ', 'Si au prochain tour tu as un malus, tu peux le garder OU le donner a l\'équipe adverse. Que vas tu choisir ?'),
(4, 'Bonne réponse ! ', 'Tu as obtenus un JOKER, tu peux ne pas réaliser l\'action donnée en cas de malus.'),
(5, 'Bonne réponse ! ', 'TIRE AU BUT ! Réalise ton plus beau tir avec tes attaquants !'),
(7, 'Bonne réponse ! ', 'Au prochain tour si tu mets un but avec la défense, le point compte triple.'),
(8, 'Bonne réponse ! ', 'Lors du prochain tour, le but compte double.'),
(9, 'Bonne réponse !', 'Lorsque tes attaquants détiennent la balle, la défense adverse te laisse le champ libre. Bon courage au gardien !');

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
(10, 'Mauvaise réponse ! ', 'Les joueurs se mettent en position de squat pendant 20 secondes.'),
(11, 'Mauvaise réponse !', 'Les joueurs se mettent en position de la chaise jusqu\'au au prochain but.'),
(13, 'Mauvaise réponse ! ', 'Un des deux joueurs ne peux plus jouer pendant 20 secondes.'),
(14, 'Mauvaise réponse ! ', 'Le joueur en défense échange sa main droite avec la main gauche de son co-équipier.');

-- --------------------------------------------------------

--
-- Structure de la table `question`
--

DROP TABLE IF EXISTS `question`;
CREATE TABLE IF NOT EXISTS `question` (
  `id` int NOT NULL AUTO_INCREMENT,
  `question` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `reponse` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=37 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `question`
--

INSERT INTO `question` (`id`, `question`, `reponse`) VALUES
(3, 'Combien de joueur y a t il dans une équipe de hockey sur glace ?', '20'),
(4, 'Avec la laine de quel animal fait on du cachemire ?', 'chevre'),
(5, 'Le 14 juillet existe t\'il en Tanzanie ?', 'oui'),
(6, 'Combien y a t-il de paires de chaussettes dans une vingtaine ?', '10'),
(7, 'Dans quel état des Etats-Unis le Grand Canyon se trouve-t-il ?', 'arizona'),
(8, 'Quel était l\'instrument de prédilection de Yehudi ?', 'violon'),
(9, 'Quelle est la hauteur du Mont Blanc ?', '4809'),
(10, 'Quel fleuve traverse le Liban, la Syrie et la Turquie ?', 'oronte'),
(11, 'Quand est ce qu\'est apparu blanche neige et les sept nains pour la première fois ?', ' 1937'),
(12, 'Combien il y a de joueur sur un terrain de football ?', '11'),
(13, ' La superficie de la France est elle supérieure à 600 000 km ?', 'oui'),
(14, 'Combien de pattes ont les animaux hexapodes ?', '6'),
(15, 'Quel club de football détient le record du nombre de victoires en Ligue des Champion ?', 'bayern munich'),
(16, 'Qui a remporté le plus de fois le Ballon d\'or ?', 'lionel messi'),
(17, 'Combien de fois le Real de Madrid a-t-il gagné la ligue des champions  ?', '13'),
(18, 'Quel quartier est mis sous les feux de la rampe dans Amélie Poulain ?', 'montmartre'),
(19, 'A quel autre animal ressemble le wallaby ?', 'kangourou\r\n'),
(20, '\r\nQuelle note de musique est également appelée  ut  ?', 'do'),
(21, 'Qui est l\'auteur de Moby Dick ?', 'herman melville'),
(22, 'Combien y a t\'il d\'Etoile sur le drapeau européen ?', '12'),
(23, 'Quel titre de noblesse est immédiatement inférieur à celui de comte ?', 'vicomte'),
(24, 'De quelle série de six films un champion de boxe est-il la vedette ? ', 'rocky'),
(25, 'Quel numéro d\'urgence devez-vous composer pour joindre les pompiers ?', '18'),
(26, 'Comment se prénommait l\'épouse du Roi Arthur ?', 'guenievre'),
(27, 'Comment appelait-on les Espagnols qui conquirent l\'Amérique ?', 'conquistadors'),
(28, 'Quelle est la forme géométrique d\'un panneau d\'interdiction ? ', 'rond'),
(29, 'Sur un navire, qu\'indique la position à bâbord ?', 'gauche'),
(30, 'De quelle couleur est le personnage Pacman ?', ' jaune'),
(31, 'Quel est le nom du scientifique professeur, ami de Tintin ?', 'tournesol'),
(32, 'Le premier pays a avoir gagné la Coupe du monde de Football est :', 'uruguay'),
(33, 'De quelle origine est la firme aéronautique Boeing ?', 'americaine'),
(34, 'Quel géant fut vaincu par David ?', 'goliath'),
(35, 'Aux États-Unis, quels types de claviers utilise-t-on ? ', 'qwerty'),
(36, 'En espagnol, que signifie le mot \" corazon \" ?', 'coeur');

-- --------------------------------------------------------

--
-- Structure de la table `score`
--

DROP TABLE IF EXISTS `score`;
CREATE TABLE IF NOT EXISTS `score` (
  `id` int NOT NULL AUTO_INCREMENT,
  `points` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `score`
--

INSERT INTO `score` (`id`, `points`) VALUES
(1, 0),
(2, 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
