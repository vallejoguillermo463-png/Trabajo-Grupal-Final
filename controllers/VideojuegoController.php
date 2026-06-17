<?php

require_once 'config/database.php';
require_once 'models/Videojuego.php';

class VideojuegoController
{
    private $modelo;

    public function __construct()
    {
        $db = new Database();
        $conexion = $db->conectar();

        $this->modelo = new Videojuego($conexion);
    }

    public function index()
    {
        $videojuegos = $this->modelo->listar();
        include 'views/videojuegos/lista.php';
    }

    public function create()
    {
        include 'views/videojuegos/create.php';
    }

    public function store()
    {
        $nombreImagen = "";

        if (!empty($_FILES['imagen']['name'])) {

            $nombreImagen =
                time() . "_" . $_FILES['imagen']['name'];

            move_uploaded_file(
                $_FILES['imagen']['tmp_name'],
                "uploads/" . $nombreImagen
            );
        }

        $stock = isset($_POST['stock']) ? 1 : 0;

        $this->modelo->guardar(

            $_POST['nombre'],
            $_POST['genero'],
            $_POST['precio'],
            $_POST['fecha_lanzamiento'],
            $nombreImagen,
            $stock

        );

        header("Location:index.php?action=lista&mensaje=creado");
    }

    public function show($id)
    {
        $videojuego = $this->modelo->buscar($id);
        include 'views/videojuegos/show.php';
    }

    public function edit($id)
    {
        $videojuego = $this->modelo->buscar($id);
        include 'views/videojuegos/edit.php';
    }

    public function update()
    {
        $videojuego =
            $this->modelo->buscar($_POST['id']);

        $imagenActual =
            $videojuego['imagen'];

        if (!empty($_FILES['imagen']['name'])) {

            $imagenActual =
                time() . "_" . $_FILES['imagen']['name'];

            move_uploaded_file(
                $_FILES['imagen']['tmp_name'],
                "uploads/" . $imagenActual
            );
        }

        $stock =
            isset($_POST['stock']) ? 1 : 0;

        $this->modelo->actualizar(

            $_POST['id'],
            $_POST['nombre'],
            $_POST['genero'],
            $_POST['precio'],
            $_POST['fecha_lanzamiento'],
            $imagenActual,
            $stock

        );

        header("Location:index.php?action=lista&mensaje=actualizado");
    }

    public function delete($id)
    {
        $videojuego =
            $this->modelo->buscar($id);

        if (
            !empty($videojuego['imagen']) &&
            file_exists('uploads/' . $videojuego['imagen'])
        ) {
            unlink('uploads/' . $videojuego['imagen']);
        }

        $this->modelo->eliminar($id);

        header("Location:index.php?action=lista&mensaje=eliminado");
    }
}