<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
</head>
<body>
    <h1>Hello world</h1>
    <ul><li>
        <a href="index.php">Inicio</a></li>
        <li>
            <a href="formulario.php">Formulario</a>
        </li>
    </ul>
    <?php
        $sql = "SELECT * FROM tareas";
        $stmt = $conn->prepare($sql);
        $stmt->execute();

        $stmt->sertFetchMode(PDO::FETCH_ASSOC);

        foreach ($stmt->fetchAll() as $sow)
        {
            echo "<li>" . $row['tarea'] . " " . $row['descripcion'] .  " " . $row['etiqueta'] . "</li>";
        }
    ?>
    
</body>
</html>