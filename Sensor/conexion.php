<?php

$servername = "localhost";
$username = "root"; // Cambia esto si tu nombre de usuario no es root
$password = "root"; // Cambia esto si tu contraseña no es root
$database = "greenhousedata";

// Establecer conexión con la base de datos
$conn = new mysqli($servername, $username, $password, $database);

// Verificar la conexión
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

// Variables para la temperatura y la humedad provenientes de Arduino
$temperature = $_GET['temperature'];
$humidity = $_GET['humidity'];

// Consulta SQL para insertar los datos en la tabla temperature_humidity
$sql = "INSERT INTO temperature_humidity (temperature, humidity) VALUES ('$temperature', '$humidity')";

// Ejecutar la consulta y verificar si se realizó correctamente
if ($conn->query($sql) === TRUE) {
    echo "Datos insertados correctamente en la base de datos.";
} else {
    echo "Error al insertar datos: " . $conn->error;
}

// Cerrar la conexión
$conn->close();

?>
