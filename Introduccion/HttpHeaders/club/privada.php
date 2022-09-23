<?php
    $permisoValido = $_GET['dejameEntrar'] ?? 0 ;

    if (1 == $permisoValido){
        echo "Bienvenido";
    } else {
        //redireccionar
        header('Location: login.php');
    }
?>