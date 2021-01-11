-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3308
-- Généré le :  lun. 11 jan. 2021 à 14:11
-- Version du serveur :  8.0.18
-- Version de PHP :  7.4.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `bnl`
--

-- --------------------------------------------------------

--
-- Structure de la table `biere`
--

DROP TABLE IF EXISTS `biere`;
CREATE TABLE IF NOT EXISTS `biere` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `label` varchar(255) NOT NULL,
  `prix` float DEFAULT NULL,
  `premium` tinyint(1) NOT NULL,
  `description` text,
  `taux_alcool` float NOT NULL,
  `resume` varchar(255) DEFAULT NULL,
  `path_image` varchar(255) DEFAULT NULL,
  `volume` float NOT NULL,
  `malt` varchar(255) DEFAULT NULL,
  `houblon` varchar(255) DEFAULT NULL,
  `IBU` int(5) NOT NULL,
  `oeil` varchar(255) NOT NULL,
  `nez` varchar(255) NOT NULL,
  `bouche` varchar(255) NOT NULL,
  `EBC` varchar(5) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `biere`
--

INSERT INTO `biere` (`id`, `label`, `prix`, `premium`, `description`, `taux_alcool`, `resume`, `path_image`, `volume`, `malt`, `houblon`, `IBU`, `oeil`, `nez`, `bouche`, `EBC`) VALUES
(1, 'Sherlock blonde', 3.5, 1, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 4.7, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit,', '..\\..\\assets\\img\\20180913_150905.jpg', 0.33, 'Pilsen bio et caramel Vienne bio', 'Barbe rouge et Strisselspalt', 26, 'Robe or avec une légère turbidité.', 'Houblonné et pain', 'Goût frais légèrement rond et biscuité', '6-7'),
(2, 'Bière IPA', 3.5, 1, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 6.8, 'Une bière de dégustation florale à l’amertume prononcée.\r\n', '..\\..\\assets\\img\\20180913_150627.jpg', 0.33, 'biscuit', 'cascade', 83, 'Robe cuivrée et voilée', 'Vert et floral.', 'Goût amer et fruité.', '25');

-- --------------------------------------------------------

--
-- Structure de la table `limonade`
--

DROP TABLE IF EXISTS `limonade`;
CREATE TABLE IF NOT EXISTS `limonade` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `prix` float NOT NULL,
  `label` varchar(255) NOT NULL,
  `path_image` varchar(255) DEFAULT NULL,
  `description` text NOT NULL,
  `resume` varchar(255) NOT NULL,
  `volume` float NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `limonade`
--

INSERT INTO `limonade` (`id`, `prix`, `label`, `path_image`, `description`, `resume`, `volume`) VALUES
(1, 3.5, 'limonade myrtille', '12', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit,', 0.33);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
