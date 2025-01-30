<?php
//connexion à la db
require_once('../includes/pdo.php');


//Traitement des données
if (isset($_POST['button']) && $_POST['button'] == 'submit'){ 
    
    // Verification de tte la reception
    if (!empty($_POST['email']) && !empty($_POST['password'])){
        //récupération des données du formulaire
    
        $email = htmlspecialchars( $_POST['email']);
        $password = $_POST['password'];
        

        // Vérification de l'existence de l'utilisateur dans la base de données
        $sql="SELECT * FROM utilisateur WHERE email =? ";
        $stmt = $connect->prepare($sql);
        $stmt->execute(array($email));

        
        // Si l'utilisateur existe
        if ($stmt->rowCount() > 0){
            if (password_verify($password,$stmt->fetch()['mot_de_passe'])) {
              
              // Création de la session
              session_start();
              
              // Récupération des informations de l'utilisateur
              $_SESSION['nom'] = $stmt->fetch()['nom'];
              $_SESSION['email'] = $email;
              $_SESSION['role'] = $stmt->fetch()['role'];
              $_SESSION['image'] = $stmt->fetch()['image'];
              
             
              // Redirection vers la page d'accueil
              header('Location:../accueil.php');
              
  
  
             } else {
                 // Afficher un message d'erreur si le mot de passe est incorrect
                 echo 'Le mot de passe est incorrect';
             }

            
            
        }else{
            // Si l'utilisateur n'existe pas
            echo 'Erreur : email ou mot de passe incorrect';
            
        }
        
        
        
    }else{
        // Si le champ est vide
        die('Erreur!');
    
    };

}else{
    // Redirection si le bouton n'est pas cliqué
    header('Location:../index_signup.php');    
    

};
?>