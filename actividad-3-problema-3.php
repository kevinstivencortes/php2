<?php
$numero=intval(readline("ingresa un numero: \n"));

    if ($numero % 2 == 0 and $numero % 5 == 0):
        echo "el numero que ingreso es divisible por 3 y por 5";
    else:
        echo "el numero que ingreso no es dibisible por 3 ni por 5";
    
endif;
?> 