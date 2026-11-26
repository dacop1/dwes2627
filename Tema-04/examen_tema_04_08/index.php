<?php

require_once __DIR__ . '/class/Libro.php';
require_once __DIR__ . '/class/TablaLibros.php';

$tabla_libros = new TablaLibros();

$tabla_libros->tlibros = TablaLibros::addLibros();

$libros = $tabla_libros->tlibros;

$categorias = TablaLibros::getCategorias();

$etiquetas = TablaLibros::getEtiquetas();

include 'views/index.view.php';

?>