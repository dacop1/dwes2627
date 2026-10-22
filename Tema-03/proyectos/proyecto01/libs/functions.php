<?php
/*
library functions.php
funciones auxiliares para el proyecto

funciones incluidas:

*/ 

function get_libros(){
    $libros = [
        [   
            'id' => 1,
            'titulo' => 'El Quijote',
            'autor' => 'Miguel de Cervantes',
            'editorial' => 'Francisco de Robles',
            'genero' => ['Realismo mágico','Novela'],
            'precio' => 19.99,
        ],
        [
            'id' => 2,
            'titulo' => 'Cien años de soledad',
            'autor' => 'Gabriel García Márquez',
            'editorial' => 'Editorial Sudamericana',
            'genero' => ['Realismo mágico','Ficción'],
            'precio' => 24.99
        ],
        [
            'id' => 3,
            'titulo' => '1984',
            'autor' => 'George Orwell',
            'editorial' => 'Secker and Warburg',
            'genero' => ['Distopía','Ficción'],
            'precio' => 15.99
        ]
    ];
    return $libros;
}
?>