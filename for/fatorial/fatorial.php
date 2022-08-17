<?php

$n = $_GET ['n'];
$s = 1;

for($contador =  $n ; $contador >= 1; $contador--){
    $s = $s*$contador;
    }

echo $s;
?>