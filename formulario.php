<?php
include './cabecera.php';
?>

<body>
    <h1>agregar</h1>
    <form action="./agregar.php" method="GET">
        <label for="">ci</label>
        <input type="text" name="ci" value="">
        <label for="">Nombre</label>
        <input type="text" name="nombre" value="">
        <label for="">correo</label>
        <input type="email" name="correo" value="">
        <input type="submit" class="btn btn-primary" value="Enviar" name="enviar">
    </form>
    <?php
    require './config/db.php';
    ?>
</body>

</html>