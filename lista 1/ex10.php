<?php
    $nome = "Pedro";
    $nome2 = "Alice";
    $nome3 = "Sofia";

    function boasVindas (string $nome): string{
        return "Bem Vindo(a) ". $nome ."<br>";
    }

    echo boasVindas ($nome);
    echo boasVindas ($nome2);
    echo boasVindas ($nome3);
?>