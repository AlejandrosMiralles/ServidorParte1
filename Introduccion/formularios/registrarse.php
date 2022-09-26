<?php 
    if(isset($_POST["submit"]) && $_SERVER["REQUEST_METHOD"] == "POST"){
        $errores = [];
        $dominiosRegistrados = ["gmail.com", "ieselcaminas.org", "hootmail.com"];

        if (empty($_POST["nombre"])){
            $errores[] = "El campo nombre es obligatorio. Porfavor, introduzcalo";
        }

        //Comprobar que el correo es válido
        if (empty($_POST["correo"])){
            $errores[] = "El campo correo es obligatorio y debe ser de algún dominio comunmente usado";
        }

        if (empty($_POST['educacion'])){
            $errores[] = "No se ha introducido ningun nivel de educacion";
        }

        if (! isset($_FILES['avatar'])){
            
        }
    }
?>