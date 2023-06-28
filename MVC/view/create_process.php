<?php
require_once '../controller/AutorController.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nombre_completo = $_POST['nombre_completo'];
    $apellido_completo = $_POST['apellido_completo'];
    $libro = $_POST['libro'];
    $fecha_prestamo = $_POST['fecha_prestamo'];
    $fecha_devolucion= $_POST['fecha_devolucion'];

    $controller = new AutorController();

    $result = $controller->crearAutor($nombre_completo,$apellido_completo,$libro,$fecha_prestamo,$fecha_devolucion);

    if ($result) {

        header('Location: index.php');
        exit();
    } else {

        echo 'Error al crear el Autor';
    }
} else {

    header('Location: index.php');
    exit();
}
