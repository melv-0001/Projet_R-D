
function fetcher($_location,$title) {
    fetch($_location)
        .then(response => response.text())
        .then(data => {
            document.getElementById('content-main').innerHTML = data;
			document.getElementById('ancre').innerHTML = $title;
			console.log('success');
        })
        .catch(error => console.error('Erreur de chargement :', error));

}

;


function suppr_user(user_id) {
    if (confirm("Êtes-vous sûr de vouloir supprimer cet utilisateur ?")) {
        var xhr = new XMLHttpRequest();
        xhr.open("POST", "./includes/delete_user.php", true);
        xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        xhr.onreadystatechange = function() {
            if (xhr.readyState === XMLHttpRequest.DONE && xhr.status === 200) {
                alert(xhr.responseText);
                // Rafraîchir la page ou supprimer la ligne de l'utilisateur dans le tableau
                location.reload();
            }
        };
        xhr.send("id=" + user_id);
    }
}


function update_user_form(user_id) {
    document.getElementById('userId').value = user_id;
    document.getElementById('updateUserForm').style.display = 'block';
    document.getElementById('utilisateur').style.display = 'none';
}

function update_user() {
    var user_id = document.getElementById('userId').value;
    var email = document.getElementById('email').value;
    var role = document.getElementById('role').value;
    var nom = document.getElementById('nom').value;

   
    var xhr = new XMLHttpRequest();
    xhr.open("POST", "./includes/update_user.php", true);
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    xhr.onreadystatechange = function() {
        if (xhr.readyState === XMLHttpRequest.DONE && xhr.status === 200) {
            alert(xhr.responseText);
            // Rafraîchir la page ou masquer le formulaire
            location.reload();
        }
    };
    xhr.send("id=" + user_id +"&nom="+nom+ "&email=" + email + "&role=" + role);
    return false;
}

;


    // Gestion du bouton like
    let likeButton = document.getElementById("like-btn");
    let hasLiked = false;

    likeButton.onclick = function () {
        hasLiked = !hasLiked;
        likeButton.innerHTML = `<i class="fa-regular fa-thumbs-up"></i> J'aime ${hasLiked ? "(1)" : ""}`;
    };

    // Gestion du formulaire de commentaire
    function toggleForm(formId, inputId) {
        let form = document.getElementById(formId);
        let input = document.getElementById(inputId);
        form.style.display = "block";
        setTimeout(() => form.classList.add("show"), 10);
        input && input.focus();
    }

    document.getElementById("comment-btn").onclick = function () {
        toggleForm("comment-form", "comment-input");
    };

    document.getElementById("submit-comment").onclick = function (event) {
        event.preventDefault();
        let commentInput = document.getElementById("comment-input");
        let commentList = document.getElementById("comment-list");
        let commentText = commentInput.value.trim();

        if (commentText) {
            let newComment = document.createElement("div");
            newComment.classList.add("comment");
            newComment.innerHTML = `
                <div class="comment-container">
                    <img src="photo.jpg" alt="Photo de profil" class="profile-pic">
                    <div class="comment-content">
                        <p class="comment-text">${commentText}</p>
                    </div>
                </div>
            `;
            commentList.appendChild(newComment);
            commentInput.value = "";
            closeForm("comment-form");
        }
    };

    // Gestion du formulaire "Ajouter une idée"
    document.getElementById("idea-btn").onclick = function () {
        toggleForm("idea-form");
    };

    document.getElementById("submit-idea").onclick = function (event) {
        event.preventDefault();
        let name = document.getElementById("idea-name").value.trim();
        let email = document.getElementById("idea-email").value.trim();
        let message = document.getElementById("idea-message").value.trim();

        if (name && email && message) {
            alert("Votre idée a été soumise avec succès !");
            ["idea-name", "idea-email", "idea-message"].forEach(id => document.getElementById(id).value = "");
            closeForm("idea-form");
        } else {
            alert("Veuillez remplir tous les champs !");
        }
    };

    // Gestion de la liste des tâches
    document.getElementById("task-btn").onclick = function () {
        toggleVisibility("task-list");
    };

    // Gestion de l'affichage du tableau des documents
    document.getElementById("voir-btn").onclick = function () {
        toggleVisibility("document-table");
    };

    // Fonctions utilitaires
    function toggleVisibility(elementId) {
        let element = document.getElementById(elementId);
        element.style.display = element.style.display === "none" ? "block" : "none";
    }

    function closeForm(formId) {
        let form = document.getElementById(formId);
        form.classList.remove("show");
        setTimeout(() => form.style.display = "none", 500);
    }
