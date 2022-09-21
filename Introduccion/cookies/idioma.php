<?php
    $language = "";

    //Crea aquí tu script para seleccionar el idioma
    function setCookieEN(){ setcookie("language", "en"); }

    function setCookieES(){ setcookie("language", "es"); }

    $language = $_GET['setLanguage'] ?? $_COOKIE["language"] ?? 
                $_SERVER['HTTP_ACCEPT_LANGUAGE'];

    //Fin script

    if (str_starts_with($language, 'en')){

        $content = "This page is in English";

        $title = "Change the language of the page";

        if ($language == 'en'){ setcookieEN(); }

    }else{

        $content = "Esta página está en Castellano (Idioma por defecto)";

        $title = "Cambiar el idioma de la página";

        if ($language == 'es'){ setCookieES();}
    }

?>

<!doctype html>

<html lang="es">

<head>

    <meta charset="utf-8">

    <title><?= $title ?></title>

    <meta name="author" content="Víctor Ponz">

</head>    

<body>

    <ul><?= $title ?>

        <li><a href='idioma.php?setLanguage=es'>Español</a></li>

        <li><a href='idioma.php?setLanguage=en'>Inglés</a></li>

    </ul>

    <?= $content ?>

</body>

</html>