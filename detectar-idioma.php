<?php 
    session_start();
    if (isset($_GET["languaje"])) {
        $_SESSION["languaje"] = $_GET["languaje"];
        header('Location:'.$_SERVER['HTTP_REFERER']);
    }
?>