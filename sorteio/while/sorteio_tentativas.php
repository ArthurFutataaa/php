<?php

$tentativa = 0;

while(true) {
    $sorteio = rand(0, 100);
    $tentativa++;
    echo "O numero sorteado foi $sorteio </br>";

    if($sorteio == 37){
        echo "Chegou no 37 com $tentativa tentativas";
        break;
    }
}

?>