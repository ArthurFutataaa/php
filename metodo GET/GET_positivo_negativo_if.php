<?php

$n1 = $_GET ['n1'];

if ($n1>0){
    echo "$n1 é POSÍTIVO";
}
elseif ($n1<0){
    echo"$n1 é NEGATIVO";
}
else{
echo"$n1 é igual a zero";
}

?>