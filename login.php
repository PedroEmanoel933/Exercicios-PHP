<?php
    if($_SERVER["REQUEST_METHOD"] === "POST"){ 
        if(isset($_POST["userEmail"])){
            $email = $_POST["userEmail"];

            echo $email;
        }
    }// SESSION = VAI VERIFICAR OQ TÁ ACONTECENDO NA PÁGINA
    //REQUEST_METHOD = VERIFICA O METODO DE REQUISIÇÃO
    //POST = METODO DE REQUISIÇÃO UTILIZADO
    // isset = VAI VERIFICAR SE NA VARIÁVEL NÃO TEM ALGO VAZIO.
    // $_POST = variável superglobal
    // $email = ESTÁ ARMAZENANDO O EMAIL DO USUÁRIO
    //"userEmail" = atributo name (id para backend)
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <form method="POST">
        <label for="userEmail">
            <p>Endereço de Email</p>
        </label>
        <input type="email" name="userEmail" id="userEmail" placeholder="email@example.com">
        <button type="submit">Entrar</button>
    </form>
</body>
</html>