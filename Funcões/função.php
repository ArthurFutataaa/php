<!-- Uma função é é uma pequena rotina nomeada que permite que certo algoritimo seja reutilizado pela aplicação, garantindo que seu codigo não sera duplicado, e que sua manutenção sera feita em apenas um lugar.
Uma função efetua uma tarefa específica, possivelmente processando um conjunto de valores fornecidos a ela (parâmetros) e/ou retornando algum valor -->

<?php
$operador = "+";

function soma ($v1, $v2){
    $soma = $v1 + $v2 ."</br>";

    return $soma;
}

echo "A soma é: " . soma(10, 5);

if($operador == "+"){
    echo soma(50, 10) ;
}
else{
    echo "Operador invalido";
}

switch ($operador){
    case '+':
        echo soma(10, 90);
        break;
    default:
        echo "Operador invalido";
        break;
}

?>    
