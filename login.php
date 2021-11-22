<?php
    //Conectamos con la base de datos
    include('connect.php');
    session_start();

    //Obtenemos el usuario y contraseña del inicio de secion
    $usuario = $_POST['usuario'];
    $contrasenia = $_POST['contrasenia'];

    //Preparamos la consulta
    $query = "SELECT COUNT(*) AS contar FROM usuarios WHERE usuario = '$usuario' AND contrasenia = '$contrasenia'";
    //Se realiza la consulta
    $consulta = mysqli_query($conexion, $query) or die( mysqli_error($conexion));
    $arrayResultado = mysqli_fetch_array($consulta);
    
    if ($arrayResultado['contar'] > 0) {
        $_SESSION['nombreUsuario'] = $usuario;

        //Se busca el nombre y apellido del usuario
        $query = "SELECT nombre, apellido FROM usuarios WHERE usuario = '$usuario' AND contrasenia = '$contrasenia'";
        $consulta = mysqli_query($conexion, $query) or die( mysqli_error($conexion));
        $arrayResultado = mysqli_fetch_array($consulta);
        
        $nombre = $arrayResultado['nombre'] . ' ' . $arrayResultado['apellido'];
        $_SESSION['nombre'] = $nombre;

        header("location: /index.php");
    } else {
        $error = 1;
        header("location: /index-IniciarSesion.php?varError=$error");
    }
?>