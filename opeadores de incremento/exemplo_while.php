<!-- Estrutura de Repetição - While:

- O propósito da declaração while (enquanto) é simples ele dirá ao PHP para executar as delarações repeticamente, enquanto a expessão no whileforem validas como verdadeira. O valor da expressão é checado cada vez que o laço é iniciado.

Sintaxe:

while (expressão){
    //codigo
}

while (expressão):
    //codigo
endwhile;
-->

<?php

$contador_soma = 0;
$contador_subtracao = 10;

while($contador_soma <= 10){
    echo $contador_soma . "<br>";
    $contador_soma++;
}

while($contador_subtracao >=0){
    echo $contador_subtracao . "<br>";
    $contador_subtracao--;
}

?>

