<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table style="border: 2px solid #ccc">
        <thead>
            <tr>
                <th>Nome do aluno</th>
                <th>Idade</th>
                <th>Excluir</th>
                <th>Editar</th>
            </tr>
        
    </thead>

    <tbody>

    <?php

    include_once 'conexao.php';

    //Laço que percorrer o banco de transformar os dados em vetor
    while($linha = mysqli_fetch_array($consulta_aluno)){
        echo '<tr><td border: 1px solid #ccc;>' . $linha['NOME'] . '</td>';
        echo '<td>' . $linha['IDADE'] . '</td>';
    ?>

        <td><a href="deleta_aluno.php?ID = 
        <?php echo $linha['ID']; ?>">
        <input type="submit" value="DELETAR"/>
    </a></td></tr>

    <?php
    }
    ?>
    </tbody>
    </table>
</body>
</html>