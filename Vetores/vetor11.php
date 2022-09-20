<?php

echo "<h3>Elimina valores repetidos</h3>";

$vetor = array(
    "bob",
    13,
    "bob",
    "maria",
    33,
    false
);

echo var_dump($vetor);

$vetor = array_unique($vetor); //elimina valores duplicados
echo var_dump($vetor);

?>