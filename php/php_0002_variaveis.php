<?php
$var = 'texto';
echo "Agora o tipo de dados é: " . gettype($var);
echo "<br>";
$var = 123;
echo "Agora o tipo de dados é: " . gettype($var);

//constante
const SAUDACAO = 'Hello World!';
echo "<br>";
echo SAUDACAO;

//Teste do xdebug
$a = array (3, 5 , array ("aaa", "bbb", "ccc"));
var_dump($a);

$preco = 100.75;
$barato = false;
var_dump($preco, $barato);

${'789'} = 'abc';
echo ${'789'};

?>