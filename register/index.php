<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <script src="https://kit.fontawesome.com/d3fecd9478.js" crossorigin="anonymous"></script>
    <link rel='stylesheet' href='../css/navAndFooter.css'>
    <link rel='stylesheet' href='./register.css'>
</head>
<body>
<?php include('../nav/nav.php'); ?>
<main class="main-form">
    <form method="post" action="../php/register.php" class="login-form">        <!-- action="../php/register.php" -->
        <span>Login:</span><br>
        <input type="text" name="Login" maxlength="12"  required/><br>
        <span>Contraseña:</span><br>
        <input type="password" name="Password" required/><br>
        <span>E-Mail:</span><br>
        <input type="email" name="Email" required/><br>
        <?php if(isset($_GET["wrongemail"])&&($_GET["wrongemail"]=='true')):?><p id="emailerror" class="emailerror">E-Mail already exist!</p><?php endif;?>
        <span class="div-submit"><input type="submit" value="Register" name="register-submit" ></span>
    </form>
    <div class="div-sign">
        <p>¿Cuenta existente? <a href="../login">Click aqui!</a></p>
    </div>
</main>
<?php include('../footer/footer.html'); ?>
</body>
</html>