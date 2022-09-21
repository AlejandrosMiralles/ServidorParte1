<?php
    //Hacer que esta funcion devuelva una contraseña con la cantidad de caracteres especificados de cada
    function rand_Pass($upper = 1, $lower = 5, $numeric = 3, $other = 2){
        $resultado = [];

        //Mayusculas
        $comienzoRango = ord('A');
        $finalRango = ord('Z') ;

        $resultado = array_merge($resultado, 
            devolverCaracteresEspecificos($upper, $comienzoRango,
                                            $finalRango));
    
        //minusculas
        $comienzoRango = ord('a');
        $finalRango =  ord('z');

        $resultado = array_merge($resultado, 
            devolverCaracteresEspecificos($lower, $comienzoRango,
                                            $finalRango));

        //numeros
        $comienzoRango = ord('0');
        $finalRango = ord('9') ;

        $resultado = array_merge($resultado, 
            devolverCaracteresEspecificos($numeric, $comienzoRango,
                                            $finalRango));
        //otros
        $resultado = array_merge($resultado, 
                        devolverCaracteresNoAlfanumericos($other));
    
        shuffle($resultado);

        return implode($resultado);
    
    }

    function devolverCaracteresEspecificos($cantidad, $desdeElCarac, $hastaElCarac){
        $resultado = [];
        for($i = 0; $cantidad > $i; ++$i){
            $resultado[] = chr(rand($desdeElCarac, $hastaElCarac));
        }

        return $resultado;
    }

    function devolverCaracteresNoAlfanumericos($cantidad){
        $resultado = [];

        $i = 0;
        while ($cantidad > $i){
            $caracterASCII = rand(32, 126); //Los caracteres de fuera de ese rango los coge mal o lno los coge

            $esUnNumero = ord('0') < $caracterASCII && ord('9') > $caracterASCII;
            $esUnaLetra = (ord('A') < $caracterASCII && ord('Z') > $caracterASCII) || 
                            (ord('a') < $caracterASCII && ord('z') > $caracterASCII ) ;
            if (! $esUnNumero && ! $esUnaLetra ){
                $resultado[] = chr($caracterASCII);
                $i++;
            }
        }

        return $resultado;
    }

    echo rand_Pass();