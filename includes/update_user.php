<?php
require_once('./pdo.php');
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['id']) && isset($_POST['email']) && isset($_POST['role'])) {
    $user_id = $_POST['id'];
    $email = $_POST['email'];
    $role = $_POST['role'];
    $nom = $_POST['nom'];

    try {
        // Préparer la requête SQL pour mettre à jour l'utilisateur
        $sql = "UPDATE utilisateur SET email = :email,nom = :nom, role = :role WHERE id_utilisateur = :id";
        $stmt = $connect->prepare($sql);

        // Lier les paramètres
        $stmt->bindParam(':email', $email, PDO::PARAM_STR);
        $stmt->bindParam(':nom', $nom, PDO::PARAM_STR);
        $stmt->bindParam(':role', $role, PDO::PARAM_STR);
        $stmt->bindParam(':id', $user_id, PDO::PARAM_INT);

        // Exécuter la requête
        $stmt->execute();

        echo "Utilisateur mis à jour avec succès.";
    } catch(PDOException $e) {
        echo "Erreur lors de la mise à jour de l'utilisateur: " . $e->getMessage();
    }
    
}
?>