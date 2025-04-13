<?php
include './cabecera.php';
include './config/db.php';

$sql = "SELECT * FROM  usuarios";

$datos = $conn->query($sql);
?>

<body>

    <h1>AGREGAR USUARIO</h1>
    <a class="btn btn-primary" data-bs-toggle="offcanvas" href="./formulario.php" role="button" aria-controls="offcanvasExample">
        Agregar Usuario
    </a>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">ci</th>
                <th scope="col">nombre</th>
                <th scope="col">correo</th>
            </tr>
        </thead>
        <tbody>
            <?php if ($datos->num_rows > 0) :
                while($fila = $datos->fetch_assoc()): ?>
                    <tr>
                        <th scope="row">1</th>
                        <td><?= $fila["ci"] ?></td>
                        <td><?= $fila["nombre"] ?></td>
                        <td><?= $fila["correo"] ?></td>
                    </tr>
                <?php endwhile; ?>
                <?php else:
                    echo "<h1>No hay usuarios registrados</h1>"; ?>
            <?php endif; ?>
        </tbody>
    </table>

            


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
</body>

</html>