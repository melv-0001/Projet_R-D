<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calendrier Interactif</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        /* body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, #667eea, #764ba2);
            color: white;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            flex-direction: column;
        } */
        .container {
            background: white;
            padding: 20px;
            border-radius: 15px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.3);
            text-align: center;
            color: black;
            max-width: 800px;
            width: 90%;
        }
        h2 {
            color: #764ba2;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 15px;
            font-size: 16px;
        }
        th, td {
            padding: 15px;
            text-align: center;
            border: 1px solid #ddd;
            cursor: pointer;
            transition: background 0.3s, transform 0.2s;
            border-radius: 5px;
        }
        th {
            background: #764ba2;
            color: white;
        }
        td:hover {
            background: #f4f4f4;
            transform: scale(1.05);
        }
        .today {
            background:rgb(0, 0, 0) !important;
            color: white;
            font-weight: bold;
        }
        .nav-buttons {
            display: flex;
            justify-content: space-between;
            margin: 10px 0;
        }
        .nav-buttons button {
            font-size: 14px;
            padding: 8px;
            border: none;
            background: #764ba2;
            color: white;
            cursor: pointer;
            border-radius: 10px;
            transition: 0.3s;
        }
        .nav-buttons button:hover {
            background: #5a357c;
        }
        .fade {
            animation: fadeIn 0.5s;
        }
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(-10px); }
            to { opacity: 1; transform: translateY(0); }
        }
        .event-list {
            margin-top: 15px;
            background: #fff;
            padding: 8px;
            border-radius: 10px;
            color: black;
            text-align: left;
        }
    </style>
        <script>
        let currentDate = new Date();
        let events = {};
        
        function renderCalendar() {
            const month = currentDate.getMonth();
            const year = currentDate.getFullYear();
            const today = new Date();
            document.getElementById('currentDate').textContent = new Intl.DateTimeFormat('fr-FR', { month: 'long', year: 'numeric' }).format(currentDate);
            const firstDay = new Date(year, month, 1).getDay();
            const daysInMonth = new Date(year, month + 1, 0).getDate();
            let tableBody = document.querySelector("#calendarTable tbody");
            tableBody.innerHTML = "";
            let row = document.createElement("tr");
            for (let i = 0; i < firstDay; i++) row.appendChild(document.createElement("td"));
            for (let day = 1; day <= daysInMonth; day++) {
                if (row.children.length === 7) {
                    tableBody.appendChild(row);
                    row = document.createElement("tr");
                }
                let cell = document.createElement("td");
                cell.textContent = day;
                cell.onclick = () => addEvent(year, month, day);
                if (day === today.getDate() && month === today.getMonth() && year === today.getFullYear()) {
                    cell.classList.add("today");
                }
                row.appendChild(cell);
            }
            tableBody.appendChild(row);
            tableBody.classList.add("fade");
        }
        
        function changeMonth(step) {
            currentDate.setMonth(currentDate.getMonth() + step);
            renderCalendar();
        }
        
        function addEvent(year, month, day) {
            let eventText = prompt("Ajouter un événement pour le " + day + "/" + (month + 1) + "/" + year);
            if (eventText) {
                let dateKey = `${year}-${month + 1}-${day}`;
                if (!events[dateKey]) events[dateKey] = [];
                events[dateKey].push(eventText);
                updateEventList();
            }
        }
        
        function updateEventList() {
            let eventList = document.getElementById("events");
            eventList.innerHTML = "";
            for (let date in events) {
                events[date].forEach(event => {
                    let li = document.createElement("li");
                    li.textContent = `${date}: ${event}`;
                    eventList.appendChild(li);
                });
            }
        }
        
        document.addEventListener("DOMContentLoaded", renderCalendar);
    </script>
</head>
<body>
    <div class="container">
        <h2>📅 Calendrier</h2>
        <div id="currentDate"></div>
        <div class="nav-buttons">
            <button onclick="changeMonth(-1)">◀</button>
            <button onclick="changeMonth(1)">▶</button>
        </div>
        <table id="calendarTable">
            <thead>
                <tr>
                    <th>Dim</th><th>Lun</th><th>Mar</th><th>Mer</th><th>Jeu</th><th>Ven</th><th>Sam</th>
                </tr>
            </thead>
            <tbody></tbody>
        </table>
        <div class="event-list" id="eventList">
            <h3>Événements</h3>
            <ul id="events"></ul>
        </div>
    </div>

</body>
</html>