// document.addEventListener("DOMContentLoaded", function () {
//     const popup = document.createElement("div");
//     popup.id = "popupForm";
//     popup.style.display = "none";
//     popup.style.position = "fixed";
//     popup.style.top = "50%";
//     popup.style.left = "50%";
//     popup.style.transform = "translate(-50%, -50%)";
//     popup.style.background = "transparent";
//     popup.style.padding = "20px";
//     popup.style.boxShadow = "0px 0px 10px rgba(0, 0, 0, 0.2)";
//     popup.style.borderRadius = "8px";

//     popup.innerHTML = `
//         <form>
//             <label for="name">Nom :</label>
//             <input type="text" id="name" name="name" required><br><br>
//             <label for="email">Email :</label>
//             <input type="email" id="email" name="email" required><br><br>
//             <button type="submit">Envoyer</button>
//             <button type="button" onclick="closePopup()">Fermer</button>
//         </form>
//     `;
//     document.body.appendChild(popup);
// });

// Fonction pour ouvrir la pop-up
// function openPopup() {
//     document.getElementById("popupForm").style.display = "block";
//     document.getElementById("face-tema").style.display = "block";
//     document.getElementById("true-content").style.display = "none";
    
// }

// // Fonction pour fermer la pop-up
// function closePopup() {
//     document.getElementById("popupForm").style.display = "none";
//     document.getElementById("true-content").style.display = "block";
// }















console.log("Test de chargement JS");

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

