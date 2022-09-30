<?php
    function chequearSesionActiva(string $returnToUrl){
        if (! isset($_SESSION['nombre'])){
            header("Location: ./register.php?returnToUrl=" . $returnToUrl );
        }
    }
?>