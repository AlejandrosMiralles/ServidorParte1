<?php 
    //querystring
    $nombre = trim($_GET["nombre"] ?? "Alejandro", "/");
    echo "$nombre<br/>";



    //Mostrtar la longitud del parametro nombre
    echo strlen($nombre) . "<br/>";




    //Mostrar el nombre en mayusculas
    echo strtoupper($nombre) . "<br/>";




    //Mostrar el nombre en minuscula
    echo strtolower($nombre) . "<br/>";



    //Detectar si el nombre lleva un prefijo dado
    $prefijo = $_GET["prefijo"] ;

            /*He comprobado el tipo que devuelve prefijoValido y luego
                decido si es válido o no, pero todo esto se puede 
                resumir fácilmente con "===" 
                if ( 0 === $prefijoValido){ echo Es valido; }*/

    $prefijoValido = strpos($nombre, $prefijo) ;
        
    if ( gettype($prefijoValido) == "integer"){
        $prefijoValido = (0 == $prefijoValido) ? true : false;
    } 
    
    if ($prefijoValido) {
        echo "$nombre empieza por $prefijo" . "<br/>";
    }else{
        echo "$nombre no lleva el prefijo $prefijo" . "<br/>";
    }





    //Contar el número de "a" enb el nombre
    $letraEspecial = "a"; //Letra con la que se harán varios ejercicios
    $vecesLetraEncontrada = substr_count( strtolower($nombre) , 
                                            $letraEspecial);

    echo "Se ha repetido '$letraEspecial' un total de $vecesLetraEncontrada" .
                "<br/>";




    //Muestra la posición de $letraEspecial
    $posicionLetraEspecial = stripos($nombre, $letraEspecial);
    if (false === $posicionLetraEspecial){
        echo "$nombre no lleva ninguna $letraEspecial" . "<br/>";
    } else {
        echo "La primera posicion de $letraEspecial es $posicionLetraEspecial" .
                "<br/>";
    }
            


    // Sustituye las o por 0s
    echo str_ireplace("o", "0", $nombre) . "<br/><br/>";




    //Uso del parse_ulletraEspecial
    $url = "http://username:password@hostname:9090/path?arg=value";
    $urlFragmentada = parse_url($url); //Escribir la URL
    echo "El protocolo es $urlFragmentada[scheme]<br/>";
    echo "El nombre del usuario $urlFragmentada[user]<br/>";
    echo "El path de la url es $urlFragmentada[path]<br/>";
    echo "El querystring de la url es $urlFragmentada[query]<br/>";

?>