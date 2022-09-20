<?php 

$v = array("Café", "marrom", "cafeína");

echo var_dump($v) . "</br></br>";

list($bebida, $cor, $substancia) = $v; //list cria variáveis associadas a posição do vetor

echo "$bebida é $cor, e a $substancia o tona especial";
?>