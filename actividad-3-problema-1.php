<?php
$numero=intval(readline("ingresa un numero: \n"));

    if ($numero>0):
        echo "el numero que usted ingreso es positivo";
    elseif ($numero == 0):
        echo "el numero que usted ingreso es 0";
    elseif($numero < 0):
        echo "el numero que usted ingreso es negativo";
endif;
?>