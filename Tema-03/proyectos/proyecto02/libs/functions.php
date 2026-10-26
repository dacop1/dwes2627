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
            'descripcion' => 'Teclado mecanico',
            'modelo' => 'Teck',
            'editorial' => 'Francisco de Robles',
            'categorias' => ['Realismo mágico', 'Novela'],
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


//Funcion generar_tabla_categorias
function generar_tabla_categorias()
{
    return ['El Quijote', 'Cien años de soledad', '1984' ];
}

function obtener_id_nuevo_libro($libros = []){
    $ultimo_libro = end($libros);
    // Obtener el último elemento del array
    $ultimo_id = $ultimo_libro['id'];

    // Devolver el id del nuevo libro (ultimo id + 1)
    return $ultimo_id + 1;
}
