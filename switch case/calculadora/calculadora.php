<?php

$v1 = $_GET ['v1'];
$v2 = $_GET ['v2'];
$operacao = $_GET ['operacao'];

switch ($operacao) {
    case 1:
        echo $v1+$v2;
        break;
    case 2:
        echo $v1-$v2;
        break;
    case 3:
        echo $v1*$v2;
        break;
    case 4:
        echo $v1/$v2;
        break;
    default:
        break;
}

?>