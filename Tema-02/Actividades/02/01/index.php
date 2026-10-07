<?php
/*
actividad 2.2.1
Descripción:
    - Multiplicar valor entero con una cadena que contiene un número inicial
    - Sumar valor entero con cadena con número inicial
    - Sumar valor entero con valor float
    - Concatenar valor entero con cadena
    - Sumar valor entero con valor booleano
Alumno: Daniel Copete
Fecha: 2026/10/07
*/

// Negociado de la aplicación - php

$entero1 = 5;
$cadena1 = "5";
$resultado1 = $entero1 * $cadena1;

$entero2 = 10;
$cadena2 = "5";
$resultado2 = $entero2 + $cadena2;

$entero3 = 8;
$float = 5.5;
$resultado3 = $entero3 + $float;

$entero4 = 7;
$cadena4 = " años";
$resultado4 = $entero4 . $cadena4;

$entero5 = 3;
$booleano = true;
$resultado5 = $entero5 + $booleano;

// Vista de la aplicación - html
include 'view.index.php';
?>

