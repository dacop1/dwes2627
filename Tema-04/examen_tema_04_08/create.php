<?php

require_once __DIR__ . '/class/Libro.php';
require_once __DIR__ . '/class/TablaLibros.php';

// Recoger datos del formulario
$titulo = $_POST['titulo'] ?? null;
$fecha_publicacion = $_POST['fecha_publicacion'] ?? null;
$autor = $_POST['autor'] ?? null;

$categoria = isset($_POST['categoria'])
    ? (int) $_POST['categoria']
    : null;

$etiquetas = isset($_POST['etiquetas'])
    ? array_map('intval', $_POST['etiquetas'])
    : [];

$numero_paginas = isset($_POST['numero_paginas'])
    ? (int) $_POST['numero_paginas']
    : null;

$stock = isset($_POST['stock'])
    ? (int) $_POST['stock']
    : null;

$precio = isset($_POST['precio'])
    ? (float) $_POST['precio']
    : null;

// Crear nuevo libro
$libro = new Libro(
    6,
    $titulo,
    $fecha_publicacion,
    $autor,
    $categoria,
    $etiquetas,
    $numero_paginas,
    $stock,
    $precio
);

// Crear tabla y cargar libros de prueba
$tabla_libros = new TablaLibros();

$tabla_libros->tlibros = TablaLibros::addLibros();

// Añadir libro
$tabla_libros->create($libro);

// Obtener datos para la vista
$libros = $tabla_libros->tlibros;

$categorias = TablaLibros::getCategorias();

$etiquetas = TablaLibros::getEtiquetas();

include 'views/index.view.php';

?>