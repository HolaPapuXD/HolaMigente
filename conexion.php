<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "login_prueba";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Obtener datos del formulario
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$edad = $_POST['edad'];
$email = $_POST['email'];

// Preparar y ejecutar la consulta SQL
$sql = "INSERT INTO personas (nombre, apellido, edad, email) VALUES ('$nombre', '$apellido', $edad, '$email')";

if ($conn->query($sql) === TRUE) {
    echo "Registro guardado exitosamente";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>