<?php
    $host = 'localhost';
    $usuario = 'root';
    $password = "";
    $base_datos = "tareas";

    $conn = new mysqli($host,$usuario,$password,$base_datos);

    if($conn){
        echo 'conexion con base de datos exitosa';
    }else{
        echo 'fallida';
    }
?>