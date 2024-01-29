<?php
include 'conexion.php';

// Consulta
$sql = "SELECT * from ESTUDIANT e, BICICLETA b, PERSONA p  
        where e.IDBicicleta = b.ID and e.DNI =p.DNI ;" ;

// Ejecutar la consulta
$result = $conn->query($sql);

// Verificar si la consulta fue exitosa
if ($result === false) {
    die("Error en la consulta: " . $conn->error);
}

// Iniciar tabla
echo "<table>";
echo "<tr><th>DNI Alumno</th><th>Nombre Alumno</th></tr>";

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