<?php
    include './data/config.php';
    session_unset();//to stock data temporalily and when you want to use data, you can pull data anypages
    session_destroy();
    header("Location: ".$baseName.'index.php');
    exit();
?>