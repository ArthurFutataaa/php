<!--
O for é a estrutura de repetição do PHP que ultilizamos quando sabemos a quantidade de repetições que deverá ser executadas 

Sintaxe: 
for (valor do contador, condição, incremento/decremento){
//codigo
} 
-->

<?php

//contador de 0 a 10

for($contador = 0; $contador <= 10; $contador++){
echo $contador . "</br>";
}

?>

<?php

$parar = 9;

for($contador = 0; ; $contador++) {
    if($contador == $parar){
        break;
    }

echo $contador . "</br>";
}
?>