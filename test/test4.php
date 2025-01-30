<?php
function upload_image() {
    // Vérification si le fichier a bien été uploadé
    if (isset($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK) {
        // Récupérer les informations du fichier
        $fileTmpPath = $_FILES['image']['tmp_name'];
        $fileName = $_FILES['image']['name'];
        $fileSize = $_FILES['image']['size'];
        $fileType = $_FILES['image']['type'];
        $fileExtension = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));

        // Définir les extensions et tailles autorisées
        $allowedExtensions = ['jpg', 'jpeg', 'png', 'gif'];
        $maxFileSize = 5 * 1024 * 1024; // 5 MB

        // Vérifier l'extension du fichier
        if (!in_array($fileExtension, $allowedExtensions)) {
            die("Type de fichier non autorisé. Extensions autorisées : jpg, jpeg, png, gif.");
        }

        // Vérifier la taille du fichier
        if ($fileSize > $maxFileSize) {
            die("Le fichier est trop volumineux. La taille maximale autorisée est de 5 MB.");
        }

        // Créer le dossier d'upload s'il n'existe pas
        $uploadDir = __DIR__ . '/uploads/';
        if (!is_dir($uploadDir)) {
            mkdir($uploadDir, 0755, true);
        }

        // Générer un nom de fichier unique pour éviter les conflits
        $newFileName = uniqid('img_', true) . '.' . $fileExtension;

        // Définir le chemin final du fichier
        $destinationPath = $uploadDir . $newFileName;

        // Déplacer le fichier depuis le dossier temporaire vers le dossier d'upload
        if (move_uploaded_file($fileTmpPath, $destinationPath)) {
            // Retourner le chemin relatif pour l'enregistrement en base de données
            return 'uploads/' . $newFileName;
            
        } else {
            die("Erreur lors du déplacement du fichier.");
        }
    } else {
        die("Aucun fichier n'a été téléchargé ou une erreur s'est produite.");
    }
};

// Utilisation de la fonction

$imagePath = upload_image();
echo $imagePath; // Affiche le chemin relatif du fichier uploadé
?>
