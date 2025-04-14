<?php
include './cabecera.php';
require './config/db.php';

//si viene el parametro ci es edicion
$modoEdicion = isset($_GET['ci']);
$ci = $nombre = $correo = "";

if($modoEdicion){
    $ci_get = $_GET['ci'];
    $sql = "SELECT * FROM usuarios WHERE ci = '$ci_get' ";
    $resultado = $conn -> query($sql);

    if($resultado->num_rows > 0){
        $usuario = $resultado->fetch_assoc();
        $ci = $usuario["ci"];
        $nombre = $usuario["nombre"];
        $correo = $usuario["correo"];
    }
}


?>

<body>
    <h1><?= $modoEdicion ? 'Editar Usuario' : 'Agregar Usuario' ?></h1>
    <form action="<?= $modoEdicion ? './editar.php' : './agregar.php' ?>" method="GET">
        <label for="">ci</label>
        <input type="text" name="ci" value="<?= $ci ?>" <?= $modoEdicion ? 'readonly' : '' ?> >
        <label for="">Nombre</label>
        <input type="text" name="nombre" value="<?= $nombre ?>">
        <label for="">correo</label>
        <input type="email" name="correo" value="<?= $correo ?>">
        <input type="submit" class="btn btn-primary" value="<?= $modoEdicion ? 'Actualizar' : 'Enviar' ?>" name="enviar">
    </form>
    <?php
    require './config/db.php';
    ?>
</body>

</html>