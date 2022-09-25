<?php

error_reporting(0);

$n = $_POST ['numero'];
$vetor = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$valor = 0;
echo var_dump($vetor) . "</br></br>";

while($vetor[$valor] != null){

$mult[$valor] = $vetor[$valor] * $n;

echo ($mult[$valor]) . "<br></br>";

   $valor++;
}
$soma = array_sum($mult);
echo " A soma é: $soma";
?>
