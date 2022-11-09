<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php if(isset($_GET['editar'])){?>

    <form method="POST" action="processa_aluno.php">
        <label>Nome: </label>
        <input type="text" name="nome" placeholder="Digite o nome"></br></br>
        <label>Idade: </label>
        <input type="number" name="idade" placeholder="Digite o idade"></br></br>
        <label>Altura: </label>
        <input type="numbe" name="altura" placeholder="Digite o altura"></br></br>
        <label>Escolaridade: </label>
        <input type="text" name="escolaridade" placeholder="Digite o escolaridade "></br></br>

        <input type="submit" value="CADASTRAR">

    <?php }else{ ?>

        <form method="POST" action="editar_Aluno.php">
            <?php include 'conexao.php';
                $consulta2 = mysqli_query($conexao, $consulta);

                while($linha = mysqli_fetch_array($consulta2)){
            ?>
            <?php if($linha['ID'] == $_GET['editar']){ ?>
            <input type="hidden" name="ID" value="<?php echo $linha ['ID']; ?>">
            <label>Nome: </label>
            <input type="text" name="nome" value="<?php echo $linha ['NOME']; ?>"></br></br>
            <label>Idade: </label>
            <input type="number" name="idade" value="<?php echo $linha ['IDADE']; ?>"></br></br>
            <label>Altura: </label>
            <input type="numbe" name="altura" value="<?php echo $linha ['ALTURA']; ?>"></br></br>
            <label>Escolaridade: </label>
            <input type="text" name="escolaridade" value="<?php echo $linha ['ESCOLARIDADE']; ?>"></br></br>

            <input type="submit" value="EDITAR">
        </form>
                <?php } ?> <!-- Fecha chave do IF -->
            <?php } ?> <!-- Fecha chave do WHILE-->
    <?php } ?> <!-- Fecha chave do ELSE-->
</body>
</html>