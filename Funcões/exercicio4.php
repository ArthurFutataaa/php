<?php

/*  Faça um programa para enviar 2 valores para uma função através de 2 chamadas, e mostrar todos os números ímpares entre eles, em ordem decrescente. */


function verificar($v1, $v2){
    if($v1 > $v2){
        while ($v1 >= $v2){
            if ($v1 % 2 == 1){
                echo $v1 . "</br>";
            }
            $v1--;
        }
    }
    else{
        while($v2 >= $v1){
            if($v2 % 2 == 1){
                echo $v2 . "</br>";
            }
            $v2--;
        }
    }
}

echo verificar(10,52);

?>