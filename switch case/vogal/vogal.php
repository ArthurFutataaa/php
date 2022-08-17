<?php

$letra = $_GET ['letra'];

switch($maiusculo = strtoupper($letra)){
    case 'A':
    case 'E':
    case 'I':
    case 'O':
    case 'U':
        echo "A letra é $maiusculo e é uma VOGAL";
        break;
    default: 
        echo "A letra é $maiusculo e é uma CONSOANTE";
        break;          
}

?>