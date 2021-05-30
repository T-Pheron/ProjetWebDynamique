-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : Dim 30 mai 2021 à 16:36
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
-- Base de données : `ece_market_place_bdd`
--

-- --------------------------------------------------------

--
-- Structure de la table `article`
--

DROP TABLE IF EXISTS `article`;
CREATE TABLE IF NOT EXISTS `article` (
  `id_article` int(255) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_vendeur` int(255) UNSIGNED NOT NULL,
  `titre` varchar(255) CHARACTER SET utf8 NOT NULL,
  `prix` float UNSIGNED NOT NULL,
  `description1` varchar(511) CHARACTER SET utf8 NOT NULL,
  `categorie` varchar(255) CHARACTER SET utf8 NOT NULL,
  `type_de_vente` varchar(1) CHARACTER SET utf8 NOT NULL,
  `file_name1` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT 'photoArticleParDefaut.jpeg',
  `file_url` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '../BDD/Files/img/photoArticleParDefaut.jpeg',
  PRIMARY KEY (`id_article`)
) ENGINE=InnoDB AUTO_INCREMENT=261107 DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `article`
--

INSERT INTO `article` (`id_article`, `id_vendeur`, `titre`, `prix`, `description1`, `categorie`, `type_de_vente`, `file_name1`, `file_url`) VALUES
(261100, 0, 'MSI Creator 17', 2611, 'Ecran 17,3\'\' UHD 4K HDR Mini LED à bordures fines\r\nCarte graphique NVIDIA GeForce RTX 2060 6 Go GDDR6\r\nProcesseur Intel Core i7 de 10ème génération\r\nAutonomie pouvant atteindre 8 heures\r\nChâssis argenté léger (2,5 kg) et fin (20,25 mm)', 'Informatique', 'I', '', ''),
(261104, 0, 'Station de chargement', 40, 'Grande compatibilité: le boîtier en aluminium de qualité aéronautique fraisé mince et élégant fait de ce moyeu de type C un complément parfait pour votre look Macbook. Un concentrateur d\'extension USB C idéal pour MacBook 2019/2018/2017, MacBook Pro 2019/2018/2017 (13 \"/ 15\"), iMac / iMac Pro (21.5 \"/ 27\"), Surface Book 2, Google ChromeBook Pixel, Samsung Galaxy S10 / S9 / S8 / Note 8 / Note 9, Galaxy Book, Dell XPS 15 / XPS 13, Huawei Matebook et de nombreux autres appareils USB C.\r\n', 'Informatique', 'I', '', ''),
(261105, 0, 'chaise de gamer', 54, 'Caractéristiques: Couleur bleue Hauteur totale: 127-137 cm Taille du dossier: 52 * 84cm Taille de siège: 53 * 53cm Hauteur d\'assise réglable: 10 cm Taille du paquet: approx.88 * 33.5 * 64.5CM Matériel: faux cuir Emballage inclus: 1 x chaise de jeu Pack d\'accessoires', 'bureautique', 'I', '', ''),
(261106, 0, 'LED pour éclairer vos vies', 30, 'Bandes LED Lumières RGB 5m 10m 15m 20m LED Lumières Décoration de Mariage Changement de Couleur Flexible SMD 2835 avec Télécommande IR et Adaptateur pour la Maison Chambre à Coucher Cuisine TV DC12v', 'bureautique', 'I', '', '');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
