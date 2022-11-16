<?php

    include 'conexao.php';

    $codigo = $_POST['codigo'];
    $nome = $_POST['nome'];
    $carga_horaria= $_POST['carga_horaria'];
    $descricao = $_POST['descricao'];
    $area = $_POST['area'];

    $consulta = "UPDATE cursos SET nome = '$nome',
                                  carga_horaria = $carga_horaria,
                                 descricao = '$descricao', 
                                area = '$area'
                                WHERE codigo = $codigo";

    mysqli_query($conexao, $consulta);

    header('location: ver_curso.php');
?>