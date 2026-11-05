<?php

require_once 'libs/functions.php';

$indice = $_GET['indice'];

$titulo = $_POST['titulo'];
$idioma = $_POST['idioma'];
$director = $_POST['director'];
$generos = $_POST['generos'];
$año = $_POST['año'];
$duracion = $_POST['duracion'];
$recaudado = $_POST['recaudado'];

$peliculas = get_peliculas();

$peliculas[$indice] = [
    'id' => $peliculas[$indice]['id'],
    'titulo' => $titulo,
    'idioma' => $idioma,
    'director' => $director,
    'generos' => $generos,
    'año' => $año,
    'duracion' => $duracion,
    'recaudado' => $recaudado
];

require_once 'views/index.view.php';