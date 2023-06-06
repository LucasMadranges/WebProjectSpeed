-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : db
-- Généré le : mar. 06 juin 2023 à 08:54
-- Version du serveur : 8.0.31
-- Version de PHP : 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `SpeedBDD`
--

-- --------------------------------------------------------

--
-- Structure de la table `connexion`
--

CREATE TABLE `connexion` (
  `cle` int NOT NULL,
  `num_utilisateur` varchar(255) NOT NULL,
  `mot_de_passe` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `connexion`
--

INSERT INTO `connexion` (`cle`, `num_utilisateur`, `mot_de_passe`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Structure de la table `ListeCamion`
--

CREATE TABLE `ListeCamion` (
  `cle` int NOT NULL,
  `Camion` varchar(255) NOT NULL,
  `Position_x` varchar(255) NOT NULL,
  `Position_y` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `ListeCamion`
--

INSERT INTO `ListeCamion` (`cle`, `Camion`, `Position_x`, `Position_y`) VALUES
(1, 'Camion 1', '50', '2.500'),
(2, 'Camion 2', '52', '2.745');

-- --------------------------------------------------------

--
-- Structure de la table `TrameCamion`
--

CREATE TABLE `TrameCamion` (
  `cle` int NOT NULL,
  `debut_trame` varchar(255) NOT NULL,
  `camion` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `destination_x` varchar(255) NOT NULL,
  `destination_y` varchar(255) NOT NULL,
  `vitesse` varchar(255) NOT NULL,
  `fin_trame` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `TrameCamion`
--

INSERT INTO `TrameCamion` (`cle`, `debut_trame`, `camion`, `status`, `destination_x`, `destination_y`, `vitesse`, `fin_trame`) VALUES
(1, '$tsp (Trame pour avancer un camion).', 'Numéro du camion voulu.', 'True ou False. Valeur du camion si il est en mouvement ou non.', 'Coordonnées x du point de destination sur l\'axe Nord-Sud.', 'Destination y du point de destination sur l\'axe Ouest-Est.', 'Vitesse max du camion voulu (compris entre 0 et 14 km/h).', '%*');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `connexion`
--
ALTER TABLE `connexion`
  ADD PRIMARY KEY (`cle`);

--
-- Index pour la table `ListeCamion`
--
ALTER TABLE `ListeCamion`
  ADD PRIMARY KEY (`cle`);

--
-- Index pour la table `TrameCamion`
--
ALTER TABLE `TrameCamion`
  ADD PRIMARY KEY (`cle`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `connexion`
--
ALTER TABLE `connexion`
  MODIFY `cle` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `ListeCamion`
--
ALTER TABLE `ListeCamion`
  MODIFY `cle` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `TrameCamion`
--
ALTER TABLE `TrameCamion`
  MODIFY `cle` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
