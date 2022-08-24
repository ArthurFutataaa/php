<?php
/*Exercicio 3 -- faça uma função que receba dois parâmentros, de salário e porcentagem de aumento do salário. Faça 3 chamadas da função, e a 
partir do salário e porcentagem de aumento, calcule o novo salário, e ao final mostre: salário, porcentagem de aumento e novo salário.  */

function valor($sal, $porc){
    $aumento = ($sal*$porc)/100;
    $n_sal = $sal+$aumento;

    echo "O salário é : " . $sal . "<br/>";
    echo "A porcentagem de aumento é de : " . $porc . "%<br/>";
    echo "O aumento é : " . $aumento . "<br/>";
    echo "O novo salário : " . $n_sal . "<br/>";
}

echo valor(1000, 2) . "<br/>";

$operador = "*";
if($operador == "*"){
    echo valor (1000, 2) . "<br/>";
}
else{
    echo "Operador inválido";
}

switch ($operador){
    case "*":
        echo valor(1000, 2) . "<br/>";
        break;
    default;
        echo "Operador inválido";
        break;
}


?>


