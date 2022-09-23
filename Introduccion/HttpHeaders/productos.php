<?php
    $productos = ["1" => "Producto 1", "2" => "Producto 2", "3" => "Producto 3"];
    $id = $_GET['id'] ?? '-1';

    if (array_key_exists($id, $productos)){
        echo $productos[$id];
    } else {
        http_response_code(404);
        print( "Error " . http_response_code());
    }

?>