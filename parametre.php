<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paramètres du Dashboard - TechInnova</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Prompt:wght@300;400;500;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: "Prompt", sans-serif;
            background-color: #7C705B;
            margin: 0;
            padding: 0;
        }
              /* Sidebar Styles */
              .sidebar {
            width: 260px;
            height: 100vh;
            position: fixed;
            background: #664D37;
            color: white;
            padding: 20px;
            box-shadow: 2px 0 10px rgba(0, 0, 0, 0.1);
        }

        .sidebar h3 {
            font-size: 1.5rem;
            margin-bottom: 1rem;
            text-align: center;
        }

        .sidebar a {
            color: #ecf0f1;
            text-decoration: none;
            display: block;
            padding: 10px 15px;
            border-radius: 5px;
            margin-bottom: 10px;
            font-size: 1rem;
            transition: all 0.3s;
        }

        .sidebar a:hover {
            background: #7C705B;
        }

        .sidebar a i {
            margin-right: 10px;
        }


        .content {
            margin-left: 280px;
            padding: 30px;
        }

        .card {
            border: none;
            border-radius: 15px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
        }

        .card-header {
            font-size: 1.2rem;
            font-weight: 600;
            background: #664D37;
            color: white;
            border-radius: 15px 15px 0 0;
            padding: 10px;
        }

        .list-group-item {
            border: none;
            padding: 15px;
        }

        .form-group {
            margin-bottom: 15px;
        }

        .form-control {
            border-radius: 5px;
        }

        .btn-primary {
            border-radius: 30px;
            background: #664D37;
            border: none;
            padding: 10px 20px;
            transition: background 0.3s;
        }

        .btn-primary:hover {
            background:rgb(49, 47, 43);
        }

        footer {
            text-align: center;
            padding: 15px 0;
            background: #664D37;
            color: white;
            margin-top: 30px;
        }
    </style>
</head>
<body>
<div class="sidebar">
    <h3>TechInnova</h3>
    <a href="http://localhost//Projet_Techlnnova/dashboard/index.php"><i class="fas fa-home"></i> Accueil</a>
    <a href="http://localhost//Projet_Techlnnova/dashboard/projet.php"><i class="fas fa-project-diagram"></i> Projets R&D</a>
    <a href="http://localhost//Projet_Techlnnova/dashboard/id%C3%A9es.php"><i class="fas fa-lightbulb"></i> Idées innovantes</a>
    <a href="http://localhost//Projet_Techlnnova/page1/doc.php"><i class="fas fa-file-alt"></i> Documents</a>
    <a href="http://localhost//Projet_Techlnnova/dashboard/utilisateur.php"><i class="fas fa-users"></i> Utilisateurs</a>
    <a href="http://localhost//Projet_Techlnnova/dashboard/calendar.php" id="calendar-link"><i class="fa-solid fa-calendar-days"></i> Calendrier</a>
    <a href="http://localhost//Projet_Techlnnova/dashboard/profil.php" id="calendar-link"><i class="fa-solid fa-user"></i>Profil</a>
    
</div>

