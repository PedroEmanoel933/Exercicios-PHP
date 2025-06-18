<?php
    if($_SERVER["REQUEST_METHOD"] === "POST"){
        if(isset($_POST["produto"], $_POST["categoria"], $_POST["preco"], $_POST["estoque"])){
            $produto = $_POST["produto"];
            $categoria = $_POST["categoria"];
            $preco = $_POST["preco"];
            $estoque = $_POST["estoque"];
            
            echo "PRODUTO: ". $produto . "<br>";
            echo "CATEGORIA: ". $categoria . "<br>";
            echo "ESTOQUE: " . $estoque . "<br>";
            echo "PREÇO: R$ " . $preco . "<br>";
        }
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 1</title>
</head>
<body>
    <form method="post">
        <label for="produto">
            <p>Produto</p>
            <input type="text" name="produto" id="produto">
        </label>

        <label for="categoria">
            <p>Categoria</p>
            <input type="text" name="categoria" id="categoria">
        </label>

        <label for="preco">
            <p>Preço</p>
            <input type="number" name="preco" id="preco">
        </label>

        <label for="estoque">
            <p>Quantidade em estoque</p>
            <input type="number" name="estoque" id="estoque">
        </label>

        <button type="submit">Enviar</button>
    </form>
</body>
</html>