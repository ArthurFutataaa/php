<?php

$n1 = $_GET ['n1'];
$n2 = $_GET ['n2'];

$media = ($n1+$n2)/2;

if ($media%2==0){
    echo"$media é PAR";
}
else{
    echo "$media é IMPAR";
}

?>