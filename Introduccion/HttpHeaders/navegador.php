<php?
    $navegador = $_SERVER['SERVER_NAME'] ;
    print_r $navegador;

    if ($navegador != 'firefox'){
        $contenido = '<script>alert("Alerta, no estas usando Firefox");</script>';
    } else {
        $contenido = '<p>Felicidades!! Puedes ver el contenido';
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