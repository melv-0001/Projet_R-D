<!-- <?php 
session_start();

// Connexion à la base de données
require __DIR__ . '/../includes/pdo.php';
require __DIR__ . '/../includes/function.php';

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
						    <?php /*while($user=$req->fetch()) {?>
							<tr>
								<td>
									<img src="../<?php echo($user['image_utilisateur']); ?>">
									<p><?php echo($user['nom']); ?></p>
								</td>
								<td><?php echo($user['email']); ?></td>
							</tr>
							<?php }; $req->closeCursor();*/?>
							
						</tbody>
					</table>
				</div> -->



				<style>
#utilisateur .table-data{
    display:flex;
    flex-wrap: wrap;
    gap:24px;
    width:98%;
    margin-top: 24px;
    
}
#utilisateur .table-data > div{
    padding:24px;
    background: var(--light);
    border-radius:20px;
}
#utilisateur .table-data .order{
     flex-basis:500px;
     flex-grow: 1;
}
#utilisateur .table-data .order .head{
    display:flex;
    align-items: center;
    gap: 16px;
    margin-bottom:24px;
}
#utilisateur .table-data .order .head h3{
    margin-right:auto;
    font-size:24px;
    font-weight: 600;
}
#utilisateur .table-data .order table{
    width:100%;
    /* border-collapse: collapse; */
    
}
#utilisateur .table-data .order table th{
    padding-bottom: 24px;
    font-size: 13px;
    justify-content: left;
    border-bottom:1px solid var(--dark-grey);
    
}

#utilisateur .table-data .order .head .bx{
    cursor:pointer;
}
#utilisateur .table-data .order table thead th{
    justify-content: left;
    /*à enlever si ça ne va pas*/
    /* margin-left: -4rem; */
}
#utilisateur .table-data .order table tr td{
    padding:16px 0;
    

}
#utilisateur.table-data .order table tbody tr:hover {
	background: var(--grey);
}
#utilisateur .table-data .order table tr td img{
    width: 46px;
    height: 46px;
	border-radius: 50%;
	object-fit: cover;
	
}
#utilisateur .table-data .order table tr td .status {
	font-size: 10px;
	padding: 6px 16px;
	color: var(--light);
	border-radius: 20px;
	font-weight: 700;
	cursor: pointer;
}
#utilisateur .table-data .order table tr td .status.completed {
	background: var(--blue);
}
#utilisateur .table-data .order table tr td .status.process {
	background: var(--yellow);
}
#utilisateur .table-data .order table tr td .status.pending {
	background: var(--orange);
}

#updateUserForm input{
	        width: 90%;
            padding: 10px;
            margin-bottom: 15px;
            border: none;
            border-radius: 5px;
            background-color:rgb(245, 230, 245);
            color:  #888;
            font-size: 1rem;
}

</style>




<section id="utilisateur">
    <h1 style=" font-size: 26px;margin-bottom: 4rem;margin-top:2rem;color: var(--dark);">Utilisateurs</h1>
    <div class="table-data">
				<div class="order">
					<div class="head">
						<h3>Liste des utilisateurs</h3>
						<i class='bx bx-search' ></i>
						<i class='bx bx-filter' ></i>
					</div>
					<table>
						<thead align="left">
							<tr>
								<th>Noms et prenoms</th>
								<th>Email</th>
								<th>Role</th>
								<th align="center">Action</th>
							</tr>
						</thead>
						<tbody>
						<?php while($user=$req->fetch()) { $user_id = $user['id_utilisateur'];$encryption_key = 'b146504a5d75d8b3cbc71f614d4882b58f89685481035e25ece708e2fe9978df'; $encrypted_id = encrypt($user_id, $encryption_key);?>
							<tr>
								<td style="display: flex;gap:2rem">
									<img src="./<?php echo $user['image_profile']; ?>" >
									<p><?php echo $user['nom']; ?></p>
								</td>
								<td><?php echo $user['email']; ?></td>
								<td><span ><?php echo $user['role']; ?></span></td>
								<td onclick="update_user_form(<?php echo $user['id_utilisateur']; ?>)"><span class="status completed">Modifier <i class='bx bx-edit-alt' style="color:#fff"></i></span></td>
								<td onclick=" /*window.location.href='./templates/delete_user.php?id=<?php // echo $encrypted_id;?>'*/suppr_user(<?php echo $user['id_utilisateur'] ?>)"><span class="status pending">Supprimer <i class='bx bx-trash' style="color:#fff"></i></span></td>
							</tr>
						<?php }; ?>
						
						</tbody>
					</table>
				</div>
				
    </div>
                        
</section>

<form id="updateUserForm" style="display:none; background:#fff;padding: 20px 30px;border-radius: 10px;box-shadow: 0 4px 6px rgba(0, 0, 0, 0.3);width: 100%;max-width: 400px;text-align: center;margin-left:30%;margin-top:10%" onsubmit="return update_user();">
<i style="color:black;margin-left:80%;font-size:25px;margin-top:5px" onclick="document.getElementById('updateUserForm').style.display='none';document.getElementById('utilisateur').style.display='block'"class='bx bx-x-circle'></i>
    <h1 style="font-size: 1.5rem;margin-bottom: 10px;margin-left:1.3rem">Modifications</h1>
	<input type="hidden" id="userId" name="userId">
    <label for="email">Email:</label>
    <input type="email" id="email" name="email">
	<label for="nom">Nom:</label>
    <input type="text" id="nom" name="nom">
    <label for="role">Rôle:</label>
    <input type="text" id="role" name="role">
    <button type="submit" style="width: 95%;padding: 10px;border: none;border-radius: 5px;background-color: #44284d;color: #fff;font-size: 1rem;cursor: pointer;margin-top: 10px;">Mettre à jour</button>
</form>

           



