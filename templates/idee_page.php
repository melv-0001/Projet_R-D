<?php 
session_start();
/// Connexion à la base de données
require_once __DIR__ . '/../includes/pdo.php';
// Connexion à la base de données
require_once __DIR__ . '/../includes/function.php';
// Requête pour récupérer les données

$sql = "SELECT * FROM idee";
$req = $connect->prepare($sql);
$req->execute();


?>

<section id="idee" >
    <h1 style="font-size :28px;margin-bottom:2rem">Idees R&D</h1>
    <div id="ideas-list">
    <?php while($idee=$req->fetch()) { $idee_id = $idee['id_idee']?>
      <div class="idea-card">
       <h3><?php echo $idee['libelle'] ?></h3>
        <p><?php echo $idee['description'] ?></p>
        <p class="author">Proposé par : <?php echo $idee['auteur'] ?></p>
        <p class="status" data-status="${idea.status}">Statut : <?php echo $idee['etat'] ?></p>
        <div class="checkbox-group">
          <label><input type="radio" name="status-${idea.id}" value="en attente" ${idea.status === "en attente" ? "checked" : ""}> En attente</label>
          <label><input type="radio" name="status-${idea.id}" value="acceptée" ${idea.status === "acceptée" ? "checked" : ""}> Acceptée</label>
          <label><input type="radio" name="status-${idea.id}" value="rejetée" ${idea.status === "rejetée" ? "checked" : ""}> Rejetée</label>
        </div>
        
      </div>
    </div>
    <?php }; $req->closeCursor(); ?>
</section>
<style>

    #idee {
      max-width: 900px;
      padding: 20px;
      /* background: white; */
      border-radius: 8px;
      /* box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); */
    }
    
    .idea-card {
      margin-bottom: 20px;
      padding: 15px;
      border: 1px solid #ddd;
      border-radius: 8px;
      background-color: #F9F9F9;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }
    .idea-card h3 {
      margin: 0 0 10px;
      font-size: 1.5em;
      color: #555;
    }
    .idea-card p {
      margin: 0 0 10px;
      color: #666;
    }
    .idea-card .author {
      font-size: 0.9em;
      color: #999;
    }
    .status {
      margin-top: 10px;
      font-size: 0.9em;
      font-weight: bold;
      color: #007BFF;
    }
    .status[data-status="en attente"] {
      color: #FFA500;
    }
    .status[data-status="acceptée"] {
      color: #28A745;
    }
    .status[data-status="rejetée"] {
      color: #DC3545;
    }
    .checkbox-group {
      margin-top: 10px;
    }
    .checkbox-group label {
      margin-right: 10px;
      font-size: 0.9em;
      color: #555;
    }

</style>
<script>
    const ideas = [
      { id: 1, title: "Optimisation de la gestion énergétique des appareils connectés", description: "Développer un algorithme intelligent qui optimise la consommation d'énergie des appareils connectés en fonction de l'utilisation et des préférences des utilisateurs, réduisant ainsi la facture énergétique.", author: "Lopez Ana", status: "en attente" },
      { id: 2, title: "Prédiction des tendances de marché", description: "Utiliser l'apprentissage automatique pour analyser des données de marché en temps réel et prédire les tendances futures, aidant les entreprises à prendre des décisions éclairées.", author: "Smith John", status: "acceptée" },
      { id: 3, title: "Détection proactive des cybermenaces", description: "Développer une solution de cybersécurité utilisant l'intelligence artificielle pour détecter et neutraliser les menaces avant qu'elles ne deviennent critiques, en se basant sur des modèles de comportement anormaux.", author: "Yao Koffi", status: "rejetée" },
      { id: 4, title: "Agriculture durable et intelligente", description: "Concevoir des capteurs et des systèmes automatisés pour surveiller et gérer les cultures de manière efficace, réduisant ainsi l'utilisation d'eau et de pesticides tout en maximisant les rendements.", author: " N'da Isaac ", status: "en attente" },
      { id: 5, title: "Formation médicale immersivex", description: "Créer des simulations de réalité virtuelle pour former les professionnels de la santé à des procédures médicales complexes, offrant ainsi un environnement sûr et contrôlé pour l'apprentissage pratique.", author: "Yavo Emmanuel", status: "acceptée" },
    
    ];

    const ideasList = document.getElementById('ideas-list');

    ideas.forEach(idea => {
      const ideaCard = document.createElement('div');
      ideaCard.className = 'idea-card';

      ideaCard.innerHTML = `
        <h3>${idea.title}</h3>
        <p>${idea.description}</p>
        <p class="author">Proposé par : ${idea.author}</p>
        <p class="status" data-status="${idea.status}">Statut : ${idea.status}</p>
        <div class="checkbox-group">
          <label><input type="radio" name="status-${idea.id}" value="en attente" ${idea.status === "en attente" ? "checked" : ""}> En attente</label>
          <label><input type="radio" name="status-${idea.id}" value="acceptée" ${idea.status === "acceptée" ? "checked" : ""}> Acceptée</label>
          <label><input type="radio" name="status-${idea.id}" value="rejetée" ${idea.status === "rejetée" ? "checked" : ""}> Rejetée</label>
        </div>
      `;

      ideaCard.querySelectorAll('input[name^="status-"]').forEach(input => {
        input.addEventListener('change', (e) => {
          idea.status = e.target.value;
          const statusElement = ideaCard.querySelector('.status');
          statusElement.textContent = `Statut : ${idea.status}`;
          statusElement.setAttribute('data-status', idea.status);
        });
      });

      ideasList.appendChild(ideaCard);
    });
  </script>