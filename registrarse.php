<?php 
    session_start();

    require_once "templates/db/db.php";

    if(isset($_SESSION['email'])) {
        header("Location:index.php");
    }

    if(isset($_REQUEST['name']) && isset($_REQUEST['surname']) && isset($_REQUEST['telephone']) && isset($_REQUEST['password']) && isset($_REQUEST['email']) && isset($_REQUEST['dni'])) {
        $insert = "INSERT INTO `Usuarios`(`nom`, `llinatges`, `dni`, `telefon`, `email`, `password`) VALUES ('" . $_REQUEST['name'] . "', '" . $_REQUEST['surname'] . "', '" . $_REQUEST['dni'] . "', '" . $_REQUEST['telephone'] . "', '" . $_REQUEST['email'] . "', '" . $_REQUEST['password']. "')";
        mysqli_query($conn, $insert);
        header("Location:index.php");
    }
    
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Registrarse</title>

        <link href="css/style.css" rel="stylesheet">

        <link href="libs/bootstrap/bootstrap.css" rel="stylesheet">
        <script src="libs/jquery/jquery-3.3.1.min.js"></script>
        <script src="libs/bootstrap/bootstrap.js"></script>

    </head>
    <body>

        <?php require_once "templates/navbar.php" ?>

        <div class="login-pannel">
            <form action="registrarse.php" method="POST" role="form">
                <legend>Registrarse</legend>
            
                <div class="form-group">
                    <label for="">Nombre</label>
                    <input type="text" class="form-control" name="name" id="name" placeholder="Input field" required>
                </div>

                <div class="form-group">
                    <label for="">Apellidos</label>
                    <input type="text" class="form-control" name="surname" id="name" placeholder="Input field" required>
                </div>

                <div class="form-group">
                    <label for="">Telefono</label>
                    <input type="text" class="form-control" name="telephone" id="telephone" placeholder="Input field" required>
                </div>
            
                <div class="form-group">
                    <label for="">Contraseña</label>
                    <input type="password" class="form-control" name="password" id="password" placeholder="Input field" required>
                </div>

                <div class="form-group">
                    <label for="">Correo Electronico</label>
                    <input type="text" class="form-control" name="email" id="email" placeholder="Input field" required>
                </div>

                <div class="form-group">
                    <label for="">DNI</label>
                    <input type="text" class="form-control" name="dni" id="dni" placeholder="Input field" required>
                </div>
            
                <button type="submit" class="btn btn-primary btn-submit">Enviar</button>
            </form>
        </div>

        <br>

        <?php require_once "templates/footer.php" ?>

    </body>
</html>
