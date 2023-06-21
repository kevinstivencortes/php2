<?php
$letra = readline("Ingresa una letra: ");

if ($letra == 'a' || $letra == 'e' || $letra == 'i' || $letra == 'o' || $letra == 'u') {
    echo "La letra ingresada es una vocal.";
}
elseif ($letra) {
    echo "La letra ingresada es una consonante.";
}
else {
    echo "No es una letra válida del alfabeto.";
}
?>
