<!-- Operadores de Incremento 
- Pré Incremento: $a = a + 1 - ++a (soma antes)
- Pós Incremento: $a = a + 1 - a++ (soma depois) -->


<?php
$a = 0;
echo " O valor de a é $a e o novo valor é " . ++$a;
?>


<?php
$a = 0;
echo "<br> O valor de a é $a";
$a++;
echo "<br> O novo valor é $a";
?>