
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Log-In</title>

        <link href="css/style.css" rel="stylesheet">

        <link href="libs/bootstrap/bootstrap.css" rel="stylesheet">
        <script src="libs/jquery/jquery-3.3.1.min.js"></script>
        <script src="libs/bootstrap/bootstrap.js"></script>

    </head>
    <body>

        <?php require_once "templates/navbar.php" ?>

        <div class="login-pannel">
            <form action="login.php" method="POST" role="form">
                <legend>Log-In</legend>
            
                <div class="form-group">
                    <label for="">Usuario</label>
                    <input type="text" class="form-control" name="user" id="user" placeholder="Input field">
                </div>
            
                <div class="form-group">
                    <label for="">Contraseña</label>
                    <input type="password" class="form-control" name="password" id="password" placeholder="Input field">
                </div>
            
                <button type="submit" class="btn btn-primary btn-submit">Enviar</button>
            </form>
        </div>

        <br>

        <?php require_once "templates/footer.php" ?>

    </body>
</html>
