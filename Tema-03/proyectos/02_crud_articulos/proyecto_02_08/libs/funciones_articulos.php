<?php

/*
    libreria : funciones_articulos.php
    Funciones auxiliares para el proyecto CRUD de articulos.

    Funciones incluidas:
        - get_articulos(): Devuelve un array con todos los articulos creados.
        - generar_tabla_categorias(): Devuelve un array con todas las categorias
*/

// Funcion get_articulos()
function get_articulos()
{
    // Array de artículos (simulando una base de datos)
    $articulos = [
        [
            'id'          => 1,
            'descripcion' => 'Teléfono móvil - Samsung Galaxy A54',
            'modelo'      => 'Samsung Galaxy A54 5G',
            'categoria'   => 'Telefonía',
            'unidades'    => 150,
            'precio'      => 349.99
        ],
        [
            'id'          => 2,
            'descripcion' => 'Tablet - Lenovo Tab M10',
            'modelo'      => 'Lenovo Tab M10 HD',
            'categoria'   => 'Tablet',
            'unidades'    => 100,
            'precio'      => 189.50
        ],
        [
            'id'          => 3,
            'descripcion' => 'Monitor LED - LG 24 pulgadas',
            'modelo'      => 'LG 24MP400-B',
            'categoria'   => 'Monitor',
            'unidades'    => 75,
            'precio'      => 129.95
        ],
        [
            'id'          => 4,
            'descripcion' => 'Teclado inalámbrico Logitech',
            'modelo'      => 'Logitech K270',
            'categoria'   => 'Periféricos',
            'unidades'    => 60,
            'precio'      => 29.95
        ],
        [
            'id'          => 5,
            'descripcion' => 'Ratón óptico inalámbrico HP',
            'modelo'      => 'HP 200 Wireless Mouse',
            'categoria'   => 'Periféricos',
            'unidades'    => 90,
            'precio'      => 19.99
        ]
    ];

    return $articulos;
}

//Funcion generar_tabla_categorias
function generar_tabla_categorias()
{
    return ['Portátil', 'PC sobremesa', 'Componente', 'Pantalla', 'Impresora'];
}

// Funcion get_indice_articulo_por_id
function get_indice_articulo_por_id($articulos, $id)
{
    foreach ($articulos as $indice => $articulo) {
        if ($articulo['id'] == $id) {
            return $indice;
        }
    }
    return false;
}
