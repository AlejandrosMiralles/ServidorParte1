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



    //Crea un array bidimensional de alumnos
    $alumnos = [
        [
            'id' => 1,
            'nombre' => 'pepe',
            'edad' => 9
        ], [
            'id' => 2,
            'nombre' => 'Alicia',
            'edad' => 10
        ], [
            'id' => 3,
            'nombre' => 'Juanita',
            'edad' => 10
        ]
    ]
    ;

    //Crear una tabla html que muestre el alterior array
    print("<table>");
    foreach($alumnos as $alumno ){
        print("<tr>");
        foreach($alumno as $clave => $dato){
            print("<th>$dato</th>");
        }
        print("</tr>");
    }
    print("</table>");



    //Crear un array indexado con los nombres
    print_r(array_column($alumnos, 'nombre'));


    //Hacer un array de numeros y sumarlos
    $arrayNumeros = [1, 2, 3, 4, 5, 6, 7, 8, 9 ,10];

    print '<br/>' . array_sum($arrayNumeros). '<br/>';
?>