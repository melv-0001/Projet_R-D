<?php 
session_start();

if (isset($_SESSION['nom'],$_SESSION['role'])) {
    if ($_SESSION['role']==='chercheur'){
        header('Location: ./dash_chercheur.php') ;}
    elseif($_SESSION['role']==='admin'){header('Location: ./dashboard.php');}
    else{
        header('Location: ./dash_collab.php');
    };
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - TechInnova</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #1e1a20;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            color: #fff;
        }

        .login-container {
            background-color: rgb(46, 42, 46);
            padding: 20px 30px;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.3);
            width: 100%;
            max-width: 400px;
            text-align: center;
        }

        .login-container h1 {
            font-size: 1.5rem;
            margin-bottom: 10px;
        }

        .login-container .sign_up {
            font-size: 0.9rem;
            color: #bbb;
            margin-bottom: 20px;
        }

        .login-container input {
            width: 90%;
            padding: 10px;
            margin-bottom: 15px;
            border: none;
            border-radius: 5px;
            background-color: rgb(59, 53, 59);;
            color: #fff;
            font-size: 1rem;
           
        }

        .login-container input::placeholder {
            color: #888;
        }

        .login-container a {
            color:rgb(143, 109, 154);
            text-decoration: none;
            font-size: 0.9rem;
            margin-left: 7px;
        }

        .login-container a:hover {
            text-decoration: underline;
        }

        .login-container button {
            width: 95%;
            padding: 10px;
            border: none;
            border-radius: 5px;
            background-color:#44284d;
            color: #fff;
            font-size: 1rem;
            cursor: pointer;
            margin-top: 10px;
        }

        .login-container button:hover {
            background-color:rgb(145, 107, 158);
        }

        .signup-link {
            margin-top: 15px;
            font-size: 0.9rem;
        }

    </style>
</head>
<body>
    <div class="login-container">
        <h1>Log in to your account</h1>
        <p>Welcome back!</p>
        <form action="./templates/login.php" method="POST">
            <input type="email" name="email" placeholder="Your email address" required>
            <input type="password" name="password" placeholder="Your password" required>
            <div style="display: flex; justify-content: space-between; align-items: center;">
                <a href="#">Forgot password?</a>
            </div>
            <button name="button" value="submit" type="submit">Log in</button>
        </form>
        <div class="signup-link">
            <a href="index_signup.php" class="sign_up">Sign up for a new account</a>
        </div>
    </div>
</body>
</html>
