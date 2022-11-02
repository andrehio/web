<?php
// Estrutura de repetição Do-While

$produtos = array("Microsystem", "Impressora", "Scanner");
$indiceprod = 0;
do {
    echo "Produto de índice $indiceprod: $produtos[$indiceprod].<BR>";
    $indiceprod++;
} while ($indiceprod < 3);
?>