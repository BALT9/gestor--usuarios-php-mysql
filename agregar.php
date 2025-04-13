<?php
    require './config/db.php';
    $ci = $_GET["ci"];
    $nombre = $_GET["nombre"];
    $correo = $_GET["correo"];
    
    echo "<h1>$ci</h1>";
    echo "<h1>$nombre</h1>";
    echo "<h1>$correo</h1>";

    //preparar la consulta insert
    $sql = "INSERT INTO usuarios(ci,nombre,correo) VALUES ('$ci','$nombre','$correo')";

    if($conn->query($sql)){
        echo "se agrego a la base de datos";
    }else{
        echo "error al agregar";
    }

    header("location: index.php");
?>