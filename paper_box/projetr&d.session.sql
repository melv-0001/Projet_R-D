-- phpMyAdmin SQL Dump
-- version 5.2.1deb3
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : lun. 24 fév. 2025 à 15:31
-- Version du serveur : 10.11.8-MariaDB-0ubuntu0.24.04.1
-- Version de PHP : 8.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `projet_r&d`
--

-- --------------------------------------------------------

--
-- Structure de la table `commentaire`
--

CREATE TABLE `commentaire` (
  `id_commentaire` int(11) NOT NULL,
  `auteur` int(11) DEFAULT NULL,
  `proj_assoc` int(11) DEFAULT NULL,
  `contenu` text NOT NULL,
  `date_emmission` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `commentaire`
--

INSERT INTO `commentaire` (`id_commentaire`, `auteur`, `proj_assoc`, `contenu`, `date_emmission`) VALUES
(1, 1, 1, 'Wouahhh je sens que ce sera un banger!!', '2025-02-23'),
(12, 1, 1, 'Ce projet est très prometteur, j\'ai hâte de voir les premiers résultats !', '2024-02-15'),
(13, 2, 2, 'Les premiers tests sont concluants, bonne avancée.', '2024-03-01'),
(14, 6, 1, 'Avez-vous testé l\'efficacité sur des échantillons réels ?', '2024-03-10'),
(15, 5, 4, 'Avez-vous testé ce modèle sur des images en basse lumière ?', '2024-06-12'),
(16, 6, 5, 'La blockchain est une solution prometteuse pour sécuriser les contrats.', '2023-09-20'),
(17, 1, 1, 'Ce projet est très prometteur, j\'ai hâte de voir les premiers résultats !', '2024-02-15'),
(18, 2, 2, 'Les premiers tests sont concluants, bonne avancée.', '2024-03-01'),
(19, 6, 1, 'Avez-vous testé l\'efficacité sur des échantillons réels ?', '2024-03-10'),
(20, 5, 4, 'Avez-vous testé ce modèle sur des images en basse lumière ?', '2024-06-12'),
(21, 6, 5, 'La blockchain est une solution prometteuse pour sécuriser les contrats.', '2023-09-20');

-- --------------------------------------------------------

--
-- Structure de la table `document`
--

CREATE TABLE `document` (
  `id_document` int(11) NOT NULL,
  `titre` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `fichier` text DEFAULT NULL,
  `proj_assoc` int(11) DEFAULT NULL,
  `date_emission` date DEFAULT NULL,
  `autorisation` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `document`
--

INSERT INTO `document` (`id_document`, `titre`, `description`, `fichier`, `proj_assoc`, `date_emission`, `autorisation`) VALUES
(1, 'Cahier des charges', 'Spécifications de conception et techniques.', 'uploads/fichier/fichier1.pdf', 1, '2025-02-23', 'Lecture'),
(2, 'Rapport préliminaire', 'Première analyse des données collectées.', 'uploads/fichier/rapport_v1.pdf', 1, '2024-02-20', 'Lire'),
(3, 'Bilan énergétique', 'Étude des performances après optimisation.', 'uploads/fichier/bilan_energie.pdf', 2, '2024-03-05', 'Éditer'),
(4, 'Présentation projet industriel', 'Présentation des avancées du projet.', 'uploads/fichier/presentation_industrie.pdf', 3, '2024-04-02', 'Supprimer'),
(5, 'Rapport sur la vision par ordinateur', 'Présentation des algorithmes.', 'uploads/fichier/vision_ai_report.pdf', 4, '2024-07-10', 'Lire'),
(6, 'Certifications blockchain', 'Détails sur le processus de certification.', 'uploads/fichier/blockchain_cert.pdf', 5, '2023-10-15', 'Éditer'),
(7, 'Rapport préliminaire', 'Première analyse des données collectées.', 'uploads/fichier/rapport_v1.pdf', 1, '2024-02-20', 'Lire'),
(8, 'Bilan énergétique', 'Étude des performances après optimisation.', 'uploads/fichier/bilan_energie.pdf', 2, '2024-03-05', 'Éditer'),
(9, 'Présentation projet industriel', 'Présentation des avancées du projet.', 'uploads/fichier/presentation_industrie.pdf', 3, '2024-04-02', 'Supprimer'),
(10, 'Rapport sur la vision par ordinateur', 'Présentation des algorithmes.', 'uploads/fichier/vision_ai_report.pdf', 4, '2024-07-10', 'Lire'),
(11, 'Certifications blockchain', 'Détails sur le processus de certification.', 'uploads/fichier/blockchain_cert.pdf', 5, '2023-10-15', 'Éditer');

-- --------------------------------------------------------

--
-- Structure de la table `idee`
--

CREATE TABLE `idee` (
  `id_idee` int(11) NOT NULL,
  `libelle` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `objectis` text DEFAULT NULL,
  `etat` varchar(50) DEFAULT NULL,
  `date_emission` date DEFAULT NULL,
  `proj_assoc` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `idee`
--

INSERT INTO `idee` (`id_idee`, `libelle`, `description`, `objectis`, `etat`, `date_emission`, `proj_assoc`) VALUES
(1, 'Creer un repository sur github et sauvegarder le projet sur le cloud.', 'Il s\'agira de souscrire à un forfait cloud sécurisé et de grande capacité.', '- Sauvegarder les données sur une longue durée ', 'En attente', '2025-02-23', 1),
(2, 'Optimisation du modèle', 'Améliorer la précision grâce à un meilleur pré-traitement.', 'Réduire les faux positifs', 'En attente', '2024-02-25', 1),
(3, 'Stockage innovant', 'Utiliser des systèmes de refroidissement naturel.', 'Réduire la chaleur dégagée', 'Refusé', '2024-01-15', 2),
(4, 'Amélioration de la sécurité', 'Implémenter un système de détection d\'anomalies avancé.', 'Prévenir les cyberattaques', 'Validé', '2024-03-18', 3),
(5, 'Détection améliorée', 'Utilisation de réseaux neuronaux convolutifs.', 'Réduire les erreurs', 'En attente', '2024-06-15', 4),
(6, 'Preuve de travail alternative', 'Diminution de la consommation énergétique.', 'Optimiser la blockchain', 'Refusé', '2023-11-10', 5),
(7, 'Optimisation du modèle', 'Améliorer la précision grâce à un meilleur pré-traitement.', 'Réduire les faux positifs', 'En attente', '2024-02-25', 1),
(8, 'Stockage innovant', 'Utiliser des systèmes de refroidissement naturel.', 'Réduire la chaleur dégagée', 'Refusé', '2024-01-15', 2),
(9, 'Amélioration de la sécurité', 'Implémenter un système de détection d\'anomalies avancé.', 'Prévenir les cyberattaques', 'Validé', '2024-03-18', 3),
(10, 'Détection améliorée', 'Utilisation de réseaux neuronaux convolutifs.', 'Réduire les erreurs', 'En attente', '2024-06-15', 4),
(11, 'Preuve de travail alternative', 'Diminution de la consommation énergétique.', 'Optimiser la blockchain', 'Refusé', '2023-11-10', 5);

-- --------------------------------------------------------

--
-- Structure de la table `participer`
--

CREATE TABLE `participer` (
  `id_participer` int(11) NOT NULL,
  `utilisateur_assoc` int(11) DEFAULT NULL,
  `proj_assoc` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `participer`
--

INSERT INTO `participer` (`id_participer`, `utilisateur_assoc`, `proj_assoc`) VALUES
(1, 1, 1),
(2, NULL, 1),
(3, 4, 1),
(13, 1, 1),
(14, 2, 1),
(15, 2, 2),
(16, 4, 2),
(17, 5, 3),
(18, 6, 4),
(19, 7, 5),
(20, 8, 4),
(21, 9, 5);

-- --------------------------------------------------------

--
-- Structure de la table `projet`
--

CREATE TABLE `projet` (
  `id_projet` int(11) NOT NULL,
  `libelle` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `objectis` text DEFAULT NULL,
  `date_debut` date DEFAULT NULL,
  `date_fin` date DEFAULT NULL,
  `image_projet` text DEFAULT NULL,
  `etat` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `projet`
--

INSERT INTO `projet` (`id_projet`, `libelle`, `description`, `objectis`, `date_debut`, `date_fin`, `image_projet`, `etat`) VALUES
(1, 'Base de donnée de gestion de stock', 'Il s\'agit de créer une base de donnée relationnelle afin de sauvegarder des données de magasins.', '- Faciliter le travail des employés\r\n- Diminuer la gestion par papier\r\n- Faciliter l\'étude de dossier\r\n ', '2025-02-23', '2025-02-28', 'uploads/projet/projet1.png', 'En cours'),
(2, 'Développement d\'IA médicale', 'Création d\'un algorithme de diagnostic automatisé.', 'Améliorer la détection des maladies', '2024-01-10', '2025-06-30', 'uploads/fichier/ai_medicale.jpg', 'En cours'),
(3, 'Optimisation énergétique', 'Réduction de la consommation électrique dans les datacenters.', 'Diminuer l\'empreinte carbone', '2023-05-15', '2024-12-01', 'uploads/fichier/datacenter.jpg', 'Terminé'),
(4, 'Automatisation industrielle', 'Mise en place de robots intelligents.', 'Augmenter la productivité', '2023-07-20', '2025-02-10', 'uploads/fichier/industrie.jpg', 'Annulé'),
(5, 'Vision par ordinateur', 'Développement d\'un modèle de reconnaissance faciale.', 'Améliorer la sécurité', '2024-06-01', '2025-12-31', 'uploads/fichier/vision_ai.jpg', 'En cours'),
(6, 'Blockchain et sécurité', 'Créer un système de certification basé sur la blockchain.', 'Sécuriser les données', '2023-08-10', '2024-09-15', 'uploads/fichier/blockchain.jpg', 'Terminé');

-- --------------------------------------------------------

--
-- Structure de la table `tache`
--

CREATE TABLE `tache` (
  `id_tache` int(11) NOT NULL,
  `libelle` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `etat` varchar(50) DEFAULT NULL,
  `date_emission` date DEFAULT NULL,
  `proj_assoc` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `tache`
--

INSERT INTO `tache` (`id_tache`, `libelle`, `description`, `etat`, `date_emission`, `proj_assoc`) VALUES
(1, 'Finir le CA', 'Ajout de specification', 'En cours', '2025-02-23', 1),
(2, 'Collecte de données', 'Récupérer et structurer les données médicales.', 'En cours', '2024-02-12', 1),
(3, 'Mise en place d\'une infrastructure', 'Installer les serveurs nécessaires.', 'Terminé', '2023-12-10', 2),
(4, 'Déploiement du système IA', 'Tester et valider l\'intégration de l\'IA en production.', 'En cours', '2024-05-05', 1),
(5, 'Collecte d\'images', 'Rassembler une base de données d\'images d\'entraînement.', 'En cours', '2024-06-05', 4),
(6, 'Développement de smart contracts', 'Créer des contrats intelligents sécurisés.', 'Terminé', '2023-09-30', 5),
(7, 'Collecte de données', 'Récupérer et structurer les données médicales.', 'En cours', '2024-02-12', 1),
(8, 'Mise en place d\'une infrastructure', 'Installer les serveurs nécessaires.', 'Terminé', '2023-12-10', 2),
(9, 'Déploiement du système IA', 'Tester et valider l\'intégration de l\'IA en production.', 'En cours', '2024-05-05', 1),
(10, 'Collecte d\'images', 'Rassembler une base de données d\'images d\'entraînement.', 'En cours', '2024-06-05', 4),
(11, 'Développement de smart contracts', 'Créer des contrats intelligents sécurisés.', 'Terminé', '2023-09-30', 5);

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `id_utilisateur` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mot_de_passe` varchar(255) NOT NULL,
  `role` varchar(100) DEFAULT NULL,
  `image_profile` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`id_utilisateur`, `nom`, `email`, `mot_de_passe`, `role`, `image_profile`) VALUES
(1, 'Marie Emmanuel', 'MissEmmanuel@gmail.com', '$2y$10$frVhzRXrxasop0VA61h/YunsVj2RZg0/PXYGEKv.XZzxsNX4HP4ki', 'chercheur', 'uploads/avatar/img_67bb4101958e94.13975392.png'),
(2, 'Blackscarf', 'Blackscarf@gmail.com', '$2y$10$9cYdRkM1Pr77u7pySDIUMuHn66x0tUbmDHkdF6eICcgCaswZrDjsa', 'admin', 'uploads/avatar/admin.png'),
(4, 'Valentina', 'Perez@gmail.com', '$2y$10$KlOEBTVA/b8Zlam8ZGYsTe6LyoeiEm/Aor86frQzJMh5qvrRRykW6', 'chercheur', 'uploads/avatar/img_67bb47983a33c1.53759017.png'),
(5, 'Victorine', 'Victoria@gmail.com', '$2y$10$ffV8iSb8XpktPRb8jQ6G2OYcU6UF25JZi7vSyBQFlzh9MMs/l5PCq', 'chercheur', 'uploads/avatar/img_67bb48c1cb1a20.41369548.png'),
(6, 'yavo jean', 'jeanpierreyavo1@gmail.com', '$2y$10$IZtMr8g5gRPI0eLNy8j5HetWiPuAH0I3VbPXCda9CoZDSnwZwmCAy', 'chercheur', 'uploads/avatar/img_67bc4fa6d1af07.60886169.png'),
(7, 'Alice Dupont', 'alice.dupont@example.com', 'password123', 'Chercheur', 'uploads/avatar/alice.jpg'),
(8, 'Bob Martin', 'bob.martin@example.com', 'securepass', 'Ingénieur', 'uploads/avatar/bob.jpg'),
(9, 'Claire Fontaine', 'claire.fontaine@example.com', 'clairepass', 'Data Scientist', 'uploads/avatar/claire.jpg'),
(10, 'David Leroy', 'david.leroy@example.com', 'david123', 'Développeur', 'uploads/avatar/david.jpg'),
(11, 'Emma Bernard', 'emma.bernard@example.com', 'emma456', 'Chef de projet', 'uploads/avatar/emma.jpg'),
(12, 'Lucas Morel', 'lucas.morel@example.com', 'lucas789', 'Technicien', 'uploads/avatar/lucas.jpg'),
(13, 'Sophie Lambert', 'sophie.lambert@example.com', 'sophiepass', 'Data Engineer', 'uploads/avatar/sophie.jpg'),
(14, 'Hugo Girard', 'hugo.girard@example.com', 'hugopass', 'Développeur', 'uploads/avatar/hugo.jpg'),
(15, 'Camille Robert', 'camille.robert@example.com', 'camillepass', 'Analyste', 'uploads/avatar/camille.jpg');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `commentaire`
--
ALTER TABLE `commentaire`
  ADD PRIMARY KEY (`id_commentaire`),
  ADD KEY `auteur` (`auteur`),
  ADD KEY `proj_assoc` (`proj_assoc`);

--
-- Index pour la table `document`
--
ALTER TABLE `document`
  ADD PRIMARY KEY (`id_document`),
  ADD KEY `proj_assoc` (`proj_assoc`);

--
-- Index pour la table `idee`
--
ALTER TABLE `idee`
  ADD PRIMARY KEY (`id_idee`),
  ADD KEY `proj_assoc` (`proj_assoc`);

--
-- Index pour la table `participer`
--
ALTER TABLE `participer`
  ADD PRIMARY KEY (`id_participer`),
  ADD KEY `utilisateur_assoc` (`utilisateur_assoc`),
  ADD KEY `proj_assoc` (`proj_assoc`);

--
-- Index pour la table `projet`
--
ALTER TABLE `projet`
  ADD PRIMARY KEY (`id_projet`);

--
-- Index pour la table `tache`
--
ALTER TABLE `tache`
  ADD PRIMARY KEY (`id_tache`),
  ADD KEY `proj_assoc` (`proj_assoc`);

--
-- Index pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`id_utilisateur`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `commentaire`
--
ALTER TABLE `commentaire`
  MODIFY `id_commentaire` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT pour la table `document`
--
ALTER TABLE `document`
  MODIFY `id_document` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT pour la table `idee`
--
ALTER TABLE `idee`
  MODIFY `id_idee` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT pour la table `participer`
--
ALTER TABLE `participer`
  MODIFY `id_participer` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT pour la table `projet`
--
ALTER TABLE `projet`
  MODIFY `id_projet` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `tache`
--
ALTER TABLE `tache`
  MODIFY `id_tache` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  MODIFY `id_utilisateur` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `commentaire`
--
ALTER TABLE `commentaire`
  ADD CONSTRAINT `commentaire_ibfk_1` FOREIGN KEY (`auteur`) REFERENCES `utilisateur` (`id_utilisateur`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `commentaire_ibfk_2` FOREIGN KEY (`proj_assoc`) REFERENCES `projet` (`id_projet`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Contraintes pour la table `document`
--
ALTER TABLE `document`
  ADD CONSTRAINT `document_ibfk_1` FOREIGN KEY (`proj_assoc`) REFERENCES `projet` (`id_projet`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Contraintes pour la table `idee`
--
ALTER TABLE `idee`
  ADD CONSTRAINT `idee_ibfk_1` FOREIGN KEY (`proj_assoc`) REFERENCES `projet` (`id_projet`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Contraintes pour la table `participer`
--
ALTER TABLE `participer`
  ADD CONSTRAINT `participer_ibfk_1` FOREIGN KEY (`utilisateur_assoc`) REFERENCES `utilisateur` (`id_utilisateur`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `participer_ibfk_2` FOREIGN KEY (`proj_assoc`) REFERENCES `projet` (`id_projet`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Contraintes pour la table `tache`
--
ALTER TABLE `tache`
  ADD CONSTRAINT `tache_ibfk_1` FOREIGN KEY (`proj_assoc`) REFERENCES `projet` (`id_projet`) ON DELETE SET NULL ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;