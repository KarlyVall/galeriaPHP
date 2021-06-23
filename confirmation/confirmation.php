<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirmacion</title>
    <link rel="stylesheet" href="../css/navAndFooter.css">
    <script src="https://kit.fontawesome.com/d3fecd9478.js" crossorigin="anonymous"></script>
</head>
<body>
    <?php 
    session_start();
    include('../nav/nav.php');
    ?>
    <form action="" method="post">
        <input type="submit" value="Reset password" name="reset">
    </form>
    <?php 
    if(isset($_GET["result"])) {
        $result=$_GET["result"];
        if ($result==1):?>
        <main>true</main>
        <?php else:?>
        <main>false</main>
        <?php endif;
    }
    if((isset($_SESSION['token']))&&(isset($_POST['reset']))){
        header("Location: http://localhost/phpGaleria/php/resetpassword.php?t=".$_SESSION['token']);
    } 
    include('../footer/footer.html'); ?>
</body>
</html>