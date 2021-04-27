-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mar. 27 avr. 2021 à 20:43
-- Version du serveur :  5.7.31
-- Version de PHP : 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `gsb`
--

-- --------------------------------------------------------

--
-- Structure de la table `contreindic`
--

DROP TABLE IF EXISTS `contreindic`;
CREATE TABLE IF NOT EXISTS `contreindic` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idList` int(11) NOT NULL,
  `libelleMed` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `doctrine_migration_versions`
--

DROP TABLE IF EXISTS `doctrine_migration_versions`;
CREATE TABLE IF NOT EXISTS `doctrine_migration_versions` (
  `version` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `executed_at` datetime DEFAULT NULL,
  `execution_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`version`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `doctrine_migration_versions`
--

INSERT INTO `doctrine_migration_versions` (`version`, `executed_at`, `execution_time`) VALUES
('DoctrineMigrations\\Version20210427020024', '2021-04-27 02:00:31', 185),
('DoctrineMigrations\\Version20210427040719', '2021-04-27 04:07:54', 123);

-- --------------------------------------------------------

--
-- Structure de la table `dosage`
--

DROP TABLE IF EXISTS `dosage`;
CREATE TABLE IF NOT EXISTS `dosage` (
  `dos_code` int(11) NOT NULL AUTO_INCREMENT,
  `dos_quantite` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dos_unite` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`dos_code`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `dosage`
--

INSERT INTO `dosage` (`dos_code`, `dos_quantite`, `dos_unite`) VALUES
(1, '250', 'gramme'),
(2, '500', 'gramme'),
(3, '1000', 'gramme');

-- --------------------------------------------------------

--
-- Structure de la table `famille`
--

DROP TABLE IF EXISTS `famille`;
CREATE TABLE IF NOT EXISTS `famille` (
  `fam_code` int(11) NOT NULL AUTO_INCREMENT,
  `fam_libelle` varchar(80) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`fam_code`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `famille`
--

INSERT INTO `famille` (`fam_code`, `fam_libelle`) VALUES
(1, 'Analgesique'),
(2, 'Antiacide'),
(3, 'Antalgique'),
(4, 'Lidocaine'),
(5, 'Anti-inflammatoire'),
(6, 'Macrolide');

-- --------------------------------------------------------

--
-- Structure de la table `interagir`
--

DROP TABLE IF EXISTS `interagir`;
CREATE TABLE IF NOT EXISTS `interagir` (
  `med_perturbateur` int(11) NOT NULL,
  `med_med_perturbe` int(11) NOT NULL,
  PRIMARY KEY (`med_perturbateur`,`med_med_perturbe`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `medicament`
--

DROP TABLE IF EXISTS `medicament`;
CREATE TABLE IF NOT EXISTS `medicament` (
  `medDepotlegal` int(11) NOT NULL AUTO_INCREMENT,
  `med_nomcommercial` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `med_composition` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `med_effets` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `med_contreindic` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `med_prixechantillon` double NOT NULL,
  `fam_code` int(11) NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`medDepotlegal`),
  KEY `fam_code` (`fam_code`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `medicament`
--

INSERT INTO `medicament` (`medDepotlegal`, `med_nomcommercial`, `med_composition`, `med_effets`, `med_contreindic`, `med_prixechantillon`, `fam_code`, `image`) VALUES
(6, 'Doliprane', 'Excipient à effet notoire : sodium (409 mg/cp). Excipients : povidone, amidon prégélatinisé, carboxyméthylamidon sodique (type A), talc, stéarate de magnésium, hydroxypropylcellulose, hypromellose, macrogol 6000.', 'Rare : érythème, urticaire, rash cutané ont été rapportés. Leur survenue impose l\'arrêt définitif de ce médicament et des médicaments apparentés.', NULL, 2, 1, 'NULL'),
(7, 'Gaviscon', '142,5 mg (soit 6,3 mmol) de sodium, 40,00 mg de parahydroxybenzoate de méthyle (E218) et 6,00 mg de parahydroxybenzoate de propyle (E216).', 'Une réaction allergique aux composants peut se produire.', NULL, 3, 2, 'NULL');

-- --------------------------------------------------------

--
-- Structure de la table `prescrire`
--

DROP TABLE IF EXISTS `prescrire`;
CREATE TABLE IF NOT EXISTS `prescrire` (
  `med_depotlegal` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `tin_code` int(11) NOT NULL,
  `dos_code` int(11) NOT NULL,
  `pre_posologie` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`med_depotlegal`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `prescrire`
--

INSERT INTO `prescrire` (`med_depotlegal`, `tin_code`, `dos_code`, `pre_posologie`) VALUES
(1, 6, 1, '1 cachet matin et soir.'),
(2, 6, 1, '1 cachet matin et soir.');

-- --------------------------------------------------------

--
-- Structure de la table `type_individu`
--

DROP TABLE IF EXISTS `type_individu`;
CREATE TABLE IF NOT EXISTS `type_individu` (
  `tin_code` int(11) NOT NULL AUTO_INCREMENT,
  `tin_libelle` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`tin_code`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `type_individu`
--

INSERT INTO `type_individu` (`tin_code`, `tin_libelle`) VALUES
(6, 'Enfant'),
(7, 'Adulte'),
(8, 'Adolescent');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
