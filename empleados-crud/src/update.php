<?php
// update.php

// Database connection
$db = new SQLite3('db/database.sqlite');

// Check if the ID is set in the URL
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Fetch the employee data
    $stmt = $db->prepare('SELECT * FROM empleados WHERE id = :id');
    $stmt->bindValue(':id', $id, SQLITE3_INTEGER);
    $result = $stmt->execute();
    $employee = $result->fetchArray(SQLITE3_ASSOC);
}

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $address = $_POST['address'];
    $phone = $_POST['phone'];

    // Update the employee record
    $stmt = $db->prepare('UPDATE empleados SET name = :name, address = :address, phone = :phone WHERE id = :id');
    $stmt->bindValue(':name', $name, SQLITE3_TEXT);
    $stmt->bindValue(':address', $address, SQLITE3_TEXT);
    $stmt->bindValue(':phone', $phone, SQLITE3_TEXT);
    $stmt->bindValue(':id', $id, SQLITE3_INTEGER);
    $stmt->execute();

    // Redirect to the read page after update
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
    <title>Actualizar Empleado</title>
</head>
<body>
    <h1>Actualizar Empleado</h1>
    <form action="" method="POST">
        <label for="name">Nombre:</label>
        <input type="text" id="name" name="name" value="<?php echo htmlspecialchars($employee['name']); ?>" required>
        
        <label for="address">Dirección:</label>
        <input type="text" id="address" name="address" value="<?php echo htmlspecialchars($employee['address']); ?>" required>
        
        <label for="phone">Teléfono:</label>
        <input type="text" id="phone" name="phone" value="<?php echo htmlspecialchars($employee['phone']); ?>" required>
        
        <button type="submit">Actualizar</button>
    </form>
    <a href="read.php">Volver a la lista de empleados</a>
</body>
</html>