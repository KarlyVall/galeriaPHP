<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <script src="https://kit.fontawesome.com/d3fecd9478.js" crossorigin="anonymous"></script>
    <script src="./home.js" defer></script>
    <link rel="stylesheet" href="../css/navAndFooter.css">
    <link rel="stylesheet" href="./home.css">
</head>
<body>
<?php include("../nav/nav.php"); ?>
<main>
    <section class="slideshow" id="slideshow">
            <div class="noneslides" id="slide1">
                <img src="./images/fall.jpg">
                <span class="text-slide"></span>
            </div>
            <div class="noneslides" id="slide2">
                <img src="./images/golden.jpg">
                <span class="text-slide"></span>
            </div>
            <div class="noneslides" id="slide3">
                <img src="./images/sunrise.jpg">
                <span class="text-slide"></span>
        </div>
    </section>
</main>
<?php include("../footer/footer.html"); ?>
</body>
</html>
