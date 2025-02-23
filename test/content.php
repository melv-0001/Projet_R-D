<?php
$page = isset($_GET['page']) ? $_GET['page'] : 'accueil';

switch ($page) {
    case 'projets':
        echo "<h2>Projets R&D</h2><p>Contenu des projets...</p>";
        break;
    case 'idees':
        echo "<h2>Idées Innovantes</h2><p>Contenu des idées...</p>";
        break;
    case 'partenariats':
        echo "<h2>Partenariats</h2><p>Contenu des partenariats...</p>";
        break;
    case 'calendrier':
        echo "<h2>Calendrier</h2><p>Agenda et événements...</p>";
        break;
    case 'utilisateurs':
        echo "<h2>Utilisateurs</h2><p>Liste des utilisateurs...</p>";
        break;
    case 'statistiques':
        echo "<h2>Statistiques</h2><p>Analyse des données...</p>";
        break;
    case 'parametres':
        echo "<h2>Paramètres</h2><p>Configurations...</p>";
        break;
    default:
        echo "<h2>Accueil</h2><p>Bienvenue sur le dashboard.</p>";
}
?>
