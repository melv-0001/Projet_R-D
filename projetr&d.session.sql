-- Insertion pour la table commentaire
INSERT INTO commentaire (auteur, proj_assoc, contenu, date_emmission) VALUES

(2, 1, 'Commentaire 2', '2025-01-02'),
(3, 2, 'Commentaire 3', '2025-01-03'),
(8, 2, 'Commentaire 4', '2025-01-04'),
(7, 3, 'Commentaire 5', '2025-01-05'),
(9, 3, 'Commentaire 6', '2025-01-06'),
(7, 4, 'Commentaire 7', '2025-01-07'),
(8, 4, 'Commentaire 8', '2025-01-08'),
(9, 5, 'Commentaire 9', '2025-01-09'),
(10, 5, 'Commentaire 10', '2025-01-10'),
(11, 6, 'Commentaire 11', '2025-01-11'),
(12, 6, 'Commentaire 12', '2025-01-12');

-- Insertion pour la table document
INSERT INTO document (titre, description, fichier, proj_assoc, date_emission, autorisation) VALUES
('Document 1', 'Description 1', 'fichier1.pdf', 1, '2025-01-01', 'Autorisation 1'),
('Document 2', 'Description 2', 'fichier2.pdf', 1, '2025-01-02', 'Autorisation 2'),
('Document 3', 'Description 3', 'fichier3.pdf', 2, '2025-01-03', 'Autorisation 2'),
('Document 4', 'Description 4', 'fichier4.pdf', 2, '2025-01-04', 'Autorisation 2'),
('Document 5', 'Description 5', 'fichier5.pdf', 3, '2025-01-05', 'Autorisation 2'),
('Document 6', 'Description 6', 'fichier6.pdf', 3, '2025-01-06', 'Autorisation 2'),
('Document 7', 'Description 7', 'fichier7.pdf', 4, '2025-01-07', 'Autorisation 2'),
('Document 8', 'Description 8', 'fichier8.pdf', 4, '2025-01-08', 'Autorisation 2'),
('Document 9', 'Description 9', 'fichier9.pdf', 5, '2025-01-09', 'Autorisation 1'),
('Document 10', 'Description 10', 'fichier10.pdf', 5, '2025-01-10', 'Autorisation 1'),
('Document 11', 'Description 11', 'fichier11.pdf', 6, '2025-01-11', 'Autorisation 1'),
('Document 12', 'Description 12', 'fichier12.pdf', 6, '2025-01-12', 'Autorisation 1');

-- Insertion pour la table idee
INSERT INTO idee (libelle, description, objectis, etat, date_emission, proj_assoc) VALUES
('Idée 1', 'Description 1', 'Objectif 1', 'En cours', '2025-01-01', 1),
('Idée 2', 'Description 2', 'Objectif 2', 'En cours', '2025-01-02', 1),
('Idée 3', 'Description 3', 'Objectif 3', 'Terminé', '2025-01-03', 2),
('Idée 4', 'Description 4', 'Objectif 4', 'Terminé', '2025-01-04', 2),
('Idée 5', 'Description 5', 'Objectif 5', 'Annulé', '2025-01-05', 3),
('Idée 6', 'Description 6', 'Objectif 6', 'En cours', '2025-01-06', 3),
('Idée 7', 'Description 7', 'Objectif 7', 'Terminé', '2025-01-07', 4),
('Idée 8', 'Description 8', 'Objectif 8', 'Annulé', '2025-01-08', 4),
('Idée 9', 'Description 9', 'Objectif 9', 'En cours', '2025-01-09', 5),
('Idée 10', 'Description 10', 'Objectif 10', 'En cours', '2025-01-10', 5),
('Idée 11', 'Description 11', 'Objectif 11', 'Terminé', '2025-01-11', 6),
('Idée 12', 'Description 12', 'Objectif 12', 'Annulé', '2025-01-12', 6);

-- Insertion pour la table participer
INSERT INTO participer (utilisateur_assoc, proj_assoc) VALUES
(1, 1),
(2, 1),
(3, 2),
(4, 2),
(5, 3),
(6, 3),
(7, 4),
(8, 4),
(9, 5),
(10, 5),
(11, 6),
(12, 6);

-- Insertion pour la table projet
INSERT INTO projet (libelle, description, objectis, date_debut, date_fin, image_projet, etat) VALUES
('Projet 1', 'Description 1', 'Objectif 1', '2025-01-01', '2025-06-01', 'image1.jpg', 'En cours'),
('Projet 2', 'Description 2', 'Objectif 2', '2025-01-02', '2025-06-02', 'image2.jpg', 'En cours'),
('Projet 3', 'Description 3', 'Objectif 3', '2025-01-03', '2025-06-03', 'image3.jpg', 'Terminé'),
('Projet 4', 'Description 4', 'Objectif 4', '2025-01-04', '2025-06-04', 'image4.jpg', 'Terminé'),
('Projet 5', 'Description 5', 'Objectif 5', '2025-01-05', '2025-06-05', 'image5.jpg', 'Annulé'),
('Projet 6', 'Description 6', 'Objectif 6', '2025-01-06', '2025-06-06', 'image6.jpg', 'En cours'),
('Projet 7', 'Description 7', 'Objectif 7', '2025-01-07', '2025-06-07', 'image7.jpg', 'Terminé'),
('Projet 8', 'Description 8', 'Objectif 8', '2025-01-08', '2025-06-08', 'image8.jpg', 'Annulé'),
('Projet 9', 'Description 9', 'Objectif 9', '2025-01-09', '2025-06-09', 'image9.jpg', 'En cours'),
('Projet 10', 'Description 10', 'Objectif 10', '2025-01-10', '2025-06-10', 'image10.jpg', 'En cours'),
('Projet 11', 'Description 11', 'Objectif 11', '2025-01-11', '2025-06-11', 'image11.jpg', 'Terminé'),
('Projet 12', 'Description 12', 'Objectif 12', '2025-01-12', '2025-06-12', 'image12.jpg', 'Annulé');

-- Insertion pour la table tache
INSERT INTO tache (libelle, description, etat, date_emission, proj_assoc) VALUES
('Tâche 1', 'Description 1', 'En cours', '2025-01-01', 1),
('Tâche 2', 'Description 2', 'En cours', '2025-01-02', 1),
('Tâche 3', 'Description 3', 'Terminé', '2025-01-03', 2),
('Tâche 4', 'Description 4', 'Terminé', '2025-01-04', 2),
('Tâche 5', 'Description 5', 'Annulé', '2025-01-05', 3),
('Tâche 6', 'Description 6', 'En cours', '2025-01-06', 3),
('Tâche 7', 'Description 7', 'Terminé', '2025-01-07', 4),
('Tâche 8', 'Description 8', 'Annulé', '2025-01-08', 4),
('Tâche 9', 'Description 9', 'En cours', '2025-01-09', 5),
('Tâche 10', 'Description 10', 'En cours', '2025-01-10', 5);

    