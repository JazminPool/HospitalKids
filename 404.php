<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>No encontrada</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php include('js.php'); include('css.php'); ?>
</head>
<body>
    <?php include('components/nav.php'); ?>

    <div class="container">
        <div class="row pt-0 mt-0 justify-content-center">
            <a href="Home.php">
                <h1>Regresar al inicio. <i class="fal fa-hospital-user"></i></h1>
            </a>
        </div>
        <div class="row pt-0 mt-0 pb-0 mb-0 justify-content-center text-center">
            <span>Oops... creo que te perdiste, intenta navegar por nuestro
                menú. <br> Es fácil, se encuentra justo arriba :)
            </span>
        </div>
        <div class="row justify-content-center">
            <img height="350" src="src/img/nf2.gif">
        </div>
        
    </div>



    <?php include('components/footer.php'); ?>
</body>
</html>