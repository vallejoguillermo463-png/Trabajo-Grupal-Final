<?php

class Videojuego
{
    private $conn;
    private $tabla = "videojuegos";

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
        $nombre,
        $genero,
        $precio,
        $fecha_lanzamiento,
        $imagen,
        $stock
    ) {

        $sql = "INSERT INTO {$this->tabla}
                (nombre,genero,precio,fecha_lanzamiento,imagen,stock)
                VALUES
                (:nombre,:genero,:precio,:fecha_lanzamiento,:imagen,:stock)";

        $stmt = $this->conn->prepare($sql);

        $stmt->bindParam(':nombre', $nombre);
        $stmt->bindParam(':genero', $genero);
        $stmt->bindParam(':precio', $precio);
        $stmt->bindParam(':fecha_lanzamiento', $fecha_lanzamiento);
        $stmt->bindParam(':imagen', $imagen);
        $stmt->bindParam(':stock', $stock);

        return $stmt->execute();
    }

    // ACTUALIZAR
    public function actualizar(
        $id,
        $nombre,
        $genero,
        $precio,
        $fecha_lanzamiento,
        $imagen,
        $stock
    ) {

        $sql = "UPDATE {$this->tabla} SET

                nombre              = :pnombre,
                genero              = :pgenero,
                precio              = :pprecio,
                fecha_lanzamiento   = :pfecha,
                imagen              = :pimagen,
                stock               = :pstock

                WHERE id = :pid";

        $stmt = $this->conn->prepare($sql);

        $stmt->bindParam(':pid', $id);
        $stmt->bindParam(':pnombre', $nombre);
        $stmt->bindParam(':pgenero', $genero);
        $stmt->bindParam(':pprecio', $precio);
        $stmt->bindParam(':pfecha', $fecha_lanzamiento);
        $stmt->bindParam(':pimagen', $imagen);
        $stmt->bindParam(':pstock', $stock);

        return $stmt->execute();
    }

    // ELIMINAR
    public function eliminar($id)
    {
        $sql = "DELETE FROM videojuegos WHERE id = :id";

        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':id', $id);

        return $stmt->execute();
    }
}