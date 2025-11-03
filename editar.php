<?php
include 'conexion.php';

if (isset($_POST['idp']) && isset($_POST['nomp'])) {
    $idp = $_POST['idp'];
    $nomp = $_POST['nomp'];

    $sql = "UPDATE producto SET nomp='$nomp' WHERE idp='$idp'";
    if ($conn->query($sql) === TRUE) {
        echo "Registro actualizado correctamente";
    } else {
        echo "Error: " . $conn->error;
    }
} else {
    echo "Faltan datos (idp, nomp)";
}

$conn->close();
?>
