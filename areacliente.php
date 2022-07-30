<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
    session_start();

    
    if((!isset ($_SESSION['login']) == true) and (!isset ($_SESSION['senha']) == true)){

        header('location:index.php');
    }

    $logado = $_SESSION['login'];
    ?>
</head>
<body>
    <?php

    if (isset($_SESSION['login'])){
        
        echo "Você está na área de cliente";
    }

    else{
        echo "Você não está autorizado(a) a acessar esta página. Faça o login";
    }

    ?>
</body>
</html>


