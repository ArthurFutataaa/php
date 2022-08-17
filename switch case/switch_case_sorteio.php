<?php

//SWITCH: recebe um valor como parametro, e verifica se ele atende a alguma das condições especificadas em caso positivo, o trecho de codigo relacionado a essa condição é executado. 

//Diferente da estrutura ifelse, o switch avalia apenas condições de igualdade, ou seja, ela verifica se o valor recebido com parametro é igual a alguma das condições especificadas em seu corpo. Esse comportamento equivale a ultização dos varios if/else em sequencia, porém em uma sintese mais enxuta e de facil leitura.

$sorteio = rand(0, 5);

switch($sorteio){
    case 0:
        echo "Número 0";
        break; //comando de parada
    case 1:
        echo "Número 1";
        break;
    case 2:
        echo "Número 2";
        break;
    case 3:
        echo "Número 3";
        break;
    case 5:
        echo "Número 5";
        break;
    default: 
        echo "Número 4";
        break;   
}

?>