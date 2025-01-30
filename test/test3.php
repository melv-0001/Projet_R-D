<form action="test4.php" method="post" enctype="multipart/form-data">
    <label for="nom">Nom :</label>
    <input type="text" name="nom" id="nom" required>
    
    <label for="email">Email :</label>
    <input type="email" name="email" id="email" required>
    
    <label for="role">Rôle :</label>
    <select name="role" id="role" required>
        <option value="admin">Admin</option>
        <option value="user">User</option>
    </select>
    
    <label for="password">Mot de passe :</label>
    <input type="password" name="password" id="password" required>
    
    <label for="image">Photo de profil :</label>
    <input type="file" name="image" id="image" required>
    
    <button type="submit" name="button" value="submit">S'inscrire</button>
</form>
