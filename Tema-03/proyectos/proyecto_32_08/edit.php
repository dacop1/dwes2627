<?php

// Cargar librerías
require_once 'libs/functions.php';


// Negociado
// Obtener el indice del libro a editar desde la URL
// edit.php?indice=0 - edito el  primer libro
$indice = htmlspecialchars($_GET['indice'] ?? null);

//Cargar el array de libros
$Articulos = get_articulos();

// Obtenemos el libro a editar
$articulo = $Articulos[$indice];


//obtenemos el id del libro a editar
$articulo_id = $articulo['id'];

//obtenemos el array de categorias del libro a editar
$articulo_categorias = $articulo['categorias'];


//cargo la vista de edición con los detalles del libro a editar
require_once 'views/edit.view.php';