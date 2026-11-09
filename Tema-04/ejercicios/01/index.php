<?php

// Rutas absolutas
require_once __DIR__ . '/class/Alumno.php';

// Crear un objeto de la clase Alumno
$c1 = new Alumno(
    '1',
    'Juan',
    'García López',
    'Málaga',
    'juan@gmail.com',
    '600123456',
    '1DAW'
);

var_dump($c1);

$c1->getNombre();
echo '<br>';
$c1->getPoblacion();
echo '<br>';
$c1->getEmail();
echo '<br>';

$c2 = new Alumno();

var_dump($c2);

$c2->setNombre('María');
$c2->setPoblacion('Sevilla');
$c2->setCurso('2DAW');