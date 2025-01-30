<?php
function success($direction){
    printf('<div style="font-family: PlusJakartaSans, -apple-system, BlinkMacSystemFont, Segoe UI,Roboto, Oxygen, Cantarell, Helvetica Neue, Ubuntu, sans-serif;font-size: 2rem;text-align:center;height: 330px;margin-left:22rem;margin-top:12rem; width: 500px; border-radius: 50px; background: #f6f4f4; box-shadow: 35px 35px 57px #d1cfcf, -35px -35px 57px #ffffff;">
    <br><svg xmlns="http://www.w3.org/2000/svg" height="92" width="92" viewBox="0 0 512 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path fill="#63E6BE" d="M256 48a208 208 0 1 1 0 416 208 208 0 1 1 0-416zm0 464A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM369 209c9.4-9.4 9.4-24.6 0-33.9s-24.6-9.4-33.9 0l-111 111-47-47c-9.4-9.4-24.6-9.4-33.9 0s-9.4 24.6 0 33.9l64 64c9.4 9.4 24.6 9.4 33.9 0L369 209z"/></svg><br><br> Bravo <br><br>
    <button onclick="window.location.href=\'%s\'" style="
    
      font-family: PlusJakartaSans, -apple-system, BlinkMacSystemFont, Segoe UI,
        Roboto, Oxygen, Cantarell, Helvetica Neue, Ubuntu, sans-serif;
      font-size: 1rem;
      align-items: center;
      height: 48px;
      border-radius: 0.4rem;
      font-weight: 600;
      padding: 0 1.2rem;
      color: #ddd;
      border: none;
      cursor: pointer;
      box-shadow: 0 0.5rem 1rem rgba(143, 142, 142, 0.15) !important;
      background:rgb(59, 141, 116);
    
    
    .fond {
      font-size: 0.8rem;
      color: #7f7f7f;
    }
    
    
    ">
      Revenir à l\'accueil
      <span class="fond"></span>
    </button>
    
    </div>',$direction);
};


function faillure($direction){
    printf('<div style="font-family: PlusJakartaSans, -apple-system, BlinkMacSystemFont, Segoe UI,Roboto, Oxygen, Cantarell, Helvetica Neue, Ubuntu, sans-serif;font-size: 2rem;text-align:center;height: 330px;margin-left:22rem;margin-top:12rem; width: 500px; border-radius: 50px; background: #f6f4f4; box-shadow: 35px 35px 57px #d1cfcf, -35px -35px 57px #ffffff;">
    <br><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-circle" viewBox="0 0 16 16">
    <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16"/>
    <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708"/>
    </svg><br><br>Echec<br><br>
    <button onclick="window.location.href=\'%s\'" style="
    
      font-family: PlusJakartaSans, -apple-system, BlinkMacSystemFont, Segoe UI,
        Roboto, Oxygen, Cantarell, Helvetica Neue, Ubuntu, sans-serif;
      font-size: 1rem;
      align-items: center;
      height: 48px;
      border-radius: 0.4rem;
      font-weight: 600;
      padding: 0 1.2rem;
      color: #ddd;
      border: none;
      cursor: pointer;
      box-shadow: 0 0.5rem 1rem rgba(143, 142, 142, 0.15) !important;
      background:rgb(240, 29, 29);
    
    
    .fond {
      font-size: 0.8rem;
      color: #7f7f7f;
    }
    
    
    ">
      Veuillez reesayer
      <span class="fond"></span>
    </button>
    
    </div>',$direction);
};


function upload_image() {
      // Vérification si le fichier a bien été uploadé
      if (isset($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK) {
          // Récupérer les informations du fichier
          $fileTmpPath = $_FILES['image']['tmp_name'];
          $fileName = $_FILES['image']['name'];
          $fileSize = $_FILES['image']['size'];
          $fileType = $_FILES['image']['type'];
          $fileExtension = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));
  
          // Définir les extensions et tailles autorisées
          $allowedExtensions = ['jpg', 'jpeg', 'png', 'gif'];
          $maxFileSize = 5 * 1024 * 1024; // 5 MB
  
          // Vérifier l'extension du fichier
          if (!in_array($fileExtension, $allowedExtensions)) {
              die("Type de fichier non autorisé. Extensions autorisées : jpg, jpeg, png, gif.");
          }
  
          // Vérifier la taille du fichier
          if ($fileSize > $maxFileSize) {
              die("Le fichier est trop volumineux. La taille maximale autorisée est de 5 MB.");
          }
  
          // Créer le dossier d'upload s'il n'existe pas
          $uploadDir = '/xampp/htdocs/ProjetR&D/uploads/avatar/';
          if (!is_dir($uploadDir)) {
              mkdir($uploadDir, 0755, true);
          }
  
          // Générer un nom de fichier unique pour éviter les conflits
          $newFileName = uniqid('img_', true) . '.' . $fileExtension;
  
          // Définir le chemin final du fichier
          $destinationPath = $uploadDir . $newFileName;
  
          // Déplacer le fichier depuis le dossier temporaire vers le dossier d'upload
          if (move_uploaded_file($fileTmpPath, $destinationPath)) {
              // Retourner le chemin relatif pour l'enregistrement en base de données
              return 'uploads/' . $newFileName;
              
          } else {
              die("Erreur lors du déplacement du fichier.");
          }
      } else {
          die("Aucun fichier n'a été téléchargé ou une erreur s'est produite.");
      }
  };
  

?>