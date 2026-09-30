<?php

// Se declara la variable $var y se le asigna el valor NULL.
// Esto significa que la variable existe, pero no contiene ningún valor.
$var = null;

// is_null($var) comprueba si la variable es NULL.
// Como $var es NULL, esta condición se cumple.
if(is_null($var)){
    // Se muestra este mensaje porque la condición es verdadera.
    echo "La variable está vacía (NULL)<br>";
}else{
    // Este bloque no se ejecuta porque $var sí es NULL.
    echo "La variable tiene un valor<br>";
}

// Se declara la variable $var2 con valor entero 1.
$var2 = 1;

// var_dump() muestra el tipo de dato y su valor.
// En este caso imprimirá: int(1)
var_dump($var2);
echo "<br>";

// Se declara la variable $var1 con valor entero 10.
$var1 = 0;

// isset($var1) comprueba si la variable está definida y NO es NULL.
// Como $var1 está definida y tiene valor 10, la condición se cumple.
if(isset($var1)){
    echo "var1 está definida y NO es NULL<br>";
}else{
    // Este bloque no se ejecuta porque $var1 sí está definida y no es NULL.
    echo "var1 NO está definida o es NULL<br>";
}

//contro + ç se  comenta el código