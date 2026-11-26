<?php

require_once __DIR__ . '/class/Libro.php';
require_once __DIR__ . '/class/TablaLibros.php';

$categorias = TablaLibros::getCategorias();

$etiquetas = TablaLibros::getEtiquetas();

include 'views/new.view.php';

?>