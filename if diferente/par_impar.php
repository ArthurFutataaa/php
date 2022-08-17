<?php

$n1=10;
$n2=20;

$media = ($n1+$n2)/2;
echo "A média é: ", $media;

echo "</br>";

$parimpar = ($media%2==0)? "O numero é par": "O numero é impar";
echo $parimpar;
?>