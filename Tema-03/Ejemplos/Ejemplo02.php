<?php 

if (nota<0){
    echo "Nota no válida";
}
else if (nota<5)
{
    echo "Suspenso";
}
else if (nota<7)
{
    echo "Aprobado";
}
else if (nota<9)
{
    echo "Notable";
}
else
{
    echo "Sobresaliente";
}

?>