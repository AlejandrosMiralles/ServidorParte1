<?php
//Usar un array asociativo (color -> su fichero html) con foreach

    $colores = [
        'blanco' => 'blanco.html',
        'verde' => 'verde.html',
        'rojo' => 'rojo.html',
    ];

    print('<ul>');
    foreach($colores as $color => $enlace){
        print("<li><a href='$enlace'>$color</a></li>");
    }
    print('</ul>');

?>