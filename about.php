<?php 
    session_start();
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Sobre nosotros</title>

        <link href="css/style.css" rel="stylesheet">

        <link href="libs/bootstrap/bootstrap.css" rel="stylesheet">
        <script src="libs/jquery/jquery-3.3.1.min.js"></script>
        <script src="libs/bootstrap/bootstrap.js"></script>

    </head>
    <body>

        <?php require_once "templates/navbar.php" ?>

        <div class="panel panel-default panel-about">
              <div class="panel-heading">
                    <h3 class="panel-title">Sobre nosotros</h3>
              </div>
              <div class="panel-body">
                    Lorem ipsum...

                    <form action="about.php" method="POST" role="form">
                        <legend>¿Tienes mas dudas? Envianos un mensaje!</legend>
                    
                        <div class="form-group">
                            <label for="">Correo electronico</label>
                            <input type="text" class="form-control" name="email" id="email" placeholder="Input field">
                        </div>
                    
                        <div class="form-group">
                            <label for="">Comentarios</label>
                            <input type="text" class="form-control" name="comment" id="comment" placeholder="Input field">
                        </div>
                    
                        <button type="submit" class="btn btn-primary">Enviar</button>
                    </form>
                    
              </div>
        </div>
        

        <?php require_once "templates/footer.php" ?>

    </body>
</html>
