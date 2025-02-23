<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projets R&D</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Prompt:wght@300;400;500;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: "Prompt", serif;
            background-color: #7C705B;
            margin: 0;
            padding: 0;
        }
        header {
            background-color: #664D37;
            color: #fff;
            padding: 20px;
            text-align: center;
        }
        header nav ul {
            list-style: none;
            padding: 0;
        }
        header nav ul li {
            display: inline;
            margin: 0 15px;
        }
        header nav ul li a {
            color: #fff;
            text-decoration: none;
        }
        .project {
            background: white;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
            padding: 20px;
        }
        .project-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 10px;
        }
        .project-status {
            padding: 5px 15px;
            border-radius: 20px;
            font-weight: bold;
            text-transform: uppercase;
        }
        .status-en-cours {
            background-color: #ffc107;
            color: white;
        }
        .status-termine {
            background-color: #28a745;
            color: white;
        }
        .status-pas-valide {
            background-color: #dc3545;
            color: white;
        }
        canvas {
            display: block;
            margin: 0 auto;
            max-width: 300px;
            max-height: 300px;
        }
        footer {
            background-color: #664D37;
            color: white;
            text-align: center;
            padding: 10px 0;
            margin-top: 20px;
        }
        .dashboard {
            background: #fff;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            margin-bottom: 30px;
        }
        .dashboard h3 {
            margin-bottom: 20px;
        }
        .alert {
            padding: 10px;
            margin: 5px 0;
            border-radius: 5px;
            font-weight: bold;
        }
        .alert-warning {
            background-color: #ffc107;
            color: #fff;
        }
    </style>
</head>
<body>
<header>
    <h1>TechInnova</h1>
    <nav>
        <ul>
            <li><a href="http://localhost//Projet_Techlnnova/dashboard/index.php">Accueil</a></li>
            <li><a href="http://localhost//Projet_Techlnnova/dashboard/id%C3%A9es.php">Idées innovantes</a></li>
            <li><a href="http://localhost//Projet_Techlnnova/page1/doc.php">Documents</a></li>
            <li><a href="http://localhost//Projet_Techlnnova/dashboard/utilisateur.php">Utilisateurs</a></li>
            <li><a href="http://localhost//Projet_Techlnnova/dashboard/calendar.php"> Calendrier</a></li>

        </ul>
    </nav>
</header>
<div class="container my-5">
    <h1 class="text-center mb-4">Projets R&D</h1>

    <!-- Tableau de bord -->
    <div class="dashboard">
        <h3>Résumé des projets actifs</h3>
        <p>Nombre de projets actifs : <strong id="activeProjectsCount">0</strong></p>
        <h4>Alertes : échéances proches</h4>
        <div id="alerts"></div>
    </div>

    <!-- Projets -->
    <div id="projects">
        <!-- Les projets seront insérés ici dynamiquement -->
    </div>

    <!-- Bouton pour ajouter un nouveau projet -->
    <div class="text-center mt-4">
        <button class="btn btn-primary" onclick="addNewProject()">Ajouter un nouveau projet</button>
    </div>

</div>


<footer>
    <p>&copy; 2025 TechInnova. Tous droits réservés.</p>
</footer>
    <!--Création des tables de chaque projet avec leur nom  -->
