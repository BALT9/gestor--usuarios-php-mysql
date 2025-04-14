<?php
require './config/db.php';

if (isset($_GET["ci"], $_GET["nombre"], $_GET["correo"])) {
    $ci = $_GET["ci"];
    $nombre = $_GET["nombre"];
    $correo = $_GET["correo"];

    $sql = "UPDATE usuarios SET nombre = '$nombre', correo = '$correo' WHERE ci = '$ci'";

    if ($conn->query($sql)) {
        echo "Usuario actualizado correctamente";

        header('location: index.php');
    } else {
        echo "Error al actualizar usuario";
    }
} else {
    echo "Faltan datos";
}
?>
