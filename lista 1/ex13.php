<?php
    $produtos = [
        "Chocolate" => 8,
        "Biscoito" => 5,
        "Refrigerante" => 4  
    ];

    foreach($produtos as $key => $value){
        echo "Produto: ". $key. "<br>Preço: ". $value ."<br>"; 
    }
?>