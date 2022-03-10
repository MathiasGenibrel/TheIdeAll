-- phpMyAdmin SQL Dump
-- version 4.5.4.1
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Jeu 10 Mars 2022 à 13:11
-- Version du serveur :  5.7.11
-- Version de PHP :  5.6.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `projet_lc`
--

-- --------------------------------------------------------

--
-- Structure de la table `evenements`
--

CREATE TABLE `evenements` (
  `id_evenements` int(11) NOT NULL,
  `date_evenement` datetime NOT NULL,
  `durée` time NOT NULL,
  `nombre_animateurs` tinyint(15) NOT NULL,
  `lieu_evenement` int(11) NOT NULL,
  `id_utilisateurs` int(11) NOT NULL,
  `id_langue` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Structure de la table `facturations`
--

CREATE TABLE `facturations` (
  `id_facturation` int(11) NOT NULL,
  `id_utilisateurs` int(11) NOT NULL,
  `id_evenement` int(11) NOT NULL,
  `facturation` float NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Structure de la table `langues`
--

CREATE TABLE `langues` (
  `id_langues` int(11) NOT NULL,
  `langue` varchar(64) COLLATE utf8_bin NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs`
--

CREATE TABLE `utilisateurs` (
  `id_utilisateurs` int(11) NOT NULL,
  `nom_utilisateurs` varchar(64) COLLATE utf8_bin NOT NULL,
  `prenom_utilisateurs` varchar(64) COLLATE utf8_bin NOT NULL,
  `role_utilisateurs` enum('admin','physiques','virtuels','physiques&virtuels') COLLATE utf8_bin NOT NULL DEFAULT 'virtuels'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs_langues`
--

CREATE TABLE `utilisateurs_langues` (
  `id_utilisateurs` int(11) NOT NULL,
  `id_langues` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Index pour les tables exportées
--

--
-- Index pour la table `evenements`
--
ALTER TABLE `evenements`
  ADD PRIMARY KEY (`id_evenements`),
  ADD KEY `id_utilisateurs_evenements` (`id_utilisateurs`);

--
-- Index pour la table `facturations`
--
ALTER TABLE `facturations`
  ADD PRIMARY KEY (`id_facturation`);

--
-- Index pour la table `langues`
--
ALTER TABLE `langues`
  ADD PRIMARY KEY (`id_langues`);

--
-- Index pour la table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  ADD PRIMARY KEY (`id_utilisateurs`);

--
-- Index pour la table `utilisateurs_langues`
--
ALTER TABLE `utilisateurs_langues`
  ADD PRIMARY KEY (`id_utilisateurs`,`id_langues`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `evenements`
--
ALTER TABLE `evenements`
  MODIFY `id_evenements` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `facturations`
--
ALTER TABLE `facturations`
  MODIFY `id_facturation` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `langues`
--
ALTER TABLE `langues`
  MODIFY `id_langues` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  MODIFY `id_utilisateurs` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
