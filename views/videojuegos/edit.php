<!DOCTYPE html>
<html lang="es">

<head>
       <meta charset="UTF-8">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <title>Editar Videojuego</title>

       <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

<div class="container mt-4">

       <div class="card shadow">

              <div class="card-header bg-warning">
                     <h3 class="mb-0">🎮 Editar Videojuego</h3>
              </div>

              <div class="card-body">

                     <form action="index.php?action=update" method="POST" enctype="multipart/form-data">

                            <input type="hidden" name="id" value="<?= $videojuego['id'] ?>">

                            <div class="mb-3">
                                   <label class="form-label">Nombre</label>
                                   <input type="text"
                                          name="nombre"
                                          value="<?= $videojuego['nombre'] ?>"
                                          class="form-control"
                                          required>
                            </div>

                            <div class="mb-3">
                                   <label class="form-label">Género</label>
                                   <input type="text"
                                          name="genero"
                                          value="<?= $videojuego['genero'] ?>"
                                          class="form-control"
                                          required>
                            </div>

                            <div class="mb-3">
                                   <label class="form-label">Precio</label>
                                   <input type="number"
                                          step="0.01"
                                          name="precio"
                                          value="<?= $videojuego['precio'] ?>"
                                          class="form-control"
                                          required>
                            </div>

                            <div class="mb-3">
                                   <label class="form-label">Fecha de lanzamiento</label>
                                   <input type="date"
                                          name="fecha_lanzamiento"
                                          value="<?= $videojuego['fecha_lanzamiento'] ?>"
                                          class="form-control"
                                          required>
                            </div>

                            <?php if ($videojuego['imagen']) : ?>
                                   <div class="mb-3">
                                          <label class="form-label">Imagen actual</label>
                                          <br>
                                          <img src="uploads/<?= $videojuego['imagen'] ?>"
                                                 width="120"
                                                 class="img-thumbnail">
                                   </div>
                            <?php endif; ?>

                            <div class="mb-3">
                                   <label class="form-label">Cambiar imagen</label>
                                   <input type="file"
                                          name="imagen"
                                          class="form-control">
                            </div>

                            <div class="form-check mb-3">

                                   <input class="form-check-input"
                                          type="checkbox"
                                          name="stock"
                                          <?= $videojuego['stock'] ? 'checked' : '' ?>>

                                   <label class="form-check-label">
                                          Disponible en stock
                                   </label>

                            </div>

                            <button type="submit" class="btn btn-warning">
                                   Actualizar
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