<?php

$contador = 0;
$total = 0;

while($contador <= 100){
if ($contador%2==0){
    echo "numero $contador <br>";
    $total = $total + $contador;
    echo "soma $total <br>";
}

$contador++;
}

?>