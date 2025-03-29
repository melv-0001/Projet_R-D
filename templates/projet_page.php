<?php 
session_start();
/// Connexion à la base de données
require_once __DIR__ . '/../includes/pdo.php';
// Connexion à la base de données
require_once __DIR__ . '/../includes/function.php';
// Requête pour récupérer les données

$sql = "SELECT * FROM projet";
$req = $connect->prepare($sql);
$req->execute();


?>

<!DOCTYPE html>
<html lang="en">
<head>
    
    <style>
        /* :root{--liner:linear-gradient( #F9F9F9,plum,purple);} */
        
        .project {
                margin-top:2rem;               
                border: 1px solid #ddd;
                box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
                padding: 25px;
                border-radius: 20px;
                background-color:rgb(249, 249, 249) ;
                transition: transform 0.3s, box-shadow 0.3s;
                color:rgb(90, 87, 80);
                transition: all 0.8s ease;
                /* overflow:scroll; */
                
                
            }

            /* on active */
            .project.active {
                width: 50rem;
                height: 25rem;
                position: sticky;

            }
            .project.active a{
                display: none;
            }


            .project:hover {
                transform: translateY(-3px);
                box-shadow: 0 8px 16px rgba(0, 0, 0, 0.3);
            }
    
            .project-header {
                display: flex;
                justify-content: space-between;
                align-items: center;
                margin-bottom: 10px;
                
            }
            .head-titre{
                margin-right:auto;
                font-size:24px;
                font-weight: 600;
                color: var(--dark);
            }
            .project a{
                color:rgb(2, 32, 62);
                text-decoration: none;
                transition: color 0.3s;
                padding: 1px;
                font-size: 10px;
                margin-left: calc(24rem);
            }
            .project a:hover{
                color:rgb(54, 29, 66);
                text-decoration: underline;
            }
    
            .project-status {
                padding: 5px 10px;
                border-radius: 5px;
                font-size: 14px;
                font-weight: bold;
            }
    
            .status-en-cours {
                background-color: #28a745;
                color: white;
            }
    
            .status-annulé {
                background-color: #ffc107;
                color: black;
            }
    
            .status-terminé {
                background-color: #dc3545;
                color: white;
            }
            .skill-box .skill-bar {
               height: 8px;
               width: 100%;
               border-radius: 6px;
               margin-top: 6px;
               background: rgba(0,0,0,0.1);
               margin: 15px;
               margin-left: -3px;
             }
             
             .skill-bar .skill-per {
               position: relative;
               display: block;
               height: 100%;
               width: 90%;
               border-radius: 6px;
               background:rgb(6, 184, 74);
               animation: progress 0.4s ease-in-out forwards;
               opacity: 0;
             }
             
             .skill-per.html {
                /*progreso de las diferentes lenguajes*/
               width: 50%;
               animation-delay: 0.1s;
               }
               
               @keyframes progress {
                 0% {
                   width: 0;
                   opacity: 1;
                 }
               
                 100% {
                   opacity: 1;
                 }
               }
               
               .skill-per .tooltip {
                 position: absolute;
                 right: -14px;
                 top: -28px;
                 font-size: 9px;
                 font-weight: 500;
                 color: #fff;
                 padding: 2px 6px;
                 border-radius: 3px;
                 background:rgb(6, 184, 74);
                 z-index: 1;
               }

                .tooltip::before {
                  content: '';
                  position: absolute;
                  left: 50%;
                  bottom: -2px;
                  height: 10px;
                  width: 10px;
                  z-index: -1;
                  background-color:rgb(6, 184, 74);
                  transform: translateX(-50%) rotate(45deg);
                }
                
                
                      /* Post styling */
                      
                      
                      .post {
                                  width: 500px;
                                  background-color: #fff;
                                  padding: 20px;
                                  border-radius: 10px;
                                  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
                                  margin-bottom: 20px;
                              }
                              .post-content {
                                  margin-bottom: 10px;
                                  font-size: 1em;
                              } 
                              .post-actions {
                                  display: flex;
                                  justify-content: space-between;
                                  margin-bottom: 10px;
                              }
                              .post-actions button {
                                  background-color: transparent;
                                  border: none;
                                  padding: 10px;
                                  cursor: pointer;
                                  font-size: 1.5em;
                                  color: #1877f2;
                              }
                              .post-actions .like-dislike {
                                  display: flex;
                                  align-items: center;
                              }
                              .post-actions .like-dislike button {
                                  margin-right: 5px;
                              }
                              .comments {
                                  border-top: 1px solid #ccc;
                                  padding-top: 10px;
                                  display: none;
                              }
                              .comment {
                                  display: flex;
                                  align-items: center;
                                  margin-bottom: 10px;
                              }
                              .comment-profile-pic {
                                  width: 30px;
                                  height: 30px;
                                  border-radius: 50%;
                                  margin-right: 10px;
                              }
                              .comment div strong {
                                  font-size: 1em;
                              }
                              .add-comment {
                                  display: flex;
                                  margin-top: 10px;
                              }
                              .add-comment input {
                                  flex: 1;
                                  padding: 10px;
                                  border: 1px solid #ccc;
                                  border-radius: 5px;
                                  margin-right: 10px;
                              }
                              .add-comment button {
                                  background-color: #1877f2;
                                  color: #fff;
                                  border: none;
                                  padding: 10px;
                                  border-radius: 5px;
                                  cursor: pointer;
                                  font-size: 1em;
                              }
