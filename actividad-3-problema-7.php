<?php

// Solicitar al usuario que ingrese un número del 1 al 7
echo "Ingrese un número del 1 al 7: ";
$numero = readline();

// Verificar si el número ingresado está en el rango válido
if ($numero >= 1 && $numero <= 7) {
    //se deja en blanco para los casos
    $diaSemana = "";
    //case: caso en este caso es para decir, caso si coloca un 1 sale lunes y 
    //switch: cambiar esta para terminar y cambiar a otro caso
    //llama la variable numero para que cuando escriba un numero este este en los caso
    switch ($numero) {
        case 1:
            $diaSemana = "Lunes";
            break;
        case 2:
            $diaSemana = "Martes";
            break;
        case 3:
            $diaSemana = "Miércoles";
            break;
        case 4:
            $diaSemana = "Jueves";
            break;
        case 5:
            $diaSemana = "Viernes";
            break;
        case 6:
            $diaSemana = "Sábado";
            break;
        case 7:
            $diaSemana = "Domingo";
            break;
    }
    echo "El día de la semana es: " . $diaSemana;
} else {
    echo "Número inválido";
}

?>