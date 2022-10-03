<?php
    function chequearSesionActiva(string $returnToUrl){
        if (! isset($_SESSION['nombre'])){
            header("Location: ./register.php?returnToUrl=" . $returnToUrl );
        }
    }

    function volverALaPaginaInicial(){
        if ( "" != $_POST["returnToUrl"]){
            header("Location: " . $_POST["returnToUrl"] . ".php") ;
        } else {
            header("location: index.php");
        }
    }

    function accederALaBaseDeDatos(){
        $opcionesAccesoBD = array(

            PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
        
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        
            PDO::ATTR_PERSISTENT => true
        
        );

        $pdo = new PDO(
            'mysql:host=localhost;dbname=registration; charset=utf8',
            'root',
            'sa',
            $opcionesAccesoBD
        );

        return $pdo;
    }
?>