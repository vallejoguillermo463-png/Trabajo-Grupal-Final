<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Gestión de Videojuegos</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.8/css/dataTables.bootstrap5.min.css">
</head>

<body>

<div class="container mt-4">

    <h2 class="mb-4 text-primary">🎮 Sistema de Gestión de Videojuegos</h2>

    <a href="index.php?action=create" class="btn btn-success mb-3">
        Nuevo Videojuego
    </a>

    <table id="tablaVideojuegos" class="table table-bordered table-striped table-hover align-middle">

        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Imagen</th>
                <th>Nombre</th>
                <th>Género</th>
                <th>Precio</th>
                <th>Lanzamiento</th>
                <th>Stock</th>
                <th>Acciones</th>
            </tr>
        </thead>

        <tbody>

        <?php while ($row = $videojuegos->fetch(PDO::FETCH_ASSOC)): ?>

            <tr>

                <td><?= $row['id'] ?></td>

                <td>
                    <?php if ($row['imagen']) : ?>
                        <img src="uploads/<?= $row['imagen'] ?>" width="70" class="img-thumbnail">
                    <?php endif; ?>
                </td>

                <td><?= $row['nombre'] ?></td>

                <td><?= $row['genero'] ?></td>

                <td>$ <?= $row['precio'] ?></td>

                <td><?= $row['fecha_lanzamiento'] ?></td>

                <td>
                    <?= $row['stock']
                        ? '<span class="badge bg-success">Disponible</span>'
                        : '<span class="badge bg-danger">Agotado</span>'
                    ?>
                </td>

                <td>

                    <a href="index.php?action=show&id=<?= $row['id'] ?>"
                        class="btn btn-info btn-sm">
                        Ver
                    </a>

                    <a href="index.php?action=edit&id=<?= $row['id'] ?>"
                        class="btn btn-warning btn-sm">
                        Editar
                    </a>

                    <a href="index.php?action=delete&id=<?= $row['id'] ?>"
                        class="btn btn-danger btn-sm btn-eliminar">
                        Eliminar
                    </a>

                </td>

            </tr>

        <?php endwhile; ?>

        </tbody>

    </table>

</div>

<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

<script src="https://cdn.datatables.net/1.13.8/js/jquery.dataTables.min.js"></script>

<script src="https://cdn.datatables.net/1.13.8/js/dataTables.bootstrap5.min.js"></script>

<script>
$(document).ready(function () {
    $('#tablaVideojuegos').DataTable({
        language: {
            url: '//cdn.datatables.net/plug-ins/1.13.8/i18n/es-ES.json'
        }
    });
});
</script>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
document.querySelectorAll('.btn-eliminar').forEach(boton => {

    boton.addEventListener('click', function(e) {

        e.preventDefault();

        const enlace = this.href;

        Swal.fire({
            title: '¿Eliminar videojuego?',
            text: 'Esta acción no se puede deshacer',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#d33',
            cancelButtonColor: '#6c757d',
            confirmButtonText: 'Sí, eliminar',
            cancelButtonText: 'Cancelar'
        }).then((result) => {

            if (result.isConfirmed) {
                window.location.href = enlace;
            }

        });

    });

});
</script>

<?php if(isset($_GET['mensaje'])): ?>

<script>

<?php if($_GET['mensaje']=="creado"): ?>

Swal.fire({
    icon:'success',
    title:'Videojuego agregado',
    text:'El registro se guardó correctamente',
    timer:2000,
    showConfirmButton:false
});

<?php endif; ?>

<?php if($_GET['mensaje']=="actualizado"): ?>

Swal.fire({
    icon:'success',
    title:'Videojuego actualizado',
    text:'Los cambios fueron guardados correctamente',
    timer:2000,
    showConfirmButton:false
});

<?php endif; ?>

<?php if($_GET['mensaje']=="eliminado"): ?>

Swal.fire({
    icon:'success',
    title:'Videojuego eliminado',
    text:'El registro fue eliminado correctamente',
    timer:2000,
    showConfirmButton:false
});

<?php endif; ?>

</script>

<?php endif; ?>

</body>

</html>
