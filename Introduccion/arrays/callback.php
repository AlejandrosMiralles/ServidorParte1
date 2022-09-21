<?php
/* Escribe un script php que calcule la longitud máxima y mínima de
    las cadenas de un array. Funciones a utilizar: 
    array_map — Aplica un callback a los elementos de los arrays 
    dados 
    max — Encontrar el valor más alto 
    min — Encontrar el valor más bajo 
*/

$cadenas = ["scf","scsdcnslcvjnsdf","scfgdfgdfbdff","f","sfcf","ssdvcf","sc346f"];

$longitudCadenas = array_map(function($cadena){
    return strlen($cadena);
}, $cadenas);

$max = max($longitudCadenas);
$min = min($longitudCadenas);

echo "Max: $max<br/>MIn: $min"

?>