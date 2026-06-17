<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nuevo Videojuego</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

<div class="container mt-4">

    <div class="card shadow">

        <div class="card-header bg-success text-white">
            <h3 class="mb-0">🎮 Nuevo Videojuego</h3>
        </div>

        <div class="card-body">

            <form action="index.php?action=store" method="POST" enctype="multipart/form-data">

                <div class="mb-3">
                    <label class="form-label">Nombre del videojuego</label>
                    <input type="text" name="nombre" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Género</label>
                    <input type="text" name="genero" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Precio</label>
                    <input type="number" step="0.01" name="precio" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Fecha de lanzamiento</label>
                    <input type="date" name="fecha_lanzamiento" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Imagen</label>
                    <input type="file" name="imagen" accept="image/*" class="form-control">
                </div>

                <div class="form-check mb-3">
                    <input class="form-check-input" type="checkbox" name="stock" checked>

                    <label class="form-check-label">
                        Disponible en stock
                    </label>
                </div>

                <button type="submit" class="btn btn-success">
                    Guardar Videojuego
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