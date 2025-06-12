<?php
    $nome =  "Pedro";
    $idade = 17;

    echo"O usuário ". $nome. " tem ". $idade. " anos <br>";

    if($idade >= 18){
        echo $nome." é maior de idade";
    }else{
        echo $nome." é menor de idade";
    }
?>