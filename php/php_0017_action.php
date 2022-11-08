<?php
        if (!isset($_POST) || empty($_POST)){
            echo "Não houve postagem via formulário.";
        }
        
        if(isset($_GET['enviar']) <> 'Enviar'){
            echo "Não houve postagem pelo botão enviar do formulário.";
        }

        $locomocao = isset($_GET['locomocao']) ? $_GET['locomocao'] :null;


        if ($_POST['enviar'] == 'Enviar'){
            foreach($_POST as $key => $value){
                if ($key <> 'locomocao' && $key <> 'uf'){
                    echo "$key: $value <br>";
                }
            }
            foreach ($_POST['locomocao'] as $key => $value){
                echo "Locomoção: $value <br>";
            }
        }
?>