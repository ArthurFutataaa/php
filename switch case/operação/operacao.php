<?php

/* Faça um programa que receba um numero e uma operção via formulario, a operação  será representada por 1, 2 e 3. 
- Caso for 1, multiplique o valor por 2.
- Caso for 2, somar o valor com 10.
- Caso for 3, fazer o quadrado do valor.
- Caso for outro numero mostrar valor inicial.
*/

$valor = $_GET ['valor'];
$operacao = $_GET ['operacao'];

switch($operacao){
    case 1: 
        echo $valor*2;
        break; 
    case 2:
        echo $valor+10;
        break;
    case 3:
        echo $valor*$valor;
        break;
    default: 
        echo $valor;
        break;   
}
?>