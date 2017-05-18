-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Client :  127.0.0.1
-- Généré le :  Jeu 18 Mai 2017 à 17:50
-- Version du serveur :  5.7.14
-- Version de PHP :  5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `spsct`
--

-- --------------------------------------------------------

--
-- Structure de la table `control`
--

CREATE TABLE `control` (
  `Id` int(11) NOT NULL,
  `Id_User` int(11) NOT NULL,
  `Id_matiere` int(11) NOT NULL,
  `nom` varchar(100) NOT NULL,
  `date_control` date NOT NULL,
  `difficulte` int(1) NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `control`
--

INSERT INTO `control` (`Id`, `Id_User`, `Id_matiere`, `nom`, `date_control`, `difficulte`) VALUES
(1, 0, 10, 'Les couleurs', '2016-11-28', 2),
(2, 0, 13, 'C.O American dream', '2016-11-28', 3),
(4, 0, 4, 'trigo', '2016-12-13', 3),
(5, 0, 10, 'modele atome', '2016-12-12', 3),
(6, 0, 19, 'meca', '2016-12-15', 2),
(7, 0, 19, 'busCan', '2016-12-13', 2),
(8, 0, 4, 'vecteur', '2016-12-24', 3),
(9, 0, 14, 'Preterit', '2017-03-27', 3),
(10, 0, 20, 'Meca', '2017-03-23', 3),
(11, 0, 8, 'Chap 1 et 2', '2017-03-27', 3);

-- --------------------------------------------------------

--
-- Structure de la table `cumul_temps_travail`
--

CREATE TABLE `cumul_temps_travail` (
  `Id_User` int(11) NOT NULL,
  `cumul` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `cumul_temps_travail`
--

INSERT INTO `cumul_temps_travail` (`Id_User`, `cumul`) VALUES
(0, 0);

-- --------------------------------------------------------

--
-- Structure de la table `matieres`
--

CREATE TABLE `matieres` (
  `Id` int(11) NOT NULL,
  `Id_User` int(11) NOT NULL,
  `Matieres` varchar(255) CHARACTER SET utf8 NOT NULL,
  `Coeff` int(11) NOT NULL DEFAULT '1',
  `Trimestre` int(11) NOT NULL,
  `valide` int(11) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Contenu de la table `matieres`
--

INSERT INTO `matieres` (`Id`, `Id_User`, `Matieres`, `Coeff`, `Trimestre`, `valide`) VALUES
(1, 0, 'Francais', 4, 1, 1),
(2, 0, 'Francais', 4, 2, 1),
(3, 0, 'Francais', 4, 3, 1),
(4, 0, 'Maths', 7, 1, 1),
(5, 0, 'Maths', 7, 2, 1),
(6, 0, 'Maths', 7, 3, 1),
(7, 0, 'Histoire-Geo', 3, 1, 1),
(8, 0, 'Histoire-Geo', 3, 2, 1),
(9, 0, 'Histoire-Geo', 3, 3, 1),
(10, 0, 'Physique', 6, 1, 1),
(11, 0, 'Physique', 6, 2, 1),
(12, 0, 'Physique', 6, 3, 1),
(13, 0, 'Anglais', 3, 1, 1),
(14, 0, 'Anglais', 3, 2, 1),
(15, 0, 'Anglais', 3, 3, 0),
(16, 0, 'Allemand', 2, 1, 1),
(17, 0, 'Allemand', 2, 2, 1),
(18, 0, 'Allemand', 2, 3, 0),
(19, 0, 'S-I', 6, 1, 1),
(20, 0, 'S-I', 6, 2, 1),
(21, 0, 'S-I', 6, 3, 1),
(22, 0, 'EPS', 2, 1, 1),
(23, 0, 'EPS', 2, 2, 1),
(24, 0, 'EPS', 2, 3, 0),
(25, 0, 'EMC', 2, 1, 0),
(26, 0, 'EMC', 2, 2, 1),
(27, 0, 'EMC', 2, 3, 0);

-- --------------------------------------------------------

--
-- Structure de la table `notes`
--

CREATE TABLE `notes` (
  `Id` int(11) NOT NULL,
  `Id_User` int(11) NOT NULL,
  `Date_note` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Trimestre` int(11) NOT NULL,
  `Id_matiere` int(11) NOT NULL,
  `Note` float NOT NULL,
  `coeff` float NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Contenu de la table `notes`
--

INSERT INTO `notes` (`Id`, `Id_User`, `Date_note`, `Trimestre`, `Id_matiere`, `Note`, `coeff`) VALUES
(1, 0, '2016-11-27 09:22:30', 1, 1, 13, 0.5),
(3, 0, '2016-11-27 09:23:36', 1, 1, 16, 0.5),
(5, 0, '2016-11-27 09:24:44', 1, 1, 10, 1),
(6, 0, '2016-11-27 09:25:12', 1, 13, 12.5, 1),
(7, 0, '2016-11-27 09:25:28', 1, 13, 10, 0.5),
(8, 0, '2016-11-27 09:25:45', 1, 22, 14, 1),
(9, 0, '2016-11-27 09:26:08', 1, 7, 12.5, 2),
(10, 0, '2016-11-27 09:27:33', 1, 7, 11.25, 0.75),
(11, 0, '2016-11-27 09:27:48', 1, 7, 0, 0.25),
(12, 0, '2016-11-27 09:28:43', 1, 1, 16.5, 0.25),
(13, 0, '2016-11-27 09:29:20', 1, 4, 3, 0),
(14, 0, '2016-11-27 09:29:36', 1, 4, 16.5, 1),
(15, 0, '2016-11-27 09:29:52', 1, 4, 20, 0.25),
(16, 0, '2016-11-27 09:30:05', 1, 4, 14.5, 1),
(17, 0, '2016-11-27 09:32:16', 1, 10, 12, 0.25),
(18, 0, '2016-11-27 09:32:27', 1, 10, 15, 1),
(19, 0, '2016-11-27 09:33:28', 1, 19, 19.5, 1),
(20, 0, '2016-11-27 09:33:40', 1, 19, 17, 1),
(21, 0, '2016-11-27 09:36:02', 1, 16, 5, 1),
(22, 0, '2016-11-30 05:33:34', 1, 1, 8.5, 1),
(23, 0, '2017-02-28 06:03:17', 2, 14, 6, 1),
(24, 0, '2017-02-28 06:03:30', 2, 14, 12, 1),
(25, 0, '2017-02-28 06:03:40', 2, 14, 15, 1),
(26, 0, '2017-02-28 06:04:06', 2, 2, 10, 1),
(27, 0, '2017-02-28 06:04:55', 2, 14, 10, 1),
(28, 0, '2017-02-28 06:05:00', 2, 2, 6, 1),
(29, 0, '2017-02-28 06:05:35', 2, 23, 10, 1),
(30, 0, '2017-02-28 06:06:10', 2, 26, 8, 1),
(31, 0, '2017-02-28 06:06:26', 2, 2, 11.5, 1),
(32, 0, '2017-02-28 06:06:33', 2, 2, 12.5, 1),
(33, 0, '2017-02-28 06:06:34', 2, 2, 15, 1),
(34, 0, '2017-02-28 06:10:20', 2, 20, 20, 1),
(35, 0, '2017-02-28 06:10:28', 2, 20, 13.5, 1),
(36, 0, '2017-02-28 06:10:36', 2, 20, 19, 1),
(37, 0, '2017-02-28 06:10:54', 2, 20, 12.5, 1),
(38, 0, '2017-02-28 06:12:11', 2, 11, 15, 1),
(39, 0, '2017-02-28 06:12:28', 2, 11, 2.5, 1),
(40, 0, '2017-02-28 06:12:54', 2, 11, 18, 0.25),
(41, 0, '2017-02-28 06:13:33', 2, 5, 6, 1),
(42, 0, '2017-02-28 06:13:45', 2, 5, 12, 1),
(43, 0, '2017-02-28 06:14:00', 2, 5, 10, 1),
(44, 0, '2017-02-28 06:14:20', 2, 17, 3, 1),
(45, 0, '2017-03-04 07:07:19', 2, 17, 0, 1),
(46, 0, '2017-03-22 07:59:40', 2, 17, 15, 1),
(47, 0, '2017-03-22 08:05:18', 2, 8, 11, 1),
(48, 0, '2017-03-28 15:36:22', 3, 9, 10, 0.5),
(49, 0, '2017-03-28 15:39:06', 3, 12, 9, 1),
(50, 0, '2017-03-31 08:04:35', 2, 20, 15.5, 1),
(51, 0, '2017-03-31 08:06:09', 3, 21, 15.5, 1),
(55, 0, '2017-04-03 08:32:23', 3, 3, 11, 0.5),
(56, 0, '2017-04-10 09:01:14', 3, 6, 12.5, 1),
(57, 0, '2017-04-24 17:31:15', 3, 21, 10.5, 1),
(58, 0, '2017-05-07 09:30:21', 3, 9, 5, 1),
(59, 0, '2017-05-07 09:30:44', 3, 3, 8, 1),
(60, 0, '2017-05-15 04:34:07', 3, 9, 0, 1);

-- --------------------------------------------------------

--
-- Structure de la table `objectif_moyenne`
--

CREATE TABLE `objectif_moyenne` (
  `Id` int(11) NOT NULL,
  `Id_User` int(11) NOT NULL,
  `Objetcif` int(11) NOT NULL,
  `Trimestre` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Contenu de la table `objectif_moyenne`
--

INSERT INTO `objectif_moyenne` (`Id`, `Id_User`, `Objetcif`, `Trimestre`) VALUES
(1, 0, 16, 1),
(2, 0, 18, 2),
(3, 0, 17, 3);

-- --------------------------------------------------------

--
-- Structure de la table `trimestre_actuel`
--

CREATE TABLE `trimestre_actuel` (
  `Id_User` int(11) NOT NULL,
  `Trimestre` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Contenu de la table `trimestre_actuel`
--

INSERT INTO `trimestre_actuel` (`Id_User`, `Trimestre`) VALUES
(0, 3);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `Id` int(11) NOT NULL,
  `Nom` varchar(100) NOT NULL,
  `Prenom` varchar(100) NOT NULL,
  `Classe` int(11) NOT NULL,
  `num_departement` int(11) NOT NULL,
  `adresse` text NOT NULL,
  `email` varchar(100) NOT NULL,
  `pass` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `users`
--

INSERT INTO `users` (`Id`, `Nom`, `Prenom`, `Classe`, `num_departement`, `adresse`, `email`, `pass`) VALUES
(1, 'LEMETAYER', 'Louis', 1, 90, '15 rue du port 90400 BOTANS', 'louis.lemetayer35300@gmail.com', '7a4d4e2fdbb4cba957eeca055b32f8efa0ce7852');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `control`
--
ALTER TABLE `control`
  ADD PRIMARY KEY (`Id`);

--
-- Index pour la table `matieres`
--
ALTER TABLE `matieres`
  ADD PRIMARY KEY (`Id`);

--
-- Index pour la table `notes`
--
ALTER TABLE `notes`
  ADD PRIMARY KEY (`Id`);

--
-- Index pour la table `objectif_moyenne`
--
ALTER TABLE `objectif_moyenne`
  ADD PRIMARY KEY (`Id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `control`
--
ALTER TABLE `control`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT pour la table `matieres`
--
ALTER TABLE `matieres`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT pour la table `notes`
--
ALTER TABLE `notes`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;
--
-- AUTO_INCREMENT pour la table `objectif_moyenne`
--
ALTER TABLE `objectif_moyenne`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
