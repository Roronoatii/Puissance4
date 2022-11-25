-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:8889
-- Généré le : mar. 15 nov. 2022 à 11:17
-- Version du serveur :  5.7.34
-- Version de PHP : 7.4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `Puisaance 4`
--

-- --------------------------------------------------------

--
-- Structure de la table `jeu`
--

CREATE TABLE `jeu` (
  `identifiant` int(11) NOT NULL,
  `nom_jeu` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `message`
--

CREATE TABLE `message` (
  `id_message` int(11) NOT NULL,
  `id_jeu` int(11) NOT NULL,
  `id_joueur` int(11) NOT NULL,
  `message` text NOT NULL,
  `date_et_heure_d'inscription` datetime NOT NULL,
  `est_expediteur` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `score`
--

CREATE TABLE `score` (
  `id_score` int(11) NOT NULL,
  `id_joueur` int(11) NOT NULL,
  `id_jeu` int(11) NOT NULL,
  `diffculte_de_la_partie` int(11) NOT NULL,
  `score_de_la_partie` int(11) NOT NULL,
  `date_et_heure_de_la_partie` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `identifiant` int(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mot_de_passe` varchar(50) NOT NULL,
  `pseudo` varchar(50) NOT NULL,
  `date_et_heure_d'inscription` datetime NOT NULL,
  `date_et_heure_de_connexion` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`identifiant`, `email`, `mot_de_passe`, `pseudo`, `date_et_heure_d'inscription`, `date_et_heure_de_connexion`) VALUES
(1, 'Torres.L@gmail.com', 'Brouette95%*£', '[LILY]', '2022-08-17 15:20:36', '2022-11-08 15:20:36'),
(2, 'durandal.nathan@gmail.com', 'fleur75@#', 'xXextarminatorXx', '2022-11-08 15:20:36', '2022-11-08 15:20:36'),
(3, 'Alinea.dur95@gmail.com', 'Voiture#(çà)', 'Stop95', '2022-11-08 15:20:36', '2022-11-08 15:20:36'),
(4, 'timeo.torres@gmail.com', 'kakI37?/#', 'Le_mec_bizarre_75', '2022-11-08 15:20:36', '2022-11-08 15:20:36');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `jeu`
--
ALTER TABLE `jeu`
  ADD PRIMARY KEY (`identifiant`);

--
-- Index pour la table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id_message`),
  ADD KEY `id_jeu` (`id_jeu`),
  ADD KEY `id_joueur` (`id_joueur`);

--
-- Index pour la table `score`
--
ALTER TABLE `score`
  ADD PRIMARY KEY (`id_score`),
  ADD KEY `id_joueur` (`id_joueur`),
  ADD KEY `id_jeu` (`id_jeu`);

--
-- Index pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`identifiant`);

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `message`
--
ALTER TABLE `message`
  ADD CONSTRAINT `message_ibfk_1` FOREIGN KEY (`id_joueur`) REFERENCES `utilisateur` (`identifiant`),
  ADD CONSTRAINT `message_ibfk_2` FOREIGN KEY (`id_jeu`) REFERENCES `jeu` (`identifiant`);

--
-- Contraintes pour la table `score`
--
ALTER TABLE `score`
  ADD CONSTRAINT `score_ibfk_1` FOREIGN KEY (`id_joueur`) REFERENCES `utilisateur` (`identifiant`),
  ADD CONSTRAINT `score_ibfk_2` FOREIGN KEY (`id_jeu`) REFERENCES `jeu` (`identifiant`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
