<?php 
    /* Tenemos un array asociativo con nombre => descripción Realiza un script php que ordene el array por la longitud de la descripción. */

    function ordenarCadenas ($cadena1, $cadena2){ //Por simplicidad solo ordenare por la cantidad de caracteres
        if (strlen($cadena1) > strlen($cadena2)){
            return -1;
        } elseif (strlen($cadena1) < strlen($cadena2)){
            return 1;
        } else {
            return 0;
        }
    }

    $arrayAsociativo=array("Juan"=>"Chico aplicado","Andrés"=>"Andrés","Berta"=>"Mujer con trabajo, hijos, casa propia, con felicidad");

    uasort($arrayAsociativo, "ordenarCadenas");

    echo print_r($arrayAsociativo);

?>