<?php

require_once 'libs/functions.php';

$indice = $_GET['indice'];

$peliculas = get_peliculas();

$pelicula = $peliculas[$indice];

require_once 'views/edit.view.php';