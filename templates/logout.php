<?php
// Démarrer la session
session_start();

// Vider toutes les variables de session
$_SESSION = array();

// Si vous voulez détruire complètement la session, supprimez aussi le cookie de session.
if (ini_get("session.use_cookies")) {
    $params = session_get_cookie_params();
    setcookie(session_name(), '', time() - 42000,
        $params["path"], $params["domain"],
        $params["secure"], $params["httponly"]
    );
}

// Finalement, détruire la session.
session_destroy();

// Réponse pour AJAX
echo json_encode(["success" => true]);
?>
