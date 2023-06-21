<?php
$nombre = strval (readline("Ingrese tu nombre \n"));

//primero es if despues elseif y pr ultimo else
if($nombre == "JUAN" Or $nombre == "juan"):
    echo "!Hola Juan¡\n";

elseif($nombre != "JUAN" or $nombre != "juan"):
    echo "Lo siento, no te conozco\n";
endif

?>