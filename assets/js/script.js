// ajax request
function fetcher($_location) {
    fetch($_location)
        .then(response => response.text())
        .then(data => {
            document.getElementById('content-main').innerHTML = data;
			console.log('success');
        })
        .catch(error => console.error('Erreur de chargement :', error));

}

;
// TOGGLE SIDEBAR
const menuBar = document.getElementById('menu-bar');
const sidebar = document.getElementById('sidebar');

menuBar.addEventListener('click', function () {
	sidebar.classList.toggle('hide');
})


const allSideMenu = document.querySelectorAll('#sidebar .side-menu.top li a');

allSideMenu.forEach(item=> {
	const li = item.parentElement;

	item.addEventListener('click', function () {
		allSideMenu.forEach(i=> {
			i.parentElement.classList.remove('active');
		})
		li.classList.add('active');
	})
	
});







const searchButton = document.querySelector('#content nav form .form-input button');
const searchButtonIcon = document.querySelector('#content nav form .form-input button .bx');
const searchForm = document.querySelector('#content nav form');

searchButton.addEventListener('click', function (e) {
	if(window.innerWidth < 576) {
		e.preventDefault();
		searchForm.classList.toggle('show');
		if(searchForm.classList.contains('show')) {
			searchButtonIcon.classList.replace('bx-search', 'bx-x');
		} else {
			searchButtonIcon.classList.replace('bx-x', 'bx-search');
		}
	}
})





if(window.innerWidth < 768) {
	sidebar.classList.add('hide');
} else if(window.innerWidth > 576) {
	searchButtonIcon.classList.replace('bx-x', 'bx-search');
	searchForm.classList.remove('show');
}


window.addEventListener('resize', function () {
	if(this.innerWidth > 576) {
		searchButtonIcon.classList.replace('bx-x', 'bx-search');
		searchForm.classList.remove('show');
	}
})



const switchMode = document.getElementById('switch-mode');

switchMode.addEventListener('change', function () {
	if(this.checked) {
		document.body.classList.add('dark');
	} else {
		document.body.classList.remove('dark');
	}
})

window.addEventListener('resize', function () {
	if(this.innerWidth > 576) {
		searchButtonIcon.classList.replace('bx-x', 'bx-search');
		searchForm.classList.remove('show');
	}
})







// TOGGLE SIDEBAR
// const menuBar = document.querySelector('#content nav .bx.bx-menu');
// const sidebar = document.getElementById('sidebar');

// menuBar.addEventListener('click', function () {
// 	sidebar.classList.toggle('hide');
// });


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
// fetch('./templates/content.php')
//     .then(response => response.text())
//     .then(data => {
//         document.getElementById('content-container').innerHTML += data;
//     })
//     .catch(error => console.error('Erreur de chargement :', error));


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





///////////////////////////////////////////////

// const xhr = new XMLHttpRequest();
// xhr.open('GET', './templates/content.php', true);
// xhr.onreadystatechange = function() {
//     if (xhr.readyState === 4 && xhr.status === 200) {
//         document.getElementById('content-container').innerHTML = xhr.responseText;
//     }
// };
// xhr.send();