;


// TOGGLE SIDEBAR
// const menuBar = document.getElementById('menu-bar');
// const sidebar = document.getElementById('sidebar');

// menuBar.addEventListener('click', function () {
// 	sidebar.classList.toggle('hide');
// })


// const allSideMenu = document.querySelectorAll('#sidebar .side-menu.top li a');

// allSideMenu.forEach(item=> {
// 	const li = item.parentElement;

// 	item.addEventListener('click', function () {
// 		allSideMenu.forEach(i=> {
// 			i.parentElement.classList.remove('active');
// 		})
// 		li.classList.add('active');
// 	})
	
// });







// const searchButton = document.querySelector('#content nav form .form-input button');
// const searchButtonIcon = document.querySelector('#content nav form .form-input button .bx');
// const searchForm = document.querySelector('#content nav form');

// searchButton.addEventListener('click', function (e) {
// 	if(window.innerWidth < 576) {
// 		e.preventDefault();
// 		searchForm.classList.toggle('show');
// 		if(searchForm.classList.contains('show')) {
// 			searchButtonIcon.classList.replace('bx-search', 'bx-x');
// 		} else {
// 			searchButtonIcon.classList.replace('bx-x', 'bx-search');
// 		}
// 	}
// })





// if(window.innerWidth < 768) {
// 	sidebar.classList.add('hide');
// } else if(window.innerWidth > 576) {
// 	searchButtonIcon.classList.replace('bx-x', 'bx-search');
// 	searchForm.classList.remove('show');
// }


// window.addEventListener('resize', function () {
// 	if(this.innerWidth > 576) {
// 		searchButtonIcon.classList.replace('bx-x', 'bx-search');
// 		searchForm.classList.remove('show');
// 	}
// })



// const switchMode = document.getElementById('switch-mode');

// switchMode.addEventListener('change', function () {
// 	if(this.checked) {
// 		document.body.classList.add('dark');
// 	} else {
// 		document.body.classList.remove('dark');
// 	}
// })

// window.addEventListener('resize', function () {
// 	if(this.innerWidth > 576) {
// 		searchButtonIcon.classList.replace('bx-x', 'bx-search');
// 		searchForm.classList.remove('show');
// 	}
// })







// // TOGGLE SIDEBAR
// // const menuBar = document.querySelector('#content nav .bx.bx-menu');
// // const sidebar = document.getElementById('sidebar');

// // menuBar.addEventListener('click', function () {
// // 	sidebar.classList.toggle('hide');
// // });


// // Chart
// // const config = {
// // 	type: 'line',
// // 	data: data,
// //   };



// // const labels = Utils.months({count: 7});
// // const data = {
// //   labels: labels,
// //   datasets: [{
// //     label: 'My First Dataset',
// //     data: [65, 59, 80, 81, 56, 55, 40],
// //     fill: false,
// //     borderColor: 'rgb(75, 192, 192)',
// //     tension: 0.1
// //   }]
// // };
// // fetch('./templates/content.php')
// //     .then(response => response.text())
// //     .then(data => {
// //         document.getElementById('content-container').innerHTML += data;
// //     })
// //     .catch(error => console.error('Erreur de chargement :', error));


// //popup


// // Création de la pop-up et du formulaire
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

// // Fonction pour ouvrir la pop-up
// function openPopup() {
//     document.getElementById("popupForm").style.display = "block";
// }

// // Fonction pour fermer la pop-up
// function closePopup() {
//     document.getElementById("popupForm").style.display = "none";
// }
// function showPopup() {
// //Ajout d'un bouton pour ouvrir la pop-up
// document.addEventListener("DOMContentLoaded", function () {
// const button = document.createElement("button");
// button.innerText = "Ouvrir le formulaire";
// button.onclick = openPopup;
// document.body.appendChild(button);
// });}





// ///////////////////////////////////////////////

// // const xhr = new XMLHttpRequest();
// // xhr.open('GET', './templates/content.php', true);
// // xhr.onreadystatechange = function() {
// //     if (xhr.readyState === 4 && xhr.status === 200) {
// //         document.getElementById('content-container').innerHTML = xhr.responseText;
// //     }
// // };
// // xhr.send();
