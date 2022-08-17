<?php

$sorteio = rand(10,55);
echo "O numero é: $sorteio";

echo "<br/>";

$parimpar = ($sorteio%2==0)? "O numero é par": "O numero é impar";
echo $parimpar;

?>
