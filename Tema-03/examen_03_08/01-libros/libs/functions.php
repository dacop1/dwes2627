<?php

function get_peliculas()
{
    $peliculas = [

        [
            'id' => 1,
            'titulo' => 'Avatar',
            'idioma' => 'Inglés',
            'director' => 'James Cameron',
            'generos' => 'Ciencia ficción, Aventura',
            'año' => 2009,
            'duracion' => 162,
            'recaudado' => '2923,7 (M$)'
        ],

        [
            'id' => 2,
            'titulo' => 'Titanic',
            'idioma' => 'Inglés',
            'director' => 'James Cameron',
            'generos' => 'Drama, Romance',
            'año' => 1997,
            'duracion' => 194,
            'recaudado' => '2264,7 (M$)'
        ],

        [
            'id' => 3,
            'titulo' => 'Star Wars: Episodio IV - Una nueva esperanza',
            'idioma' => 'Inglés',
            'director' => 'George Lucas',
            'generos' => 'Ciencia ficción, Aventura',
            'año' => 1977,
            'duracion' => 121,
            'recaudado' => '1027,0 (M$)'
        ],

        [
            'id' => 4,
            'titulo' => 'Jurassic Park',
            'idioma' => 'Inglés',
            'director' => 'Steven Spielberg',
            'generos' => 'Ciencia ficción, Aventura',
            'año' => 1993,
            'duracion' => 127,
            'recaudado' => '1038,0 (M$)'
        ],

        [
            'id' => 5,
            'titulo' => 'The Avengers',
            'idioma' => 'Inglés',
            'director' => 'Joss Whedon',
            'generos' => 'Acción, Aventura',
            'año' => 2012,
            'duracion' => 143,
            'recaudado' => '1518,8 (M$)'
        ],

        [
            'id' => 6,
            'titulo' => 'Frozen',
            'idioma' => 'Inglés',
            'director' => 'Chris Buck, Jennifer Lee',
            'generos' => 'Animación, Aventura',
            'año' => 2013,
            'duracion' => 102,
            'recaudado' => '1276,5 (M$)'
        ],

  

    ];

    return $peliculas;
}

function obtener_id_nueva_pelicula($peliculas)
{
    $ultimo_id = 0;

    foreach ($peliculas as $pelicula) {
        if ($pelicula['id'] > $ultimo_id) {
            $ultimo_id = $pelicula['id'];
        }
    }

    return $ultimo_id + 1;
}