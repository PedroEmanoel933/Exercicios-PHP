<?php
    $usuario = [
        "Nome" => "Pedro",
        "Idade" => 17,
        "Email"=> "pedro@example.com",
    ];

    forEach( $usuario as $key => $value ){
        echo $key .": ". $value ."<br>";
    }
?>