<?php
    session_start();

    if (! isset($_SESSION['nombre'])){
        echo "Has de registrarte";
        header("Location: ./register.php?returnToURL=asociados");
    } else {
        echo "No hizo falta logearte!!";
    }
?>

