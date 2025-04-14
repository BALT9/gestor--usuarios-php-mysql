<?php
    require './config/db.php';
    if (isset($_GET["ci"])){
        $ci = $_GET["ci"];

        $sql = "DELETE FROM usuarios WHERE ci = '$ci' ";

        if($conn -> query($sql)){
            echo "usuario eliminado";
        }else{
            echo "error al eliminar";
        }
    }

    header("location: index.php");
?>