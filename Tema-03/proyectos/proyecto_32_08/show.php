<?php


//Cargar librerias
require_once 'libs/functions.php';


// Obtener el indice del libro a editar desde la URL
// show.php?indice=0 - edito el  primer libro
$indice = htmlspecialchars($_GET['indice'] ?? null);

// Cargar el array de articulos
$Articulos = get_articulos();

//obtenemos el libro a editar
$Articulos=$Articulos[$indice];

// Cargo la vista de edición con los detalles del libro a editar
require_once'views/show.view.php';

?>