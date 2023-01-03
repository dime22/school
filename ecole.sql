-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mar. 03 jan. 2023 à 14:53
-- Version du serveur : 10.4.22-MariaDB
-- Version de PHP : 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `ecole`
--

-- --------------------------------------------------------

--
-- Structure de la table `avoir`
--

CREATE TABLE `avoir` (
  `matricule` int(11) NOT NULL,
  `id_cont` int(11) NOT NULL,
  `code_mat` varchar(20) NOT NULL,
  `note` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `avoir`
--

INSERT INTO `avoir` (`matricule`, `id_cont`, `code_mat`, `note`) VALUES
(3, 1, 'ALGO3', 10),
(3, 1, 'ANG', 8),
(3, 1, 'STATS', 10),
(3, 2, 'ANG', 12),
(10, 1, 'ALGO3', 14),
(10, 1, 'ANG', 16),
(10, 1, 'STATS', 7),
(10, 2, 'STATS', 12),
(11, 1, 'ALGO3', 6),
(11, 1, 'ANG', 15),
(11, 1, 'STATS', 3),
(11, 2, 'ALGO3', 8),
(11, 2, 'STATS', 7),
(12, 1, 'ANG', 15),
(12, 1, 'Compta', 11),
(12, 1, 'DAF', 7),
(12, 1, 'MatFI', 9),
(12, 2, 'DAF', 12);

-- --------------------------------------------------------

--
-- Structure de la table `classe`
--

CREATE TABLE `classe` (
  `id_cla` varchar(20) NOT NULL,
  `niveau` varchar(20) DEFAULT NULL,
  `filiere` varchar(20) DEFAULT NULL,
  `cycle` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `classe`
--

INSERT INTO `classe` (`id_cla`, `niveau`, `filiere`, `cycle`) VALUES
('AES1', 'L1', 'administration', 'Licence'),
('AES2', 'l2', 'administration', 'Licence'),
('AES3', 'L3', 'administration', 'licence'),
('DA2I3', 'L3', 'informatique', 'licence'),
('RPM2', 'l2', 'multimedia', 'Licence'),
('RPM3', 'L3', 'multimedia', 'Licence');

-- --------------------------------------------------------

--
-- Structure de la table `controle`
--

CREATE TABLE `controle` (
  `id_cont` int(11) NOT NULL,
  `session` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `controle`
--

INSERT INTO `controle` (`id_cont`, `session`) VALUES
(1, 'normal'),
(2, 'rattrapage');

-- --------------------------------------------------------

--
-- Structure de la table `etudiant`
--

CREATE TABLE `etudiant` (
  `matricule` int(11) NOT NULL,
  `nom` varchar(250) NOT NULL,
  `prenom` varchar(250) DEFAULT NULL,
  `addresse` varchar(250) DEFAULT NULL,
  `anniv` varchar(120) DEFAULT NULL,
  `email` varchar(120) DEFAULT NULL,
  `id_cla` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `etudiant`
--

INSERT INTO `etudiant` (`matricule`, `nom`, `prenom`, `addresse`, `anniv`, `email`, `id_cla`) VALUES
(3, 'RABE', 'emmanuel', 'Ambalapaiso', '1997-04-15', 'em@yahoo.fr', 'DA2I3'),
(10, 'Yve', 'Blanc', 'Kianjasoa', '1999-01-14', 'byv@gmail.com', 'DA2I3'),
(11, 'THEREZE', 'Marie', 'Talatamaty', '1998-02-04', 'marie14@yahoo.fr', 'DA2I3'),
(12, 'RAKOTO', 'eric', 'Andraijato', '1999-03-04', 'eric@courrier.com', 'AES1');

-- --------------------------------------------------------

--
-- Structure de la table `matiere`
--

CREATE TABLE `matiere` (
  `code_mat` varchar(20) NOT NULL,
  `nom_mat` varchar(150) DEFAULT NULL,
  `prof` varchar(250) DEFAULT NULL,
  `coeff` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `matiere`
--

INSERT INTO `matiere` (`code_mat`, `nom_mat`, `prof`, `coeff`) VALUES
('ALGO3', 'Algorithme', 'Dr michel', 5),
('ANG', 'Anglais', 'Mr David', 1),
('Compta', 'Comptabilité', 'Mr Thierry', 4),
('DAF', 'droit des affaires', 'Md Hoby', 2),
('MatFI', 'mathématique financière', 'Mr Hugues', 5),
('STATS', 'statistique', 'mr remi', 3);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `avoir`
--
ALTER TABLE `avoir`
  ADD PRIMARY KEY (`matricule`,`id_cont`,`code_mat`),
  ADD KEY `id_cont` (`id_cont`),
  ADD KEY `code_mat` (`code_mat`);

--
-- Index pour la table `classe`
--
ALTER TABLE `classe`
  ADD PRIMARY KEY (`id_cla`);

--
-- Index pour la table `controle`
--
ALTER TABLE `controle`
  ADD PRIMARY KEY (`id_cont`);

--
-- Index pour la table `etudiant`
--
ALTER TABLE `etudiant`
  ADD PRIMARY KEY (`matricule`),
  ADD KEY `id_cla` (`id_cla`);

--
-- Index pour la table `matiere`
--
ALTER TABLE `matiere`
  ADD PRIMARY KEY (`code_mat`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `controle`
--
ALTER TABLE `controle`
  MODIFY `id_cont` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `etudiant`
--
ALTER TABLE `etudiant`
  MODIFY `matricule` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `avoir`
--
ALTER TABLE `avoir`
  ADD CONSTRAINT `avoir_ibfk_1` FOREIGN KEY (`matricule`) REFERENCES `etudiant` (`matricule`),
  ADD CONSTRAINT `avoir_ibfk_2` FOREIGN KEY (`id_cont`) REFERENCES `controle` (`id_cont`),
  ADD CONSTRAINT `avoir_ibfk_3` FOREIGN KEY (`code_mat`) REFERENCES `matiere` (`code_mat`);

--
-- Contraintes pour la table `etudiant`
--
ALTER TABLE `etudiant`
  ADD CONSTRAINT `etudiant_ibfk_1` FOREIGN KEY (`id_cla`) REFERENCES `classe` (`id_cla`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
