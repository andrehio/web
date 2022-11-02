<?php
// Estrutura Switch-Case

$categoriaproduto = "Vídeo";
switch ($categoriaproduto) {
    case "Vídeo":
        echo 'Bem-vindo ao setor de Vídeo.';
        break;
    case "Áudio":
        echo 'Bem-vindo ao setor de Áudio.';
        break;
    default:
        echo 'Bem-vindo ao setor geral.';
}
?>