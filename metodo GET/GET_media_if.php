<?php

$n1 = $_GET ['n1'];
$n2 = $_GET ['n2'];

$media = ($n1+$n2)/2;

if ($media>=7){
    echo "A média é: $media, aluno APROVADO.";
}
else if ($media==6){
    echo "A média é: $media, aluno em RECUPERAÇÃO.";
}
else if ($n1<6){
echo "A média é: $media, aluno REPROVADO.";
}
else{}

?>