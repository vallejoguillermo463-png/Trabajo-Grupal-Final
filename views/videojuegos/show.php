<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalles del Videojuego</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

<div class="container mt-4">

    <div class="card shadow">

        <div class="card-header bg-info text-white">
            <h3 class="mb-0">🎮 Detalles del Videojuego</h3>
        </div>

        <div class="card-body">

            <div class="row">

                <div class="col-md-4 text-center">

                    <?php if ($videojuego['imagen']) : ?>
                        <img src="uploads/<?= $videojuego['imagen'] ?>"
                            class="img-fluid img-thumbnail"
                            width="250">
                    <?php else : ?>
                        <p>Sin imagen</p>
                    <?php endif; ?>

                </div>

                <div class="col-md-8">

                    <table class="table table-bordered">

                        <tr>
                            <th>Nombre</th>
                            <td><?= $videojuego['nombre'] ?></td>
                        </tr>

                        <tr>
                            <th>Género</th>
                            <td><?= $videojuego['genero'] ?></td>
                        </tr>

                        <tr>
                            <th>Precio</th>
                            <td>$ <?= $videojuego['precio'] ?></td>
                        </tr>

                        <tr>
                            <th>Fecha de lanzamiento</th>
                            <td><?= $videojuego['fecha_lanzamiento'] ?></td>
                        </tr>

                        <tr>
                            <th>Stock</th>
                            <td>
                                <?= $videojuego['stock']
                                    ? '<span class="badge bg-success">Disponible</span>'
                                    : '<span class="badge bg-danger">Agotado</span>'
                                ?>
                            </td>
                        </tr>

                    </table>

                    <a href="index.php" class="btn btn-secondary">
                        Volver
                    </a>

                    <a href="index.php?action=edit&id=<?= $videojuego['id'] ?>"
                        class="btn btn-warning">
                        Editar
                    </a>

                </div>

            </div>

        </div>

    </div>

</div>

</body>
</html>