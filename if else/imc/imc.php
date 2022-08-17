<?php

$nome = $_GET ['nome'];
echo "o nome é: ", $nome;
echo "<br/>";

$altura = $_GET ['altura'];
$peso = $_GET ['peso'];
$imc = $peso/($altura*$altura);
echo "O IMC é: ", $imc;
echo "<br/>";

if ($imc < 18.5){
    echo "Esta abaixo do peso";
    echo "<br/>";
}
elseif($imc >= 18.5 && $imc < 25){
    echo "O peso está normal";
    echo "<br/>";
}
elseif($imc >= 25 && $imc < 30){
    echo "Esta com sobrepeso";
    echo "<br/>";
}
elseif($imc >= 30 && $imc < 35){
    echo "Esta com obesidade grau 1";
    echo "<br/>";
}
elseif($imc >= 35 && $imc < 40){
    echo "Esta com obesidade grau 2";
    echo "<br/>";
}
elseif($imc >= 40){
    echo "Esta com obesidade grau 3";
    echo "<br/>";
}
else{

}
?>