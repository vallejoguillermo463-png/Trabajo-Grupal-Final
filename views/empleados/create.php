<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nuevo Empleado</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

<div class="container mt-4">

    <div class="card shadow">
        <div class="card-header bg-primary text-white">
            <h3 class="mb-0">Nuevo Empleado</h3>
        </div>

        <div class="card-body">

            <form action="index.php?action=store" method="POST" enctype="multipart/form-data">

                <div class="mb-3">
                    <label class="form-label">Apellidos</label>
                    <input type="text" name="apellidos" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Nombres</label>
                    <input type="text" name="nombres" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Fecha ingreso</label>
                    <input type="date" name="fecha_ingreso" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Foto</label>
                    <input type="file" name="foto" accept="image/*" class="form-control">
                </div>

                <div class="form-check mb-3">
                    <input class="form-check-input" type="checkbox" name="activo" checked>
                    <label class="form-check-label">
                        Activo
                    </label>
                </div>

                <button type="submit" class="btn btn-success">
                    Guardar
                </button>

                <a href="index.php" class="btn btn-secondary">
                    Cancelar
                </a>

            </form>

        </div>
    </div>

</div>

</body>
</html>