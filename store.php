<?php
    include('conexion.php');

    if (count($_POST)>0){
        $tarea = $_POST['tarea'];
        $descripcion = $_POST['descripcion'];
        $etiqueta = $_POST['etiqueta'];

        $sql = "INSERT INTO tareas (tarea, descripcion, etiqueta) VALUES ('$tarea', '$descripcion', '$etiqueta')";

        $conn->exec($sql);

        //echo "<b>$tarea</b><br>";
        //echo "<b>$descripcion</b><br>";
        //echo "<b>$etiqueta</b><br>";

        header('location: formulario.php');
    }
    ?>
?>