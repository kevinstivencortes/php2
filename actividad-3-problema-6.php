<?php
$numero=intval(readline("ingresa tu calificacion: \n"));

    if ($numero >=90 and $numero < 100):
        echo "Felicitaciones tiene una calificacion, exelente\n";
    elseif ($numero >=80 and $numero < 89):
        echo "Felicitaciones tiene una calificacion, buena\n";
    elseif ($numero >=70 and $numero < 79):
        echo "Tienes una calificacion,regular\n";
    elseif ($numero >=60 and $numero < 69):
        echo "Tu calificacion es aprovatoria\n";
    elseif ($numero >=0 and $numero < 59):
        echo "Reprobaste\n";
endif;
?>