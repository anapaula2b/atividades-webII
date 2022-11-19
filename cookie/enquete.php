<?php

    if (isset($_POST['fav_language'])){
        setcookie('fav_language', $_POST['fav_language']);
    };
    if (isset($_COOKIE['fav_language'])){
        echo "Você já enviou. O formulário só pode ser enviado uma vez";
    }
    else{
        include 'enquete.html';
    }
?>