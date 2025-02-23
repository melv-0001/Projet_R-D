
// TOGGLE SIDEBAR
const menuBar = document.querySelector('#content nav .bx.bx-menu');
const sidebar = document.getElementById('sidebar');

menuBar.addEventListener('click', function () {
	sidebar.classList.toggle('hide');
});


// Chart
// const config = {
// 	type: 'line',
// 	data: data,
//   };



// const labels = Utils.months({count: 7});
// const data = {
//   labels: labels,
//   datasets: [{
//     label: 'My First Dataset',
//     data: [65, 59, 80, 81, 56, 55, 40],
//     fill: false,
//     borderColor: 'rgb(75, 192, 192)',
//     tension: 0.1
//   }]
// };

//popup


// Création de la pop-up et du formulaire
document.addEventListener("DOMContentLoaded", function () {
    const popup = document.createElement("div");
    popup.id = "popupForm";
    popup.style.display = "none";
    popup.style.position = "fixed";
    popup.style.top = "50%";
    popup.style.left = "50%";
    popup.style.transform = "translate(-50%, -50%)";
    popup.style.background = "transparent";
    popup.style.padding = "20px";
    popup.style.boxShadow = "0px 0px 10px rgba(0, 0, 0, 0.2)";
    popup.style.borderRadius = "8px";

    popup.innerHTML = `
        <form>
            <label for="name">Nom :</label>
            <input type="text" id="name" name="name" required><br><br>
            <label for="email">Email :</label>
            <input type="email" id="email" name="email" required><br><br>
            <button type="submit">Envoyer</button>
            <button type="button" onclick="closePopup()">Fermer</button>
        </form>
    `;
    document.body.appendChild(popup);
});

// Fonction pour ouvrir la pop-up
function openPopup() {
    document.getElementById("popupForm").style.display = "block";
}

// Fonction pour fermer la pop-up
function closePopup() {
    document.getElementById("popupForm").style.display = "none";
}
function showPopup() {
//Ajout d'un bouton pour ouvrir la pop-up
document.addEventListener("DOMContentLoaded", function () {
const button = document.createElement("button");
button.innerText = "Ouvrir le formulaire";
button.onclick = openPopup;
document.body.appendChild(button);
});}
