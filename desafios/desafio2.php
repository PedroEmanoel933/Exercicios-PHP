<?php
    if($_SERVER ["REQUEST_METHOD"] === "POST"){
        if(isset($_POST["userCliente"], $_POST["produto"], $_POST["avaliacao"], $_POST["comentario"])){
            $usercliente = $_POST["userCliente"];
            $produto = $_POST["produto"];
            $avaliacao = $_POST["avaliacao"];
            $comentario = $_POST["comentario"];

            echo "Nome do cliente: ".  $usercliente . "<br>";
            echo "Produto: " . $produto . "<br>";
            echo "Avaliação: ". $avaliacao . "<br>"; 
            echo "Comentário: ". $comentario . "<br>";
        }
    }
?> 

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 2</title>
</head>
<body>
    <form method="post">
        <label for="userCliente">
            <p>Nome do Cliente</p>
            <input type="text" name="userCliente" id="userCliente">
        </label>

        <label for="produto">
            <p>Produto</p>
            <select name="produto" id="produto">
                <option>Selecione uma opção </option>
                <option value="xbox">Xbox Series X</option>
                <option value="ps5">Playstation 5</option>
                <option value="nintendo">Nintendo Switch</option>
            </select>
        </label>

        <label for="avaliacao">
            <p>Avaliação</p>
            <input type="radio" value="1 estrela" name="avaliacao"> 1 Estrela
            <input type="radio" value="2 estrelas" name="avaliacao"> 2 Estrelas
            <input type="radio" value="3 estrelas" name="avaliacao"> 3 Estrelas
            <input type="radio" value="4 estrelas" name="avaliacao"> 4 Estrelas
            <input type="radio" value="5 estrelas" name="avaliacao"> 5 Estrelas
        </label>

        <label for="comentario">
            <p>Comentário</p>
            <textarea name="comentario" id="comentario"></textarea> 
        </label>

        <button type="submit">Enviar</button>
    </form>
</body>
</html>