<html>
    <head>
            <meta charset="utf-8">
    </head>
    <body>

        <?php if(!isset($_GET['editar'])){ ?>

            <form method="POST" action="processa_curso.php">
                <label> Nome:</label>
                <input type="text" name="nome" placeholder="Digite o nome do curso"></br></br>
                <label>Descrição:</label>
                <input type="text" name="descricao" placeholder="Digite a descrição do curso"></br></br>
                <label> Carga Horária:</label>
                <input type="text" name="carga_horaria" placeholder="Digite a carga horária do curso"></br></br>
                <label> Área:</label>
                <input type="text" name="area"placeholder="Digite a área do curso"></br></br>

                <input type="submit" value="CADASTRAR">
            </form>

            <?php }else{ ?>         
                       
                       
                       <?php include 'conexao.php'; 
                       $consulta = "SELECT * FROM cursos";
                       $consulta2 = mysqli_query($conexao, $consulta);

                       while($linha = mysqli_fetch_array($consulta2)){ ?>
                           <?php if($linha['codigo'] == $_GET['editar']){ ?>
               <form method="POST" action="edita_curso.php">
                   <input type="hidden" name="codigo" value="<?php echo $linha['codigo']; ?>">
                   <label> Nome do curso:</label>
                   <input type="text" name="nome" value="<?php echo $linha['nome']; ?>"></br></br>
                   <label> Descrição:</label>
                   <input type="text" name="descricao" value="<?php echo $linha['descricao']; ?>"></br></br>
                   <label> Carga Horária:</label>
                   <input type="text" name="carga_horaria" value="<?php echo $linha['carga_horaria']; ?>"></br></br>
                   <label> Área:</label>
                   <input type="text" name="area" value="<?php echo $linha['area']; ?>"></br></br>

                   <input type="submit" value="EDITAR">
               </form>
       <?php } ?>  <!--FECHA CHAVE DO IF-->
   <?php } ?> <!--FECHA CHAVE DO WHILE-->
<?php } ?> <!--FECHA CHAVE DO ELSE-->
</body>
</hmtl>