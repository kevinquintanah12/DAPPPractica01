<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD Empleados</title>
    <link rel="stylesheet" href="../assets/styles.css">
</head>
<body>
    <div class="container">
        <h1>Gestión de Empleados</h1>
        <a href="create.php">Agregar Empleado</a>
        <a href="read.php">Ver Empleados</a>
        <a href="update.php">Actualizar Empleado</a>
        <a href="delete.php">Eliminar Empleado</a>

        <h2>Lista de Empleados</h2>
        <table>
            <thead>
                <tr>
                    <th>Clave</th>
                    <th>Nombre</th>
                    <th>Dirección</th>
                    <th>Teléfono</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $db = new SQLite3('db/database.sqlite');
                $result = $db->query('SELECT * FROM empleados');

                while ($row = $result->fetchArray(SQLITE3_ASSOC)) {
                    echo "<tr>
                            <td>{$row['clave']}</td>
                            <td>{$row['nombre']}</td>
                            <td>{$row['direccion']}</td>
                            <td>{$row['telefono']}</td>
                          </tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>