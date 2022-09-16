<?php
    //Crear un array de nombres
    $nombres = ['Carlos', 'Josep', 'Ruben', 'Victor'];


    //Mostrar el numero de nombres. Tambien se puede usar count()
    echo 'Hay un total de ' . sizeof($nombres) . ' nombres<br/>';


    //Juntar el array en una cadena
    echo implode(' ', $nombres) . '<br/>';



    //Ordenar el array alfabeticamente
    asort($nombres);
    echo print_r($nombres) . '<br/>';


    //Reinvertir el array
    echo print_r(array_reverse($nombres)). '<br/>';


    //Busca un nombre en el array
    $miNombre = 'Victor';
    $posicion = array_search($miNombre, $nombres);

    if ($posicion === false){ print("No se encuentra $miNombre en la lista de nombres");}
    else { print("$miNombre se encuentra en la posicion $posicion");}



?>