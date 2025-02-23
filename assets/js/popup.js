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
function openPopup() {
    document.getElementById("popupForm").style.display = "block";
    document.getElementById("face-tema").style.display = "block";
    document.getElementById("true-content").style.display = "none";
    
}

// Fonction pour fermer la pop-up
function closePopup() {
    document.getElementById("popupForm").style.display = "none";
    document.getElementById("true-content").style.display = "block";
}
