<?php

/* Faça um programa que tenha dois vetores numéricos de 3 posições cada
, e um terceiro vetor vazio. De acordo com uma operação escolhida
(+, -, *, /), Faça um cálculo entre os valores do primeiro com o segundo
vetor, e preencha o terceiro vetor, mostre os três vetores. */

    $vetor1 = [2, 3, 4];
    $vetor2 = [5, 6, 7];
    $vetor3 = [];
    $operacao = "+";

    for($i = 0; $i < count($vetor1); $i++){
        switch($operacao){
            case'+':
                $vetor3[] = $vetor1[$i] + $vetor2[$i];
                break;
            case'-':
                    $vetor3[] = $vetor1[$i] - $vetor2[$i];
                    break;
            case'*':
                    $vetor3[] = $vetor1[$i] * $vetor2[$i];
                        break;
            case'/':
                    $vetor3[] = $vetor1[$i] / $vetor2[$i];
                            break;
        }
    }
    echo var_dump($vetor1) . "</br></br>";
    echo var_dump($vetor2) . "</br></br>";
    echo var_dump($vetor3);
?>