<!DOCTYPE html>
<html>
<head>
  <title>Ma Navbar Insomnia</title>
  <link rel="stylesheet" href="styles.css">
  <style>
  nav {
  display: flex;
  justify-content: space-between;
  align-items: center;
  background-color:#d6b6d8;
  padding: 10px;
}

.logo {
  font-size: 24px;
  font-weight: bold;
}

.nav-links {
  list-style: none;
  display: flex;
}

.nav-links li {
  margin-left: 10px;
}

.nav-links a {
  text-decoration: none;
  color: #333;
}
.nav-links a :hover{
  cursor: pointer;
  text-decoration: underline ;
  transition: all 0.3s ease;
}
  </style>
</head>
<body>
  <nav>
    <div class="logo">TechInnova</div>
    <ul class="nav-links">
      <li><a href="#index">Accueil</a></li>
      <li><a href="#infos">A propos</a></li>
      <li><a href="#contacts">Contact</a></li>
      <li><a href="#">Connexion</a></li>
      <li><a href="#">Inscription</a></li>
    </ul>
  </nav>

  <script src="script.js"></script>
</body>
</html>