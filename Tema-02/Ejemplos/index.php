<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hola mundo</title>
</head>
<body>
    <h1>Primer hola mundo en PHP</h1>

    <?php
        echo "<p>Hola mundo desde PHP</p>";

        // Ejemplo adicional: fecha y hora
        date_default_timezone_set("Europe/Madrid");
        echo "<p>La fecha y hora actual es: " . date("d/m/Y H:i:s") . "</p>";

        // Ejemplo: variable y operación
        $a = 5;
        $b = 7;
        $suma = $a + $b;
        echo "<p>La suma de $a + $b es: $suma</p>";
    ?>
</body>
</html>
