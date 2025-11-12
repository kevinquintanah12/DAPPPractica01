<?php
// Database connection
$db = new SQLite3('db/database.sqlite');

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $key = $_POST['key'];
    $name = $_POST['name'];
    $address = $_POST['address'];
    $phone = $_POST['phone'];

    // Insert the new employee record into the database
    $stmt = $db->prepare('INSERT INTO empleados (key, name, address, phone) VALUES (:key, :name, :address, :phone)');
    $stmt->bindValue(':key', $key, SQLITE3_TEXT);
    $stmt->bindValue(':name', $name, SQLITE3_TEXT);
    $stmt->bindValue(':address', $address, SQLITE3_TEXT);
    $stmt->bindValue(':phone', $phone, SQLITE3_TEXT);
    $stmt->execute();

    // Redirect to the read page after successful insertion
    header('Location: read.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/styles.css">
    <title>Crear Empleado</title>
</head>
<body>
    <h1>Crear Empleado</h1>
    <form method="POST" action="create.php">
        <label for="key">Clave:</label>
        <input type="text" id="key" name="key" required>
        <br>
        <label for="name">Nombre:</label>
        <input type="text" id="name" name="name" required>
        <br>
        <label for="address">Dirección:</label>
        <input type="text" id="address" name="address" required>
        <br>
        <label for="phone">Teléfono:</label>
        <input type="text" id="phone" name="phone" required>
        <br>
        <input type="submit" value="Crear Empleado">
    </form>
    <a href="read.php">Ver Empleados</a>
</body>
</html>