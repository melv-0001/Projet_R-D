<?php
session_start();

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/48d43c639e.js" crossorigin="anonymous"></script>
    <title>Page de Publication</title>
    <style>
        /* Reset de base */
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f0f2f5;
            color: #333;
        }

        /* Conteneur principal */
        .container {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        }

        /* Style de la publication */
        .post {
            margin-bottom: 20px;
            padding: 20px;
            border-bottom: 1px solid #e0e0e0;
        }

        .post h2 {
            margin: 0;
            font-size: 24px;
            color: #1a1a1a;
        }

        .post p {
            margin: 10px 0;
            font-size: 16px;
            color: #555;
        }

        /* Conteneur des boutons Like/Dislike et Commenter */
        .actions {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: 15px;
        }

        .like-dislike {
            display: flex;
            gap: 10px;
        }

        .like-dislike button {
            display: flex;
            align-items: center;
            gap: 5px;
            padding: 8px 16px;
            border: none;
            border-radius: 20px;
            background-color: #f0f2f5;
            color: #555;
            font-size: 14px;
            cursor: pointer;
            transition: background-color 0.3s ease, transform 0.2s ease;
        }

        .like-dislike button:hover {
            background-color: #e0e0e0;
            transform: scale(1.05);
        }

        .like-dislike button:active {
            transform: scale(0.95);
        }

        .like-dislike button.liked {
            background-color: #1877f2;
            color: white;
        }

        .like-dislike button.disliked {
            background-color: #ff4444;
            color: white;
        }

        /* Bouton Commenter */
        #commentToggleBtn {
            padding: 8px 16px;
            border: none;
            border-radius: 20px;
            background-color: #1877f2;
            color: white;
            font-size: 14px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        #commentToggleBtn:hover {
            background-color: #165dbb;
        }

        /* Formulaire de commentaire (caché par défaut) */
        #commentForm {
            display: none;
            margin-top: 15px;
        }

        #commentForm textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #e0e0e0;
            border-radius: 8px;
            font-size: 14px;
            resize: none;
            transition: border-color 0.3s ease;
        }

        #commentForm textarea:focus {
            border-color: #1877f2;
            outline: none;
        }

        #commentForm button {
            margin-top: 10px;
            padding: 8px 16px;
            border: none;
            border-radius: 20px;
            background-color: #1877f2;
            color: white;
            font-size: 14px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        #commentForm button:hover {
            background-color: #165dbb;
        }

        /* Liste des commentaires */
        #commentList {
            display: flex;
            flex-direction: column;
            gap: 10px;
            margin-top: 20px;
        }

        .comment {
            padding: 10px;
            background-color: #f0f2f5;
            border-radius: 8px;
            animation: fadeIn 0.5s ease;
            display: flex;
            gap: 15px;
            align-items: center;
        }

        .comment .avatar {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background-color: #ccc;
            background-size: cover;
        }

        .comment .content {
            flex: 1;
        }

        .comment p {
            margin: 0;
            font-size: 14px;
            color: #333;
        }

        .comment .author {
            font-weight: bold;
            color: #1877f2;
        }

        /* Animation pour les nouveaux commentaires */
        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(10px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>
</head>
<body>

    <div class="container">
        <!-- Publication -->
        <div class="post">
            <h2>Ma Publication</h2>
            <p>Ceci est un exemple de publication. Vous pouvez ajouter des commentaires et aimer ou ne pas aimer cette publication.</p>
            
            <!-- Conteneur des boutons Like/Dislike et Commenter -->
            <div class="actions">
                <div class="like-dislike">
                    <button id="likeBtn"><i class="fa-solid fa-thumbs-up"></i><span id="likeCount">0</span></button>
                    <button id="dislikeBtn"><i class="fa-solid fa-thumbs-down"></i><span id="dislikeCount">0</span></button>
                </div>
                <button id="commentToggleBtn"><i class="fa-solid fa-comment"></i></button>
            </div>

            <!-- Formulaire de commentaire (caché par défaut) -->
            <form id="commentForm">
                <textarea id="commentInput" placeholder="Ajouter un commentaire..." required></textarea>
                <button type="submit">Publier</button>
            </form>
        </div>

        <!-- Liste des commentaires -->
        <div id="commentList"></div>
    </div>

    <script>
        // Variables pour stocker les likes, dislikes et commentaires
        let likeCount = 0;
        let dislikeCount = 0;
        const comments = [];

        // Simuler un nom d'utilisateur et un avatar (à remplacer par une valeur dynamique dans une application réelle)
        const userName = "Utilisateur Anonyme";
        const userAvatar = "https://www.w3schools.com/w3images/avatar2.png"; // Avatar par défaut

        // Éléments du DOM
        const likeBtn = document.getElementById('likeBtn');
        const dislikeBtn = document.getElementById('dislikeBtn');
        const likeCountElem = document.getElementById('likeCount');
        const dislikeCountElem = document.getElementById('dislikeCount');
        const commentToggleBtn = document.getElementById('commentToggleBtn');
        const commentForm = document.getElementById('commentForm');
        const commentInput = document.getElementById('commentInput');
        const commentList = document.getElementById('commentList');

        // Gestion des likes et dislikes
        likeBtn.addEventListener('click', () => {
            likeCount++;
            likeCountElem.textContent = likeCount;
            likeBtn.classList.add('liked');
            dislikeBtn.classList.remove('disliked');
        });

        dislikeBtn.addEventListener('click', () => {
            dislikeCount++;
            dislikeCountElem.textContent = dislikeCount;
            dislikeBtn.classList.add('disliked');
            likeBtn.classList.remove('liked');
        });

        // Afficher/masquer le formulaire de commentaire
        commentToggleBtn.addEventListener('click', () => {
            commentForm.style.display = commentForm.style.display === 'block' ? 'none' : 'block';
        });

        // Gestion des commentaires
        commentForm.addEventListener('submit', (e) => {
            e.preventDefault();
            const commentText = commentInput.value.trim();
            if (commentText) {
                comments.push({ author: userName, text: commentText, avatar: userAvatar });
                renderComments();
                commentInput.value = '';
                commentForm.style.display = 'none'; // Masquer le formulaire après soumission
            }
        });

        // Affichage des commentaires
        function renderComments() {
            commentList.innerHTML = '';
            comments.forEach(comment => {
                const commentElem = document.createElement('div');
                commentElem.className = 'comment';
                commentElem.innerHTML = `
                    <div class="avatar" style="background-image: url(${comment.avatar});"></div>
                    <div class="content">
                        <p><span class="author">${comment.author}</span>: ${comment.text}</p>
                    </div>
                `;
                commentList.appendChild(commentElem);
            });
        }
    </script>

</body>
</html>