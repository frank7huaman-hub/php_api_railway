<?php
include 'conexion.php';

$sql = "SELECT * FROM producto";
$result = $conn->query($sql);

$productos = array();

while ($row = $result->fetch_assoc()) {
    $productos[] = $row;
}

header('Content-Type: application/json');
echo json_encode($productos);

$conn->close();
?>
