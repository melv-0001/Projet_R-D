<?php 
session_start();
if (!isset($_SESSION['nom'])) {
    header('Location: ./index_signup.php');
    exit();
}
?>
<!DOCTYPE html>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link  rel="stylesheet" href="./assets/css/style.css" type="text/css">
    <script src="finisher-header.es5.min.js" type="text/javascript"></script>
    <title>TechInnova</title>
 
</head>
<body>
    <!-- Navbar -->
    <?php require_once('./templates/header.php') ?>


    <!-- Hero Section -->
    <div class="hero">
        <div class="hero-overlay">
          
        </div>
    </div>



    <section class="index" id="index">
            <h1>TechInnova : Pensez Grand, Pensez Innovation !</h1>
            <p>Participez à nos projets en proposant des idées créatives et innovantes ou consultez l'évolution des projets en temps réel.</p>
            <div class="cta-buttons">
                <button><a href="./index_login.php">Connexion</a></button>
            </div>
    </section>
<div class="header finisher-header" style="width: 100%; height: 300px;">
    Logo, navigation, etc.
</div>
<!--Section boites-->
<section class="section-boites" >
    <h1 style="margin-top: 36.5%;" id="infos">Avec nous travailler c'est ...</h1>
  <section class="feature" id="innover" style="margin-top: 7%;">
    <h2>Innover</h2>
    <p>Faites progresser vos projets avec notre plateforme de pointe conçue pour la collaboration en R&D et le suivi des progrès.</p>
  </section>
  <section class="feature" id="collaborer">
    <h2>Collaborer</h2>
    <p>Exploitez la puissance du travail d’équipe pour stimuler l’innovation et atteindre vos objectifs de R&D dans un environnement dynamique et interactif.</p>
  </section>
</section>
  <section class="feature" id="rationaliser">
    <h2>Rationaliser</h2>
    <p>Plongez dans un système centralisé qui améliore à la fois la gestion de projet et l’accessibilité à la documentation.</p>
  </section>
    <section class="offres-section" id="offers">
        <h1>Nos offres</h1>
        <p>Solutions personnalisées pour améliorer votre expérience R&D</p>
        <div class="offres-container">
            <div class="offre-card">
                <h2>Project management</h2>
                <p>Suivi organisé des jalons et des échéanciers du projet.</p>
            </div>
            <div class="offre-card">
                <h2>Gestion des idées</h2>
                <p>Soumission et évaluation facilitées de concepts innovants.</p>
            </div>
            <div class="offre-card">
                <h2>Stockage de la documentation</h2>
                <p>Accès sécurisé à tous les documents pertinents du projet.</p>
            </div>
            <div class="offre-card">
                <h2>Outils de collaboration</h2>
                <p>Fonctionnalités favorisant le travail d'équipe et la communication.</p>
            </div>
            <div class="offre-card">
                <h2>Collaboration virtuelle</h2>
                <p>Outils à distance pour une interaction efficace en équipe et des mises à jour de projet.</p>
            </div>
        </div>
    </section>

    <main style="margin-top: 10%;">
    <h1 id="contacts" style="margin-top: 125%;margin-left:-4rem">Pour nous contacter c'est simple...</h1>
    <div class="contain" id="contain">
        <div class="contact-form">
            <h1>Discutons ☺</h1>
            <p>Vous avez des questions ou des commentaires ? Nous sommes là pour vous aider. Envoyez-nous un message et nous vous répondrons dans les 24 heures.</p>
            <br>
            <hr>
            <br>
            <form>
                <input type="text" name="first_name" placeholder="Nom" class="nom">
                <input type="text" name="last_name" placeholder="Prénom" class="prenom">
                <input type="email" name="email" placeholder="Email Address" class="email">
                <textarea name="message" placeholder="Laissez nous un message" rows="11" cols="70" class="text"></textarea> <br>
                <input type="checkbox" name="privacy"> I agree to our friendly <a href="#">privacy policy</a>
                <button type="submit">submit</button>
            </form>
        </div>

        <div class="contact-info">
            
            <p class="sp">Ou encore, envoyez nous un mail et suivez nous sur nos differentes pages</p>
            <div class="details">
                <p class="Email"><strong>Email</strong>&nbsp;<i class="fa-solid fa-envelope" style="color: #103c89;"></i>
                <br><a href="mailto:TechInnova@outlook.com">TechInnova@outlook.com</a></p>
                <p class="Phone"><strong>Phone</strong>&nbsp;<i class="fa-solid fa-phone" style="color: #2556ad;"></i>
                <br>+225 07 07 99 99 00</p>
            </div>
        </div>
    </div>
    </main>
    <footer>
        <ul>
            <li><a href="#">Accueil</a></li>
            <li><a href="#offers">Nos offres</a></li>
            <li><a href="#contain">Contact</a></li>
            <li><a href="#index">À propos</a></li>
        </ul>
        <p>&copy; 2025 Techlnnova. Tous droits réservés.</p>
    </footer>
</body>
</html>