<script>
    const projects = [
        { id: 1, name: 'Projet SmartHomeHub', status: 'En cours', start: '01/01/2024', end: '31/12/2024', manager: 'Alice Dupont', detaille: 'Une plateforme intégrée pour contrôler et surveiller tous les appareils connectés de votre maison intelligente.', progress: 40, tasks: 5,  },
        { id: 2, name: 'Projet AI Insights', status: 'Pas encore validé', start: '15/02/2024', end: '15/08/2024', manager: 'Bob Martin',detaille: "Un outil d'analyse de données utilisant l'intelligence artificielle pour fournir des insights exploitables et des prévisions précises.", progress: 20, tasks: 8,  },
        { id: 3, name: 'Projet CyberShield', status: 'Terminé', start: '01/03/2023', end: '30/11/2023', manager: 'Clara Bernard', detaille: 'Un système avancé de cybersécurité offrant une protection en temps réel contre les menaces en ligne.', progress: 100, tasks: 10, },
        { id: 4, name: 'Projet GreenTech Solutions', status: 'En cours', start: '01/07/2024', end: '01/12/2024', manager: 'David Leroy', detaille: " Des innovations technologiques écologiques pour améliorer l'efficacité énergétique et réduire l'empreinte carbone.", progress: 50, tasks: 6, },
        { id: 5, name: 'Projet VR Learning', status: 'Pas encore validé', start: '01/10/2024', end: '30/04/2025', manager: 'Emilie Laurent', detaille: " Une plateforme éducative utilisant la réalité virtuelle pour offrir des expériences d'apprentissage immersives et interactives.", progress: 10, tasks: 7, },
    ];

    function renderProjects() {
        const projectContainer = document.getElementById('projects');
        const activeProjects = projects.filter(project => project.status === 'En cours');
        const alertsContainer = document.getElementById('alerts');

        document.getElementById('activeProjectsCount').textContent = activeProjects.length;
        projectContainer.innerHTML = '';
        alertsContainer.innerHTML = '';

        projects.forEach(project => {
            const projectDiv = document.createElement('div');
            projectDiv.classList.add('project');
            projectDiv.innerHTML = `   
                <div class="project-header">
                    <h2>${project.name}</h2>
                    <span class="project-status status-${project.status.replace(/ /g, '-').toLowerCase()}">${project.status}</span>
                </div>
                <p><strong>Description :</strong> ${project.detaille}</p>
                <p><strong>Chef de projet :</strong> ${project.manager}</p>
                <p><strong>Date de début :</strong> ${project.start}</p>
                <p><strong>Date de fin :</strong> ${project.end}</p>
                <p><strong>Tâches à accomplir :</strong> ${project.tasks}</p>
                <canvas id="progressChart${project.id}"></canvas>
                <div class="mt-3">
                    <button class="btn btn-secondary"><a href="http://localhost//Projet_Techlnnova/page1/doc.php">Documents</a></button>
                </div>
                <div class="comment-section mt-3">
                    <h4>Commentaires</h4>
                    <textarea rows="3" placeholder="Laisser un commentaire..." class="form-control mb-2"></textarea>
                    <button class="btn btn-primary">Soumettre</button>
                </div>
            `;
            projectContainer.appendChild(projectDiv);

            // Initialiser le graphique
            const ctx = document.getElementById(`progressChart${project.id}`).getContext('2d');
            new Chart(ctx, {
                type: 'doughnut',
                data: {
                    labels: ['Complété', 'Restant'],
                    datasets: [{
                        data: [project.progress, 100 - project.progress],
                        backgroundColor: ['#28a745', '#ffc107'],
                    }],
                },
                options: {
                    responsive: true,
                },
            });

            // Ajouter une alerte pour les projets proches de l'échéance
            const today = new Date();
            const endDate = new Date(project.end.split('/').reverse().join('/'));
            const timeDiff = Math.ceil((endDate - today) / (1000 * 60 * 60 * 24));

            if (timeDiff <= 30 && timeDiff > 0) {
                const alertDiv = document.createElement('div');
                alertDiv.classList.add('alert', 'alert-warning');
                alertDiv.textContent = `Le projet "${project.name}" approche de son échéance (${timeDiff} jours restants).`;
                alertsContainer.appendChild(alertDiv);
            }
        });
    }
        //Envoyer un message d'alert pour l'ajout d'un nouveau projet
    function addNewProject() {
        alert('Fonction d\'ajout de projet en cours de développement !');
    }

    // Charger les projets au démarrage
    document.addEventListener('DOMContentLoaded', renderProjects);
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</body>
</html>
