-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Ven 09 Septembre 2016 à 10:51
-- Version du serveur :  5.7.9
-- Version de PHP :  5.6.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `hotel-des-voisins`
--

-- --------------------------------------------------------

--
-- Structure de la table `chambres`
--

DROP TABLE IF EXISTS `chambres`;
CREATE TABLE IF NOT EXISTS `chambres` (
  `id_chambre` int(11) NOT NULL AUTO_INCREMENT,
  `numero` varchar(11) NOT NULL,
  `categorie` enum('classique','luxe') NOT NULL,
  `etage` int(4) NOT NULL,
  `statut` enum('libre','indisponible') NOT NULL DEFAULT 'libre',
  `capacite` enum('1_simple','2_double','3_triple','4_suite+') NOT NULL,
  `prix_journalier` int(11) NOT NULL,
  PRIMARY KEY (`id_chambre`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `chambres`
--

INSERT INTO `chambres` (`id_chambre`, `numero`, `categorie`, `etage`, `statut`, `capacite`, `prix_journalier`) VALUES
(1, '111', 'classique', 1, 'libre', '1_simple', 30),
(2, '112', 'classique', 1, 'libre', '1_simple', 30),
(3, '213', 'luxe', 2, 'libre', '1_simple', 39),
(4, '214', 'luxe', 2, 'libre', '1_simple', 39),
(5, '121', 'classique', 1, 'libre', '2_double', 50),
(6, '122', 'classique', 1, 'libre', '2_double', 50),
(7, '223', 'luxe', 2, 'libre', '2_double', 59),
(8, '224', 'luxe', 2, 'libre', '2_double', 59),
(9, '321', 'classique', 3, 'libre', '2_double', 50),
(10, '322', 'classique', 3, 'libre', '2_double', 50),
(11, '423', 'luxe', 4, 'libre', '2_double', 59),
(12, '424', 'luxe', 4, 'libre', '2_double', 59),
(13, '131', 'classique', 1, 'libre', '3_triple', 70),
(14, '132', 'classique', 1, 'libre', '3_triple', 70),
(15, '233', 'luxe', 2, 'libre', '3_triple', 79),
(16, '234', 'luxe', 2, 'libre', '3_triple', 79),
(17, '431', 'classique', 4, 'libre', '3_triple', 70),
(18, '432', 'classique', 4, 'libre', '3_triple', 70),
(19, '433', 'luxe', 4, 'libre', '3_triple', 79),
(20, '434', 'luxe', 4, 'libre', '3_triple', 79),
(21, '543', 'luxe', 5, 'libre', '4_suite+', 99),
(22, '544', 'luxe', 5, 'libre', '4_suite+', 99);

-- --------------------------------------------------------

--
-- Structure de la table `clientele`
--

DROP TABLE IF EXISTS `clientele`;
CREATE TABLE IF NOT EXISTS `clientele` (
  `id_client` int(11) NOT NULL AUTO_INCREMENT,
  `nom` text NOT NULL,
  `prenom` text NOT NULL,
  `adresse_permanente` text NOT NULL,
  `code_postal` int(11) NOT NULL,
  `telephone` varchar(11) NOT NULL,
  `E-mail` int(11) NOT NULL,
  `ville` text NOT NULL,
  `pays` text NOT NULL,
  PRIMARY KEY (`id_client`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `sejour`
--

DROP TABLE IF EXISTS `sejour`;
CREATE TABLE IF NOT EXISTS `sejour` (
  `id_sejour` int(11) NOT NULL AUTO_INCREMENT,
  `id_client` int(11) NOT NULL,
  `id_chambre` int(11) NOT NULL,
  `date_reservation` date NOT NULL,
  `date_arrivee` date NOT NULL,
  `date_depart` date NOT NULL,
  `etat` enum('en attente','confirme','paye','') NOT NULL,
  PRIMARY KEY (`id_sejour`),
  UNIQUE KEY `id_client` (`id_client`),
  UNIQUE KEY `id_chambre` (`id_chambre`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `sejour`
--
ALTER TABLE `sejour`
  ADD CONSTRAINT `sejour_ibfk_2` FOREIGN KEY (`id_client`) REFERENCES `clientele` (`id_client`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `sejour_ibfk_3` FOREIGN KEY (`id_chambre`) REFERENCES `chambres` (`id_chambre`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
