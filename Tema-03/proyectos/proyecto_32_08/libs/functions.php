<?php

function get_articulos() {
    $Articulos = [
        [
            "id" => 1,
            "descripcion" => "Teléfono móvil",
            "modelo" => "Samsung Galaxy S24",
            "categorias" => ["telefonía", "fotografía"],
            "unidades" => 15,
            "precio" => 699.99
        ],

        [
            "id" => 2,
            "descripcion" => "Cámara digital",
            "modelo" => "Canon EOS R50",
            "categorias" => ["fotografía"],
            "unidades" => 8,
            "precio" => 849.99
        ],

        [
            "id" => 3,
            "descripcion" => "Teléfono móvil",
            "modelo" => "iPhone 16",
            "categorias" => ["telefonía", "fotografía"],
            "unidades" => 12,
            "precio" => 899.99
        ]
    ];

    return $Articulos;
}



?>