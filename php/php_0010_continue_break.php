<?php
// Continue e Break

$produtos = array("Microsystem", "Impressora", "Scanner");
for ($indiceprod = 0; $indiceprod < 3; $indiceprod++) {
    echo "Produto de índice $indiceprod: $produtos[$indiceprod].<BR>";
    if ($produtos[$indiceprod] == "Microsystem")
        continue;
    if ($produtos[$indiceprod] == "Impressora")
        break;
}
?>