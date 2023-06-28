<?php
require '../controller/AutorController.php';

$controller = new AutorController();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];
    $nombre_completo = $_POST['nombre_completo'];
    $apellido_completo = $_POST['apellido_completo'];
    $libro = $_POST['libro'];
    $fecha_prestamo = $_POST['fecha_prestamo'];
    $fecha_devolucion = $_POST['fecha_devolucion'];
    $controller->actualizarAutor($id,$nombre_completo,$apellido_completo,$libro,$fecha_prestamo,$fecha_devolucion);
    header('Location: view.php');
    exit;
}

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $Autor = $controller->getAutorById($id);

    if (!$Autor) {
        die('Autor no encontrado');
    }
} else {
    die('ID de Autor no especificado');
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Editar Autor</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <h2 class="mt-4 mb-4">EDITAR PRESTAMO</h2>
        <form action="edit_process.php" method="POST">
            <input type="hidden" name="id" value="<?php echo $Autor['id']; ?>">
            <div class="form-group">
                <label>Nombre Completo:</label>
                <input type="text" name="nombre_completo" class="form-control" value="<?php echo $Autor['nombre_completo']; ?>" required>
            </div>
            <div class="form-group">
                <label>Apellido Completo:</label>
                <input type="text" name="apellido_completo" class="form-control" value="<?php echo $Autor['apellido_completo']; ?>" required>
            </div>
            <div class="form-group">
                <label>Libro:</label>
                <input type="text" name="libro" class="form-control" value="<?php echo $Autor['libro']; ?>">
            </div>
            <div class="form-group">
                <label>Fecha Prestamo:</label>
                <input type="text" name="fecha_prestamo" class="form-control" value="<?php echo $Autor['fecha_prestamo']; ?>">
            </div>
            <div class="form-group">
                <label>Fecha Devolucion:</label>
                <input type="text" name="fecha_devolucion" class="form-control" value="<?php echo $Autor['fecha_devolucion']; ?>">
            </div>
            <button type="submit" class="btn btn-primary">Actualizar</button>
        </form>
    </div>
</body>

</html>