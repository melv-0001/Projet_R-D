

<div class="profile-box" style="display: none;" id="popupForm">
    <div style="display: flex;">
    <img src="<?php echo $img_ ?>" alt="Profile Picture" class="profile-pic">
    <pre><h1 id="face-tema" style="font-size: 36px;font-weight: 600;margin-bottom: 10px;color: var(--dark); font-family: var(--policy);padding: 36px 24px;display:none">Mon profil</h1></pre>
    <i style="color:black;margin-left:58%;font-size:25px" onclick="document.getElementById('popupForm').style.display='none';document.getElementById('true-content').style.display='block'"class='bx bx-x-circle'></i>

    </div>
        <div class="profile-content">
            <div class="profile-info">
            <h5><i class="bx bx-envelop"></i> Nom:</h5><hr width="55%">
            <p id="displayName" class="profile-name"><?php echo $nom_ ?></p><br>
              <h5><i class="fas fa-envelope"></i> Email :</h5><hr width="55%">
              <p id="displayEmail"><?php echo $email_ ?></p><br>
              <h5><i class="fas fa-phone"></i> Telephone :</h5><hr width="55%">
              <p id="displayPhone">+33 6 12 34 56 78</p><br>
              <h5><i class="fas fa-map-marker-alt"></i> Adresse :</h5><hr width="55%">
              <p id="displayAddress">123 Rue des Inventions, Paris, France</p><br>
              <h5><i class="fas fa-briefcase"></i> Poste :</h5><hr width="55%">
              <p id="displayPost">Développeur Web Full Stack</p><br>
              <h5><i class="fas fa-calendar-alt"></i> Date d'inscription :</h5><hr width="55%">
              <p id="displayDate">12 Janvier 2024</p>
              
            </div>
        </div>
        <div class="profile-actions">
            <button class="btn-edit" onclick="toggleEditForm()">Modifier le profil</button>
            <button class="btn-logout" onclick="if( confirm('Etes vous sure?')){ logout();} ">Déconnexion <i class='bx bx-log-in-circle'></i> </button>
        </div>
</div>
<script>
    function toggleEditForm() {
    const profileInfo = document.querySelector('.profile-info');
    const fields = ['Name', 'Email', 'Phone', 'Address', 'Post'];

    fields.forEach(field => {
        const displayField = document.getElementById(`display${field}`);
        const currentValue = displayField.textContent;

        // Remplacer le texte par un champ de saisie si ce n'est pas déjà un input
        if (!displayField.querySelector('input')) {
            const input = document.createElement('input');
            input.type = 'text';
            input.value = currentValue;
            input.className = 'profile-input';
            input.setAttribute('style', 'width: 100%; padding: 5px; margin-bottom: 10px; border: 1px solid #ddd; border-radius: 4px;');
            displayField.textContent = '';
            displayField.appendChild(input);
        }
    });

    // Changer le texte du bouton
    const editButton = document.querySelector('.btn-edit');
    editButton.textContent = 'Enregistrer le profil';
    editButton.onclick = saveProfile;
}

function saveProfile() {
    const fields = ['Name', 'Email', 'Phone', 'Address', 'Post'];

    fields.forEach(field => {
        const displayField = document.getElementById(`display${field}`);
        const input = displayField.querySelector('input');

        if (input) {
            const updatedValue = input.value;
            displayField.textContent = updatedValue;
        }
    });

    // Changer le texte du bouton
    const editButton = document.querySelector('.btn-edit');
    editButton.textContent = 'Modifier le profil';
    editButton.onclick = toggleEditForm;
}


function logout() {
    // Requête AJAX pour détruire la session
    const xhr = new XMLHttpRequest();
    xhr.open('GET', './templates/logout.php', true);
    xhr.onreadystatechange = function() {
        if (xhr.readyState === 4 && xhr.status === 200) {
            const response = JSON.parse(xhr.responseText);
            if (response.success) {
                // Rediriger vers la page de connexion
                window.location.href = 'index_signup.php';
            }
        }
    };
    xhr.send();
}

    


</script>
<style>
@import url('./style_dashboard.css');

.profile-box p {
    font-size: 16px;
    font-family: var(--policy);
}
.profile-box h5 {
    font-size: 18px;
    font-family: var(--policy);
    font-weight: 600;
}
.profile-box {
    background: #fff;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
    padding: 20px;
    margin-bottom: 20px;
    width: 70%;
    height: 40rem;
    margin-left: 22%;
    margin-top: 6%;
    background-color: var(--light);
}

.profile-header h3 {
    margin: 0;
    padding: 0;
    font-size: 18px;
    font-weight: bold;
    color: #333;
}

.profile-content {
    display: flex;
    align-items: center;
    margin-top: 20px;
}

.profile-pic {
    border-radius: 50%;
    width: 100px;
    height: 100px;
    margin-right: 10px;
}

.profile-info {
    flex-grow: 1;
}

.profile-name {
    font-size: 36px;
    font-weight: 500;
    color: #333;
}

.profile-email, .profile-role {
    margin: 5px 0;
    color: #666;
}

.status {
    display: inline-block;
    padding: 5px 10px;
    border-radius: 12px;
    font-size: 12px;
    margin-top: 10px;
}

.status.online {
    background-color: #4CAF50;
    color: #fff;
}

.profile-actions {
    margin-top: 20px;
}

.profile-actions button {
    background-color: #4CAF50;
    color: #fff;
    padding: 10px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    margin-right: 10px;
}
.profile-actions .btn-logout {
    background-color: red;
}
.profile-actions .btn-logout:hover {
    background-color: orangered;
}
.profile-actions button:hover {
    background-color: #45a049;
}
.hidden {
    display: none;
}
</style>
