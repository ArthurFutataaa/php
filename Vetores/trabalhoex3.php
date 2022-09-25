<?php

$par = 0;
$impar = 0;

for ($contador = 0; $contador <= 20; $contador++){
    if($contador%2!=0){
        $impar++;
   
    }
    else {
        $par++;
        
    }
}
echo "Quantia de ímpares: $impar" . "</br>";
echo "Quantia de pares: $par" . "</br>";
?>