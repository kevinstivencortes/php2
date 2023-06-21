<?php
$numero=intval(readline("ingresa un monto:\n"));

    if ($numero >= 1000):
        $descuent = $numero * 0.90;
        echo "el descuento total es de $descuent\n";
    elseif ($numero >= 500 and $numero < 1000):
        $descuent = $numero * 0.95;
        echo "el descuento total es de $descuent\n";
    elseif ($numero < 500):
        echo " para ti no hay descuento\n";
endif;
?>