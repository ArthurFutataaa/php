<?php 
 
error_reporting(0);

$vetor = [2, 4, 6, 8, 10];
$valor1 = 0;
$valor2 = 0;

while($vetor[$valor1] != null){
   
    $vetor2[$valor2] = $vetor[$valor1]*$vetor[$valor1];


    $vetor[$valor1++];
    $vetor2[$valor2++];
}

asort($vetor2);

echo var_dump($vetor2);
?>