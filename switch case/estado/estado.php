<?php

$estado = $_GET ['estado'];

switch($estado){
    case 1: 
    case 2: 
    case 3: 
    case 4: 
    case 5: 
    case 6: 
    case 7:
        echo "Esse estado esta na região NORTE";
        break;
    case 8:
    case 9:
    case 10:
    case 11:
    case 12:
    case 13:
    case 14:
    case 15:
    case 16:
        echo "Esse estado esta na região NORDESTE";
        break;
    case 17:
    case 18:
    case 19:
        echo "Esse estado esta na região CENTRO-OESTE";
        break;
    case 20:
    case 21:
    case 22:
    case 23:
        echo "Esse estado esta na região SUDESTE";
        break;
    case 24:
    case 25:
    case 26:
        echo "Esse estado esta na região SUL";
        break;   
    default: 
        break;   
}
?>