<?php
class AutorModel {
    private $db;

    public function __construct($db) {
        $this->db = $db;
    }

    public function getAutores() {
        $query = "SELECT * FROM prestamos";
        $result = $this->db->query($query);
        return $result->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getAutorById($id) {
        $query = "SELECT * FROM prestamos WHERE id = :id";
        $statement = $this->db->prepare($query);
        $statement->bindParam(':id', $id, PDO::PARAM_INT);
        $statement->execute();
        return $statement->fetch(PDO::FETCH_ASSOC);
    }

    public function crearAutor($nombre_completo,$apellido_completo,$libro,$fecha_prestamo,$fecha_devolucion) {
        $query = "INSERT INTO prestamos (nombre_completo,apellido_completo,libro,fecha_prestamo,fecha_devolucion) 
                  VALUES (:nombre_completo,:apellido_completo,:libro,:fecha_prestamo,:fecha_devolucion)";
        $statement = $this->db->prepare($query);
        $statement->bindParam(':nombre_completo', $nombre_completo, PDO::PARAM_STR);
        $statement->bindParam(':apellido_completo', $apellido_completo, PDO::PARAM_STR);
        $statement->bindParam(':libro', $libro, PDO::PARAM_STR);
        $statement->bindParam(':fecha_prestamo', $fecha_prestamo, PDO::PARAM_STR);
        $statement->bindParam(':fecha_devolucion', $fecha_devolucion, PDO::PARAM_STR);
        $statement->execute();
        return $this->db->lastInsertId();
    }

    public function actualizarAutor($id, $nombre_completo,$apellido_completo,$libro,$fecha_prestamo,$fecha_devolucion) {
        $query = "UPDATE prestamos SET nombre_completo = :nombre_completo, apellido_completo = :apellido_completo, libro = :libro, fecha_prestamo = :fecha_prestamo, fecha_devolucion = :fecha_devolucion
                  WHERE id = :id";
        $statement = $this->db->prepare($query);
        $statement->bindParam(':nombre_completo', $nombre_completo, PDO::PARAM_STR);
        $statement->bindParam(':apellido_completo', $apellido_completo, PDO::PARAM_STR);
        $statement->bindParam(':libro', $libro, PDO::PARAM_STR);
        $statement->bindParam(':fecha_prestamo', $fecha_prestamo, PDO::PARAM_STR);
        $statement->bindParam(':fecha_devolucion', $fecha_devolucion, PDO::PARAM_STR);
        $statement->bindParam(':id', $id, PDO::PARAM_INT);
        return $statement->execute();
    }

    public function eliminarAutor($id) {
        $query = "DELETE FROM prestamos WHERE id = :id";
        $statement = $this->db->prepare($query);
        $statement->bindParam(':id', $id, PDO::PARAM_INT);
        return $statement->execute();
    }
}
