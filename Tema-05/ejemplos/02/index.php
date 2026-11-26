<?php

declare(strict_types=1);
//conexion a la base de datos
$conexion = mysqli_connect("localhost", "user_dwes_tienda", "123456", "dwes_tienda");
//no hace falta comprobar si hay errores en la conexion, ya que en el caso de que no se pueda conectar, mysqli_connect() devuelve false y el script termina con un error fatal
//juego de caracteres utf8
$conexion->set_charset("utf8");
//consulta a la base de datos
$resultado = $conexion->query("SELECT * FROM producto");
//mostrar los resultados de la consulta
echo 'numero de filas: ' . $resultado->num_rows . '<br>';
//mostrar array de resultados
echo '<pre>';
print_r($array_productos);

var_dump($resultado);
?>