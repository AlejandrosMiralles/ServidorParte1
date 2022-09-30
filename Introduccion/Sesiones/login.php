<?php
    session_start();

    if (isset($_POST['submit']) && $_SERVER['REQUEST_METHOD'] == 'POST' ){
        $errores = [];

        if(empty($_POST['nombre'])){
            $errores[] = "No se ha introducido un nombre!";
        }

        if(empty($_POST['email'])){
            $errores[] = "No se ha introducida un email";
        }

        if(empty($_POST['password1']) && empty($_POST['password2'])){
            $errores[] = "No se ha terminado de introducir una contraseña!!";
        } else if( $_POST['password1'] != $_POST['password2']){
            $errores[] = "Las dos contraseñas deben coincidir";
        }

        
        if (empty($errores)){
            //Acceso a base de datos
            
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

            //Guardar nuevo usuario
            $nombreUser = $_POST['nombre'];
            $emailUser = $_POST['email'];
            $passwordUser = $_POST['password1'];

            $sentenciaInsertDB = "INSERT INTO users (username, email, password) VALUES (
                                    '$nombreUser', 
                                    '$emailUser',
                                    '$passwordUser'
            )";

            $pdo->exec($sentenciaInsertDB);

            //Registrate como usuario
            $_SESSION['nombre'] = $nombreUser;
            $_SESSION['email'] = $emailUser;

            //Se redirige a la pagina que le envio ahi o a index
            if ( isset($_GET['returnToUrl'])){
                header("Location: " . $_GET['returnToUrl'] . ".php") ;
            } else {
                header("location: index.php");
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
    <h1>Login</h1>
    <br/>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST" enctype="multipart/form-data">
        <p>Nombre: <input type="text" name="nombre" />  </p>
        <p>Email: <input type="text" name="email" /> </p>
        <p>Password: <input type="password" name="password1" /> </p>
        <p>Confirm Password: <input type="password" name="password2" /> </p>
        <input type="submit" name="submit" value="Registrarse" />
    </form>
    <br/><br/>
    <a href=<?php
        echo '"register.php';
        if ( isset($_GET['returnToUrl'])){
            echo "?returnToUrl=" . $_GET['returnToUrl'] . '"' ;
        }else{
            echo '"';
        }
    ?> >Ya tienes una cuenta?</a>
</body>
</html>