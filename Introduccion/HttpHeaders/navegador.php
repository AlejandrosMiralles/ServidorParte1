<?php
    $navegador = $_SERVER['HTTP_USER_AGENT'];

    if ( strpos($navegador, 'firefox') === false){
        $contenido = '<script>alert("Alerta!! No estas en firefox");</script>';
    } else {
        $contenido = '<p>Felicidades!! Puedes ver el contenido</p>';
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
    <? $contenido ?>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?= $contenido ?>
</body>
</html>