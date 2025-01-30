<?php
// notifications.php
session_start();

// Fonction pour définir une notification
function setNotification($type, $message) {
    $_SESSION['notification'] = [
        'type' => $type, // success ou error
        'message' => $message
    ];
}

// Fonction pour afficher et supprimer la notification
function displayNotification() {
    if (isset($_SESSION['notification'])) {
        $type = $_SESSION['notification']['type'];
        $message = $_SESSION['notification']['message'];
        $color = ($type === 'success') ? 'green' : 'red';

        echo "<div style='background-color: $color; color: white; padding: 10px; margin-bottom: 10px; border-radius: 5px;'>
                $message
              </div>";

        // Supprimer la notification après l'affichage
        unset($_SESSION['notification']);
    }
}



?>
