<?php
    //Definicion de los atributos necesarios para la conexion a la base de datos.
    $cons_Server="localhost";
    $cons_Usuario="root";
    $cons_DataBase="ProyectoHabitar";

    //se realiza la conexion a la base de datos.
    $conexion = new mysqli($cons_Server, $cons_Usuario, "", $cons_DataBase);
    
    //Se verifica que la conexion se haya realisado correctamente.
    if($conexion -> connect_errno) {
        echo'<script type="text/javascript">
        alert("Problema al conectarse con la base de datos: Error '.$conexion -> connect_errno.'");</script>';
    }

?>