<?php
// Variáveis dinamicas
$nome_var = "codigo";
$codigo = 9000;
echo "$nome_var = " . $$nome_var . "<br>";


$nomes = array("codigo", "nome", "cidade");
$cidade = "Vila Velha";
$var = "nomes";
echo ${ $nomes[2]} . "<br>";
echo ${ $var}[1];

?>