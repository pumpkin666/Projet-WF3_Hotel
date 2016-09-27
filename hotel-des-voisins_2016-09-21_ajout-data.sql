-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Mer 21 Septembre 2016 à 15:48
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
  `date_reservation` date NOT NULL,
  `date_arrivee` date NOT NULL,
  `date_depart` date NOT NULL,
  `id_chambre` int(11) NOT NULL,
  `id_client` int(11) NOT NULL AUTO_INCREMENT,
  `civilite` enum('Monsieur','Madame') NOT NULL,
  `nom` varchar(20) NOT NULL,
  `prenom` varchar(20) NOT NULL,
  `adresse` varchar(50) NOT NULL,
  `code_postal` varchar(11) NOT NULL,
  `ville` varchar(50) NOT NULL,
  `pays` varchar(50) NOT NULL,
  `telephone` varchar(20) NOT NULL,
  `E-mail` varchar(50) NOT NULL,
  PRIMARY KEY (`id_client`),
  KEY `id_chambre` (`id_chambre`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `clientele`
--

INSERT INTO `clientele` (`date_reservation`, `date_arrivee`, `date_depart`, `id_chambre`, `id_client`, `civilite`, `nom`, `prenom`, `adresse`, `code_postal`, `ville`, `pays`, `telephone`, `E-mail`) VALUES
('2016-09-01', '2016-09-08', '2016-09-10', 9, 1, 'Monsieur', 'BON', 'Jean', '2 rue des voisins', '46800', 'MONTCUQ', 'FRANCE', '+33 512345678', 'jean.bon@bayonne.fr'),
('2016-09-02', '2016-10-07', '2016-10-17', 7, 2, 'Madame', 'GOLOTTE', 'Marie', '1 avenue de l''Est', '69001', 'LYON', 'FRANCE', '+33 412345678', 'marie.golotte@yahoo.fr'),
('2016-09-12', '2016-09-29', '2016-09-30', 5, 3, 'Monsieur', 'GOLOW', 'Henry', 'Fleet street 4th', 'E173AA', 'LONDRES', 'ROYAUME-UNI', '+44 020 1234 5678', 'henry.golow@mail.com'),
('2016-09-15', '2016-10-28', '2016-10-31', 10, 4, 'Monsieur', 'ENSTEIN', 'Franck', '23 rue du jour', '75006', 'PARIS', 'FRANCE', '+33 1 4123 4567', 'franck.enstein@scientist.com'),
('2016-09-03', '2016-09-11', '2016-09-14', 6, 5, 'Monsieur', 'MUDA', 'Norbert', '11 rue du menhir', '75009', 'PARIS', 'FRANCE', '+33 1401234567', 'robert.muda@wanadoo.fr'),
('2016-09-17', '2016-09-23', '2016-09-25', 22, 6, 'Madame', 'FPONK', 'Yolanda', '33 rue chapon', '75003', 'PARIS', 'FRANCE', '+33 612345678', 'yodafponk@fponk.fr'),
('2016-09-18', '2016-10-05', '2016-10-08', 18, 7, 'Monsieur', 'EL-HOMBRE', 'Joe', '14 rue de Braque', '31100', 'TOULOUSE', 'FRANCE', '+33 601234567', 'J.elhombre@wanadoudou.com'),
('2016-09-17', '2016-10-02', '2016-10-03', 17, 8, 'Monsieur', 'REGNIER', 'Thomas', '98 rue Spiderman', '81200', 'MAZAMET', 'FRANCE', '+33 691234560', 'thomas.regnier@tarentule.net'),
('2016-09-09', '2016-09-20', '2016-09-22', 15, 9, 'Madame', 'LIPONNE', 'Marine', '3 rue des voisins', '46800', 'MONTCUQ', 'FRANCE', '+33 691234567', 'm.liponne@orange.fr');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
