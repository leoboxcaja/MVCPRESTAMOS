<?php
class autorView {
    public function mostrarAutores($autores) {
        foreach ($autores as $autor) {
            echo "ID: " . $autor['id'] . "<br>";
            echo "Nombre: " . $autor['nombre_completo'] . "<br>";
            echo "Apellido_Completo: " . $autor['apellido_completo'] . "<br>";
            echo "Libro: " . $autor['libro'] . "<br>";
            echo "Fecha_Prestamo: " . $autor['fecha_prestamo'] . "<br>";
            echo "Fecha_Devolucion: " . $autor['fecha_devolucion'] . "<br>";
            echo "<br>";
        }
    }

    public function mostrarMensaje($mensaje) {
        echo $mensaje;
    }
}
