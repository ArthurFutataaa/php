<?php

$nome = $_GET['nome'];
$valor = $_GET['valor'];
$tipo = $_GET['tipo'];

echo "<br> O nome do produto é: $nome <br> O valor do produto é: R$$valor <br>";

if($tipo == 1){
    $desconto = ($valor*9)/100;
    $total = $valor - $desconto;
    echo "Você tem 9% de desconto, ou seja, R$$desconto <br> O valor total é R$$total";
}
elseif($tipo == 2){
    $desconto = ($valor*22)/100;
    $total = $valor - $desconto;
    echo "Você tem 22% de desconto, ou seja, R$$desconto <br> O valor total é R$$total";
}
elseif($tipo == 3){
    $desconto = ($valor*5)/100;
    $total = $valor - $desconto;
    echo "Você tem 5% de desconto, ou seja, R$$desconto <br> O valor total é R$$total";
}

?>

