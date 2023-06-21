<?php
$cantidad = intval(readline("Ingrese un numero \n"));
$NUMERO=10;
//primero es if despues elseif y pr ultimo else
if($cantidad < $NUMERO):
    echo "Es menor que diez\n";

elseif($cantidad == $NUMERO):
    echo "Es igual a diez\n";

else:
    echo "Es mayor a diez\n";
endif
?>