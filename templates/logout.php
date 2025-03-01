<?php
// Démarrer la session
session_start();
// Vider toutes les variables de session
$_SESSION = [];
// Finalement, détruire la session.
session_destroy();
// Redirection vers la page d'inscription
header('Location:../index_signup.php')
?>
