<?php
    require "mediaponderada.php";

    $aluno = new Aluno();

    $aluno-> nome = "Pedro";
    $aluno-> idade = 17;
    $aluno-> matricula = 1234;
    $aluno-> nota1 = 9.0;
    $aluno-> nota2 = 8.0;
    $aluno-> peso1 = 2;
    $aluno-> peso2 = 3;
    

    $aluno -> caclcularMedia($aluno -> nota1, $aluno -> peso1, $aluno -> nota2, $aluno -> peso2);
    $aluno-> verificarAprovacao($media);
    $aluno -> exibirDados($aluno->nome, $aluno -> idade, $aluno -> matricula);
?>