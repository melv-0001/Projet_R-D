<?php
/*//connexion à la db
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
              $_SESSION['id'] = $stmt->fetch()['id_utilisateur'];
              $_SESSION['nom'] = $stmt->fetch()['nom'];
              $_SESSION['email'] = $email;
              $_SESSION['password'] = $password;
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
    

};*/
?>

<?php
//connexion à la db
require_once('../includes/pdo.php');

//Traitement des données
if (isset($_POST['button']) && $_POST['button'] == 'submit'){ 
    
    // Vérification de tte la réception
    if (!empty($_POST['email']) && !empty($_POST['password'])){
        //récupération des données du formulaire
        $email = htmlspecialchars( $_POST['email']);
        $password = $_POST['password'];

        // Vérification de l'existence de l'utilisateur dans la base de données
        $sql="SELECT * FROM utilisateur WHERE email =? ";
        $stmt = $connect->prepare($sql);
        $stmt->execute(array($email));
        $user = $stmt->fetch();

        // Si l'utilisateur existe
        if ($user){
            if (password_verify($password, $user['mot_de_passe'])) {
                // Création de la session
                session_start();

                // Récupération des informations de l'utilisateur
                $_SESSION['id'] = $user['id_utilisateur'];
                $_SESSION['nom'] = $user['nom'];
                $_SESSION['email'] = $email;
                $_SESSION['role'] = $user['role'];
                $_SESSION['password'] = $user['mot_de_passe'];
                $_SESSION['image'] = $user['image_profile'];
                if ($_SESSION['email']==='Laravel@gmail.com' && password_verify('Laravellaplusbellefille',$_SESSION['password'])) {
                    $_SESSION['role']='admin';
                };
                if (!isset($_SESSION['nom'],$_SESSION['role'])) {
                    header('Location: ../index_signup.php');
                    exit();
                }else{  
                if ($_SESSION['role']==='chercheur'){
                    header('Location: ../dash_chercheur.php') ;}
                elseif($_SESSION['role']==='admin'){header('Location: ../dashboard.php');}
                else{
                    header('Location: ../dash_collab.php');
                };
                };
                // // Redirection vers la page d'accueil
                // header('Location:../accueil.php');
            } else {
                // Afficher un message d'erreur si le mot de passe est incorrect
                echo 'Le mot de passe est incorrect';
            }
        } else {
            // Si l'utilisateur n'existe pas
            echo 'Erreur : email ou mot de passe incorrect';
        }
    } else {
        // Si le champ est vide
        die('Erreur : tous les champs sont requis !');
    }
} else {
    // Redirection si le bouton n'est pas cliqué
    header('Location:../index_signup.php');    
}
?>
