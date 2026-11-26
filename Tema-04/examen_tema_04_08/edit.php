<?php

require_once __DIR__ . '/class/Libro.php';
require_once __DIR__ . '/class/TablaLibros.php';

// Recoger id
$id = isset($_GET['id']) ? (int) $_GET['id'] : 0;

// Crear tabla
$tabla_libros = new TablaLibros();

$tabla_libros->tlibros = TablaLibros::addLibros();

// Buscar índice del libro
$indice = $tabla_libros->getIndiceById($id);

if ($indice === null) {
    header('Location: index.php');
    exit;
}

// Leer libro
$libro = $tabla_libros->read($indice);

// Obtener categorías y etiquetas
$categorias = TablaLibros::getCategorias();

$etiquetas = TablaLibros::getEtiquetas();

// Mostrar formulario
include 'views/edit.view.php';

?>