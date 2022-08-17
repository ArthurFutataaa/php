<?php

/* Exercicio 1 -- Faça um programa que execute 2 chamadas de funções,
para verificar se um numero é positivo, negativo ou igual a zero. */
 
function valor ($n){


    if ($n>0) {
        echo "Seu número é positivo";
    }
    elseif ($n<0){
        echo "Seu número é negativo";
    }
    else {
        echo "Seu número é iguala zero.";
    }
}

echo valor(12)

?>