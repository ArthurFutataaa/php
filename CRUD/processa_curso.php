<?php

include 'conexao.php';

    $nome = $_POST['nome'];
    $descricao = $_POST['descricao'];
    $c_horaria = $_POST['carga_horaria'];
    $area = $_POST['area'];

    $query = "INSERT INTO cursos(nome, descricao, carga_horaria, area)
                    VALUES('$nome', '$descricao', $c_horaria, '$area')";

    mysqli_query($conexao, $query);

    header('location: ver_curso.php');

?>