<?php

// Cargar librerías
require_once 'libs/functions.php';

// Negociado
// Obtener el índice del libro a actualizar desde la URL
$indice = htmlspecialchars($_GET['indice'] ?? null);

// Cargar el array de libros
$Articulos = get_articulos();

// Obtener el libro a actualizar
$articulo = $Articulos[$indice];

// Actualizar los datos del libro
$articulo['titulo'] = $_POST['titulo'] ?? $articulo['titulo'];
$articulo['descripcion'] = $_POST['descripcion'] ?? $articulo['descripcion'];
$articulo['precio'] = floatval($_POST['precio'] ?? $articulo['precio']);
$articulo['categorias'] = $_POST['categorias'] ?? $articulo['categorias'];

//cargar el array de articulos
$Articulos = get_articulos();

//Conserve el id original del articulo
$articulo_id = $articulo['id'];

//Actualizar el array de articulos con los nuevos datos
$Articulos[$indice] = [
    'id' => $articulo_id,
    'titulo' => $articulo['titulo'],
    'descripcion' => $articulo['descripcion'],
    'precio' => $articulo['precio'],
    'categorias' => $articulo['categorias']
];  


require_once 'views/index.view.php';
