<?php 

    function moverArchivoAImagenes(array $archivoAMover){
        $rutaTemporal = $archivoAMover['tmp_name'];
        $rutaFinal = "./imagenes/" . $archivoAMover['name'];

        move_uploaded_file($rutaTemporal, $rutaFinal);

        return $rutaFinal;
    }

    if(isset($_POST["submit"]) && $_SERVER["REQUEST_METHOD"] == "POST"){
        $errores = [];
        
        //Comprobar que se ha introducido un nombre
        if (empty($_POST["nombre"])){
            $errores[] = "El campo nombre es obligatorio. Porfavor, introduzcalo";
        }

        //Comprobar que el correo es válido
        if (empty($_POST["correo"]) || ! filter_var($_POST["correo"], FILTER_VALIDATE_EMAIL)){
            $errores[] = "El campo correo es obligatorio y ser un email válido";
        } 

        //No se comprueba el nivel de educacion porque con <select> nos aserguramos de que siempre se especifique una opcion
    

        //Comprobar que se ha introducido alguna imagen
        //Por alguna razón siempre devuelve un array $_Files['avatar'], incluso si no se han introducido archivos 
        if (0 == $_FILES['avatar']['size']){
            $errores[] = "No se ha introducido ningun avatar";
        } 


        if (empty($errores)){
            $nombre = $_POST["nombre"];
            $email = $_POST["correo"]; 
            $educacion = $_POST['educacion'];
            $avatar = $_FILES['avatar'];

            $rutaAvatar = moverArchivoAImagenes($avatar);


            echo "$nombre; $email; $educacion; ";
            echo "Avatar: <img src=\"$rutaAvatar\" />";
        } else {
            print_r($errores);
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST" enctype="multipart/form-data">
        Nombre: <input type="text" name="nombre"/> 
        <br/>
        Email: <input type="text" name="correo" />
        <br/>
        Educacion: <select name="educacion">
            <option value="Secundaria"> ESO </option>
            <option value="Bachillerato"> Bachillerato </option>
            <option value="FP"> Formacion Profesional </option>
            <option value="Universidad"> Universidad </option>
            <option value="SinEstudios"> Sin estudios </option>
        </select>
        <br/>
        Avatar: <input type="file" name="avatar" />
        <br/>
        <input type="submit" name="submit" value="enviar" />
    </form>

</body>
</html>