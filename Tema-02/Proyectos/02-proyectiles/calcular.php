<?php

/*
Proyecto: proyecto2.1 - calculadora básica
Descripción: Calculadora de operaciones básicas:
    -suma 
    -resta 
    -división
    -multipicación 
    -potencia

Daniel Copete
05-10-26

*/ 



define("G", 9.81); // Constante de gravedad

//Obtenemos los valores del formulario
$velocidad_inicial = (float) $_POST['velocidad_inicial'];
$angulo_lanzamiento = (float) $_POST['angulo_lanzamiento'];


$angulo_radianes = deg2rad($angulo_lanzamiento); // Convertimos el ángulo a radianes

//Vista
include 'views/resultado.view.php';
?>