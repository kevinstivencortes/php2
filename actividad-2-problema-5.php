<?php

echo "Ingrese el primer número: ";
$numero1 = intval(readline()); 

echo "Ingrese el segundo número: ";
$numero2 = intval(readline()); 

if ($numero1 > 10 && $numero2 > 10) {
    echo "Ambos números son mayores que 10";
} elseif ($numero1 > 10 || $numero2 > 10) {
    echo "Solo uno de los números es mayor que 10";
} else {
    echo "Ninguno de los números es mayor que 10";
}
?>
