<?php

/*
Archivo: Tlibros.php
Descripción: Clase TablaLibros, se trata de un array de objetos de la clase Libro.
Características: POO sin encapsulamiento.
*/

class TablaLibros
{
    public array $tlibros;

    //Constructor
    public function __construct()
    {
        $this->tlibros = [];
    }

    // añadir libro (create)
    public function create(Libro $libro): void
    {
        $this->tlibros[] = $libro;
    }

    // leer libro(read)
    public function read(int $indice): ?Libro
    {
        return $this->tlibros[$indice] ?? null;
    }

    // actualizar libro(update)
    public function update(int $indice, Libro $libro): void
    {
        if (isset($this->tlibros[$indice])) {
            $this->tlibros[$indice] = $libro;
        }
    }

    // eliminar libro(delete)
    public function delete(int $indice): void
    {
        if (isset($this->tlibros[$indice])) {
            unset($this->tlibros[$indice]);
            $this->tlibros = array_values($this->tlibros);
        }
    }

    // libros de ejemplo (add libros)
    public static function addLibros(): array
    {
        return [

            new Libro(
                1,
                'Don Quijote de la Mancha',
                '1605-01-16',
                'Miguel de Cervantes',
                0,
                [0, 2],
                863,
                15,
                19.95
            ),

            new Libro(
                2,
                'La sombra del viento',
                '2001-04-12',
                'Carlos Ruiz Zafón',
                0,
                [1, 3],
                576,
                10,
                22.50
            ),

            new Libro(
                3,
                'El hobbit',
                '1937-09-21',
                'J.R.R. Tolkien',
                1,
                [0, 4],
                310,
                8,
                18.75
            ),

            new Libro(
                4,
                'Sapiens',
                '2011-01-01',
                'Yuval Noah Harari',
                2,
                [2, 3],
                496,
                12,
                24.95
            ),

            new Libro(
                5,
                'Clean Code',
                '2008-08-01',
                'Robert C. Martin',
                3,
                [1, 4],
                464,
                6,
                34.95
            )
        ];
    }

    // Categorías(getcategoria)
    public static function getCategorias(): array
    {
        return [
            0 => 'Novela',
            1 => 'Fantasía',
            2 => 'Historia',
            3 => 'Informática',
            4 => 'Ciencia'
        ];
    }

    // Etiquetas(getetiqueta)
    public static function getEtiquetas(): array
    {
        return [
            0 => 'Bestseller',
            1 => 'Nuevo',
            2 => 'Oferta',
            3 => 'Recomendado',
            4 => 'Clásico'
        ];
    }

    // Buscar posición mediante id
    public function getIndiceById(int $id): ?int
    {
        foreach ($this->tlibros as $indice => $libro) {

            if ($libro->id === $id) {
                return $indice;
            }
        }

        return null;
    }

    //recibe un array de indices de etquetas y devuelve un array de nombres de etiquetas correspondientes
    public function indice_etiquetas_a_nombres(array $indices): array
    {
        $nombres = [];
        foreach ($indices as $indice) {
            if (isset($this->getEtiquetas()[$indice])) {
                $nombres[] = $this->getEtiquetas()[$indice];
            }
        }
        return $nombres;
    }
}
