<?php

require_once __DIR__ . '/class/Libro.php';
require_once __DIR__ . '/class/TablaLibros.php';

// Recoger id
$id = isset($_GET['id']) ? (int) $_GET['id'] : 0;

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

// Crear libro actualizado
$libro_actualizado = new Libro(
    $id,
    $titulo,
    $fecha_publicacion,
    $autor,
    $categoria,
    $etiquetas,
    $numero_paginas,
    $stock,
    $precio
);

// Crear tabla y cargar libros
$tabla_libros = new TablaLibros();

$tabla_libros->tlibros = TablaLibros::addLibros();

// Buscar posición
$indice = $tabla_libros->getIndiceById($id);

if ($indice === null) {
    header('Location: index.php');
    exit;
}

// Actualizar libro
$tabla_libros->update($indice, $libro_actualizado);

// Obtener datos
$libros = $tabla_libros->tlibros;

$categorias = TablaLibros::getCategorias();

$etiquetas = TablaLibros::getEtiquetas();

// Mostrar listado
include 'views/index.view.php';

?>