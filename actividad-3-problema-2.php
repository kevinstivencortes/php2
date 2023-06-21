<?php
$numero=intval(readline("ingresa un numero: \n"));
// % es para calcular el resto de una división.
    if ($numero % 2 == 0):
        echo "el numero que ingreso es par";
    elseif ($numero % 2 >0):
        echo "el numero que ingreso es impar";
    
endif;
?> 