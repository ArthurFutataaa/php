<?php 

$vetor = array(2, "Teste", "A", false, 10.5);

echo var_dump($vetor) . "</br></br>";

//Ponteiros: apontamos para uma posição do vetor
$p1 = current($vetor); //Aponta para o valor corrente (atual)
echo var_dump($p1) . "</br></br>";

$p2 = next($vetor); //Aponta para o próximo valor do vetor
echo var_dump($p2) . "</br></br>";


$p2 = next($vetor);
echo var_dump($p2) . "</br></br>";

$p3 = end($vetor); //Aponta para a última posição do vetor
echo var_dump($p3) . "</br></br>";

$p4 = prev($vetor); //Aponta para a posição anterior
echo var_dump($p4);

echo $vetor[2];
?>