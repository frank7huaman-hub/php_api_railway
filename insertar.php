<?php
include 'conexion.php';

if (isset($_POST['nomp'])) {
    $nomp = $_POST['nomp'];

    $sql = "INSERT INTO producto (nomp) VALUES ('$nomp')";
    if ($conn->query($sql) === TRUE) {
        echo "Registro insertado correctamente";
    } else {
        echo "Error: " . $conn->error;
    }
} else {
    echo "Faltan datos (nomp)";
}

$conn->close();
?>
