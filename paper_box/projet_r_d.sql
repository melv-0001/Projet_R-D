

CREATE TABLE utilisateur (
    id_utilisateur INT AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(255) NOT NULL,
    email VARCHAR(255) UNIQUE NOT NULL,
    mot_de_passe VARCHAR(255) NOT NULL,
    role VARCHAR(100),
    image_profile TEXT
);

CREATE TABLE projet (
    id_projet INT AUTO_INCREMENT PRIMARY KEY,
    libelle VARCHAR(255) NOT NULL,
    description TEXT,
    objectis TEXT,
    date_debut DATE,
    date_fin DATE,
    image_projet TEXT,
    etat VARCHAR(50)
);

CREATE TABLE tache (
    id_tache INT AUTO_INCREMENT PRIMARY KEY,
    libelle VARCHAR(255) NOT NULL,
    description TEXT,
    etat VARCHAR(50),
    date_emission DATE,
    proj_assoc INT,
    FOREIGN KEY (proj_assoc) REFERENCES projet(id_projet) 
        ON DELETE SET NULL ON UPDATE CASCADE
);

CREATE TABLE idee (
    id_idee INT AUTO_INCREMENT PRIMARY KEY,
    libelle VARCHAR(255) NOT NULL,
    description TEXT,
    objectis TEXT,
    etat VARCHAR(50),
    date_emission DATE,
    proj_assoc INT,
    FOREIGN KEY (proj_assoc) REFERENCES projet(id_projet) 
        ON DELETE SET NULL ON UPDATE CASCADE
);

CREATE TABLE document (
    id_document INT AUTO_INCREMENT PRIMARY KEY,
    titre VARCHAR(255) NOT NULL,
    description TEXT,
    fichier TEXT,
    proj_assoc INT,
    date_emission DATE,
    autorisation VARCHAR(50),
    FOREIGN KEY (proj_assoc) REFERENCES projet(id_projet) 
        ON DELETE SET NULL ON UPDATE CASCADE
);

CREATE TABLE commentaire (
    id_commentaire INT AUTO_INCREMENT PRIMARY KEY,
    auteur INT,
    proj_assoc INT,
    contenu TEXT NOT NULL,
    date_emmission DATE,
    FOREIGN KEY (auteur) REFERENCES utilisateur(id_utilisateur) 
        ON DELETE SET NULL ON UPDATE CASCADE,
    FOREIGN KEY (proj_assoc) REFERENCES projet(id_projet) 
        ON DELETE SET NULL ON UPDATE CASCADE
);

CREATE TABLE participer (
    id_participer INT AUTO_INCREMENT PRIMARY KEY,
    utilisateur_assoc INT,
    proj_assoc INT,
    FOREIGN KEY (utilisateur_assoc) REFERENCES utilisateur(id_utilisateur) 
        ON DELETE SET NULL ON UPDATE CASCADE,
    FOREIGN KEY (proj_assoc) REFERENCES projet(id_projet) 
        ON DELETE SET NULL ON UPDATE CASCADE
);
