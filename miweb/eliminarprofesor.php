<?php
include 'conexion.php';

// DNI del profesor a eliminar
$dni_profesor = '111111111E';

// Consulta 1
$sql = "DELETE FROM IMPARTEIX WHERE DNIProfessor = '$dni_profesor';";

// Ejecutar la consulta 1
$result = $conn->query($sql);

// Verificar si la consulta 1 fue exitosa
if ($result === false) {
    die("Error en la consulta: " . $conn->error);
}

// Consulta 2
$sql2 = "DELETE FROM PROFESSOR WHERE DNI = '$dni_profesor';";

// Ejecutar la consulta 2
$result2 = $conn->query($sql2);

// Verificar si la consulta 2 fue exitosa
if ($result2 === false) {
    die("Error en la consulta: " . $conn->error);
}

// Si las consultas fueron exitosas, mostrar mensaje de éxito
if ($result && $result2) {
    echo "El profesor con DNI $dni_profesor ha sido eliminado.";
}

// Cerrar la conexión
$conn->close();
?>
