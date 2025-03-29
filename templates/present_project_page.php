<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/48d43c639e.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./assets/css/index.css">
    <script src="./assets/js/script.js"></script>
    <title>Projet</title>
</head>
<body>
    <div class="contenter" style="margin-top:2rem">
        <div class="projet">
            <h1><img src="./assets/images/SmartHomeHub.jpg" alt="Projet SmartHomeHub">Projet SmartHomeHub</h1>
            <div class="image">
                <img src="photo.jpg" width="100%" height="350px">
            </div>
            <div class="project-details">
                <p><strong>Description :</strong> Une plateforme intégrée pour contrôler et surveiller tous les appareils connectés de votre maison intelligente.</p>
                <p><strong>Chef de projet :</strong> Dupont</p>
                <div class="dates">
                    <p><strong>Date de début :</strong> 01/01/2025</p>
                    <p><strong>Date de fin :</strong> 31/10/2025</p>
                </div>
        
            </div>
        </div>
        <div class="commentaire">
            <button class="btn" id="like-btn"><i class="fa-regular fa-thumbs-up"></i> J'aime</button>
            <button class="btn"><i class="fa-regular fa-comment"></i>Commenter</button>
            <button class="btn">AJOUTER UNE IDÉE</button>
            <button class="btn">TÂCHE</button>
        </div><br>
        <div id="comment-form" style="display: none;">
            <textarea id="comment-input" placeholder="Écrivez un commentaire..." rows="3"></textarea>
            <button id="submit-comment" class="btn">Publier</button>
        </div> 
        <!-- Formulaire caché pour ajouter une idée -->
        <div id="idea-form" style="display: none;">
            <h3>Soumettre une idée</h3>
            <input type="text" id="idea-name" placeholder="Nom">
            <input type="email" id="idea-email" placeholder="Adresse email">
            <textarea id="idea-message" placeholder="Votre avis..." rows="3"></textarea>
            <button id="submit-idea" class="btns">Envoyer</button>
        </div>
        <div id="task-list" style="display: none;">
            <h3>Planification et Suivi des Tâches du Projet</h3>
            <ul>
                <li><strong>Recherche et Développement :</strong>
                    <ul>
                        <li>Étudier les dernières technologies de maison intelligente.</li>
                        <li>Identifier les besoins des utilisateurs et les tendances du marché.</li>
                    </ul>
                </li>
                <li><strong>Intégration et Tests :</strong>
                    <ul>
                        <li>Intégrer différents systèmes et dispositifs (éclairage, sécurité, thermostats, etc.).</li>
                        <li>Effectuer des tests rigoureux pour assurer la compatibilité et la fiabilité.</li>
                    </ul>
                </li>

                <li><strong>Planification de la Sécurité :</strong>
                    <ul>
                        <li>Analyser et sécuriser les points d'entrée numériques.</li>
                        <li>Mettre en place des protocoles de sécurité pour protéger les données des utilisateurs.</li>
                    </ul>
                </li>
                <li><strong>Marketing et Lancement :</strong>
                    <ul>
                        <li>Créer une stratégie de marketing pour le lancement du produit.</li>
                        <li>Organiser des démonstrations et des sessions de formation pour les utilisateurs.</li>
                    </ul>
                </li>
                <li><strong>Support et Maintenance :</strong>
                    <ul>
                        <li>Développer une équipe de support technique.</li>
                        <li>Planifier des mises à jour régulières et la maintenance des dispositifs.</li>
                    </ul>
                </li>
            </ul>
        </div>

        <div id="comment-list"></div><br>
        <div class="doc">
            <h3>Document</h3>
            <div class="doc-buttons">
                <button class="btn">Voir</button>
            </div>
        </div>
        <!-- Ajout du tableau des documents PDF -->
<div id="document-table" style="display: none;">
    <h3>Liste des Documents</h3>
    <table border="1" width="100%">
        <thead>
            <tr>
                <th>Nom du document</th>
                <th>Taille</th>
                <th>Type</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Rapport de Projet SmartHomeHub</td>
                <td>107 Ko</td>
                <td>PDF</td>
                <td>
                    <a href="Rapport de Projet SmartHomeHub.pdf" target="_blank">Lire</a>
                </td>
            </tr>
            <tr>
                <td>Document 2</td>
                <td>850 Ko</td>
                <td>PDF</td>
                <td>
                    <a href="document2.pdf" target="_blank">Lire</a>
                </td>
            </tr>
            <tr>
                <td>Document 3</td>
                <td>2.5 Mo</td>
                <td>PDF</td>
                <td>
                    <a href="document3.pdf" target="_blank">Lire</a>
                </td>
            </tr>
            <tr>
                <td>Document 4</td>
                <td>1.8 Mo</td>
                <td>PDF</td>
                <td>
                    <a href="document4.pdf" target="_blank">Lire</a>
                </td>
            </tr>
        </tbody>
    </table>
</div>

        
        <div class="user">
            <div class="list">
                <h3>👨‍💼 Chef du projet</h3>
                <ul>
                    <li>Yavo Jean</li>
                </ul>
            </div>
            <div class="list">
                <h3>🔬 Chercheurs</h3>
                <ul>
                    <li>Yavo Jean</li>
                    <li>Yavo Jean</li>
                    <li>Yavo Jean</li>
                </ul>
            </div>
            <div class="list">
                <h3>🤝 Collaborateurs</h3>
                <ul>
                    <li>Yavo Jean</li>
                    <li>Yavo Jean</li>
                    <li>Yavo Jean</li>
                </ul>
            </div>
        </div>    
    </div>
<script src="./assets/js/script.js"></script>
</body>
</html>