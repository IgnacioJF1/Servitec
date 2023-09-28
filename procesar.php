<?php
// Establecer la conexión a la base de datos (debes completar esto)
$servername = "localhost";
$username = "ignacio";
$password = "";
$dbname = "comenta";

$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

// Recuperar datos del formulario
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$telefono = $_POST['telefono'];
$email = $_POST['email'];
$Comentarios = $_POST['Comentarios'];

// Insertar datos en la base de datos
$sql = "INSERT INTO usuarios (nombre, apellido, telefono, email, Comentarios) VALUES ('$nombre', '$apellido', '$telefono', '$email', '$Comentarios')";

if ($conn->query($sql) === TRUE) {
    echo "Registro exitoso";
} else {
    echo "Error al registrar: " . $conn->error;
}

// Cerrar la conexión a la base de datos
$conn->close();
?>
