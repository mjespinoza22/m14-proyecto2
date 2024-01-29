<?php
include 'conexion.php';

// Consulta
$sql = "SELECT p.Nom , e.DNI , e.DataNaixement  from ESTUDIANT e, PERSONA p 
    where (p.DNI =e.DNI )
and  e.DataNaixement <= '1993-12-31' 
order by e.DataNaixement DESC ;";

// Ejecutar la consulta
$result = $conn->query($sql);

// Verificar si la consulta fue exitosa
if ($result === false) {
    die("Error en la consulta: " . $conn->error);
}

// Iniciar tabla
echo "<table>";
echo "<tr><th>DNI Alumno</th><th>Nombre Alumno</th><th>Fecha Nacimiento</th></tr>";

// Mostrar resultados
while ($row = $result->fetch_assoc()) {
    echo "<tr>";
    echo "<td>" . $row['DNI'] . "</td>";
    echo "<td>" . $row['Nom'] . "</td>";
    echo "<td>" . $row['DataNaixement'] . "</td>";
    echo "</tr>";
}

// Finalizar tabla
echo "</table>";


// Cerrar la conexión
$conn->close();
?>