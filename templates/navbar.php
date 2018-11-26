<nav class="navbar custom-navbar" role="navigation">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="index.php"><b>Comunidad Islas Baleares</b></a>
    </div>

    <div class="collapse navbar-collapse navbar-ex1-collapse">
        <ul class="nav navbar-nav">
            <li class="active"><a href="index.php">Inicio</a></li>
            <li><a href="alojamientos.php">Alojamientos</a></li>
            <li><a href="#">Ofertas</a></li>

            <form class="navbar-form navbar-left" role="search">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Search">
                </div>
                <button type="submit" class="btn btn-default">Buscar</button>
            </form>
        </ul>
        <ul class="nav navbar-nav navbar-right">
            <li><a href="about.php">Sobre nosotros</a></li>
            <?php
                if(!isset($_SESSION['email'])) {
            ?>
            <li><a href="registrarse.php">Registrarse</a></li>
            <li><a href="login.php">Log-In</a></li>
            <?php 
                } else {
            ?>
            <li><a href="#">Buenos dias, <?php echo $_SESSION['name'] ?></a></li>
            <li><a href="logout.php">Log-Out</a></li>
            <?php 
                }
            ?>
        </ul>
    </div>
</nav>