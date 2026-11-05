<?php

require_once 'libs/functions.php';

// Extraer los datos enviados desde el formulario
$id        = (int)($_POST['id'] ?? 0);
$titulo     = htmlspecialchars($_POST['titulo'] ?? '');
$idioma     = htmlspecialchars($_POST['idioma'] ?? '');
$director   = htmlspecialchars($_POST['director'] ?? '');
$generos    = htmlspecialchars($_POST['generos'] ?? '');
$año        = (int)($_POST['año'] ?? 0);
$duracion   = (int)($_POST['duracion'] ?? 0);
$recaudado  = htmlspecialchars($_POST['recaudado'] ?? '');

// Obtener el array de películas existentes
$peliculas = get_peliculas();

// Generar nuevo ID correlativo
$ultimo_pelicula = end($peliculas);
$nuevo_id = $ultimo_pelicula ? $ultimo_pelicula['id'] + 1 : 1;

// Crear el array asociativo de la nueva película
$nueva_pelicula = [
    'id'         => $nuevo_id,
    'titulo'     => $titulo,
    'idioma'     => $idioma,
    'director'   => $director,
    'generos'    => $generos,
    'año'        => $año,
    'duracion'   => $duracion,
    'recaudado'  => $recaudado
];

// Añadir la nueva película al array principal
$peliculas[] = $nueva_pelicula;

// Cargar la vista principal
require_once 'views/index.view.php';