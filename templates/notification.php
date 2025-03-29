<!-- Notif -->
<style>
        .notification-container {
            position: relative;
        }
        .bell {
            font-size: 30px;
            cursor: pointer;
            position: relative;
            color: #333;
        }
        .badge {
            position: absolute;
            top: -5px;
            right: -5px;
            background: red;
            color: white;
            border-radius: 50%;
            width: 18px;
            height: 18px;
            font-size: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
        }
        .notification-list {
            display: none;
            position: absolute;
            top: 40px;
            right: 1%;
            background-color: #F9F9F9;
            width: 250px;
            border: 1px solid #ccc;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 5px;
            overflow: hidden;
            z-index: 1000;
            color:rgb(44, 39, 46);
            /* display: none;
            position: absolute;
            top: 40px;
            right: 1%;
            background: white;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2);
            border-radius: 5px;
            width: 250px;
            padding: 10px; */
            transition: all 0.3s ease;
        }
        .notification-list ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }
        .notification-list li {
            padding: 10px;
            border-bottom: 1px solid #ddd;
            cursor: pointer;
            transition: background 0.3s ease;
        }
        .notification-list li:last-child {
            border-bottom: none;
        }
        .notification-list li:hover {
            background: #f0f0f0;
        }

        /* Style de la boîte de dialogue */
        .modal {
            display: none;
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background: white;
            padding: 20px;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2);
            border-radius: 5px;
            width: 300px;
            text-align: center;
        }
        .modal button {
            margin-top: 10px;
            padding: 5px 10px;
            border: none;
            background: red;
            color: white;
            cursor: pointer;
            border-radius: 3px;
        }
</style>
<body>
    <div class="notification-container">
        <!-- <div class="bell" onclick="toggleNotifications()">
            <i class="fas fa-bell"></i>
            <span class="badge" id="notificationCount">3</span>
        </div> -->
        <div class="notification-list" id="notificationList">
            <h3 align='center' style="background:#7d2670;">Notifications</h3>
            <ul id="notifications">
                <li onclick="showNotification(this)" data-message="Ceci est le contenu de la première notification">Nouvelle notification 1</li>
                <li onclick="showNotification(this)" data-message="Voici un autre message important">Nouvelle notification 2</li>
                <li onclick="showNotification(this)" data-message="Dernière notification à lire">Nouvelle notification 3</li>
            </ul>
        </div>
    </div>

    <!-- Modale pour afficher le message -->
    <div class="modal" id="notificationModal">
        <p id="notificationContent"></p>
        <button onclick="closeModal()">Fermer</button>
    </div>

    <script>
        function toggleNotifications() {
            var notificationList = document.getElementById("notificationList");
            notificationList.style.display = notificationList.style.display === "block" ? "none" : "block";
        }

        function showNotification(element) {
            var message = element.getAttribute("data-message");
            document.getElementById("notificationContent").textContent = message;
            document.getElementById("notificationModal").style.display = "block";

                // Supprimer la notification après affichage
                
            }

        function closeModal() {
            document.getElementById("notificationModal").style.display = "none";
        }

        function updateBadgeCount() {
            var count = document.querySelectorAll("#notifications li").length;
            var badge = document.getElementById("notificationCount");

            if (count === 0) {
                badge.style.display = "none";
            } else {
                badge.textContent = count;
            }
        }
    </script>
</body>
<!-- Notif -->