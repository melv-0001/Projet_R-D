<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Partenaires - TechInnova</title>
    <style>
        

        header {
            background: linear-gradient(135deg, #9b59b6, #8e44ad);
            color: white;
            padding: 20px;
            text-align: center;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
        }

        .container {
            max-width: 1200px;
            margin: 40px auto;
            padding: 20px;
            background: white;
            border-radius: 12px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
        }

        h2 {
            text-align: center;
            color: #8e44ad;
        }

        .partners-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
            padding: 20px;
            justify-content: center;
        }

        .partner-card {
            background: white;
            border-radius: 10px;
            padding: 20px;
            text-align: center;
            transition: 0.3s;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        .partner-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
        }

        .partner-card img {
            max-width: 100%;
            height: auto;
            border-radius: 8px;
            margin-bottom: 15px;
        }

        .partner-card p {
            color: #666;
            font-size: 14px;
        }

        .projects-list ul {
            list-style-type: none;
            padding: 0;
        }

        .projects-list li {
            background: #f8f9fa;
            margin: 10px 0;
            padding: 15px;
            border-left: 5px solid #8e44ad;
            border-radius: 8px;
            transition: 0.3s;
        }

        .projects-list li:hover {
            background: #e8def7;
        }

        .contre {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 20px;
        }

        .block {
            background: linear-gradient(135deg, #9b59b6, #8e44ad);
            width: 280px;
            height: auto;
            padding: 20px;
            border-radius: 12px;
            color: white;
            text-align: center;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
        }

        .badger img {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
        }

        footer {
            text-align: center;
            padding: 20px;
            background: linear-gradient(135deg, #9b59b6, #8e44ad);
            color: white;
            margin-top: 40px;
            box-shadow: 0 -4px 10px rgba(0, 0, 0, 0.2);
        }
    </style>
</head>
<body>
    <header style="margin-top:3rem;">
        <h1>Partenaires de TechInnova</h1>
        <p>Collaborations avec des Entreprises de la Technologie</p>
    </header>

    <div class="container">
        <h2>Nos Partenaires</h2>
        <div class="partners-grid">
            <div class="partner-card">
                <img src="../assets/images/SmartHomeHub.jpg" alt="Smart Home">
                <p><strong>Domotique</strong> - Expertise : Smart Home</p>
            </div>
            <div class="partner-card">
                <img src="../assets/images/AI Insights.png" alt="AI Insights">
                <p><strong>Intelligence Artificielle</strong> - Expertise : Insights AI</p>
            </div>
            <div class="partner-card">
                <img src="../assets/images/Sécurité.jpg" alt="Cybersécurité">
                <p><strong>Cybersécurité</strong> - Expertise : Sécurité Digitale</p>
            </div> 
            <div class="partner-card">
                <img src="../assets/images/Virtual Reality Logo _ VR logo.jpg" alt="Cybersécurité">
                <p><strong>VR Learning</strong> - Expertise : Apprentissage en Réalité Virtuelle</p>
            </div>
        </div>

        <h2>Projets Collaboratifs</h2>
        <section class="projects-list">
            <ul>
                <li><strong>SmartHomeHub</strong> - Technologies avancées pour la maison connectée.</li>
                <li><strong>AI Insights</strong> - Solutions IA pour optimiser la prise de décision.</li>
                <li><strong>CyberShield</strong> - Protection avancée contre les cyberattaques.</li>
                <li><strong>GreenTech Solutions</strong> - Gestion intelligents d'énergie renouvelable.</li>
                <li><strong>VR Learning</strong> - Développer vos compétences dans un environnement sans risque.</li>
            </ul>
        </section>

        <h2>Témoignages</h2>
        <div class="contre">
            <div class="block">
                <div class="badger"><img src="../assets/images/image1.png" alt="Témoin 1"></div>
                <p>TechInnova nous a permis d’accélérer notre croissance grâce à ses outils innovants.</p>
            </div>
            <div class="block">
                <div class="badger"><img src="../assets/images/image2.jpg" alt="Témoin 2"></div>
                <p>Une plateforme révolutionnaire qui facilite la gestion de projets R&D.</p>
            </div>
            <div class="block">
                <div class="badger"><img src="../assets/images/image3.jpg" alt="Témoin 2"></div>
                <p>Leur solution de gestion R&D a simplifié notre processus de développement en nous offrant un suivi précis de l'avancement de nos projets.</p>
            </div>
        </div>
    </div>

    <footer>
        <p>&copy; 2023 TechInnova. Tous droits réservés.</p>
    </footer>
</body>
</html>