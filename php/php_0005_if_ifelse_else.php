<?php
// Estrutura condicional 2

$categoriaproduto = "Áudio";
if ($categoriaproduto == "Vídeo"){
    echo 'Bem-vindo ao setor de Vídeo.' ;
}
elseif ($categoriaproduto == "Áudio") {
    echo 'Bem-vindo ao setor de Áudio.';
}
else{
    echo 'Bem-vindo ao setor geral.';
}
?>