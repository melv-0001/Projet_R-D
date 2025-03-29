<?php 

// Connexion à la base de données
require_once('./pdo.php');
require_once('./function.php');
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['id'])) {
    try {
        $id = $_POST['id'];
        // Requête pour supprimer les données
        $query = "DELETE FROM utilisateur WHERE id_utilisateur = :id";  
        $stmt = $connect->prepare($query);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);  
        
        
        // Execution de la requête
        if ($stmt->execute()){
            echo 'Opération reussie';
        }else{
            echo 'Echec';
        };
    
    
    } catch(PDOException $e) {
        echo "Erreur lors de la mise à jour de l'utilisateur: " . $e->getMessage();
    };

}

?>