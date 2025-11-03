<?php
// Datos de conexión de Railway
$servername = "metro.proxy.rlwy.net"; // Host
$username   = "root";                  // Usuario
$password   = "LPzMIQcYcmOEuQVxwdFVAYMKreSoNtGq";   // Contraseña (haz clic en "show" en Railway para copiarla)
$database   = "railway";               // Nombre de base de datos
$port       = 33712;                   // Puerto

// Crear conexión
$conn = new mysqli($servername, $username, $password, $database, $port);

// Verificar conexión
if ($conn->connect_error) {
    die("❌ Conexión fallida: " . $conn->connect_error);
} else {
    echo "✅ Conexión exitosa a Railway MySQL";
}
?>
