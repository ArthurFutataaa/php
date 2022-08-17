<?php

$sorteio = rand(0,50);

switch($sorteio){
    case ($sorteio%2==0):
        echo "O numero é $sorteio e é Par";
        break; 
    case 0:
        echo "O valor é $sorteio e é Nulo";
    default: 
        echo "O numero é $sorteio e é Impar";
        break;   
}

?>