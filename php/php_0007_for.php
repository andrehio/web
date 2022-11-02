<?php
// Estrutura de repetição For

$produtos[0] = "Microsystem";
$produtos[1] = "Impressora";
$produtos[2] = "Scanner";
for ($indiceprod = 0; $indiceprod < 3; $indiceprod++) {
    echo "Produto de índice $indiceprod: $produtos[$indiceprod].<BR>";
}
?>