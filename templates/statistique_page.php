<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Statistiques du Projet</title>
    <style>

        h3 {
            color: #333;
            font-size: 1.5rem;
            margin-bottom: 20px;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.1);
            animation: fadeIn 1s ease-out;
        }

        .chart-container {
            width: 70%;
            max-width: 900px;
            background: white;
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
            animation: slideIn 1s ease-out;
        }

        .chart {
            display: flex;
            align-items: flex-end;
            height: 350px;
            border-left: 4px solid #333;
            border-bottom: 4px solid #333;
            padding: 20px;
            position: relative;
            background: linear-gradient(180deg, #ffffff, #e3e3e3);
        }

        .bar {
            width: 14%; /* Largeur légèrement réduite */
            margin: 0 2%; /* Espacement entre les barres */
            text-align: center;
            color: #fff;
            font-weight: bold;
            display: flex;
            align-items: flex-end;
            justify-content: center;
            border-radius: 10px 10px 0 0;
            position: relative;
            overflow: hidden;
            animation: grow 1s ease-out forwards;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
            transition: transform 0.3s ease, background 0.3s ease;
        }

        .bar:hover {
            transform: scale(1.1);
            filter: brightness(1.2);
        }

        .bar span {
            padding: 10px;
            background-color: rgba(0, 0, 0, 0.8);
            border-radius: 5px;
            position: absolute;
            bottom: 10px;
            left: 50%;
            transform: translateX(-50%);
            opacity: 0;
            transition: opacity 0.3s ease-in-out;
            font-size: 1rem;
        }

        .bar:hover span {
            opacity: 1;
        }

        /* Nouvelles couleurs basées sur le violet et blanc */
        .bar:nth-child(1) { background: linear-gradient(45deg, #8e44ad, #d7bde2); } /* Violet clair */
        .bar:nth-child(2) { background: linear-gradient(45deg, #6c5ce7, #a29bfe); } /* Violet bleuté */
        .bar:nth-child(3) { background: linear-gradient(45deg, #9b59b6, #e8dff5); } /* Violet pastel */
        .bar:nth-child(4) { background: linear-gradient(45deg, #6a1b9a, #d1c4e9); } /* Violet profond */
        .bar:nth-child(5) { background: linear-gradient(45deg, #4a148c, #ede7f6); } /* Violet foncé */

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(-20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        @keyframes slideIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        @keyframes grow {
            from { height: 0; }
            to { height: var(--height); }
        }

        .labels {
            display: flex;
            justify-content: space-between; /* Ajustement pour s'adapter à la largeur des barres */
            margin-top: 20px;
            font-size: 1rem; /* Taille de police réduite */
            color: #444;
            padding: 0 2%; /* Alignement avec les barres */
        }

        .labels span {
            flex: 1;
            text-align: center;
            white-space: nowrap; /* Empêche le texte de se diviser en plusieurs lignes */
            margin: 0 2%; /* Espacement entre les étiquettes */
        }

        .y-axis {
            position: absolute;
            left: -30px;
            top: 0;
            bottom: 0;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            font-size: 0.9rem;
            color: #555;
            animation: fadeIn 1s ease-out;
        }

        .y-axis span {
            transform: rotate(-90deg);
            white-space: nowrap;
        }
    </style>
</head>
<body>
    <h3 style="padding:3rem;margin-bottom:2rem">Statistiques du Projet</h3>
    <div class="chart-container">
        <div class="chart">
            <div class="y-axis">
                <span>100%</span>
                <span>75%</span>
                <span>50%</span>
                <span>25%</span>
                <span>0%</span>
            </div>
            <div class="bar" style="--height: 60%;"><span>60%</span></div>
            <div class="bar" style="--height: 80%;"><span>80%</span></div>
            <div class="bar" style="--height: 100%;"><span>100%</span></div>
            <div class="bar" style="--height: 70%;"><span>70%</span></div>
            <div class="bar" style="--height: 50%;"><span>50%</span></div>
        </div>
        <div class="labels">
            <span>SmartHomeHub</span>
            <span>AI Insights</span>
            <span>CyberShield</span>
            <span>GreenTech</span>
            <span>VR Learning</span>
        </div>
    </div>
