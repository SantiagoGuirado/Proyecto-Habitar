<?php
    session_start();
    //Se cierra la sesión
    session_destroy();
    header("location: /index.php");
    exit();
?>