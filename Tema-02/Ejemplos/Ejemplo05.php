<?php
    $nombre = "Daniel";
    $apellidos = "Copete";
    $edad = 18;
    $poblacion = "Prado del Rey";
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hola Mundo</title>
</head>
<body>
    <h1>Ficha de Alumnos:</h1>
    <!-- Muestro los detalles del alumno -->
    <b>Nombre: </b><?= $nombre ?><br>
    <b>Apellidos: </b><?= $apellidos ?><br>
    <b>Edad: </b><?= $edad ?><br>
    <b>Población: </b><?= $poblacion ?><br>
</body>
</html>