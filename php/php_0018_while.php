<?php
// implementar um programa em PHP para exibir na tela do navegador web os números primos entre 1 e 100.
$i = 1;
while ($i <= 100) {
    $primo = 1;
    for ($n = 2; $n < $i; $n++) {
        if ($i % $n == 0) {
            $primo = 0;
            break;
        }

    }
    if ($primo == 1)
        echo "$i ";
    $i++;
}

?>