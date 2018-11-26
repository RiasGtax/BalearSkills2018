<?php 
    session_start();
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Inicio</title>

        <link href="css/style.css" rel="stylesheet">
        
        <link href="libs/bootstrap/bootstrap.css" rel="stylesheet">
        <script src="libs/jquery/jquery-3.3.1.min.js"></script>
        <script src="libs/bootstrap/bootstrap.js"></script>

    </head>
    <body>
    
    <?php require_once "templates/navbar.php" ?>

    <div id="carousel-id" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carousel-id" data-slide-to="0" class=""></li>
            <li data-target="#carousel-id" data-slide-to="1" class=""></li>
            <li data-target="#carousel-id" data-slide-to="2" class="active"></li>
        </ol>
        <div class="carousel-inner">
            <div class="item">
                <img data-src="text:First slide" alt="First slide" src="img/1750.jpg">
                <div class="container">
                    <div class="carousel-caption">
                        <h1>Bienvenido a nuestra comunidad!</h1>
                    </div>
                </div>
            </div>
            <div class="item">
                <img data-src="text:Second slide" alt="Second slide" src="img/2020.jpg">
                <div class="container">
                    <div class="carousel-caption">
                        <h1>Fantasticas casas</h1>
                    </div>
                </div>
            </div>
            <div class="item active">
                <img data-src="text:Third slide" alt="Third slide" src="img/30963.jpg">
                <div class="container">
                    <div class="carousel-caption">
                        <h1>¿Quieres unas vacaciones del sueño?</h1>
                    </div>
                </div>
            </div>
        </div>
        <a class="left carousel-control" href="#carousel-id" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
        <a class="right carousel-control" href="#carousel-id" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
    </div>

    <?php require_once "templates/footer.php" ?>
    </body>
</html>