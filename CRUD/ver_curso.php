<html>

    <head>
        <meta charset="utf-8">
    </head>
    <body>
        <table style="border: 2px solid #ccc;">
            <thead>
                <th>NOME DO CURSO</th>
                <th>DESCRIÇÃO</th>
                <th>CARGA HORARIA</th>
                <th>AREA</th>
                <th>EDITAR</th>
                <th>DELETAR</th>
            </thead>
            <tbody>
                <?php
                    include 'conexao.php';

                    $consulta = 'SELECT * FROM cursos';
                    $consulta_cursos = mysqli_query($conexao, $consulta);

                    while($linha = mysqli_fetch_array($consulta_cursos)){
                        echo '<tr><td>' . $linha['nome'] . '</td>';
                        echo '<td>' . $linha['descricao'] . '</td>';
                        echo '<td>' . $linha['carga_horaria'] . '</td>';
                        echo '<td>' . $linha['area'] . '</td>';
                ?>

                <td>
                    <a href="curso.php?editar=<?php echo $linha['codigo']; ?>">
                    <input type="submit" value="EDITAR">
                    </a></td>

                <td><a href="deleta_curso.php?codigo=<?php echo $linha['codigo']; ?>">
                <input type="submit" value="DELETAR"/>
                </a></td></tr>  

                <?php   
                    }
                ?>
            </tbody>
        </table>
    </body>
</html>