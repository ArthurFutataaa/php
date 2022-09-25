<?php
 error_reporting(0);

$vetor = [2,3, 4, 5, 6, 7, 8, 9];
$vetor2 = [2,3, 4, 5, 6, 7, 8, 9];
$valor = 0;
echo var_dump($vetor) . "</br></br>";
echo var_dump($vetor2) . "</br></br>";


while($vetor[$valor] != null){

$vetor3[$valor] = $vetor[$valor] + $vetor2[$valor];
if($valor == 0){
    echo "A soma de cada número dos vetores respectivamente:" . "<br></br>";
}
echo ($vetor3[$valor]);
echo "<br></br>";
$valor++;
}

$valor = 0;
while($vetor[$valor] != null){
    $vetor4[$valor] = $vetor[$valor] - $vetor2[$valor];
    if($valor == 0){
        echo "A subtração de cada número dos vetores respectivamente:" . "<br></br>";
    }
echo ($vetor4[$valor]);
echo "<br></br>";
$valor++;
}

$valor = 0;
while($vetor[$valor] != null){
    $vetor5[$valor] = $vetor[$valor] * $vetor2[$valor];
    if($valor == 0){
        echo "A multiplicação de cada número dos vetores respectivamente:" . "<br></br>";
    }
echo ($vetor5[$valor]);
echo "<br></br>";
$valor++;
}

$valor = 0;
while($vetor[$valor] != null){
    $vetor6[$valor] = $vetor[$valor] / $vetor2[$valor];
    if($valor == 0){
        echo "A divisão de cada número dos vetores respectivamente:" . "<br></br>";
    }
echo ($vetor6[$valor]);
echo "<br></br>";
$valor++;
}

array_push($vetor, 7); //Adiciona no final do vetor
array_push($vetor2, 7); //Adiciona no final do vetor
$p = end($vetor) * end($vetor2); //Aponta para a última posição do vetor
echo "A multiplicação dos dois ultimos valores acrescentados é:" . "<br></br>";
echo var_dump($p) . "</br></br>";

echo "Ordenando os vetores em ordem decrescente:" . "<br></br>";
rsort($vetor);
echo var_dump($vetor);
echo "<br></br>";
rsort($vetor2);
echo var_dump($vetor2);
echo "<br></br>";
rsort($vetor3);
echo var_dump($vetor3);
echo "<br></br>";
rsort($vetor4);
echo var_dump($vetor4);
echo "<br></br>";
rsort($vetor5);
echo var_dump($vetor5);
echo "<br></br>";
rsort($vetor6);
echo var_dump($vetor6);
echo "<br></br>";





?>