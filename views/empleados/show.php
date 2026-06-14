<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datos del Empleado</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

<div class="container mt-4">

    <div class="card shadow">

        <div class="card-header bg-info text-white">
            <h3 class="mb-0">Datos del Empleado</h3>
        </div>

        <div class="card-body">

            <div class="row">

                <div class="col-md-4 text-center">

                    <?php if ($empleado['foto']) : ?>
                        <img src="uploads/<?= $empleado['foto'] ?>"
                            class="img-fluid img-thumbnail"
                            width="250">
                    <?php else : ?>
                        <p>Sin foto</p>
                    <?php endif; ?>

                </div>

                <div class="col-md-8">

                    <table class="table table-bordered">

                        <tr>
                            <th>Apellidos</th>
                            <td><?= $empleado['apellidos'] ?></td>
                        </tr>

                        <tr>
                            <th>Nombres</th>
                            <td><?= $empleado['nombres'] ?></td>
                        </tr>

                        <tr>
                            <th>Fecha de ingreso</th>
                            <td><?= $empleado['fecha_ingreso'] ?></td>
                        </tr>

                        <tr>
                            <th>Estado</th>
                            <td>
                                <?= $empleado['activo']
                                    ? '<span class="badge bg-success">Activo</span>'
                                    : '<span class="badge bg-danger">Inactivo</span>'
                                ?>
                            </td>
                        </tr>

                    </table>

                    <a href="index.php" class="btn btn-secondary">
                        Volver
                    </a>

                    <a href="index.php?action=edit&id=<?= $empleado['id'] ?>" class="btn btn-warning">
                        Editar
                    </a>

                </div>

            </div>

        </div>

    </div>

</div>

</body>
</html>
