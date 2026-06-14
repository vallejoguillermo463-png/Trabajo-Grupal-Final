<?php

require_once 'config/database.php';
require_once 'models/Empleado.php';

class EmpleadoController
{

    private $modelo;

    public function __construct()
    {
        $db = new Database();
        $conexion = $db->conectar();

        $this->modelo = new Empleado($conexion);
    }

    public function index()
    {
        $empleados = $this->modelo->listar();
        include 'views/empleados/lista.php';
    }

    public function create()
    {
        include 'views/empleados/create.php';
    }

    public function store()
    {
        $nombreFoto = "";

        if (!empty($_FILES['foto']['name'])) {
            $nombreFoto = time() . "_" .$_FILES['foto']['name'];
            move_uploaded_file($_FILES['foto']['tmp_name'],"uploads/" . $nombreFoto);
        }

        $activo = isset($_POST['activo']) ? 1 : 0;

        $this->modelo->guardar(

            $_POST['apellidos'],
            $_POST['nombres'],
            $_POST['fecha_ingreso'],
            $nombreFoto,
            $activo

        );

        header("Location:index.php");
    }

    public function show($id)
    {
        $empleado = $this->modelo->buscar($id);
        include 'views/empleados/show.php';
    }

    public function edit($id)
    {
        $empleado = $this->modelo->buscar($id);
        include 'views/empleados/edit.php';
    }

    public function update()
    {
        $empleado =
            $this->modelo->buscar($_POST['id']);

        $fotoActual = $empleado['foto'];

        if (!empty($_FILES['foto']['name'])) {
            $fotoActual =
                time() . '_' . $_FILES['foto']['name'];

            move_uploaded_file(
                $_FILES['foto']['tmp_name'],
                'uploads/' . $fotoActual
            );
        }

        $activo =
            isset($_POST['activo']) ? 1 : 0;

        $this->modelo->actualizar(

            $_POST['id'],
            $_POST['apellidos'],
            $_POST['nombres'],
            $_POST['fecha_ingreso'],
            $fotoActual,
            $activo

        );

        header("Location:index.php");
    }

    public function delete($id)
    {
        $empleado =
            $this->modelo->buscar($id);

        if (
            !empty($empleado['foto']) &&
            file_exists(
                'uploads/' . $empleado['foto']
            )
        ) {
            unlink(
                'uploads/' . $empleado['foto']
            );
        }

        $this->modelo->eliminar($id);

        header("Location:index.php");
    }
}
