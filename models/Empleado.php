<?php

class Empleado
{
  private $conn;
  private $tabla = "emple"; //SE CAMBIA POR EL NOMBRE DE LA TABLA EN LA BASE DE DATOS

  public function __construct($db)
  {
    $this->conn = $db;
  }

  // LISTAR
  public function listar()
  {
    $sql = "SELECT * FROM {$this->tabla}";
    $stmt = $this->conn->prepare($sql);
    $stmt->execute();
    return $stmt;
  }

  // BUSCAR POR ID
  public function buscar($id)
  {
    $sql = "SELECT * FROM {$this->tabla} WHERE id = :id";
    $stmt = $this->conn->prepare($sql);
    $stmt->bindParam(':id', $id, PDO::PARAM_INT);
    $stmt->execute();
    return $stmt->fetch(PDO::FETCH_ASSOC);
  }

  // INSERTAR
  public function guardar(
    $apellidos,
    $nombres,
    $fecha_ingreso,
    $foto,
    $activo
  ) {
    $sql = "INSERT INTO {$this->tabla} (apellidos,nombres,fecha_ingreso,foto,activo)
            VALUES(:apellidos,:nombres,:fecha_ingreso,:foto,:activo)";

    $stmt = $this->conn->prepare($sql);
    $stmt->bindParam(':apellidos', $apellidos, PDO::PARAM_STR);
    $stmt->bindParam(':nombres', $nombres, PDO::PARAM_STR);
    $stmt->bindParam(':fecha_ingreso', $fecha_ingreso, PDO::PARAM_STR);
    $stmt->bindParam(':foto', $foto, PDO::PARAM_STR);
    $stmt->bindParam(':activo', $activo, PDO::PARAM_INT);
    return $stmt->execute();
  }

  // ACTUALIZAR
  public function actualizar(
    $id,
    $apellidos,
    $nombres,
    $fecha_ingreso,
    $foto,
    $activo
  ) {
    $sql = "UPDATE {$this->tabla} SET
                apellidos      = :papellidos,
                nombres        = :pnombres,
                fecha_ingreso  = :pfecha_ingreso,
                foto           = :pfoto,
                activo         = :pactivo
            WHERE id = :pid";

    $stmt = $this->conn->prepare($sql);
    $stmt->bindParam(':pid', $id, PDO::PARAM_INT);
    $stmt->bindParam(':papellidos', $apellidos, PDO::PARAM_STR);
    $stmt->bindParam(':pnombres', $nombres, PDO::PARAM_STR);
    $stmt->bindParam(':pfecha_ingreso', $fecha_ingreso, PDO::PARAM_STR);
    $stmt->bindParam(':pfoto', $foto, PDO::PARAM_STR);
    $stmt->bindParam(':pactivo', $activo, PDO::PARAM_INT);
    return $stmt->execute();
  }

  // ELIMINAR
  public function eliminar($id)
  {
    $sql = "DELETE FROM emple WHERE id = :id";
    $stmt = $this->conn->prepare($sql);
    $stmt->bindParam(':id', $id, PDO::PARAM_INT);
    return $stmt->execute();
  }
}
