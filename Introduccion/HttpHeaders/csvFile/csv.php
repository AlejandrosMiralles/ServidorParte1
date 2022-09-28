<?php  
    header('Content-Type: application/csv');

    header('Content-Disposition: attachment; filename="productos.csv"');

    readfile('productos');

    $productos = ["1" => "Producto 1", "2" => "Producto 2", "3" => "Producto 3"];
    foreach ($productos as $id=> $productos){
        echo "$id;$valor";
    }
?>