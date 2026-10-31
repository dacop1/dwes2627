<?php

//Cargar librerias
require_once 'libs/functions.php';

//Extraer datos del formulario
$id = htmlspecialchars($_POST['id'] ?? '');
$descripcion = htmlspecialchars($_POST['descripcion'] ?? '');
$modelo = htmlspecialchars($_POST['modelo'] ?? '');
$categorias = htmlspecialchars($_POST['categorias'] ?? '');
$unidades = htmlspecialchars($_POST['unidades'] ?? '');
$precio = htmlspecialchars($_POST['precio'] ?? '');

$libros = get_articulos();

$new_articulo_id = obtener_id_nuevo_articulo($libros);

$new_articulo = [
    'id' => $new_articulo_id,
    'descripcion' => $descripcion,
    'modelo' => $modelo,
    'categorias' => explode(', ', $categorias),
    'unidades' => $unidades,
    'precio' => $precio
];

$Articulos[] = $new_articulo;

include 'views/index.view.php';