<?php
// initialisation de la session
session_start();

// Vérification des accès
if (!isset($_SESSION['nom'],$_SESSION['role'])) {
	header('Location: ../index_signup.php');
	exit();
}else{ 
	if($_SESSION['role']!='admin'){
		header('Location: ../index.php');
	}else{
		// echo "Bienvenue ".$_SESSION['nom'];
		// echo "Votre role est ".$_SESSION['role'];
		
	}
};



?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Boxicons -->
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	<!-- My CSS -->
	<link rel="stylesheet" href="./assets/css/style_dashboard.css">
	<link rel="stylesheet" href="./assets/css/style2.css">
	<link rel="stylesheet" href="./assets/css/style3.css">
	<!-- <link rel="stylesheet" href="./assets/css/style.css"> -->
	<!-- <link rel="stylesheet" href="./assets/css/style_test.css"> -->
	<script src="./assets/js/script.js"></script>

	

	<title>TechInnova</title>
</head>
<body>


	<!-- SIDEBAR -->
	<section id="sidebar">
		<a href="#" class="brand">
		<i class='bx bx-text'></i><i class='bx bxs-paint bx-tada' style="margin-left: -0.8rem;"></i>
		<span class="text">TechInnova</span>
		</a>
		<ul class="side-menu top">
			<li class="active">
				<a href="#" onclick="fetcher('./templates/home_page.php?','Home')">
				<i class='bx bxs-home'></i>
				<span class="text">Accueil </span>
				</a>
			</li>
			<li>
				<a href="#" onclick="fetcher('./templates/projet_page.php?', 'Projets')">
				<i class='bx bxs-package'></i>
				<span class="text"> Projets R&D </span>
				</a>
			</li>
			<li>
				<a href="#" onclick="fetcher('./templates/idee_page.php?', 'Idées')">
					<i class='bx bxs-doughnut-chart'></i>
                    <span class="text">Idées innovantes</span>
				</a>
			</li>
			<li>
                    <a href="#" onclick="fetcher('./templates/statistique_page.php?', 'Statistiques')">
                    <i class='bx bx-stats'></i>
                    <span class="text">Statistiques</span>
                    </a>
            </li>
			<li>
				<a href="#" onclick="fetcher('./templates/calendrier_page.php?', 'Calendrier')">
				   <i class='bx bx-calendar' ></i>
				   <span class="text">Calendrier</span>
				</a>
			</li>
			<li>
                    <a href="#" onclick="fetcher('./templates/utilisateur_page.php?', 'Utilisateurs')">
                    <i class='bx bx-user-pin' ></i>
                    <span class="text">Utilisateurs</span>
                    </a>
            </li>
			<li>
				<a href="#" onclick="fetcher('./templates/partenariat_page.php?', 'Partenariats')">
				   <i class='bx bxs-group'></i>
				   <span class="text">Partenariats</span>
				</a>
			</li>
		</ul>
		<ul class="side-menu">
			<li>
				<a href="#" onclick="fetcher('./templates/parametre_page.php?', 'Paramètres')">
					<i class='bx bxs-cog' ></i>
					<span class="text">Settings</span>
				</a>
			</li>
			<li>
				<a href="#" class="logout" onclick=" if( confirm('Voulez vous vous deconnecter?')){window.location.href='./templates/logout.php'};<?php //header('Location: ./templates/logout.php') ?>">
					<i class='bx bxs-log-out-circle' ></i>
					<span class="text">Logout</span>
				</a>
			</li>
		</ul>
	</section>
	<!-- SIDEBAR -->



	<!-- CONTENT -->
	<section id="content">
		<!-- NAVBAR -->
		<nav>
			<i class='bx bx-menu' id="menu-bar"></i>
			<a href="#" class="nav-link">Categories</a>
			<form action="#">
				<div class="form-input">
					<input type="search" placeholder="Search...">
					<button type="submit" class="search-btn"><i class='bx bx-search' ></i></button>
				</div>
			</form>
			<input type="checkbox" id="switch-mode" hidden>
			<label for="switch-mode" class="switch-mode"></label>
			<a href="#" class="notification" onclick="toggleNotifications()">
			    <i class='bx bx-bell bx-tada'></i>
				<span class="num" id="notificationCount">8</span>
			</a>
			<span style="right:1px"><?php echo $_SESSION['nom']?></span>
			<a href="#" class="profile">
				<img src="./<?php echo $_SESSION['image']?>">
			</a>
		</nav>
		<!-- NAVBAR -->
		 <!-- Notif -->
		 <?php require_once './templates/notification.php'; ?>
		 <!-- Notif -->
		<!-- MAIN -->
		<main>
			<div class="head-title">
				<div class="left">
					<h1>Dashboard</h1>
					<ul class="breadcrumb">
						<li>
							<a href="#">Dashboard</a>
						</li>
						<li><i class='bx bx-chevron-right' ></i></li>
						<li>
							<a class="active" id="ancre" href="#">Home</a>
						</li>
					</ul>
				</div>
				<a href="#" class="btn-download">
					<i class='bx bxs-cloud-download' ></i>
					<span class="text">Download PDF</span>
				</a>
			</div>
			<?php require_once('./templates/home_page.php') ?>
		</main>
		</section>
		<!-- MAIN -->
	</section>
	<!-- CONTENT -->
	
    
	<script src="./assets/js/script.js"></script>
</body>
</html>


