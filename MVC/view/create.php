<!DOCTYPE html>
<html>

<head>
    <title>Crear Autor</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <h2 class="mt-4 mb-4">CREAR PRESTAMO</h2>
        <form action="create_process.php" method="POST">
            <div class="form-group">
                <label>Nombre completo:</label>
                <input type="text" name="nombre_completo" class="form-control" required>
            </div>
            <div class="form-group">
                <label>Apellido Completo:</label>
                <input type="text" name="apellido_completo" class="form-control" required>
            </div>
            <div class="form-group">
                <label>Libro:</label>
                <input type="text" name="libro" class="form-control">
            </div>
            <div class="form-group">
                <label>Fecha Prestamo:</label>
                <input type="text" name="fecha_prestamo" class="form-control">
            </div>
            <div class="form-group">
                <label>Fecha Devolucion:</label>
                <input type="text" name="fecha_devolucion" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary">Crear</button>
        </form>
    </div>
</body>

</html>