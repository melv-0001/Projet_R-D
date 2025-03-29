<!-- display:none -->
<!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        
        .content {
            padding: 30px;
        }

        .card {
            border: none;
            border-radius: 15px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
            background-color:#F9F9F9;
            
        }

        .card-header {
            font-size: 1.2rem;
            font-weight: 600;
            background: #94458f;
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
            padding: 10px;
        }
        .form-group input{
            width: 60%;
            height: 2.4rem;
            border: none;
            border-radius: 5px;
            background-color: rgba(234, 230, 230, 0.84);
        }

        .form-control {
            border-radius: 5px;
        }

        .btn-primary {
            border-radius: 30px;
            background:rgb(102, 55, 92);
            border: none;
            padding: 10px 20px;
            transition: background 0.3s;
        }

        .btn-primary:hover {
            background:rgb(110, 78, 103);
        }
    </style>
 </head>
 <body>
 <div class="content">
    <div class="container-fluid">
        <h2 class="mb-4" style="margin-bottom:2rem">Paramètres du Dashboard</h2>

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

 </body>
 </html>