<?php

require_once 'libs/functions.php';

$indice = $_GET['indice'] ?? null;

$peliculas = get_peliculas();

if ($indice !== null) {
    unset($peliculas[$indice]);
}

require_once 'views/index.view.php';