<div class="content">
    <div class="container-fluid">
        <h2 class="mb-4">Paramètres du Dashboard</h2>

        <!-- Paramètres de l'utilisateur -->
        <div class="card">
            <div class="card-header">Paramètres de l'utilisateur</div>
            <div class="card-body">
                <div class="form-group">
                    <label for="profileName">Nom</label>
                    <input type="text" class="form-control" id="profileName">
                </div>
                <div class="form-group">
                    <label for="profileEmail">Adresse e-mail</label>
                    <input type="email" class="form-control" id="profileEmail">
                </div>
                <div class="form-group">
                    <label for="profileLanguage">Langue</label>
                    <select class="form-control" id="profileLanguage">
                        <option>Français</option>
                        <option>Anglais</option>
                        <!-- Ajoutez d'autres langues ici -->
                    </select>
                </div>
                <div class="form-group">
                    <label for="profileTimezone">Fuseau horaire</label>
                    <select class="form-control" id="profileTimezone">
                        <option>GMT</option>
                        <option>UTC</option>
                        <!-- Ajoutez d'autres fuseaux horaires ici -->
                    </select>
                </div>
            </div>
        </div>

        <!-- Personnalisation du dashboard -->
        <div class="card">
            <div class="card-header">Personnalisation du dashboard</div>
            <div class="card-body">
                <div class="form-group">
                    <label for="theme">Thème</label>
                    <select class="form-control" id="theme">
                        <option>Clair</option>
                        <option>Sombre</option>
                        <!-- Ajoutez d'autres thèmes ici -->
                    </select>
                </div>
                <div class="form-group">
                    <label for="widgets">Widgets</label>
                    <select multiple class="form-control" id="widgets">
                        <option>Graphiques de vente</option>
                        <option>Tableau des projets</option>
                        <!-- Ajoutez d'autres widgets ici -->
                    </select>
                </div>
                <div class="form-group">
                    <label for="layout">Disposition</label>
                    <select class="form-control" id="layout">
                        <option>Grille</option>
                        <option>Colonnes</option>
                        <!-- Ajoutez d'autres dispositions ici -->
                    </select>
                </div>
            </div>
        </div>

        <!-- Gestion des données -->
        <div class="card">
            <div class="card-header">Gestion des données</div>
            <div class="card-body">
                <div class="form-group">
                    <label for="dataSource">Source de données</label>
                    <input type="text" class="form-control" id="dataSource">
                </div>
                <div class="form-group">
                    <label for="refreshRate">Fréquence de rafraîchissement</label>
                    <select class="form-control" id="refreshRate">
                        <option>10 minutes</option>
                        <option>30 minutes</option>
                        <option>1 heure</option>
                        <!-- Ajoutez d'autres fréquences ici -->
                    </select>
                </div>
            </div>
        </div>

        <!-- Sécurité et accès -->
        <div class="card">
            <div class="card-header">Sécurité et accès</div>
            <div class="card-body">
                <div class="form-group">
                    <label for="userRoles">Rôles des utilisateurs</label>
                    <select multiple class="form-control" id="userRoles">
                        <option>Administrateur</option>
                        <option>Éditeur</option>
                        <option>Visualiseur</option>
                        <!-- Ajoutez d'autres rôles ici -->
                    </select>
                </div>
                <div class="form-group">
                    <label for="securitySettings">Paramètres de sécurité</label>
                    <select class="form-control" id="securitySettings">
                        <option>Authentification à deux facteurs</option>
                        <option>Changer le mot de passe</option>
                        <!-- Ajoutez d'autres paramètres ici -->
                    </select>
                </div>
            </div>
        </div>

        <!-- Rapports et exportation -->
        <div class="card">
            <div class="card-header">Rapports et exportation</div>
            <div class="card-body">
                <div class="form-group">
                    <label for="exportFormat">Format d'exportation</label>
                    <select class="form-control" id="exportFormat">
                        <option>CSV</option>
                        <option>PDF</option>
                        <option>Excel</option>
                        <!-- Ajoutez d'autres formats ici -->
                    </select>
                </div>
                <div class="form-group">
                    <label for="reportSettings">Paramètres des rapports</label>
                    <input type="text" class="form-control" id="reportSettings">
                </div>
            </div>
        </div>

       <!-- Intégrations et API -->
       <div class="card">
            <div class="card-header">Intégrations et API</div>
            <div class="card-body">
                <div class="form-group">
                    <label for="apiKey">Clé API</label>
                    <input type="text" class="form-control" id="apiKey">
                </div>
                <div class="form-group">
                    <label for="webhook">Webhook</label>
                    <input type="text" class="form-control" id="webhook">
                </div>
            </div>
        </div>

        <!-- Paramètres généraux -->
        <div class="card">
            <div class="card-header">Paramètres généraux</div>
            <div class="card-body">
                <div class="form-group">
                    <label for="language">Langue</label>
                    <select class="form-control" id="language">
                        <option>Français</option>
                        <option>Anglais</option>
                        <!-- Ajoutez d'autres langues ici -->
                    </select>
                </div>
                <div class="form-group">
                    <label for="currency">Devise</label>
                    <select class="form-control" id="currency">
                        <option>EUR</option>
                        <option>USD</option>
                        <!-- Ajoutez d'autres devises ici -->
                    </select>
                </div>
                <div class="form-group">
                    <label for="dateFormat">Format de date</label>
                    <select class="form-control" id="dateFormat">
                        <option>JJ/MM/AAAA</option>
                        <option>MM/JJ/AAAA</option>
                        <!-- Ajoutez d'autres formats ici -->
                    </select>
                </div>
            </div>
        </div>

        <!-- Support et assistance -->
        <div class="card">
            <div class="card-header">Support et assistance</div>
            <div class="card-body">
                <div class="form-group">
                    <label for="documentation">Documentation</label>
                    <a href="documentation.html" class="form-control">Accéder à la documentation</a>
                </div>
                <div class="form-group">
                    <label for="contactSupport">Contact support</label>
                    <input type="text" class="form-control" id="contactSupport" placeholder="support@techinnova.com">
                </div>
                <div class="form-group">
                    <label for="tutorials">Tutoriels</label>
                    <a href="tutorials.html" class="form-control">Accéder aux tutoriels</a>
                </div>
            </div>
        </div>

        <button type="submit" class="btn btn-primary mt-4">Enregistrer les paramètres</button>
    </div>
</div>

<footer>
    <p>&copy; 2025 TechInnova. Tous droits réservés.</p>
</footer>

<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</body>
</html>

