<?php
$numero=intval(readline("ingresa tu calificacion: \n"));

    if ($numero >=60 and $numero < 89):
        echo "felicitaciones aprobaste\n";
    elseif ($numero < 60):
        echo "lamentablemente desaprobaste\n";
    elseif ($numero >= 90):
        echo "felicitaciones eres un estudiante sobresaliente\n";
endif;
?>