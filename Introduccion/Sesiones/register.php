<?php
    session_start();

    require "./biblioteca.php";

    if (isset($_POST['submit']) && $_SERVER['REQUEST_METHOD'] == 'POST' ){
        $errores = [];

        if(empty($_POST['nombre'])){
            $errores[] = "No se ha introducido un nombre!";
        }

        if(empty($_POST['password1']) && empty($_POST['password2'])){
            $errores[] = "No se ha terminado de introducir una contraseña!!";
        } else if( $_POST['password1'] != $_POST['password2']){
            $errores[] = "Las dos contraseñas deben coincidir";
        }
        
        if (empty($errores)){
            //Acceso a base de datos

            $pdo = accederALaBaseDeDatos();

            //Sacar usuario solicitado
            $nombreUserForm = $_POST['nombre'];
            $passwordUserForm = $_POST['password1'];



            $sentenciaDelUserDB = "SELECT username, email FROM users WHERE 
                        username='$nombreUserForm'  and password='$passwordUserForm' 
            ";
            $resultadoSentenciaUserDB = $pdo->query($sentenciaDelUserDB) ;

            $registroUser = $resultadoSentenciaUserDB -> fetch();
            //Comprobar que existe ese usuario
            if ( isset($registroUser['username']) ){
                echo "Usuario Correcto";
                //Registrandose como el usuario
                $_SESSION['nombre'] = $registroUser['username'];
                $_SESSION['email'] = $registroUser['email'];

                //Se redirige a la pagina que le envio ahi o a index
                volverALaPaginaInicial();

            } else {
                echo "El nombre o la contraseña son erroneas";
            }



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
    <h1>Registro</h1>
    <br/>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST" enctype="multipart/form-data">
        <p>Nombre: <input type="text" name="nombre" />  </p>
        <p>Password: <input type="password" name="password1" /> </p>
        <p>Confirm Password: <input type="password" name="password2" /> </p>
        <input type="submit" name="submit" value="Registrarse" />
    </form>
    <br/><br/>
    <a href=<?php
        echo '"login.php';
        if ( isset($_GET['returnToUrl'])){
            echo "?returnToUrl=" . $_GET['returnToUrl'] . '"' ;
        }else{
            echo '"';
        }
    ?> >Aun no tienes una cuenta?</a>
</body>
</html>