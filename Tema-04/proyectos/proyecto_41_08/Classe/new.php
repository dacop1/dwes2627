
<?php

// Cargar clases
require_once __DIR__ . '/class/Articulo.php';
require_once __DIR__ . '/class/Tarticulos.php';


//Models no lo necesitamos no base de datos

//1. Cargar el array de marcas es metodo estatico no necesitamos crear un objeto de la clase Tarticulos
$marcas = Tarticulos::getMarcas();

//2. Cargar  el array de categorias
$categoria = Tarticulos::getCategorias();

// Views
include __DIR__ . '/views/new.view.php';


?>