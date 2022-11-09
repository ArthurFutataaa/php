<?php

    include 'conexao.php';

    $id = $_POST['ID'];
    $nome = $_POST['NOME'];
    $iddade = $_POST['IDADE'];
    $altura = $_POST['ALTURA'];
    $escolaridade = $_POST['ESCOLARIDADE'];

    $consulta = "UPDATE alunos SET NOME = $nome,
                                    IDADE = $idade,
                                    ALTURA = $altura,
                                    ESCOLARIDADE = $escolaridade
                                    WHERE ID = $id";
                
    mysqli_query($conexao, $consulta);
    
    header('location: ver_Aluno.php');

?>