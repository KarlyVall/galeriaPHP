<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <script src="https://kit.fontawesome.com/d3fecd9478.js" crossorigin="anonymous"></script>
    <link rel='stylesheet' href='../css/navAndFooter.css'>
    <link rel='stylesheet' href='./login.css'>
</head>
<body>
<?php include('../nav/nav.php'); ?>
<main class="main-form">
    <form method="post" class="login-form">        <!-- action="../php/login.php"-->
    <span>Login:</span><br>
    <input type="text" name="Login" required/><br>
    <span>Contraseña:</span><br>
    <input type="password" name="Password" required/><br>
    <div class="div-submit">
        <input type="submit" value="Login" name="login-submit">
        <p id="loginerror" class="loginerror">Usuario o contraseña incorrectos</p>
    </div>
    </form>
    <div class="div-sign">
        <p>No tienes cuenta aún? <a href="../register">Click aqui para crear una cuenta</a></p>
        <p>Olvidé mi contraseña <a href="../resetpassword">Click aqui para recuperar mi contraseña</a></p>
    </div>
</main>
<?php include('../footer/footer.html'); ?>
</body>
</html>