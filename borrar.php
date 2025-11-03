<?php
include 'conexion.php';

if (isset($_POST['idp'])) {
    $idp = $_POST['idp'];

    $sql = "DELETE FROM producto WHERE idp='$idp'";
    if ($conn->query($sql) === TRUE) {
        echo "Registro eliminado correctamente";
    } else {
        echo "Error: " . $conn->error;
    }
} else {
    echo "Faltan datos (idp)";
}

$conn->close();
?>
