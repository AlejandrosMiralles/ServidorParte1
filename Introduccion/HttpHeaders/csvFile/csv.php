<?php  
    header('Content-Type: application/csv');

    header('Content-Disposition: attachment; filename="productos.csv"');

    readfile('productos');
?>