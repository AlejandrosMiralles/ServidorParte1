<?php
    $array = ["Seguro","que","apruebo","esta","asignatura"];
    $arrayNumber = count(($array));

    for($i= 1; $arrayNumber > $i; $i++){
        echo "Particion n$i: ";

        print_r(array_slice($array, 0, $i));
        print_r(array_slice($array, $i - $arrayNumber, $arrayNumber - $i ));

        echo "<br/>";
    }
?>