<?php

$a = ["verde", "vermelho", "azul", "roxo"];
$b = ["verde", "vermelho", "roxo"];

$c = array_diff($a, $b); //traz apenas oque é diferente do 1º vetor para os demais

print_r($c);
?>