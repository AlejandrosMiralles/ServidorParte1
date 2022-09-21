<?php 
    //Ordwenar arrays asociativos
    $edades=array("Juan"=>"31","María"=>"41","Andrés"=>"39","Berta"=>"40");

    //por nombre ascendente
    
    ksort($edades);
    print_r($edades);

    //Por edad ascendente
    asort($edades);
    print_r($edades);

    //Por nombre desdcendente
    krsort($edades);
    print_r($edades);

    //Por edad desdendente
    arsort($edades);
    print_r($edades);
?>