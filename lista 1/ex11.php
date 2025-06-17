<?php

    $arr = [56, 14, 32, 86, 18];
    $soma = 0;
    $qtd = 1;

    forEach($arr as $values){
        $soma += $values;
        echo "Produto ". $qtd .": R$ ". $values . ",00 <br>";
        $qtd++;
    }
    echo "Total das compras: ". $soma;
?>