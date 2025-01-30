<?php
//connexion à la db
require_once('../includes/pdo.php');
require_once('../includes/function.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    //Traitement des données
    if (isset($_POST['button']) and $_POST['button'] == 'submit'){ 
        
        // Verification de tte la reception
        if (isset($_POST['nom'],$_POST['email'], $_POST['role'],$_POST['password'])){
            //récupération des données du formulaire
        
            $nom = $_POST['nom'];
            $email = $_POST['email'];
            $role = $_POST['role'];
            $img_path= upload_image();
            //Hashage du mot de passe
            $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
           //insertion dans la base de données
           $sql =  "INSERT INTO `utilisateur` (`nom`, `email`, `role`, `mot_de_passe`,`image_profile`) VALUES (?,?,?,?,?) ";
           $req = $connect->prepare($sql);
           if ( $req->execute(array($nom, $email, $role, $password,$img_path))) {
              session_start();
              $_SESSION['nom'] = $nom;
              $_SESSION['email'] = $email;
              $_SESSION['role'] = $role;
              $_SESSION['image'] = $img_path;
              success("../accueil.php");
           } else {
              echo "Erreur lors de l'insertion dans la base de données : " . $conn->error;
           }
                        
           
            
            
        }else{
            
            exit('exit');
        
        }
    
    }else{
        // Redirection si le bouton n'est pas cliqué
        header('Location:../index_signup.php'); 
       
        
       
    
    };
    
}else{
    // Redirection si le bouton n'est pas cliqué
    header('Location:../index_signup.php');  
};
?>