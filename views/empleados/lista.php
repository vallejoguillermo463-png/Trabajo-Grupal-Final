<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Empleados</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

<div class="container mt-4">

    <h2 class="mb-4">Sistema de Gestión de Empleados</h2>

    <a href="index.php?action=create" class="btn btn-primary mb-3">
        Nuevo Empleado
    </a>

    <table class="table table-bordered table-striped table-hover align-middle">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Foto</th>
                <th>Apellidos</th>
                <th>Nombres</th>
                <th>Ingreso</th>
                <th>Estado</th>
                <th>Acciones</th>
            </tr>
        </thead>

        <tbody>

        <?php while ($row = $empleados->fetch(PDO::FETCH_ASSOC)): ?>

            <tr>
                <td><?= $row['id'] ?></td>

                <td>
                    <?php if ($row['foto']) : ?>
                        <img src="uploads/<?= $row['foto'] ?>" width="70" class="img-thumbnail">
                    <?php endif; ?>
                </td>

                <td><?= $row['apellidos'] ?></td>
                <td><?= $row['nombres'] ?></td>
                <td><?= $row['fecha_ingreso'] ?></td>

                <td>
                    <?=
                    $row['activo']
                    ? '<span class="badge bg-success">Activo</span>'
                    : '<span class="badge bg-danger">Inactivo</span>'
                    ?>
                </td>

                <td>
                    <a href="index.php?action=show&id=<?= $row['id'] ?>" class="btn btn-info btn-sm">
                        Ver
                    </a>

                    <a href="index.php?action=edit&id=<?= $row['id'] ?>" class="btn btn-warning btn-sm">
                        Editar
                    </a>

                    <a href="index.php?action=delete&id=<?= $row['id'] ?>" class="btn btn-danger btn-sm">
                        Eliminar
                    </a>
                </td>
            </tr>

        <?php endwhile; ?>

        </tbody>

    </table>

</div>

</body>
</html>