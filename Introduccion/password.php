<?php
    //Hacer que esta funcion devuelva una contraseña con la cantidad de caracteres especificados de cada
    function rand_Pass($upper = 1, $lower = 5, $numeric = 3, $other = 2){
        $resultado = [];

        //Mayusculas
        $comienzoRango = 65;
        $finalRango = 90 ;

        $resultado = array_merge($resultado, 
            devolverCaracteresEspecificos($upper, $comienzoRango,
                                            $finalRango));
    
        //minusculas
        $comienzoRango = 97;
        $finalRango =  122;

        $resultado = array_merge($resultado, 
            devolverCaracteresEspecificos($upper, $comienzoRango,
                                            $finalRango));

        //numeros
        $comienzoRango = 48;
        $finalRango = 57 ;

        $resultado = array_merge($resultado, 
            devolverCaracteresEspecificos($upper, $comienzoRango,
                                            $finalRango));
        //otros
        $resultado = array_merge($resultado, devolverCaracteresNoAlfanumericos($other));
    
        shuffle($resultado);

        return implode($resultado);
    
    }

    function devolverCaracteresEspecificos($cantidad, $desdeElCarac, $hastaElCarac){
        $resultado = [];
        for($i = 0; $cantidad < $i; ++$i){
            $resultado = chr(rand($desdeElCarac, $hastaElCarac));
        }

        return $resultado;
    }

    function devolverCaracteresNoAlfanumericos($cantidad){
        $resultado = [];

        $i = 0;
        while ($cantidad < $i){
            $caracterASCII = rand(0, 126);

            $esUnNumero = 48 < $caracterASCII && 57 > $caracterASCII;
            $esUnaLetra = (65 < $caracterASCII && 90 > $caracterASCII) || 
                            (97 < $caracterASCII && 122 > $caracterASCII ) ;
            if (! $esUnNumero && ! $esUnaLetra ){
                $resultado = chr($caracterASCII);
                $i++;
            }
        }
    }

    echo rand_Pass();