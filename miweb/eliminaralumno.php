<?php
include 'conexion.php';

// DNI del profesor a eliminar
$dni_alumno = '22222222B';

// Consulta 1
$sql = "DELETE FROM ESTUDIANT  WHERE DNI = '$dni_alumno';";

// Ejecutar la consulta 1
$result = $conn->query($sql);

// Verificar si la consulta 1 fue exitosa
if ($result === false) {
    die("Error en la consulta: " . $conn->error);
}

// Consulta 2
$sql2 = "DELETE FROM MATRICULA  WHERE DNIEstudiant = '$dni_alumno';";

// Ejecutar la consulta 2
$result2 = $conn->query($sql2);

// Verificar si la consulta 2 fue exitosa
if ($result2 === false) {
    die("Error en la consulta: " . $conn->error);
}

// Consulta 3
$sql3 = "DELETE FROM PRESIDENT  WHERE DNIEstudiant = '$dni_alumno' or DNIPresident = '$dni_alumno';";

// Ejecutar la consulta 3
$result3 = $conn->query($sql3);

// Verificar si la consulta 3 fue exitosa
if ($result3 === false) {
    die("Error en la consulta: " . $conn->error);
}

// Si las consultas fueron exitosas, mostrar mensaje de éxito
if ($result && $result2 && $result3) {
    echo "El alumno con DNI $dni_alumno ha sido eliminado.";
}

// Cerrar la conexión
$conn->close();
?>
