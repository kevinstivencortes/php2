<?php
$numero=intval(readline("ingresa un numero: \n"));

    if ($numero % 400 == 0):
        echo "el año es bisiesto";
        
    else:
        $info = ($numero % 4 == 0 and $numero % 100 != 0) ? "el año es bisiesto." : "el año no es bisiesto.";
        echo "$info";
endif;
?> 