<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
</head>
<body>

<?php
echo"<table border = 1>";

$linha = 1;
while ($linha<=10){
    echo "<tr>";

$coluna = 1;
while($coluna <=5){
    echo"<td>Texto</td>";
    $coluna++;
}
echo "</tr>";
$linha++;
}
echo"</table>";
?>

</body>
</html>
