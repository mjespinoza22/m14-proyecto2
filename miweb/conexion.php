<?php
$servername = "192.168.124.133";
$username = "m14";
$password = "m14";
$database = "copia";

// Crear connexión
$conn = new mysqli($servername, $username, $password, $database);

// Comprobar connexión
if ($conn->connect_error) {
  die("Connexión fallida: " . $conn->connect_error);
}

// Seleccionar base de datos
if (!$conn->select_db($database)) {
    die("Selección de base de datos fallida: " . $conn->error);
  }

?>
