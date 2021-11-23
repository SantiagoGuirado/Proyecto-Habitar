<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Inmobiliaria Habitar</title>
        <link rel="shortcut icon" href="Recursos/inicio.jpg">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
        <link href="styles.css" rel="stylesheet" type="text/css" media="all">
    </head>

    <?php
        session_start();
    ?>

    <body class="row">
        <!--Columna izquierda-->
        <div class="col-xl-1"></div>
        <!--Contenido de la pagina-->
        <div class="col-xl-10">
            <header>
                <img src="Recursos/LogoPagina.png" alt="">
            </header>
    
            <nav class="navbar navbar-expand navbar-light bg-light">
                <div class="container-fluid">
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="index.php">Inicio</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Inmuebles
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item" href="index-InmueblesBuscar.php">Buscar</a></li>
                                    <?php
                                        if (isset($_SESSION['nombreUsuario']) && !$_SESSION['nombreUsuario'] == "") {
                                            echo '
                                            <li><a class="dropdown-item" href="index-InmueblesAgregarNuevo.php">Agregar Nuevo</a></li>
                                            ';
                                        }
                                    ?>
                                </ul>   
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Clientes
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item" href="index-ClientesBuscar.php">Buscar</a></li>
                                    <?php
                                        if (isset($_SESSION['nombreUsuario']) && !$_SESSION['nombreUsuario'] == "") {
                                            echo '
                                            <li><a class="dropdown-item" href="index-ClientesAgregarNuevo.php">Agregar Nuevo</a></li>
                                            ';
                                        }
                                    ?>
                                </ul>   
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="index-QuienesSomos.php">¿Quienes Somos?</a>
                            </li>
                        </ul>
                        <form class="d-flex">
                            <?php
                                if (isset($_SESSION['nombreUsuario'])) {
                                    if (!$_SESSION['nombreUsuario'] == "") {
                                        echo '
                                        <div class="dropdown">
                                            <button class="btn btn-primary dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            ' . $_SESSION['nombreUsuario'] . '
                                            </button>
                                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                                <li><a class="dropdown-item disabled">' .  $_SESSION['nombre'] . '</a></li>
                                                <li><a class="dropdown-item" href="cerrarSesion.php">Cerrar Sesión</a></li>
                                            </ul>
                                        </div>
                                        '; 
                                    }
                                } else {
                                    echo '<a class="btn nav-link" href="index-IniciarSesion.php">Iniciar Sesion</a>';
                                }
                            ?>
                        </form>
                    </div>
                </div>
            </nav>
    
            <div id="separador"></div>

            <main>
                
            </main>
    
            <div id="separador"></div>

            <footer>
                <div class="row">
                    <div class="col-4" id="footerCenter">
                        <p>&copy; Derechos Reservados 2021</p>
                    </div>
                    <div class="col-4" id="footerCenter">
                        <p>
                            Contactate con los <a href="">desarrolladores</a>.
                        </p>
                    </div>
                    <div class="col-4" id="footerCenter">
                        <span>Seguinos en:</span>
                        <img src="Recursos/facebook.png" alt="">
                        <img src="Recursos/twitter.png" alt="">
                        <img src="Recursos/instagram.png" alt="">
                    </div>
                </div>
            </footer>
        </div>
        <!--Columna derecha-->
        <div class="col-xl-1"></div>
    </body>
</html>