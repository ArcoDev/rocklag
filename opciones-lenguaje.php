<?php 
    if(empty($_SESSION["languaje"])) {
        $lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
        $_SESSION["languaje"] = $lang;
    }
    if(isset($_SESSION["languaje"])) {
        $lang = $_SESSION["languaje"];
    }
    switch ($lang) {
        case 'en':
            include("lenguaje/en.php");
            break;
        case 'es':
            include("lenguaje/es.php");
            break;
        default:
        include("lenguaje/es.php");
            break;
    }
?>