<?php 
    session_start();

    require_once "templates/db/db.php";
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Alojamientos</title>

        <link href="css/style.css" rel="stylesheet">

        <link href="libs/bootstrap/bootstrap.css" rel="stylesheet">
        <script src="libs/jquery/jquery-3.3.1.min.js"></script>
        <script src="libs/bootstrap/bootstrap.js"></script>

    </head>
    <body>

        <?php require_once "templates/navbar.php" ?>

        <?php 
            $query = "SELECT C1, C3 FROM `Alojamientos`";
            $result = mysqli_query($conn, $query);

            while($row = mysqli_fetch_array($result)) {
        ?>
        <div class="panel panel-default panel-about">
            <div class="panel-heading">
                    <h3 class="panel-title"><?php echo $row['C1'] ?></h3>
            </div>
            <div class="panel-body">
                    <div class="img-panel">
                        <img src="img/hoteles/4061.jpg">
                    </div>
                    <div class="text-panel">
                        <?php echo $row['C3'] ?>
                    </div>
            </div>
        </div>

        <?php } ?>

        <?php require_once "templates/footer.php" ?>

    </body>
</html>
