<?php

$valor_h = 10;
$hora = 120;
$salario_bruto = $valor_h*$hora;
$sindicado = ($salario_bruto*3)/100;
$nss = ($salario_bruto*10)/100;

if ($salario_bruto > 900 && $salario_bruto <= 1500){
$desconto =  ($salario_bruto*5)/100;
}
elseif ($salario_bruto > 1500 && $salario_bruto <= 2500){
$desconto =  ($salario_bruto*10)/100;
}
elseif ($salario_bruto >= 2500){
$desconto =  ($salario_bruto*20)/100;
}
else{
$desconto = 0;
}

$salario = $salario_bruto - $sindicado - $nss - $desconto;
$total = $sindicado + $nss + $desconto;

echo "As horas trabalhadas são: $hora <br> 
O valor por hora é $valor_h <br> 
O salario Bruto é: $salario_bruto <br>
É  descontado $sindicado do sindicado <br>
É descontado $nss do nss <br>
O desconto é $desconto <br>
Sera descontado $total <br>
O salario com descontos é $salario";

?>