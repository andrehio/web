<?php
// Variáveis mágicas

define("VALOR", 1000);
class carro
{
    var $_marca;
    var $_modelo;

    function __construct()
    {
        $this->_marca = "";
        $this->_modelo = "";

    }
    function nome()
    {
        return __CLASS__;
    }
    function metodo()
    {
        return __METHOD__;
    }
}

function dobro($valor)
{
    echo "<br>Função: " . __FUNCTION__;
    return 2 * $valor;
}

echo "Valor = " . VALOR;
echo "<br>Linha Atual= " . __LINE__;
echo " do script: " . __FILE__;
$c = new carro();
echo "<br>Classe: " . $c->nome();
echo "<br>Método: " . $c->metodo();
$d = dobro(VALOR);
echo "<br>Resultado: " . $d;
?>