<?php

$nome = $_GET['nome'];
$salario = $_GET['salario'];
$porcentagem = $_GET['porcentagem'];


echo "O nome é $nome";
echo "<br>";
echo "O salario atual é: $salario";
echo "<br>";

switch($porcentagem){
    case 0:
        echo "A quantidade de aumento é:", $aumento = ($salario*$porcentagem)/100;
        echo "<br>";
        echo "O novo salario é:",$novosalario = $aumento+$salario;
        break;
    case 10:
        echo "A quantidade de aumento é:", $aumento = ($salario*$porcentagem)/100;
        echo "<br>";
        echo "O novo salario é:",$novosalario = $aumento+$salario;
        break;
    case 25:
        echo "A quantidade de aumento é:", $aumento = ($salario*$porcentagem)/100;
        echo "<br>";
        echo "O novo salario é:",$novosalario = $aumento+$salario;
        break;
    case 33:
        echo "A quantidade de aumento é:", $aumento =($salario*$porcentagem)/100;
        echo "<br>";
        echo "O novo salario é:",$novosalario = $aumento+$salario;
        break;
    case 41:
        echo "A quantidade de aumento é:", $aumento = ($salario*$porcentagem)/100;
        echo "<br>";
        echo "O novo salario é:",$novosalario = $aumento+$salario;
        break; 
     case 50:
        echo "A quantidade de aumento é:", $aumento = ($salario*$porcentagem)/100;
        echo "<br>";
        echo "O novo salario é:",$novosalario = $aumento+$salario;
        break;   
    default: 
    
        break;   
}

?>