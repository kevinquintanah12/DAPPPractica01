<?php
// delete.php

// Database connection
$db = new PDO('sqlite:db/database.sqlite');

// Check if the ID is set in the URL
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Prepare the delete statement
    $stmt = $db->prepare("DELETE FROM empleados WHERE id = :id");
    $stmt->bindParam(':id', $id);

    // Execute the statement
    if ($stmt->execute()) {
        echo "Empleado eliminado con éxito.";
    } else {
        echo "Error al eliminar el empleado.";
    }
} else {
    echo "ID no especificado.";
}

// Redirect to the read page after deletion
header("Location: read.php");
exit();
?>