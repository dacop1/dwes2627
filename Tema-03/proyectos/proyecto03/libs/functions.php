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
            'generos' => ['Realismo mágico', 'Novela'],
            'precio' => 19.99,
        ],
        [
            'id' => 2,
            'titulo' => 'Cien años de soledad',
            'autor' => 'Gabriel García Márquez',
            'editorial' => 'Editorial Sudamericana',
            'generos' => ['Realismo mágico', 'Ficción'],
            'precio' => 24.99
        ],
        [
            'id' => 3,
            'titulo' => '1984',
            'autor' => 'George Orwell',
            'editorial' => 'Secker and Warburg',
            'generos' => ['Distopía', 'Ficción'],
            'precio' => 15.99
        ]
    ];

    return $libros;
}



function obtener_id_nuevo_libro($libros = []){
    $ultimo_libro = end($libros);
    // Obtener el último elemento del array
    $ultimo_id = $ultimo_libro['id'];

    // Devolver el id del nuevo libro (ultimo id + 1)
    return $ultimo_id + 1;
}
