console.log("Test de chargement JS");

document.addEventListener("DOMContentLoaded", function () {
    let likeCount = 0;
    let dislikeCount = 0;
    let comments = [];

    const userName = "Utilisateur Anonyme";
    const userAvatar = "https://www.w3schools.com/w3images/avatar2.png"; // Avatar par défaut

    // Fonction pour gérer le like
    window.like = function () {
        likeCount++;
        document.getElementById('likeCount').textContent = likeCount;
        document.getElementById('likeBtn').classList.add('liked');
        document.getElementById('dislikeBtn').classList.remove('disliked');
    };

    // Fonction pour gérer le dislike
    window.dislike = function () {
        dislikeCount++;
        document.getElementById('dislikeCount').textContent = dislikeCount;
        document.getElementById('dislikeBtn').classList.add('disliked');
        document.getElementById('likeBtn').classList.remove('liked');
    };

    // Fonction pour afficher/masquer le formulaire de commentaire
    window.toggleCommentForm = function () {
        let commentForm = document.getElementById('commentForm');
        commentForm.style.display = commentForm.style.display === 'block' ? 'none' : 'block';
    };

    // Fonction pour ajouter un commentaire
    window.commenter = function () {
        let commentInput = document.getElementById('commentInput');
        let commentText = commentInput.value.trim();
        if (commentText) {
            comments.push({ author: userName, text: commentText, avatar: userAvatar });
            renderComments();
            commentInput.value = ''; // Efface le champ de saisie
            document.getElementById('commentForm').style.display = 'none'; // Cache le formulaire après soumission
        }
    };

    // Fonction pour afficher les commentaires
    function renderComments() {
        let commentList = document.getElementById('commentList');
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
});
