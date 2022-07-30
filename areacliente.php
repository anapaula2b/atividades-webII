<?php

    if (isset($_SESSION['login'])){
        
        echo "Você está na área de cliente";
    }
    
    else{
        echo "Você não está autorizado(a) a acessar esta página. Faça o login";
    }

?>