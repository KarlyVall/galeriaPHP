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
    <link rel='stylesheet' href='./resetpassword.css'>
</head>
<body>
<?php include('../nav/nav.php'); ?>
<main class="main-form">
    <form method="post" action="../php/resetpassword.php" class="login-form">        <!-- action="../php/register.php" -->
        <span class="text">Porfavor ingrese su email</span><br>
        <input type="email" name="Email" class="email" required/><br>
        <?php if(isset($_GET["wrongemail"])&&($_GET["wrongemail"]=='true')):?><p id="emailerror" class="emailerror">That email doesnt match any login!</p><?php endif;?>
        <span class="div-submit"><input type="submit" value="Reset" name="reset-password" ></span>
    </form>
</main>
<?php include('../footer/footer.html'); ?>
</body>
</html>