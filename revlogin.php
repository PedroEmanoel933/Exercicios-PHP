<?php
    if($_SERVER['REQUEST_METHOD'] === "POST"){
        if(isset($_POST['userEmail'])){
            $userEmail = $_POST['userEmail'];
            echo $userEmail;
        }
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criar Conta</title>
</head>
<body>
        <form method="POST">
            </label><label>
                <p>Endereço de Email</p>
                <input type="email" name="userEmail" id="userEmail" placeholder="email@example.com">
                <button type="submit">Entrar</button>
        </form>
</body>
</html>