<?php
$nombre= strval(readline("Ingrese su nombre:\n"));
$edad=strval(readline("Ingrese su edad:\n"));

if($edad >= 18):
    ($licencia = strval(readline("$nombre ¿usted tiene licencia de conduccion?\n")));

    if ($licencia == "si" || $licencia == "SI"):
        echo "$nombre, usted puede conducir\n";
    elseif ($licencia =="no" || $licencia == "NO"):
        echo"$nombre, necesita una licencia para conducir\n";
    endif;
else:
    echo "$nombre, usted no tiene la edad para conducir";
endif
?>
