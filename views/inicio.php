<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Gestión de Videojuegos</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">

    <div class="container">

        <a class="navbar-brand" href="index.php">
            🎮 Sistema de Videojuegos
        </a>

        <div class="navbar-nav ms-auto">

            <a class="nav-link" href="index.php">
                Inicio
            </a>

            <a class="nav-link" href="index.php?action=lista">
                CRUD Videojuegos
            </a>

        </div>

    </div>

</nav>

<div class="container mt-5">

    <div class="card shadow">

        <div class="card-header bg-primary text-white text-center">
            <h1>🎮 Sistema de Gestión de Videojuegos</h1>
        </div>

        <div class="card-body">

            <div class="text-center mb-4">
                <img src="uploads/portada.png"
                    class="img-fluid rounded shadow"
                    alt="Sistema de Gestión de Videojuegos">
            </div>

            <h3 class="text-center mb-4">
                Taller Práctico Grupal
            </h3>

            <table class="table table-bordered">

                <tr>
                    <th>Institución</th>
                    <td>INSTITUO TECNOLÓGICO SUPERIOR IBARRA</td>
                </tr>

                <tr>
                    <th>Carrera</th>
                    <td>Desarrollo de Software - Online</td>
                </tr>

                <tr>
                    <th>Integrantes</th>
                    <td>Guillermo Vallejo y Stiven Vallejo</td>
                </tr>

                <tr>
                    <th>Docente</th>
                    <td>René Pilataxi</td>
                </tr>

            </table>

            <div class="text-center mt-4">

                <a href="index.php?action=lista"
                    class="btn btn-success btn-lg">

                    Ingresar al Sistema

                </a>

            </div>

        </div>

    </div>

</div>

</body>
</html>