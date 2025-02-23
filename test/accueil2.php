<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil</title>
    <link rel="stylesheet" href="./assets/css/styler.css">
</head>
<body>
    <div class="hero">
        <div class="hero-overlay">
            <h1>Bienvenue sur notre site</h1>
        </div>
    </div>

    <section class="index">
        <h1>Découvrez nos services</h1>
        <p>Nous vous proposons des solutions adaptées à vos besoins avec une approche personnalisée.</p>
        <div class="cta-buttons">
            <button><a href="#services">Nos Services</a></button>
            <button><a href="#contact">Contactez-nous</a></button>
        </div>
    </section>

    <section class="offres-section" id="services">
        <h1>Nos Offres</h1>
        <p>Des services variés pour répondre à toutes vos attentes.</p>
        <div class="offres-container">
            <div class="offre-card">
                <h2>Offre 1</h2>
                <p>Description de l'offre 1.</p>
            </div>
            <div class="offre-card">
                <h2>Offre 2</h2>
                <p>Description de l'offre 2.</p>
            </div>
            <div class="offre-card">
                <h2>Offre 3</h2>
                <p>Description de l'offre 3.</p>
            </div>
        </div>
    </section>

    <main id="contact">
        <div class="contain">
            <div class="contact-form">
                <h1>Contactez-nous</h1>
                <form action="submit_form.php" method="POST">
                    <input type="text" name="nom" placeholder="Nom" class="nom">
                    <input type="text" name="prenom" placeholder="Prénom" class="prenom">
                    <input type="email" name="email" placeholder="Email" class="email">
                    <textarea name="message" placeholder="Votre message" rows="5" class="text"></textarea>
                    <button type="submit">Envoyer</button>
                </form>
            </div>

            <div class="contact-info">
                <img src="../images/contact.jpg" alt="Contact">
                <div class="details">
                    <div class="Email">Email : contact@exemple.com</div>
                    <div class="Phone">Téléphone : +33 1 23 45 67 89</div>
                </div>
            </div>
        </div>
    </main>

    <footer>
        <ul>
            <li><a href="#">Mentions Légales</a></li>
            <li><a href="#">Politique de Confidentialité</a></li>
            <li><a href="#">Plan du Site</a></li>
        </ul>
        <p>&copy; 2025 Votre Entreprise. Tous droits réservés.</p>
    </footer>
</body>
</html>
