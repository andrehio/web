<?php
        /* // imprimir todas as variaveis (OBS.: Dá erro no array)
        foreach ($_GET as $key => $value){
            echo "$key: $value <br>";
        } */

        /* // imprimir o array 'locomocao'
        foreach ($_GET['locomocao'] as $key => $value){
        echo "$key: $value <br>";
        } */

        // capturar um elemento de forma isolada
        $nome = $_GET['nome'];
        echo $nome
?>