<?php
    //A partir de una cadena con las temperaturas de un mes, realiza la media e imprime las 5 temperaturas mínimas y las 5 máximas
    $cadenaInformativa = '21 23 324 234 234 12 12 57 234 76 423 3 234 35 234 35 24 6 546 654';

    //Realizar la media de temperaturas
    $temperaturasMensual = [];

    foreach(explode(" ", $cadenaInformativa) as $temperatura){
        $temperaturasMensual[] = $temperatura;
    }

    $numeroDeDias = count($temperaturasMensual);

    print 'La temperatura media del mes es de ' . 
        array_sum($temperaturasMensual) / $numeroDeDias .  
        ' celius.<br/>' ;

    //Imprimir las 5 temperaturas más altas y bajas
    rsort ($temperaturasMensual);

    echo "Temperaturas maximas: ";
    for ($i = 0; 5 >$i; ++$i){
        echo $temperaturasMensual[$i] . " ";
    }

    echo "<br/>Temperaturas minimas:";
    for ($i = $numeroDeDias - 1 ; $numeroDeDias - 5 <= $i; $i--){
        echo $temperaturasMensual[$i] . " ";
    }
?>