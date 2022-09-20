<?php

$frutas = ["maça", "laranja", "limão"];
$legumes = ["batata", "abobora", "cenoura"];

$alimentos = array_merge($legumes, $frutas); //mistura dois ou mais vetores

echo var_dump($frutas);
echo var_dump($legumes);

echo "<h3>Mistura as duas tabelas</h3>";
echo var_dump($alimentos);
?>
