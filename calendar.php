<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calendrier - TechInnova</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.8/index.global.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Prompt:wght@300;400;500;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: "Prompt", sans-serif;
            background-color: #7C705B;
            margin: 0;
            padding: 0;
        }
        header {
            background-color: #664D37;
            color: #fff;
            padding: 20px;
            text-align: center;
        }
        header nav ul {
            list-style: none;
            padding: 0;
        }
        header nav ul li {
            display: inline;
            margin: 0 15px;
        }
        header nav ul li a {
            color: #fff;
            text-decoration: none;
        }

        .container {
            margin-top: 30px;
            padding: 20px;
            background: linear-gradient(145deg, #ffffff, #e6e6e6);
            border-radius: 15px;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.2);
            max-width: 900px;
            border: 1px solid #ddd;
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
            color: #000;
            font-size: 2rem;
            font-weight: 600;
        }

        #calendar {
            margin-top: 15px;
            font-size: 0.95rem;
        }

        .fc-toolbar {
            background: #664D37;
            color: #fff;
            padding: 10px;
            border-radius: 8px;
        }

        .fc-button {
            background: #fff !important;
            color: #664D37 !important;
            border: 1px solid #664D37 !important;
            border-radius: 5px !important;
            padding: 5px 10px !important;
            font-size: 0.85rem;
        }

        .fc-button:hover {
            background: #7C705B !important;
            color: #fff !important;
        }

        .fc-daygrid-day-number {
            font-weight: 600;
            color: #2c3e50;
        }

        .fc-day-today {
            background-color: #664D37 !important;
            color: #fff !important;
            border-radius: 5px;
        }

        .fc-daygrid-event {
            background: #2c3e50;
            color: #2c3e50;
            border: none;
            font-size: 0.85rem;
            padding: 2px 4px;
            border-radius: 3px;
        }
        footer {
            background-color: #664D37;
            color: white;
            text-align: center;
            padding: 10px 0;
            margin-top: 20px;
        }


    </style>
</head>
<body>
<header>
    <h1>TechInnova</h1>
    <nav>
        <ul>
            <li><a href="http://localhost//Projet_Techlnnova/dashboard/index.php">Accueil</a></li>
            <li><a href="http://localhost//Projet_Techlnnova/dashboard/id%C3%A9es.php">Idées innovantes</a></li>
            <li><a href="http://localhost//Projet_Techlnnova/page1/doc.php">Documents</a></li>
            <li><a href="http://localhost//Projet_Techlnnova/dashboard/utilisateur.php">Utilisateurs</a></li>
            <li><a href="http://localhost//Projet_Techlnnova/dashboard/projet.php">Projets R&D</a></li>

        </ul>
    </nav>
</header>
    <div class="container">
        <h2>Calendrier des événements</h2>
        <div id="calendar"></div>
    </div>
    <footer>
        <p>&copy; 2025 TechInnova. Tous droits réservés.</p>
    </footer>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.8/index.global.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const calendarEl = document.getElementById('calendar');
            const calendar = new FullCalendar.Calendar(calendarEl, {
                initialView: 'dayGridMonth',
                headerToolbar: {
                    left: 'prev,next today',
                    center: 'title',
                    right: 'dayGridMonth,timeGridWeek,timeGridDay'
                },
                selectable: true,
                select: function (info) {
                    const title = prompt('Entrer le titre de l\'événement :');
                    if (title) {
                        calendar.addEvent({
                            title: title,
                            start: info.startStr,
                            end: info.endStr,
                            allDay: info.allDay
                        });
                    }
                    calendar.unselect();
                },
                eventClick: function (info) {
                    if (confirm('Voulez-vous supprimer cet événement ?')) {
                        info.event.remove();
                    }
                },
                events: []
            });

            calendar.render();
        });
    </script>
</body>
</html>
