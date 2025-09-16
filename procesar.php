<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $curso = $_POST["curso"];
    $numero = $_POST["numero"];

    $cubo = pow($numero, 3);

    echo "<h1>Resultados</h1>";
    echo "<p><strong>Nombre:</strong> $nombre</p>";
    echo "<p><strong>Curso de Formación:</strong> $curso</p>";
    echo "<p><strong>Cubo del número:</strong> $cubo</p>";

    if ($cubo > 100) {
        echo "<p style='color: green; font-weight: bold;'>Eres muy afortunado</p>";
    }
} else {
    echo "Acceso no permitido.";
}
?>
