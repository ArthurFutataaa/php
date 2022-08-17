<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
</head>
<body>

    <?php
    
    echo "<table border = 1>";

    for($linha = 1; $linha <= 10; $linha++){
        echo "<tr>";
    for($coluna = 1; $coluna <= 5; $coluna++){
        echo"<td>Texto</td>";
    }
        echo "</tr>";
    }
    

    echo "</table>";
    ?>

</body>
</html>