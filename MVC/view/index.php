<?php
require_once '../controller/AutorController.php';
require_once 'AutorView.php';

$controller = new AutorController();
$view = new AutorView();

// Obtener todos los Autores
$Autores = $controller->getAutores();
?>

<!DOCTYPE html>
<html>

<head>
    <title>Lista de Autores</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <h2 class="mt-4 mb-4">LISTA DE PRESTAMOS</h2>
        <a href="create.php" class="btn btn-primary mb-4">Crear Autor</a>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre Completo</th>
                    <th>Apellido Completo</th>
                    <th>Libro</th>
                    <th>Fecha Prestamo</th>
                    <th>Fecha Prestamo</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($Autores as $Autor) : ?>
                    <tr>
                        <td><?php echo $Autor['id']; ?></td>
                        <td><?php echo $Autor['nombre_completo']; ?></td>
                        <td><?php echo $Autor['apellido_completo']; ?></td>
                        <td><?php echo $Autor['libro']; ?></td>
                        <td><?php echo $Autor['fecha_prestamo']; ?></td>
                        <td><?php echo $Autor['fecha_devolucion']; ?></td>
                        <td>
                            <a href="edit.php?id=<?php echo $Autor['id']; ?>" class="btn btn-sm btn-info">Editar</a>
                            <a href="delete.php?id=<?php echo $Autor['id']; ?>" class="btn btn-sm btn-danger">Eliminar</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>

</html>