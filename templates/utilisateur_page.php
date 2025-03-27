<?php 
session_start();

// Connexion à la base de données
require __DIR__ . '/../includes/pdo.php';

// Requête pour récupérer les données

$sql = "SELECT * FROM utilisateur";
$req = $connect->prepare($sql);
$req->execute();

?>
<link rel="stylesheet" href="../assets/css/style_user.css">
<div class="order" style="margin-top:2rem">
					<div class="head">
						<h3>Utilisateurs</h3>
						<i class='bx bx-search' ></i>
						<i class='bx bx-filter' ></i>
					</div>
					<table>
						<thead>
							<tr align="left">
								<th>Noms</th>
								<th>Email</th>
								<th>Actions</th>
							</tr>
						</thead>
						<tbody>
						    <?php while($user=$req->fetch()) {?>
							<tr>
								<td>
									<img src="../<?php echo($user['image_utilisateur']); ?>">
									<p><?php echo($user['nom']); ?></p>
								</td>
								<td><?php echo($user['email']); ?></td>
							</tr>
							<?php }; $req->closeCursor();?>
							
						</tbody>
					</table>
				</div>