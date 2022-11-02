<?php
// Estrutura de repetição While

$produtos = array("Microsystem", "Impressora", "Scanner");
$indiceprod = 0; // variável que será usada como condição de parada
while ($indiceprod < 3) { // teste da condição de parada
    echo "Produto de índice $indiceprod: $produtos[$indiceprod].<BR>";
    $indiceprod++; // incremento da variável testada na repetição
}
?>