<?php

/* Faça um programa que leia um dia da semana via formulario (1 a 7), e mostrar se é dia de ir pra escola ou não */

$dia = $_GET ['dia'];

switch($dia){
    case 1: 
    case 2: 
    case 3: 
    case 4: 
    case 5: 
        echo "Hoje é dia de ir pra escola";
        break;
    case 6: 
    case 7:
        echo "Hoje dia de não ir pra escola";
        break;
    default: 
        break;   
}
?>
