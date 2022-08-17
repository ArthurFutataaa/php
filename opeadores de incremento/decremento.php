<!-- Operadores de Incremento 
- Pré Decremento: $a = a - 1 - --a (subtrai antes)
- Pós Decremento: $a = a -1 - a-- (subtrai depois) -->

<?php
$a = 0;
echo " O valor de a é $a e o novo valor é " . --$a;
?>

<?php
$a = 0;
echo "<br> O valor de a é $a";
$a--;
echo " e o novo valor é $a";
?>