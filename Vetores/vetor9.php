<?php

$vetor = [
    "Carlos",
    "Ana",
    "Maria",
    "Wesley",
    "Gabriel"
];

echo var_dump($vetor);

echo "<h3>Ordem crescente</h3>";
asort($vetor); //ordena em ordem crescente
echo var_dump($vetor);

echo "<h3>Ordem decrescente</h3>";
rsort($vetor); //ordena em ordem decrescente
echo var_dump($vetor);
?>