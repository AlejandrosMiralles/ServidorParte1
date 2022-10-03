<?php
    session_start();
    session_unset();
    session_destroy();

    if (isset( $_GET['returnToUrl'])){
        header("Location: " . $_GET['returnToUrl'] . ".php");
    } else {
        header("Location: index.php");
    }
?>