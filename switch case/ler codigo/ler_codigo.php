<?php

$codigo = $_GET ['codigo'];

switch($codigo){
    case 1: 
        echo "O codigo é $codigo ALIMENTO NÃO-PERECIVEL";
        break;
    case 2: 
    case 3: 
    case 4: 
        echo "O codigo é $codigo ALIMENTO PERECIVEL";
        break;  
    case 5: 
    case 6: 
        echo "O codigo é $codigo VESTUÁRIO";
        break;
    case 7:
        echo "O codigo é $codigo HIGIENE PESSOAL";
        break;
    case 8:
    case 9:
    case 10:
        echo "O codigo é $codigo LIMPEZA";
        break;
    default: 
        echo "O codigo é $codigo CODIGO INVÁLIDO";
        break;   
}

?>