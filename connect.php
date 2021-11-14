<?php
    //Definicion de los atributos necesarios para la conexion a la base de datos
    $cons_equipo="localhost";
    $cons_usuario="ProyectoHabitar";
    $cons_contrasenia="thechimango98";
    $cons_base_datos="proyectohabitar";

    try {
        //se realiza la conexion a la base de datos
        $obj_conexion = new mysqli($cons_equipo, $cons_usuario, $cons_contrasenia, $cons_base_datos);
        //se verifica que la conexion a la base de datos se realizara con exito
        if(!$obj_conexion)
        {
            echo '<script>alert("No se pudo establecer conexion con la base de datos.");</script>';
        }
    } catch (Exception $e) {
        echo $e->getMessage();
        die();
    }
?>