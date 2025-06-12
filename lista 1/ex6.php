<?php
    $num1 = 7;
    $num2 = 5;
    $num3 = 9;
    $media = ($num1 + $num2 + $num3) / 3;
    
    echo"Nota 1: ". $num1. "<br>Nota 2: ". $num2. "<br>Nota 3: ". $num3 . "<br>Média do aluno: " . $media;
    if($media >= 7){
        echo "<br>Aluno aprovado!";
    } else {
        echo "<br>Aluno Reprovado!";
    }
?>