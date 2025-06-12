<?php
    $nome = "Pedro";
    $senha = 2121;

    echo "Nome do usuário: ".$nome;
    echo "<br>Senha: ".$senha;

    if($nome === "Pedro" and $senha === 2121) {
        echo "<br>Login Bem-sucedido!";
    }else {
        echo "<br>Login não sucedido!";
    }
?>