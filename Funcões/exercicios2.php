<?php

/* Faça um programa que o usuário faça 3 chamadas de funções, e para cada chamada
verifique se o valor é par ou ímpar, e também fazer o fatorial. */

function valor($n){

if ($n%2==0) {
    echo "Seu número é par";
}
elseif ($n%2==1){
    echo "Seu número é impar";
}
else {
    echo "Seu número é igual a zero.";
}

$resultado = 1;
for($cont = $n; $cont > 1; $cont--)(
    $resultado = $resultado * $n;
    $n--;
)
echo "O fatorial é $resultado";
}


echo valor(12);

?>