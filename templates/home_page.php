<?php 
session_start();

// Connexion à la base de données
require __DIR__ . '/../includes/pdo.php';

// Requête pour récupérer les données

$sql = "SELECT * FROM projet ORDER BY id_projet DESC LIMIT 5";
$req = $connect->prepare($sql);
$req->execute();

// todolist
$sql2 = "SELECT * FROM tache ORDER BY id_tache DESC LIMIT 5";
$req2 = $connect->prepare($sql);
$req2->execute();
?>
<section id="content-main">
			<ul class="box-info">
				<li>
					<i class='bx bxs-calendar-check' ></i>
					<span class="text">
						<h3>1020</h3>
						<p>New Order</p>
					</span>
				</li>
				<li>
					<i class='bx bxs-group' ></i>
					<span class="text">
						<h3>2834</h3>
						<p>Visitors</p>
					</span>
				</li>
				<li>
					<i class='bx bxs-dollar-circle' ></i>
					<span class="text">
						<h3>$2543</h3>
						<p>Total Sales</p>
					</span>
				</li>
			</ul>


			<div class="table-data">
				<div class="order">
					<div class="head">
						<h3>Projets recents</h3>
						<i class='bx bx-search' ></i>
						<i class='bx bx-filter' ></i>
					</div>
					<table>
						<thead>
							<tr align="left">
								<th>Libellé</th>
								<th>Date </th>
								<th>Statut</th>
							</tr>
						</thead>
						<tbody>
						    <?php while($projet=$req->fetch()) {?>
							<tr>
								<td>
									<img src="../<?php echo($projet['image_projet']); ?>">
									<p><?php echo($projet['libelle']); ?></p>
								</td>
								<td><?php echo($projet['date_debut']); ?></td>
								<td><span class="status <?php if($projet['etat']==='Annulé'){echo 'pending';}elseif($projet['etat']==='En cours'){echo 'process';}else{echo 'completed';} ?>"><?php echo($projet['etat']); ?></span></td>
							</tr>
							<?php }; $req->closeCursor();?>
							<!-- <tr>
								<td>
									<img src="img/people.png">
									<p>John Doe</p>
								</td>
								<td>01-10-2021</td>
								<td><span class="status pending">Pending</span></td>
							</tr>
							<tr>
								<td>
									<img src="img/people.png">
									<p>John Doe</p>
								</td>
								<td>01-10-2021</td>
								<td><span class="status process">Process</span></td>
							</tr>
							<tr>
								<td>
									<img src="img/people.png">
									<p>John Doe</p>
								</td>
								<td>01-10-2021</td>
								<td><span class="status pending">Pending</span></td>
							</tr>
							<tr>
								<td>
									<img src="img/people.png">
									<p>John Doe</p>
								</td>
								<td>01-10-2021</td>
								<td><span class="status completed">Completed</span></td>
							</tr> -->
						</tbody>
					</table>
				</div>
				<div class="todo">
					<div class="head">
						<h3>Todos</h3>
						<i class='bx bx-plus' ></i>
						<i class='bx bx-filter' ></i>
					</div>
					<ul class="todo-list">
					  <?php while($tache=$req2->fetch()) {?>
						<li class="<?php if($tache['etat']==='Terminé'){echo'completed';}else{echo 'not-completed';}?>">
							<p><?php echo($tache['libelle']); ?></p>
							<i class='bx bx-dots-vertical-rounded' ></i>
						</li>
					  <?php }; $req->closeCursor();?>
						<!-- <li class="completed">
							<p>Todo List</p>
							<i class='bx bx-dots-vertical-rounded' ></i>
						</li>
						<li class="not-completed">
							<p>Todo List</p>
							<i class='bx bx-dots-vertical-rounded' ></i>
						</li>
						<li class="completed">
							<p>Todo List</p>
							<i class='bx bx-dots-vertical-rounded' ></i>
						</li>
						<li class="not-completed">
							<p>Todo List</p>
							<i class='bx bx-dots-vertical-rounded' ></i>
						</li>-->
					</ul>
				</div>
			</div> 
