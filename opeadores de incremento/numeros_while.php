<?php

$contador = 0;
$contador_impar = 100;

while($contador <= 100){

if ($contador%2==0){
    echo " O numero $contador é PAR <br>";
}
$contador++;
}

echo "<br>";

while($contador_impar >= 0){

    if ($contador_impar%2==1){
        echo "O nemro $contador_impar é IMPAR <br>";
    }
    $contador_impar--;
    }

?>