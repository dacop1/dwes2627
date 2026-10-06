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



// Modelo

//Negociado
//Recoger los valores  del formulario
$valor1 = (float) $_POST['valor1'];
$valor2 = (float) $_POST['valor2'];

//Realizar la operación de suma
$resultado = $valor1 + $valor2;


$operacion = "Suma";
//Vista
include 'views/resultado.view.php';
?>