<?php

/*
Proyecto: proyecto2.2 - calculadora básica
Descripción: Calculadora de operaciones básicas:
    -altura máxima
    -tiempo de vuelo
    -distancia horizontal
    -velocidad inicial y final

Daniel Copete
07-10-26

*/ 


// Modelo

// Negociado del controlador
// Recoger los valores del formulario
define("G", 9.81); //gravedad en m/s^2
// Obtenemos los valores del formulario 
$velocidad_inicial =  (float) $_POST['velocidad_inicial']?? 0;
$angulo_lanzamiento =  (float) $_POST['angulo_lanzamiento']?? 0;

// Convertimos el ángulo de grados a radianes
$angulo_radianes = deg2rad($angulo_lanzamiento);

// Calculamos la velocidad inicial horizontal
$velocidad_inicial_horizontal = $velocidad_inicial * cos($angulo_radianes);
// Calculamos la velocidad inicial vertical
$velocidad_inicial_vertical = $velocidad_inicial * sin($angulo_radianes);
//Calculamos el tiempo de vuelo del proyectil
$tiempo_vuelo = (2 * $velocidad_inicial_vertical) / G;
// Calculamos la altura máxima del proyectil
$altura_maxima = ($velocidad_inicial_vertical ** 2) / (2 * G);
// Calculamos la distancia horizontal del proyectil
$distancia_horizontal = $velocidad_inicial_horizontal * $tiempo_vuelo;

$operacion = "Resultado";

// Vista
include "views/resultado.view.php";