</style>

</head>
<body>
<div id="projet" style="margin-top:2rem;  ">
    <div class="head-titre">
         <h1>Projets R&D</h1>
    </div>
    <div style="margin-bottom:1rem">
                    <!-- <h3>Résumé des projets actifs</h3> -->
                    <p>Nombre de projets actifs : <strong id="activeProjectsCount">0</strong></p>
                    <!-- <h4>Alertes : échéances proches</h4> -->
                    <div id="alerts"></div>
    </div>
    
    <div id="projects" style="display:grid;grid-template-columns: repeat(auto-fit,minmax(400px,1fr));gap: 1.5%;">
        <?php while($projet=$req->fetch()) { $projet_id = $projet['id_projet']?>
        <div id="proj" class="project" onclick="fetcher('./templates/present_project_page.php?', 'Projet <?php echo $projet_id; ?>')">
                <div class="project-header">
                    <h2><?php echo $projet['libelle'] ?></h2>
                    <span class="project-status status-<?php echo strtolower(str_replace(' ', '-', $projet['etat'])); ?>"><?php echo $projet['etat'] ?></span>
                </div>
                <p><strong>Description :</strong> <?php echo $projet['description'] ?></p>
                <p><strong>Date de début :</strong> <?php echo $projet['date_debut'] ?></p>
                <p><strong>Date de fin :</strong> <?php echo $projet['date_fin'] ?></p>
                <p><strong>Objectifs:</strong> <?php echo $projet['objectifs'] ?></p>
                <div style="display:none" class="skill-box"><div class="skill-bar"><span class="skill-per html"><span class="tooltip">50%</span></span></div></div>
                <div class="post-actions" style="display:none">
            <div class="like-dislike">
                <button onclick=" addLike(event)"><i class="fas fa-thumbs-up"></i> <span id="like-count">0</span></button>
                <button onclick="addDislike(event)"><i class="fas fa-thumbs-down"></i> <span id="dislike-count">0</span></button>
            </div>
            <button onclick="toggleComments(event)"><i class="fas fa-comment"></i></button>
        </div>
            <div class="comments" id="comments-section">
                <div class="comment">
                    <img src="comment-profile-pic.jpg" alt="Comment Profile Picture" class="comment-profile-pic">
                    <div>
                        <strong>Commentateur 1</strong><br>
                        Super projet! Hâte de le voir en action.
                    </div>
                </div>
            </div>
            <div class="add-comment" id="add-comment-section" style="display: none;">
                <input type="text" id="comment-input" placeholder="Ajouter un commentaire...">
                <button onclick="addComment(event)">Ajouter</button>
            </div>
        </div>
        <?php };$req->closeCursor();?>
    </div>
</div>

<!-- 
document.querySelectorAll('.voir-plus').forEach(function(link) {
             link.addEventListener('click', function(event) {
                const project = this.parentElement;
                project.classList.add('active');
            });
        });

         onclick="const project = this.parentElement; project.classList.add('active');"
         <i style="color:black;margin-left:45%;font-size:25px;margin-top:5px" id="closeBtn" class='bx bx-x-circle' onclick="this.parentElement.classList.remove('active');"></i>
         <a href="#" class="voir-plus">Voir plus<i class='bx bx-right-arrow-alt'></i></a>

        document.querySelectorAll('.close').forEach(function(button) {
            button.addEventListener('click', function(event) {
                event.stopPropagation();
                const project = this.parentElement;
                project.classList.remove('active');
            });
        });
 -->
<!-- <script>
    const projects = [
        { id: 1, name: 'Projet SmartHomeHub', status: 'En cours', start: '01/01/2024', end: '01/01/2024', manager: 'Alice Dupont', detaille: 'Une plateforme intégrée pour contrôler et surveiller tous les appareils connectés de votre maison intelligente.', progress: 40, tasks: 5,  },
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
            `;
            projectContainer.appendChild(projectDiv);
            
        });
    }

    function addNewProject() {
        alert("Fonction d'ajout de projet en cours de développement !");
    }

    document.addEventListener('DOMContentLoaded', renderProjects);
</script> -->

</body>
</html>



