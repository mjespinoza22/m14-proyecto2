<?php
include 'conexion.php';

// Consulta
$sql = "SELECT p1.DNI, p2.DNI, p2.Nom FROM PROFESSOR p1, PERSONA p2
        WHERE p1.DNI = p2.DNI AND LENGTH(p2.Nom) >= 7;";

// Ejecutar la consulta
$result = $conn->query($sql);

// Verificar si la consulta fue exitosa
if ($result === false) {
    die("Error en la consulta: " . $conn->error);
}

// Iniciar tabla
echo "<table>";
echo "<tr><th>DNI Profesor</th><th>Nombre Profesor</th></tr>";

// Mostrar resultados
while ($row = $result->fetch_assoc()) {
    echo "<tr>";
    echo "<td>" . $row['DNI'] . "</td>";
    echo "<td>" . $row['Nom'] . "</td>";
    echo "</tr>";
}

// Finalizar tabla
echo "</table>";

// Cerrar la conexión
$conn->close();
?>