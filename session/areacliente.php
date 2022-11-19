<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
    session_start();

    
    if((!isset ($_SESSION['usuario']) == true) and (!isset ($_SESSION['senha']) == true)){

        header('location:index.php');
    }

    $logado = $_SESSION['usuario'];
    ?>
</head>
<body>
    <?php
        echo "Você está na área de cliente";
    ?>
</body>
</html>


