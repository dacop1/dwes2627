<?php

$velocidad_inicial = (float)($_POST['velocidad_inicial'] ?? 0);
$aceleracion = (float)($_POST['aceleracion'] ?? 0);
$tiempo = (float)($_POST['tiempo'] ?? 0);
$masa = (float)($_POST['masa'] ?? 0);

$velocidadFinal = $velocidad_inicial + ($aceleracion * $tiempo);

$espacioRecorrido = ($velocidad_inicial * $tiempo) +(0.5 * $aceleracion * $tiempo * $tiempo);

$fuerzaNeta = $masa * $aceleracion;

$energiaCinetica = 0.5 * $masa * $velocidadFinal * $velocidadFinal;

include 'views/view.resultado.php';

?>