<?php

$vetor = [
    "nome" => "Emanuela",
    "rua" => "rua dos 7 anões",
    "peso" => "meio quilo",
    "cidade" => "Itu"
];

echo var_dump($vetor);

echo "<h3>Ordem decrescente</h3>";
ksort($vetor); //ordena pela quant de letras
var_dump($vetor);

echo "<h3>Ordem crescente</h3>";
krsort($vetor); 
var_dump($vetor);

?>