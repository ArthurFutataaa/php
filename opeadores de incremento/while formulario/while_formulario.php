<?php

$n1 = $_GET ['n1'];
$n2 = $_GET ['n2'];
$incremento = $_GET ['incremento'];

if ($n1<$n2){
   $contador=$n1;
   while($contador <= $n2){
   echo $contador . "<br>";
   $contador = $contador+$incremento;
    }
}
else{
    $contador=$n1;
    while($contador >= $n2){
    echo $contador . "<br>";
    $contador = $contador-$incremento;
    }
}
?>