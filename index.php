<?php
    header('Location: https://mrgames13.jimdofree.com/color-converter/info');
    exit;

    $lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0,2);
    $path = $_GET["p"];
    if(!isset($path)) $path = "";

    if($lang == "de") {
        header("Location: ./de/$path");
    } else if($lang == "fr") {
        header("Location: ./fr/$path");
    } else {
        // Default language
        header("Location: ./en/$path");
    }
    exit;
?>